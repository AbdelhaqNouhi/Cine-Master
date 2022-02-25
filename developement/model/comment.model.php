<?php
require "./connect.php";

class CommentModel extends db{

    public function get_comment()
    {
        $sql = "SELECT * FROM comment ";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute();
        $res = $stmnt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function add_comment()
    {
        $sql = "INSERT INTO comment (comment, user, post)
        VALUE (:comment, :user, :post)";
        $stmnt = $this->connect()->prepare($sql);
        $stmnt->execute();
    }
}