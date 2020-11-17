<!DOCTYPE html>
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
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/photoconn.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css" rel="stylesheet">
  <link href="css/fluid-gallery.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">PhotoBook</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#discover">Discover</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" id="LoginOrRegister" href="#loginForm">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To PhotoBook!</div>
        <div class="intro-heading text-uppercase">We connect photography geeks</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">Tell Me More</a>
      </div>
    </div>
  </header>

  <script>
    function openForm() {
      document.getElementById("loginForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("loginForm").style.display = "none";
    }

    function register() {
      document.getElementById("loginForm").style.display = "none";
      document.getElementById("loginForm").style.visibility = "hidden";
      document.getElementById("register").style.display = "block";
      document.getElementById("register").style.visibility = "visible";
      var link = document.getElementById("LoginOrRegister");
      link.setAttribute("href", "#register");
      link.innerHTML = "Register";
    }

    function login() {
      document.getElementById("loginForm").style.display = "block";
      document.getElementById("loginForm").style.visibility = "visible";
      document.getElementById("register").style.display = "none";
      document.getElementById("register").style.visibility = "hidden";
      var link = document.getElementById("LoginOrRegister");
      link.setAttribute("href", "#loginForm");
      link.innerHTML = "Login";
    }
  </script>


  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted"> PhotoBook is a solution for connecting photographers and customers
            alike by offering
            a marketplace for customers to request photography services,
            and an online platform for photographers to sell prints and photos. </h3>
        </div>
      </div>
    </div>
  </section>

  <!-- About cont -->
  <section class="page-section" id="photographers">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Photographers</h2>
          <h3 class="section-subheading text-muted">For the creative and motivated photographers</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <!-- <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span> -->
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-image fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Showcase</h4>
          <p class="text-muted">What is your best photo? Let's us know</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-ad fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Sales</h4>
          <p class="text-muted">Sell your photos online, the easy way</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-calendar-alt fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Bidding</h4>
          <p class="text-muted">Bid on your suitable photography sessions</p>
        </div>
      </div>
      <!-- <div class="col text-center">
          <a class="nav-item" href="#">Sign in as photographers</a>
      </div> -->
    </div>
  </section>

  <section class="page-section" id="customers">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Customers</h2>
          <h3 class="section-subheading text-muted">There is only one boss: The customer</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-search fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Browse</h4>
          <p class="text-muted">See the best photos from our awesome photographers</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Buy</h4>
          <p class="text-muted">Purchase your photos online. Secured, Fast, Convenient.</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-camera fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Request</h4>
          <p class="text-muted">Want something photographed? Let's us know</p>
        </div>
      </div>
      <!-- <div class="col text-center">
          <a class="nav-item" href="#">Sign in as customers</a>
      </div> -->
    </div>
  </section>

  <!-- Discover -->
  <section class="page-section" id="discover">
    <div class="container gallery-container">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Discover </h2>
      </div>
      <p class="page-description text-center">Most Popular Photos</p>
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
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="login.js"></script>
  <!-- Sign In -->
  <section class="page-section" id="loginForm" style="background-color: #fa7822;">
    <div class="form-popup">
      <div class="form-container" style="background-color: #ffffff;">
      <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Welcome back!</h2>
          <div id="loginMessage"></div>
        </div>
        <label for="email"><b>Username/Email</b></label>
        <div class="form-group">
          <input class="form-control" id="loginUsername" name="loginUsername" type="text" placeholder="Your Username/Email *" required="required" data-validation-required-message="Please enter your username.">
          <p class="help-block text-danger"></p>
        </div>
        <label for="psw"><b>Password</b></label>
        <div class="form-group">
          <input class="form-control" id="loginPassword" name="loginPassword" type="password" placeholder="Your Password *" required="required" data-validation-required-message="Please enter your username.">
          <p class="help-block text-danger"></p>
        </div>
        <div class="col-lg-12 text-center">
          <button id="loginBtn" class="btn btn-primary btn-xl text-uppercase" value="Submit" type="button" name="LoginBtn">Login</button>
        </div>
        <br>
        <div> New to PhotoBook? <a class="btn" onclick="register()">Register Now!</a></div>
        <div> Forgot your password? <a class="btn" onclick="register()">Reset Password</a></div>
      </div>
    </div>
  </section>


  <script src="register.js"></script>
  <!-- Register -->
  <section class="page-section" id="register" style="background-color: #fa7822;">
    <div class="form-container" style="background-color: #ffffff;" novalidate="novalidate" name="registration" id="registerForm">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">We're delighted to have you!</h2>
        <div id="registerMessage"></div>
      </div>
      <label for="yourname"><b>About You</b></label>
      <div class="form-group">
        <input class="form-control" id="newFn" name="firstname" type="text" placeholder="Your First Name *" required="required" data-validation-required-message="Please enter your first name.">
        <p class="help-block text-danger"></p>
        <input class="form-control" id="newLn" name="lastname" type="text" placeholder="Your Last Name *" required="required" data-validation-required-message="Please enter your last name.">
        <p class="help-block text-danger"></p>
        <input class="form-control" id="newPhoneN0" name="phonenumber" type="text" placeholder="Your Phone Number">
        <p class="help-block text-danger"></p>
        <input class="form-control" id="newZipCode" name="zipcode" type="text" placeholder="Your Zip Code">
        <p class="help-block text-danger"></p>
        Are you a photographer or a customer? <br>
        <input type="checkbox" id="isPhotographer" value="Yes"> I'm a photographer<br>
        <input type="checkbox" id="isCustomer" value="Yes"> I'm a customer<br>
      </div>
      <label for="email"><b>Username/Email</b></label>
      <div class="form-group">
        <input class="form-control" id="newUserName" name="username" type="text" placeholder="Your Username= *" required="required" data-validation-required-message="Please enter your username.">
        <p class="help-block text-danger"></p>
      </div>
      <div class="form-group">
        <input class="form-control" id="newEmail" name="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email.">
        <p class="help-block text-danger"></p>
      </div>
      <label for="psw"><b>Password</b></label>
      <div class="form-group">
        <input class="form-control" id="newPw" name="password" type="password" placeholder="Your Password *" required="required" data-validation-required-message="Please enter your password.">
        <p class="help-block text-danger"></p>
      </div>
      <div class="col-lg-12 text-center">
        <button id="registerBtn" class="btn btn-primary btn-xl text-uppercase" type="submit" name="RegisterButton">Register</button>
      </div>
      <div> Already a member? <a class="btn" onclick="login()">Login Now!</a></div>
  </div> 
  </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/Ngoc1.jpg" alt="">
            <h4>Mike Tran</h4>
            <p class="text-muted">Lead Designer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a name="foo">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/Mike2.jpg" alt="">
            <h4>Mike Tran</h4>
            <p class="text-muted">Lead Marketer</p>
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
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/NgocMike3.jpg" alt="">
            <h4>Mike Tran</h4>
            <p class="text-muted">Lead Developer</p>
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
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
          <p class="large text-muted">Our team of designer, developer, and marketer
            has collaborated very well to make PhotoBook a success.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <img class="img-fluid d-block mx-auto" src="img/logos/canon.png" alt="">
        </div>
        <div class="col-md-3 col-sm-6">
          <img class="img-fluid d-block mx-auto" src="img/logos/nikon.png" alt="">
        </div>
        <div class="col-md-3 col-sm-6">
          <img class="img-fluid d-block mx-auto" src="img/logos/sony.png" alt="">
        </div>
        <div class="col-md-3 col-sm-6">
          <img class="img-fluid d-block mx-auto" src="img/logos/fuji.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Contact
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">Don't hesitate to contacte us</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required"
                    data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required"
                    data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required"
                    data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required"
                    data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send
                  Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> -->

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>


  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for the page -->
  <script src="js/photoconn.js"></script>
  <script src="js/form-validation.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.tz-gallery');
  </script>



</body>

</html>