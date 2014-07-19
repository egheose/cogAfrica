<?php
class Error extends controller {
    function __construct(){
        parent::__construct();

        $this->Views->msg = 'This page doesnt exist';
        $this->Views->render('error/index');
    }

}