<?php

include("config.php");

$email = $_GET['email'];

$query = "DELETE FROM users WHERE email = '$email' ";
$data = mysqli_query($conn, $query);

if($data){
    echo "<script>alert('Record Deleted Sucessfully'); window.location.href='allemp.php'</script>";
}
else{
    echo "<SCRIPT LANGUAGE='JavaScript'> window.alert('Failed to Delete Record'); window.location.href='javascript:history.go(-1)';</SCRIPT>";
}



?>