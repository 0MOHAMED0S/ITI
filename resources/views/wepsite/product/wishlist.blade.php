@extends('layouts.wep')

@section('content')

<style>
/* ===== Favorites Page Style ===== */
body {
  background-color: #f6f6f6;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.container h2 {
  text-align: center;
  margin: 40px 0 30px;
  font-weight: 700;
  font-size: 28px;
  color: #333;
}

.favorites-flex {
  display: flex;
  flex-wrap: wrap;
  gap: 24px;
  justify-content: center;
}

/* ===== Product Card ===== */
.product-card {
  width: 240px;
  background-color: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.06);
  overflow: hidden;
  padding: 15px;
  text-align: center;
  transition: 0.3s ease;
  position: relative;
}

.product-card:hover {
  transform: translateY(-4px);
}

.product-card img {
  width: 100%;
  height: 160px;
  object-fit: cover;
  border-radius: 8px;
}

/* ===== Product Info ===== */
.product-title {
  font-size: 16px;
  font-weight: 600;
  margin: 12px 0 6px;
  color: #222;
  min-height: 38px;
}

.product-price {
  font-size: 15px;
  color: #28a745;
  font-weight: bold;
  margin-bottom: 12px;
}

/* ===== Action Buttons ===== */
.product-actions {
  display: flex;
  justify-content: center;
  gap: 10px;
  flex-wrap: wrap;
}

.product-actions button {
  font-size: 13px;
  padding: 7px 14px;
  border-radius: 30px;
  border: none;
  cursor: pointer;
  transition: 0.3s ease;
}

.btn-remove {
  background-color: #ff4b5c;
  color: white;
}

.btn-remove:hover {
  background-color: #e43d4f;
}

.btn-cart {
  background-color: #007bff;
  color: white;
}

.btn-cart:hover {
  background-color: #0062cc;
}

/* ===== Empty Favorites ===== */
.alert-info {
  background-color: #e7f3ff;
  border: 1px solid #bee5eb;
  color: #31708f;
  font-size: 16px;
  padding: 16px;
  border-radius: 8px;
  margin-top: 40px;
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
  .product-card {
    width: 90%;
  }
}
</style>

<div class="container">
    <h2>My Favorites</h2>

    @if($favorites->isEmpty())
        <div class="alert alert-info text-center">
            😔 You have no favorite products yet.<br>
            Start exploring and add some!
        </div>
    @else
        <div class="favorites-flex">
            @foreach($favorites as $favorite)
                <div class="product-card">
                    @if($favorite->product->image ?? false)
                        <img src="{{ asset('storage/Product/' . $favorite->product->image) }}" 
                             alt="{{ $favorite->product->name }}">
                    @endif

                    <div class="product-title">{{ $favorite->product->name }}</div>
                    <div class="product-price">{{ $favorite->product->price }} EGP</div>

                    <div class="product-actions">
                        <form action="{{ route('favorites.remove', $favorite->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-remove">Remove</button>
                        </form>

                        <form action="{{ route('cart.add', $favorite->product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-cart">Add to Cart</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
