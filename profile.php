<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PhotoBook - Connect Photography Geeks</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/photoconn.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css" rel="stylesheet">
  <link href="css/fluid-gallery.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>

  <!-- Custom scripts for this page -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/checkUserType.js"></script>
  <script src="js/upload.js"></script>
  <script src="http://malsup.github.com/jquery.form.js"></script> 
  <script src="js/jquery.datetimepicker.js"></script>
  <script src="js/jquery.datetimepicker.full.min.js"></script>


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">PhotoBook</a>
      <span> <h2 class="white">Hi, <?php echo $_SESSION['name']; ?>!</h2> </span>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#photos">Your Photos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#discover">Discover</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="signout.php">Sign Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Photography helps people to see</div>
        <div class="intro-heading">Let your words be few, and your exposures many.</div>
        <!-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">Tell Me More</a> -->
      </div>
    </div>
  </header>

  <section class="bids" id="bids">
    <div class="col-lg-12 text-center">
      <h2>Make a new Request </h2>
      <p>
      <input type="text" id="datetimepicker"/> <br>
      Location: <input type="text" id="reqLoc"> <br>
      Type of photography: <input type="text" id="reqType"> <br>
      <button id="chooseTimeDateBtn">Confirm Request </button> <br>
      </p>
      <h1> Your Current Requests: </h1>
      <p> <b>12/15/2020</b> at <b>13PM</b> Wedding Photography in <i>Queens, NY</i>
      <h2> Bids by: </h2>
      <p><b><a href=""> Mike Tran</a> </b> at $50 per hour. <a href=""> Contact </a> <a class="btn btn-primary">
        Select </a> </p>
      <p><b><a href=""> Elizabeth Brown</a> </b> at $100 per hour. <a href=""> Contact </a> <a class="btn btn-primary">
        Select </a> </p>
    </div>
  </section>

  <!-- Photos -->
  <section class="page-section" id="photos">
    <div class="container gallery-container">
    <!-- <div id="checkUser"></div> -->
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Your Photos</h2>
      </div>
      <div class="tz-gallery">
        <div id="myGallery" class="row">
          <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="img/BostonSkyline.jpg">
              <img src="img/BostonSkyline.jpg" alt="Bridge">
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="img/DallasSkyline.jpg">
              <img src="img/DallasSkyline.jpg" alt="Park">
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="img/DallasSkyline2.jpg">
              <img src="img/DallasSkyline2.jpg" alt="Tunnel">
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
          </div>
        </div>
      </div>
      
      <form id="myForm" action="" method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="fileToUpload" id="file">
      <input type="submit" value="Upload" id="uploadBtn" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">
      </form>
    </div>
  </section>


  <section class="page-section" id="discover">
    <div class="container gallery-container">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Discover </h2>
        <button id="mostpopular" class="btn btn-primary" type="submit">Most Popular</button>
      <button id="mostpopular" class="btn btn-primary" type="submit">Most Recent</button>
      <button id="mostpopular" class="btn btn-primary" type="submit">Recommend me</button>
      </div>
      <!-- <p class="page-description text-center">Most Popular Photos</p> -->
      <div class="tz-gallery">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <a class="lightbox" href="img/bridge.jpg">
              <img src="img/bridge.jpg" alt="Bridge">
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="img/park.jpg">
              <img src="img/park.jpg" alt="Park">
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="img/tunnel.jpg">
              <img src="img/tunnel.jpg" alt="Tunnel">
            </a>
          </div>
          <div class="col-sm-12 col-md-8">
            <a class="lightbox" href="img/traffic.jpg">
              <img src="img/traffic.jpg" alt="Traffic">
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="img/coast.jpg">
              <img src="img/coast.jpg" alt="Coast">
            </a>
          </div>
          <div class="col-sm-6 col-md-4">
            <a class="lightbox" href="img/rails.jpg">
              <img src="img/rails.jpg" alt="Rails">
            </a>
          </div>
        </div>
      </div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">More</a>

    </div>
  </section>
  

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; PhotoBook 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  

  <!-- Bootstrap core JavaScript -->

  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/photoconn.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.tz-gallery');
</script>



</body>

</html>