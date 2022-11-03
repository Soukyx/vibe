<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//neco bylo poslano
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//cti z databaze
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{


						if($user_data['usertype'] =='user'){
							$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:../log/index.php");
						die;
						}						
							elseif($user_data['usertype'] =='admin'){
								$_SESSION['user_id'] = $user_data['user_id'];
						header("Location:../admin/index.php");
						die;
						}
							}
					}
				}
			
			header('location:../nolog/login.php?error=1');
		}else
		{
			header('location:../nolog/login.php?error=1');
		}
	}