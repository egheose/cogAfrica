<?php
//Displaying views etc

class login extends controller
{
    private $data;
    //constructor (its doing nothing for now)
    function __construct(){
        parent::__construct();
        $this->set_data();

        //$this->view->render('login');
    }

    //Functions loads thr login
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
        //$this->other();//Calling the other function
    }
    function get_data()
    {
        if(isset($this->data))
        {
            echo '<ul class="navbar-left nav navbar-nav">';
            echo '<li><a class="navbar-brand" href="/cogAfrica/">COG AFRICA</a></li>';
          for($i=0;$i<count($this->data);$i++){
                print_r('<li><a class="navbar-brand" href="' .$this->data[$i] .'" >' .$this->data[$i] .'</a></li>');
            }

            echo '</ul>';
        }
        else
        {
            return "Inside Else Block";
        }
    }
    /** Function calling the login model*/
    /*
    function other($args=false){
        echo 'we are inside other <br>';
        require 'model/login_model.php';
        $model = new login_model();
    }
     */
}