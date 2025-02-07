<?php
    include("connection.php");
    $mno = $_GET['mno'];
    $sql = "SELECT * FROM customer WHERE mobile = '$mno'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="pay.css">
</head>
<body>
    <div class="form">
        <div class="heading">
            <h1>CREADIT AMOUNT</h1>
        </div>
        <form method="POST">
            <label for="uname">CUSTOMER NAME :</label><br>
            <input type="text" value="<?php echo $row['name']?>" name="uname" required><br>
            <label for="pass" >ADD AMOUNT :</label><br>
            <input type="text" name="amt" id="amt" required><br>
            <label for="cpass" >ADD DESCREPTION :</label><br>
            <input type="text" name="desc"><br>
            <input type="submit" name="submit" value="ADD CUSTOMER" id="button"><br>
            <div class="regLink">
                <label for="cpass"></label><a href="Home.php">Home Page</a>
            </div>
        </form>
    </div>
</body>
</html>