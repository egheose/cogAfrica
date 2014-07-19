<?php
//Displaying views etc

class login
{
    private $data;
    //constructor (its doing nothing for now)
    function __construct(){}

    //Functions
    function load($url)
    {
        include($url);

    }
}