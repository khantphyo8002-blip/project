<?php
        session_start();
    include('db.php');
    $adminname = "";
    if(isset($_SESSION["admin_id"])){
        $adminid = $_SESSION['admin_id'];
        $getusername = "SELECT * FROM user WHERE user_id = '$adminid'";
        $res11 = mysqli_query($conn, $getusername);
        $admindata = mysqli_fetch_array($res11);
        if($admindata){
            $adminname = $admindata['user_name'];
            $adminemail = $admindata['user_email'];
        }
    }
    if(!isset($_SESSION["admin_id"])){
        header("Location: ../home.php");  
        exit();
    }

    $countuser = "SELECT COUNT(*) as usertotal FROM user;";
    $res11 = mysqli_query($conn, $countuser);
    $user1 = mysqli_fetch_array($res11);
    $totaluser = $user1['usertotal'];

    $countpro = "SELECT COUNT(*) as prototal FROM product;";
    $res22 = mysqli_query($conn, $countpro);
    $product2 = mysqli_fetch_array($res22);
    $prototal = $product2['prototal'];

    $countincome = "SELECT sum(final_total) as incomebal FROM orders;";
    $res33 = mysqli_query($conn, $countincome);
    $inconme33 = mysqli_fetch_array($res33);
    $incomebal = $inconme33['incomebal'];

    $countorder = "SELECT COUNT(*) as ordertotal FROM orders;";
    $res44 = mysqli_query($conn, $countorder);
    $order44 = mysqli_fetch_array($res44);
    $ordertotal = $order44['ordertotal'];
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
    <body class="order-page">
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
                    <div class="adminrow row">
                        <div class="col-lg-12 col-md-12">
                            <div class="adminpro d-flex align-items-center">
                                <div class="proimg">
                                    <img src="./projectphoto/profile photo1.png" alt="">
                                </div>
                                <div class="admindetial">
                                    <h5>Admin Name: <?php echo $adminname ?></h5>
                                    <h6>Role: Administrator</h6>
                                    <h6>Gmail: <?php echo $adminemail ?></h6>
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
                                        <h5><?php echo $totaluser ?></h5>
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
                                        <h5><?php echo $prototal ?></h5>
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
                                        <h5><?php echo $ordertotal ?></h5>
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
                                        <h5>Income Balance</h5>
                                        <h5><?php echo $incomebal ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data section end -->
                    <!-- product table section start -->
                    <div class="row">
                        <div class="userlist">
                            <div class="d-flex justify-content-between align-items-center pt-4 pb-3">
                                <div>
                                    <h4>Order lists</h4>
                                </div>
                                <div>
                                    
                                </div>
                            </div>
                            <div class="ptable my-4">
                                <table class="table table-bordered table-striped ">
                                    <thead class="align-middle">
                                        <tr>
                                            <th>No</th>
                                            <th>
                                                <div class="text-center">ORD</div>
                                                <div class="text-center">ID</div>
                                            </th>
                                            <th>ORD_Date</th>
                                            <th>Cus_Nmae</th>
                                            <th>Cus_Phone</th>
                                            <th>Address</th>
                                            <th>Pro_Name</th>
                                            <th>Qty</th>
                                            <th>Amount</th>
                                            <th>Subtotal</th>
                                            <th>
                                                <div class="text-center">Final Total</div>
                                                <div>tax2% &</div>
                                                <div>delivered</div>
                                            </th>
                                            <th>Actoin</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <?php
                                            $sql = "SELECT  orders.ord_id, 
                                                            orders.ord_date, 
                                                            user.user_name , 
                                                            user.user_phone , 
                                                            user.user_address , 
                                                            product.pro_name , 
                                                            orders.item_total , 
                                                            orders_product.qty , 
                                                            orders_product.amount,
                                                            orders.final_total 
                                                    FROM orders_product
                                                    LEFT JOIN product ON product.pro_id = orders_product.pro_id
                                                    LEFT JOIN orders ON orders.ord_id = orders_product.ord_id
                                                    LEFT JOIN user ON user.user_id = orders.user_id; ";
                                            $i = 1;
                                            $res = mysqli_query($conn, $sql);
                                            while($orddata = mysqli_fetch_array($res)):
                                        ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $orddata['ord_id'] ?></td>
                                                <td><?php echo $orddata['ord_date'] ?></td>
                                                <td><?php echo $orddata['user_name'] ?></td>
                                                <td><?php echo $orddata['user_phone'] ?></td>
                                                <td><?php echo $orddata['user_address'] ?></td>
                                                <td><?php echo $orddata['pro_name'] ?></td>
                                                <td><?php echo $orddata['qty'] ?></td>
                                                <td><?php echo $orddata['amount'] ?></td>
                                                <td><?php echo $orddata['item_total'] ?></td>
                                                <td class="text-danger"><?php echo $orddata['final_total'] ?></td>
                                                <td>
                                                    <a href="order_del.php?id=<?php echo $orddata['ord_id'] ?>" class="btn btn-outline-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endwhile ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                    <!-- product table section end -->
                </div>
                <!-- main section end -->
            </div>
            
        </div>

        <script src="./backend.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>