<?php
require "connect.php";

class PostModel extends db
{
    public function get_post()
    {
        $sql = "SELECT * FROM post";
        // where  id = :id order by id desc
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute();
        $res = $stmnt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function add_post($data)
    {
        $sql = "INSERT INTO post (title, description, image)
        VALUE (:title, :description, :image)";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute($data);
    }

    public function update_post()
    {
        $sql = "UPDATE FROM post SET title =:title, description =:description, image =:image, categorie =:categorie WHERE  id =:id";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute();
    }

    public function delete_post($id)
    {
        $sql = "DELETE FROM post WHERE post_id = $id";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute();
    }
}