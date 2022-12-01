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
<link rel="stylesheet" href="../css/style.css">
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
            <a class="text-black" style="text-decoration: none;" href="profile.php"><?php echo $user_data['username']; ?><i class="fa fa-thin fa-user text-black" href="profile.php"></i> </a>
          </li>

        </div>
        <li class="nav-item form-check form-switch" id="switch">
          <input type="checkbox" class="form-check-input" id="darkSwitch">
          </li>
        <script src="../dark-mode-switch.min.js"></script>

        </ul>
        </div>
      </nav>
      <div>
      <div class="text-center col-md-16 m-0 p-0 bg-black text-white" id="ah1">
          <h2>BRAND NEW CLOTHES</h2>
      </div>
      <div id="demo" class="carousel slide text-center" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner img-fluid cover align-top">
          <div class="carousel-item active img-fluid top">
            <img src="https://4kwallpapers.com/images/wallpapers/better-call-saul-bob-odenkirk-as-saul-goodman-season-6-2022-3840x2160-7849.jpg" alt="">
          <div id="cover" class="carousel-caption"><a id="car" href="#">Wear it like Saul Goodman.</a></div>
          </div>
          <div class="carousel-item img-fluid">
            <img src="https://4kwallpapers.com/images/wallpapers/better-call-saul-bob-odenkirk-as-saul-goodman-season-6-2022-3840x2160-7849.jpg" alt="">
            <div id="cover" class="carousel-caption"><a id="car" href="#">Wear it like Saul Goodman.</a></div>
          
          </div>
          <div class="carousel-item img-fluid">
            <img src="https://4kwallpapers.com/images/wallpapers/better-call-saul-bob-odenkirk-as-saul-goodman-season-6-2022-3840x2160-7849.jpg" alt="">
            <div id="cover" class="carousel-caption"><a id="car" href="#">Wear it like Saul Goodman.</a></div>

          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      </div>
      


<div class="row" style="padding:20px;">
    <div class="col-md-3 col-sm-6 img-fluid center" >
        <div class="product-grid">
            <div class="product-image img" >
                <a href="#" class="image img-fluid" style="height: 350px;">
                    <img style="width: 350px; height: 350px; object-fit: cover;" class="pic-1" src="https://pbs.twimg.com/media/FVm--5gXwAA6kKk?format=jpg&name=large">
                    <img style="width: 350px; height: 350px; object-fit: cover;" class="pic-2" src="https://pbs.twimg.com/media/FVm--5gXwAA6kKk?format=jpg&name=large">
                </a>
                <ul class="product-links text-center ">
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="far fa-star"></li>
                </ul>
                <h3 class="title"><a href="#">Women's Blouse Top</a></h3>
                <div class="price">$85.55</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image img-fluid cover" style="height: 350px;">
                    <img style="width: 350px; height: 350px; object-fit: cover;" class="pic-1" src="https://www.cnet.com/a/img/resize/834f528e6c39cb03896ec54924cef0c3ff639df4/hub/2019/08/24/00b360ed-3171-43e3-a834-6b05f7a7eccd/jesse-pinkman.jpg?auto=webp&fit=crop&height=1200&width=1200">
                    <img style="width: 350px; height: 350px; object-fit: cover;" class="pic-2" src="https://www.cnet.com/a/img/resize/834f528e6c39cb03896ec54924cef0c3ff639df4/hub/2019/08/24/00b360ed-3171-43e3-a834-6b05f7a7eccd/jesse-pinkman.jpg?auto=webp&fit=crop&height=1200&width=1200">
                </a>
                <ul class="product-links">
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="far fa-star"></li>
                    <li class="far fa-star"></li>
                </ul>
                <h3 class="title"><a href="#">Men's Jacket</a></h3>
                <div class="price">$88.88</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image" style="height: 350px;">
                    <img style="width: 350px; height: 350px; object-fit: cover;" class="pic-1" src="https://vader.news/__export/1616062179916/sites/gadgets/img/2021/03/18/gus-fring-better-call-saul.jpg_1188680388.jpg">
                    <img style="width: 350px; height: 350px; object-fit: cover;" class="pic-2" src="https://vader.news/__export/1616062179916/sites/gadgets/img/2021/03/18/gus-fring-better-call-saul.jpg_1188680388.jpg">
                </a>
                <ul class="product-links">
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="far fa-star"></li>
                </ul>
                <h3 class="title"><a href="#">Women's Blouse Top</a></h3>
                <div class="price">$85.55</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image" style="width: 350px; height: 350px; object-fit: cover;">
                    <img style="width: 350px; height: 350px; object-fit: cover;" class="pic-1" src="https://www.tvguide.com/a/img/resize/e1d66796dcccb4a7d60dc6d6e47cbda5d9af90df/hub/2020/04/19/cdd0e1bb-73ca-4f8f-a671-8b56f45d95ba/bcs-509-nacho-news.jpg?auto=webp&fit=crop&height=1080&width=1920">
                    <img style="width: 350px; height: 350px; object-fit: cover;" class="pic-2" src="https://www.tvguide.com/a/img/resize/e1d66796dcccb4a7d60dc6d6e47cbda5d9af90df/hub/2020/04/19/cdd0e1bb-73ca-4f8f-a671-8b56f45d95ba/bcs-509-nacho-news.jpg?auto=webp&fit=crop&height=1080&width=1920">
                </a>
                <ul class="product-links">
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="far fa-star"></li>
                    <li class="far fa-star"></li>
                </ul>
                <h3 class="title"><a href="#">Men's Jacket</a></h3>
                <div class="price">$88.88</div>
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