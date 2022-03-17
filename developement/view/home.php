<?php
    require_once "../controller/post.controllee.php";
    // session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="../public/styles/style.css"> -->
    <link rel="stylesheet" href="../public/styles/css/style.css">
    <title>CineMaster</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <h1 class="navbar-brand col-2 col-lg-3 logo mt-2" href="#">Cine Master</h1> 
            <a class="navbar-mune col-1 col-lg-2" href="./home.php"><svg xmlns="http://www.w3.org/2000/svg"class="home" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/></svg></a>
                <a class="navbar-mune col-1 col-lg-2" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><svg xmlns="http://www.w3.org/2000/svg" class="add" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/></svg></a>
                    <a class="navbar-mune" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="profil" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg></a>
                        <a class="navbar-mune d-none d-lg-block col-2 col-lg-2"><?php echo $_SESSION["username"]?></a>
            <a class="navbar-mune col-lg-1" href="?logout">log Out</a>
                <input class="form-control search" type="search" placeholder="Search" aria-label="Search">
                
        </div>
    </nav>
    <?php 
        $Goo = new PostCnotroller();
        $getdata = $Goo->get_post();
        // session_start();
        foreach($getdata as $items):?>
        <div class="container col-lg-8 col-sm-12 post">
            <div class="col-lg-12 col-sm-12">
                <div class="user">
                    <div class="media">
                        <img src="../public/images/IMG_20211212_000046.jpg" class="rounded-circle" alt="">
                    </div>
                    <div class="text">
                        <div class="media-body ml-3 mt-3"><?php echo $items["username"]?></div>
                        <div class="text-muted small"><?php echo $items["time_create"]?></div>
                    </div> 
                    <?php
                        if($items["user_id"] == $_SESSION["id"]){?>
                            
                            <form class="more" action="./update.php" method="POST">
                                <div>
                                    <a data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-three-dots point" viewBox="0 0 16 16">
                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg></a>
        
                                    <ul class="dropdown-menu">
                                        <input type="hidden" name="id" value="<?php echo $items["post_id"]?>">
                                        <input class="dropdown-item" type="submit" name="delete" value="Delete">
        
                                        <input type="hidden" name="title" value="<?php echo $items["title"]?>">
                                        <input type="hidden" name="description" value="<?php echo $items["description"]?>">
                                        <input type="hidden" name="url" value="<?php echo $items["image"]?>">
                                        <input type="hidden" name="id" value="<?php echo $items["post_id"]?>">
                                        <input type="submit" class="dropdown-item" name="edit" value="Update">
                                    </ul>
                                </div>
                            </form>
                        <?php } ?>
                </div>      
                
                <div class="text mt-4 ">  
                    <div class="titel">
                        <h4><?php echo $items["title"]?></h4>
                    </div>
                    <div>
                        <p><?php echo $items["description"]?></p>
                    </div>
                </div>
            </div>
                <div>
                    <img src="<?php echo $items["image"]?>" class=" w-100 img-post" alt="...">
                </div>
                <form action="../controller/comment.controllee.php" method="POST">
                    <?php
                    require_once "../controller/comment.controllee.php";
                    $getcomment = new CommentController();
                    $get = $getcomment->get_comment($items["post_id"]);
                    
                    foreach($get as $stmnt):?>
                    <div class="user_comment">
                        <div class="img_comment">
                            <img src="../public/images/IMG_20211212_000046.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="spa">
                            <div class="comments"><?=$stmnt["username"]?></div>
                            <div class="comments"><?=$stmnt["comment"]?></div>
                        </div>
                     </div>
                    <?php endforeach;?>
                    <div class="input-group commit">
                        <input type="hidden" name="id" value="<?=$items["post_id"]?>">
                        <input type="text" class="form-control" name="comment" placeholder="Comment">
                        
                        <!-- <a class="botton" type="submit" name="send">
                            <svg xmlns="http://www.w3.org/2000/svg"class="bi bi-arrow-up-circle-fill send" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                            </svg></a> -->
                        </div>
                    </form>
                </div>
                <?php endforeach;?>
        
        <form action="../controller/post.controllee.php" method="POST">
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" aria-labelledby="staticBackdropLabel">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                    <h2 class="modal-title" id="staticBackdropLabel">Add Post</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="title" placeholder="title">
                </div>
                <div class="modal-body">
                    <input type="text" name="description" placeholder="description">
                </div>
                <div class="modal-body">
                    <input type="text" name="url" placeholder="URL:">
                </div>
                <div class="modal-footer">
                    <input class="btn w-100" type="Submit" name="Goo" value="Goo">
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>