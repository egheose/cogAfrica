<?php
error_reporting(0);
$url = $_GET['url'];

if (empty($url)) {
    // no data passed by get
    $url = 'login';
}
//print_r($url) ;
$file = './controller/' .$url .'.php';
//require './controller/login.php';
if(file_exists($file))
{
    include ($file);
    $controller = new $url();
    //$controller->set_data();
    $controller->load("./view/" .$url .".php");
}
else{ echo 'File not found'; echo $file;  }
