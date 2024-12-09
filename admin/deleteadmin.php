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