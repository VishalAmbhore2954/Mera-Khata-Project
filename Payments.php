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
        $data2 = $row['data'];
        $amt = $_POST['amt'];
        $amt2 = $row['total'] - $amt;

        if($row['total']==$amt){
            $data1 = $data;
        }else{
            $data1 = $data2 ." &#9997; Recieved Date &#9755; ".(date("d-m-y"))." : "." Credit Rupees &#9755; ".$amt;
        }

        if($row['total']==0){
            header('location:alreadyDone.php');
        }else{
            $sql2 = "UPDATE customer SET data = '$data1', total = '$amt2' WHERE mobile = '$mno'";
            $result2 = mysqli_query($con,$sql2);
            if($amt2==0){
                header("location:Congrats.php");
            }else{
                header("location:remainSomeAmt.php");
            }
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
            <h1>CREDIT AMOUNT</h1>
        </div>
        <form method="POST">
            <label for="uname">CUSTOMER NAME :</label><br>
            <input type="text" value="<?php echo $row['name']?>" name="uname" required readonly><br>
            <label for="pass" >REMAIN AMOUNT :</label><br>
            <input type="text" name="amt" id="amt" value="<?php echo $row['total']?>"  required><br>
            <label for="cpass" >ADD DESCREPTION :</label><br>
            <input type="text" name="desc" value="All Payment Done"><br>
            <input type="submit" name="submit" value="ADD PAYMENT" id="button"><br>
            <div class="regLink">
                <label for="cpass"></label><a href="Home.php">Home Page</a>
            </div>
        </form>
    </div>
</body>
</html>