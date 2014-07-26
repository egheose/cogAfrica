<?php
//error_reporting(0);//comment out when in dev to see errors
class Bootstrap {
    function __construct(){
//get link url(controller) from browser
       $url = isset($_GET['url']) ? $_GET['url'] : null;
       $url = rtrim($url,'/');
       $url = explode('/',$url);
        print_r($url);

//if url not set by user, set it to login page
        if(empty($url[0]))
        {
            //$url = 'login';
            require 'controller/home.php';
            $controller = new home();
            return false;
        }

            //variable to hold called controller
            $file = 'controller/' .$url[0] .'.php';

            //load controller if it exists
            if(file_exists($file))
            {
                require $file;$controller = new $url[0];
                $controller->load("./view/" .$url[0] .".php");
            }
            else{
                require 'controller/error.php';
                $controller = new Error();
                return false;
            }


        if(isset($url[2])){
            if(function_exists($url[1]))
            {
                $controller->{$url[1]}($url[2]);
            }

        }
        else{
            if(isset($url[1])){
                if(function_exists($url[1])){
                    $controller->$url[1]();
                }
            }
        }
        }
    }
