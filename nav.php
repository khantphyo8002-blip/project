<?php
    session_start();
    include("db.php");
    
    $name = "";   // default

    if(isset($_SESSION['user_id'])){
        $id = $_SESSION['user_id'];
        $getusername = "SELECT * FROM user WHERE user_id = '$id'";
        $res = mysqli_query($conn, $getusername);
        $username = mysqli_fetch_array($res);
        if($username){
            $name = $username['user_name'];
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A Nyar Thar </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap');
        :root{
            --maincolor: #ff8800;
            --navcolor: #747474;
            --whitecolor: #ffffff;
            --shadowblack: #000000;
        }
        /* nav section start */
        
        /* Active color style */
        .home-page .nav-link[href*="home"],
        .product-page .nav-link[href*="product"],
        .review-page .nav-link[href*="review"],
        .about-page .nav-link[href*="aboutus"],
        .contact-page .nav-link[href*="contact"]{
            color: var(--shadowblack) !important;
            border-bottom: 1px solid var(--shadowblack);
        }
        .favsnack-page .icon1[href*="favsnack"]{
            color: red !important;
        }
        .cart-page .icon2[href*="cart"]{
            color: var(--whitecolor) !important;
            background-color: var(--maincolor);
        }
        /* Active color style */

        .navbar{
            background-color: rgba(255, 255, 255, 0.5); 
            
            backdrop-filter: blur(5px);
            box-shadow: 2px 0px 4px var(--navcolor);
        }
        .logo{
            font-family: "Irish Grover", system-ui;
        }
        .link ul li a{
            color: var(--navcolor);
        }
        .link ul li a:hover{
            color: black;
            border-bottom: 1px solid var(--shadowblack);
        }
        .navbar .icon1{
            background-color: #f4f4f4;
            padding: 5px 7px;
            border-radius: 50%;
        }
        .navbar .heart:hover{
            color: red;
        }
        .navbar .icon2{
            background-color: #f4f4f4;
            padding: 5px 7px;
            border-radius: 50%;
        }
        .navbar .icon2:hover{
            background-color: var(--maincolor);
        }

        .navbar .basket:hover{
            color: var(--whitecolor);
        }
        .link .right .login{
            background-color: var(--maincolor);
            color: var(--whitecolor);
            border: 2px solid var(--maincolor);
        }
        .link .right .login:hover{
            background-color: var(--whitecolor);
            color: var(--maincolor);
            border: 2px solid var(--maincolor);
        }
        .userboxx{
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 3px 3px 10px var(--navcolor); 
            padding: 5px 18px;
            border-radius: 7px;

        }
        .userboxx .usernamee{
            font-size: 15px;
            color: var(--maincolor);
        }
        /* nav section end */
  </style>
  <body>
    <!-- nav section start -->
    <div class="homephoto">
        <nav class="navbar navbar-expand-lg fixed-top" >
            <div class="container-fluid mx-5">
                <a style="font-size: 43px" class="logo navbar-brand" href="#">A Nyar Thar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="link collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./product.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./review.php">Review</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <div class="right d-flex align-items-center">
                        <div class="d-flex align-items-center me-3 " style="border: 1px solid #747474; padding: 3px 5px; border-radius: 5px; color: black;">
                            <form action="product.php" method="post">
                                <input name="getdata" type="text" placeholder="Search items....." style="border: none; outline: none; background: none;">
                            </form>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <a class="icon1 nav-link me-2" href="./favsnack.php"><i class="heart fa-solid fa-heart"></i></a>
                        <div class="position-relative">
                            <a class="icon2 nav-link me-4" href="cart.php"><i class="basket fa-solid fa-cart-shopping  "><span class=" position-absolute top-0 start-50 translate-middle badge rounded rounded-circle bg-danger" id= "noti" style="font-size: 10px;">
                                                                                                                    
                                                                                                                  </span></i></a>
                        </div>  
                        <button onclick="gotologin()" class="login btn d-block px-4 fw-bold" style=" ">Login</button>
                        <div class="userboxxxxx ">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </nav>
        
    </div>
    <!-- nav section end -->
     <?php if(isset($_SESSION['user_id'])){ ?>
        <script>
            document.querySelector('.userboxxxxx').innerHTML = `<div class="userboxx ">
                                                                    <div class="me-3"><h6>User Name</h6><h4 class="usernamee"><?php echo $name; ?></h4></div>
                                                                    <div><a href="logout.php"><i class="fa-solid fa-right-from-bracket nav-link text-danger fs-5"></i></a></div>
                                                                </div>`;
            document.querySelector('.login').classList.remove('d-block');
            document.querySelector('.login').classList.add('d-none');
        </script>
    <?php }else{ ?>
        <script>
            document.querySelector('.login').classList.add('d-block');
            document.querySelector('.login').classList.remove('d-none');
        </script>
    <?php } ?>

    <script>
        function gotologin(){
            window.location.href = "login.php";       
        }
    </script>

    <script src="./fontend.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>