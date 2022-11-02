<?php

class user
{
    // crud
    private $conn;
    private $table_name = "user";
    public $id;
    public $log;
    public $pas;
    public $name;
    public $email;
    public $avatar;
    public $datatime;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    function create()
    {

        // опубликованные значения
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->log = htmlspecialchars(strip_tags($this->log));
        $this->pas = htmlspecialchars(strip_tags($this->pas));
        $this->avatar = htmlspecialchars(strip_tags($this->avatar));

        // получаем время создания записи Y-m-d H:i:s
        $this->timestamp = date("Y-m-d");
        $this->datatime =$this->timestamp;

        $query = "INSERT INTO
                    " . $this->table_name . " (`name`, `login`, `pass`, `avatar`, `new_datatime`) VALUES 
                
                    ('$this->name','$this->log', '$this->pas', ' $this->avatar', '$this->datatime') ";

        $stmt = $this->conn->prepare($query);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}