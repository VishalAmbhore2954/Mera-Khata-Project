<?php 
    include("connection.php");
    error_reporting(0);
    $mno = $_GET['mno'];
    $query = "SELECT * FROM customer WHERE mobile = '$mno'";
    $data = mysqli_query($con,$query);
    $result = mysqli_fetch_assoc($data);
    $prevAmt = $result['total'];
    $desc1 = $result['data'];
?>

<?php 

    if(isset($_POST['submit'])){
        $data = $_POST['desc'];
        $amt2 = $_POST['amt'];
        $amt = $amt2."+";
        
$data1 = $desc1 ."~~~~~Given Date => ".(date("d-m-y"))." : "." Given Items => ".$data;
        //logic of sum all number input by input field like(11+12+13 = 36)
        $sum;
        $num='';
        $digit = 0;
        for($i=0;$i<strlen($amt);$i++){
            if($amt[$i]==0||$amt[$i]==1||$amt[$i]==2||$amt[$i]==3||$amt[$i]==4||$amt[$i]==5||$amt[$i]==6||$amt[$i]==7||$amt[$i]==8||$amt[$i]==9){
                $num = $num.$amt[$i];
            }else if($amt[$i]=='+'){
                $sum = $sum+$num;
                $num = 0;
            }
        }
        $sum1 = $sum+$prevAmt;
        //logic ends here
        $sql2 = "UPDATE customer SET data = '$data1', total = '$sum1' WHERE mobile = '$mno'";
        $result2 = mysqli_query($con,$sql2);
        if($result2){
            echo "<script>alert('Amount added successfuly')</script>";
        }else{
            echo "<script>alert('Fail to add')</script>";
        } 
    }
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
            <input type="text" name="desc" required><br>
            <input type="submit" name="submit" value="ADD CUSTOMER" id="button"><br>
            <div class="regLink">
                <label for="cpass"></label><a href="Home.php">Home Page</a>
            </div>
        </form>
    </div>
</body>
</html>