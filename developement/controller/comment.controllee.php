<?php
require "../model/comment.model.php";

if (isset($_POST["comment"])) {
    $com = new CommentController();
    $com->add_comment();
}


class CommentController
{
    public function get_comment($post_id)
    {
        $res = new CommentModel();
        // var_dump($res);
        // die();
        return $res->get_comment($post_id);
    }
    
    public function add_comment()
    {
        session_start();
        $data = array(
            "comment" => $_POST["comment"],
            "user_id" => $_POST["id"],
            "user_id" => $_SESSION["id"],
            "post_id" => $_POST["id"]
        );
        // var_dump($data);
        // die();
        $add = new CommentModel();
        $add->add_comment($data);

        if ($add) {
            header("location: ../view/home.php");
        }
    }
}
