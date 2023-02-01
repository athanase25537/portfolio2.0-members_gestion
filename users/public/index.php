<?php
session_start();
if(empty($_SESSION['username'])){
    if(!empty($_GET)){
        if($_GET['action'] == 'register'){
            if(!empty($_POST)){
                require '../src/controllers/register.php';
                registUser();
            }else{
                require '../src/templates/register.php';
            }
        }else if($_GET['action'] == 'login'){
            if(!empty($_POST)){
                require '../src/controllers/login.php';
                login($_POST['username'], $_POST['password']);
            }else{
                require '../src/templates/login.php';
            }
        }
    }else{
        require '../src/templates/login.php';
    }
}else{
    echo $_SESSION['username'];
}
