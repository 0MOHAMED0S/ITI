@extends('layouts.wep')

@section('content')

<style>
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
    margin-bottom: 14px;
  }

  .view-btn,
  .cart-btn {
    display: inline-block;
    font-size: 13px;
    padding: 8px 16px;
    border-radius: 25px;
    text-decoration: none;
    color: #fff;
    margin: 5px 0;
    transition: background-color 0.3s ease;
  }

  .view-btn {
    background-color: #007bff;
  }

  .view-btn:hover {
    background-color: #0062cc;
  }

  .cart-btn.add {
    background-color: #28a745;
  }

  .cart-btn.add:hover {
    background-color: #218838;
  }

  .cart-btn.remove {
    background-color: #dc3545;
  }

  .cart-btn.remove:hover {
    background-color: #c82333;
  }

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
                          <div class="card_top_icons">
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
          <div class="product-title">{{ $product->name }}</div>
          <div class="product-price">{{ $product->price }} EGP</div>

          @if(auth()->check())
            @php
              $inCart = \App\Models\Cart::where('user_id', auth()->id())
                          ->where('product_id', $product->id)
                          ->exists();
            @endphp

            <a href="{{ route('cart.toggle', $product->id) }}"
              class="cart-btn {{ $inCart ? 'remove' : 'add' }}">
              {{ $inCart ? 'Remove from Cart' : 'Add to Cart' }}
            </a>
          @endif

          <a href="{{ route('show.p', $product->id) }}" class="view-btn">View Product</a>
        </div>
      @endforeach
    </div>
  @endif
</div>

@endsection
