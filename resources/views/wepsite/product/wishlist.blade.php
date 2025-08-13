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

  .favorites-flex {
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

  .product-actions {
    display: flex;
    justify-content: center;
    gap: 10px;
    flex-wrap: wrap;
    margin-top: 10px;
  }

  .btn-remove,
  .btn-cart-toggle {
    font-size: 13px;
    padding: 8px 16px;
    border-radius: 25px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    color: #fff;
    transition: background-color 0.3s ease;
  }

  .btn-remove {
    background-color: #ff4b5c;
  }

  .btn-remove:hover {
    background-color: #e43d4f;
  }

  .btn-cart-toggle.add {
    background-color: #28a745;
  }

  .btn-cart-toggle.add:hover {
    background-color: #218838;
  }

  .btn-cart-toggle.remove {
    background-color: #dc3545;
  }

  .btn-cart-toggle.remove:hover {
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
            <img src="{{ asset('storage/Product/' . $favorite->product->image) }}" alt="{{ $favorite->product->name }}">
          @endif

          <div class="product-title">{{ $favorite->product->name }}</div>
          <div class="product-price">{{ $favorite->product->price }} EGP</div>

          <div class="product-actions">
            <form action="{{ route('favorites.remove', $favorite->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-remove">Remove</button>
            </form>

            @if(auth()->check())
              @php
                $inCart = \App\Models\Cart::where('user_id', auth()->id())
                            ->where('product_id', $favorite->product->id)
                            ->exists();
              @endphp

              <a href="{{ route('cart.toggle', $favorite->product->id) }}"
                 class="btn-cart-toggle {{ $inCart ? 'remove' : 'add' }}">
                 {{ $inCart ? 'Remove from Cart' : 'Add to Cart' }}
              </a>
            @endif
          </div>
        </div>
      @endforeach
    </div>
  @endif
</div>

@endsection
