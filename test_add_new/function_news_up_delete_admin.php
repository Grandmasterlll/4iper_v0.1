<?php
require_once ('core/main.php');
require_once ('core/database.php');
require_once ('core/news.php');
$main = new main();
$database = new database();
$db = $database->getConnection();
$news = new news($db);

$page = isset($_GET["page"]) ? $_GET["page"] : 1;

// устанавливаем ограничение количества записей на странице
$records_per_page = 5;

// подсчитываем лимит запроса
$from_record_num = ($records_per_page * $page) - $records_per_page;

$title=' news ';
$main->head($title);

// запрос news
$stmt = $news->readAll($from_record_num, $records_per_page);
$num = $stmt->rowCount();

echo "<br><br>";
echo "<center><h1>news</h1></center> <br>";
echo "<br><br>";
 echo "<table class='table table-hover table-responsive table-bordered'>";
/*
echo "<tr>";
echo "<th>Товар</th>";
echo "<th>Цена</th>";
echo "<th>Описание</th>";
echo "<th>Категория</th>";
echo "<th>Действия</th>";
echo "</tr>";
*/
    echo "<tr>";
    echo "<th>head</th>";
    echo "<th>story</th>";
    echo "<th>name</th>";
    echo "<th>img_new</th>";
    echo "<th>new_datatime</th>";
    echo "<th>up / del</th>";
    echo "</tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    extract($row);
    echo "<tr>";
    echo "<th>{$head}</th>";
    echo "<th>{$story}</th>";
    echo "<th>{$name}</th>";
    echo '<th><img src="'.$img_new.'" alt="альтернативный текст" style="height: 50px; width: 50px"> </th>';
    echo "<th>{$new_datatime}</th>";
    echo "<th>
            <a href='read_news_admin.php?id={$id}' class='btn btn-primary left-margin'>
            <span class='glyphicon glyphicon-list'></span> Просмотр
        </a>
        
        <a href='function_news_up_admin.php?id={$id}' class='btn btn-info left-margin'>
            <span class='glyphicon glyphicon-edit'></span> Редактировать
        </a>
        
        <a href='del_news.php?id={$id}' class='btn btn-danger delete-object'>
            <span class='glyphicon glyphicon-remove'></span> Удалить
        </a>
         
         </th>";
    echo "</tr>";
    // echo "<tr>";
    //echo "<td>{$name}</td>";
    /*
    echo "<hr>";
    echo "<div style='width: 80%;height: 80%'>";
        /*
         <a href='read_product.php?id={$id}' class='btn btn-primary left-margin'>
    <span class='glyphicon glyphicon-list'></span> Просмотр
</a>
        <a 'read_product.php?id={$id}'>{$head}</a>
         */
    /*
    echo '<img src="'.$img_new.'" alt="альтернативный текст" style="height: 200px; width: 200px">';
    echo "<h2>
              <a href='read_product.php?id={$id}' class='btn btn-primary left-margin'>
                 {$head}
            </a>

            </h2><br>
            Дата публикации:  {$new_datatime}
            ";

    echo "</div>";
    echo "<hr>";
    echo "<br>";
    */
    //  echo "</tr>";

}
 echo "</table>";


$page_url = "function_news_up_delete_admin.php?";

$total_rows = $news->countAll();


// пагинация
include_once "paging.php";

$main->footer();