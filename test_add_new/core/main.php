<?php

class main
{
    public function db(){
        //$con = mysqli_connect('localhost','root','root','reg');
        $con = new PDO('mysql:dbname=test_news;host=localhost', 'root', 'root');
        return $con;

    }
     public function head($title){
         $con = print_r('
         <!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>'.$title.'</title>

    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- кастомный CSS 
    <link rel="stylesheet" href="libs/css/custom.css" /> -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

    <!-- container -->
    <div class="container">

        <!-- page header -->
        <div class="page-header">
            <h1>'.$title.' </h1>
        </div>
         ');
         return $con;
     }
    public function footer(){
        $con = print_r('
         </div>
        <!-- /container -->
       
        <!-- jQuery (необходим для Bootstrap JavaScript) -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <!-- bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!-- bootbox JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    
        </body>
        
        </html>
         ');
        return $con;
    }
    public function f(){
        $con = print_r('
         
         ');
        return $con;
    }
}