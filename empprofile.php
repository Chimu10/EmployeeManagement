<?php

include("config.php");
session_start();

// $username = $_GET['username'];

// $query = "SELECT * FROM users WHERE username = '$empuse'";
// $data = mysqli_query($conn, $query);

// $total = mysqli_num_rows($data);

// $result = mysqli_fetch_assoc($data);

$query = "SELECT * FROM users WHERE username='$_SESSION[login_user]';";
$data = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($data);


//  echo $_SESSION['login_user']; 




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Profile</title>

    <link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<style>
    body {
    background-color: #e8f5ff;
    font-family: Arial;
    /* overflow: hidden; */
}
</style>
<body>
    <div class="navbar-top">
        <div class="title">
            <h1> Employee Profile</h1>
        </div>

        <ul>
            <li>
                <a href="changepass.php">
                    Change Password
                </a>
            </li>
            <li>
                <a href="logout.php">
                    Log Out
                </a>
            </li>
            
        </ul>
    </div>

    <div class="sidenav">
        <div class="profile">
            <img src="img.png" alt="" width="100" height="100">

            <div class="name">
                <!-- Full Name -->
                <?php echo $result['fname']; ?>
                <?php echo $result['lname']; ?>

            </div>
            <div class="job">
                <!-- Username -->
                <?php echo $result['username']; ?>


            </div>
            <div class="job">
                <!-- emp department -->
                <?php echo $result['empdept']; ?>

            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <div class="card">
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <td>FName</td>
                            <td>:</td>
                            <td><?php echo $result['fname']; ?></td>
                        </tr>
                        <tr>
                            <td>LName</td>
                            <td>:</td>
                            <td><?php echo $result['lname']; ?></td>
                        </tr>
                        <tr>
                            <td>Date Of Birth</td>
                            <td>:</td>
                            <td><?php echo $result['dob']; ?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><?php echo $result['gender']; ?></td>
                        </tr>
                        <tr>
                            <td>Mobile Number</td>
                            <td>:</td>
                            <td><?php echo $result['mobnumber']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $result['email']; ?></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td>:</td>
                            <td><?php echo $result['city']; ?></td>
                        </tr>
                        <tr>
                            <td>PINCODE</td>
                            <td>:</td>
                            <td><?php echo $result['pin']; ?></td>
                        </tr>
                        <tr>
                            <td>empcode</td>
                            <td>:</td>
                            <td><?php echo $result['empcode']; ?></td>
                        </tr>
                        <tr>
                            <td>emp department</td>
                            <td>:</td>
                            <td><?php echo $result['empdept']; ?></td>
                        </tr>
                        <tr>
                            <td>username</td>
                            <td>:</td>
                            <td><?php echo $result['username']; ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        
    </div>
    <!-- End -->
</body>
</html>