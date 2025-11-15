<?php
/**
 * Indiana Taj Tour 
 *
 * @author Digiconn Unite Pvt. Ltd.
 * @version 1.0.0
 * @since 2025
 *
 * Development Information:
 * - Company: Digiconn Unite Pvt. Ltd.
 * - Company Website:  https://www.digiconnunite.com
 * - Developer: Shivam Thakur
 * - LinkedIn: https://in.linkedin.com/in/shivam-thakur-9b1a54311
 * - GitHub: https://github.com/shivamThakurXcode

 */
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        Indiana Taj Tour – Taj Mahal, Delhi & Jaipur Tours

    </title>
    <link rel="canonical" href="https://indianatajtours.com/"/>
    <meta property="og:url" content="https://indianatajtours.com/" />
    <meta name="author" content="Indiana Taj Tour" />
    <meta name="description"
        content="Explore India’s iconic Golden Triangle with Indiana Taj Tour – visit Taj Mahal, Delhi, Jaipur & enjoy customized, memorable travel experiences." />
    <meta name="keywords"
        content="Taj Mahal tour, Golden Triangle tour, Delhi tours, Jaipur tours, Agra tours, India travel packages" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.webp" />
    <meta name="theme-color" content="#ffffff" />

    <!-- include the links file  -->
    <?php include "links.php" ?>

    <style>
        /* Tour Search and Filter Styles */
        .tour-search-filter {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 3rem 0;
            margin: 2rem 0;
        }

        .search-filter-form {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .search-filter-form:hover {
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .search-filter-form .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .search-filter-form .form-control,
        .search-filter-form .form-select {
            border: 2px solid #dee2e6;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .search-filter-form .form-control:focus,
        .search-filter-form .form-select:focus {
            border-color: #113d48;
            box-shadow: 0 0 0 0.2rem rgba(17, 61, 72, 0.25);
        }

        .search-filter-form .btn {
            padding: 0.75rem 2rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .search-filter-form .btn-primary {
            background: linear-gradient(135deg, #113d48 0%, #0a2a35 100%);
            border: none;
        }

        .search-filter-form .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(17, 61, 72, 0.4);
        }

        .filter-results {
            font-size: 0.9rem;
            color: #6c757d;
        }

        /* Tour Box Styling */
        .tour-box_price .currency {
            color: #6c757d;
            font-size: 0.9rem;
        }

        /* Responsive improvements */
        @media (max-width: 768px) {
            .tour-search-filter {
                padding: 2rem 0;
            }

            .search-filter-form {
                margin: 0 1rem;
                padding: 1.5rem;
            }

            .search-filter-form .row>div {
                margin-bottom: 1rem;
            }
        }

        /* Tour box hover effects */
        .tour-box {
            transition: all 0.3s ease;
        }

        .tour-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        /* Filter animation */
        .tour-box {
            opacity: 1;
            transform: scale(1);
            transition: all 0.3s ease;
        }

        .tour-box[style*="display: none"] {
            opacity: 0;
            transform: scale(0.95);
        }
    </style>

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
                            <div class="th-hero-bg" data-bg-src="assets/img/hero/hero-taj.webp"></div>
                            <div class="container">
                                <div class="hero-style1">
                                    <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Experience
                                        the Eternal Symbol of Love</span>
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
                            <div class="th-hero-bg" data-bg-src="assets/img/hero/hero-delhi.webp"></div>
                            <div class="container">
                                <div class="hero-style1">
                                    <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Where
                                        History Meets Modernity</span>
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
                            <div class="th-hero-bg" data-bg-src="assets/img/hero/hero-vanaras.webp"></div>
                            <div class="container">
                                <div class="hero-style1">
                                    <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Journey to
                                        Spiritual Enlightenment</span>
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
                        <img src="assets/img/icon/right-arrow.svg" alt=" Discover the Majestic Taj Mahal" />
                    </button>
                    <div class="slider-pagination"></div>
                    <button data-slider-next="#heroSlide1" class="slider-arrow slider-next">
                        <img src="assets/img/icon/left-arrow.svg" alt=" Discover the Majestic Taj Mahal" />
                    </button>
                </div>
            </div>
        </div>

        <!-- booking form section  -->
        <div class="booking-sec">
            <div class="container">
                <form action="search-tours.php" method="POST" class="booking-form" id="tourSearchForm">
                    <div class="input-wrap">
                        <div class="row align-items-center justify-content-between">
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon"><i class="fa-light fa-route"></i></div>
                                <div class="search-input">
                                    <label>Location</label>
                                    <select name="location" id="location" class="form-select nice-select">
                                        <option value="">All Locations</option>
                                        <option value="delhi">Delhi</option>
                                        <option value="agra">Agra</option>
                                        <option value="jaipur">Jaipur</option>
                                        <option value="udaipur">Udaipur</option>
                                        <option value="varanasi">Varanasi</option>
                                        <option value="amritsar">Amritsar</option>
                                        <option value="pushkar">Pushkar</option>
                                        <option value="ranthambore">Ranthambore</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon">
                                    <i class="fa-regular fa-person-hiking"></i>
                                </div>
                                <div class="search-input">
                                    <label>Tour Type</label>
                                    <select name="tourType" id="tourType" class="nice-select">
                                        <option value="">All Types</option>
                                        <option value="taj-mahal">Taj Mahal Tour</option>
                                        <option value="same-day">Same Day Tour</option>
                                        <option value="golden-triangle">Golden Triangle</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon"><i class="fa-light fa-clock"></i></div>
                                <div class="search-input">
                                    <label>Duration</label>
                                    <select name="duration" id="duration" class="form-select nice-select">
                                        <option value="">Any Duration</option>
                                        <option value="1">1 Day</option>
                                        <option value="2">2 Days</option>
                                        <option value="3">3 Days</option>
                                        <option value="4">4 Days</option>
                                        <option value="5">5 Days</option>
                                        <option value="6">6 Days</option>
                                        <option value="7">7 Days</option>
                                        <option value="8">8 Days</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon">
                                    <i class="fa-light fa-search"></i>
                                </div>
                                <div class="search-input">
                                    <label>Search Tours</label>
                                    <input type="text" name="search" id="search" class="form-control"
                                        placeholder="Search by tour name...">
                                </div>
                            </div>
                            <div class="form-btn col-md-12 col-lg-auto">
                                <button type="submit" class="th-btn">
                                    <i class="fas fa-search"></i> Search Tours
                                </button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </div>
                </form>
            </div>
        </div>

        <!-- category section -->
        <section class="category-area bg-top-center" data-bg-src="assets/img/bg/category_bg_1.webp">
            <div class="container th-container">
                <div class="title-area text-center">
                    <span class="sub-title">Wornderful Place For You</span>
                    <h2 class="sec-title">Top Destinations</h2>
                </div>
                <div class="swiper th-slider has-shadow categorySlider" id="categorySlider1"
                    data-bg-src="assets/img/bg/category_bg_1.webp"
                    data-slider-options='{"spaceBetween": "50","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"5"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-agra.webp" alt=" Discover the Majestic Taj Mahal" />
                                </div>
                                <h3 class="box-title">
                                    <a href="tours/taj-mahal-day-tour-by-car-from-delhi">Agra</a>
                                </h3>
                                <a class="line-btn"
                                    href="tours/taj-mahal-day-tour-by-car-from-delhi">See more</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-delhi.webp" alt=" Discover the Majestic Taj Mahal" />
                                </div>
                                <h3 class="box-title"><a href="./full-day-old-and-new-delhi-city-tour.php">Delhi</a>
                                </h3>
                                <a class="line-btn" href="./full-day-old-and-new-delhi-city-tour.php">See more</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-jaipur.webp" alt=" Discover the Majestic Taj Mahal" />
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
                                    <img src="assets/img/home/cat-udaipur.webp"
                                        alt=" Discover the Majestic Taj Mahal" />
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
                                    <img src="assets/img/home/cat-varanasi.webp"
                                        alt=" Discover the Majestic Taj Mahal" />
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
                                    <img src="assets/img/home/cat-ranthambore.webp"
                                        alt=" Discover the Majestic Taj Mahal" />
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
                                    <img src="assets/img/home/cat-pushkar.webp"
                                        alt=" Discover the Majestic Taj Mahal" />
                                </div>
                                <h3 class="box-title"><a href="./golden-triangle-tour-with-pushkar.php">Pushkar</a></h3>
                                <a class="line-btn" href="./golden-triangle-tour-with-pushkar.php">See more</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="category-card single">
                                <div class="box-img global-img">
                                    <img src="assets/img/home/cat-amritsar.webp"
                                        alt=" Discover the Majestic Taj Mahal" />
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
            data-bg-src="assets/img/bg/tour_bg_1.webp">
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
                        <img src="assets/img/icon/tour_icon_1.svg" alt=" Discover the Majestic Taj Mahal" />Taj Mahal
                        Tour
                    </button>
                    <button class="nav-link th-btn" id="nav-step2-tab" data-bs-toggle="tab" data-bs-target="#nav-step2"
                        type="button">
                        <img src="assets/img/icon/tour_icon_2.svg" alt=" Discover the Majestic Taj Mahal" />Same Day
                        Tour
                    </button>
                    <button class="nav-link th-btn" id="nav-step3-tab" data-bs-toggle="tab" data-bs-target="#nav-step3"
                        type="button">
                        <img src="assets/img/icon/tour_icon_3.svg" alt=" Discover the Majestic Taj Mahal" />Golder
                        Triangle Tour
                    </button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                        <div class="slider-area tour-slider slider-drag-wrap">
                            <div class="swiper th-slider has-shadow"
                                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"4"}}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="taj-mahal"
                                            data-location="delhi agra" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/taj_mahal_tour/taj_mahal-1.webp"
                                                    alt=" Discover the Majestic Taj Mahal" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="taj-mahal-and-agra-fort-tour-by-car-from-delhi.php">Taj
                                                        Mahal Day Tour by Car from Delhi</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                                        <span style="width: 94%">Rated <strong
                                                                class="rating">4.7</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(77+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency"> <i class="fas fa-location"></i> Delhi - Agra
                                                        - Delhi</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>1 Day</span>
                                                    <a href="tours/taj-mahal-and-agra-fort-tour-by-car-from-delhi.php"
                                                        class="th-btn text-nowrap style4 th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Taj Mahal Sunrise Tour from Delhi -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="taj-mahal"
                                            data-location="delhi agra" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/taj_mahal_tour/taj_mahal-2.webp"
                                                    alt="Taj Mahal Sunrise Tour from Delhi" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="taj-mahal-sunrise-tour-from-delhi.php">Taj Mahal Sunrise
                                                        Tour from Delhi</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                        <span style="width: 96%">Rated <strong
                                                                class="rating">4.8</strong>out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(50+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">01 Day Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Sunrise Experience</span>
                                                    <a href="taj-mahal-sunrise-tour-from-delhi.php"
                                                        class="th-btn text-nowrap style4 th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Taj Mahal Tour by Gatimaan Express Train -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="taj-mahal"
                                            data-location="delhi agra" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/taj_mahal_tour/taj_mahal-3.webp"
                                                    alt="Taj Mahal Tour by Gatimaan Express Train" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="taj-mahal-tour-by-gatimaan-express-train.php">Taj Mahal
                                                        Tour by Gatimaan Express Train</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                        <span style="width: 96%">Rated <strong
                                                                class="rating">4.8</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(750+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">01 Day Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Train Journey Included</span>
                                                    <a href="taj-mahal-tour-by-gatimaan-express-train.php"
                                                        class="th-btn text-nowrap style4 th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Taj Mahal Luxury Tour by Premium Car from Delhi -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="taj-mahal"
                                            data-location="delhi agra" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/taj_mahal_tour/taj_mahal-4.webp"
                                                    alt="Taj Mahal Luxury Tour by Premium Car from Delhi" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="taj-mahal-luxury-tour-by-premium-car-from-delhi.php">Taj
                                                        Mahal Luxury Tour by Premium Car</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                        <span style="width: 98%">Rated <strong
                                                                class="rating">4.9</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(340+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">01 Day Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Premium Experience</span>
                                                    <a href="taj-mahal-luxury-tour-by-premium-car-from-delhi.php"
                                                        class="th-btn text-nowrap style4 th-icon">Read More</a>
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
                                        <div class="tour-box th-ani gsap-cursor" data-type="same-day"
                                            data-location="delhi" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/same_day_tour/delhi-gate.webp"
                                                    alt="Full Day Old and New Delhi City Tour" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="full-day-old-and-new-delhi-city-tour.php">Full Day Delhi
                                                        City Tour</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                        <span style="width: 98%">Rated <strong
                                                                class="rating">4.9</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(580+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">06 Hours Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Old & New Delhi</span>
                                                    <a href="full-day-old-and-new-delhi-city-tour.php"
                                                        class="th-btn text-nowrap style4 th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Half Day Delhi City Tour -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="same-day"
                                            data-location="delhi" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/same_day_tour/kutub-minar.webp"
                                                    alt="Half Day Delhi City Tour" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="half-day-delhi-city-tour.php">Half Day Delhi City Tour</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                        <span style="width: 98%">Rated <strong
                                                                class="rating">4.9</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(460+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">01 Day Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Essential Highlights</span>
                                                    <a href="half-day-delhi-city-tour.php"
                                                        class="th-btn text-nowrap style4 th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Full Day Jaipur City Tour by Car -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="same-day"
                                            data-location="jaipur" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/same_day_tour/hawa-mahal.webp"
                                                    alt="Full Day Jaipur City Tour by Car" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="full-day-jaipur-city-tour-by-car.php">Full Day Jaipur City
                                                        Tour</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                        <span style="width: 98%">Rated <strong
                                                                class="rating">4.9</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(610+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">01 Day Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Pink City Experience</span>
                                                    <a href="full-day-jaipur-city-tour-by-car.php"
                                                        class="th-btn text-nowrap style4 th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Jaipur Tour from Delhi by Car -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="same-day"
                                            data-location="delhi jaipur" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/same_day_tour/amber-fort.webp"
                                                    alt="Jaipur Tour from Delhi by Car" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="jaipur-tour-from-delhi-by-car.php">Jaipur Tour from
                                                        Delhi</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                        <span style="width: 98%">Rated <strong
                                                                class="rating">4.9</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(370+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">01 Day Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Round Trip from Delhi</span>
                                                    <a href="jaipur-tour-from-delhi-by-car.php"
                                                        class="th-btn text-nowrap style4 th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="taj-mahal"
                                            data-location="delhi agra" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/taj_mahal_tour/taj_mahal-1.webp"
                                                    alt="Taj Mahal Day Tour by Car from Delhi" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a
                                                        href="tours/taj-mahal-day-tour-by-car-from-delhi">Taj
                                                        Mahal Day Tour by Car from Delhi</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                                        <span style="width: 94%">Rated <strong
                                                                class="rating">4.7</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(577+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">01 Day Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Full Day Experience</span>
                                                    <a href="tours/taj-mahal-day-tour-by-car-from-delhi"
                                                        class="th-btn text-nowrap style4 th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Taj Mahal Sunrise Tour from Delhi -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="taj-mahal"
                                            data-location="delhi agra" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/taj_mahal_tour/taj_mahal-2.webp"
                                                    alt="Taj Mahal Sunrise Tour from Delhi" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="taj-mahal-sunrise-tour-from-delhi.php">Taj Mahal Sunrise
                                                        Tour from Delhi</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                        <span style="width: 96%">Rated <strong
                                                                class="rating">4.8</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(580+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">01 Day Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Sunrise Experience</span>
                                                    <a href="taj-mahal-sunrise-tour-from-delhi.php"
                                                        class="th-btn text-nowrap   style4 th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Taj Mahal Tour by Gatimaan Express Train -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="taj-mahal"
                                            data-location="delhi agra" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/taj_mahal_tour/taj_mahal-3.webp"
                                                    alt="Taj Mahal Tour by Gatimaan Express Train" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="taj-mahal-tour-by-gatimaan-express-train.php">Taj Mahal
                                                        Tour by Gatimaan Express Train</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                        <span style="width: 96%">Rated <strong
                                                                class="rating">4.8</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(750+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">01 Day Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Train Journey Included</span>
                                                    <a href="taj-mahal-tour-by-gatimaan-express-train.php"
                                                        class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Taj Mahal Luxury Tour by Premium Car from Delhi -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="taj-mahal"
                                            data-location="delhi agra" data-duration="1">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/taj_mahal_tour/taj_mahal-4.webp"
                                                    alt="Taj Mahal Luxury Tour by Premium Car from Delhi" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="taj-mahal-luxury-tour-by-premium-car-from-delhi.php">Taj
                                                        Mahal Luxury Tour by Premium Car</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                        <span style="width: 98%">Rated <strong
                                                                class="rating">4.9</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(340+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">01 Day Tour</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Premium Experience</span>
                                                    <a href="taj-mahal-luxury-tour-by-premium-car-from-delhi.php"
                                                        class="th-btn style4 text-nowrap th-icon">Read More</a>
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
                                        <div class="tour-box th-ani gsap-cursor" data-type="golden-triangle"
                                            data-location="delhi agra jaipur" data-duration="3">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-tour-1.webp"
                                                    alt="Golden Triangle Tour 3 Days" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="./golden-triangle-tour-3-days.php">Golden Triangle Tour 3
                                                        Days</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                                        <span style="width: 94%">Rated <strong
                                                                class="rating">4.7</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(340+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">03 Night / 04 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Delhi - Agra - Jaipur</span>
                                                    <a href="golden-triangle-tour-3-days.php"
                                                        class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Golden Triangle Tour 4 Days -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="golden-triangle"
                                            data-location="delhi agra jaipur" data-duration="4">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-tour-2.webp"
                                                    alt="Golden Triangle Tour 4 Days" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-4-days.php">Golden Triangle Tour 4
                                                        Days</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                        <span style="width: 96%">Rated <strong
                                                                class="rating">4.8</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(460+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">04 Night / 05 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>More Relaxed Itinerary</span>
                                                    <a href="golden-triangle-tour-4-days.php"
                                                        class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Golden Triangle Tour 5 Days -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="golden-triangle"
                                            data-location="delhi agra jaipur" data-duration="5">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-tour-3.webp"
                                                    alt="Golden Triangle Tour 5 Days" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-5-days.php">Golden Triangle Tour 5
                                                        Days</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                        <span style="width: 98%">Rated <strong
                                                                class="rating">4.9</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(430+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">06 Night / 07 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Comprehensive
                                                        Experience</span>
                                                    <a href="golden-triangle-tour-5-days.php"
                                                        class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Golden Triangle Tour with Amritsar -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="golden-triangle"
                                            data-location="delhi agra jaipur amritsar" data-duration="6">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-amritsar.webp"
                                                    alt="Golden Triangle Tour with Amritsar" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-with-amritsar.php">Golden Triangle
                                                        with Amritsar</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                        <span style="width: 96%">Rated <strong
                                                                class="rating">4.8</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(290+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">06 Night / 07 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Golden Temple Included</span>
                                                    <a href="golden-triangle-tour-with-amritsar.php"
                                                        class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Golden Triangle Tour with Pushkar -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="golden-triangle"
                                            data-location="delhi agra jaipur pushkar" data-duration="6">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-pushkar.webp"
                                                    alt="Golden Triangle Tour with Pushkar" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-with-pushkar.php">Golden Triangle with
                                                        Pushkar</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                                        <span style="width: 96%">Rated <strong
                                                                class="rating">4.8</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(390+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">06 Night / 07 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Sacred Town Experience</span>
                                                    <a href="golden-triangle-tour-with-pushkar.php"
                                                        class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Golden Triangle Tour with Ranthambore -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="golden-triangle"
                                            data-location="delhi agra jaipur ranthambore" data-duration="7">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-ranthambore.webp"
                                                    alt="Golden Triangle Tour with Ranthambore" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-with-ranthambore.php">Golden Triangle
                                                        with Ranthambore</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.9 out of 5">
                                                        <span style="width: 98%">Rated <strong
                                                                class="rating">4.9</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(410+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">07 Night / 08 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Includes Tiger Safari</span>
                                                    <a href="golden-triangle-tour-with-ranthambore.php"
                                                        class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Golden Triangle Tour with Udaipur -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="golden-triangle"
                                            data-location="delhi agra jaipur udaipur" data-duration="6">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-udaipur.webp"
                                                    alt="Golden Triangle Tour with Udaipur" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="golden-triangle-tour-with-udaipur.php">Golden Triangle with
                                                        Udaipur</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                                        <span style="width: 94%">Rated <strong
                                                                class="rating">4.7</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(520+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">07 Night / 08 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>City of Lakes Included</span>
                                                    <a href="golden-triangle-tour-with-udaipur.php"
                                                        class="th-btn style4 text-nowrap th-icon">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Golden Triangle Tour with Varanasi -->
                                    <div class="swiper-slide">
                                        <div class="tour-box th-ani gsap-cursor" data-type="golden-triangle"
                                            data-location="delhi agra jaipur varanasi" data-duration="7">
                                            <div class="tour-box_img global-img">
                                                <img src="assets/img/golden_triangle_tour/golden-varanasi.webp"
                                                    alt="Golden Triangle Tour with Varanasi" />
                                            </div>
                                            <div class="tour-content">
                                                <h3 class="box-title">
                                                    <a href="./golden-triangle-tour-with-varanasi.php">Golden Triangle
                                                        with Varanasi</a>
                                                </h3>
                                                <div class="tour-rating">
                                                    <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                                        <span style="width: 94%">Rated <strong
                                                                class="rating">4.7</strong> out of 5</span>
                                                    </div>
                                                    <a href="#" class="woocommerce-review-link">(330+ Reviews)</a>
                                                </div>
                                                <h4 class="tour-box_price">
                                                    <span class="currency">07 Night / 08 Days</span>
                                                </h4>
                                                <div class="tour-action">
                                                    <span><i class="fa-light fa-clock"></i>Spiritual Experience</span>
                                                    <a href="golden-triangle-tour-with-varanasi.php"
                                                        class="th-btn style4 text-nowrap th-icon">Read More</a>
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
                                <img src="assets/img/home/2-about-minar.webp" width="312" height="630" alt="About" />
                            </div>
                            <div class="img2">
                                <img src="assets/img/home/2-about-taj.webp" height="315" width="312" alt="About" />
                            </div>
                            <div class="img3">
                                <img src="assets/img/home/2-about-amber.webp" height="315" width="312" alt="About" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="ps-xl-4 ms-xl-2">
                            <div class="title-area mb-20 ">
                                <span class="sub-title style1">Welcome To Indiana Taj Tours</span>
                                <h2 class="sec-title mb-20 pe-xl-5  heading">
                                    Explore India with Exceptional Tour
                                </h2>
                                <p class="sec-text mb-30">
                                    Experience the beauty of India with <b><a
                                            href="https://www.indianatajtours.com/">Indiana Taj Tour</a></b>, your
                                    preferred
                                    traveling
                                    partner with visiting the prominent tourism spots in India. The <b><a
                                            href="https://www.indianatajtours.com/taj-mahal-tour.php">Taj Mahal Tour
                                            Package</a></b> is an unforgettable experience that can take you to Agra to
                                    see the
                                    breathtaking Taj Mahal, one the Seven Wonders of the World. For the traveler who
                                    wants to maximize their time, the <b><a
                                            href="https://www.indianatajtours.com/same-day-tour.php">Same-Day Tour
                                            Packages</a></b> takes
                                    stress away from the
                                    traveler, so you can see all of Agra's historical sites.


                                </p>
                            </div>
                            <div class="about-item-wrap">
                                <div class="about-item">
                                    <div class="about-item_img">
                                        <img src="assets/img/icon/map3.svg" alt=" Discover the Majestic Taj Mahal" />
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
                                        <img src="assets/img/icon/guide.svg" alt=" Discover the Majestic Taj Mahal" />
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
                    <img src="assets/img/shape/shape_1.webp" alt="shape" />
                </div>
                <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="-16%">
                    <img src="assets/img/shape/shape_2.webp" alt="shape" />
                </div>
                <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="-10%">
                    <img src="assets/img/shape/shape_3.webp" alt="shape" />
                </div>
                <div class="shape-mockup shape1 d-none d-xl-block" data-bottom="0" data-right="-15%">
                    <img src="assets/img/shape/shape_1.webp" alt="shape" />
                </div>
                <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="0%" data-right="-11%">
                    <img src="assets/img/shape/shape_2.webp" alt="shape" />
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
                                <a href="assets/img/home/gallery-1.webp" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-1.webp" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-2.webp" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-2.webp" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-3.webp" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-3.webp" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-4.webp" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-4.webp" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-5.webp" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-5.webp" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-6.webp" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-6.webp" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="gallery-card">
                            <div class="box-img global-img">
                                <a href="assets/img/home/gallery-7.webp" class="popup-image">
                                    <div class="icon-btn">
                                        <i class="fal fa-magnifying-glass-plus"></i>
                                    </div>
                                    <img src="assets/img/home/gallery-7.webp" alt="gallery image" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-mockup d-none d-xl-block" data-top="-25%" data-left="0%">
                    <img src="assets/img/shape/line.webp" alt="shape" />
                </div>
                <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="-3%">
                    <img class="gmovingX" src="assets/img/shape/shape_4.webp" alt="shape" />
                </div>
            </div>
        </div>

        <div class="about-area position-relative overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="assets/img/home/3-about-jaipur.webp" width="445" height="608" alt="About" />
                            </div>
                            <div class="img2">
                                <img src="assets/img/home/3-about-taj.webp" width="434" height="508" alt="About" />
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="ps-xl-4">
                            <div class="title-area mb-20 ">
                                <span class="sub-title style1">Let's Go Together</span>
                                <h2 class="sec-title mb-20 heading">
                                    Plan Your Trip With us
                                </h2>
                            </div>
                            <p class="sec-text mb-30">
                                If you are looking to experience more than one destination in India, our <b><a
                                        href="https://www.indianatajtours.com/golder-triangle.php">Golden Triangle Tour
                                        Package </a></b> allows
                                exploration of Delhi, Agra, and Jaipur to fully appreciate culture
                                and history. Every destination is meticulously planned by our guides, so that you
                                experience every destination's Vast people of Delhi to the forts and palaces of Jaipur.

                            </p>
                            <div class="about-item-wrap">
                                <div class="about-item style2">
                                    <div class="about-item_img">
                                        <img src="assets/img/icon/about_1_1.svg"
                                            alt=" Discover the Majestic Taj Mahal" />
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
                                        <img src="assets/img/icon/about_1_2.svg"
                                            alt=" Discover the Majestic Taj Mahal" />
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
                    <img src="assets/img/shape/shape_2_1.webp" alt="shape" />
                </div>
                <div class="shape-mockup jump d-none d-xxl-block" data-top="20%" data-right="-15%">
                    <img src="assets/img/shape/shape_2_2.webp" alt="shape" />
                </div>
                <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="-17%">
                    <img src="assets/img/shape/shape_2_3.webp" alt="shape" />
                </div>
                <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="10%" data-right="-18%">
                    <img src="assets/img/shape/shape_2_4.webp" alt="shape" />
                </div>
            </div>
            <div class="shape-mockup movingCar d-none d-xxl-block" data-bottom="0%" data-right="-2%">
                <img src="assets/img/shape/car_1.webp" alt="shape" />
            </div>
            <div class="shape-mockup d-none d-xxl-block" data-bottom="0%" data-right="0%">
                <img src="assets/img/shape/tree_1.webp" alt="shape" />
            </div>
        </div>
    </main>

    <!-- include the footer here  -->
    <?php include 'footer.php'; ?>

    <!-- include the bottom script -->
    <?php include 'bottom-script.php'; ?>

    <script>
        // Form submission handling
        document.addEventListener('DOMContentLoaded', function () {
            const searchForm = document.getElementById('tourSearchForm');

            searchForm.addEventListener('submit', function (e) {
                // Form will submit to search-tours.php
                // You can add loading states or validation here if needed
                const submitBtn = searchForm.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Searching...';
                submitBtn.disabled = true;

                // Re-enable after a short delay (form will submit)
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 1000);
            });
        });
    </script>

</body>

</html>