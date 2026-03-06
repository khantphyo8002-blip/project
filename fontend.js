function gotocart(){
    window.location.href = "product.php";
}

function gotologin(){
            window.location.href = "login.php";       
}

// fav section start

function heart(btn, image, name, weight, price , pro_id){
    let heart = btn.closest('.proheart');
    // if(heart.classList.contains('text-danger')){
    //     heart.classList.remove('text-danger');
    // }else{
    //     heart.classList.add('text-danger');
    // }

    let favorites = JSON.parse(localStorage.getItem('fav')) || [];
    let found = favorites.find(item => item.name === name);

    if(!found){
        favorites.push({image, name, weight, price , pro_id});
        btn.classList.add("text-danger");
    }else{
        favorites = favorites.filter(item => item.name !== name);
        btn.classList.remove("text-danger");
    }
    localStorage.setItem('fav', JSON.stringify(favorites));
}

document.addEventListener("DOMContentLoaded", function(){

    let favorites = JSON.parse(localStorage.getItem('fav')) || [];
    let hearts = document.querySelectorAll(".proheart");

    hearts.forEach(btn => {
        let name = btn.parentElement.querySelector(".title").innerText;

        if(favorites.some(item => item.name === name)){
            btn.classList.add("text-danger");
        }
    });

});

function loadfavdata(){
    let favorites = JSON.parse(localStorage.getItem('fav')) || [];

    let favcard = document.querySelector('.favcard');

    favcard.innerHTML = "";

    if(favorites.length === 0){
        favcard.innerHTML = `<div class="col-lg-12 col md-12 text-center" style="margin: 150px 0px; letter-spacing: 8px;">
                                <h3>No Favorite Items Yet <i class="fa-solid fa-heart text-danger"></i></h3>
                            </div>`;
    }

    favorites.forEach(item => {
        favcard.innerHTML += `<div class="favbox col-lg-4 col-md-4 col-sm-6">
                        <div class="card">
                            <img src="./projectphoto/${item.image}" class="card-img-top" alt="..." style="height: 250px;">
                            <div class="cardbox">
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="title card-title">${item.name}</p>
                                    <button onclick="removeFav('${item.name}', this)" class="heart"><i class="fa-solid fa-heart"></i></button>
                                </div>
                                <p class="text card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card</p>
                                <p class="weight">Net weight: <span style="font-size: 16px; font-weight: 500; color: black;">${item.weight} </span>g</p>
                                <p class="price"><span style="color: #ff8800;"><i class="fa-solid fa-money-bill-1-wave"></i></span><span style="font-size: 20px; color: black; font-weight: 400;"> ${item.price} </span><span>mmk</span></p>
                                <button class="addtocart" onclick="addtocart('${item.image}','${item.name}',${item.weight},${item.price},${item.pro_id})">Add To Cart</button>
                            </div>
                        </div>        
                    </div>`;
    });
}
function removeFav(name, btn) {

    let favorites = JSON.parse(localStorage.getItem("fav")) || [];

    favorites = favorites.filter(item => item.name !== name);

    localStorage.setItem("fav", JSON.stringify(favorites));

    btn.closest(".col-lg-4").remove();

    let favcard = document.querySelector('.favcard');
    if(favorites.length === 0){
        favcard.innerHTML = `<div class="col-lg-12 col md-12 text-center" style="margin: 150px 0px; letter-spacing: 8px;">
                                <h3>No Favorite Items Yet <i class="fa-solid fa-heart text-danger"></i></h3>
                            </div>`;
    }
    loadfavdata();
}

let tempproduct = {};

function addtocart(image, name, weight, price , pro_id){
    tempproduct = {
        proimage: image,
        proname: name,
        proweight: weight,
        proprice: price,
        pro_id: pro_id
    }

    document.getElementById('box').classList.add('d-block');
    document.getElementById('box').classList.remove('d-none');
}

function add(){
    let cart = JSON.parse(localStorage.getItem('products'))  || [];

    // let exitproduct = cart.find(item => item.name === tempproduct.proname);
    let exitproduct = cart.find(item => item.pro_id === tempproduct.pro_id);
    if(exitproduct){
        exitproduct.qty += 1;
    }else{
        let product = {
            id: cart.length+1,
            image: tempproduct.proimage,
            name: tempproduct.proname,
            weight: tempproduct.proweight,
            price: tempproduct.proprice,
            pro_id: tempproduct.pro_id,
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
                                    <td style="font-size: 20px;">${item.name}</td>
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
        allcartprice.value = subtotal;

        let taxprice = document.getElementById('tax');
        taxprice.value = tax;

        let deli = document.getElementById('deli');
        deli.value = deliprice; 

        let alltt = document.getElementById('total')
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
            
// function order(){
//     alert("success order")
// }
// cart section end