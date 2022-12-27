<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
 
class UserModel extends Database
{
   //-------------------------------------------------method-get-not-params-----------------------------------------------------------------
    public function get_query_not_params(){
        return $this->consulta("call getUserAll(1,0,0)");
    }
    //-------------------------------------------------method-get-params--------------------------------------------------------------------
    public function get_query_params($mail,$pass){
        return $this->consulta("call loginUsers('$mail','$pass')");
    }
    //-------------------------------------------------method-post---------------------------------------------------------------------------
    public function post_query($arr=[]){
        $iten1=$arr['xxx'];
        $iten2=$arr['xxx'];
        $iten3=$arr['xxx'];
        $iten4=$arr['xxx'];
        $iten5=$arr['xxx'];
        $iten6=$arr['xxx'];
        $iten7=$arr['xxx'];
        $iten8=$arr['xxx'];
        $iten9=$arr['xxx'];
        $iten10=$arr['xxx'];
        $iten11=$arr['xxx'];
        $iten12=$arr['xxx'];
        $iten13=$arr['xxx'];
        $iten14=$arr['xxx'];
        $iten15=$arr['xxx'];
        $iten16=$arr['xxx'];

        $this->consultaPost("call postUser('$iten1','$iten2','$iten3','$iten4','$iten5','$iten6','$iten7','$iten8','$iten9','$iten10','$iten11','$iten12','$iten13','$iten14','$iten15','$iten16')");   
    }
    
}