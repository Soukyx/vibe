<?php


if (
   isset($_POST['username']) &&
   isset($_POST['email']) &&
   isset($_POST['password']) &&
   isset($_POST['cpassword'])
) {

   session_start();

   include("connection.php");
   include("functions.php");


   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];


   $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
   if (mysqli_num_rows($query) > 0) {
      header('location:../nolog/register.php?error=1');
   }
   $query = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
   if (mysqli_num_rows($query) > 0) {
      header('location:../nolog/register.php?error=1');
   } elseif ($password != $cpassword) {
      header('location:../nolog/register.php?error=1');
   } else {

               // Insert into Database  
               $user_id = rand(10,188);
               $query = "insert into users (user_id,username, email, password) values ('$user_id','$username','$email','$password')";

               mysqli_query($con, $query);

               header("Location: ../nolog/login.php");
               die;
            }
         }