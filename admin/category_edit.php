<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $getcategorydata = "SELECT * FROM category WHERE cat_id = '$id'";
        $getcategory = mysqli_query($conn , $getcategorydata);
        $catdata = mysqli_fetch_assoc($getcategory);
    }

    if(isset($_POST['save'])){
        $catname = $_POST['cat_name'];

        $upcatdata = "UPDATE category SET cat_name = '$catname' WHERE cat_id = '$id' ";
        $res = mysqli_query($conn , $upcatdata);
        header("location: category.php");

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
                        </li><li class="list-group-item bg-black">
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
                        <div class="col-lg-12 col-md-12">
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
                        <h4 class="mb-5">Category lists</h4>
                        <form action="" method="post">
                            <div class="row mb-3">
                                <label for="pname" class="col-lg-2">Category ID</label>
                                <div class=" col-lg-10">
                                    <input id="id" type="text" value="<?php echo $catdata['cat_id'] ?>" disabled class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="pname" class="col-lg-2">Category Name</label>
                                <div class=" col-lg-10">
                                    <input id="pname" type="text" value="<?php echo $catdata['cat_name'] ?>" name="cat_name" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" text-center">
                                    <input type="submit" value="save" name="save" class="btn btn-success" style="width: 20%;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- data section end -->
                </div>
                <!-- main section end -->
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>