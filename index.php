<!DOCTYPE HTML>

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RANGISHA information Management system</title>
    <link rel="shortcut icon" href="images/gv.png">
    <!--<link rel="icon" type="image/png" href="https://cdn.pixabay.com/photo/2016/12/26/09/40/bride-1931722_1280.jpg"/>-->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/footer.css">

  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-->
  <link rel="stylesheet" href="css/font-awesome.css"><!--font_aswesome_icons-->
  <link href="//fonts.googleapis.com/css?family=Basic" rel="stylesheet"><!--online-fonts-->
  
  <link href="//fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
  
    <style>

    </style>
  </head>

  <body>


    <div class="b-example-divider"></div>

    <header class="p-3 bg-primary text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          
          </a>

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 text-white"> Home</a></li>
            <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
            <li><a href="contact.php" class="nav-link px-2 text-white">Contact Us</a></li>
          </ul>
    <!--
          <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
          </form>
    -->
          <div class="text-end">
            <button onclick="window.location.href='user/login.php';" type="button" class="btn btn-outline-light me-2">Login</button>
            <button onclick="window.location.href='user/register.php';" type="button" class="btn btn-warning">Register</button>
          </div>
        </div>
      </div>
    </header>


    <hr>
    <div class="b-example-divider"></div>

    <div class="container col-xxl-8 px-4 py-5" style="background-image:  url(images/gravel.png)">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <!--<img src="https://cdn.dribbble.com/users/2421983/screenshots/10135332/media/6a6cdd2ddbb6dbbe8cdd77ecd797aa69.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">-->
          <img src="images/ulkk.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="900" height="700" loading="lazy">
        </div>

        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">RANGISHA information Management system</h1>
          <p class="lead" style="color: black;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, ab? 
                    Reiciendis expedita distinctio consequuntur consectetur adipisci voluptatum 
                    sed debitis ad optio autem beatae odio, corrupti, harum iure similique exercitationem quae.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button onclick="window.location.href='user/login.php';" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Already a Member</button>
            <button onclick="window.location.href='user/register.php';" type="button" class="btn btn-outline-secondary btn-lg px-4">New User</button>
          </div>
        </div>
      </div>
    </div>

    <hr>





<?php include 'footer.php '  ?>
</body>
</html>