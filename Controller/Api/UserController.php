<?php
class UserController
{
    public function getParams()
    {
        $requestMethod = $_SERVER["REQUEST_METHOD"];
 
        if (strtoupper($requestMethod) == 'GET') {

            $mail = $_GET['email'];
            $pw = $_GET['pass'];

                $userModel = new UserModel();
 
                    $arrUsers = $userModel->get_query_params($mail, $pw);
                    $responseData = json_encode($arrUsers);                   
        } 
        header("Content-Type: application/json;charset=utf-8"); 
        print_r($responseData); 
    }
    
    public function getNotParams(){
     
        $requestMethod = $_SERVER["REQUEST_METHOD"];
 
        if (strtoupper($requestMethod) == 'GET') {
       
                $userModel = new UserModel();
 
                    $arrUsers = $userModel->get_query_not_params();
                    $responseData = json_encode($arrUsers);                   
        } 
        header("Content-Type: application/json;charset=utf-8"); 
        print_r($responseData);
    }

    public function post(){
     
        $requestMethod = $_SERVER["REQUEST_METHOD"];
 
        if (strtoupper($requestMethod) == 'POST') {
       $postBody = file_get_contents("php://input");

       $json = json_decode($postBody,true);
  
       $userModel = new UserModel();

        $userModel->post_query($json);
       }
    }
}