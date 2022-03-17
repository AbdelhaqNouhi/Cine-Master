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
            
            $data = array(
                "username" => $_POST["username"],
                "email" => $_POST["email"],
                "password" => password_hash($_POST["password"], PASSWORD_BCRYPT) 
                );
            $usr = new UserModel();
            $usr->add_user($data);

            if($data){   
                header("location: ../view/Sing-In.php");
            }
        }
    }
}