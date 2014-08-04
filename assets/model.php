<?php
/**
 * Created by PhpStorm.
 * User: egheose
 * Date: 7/21/14
 * Time: 1:53 PM
 */

class model{
    function __construct(){
        $this->db = new Database();
    }
    public function render($name){
        require 'model/' .$name .'.php';
    }
}