<?php

    include("nav.php");
    include('db.php');

    if(isset($_POST['save'])){
        $ct_name = $_POST['ct_name'];
        $ct_phone = $_POST['ct_phone'];
        $ct_email = $_POST['ct_email'];
        $ct_subject = $_POST['ct_subject'];
        $ct_message = $_POST['ct_message']; 
        date_default_timezone_set("Asia/Yangon");
        $date = date("Y-m-d H:i:s");

        $sql = "INSERT INTO contact(ct_name , ct_phone , ct_email , ct_subject , ct_message , ct_date)
            VALUES('$ct_name' , '$ct_phone' , '$ct_email' , '$ct_subject' , '$ct_message' , '$date')";
            
        $res = mysqli_query($conn , $sql);
        if($res){
            echo "<script>alert('Send message succcessfully')</script>";
        }else{
            echo "<script>alert('Not send message succcessfully')</script>";
        }
    }
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
        /* cccbox section start */
        .contact{
            text-align: center;
            font-size: 16px;
            color: var(--navcolor);
            margin-top: 120px;
        }
        .needhelp{
            text-align: center;
            font-size: 24px;
            font-weight: 500;
            margin-top: 20px;
            margin-bottom: 80px;
        }
        .cccbox{
            margin: 20px 45px;

        }
        .contactbox{
            border-radius: 10px;
            box-shadow: 2px 2px 30px gray;
            box-shadow: -2px -2px 30px gray;
            padding: 15px;
            /* margin-bottom: 20px; */
        }
        .bgicon{
            background-color: var(--maincolor);
            width: 55px;
            height: 55px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .icon{
            color: var(--whitecolor);
            font-size: 20px;
        }
        .contactbox .title{
            font-size: 20px;
            color: var(--navcolor);
            font-weight: 500;
        }
        .contactbox .text{
            font-size: 14px;
            color: var(--navcolor);
        }
        /* cccbox section end */
        .textbox{
            border-radius: 10px;
            box-shadow: 2px 2px 30px gray;
            box-shadow: -2px -2px 30px gray;
            padding: 25px;
            margin: 50px;

        }
        .textbox input{
            width: 100%;
            margin-bottom: 10px;
            border: none;
            outline: none;
            border: 1px solid var(--navcolor);
            border-radius: 8px;
            padding: 10px 10px;
            font-size: 20px;
        }
        .textbox textarea{
            width: 100%;
            margin-bottom: 10px;
            border: none;
            outline: none;
            border: 1px solid var(--navcolor);
            border-radius: 8px;
            padding: 10px 10px;
            font-size: 20px;
        }
        .textbox .sendmessage{
            border: none;
            outline: none;
            background-color: var(--maincolor);
            color: var(--whitecolor);
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 500;
            margin-top: 15px;
            border: 2px solid var(--maincolor);
        }
        .textbox .sendmessage:hover{
            color: var(--maincolor);
            background-color: var(--whitecolor);
        }
        /* transform translate section start */
        .contactbox{
            transition: 0.3s;
        }
        .contactbox:hover{
            transform: translate(3px, -4px);
        }
        .sendmessage{
            transition: 0.5s;
        }
        .sendmessage:hover{
            transform: scale(1.1);
        }
        /* transform translate section end */
    </style>
    <body class="contact-page">
        <!-- contact section start -->
            <h4 class="contact ">CONTACT</h4>
            <h4 class="needhelp" class="">Need Help? <span style="color: var(--maincolor); font-weight: 500;">Contact Us</span></h4>
            <div class="container">
                <!-- cccbox section start -->
                <div class="cccbox row">
                    <div class="col-lgl-6 col-md-6 col-sm-12 mb-2">
                        <div class="contactbox d-flex align-items-center">
                            <div class="bgicon d-flex justify-content-center align-items-center">
                                <i class="icon fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <h6 class="title">Address</h6>
                                <h6 class="text">10H/9 Pagoda Street, Yangon</h6>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lgl-6 col-md-6 col-sm-12 mb-2">
                        <div class="contactbox d-flex align-items-center">
                            <div class="bgicon d-flex justify-content-center align-items-center">
                                <i class="icon fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <h6 class="title">Call Us</h6>
                                <h6 class="text">+959 979848002</h6>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="cccbox row">
                    <div class="col-lgl-6 col-md-6 col-sm-12 mb-2">
                        <div class="contactbox d-flex align-items-center">
                            <div class="bgicon d-flex justify-content-center align-items-center">
                                <i class="icon fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <h6 class="title">Email</h6>
                                <h6 class="text">anyarthar2026@gmail.com</h6>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lgl-6 col-md-6 col-sm-12 mb-2">
                        <div class="contactbox d-flex align-items-center">
                            <div class="bgicon d-flex justify-content-center align-items-center">
                                <i class="icon fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <h6 class="title">Opeaning Hours</h6>
                                <h6 class="text">24/7 Service</h6>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- cccbox section end -->
                <!-- textbox section start -->
                <div class="textbox row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <form method="post">
                            <div class="row mb-2">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" name="ct_name" id="" placeholder="Your Name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <input type="number" name="ct_phone" id="" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <input type="email" name="ct_email" id="" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="text" name="ct_subject" id="" placeholder="Your Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea name="ct_message" id="" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                    <button name="save" class="sendmessage">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5390.433364522346!2d96.12679457017961!3d16.8293793932286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194ca13fff6e3%3A0x1334ced7a53c5bbc!2sHledan%20Centre!5e0!3m2!1sen!2sde!4v1771836139979!5m2!1sen!2sde" 
                            width="100%" height="450"  style="border:0; margin-bottom: 70px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <!-- textbox section end -->
            </div>
        <!-- contact section end -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    include("footer.php");
?>