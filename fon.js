function gotocart(){
    window.location.href = "product.php";
}

function gotologin(){
            window.location.href = "login.php";       
        }

function heart(btn){
    let heart = btn.closest('.proheart');
    heart.classList.toggle('text-danger');
}
// function mark(btn){
//     let box = btn.closest('.box');
//     box.classList.toggle('bg-warning')
// }
// addtocart section start

let tempproduct = {};

function addtocart(image, name, weight, price){
    tempproduct = {
        proimage: image,
        proname: name,
        proweight: weight,
        proprice: price
    }

    document.getElementById('box').classList.add('d-block');
    document.getElementById('box').classList.remove('d-none');
}

function add(){
    let cart = JSON.parse(localStorage.getItem('products'))  || [];

    let exitproduct = cart.find(item => item.name === tempproduct.proname);
    if(exitproduct){
        exitproduct.qty += 1;
    }else{
        let product = {
            id: cart.length+1,
            image: tempproduct.proimage,
            name: tempproduct.proname,
            weight: tempproduct.proweight,
            price: tempproduct.proprice,
            qty: 1,
        }
        cart.push(product);   
    }
    localStorage.setItem('products', JSON.stringify(cart)); 

    document.getElementById('box').classList.remove('d-block');
    document.getElementById('box').classList.add('d-none');
}

function cancel(){
    document.getElementById('box').classList.remove('d-block');
    document.getElementById('box').classList.add('d-none');
}
// addtocart section end

// cart section start
function loaddata(){
    let cart = JSON.parse(localStorage.getItem('products'))  || [];

    let tbody  = document.querySelector('.tbody');
    let allbuyerbox = document.querySelector('.allbuyerbox');

    let subtotal = 0;
    tbody.innerHTML = "";

    if(cart.length === 0){
        
        // document.querySelector('.buyerbox').classList.remove('d-none');
        // document.querySelector('.buyerbox').classList.add('d-block');
        // allbuyerbox.innerHTML = `<h4 class="text-center my-4"> Your Shopping cart is empty </h4>`;

        allbuyerbox.innerHTML = `
            <div class="ordernow text-center" style="margin-top: 170px;">
                <h4 class="mb-5">Your cart is empty</h4>
                <button onclick="gotocart()"><i class="fa-solid fa-left-long me-2"></i>Do you want to buy anything?</button>
            </div>
            <script>
                function gotocart(){
                    window.location.href = "product";
                }
            </script>`;
    }else{
        document.querySelector('.buyerbox').classList.remove('d-none');
        document.querySelector('.buyerbox').classList.add('d-block');

        cart.forEach((item , index) => {
        tbody.innerHTML += ` <tr>
                                    <td><img src="./projectphoto/${item.image}" alt=""></td>
                                    <td>${item.name}</td>
                                    <td><span style="font-weight: 500; font-size: 20px;">${item.weight}</span> g</td>
                                    <td class="price"><span style="font-weight: 500; font-size: 20px;">${item.price}</span> mmk</td>
                                    <td>
                                    <div class="incdecbox d-flex align-items-center">
                                        <div class="incre"><button onclick="changeqty(${index}, 'decrease')"><i class="fa-solid fa-minus"></i></button></div>
                                        <div class="number">${item.qty}</div>
                                        <div class="incre"><button onclick="changeqty(${index}, 'increase')"><i class="fa-solid fa-plus"></i></button></div>
                                    </div>
                                    </td>
                                    <td class="price"><span style="font-weight: 500; font-size: 20px;">${item.qty * item.price}</span> mmk</td>
                                    <td><button onclick="deleteItem(${index})"><i class="deleteicon fa-solid fa-trash-can"></i></button></i></td>
                                </tr> `;

                                subtotal += item.price * item.qty ;
                                tax = subtotal * 0.02;
                                deliprice = 1000;
                                alltotal = subtotal + tax + deliprice;
                                
    });
        let allcartprice = document.getElementById('subtotal');
        allcartprice.textContent = subtotal;

        let taxprice = document.getElementById('tax');
        taxprice.textContent = tax;

        let deli = document.getElementById('deli');
        deli.textContent = deliprice; 

        let alltt = document.getElementById('total')
        alltt.textContent = alltotal;
    }
    
}
// function changeqty(index, action){
//     let cart = JSON.parse(localStorage.getItem('products'))  || [];

//     if(action === 'decrease'){
//         cart[index].qty -= 1;
//     }else if(action === 'increase'){
//         cart[index].qty += 1;
//     }
    
//     localStorage.setItem('products', JSON.stringify(cart)); 
//     loaddata();
// }
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
            
function order(){
    alert("success order")
}
// cart section end