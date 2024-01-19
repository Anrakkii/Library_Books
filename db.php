<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=library_managment","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
        // echo "Done";
    }catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}
