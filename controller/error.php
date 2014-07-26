<?php
class Error extends controller {
    private $data;
    function __construct(){
        parent::__construct();
        $this->view->msg = 'This page doesnt exist';
        $this->view->render('error/index');
    }

}