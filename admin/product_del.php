<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql2 = "DELETE FROM balance WHERE pro_id = '$id'";
        $res2 = mysqli_query($conn,$sql2);

        $sql1 = "DELETE FROM orders_product WHERE pro_id = '$id'";
        $res1 = mysqli_query($conn,$sql1);

        $delpro = "DELETE FROM product WHERE pro_id = '$id'";
        $res = mysqli_query($conn, $delpro);
        header('location: product.php');
    }

?>