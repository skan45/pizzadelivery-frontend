// cart
let carticon = document.querySelector('#cart-icon');
let cart = document.querySelector('.cart');
let closecart = document.querySelector('#close-cart');

//open cart
carticon.onclick = () => {
    cart.classList.add("active");
};
//close cart
closecart.onclick = () => {
    cart.classList.remove("active");
};

//cart working js
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready();
}

function ready() {
    //remove items from cart
    var removecartbtns = document.getElementsByClassName('cart-remove');
    console.log(removecartbtns);
    for (var i = 0; i < removecartbtns.length; i++) {
        var button = removecartbtns[i];
        button.addEventListener('click', removecartitem);
    }
    //quantity changes
    var quantityinputs = document.getElementsByClassName('cart-quantity');
    for (var i = 0; i < quantityinputs.length; i++) {
        var input = quantityinputs[i];
        input.addEventListener('change', quantitychanged);
    }
    //add to cart
    var addcart = document.getElementsByClassName('add-cart');
    for (var i = 0; i < addcart.length; i++) {
        var button = addcart[i];
        button.addEventListener("click", addcartclicked);
    }
    // buy button
    document.getElementsByClassName('btn-buy')[0].addEventListener('click', buybuttonclicked);
}
//buy button function
function buybuttonclicked() {
    Swal.fire({
        icon: 'success',
        title: 'your order is placed',
        text: 'Your order will be delivered to your front door within minutes',
        showConfirmButton: false,
        timer: 5000
    })
    var cartcontent = document.getElementsByClassName('cart-content')[0];
    while (cartcontent.hasChildNodes()) {
        cartcontent.removeChild(cartcontent.firstChild);
    }
    updatetotal();
}
//remove items from cart
function removecartitem(event) {
    var buttonclicked = event.target;
    buttonclicked.parentElement.remove();
    updatetotal();
}

//quantity changes
function quantitychanged(event) {
    var input = event.target;
    if (isNaN(input.value) || (input.value <= 0)) {
        input.value = 1;
    }
    updatetotal();
    countquan();
}
//add to cart
function addcartclicked(event) {
    var button = event.target;
    var shopproducts = button.parentElement;
    var title = shopproducts.getElementsByClassName('product-title')[0].innerText;
    var price = shopproducts.getElementsByClassName('price')[0].innerText;
    var productimg = shopproducts.getElementsByClassName('product-img')[0].src;
    addproducttocart(title, price, productimg);
    updatetotal();
}
function addproducttocart(title, price, productimg) {
    var cartshopbox = document.createElement('div');
    cartshopbox.classList.add("cart-box");
    var cartitems = document.getElementsByClassName("cart-content")[0];
    var cartitemsnames = cartitems.getElementsByClassName("cart-product-title");
    for (var i = 0; i < cartitemsnames.length; i++) {
        if (cartitemsnames[i].innerText == title) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'you have already add this pizza to your order!',
            })
            return;
        }
    }

    var cartboxcontent = `
                    <img src="${productimg}" alt="" class="cart-img">
                    <div class="detail-box">
                        <div class="cart-product-title">${title}</div>
                        <div class="cart-price">${price}</div>
                        <input type="number" value="1" class="cart-quantity">
                    </div>
                    <!-- remove cart  -->
                    <i class='bx bxs-trash-alt cart-remove' ></i>
`;
    cartshopbox.innerHTML = cartboxcontent;
    cartitems.append(cartshopbox);
    cartshopbox.getElementsByClassName('cart-remove')[0].addEventListener('click', removecartitem);
    cartshopbox.getElementsByClassName('cart-quantity')[0].addEventListener('change', quantitychanged);
}
//update total
function updatetotal() {
    var cartcontent = document.getElementsByClassName('cart-content')[0];
    var cartboxes = document.getElementsByClassName('cart-box');
    var total = 0;
    for (var i = 0; i < cartboxes.length; i++) {
        var cartbox = cartboxes[i];
        var priceelement = cartbox.getElementsByClassName('cart-price')[0];
        var quantityelement = document.getElementsByClassName('cart-quantity')[0];
        var price = parseFloat(priceelement.innerText.replace("$", ""));
        var quantity = quantityelement.value;
        total = total + (price * quantity);
    }
    //if price contains some cents value
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName('total-price')[0].innerText = "$" + total;
}
let user = {
    "username": "topg",
    "password": "mike567"
}
function send(){
fetch("/php_files/processsend.php", {
    "method": "POST",
    "headers": {
        "content-type": "application/json; charset=utf-8"
    },
    "body": JSON.stringify(user)
}).then(function (response) {
    return response.text();
})
.then(function (data) {
        console.log(data);
    })}