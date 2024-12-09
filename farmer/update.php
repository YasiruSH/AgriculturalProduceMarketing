<?php
 include('database/connection.php');
 $id=$_POST['update'];

 $pqty=$_POST['quantity'];
 $pprice=$_POST['price'];
 $pdate=$_POST['issue_date'];

 
 $query = mysqli_query($con,"UPDATE product SET quantity='$pqty',price='$pprice',issue_date='$pdate' WHERE p_id='$id'");
 
 header('location:successfully.php');

 
?>