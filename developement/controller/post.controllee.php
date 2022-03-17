<?php
require "../model/post.model.php";

session_start();

class PostCnotroller
{
    public function get_post()
    {
        $get = new PostModel();
        return $get->get_post();
    }
    
    public function add_post()
    {
        if(isset($_POST["Goo"])){
            $data = array(
                "title" => $_POST["title"],
                "description" => $_POST["description"],
                "image" => $_POST["url"],
                "user_id" => $_SESSION["id"]
                // "categorie" => $categorie
            );

            // var_dump($data);
            // die();
            $add = new PostModel();
            $add->add_post($data);
            
            if($add){
                header("location: ../view/home.php");
            }
        }
    }

    public function update_post()
    {    
        $data = array(
            "title" => $_POST["title"],
            "description" => $_POST["description"],
            "image" => $_POST["url"],
            "post_id" => $_POST["id"]
            // "categorie" => $categorie
        );
        // var_dump($data);
        // die();
        $update = new PostModel();
        $update->update_post($data);
        if($update){
            header("location: ../view/home.php");
        }
    }

    public function delete_post()
    {
        if(isset($_POST["delete"])){
            $delet = new PostModel();
            $delet->delete_post($_POST["id"]);
            if($delet){
                header("location: ../view/home.php");
            }
        }
    }
}


    if(isset($_POST["Goo"])){
        $Goo = new PostCnotroller();
        $Goo->add_post();
    }

    if(isset($_POST["delete"])){
        $delet = new PostCnotroller();
        $delet->delete_post();
    }

    if(isset($_POST["update"])){
        $update = new PostCnotroller();
        $update->update_post();
    }
    
    if (isset($_GET["logout"]))
    {
        session_unset();
        session_destroy();
        unset($_SESSION);
        header("location: ../view/Sing-In.php");
    }   