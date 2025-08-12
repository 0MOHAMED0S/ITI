@extends('Layouts.wep')
@section('content')

    <!-- Contact Section -->
    <section class="contact-container">

        <section class="contact-container">
            <div class="contact-info">
                <div class="info-card">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Call To Us</h3>
                    <p>We are available 24/7, 7 days a week.</p>
                    <p>Phone: +8801611112222</p>
                </div>
                <div class="info-card">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Write To US</h3>
                    <p>Fill out our form and we will contact you within 24 hours.</p>
                    <p>Emails: customer@exclusive.com</p>
                    <p>Emails: support@exclusive.com</p>
                </div>
            </div>
            ...
        </section>

        <form class="contact-form" id="contactForm">
            <div class="input-wrapper">
                <input type="text" name="name" placeholder="Your Name *" required>
                <span class="error-msg"></span>
            </div>
            <div class="form-group">
            <div class="input-wrapper">
                <input type="email" name="email" placeholder="Your Email *" required>
                <span class="error-msg"></span>
            </div>
                <div class="input-wrapper">
                    <input type="text" name="phone" placeholder="Your Phone *" required>
                    <span class="error-msg"></span>
                </div>
            </div>
            <div class="input-wrapper">
                <textarea name="message" placeholder="Your Message" required></textarea>
                <span class="error-msg"></span>
            </div>
            <button type="submit">Send Message</button>
        </form>


    </section>

@endsection