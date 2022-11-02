<?php

class admin
{
    public function admin(){
        $con='
        
        ';
        return $con;
    }
    public function admin_nad_nav(){
        $con=print_r('
        <div class="container">
            <div class="nad_nav">
                <div class="panel">
                        <h1> панель админа  </h1>
                </div>
            </div>
        
        
        </div>
        
        ');
        return $con;
    }
    public function admin_nav(){
        $con=print_r('
        
        <div class="container">
            
                <div class="panel">
                       <ul id="navbar">
                          <li><a href="#" >Главная</a></li>
                          <li><a href="#" >Новости</a></li>
                          <li><a href="#" > Вопросы </a></li>
                          <li><a href="#" >Руководство </a></li>
                          <li><a href="#" >Контакты</a></li>
                          <li><a href="#" >Выйти</a></li>
                        </ul> 
                </div>
            
        
        
        </div>
        
        ');
        return $con;
    }
    public function admin_monitoring_panel(){
        $con=print_r('

        <div class="container">
            
                <div class="monitoring_panel">
                    <div class="panel">
                     <h2> мониторинг активности  </h2>
                    </div>
                    
                </div>
                
        
        </div>
        
        ');
        return $con;
    }
    public function admin_monitoring(){
        $con=print_r('

        <div class="container">
           <div class="monitoring">
                посещения
            </div>
                    <div class="monitoring_status">
                    график 1
                    </div>
                    <div class="monitoring_status">
                    график 2
                    </div>
   
        </div>
        
        ');
        return $con;
    }
    private function connect_bd(){
        $con = mysqli_connect('localhost','root','root','reg');

    }
   public function log_input($con,$log,$pas){
       $check_us = mysqli_query($con,"SELECT * FROM `user` where `login` = '$log'and `pass` = '$pas ' ");
       if(mysqli_num_rows($check_us)>0){
           $user=mysqli_fetch_assoc($check_us);
           $_SESSION['user']=[
               "id"=> $user['id'],
               "name"=>$user['name']
           ];
           header('location: ../admin.php');
       }else{
           $_SESSION['msg_log']='не верный логин или пароль';
           header('location: ../login.php');
       }
   }
}