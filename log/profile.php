<?php
session_start();
include("../backend/connection.php");
include("../backend/functions.php");

$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<title> THECLOTHΞS - homepage</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="../css/profile.css">
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
            <a class="text-black" style="text-decoration: none;" href="profilex.php"><?php echo $user_data['username']; ?><i class="fa fa-thin fa-user text-black" href="profile.php"></i> </a>
          </li>

        </div>
        <li class="nav-item form-check form-switch" id="switch">
          <input type="checkbox" class="form-check-input" id="darkSwitch">
          </li>
        <script src="../dark-mode-switch.min.js"></script>

        </ul>
        </div>
      </nav>
      <div class="page-content page-container bg-light" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-white user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <h6 class="f-w-600 text-black"><?php echo $user_data['username']; ?></h6>
                                                                <p class="text-black"><?php echo $user_data['usertype']; ?></p>
                                                                <i class="text-black mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8 bg-light">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600 text-black">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <h6 class="f-w-400"><?php echo $user_data['email']; ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Phone</p>
                                                                        <h6 class="f-w-400">98979989898</h6>
                                                                    </div>
                                                                </div>
                                                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Recent</p>
                                                                        <h6 class="f-w-400">Sam Disuja</h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Most Viewed</p>
                                                                        <h6 class=" f-w-400">Dinoter husainm</h6>
                                                                    </div>
                                                                </div>
                                                                <br>
                  <div class="col-md-6 justify-content-end">
                    <a class="btn btn-lg btn-primary btn-block btn-signin bg-black text-white" href="../backend/logout.php">Log Out</a>
                  </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        <p>Clothes of characters from the most famous movies and series.</p>

      </div>
      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-3 text-center">

        <!-- Content -->
        <h3 class="text-uppercase font-weight-bold">contact us</h3>
        <div class="row">
          <div class="text-center col-sm">
            
                    <p>Teplice, CZ</p>
                
          </div>
          <div class="text-center col-sm">
            
                    <p>666 172 852</p>
                
        </div>
        <div class="text-center col-sm">
           
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