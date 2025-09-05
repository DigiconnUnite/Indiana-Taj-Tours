<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        Indiana Taj Tour - Explore Taj Mahal, Delhi, Jaipur & Golden Triangle Tours
    </title>
    <meta name="author" content="Indiana Taj Tour" />
    <meta name="description" content="Discover the best Taj Mahal tours, Golden Triangle packages, and day trips from Delhi. Book your unforgettable India adventure with Indiana Taj Tour today." />
    <meta name="keywords" content="Taj Mahal tour, Golden Triangle tour, Delhi tours, Jaipur tours, Agra tours, India travel packages" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- include the links file  -->
    <?php include "links.php" ?>

</head>

<body>
    <!-- include the preloader file -->
    <?php include 'preloader.php'; ?>

    <!-- include the sidebar file -->
    <?php include 'sidebar.php'; ?>

    <!-- Include the header file -->
    <?php include 'header.php'; ?>

    <!-- Main -->
    <main>

       <!-- hero-section -->
<div class="th-hero-wrapper hero-1" id="hero">
    <div class="swiper th-slider hero-slider-1" id="heroSlide1"
        data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
        <div class="swiper-wrapper">
            <!-- Taj Mahal Slide -->
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg" data-bg-src="assets/img/hero/hero-taj.png"></div>
                    <div class="container">
                        <div class="hero-style1">
                            <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Experience the Eternal Symbol of Love</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                Discover the Majestic Taj Mahal
                            </h1>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                <a href="#tour" class="th-btn th-icon">Explore tour</a>
                                <a href="booking.php" class="th-btn style2 th-icon">Book Tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Delhi Slide -->
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg" data-bg-src="assets/img/hero/hero-delhi.png"></div>
                    <div class="container">
                        <div class="hero-style1">
                            <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Where History Meets Modernity</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                Explore Vibrant Delhi - Heart of India
                            </h1>
                          <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                <a href="#tour" class="th-btn th-icon">Explore tour</a>
                                <a href="booking.php" class="th-btn style2 th-icon">Book Tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Varanasi Slide -->
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="th-hero-bg" data-bg-src="assets/img/hero/hero-vanaras.png"></div>
                    <div class="container">
                        <div class="hero-style1">
                            <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Journey to Spiritual Enlightenment</span>
                            <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                Sacred Varanasi - Oldest Living City
                            </h1>
                             <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                <a href="#tour" class="th-btn th-icon">Explore tour</a>
                                <a href="booking.php" class="th-btn style2 th-icon">Book Tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-swiper-custom">
            <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev">
                <img src="assets/img/icon/right-arrow.svg" alt="" />
            </button>
            <div class="slider-pagination"></div>
            <button data-slider-next="#heroSlide1" class="slider-arrow slider-next">
                <img src="assets/img/icon/left-arrow.svg" alt="" />
            </button>
        </div>
    </div>
</div>

        <!-- booking form section  -->
        <div class="booking-sec">
            <div class="container">
                <form action="search-results.php" method="GET"
                    class="booking-form ajax-contact" id="searchForm">
                    <div class="input-wrap">
                        <div class="row align-items-center justify-content-between">
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon"><i class="fa-light fa-route"></i></div>
                                <div class="search-input">
                                    <label>Destination</label>
                                    <select name="destination" id="destination" class="form-select nice-select">
                                        <option value="" selected="selected" disabled="disabled">
                                            Select Destination
                                        </option>
                                        <option value="delhi">Delhi</option>
                                        <option value="agra">Agra</option>
                                        <option value="jaipur">Jaipur</option>
                                        <option value="udaipur">Udaipur</option>
                                        <option value="varanasi">Varanasi</option>
                                        <option value="amritsar">Amritsar</option>
                                        <option value="pushkar">Pushkar</option>
                                        <option value="ranthambore">Ranthambore</option>
                                        <option value="golden-triangle">Golden Triangle (Delhi + Agra + Jaipur)</option>
                                        <option value="all">All Destinations</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon">
                                    <i class="fa-regular fa-person-hiking"></i>
                                </div>
                                <div class="search-input">
                                    <label>Type</label>
                                    <select class="nice-select" name="tourType" id="tourType">
                                        <option value="" selected="selected" disabled="disabled">
                                            Tour Type
                                        </option>
                                        <option value="day-tour">Day Tour</option>
                                        <option value="same-day">Same Day Tour</option>
                                        <option value="multi-day">Multi-Day Tour</option>
                                        <option value="golden-triangle">Golden Triangle</option>
                                        <option value="luxury">Luxury Tour</option>
                                        <option value="sunrise">Sunrise Tour</option>
                                        <option value="all">All Types</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon"><i class="fa-light fa-clock"></i></div>
                                <div class="search-input">
                                    <label>Duration</label>
                                    <select class="form-select nice-select" name="duration" id="duration">
                                        <option value="" selected="selected" disabled="disabled">
                                            Duration
                                        </option>
                                        <option value="1">1 Day</option>
                                        <option value="2">2 Days</option>
                                        <option value="3">3 Days</option>
                                        <option value="4">4 Days</option>
                                        <option value="5">5 Days</option>
                                        <option value="6">6 Days</option>
                                        <option value="7">7 Days</option>
                                        <option value="8">8 Days</option>
                                        <option value="all">Any Duration</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon">
                                    <i class="fa-light fa-map-location-dot"></i>
                                </div>
                                <div class="search-input">
                                    <label>Tour Category</label>
                                    <select name="category" id="category" class="form-select nice-select">
                                        <option value="" selected="selected" disabled="disabled">
                                            Category
                                        </option>
                                        <option value="luxury">Luxury</option>
                                        <option value="premium">Premium</option>
                                        <option value="standard">Standard</option>
                                        <option value="all">All Categories</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-btn col-md-12 col-lg-auto">
                                <button class="th-btn">
                                    <img src="assets/img/icon/search.svg" alt="" />Search
                                </button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </div>
                </form>
            </div>
        </div>

        <!-- category section -->
        <section class="category-area bg-top-center" data-bg-src="assets/img/bg/category_bg_1.png">
            <div class="container th-container">
                <div class="title-area text-center">
                    <span class="sub-title">Wornderful Place For You</span>
                    <h2 class="sec-title">Top Destinations</h2>
                </div>
                <div class="swiper th-slider has-shadow categorySlider" id="categorySlider1"
                    data-bg-src="assets/img/bg/category_bg_1.png"
                    data-slider-options='{"spaceBetween": "50","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-agra.png" alt="Image" />
                                </div>
                                <h3 class="box-title">
                                    <a href="./taj-mahal-and-agra-fort-tour-by-car-from-delhi.php">Agra</a>
                                </h3>
                                <a class="line-btn" href="./taj-mahal-and-agra-fort-tour-by-car-from-delhi.php">See more</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-delhi.png" alt="Image" />
                                </div>
                                <h3 class="box-title"><a href="./full-day-old-and-new-delhi-city-tour.php">Delhi</a></h3>
                                <a class="line-btn" href="./full-day-old-and-new-delhi-city-tour.php">See more</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-jaipur.png" alt="Image" />
                                </div>
                                <h3 class="box-title">
                                    <a href="./full-day-jaipur-city-tour-by-car.php">Jaipur</a>
                                </h3>
                                <a class="line-btn" href="./full-day-jaipur-city-tour-by-car.php">See more</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-udaipur.png" alt="Image" />
                                </div>
                                <h3 class="box-title">
                                    <a href="./golden-triangle-tour-with-udaipur.php">Udaipur</a>
                                </h3>
                                <a class="line-btn" href="./golden-triangle-tour-with-udaipur.php">See more</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-varanasi.png" alt="Image" />
                                </div>
                                <h3 class="box-title">
                                    <a href="./golden-triangle-tour-with-varanasi.php">Varanasi</a>
                                </h3>
                                <a class="line-btn" href="./golden-triangle-tour-with-varanasi.php">See more</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-ranthambore.png" alt="Image" />
                                </div>
                                <h3 class="box-title">
                                    <a href="./golden-triangle-tour-with-ranthambore.php">Ranthambore</a>
                                </h3>
                                <a class="line-btn" href="./golden-triangle-tour-with-ranthambore.php">See more</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-pushkar.png" alt="Image" />
                                </div>
                                <h3 class="box-title"><a href="./golden-triangle-tour-with-pushkar.php">Pushkar</a></h3>
                                <a class="line-btn" href="./golden-triangle-tour-with-pushkar.php">See more</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-amritsar.png" alt="Image" />
                                </div>
                                <h3 class="box-title">
                                    <a href="./golden-triangle-tour-with-amritsar.php">Amritsar</a>
                                </h3>
                                <a class="line-btn" href="./golden-triangle-tour-with-amritsar.php">See more</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </section>

        <!-- tour section -->
        <section class="tour-area3 position-relative bg-top-center overflow-hidden space" id="service-sec"
            data-bg-src="assets/img/bg/tour_bg_1.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title-area text-center">
                            <span class="sub-title">Based on user booking package.</span>
                            <h2 class="sec-title">Our Trending Tours </h2>
                        </div>
                    </div>
                </div>
                <div class="nav nav-tabs tour-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link th-btn active" id="nav-step1-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-step1" type="button">
                        <img src="assets/img/icon/tour_icon_1.svg" alt="" />Taj Mahal Tour
                    </button>
                    <button class="nav-link th-btn" id="nav-step2-tab" data-bs-toggle="tab" data-bs-target="#nav-step2"
                        type="button">
                        <img src="assets/img/icon/tour_icon_2.svg" alt="" />Same Day Tour
                    </button>
                    <button class="nav-link th-btn" id="nav-step3-tab" data-bs-toggle="tab" data-bs-target="#nav-step3"
                        type="button">
                        <img src="assets/img/icon/tour_icon_3.svg" alt="" />Golder Triangle Tour
                    </button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                        <div class="slider-area tour-slider slider-drag-wrap">
                            <div class="swiper th-slider has-shadow"
                                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                                <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/taj_mahal_tour/taj_mahal-1.png" alt="Taj Mahal Day Tour by Car from Delhi" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="taj-mahal-and-agra-fort-tour-by-car-from-delhi.php">Taj Mahal Day Tour by Car from Delhi</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                                <span style="width: 94%">Rated <strong class="rating">4.7</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(77+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency"> <i class="fas fa-location"></i> Delhi - Agra - Delhi</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>1 Day</span>
                                            <a href="taj-mahal-and-agra-fort-tour-by-car-from-delhi.php" class="th-btn text-nowrap style4 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Taj Mahal Sunrise Tour from Delhi -->
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/taj_mahal_tour/taj_mahal-2.png" alt="Taj Mahal Sunrise Tour from Delhi" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="taj-mahal-sunrise-tour-from-delhi.php">Taj Mahal Sunrise Tour from Delhi</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                <span style="width: 96%">Rated <strong class="rating">4.8</strong>out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(50+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">01 Day Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Sunrise Experience</span>
                                            <a href="taj-mahal-sunrise-tour-from-delhi.php" class="th-btn text-nowrap style4 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Taj Mahal Tour by Gatimaan Express Train -->
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/taj_mahal_tour/taj_mahal-3.png" alt="Taj Mahal Tour by Gatimaan Express Train" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="taj-mahal-tour-by-gatimaan-express-train.php">Taj Mahal Tour by Gatimaan Express Train</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                <span style="width: 96%">Rated <strong class="rating">4.8</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(750+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">01 Day Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Train Journey Included</span>
                                            <a href="taj-mahal-tour-by-gatimaan-express-train.php" class="th-btn text-nowrap style4 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Taj Mahal Luxury Tour by Premium Car from Delhi -->
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/taj_mahal_tour/taj_mahal-4.png" alt="Taj Mahal Luxury Tour by Premium Car from Delhi" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="taj-mahal-luxury-tour-by-premium-car-from-delhi.php">Taj Mahal Luxury Tour by Premium Car</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                <span style="width: 98%">Rated <strong class="rating">4.9</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(340+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">01 Day Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Premium Experience</span>
                                            <a href="taj-mahal-luxury-tour-by-premium-car-from-delhi.php" class="th-btn text-nowrap style4 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                </div>
                                <div class="slider-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                        <div class="slider-area tour-slider slider-drag-wrap">
                            <div class="swiper th-slider has-shadow"
                                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/same_day_tour/delhi-gate.png" alt="Full Day Old and New Delhi City Tour" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="full-day-old-and-new-delhi-city-tour.php">Full Day Delhi City Tour</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                <span style="width: 98%">Rated <strong class="rating">4.9</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(580+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">06 Hours Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Old & New Delhi</span>
                                            <a href="full-day-old-and-new-delhi-city-tour.php" class="th-btn text-nowrap style4 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Half Day Delhi City Tour -->
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/same_day_tour/kutub-minar.png" alt="Half Day Delhi City Tour" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="half-day-delhi-city-tour.php">Half Day Delhi City Tour</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                <span style="width: 98%">Rated <strong class="rating">4.9</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(460+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">01 Day Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Essential Highlights</span>
                                            <a href="half-day-delhi-city-tour.php" class="th-btn text-nowrap style4 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Full Day Jaipur City Tour by Car -->
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/same_day_tour/hawa-mahal.png" alt="Full Day Jaipur City Tour by Car" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="full-day-jaipur-city-tour-by-car.php">Full Day Jaipur City Tour</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                <span style="width: 98%">Rated <strong class="rating">4.9</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(610+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">01 Day Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Pink City Experience</span>
                                            <a href="full-day-jaipur-city-tour-by-car.php" class="th-btn text-nowrap style4 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Jaipur Tour from Delhi by Car -->
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/same_day_tour/amber-fort.png" alt="Jaipur Tour from Delhi by Car" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="jaipur-tour-from-delhi-by-car.php">Jaipur Tour from Delhi</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                <span style="width: 98%">Rated <strong class="rating">4.9</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(370+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">01 Day Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Round Trip from Delhi</span>
                                            <a href="jaipur-tour-from-delhi-by-car.php" class="th-btn text-nowrap style4 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/taj_mahal_tour/taj_mahal-1.png" alt="Taj Mahal Day Tour by Car from Delhi" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="taj-mahal-and-agra-fort-tour-by-car-from-delhi.php">Taj Mahal Day Tour by Car from Delhi</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                                <span style="width: 94%">Rated <strong class="rating">4.7</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(577+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">01 Day Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Full Day Experience</span>
                                            <a href="taj-mahal-and-agra-fort-tour-by-car-from-delhi.php" class="th-btn text-nowrap style4 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Taj Mahal Sunrise Tour from Delhi -->
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/taj_mahal_tour/taj_mahal-2.png" alt="Taj Mahal Sunrise Tour from Delhi" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="taj-mahal-sunrise-tour-from-delhi.php">Taj Mahal Sunrise Tour from Delhi</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                <span style="width: 96%">Rated <strong class="rating">4.8</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(580+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">01 Day Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Sunrise Experience</span>
                                            <a href="taj-mahal-sunrise-tour-from-delhi.php" class="th-btn text-nowrap   style4 th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Taj Mahal Tour by Gatimaan Express Train -->
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/taj_mahal_tour/taj_mahal-3.png" alt="Taj Mahal Tour by Gatimaan Express Train" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="taj-mahal-tour-by-gatimaan-express-train.php">Taj Mahal Tour by Gatimaan Express Train</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                <span style="width: 96%">Rated <strong class="rating">4.8</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(750+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">01 Day Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Train Journey Included</span>
                                            <a href="taj-mahal-tour-by-gatimaan-express-train.php" class="th-btn style4 text-nowrap th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Taj Mahal Luxury Tour by Premium Car from Delhi -->
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <img src="assets/img/taj_mahal_tour/taj_mahal-4.png" alt="Taj Mahal Luxury Tour by Premium Car from Delhi" />
                                    </div>
                                    <div class="tour-content">
                                        <h3 class="box-title">
                                            <a href="taj-mahal-luxury-tour-by-premium-car-from-delhi.php">Taj Mahal Luxury Tour by Premium Car</a>
                                        </h3>
                                        <div class="tour-rating">
                                            <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                <span style="width: 98%">Rated <strong class="rating">4.9</strong> out of 5</span>
                                            </div>
                                            <a href="#" class="woocommerce-review-link">(340+ Reviews)</a>
                                        </div>
                                        <h4 class="tour-box_price">
                                            <span class="currency">01 Day Tour</span>
                                        </h4>
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>Premium Experience</span>
                                            <a href="taj-mahal-luxury-tour-by-premium-car-from-delhi.php" class="th-btn style4 text-nowrap th-icon">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                </div>
                                <div class="slider-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                        <div class="slider-area tour-slider slider-drag-wrap">
                            <div class="swiper th-slider has-shadow"
                                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                                <div class="swiper-wrapper">
                                <!-- Golden Triangle Tour 3 Days -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-tour-1.png" alt="Golden Triangle Tour 3 Days" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="./golden-triangle-tour-3-days.php">Golden Triangle Tour 3 Days</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                                        <span style="width: 94%">Rated <strong class="rating">4.7</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(340+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">03 Night / 04 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Delhi - Agra - Jaipur</span>
                                                    <a href="golden-triangle-tour-3-days.php" class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Golden Triangle Tour 4 Days -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-tour-2.png" alt="Golden Triangle Tour 4 Days" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-4-days.php">Golden Triangle Tour 4 Days</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                        <span style="width: 96%">Rated <strong class="rating">4.8</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(460+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">04 Night / 05 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>More Relaxed Itinerary</span>
                                                    <a href="golden-triangle-tour-4-days.php" class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Golden Triangle Tour 5 Days -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-tour-3.png" alt="Golden Triangle Tour 5 Days" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-5-days.php">Golden Triangle Tour 5 Days</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                        <span style="width: 98%">Rated <strong class="rating">4.9</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(430+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">06 Night / 07 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Comprehensive Experience</span>
                                                    <a href="golden-triangle-tour-5-days.php" class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Golden Triangle Tour with Amritsar -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-amritsar.png" alt="Golden Triangle Tour with Amritsar" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-with-amritsar.php">Golden Triangle with Amritsar</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                        <span style="width: 96%">Rated <strong class="rating">4.8</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(290+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">06 Night / 07 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Golden Temple Included</span>
                                                    <a href="golden-triangle-tour-with-amritsar.php" class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Golden Triangle Tour with Pushkar -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-pushkar.png" alt="Golden Triangle Tour with Pushkar" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-with-pushkar.php">Golden Triangle with Pushkar</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                        <span style="width: 96%">Rated <strong class="rating">4.8</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(390+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">06 Night / 07 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Sacred Town Experience</span>
                                                    <a href="golden-triangle-tour-with-pushkar.php" class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Golden Triangle Tour with Ranthambore -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-ranthambore.png" alt="Golden Triangle Tour with Ranthambore" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-with-ranthambore.php">Golden Triangle with Ranthambore</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                        <span style="width: 98%">Rated <strong class="rating">4.9</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(410+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">07 Night / 08 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Includes Tiger Safari</span>
                                                    <a href="golden-triangle-tour-with-ranthambore.php" class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Golden Triangle Tour with Udaipur -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-udaipur.png" alt="Golden Triangle Tour with Udaipur" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-with-udaipur.php">Golden Triangle with Udaipur</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                                        <span style="width: 94%">Rated <strong class="rating">4.7</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(520+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">07 Night / 08 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>City of Lakes Included</span>
                                                    <a href="golden-triangle-tour-with-udaipur.php" class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Golden Triangle Tour with Varanasi -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-varanasi.png" alt="Golden Triangle Tour with Varanasi" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="./golden-triangle-tour-with-varanasi.php">Golden Triangle with Varanasi</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                                        <span style="width: 94%">Rated <strong class="rating">4.7</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(330+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">07 Night / 08 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Spiritual Experience</span>
                                                    <a href="golden-triangle-tour-with-varanasi.php" class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="about-area position-relative overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="img-box1">
                            <div class="img1">
                                <img src="assets/img/home/2-about-minar.png" width="312" height="630" alt="About" />
                            </div>
                            <div class="img2">
                                <img src="assets/img/home/2-about-taj.png" height="315" width="312" alt="About" />
                            </div>
                            <div class="img3">
                                <img src="assets/img/home/2-about-amber.png" height="315" width="312" alt="About" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="ps-xl-4 ms-xl-2">
                            <div class="title-area mb-20 pe-xl-5 me-xl-5">
                                <span class="sub-title style1">Welcome To Indiana Taj Tours</span>
                                <h2 class="sec-title mb-20 pe-xl-5  heading">
                                   Explore India with Exceptional Tour
                                </h2>
                                <p class="sec-text mb-30">
                                   Welcome to Indiana Taj Tours, your trusted travel companion for an unforgettable journey through the captivating cities of Agra, Delhi, and Jaipur. Our thoughtfully designed tour packages combine rich history, vibrant culture, and modern comforts, delivering a smooth and memorable travel experience tailored just for you.
                                </p>
                            </div>
                            <div class="about-item-wrap">
                                <div class="about-item">
                                    <div class="about-item_img">
                                        <img src="assets/img/icon/map3.svg" alt="" />
                                    </div>
                                    <div class="about-item_centent">
                                        <h5 class="box-title">Exclusive Trip</h5>
                                        <p class="about-item_text">
                                            There are many variations of passages of available but the
                                            majority.
                                        </p>
                                    </div>
                                </div>
                                <div class="about-item">
                                    <div class="about-item_img">
                                        <img src="assets/img/icon/guide.svg" alt="" />
                                    </div>
                                    <div class="about-item_centent">
                                        <h5 class="box-title">Professional Guide</h5>
                                        <p class="about-item_text">
                                            There are many variations of passages of available but the
                                            majority.
                                        </p>
                                    </div>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                </div>
                <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="-16%">
                    <img src="assets/img/shape/shape_1.png" alt="shape" />
                </div>
                <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="-16%">
                    <img src="assets/img/shape/shape_2.png" alt="shape" />
                </div>
                <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="-10%">
                    <img src="assets/img/shape/shape_3.png" alt="shape" />
                </div>
                <div class="shape-mockup shape1 d-none d-xl-block" data-bottom="0" data-right="-15%">
                    <img src="assets/img/shape/shape_1.png" alt="shape" />
                </div>
                <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="0%" data-right="-11%">
                    <img src="assets/img/shape/shape_2.png" alt="shape" />
                </div>
            </div>
        </div>

        <div class="gallery-area spcace position-relative pb-lg-5">
            <div class="container th-container">
                <div class="title-area text-center">
                    <span class="sub-title">Make Your Tour More Pleasure</span>
                    <h2 class="sec-title">Recent Gallery</h2>
                </div>
                <div class="row gy-10 gx-10 justify-content-center align-items-center">
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-1.png" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-1.png" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-2.png" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-2.png" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-3.png" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-3.png" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-4.png" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-4.png" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-5.png" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-5.png" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-6.png" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-6.png" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-7.png" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-7.png" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-mockup d-none d-xl-block" data-top="-25%" data-left="0%">
                    <img src="assets/img/shape/line.png" alt="shape" />
                </div>
                <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-3%">
                    <img class="gmovingX" src="assets/img/shape/shape_4.png" alt="shape" />
                </div>
            </div>
        </div>

        <div class="about-area position-relative overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="assets/img/home/3-about-jaipur.png" width="445" height="608" alt="About" />
                            </div>
                            <div class="img2">
                                <img src="assets/img/home/3-about-taj.png" width="434" height="508" alt="About" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="ps-xl-4">
                            <div class="title-area mb-20 pe-xxl-5 me-xxl-5">
                                <span class="sub-title style1">Let's Go Together</span>
                                <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">
                                    Plan Your Trip With us
                                </h2>
                            </div>
                            <p class="sec-text mb-30">
                                There are many variations of passages of available but the
                                majority have suffered alteration in some form, by injected hum
                                randomised words.
                            </p>
                            <div class="about-item-wrap">
                                <div class="about-item style2">
                                    <div class="about-item_img">
                                        <img src="assets/img/icon/about_1_1.svg" alt="" />
                                    </div>
                                    <div class="about-item_centent">
                                        <h5 class="box-title">Exclusive Trip</h5>
                                        <p class="about-item_text">
                                            There are many variations of passages of available but the
                                            majority.
                                        </p>
                                    </div>
                                </div>
                                <div class="about-item style2">
                                    <div class="about-item_img">
                                        <img src="assets/img/icon/about_1_2.svg" alt="" />
                                    </div>
                                    <div class="about-item_centent">
                                        <h5 class="box-title">Safety First Always</h5>
                                        <p class="about-item_text">
                                            There are many variations of passages of available but the
                                            majority.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="shape-mockup movingX d-none d-xxl-block" data-top="0%" data-left="-20%">
                    <img src="assets/img/shape/shape_2_1.png" alt="shape" />
                </div>
                <div class="shape-mockup jump d-none d-xxl-block" data-top="20%" data-right="-15%">
                    <img src="assets/img/shape/shape_2_2.png" alt="shape" />
                </div>
                <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="-17%">
                    <img src="assets/img/shape/shape_2_3.png" alt="shape" />
                </div>
                <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="10%" data-right="-18%">
                    <img src="assets/img/shape/shape_2_4.png" alt="shape" />
                </div>
            </div>
            <div class="shape-mockup movingCar d-none d-xxl-block" data-bottom="0%" data-right="-2%">
                <img src="assets/img/shape/car_1.png" alt="shape" />
            </div>
            <div class="shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%">
                <img src="assets/img/shape/tree_1.png" alt="shape" />
            </div>
        </div>
    </main>

    <!-- include the footer here  -->
    <?php include 'footer.php'; ?>

    <!-- include the bottom script -->
    <?php include 'bottom-script.php'; ?>

    <script>
        // Search form functionality
        document.addEventListener('DOMContentLoaded', function() {
            const searchForm = document.getElementById('searchForm');
            const searchBtn = searchForm.querySelector('button[type="submit"]');

            // Add loading state to search button
            searchForm.addEventListener('submit', function(e) {
                const destination = document.getElementById('destination').value;
                const tourType = document.getElementById('tourType').value;
                const duration = document.getElementById('duration').value;
                const category = document.getElementById('category').value;

                // Check if at least one field is selected
                if (!destination && !tourType && !duration && !category) {
                    e.preventDefault();
                    alert('Please select at least one search criteria to find tours.');
                    return;
                }

                // Show loading state
                const originalText = searchBtn.innerHTML;
                searchBtn.innerHTML = '<i class="fas fa-search me-2"></i>Searching...';
                searchBtn.disabled = true;

                // Re-enable after a short delay (form will submit)
                setTimeout(() => {
                    searchBtn.innerHTML = originalText;
                    searchBtn.disabled = false;
                }, 1000);
            });

            // Dynamic form interactions
            const destinationSelect = document.getElementById('destination');
            const tourTypeSelect = document.getElementById('tourType');

            // Auto-suggest tour type based on destination
            destinationSelect.addEventListener('change', function() {
                const destination = this.value;
                if (destination === 'golden-triangle') {
                    tourTypeSelect.value = 'golden-triangle';
                } else if (destination === 'agra') {
                    tourTypeSelect.value = 'day-tour';
                } else if (destination === 'delhi' || destination === 'jaipur') {
                    tourTypeSelect.value = 'same-day';
                }
            });

            // Auto-suggest duration based on tour type
            tourTypeSelect.addEventListener('change', function() {
                const tourType = this.value;
                const durationSelect = document.getElementById('duration');

                if (tourType === 'golden-triangle') {
                    durationSelect.value = '3';
                } else if (tourType === 'multi-day') {
                    durationSelect.value = '7';
                } else if (tourType === 'day-tour' || tourType === 'same-day' || tourType === 'sunrise') {
                    durationSelect.value = '1';
                }
            });
        });
    </script>

</body>

</html>