<?php
    include('connection.php');
    if(isset($_POST['submit'])){
        $search = $_POST['search'];

        $query = "SELECT * FROM customer WHERE name = '$search' or mobile = '$search'";
        $result = mysqli_query($con,$query);
        $data = mysqli_fetch_assoc($result);
        $mno = $data['mobile'];
        // echo $mno;
        if($data>0){
            header("location:custDetail.php?mno=$mno");
        }else{
            header('location:notFound.php');
        }
    }
?>