<?php
require_once '../src/model/GetContents.php';
require_once '../src/connectToDb/ConnectToDb.php';
require_once '../src/model/Users.php';

function displayProjects(){
    $projects = new GetContents();
    $projects->connection = new ConnectToDb();

    $users = new Users();
    $users->connection = new ConnectToDb();
    $user = $users->getUser($_SESSION['username']);
    $idUser = $user['id'];
    $projects = $projects->getAllContents($idUser);
    return $projects;
    // header('Location: index.php?add=success');
}