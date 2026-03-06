<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $getpdata = "SELECT product.*, category.cat_name FROM product LEFT JOIN category ON product.cat_id = category.cat_id WHERE pro_id = '$id'";
        $getdata = mysqli_query($conn, $getpdata);
        $pdata = mysqli_fetch_array($getdata);
    }

    if(isset($_POST['save'])){
        $proimg = $_POST['new_img'];
        $proname = $_POST['proname'];
        $prodes = $_POST['prodes'];
        $proweight = $_POST['proweight'];
        $proprice = $_POST['proprice'];
        $cat = $_POST['cat'];

        $uppro = "UPDATE product SET pro_img = '$proimg' , pro_name = '$proname' , pro_des = '$prodes' , pro_weight = '$proweight' , pro_price = '$proprice' , cat_id = '$cat' WHERE pro_id = '$id' ";
        $res = mysqli_query($conn, $uppro);
        header("location: product.php");
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
                        <div class="addproductbox px-5">
                            <h4 class="mb-5">Product lists</h4>
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label for="pname" class="col-lg-2">Product ID</label>
                                    <div class=" col-lg-10">
                                        <input id="id" type="text" name="proid" value="<?php echo $pdata['pro_id'] ?>" disabled class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pname" class="col-lg-2">Image</label>
                                    <div class="col-lg-10">
                                        <input type="file"  name="new_img" value="./projectphoto/<?php echo $pdata['pro_img'] ?> " class="form-control" >
                                        <input type="hidden" name="old_img" value="./projectphoto/<?php echo $pdata['pro_img'] ?> ">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pname" class="col-lg-2">Product Name</label>
                                    <div class=" col-lg-10">
                                        <input id="pname" type="text" name="proname" value="<?php echo $pdata['pro_name'] ?>" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pname" class="col-lg-2">Description</label>
                                    <div class=" col-lg-10">
                                        <input id="pname" type="text" name="prodes" value="<?php echo $pdata['pro_des'] ?>" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pname" class="col-lg-2">Weight</label>
                                    <div class=" col-lg-10">
                                        <input id="pname" type="number" name="proweight" value="<?php echo $pdata['pro_weight'] ?>" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pname" class="col-lg-2">Price</label>
                                    <div class=" col-lg-10">
                                        <input id="pname" type="number" name="proprice" value="<?php echo $pdata['pro_price'] ?>" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="mb-5 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select id="" name="cat" class="form-control">
                                            <option  value="<?php echo $pdata['cat_id'] ?>"><?php echo $pdata['cat_name'] ?></option>

                                            <?php
                                                    $getcategory = "SELECT * FROM category";
                                                    $getcat = mysqli_query($conn, $getcategory);

                                                    while($catdata = mysqli_fetch_array($getcat)):
                                                ?>
                                                <option value="<?php echo $catdata['cat_id'] ?>"> <?php echo $catdata['cat_name'] ?> </option>

                                            <?php endwhile ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" text-center">
                                        <input type="submit" name="save" value="save" class="btn btn-success" style="width: 20%;">
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