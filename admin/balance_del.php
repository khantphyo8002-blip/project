<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $delbalance = "DELETE FROM balance WHERE bal_id = '$id'";
        $res = mysqli_query($conn, $delbalance);
        header("location: balance.php");
    }

?>