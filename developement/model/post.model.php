<?php
require "connect.php";

class PostModel extends db
{
    public function get_post()
    {
        $sql = "SELECT *, user.username FROM post
        INNER JOIN user
        ON post.user_id = user.user_id
        order by post.post_id desc"; // descending
        
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute();
        $res = $stmnt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function add_post($data)
    {   
         // var_dump($data);
        //     die();
        $sql = "INSERT INTO post (title, description, image, user_id)
        VALUE (:title, :description, :image, :user_id)";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute($data);
    }

    public function update_post($data)
    {
        // var_dump($data);
        //     die();
        $sql = "UPDATE post SET title =:title, description =:description, image =:image WHERE post_id =:post_id";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute($data);
    }

    public function delete_post($id)
    {
        $sql = "DELETE FROM post WHERE post_id = $id";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute();
    }
}