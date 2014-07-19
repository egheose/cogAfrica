<?php
class view
{
    function __construct(){
    echo "<br> We r in d view";
    }

    public function render($name){
        require 'view/' .$name .'.php';
    }
}