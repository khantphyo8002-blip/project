<?php

    include("db.php");

    if(isset($_POST['save'])){
        $name = $_POST['uname'];
        $email = $_POST['uemail'];
        $pass = $_POST['upasss'];
        $phone = $_POST['uphone'];
        $address = $_POST['uaddress'];
        $role = 'user';

        $postuserdata = "INSERT INTO user(user_name , user_email , user_pass , user_phone , user_address , role )
                                    VALUES('$name' , '$email' , '$pass' , '$phone' , '$address' , '$role')";
        $postdata = mysqli_query($conn, $postuserdata);
        if($postdata){
            echo "<script>alert('success')</script>";
        }else{
            echo "<script>alert('not success')</script>";
        }
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
        <link rel="stylesheet" href="./singin-up.css">
    </head>
    <body>
        <div class="registerbox d-flex justify-content-center align-items-center">
            <div class="register d-flex">
                <div class="registerfrom ">
                    <div class="text-center">
                        <h2 class="reg">Register to</h2>
                        <h2 class="anyarthar">A Nyar THar</h2>
                    </div>
                    <form action="" method="post">
                        <div class="fromdiv">
                            <i class="icon fa-solid fa-user"></i>
                            <input type="text" name="uname" id="" placeholder="User Name" required>
                        </div>
                        <div class="fromdiv">
                            <i class="icon fa-solid fa-envelope"></i>
                            <input type="email" name="uemail" id="" placeholder="Email" required>
                        </div>
                        <div class="fromdiv">
                            <i class="icon fa-solid fa-lock"></i>
                            <input type="password" name="upasss" id="" placeholder="password" required>
                        </div>
                        <div class="fromdiv">
                            <i class="icon fa-solid fa-phone"></i>
                            <input type="number" name="uphone" id="" placeholder="Phone Number" required>
                        </div>
                        <div class="fromdiv">
                            <i class="icon fa-solid fa-location-dot"></i>
                            <input type="text" name="uaddress" id="" placeholder="Address" required>
                        </div>
                        <div class="regbuttom">
                            <input type="submit" name="save" value="Register" required>
                        </div>
                    </form>
                    <div class="tologin text-center">
                       <h6>Already have an account? <a href="./login.php">Login</a></h6> 
                    </div>
                </div>
                <div class="registerimg">
                        <img src="./projectphoto/register.jpg" alt="">
                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>