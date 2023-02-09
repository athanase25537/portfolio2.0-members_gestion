<?php
function isConnect(){
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
    if(!empty($_SESSION['username'])){
        return true;
    }
    return false;
}