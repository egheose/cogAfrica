<?php
class Controller
{
    function __construct()
    {
        echo 'Main Controller';
        $this->Views = new view();
    }
}