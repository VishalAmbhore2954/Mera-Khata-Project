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
    <style>
        #cust {
            display: inline;
            border: 1px solid black;
            padding: 5px;
            font-size: 12px;
            border-radius: 5px;
            background-color: #FDF89F;
            color: #272501;
        }
    </style>
</head>

<body>
    <div class="nav">
        <div>
            <img src="logoImage.png" alt="Logo Image">
        </div>
        <span id="logoname">मेरा खाता</span>
        <form method="POST">
            <div class="search"><input type="text" name="search" placeholder="  Enter Mobile Number / Customer name"
                    required><button name="submit">&#128269; Search</button></div>
        </form>
        <a href="addCustomer.php" type="button" id="cust">&#128104;Add Customer</a>
    </div>
    <div class="bodyImage">
        <img src="Peacock-Clipart-PNG-1.png" alt="">
    </div>
    <div class="btns">
        <a type="button" id="add" href="addGiven.php"> &#8593; Add Given</a>
        <a type="button" id="credit" href="addCredit.php">&#8595; Add Credit</a>
        <a type="button" id="allCust" href="DisplayCustomer.php"
            style="background-color:#F87144; color:white">&#128101; Customers</a>
    </div>
</body>

</html>