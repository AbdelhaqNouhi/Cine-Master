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
            <h1 class="navbar-brand col-2 logo mt-2" href="#">Cine Master</h1> 
            <a class="navbar-mune col-2" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="profil" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg></a>
            <a class="navbar-mune col-2" href="#"><svg xmlns="http://www.w3.org/2000/svg"class="home" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/></svg></a>
            <a class="navbar-mune col-2" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="add" viewBox="0 0 16 16">
                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/></svg></a>
            <a class="navbar-mune col-2" href="#">log Out</a> 
            <input class="form-control search" type="search" placeholder="Search" aria-label="Search">
        </div>
    </nav>

    <div class="container col-lg-6 col-sm-12 post">
        <div class="col-lg-12 col-sm-12">
            <div class="user">
                <div class="media">
                    <img src="../public/images/IMG_20211212_000046.jpg" class="rounded-circle" alt="">
                </div>
                <div class="text">
                    <div class="media-body ml-3 mt-3">Abdelhaq Nouhi</div>
                    <div class="text-muted small">3 days ago</div>
                </div> 
                <div class="more">
                    <a data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" class="bi bi-three-dots point" viewBox="0 0 16 16">
                        <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Edit</a></li>
                        <li><a class="dropdown-item" href="#">Delete</a></li>
                        <li><a class="dropdown-item" href="#">more</a></li>
                    </ul>
                </div>
            </div>

            <div class="text mt-3">     
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
            <div>
                <img src="../public/images/IMG_20211212_000046.jpg" class=" w-100  img-post" alt="...">
            </div>
            <div class="spa">
                <span>welcom dear</span>
            </div>
            <div class="input-group commit">
                <input type="text" class="form-control" placeholder="Comment">
                <a class="" type="submit"><svg xmlns="http://www.w3.org/2000/svg"class="bi bi-arrow-up-circle-fill send" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                </svg></a>
            </div>
        <!-- <div class="card-footer">
            <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
            <strong>12</strong> Comments</small>
            </a>
        </div> -->
    </div>
</html>