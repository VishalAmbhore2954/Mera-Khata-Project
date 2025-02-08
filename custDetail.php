<?php
    include("connection.php");
    $mno = $_GET['mno'];
    $sql = "SELECT * FROM customer WHERE mobile='$mno'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custDetail.css">
</head>
<body>
    <div class="container">
        <h2><?php echo $row['name']?></h2>
        <label for="">Amount Remain : </label>
        <h1>&#8377;<?php echo $row['total']?></h1>
        <!-- <label for="" class="date">Date : </label><label for="" class="date"><?php echo $row['date']?></label><br> -->
        <div class="span"><span><?php echo $row['data']?></span><br></div>
        <a href="given.php?mno=<?php echo $row['mobile']?>" id='given'>Add Given</a>
        <a href='Payments.php?mno=<?php echo $row['mobile']?>' id='credit'>Add Credit</a>
        <a href='mailto : <?php echo $row['email']?>'  id='mail'>Send Mail</a>
        <a href="Home.php" id="home">Home</a>
    </div>
</body>
</html>