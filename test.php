<?php
session_start();
include("config.php");

// $username = $_GET['username'];

// $query = "SELECT * FROM users WHERE username = '$empuse'";
// $data = mysqli_query($conn, $query);

// $total = mysqli_num_rows($data);

// $result = mysqli_fetch_assoc($data);

$query = "SELECT * FROM users WHERE username='$_SESSION[login_user]';";
echo "$query";

$data = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($data);


 echo $_SESSION['login_user']; 




?>

