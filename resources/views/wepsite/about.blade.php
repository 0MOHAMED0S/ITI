@extends('Layouts.wep')
@section('content')


    <main>
        <section class="story-section">
            <div class="story-content">
                <h1>Our Story</h1>
                <p>Launced in 2015, Exclusive is South Asia's premier online shopping makterplace with an active
                    presense in Bangladesh. Supported by wide range of tailored marketing, data and service solutions,
                    Exclusive has 10,500 sallers and 300 brands and serves 3 millioons customers across the region.</p>
                <p>Exclusive has more than 1 Million products to offer, growing at a very fast. Exclusive offers a
                    diverse assotment in categories ranging from consumer.</p>
            </div>
            <div class="story-image">
                <img src="{{ asset('asset/image/shopping.jpg') }}" alt="Two women shopping">
            </div>
        </section>

        <section class="stats-section">
            <div class="stat-box">
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>10.5k</h3>
                <p>Sallers active our site</p>
            </div>
            <div class="stat-box featured">
                <div class="icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3>33k</h3>
                <p>Mprphny Product Sale</p>
            </div>
            <div class="stat-box">
                <div class="icon">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h3>45.5k</h3>
                <p>Customer active in our site</p>
            </div>
            <div class="stat-box">
                <div class="icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>25k</h3>
                <p>Anual gross sale in our site</p>
            </div>
        </section>

        <section class="team-section">
            <div class="team-member">
                <img src="{{ asset('asset/image/man.png') }}" alt="Tom Cruise">
                <h3>Tom Cruise</h3>
                <p>Founder & Chairman</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="team-member">
                <img src="{{ asset('asset/image/woman.png') }}" alt="Emma Watson">
                <h3>Emma Watson</h3>
                <p>Managing Director</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="team-member">
                <img src="{{ asset('asset/image/team member.png') }}" alt="Will Smith">
                <h3>Will Smith</h3>
                <p>Product Designer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </section>
        <section class="features-section">
            <div class="feature-box">
                <div class="icon">
                    <i class="fas fa-truck"></i>
                </div>
                <h4>FREE AND FAST DELIVERY</h4>
                <p>Free delivery for all orders over $140</p>
            </div>
            <div class="feature-box">
                <div class="icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h4>24/7 CUSTOMER SERVICE</h4>
                <p>Friendly 24/7 customer support</p>
            </div>
            <div class="feature-box">
                <div class="icon">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h4>MONEY BACK GUARANTEE</h4>
                <p>We return money within 30 days</p>
            </div>
        </section>

    </main>

    <!-- Footer -->

@endsection