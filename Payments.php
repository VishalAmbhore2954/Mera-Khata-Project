<?php
    include("connection.php");
    $mno = $_GET['mno'];
    $sql = "SELECT * FROM customer WHERE mobile = '$mno'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
?>

<?php
    if(isset($_POST['submit'])){
        $data = $_POST['desc'];
        $amt = $_POST['amt'];
        $amt2 = $amt - $row['total'];
        $sql2 = "UPDATE customer SET data = '$data', total = '$amt2' WHERE mobile = '$mno'";
        $result2 = mysqli_query($con,$sql2);
        if($row['total']>$amt){
            header("Home.php?");
        }else{
            header("location:Congrats.php?");
        }
    }
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
            <label for="pass" >REMAIN AMOUNT :</label><br>
            <input type="text" name="amt" id="amt" value="<?php echo $row['total']?>"  required><br>
            <label for="cpass" >ADD DESCREPTION :</label><br>
            <input type="text" name="desc"><br>
            <input type="submit" name="submit" value="ADD PAYMENT" id="button"><br>
            <div class="regLink">
                <label for="cpass"></label><a href="Home.php">Home Page</a>
            </div>
        </form>
    </div>
</body>
</html>