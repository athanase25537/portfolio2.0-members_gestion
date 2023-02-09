<?php

require_once '../src/model/Login.php';
require_once '../src/connectToDb/ConnectToDb.php';
require_once '../src/model/Users.php';

function login($username, $password){
    $userToLog = new Login();
    $userToLog->users = new Users();
    $userToLog->users->connection = new ConnectToDb();
    
    if($userToLog->canConnect($username, $password)){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $_SESSION['username'] = $username;
        header('Location: index.php');
    }else {
        header('Location:index.php?action=login&status=failed');
    }
}