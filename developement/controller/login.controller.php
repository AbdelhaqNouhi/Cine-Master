<?php
require "../model/user.model.php";
// require "../model/connect.php";




if(isset($_POST["sing_in"])){
    $log = new UserController();
    $log -> login();
}

class UserController
{
    public function login()
    {
        if(isset($_POST["sing_in"])){
            $email = $_POST["email"];
            $password = $_POST["password"];

            $log = new UserModel();
            $res  = $log->login(["email" => $email, "password" => $password]);

        }   
            if($res){
                if(!isset($_SESSION)) {
                    session_start();
                    $_SESSION["email"] = $res->email; 
                    header('location: ../view/home.php');
                }
            }
            else{
                header('location: ../index.php');
            }   
    }
}