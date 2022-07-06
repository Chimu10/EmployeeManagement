<?php

include("config.php");

$emaill = $_GET['email'];

$query = "SELECT * FROM users WHERE email = '$emaill'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

$result = mysqli_fetch_assoc($data);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

      <form action="" method="POST">
      
        <h1 class="head">Update Employee Details</h1>
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" value="<?php echo $result['fname'];?>" required>
          
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" value="<?php echo $result['lname'];?>" required>
          
        <label for="dob">Date Of Birth:</label>
        <input type="date" id="dob" name="dob" value="<?php echo $result['dob'];?>" required>
          
        <label for="gender" <?php echo $result['gender']; ?> required >Gender:</label>
        <input type="radio" id="male" <?php if($result['gender']=="male") {echo "checked";}?> value="male" name="gender"><label for="male" class="light">Male</label><br>
        <input type="radio" id="female" <?php if($result['gender']=="female") {echo "checked";}?> value="female" name="gender"><label for="female" class="light">Female</label>

        <label for="mobnumber">Mobile Number:</label>
        <input type="tel" id="mobnumber" name="mobnumber" pattern="[0-9]{10}" value="<?php echo $result['mobnumber'];?>" readonly>

        <label for="email">Email ID:</label>
        <input type="email" id="email" name="email" value="<?php echo $result['email'];?>" readonly>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" value="<?php echo $result['city'];?>" required>

        <label for="pin">PIN:</label>
        <input type="text" id="pin" name="pin"  pattern="[0-9]{6}" value="<?php echo $result['pin'];?>" required>

        <label for="empcode">Employee Code:</label>
        <input type="text" id="empcode" name="empcode" value="<?php echo $result['empcode'];?>" required>

        <label for="empdept" >Employee Department:</label>
        <select id="empdept" name="empdept" required>
            <option value="" disabled selected>Select Employee Department</option>
            <option value="account"
            <?php
            if($result['empdept'] == 'account'){
                echo "selected";
            }  
            ?>
            >Account</option>
            <option value="legal"
            <?php
            if($result['empdept'] == 'legal'){
                echo "selected";
            }  
            ?>
            >Legal</option>
            <option value="purchase"
            <?php
            if($result['empdept'] == 'purchase'){
                echo "selected";
            }  
            ?>
            >Purchase</option>
            <option value="sale" <?php
            if($result['empdept'] == 'sale'){
                echo "selected";
            }  
            ?>
            >Sale</option>
            <option value="software" <?php
            if($result['empdept'] == 'software'){
                echo "selected";
            }  
            ?>
            >Software</option>
            <option value="hardware"
            <?php
            if($result['empdept'] == 'hardware'){
                echo "selected";
            }  
            ?>
            >Hardware</option>
            <option value="administration"
            <?php
            if($result['empdept'] == 'administration'){
                echo "selected";
            }  
            ?>
            >Administration</option>
        </select>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $result['username'];?>" readonly>

        <label for="password">Password:</label>
        <input type="password" id="passowrd" name="password" value="<?php echo $result['password'];?>" required>

        <label for="cpassword">Confirm Password:</label>
        <input type="password" id="cpassowrd" name="cpassword" value="<?php echo $result['cpassword'];?>" required>

        <button type="submit" name="update">Update Detail</button>
      </form>
      
    
</body>
</html>


<?php



if(isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $mobnumber = $_POST['mobnumber'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $empcode = $_POST['empcode'];
    $empdept = $_POST['empdept'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "UPDATE users SET fname ='$fname', lname= '$lname',dob = '$dob', gender = '$gender', mobnumber = '$mobnumber', email ='$email', city = '$city', pin ='$pin', empcode ='$empcode', empdept ='$empdept', username ='$username', password ='$password', cpassword ='$cpassword' WHERE email = '$emaill' ";
    echo "$sql";

    $data = mysqli_query($conn, $sql);

    if($data){
        echo "<script>alert('Information Updated'); window.location.href='allemp.php'</script>";
    }
    else{
        echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Failed to Update Record'); window.location.href='javascript:history.go(-1)';</SCRIPT>";
    }




}



?>