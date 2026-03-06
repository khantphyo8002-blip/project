<!-- <form action="" method="post">
    <select name="num" id="">
        <option value="00">00</option>
        <option value="11">11</option>
    </select>
    <input type="submit" value="save" name="ee">
</form>

<?php 
    // if(isset($_POST['ee'])){
    //     $num = $_POST['num'];
    //     echo "<script>alert('$num')</script>";
    // }
?> -->
<!-- <form action="" method="post">
    <select name="num" onchange="this.form.submit()">
        <option value="00">00</option>
        <option value="11">11</option>
    </select>
</form> -->

<?php 
// if(isset($_POST['num'])){
//     $num = $_POST['num'];
//     if($num === "00"){
//         echo 'success 00';
//     }else{
//         echo 'success 11';
//     }
// }
?>
<form action="" method="post">
    <select name="num" onchange="this.form.submit()">
        <option value="22">22</option>
        <option value="11">11</option>
    </select>
</form>

<?php 

$num = "22";
if(isset($_POST['num'])){
    $num = $_POST['num'];

    echo $num;
    // if($num == 22){
    //     echo 'success 22';
    // }else{
    //     echo 'success 11';
    // }
}
?>