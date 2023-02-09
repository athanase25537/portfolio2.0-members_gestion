<?php
require_once '../src/model/Add.php';
require_once '../src/connectToDb/ConnectToDb.php';

function add(){
    $add = new Add();
    $add->connection = new ConnectToDb();
    $add->addContentToDb($_POST['id_user'], $_POST['title'], $_POST['description'], $_POST['img_description']);
    header('Location: index.php?add=success');
}