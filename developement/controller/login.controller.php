<?php
require "../model/user.model.php";
// require "../model/connect.php";
session_start();

if(isset($_POST["sing_in"])){
    $log = new UserController();
    $log -> login();
}

class UserController
{
    public function login()
    {
        if(isset($_POST["sing_in"]))
        {
            $data =  $_POST["email"];    
            $log = new UserModel();
            $res = $log->login($data);
        }   
        
        if($res->email === $_POST["email"] && password_verify($_POST["password"], $res->password))
        {

            
            $_SESSION["username"] = $res->username;   
            $_SESSION["id"] = $res->user_id;   
        
            // var_dump($_SESSION);
            // die();
        
        
                header('location: ../view/home.php');
            
        }
            else{
                header('location: ../index.php');
            }   
    }
}