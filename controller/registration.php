<?php
class registration extends Controller
{
    private $data;
    function __construct(){
        parent::__construct();
        //$this->set_data();
        $this->view->render('user/registration');
    }
}