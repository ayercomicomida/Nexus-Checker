<?php session_start(); 

    if (!isset($_SESSION['username'])) {
        header('Location: ./login');
        exit();
    } else {
        header('Location: ./panel');
        exit(); 
    }

?>