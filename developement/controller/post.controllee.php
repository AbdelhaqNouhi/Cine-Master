<?php
require "../model/post.model.php";

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
            // $username = $_SESSION["username"];
            $title = $_POST["title"];
            $description = $_POST["description"];
            $image = $_POST["url"];
            // $categorie = $_POST["categorie"];

            $data = array(
                // "username" => $username,
                "title" => $title,
                "description" => $description,
                "image" => $image,
                // "categorie" => $categorie
            );
            $add = new PostModel();
            $add->add_post($data);

            if($add){
                header("location: ../view/home.php");
            }
        }
    }

    public function update_post()
    {
        $update = new PostModel();
        $update->update_post();
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
        header("locatino; ../view/update.php");
    }