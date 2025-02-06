<?php
    include('connection.php');

    if(isset($_POST['submit'])){
        $search = $_POST['search'];

        $query = "SELECT * FROM customer WHERE name = '$search' or mobile = '$search'";
        $result = mysqli_query($con,$query);
        $data = mysqli_num_rows($result);
        // echo "<script>alert($data)</script>";
        if($data>0){
            header('location:given.php');
        }else{
            // echo "<script>alert('No Record Found!')</scrip";
            header('location:notFound.php');
        }
    }
?>