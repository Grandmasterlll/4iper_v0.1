<?php
// подключаем файлы для работы с базой данных и файлы с объектами


require_once ('core/main.php');
require_once ('core/database.php');
require_once ('core/news.php');
$main = new main();
// получаем соединение с базой данных
$database = new database();
$db = $database->getConnection();

// подготавливаем объекты
$news = new news($db);


// получаем ID редактируемого товара
$id = isset($_GET["id"]) ? $_GET["id"] : die("ERROR: отсутствует ID.");


// устанавливаем свойство ID товара для редактирования
$news->id = $id;

// получаем информацию о редактируемом товаре
$news->readOne();

// установка заголовка страницы
$title = "Обновление news";
$main->head($title);
//include_once "layout_header.php";
?>

    <div class="right-button-margin">
        <a href="function_news_up_delete_admin.php" class="btn btn-default pull-right">Просмотр всех товаров</a>
    </div>

    <!-- здесь будет форма обновления товара -->
            <?php
                $path = 'img/';
               // echo $path;
               // echo $_FILES['img_new']['tmp_name'];
               // echo $_POST['img_new'];
                /*
                 if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    echo $_FILES['img_new']['tmp_name'];
                }
                 */

                        //die();
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

            // если форма была отправлена (submit)
            if ($_POST) {

                // устанавливаем значения свойствам товара
                $news->head = $_POST["head"];
                $news->story = $_POST["story"];
                $news->name = $_POST["name"];
                //$news->img_new = $_POST["img_new"];
                $news->img_new =  $sab_path;

                // обновление товара
                if ($news->update()) {
                    echo "<div class='alert alert-success alert-dismissable'>";
                    echo "Товар был обновлён.";
                    echo "</div>";
                }

                // если не удается обновить товар, сообщим об этом пользователю
                else {
                    echo "<div class='alert alert-danger alert-dismissable'>";
                    echo "Невозможно обновить товар.";
                    echo "</div>";
                }
            }
            ?>

    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}"); ?>" method="post" enctype="multipart/form-data" >
        <table class="table table-hover table-responsive table-bordered">
            <tr>
                <td>Название / head</td>
                <td><input type="text" name="head"  value="<?= $news->head; ?>" class="form-control" /></td>
            </tr>

            <tr>
                <td>Цена / stoy </td>
                <td><textarea  name="story" value="<?= $news->story; ?>" class="form-control" /></textarea></td>
            </tr>

            <tr>
                <td>name</td>
                <td><input name="name" value="<?= $news->name; ?>" class="form-control"></td>
            </tr>

            <tr>
                <td>img_new</td>
                <td><input type="file" name="img_new"  class="form-control"></td>
            </tr>




            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </td>
            </tr>

        </table>
    </form>

<?php // подвал
//include_once "paging.php";

$main->footer();