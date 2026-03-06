<?php

    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $getuserdata = "SELECT * FROM user WHERE user_id = '$id'";
        $getdata = mysqli_query($conn, $getuserdata);
        $udata = mysqli_fetch_assoc($getdata);
    }

    if(isset($_POST['save'])){
        $uname = $_POST['uname'];
        $uemail = $_POST['uemail'];
        $upass = $_POST['upass'];
        $uphone = $_POST['uphone'];
        $uaddress = $_POST['uaddress'];
        $role = $_POST['role'];

        $updata = "UPDATE user SET user_name = '$uname' , user_email = '$uemail' , user_pass = '$upass' , user_phone = '$uphone' , user_address = '$uaddress' , role = '$role' WHERE user_id = '$id'";
        $res = mysqli_query($conn, $updata);
        header("location: users.php");
    }

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>A Nyar Thar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
        <link rel="stylesheet" href="./backend.css">
    </head>
    <body class="dashboard-page">
        <div class="container-fluid">
            <div class="row">
                <!-- sider section start -->
                <div class="sider col-lg-2" style="height: 100vh;">
                    <h2 class="anyarthar">A Nyar Thar</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-chart-bar me-2"></i><a class="link" href="">Dashboard</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-users me-2"></i></i><a class="link" href="">Users</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-brands fa-product-hunt me-2"></i><a class="link" href="">Product list</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-list me-2"></i><a class="link" href="">Category list</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-cart-shopping me-2"></i><a class="link" href="">Order list</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-bookmark me-2"></i><a class="link" href="">Best Selling</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-message me-2"></i><a class="link" href="">Message</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-money-bill-1-wave me-2"></i></i><a class="link" href="./balance.php">Balance</a>
                        </li><hr>
                    </ul>
                    <div class="logout d-flex align-items-center">
                        <button><i class="logouticon fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</button>
                    </div>
                </div>
                <!-- sider section end -->
                <!-- main section start -->
                <div class="main col-lg-10 col-md--10">
                    <!-- admin section start -->
                    <div class=" row"  style="position: sticky; top: 10px;">
                        <div class="col-lg-12 col-md-12 ">
                            <div class="adminpro d-flex align-items-center">
                                <div class="proimg">
                                    <img src="./projectphoto/profile photo1.png" alt="">
                                </div>
                                <div class="admindetial">
                                    <h5>Admin Name: Aung Khant Phyo</h5>
                                    <h6>Role: Administrator</h6>
                                    <h6>Gmail: aungkhantphyo2234@gmail.com</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- admin section end -->
                    <!-- data section start -->
                    <div class="row m-5 p-5">
                        <div class="addproductbox px-5">
                            <h4 class="mb-5">User lists</h4>
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="pname" class="col-lg-2">User ID</label>
                                    <div class=" col-lg-10">
                                        <input id="id" type="text" value="<?php echo $udata['user_id'] ?>" disabled class="form-control " aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">User Name</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" type="text" value="<?php echo $udata['user_name'] ?>" name="uname" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">User Email</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" type="text" value="<?php echo $udata['user_email'] ?>" name="uemail" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">Password</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" type="text" value="<?php echo $udata['user_pass'] ?>" name="upass" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">Phone</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" type="number" value="<?php echo $udata['user_phone'] ?>" name="uphone" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">Address</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" type="text" value="<?php echo $udata['user_address'] ?>" name="uaddress" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="mb-5 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Role</label>
                                        <div class="col-sm-10">
                                            <select id=""  name="role" class="form-control">
                                                <option value="<?php echo $udata['role'] ?>"> <?php echo $udata['role'] ?> </option>
                                                <option value="admin">admin</option>
                                                <option value="user">user</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" text-center">
                                            <input type="submit" value="save" name="save" class="btn btn-success" style="width: 20%;">
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                    <!-- data section end -->
                </div>
                <!-- main section end -->
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>