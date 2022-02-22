<?php

class db
{
    public function connect()
    {
        $dbserver = "mysql:host=localhost; dbname=cine_master";
        $dbname = "root";
        $dbpassword = "";

        try{
            $db = new PDO($dbserver, $dbname, $dbpassword);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // echo "you are connect";
        }
        catch (PDOException $D){
            echo "failed" . $D->getMessage();
        }
        return $db;
    }
}
