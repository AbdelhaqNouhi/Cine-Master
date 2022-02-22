<?php
 require "../controller/user.controllee.php";
    if(isset($_POST["sing_up"])){
        $sing = new UserController();
        $sing -> add_user();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles//css/style.css">
    <title>CineMaster</title>
</head>
<body>
    <div class="sing-up">
        <form action="#" method="POST">
            <div class="titre">
                <h1>Cine Master</h1>
            </div>
                <div class="singup">
                    <h1>Sing Up</h1>
                    <input type="text" name="username" placeholder="username" required>
                    <input type="text" name="email" placeholder="email" required>
                    <input type="password" name="password" placeholder="password"required>
                    <!-- <input type="password" name=" Re-Password" placeholder="Re-enter Password"> -->
                    <input class="botton" type="submit" name="sing_up" value="Sing Up">
                </div>
        </form>
    </div>
</body>
</html>