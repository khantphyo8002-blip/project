<?php 

    include("db.php");
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $delmessage = "DELETE FROM contact WHERE ct_id = '$id'";
        $res = mysqli_query($conn, $delmessage);
        header("location: message.php");
    }

?>