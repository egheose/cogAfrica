<?php

class Bootstrap {
    function __construct(){
//get link url(controller) from browser
       $url = $_GET['url'];

//if url not set by user, set it to login
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
