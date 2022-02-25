<?php
require "../model/user.model.php";
// require "../model/connect.php";



if(isset($_POST["sing_up"])){
    $sing = new UserController();
    $sing -> add_user();
}

class UserController
{
    public function add_user(){
        if(isset($_POST["sing_up"])){
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
    
            $data = array(
                "username" => $username,
                "email" => $email, 
                "password" => $password
                );
            $usr = new UserModel();
            $usr->add_user($data);

            if($data){
                header('location: ./login.php');
            }
        }
    }
}