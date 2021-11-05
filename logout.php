<?php require 'inc/head.php'; 
if ($_SESSION['login'] != NULL) {
    $_SESSION = array();
    session_destroy();
    unset($_SESSION);
}header("Location: login.php");