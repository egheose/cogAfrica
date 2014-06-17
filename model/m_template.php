<?php
//Displaying views etc

class Template
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
        //$this->data[$name]=htmlentities($value,ENT_QUOTES);
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
            for($i=0;$i<count($this->data);$i++){
                print_r('<li>' .$this->data[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;" .'</li>');
            }
            echo '</ul>';
        }
        else
        {
            return "Inside Else Block";
        }
    }
}