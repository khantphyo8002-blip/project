<?php
    session_start();
  
    include("db.php");

    if(isset($_POST['save'])){
        $name = $_POST['uname'];
        $pass = $_POST['upass'];
        $role = $_POST['role'];

        $getdata = "SELECT * FROM user WHERE user_name = '$name' and user_pass = '$pass' and role = '$role'";
        $res = mysqli_query($conn, $getdata);
        if(mysqli_num_rows($res) > 0){
            $data = mysqli_fetch_assoc($res);
            if($name == $data['user_name'] and $pass == $data['user_pass'] and $role == 'user'){
                // echo "<script>alert('success')</script>";
                $_SESSION["user_id"] = $data['user_id'];
                $_SESSION["login"] = true;
                echo "<script>window.location.href = 'home.php'</script>";

            }else if($name == $data['user_name'] and $pass == $data['user_pass'] and $role == 'admin'){
                // echo "<script>alert('success')</script>";
                $_SESSION["admin_id"] = $data['user_id'];
                $_SESSION["login"] = true;
                echo "<script>window.location.href = 'admin/index.php'</script>";
            }
        }else{
            echo "<script>alert('Please check your username and password')</script>";
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
            <div class="register d-flex" >
                <div class="registerimg">
                        <img src="./projectphoto/login.jpg" alt="">
                </div>
                <div class="registerfrom d-flex align-items-center">
                    <div style="width: 100%;">
                    <div class="text-center">
                        <h2 class="reg">Login to</h2>
                        <h2 class="anyarthar mb-5">A Nyar THar</h2>
                    </div>
                    <form action="" method="post">
                        <div class="fromdiv">
                            <i class="icon fa-solid fa-user"></i>
                            <input type="text" name="uname" id="" placeholder="User Name">
                        </div>
                        <div class="fromdiv">
                            <i class="icon fa-solid fa-lock"></i>
                            <input type="password" name="upass" id="" placeholder="password">
                        </div>
                        <div class="fromdiv">
                            <select name="role" id="" class=" w-100" style="border: none; outline: none;">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="regbuttom">
                            <input type="submit" name="save" value="Login">
                        </div>
                    </form>
                    <div class="tologin text-center">
                       <h6>Don't have an account? <a href="./register.php">Register</a></h6> 
                    </div>
                    </div>
                </div>
                
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>