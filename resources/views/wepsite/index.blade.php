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
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="card_top_icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                  </svg>

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

                <form action="{{ route('cart.add', $Product->id) }}" method="POST">
                @csrf
                <button type="submit" class="add_to_cart">Add to Cart</button>
                </form>

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
        
         @foreach( $Categories as $Categorie )
        <div class="category">
          {{-- <img src="{{asset('asset/image/icons/computer.png')}}" alt="" class="category_icon" /> --}}
          <p class="category_name">{{ $Categorie->name }}</p>
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
          @foreach ($Products as $product )
          <div class="swiper-slide">
            <div class="card">
              <div class="card_top">
                <img src="{{asset('storage/Product/'.$product->image)}}" alt="" class="card_img" />
                <div class="card_top_icons">


                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="card_top_icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="card_top_icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  
                </div>
              </div>
              
              <div class="card_body">
                <h3 class="card_title">{{ $product->name }}</h3>
                <p class="card_price">${{ $product->price }}</p>
                <div class="card_ratings">
                  <div class="card_stars">
                    @for ($i=1;$i<=5;++$i)
                    <i style="color: rgb(255, 217, 0)" class="fa-solid fa-star"></i>
                    </svg>
                    @endfor
                  </div>
                  <p class="card_rating_numbers">(88)</p>
                </div>
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

          @foreach ($Products as $product )
          <div class="swiper-slide">
            
            <div class="card">
              <div class="card_top">
                <img src="{{asset('storage/Product/'.$product->image)}}" alt="" class="card_img" />
                <div class="card_top_icons">


                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="card_top_icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                  </svg>

                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="card_top_icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                  
                </div>
              </div>
              
              <div class="card_body">
                <h3 class="card_title">{{ $product->name }}</h3>
                <p class="card_price">${{ $product->price }}</p>
                <div class="card_ratings">
                  <div class="card_stars">
                    @for ($i=1;$i<=5;++$i)
                    <i style="color: rgb(255, 217, 0)" class="fa-solid fa-star"></i>
                    </svg>
                    @endfor
                  </div>
                  <p class="card_rating_numbers">(88)</p>
                </div>
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