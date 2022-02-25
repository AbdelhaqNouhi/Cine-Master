<?php
include "../model/connect.php";

class UserModel extends db
{

    public function add_user($data)
    {
        $sql = "INSERT INTO user (username, email, password)
        VALUES (:username, :email, :password)";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute($data);
    }

    public function login($data)
    {
        $sql = "SELECT  email and password FROM user WHERE email=:email and password=:password";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt -> execute($data);
        return $stmnt->fetch(PDO::FETCH_ASSOC);
    }
}