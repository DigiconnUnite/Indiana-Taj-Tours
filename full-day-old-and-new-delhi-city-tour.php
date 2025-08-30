<?php 
    // Include the links, preloader, sidebar, and header for consistent UI
    include "../links.php"; 
    include '../preloader.php'; 
    include '../sidebar.php'; 
    include '../header.php'; 
?>

<main>
    <!-- Hero Section -->
    <section class="th-hero-wrapper hero-inner-page" style="background-image: url('../assets/img/hero/hero-delhi.png'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="hero-content text-center py-5">
                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Same Day Tour</span>
                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Full Day Delhi Tour</h1>
                <nav aria-label="breadcrumb" class="d-flex justify-content-center mt-3">
                    <ol class="breadcrumb bg-transparent p-0 m-0">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../same-day-tour.php">Same Day Tour</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Full Day Delhi Tour</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Tour Details Section -->
    <section class="tour-details-area section-space">
        <div class="container">
            <div class="row gy-5">
                <!-- Tour Images & Overview -->
                <div class="col-lg-8">
                    <div class="tour-details-content">
                        <div class="tour-details-gallery mb-4">
                            <div class="swiper th-slider tourGallerySlider" data-slider-options='{"spaceBetween":10,"slidesPerView":1,"pagination":{"el":".swiper-pagination","clickable":true}}'>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="../assets/img/delhi_tour/delhi-1.jpg" alt="Red Fort, Delhi" class="img-fluid rounded shadow" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="../assets/img/delhi_tour/delhi-2.jpg" alt="Qutub Minar, Delhi" class="img-fluid rounded shadow" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="../assets/img/delhi_tour/delhi-3.jpg" alt="India Gate, Delhi" class="img-fluid rounded shadow" />
                                    </div>
                                </div>
                                <div class="swiper-pagination mt-2"></div>
                            </div>
                        </div>
                        <div class="tour-details-header mb-3">
                            <h2 class="mb-2">Full Day Delhi Tour</h2>
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                <span class="badge bg-primary"><i class="fa-light fa-clock me-1"></i> 1 Day</span>
                                <span class="badge bg-success"><i class="fa-light fa-location-dot me-1"></i> Delhi</span>
                                <span class="badge bg-warning text-dark"><i class="fa-light fa-star me-1"></i> 4.8/5 (120+ Reviews)</span>
                            </div>
                        </div>
                        <div class="tour-details-desc mb-4">
                            <h4>Tour Overview</h4>
                            <p>
                                Experience the vibrant culture, rich history, and architectural marvels of India’s capital with our <strong>Full Day Delhi Tour</strong>. Explore both Old and New Delhi in a single day, visiting iconic landmarks, bustling markets, and serene temples. Perfect for travelers who want to immerse themselves in the essence of Delhi in comfort and style.
                            </p>
                        </div>
                        <div class="tour-details-itinerary mb-4">
                            <h4>Itinerary</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <strong>08:00 AM:</strong> Pick up from your hotel/airport/railway station in Delhi.
                                </li>
                                <li class="list-group-item">
                                    <strong>Red Fort:</strong> Marvel at the grandeur of this UNESCO World Heritage Site.
                                </li>
                                <li class="list-group-item">
                                    <strong>Jama Masjid & Chandni Chowk:</strong> Visit India’s largest mosque and enjoy a rickshaw ride through the bustling market.
                                </li>
                                <li class="list-group-item">
                                    <strong>Raj Ghat:</strong> Pay homage at Mahatma Gandhi’s memorial.
                                </li>
                                <li class="list-group-item">
                                    <strong>India Gate & President’s House:</strong> Drive past these iconic landmarks in New Delhi.
                                </li>
                                <li class="list-group-item">
                                    <strong>Qutub Minar:</strong> Explore the world’s tallest brick minaret.
                                </li>
                                <li class="list-group-item">
                                    <strong>Lotus Temple & Humayun’s Tomb:</strong> Admire the architectural beauty and tranquility.
                                </li>
                                <li class="list-group-item">
                                    <strong>06:00 PM:</strong> Drop back to your hotel/airport/railway station.
                                </li>
                            </ul>
                        </div>
                        <div class="tour-details-includes mb-4">
                            <h4>Inclusions</h4>
                            <ul class="th-list style-check">
                                <li>Private air-conditioned car with driver</li>
                                <li>Professional English-speaking guide</li>
                                <li>All parking, tolls, and taxes</li>
                                <li>Bottled water</li>
                                <li>Hotel/airport pickup and drop-off</li>
                            </ul>
                        </div>
                        <div class="tour-details-excludes mb-4">
                            <h4>Exclusions</h4>
                            <ul class="th-list style-cross">
                                <li>Monument entrance fees</li>
                                <li>Meals and personal expenses</li>
                                <li>Tips and gratuities</li>
                            </ul>
                        </div>
                        <div class="tour-details-tips">
                            <h4>Tips for Travelers</h4>
                            <ul class="th-list style-dot">
                                <li>Wear comfortable walking shoes and carry sunglasses.</li>
                                <li>Respect local customs at religious sites.</li>
                                <li>Carry a valid ID for monument entry.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Booking Sidebar -->
                <div class="col-lg-4">
                    <div class="tour-booking-sidebar p-4 rounded shadow bg-white sticky-top" style="top: 100px;">
                        <h4 class="mb-3">Book This Tour</h4>
                        <form action="../booking.php" method="get" class="th-form">
                            <input type="hidden" name="tour" value="Full Day Delhi Tour">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Preferred Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="guests" class="form-label">No. of Guests</label>
                                <input type="number" class="form-control" id="guests" name="guests" min="1" value="1" required>
                            </div>
                            <button type="submit" class="th-btn w-100">Book Now</button>
                        </form>
                        <div class="tour-price-box mt-4 text-center">
                            <span class="h5 d-block mb-1 text-muted">Starting From</span>
                            <span class="display-6 fw-bold text-primary">&#8377; 2,999 <small class="fs-6 text-muted">/ person</small></span>
                            <div class="mt-2">
                                <span class="badge bg-success"><i class="fa-light fa-check-circle me-1"></i>Best Price Guarantee</span>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <img src="../assets/img/payments.png" alt="Payment Methods" class="img-fluid" style="max-width: 180px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Tours Section -->
    <section class="related-tours-area section-space-bottom">
        <div class="container">
            <div class="title-area text-center mb-4">
                <span class="sub-title">You May Also Like</span>
                <h2 class="sec-title">Related Tours</h2>
            </div>
            <div class="swiper th-slider has-shadow" data-slider-options='{"spaceBetween":30,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":2},"992":{"slidesPerView":3}}}'>
                <div class="swiper-wrapper">
                    <!-- Related Tour 1 -->
                    <div class="swiper-slide">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="../assets/img/taj_mahal_tour/taj_mahal-1.png" alt="Taj Mahal Day Tour by Car from Delhi" />
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title">
                                    <a href="../taj-mahal-tour/day-tour-by-car-from-delhi.php">Taj Mahal Day Tour by Car from Delhi</a>
                                </h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 4.7 out of 5">
                                        <span style="width: 94%">Rated <strong class="rating">4.7</strong> out of 5</span>
                                    </div>
                                    <a href="#" class="woocommerce-review-link">(77+ Reviews)</a>
                                </div>
                                <h4 class="tour-box_price">
                                    <span class="currency">Delhi - Agra - Delhi</span>
                                </h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>1 Day</span>
                                    <a href="../booking.php?tour=Taj Mahal Day Tour by Car from Delhi" class="th-btn text-nowrap style4 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Related Tour 2 -->
                    <div class="swiper-slide">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="../assets/img/taj_mahal_tour/taj_mahal-2.png" alt="Taj Mahal Sunrise Tour from Delhi" />
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title">
                                    <a href="../taj-mahal-tour/day-tour-by-car-from-delhi.php">Taj Mahal Sunrise Tour from Delhi</a>
                                </h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 4.8 out of 5">
                                        <span style="width: 96%">Rated <strong class="rating">4.8</strong> out of 5</span>
                                    </div>
                                    <a href="#" class="woocommerce-review-link">(50+ Reviews)</a>
                                </div>
                                <h4 class="tour-box_price">
                                    <span class="currency">01 Day Tour</span>
                                </h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>Sunrise Experience</span>
                                    <a href="../booking.php?tour=Taj Mahal Sunrise Tour from Delhi" class="th-btn text-nowrap style4 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Related Tour 3 -->
                    <div class="swiper-slide">
                        <div class="tour-box th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="../assets/img/taj_mahal_tour/taj_mahal-3.png" alt="Taj Mahal Tour by Gatimaan Express Train" />
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title">
                                    <a href="../taj-mahal-tour/gatimaan-express-tour.php">Taj Mahal Tour by Gatimaan Express Train</a>
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
                                    <a href="../booking.php?tour=Taj Mahal Tour by Gatimaan Express Train" class="th-btn text-nowrap style4 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more related tours as needed -->
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../footer.php'; ?>

<!-- Swiper JS (if not already included globally) -->
<script src="../assets/js/swiper-bundle.min.js"></script>
<script>
    // Initialize Swiper for gallery and related tours
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.tourGallerySlider', {
            spaceBetween: 10,
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            }
        });
        new Swiper('.related-tours-area .th-slider', {
            spaceBetween: 30,
            slidesPerView: 3,
            breakpoints: {
                0: { slidesPerView: 1 },
                576: { slidesPerView: 2 },
                992: { slidesPerView: 3 }
            }
        });
    });
</script>
