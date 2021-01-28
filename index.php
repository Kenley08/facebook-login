<?php
    session_start();
    include('config.php');
    if(!isset($_SESSION['access_token'])){
        header('location:login.php');
        exit();
    }else{
        echo $_SESSION['userData']['id']."<br/>";
        echo $_SESSION['userData']['first_name']."<br/>";
        echo $_SESSION['userData']['last_name']."<br/>";
        echo $_SESSION['userData']['email']."<br/>";
    }


?>