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
        :root{
            --maincolor: #ff8800;
            --navcolor: #747474;
            --whitecolor: #ffffff;
            --shadowblack: #000000;
        }
        
        /* nav section start */
        .navbar{
            box-shadow: 2px 0px 4px var(--navcolor);
            margin-bottom: 10000px;
        }
        .logo{
            font-size: 40px;
            font-family: 'Irish Grover', serif;
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
        .login{
            background-color: var(--maincolor);
            color: var(--whitecolor);
            border: 2px solid var(--maincolor);
        }
        .login:hover{
            background-color: var(--whitecolor);
            color: var(--maincolor);
            border: 2px solid var(--maincolor);
        }
        /* nav section end */
  </style>
  <body>
    <!-- nav section start -->
    <div class="homephoto">
        <nav class="navbar navbar-expand-lg" >
            <div class="container-fluid mx-5">
                <a class="logo navbar-brand" href="#">A Nyar Thar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="link collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
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
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center me-3 " style="border: 1px solid #747474; padding: 3px 5px; border-radius: 5px; color: black;">
                            <form>
                                <input class="" type="text" placeholder="Search items....." style="border: none; outline: none;">
                            </form>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <a class="icon1 nav-link me-2" href="./favsnack.php"><i class="heart fa-solid fa-heart"></i></a>
                        <a class="icon2 nav-link me-4" href="./cart.php"><i class="basket fa-solid fa-cart-shopping  position-relative"></i></a>
                        <button class="login btn  px-4 fw-bold" >Login</button>
                    </div>
                    
                </div>
            </div>
        </nav>
        
    </div>
    <!-- nav section end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>