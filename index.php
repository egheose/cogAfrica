<?php
$url = $_GET['url'];
$url = rtrim($url, '/');
$url = explode('/', $url);

print_r($url[0]) ;

$file = 'controller/' .$url[0] .'.php' ;
if(file_exists($file))
{
    require $file;
}

$controller = new $url[0];
$controller->set_data();
$controller->load("./view/v_login.php");

if (isset($url[2]))
{
    $controller->{$url[1]}($url[2]);
}else
{
    if(isset($url[1]))
    {
        $controller->{$url[1]}();
    }
}