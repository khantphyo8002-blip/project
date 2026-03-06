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
    </head>
    <style>
        :root{
            --maincolor: #ff8800;
            --navcolor: #747474;
            --whitecolor: #ffffff;
            --shadowblack: #000000;
        }
        /* homeabout section start */
        .homeabout{
            margin: 150px 150px 50px;
        }
        .hometext .color{
            font-family: "W72ArtHouse";
            color: var(--maincolor);
            font-size: 41px;
            margin-bottom: 1px;
            letter-spacing: 3%;
        }
        .hometext .noncolor{
            font-family: "W72ArtHouse";
            font-size: 31px;
            margin-bottom: 3px;
            letter-spacing: 3%;
        }
        .hometext button{
            font-family: "W64ArtHouse";
            font-size: 31px;
            border: none;
            outline: none;
            border-radius: 8px;
            background-color: var(--maincolor);
            color: var(--whitecolor);
            padding: 6px 25px;
            margin-top: 20px;
            border: 2px solid var(--maincolor);
        }
        .hometext button:hover{
            background-color: var(--whitecolor);
            color: var(--maincolor);

        }
        .homeabout img{
            width: 340px; 
            height: 350px; 
            border-radius: 15px; 
            box-shadow: 10px 10px 20px var(--navcolor); 
            box-shadow: -10px -10px 20px var(--navcolor);
        }
        /* homeabout section end */
        /* .aboutus section start */
        .aboutus{
            margin: 100px 150px 50px;
        }
        .aboutus img{
            width: 340px; 
            height: 350px; 
            border-radius: 15px; 
            box-shadow: 10px 10px 20px var(--navcolor); 
            box-shadow: -10px -10px 20px var(--navcolor);
        }
        .aboutus .abouttitle{
            font-family: "W01ArtHouse";
            font-size: 32px;
            margin-bottom: 20px;
        }
        .aboutus .abouttext{
            font-family: "W01ArtHouse";
            font-size: 24px;
            width: 550px;
        }
        /* aboutus section end */
        /* production section start */
        .production{
            margin: 100px 150px 70px;
        }
        .production .productiontitle{
            font-family: "W01ArtHouse";
            font-size: 32px;
            margin-bottom: 20px;
        }
        .production .productiontext{
            font-family: "W01ArtHouse";
            font-size: 24px;
            width: 550px;
        }
        .production img{
            width: 340px; 
            height: 350px; 
            border-radius: 15px; 
            box-shadow: 10px 10px 20px var(--navcolor); 
            box-shadow: -10px -10px 20px var(--navcolor);
        }
        /* production section end */
        /* transform translate section start */
        .hoverimg{
            transition: 0.5s;
        }
        .hoverimg:hover{
            transform: translate(8px,-5px);
            transform: scale(1.1);
        }
        .hoverimg img{
            transition: 1.3s;
        }
        .hoverimg img:hover{
            box-shadow: 4px 4px 50px var(--maincolor);
        }
        h3, h5, h6 {
            transition: 0.3s;
        }

        h3:hover, 
        h5:hover, 
        h6:hover {
            transform: translate(2px, -4px);
            color: var(--maincolor);
        }
        .hometext button{
            transition: 0.5s;
        }
        .hometext button:hover{
            transform: scale(1.1);
        }
        /* transform translate section end */
    </style>
    <body class="about-page">
        <!-- homeabout section start -->
        <div class="homeabout d-flex justify-content-between align-items-center">
            <div class="hometext">
                <h5 class="color">trdajr&JU &dk;&mvuf&mawGudk </h5>
                <h5 class="color mb-3">vGrf;qGwfwrf;waeygovm;¿</h5>
                <h5 class="noncolor">tdrfcsufvuf&mtwdkif; apwemygyg jyKvkyfxm;wJh </h5>
                <h5 class="noncolor">jrefrmh&dk;&mrkefYrsKd;pkHudk wpfae&mwnf;rSm &&SdEdkifygjyD...</h5>
                <h5 class="noncolor">t&om&SdwJh rkefYawGudk tckyJMunhf&Ivdkufyg ...</h5>
                <button>xkwfukefrsm;Munhf&ef</button>
            </div>
            <div class="hoverimg">
                <img src="./projectphoto/peanut1.jpg" alt="" >
            </div>
        </div>
        <!-- homeabout section end -->
        <!-- aboutus section start -->
        <div class="aboutus d-flex justify-content-between align-items-center">
            <div class="hoverimg">
                <img src="./projectphoto/htan pin.jpg" alt="">
            </div>
            <div>
                <h3 class="abouttitle">tnmom;vkyfief;taMumif;</h3>
                <h6 class="abouttext mb-3">uRefawmfwdkYonf jrefrmh&dk;&mt&omudk xdef;odrf;aqmif&Gufvsuf&Sdaom ajryJ,dkeSihf rkefYrsdK;pkH xkwfvkyfa&mif;csonhf rdom;pkvkyfief;wpfckjzpfygonf/</h6>
                <h6 class="abouttext"> rsdK;quftqufquf vufqihfurf;&&Sdvmaom &dk;&mcsufenf;rsm;udk tokH;jyKí obm0ypönf;rsm;omjzihf apwemygyg jyKvkyfxm;ygonf/</h6>
            </div>
        </div>
        <!-- aboutus section end -->
        <!-- production section start -->
        <div class="production d-flex justify-content-between align-items-center">
            <div>
                <h3 class="productiontitle">xkwfvkyfrI</h3>
                <h6 class="productiontext mb-3">oefY&Sif;rIeSihf t&nftaoG;udk txl;*&kpdkufum aeYpOfvwfqwfpGm xkwfvkyfay;vsuf&Sdygonf/</h6>
                <h6 class="productiontext">uRefawmfwdkY\ &nf&G,fcsufrSm jrefrmh&dk;&mt&omppfppfudk acwfeSihftnD xdef;odrf;ay;edkif&efeSihf vlwdkif; ,kHMunfpdwfcspGm pm;okH;edkifaom rkefYrsm; ay;pGrf;edkif&ef jzpfygonf/</h6>
            </div>
            <div class="hoverimg">
                <img src="./projectphoto/production.jpg" alt="" >
            </div>
        </div>
        <!-- production section end -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    include("footer.php");
?>