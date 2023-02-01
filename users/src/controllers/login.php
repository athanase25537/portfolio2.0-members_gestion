<?php

require_once '../src/model/Login.php';
require_once '../src/connectToDb/ConnectToDb.php';
require_once '../src/model/Users.php';

function login($username, $password){
    $userToLog = new Login();
    $userToLog->users = new Users();
    $userToLog->users->connection = new ConnectToDb();
    
    if($userToLog->canConnect($username, $password)){
        session_start();
        $_SESSION['username'] = $username;
        echo 'bienvenue ' . $_SESSION['username'];
        $user = $userToLog->users->getUser($username);
        return $user;
    }
    header('Location:index.php?action=login&status=failed');
}