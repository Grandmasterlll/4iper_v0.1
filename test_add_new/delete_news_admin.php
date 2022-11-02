<?php
// проверим, было ли получено значение в $_POST
if ($_POST) {

    // подключаем файлы для работы с базой данных и файлы с объектами

    require_once ('core/database.php');
    require_once ('core/news.php');

    $database = new database();
    $db = $database->getConnection();
    $news = new news($db);




    // устанавливаем ID товара для удаления
    $news->id = $_POST["object_id"];

    // удаляем товар
    if ($news->delete()) {
        echo "Товар был удалён";
    }

    // если невозможно удалить товар
    else {
        echo "Невозможно удалить товар";
    }
}