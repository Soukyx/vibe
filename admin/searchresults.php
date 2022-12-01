<?php


session_start();
include 'database.php';
include("../backend/connection.php");
include("../backend/functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/profile.css">
<link rel="stylesheet" href="../css/dark-mode.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/da437b991a.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="ajax/admin.js"></script>
  <title>SPSUL - lol boosting</title>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: rgb(44, 44, 44);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;">




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
                      <a class="btn btn-lg btn-primary btn-block" id="btn" href="adminindex.php">Exit</a>
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


  <script src="main.js"></script>
        </div>
  <script src="jquery-3.1.1.min.js"></script>
  </div>

</body>
</html>