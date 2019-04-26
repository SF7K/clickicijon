<?php

session_start();

if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
    header('Location: /');
} else {
    session_destroy();
    header('Location: /login.php');
} 

$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];
