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
    <link rel="stylesheet" href="./cart.css">
  </head>
  <body class="cart-page">
    <div class="buyerbox d-flex justify-content-center" style="margin: 130px 0px 70px;">
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
                    <th><button><i class="deleteicon fa-solid fa-trash-can"></i></button></i></th>
                </tr>
                <tr>
                    <td><img src="./projectphoto/peanut1.jpg" alt=""></td>
                    <td>Peanut</td>
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
                </tr>                
            </table>
            <div class="continue">
                <a href=""><i class="fa-solid fa-left-long me-2"></i>Continue Shopping</a>
            </div>
        </div>
        <div class="totalbox">
            <h5 class="totalamount">Total Amount</h5>
            <div class="amountbox d-flex justify-content-between align-items-center">
                <div class="amounttext">
                    <h6>Subtotal</h6>
                    <h6>Tax 2%</h6>
                    <h6>Delivery free</h6>
                </div>
                <div class="amountnumber">
                    <h6 class="d-flex justify-content-end align-items-end"><span>10000</span> mmk</h6>
                    <h6 class="d-flex justify-content-end align-items-end"><span>200</span> mmk</h6>
                    <h6 class="d-flex justify-content-end align-items-end"><span>1000</span> mmk</h6>
                </div>
            </div>
            <div class="alltotalbox d-flex justify-content-between align-items-center">
                <div class=".left">
                    <h5>TOTAL</h5>
                </div>
                <div class="right">
                    <h5><span>11200</span>mmk</h5>
                </div>
            </div>
            <div class="ordernow text-center">
                <button>Order Now</button>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>

<?php

include("footer.php");

?>