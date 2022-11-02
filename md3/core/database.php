<?php

class database
{
private $host = "localhost";
private $db_name = "test";
private $username = "root";
private $pass = "root";
public $conn;

    public function getConn(){
        $this->conn=null;
        try{
            $this->conn=mysqli_connect($this->host,$this->username,$this->pass,$this->db_name);
        }catch (Exception $exception){
            echo $exception;
        }
        return $this->conn;
    }
}