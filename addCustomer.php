<?php
    error_reporting(0);
    include("connection.php");
    
    if(isset($_POST['submit'])){
        $name = $_POST['uname'];
        $mno = $_POST['mno'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO `customer`(`name`, `mobile`, `email`) VALUES ('$name','$mno','$email')";
        
        $result = mysqli_query($con,$sql);

            if($result){
                echo "<script>alert('Data inserted successfully')
                window.location.href='http://localhost/mera-khata-project/Home.php';
                </script>";
             }else{
                echo "<script>alert('Data not inserted')</script>";
            }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="addCustomer.css">
</head>
<body>
    <div class="form">
        <div class="heading">
            <h1>ADD CUSTOMER</h1>
        </div>
        <form method="POST">
            <label for="uname">CUSTOMER NAME :</label><br>
            <input type="text" name="uname" required><br>
            <label for="pass" >MOBILE NUMBER :</label><br>
            <input type="text" name="mno" required><br>
            <label for="cpass" >EMAIL ID :</label><br>
            <input type="text" name="email"><br>
            <input type="submit" name="submit" value="ADD CUSTOMER" id="button"><br>
            <div class="regLink">
                <label for="cpass"></label><a href="Home.php">Home Page</a>
            </div>
        </form>
    </div>
</body>
</html>