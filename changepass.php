
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
    <form action="changepass.php" method="post">
      
        <h1 class="head">Change Password</h1>
        <label for="oldpass">Old Password:</label>
        <input type="password" id="oldpass" name="oldpass" required>
          
        <label for="newpass">New Password:</label>
        <input type="password" id="newpass" name="newpass" required>

        <label for="conpass">Confirm Password:</label>
        <input type="password" id="conpass" name="conpass" required>

        <button type="submit" name="submit" value="submit">Change Password</button>

    </form>

  

</body>
</html>

<?php

include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $old = $_POST['oldpass'];
    $new = $_POST['newpass'];
    $conpas = $_POST['conpass'];


    if($new == $conpas)
    {
        $query = "SELECT password from users WHERE username = '$_SESSION[login_user]';";
        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);



    
        if($old == $data['password']){

        
            $sql = "UPDATE users SET password = '$new', cpassword = '$conpas' WHERE username = '$_SESSION[login_user]';";
            // echo "$sql";

            $data = mysqli_query($conn , $sql);
            // echo "heelo";
            if($data){
                echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Password Updated'); window.location.href='empprofile.php';</SCRIPT>"; 

            }
            else {
                echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Not Updated'); window.location.href='javascript:history.go(-1)';</SCRIPT>";
            }
        }
        else{
            echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Something went wrong'); window.location.href='javascript:history.go(-1)';</SCRIPT>";

        }
    }
    else{
        echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Password do not match'); window.location.href='javascript:history.go(-1)';</SCRIPT>";
    
    }
}


?>