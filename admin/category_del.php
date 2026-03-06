<?php

    include('db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $delcat = "DELETE FROM category WHERE cat_id = '$id'";
        $res = mysqli_query($conn, $delcat);
        header("location: category.php");
    }

?>