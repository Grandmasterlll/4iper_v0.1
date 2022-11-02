<?php

class news
{
// подключение к базе данных и имя таблицы
    private $conn;
    private $table_name = "news";

    // свойства объекта
    /*
    head
    story
    name
    $head
    $story
    $name
    $timestamp
     */
    public $id;
    public $head;
    public $story;
    public $name;
    public $timestamp;
    public $img_new;
    public $datatime;
    public $new_datatime;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // метод создания товара
    function create()
    {

        // опубликованные значения
        $this->head = htmlspecialchars(strip_tags($this->head));
        $this->story = htmlspecialchars(strip_tags($this->story));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->img_new = htmlspecialchars(strip_tags($this->img_new));

        // получаем время создания записи Y-m-d H:i:s
        $this->timestamp = date("Y-m-d");
        $this->datatime =$this->timestamp;

        $query = "INSERT INTO
                    " . $this->table_name . " (`head`, `story`, `name`, `img_new`, `new_datatime`) VALUES 
                
                    ('$this->head','$this->story', '$this->name', ' $this->img_new', '$this->datatime') ";

        $stmt = $this->conn->prepare($query);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    // метод для получения товаров
    function readAll($from_record_num, $records_per_page)
    {
        // запрос MySQL
        //  // name ASC заменне на  id  DESC
        $query = "SELECT
                id, head, story, name, img_new, new_datatime
            FROM
                " . $this->table_name . "
            ORDER BY
                id  DESC 
            LIMIT
                {$from_record_num}, {$records_per_page}";

        $stmt = $this->conn->prepare($query );
        $stmt->execute();

        return $stmt;
    }
    // используется для пагинации товаров
    public function countAll()
    {
        // запрос MySQL
        $query = "SELECT id FROM " . $this->table_name . "";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $num = $stmt->rowCount();

        return $num;
    }
    // метод для получения товара
    function readOne()
    {
        // запрос MySQL
        $query = "SELECT
                head, story, name, img_new,new_datatime
            FROM
                " . $this->table_name . "
            WHERE
                id = ?
            LIMIT
                0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->head = $row["head"];
        $this->story = $row["story"];
        $this->name = $row["name"];
        $this->img_new = $row["img_new"];
        $this->new_datatime = $row["new_datatime"];
    }
    // метод для обновления товара
    function update()
    {
        // MySQL запрос для обновления записи (товара)
        $query = "UPDATE
                " . $this->table_name . "
            SET
             head =:head, story = :story,  img_new =:img_new, 
                name = :name, new_datatime =:new_datatime
                
            WHERE
                id = :id";

        // подготовка запроса
        $stmt = $this->conn->prepare($query);

        // очистка
        $this->head = htmlspecialchars(strip_tags($this->head));
        $this->story = htmlspecialchars(strip_tags($this->story));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->img_new = htmlspecialchars(strip_tags($this->img_new));

        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->timestamp = date("Y-m-d");
        $this->datatime =$this->timestamp;
        // привязка значений
        $stmt->bindParam(":head", $this->head);
        $stmt->bindParam(":story", $this->story);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":img_new", $this->img_new);
        $stmt->bindParam(":new_datatime", $this->datatime);
        $stmt->bindParam(":id", $this->id);

        // выполняем запрос
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
    function delete()
    {
        // запрос MySQL для удаления
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if ($result = $stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}