<?php
session_start();
include("../backend/connection.php");
include("../backend/functions.php");
include 'database.php';

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../ajax/ajax.js"></script>


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
<div class="col-xl-6 col-md-12">

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
<div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Users</b></h2>
					</div>
					<div class="col-sm-6 text-end">

						<a href="JavaScript:void(0);" class="btn btn-danger" id="delete_multiple"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						
					</div>
                </div>
            </div>
            <table class="text-black table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>SL NO</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM users");
					$i=1;
					while($user_data = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $user_data["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $user_data["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $i; ?></td>
					<td><?php echo $user_data["username"]; ?></td>
					<td><?php echo $user_data["email"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $user_data["id"]; ?>"
							data-name="<?php echo $user_data["username"]; ?>"
							data-email="<?php echo $user_data["email"]; ?>"
							title="Edit">&#xE254;</i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $user_data["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete">&#xE872;</i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>NAME</label>
							<input type="text" id="name" name="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label>EMAIL</label>
							<input type="email" id="email" name="email" class="form-control" required>
						</div>				
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id" class="form-control" required>					
						<div class="form-group">
							<label>Name</label>
							<input type="text" id="name_u" name="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" id="email_u" name="email" class="form-control" required>
						</div>			
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
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