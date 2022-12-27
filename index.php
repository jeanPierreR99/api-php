<?php
header("Content-Type: application/json;charset=utf-8"); 

require __DIR__ . "/inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
//method-get
//url = localhost//API-PHP/index.php/$getParams
if ((isset($uri[3]) && $uri[3] == 'getParams')) {
    require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";

$objFeedController = new UserController();
$strMethodName = 'getParams';
$objFeedController->{$strMethodName}();
}
//method-get
//url = localhost//API-PHP/index.php/getNotParams
else if ((isset($uri[3]) && $uri[3] == 'getNotParams')) {
    require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";

    $objFeedController = new UserController();
    $strMethodName = 'getNotParams';
    $objFeedController->{$strMethodName}();

}
//method-post
//url = localhost//API-PHP/index.php/post
else if((isset($uri[3]) && $uri[3] == 'post')) {
    require PROJECT_ROOT_PATH . "/Controller/Api/UserController.php";

    $objFeedController = new UserController();
    $strMethodName = 'post';
    $objFeedController->{$strMethodName}();
}
else{
    echo "ruta no encontrada";
    header("HTTP/1.1 404 Not Found");
    exit();
}

?>