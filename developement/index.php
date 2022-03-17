<?php

if (!isset($_SESSION["username"])){
    header("location: ./view/Sing-In.php");
    }
if(isset($_POST["edit"])){
    include "./view/update.php";
}

