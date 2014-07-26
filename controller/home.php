<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/26/14
 * Time: 1:54 PM
 */

class home extends controller
{
    function __construct(){
        parent::__construct();
        $this->view->render('user/home');
    }
    function load(){

    }
} 