<?php
    include("nav.php");
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>A Nyar Thar </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
        <script src="./fontend.js"></script>
    </head>
        <style>
            :root{
                --maincolor: #ff8800;
                --navcolor: #747474;
                --whitecolor: #ffffff;
                --shadowblack: #000000;
            }
            /* category section start */
            .product{
                margin-top: 120px;
                font-size: 24PX;
                margin-bottom: 15px;
                position: sticky;
                top: 120px;
            }
            .filter{
                font-size: 20px;
                border-bottom: 1px solid var(--navcolor);
            }
            .categorybox{
                border-radius: 10px;
                box-shadow: 4px 4px 20px var(--navcolor);
                height: 250px;
                padding: 10px 20px;
                margin-bottom: 20px;
                position: sticky;
                top: 170px;
            }
            .categorybox label{
                margin-bottom: 3px;
            }
            /* category section end */
            /* card section start */
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
            }
            .card .proheart{
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
            /* card section end */
            /* pagination section start */
                .pagination a{
                    color: var(--maincolor);
                }
                .pagination a:hover{
                    background-color: var(--maincolor);
                    color: var(--whitecolor);
                }
            /* pagination section end */

        </style>
    <body class="product-page">
        <!-- Product section start -->
            
            <div class="container-fluid px-5 mb-5">
                <h3 class="product">Product</h3>
                <!-- category section start -->
                <div class="row">
                    <div class="categorybox col-lg-3">
                        <h3 class="filter">Filter</h3>
                        <form action="" method="get">
                        <label for="search">Search</label><br>
                        <div class="input-group mb-3">
                            <input type="text" id="search" class="form-control" placeholder="Search items....." aria-label="Recipient’s username" aria-describedby="button-addon2">
                        </div>
                        <label for="category">Category</label><br>
                        <select id="category" class="form-select" aria-label="Default select example" onchange="this.form.submit()">
                            <option value="">All Category</option>
                            <?php 
                                $getcategory = "SELECT *FROM category";
                                $getcatdata = mysqli_query($conn, $getcategory);
                                while($prodata = mysqli_fetch_array($getcatdata)):
                            ?>
                                <option value="<?php echo $prodata['cat_id']; ?>" class="select"><?php echo $prodata['cat_name']; ?></option>
                            <?php endwhile ?>
                        </select>
                        </form>
                    </div>
                    <!-- category section end -->
                    <div class="col-lg-9">
                        <!-- card section start -->
                        <div class="row">
                            <?php
                            
                                $getproduct = "SELECT * FROM product";
                                $getprodata = mysqli_query($conn, $getproduct);
                                while($prodata = mysqli_fetch_array($getprodata)):
                            ?>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card">
                                        <img src="./projectphoto/<?php echo $prodata['pro_img']; ?>" class="card-img-top" alt="..." style="height: 250px;">
                                        <div class="cardbox">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="title card-title"><?php echo $prodata['pro_name']; ?></p>
                                                <button onclick="heart(this, '<?php echo $prodata['pro_img']; ?>', '<?php echo $prodata['pro_name']; ?>', <?php echo $prodata['pro_weight']; ?>, <?php echo $prodata['pro_price']; ?> , <?php echo $prodata['pro_id']; ?> )" class="proheart"><i class="fa-solid fa-heart"></i></button>
                                            </div>
                                            <p class="text card-text" style="font-size: 12px;"><?php echo $prodata['pro_des']; ?></p>
                                            <p class="weight">Net weight: <span style="font-size: 16px; font-weight: 500; color: black;"><?php echo $prodata['pro_weight']; ?> </span>g</p>
                                            <p class="price"><span style="color: #ff8800;"><i class="fa-solid fa-money-bill-1-wave"></i></span><span style="font-size: 20px; color: black; font-weight: 400;"> <?php echo $prodata['pro_price']; ?> </span><span>mmk</span></p>
                                            <button class="addtocart" onclick="addtocart('<?php echo $prodata['pro_img']; ?>' , '<?php echo $prodata['pro_name']; ?>' , <?php echo $prodata['pro_weight']; ?> , <?php echo $prodata['pro_price']; ?> , <?php echo $prodata['pro_id']; ?>)">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile ?>
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
                        <!-- card section end -->
                    </div>
                </div>
                <!-- <div class="row ">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="d-flex justify-content-center">
                            <nav aria-label="Page navigation example" class="mx-auto m-4">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> -->
            </div>
        <!-- Product section end -->

        <!-- <script src="./fontend.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    include("footer.php");
?>