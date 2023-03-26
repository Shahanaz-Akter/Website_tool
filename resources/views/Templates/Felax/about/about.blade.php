<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Link of CSS files -->
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/fontawsome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('public/assets/Felax/css/responsive.css') }}">

        <title>Felax - Hotel Booking HTML Template</title>
        <link rel="icon" type="image/png" href="{{ asset('public/assets/Felax/images/fav-icon.png') }}">
    </head>
    <body>
        
        <!-- navigation bar area start -->
        <div class="header-area header-area-3">
            <div class="navbar-area">
                <!-- Menu For Mobile Device -->
                <div class="main-responsive-nav">
                    <div class="container">
                        <div class="mobile-nav">
                            <a href="index.html" class="logo"><img src="assets/images/logo.png" alt="logo" /></a>
                            <ul class="menu-sidebar menu-small-device">
                                <li><a class="default-button" href="booking.html">Book Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Menu For Desktop Device -->
                <div class="main-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo.png" alt="logo" />
                            </a>
                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item plus-icon">
                                        <a href="about.html#" class="nav-link dropdown-toggle">Home <i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="index.html" class="nav-link">Home Page 1</a></li>
                                            <li class="nav-item"><a href="index-2.html" class="nav-link">Home Page 2</a></li>
                                            <li class="nav-item"><a href="index-3.html" class="nav-link">Home Page 3</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html#" class="nav-link dropdown-toggle">Rooms<i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="rooms.html" class="nav-link">Rooms</a></li>
                                            <li class="nav-item"><a href="room-details.html" class="nav-link">Room Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html#" class="nav-link dropdown-toggle">Services<i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="services.html" class="nav-link">Our Services</a></li>
                                            <li class="nav-item"><a href="service-details.html" class="nav-link">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html#" class="nav-link dropdown-toggle active">Pages <i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="about.html" class="nav-link active">About Us</a></li>
                                            <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                            <li class="nav-item"><a href="team.html" class="nav-link">Our Team</a></li>
                                            <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing Plan</a></li>
                                            <li class="nav-item"><a href="category.html" class="nav-link">Categories</a></li>
                                            <li class="nav-item"><a href="booking.html" class="nav-link">Room Booking</a></li>
                                            <li class="nav-item"><a href="profile-authentication.html" class="nav-link">My Account</a></li>
                                            <li class="nav-item"><a href="testimonial.html" class="nav-link">Testimonials</a></li>
                                            <li class="nav-item"><a href="error.html" class="nav-link">404 Error Page</a></li>
                                            <li class="nav-item"><a href="privacy.html" class="nav-link">Privacy Policy</a></li>
                                            <li class="nav-item"><a href="terms.html" class="nav-link">Terms & Conditions</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html#" class="nav-link dropdown-toggle">Blog <i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="blog.html" class="nav-link">Blog Grid</a></li>
                                            <li class="nav-item"><a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a></li>
                                            <li class="nav-item"><a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a></li>
                                            <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                                            <li class="nav-item"><a href="posted-by.html" class="nav-link">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact Us</a></li>
                                </ul>
                                <div class="menu-sidebar">
                                    <a class="default-button" href="booking.html">Book Now</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- navigation bar area end -->

        <!-- Uni Banner Area Start -->
        <div class="uni-banner">
            <div class="container">
                <div class="uni-banner-text">
                    <h1>About Us</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Uni Banner Area End -->

        <!-- About Area start -->
        <div class="about ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about-img">
                            <img src="assets/images/about/a1.png" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="about-text-area pl-20">
                            <div class="default-section-title">
                                <span>About Us</span>
                                <h3>We Are Here To Make Your Feeling Look More Elegant</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo vverra ecenas accumsan lacus vel facilisis.</p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About area end -->

        <!-- Room Area Start -->
        <div class="room pt-100 pb-70 bg-f6f2ef">
            <div class="container">
                <div class="default-section-title default-section-title-middle">
                    <span>Comfort And Convenience</span>
                    <h3>Highly Rated Rooms</h3>
                </div>
                <div class="section-content">
                    <div class="room-slider-area-3 owl-carousel">
                        <div class="room-card-3 mb-30">
                            <a href="room-details.html"><img src="assets/images/rooms/r10.jpg" alt="image"></a>
                            <h4><a href="room-details.html">Single Room Munich</a></h4>
                            <p>From <strong>$35.00</strong> Per Night</p>
                        </div>
                        <div class="room-card-3 mb-30">
                            <a href="room-details.html"><img src="assets/images/rooms/r11.jpg" alt="image"></a>
                            <h4><a href="room-details.html">Single Room Madrid</a></h4>
                            <p>From <strong>$45.00</strong> Per Night</p>
                        </div>
                        <div class="room-card-3 mb-30">
                            <a href="room-details.html"><img src="assets/images/rooms/r12.jpg" alt="image"></a>
                            <h4><a href="room-details.html">Double Room Geneva</a></h4>
                            <p>From <strong>$35.00</strong> Per Night</p>
                        </div>
                        <div class="room-card-3 mb-30">
                            <a href="room-details.html"><img src="assets/images/rooms/r13.jpg" alt="image"></a>
                            <h4><a href="room-details.html">Single Room Madrid</a></h4>
                            <p>From <strong>$30.00</strong> Per Night</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room Area End -->

        <!-- Team Area Start -->
        <div class="team ptb-100">
            <div class="container">
                <div class="default-section-title default-section-title-middle">
                    <span>Our Team</span>
                    <h3>Meet Our Amazing Team</h3>
                </div>
                <div class="section-content">
                    <div class="team-slider-area owl-carousel slider-dots">
                        <div class="team-card tmb-20">
                            <img src="assets/images/team/t1.jpg" alt="image">
                            <div class="team-card-text">
                                <ul>
                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <h4>Keydyn Fraser</h4>
                                <p>Hotel Manager</p>
                            </div>
                        </div>
                        <div class="team-card tmb-20">
                            <img src="assets/images/team/t2.jpg" alt="image">
                            <div class="team-card-text">
                                <ul>
                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <h4>Melissa Gomez</h4>
                                <p>Restaurant Chief</p>
                            </div>
                        </div>
                        <div class="team-card tmb-20">
                            <img src="assets/images/team/t3.jpg" alt="image">
                            <div class="team-card-text">
                                <ul>
                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <h4>Carmen Velasco</h4>
                                <p>Cleaning Service</p>
                            </div>
                        </div>
                        <div class="team-card tmb-20">
                            <img src="assets/images/team/t4.jpg" alt="image">
                            <div class="team-card-text">
                                <ul>
                                    <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <h4>Lara Warner</h4>
                                <p>Hotel Receptionist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Area End -->

        <!-- Fun facts area start -->
        <div class="fun-facts ptb-70 bg-f6f2ef">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-facts-card">
                            <h2><span class="odometer" data-count="20">00</span></h2>
                            <div class="fun-card-text">
                                <span class="fun-small-text">Year Of</span>
                                <span class="fun-large-text">Experience</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-facts-card">
                            <h2><span class="odometer" data-count="36">00</span></h2>
                            <div class="fun-card-text">
                                <span class="fun-small-text">Rooms At</span>
                                <span class="fun-large-text">Luxury Hotel</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-facts-card">
                            <h2><span class="odometer" data-count="22">00</span></h2>
                            <div class="fun-card-text">
                                <span class="fun-small-text">Team Of</span>
                                <span class="fun-large-text">Professionals</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <div class="fun-facts-card">
                            <h2><span class="odometer" data-count="12">00</span></h2>
                            <div class="fun-card-text">
                                <span class="fun-small-text">Resort &</span>
                                <span class="fun-large-text">Apartment</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fun Facts area end -->

        <!-- Testimonial Area Start -->
        <div class="testimonial ptb-100">
            <div class="container">
                <div class="default-section-title default-section-title-middle">
                    <span>Testimonial</span>
                    <h3>What Our Customers Say</h3>
                </div>
                <div class="section-content">
                    <div class="testimonial-content-area-2">
                        <div class="row">
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial-slider-area owl-carousel">
                                    <div class="testimonial-card">
                                        <i class="fas fa-quote-right"></i>
                                        <div class="testimonial-card-header">
                                            <img src="assets/images/testimonial/tc1.jpg" alt="image">
                                            <div class="testimonial-header-text">
                                                <h4>Gracelyn Mason</h4>
                                                <p>CEO - Founder</p>
                                            </div>
                                        </div>
                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do smod tempor incididunt ut labore et dolore magna aliqua. Quis ipspendisse ultrices gravida. Risus commodo viverra maecenas accumsan"</p>
                                    </div>
                                    <div class="testimonial-card">
                                        <i class="fas fa-quote-right"></i>
                                        <div class="testimonial-card-header">
                                            <img src="assets/images/testimonial/tc2.jpg" alt="image">
                                            <div class="testimonial-header-text">
                                                <h4>Lara Smith</h4>
                                                <p>CEO - Founder</p>
                                            </div>
                                        </div>
                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do smod tempor incididunt ut labore et dolore magna aliqua. Quis ipspendisse ultrices gravida. Risus commodo viverra maecenas accumsan"</p>
                                    </div>
                                    <div class="testimonial-card">
                                        <i class="fas fa-quote-right"></i>
                                        <div class="testimonial-card-header">
                                            <img src="assets/images/testimonial/tc3.jpg" alt="image">
                                            <div class="testimonial-header-text">
                                                <h4>Jack parker</h4>
                                                <p>Manager</p>
                                            </div>
                                        </div>
                                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do smod tempor incididunt ut labore et dolore magna aliqua. Quis ipspendisse ultrices gravida. Risus commodo viverra maecenas accumsan"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->

        <!-- Footer area start -->
        <div class="footer">
            <div class="newsletter newsletter-1">
                <div class="container">
                    <div class="newsletter-content">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h3>Subscribe To Our Mailing List</h3>
                            </div>
                            <div class="col-lg-6">
                                <div class="newsletter-forms">
                                    <form class="newsletter-form" data-toggle="validator">
                                        <div class="input-group">
                                            <input type="email" class="input-newsletter form-control"  placeholder="Email" name="EMAIL" required autocomplete="off">
                                            <button class="btn" type="submit">Subscribe</button>
                                        </div>
                                        <div id="validator-newsletter" class="form-result"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="footer-area ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-logo-area">
                                <a href="index.html"><img src="assets/images/white-logo.png" alt="logo"></a>
                                <p>Lorem ipsum dolor sit amet, consecadiing elit, sed do eiusmod tempor incidiut.</p>
                                <div class="footer-contact">
                                    <ul>
                                        <li><a href="tel:+80098787868"><i class="fas fa-phone-alt"></i> (+800) 9878 7868</a></li>
                                        <li><a href="../../cdn-cgi/l/email-protection.html#91f9f4fdfdfed1f7f4fdf0e9bff2fefc"><i class="fas fa-envelope"></i> <span class="__cf_email__" data-cfemail="e28a878e8e8da284878e839acc818d8f">[email&#160;protected]</span></a></li>
                                        <li><a href="https://goo.gl/maps/hncRhW9A81mFbEh69"><i class="fas fa-map-marker-alt"></i> 121 street Mount Holly, NJ 08060</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-links footer-general">
                                <h3>General</h3>
                                <ul>
                                    <li><a href="rooms.html">Home</a></li>
                                    <li><a href="rooms.html">Accommodation</a></li>
                                    <li><a href="rooms.html">Dine & Drink</a></li>
                                    <li><a href="rooms.html">Span & Leisure</a></li>
                                    <li><a href="rooms.html">Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-links footer-useful">
                                <h3>Useful Links</h3>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="rooms.html">Our Offers</a></li>
                                    <li><a href="rooms.html">How Spread</a></li>
                                    <li><a href="services.html">Our Events</a></li>
                                    <li><a href="booking.html">Booking</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="footer-links">
                                <h3>Help & Support</h3>
                                <ul>
                                    <li><a href="contact.html">Live Chat</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="privacy.html">How To Stay Safe</a></li>
                                    <li><a href="terms.html">Terms & Conditions</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© Felax is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>
            </div>
        </div>
        <!-- Footer area end -->

        <div class="go-top"><i class="fas fa-chevron-up"></i></div>
    
        <!-- Link of JS files -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/meanmenu.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/TweenMax.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/ajaxchimp.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>