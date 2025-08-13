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
                <form action="{{ route('favorites.add', $Product->id) }}" method="POST" id="favoriteForm_{{ $Product->id }}">
                  @csrf
                  <button type="button" onclick="toggleFavorite({{ $Product->id }})" style="background: none; border: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" id="heartIcon_{{ $Product->id }}">
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                  </button>
                </form>
              </div>
            </div>

            <div class="product-card-body">
              <h3 class="product-name">{{ $Product->name }}</h3>
              <p class="product-price">{{ $Product->price }} EGP</p>

              <form action="{{ route('cart.add', $Product->id) }}" method="POST">
                @csrf
                <button type="submit" class="product-cart-btn">Add to Cart</button>
              </form>
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
