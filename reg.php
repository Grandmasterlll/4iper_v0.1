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
$main->head($linkcs->title_reg());
?>
<body>
<div class="container-mx">



    <?php
    //$main->nav();
    $main->head_4iper($linkcs->linkcs_index());
    $main->nav($linkcs->linkcs_index(),$linkcs->linkcs_reg());
        ?>
<br>
    <div class="p-3 mb-2 bg-white text-dark">
        <?php
        //<div class="alert alert-danger">Невозможно создать news.</div>
        if(isset($_SESSION['m'])){
            echo '<div class="alert alert-success">'.$_SESSION['m'].'</div>';
            unset($_SESSION['m']);
        }
        if(isset($_SESSION['m_p'])){
            echo '<div class="alert alert-success">'.$_SESSION['m_p'].'</div>';
            unset($_SESSION['m_p']);
        }
        if(isset($_SESSION['m_err'])){
            echo '<div class="alert alert-danger">'.$_SESSION['m_err'].'</div>';
            unset($_SESSION['m_err']);
        }
        if(isset($_SESSION['m_err_p'])){
            echo '<div class="alert alert-danger">'.$_SESSION['m_err_p'].'</div>';
            unset($_SESSION['m_err_p']);
        }




        // htmlspecialchars($_SERVER["PHP_SELF"])
        ?>

    <form action="_reg.php" method="post" enctype="multipart/form-data">
        <h2 style="text-align: center ">reg</h2>
            <div style=" padding-top: 50px;
    padding-right: 35%;
    padding-bottom: 50px;
    padding-left: 35%; margin: 50px;width: 100%;height: 50%;">
               <label>name</label>
                <input type="text" name="name" class="form-control" />
                <label>log</label>
                <input type="text" name="log" class="form-control" />
                <label>pas</label>
                <input type="password" name="pas" class="form-control" />
                <label>pas</label>
                <input type="password" name="re_pas" class="form-control" />
                <label>avatar</label>
                <input type="file" name="avatar" class="form-control">



<br>
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
    </form>
    </div>


</div>
<?php
$main->footer();
$main->script();
/*
 * sleep(25);
unset($_SESSION['m_err_p']);
unset($_SESSION['m_err']);
unset($_SESSION['m_p']);
unset($_SESSION['m']);
 */
?>
</body>
</html>
