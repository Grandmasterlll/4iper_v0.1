<?php
session_start();
require_once ('core/main.php');
require_once ('core/linkcs.php');
$main = new main();
$linkcs = new linkcs();

?>
<!DOCTYPE html>
<html lang="ru">
<?php
$main->head($linkcs->title_index());
?>
<body>
<div class="container-mx">



<?php
//$main->nav();
;
$main->head_4iper($linkcs->linkcs_index());
$main->nav($linkcs->linkcs_index(),$linkcs->linkcs_reg());
$main->inf_index();
$main->inf_git();
?>


<?php
//<div class="container-md">
?>

</div>
<?php
$main->footer();
$main->script();
?>
</body>
</html>
