<?php

/*
 *  главная страница  []
 */
require_once('classes.php');
$main = new main();
$index = new index();
$links = new links();
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

$links1=$links->otdel1_links();
$links2=$links->otdel2_links();
$links3=$links->otdel3_links();
$links4=$links->otdel4_links();
$links5=$links->otdel5_links();
$main->nad_nav();
$main->nav();
$index->btr();
$index->carysel();
$index->btr();
$index->blok_inf($links1,$links2,$links3,$links4,$links5);
$main->footer();
$main->con();


?>

</body>
</html>