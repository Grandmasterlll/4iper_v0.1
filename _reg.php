<?php
session_start();
require_once ('core/database.php');
require_once ('core/user.php');
$database = new database();
$db=$database->getConnection();
$user= new user($db);
//$path = 'img_user/';

try {
    $path = 'img_user/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'],  $path)) {
        $_SESSION['m_err']="error avatar img";
        header('location: reg.php');
    }
    else{
        $_SESSION['m']="Загрузка img удачна";
    }


}catch (Exception $ex){
    $_SESSION['m_err']="error avatar img";
    header('location: reg.php');
}
try {

    if ($_POST['log'])
    {
        if($_POST["pas"]==$_POST["re_pas"]){
            // установим значения свойствам товара
            $user->name = $_POST["name"];
            $user->log = $_POST["log"];
            $user->pas = md5($_POST["pas"]);
            //$news->img_new = $_POST["img_new"];
            $user->avatar =  $path;


            // создание товара
            if ($user->create()) {
                //echo '<div class="alert alert-success">News был успешно создан.</div>';
                $_SESSION['m_p']="создание успешно ";
                header('location: reg.php');
            }

            // если не удается создать товар, сообщим об этом пользователю
            else {
                //echo '<div class="alert alert-danger">Невозможно создать news.</div>';
                $_SESSION['m_err_p']="err не удается создать";
                header('location: reg.php');
            }
        }
        else{
            //echo '<div class="alert alert-danger">err re pas</div>';
            $_SESSION['m_err_p']="err re pas";
            header('location: reg.php');
        }
    }

}catch (Exception $ex){
    $_SESSION['m_err_p']="err не удается создать";
    header('location: reg.php');
}
//if ($_SERVER['REQUEST_METHOD'] == 'POST')
//    {
/*
 if(isset(['avatar']['tmp_name'])){
// Загрузка файла и вывод сообщения
if (!@copy($_FILES['avatar']['tmp_name'], $path .time(). $_FILES['avatar']['name'])){
    //echo '<div class="alert alert-danger">Невозможно создать news. no img and error</div>';
    $_SESSION['m_err']="error avatar img";
    header('location: reg.php');
}
else{
    //echo '<div class="alert alert-success">Загрузка img удачна .</div>';
    $sab_path=$path.time().$_FILES['avatar']['name'];
    $_SESSION['m']="Загрузка img удачна";
    header('location: reg.php');

}
}
else{
$_SESSION['m_err']="error avatar img";
header('location: reg.php');
}
 */


//}