<?php
include "connect.php";

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
        $sql = "SELECT * FROM user WHERE BINARY email= ?";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt -> execute(array($data));
        $res = $stmnt->fetch(PDO::FETCH_OBJ);
        // var_dump($data);
        // die();
        return $res;
    }
}