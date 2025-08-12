<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
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
            font-size: 10px;
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
            font-size: 1rem;
            font-weight: 400;
        }

        .top_nav_link {
            margin-left: 1rem;
            font-size: 1rem;
            font-weight: 600;
            color: var(--colo-white-1);
        }

        /* navbar */
        nav {
            width: 100%;
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-bottom: 0.5px solid black;
            padding-bottom: 20px;
            font-size: 1rem;
        }

        nav .nav-content {
            max-width: 1400px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1rem;
        }

        nav .menu ul {
            display: flex;
            gap: 40px;
        }

        nav .menu ul li {
            list-style: none;
            font-size: 1rem;
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

        .sidebar {
            padding: 30px;
            min-height: 100vh;
        }

        .sidebar h6 {
            font-weight: bold;
            margin-top: 20px;
        }

        .sidebar a {
            display: block;
            color: #555;
            margin: 5px 23px;
            text-decoration: none;
        }

        .sidebar a.active {
            color: #b74b4b;
            font-weight: bold;
        }

        .content-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.05);
        }

        .btn-save {
            background-color: #d9534f;
            color: white;
        }

        .btn-save:hover {
            background-color: #c9302c;
        }

        .breadcrumb {
            background: none;
            padding: 0;
        }

        .breadcrumb-item a {
            text-decoration: none;
        }

        label {
            margin-bottom: 5px;
            font-weight: 600;
        }

        .mt-4 {
            font-weight: 600;
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

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar border-end">
                <h6>Manage My Account</h6>
                <a href="#" class="active">My Profile</a>
                <a href="#">Address Book</a>
                <a href="#">My Payment Options</a>

                <h6>My Orders</h6>
                <a href="#">My Returns</a>
                <a href="#">My Cancellations</a>

                <h6> My WishList</h6>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 p-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </nav>
                <p class="text-end">Welcome! <span class="text-danger">Md Rimel</span></p>

                <div class="content-box">
                    <h5 class="mb-4 text-danger">Edit Your Profile</h5>
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="FN">First Name</label>
                                <input id="FN" type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <label for="LN">Last Name</label>
                                <input id="LN" type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="Mail">Email</label>
                                <input id="Mail" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <label for="AD">Address</label>
                                <input id="AD" type="text" class="form-control" placeholder="Address">
                            </div>
                        </div>

                        <h6 class="mt-4">Password Changes</h6>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Current Password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" placeholder="Confirm New Password">
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <button type="reset" class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn btn-save">Save Changes </button>
                        </div>
                    </form>
                </div>
            </div>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>