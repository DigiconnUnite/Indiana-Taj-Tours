<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        Golden Triangle Tour 3 Days | Indiana Taj Tour
    </title>
    <meta name="author" content="Indiana Taj Tour" />
    <meta name="description" content="Discover India's Golden Triangle in 3 days - Delhi, Agra, Jaipur. Visit Taj Mahal, Red Fort, Amber Fort, and more." />
    <meta name="keywords" content="Golden Triangle 3 days, India tour packages, Delhi Agra Jaipur tour, 3 day India itinerary" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- include the links file  -->
    <?php include "links.php" ?>
    
    <style>
        .tour-hero {
            position: relative;
            padding: 120px 0 80px;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/taj_mahal_tour/taj_mahal-1.png') center/cover no-repeat;
            color: white;
            text-align: center;
        }
        .tour-badge {
            display: inline-block;
            background: #005772;
            color: #fff;
            padding: 8px 20px;  
            border-radius: 30px;
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 1rem;
            letter-spacing: 1px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .tour-highlight {
            background: #fffbe7;
            padding: 18px 22px;
            border-left: 5px solid #005772;
            margin: 28px 0;
            border-radius: 8px;
        }
        .itinerary-step {
            position: relative;
            padding-left: 90px;
            margin-bottom: 38px;
            background: #f8f8f8;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            padding-top: 18px;
            padding-bottom: 18px;
        }
        .itinerary-step-number {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            width: 54px;
            height: 54px;
            background: linear-gradient(135deg,#015569 60%,rgb(0, 149, 175) 100%);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: bold;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            border: 3px solid #fff;
        }
        .itinerary-step h4 {
            font-size: 1.15rem;
            font-weight: 600;
            margin-bottom: 7px;
        }
        .inclusion-list, .exclusion-list {
            list-style: none;
            padding: 0;
        }
        .inclusion-list li, .exclusion-list li {
            padding: 8px 0 8px 34px;
            position: relative;
            font-size: 1rem;
        }
        .inclusion-list li:before {
            content: "✓";
            color: #4CAF50;
            position: absolute;
            left: 0;
            font-weight: bold;
            font-size: 1.1em;
        }
        .exclusion-list li:before {
            content: "✗";
            color: #F44336;
            position: absolute;
            left: 0;
            font-weight: bold;
            font-size: 1.1em;
        }
        .related-tour-card {
            transition: box-shadow 0.3s, transform 0.3s;
            height: 100%;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.07);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .related-tour-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 8px 24px rgba(228,168,83,0.18);
        }
        .tour-img {
            position: relative;
            overflow: hidden;
            border-radius: 12px 12px 0 0;
        }
        .tour-img img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            transition: transform 0.3s;
        }
        .related-tour-card:hover .tour-img img {
            transform: scale(1.06);
        }
        .tour-badge {
            position: absolute;
            top: 16px;
            left: 16px;
            z-index: 2;
            font-size: 0.95rem;
            padding: 7px 16px;
            background: #005772;
            color: #fff;
            border-radius: 20px;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .tour-content {
            padding: 22px 18px 18px 18px;
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .tour-title {
            font-size: 1.13rem;
            font-weight: 700;
            margin-bottom: 7px;
            color: #222;
        }
        .tour-destination {
            font-size: 0.98rem;
            color: #888;
            margin-bottom: 10px;
        }
        .tour-meta {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }
        .tour-rating i {
            margin-right: 4px;
        }
        .th-btn.style3:hover {
            background: #c98a2b;
            color: #fff;
        }
        .tour-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(450px, 1fr));
            gap: 18px;
            margin: 30px 0;
        }
        .tour-gallery img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        .tour-gallery img:hover {
            transform: scale(1.04);
        }
        .booking-form {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .price-tag {
            font-size: 28px;
            color: #005772;
            font-weight: 700;
            margin: 15px 0;
            text-align: center;
        }
        .tour-info-list {
            margin-top: 30px;
            margin-bottom: 30px;
            display: flex; 
            gap: 5px;
            flex-wrap: wrap;
   
        }
        .info-item {
            background: #f8f8f8;
            border-radius: 8px;
            padding: 14px 18px;
            margin-bottom: 12px;
            display: flex;
 margin-inline: auto;
            align-items: center;
            width: 45%;
        }
        .info-icon {
            font-size: 1.5rem;
            color: #005772;
            margin-right: 16px;
        }
        .info-content h6 {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 2px;
        }
        .info-content p {
            font-size: 0.97rem;
            margin-bottom: 0;
        }
        @media (max-width: 991px) {
            .tour-gallery img {
                height: 140px;
            }
            .tour-img img {
                height: 160px;
            }
        }
        @media (max-width: 767px) {
            .itinerary-step {
                padding-left: 60px;
            }
            .itinerary-step-number {
                width: 38px;
                height: 38px;
                font-size: 15px;
                left: 8px;
            }
            .tour-gallery {
                grid-template-columns: 1fr 1fr;
            }
            .tour-img img {
                height: 120px;
            }
        }
        @media (max-width: 575px) {
            .tour-gallery {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <!-- include the preloader file -->
    <?php include 'preloader.php'; ?>

    <!-- include the sidemenu file -->
    <?php include 'sidebar.php'; ?>

    <!-- Include the header file -->
    <?php include 'header.php'; ?>

    <!-- Main -->
    <main>

        <!-- Tour Hero Section -->
        <section class="tour-hero" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <span class="tour-badge">Most Popular</span>
                        <h1 class="breadcumb-title">Golden Triangle Tour - 3 Days</h1>
                        <p class="text-white">Delhi - Agra - Jaipur | Discover India's iconic heritage in 3 unforgettable days</p>
                        <div class="d-flex justify-content-center flex-wrap mt-4">
                            <div class="mx-3 my-2"><i class="fas fa-clock me-2"></i> 3 Days / 2 Nights</div>
                            <div class="mx-3 my-2"><i class="fas fa-map-marker-alt me-2"></i> Delhi - Agra - Jaipur</div>
                            <div class="mx-3 my-2"><i class="fas fa-users me-2"></i> Small Groups</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Tour Details Section -->
        <section class="space-top space-extra-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- Overview -->
                        <div class="mb-5 pb-3 border-bottom">
                            <h2 class="sec-title mb-3">Tour Overview</h2>
                            <p>Embark on India's most iconic journey with our comprehensive 3-day Golden Triangle Tour. This meticulously crafted itinerary takes you through Delhi, Agra, and Jaipur - three cities that represent the pinnacle of India's rich cultural heritage, architectural marvels, and historical significance.</p>
                            <p>From the bustling streets of Delhi to the romantic Taj Mahal in Agra, and the vibrant Pink City of Jaipur, this tour offers an immersive experience of India's diverse landscapes, ancient monuments, and vibrant culture. Travel in comfort with our experienced guides who bring history to life through fascinating narratives and local insights.</p>

                            <div class="tour-highlight">
                                <h4 class="mb-3"><i class="fas fa-crown me-2"></i> Why Choose Our Golden Triangle Tour?</h4>
                                <p>Experience India's cultural heartland in just 3 days with expertly curated itineraries, comfortable accommodations, knowledgeable local guides, and seamless transportation. Perfect for first-time visitors seeking an authentic introduction to India's heritage.</p>
                            </div>
                        </div>

                        <!-- Tour Gallery -->
                        <div class="mb-5 pb-3 border-bottom">
                            <h2 class="sec-title mb-3">Tour Gallery</h2>
                            <div class="tour-gallery">
                                <img src="assets/img/golden_triangle_tour/taj-mahal-golden.jpg" alt="Taj Mahal - Symbol of Love">
                                <img src="assets/img/golden_triangle_tour/amber-fort.jpg" alt="Amber Fort Jaipur">
                                <img src="assets/img/golden_triangle_tour/red-fort-delhi.jpg" alt="Red Fort Delhi">
                                <img src="assets/img/golden_triangle_tour/golden-triangle-map.jpg" alt="Golden Triangle Route Map">
                            </div>
                        </div>

                        <!-- Highlights -->
                        <div class="mb-5 pb-3 border-bottom">
                            <h2 class="sec-title mb-3">Tour Highlights</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feature-item style2 d-flex align-items-start mb-4">
                                        <div class="feature-item_icon me-3" style="font-size: 1.5rem; color:#044e6b;">
                                            <i class="fas fa-monument"></i>
                                        </div>
                                        <div class="feature-item_content">
                                            <h4 class="box-title mb-1">Taj Mahal - Symbol of Love</h4>
                                            <p class="mb-0">Witness the breathtaking beauty of the Taj Mahal, a UNESCO World Heritage Site and one of the Seven Wonders of the World.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item style2 d-flex align-items-start mb-4">
                                        <div class="feature-item_icon me-3" style="font-size: 1.5rem; color:#044e6b;">
                                            <i class="fas fa-utensils"></i>
                                        </div>
                                        <div class="feature-item_content">
                                            <h4 class="box-title mb-1">Authentic Local Cuisine</h4>
                                            <p class="mb-0">Savor traditional Rajasthani and Mughal cuisine at carefully selected restaurants offering authentic flavors.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item style2 d-flex align-items-start mb-4">
                                        <div class="feature-item_icon me-3" style="font-size: 1.5rem; color:#044e6b;">
                                            <i class="fas fa-landmark"></i>
                                        </div>
                                        <div class="feature-item_content">
                                            <h4 class="box-title mb-1">Amber Fort & Palace</h4>
                                            <p class="mb-0">Explore the magnificent Amber Fort, a stunning blend of Hindu and Mughal architecture overlooking Maota Lake.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item style2 d-flex align-items-start mb-4">
                                        <div class="feature-item_icon me-3" style="font-size: 1.5rem; color:#044e6b;">
                                            <i class="fas fa-car"></i>
                                        </div>
                                        <div class="feature-item_content">
                                            <h4 class="box-title mb-1">Comfortable Transportation</h4>
                                            <p class="mb-0">Travel in air-conditioned vehicles with experienced drivers ensuring a smooth and comfortable journey throughout.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Quick Info Widget (moved from sidebar) -->
                        <div class="mb-5 pb-3">
                            <h2 class="sec-title mb-3">Tour Details</h2>
                            <div class="tour-info-list">
                                <div class="info-item d-flex align-items-center mb-2">
                                    <div class="info-icon me-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="mb-1">Duration</h6>
                                        <p class="mb-0">3 Days / 2 Nights</p>
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-center mb-2">
                                    <div class="info-icon me-3">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="mb-1">Group Size</h6>
                                        <p class="mb-0">Private tour for your party only</p>
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-center mb-2">
                                    <div class="info-icon me-3">
                                        <i class="fas fa-language"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="mb-1">Language</h6>
                                        <p class="mb-0">English, Hindi, Spanish (on request)</p>
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-center mb-2">
                                    <div class="info-icon me-3">
                                        <i class="fas fa-car"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="mb-1">Transport</h6>
                                        <p class="mb-0">AC Luxury Vehicle</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Itinerary -->
                        <div class="mb-5 pb-3 border-bottom">
                            <h2 class="sec-title mb-3">Tour Itinerary</h2>

                            <div class="itinerary-step">
                                <div class="itinerary-step-number">1</div>
                                <h4>Day 1: Arrival in Delhi - Capital City Exploration</h4>
                                <p>Upon arrival in Delhi, you will be greeted by our representative and transferred to your hotel. After freshening up, embark on a comprehensive city tour visiting Old Delhi's Red Fort, Jama Masjid, and Chandni Chowk market. In the evening, explore New Delhi's India Gate, Rashtrapati Bhavan, and Qutub Minar. Overnight stay in Delhi.</p>
                            </div>

                            <div class="itinerary-step">
                                <div class="itinerary-step-number">2</div>
                                <h4>Day 2: Delhi to Agra - Taj Mahal & Agra Fort</h4>
                                <p>After breakfast, drive to Agra (approximately 3-4 hours). Visit the magnificent Taj Mahal, a UNESCO World Heritage Site and symbol of eternal love. Explore Agra Fort, a massive red sandstone fort complex. Enjoy lunch at a local restaurant and visit Itmad-ud-Daulah (Baby Taj). Overnight stay in Agra.</p>
                            </div>

                            <div class="itinerary-step">
                                <div class="itinerary-step-number">3</div>
                                <h4>Day 3: Agra to Jaipur - Pink City Discovery</h4>
                                <p>After breakfast, drive to Jaipur (approximately 5-6 hours). Visit Amber Fort and Palace, perched on a hill overlooking Maota Lake. Explore the City Palace, Jantar Mantar observatory, and Hawa Mahal. Experience the vibrant local markets and culture. Transfer to airport/railway station for departure or extend your stay.</p>
                            </div>
                        </div>

                        <!-- Inclusions/Exclusions -->
                        <div class="mb-5 pb-3">
                            <h2 class="sec-title mb-3">What's Included</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Inclusions</h4>
                                    <ul class="inclusion-list">
                                        <li>Airport/railway station pick-up and drop-off</li>
                                        <li>Comfortable air-conditioned transportation</li>
                                        <li>Professional English-speaking tour guide</li>
                                        <li>All monument entrance fees (Taj Mahal, Agra Fort, Amber Fort, etc.)</li>
                                        <li>2 nights accommodation in 3-star hotels</li>
                                        <li>Daily breakfast and some meals as mentioned</li>
                                        <li>All applicable taxes and service charges</li>
                                        <li>24/7 customer support throughout the tour</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-3"><i class="fas fa-times-circle text-danger me-2"></i> Exclusions</h4>
                                    <ul class="exclusion-list">
                                        <li>International airfare and airport taxes</li>
                                        <li>Personal expenses and shopping</li>
                                        <li>Tips and gratuities for guide and driver</li>
                                        <li>Travel insurance and medical expenses</li>
                                        <li>Any additional meals or beverages not mentioned</li>
                                        <li>Camera fees at monuments (if applicable)</li>
                                        <li>Any services not specifically mentioned in inclusions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Booking Widget (moved from sidebar) -->
                        <div class="mb-5 pb-3">
                            <h2 class="sec-title mb-3">Book This Tour</h2>
                            <div class="price-tag">From $85 per person</div>
                            
                            <div class="booking-form mt-3">
                                <h4 class="mb-4">Enquiry Form</h4>
                                <form action="main.php" method="post" id="bookingForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="fullName">Full Name <span style="color:red">*</span></label>
                                                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="email">Email Address <span style="color:red">*</span></label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="you@email.com" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="phone">Phone Number <span style="color:red">*</span></label>
                                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91-XXXXXXXXXX" required pattern="^\+?\d{10,15}$">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="package">Select Tour Package <span style="color:red">*</span></label>
                                                <select class="form-control" id="package" name="package" required>
                                                    <option value="">Select a package</option>
                                                    <option value="Golden Triangle Tour 3 Days" selected>Golden Triangle Tour 3 Days</option>
                                                    <option value="Golden Triangle Tour 4 Days">Golden Triangle Tour 4 Days</option>
                                                    <option value="Golden Triangle Tour 5 Days">Golden Triangle Tour 5 Days</option>
                                                    <option value="Golden Triangle with Amritsar">Golden Triangle with Amritsar</option>
                                                    <option value="Golden Triangle with Pushkar">Golden Triangle with Pushkar</option>
                                                    <option value="Golden Triangle with Ranthambore">Golden Triangle with Ranthambore</option>
                                                    <option value="Custom/Other">Custom/Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="date">Preferred Date <span style="color:red">*</span></label>
                                                <input type="date" class="form-control" id="date" name="date" placeholder="mm/dd/yyyy" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="guests">Number of Guests <span style="color:red">*</span></label>
                                                <input type="number" class="form-control" id="guests" name="guests" placeholder="1" min="1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="message">Additional Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Any special requests or questions?"></textarea>
                                    </div>
                                    <button type="submit" class="th-btn w-100">Book Now</button>
                                </form>
                                <div id="bookingSuccess" class="alert mt-3 d-none" role="alert"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Tours -->
        <section class="space-top space-extra-bottom bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title-area text-center mb-4">
                            <span class="sub-title" style="color:#005772;font-weight:600;letter-spacing:1px;">Explore More Options</span>
                            <h2 class="sec-title" style="font-size:2.1rem;font-weight:700;">Other Golden Triangle Tours</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="related-tour-card">
                            <div class="tour-img">
                                <img src="assets/img/golden_triangle_tour/golden-tour-2.png" alt="Golden Triangle 4 Days">
                                <span class="tour-badge">4 Days Tour</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Golden Triangle Tour 4 Days</h3>
                                <p class="tour-destination">Delhi - Agra - Jaipur</p>
                                <div class="tour-meta">
                                    <div class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <span>4.8 (460+)</span>
                                    </div>
                                </div>
                                <a href="golden-triangle-tour-4-days.php" class="th-btn style3">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="related-tour-card">
                            <div class="tour-img">
                                <img src="assets/img/golden_triangle_tour/golden-tour-3.png" alt="Golden Triangle 5 Days">
                                <span class="tour-badge">5 Days Tour</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Golden Triangle Tour 5 Days</h3>
                                <p class="tour-destination">Delhi - Agra - Jaipur</p>
                                <div class="tour-meta">
                                    <div class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <span>4.9 (430+)</span>
                                    </div>
                                </div>
                                <a href="golden-triangle-tour-5-days.php" class="th-btn style3">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="related-tour-card">
                            <div class="tour-img">
                                <img src="assets/img/golden_triangle_tour/golden-amritsar.png" alt="Golden Triangle with Amritsar">
                                <span class="tour-badge">6 Days Tour</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Golden Triangle with Amritsar</h3>
                                <p class="tour-destination">Delhi - Agra - Jaipur - Amritsar</p>
                                <div class="tour-meta">
                                    <div class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <span>4.8 (290+)</span>
                                    </div>
                                </div>
                                <a href="golden-triangle-tour-with-amritsar.php" class="th-btn style3">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- include the footer here  -->
    <?php include 'footer.php'; ?>

    <!-- include the bottom script -->
    <?php include 'bottom-script.php'; ?>

    <script>
        // Handle booking form submission with AJAX
        document.getElementById('bookingForm')?.addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const submitBtn = form.querySelector('button[type="submit"]');
            const successAlert = document.getElementById('bookingSuccess');

            // Disable submit button and show loading
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Submitting...';

            // Prepare form data
            const formData = new FormData(form);

            // Send AJAX request
            fetch('main.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    successAlert.className = 'alert alert-success mt-3';
                    successAlert.textContent = data.message;
                    successAlert.classList.remove('d-none');

                    // Reset form
                    form.reset();

                    // Hide success message after 10 seconds
                    setTimeout(() => {
                        successAlert.classList.add('d-none');
                    }, 10000);
                } else {
                    // Show error message
                    successAlert.className = 'alert alert-danger mt-3';
                    successAlert.textContent = data.message;
                    successAlert.classList.remove('d-none');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                successAlert.className = 'alert alert-danger mt-3';
                successAlert.textContent = 'An error occurred. Please try again later.';
                successAlert.classList.remove('d-none');
            })
            .finally(() => {
                // Re-enable submit button
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Book Now';
            });
        });
    </script>

</body>

</html>