<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>About Us</title>
  <script src="https://kit.fontawesome.com/e1d34fac90.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<link rel="stylesheet" href="css/style.css">

<!-- <body style="background: #262626;"> -->

<body>
  <section id="title">

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        <em>funland</em>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <i class="fab fa-cc-discover"></i>
              Discover
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #808080; border: 1px solid #0062cc;">
              <a class="dropdown-item" href="movies.php">Movies</a>
              <a class="dropdown-item" href="songs.php">Songs</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact us</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>

    <div class="bgimage" style="background-image: url(img/bg21.jpeg); background-size: cover;  background-position: center; background-repeat: no-repeat; background-size: cover;
       margin-top:57px;">
      <div class="row">
        <div class="feature-box col-lg-6 col-sm-12" style="padding: 1% 5%;">
          <h1 style="text-decoration:underline; color:black;">ABOUT FUNLAND</h1>
          <p style="color:black; font-size:20px;">In the entertainment world ,you can have more of a personality and be yourself .You don't have a look like a standard of beauty. You can have something provocation to say.The sound and music are 50% of the entertainment in a movie.
            Entertainment is anything that gives you enjoyment.Almost all of us need some sort of entertainments. So, here we come up with solution of your stress. And that is <b>FUNLAND</b> .Here you can get all stuff related to songs and movies
            hence no need to waste your precious time here and there. KEEP WATCHING.
          </p>
        </div>
        <div class="feature-box col-lg-6 col-sm-12" style="padding: 3% 1%;">
          <a href="index.php"><img src="img/bgg1.png" class="side-photo" height="280px;" width="540px;"></a>
        </div>
      </div>

      <div class="my-area">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="single-my">
                <div class="img-area">
                  <img src="img/my_pic.jpeg" class="img-responsive ">
                  <div class="social">
                    <ul class="list-inline">
                      <li><a href="https://m.facebook.com/ennocent.abhi1"><i class="social-icon fab fa-facebook-f"></i></a></li>
                      <li><a href="https://instagram.com/__its__abhishek_?igshid=u60ot7fk6o3l"><i class="social-icon fab fa-instagram"></i></a></li>
                      <li><a href="abhishek.19b101083@abes.ac.in"><i class="social-icon fas fa-envelope"></i></a></li>
                      <li><a href="https://www.linkedin.com/in/abhishek-kumar-5a33111a5"><i class="social-icon fab fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="img-text">
                  <h4>Abhishek Kumar</h4>
                  <h5>Developer/Admin</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


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
