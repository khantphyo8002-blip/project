<?php
    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM orders_product WHERE ord_id = '$id'";
        $res = mysqli_query($conn,$sql);
        
        $sql1 = "DELETE FROM orders WHERE ord_id = '$id'";
        $res1 = mysqli_query($conn, $sql1);
        header("location: order.php");
    }
?>