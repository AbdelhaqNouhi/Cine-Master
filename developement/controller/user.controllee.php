<?php
require "../model/user.model.php";



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
                "password" => $password,
            );
            $usr = new UserModel();
            $usr->add_user($data);
        }
    }
}