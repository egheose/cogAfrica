<?php
class Error extends controller {
    function __construct(){
        parent::__construct();

        $this->Views->render('error/index');
    }

}