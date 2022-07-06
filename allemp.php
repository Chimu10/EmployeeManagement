<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employee</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header">
            <h1>Employee Management System</h1>
            <div class="header-right">
                <a href="index.html">Home</a>
                <a href='allemp.php'>Employee List</a>
                <a href='newemp.html'>Add Employee</a>
                <a href='empsignup.php'>Employee LoginIn</a>
            </div>
          </div>

    </header>

    <div class="container">
        <table>
                <tr>
                    <th width="5%">SrNo</th>
                    <th width="15%">First Name</th>
                    <th width="15%">Last Name</th>
                    <th width="10%">Gender</th>
                    <th width="20%">Mobile</th>
                    <th width="21%">Email ID</th>
                    <th width="30%">Operations</th>
                </tr>
                
                <?php
                include("config.php");
                // error_reporting(0);
                $query = "SELECT * FROM users";
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);

                if($total!=0){
                    while($result= mysqli_fetch_assoc($data)){
                        echo "
                        <tr>
                        <td>".$result['id']."</td>
                        <td>".$result['fname']."</td>
                        <td>".$result['lname']."</td>
                        <td>".$result['gender']."</td>
                        <td>".$result['mobnumber']."</td>
                        <td>".$result['email']."</td>
                        <td><a href='update.php?email=$result[email]'><input type='submit' value='Update' class='update'></a>
                        <a href='delete.php?email=$result[email]'><input type='submit' value='Delete' class='delete' onclick= 'return checkdelete()'></a>
                        </td>
                        ";
                    }
                }
            


?>


        </table>
    </div>
    <script>
        function checkdelete()
        {
            return confirm('Are you sure you want to delete the record?');
        }
    </script>
</body>
</html>