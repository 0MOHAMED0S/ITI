@extends('Layouts.wep')
@section('content')

<style>
/* ===== Scoped Swiper Section Styles ===== */
.product-slider-section {
  width: 100%;
  padding: 50px 0;
  background-color: #f4f6f8;
}

.product-slider-title {
  text-align: center;
  font-size: 24px;
  font-weight: bold;
  color: #333;
  margin-bottom: 30px;
}

/* ===== Product Card ===== */
.product-slide-card {
  background: #ffffff;
  border-radius: 16px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  overflow: hidden;
  width: 240px;
  transition: 0.3s ease;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  position: relative;
}

.product-slide-card:hover {
  transform: translateY(-6px);
}

.product-card-top {
  position: relative;
}

.product-card-img {
  width: 100%;
  height: 190px;
  object-fit: cover;
  border-top-left-radius: 16px;
  border-top-right-radius: 16px;
}

/* Discount Label */
.product-discount-tag {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: #ff4b5c;
  color: white;
  font-size: 13px;
  padding: 4px 10px;
  border-radius: 20px;
  font-weight: 600;
}

/* Favorite Icon */
.product-fav-icon {
  position: absolute;
  top: 10px;
  right: 10px;
}

.product-fav-icon svg {
  width: 26px;
  height: 26px;
  color: #ff4b5c;
  cursor: pointer;
  transition: 0.3s;
}

.product-fav-icon svg:hover {
  transform: scale(1.15);
}

/* Card Body */
.product-card-body {
  padding: 15px;
  text-align: center;
}

.product-name {
  font-size: 15px;
  font-weight: 600;
  margin-bottom: 8px;
  color: #333;
  height: 40px;
  overflow: hidden;
}

.product-price {
  font-size: 14px;
  color: #28a745;
  font-weight: bold;
  margin-bottom: 12px;
}

/* Button */
.product-cart-btn {
  background-color: #ff4b5c;
  color: white;
  border: none;
  padding: 8px 18px;
  border-radius: 25px;
  font-size: 13px;
  cursor: pointer;
  transition: background 0.3s ease;
  margin-bottom: 10px;
}

.product-cart-btn:hover {
  background-color: #e84352;
}

/* Responsive */
@media (max-width: 768px) {
  .product-slide-card {
    width: 90%;
  }
}

@media (min-width: 769px) and (max-width: 1024px) {
  .product-slide-card {
    width: 200px;
  }
}
</style>

<!-- Swiper Product Section -->
<div class="product-slider-section">
  <h2 class="product-slider-title">All Products</h2>

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      @foreach ($Products as $Product)
        <div class="swiper-slide">
          <div class="product-slide-card">
            <div class="product-card-top">
              <a href="{{ route('show.p', $Product->id) }}">
                <img src="{{ asset('storage/Product/'.$Product->image) }}" alt="{{ $Product->name }}" class="product-card-img" />
              </a>

              <div class="product-discount-tag">-40%</div>

              <div class="product-fav-icon">
@auth
    @php
        $isFavorite = \App\Models\Favorite::where('user_id', auth()->id())
                        ->where('product_id', $Product->id)
                        ->exists();
    @endphp

    <form action="{{ route('favorites.toggle', $Product->id) }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" 
                class="border-0 bg-transparent p-0" 
                aria-label="Toggle favorite"
                style="cursor: pointer; outline: none;">
            <i class="fa {{ $isFavorite ? 'fa-heart' : 'fa-heart-o' }}" 
               style="
                    font-size: 20px; 
                    color: {{ $isFavorite ? '#dc3545' : '#6c757d' }};
                    transition: color 0.3s ease;
               ">
            </i>
        </button>
    </form>
@endauth

              </div>
            </div>

            <div class="product-card-body">
              <h3 class="product-name">{{ $Product->name }}</h3>
              <p class="product-price">{{ $Product->price }} EGP</p>

               @if(auth()->check())
  @php
      $inCart = \App\Models\Cart::where('user_id', auth()->id())
                  ->where('product_id', $Product->id)
                  ->exists();
  @endphp

  <a href="{{ route('cart.toggle', $Product->id) }}" 
     style="
        display: inline-block;
        font-size: 13px;
        padding: 8px 16px;
        border-radius: 25px;
        text-decoration: none;
        color: #fff;
        background-color: {{ $inCart ? '#dc3545' : '#28a745' }};
        transition: 0.3s;
     "
     onmouseover="this.style.backgroundColor='{{ $inCart ? '#c82333' : '#218838' }}'"
     onmouseout="this.style.backgroundColor='{{ $inCart ? '#dc3545' : '#28a745' }}'"
  >
      {{ $inCart ? 'Remove from Cart' : 'Add to Cart' }}
  </a>
@endif
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

<!-- Swiper Scripts -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      1024: { slidesPerView: 4 },
      768: { slidesPerView: 2 },
      480: { slidesPerView: 1 }
    }
  });

  function toggleFavorite(productId) {
    const form = document.getElementById(`favoriteForm_${productId}`);
    const icon = document.getElementById(`heartIcon_${productId}`);
    form.submit();
    icon.style.fill = "#ff4b5c";
  }
</script>
@endsection
