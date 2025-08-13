@extends('layouts.wep')
@section('content')

<style>
    body {
        background: #f9f9f9;
    }
    .product-details-full {
        width: 100%;
        min-height: 100vh;
        display: flex;
        flex-wrap: wrap;
        background: #fff;
    }
    .product-image-full {
        flex: 1 1 50%;
        background: #f3f3f3;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px;
    }
    .product-image-full img {
        max-width: 90%;
        max-height: 80vh;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.1);
    }
    .product-info-full {
        flex: 1 1 50%;
        padding: 60px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .product-info-full h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #222;
    }
    .info-item {
        margin-bottom: 15px;
    }
    .info-label {
        font-weight: bold;
        color: #555;
        display: inline-block;
        width: 120px;
    }
    .info-value {
        color: #333;
    }
    .product-description {
        margin-top: 20px;
        font-size: 2.1rem;
        line-height: 1.6;
        color: #666;
    }
    .btn-back {
        margin-top: 30px;
        padding: 12px 25px;
        font-size: 1.5rem;
        border-radius: 8px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
    }
    .btn-back:hover {
        background-color: #0056b3;
    }
    @media (max-width: 992px) {
        .product-details-full {
            flex-direction: column;
        }
        .product-image-full, .product-info-full {
            flex: 1 1 100%;
            padding: 20px;
        }
    }
</style>

<div class="product-details-full">
    <!-- صورة المنتج -->
    <div class="product-image-full">
        <img src="{{ asset('storage/Product/'.$Product->image) }}" alt="{{ $Product->name }}">
    </div>

    <!-- بيانات المنتج -->
    <div class="product-info-full">
        <h1>{{ $Product->name }}</h1>
        <div class="info-item"><span class="info-label">ID:</span> <span class="info-value">{{ $Product->id }}</span></div>
        <div class="info-item"><span class="info-label">Price:</span> <span class="info-value">{{ $Product->price }}</span></div>
        <div class="info-item"><span class="info-label">Category:</span> <span class="info-value">{{ $Product->Categorie->name ?? 'No Category' }}</span></div>
        <div class="info-item"><span class="info-label">Created:</span> <span class="info-value">{{ $Product->created_at ?? 'No Data' }}</span></div>
        <div class="info-item"><span class="info-label">Updated:</span> <span class="info-value">{{ $Product->updated_at ?? 'No Data' }}</span></div>
        <p class="product-description">{{ $Product->description }}</p>
        <a href="{{ url()->previous() }}" class="btn-back">⬅ Back</a>

    </div>
</div>

@endsection
