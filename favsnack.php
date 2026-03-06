<?php
    include("nav.php");
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
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
        .favtitle{
            margin: 110px 0px 40px;
        }
        .favcard{
            margin: 0px 100px 70px;
        }
        .card{
            box-shadow: 4px 4px 10px var(--navcolor);
            margin-bottom: 20px;
            transition: 0.3s;
        }
        .card:hover{
            transform: translate(2px, -3px);
            box-shadow: 5px 5px 30px var(--navcolor);
        }
        .card .cardbox{
            padding: 10px 20px;
            
        }
        .card .title{
            font-size: 20px;
            margin-bottom: 0px;
            font-family: "W01Arthouse";
        }
        .card .heart{
            border: none;
            outline: none;
            background-color: var(--whitecolor);
        }
        .card .text{
            font-size: 12px;
            margin-bottom: 2px;
            color: var(--navcolor);
        }
        .card .weight{
            font-size: 15px;
            margin-bottom: 0px;
            color: var(--navcolor);
        }
        .card .price{
            font-size: 14px;
            margin-bottom: 8px;
            color: var(--navcolor);
        }
        .card .addtocart{
            border: none;
            outline: none;
            border: 2px solid var(--maincolor);
            border-radius: 15px;
            font-size: 16px;
            padding: 5px 18px;
            background-color: var(--whitecolor);
            transition: 0.3s;
        }
        .card .addtocart:hover{
            background-color: var(--maincolor);
            color: var(--whitecolor);
            transform: scale(1.1);
        }
        .cardbox button i{
            color: red; 
        }
    </style>
    <body class="favsnack-page" onload="loadfavdata()">
        <div class="d-flex justify-content-center">
            <h3 class="favtitle">My Fav Snack</h3>
        </div>
        <div class="container">
            <div class="favcard row mx-5">
                <!-- <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="card">
                        <img src="./projectphoto/peanut1.jpg" class="card-img-top" alt="..." style="height: 250px;">
                        <div class="cardbox">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="title card-title">ajryJ,dk </p>
                                <button class="heart"><i class="fa-solid fa-heart"></i></button>
                            </div>
                            <p class="text card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card</p>
                            <p class="weight">Net weight: <span style="font-size: 16px; font-weight: 500; color: black;">500 </span>g</p>
                            <p class="price"><span style="color: #ff8800;"><i class="fa-solid fa-money-bill-1-wave"></i></span><span style="font-size: 20px; color: black; font-weight: 400;"> 10000 </span><span>mmk</span></p>
                            <button class="addtocart" onclick="addtocart()">Add To Cart</button>
                        </div>
                    </div>        
                </div> -->
                
                
            </div>
            <!-- addtocart section start -->
                <div class="card d-none w-25 text-center position-fixed top-50 start-50 translate-middle p-4 shadow-lg" id="box">
                    <div>
                        <h4 class="pb-2">Do you want to add this product to Cart?</h4>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-danger" onclick="cancel()">Cancel</button>
                            <button class="btn btn-outline-success" onclick="add()">Add</button>
                        </div>
                    </div>
                </div>
            <!-- addtocart section end -->
        </div>

        <script src="./fontend.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    include("footer.php");
?>