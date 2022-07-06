<?php

include 'config.php';

error_reporting(0);

// session_start();


if(isset($_POST['submit'])){
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

    if($password == $cpassword){
        $sql = "SELECT * FROM users WHERE email='$email'";
        $sql1 = "SELECT * FROM users WHERE mobnumber='$mobnumber'";
        $sql2 = "SELECT * FROM users WHERE username='$username'";

        $result = mysqli_query($conn, $sql);
        $res = $result->num_rows;

        $result1 = mysqli_query($conn, $sql1);
        $res1 = $result1->num_rows;

        $result2 = mysqli_query($conn, $sql2);
        $res2 = $result2->num_rows;

        if(!$res > 0 && !$res1 > 0 && !$res > 0){
            $sql = "INSERT INTO `users`(`fname`, `lname`, `dob`, `gender`, `mobnumber`, `email`, `city`, `pin`, `empcode`, `empdept`, `username`, `password`,`cpassword`, `date_time`) VALUES ('$fname','$lname','$dob','$gender','$mobnumber','$email','$city','$pin','$empcode','$empdept','$username','$password','$cpassword',current_timestamp());";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "<script>alert('Wow! User Registration Completed.'); window.location.href='allemp.php'</script>";
                $fname ="";
                $lname ="";
                $dob ="";
                $gender ="";
                $mobnumber ="";
                $email ="";
                $city ="";
                $pin ="";
                $empcode ="";
                $empdept ="";
                $username ="";
                $_POST['password'] ="";
                $_POST['cpassword'] ="";


            }
            else{
				echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Failed to Registere'); window.location.href='javascript:history.go(-1)';</SCRIPT>";
            }
        }
        else{
            if($res1 > 0){
				echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Woops! Number Already Exists.'); window.location.href='javascript:history.go(-1)';</SCRIPT>";

            }
            elseif($res > 0){
				echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Woops! Email Already Exists.'); window.location.href='javascript:history.go(-1)';</SCRIPT>";

            }
            else{
				echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Woops! Username Already Exists.'); window.location.href='javascript:history.go(-1)';</SCRIPT>";

            }

        }

        
    }
    else{
        echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Password do not match'); window.location.href='javascript:history.go(-1)';</SCRIPT>";

    }



}



?>