<?php

$url = explode('/',$_GET['url']);

print_r($url);

require 'controller/' .$url[0] .'.php' ;
$controller = new $url[0];
$Template = new login();
$Template->set_data();
$Template->load("./view/v_login.php");