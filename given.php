<?php 
    include("connection.php");
    error_reporting(0);
    $mno = $_GET['mno'];
    $query = "SELECT * FROM customer WHERE mobile = '$mno'";
    $data = mysqli_query($con,$query);
    $result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="given.css">
</head>
<body>
    <div class="form">
        <div class="heading">
            <h1>ADD AMOUNT / ITEMS</h1>
        </div>
        <form method="POST">
            <label for="uname">CUSTOMER NAME :</label><br>
            <input type="text" name="uname" value="<?php echo $result['name']?>" required><br>
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