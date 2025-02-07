<?php
    include("SearchData.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mera Khata</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>
    <div class="nav">
        <div>
            <img src="logoImage.png" alt="Logo Image">
        </div>
        <span id="logoname">मेरा खाता</span>
        <form method="POST">
            <div class="search"><input type="text" name="search" placeholder="  Enter Mobile Number / Customer name" required><button name="submit">Search</button></div>
        </form>
        <a href="addCustomer.php">+Add Customer</a>
    </div>
    <div class="bodyImage">
        <img src="Peacock-Clipart-PNG-1.png" alt="">
    </div>
    <div class="btns">
        <a type="button" id="add" href="addGiven.php">Add Given</a>
        <a type="button" id="credit" href="addCredit.php">Add Credit</a>
        <a type="button" id="allCust" href="DisplayCustomer.php" style="background-color:blue; color:white">Customers</a>
    </div>
</body>
</html>