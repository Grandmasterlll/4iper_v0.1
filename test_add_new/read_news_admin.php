<?php

require_once ('core/main.php');
require_once ('core/database.php');
require_once ('core/news.php');
$main = new main();
$database = new database();
$db = $database->getConnection();
$news = new news($db);
// установка заголовка страницы
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");

$news->id = $id;

// получаем информацию о товаре
$news->readOne();

$title = "Страница news (чтение одного news) admin";
$main->head($title);

?>

    <!-- ссылка на все товары -->
    <div class="right-button-margin">
        <a href="function_news_up_delete_admin.php" class="btn btn-primary pull-right">
            <span class="glyphicon glyphicon-list"></span> Просмотр всех news
        </a>
    </div>

    <!-- HTML-таблица для отображения информации о товаре -->
    <h2><?= $news->head; ?></h2>  <br>
    <img src="<?= $news->img_new; ?>" alt="альтернативный текст" style="height: 200px; width: 200px">
    <h5>Автор публикации:<?= $news->name; ?></h5>  <br>
    <h5>  Дата публикации:  <?= $news->new_datatime; ?></h5>  <br>
    <div style="height: 90px; width: 90% ">
        <?= $news->story; ?>
    </div>





<?php // подвал
$main->footer();