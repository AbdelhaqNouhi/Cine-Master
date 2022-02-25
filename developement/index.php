<?php


if (isset($_SESSION['email'])){
    header("location: ./view/home.php");
}

if (!isset($_SESSION)){
    session_start();  
    header("location: ./view/Sing-In.php");
}

    session_start();
    session_unset();
    session_destroy();
    $_SESSION = null;
    require "./view/Sing-In.php";