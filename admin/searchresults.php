<?php


session_start();
include 'database.php';
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
      <div class="page-content page-container bg-light" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">


<section class="bg-light">

<?php

if (isset($_GET['search'])) {

  $s = $_GET['searchbox'];

  $query = "SELECT username, email, usertype FROM users WHERE username = '$s' OR username = '$s' ORDER BY id DESC LIMIT 5";

?>

  <div class="container col-md-6">
    <div id="card3" class="col-md-6 float-left">
      <div class="text-center">
        <h4 class="title">Searched results for "<?php echo $s; ?>".</h4>





        <?php

        if ($result = mysqli_query($con, $query)) {

          if (mysqli_num_rows($result) == 0) {

            echo "<p>No results matches to your query.</p>";
          } else {
           

            while ($user_data = mysqli_fetch_assoc($result)) {
        ?>
              <?php

              ?>
              <br>
                <br>
                <div class="col-md-12 margin-0">
                  <a class="btn btn-lg btn-primary btn-block" id="btn" href="users.php">Exit</a>
                </div>
                <br>
                <hr>
                <br>
                
                <br>
                <div class='info'>
                  <p class="inf">Name: <?php echo $user_data['username']; ?></p>
                </div>
                <div class='info'>
                  <p class="inf">Email: <?php echo $user_data['email']; ?></p>
                </div>
                <br>
                <hr>
              
              <br>
            </div>
            </div>
            <div id="card2" class="col-md-6 float-right" style="padding-bottom: 26px;">
      <div class="text-center">
      <h4 class="title">Search results for another user.</h4>
      <br>
      <br>

      <form class="navbar-form navbar-right col-md-12" action="searchresults.php" method="GET">

<div class="search-area">
<div class="form-group">

<div class="search-wrap">

  <label for="searchbox" class="sr-only">Search:</label>
  <div class="input-group">
    <input type="text" class="form-control col-md-12" name="searchbox" id="searchbox" placeholder="Search users" required autocomplete="off">
    <div class="input-group-append">
      <button class="btn btn-secondary" name="search" value="Search" type="submit">
        <i id="sb" class="fa fa-search"></i>
      </button>
    </div>
  </div>

  <div id="searchresult" class="search-results hide"></div>


</div>


</div>
</div>
<br>
</form>
      <?php

            }

            
          }
        } else {
          die("Error with the query");
        }
      }

      ?>
     















      </div>

    </div>
</section>




                                                
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