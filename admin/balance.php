<?php
    session_start();


    if (!isset($_SESSION["admin_id"])) {
        header("Location: ../home.php");  
        exit();
    }

    include("db.php");

    if(isset($_POST['save'])){
        $pro_id = $_POST['pro_id'];
        $income_qty = $_POST['income_qty'];
        date_default_timezone_set("Asia/Yangon");
        $date = date("Y-m-d H:i:s");
        $sale_qty = 0;

        $sql1 = "SELECT * FROM balance WHERE pro_id = $pro_id ORDER BY bal_id DESC LIMIT 1;";
        $res1 = mysqli_query($conn, $sql1);
        if($data1 = mysqli_fetch_array($res1)){
            $latest_balance =$data1['balance'];
            $total_balance = $latest_balance + $income_qty;
            $sql2 = "INSERT INTO balance( pro_id , bal_date , inc_qty , sale_qty , balance)
             VALUES( '$pro_id' , '$date' , '$income_qty' , '$sale_qty' , '$total_balance' )";
        }else{
            $sql2 = "INSERT INTO balance( pro_id , bal_date , inc_qty , sale_qty , balance)
             VALUES( '$pro_id' , '$date' , '$income_qty' , '$sale_qty' , '$income_qty' )";
        }
        $res2 = mysqli_query($conn, $sql2);
        if($res2){
            echo "<script>alert('Balance is added successfully')</script>";
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
                                        <label for="pname" class="col-lg-2">Product Name</label>
                                        <div class=" col-lg-10">
                                            <select id="" name="pro_id" class="form-control">
                                                <option value="">Choose Product</option>

                                                <?php
                                                    $getproduct = "SELECT * FROM product";
                                                    $getpro = mysqli_query($conn, $getproduct);

                                                    while($prodata = mysqli_fetch_array($getpro)):
                                                ?>
                                                <option value="<?php echo $prodata['pro_id'] ?>"> <?php echo $prodata['pro_name'] ?> </option>

                                                <?php endwhile ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="pname" class="col-lg-2">Income Quantity</label>
                                        <div class=" col-lg-10">
                                            <input id="pname" type="text" name="income_qty" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class=" text-center">
                                            <input type="submit" value="save" name="save" class="btn btn-success" style="width: 20%;">
                                        </div>
                                    </div>
                                </form>
                            </div><hr>
                            <div class="px-5 py-3 mb-4" style="width: 50%;">
                                <form action="" method="post" class="d-flex">
                                    <select name="cat" id="" class="form-control mx-4">
                                        <option value="000">Search By category</option>

                                        <?php
                                            $getcategory = "SELECT * FROM category";
                                            $getcat = mysqli_query($conn, $getcategory);

                                            while($catdata = mysqli_fetch_array($getcat)):
                                        ?>
                                        
                                            <option value="<?php echo $catdata['cat_id'] ?>"> <?php echo $catdata['cat_name'] ?> </option>

                                        <?php endwhile ?>

                                    </select>
                                    <input type="submit" name="search" class="btn btn-success" value="Search">
                                </form>
                            </div><hr>
                            <div class="ptable my-4">
                                <table class="table table-bordered table-striped ">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Balance ID</th>
                                            <th>Product Name</th>
                                            <th>Date</th>
                                            <th>Income Quantity</th>
                                            <th>Sale Quantity</th>
                                            <th>Balance</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if(isset($_POST['search'])){
                                                $cat_id = $_POST['cat'];
                                                $getcatid = "SELECT balance.*, product.pro_name FROM balance LEFT JOIN product ON balance.pro_id = product.pro_id WHERE product.cat_id = $cat_id ORDER BY bal_id DESC;"; 
                                                $getcat = mysqli_query($conn , $getcatid);
                                                $i = 1;
                                                while($data = mysqli_fetch_array($getcat)){
                                        ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $data['bal_id']; ?></td>
                                                <td><?php echo $data['pro_name']; ?></td>
                                                <td><?php echo $data['bal_date']; ?></td>
                                                <td><?php echo $data['inc_qty']; ?></td>
                                                <td><?php echo $data['sale_qty']; ?></td>
                                                <td><?php echo $data['balance']; ?></td>
                                                <td>
                                                    <a href="balance_edit.php?id=<?php echo $baldata['bal_id']; ?>" class="btn btn-outline-success">Edit</a>
                                                    <a href="balance_del.php?id=<?php echo $baldata['bal_id']; ?>" class="btn btn-outline-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } }else{?>

                                        <?php
                                            $getbaldata = "SELECT balance.*, product.pro_name FROM balance LEFT JOIN product ON balance.pro_id = product.pro_id ORDER BY bal_id DESC;";
                                            $getdata = mysqli_query($conn, $getbaldata);
                                            $i = 1;
                                            while($baldata = mysqli_fetch_array($getdata)){
                                        ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $baldata['bal_id']; ?></td>
                                                <td><?php echo $baldata['pro_name']; ?></td>
                                                <td><?php echo $baldata['bal_date']; ?></td>
                                                <td><?php echo $baldata['inc_qty']; ?></td>
                                                <td><?php echo $baldata['sale_qty']; ?></td>
                                                <td><?php echo $baldata['balance']; ?></td>
                                                <td>
                                                    <a href="balance_edit.php?id=<?php echo $baldata['bal_id']; ?>" class="btn btn-outline-success">Edit</a>
                                                    <a href="balance_del.php?id=<?php echo $baldata['bal_id']; ?>" class="btn btn-outline-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } }?>

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>