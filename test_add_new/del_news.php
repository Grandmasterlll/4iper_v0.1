<?php
require_once ('core/main.php');
require_once ('core/database.php');
require_once ('core/news.php');
$main = new main();
$database = new database();
$db = $database->getConnection();
$news = new news($db);


$title=' del news ';
$main->head($title);

$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");


        // устанавливаем ID товара для удаления
        $news->id = $id ;

        // удаляем товар
        if ($news->delete()) {
           // echo '<div class="alert alert-danger">News был удалён</div>';
            //session_start();
            header('location: function_news_up_delete_admin.php');
        } // если невозможно удалить товар


    else {
        echo '<div class="alert alert-danger">Невозможно удалить</div>';


}


