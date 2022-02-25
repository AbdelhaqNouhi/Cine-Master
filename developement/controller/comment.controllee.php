<?php
require "../model/post.model.php";

class CommentCnotroller
{
    public function get_comment()
    {
        $get = new commentModel();
        return $get->get_comment();
    }

    public function add_comment()
    {
        if(isset($_POST[""])){
            $user = $_POST["user"];
            $post = $_POST["post"];

            $data = array(
                "user" => $user,
                "post" => $post
            );
            $add = new CommentModel();
            $add->add_comment($data);

            if($add){
                header("location: ../view/home.php");
            }
        }
    }
}