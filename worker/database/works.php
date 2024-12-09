<?php

    include_once "connection.php";

    if(isset($_GET['bid'])){
        $bid = $_GET['bid'];
        $query = mysqli_query($con, "UPDATE hirings SET date = null, nDates = 0, status = 'pending' WHERE workerNic = '$bid'");
        if($query){
            header("location: /../Project/worker/workerHome.php");
        }
    }
    if(isset($_GET['cid'])){
        $cid = $_GET['cid'];

        $query = mysqli_query($con, "UPDATE hirings SET status = 'confirmed' WHERE workerNic = '$cid'");
        if($query){
            header("location: /../Project/worker/workerHome.php");
        }

    }