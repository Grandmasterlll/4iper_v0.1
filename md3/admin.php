<?php
session_start();
/*
 *  admin страница  []
 */
//require_once('core/index.php');
require_once('core/main.php');
require_once('core/admin.php');
$main = new main();
//$index = new index();
$admin = new admin();
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
$title="admin";
$main->head($title);
?>



<body>
<div class="container-md">
<?php
/*
$index->nad_nav();
$index->nav();
$index->btr();
$index->carysel();
$index->btr();
$index->blok_inf();
$main->footer();
*/
$admin->admin_nad_nav();
$admin->admin_nav();
$admin->admin_monitoring_panel();
$admin->admin_monitoring();

?>
</div>
<?php
$main->footer();
?>

</body>
</html>