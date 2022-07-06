<?php 

include "config.php";
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
        align-items: center;
        justify-content: center;
    }
    form{
        width: 30%;
    }
</style>
<body>
    <form action="" method="post">
      
        <h1 class="head">Sign-Up</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
          
        <label for="passowrd">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="submit" value="submit">Sign Up</button>

    </form>

    <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $username = $_POST['username'];
      $password = $_POST['password'];
      $query = "SELECT * FROM `users` WHERE username = '$username'  AND password ='$password';";

      echo "$query";
      echo "$count";

      $res = mysqli_query($conn, $query);
    //   $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if(!$count > 0)
      {
        echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Invalid Email or Password');window.location.href='javascript:history.go(-1)';</SCRIPT>");

      }
      else
      {
        
        $_SESSION['login_user'] = $_POST['username'];
        echo "helo";

       header("Location:empprofile.php");

      }
    }

  ?>
</body>
</html>