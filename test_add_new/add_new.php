


<?php
require_once ('core/main.php');
require_once ('core/database.php');
require_once ('core/news.php');
$main = new main();
$database = new database();
$db = $database->getConnection();
$news = new news($db);

$title=' add new ';
$main->head($title);

/*
 $qw="2022202220222022-OctOct-FriFri";
$q=data($qw);
echo $q;

    //$path = 'img/';
    $path = 'img/' . time() . $_FILES['img_new']['name'];
    if (!move_uploaded_file($_FILES['img_new']['tmp_name'], '../' . $path)) {
       // $_SESSION['message'] = 'Ошибка при загрузке сообщения';
       // header('Location: ../register.php');
        echo '<div class="alert alert-danger">Невозможно создать news. no img and error</div>';

    }
 */
//$path = 'img/' . time() . $_FILES['img_new']['name'];
$path = 'img/';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Загрузка файла и вывод сообщения
    if (!@copy($_FILES['img_new']['tmp_name'], $path .time(). $_FILES['img_new']['name'])){
        echo '<div class="alert alert-danger">Невозможно создать news. no img and error</div>';
    }
    else{
        echo '<div class="alert alert-success">Загрузка img удачна .</div>';
        $sab_path='img/'.time().$_FILES['img_new']['name'];
    }

}
        if ($_POST)
        {
            // установим значения свойствам товара
            $news->head = $_POST["head"];
            $news->story = $_POST["story"];
            $news->name = $_POST["name"];
            //$news->img_new = $_POST["img_new"];
            $news->img_new =  $sab_path;


            // создание товара
            if ($news->create()) {
                echo '<div class="alert alert-success">News был успешно создан.</div>';
            }

            // если не удается создать товар, сообщим об этом пользователю
            else {
                echo '<div class="alert alert-danger">Невозможно создать news.</div>';
            }
        }


else{
    echo '<div class="alert alert-danger">Невозможно создать news. problem not and error img </div>';
}


?>
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data" >

    <table class="table table-hover table-responsive table-bordered">

        <tr>
            <td>Название / head</td>
            <td><input type="text" name="head" class="form-control" /></td>
        </tr>

        <tr>
            <td>Цена / stoy </td>
            <td><textarea  name="story" class="form-control" /></textarea></td>
        </tr>

        <tr>
            <td>name</td>
            <td><input name="name" class="form-control"></td>
        </tr>

        <tr>
            <td>img_new</td>
            <td><input type="file" name="img_new" class="form-control"></td>
        </tr>



        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Создать</button>
            </td>
        </tr>

    </table>
</form>


<?php
$main->footer();
?>