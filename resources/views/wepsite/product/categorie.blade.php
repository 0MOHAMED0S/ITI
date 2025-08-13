@extends('layouts.wep')

@section('content')

<style>
/* ===== Category Products Page Style ===== */
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

.products-flex {
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

/* ===== View Button ===== */
.view-btn {
  background-color: #007bff;
  color: white;
  font-size: 13px;
  padding: 7px 16px;
  border-radius: 30px;
  border: none;
  transition: 0.3s;
  cursor: pointer;
}

.view-btn:hover {
  background-color: #0062cc;
}

/* ===== No Products Message ===== */
.alert-info {
  background-color: #e7f3ff;
  border: 1px solid #bee5eb;
  color: #31708f;
  font-size: 16px;
  padding: 16px;
  border-radius: 8px;
  margin-top: 40px;
  text-align: center;
}

/* ===== Responsive ===== */
@media (max-width: 768px) {
  .product-card {
    width: 90%;
  }
}
</style>

<div class="container">
    <h2>{{ $Categories->name }} Products</h2>

    @if($Categories->products->isEmpty())
        <div class="alert alert-info">
            😕 No products found in this category.<br>
            Check other categories or come back later!
        </div>
    @else
        <div class="products-flex">
            @foreach($Categories->products as $product)
                <div class="product-card">
                    @if($product->image ?? false)
                        <img src="{{ asset('storage/Product/' . $product->image) }}" alt="{{ $product->name }}">
                    @else
                        <img src="https://via.placeholder.com/300x300" alt="{{ $product->name }}">
                    @endif

                    <div class="product-title">{{ $product->name }}</div>
                    <div class="product-price">{{ $product->price }} EGP</div>

                    <a href="{{ route('show.p', $product->id) }}" class="view-btn">View Product</a>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection
