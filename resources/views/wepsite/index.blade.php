@extends('Layouts.wep')
@section('content')


    <div class="container header_container">
      <article class="header_filter">
        <a href="#" class="header_filter_link">Woman’s Fashion</a>
        <a href="#" class="header_filter_link">Men’s Fashion</a>
        <a href="#" class="header_filter_link">Electronics</a>
        <a href="#" class="header_filter_link">Home & Lifestyle</a>
        <a href="#" class="header_filter_link">Medicine</a>
        <a href="#" class="header_filter_link">Sports & Outdoor</a>
        <a href="#" class="header_filter_link">Baby’s & Toys</a>
        <a href="#" class="header_filter_link">Groceries & Pets</a>
        <a href="#" class="header_filter_link">Health & Beauty</a>
      </article>
      <article class="swiper bannerSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="{{ asset('asset/image/header.png')}}" alt="" class="header_img" />
          </div>
          <div class="swiper-slide">
            <img src="{{asset('asset/image/header.png')}}" alt="" class="header_img" />
          </div>
          <div class="swiper-slide">
            <img src="{{asset('asset/image/header.png')}}" alt="" class="header_img" />
          </div>
          <div class="swiper-slide">
            <img src="{{asset('asset/image/header.png')}}" alt="" class="header_img" />
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </article>
    </div>
 

  <section class="section">
    <div class="container" id="containerbox">
      <div class="section_category">
        <p class="section_category_p">Today's</p>
      </div>
      <div class="section_header">
        <h3 class="section_title">Flash Sale</h3>
        <p id="demo"></p>
        <!-- <div>gafjbkafj</div> -->
      </div>
      <!-- Swiper -->

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
                        
          @foreach ($Products as $Product )
          <div class="swiper-slide">
            <div class="card">
              <div class="card_top">
                <a href="{{ route('show.p', $Product->id) }}"><img src="{{asset('storage/Product/'.$Product->image)}}" alt="" class="card_img" /></a>
                <div class="card_tag">-40%</div>
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
              </div>
              <div class="card_body">
                <h3 class="card_title">{{ $Product->name }}</h3>
                <p class="card_price">${{ $Product->price }}</p>
                <div class="card_ratings">
                  <div class="card_stars">
                    @for ($i=1;$i<=5;++$i)
                    <i style="color: rgb(255, 217, 0)" class="fa-solid fa-star"></i>
                    @endfor
                  </div>
                  <p class="card_rating_numbers">(88)</p>
                </div>

                {{-- <form action="{{ route('cart.add', $Product->id) }}" method="POST">
                @csrf
                <button type="submit" class="add_to_cart">Add to Cart</button>
                </form> --}}

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
        <div class="swiper-pagination"></div>
      </div>


      <div class="container_btn">
        <a href="{{ route('allproduct') }}" class="container_btn_a">VIEW ALL PRODUCTS</a>
      </div>
    </div>
  </section>
  
  <section class="section">
    <div class="container">
      <div class="section_category">
        <p class="section_category_p">categories</p>
      </div>
      <div class="section_header">
        <h3 class="section_title">Browse by Category</h3>
      </div>
      <div class="categories">
        
         {{-- @foreach( $Categories as $Categorie )
         <img src="{{asset('asset/image/icons/computer.png')}}" alt="" class="category_icon" />
         <p class="category_name">{{ $Categorie->name }}</p>
         @endforeach --}}
         
        @foreach($Categories as $category)
        <div class="category">
        <a href="{{ route('categorie.details', $category->id) }}" class="btn btn-outline-primary">
          <p class="category_name">{{ $category->name }}</p>
        </a>
      </div>
        @endforeach

          {{-- 

        <div class="category">
          <img src="{{asset('asset/image/icons/camera.png')}}" alt="" class="category_icon" />
          <p class="category_name">Cameras</p>
        </div>

        <div class="category">
          <img src="{{asset('asset/image/icons/gaming.png')}}" alt="" class="category_icon" />
          <p class="category_name">Gaming</p>
        </div>
        <div class="category">
          <img src="{{asset('asset/image/icons/headphone.png')}}" alt="" class="category_icon" />
          <p class="category_name">Headphones</p>
        </div>
        <div class="category">
          <img src="{{asset('asset/image/icons/phone.png')}}" alt="" class="category_icon" />
          <p class="category_name">Phones</p>
        </div>
        <div class="category">
          <img src="{{asset('asset/image/icons/watch.png')}}" alt="" class="category_icon" />
          <p class="category_name">Watches</p>
        </div> --}}
      </div>
    </div>
  </section>


  <section class="section">
    <div class="container">
      <div class="section_category">
        <p class="section_category_p">This Month</p>
      </div>
      <div class="section_header">
        <h3 class="section_title">Best Selling Products</h3>
        <p id="demo"></p>
      </div>
      <!-- Swiper -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          @foreach ($Products as $Product )
          <div class="swiper-slide">
            <div class="card">
              <div class="card_top">
                <a href="{{ route('show.p', $Product->id) }}"><img src="{{asset('storage/Product/'.$Product->image)}}" alt="" class="card_img" /></a>
                <div class="card_tag">-40%</div>
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
              </div>
              <div class="card_body">
                <h3 class="card_title">{{ $Product->name }}</h3>
                <p class="card_price">${{ $Product->price }}</p>
                <div class="card_ratings">
                  <div class="card_stars">
                    @for ($i=1;$i<=5;++$i)
                    <i style="color: rgb(255, 217, 0)" class="fa-solid fa-star"></i>
                    @endfor
                  </div>
                  <p class="card_rating_numbers">(88)</p>
                </div>

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
        <div class="swiper-pagination"></div>
      </div>

      <div class="container_btn">
        <a href="{{ route('allproduct') }}" class="container_btn_a">VIEW ALL PRODUCTS</a>
      </div>
    </div>
  </section>




  <section class="section">
    <div class="container">
      <div class="trending">
        <div class="trending_content">
          <p class="trending_p">categories</p>
          <h2 class="trending_title">Enhance Your Music Experience</h2>
          <a href="index.html#" class="trending_btn">Buy Now!</a>
        </div>
        <img src="{{ asset('asset/image/speaker.png') }}" alt="" class="trending_img" />
      </div>
    </div>
  </section>




  <section class="section">
    <div class="container">
      <div class="section_category">
        <p class="section_category_p">Our Products</p>
      </div>

      <div class="section_header">
        <h3 class="section_title">Explore Our Products</h3>
        <p id="demo"></p>
      </div>
      <div class="products">
          @foreach ($Products as $Product )
          <div class="swiper-slide">
            <div class="card">
              <div class="card_top">
                <a href="{{ route('show.p', $Product->id) }}"><img src="{{asset('storage/Product/'.$Product->image)}}" alt="" class="card_img" /></a>
                <div class="card_tag">-40%</div>
                <div class="card_top_icons">
               {{-- <form action="{{ route('favorites.add', $Product->id) }}" method="POST" id="favoriteForm_{{ $Product->id }}">
               @csrf
                 <button type="button" onclick="toggleFavorite({{ $Product->id }})" style="background: none; border: none; padding: 0;">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" id="heartIcon_{{ $Product->id }}"
                         style="width: 30px; height: 30px; cursor: pointer; transition: 0.3s;">
                         <path stroke-linecap="round" stroke-linejoin="round"
                             d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                     </svg>
                 </button>
              </form> --}}
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
              <div class="card_body">
                <h3 class="card_title">{{ $Product->name }}</h3>
                <p class="card_price">${{ $Product->price }}</p>
                <div class="card_ratings">
                  <div class="card_stars">
                    @for ($i=1;$i<=5;++$i)
                    <i style="color: rgb(255, 217, 0)" class="fa-solid fa-star"></i>
                    @endfor
                  </div>
                  <p class="card_rating_numbers">(88)</p>
                </div>

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
          <br>
          
          
        </div>
        <div class="container_btn">
          <a href="{{ route('allproduct') }}" class="container_btn_a">VIEW ALL PRODUCTS</a>
        </div>
  </section>


  <section class="section">
    <div class="container">
      <div class="section_category">
        <p class="section_category_p">Featured</p>
      </div>
      <div class="section_header">
        <h3 class="section_title">New Arrivals</h3>
      </div>
      <div class="gallery">
        <div class="gallery_item gallery_item_1">
          <img src="{{asset('asset/image/gallery/gallery-1.png')}}" alt="" class="gallery_item_img" />
          <div class="gallery_item_content">
            <div class="gallery_item_title">Playstation 5</div>
            <p class="gallery_item_p">
              Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
            <a href="#" class="gallery_item_link">SHOP NOW</a>
          </div>
        </div>

        <div class="gallery_item gallery_item_2">
          <img src="{{asset('asset/image/gallery/gallery-2.png')}}" alt="" class="gallery_item_img" />
          <div class="gallery_item_content">
            <div class="gallery_item_title">Playstation 5</div>
            <p class="gallery_item_p">
              Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
            <a href="#" class="gallery_item_link">SHOP NOW</a>
          </div>
        </div>

        <div class="gallery_item gallery_item_3">
          <img src="{{asset('asset/image/gallery/gallery-3.png')}}" alt="" class="gallery_item_img" />
          <div class="gallery_item_content">
            <div class="gallery_item_title">Playstation 5</div>
            <p class="gallery_item_p">
              Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
            <a href="#" class="gallery_item_link">SHOP NOW</a>
          </div>
        </div>


        <div class="gallery_item gallery_item_4">
          <img src="{{asset('asset/image/gallery/gallery-4.png')}}" alt="" class="gallery_item_img" />
          <div class="gallery_item_content">
            <div class="gallery_item_title">Playstation 5</div>
            <p class="gallery_item_p">
              Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>
            <a href="#" class="gallery_item_link">SHOP NOW</a>
          </div>
        </div>


      </div>
    </div>
  </section>

  <section class="section">
    <div class="container services_container">
      <div class="service">
        <img src="{{asset('asset/image/icons/service-1.png')}}" alt="" class="service_img" />
        <h3 class="service_title">FAST AND FREE DELIVERY</h3>
        <p class="service_p">Lorem ipsum dolor sit amet consectetur.</p>
      </div>

      <div class="service">
        <img src="{{asset('asset/image/icons/service-2.png')}}" alt="" class="service_img" />
        <h3 class="service_title">24/7 SUPPORT</h3>
        <p class="service_p">Lorem ipsum dolor sit amet consectetur.</p>
      </div>
      <div class="service">
        <img src="{{asset('asset/image/icons/service-3.png')}}" alt="" class="service_img" />
        <h3 class="service_title">MONEY BACK GUARANTY</h3>
        <p class="service_p">Lorem ipsum dolor sit amet consectetur.</p>
      </div>
    </div>
  </section>

@endsection