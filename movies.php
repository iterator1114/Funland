<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- Title of website -->
  <title>Movies | Unlimited Fun</title>
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico">
  <!-- Font kit -->
  <script src="https://kit.fontawesome.com/e1d34fac90.js" crossorigin="anonymous"></script>
  <!-- BootstrapCDN -->
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
  </section>


   
  <!-- Cover Photo -->

  <section id="testimonials">
    <div id="testimonial-carousel-1" class="carousel slide" data-ride="carousel" data-interval="2000">
      <div class="carousel-inner">
        <div class="carousel-item active" style="padding:0;">
          <a href="https://youtu.be/ULEQb_l-N08"><img src="img/kgf-l.jpg" class="img-fluid cover-img" alt=""></a>
        </div>
        <div class="carousel-item" style="padding:0;">
          <a href="https://youtu.be/LKNHVDPKy7g"><img src="img/dhamaal-l.jpg" class="img-fluid cover-img" alt=""></a>
        </div>
        <div class="carousel-item" style="padding:0;">
          <a href="https://youtu.be/My5L3qLhewg"><img src="img/khatta-l.jpg" class="img-fluid cover-img" alt=""></a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-carousel-1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-carousel-1" role="button" data-slide="next">
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


  
  <section id="new_song">
    <h2>OLD MOVIES</h2>
    <div id="testimonial-new-song" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner" style="padding: 0 40px;">
        <div class="carousel-item active">
          <!-- <h2 style="font-size: 4rem;">SONGS</h2> -->
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/-M9kKLaVD7s" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/nXOC7WJX1A8" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/28Ia7wl1V20" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/11nqml64K-k" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <h2 style="font-size: 4rem;">SONGS</h2> -->
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/pqtBaxVKWu4" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/mkUGA1Eeh9c" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/vB2m1uRF30c" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/Rfg1PnT-OXc" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-new-song" role="button" data-slide="prev" style="width:40px;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-new-song" role="button" data-slide="next" style="width: 40px;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>


  <section id="new_song">
    <h2>NEW MOVIES</h2>
    <div id="testimonial-new-song-1" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner" style="padding: 0 40px;">
        <div class="carousel-item active">
          <!-- <h2 style="font-size: 4rem;">SONGS</h2> -->
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/ULEQb_l-N08" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/TsLZB-y7teQ" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/ecbk_ZU236w" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/wyp-QkPkK5o" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <h2 style="font-size: 4rem;">SONGS</h2> -->
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/zloKjQXmwhE" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/HYUpNJJELeE" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/5QDKX5ExXqM" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/D_t-ctuN9-A" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-new-song-1" role="button" data-slide="prev" style="width:40px;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-new-song-1" role="button" data-slide="next" style="width: 40px;">
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
