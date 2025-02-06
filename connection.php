<?php
    $con = mysqli_connect("localhost","root","","mera-khata");
    if($con){
        // echo "<script>alert('Success')</script>";
    }else{
        echo "<script>alert('Connection Failed')</script>";
    }
?>