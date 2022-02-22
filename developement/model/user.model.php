<?php
include "../model/connect.php";
class UserModel extends db
{

    public function add_user($data)
    {
        $sql = "INSERT INTO user (username, email, password)
        VALUES (:username, :email, :password)";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt -> execute($data);
    }
}