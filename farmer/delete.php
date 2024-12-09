<?php
    include_once "dbcon.php";

    if(isset($_GET['id'])){
        $nic = $_GET['id'];
        $query = mysqli_query($con,
            "DELETE FROM user WHERE nic='$nic'"
        );

        if($query){
            header("location: farmerHome.php");
        }
    }

    else if(isset($_GET['proid'])){
        $nic = $_GET['proid'];
        $query = mysqli_query($con, "DELETE FROM product WHERE p_id='$nic'");

        if($query){
            header("location: farmerHome.php");
        }
    }
    else if(isset($_GET['cancel'])){
        $nic = $_GET['cancel'];
        $query = mysqli_query($con, "DELETE FROM hirings WHERE workerNic='$nic'");

        if($query){
            header("location: farmerHome.php");
        }
    }

   // else if(isset($_GET['cancel'])){
     //   $bid = $_GET['cancel'];
     //   $query = mysqli_query($con, "UPDATE hirings SET date = null, nDates = 0, status = 'pending' WHERE workerNic = '$bid'");
     //   if($query){
     //       header("location: farmerHome.php");            
   //     }
  //  }
