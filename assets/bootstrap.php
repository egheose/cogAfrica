<?php
error_reporting(0);//comment out when in dev to see errors
class Bootstrap {
    function __construct(){
//get link url(controller) from browser
       $url = $_GET['url'];

//if url not set by user, set it to login page
        if(empty($url))
        {
            $url = 'login';
        }

            //variable to hold called controller
            $file = './controller/' .$url .'.php';

            //load controller if it exists
            if(file_exists($file))
            {
                include ($file);
                $controller = new $url();
                $controller->load("./view/" .$url .".php");
            }
            else{
                require 'controller/error.php';
                $controller = new Error();
            }
        }
    }
