<!DOCTYPE html>
<html lang="cs" class="min-vh-100 m-0 p-0">
<head>
<meta charset="UTF-8">
<title>THECLOTHΞS - Register</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="../css/dark-mode.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/da437b991a.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css">

<!-- IE 11 polyfill for CSS and Custom Properties -->
<script
nomodule>window.MSInputMethodContext && document.documentMode && document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-ie11@5/css/bootstrap-ie11.min.css"><script src="https://cdn.jsdelivr.net/npm/ie11-custom-properties@4/ie11CustomProperties.min.js"><\/script>');</script>

  </head>
<body class="bg-white">
  
  <nav id="nav" class="navbar navbar-expand-md navbar-dark bg-white">
    <!--logo stranky=odkaz na homepage-->
    <a id="logo" class="navbar-brand navbar-nav text-black" href="index.php">
    THECLOTHΞS</a>
        <a href="#" class="fa fa-facebook text-white bg-black"></a>
        <a href="#" class="fa fa-twitter text-white bg-black"></a>
        <a href="#" class="fa fa-instagram text-white bg-black"></a>
          <!--navbar a collapse pri zmenseni stranky-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-xl-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item" id="review">
        <input class="bg-white text-black border-bottom border-dark" id="search" type="text" placeholder="Search.." name="search">
        <a href="#"><i class="fa fa-search text-black" href="#"></i></a>
      </li>
      <li class="nav-item " id="login">
        <a href="login.php"><i class="fa fa-thin fa-user text-black" href="login.php"></i></a>
      </li>


    </div>
    <li class="nav-item form-check form-switch " id="switch">
      <input type="checkbox" class="form-check-input" id="darkSwitch">
      </li>
    <script src="../dark-mode-switch.min.js"></script>
    </ul>
    </div>
    
  </nav>
      

	<div class="section bg-white h-100 min-vh-100 m-0 p-0 bg-light" >
		<div class="row m-0 p-0 ">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto m-0 p-0 ">
          <div class="card-body p-4 p-sm-5 m-0 p-0 ">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign Up</h5>
            <div class="text-center text-black">
                <p >Registered already? Sign in <a class="text-black" href="login.php">here.</a></p>
    
                </div>
            <form action="../backend/register.php" method="post" class="form-signin" enctype="multipart/form-data">
                <div class="form-floating mb-3 ">
                    <input name="username" type="text" class="form-control bg-light text-black border-bottom border-dark" id="floatingInput" placeholder="name">
                    <label for="floatingInput">Name</label>
                  </div>
              <div class="form-floating mb-3 ">
                <input name="email" type="email" class="form-control bg-light text-black border-bottom border-dark" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input name="password" type="password" class="form-control bg-light text-black border-bottom border-dark" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating mb-3">
                <input name="cpassword" type="password" class="form-control bg-light text-black border-bottom border-dark" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
              </div>
              <div class="form-check mb-3">
              </div>
              <div class="d-grid">
              <div class="col-md-12 text-center">
                  <?php
                  if (isset($_GET['error']) == true) {
                    echo '<p>Incorrct values.</p>';
                  }
                  ?>
                </div>
                <button type="submit" class="btn btn-primary btn-login text-uppercase fw-bold bg-black text-white border-0 col-md-3 justify-content-center" type="submit">Sign
                  up</button>
              </div>
              <hr class="my-4">
            </form>
          </div>
      </div>
    </div>
	</div>
  
   <!-- Footer -->
<footer class="page-footer font-small teal pt-4 bg-white">

    <!-- Footer Text -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-4 mt-md-0 mt-3 text-center">
  
          <!-- Content -->
          <h3 class="text-uppercase font-weight-bold">What we offer?</h3>
          <p>Collection of song lyrics and musical knowledge.</p>
  
        </div>
        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-3 text-center">
  
          <!-- Content -->
          <h3 class="text-uppercase font-weight-bold">contact us</h3>
          <div class="row">
            <div class="text-center col-sm">
                 <i class="fas fa-map-marker-alt mt-4 fa-2x"></i>
                      <p>Teplice, CZ</p>
                  
            </div>
            <div class="text-center col-sm">
                  <i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>666 172 852</p>
                  
          </div>
          <div class="text-center col-sm">
                  <i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>THECLOTHΞS@seznam.cz</p>
                  
          </div>
          </div>
  
        </div>
        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-3 text-center">
  
          <!-- Content -->
          <h3 class="text-uppercase font-weight-bold">Socials</h3>
          <h4 href="#" class="fa fa-facebook bg-black text-white" ></h4>
          <h4 href="#" class="fa fa-twitter bg-black text-white"></h4>
          <h4 href="#" class="fa fa-instagram bg-black text-white"></h4>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Text -->
  
    <!-- Copyright -->
    <div id="footera" class="footer-copyright text-center py-3 text-black">© 2022 Copyright:
      <a href="https://github.com/Soukyx" class="text-black">Soukyx</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
</body>
</html>