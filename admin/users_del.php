<?php

    include('db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];

    $sql2 = "DELETE FROM orders_product WHERE user_id = '$id'";
    $res2 = mysqli_query($conn,$sql2);

    $sql1 = "DELETE FROM orders WHERE user_id = '$id'";
    $res1 = mysqli_query($conn, $sql1);

    $sql = "DELETE FROM user WHERE user_id = '$id'";
    $res = mysqli_query($conn, $sql);
    header("location: users.php");
    }

?>