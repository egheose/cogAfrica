<?php
//Displaying views etc

class login
{
    //private $nam=array('hm'=>'home','ab'=>'about us');
    private $data;
    //constructor (its doing nothing for now)
    function __construct(){}

    //Functions
    function load($url)
    {
        include($url);
    }

    //Set and Get data
    function set_data()
    {
        $this->data = array(
            'Home',
            'About',
            'Contact',
        );
    }
    function get_data()
    {
        if(isset($this->data))
        {
            echo '<ul class="navbar-left nav navbar-nav">';
            echo '<li><a class="navbar-brand" href="/">COG AFRICA</a></li>';
            for($i=0;$i<count($this->data);$i++){
                print_r('<li><a class="navbar-brand" href="controller/' .$this->data[$i] .'" >' .$this->data[$i] .'</a></li>');
            }
            echo '</ul>';
        }
        else
        {
            return "Inside Else Block";
        }
    }
}