<?php

session_start();
if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);
	unset($_SESSION['username']);
	unset($_SESSION['email']);

}

header("Location: ../nolog/login.php");
die;