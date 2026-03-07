<?php
    include("nav.php");
    $isLoggedIn = isset($_SESSION['user_id']) ? 1 : 0;

    if(isset($_POST['save'])){
        $user_id = $_SESSION['user_id'];
        $rev_des = $_POST['rev_text'];

        $postrev = "INSERT INTO review( user_id , rev_des )
                                VALUES( '$id' , '$rev_des')";
        $res = mysqli_query($conn, $postrev);
        if($res){
           echo "<script>alert('Your review was posted successfully')</script> ";
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
    </head>
    <style>
        :root{
            --maincolor: #ff8800;
            --navcolor: #747474;
            --whitecolor: #ffffff;
            --shadowblack: #000000;
        }
        .reviewbox{
            margin: 120px 0px 70px;
        }
        .review{
            border: 1px solid var(--navcolor);
            margin: 0px 200px ;
            padding: 20px 35px;
        }
        .review img{
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 25px;
        }
        .review h4{
            font-size: 25px;
            color: var(--maincolor);
            margin-bottom: 20px;
        }
        .review h6{
            font-size: 17px;
            line-height: 26px;
        }
        .reviewbox .writereview{
            border: none;
            outline: none;
            margin: 50px 200px;
            border: 2px solid var(--maincolor);
            background-color: var(--maincolor);
            color: var(--whitecolor);
            border-radius: 10px;
            padding: 7px 20px;
            font-size: 20px;
        }
        .reviewbox .writereview:hover{
            background-color: var(--whitecolor);
            color: var(--maincolor);
        }
        .reviewbox .reviewtextbox{
            box-shadow: 4px 4px 10px var(--navcolor);
            border-radius: 8px;
        }
        .reviewtextbox .reviewsave{
            border: none;
            outline: none;
            background-color: var(--maincolor);
            color: var(--whitecolor);
            padding: 4px 24px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
        }
        .reviewtextbox .reviewsave:hover{
            transform: scale(1.1);
            box-shadow: 3px 3px 10px var(--navcolor);
            background-color: var(--whitecolor);
            color: var(--maincolor);
        }
        .reviewtextbox button{
            border: none;
            outline: none;
          
            color: var(--maincolor);
            padding: 4px 24px;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
            margin-right: 30px;
        }
        .reviewtextbox button:hover{
            transform: scale(1.1);
            box-shadow: 3px 3px 10px var(--navcolor);
            background-color: var(--whitecolor);
            color: var(--maincolor);
        }
        /* transform translate section start */
        .profileimg img{
            transition: 0.3s;
        }
        .profileimg img:hover{
            box-shadow: 2px 2px 20px var(--maincolor);
            box-shadow: -2px -2px 20px var(--maincolor);
            transform: scale(2.2);
        }
        h4, h6{
            transition: 0.3s;
        }
        h4:hover,
        h6:hover{
            transform: scale(1.1);
        }
        .writereview{
            transition: 0.5s;
        }
        .writereview:hover{
            transform: scale(1.1);
        }
        /* transform translate section end */
    </style>
    <body class="review-page">
        <div class="reviewbox">
            <?php
                $getrev = "SELECT review.*, user.user_name FROM review LEFT JOIN user ON review.user_id = user.user_id;";
                $getdata = mysqli_query($conn, $getrev);
                
                while($revdata = mysqli_fetch_array($getdata)):
            ?>
                <div class="review d-flex ">
                    <div class="profileimg">
                        <img src="./projectphoto/Anyar thar1.png" alt="">
                    </div>
                    <div>
                        <h4><?php echo $revdata['user_name']; ?></h4>
                        <h6><?php echo $revdata['rev_des']; ?> 💛</h6>
                    </div>
                </div>
            <?php endwhile  ?>
            <div class=" my-4 d-flex justify-content-center">
                <div class="reviewtextbox d-none card  w-50 text-center position-fixed top-50 start-50 translate-middle p-4 shadow-lg" id="box">
                    <h5 class="mb-3">Write Your Review Here</h5>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <textarea class="form-control" name="rev_text" aria-label="With textarea" name="text" placeholder="Enter your review"></textarea>
                        </div>
                        <div>
                            <button onclick="closereview()">Cancel</button>
                            <input type="submit" value="SAVE" name="save" class="reviewsave btn">
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button onclick="openreview()" class="writereview">Write Your Review</button>
            </div>
            
        </div>
        <script>
            let isLoggedIn = <?php echo $isLoggedIn; ?>;
            function openreview(){
                if(isLoggedIn){
                    document.querySelector('.reviewtextbox').classList.remove('d-none');
                    document.querySelector('.reviewtextbox').classList.add('d-block');
                } else {
                    alert("⚠ You need to login first!");
                    window.location.href = "login.php"; // redirect to login page
                }
                
            }
            function closereview(){
                document.querySelector('.reviewtextbox').classList.add('d-none');
                document.querySelector('.reviewtextbox').classList.remove('d-block');
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    include("footer.php");
?>