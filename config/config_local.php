<?php
class Database extends PDO{
    public function __construct(){
        parent::__construct('mysql:host=107.170.87.127;daname=ejigbo_vbc','cog','cogAfrica');
    }
}