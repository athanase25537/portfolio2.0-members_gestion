<?php
function registUser(){
    require_once '../src/model/Register.php';
    require_once '../src/connectToDb/ConnectToDb.php';
    require_once '../src/model/Users.php';
    $newUser = new Register();
    $newUser->connection = new ConnectToDb();
    $newUser->users = new Users;
    $newUser->users->connection = new ConnectToDb();

    if($newUser->isValidUserName($_POST['username'])){
        $newUser->insertToDb(
            $_POST['name'],
            $_POST['firstname'],
            $_POST['birth'],
            $_POST['email'],
            $_POST['tel'],
            $_POST['username'],
            $_POST['password'],
            $_POST['photo'],
            $_POST['sexe']
        );
    }else{
        require '../src/templates/register.php';
    }
    
}