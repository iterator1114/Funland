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
  <title>Songs | Unlimited Fun</title>
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
          <a href="https://youtu.be/N2-HsIYd0Go"><img src="img/milo.jpg" class="img-fluid cover-img" alt=""></a>
        </div>
        <div class="carousel-item" style="padding:0;">
          <a href="https://youtu.be/TvbrANCt5ss"><img src="img/gal.jpeg" class="img-fluid cover-img" alt=""></a>
        </div>
        <div class="carousel-item" style="padding:0;">
          <a href="https://youtu.be/aDFEb_W2t1Y"><img src="img/pal.jpg" class="img-fluid cover-img" alt=""></a>
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
 
   

  <!-- SONGS -->

  <section class="songs-img">
    <h2>songs</h2>
    <!-- Carousel -->
    <div id="testimonial-carousel-2" class="carousel slide" data-ride="carousel" data-interval="3000">
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
    <h2>NEW SONGS</h2>
    <div id="testimonial-new-song-1" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner" style="padding: 0 40px;">
        <div class="carousel-item active">
          <!-- <h2 style="font-size: 4rem;">SONGS</h2> -->
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/Jyst8oIHOAY" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/tFNWHLEIiJ0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/8Q5d0P6x61k" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/z6S4mO1G6yA" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <h2 style="font-size: 4rem;">SONGS</h2> -->
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/hUQ6kVhoM88" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/HYUpNJJELeE" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/SD4Z8dlZPd8" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/i0_m90T04uw" allowfullscreen></iframe>
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


  <section id="new_song">
    <h2>OLD SONGS</h2>
    <div id="testimonial-new-song-2" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner" style="padding: 0 40px;">
        <div class="carousel-item active">
          <!-- <h2 style="font-size: 4rem;">SONGS</h2> -->
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/wVcHY1ncmDg" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/CKtv0MDOK-o" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/nMfNWN5aBVU" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/VueN49P7JyU" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <h2 style="font-size: 4rem;">SONGS</h2> -->
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/Xuyj0PPhuXw" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/Uwegplp2ess" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/S62zSxhj1PY" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/Jw4wLVnFJ-E" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-new-song-2" role="button" data-slide="prev" style="width:40px;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-new-song-2" role="button" data-slide="next" style="width: 40px;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <section id="new_song">
    <h2>POPULAR SONGS</h2>
    <div id="testimonial-new-song-3" class="carousel slide" data-ride="carousel" data-interval="3000">
      <div class="carousel-inner" style="padding: 0 40px;">
        <div class="carousel-item active">
          <!-- <h2 style="font-size: 4rem;">SONGS</h2> -->
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/Ps4aVpIESkc" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/IJq0yyWug1k" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/MRtRcTfszjY" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/PVxc5mIHVuQ" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <!-- <h2 style="font-size: 4rem;">SONGS</h2> -->
          <div class="row">
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/92J9p0VplTo" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/Ydp5fLbxUbk" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/yFZvQ1Uv358" allowfullscreen></iframe>
              </div>
            </div>
            <div class="feature-box col-lg-3 col-sm-6 song_box">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item zoom" src="https://www.youtube.com/embed/NzpkclSyDNs" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#testimonial-new-song-3" role="button" data-slide="prev" style="width:40px;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonial-new-song-3" role="button" data-slide="next" style="width: 40px;">
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
