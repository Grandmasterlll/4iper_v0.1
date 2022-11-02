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
// страница, указанная в параметре URL, страница по умолчанию - 1


// здесь будет получение товаров из БД
// включаем соединение с БД и файлы с объектами
/*
 include_once "config/database.php";
include_once "objects/product.php";
include_once "objects/category.php";
 */

// создаём экземпляры классов БД и объектов [+]


//$product = new Product($db);
//$category = new Category($db);

// запрос товаров
$stmt = $news->readAll($from_record_num, $records_per_page);
$num = $stmt->rowCount();
?>
<!-- здесь будет контент -->
<?php
// отображаем товары, если они есть
//if ($num > 0) {
    echo "<br><br>";
    echo "<center><h1>news</h1></center> <br>";
echo "<br><br>";
   // echo "<table class='table table-hover table-responsive table-bordered'>";
    /*
    echo "<tr>";
    echo "<th>Товар</th>";
    echo "<th>Цена</th>";
    echo "<th>Описание</th>";
    echo "<th>Категория</th>";
    echo "<th>Действия</th>";
    echo "</tr>";
*/
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        extract($row);

       // echo "<tr>";
        //echo "<td>{$name}</td>";
        echo "<hr>";
        echo "<div style='width: 80%;height: 80%'>";
        /*
         <a href='read_product.php?id={$id}' class='btn btn-primary left-margin'>
    <span class='glyphicon glyphicon-list'></span> Просмотр
</a>
        <a 'read_product.php?id={$id}'>{$head}</a>
         */

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
      //  echo "</tr>";

    }

   // echo "</table>";

    // здесь будет пагинация
// страница, на которой используется пагинация
$page_url = "news.php?";

// подсчёт всех товаров в базе данных, чтобы подсчитать общее количество страниц
$total_rows = $news->countAll();

// пагинация
include_once "paging.php";
//}

// сообщим пользователю, что товаров нет
/*
 else {
    echo "<div class='alert alert-info'>Товары не найдены.</div>";
}
 */
?>
<?php
$main->footer();

