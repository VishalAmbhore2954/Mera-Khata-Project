<?php
    $con = mysqli_connect("localhost","root","Vishal@2954","");
    if($con){
        echo "<script>alert('Success')</script>";
    }else{
        echo "<script>alert('Failed')</script>";
    }
?>