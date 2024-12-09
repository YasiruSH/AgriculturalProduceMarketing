<?php
    include_once "dbcon.php";

    if(isset($_GET['id'])){
        $nic = $_GET['id'];
        $query = mysqli_query($con,
            "DELETE FROM user WHERE nic='$nic'"
        );

        if($query){
            header("location: adminHome.php");
        }
    }

    else if(isset($_GET['proid'])){
        $nic = $_GET['proid'];
        $query = mysqli_query($con, "DELETE FROM product WHERE p_id='$nic'");

        if($query){
            header("location: farmer.php");
        }
    }

    else if(isset($_GET['woid'])){
        $nic = $_GET['woid'];
        $query = mysqli_query($con, "DELETE FROM worke WHERE w_id='$nic'");

        if($query){
            header("location: workerHome.php");
        }
    }