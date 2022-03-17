<?php
require_once "connect.php";

class CommentModel extends db{

    public function get_comment($post_id)
    {
        // $sql = "SELECT comment FROM comments";
        $sql = "SELECT comments.comment, comments.post_id, user.username FROM comments
        INNER JOIN user ON comments.user_id = user.user_id
        INNER JOIN post ON comments.post_id = post.post_id
        WHERE comments.post_id = ?";
        
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute([$post_id]);
        $res = $stmnt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($res);
        // die();
        return $res;
    }

    public function add_comment($data)
    {
        // echo "hhhhhhhhh";
        $sql = "INSERT INTO comments (comment, post_id, user_id)
        VALUE (:comment, :post_id, :user_id)";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute($data);
        // var_dump($stmnt);
        // die();
    }
}