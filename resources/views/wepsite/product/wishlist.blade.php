<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wishlist</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    /* General styles */

    :root {
      --font-main: "Inter", sans-serif;
      --colo-primary: #db4444;
      --colo-dark-1: #000000;
      --colo-dark-2: #7d8184;
      --colo-white-1: #ffffff;
      --colo-white-2: #dedcdc;
      --color-green: #00d656;
    }

    * {
      padding: 0px;
      margin: 0px;
      box-sizing: border-box;
    }

    html {
      font-size: 10px;
      /* 1 rem 10px */
    }

    body {
      font-family: var(--font-main);
      font-size: 1.6rem;
    }

    a {
      text-decoration: none;
    }

    ul {
      list-style: none;
    }

    .container {
      max-width: 114rem;
      margin: 0 auto;
      padding: 0rem 1rem;
    }

    .w-6 {
      width: 2rem;
      height: 2rem;
    }

    .h-6 {
      fill: rgb(239, 140, 1);
    }

    #icon {
      font-size: 32px !important;
      color: black;
    }

    /* top_nav */
    .top_nav {
      width: 100%;
      height: 4rem;
      background-color: var(--colo-dark-1);
    }

    .top_nav_container {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .top_nav_wrapper {
      display: flex;
      color: var(--colo-white-1);
    }

    .tap_nav_p {
      font-size: 1.4rem;
      font-weight: 400;
    }

    .top_nav_link {
      margin-left: 1rem;
      font-size: 1.4rem;
      font-weight: 600;
      color: var(--colo-white-1);
    }

    /* navbaar */
    nav {
      width: 100%;

      margin-top: 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-bottom: 0.5px solid black;
      padding-bottom: 20px;
    }

    nav .nav-content {
      max-width: 1400px;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    nav .menu ul {
      display: flex;
      gap: 40px;
    }

    nav .menu ul li {
      list-style: none;
    }

    nav .menu ul li a {
      text-decoration: none;
      color: black;
    }

    nav .menu ul li a:hover {
      text-decoration: underline;
      color: black;
    }

    nav .items {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 24px;
    }

    nav .items .search {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 10px;
      background: #F5F5F5;
      padding: 5px 15px;
    }

    nav .items .search .srch {
      padding: 10px;
      background: none;
      border: none;
    }

    nav .items .items-icons {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 24px;
    }

    /* body {
      background-color: #fff;
      padding: 20px;
    } */

    .product-card {
      border: 1px solid #eee;
      padding: 10px;
      text-align: center;
      border-radius: 5px;
      position: relative;
    }

    .btn-black {
      background-color: #000;
      color: #fff;
      width: 100%;
    }

    .btn-black:hover {
      background-color: #333;
      color: #fff;
    }

    .discount-tag,
    .new-tag {
      position: absolute;
      top: 10px;
      left: 10px;
      background: red;
      color: white;
      padding: 2px 8px;
      font-size: 12px;
      border-radius: 3px;
    }

    .new-tag {
      background: green;
    }

    .remove-btn {
      position: absolute;
      top: 10px;
      right: 10px;
      background: #fff;
      border: none;
      color: red;
      font-size: 20px;
      cursor: pointer;
    }

    .mb-2 {
      width: 178px;
    }

    /* footer */
    .footer {
      margin-top: 10rem;
      background-color: var(--colo-dark-1);
    }

    .footer_container {
      width: 100%;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
      grid-gap: 3rem;
      padding: 5rem 0rem;
      color: var(--colo-white-1);
    }

    .footer_logo {
      font-size: 3rem;
      color: var(--colo-white-1);
      font-weight: 700;
    }

    .footer_p {
      margin-top: 1.2rem;
    }

    .footer_item_titl {
      margin-bottom: 1.2rem;
    }

    .footer_list_item {
      margin: 0.5rem 0rem;
    }

    .footer_bottom_container {
      width: 100%;
      text-align: center;
    }

    .footer_copy {
      color: var(--colo-dark-2);
      padding: 1.5rem 0rem;
    }
  </style>
</head>

<body>

  <div class="top_nav">
    <div class="container top_nav_container">
      <div class="top_nav_wrapper">
        <p class="tap_nav_p">
          Summer Sale For All Swim Suits And Free Express Delivery - OFF 50%!
        </p>
        <a href="index.html#" class="top_nav_link">SHOP NOW</a>
      </div>
    </div>
  </div>
  <nav>
    <div class="nav-content">
      <div class="logo">
        <h2>Exclusive</h2>
      </div>
      <div class="menu">
        <ul>
          <li><a href="index.html">
              <h2>Home</h2>
            </a></li>
          <li><a href="contact.html">
              <h2>contact</h2>
            </a></li>
          <li><a href="about.html">
              <h2>About</h2>
            </a></li>
          <li><a href="create.html">
              <h2>Sign Up</h2>
            </a></li>
        </ul>
      </div>
      <div class="items">
        <div class="search">
          <input class="srch" type="text" placeholder="what are you looking for?">
          <i id="icon" class="fa fa-search"></i>
        </div>
        <div class="items-icons">
          <div class="wishlist"><a href="wishlist.html"><i id="icon" class="fa fa-heart-o"></i></a></div>
          <div class="cart"><a href="cart.html"><i id="icon" class="fa fa-shopping-cart"></i></a></div>
          <div class="account"><a href="Account.html"><i id="icon" class="fas fa-user"></i></a></div>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <h5 class="mb-4">Wishlist (<span id="wishlistCount">0</span>)</h5>
    <div class="row" id="wishlistContainer"></div>

    <button id="moveAllToCart" class="btn btn-outline-dark mt-3">Move All To Bag</button>

    <hr class="my-5">

    <h5 class="mb-4">Just For You</h5>
    <div class="row" id="productsContainer">
      <!-- Example Products -->
    </div>
  </div>

  <!-- Footer -->

  <footer class="footer">
    <div class="container footer_container">
      <div class="footer_item">
        <a href="index.html#" class="footer_logo">Exclusive</a>
        <div class="footer_p">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Exercitationem fuga harum voluptate?
        </div>
      </div>
      <div class="footer_item">
        <h3 class="footer_item_titl">Support</h3>
        <ul class="footer_list">
          <li class="li footer_list_item">Stockholm, Sweden</li>
          <li class="li footer_list_item">email@gmail.com</li>
          <li class="li footer_list_item">+46 123 456 78</li>
          <li class="li footer_list_item">+46 72 345 67</li>
        </ul>
      </div>
      <div class="footer_item">
        <h3 class="footer_item_titl">Support</h3>
        <ul class="footer_list">
          <li class="li footer_list_item">Account</li>
          <li class="li footer_list_item">Login / Register</li>
          <li class="li footer_list_item">Cart</li>
          <li class="li footer_list_item">Shop</li>
        </ul>
      </div>
      <div class="footer_item">
        <h3 class="footer_item_titl">Support</h3>
        <ul class="footer_list">
          <li class="li footer_list_item">Privacy policy</li>
          <li class="li footer_list_item">Terms of use</li>
          <li class="li footer_list_item">FAQ's</li>
          <li class="li footer_list_item">Contact</li>
        </ul>
      </div>
    </div>
    <div class="footer_bottom">
      <div class="container footer_bottom_container">
        <p class="footer_copy">
          Copyright Exclusive 2023. All right reserved
        </p>
      </div>
    </div>
  </footer>

  <script>
    let products = [
      { id: 1, name: "Gucci duffle bag", price: 960, img: "image/items/item-7.png" },
      { id: 3, name: "RGB liquid CPU Cooler", price: 1960, img: "image/items/item-6.png" },
      { id: 4, name: "Quilted Satin Jacket", price: 750, img: "image/items/item-15.png" },
      { id: 5, name: "ASUS FHD Gaming Laptop", price: 960, oldPrice: 1160, img: "image/items/item-11.png", discount: "-35%" },
      { id: 6, name: "IPS LCD Gaming Monitor", price: 1160, img: "image/items/item-3.png" },
      { id: 7, name: "HAVIT HV-G92 Gamepad", price: 560, img: "image/items/item-1.png", newTag: "NEW" },
      { id: 8, name: "AK-900 Wired Keyboard", price: 200, img: "image/items/item-2.png" }
    ];

    function renderProducts() {
      let container = document.getElementById("productsContainer");
      container.innerHTML = "";
      products.forEach(p => {
        container.innerHTML += `
        <div class="col-md-3 mb-4">
          <div class="product-card">
            ${p.discount ? `<div class="discount-tag">${p.discount}</div>` : ""}
            ${p.newTag ? `<div class="new-tag">${p.newTag}</div>` : ""}
            <img src="${p.img}" class="img-fluid mb-2">
            <h6>${p.name}</h6>
            <p class="text-danger">$${p.price} ${p.oldPrice ? `<small class="text-muted text-decoration-line-through">$${p.oldPrice}</small>` : ""}</p>
            <button class="btn btn-black mb-2" onclick="addToCart(${p.id})">Add To Cart</button>
            <button class="btn btn-outline-dark" onclick="addToWishlist(${p.id})">♡ Add to Wishlist</button>
          </div>
        </div>
      `;
      });
    }

    function addToWishlist(id) {
      let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
      let product = products.find(p => p.id === id);
      if (!wishlist.some(p => p.id === id)) {
        wishlist.push(product);
        localStorage.setItem("wishlist", JSON.stringify(wishlist));
        renderWishlist();
      } else {
        alert("Already in Wishlist");
      }
    }

    function renderWishlist() {
      let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
      document.getElementById("wishlistCount").textContent = wishlist.length;
      let container = document.getElementById("wishlistContainer");
      container.innerHTML = "";
      wishlist.forEach((p, index) => {
        container.innerHTML += `
        <div class="col-md-3 mb-4">
          <div class="product-card">
            ${p.discount ? `<div class="discount-tag">${p.discount}</div>` : ""}
            <button class="remove-btn" onclick="removeFromWishlist(${index})">🗑</button>
            <img src="${p.img}" class="img-fluid mb-2">
            <h6>${p.name}</h6>
            <p class="text-danger">$${p.price} ${p.oldPrice ? `<small class="text-muted text-decoration-line-through">$${p.oldPrice}</small>` : ""}</p>
            <button class="btn btn-black" onclick="addToCart(${p.id})">Add To Cart</button>
          </div>
        </div>
      `;
      });
    }

    function removeFromWishlist(index) {
      let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
      wishlist.splice(index, 1);
      localStorage.setItem("wishlist", JSON.stringify(wishlist));
      renderWishlist();
    }

    function addToCart(id) {
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      let product = products.find(p => p.id === id);
      let existing = cart.find(p => p.id === id);
      if (existing) {
        existing.quantity++;
      } else {
        product.quantity = 1;
        cart.push(product);
      }
      localStorage.setItem("cart", JSON.stringify(cart));
      alert(product.name + " added to cart!");
    }

    document.getElementById("moveAllToCart").addEventListener("click", () => {
      let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
      let cart = JSON.parse(localStorage.getItem("cart")) || [];
      wishlist.forEach(w => {
        let existing = cart.find(c => c.id === w.id);
        if (existing) {
          existing.quantity++;
        } else {
          w.quantity = 1;
          cart.push(w);
        }
      });
      localStorage.setItem("cart", JSON.stringify(cart));
      localStorage.removeItem("wishlist");
      renderWishlist();
      alert("All wishlist items moved to cart!");
    });

    renderProducts();
    renderWishlist();
  </script>

</body>

</html>