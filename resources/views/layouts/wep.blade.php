<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Link Swiper's CSS -->
  <title>Home - Exclusive E-Commerce Website</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="{{ asset('asset/css/about.css') }}">
  <link rel="stylesheet" href="{{asset('asset/css/contact.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/check.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/navbar.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/product.css')}}">
  <link rel="stylesheet" href="{{asset('asset/css/styles.css')}}">
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



  <nav class="navbar">
    
      {{-- <div class="logo">
        <b>Exclusive</b>
      </div> --}}
      <div class="menu">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('allproduct') }}">All Product</a></li>
          <li><a href="{{ route('contact') }}">contact</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('order') }}">My Order</a></li>
        </ul>
      </div>
 
        <div class="search">
          <input class="srch" type="text" placeholder="search">
          <i class="fa fa-search"></i>
        </div>

  <div class="icons">
    <a href="{{ route('favorites') }}"><i class="fa fa-heart-o"></i></a>
    <a href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i></a>
    <a href="{{ route('profile.edit') }}"><i class="fas fa-user"></i></a>
  </div>

           <div class="auth">
            @if (Route::has('login'))
               
                @auth
                    @if(auth()->user()->role==1)
                      <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @endif
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout')}}"onclick="event.preventDefault();
                this.closest('form').submit();"> LogOut</a>
                </form>

                    @else
                  <a href="{{ route('login') }}">Login </a>
                    @if (Route::has('register'))
                  <a href="{{ route('register') }}">
                   Register
                  </a>
                  @endif
                @endauth
            @endif
      </div>

  </nav>
  @if(session('msg'))
  <div id="successMessage" 
       style="
         background-color: #d4edda;
         color: #155724;
         border: 1px solid #c3e6cb;
         padding: 12px 20px;
         border-radius: 6px;
         font-size: 15px;
         margin-bottom: 15px;
         text-align: center;
         position: relative;
         transition: opacity 0.5s ease;
       ">
    {{ session('msg') }}
  </div>

  <script>
  
    setTimeout(function() {
      const msg = document.getElementById('successMessage');
      if (msg) {
        msg.style.opacity = '0';
        setTimeout(() => msg.style.display = 'none', 500);
      }
    }, 3000);
  </script>
@endif

  <!-- <span class="hamburger">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
      class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg>
  </span>
  </div>
  </nav>
  <nav class="mobile_nav mobile_nav_hide">
    <ul class="mobile_nav_list">
      <li class="mobile_nav_item">
        <a href="index.html" class="mobile_nav_link">Home</a>
      </li>
      <li class="mobile_nav_item">
        <a href="index.html#" class="mobile_nav_link">About</a>
      </li>
      <li class="mobile_nav_item">
        <a href="index.html#" class="mobile_nav_link">Contact</a>
      </li>
      <li class="mobile_nav_item">
        <a href="sign-up.html" class="mobile_nav_link">Sign Up</a>
      </li>
      <li class="mobile_nav_item">
        <a href="cart.html" class="mobile_nav_link">Cart</a>
      </li>
    </ul>
  </nav> -->


  @yield('content')


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
          Designed and Developed by Team RA3D
        </p>
      </div>
    </div>
  </footer>
<script>
    function toggleFavorite(productId) {
        const heartIcon = document.getElementById('heartIcon_' + productId);
        heartIcon.style.stroke = 'red';
        heartIcon.style.fill = 'red';

        // إرسال الفورم تلقائيًا
        document.getElementById('favoriteForm_' + productId).submit();
    }
</script>
  <script src="{{asset('asset/js/script.js')}}"></script>
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="{{asset('asset/js/app.js') }}"></script>
      <script src="{{asset('asset/script.js') }}"></script>
</body>

</html>
