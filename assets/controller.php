<?php
class Controller
{
    private $data;
    function __construct()
    {
        //echo 'Main Controller';
        //$this->set_data();
        $this->view = new view();
    }

    public function loadModel($name){
        //echo ' inside loadmodel function';
        $path = 'model/' .$name .'_model.php';
        if(file_exists($path)){
            require 'model/' .$name .'_model.php';
            $modelName = $name.'_model';
            $this->model = new $modelName();
        }
    }


    protected function set_data()
    {
        $this->data = array(
            '',
            '',
            '',
        );
    }
    public function get_data()
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