@include('Templates.Felax.index.navigation_bar')

<!-- example area start -->
@include('Templates.Felax.index.example')
<!-- example area end -->

<!-- Banner area start -->
@include('Templates.Felax.index.banner_area')
<!-- Banner area end -->

<!-- Booking area start -->
<div class="booking booking-bg-1 pt-70 pb-100">
    <div class="container">
        <div class="row justify-content-center align-items-end">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="booking-card-2">
                    <label for="checkin">Check In</label>
                    <input type="date" id="checkin" class="form-control">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="booking-card-2">
                    <label for="checkout">Check Out</label>
                    <input type="date" id="checkout" class="form-control">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="booking-card-2">
                    <label for="guest">Guest</label>
                    <select class="form-select select" id="guest">
                        <option selected disabled>Number Of Guests</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="booking-card-2">
                    <button class="default-button" type="submit">Check Availability</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking area end -->

<!-- About Area start -->
<div class="about ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about-img">
                    <img src="{{ asset('assets/Felax/images/about/a1.png') }}" alt="image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="about-text-area pl-20">
                    <div class="default-section-title">
                        <span>About Us</span>
                        <h3>We Are Here To Make Your Feeling Look More Elegant</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid labore et
                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vverra ecenas
                        accumsan lacus vel facilisis.</p>
                    <div class="about-card-area">
                        <div class="about-card">
                            <i class="flaticon-star"></i>
                            <h4>Consistently High Guest Satisfaction Since 2020</h4>
                        </div>
                        <div class="about-card">
                            <i class="flaticon-medal"></i>
                            <h4>Top Ranked Value Home stay In New York, USA</h4>
                        </div>
                    </div>
                    <a class="default-button" href="about.html">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About area end -->

<!-- Amenities area start -->
<div class="amenities ptb-100 bg-f8f8f8">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <span>Amenities</span>
            <h3>Make Your Stay Memorable</h3>
        </div>
        <div class="secton-content">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="amenities-card">
                        <i class="flaticon-car"></i>
                        <h4><a href="services.html">Airport Transfer</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetu piscing elit dnjffined.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="amenities-card">
                        <i class="flaticon-wifi"></i>
                        <h4><a href="services.html">Fibre Internet</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetu piscing elit dnjffined.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="amenities-card">
                        <i class="flaticon-chef"></i>
                        <h4><a href="services.html">Equipped Kitchen</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetu piscing elit dnjffined.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="amenities-card">
                        <i class="flaticon-smart-tv"></i>
                        <h4><a href="services.html">Smart TV</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetu piscing elit dnjffined.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="amenities-card">
                        <i class="flaticon-stack-of-presentation-cards"></i>
                        <h4><a href="services.html">Card Access</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetu piscing elit dnjffined.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="amenities-card">
                        <i class="flaticon-housekeeping"></i>
                        <h4><a href="services.html">Housekeeping</a></h4>
                        <p>Lorem ipsum dolor sit amet consectetu piscing elit dnjffined.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Amenities area end -->

<!-- Room area start -->
@include('Templates.Felax.index.room_area')
<!-- Room area end -->

<!-- Why Choose Us Area start -->
<div class="why-we why-we-bg ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="why-we-text-area pr-20">
                    <div class="default-section-title">
                        <span>Eat & Drink</span>
                        <h3>The Luxury Hotel Kitchen Club A In Hangout For Day & Night</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vivra
                        maecenas accumsan lacus vel facilisis.</p>
                    <div class="why-we-list">
                        <ul>
                            <li><i class="fas fa-check"></i> Free Breakfast, Tea And Coffee </li>
                            <li><i class="fas fa-check"></i> Marmalade Selection</li>
                            <li><i class="fas fa-check"></i> Fully Equipped Kitchen</li>
                            <li><i class="fas fa-check"></i> Vegan Breakfast</li>
                            <li><i class="fas fa-check"></i> A Night in Norway</li>
                            <li><i class="fas fa-check"></i> French Croissant</li>
                        </ul>
                    </div>
                    <a class="default-button" href="about.html">Find Our More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why-we-img-area">
                    <img class="first-img" src="{{ asset('assets/Felax/images/why-we/ww1.jpg') }}" alt="image">
                    <div class="second-img" data-speed="0.08" data-revert="true">
                        <img src="{{ asset('assets/Felax/images/why-we/ww2.jpg') }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Area end -->

<!-- Testimonial area start -->
<div class="testimonial ptb-100">
    <div class="container">
        <div class="default-section-title default-section-title-middle">
            <span>Testimonial</span>
            <h3>What Our Customers Say</h3>
        </div>
        <div class="section-content">
            <div class="testimonial-content-area">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonial-slider-area owl-carousel">
                            <div class="testimonial-card">
                                <i class="fas fa-quote-right"></i>
                                <div class="testimonial-card-header">
                                    <img src="{{ asset('assets/Felax/images/testimonial/tc1.jpg') }}" alt="image">
                                    <div class="testimonial-header-text">
                                        <h4>Gracelyn Mason</h4>
                                        <p>CEO - Founder</p>
                                    </div>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do smod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipspendisse ultrices gravida.
                                    Risus commodo viverra maecenas accumsan"</p>
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-right"></i>
                                <div class="testimonial-card-header">
                                    <img src="{{ asset('assets/Felax/images/testimonial/tc2.jpg') }}" alt="image">
                                    <div class="testimonial-header-text">
                                        <h4>Lara Smith</h4>
                                        <p>CEO - Founder</p>
                                    </div>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do smod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipspendisse ultrices gravida.
                                    Risus commodo viverra maecenas accumsan"</p>
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-right"></i>
                                <div class="testimonial-card-header">
                                    <img src="{{ asset('assets/Felax/images/testimonial/tc3.jpg') }}" alt="image">
                                    <div class="testimonial-header-text">
                                        <h4>Jack parker</h4>
                                        <p>Manager</p>
                                    </div>
                                </div>
                                <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do smod tempor
                                    incididunt ut labore et dolore magna aliqua. Quis ipspendisse ultrices gravida.
                                    Risus commodo viverra maecenas accumsan"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial area end -->

<!-- Pricing Area Start -->
@include('Templates.Felax.index.pricing_area')
<!-- Pricing Area End -->

<!-- Discover area start -->
<div class="discover ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="discover-img">
                    <img src="{{ asset('assets/Felax/images/why-we/ww1-2.png') }}" alt="image">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="discover-text-area pl-20">
                    <div class="default-section-title">
                        <span>Luxury Hotel & Best Resort</span>
                        <h3>Discover Our Locations Luxury Hotel In New York City</h3>
                    </div>
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are soguiled and
                        demoralized by the charms of pleasure of the moment, so blinded by desire, that t cannot foresee
                        the pain and trouble that are bound to ensue; and equal blame belongs.</p>
                    <p>those who fail in their duty through weakness of will, which is the same as saying throuhrinking
                        from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour,
                        when our power of choice is untrammelled and when nothing prevents our being able.</p>
                    <a class="default-button" href="pricing.html">All Packages</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Discover area end -->

<!-- Booking area start -->
<div class="booking booking-bg ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="booking-content">
                    <h3>Book Online Today And Look Forward To A Relaxing Stay With Us</h3>
                    <ul>
                        <li><a href="tel:+00864748948489"><i class="fas fa-phone-alt"></i> Call Us On (+008) 647 4894
                                8489</a></li>
                        <li><a href="../../cdn-cgi/l/email-protection.html#3e5c5151555750597e585b525f46105d5153"><i class="fas fa-envelope"></i> Email <span class="__cf_email__" data-cfemail="62000d0d090b0c052204070e031a4c010d0f">[email&#160;protected]</span></a>
                        </li>
                    </ul>
                    <a class="default-button" href="booking.html">Booking Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking area end -->

<!-- Blog area start -->
@include('Templates.Felax.index.blog_area')
<!-- Blog area end -->

@include('Templates.Felax.footer_main')

<div class="go-top"><i class="fas fa-chevron-up"></i></div>