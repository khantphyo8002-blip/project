<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $getbaldata = "SELECT balance.*, product.pro_name FROM balance LEFT JOIN product ON balance.pro_id = product.pro_id WHERE balance.bal_id = 1;";
        $getdata = mysqli_query($conn, $getbaldata);
        $baldata = mysqli_fetch_array($getdata);
    }

    if(isset($_POST['save'])){
        $pro_id = $_POST['pro_id'];
        $balance = $_POST['balance'];
        $inc_qty = $_POST['inc_qty'];
        date_default_timezone_set("Asia/Yangon");
        $date = date('Y-m-d H-i-s');
        $total_balance = $balance + $inc_qty;

        $upbaldata = "INSERT INTO balance(pro_id , bal_date , inc_qty , sale_qty , balance )
                                VALUES( '$pro_id' , '$date' , '$inc_qty' , 0 , '$total_balance' )";
        $res = mysqli_query($conn, $upbaldata);
        header("location: balance.php");

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
    <body class="balance-page">
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
                            <i class="icon fa-solid fa-bookmark me-2"></i><a class="link" href="./bestselling.php">Best Selling</a>
                        </li>
                        <li class="list-group-item bg-black">
                            <i class="icon fa-solid fa-message me-2"></i><a class="link" href="./message.php">Message</a>
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
                    <div class="adminrow row">
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
                    
                    <!-- data section end -->
                    <!-- messaage table section start -->
                    <div class="row">
                        <div class="messagelist">
                            <div class="d-flex justify-content-between align-items-center pt-4 pb-3">
                                <div>
                                    <h4>Balance Quantity</h4>
                                </div>
                                <div>
                                    
                                </div>
                            </div>
                            <div class="px-5 mt-3 pb-3">
                                <form action="" method="post">
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">Balance ID</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" name="bal_id" value="<?php echo $baldata['bal_id'] ?>" readonly type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">Product Name</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" value="<?php echo $baldata['pro_name'] ?>" readonly type="text"  class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                            <input type="hidden" name="pro_id" value="<?php echo $baldata['pro_id'] ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">Balance</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" name="balance" value="<?php echo $baldata['balance'] ?>" readonly type="text"  class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">Income Quantity</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" name="inc_qty" type="text"  class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" text-center">
                                            <input type="submit" value="save" name="save" class="btn btn-success" style="width: 20%;">
                                        </div>
                                    </div>
                                </form>
                            </div><hr>
                            
                            
                        </div>
                    </div>
                    <!-- messaage table section end -->
                </div>
                <!-- main section end -->
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>