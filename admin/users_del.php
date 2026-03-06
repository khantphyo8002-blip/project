<?php

    include('db.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "DELETE FROM user WHERE user_id = '$id'";
        $res = mysqli_query($conn, $sql);
        header("location: users.php");
    }

?>