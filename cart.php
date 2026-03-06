<?php

  // session_start();
  // include("db.php");
  // if(isset($_SESSION['user_id'])){
  //   $id = $_SESSION['user_id'];
  // }
  include("nav.php");
  $isLoggedIn = isset($_SESSION['user_id']) ? 1 : 0;

  if(isset($_POST['save'])){
    if($isLoggedIn){
      // echo "<script>alert('✅ Success! Your order has been placed.');</script>";
      $subtotal = $_POST['subtotal'];
      $total = $_POST['total'];
      date_default_timezone_set("Asia/Yangon");
      $date = date("Y-m-d H:i:s");
      // echo "<script>alert('Your total amount is $total  mmk');</script>";

      $sql = "INSERT INTO orders( ord_date , user_id , item_total , final_total )
      VALUES( '$date' , '$id' , '$subtotal' , '$total' )";
      $res = mysqli_query($conn, $sql);

      $ord_id = mysqli_insert_id($conn);
      $pro_id = $_POST['pro_id'];
      $qty = $_POST['qty'];
      $amount = $_POST['amount'];

      for($i = 0; $i < count($pro_id); $i++){
        $sql1 = "INSERT INTO orders_product( ord_id , pro_id , qty , amount)
        VALUES( '$ord_id' , '$pro_id[$i]' , '$qty[$i]' , '$amount[$i]' )";
        mysqli_query($conn, $sql1);

        $sql2 = "SELECT * FROM balance WHERE pro_id = '$pro_id[$i]' ORDER BY bal_id DESC LIMIT 1;";
        $res2 = mysqli_query($conn, $sql2);
        if($res2){
          $data2 = mysqli_fetch_array($res2);
          $latest_balance = $data2['balance'];
          $total_balance = $latest_balance - $qty[$i];
          $sql3 = "INSERT INTO balance( pro_id , bal_date , inc_qty , sale_qty , balance)
          VALUES( '$pro_id[$i]' , '$date' , 0 , '$qty[$i]' , '$total_balance')";
          $res3 = mysqli_query($conn, $sql3);
        }else{
          echo "<script>alert('Balance not found')</script>";
        }
      }
      echo ("
      <script>
      localStorage.removeItem('products');
      alert('✅ Order done! Your total amount is $total');
      window.location.href = 'product.php';
      </script>");

    } else {
      echo  "<script>alert('⚠ You need to login first!'); window.location.href = 'login.php';</script>";
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
    <link rel="stylesheet" href="./cart.css">
    <!-- <script src="./fontend.js"></script> -->
  </head>
  <body class="cart-page" onload="loaddata()">
    <div class="allbuyerbox">

      <form action="" method="post">
        <div class="buyerbox d-flex d-none justify-content-center" style="margin: 130px 0px 70px;">
          <div class="itembox">
            <h4 class="shoppingcart">Shopping Cart</h4>
            <table>
              <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Net Weight</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th><button type="button" onclick="alldel()"><i class="deleteicon fa-solid fa-trash-can"></i></button></i></th>
              </tr>
              <tbody class="tbody">
                <!-- <tr>
                  <td><img src="./projectphoto/peanut1.jpg" alt=""></td>
                  <td style="font-family: 'W01Arthouse' ;">Peanut</td>
                  <td><span style="font-weight: 500; font-size: 20px;">500</span> g</td>
                  <td class="price"><span style="font-weight: 500; font-size: 20px;">10000</span> mmk</td>
                  <td>
                    <div class="incdecbox d-flex align-items-center">
                      <div class="incre"><button ><i class="fa-solid fa-minus"></i></button></div>
                      <div class="number">1</div>
                      <div class="incre"><button ><i class="fa-solid fa-plus"></i></button></div>
                    </div>
                  </td>
                  <td class="price"><span style="font-weight: 500; font-size: 20px;">10000</span> mmk</td>
                  <td><button><i class="deleteicon fa-solid fa-trash-can"></i></button></i></td>
                </tr>  -->
              </tbody>               
            </table>

            <div class="continue">
              <a href="product.php"><i class="fa-solid fa-left-long me-2"></i>Continue Shopping</a>
            </div>
          </div>
          <!-- <div class="totalbox">
            <h5 class="totalamount">Total Amount</h5>
            <div class="amountbox d-flex justify-content-between align-items-center">
              <div class="amounttext">
                <h6>Subtotal</h6>
                <h6>Tax 2%</h6>
                <h6>Delivery free</h6>
              </div>
              <div class="amountnumber">
                <h6 class="d-flex justify-content-end align-items-end"><span id="subtotal"></span> mmk</h6>
                <h6 class="d-flex justify-content-end align-items-end"><span id="tax"></span> mmk</h6>
                <h6 class="d-flex justify-content-end align-items-end"><span id="deli"></span> mmk</h6>
              </div>
            </div>
            <div class="alltotalbox d-flex justify-content-between align-items-center">
              <div class=".left">
                <h5>TOTAL</h5>
              </div>
              <div class="right">
                <h5><span id="total"></span>mmk</h5>
              </div>
            </div>

            <div class="ordernow text-center">
              <button onclick="order()" name="save">Order Now</button>
            </div>
          </div>  -->
          <div class="totalbox">
            <h5 class="totalamount">Total Amount</h5>
            <div class="amountbox ">
                <div class="amounttext">
                    <h6>Subtotal <span class="me-1 ms-4">MMK</span><input type="text" name="subtotal" id="subtotal" value="" readonly></h6>
                    <h6>Tax 2%   <span class="sp1 me-1">MMK</span><input type="text" name="" id="tax" value="" readonly></h6>
                    <h6>Delivery free <span class="sp2"></span><input type="text" name="" id="deli" value="" readonly></h6>
                </div>
            </div> 
            <div class="alltotalbox">
                <div class="left">
                    <h5>TOTAL <span class="">MMK</span><input class="w-50" type="text" name="total" id="total" value="" readonly></h5>
                </div>
            </div>
            <div class="ordernow text-center">
                <button type="submit" name="save">Order Now</button>
            </div>
        </div>
        </div>
      </form>
      

    </div>

    <script>
      function loaddata(){
            let cart = JSON.parse(localStorage.getItem('products'))  || [];

            let tbody  = document.querySelector('.tbody');
            let allbuyerbox = document.querySelector('.allbuyerbox');

            let subtotal = 0;
            tbody.innerHTML = "";

            if(cart.length === 0){
                
                allbuyerbox.innerHTML = `
                    <div class="ordernow text-center" style="margin-top: 170px;">
                        <h4 class="mb-5">Your cart is empty</h4>
                        <button onclick="gotocart()"><i class="fa-solid fa-left-long me-2"></i>Do you want to buy anything?</button>
                    </div>
                    
                    `;
            }else{
                document.querySelector('.buyerbox').classList.remove('d-none');
                document.querySelector('.buyerbox').classList.add('d-block');

                cart.forEach((item , index) => {
                tbody.innerHTML += ` <tr>
                                            <td><img src="./projectphoto/${item.image}" alt=""></td>
                                            <td style="font-size: 20px;">${item.name}</td>
                                            <input type="hidden" name="pro_id[]" value="${item.pro_id}">
                                            <td><span style="font-weight: 500; font-size: 20px;">${item.weight}</span> g</td>
                                            <td class="price"><span style="font-weight: 500; font-size: 20px;">${item.price}</span> mmk</td>
                                            <td>
                                            <div class="incdecbox d-flex align-items-center">
                                                <div class="incre"><button type="button" onclick="changeqty(${index}, 'decrease')"><i class="fa-solid fa-minus"></i></button></div>
                                                <input type="text" class="form-control text-center mx-2 qty-input" style="width: 60px;" name="qty[]" value="${item.qty}">
                                                <div class="incre"><button type="button" onclick="changeqty(${index}, 'increase')"><i class="fa-solid fa-plus"></i></button></div>
                                            </div>
                                            </td>
                                            <td class="price"><input type="text" name="amount[]" id="" value="${item.qty * item.price}" readonly> mmk</td>
                                            <td><button type="button" onclick="deleteItem(${index})"><i class="deleteicon fa-solid fa-trash-can"></i></button></i></td>
                                        </tr> 
                                        `;

                                        subtotal += item.price * item.qty ;
                                        tax = subtotal * 0.02;
                                        deliprice = 1000;
                                        alltotal = subtotal + tax + deliprice;
                                        
            });
                let allcartprice = document.getElementById('subtotal');
                allcartprice.value = subtotal;

                let taxprice = document.getElementById('tax');
                taxprice.value = tax;

                let deli = document.getElementById('deli');
                deli.value = deliprice; 

                let alltt = document.getElementById('total');
                alltt.value = alltotal;
            }
            
        }
        function changeqty(index, action){
            let cart = JSON.parse(localStorage.getItem('products'))  || [];

            if(action === 'decrease'){
                if(cart[index].qty > 1){
                    cart[index].qty -= 1;
                }
            }else if(action === 'increase'){
                cart[index].qty += 1;
            }
            
            localStorage.setItem('products', JSON.stringify(cart)); 
            loaddata();
        }

        function deleteItem(index){
            let cart = JSON.parse(localStorage.getItem('products')) || [];
            cart.splice(index, 1);
            localStorage.setItem('products', JSON.stringify(cart));
            loaddata();
        }


        function alldel(){
            localStorage.clear();
            loaddata();

        }
        
        function gotocart(){
          window.location.href = "product.php";
        }

        function order(){
          alert("success order kkk")
        }
        // cart section end
    </script>
    <!-- <script src="./fontend.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>

<?php

// include("footer.php");

?>