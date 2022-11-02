<?php

/*
 *  главная страница  []
 */
//require_once('classes.php');
require_once('core/index.php');
require_once('core/main.php');
require_once('core/news.php');

$main = new main();
$index = new index();
//$links = new links();
$news = new news();
//$index = new index();
?>
<!DOCTYPE html>
<html lang="ru">
<!--
<head>

    <meta http-equiv="Refresh" content="15" />
    <meta charset="UTF-8">
    <title>название (изменить)</title>    (изменить)
    <link rel="stylesheet" href="css/main.css" />
    -->
<?php
//  $main_core->connect_Boostrap();
//  $main_core->connec_css();
//ГУ «Территориальный центр социального обслуживания населения Любанского района»
$title="ГУ «Территориальный центр социального обслуживания населения Любанского района»";
$main->head($title);
?>



<body>

<?php
// $links->otdel1_links(),$links->otdel2_links(),$links->otdel3_links(),$links->otdel4_links(),$links->otdel5_links()


$main->nad_nav();
$main->nav();
$index->btr();
$news->news_h1();
$index->btr();

$main->footer();
$main->con();


?>


</body>
</html>