<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $delpro = "DELETE FROM product WHERE pro_id = '$id'";
        $res = mysqli_query($conn, $delpro);
        header('location: product.php');
    }

?>