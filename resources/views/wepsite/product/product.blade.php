@extends('Layouts.wep')
@section('content')
        <section class="product-details-container">
            <div class="product-images">
                <div class="thumbnails">
                    <img src="{{ asset('asset/image/14901ccade638588f27b571d7565fbaacfe57243.png') }}" alt="Thumbnail 1" class="active">
                    <img src="{{ asset('asset/image/14901ccade638588f27b571d7565fbaacfe57243.png') }}" alt="Thumbnail 2">
                    <img src="{{ asset('asset/image/14901ccade638588f27b571d7565fbaacfe57243.png') }}" alt="Thumbnail 3">
                    <img src="{{ asset('asset/image/he-junhui-u_yir0x987E-unsplash.jpg') }}" alt="Thumbnail 4">
                </div>
                <div class="main-image">
                    <img src="{{ asset('asset/image/faa80b609e3950aed9181acb44510f859f50d850.png') }}" alt="Main Product Image">
                </div>
            </div>

            <div class="product-info">
                <h1 class="product-title">Havit HV-G92 Gamepad</h1>
                <div class="rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span class="reviews">(150 Reviews)</span> | <span class="in-stock">In Stock</span>
                </div>
                <p class="product-price">$192.00</p>
                <p class="product-description">
                    PlayStation 5 Controller Skin. Light up your vinyl with our channel adhesive for easy bubble free
                    install & mess free removal. Fits PlayStation 5.
                </p>

                <div class="options">
                    <div class="colors">
                        <span class="label">Colours:</span>
                        <span class="color-box red active"></span>
                        <span class="color-box blue"></span>
                    </div>

                </div>

                <div class="actions">
                    <div class="quantity-control">
                        <button class="quantity-btn decrease">-</button>
                        <span class="quantity-value">1</span>
                        <button class="quantity-btn increase">+</button>
                    </div>
                    <button class="buy-now-btn">Buy Now</button>
                    <i class="fas fa-heart add-to-wishlist"></i>
                </div>

                <div class="delivery-info">
                    <div class="delivery-item">
                        <i class="fas fa-truck"></i>
                        <div>
                            <h4>Free Delivery</h4>
                            <p>Enter your postal code for Delivery Availability</p>
                        </div>
                    </div>
                    <div class="delivery-item">
                        <i class="fas fa-undo"></i>
                        <div>
                            <h4>Return Delivery</h4>
                            <p>Free 30 Days Delivery Returns. <a href="#">Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="related-items">
            <h2>Related Item</h2>
            <div class="item-cards-container">

                <div class="item-card">
                    <div class="card-image-container">
                        <span class="discount">-15%</span>
                        <img src="image/robert-torres-EY_0bGQDfW4-unsplash.jpg" alt="HAVIT HV-G92 Gamepad">
                        <div class="card-actions">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div class="card-info">
                        <h3>HAVIT HV-G92 Gamepad</h3>
                        <p class="price">$150<span class="old-price">$180</span></p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span>(90)</span>
                        </div>
                    </div>
                </div>

                <div class="item-card">
                    <div class="card-image-container">
                        <span class="discount">-35%</span>
                        <img src="{{asset('asset/image/items/item-2.png') }}" alt="AK-900 Wired Keyboard">
                        <div class="card-actions">
                            <i class="fas fa-heart"></i>
                            <button class="add-to-cart">Add to Cart</button>
                        </div>
                    </div>
                    <div class="card-info">
                        <h3>AK-900 Wired Keyboard</h3>
                        <p class="price">$980 <span class="old-price">$1160</span></p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span>(75)</span>
                        </div>
                    </div>
                </div>

                <div class="item-card">
                    <div class="card-image-container">
                        <span class="discount">-30%</span>
                        <img src="{{ asset('asset/image/items/item-3.png') }}" alt="IPS LCD Gaming Monitor">
                        <div class="card-actions">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div class="card-info">
                        <h3>IPS LCD Gaming Monitor</h3>
                        <p class="price">$370 <span class="old-price">$400</span></p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="far fa-star"></i>
                            <span>(99)</span>
                        </div>
                    </div>
                </div>

                <div class="item-card">
                    <div class="card-image-container">
                        <img src="{{ asset('asset/image/items/item-6.png') }}" alt="RGB liquid CPU Cooler">
                        <div class="card-actions">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div class="card-info">
                        <h3>RGB liquid CPU Cooler</h3>
                        <p class="price">$160 <span class="old-price">$170</span></p>
                        <div class="rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="far fa-star"></i>
                            <span>(65)</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

