@extends('Layouts.wep')
@section('content')
<style>
/* ===== Swiper Styles ===== */
.swiper {
  width: 100%;
  padding: 20px 0;
}

.swiper-slide {
  display: flex;
  justify-content: center;
}

.card {
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  overflow: hidden;
  width: 250px;
  transition: transform 0.2s ease;
}

.card:hover {
  transform: translateY(-5px);
}

.card_top {
  position: relative;
}

.card_img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card_tag {
  position: absolute;
  top: 10px;
  left: 10px;
  background: red;
  color: white;
  font-size: 14px;
  padding: 4px 8px;
  border-radius: 4px;
}

.card_top_icons {
  position: absolute;
  top: 10px;
  right: 10px;
}

.card_top_icon {
  width: 24px;
  height: 24px;
  color: #ff4b5c;
  cursor: pointer;
}

.card_body {
  padding: 15px;
  text-align: center;
}

.card_title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

.card_price {
  font-size: 16px;
  color: #28a745;
  margin-bottom: 10px;
}

.add_to_cart {
  background: #ff4b5c;
  color: white;
  border: none;
  padding: 10px 15px;
  border-radius: 20px;
  cursor: pointer;
  transition: background 0.2s ease;
}

.add_to_cart:hover {
  background: #e84352;
}
</style>

<!-- Swiper Container -->
<div class="swiper mySwiper">
  <div class="swiper-wrapper">
    @foreach ($Products as $Product)
      <div class="swiper-slide">
        <div class="card">
          <div class="card_top">
            <a href="{{ route('show.p', $Product->id) }}">
              <img src="{{ asset('storage/Product/'.$Product->image) }}" alt="" class="card_img" />
            </a>
            <div class="card_tag">-40%</div>
            <div class="card_top_icons">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                stroke-width="1.5" stroke="currentColor" class="card_top_icon">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 
                  3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
              </svg>
            </div>
          </div>
          <div class="card_body">
            <h3 class="card_title">{{ $Product->name }}</h3>
            <p class="card_price">${{ $Product->price }}</p>
            <form action="{{ route('cart.add', $Product->id) }}" method="POST">
              @csrf
              <button type="submit" class="add_to_cart">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<!-- SwiperJS Scripts -->
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
</script>
@endsection
