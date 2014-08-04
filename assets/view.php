<?php
class view
{
    function __construct(){
    }

    public function render($name){
        include 'view/' .$name .'.php';
    }
}