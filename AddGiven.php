<link rel="stylesheet" href="DisplayCustomer.css">

<?php
    error_reporting(0);
    include("connection.php");
    $sql = "SELECT * FROM customer";
    $result = mysqli_query($con,$sql);
    // $row = mysqli_fetch_assoc($result);

    ?>
    <a href="Home.php" id="home">GO HOME</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Remain Amount</th>
            <th>Operations</th>
        </tr>
    
    <?php

    while($row=mysqli_fetch_assoc($result)){
        $sum = $sum+$row["total"];

        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["mobile"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["total"]."</td>
        <td><a href='given.php?mno=$row[mobile]' id='given'>Add Given</a><a href='custDetail.php?mno=$row[mobile]' id='detail'>Detail</a></td>        
        </tr>";
    }
    ?>
    </table>
    <div class="sum1">
        <label for="">Total Amount To Credit </label>
        &#8377; <?php echo $sum; ?>
    </div>
    