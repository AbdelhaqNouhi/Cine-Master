<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/css/style.css">
    <title>CineMaster</title>
</head>
<body>
<div class="sing-in">
    <div class="information">
         <h1>Cine Master</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>    
    </div>
    <form action="../controller/login.controller.php" method="POST">
        <div class="form">
            <h2>Sing In</h2>
            <input class="input" type="email" placeholder="E-mail" name="email" required>
            <input class="input" type="password" placeholder="password" name="password" required>
            <input class="botton" type="Submit" name="sing_in" value="Sing In">
            <a class="a" href="./Sing-Up.php">Sing Up</a>
        </div>     
    </form>
</div>
</body>
</html>