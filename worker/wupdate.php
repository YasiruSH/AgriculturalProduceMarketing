<?php
 include('database/connection.php');
 $id=$_POST['wupdate'];

 $rate=$_POST['w_rate'];

 
 $query = mysqli_query($con,"UPDATE worke SET w_rate='$rate' WHERE wNic='$id'");
 
 header('location:successfully.php');

 
?>