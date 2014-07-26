<?php
class view
{
    function __construct(){
    }

    public function render($name){
        require 'view/' .$name .'.php';
    }
}