<?php
session_start();
unset($_SESSION['username']);
header('Location: ../../public/index.php');