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
        <link rel="stylesheet" href="./home.css">
    </head>
    <style>
        
    </style>
    <body class="home-page">
        <!-- home1 section start -->
        <div class="home ">
            <div></div>
            <div class="hometext d-flex align-items-center justify-content-end me-5" >
                <div class="text" >
                    <h4 class="headtext">trdajr&JU &dk;&mvuf&mawGudk vGrf;qGwfwrf;waeygovm;¿ </h4>
                    <h4>oefU&Sif;vwfqwfjyD; tdrfcsufvuf&mtwdkif; apwemygyg jyKvkyfxm;wJh </h4>
                    <h4>jrefrmh&dk;&mrkefYrsKd;pkHudk wpfae&mwnf;rSm &&SdEdkifygjyD...</h4>
                    <h4>t&om&SdwJh rkefYawGudk tckyJMunhf&Ivdkufyg ...</h4>
                    <button onclick="gotocart()" style="padding: 5px 28px">xkwfukefrsm;Munhf&ef</button>
                </div>
            </div>
        </div>
        <!-- home1 section end -->
        <!-- home2 section start -->
        <div class="main text-center">
            <h3 class="maintitle">uGsefawmfwdkY&JU <span style="font-size: 32px; font-family: 'iner'; font-weight: bold;"> Main </span> xkwfukefrsm;</h3>
            <div class="imgbox d-flex justify-content-evenly px-5">
                <div class="img1">
                    <img src="./projectphoto/peanut4.jpg" alt="">
                    <div class="detailtext d-flex align-items-center">
                        <p>csdKcsdKav;? rmrmMuyfMuyfeJY wpfudkufpm;vdkufwmeJY &dk;&mt&omudk csufcsif;cHpm;edkifygonf/ rdom;pk&dk;&mcsufenf;jzihf jyKvkyfxm;jyD; obm0yg0ifypönf;rsm;om tokH;jyKxm;ygonf/ vwfqwfoefY&Sif;rIudk tmrcHygonf/</p>
                    </div>
                </div>
                <div class="img2">
                    <img src="./projectphoto/home 3.jpg" alt="">
                    <div class="detailtext d-flex align-items-center">
                        <p>ESrf;eHYarT;arT;eJY tcsdK;nDnGwfaom t&omaumif;wpfrsdk;/ vufvkyfppfppfjzpfjyD; t&omrysuf &dk;&mppfppfudk xdef;odrf;xm;ygonf/ vufaqmifay;&efvnf; oihfawmfygonf/</p>
                    </div>
                </div>
                <div class="img3">
                    <img src="./projectphoto/pauk pauk.jpg" alt="">
                    <div class="detailtext d-flex align-items-center">
                        <p>tjyifbufMuyfMuyf? twGif;rSm ajryJjynhfjynhf00yg0ifaom rkefYvkH;av;rsm;/ uav;vlBuD;ra&G; eSpfoufpGm pm;okH;edkifjyD; tcsdefra&G; oabmusp&m rkefYwpfrsdK;jzpfygonf/</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- home2 section end -->
        <!-- home3 section start -->
        <div class="home3 d-flex justify-content-between align-items-center">
            <div class="home3img">
                <img src="./projectphoto/peanut same.png" alt="">
            </div>
            <div class="home3text">
                <h4 class="ms-5">t&nftaoG;tmrcH</h4>
                <h5><i class="fa-solid fa-check me-3"></i>obm0yg0ifypönf;rsm;om tokH;jyKxm;ygonf</h5>
                <h5><i class="fa-solid fa-check me-3"></i>aeYpOff vwfqwfpGm xkwfvkyfygonf</h5>
                <h5><i class="fa-solid fa-check me-3"></i>oefY&Sif;rIeSihf t&omudk txl;*&kpdkufygonf</h5>
                <h5><i class="fa-solid fa-check me-3"></i>,kHMunfpdwfcspGm pm;okH;edkifygonf</h5>
            </div>
            <div class="home3img">
                <img src="./projectphoto/htan hlat khae.jpg" alt="">
            </div>
        </div>
        <!-- home3 section end -->
        <!-- home card section start -->
        <div class="container-fluid px-5 mb-5">
            <div class="row">
                <?php
                    $getproduct = "SELECT * FROM product LIMIT 4";
                    $getprodata = mysqli_query($conn, $getproduct);
                    while($prodata = mysqli_fetch_array($getprodata)):
                ?>
                    <div class="col-lg-3 col-md-3">
                        <div class="card">
                            <img src="./projectphoto/<?php echo $prodata['pro_img']; ?>" class="card-img-top" alt="..." style="height: 250px;">
                            <div class="cardbox">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="title card-title"><?php echo $prodata['pro_name']; ?></p>
                                    <button onclick="heart(this, '<?php echo $prodata['pro_img']; ?>', '<?php echo $prodata['pro_name']; ?>', <?php echo $prodata['pro_weight']; ?>, <?php echo $prodata['pro_price']; ?> , <?php echo $prodata['pro_id']; ?> )" class="proheart" style="border: none; outline: none; background: none;"><i class="fa-solid fa-heart"></i></button>
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
            <div class="row my-5">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="viewmore text-center">
                        <button onclick="gotocart()">View More</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="bestselling mb-4">a&mif;tm;taumif;qHk;</h3>
                </div>
            </div>
            <div class="bestsellingbox row">
                <div class="col-lg-3 col-md-3">
                    <div class="card">
                        <img src="./projectphoto/peanut1.jpg" class="card-img-top" alt="..." style="height: 250px;">
                        <div class="cardbox">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="title card-title">မြေပဲယို</p>
                                <button class="proheart"><i class="fa-solid fa-heart"></i></button>
                            </div>
                            <p class="text card-text" style="font-size: 12px;">မြေပဲနှင်ံ ထန်းလျက်တို့ရောစပ်ပြုလုပ်ထားသော အစာပြေအစားစာလေး</p>
                            <p class="weight">Net weight: <span style="font-size: 16px; font-weight: 500; color: black;">500 </span>g</p>
                            <p class="price"><span style="color: #ff8800;"><i class="fa-solid fa-money-bill-1-wave"></i></span><span style="font-size: 20px; color: black; font-weight: 400;"> 10000 </span><span>mmk</span></p>
                            <button class="addtocart" onclick="addtocart()">Add To Cart</button>
                        </div>
                    </div>
                </div>   
                <div class="col-lg-3 col-md-3">
                    <div class="card">
                        <img src="./projectphoto/pauk pauk.jpg" class="card-img-top" alt="..." style="height: 250px;">
                        <div class="cardbox">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="title card-title">ပေါက်ပေါက်ဆုတ်</p>
                                <button class="proheart"><i class="fa-solid fa-heart"></i></button>
                            </div>
                            <p class="text card-text" style="font-size: 12px;">ပေါ်က်ပေါက်နှင့် ထန်းလျက်သုံးပြုလုပ်ထားသော ရိုးရာအစားစာ</p>
                            <p class="weight">Net weight: <span style="font-size: 16px; font-weight: 500; color: black;">200 </span>g</p>
                            <p class="price"><span style="color: #ff8800;"><i class="fa-solid fa-money-bill-1-wave"></i></span><span style="font-size: 20px; color: black; font-weight: 400;"> 17000 </span><span>mmk</span></p>
                            <button class="addtocart" onclick="addtocart()">Add To Cart</button>
                        </div>
                    </div>
                </div>                
                <div class="col-lg-3 col-md-3">
                    <div class="card">
                        <img src="./projectphoto/salaykhawee.jpg" class="card-img-top" alt="..." style="height: 250px;">
                        <div class="cardbox">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="title card-title">စာလေးခွေ</p>
                                <button class="proheart"><i class="fa-solid fa-heart"></i></button>
                            </div>
                            <p class="text card-text" style="font-size: 12px;">ကုလားပဲစစ်စ်နှင့် ပြုလုပ်ထားပါသည်</p>
                            <p class="weight">Net weight: <span style="font-size: 16px; font-weight: 500; color: black;">100 </span>g</p>
                            <p class="price"><span style="color: #ff8800;"><i class="fa-solid fa-money-bill-1-wave"></i></span><span style="font-size: 20px; color: black; font-weight: 400;"> 15000 </span><span>mmk</span></p>
                            <button class="addtocart" onclick="addtocart()">Add To Cart</button>
                        </div>
                    </div>
                </div>   
                <div class="col-lg-3 col-md-3">
                    <div class="card">
                        <img src="./projectphoto/peanut sar.jpg" class="card-img-top" alt="..." style="height: 250px;">
                        <div class="cardbox">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="title card-title">မြေပဲဆားလှော်</p>
                                <button class="proheart"><i class="fa-solid fa-heart"></i></button>
                            </div>
                            <p class="text card-text" style="font-size: 12px;">သန့်စင်သောမြေပဲများဖြင့်ပြုလုပ်ထားသော အစားစာ</p>
                            <p class="weight">Net weight: <span style="font-size: 16px; font-weight: 500; color: black;">200 </span>g</p>
                            <p class="price"><span style="color: #ff8800;"><i class="fa-solid fa-money-bill-1-wave"></i></span><span style="font-size: 20px; color: black; font-weight: 400;"> 18000 </span><span>mmk</span></p>
                            <button class="addtocart" onclick="addtocart()">Add To Cart</button>
                        </div>
                    </div>
                </div>   
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
        <!-- home card section end -->

        <script src="./fontend.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    include("footer.php");
?>