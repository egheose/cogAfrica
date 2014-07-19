<?php
//Displaying views etc

class login
{
    private $data;
    //constructor (its doing nothing for now)
    function __construct(){
        $this->set_data();
    }

    //Functions
    function load($url)
    {
        include($url);

    }

    protected function set_data()
    {
        $this->data = array(
            '',
            '',
            '',
        );
    }
    function get_data()
    {
        if(isset($this->data))
        {
            echo '<ul class="navbar-left nav navbar-nav">';
            echo '<li><a class="navbar-brand" href="/cogAfrica/">COG AFRICA</a></li>';
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