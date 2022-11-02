<?php

class database
{
// укажите свои собственные учетные данные для базы данных
    private $host = "localhost";
    private $db_name = "4iper";
    private $username = "root";
    private $password = "root";
    public $conn;

    // получение соединения с базой данных
    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Ошибка соединения: " . $exception->getMessage();
        }

        return $this->conn;
    }
}