<?php
//$url = $_GET['url'];
//$url = rtrim($url, '/');
//$url = explode('/', $url);

//print_r($url) ;

require './controller/login.php';// .$url .'.php' ;
/*if(file_exists($file))
{
    require $file;
}*/
//require $file;
$controller = new login();
$controller->set_data();
$controller->load("./view/v_login.php");

if (isset($url))
{
   // $controller->{$url[1]}($url[2]);
    $controller->$url();
}else
{
    if(isset($url))
    {
        $controller->{$url[1]}();
    }
}