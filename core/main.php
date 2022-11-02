<?php

class main
{
    public function head($title){
        $con=print_r('
        <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>'.$title.'</title>

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- кастомный CSS 
    <link rel="stylesheet" href="libs/css/custom.css" /> -->
    <link rel="stylesheet" href="css/main.css" />
</head>
        ');
        return $con ;
    }
    public function script(){
        $con=print_r('
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        ');
        return $con;

    }
    public function nav($index,$reg){
        //<H1>4iper.by</H1>
        $con=print_r('
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="'.$index.'">4iper.by</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="'.$index.'">Главная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Галерея  / img</a>
        </li>
        <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Будет полезным
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ссылки
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
          
        
        <li class="nav-item">
          <a class="nav-link" href="#">все полезные ссылки</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">001</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Новости</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Чат</a>
        </li>
        -->
        <li class="nav-item">
          <a class="nav-link" href="md3/#">проект md3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="test_add_new/#">проект md3 news</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="'.$reg.'">регестрация</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">войти</a>
        </li>
          
        
        
      </ul>
      
    </div>
  </div>
</nav>
        ');
        /*
         * поиск
         <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
         */
        return $con;
    }
    public function head_4iper($link){
        // https://codepen.io/FelixRilling/pen/oNNLMb
        $con=print_r('
        <div class="head_4iper">
        <h1></h1>
        <a class="a_neon" href="'.$link.'">
        4iper.by
    </a>
</div>
        ');
        return $con;
    }

    public function footer(){
        $con=print_r('
        <footer class="py-3 my-4 bg-light">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Главная</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">n1</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">n2</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">n3</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">n4</a></li>
            </ul>
            <p class="text-center text-muted">© 2022 Grandmasterlll / 4iper.by , Inc</p>
        </footer>
        ');
        return $con;
    }
    public function inf_index(){
        $con=print_r('<br>
       <div class="p-3 mb-2 bg-white text-dark">
                    <h3 class="text-center">Что сейчас работает на сайте </h3>
                </div><br>
                
            <div class="container-mx bg-light" style="padding: 15px;margin: 15px">
                   <table class="table table-hover table-responsive table-bordered">
                       <tr>
                            <th>page</th>
                            <th>status </th>
                        </tr>
                        <tr>
                            <th>home</th>
                            <th>active </th>
                        </tr>
                        <tr>
                            <th>img</th>
                            <th>no active </th>
                        </tr>
                        <tr>
                            <th>reg</th>
                            <th> active </th>
                        </tr>
                        <tr>
                            <th>log</th>
                            <th>no active </th>
                        </tr>
                        <tr>
                            <th>проект md3</th>
                            <th> active </th>
                        </tr>
                        <tr>
                            <th>проект md3 news</th>
                            <th> active </th>
                        </tr>
                    </table>
                    
              </div>
        ');
        return $con;
    }
    public function inf_git(){
        $con=print_r('<br>
                <div class="p-3 mb-2 bg-white text-dark">
                    <h3 class="text-center">Как попасть на мой git</h3>
                </div><br>
                
            <div class="container-mx bg-light" style="padding: 15px;margin: 15px">
                    <div class="row">
                    <center><h1>Git</h1> </center>
                            <div class="col-md-4">
                            <img src="img_statikc/git_img_profile_me.jfif" alt="альтернативный текст" style="height: 400px; width: 400px; padding: 30px;margin: 30px">
</div>
                            <div class="col-md-4 ms-auto">
                             <h1>Grandmasterlll</h1>
                             url <a href="https://github.com/Grandmasterlll">https://github.com/Grandmasterlll</a>
</div>
                     </div>
                    
              </div>
        ');
        return $con;
    }

}