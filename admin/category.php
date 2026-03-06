<?php
    session_start();


    if (!isset($_SESSION["admin_id"])) {
        header("Location: ../home.php");  
        exit();
    }

    include('db.php');

    if(isset($_POST['save'])){
        $cat_name = $_POST['cat_name'];
        
        $sql = "INSERT INTO category(cat_name) VALUES('$cat_name')";
        $res = mysqli_query($conn, $sql);
        if($res){
            echo "<script>alert('success category addition')</script>";
        }else{
            echo "<script>alert('not success category addition')</script>";
        }
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
    <body class="category-page">
        <div class="container-fluid">
            <div class="row">
                <!-- sider section start -->
                <div class="sider col-lg-2" style="height: 100vh;">
                    <h2 class="anyarthar">A Nyar Thar</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-chart-bar me-2"></i><a class="link" href="./index.php">Dashboard</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-users me-2"></i></i><a class="link" href="./users.php">Users</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-brands fa-product-hunt me-2"></i><a class="link" href="./product.php">Product list</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-list me-2"></i><a class="link" href="./category.php">Category list</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-cart-shopping me-2"></i><a class="link" href="./order.php">Order list</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-message me-2"></i><a class="link" href="./message.php">Message</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-money-bill-1-wave me-2"></i></i><a class="link" href="./balance.php">Balance</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-bookmark me-2"></i><a class="link" href="./review.php">Review</a>
                        </li><hr>
                    </ul>
                    <div class="logout d-flex align-items-center">
                        <button onclick="logout()"><i class="logouticon fa-solid fa-arrow-right-from-bracket me-2"></i>Logout</button>
                    </div>
                </div>
                <!-- sider section end -->
                <!-- main section start -->
                <div class="main col-lg-10 col-md--10">
                    <!-- admin section start -->
                    <div class=" row">
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
                    <div class="row my-4">
                        <div class="col-lg-3 col-md-3">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="icon fa-solid fa-users me-2"></i>
                                    </div>
                                    <div>
                                        <h5>Total Users</h5>
                                        <h5>12</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="icon fa-brands fa-product-hunt me-2"></i>
                                    </div>
                                    <div>
                                        <h5>Total Product</h5>
                                        <h5>12</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="icon fa-solid fa-cart-shopping"></i>
                                    </div>
                                    <div>
                                        <h5>Total Order</h5>
                                        <h5>12</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="icon fa-solid fa-money-bill-1-wave"></i>
                                    </div>
                                    <div>
                                        <h5>Balance</h5>
                                        <h5>1200000</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data section end -->
                    <!-- messaage table section start -->
                    <div class="row">
                        <div class="categorylist">
                            <div class="addcategorybox px-5 mt-5 d-none">
                                <form action="" method="post">
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">Category Name</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" name="cat_name" type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" text-center">
                                            <input type="submit" name="save" value="save" class="btn btn-success" style="width: 20%;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex justify-content-between align-items-center pt-4 pb-3">
                                <div>
                                    <h4>Category lists</h4>
                                </div>
                                <div>
                                    <button class="addcategory" onclick="addcategory()"><i class="fa-solid fa-plus me-3"></i>Add Category</button>
                                    <button class="closebox d-none" onclick="closecategorybox()"><i class="fa-solid fa-xmark me-3"></i>Close Box</button>
                                </div>
                            </div>
                            <div class="ptable my-4">
                                <table class="table table-bordered table-striped ">
                                    <thead class="align-middle">
                                        <tr>
                                            <th>No</th>
                                            <th>Category ID</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">

                                    <?php
                                        $getcategorydata = "SELECT * FROM category";
                                        $getcategory = mysqli_query($conn, $getcategorydata);
                                        $i = 1;
                                        
                                        while($catdata = mysqli_fetch_array($getcategory)):

                                    ?>
                                        <tr>
                                            <td> <?php echo $i++ ?> </td>
                                            <td>  <?php echo $catdata['cat_id'] ?> </td>
                                            <td>  <?php echo $catdata['cat_name'] ?> </td>
                                            <td>
                                                <a href="category_edit.php?id=<?php echo $catdata['cat_id'] ?>" class="btn btn-outline-success">Edit</a>
                                                <a href="category_del.php?id=<?php echo $catdata['cat_id'] ?>" class="btn btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>

                                    <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- messaage table section end -->
                </div>
                <!-- main section end -->
            </div>
            
        </div>
        <script src="./backend.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>