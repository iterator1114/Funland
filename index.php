<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Title of website -->
  <title>Funland | Unlimited Fun</title>
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico">
  <!-- Font kit -->
  <script src="https://kit.fontawesome.com/e1d34fac90.js" crossorigin="anonymous"></script>
  <!-- BootstrapCDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- External stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <section id="title">
     <!-- Nav Bar -->
     <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
          $loggedin= true;
        }
        else{
          $loggedin = false;
        }
      echo '<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
          <em>funland</em>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item gap-2">
              <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item gap-2 dropdown">
              <a class="nav-link dropdown-toggle sample" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <i class="fab fa-cc-discover"></i>
                Discover
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #808080; border: 1px solid #0062cc;">
                <a class="dropdown-item" href="movies.php">Movies</a>
                <a class="dropdown-item" href="songs.php">Songs</a>
              </div>
            </li>
            <li class="gap-2 nav-item">
              <a class="nav-link" href="about.php">About us</a>
            </li>
            <li class=" gap-2 nav-item">
              <a class="nav-link" href="#footer">Contact us</a>
            </li>';
            if($loggedin){
              echo '<li class="nav-item" style="padding-top: 6px;">
              <button type="button" class="btn btn-light btn-sm"><a style="text-decoration: none; color: #6c757d" href="logout.php">Log Out</a></button>
        
            </li>';
          }
            
          echo '</ul>
        </div>
      </nav>'
      ?>
    <!-- Front Background Image -->
    <div class="front" style="background-image:url(img/3.jpg)">
      <div class="text">
        <h1>Welcome to Funland</h1>
        <h5>Entertainment is anything that gives you enjoyment. Almost all of us need some sort of entertainments...</h5>
      </div>
    </div>

  </section>


   <!-- Features -->

   <section id="features;" style="background-color: #343a40; padding: 2% 8%;">

    <div class="row">
      <div class="feature-box col-lg-4" style="padding: 1% 5%;">
        <i class="icon fas fa-check-circle fa-4x symbols"></i>
        <h3>Let the Music Speak!</h3>
        <p style="color: grey;">Let music flow in your heart and enrich your soul.</p>
      </div>

      <div class="feature-box col-lg-4" style="padding: 1% 5%;">
        <i class="icon fas fa-bullseye fa-4x symbols"></i>
        <h3>Entertainment for everyone</h3>
        <p style="color: grey;">You will exit with a huge smile on your face.</p>
      </div>
      <div class="feature-box col-lg-4" style="padding: 1% 5%;">
        <i class="icon fas fa-heart fa-4x symbols"></i>
        <h3>We bring dreams to come to life.</h3>
        <p style="color: grey;">Reels that let you feel real for every experience.</p>
      </div>
    </div>
  </section>

   <!-- Middle section -->

  <!-- SONGS -->

  <section class="songs-img">
    <h2>songs</h2>
    <!-- Carousel -->
    <div id="testimonial-carousel-1" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="#"><img class="passport-photo" src="img\arjit.jpeg" alt="Arjit Singh"></a>
              <h3>Arjit Singh</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="#"><img class="passport-photo" src="img\honey1.jpeg" alt="Honey Singh"></a>
              <h3>Honey Singh</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="#"><img class="passport-photo" src="img\shanu.jpeg" alt="Kumar Sanu"></a>
              <h3>Kumar Sanu</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="#"><img class="passport-photo" src="img\justin.jpeg" alt="Justin Bieber"></a>
              <h3>Justin Bieber</h3>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="#"><img class="passport-photo" src="img\alan.jpeg" alt="alan walker"></a>
              <h3>Alan Walker</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="#"><img class="passport-photo" src="img\mica.jpeg" alt="Mika Singh"></a>
              <h3>Mika Singh</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="#"><img class="passport-photo" src="img\chainsmokers.jpeg" alt="The chainsmokers"></a>
              <h3>Chainsmokers</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="#"><img class="passport-photo" src="img\armaan.jpeg" alt="Armaan malik"></a>
              <h3>Armaan Malik</h3>
            </div>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel-1" role="button" data-slide="prev" style="width:40px;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel-1" role="button" data-slide="next" style="width: 40px;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>


   <!-- MOVIES -->

   <section class="movies-img">
    <h2>movies</h2>
    <!-- Carousel -->
    <div id="testimonial-carousel-2" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="https://youtu.be/jzYxbnHHhY4"><img class="passport-photo" src="img\bhulaiya.jpg" alt="bhool bhulaiya"></a>
              <h3>Bhool Bhulaiyaa</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="https://youtu.be/ULEQb_l-N08"><img class="passport-photo" src="img\kgf.jpg" alt="kgf"></a>
              <h3>K.G.F: Chapter 1</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="https://youtu.be/vCQ3ZrE8DKw"><img class="passport-photo" src="img\singh.jpg" alt="singhIsBling"></a>
              <h3>Singh Is Bliing</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="https://youtu.be/LKNHVDPKy7g"><img class="passport-photo" src="img\dhamaal.jpg" alt="dhamaal"></a>
              <h3>Dhamaal</h3>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="https://youtu.be/My5L3qLhewg"><img class="passport-photo" src="img\khatta.jpg" alt="khatta meetha"></a>
              <h3>Khatta Meetha</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="https://youtu.be/TIQ5hrfermg"><img class="passport-photo" src="img\hera.jpg" alt="hera pheri"></a>
              <h3>Hera Pheri</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="https://youtu.be/6FqUN9MO0zc"><img class="passport-photo" src="img\bhagaam.jpg" alt="bhagam bhaag"></a>
              <h3>Bhagam Bhag</h3>
            </div>
            <div class="feature-box col-lg-3 col-sm-6">
              <a href="https://youtu.be/LXXkiUKDK4w"><img class="passport-photo" src="img\entertainment.jpg" alt="entertainment"></a>
              <h3>Entertainment</h3>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel-2" role="button" data-slide="prev" style="width:40px;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel-2" role="button" data-slide="next" style="width: 40px;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  
  <!-- Footer -->

  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <i class="social-icon fab fa-facebook-f symbols"></i>
      <i class="social-icon fab fa-twitter symbols"></i>
      <i class="social-icon fab fa-instagram symbols"></i>
      <i class="social-icon fas fa-envelope symbols"></i>
      <p>© Copyright 2020 Funland</p>
      <p>Terms | privacy</p>
    </div>
  </footer>
</body>
</html>