<?php
include("db.php");
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM review WHERE rev_id = '$id'";
    $res = mysqli_query($conn, $sql);
    header("location: review.php");
 }
?>