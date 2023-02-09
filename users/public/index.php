<?php
require '../src/controllers/auth.php';

if(!isConnect()){
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
    require_once '../src/connectToDb/ConnectToDb.php';
    require_once '../src/model/Users.php';
    $users = new Users;
    $users->connection = new ConnectToDb;
    $user = $users->getUser($_SESSION['username']);
    if(!empty($_GET['action'])){
        if($_GET['action'] === 'add'){
            if(!empty($_POST)){
                require '../src/controllers/add.php';
                add();
            }else{
                require '../src/templates/add.php';
            }
        }
    }
    if(!empty($_GET['add'])){
        echo 'here';
    }

    require '../src/controllers/projects.php';
    $projects = displayProjects();
    require '../src/templates/homePage.php';
}
