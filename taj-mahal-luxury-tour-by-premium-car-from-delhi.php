<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        Taj Mahal Luxury Tour by Premium Car from Delhi | Indiana Taj Tour
    </title>
    <meta name="author" content="Indiana Taj Tour" />
    <meta name="description" content="Experience the Taj Mahal in luxury with our premium car tour from Delhi. Enjoy private transport, expert guides, and exclusive access to this UNESCO site." />
    <meta name="keywords" content="Taj Mahal luxury tour, premium car tour Delhi, Taj Mahal private tour, luxury Taj Mahal visit" />
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
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/tours/taj-sunrise-hero.jpg') center/cover no-repeat;
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
                        <h1 class="breadcumb-title">Taj Mahal Luxury Tour by Premium Car from Delhi</h1>
                        <br>
                        <p class="text-white">Delhi - Agra - Delhi | Witness the magic of sunrise at one of the Seven Wonders of the World</p>
                        <div class="d-flex justify-content-center flex-wrap mt-4">
                            <div class="mx-3 my-2"><i class="fas fa-clock me-2"></i> 1 Day Tour</div>
                            <div class="mx-3 my-2"><i class="fas fa-map-marker-alt me-2"></i> Pickup & Drop: Delhi</div>
                            <div class="mx-3 my-2"><i class="fas fa-users me-2"></i> Private Tour</div>
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
                            <p>Indulge in a luxurious journey on your Taj Mahal Tour by Luxury Car - Mercedes, BMW, or Audi - from Delhi to Agra. Explore the majestic Taj Mahal and its beautifully landscaped gardens. After taking in the splendor of this iconic monument, enjoy a sumptuous lunch at a nearby 5-star restaurant. </p>
                            <p>Your adventure continues with a visit to the historic Agra Fort before returning to your hotel or the airport. This tour can be tailored to suit your preferences and needs, ensuring a personalized and unforgettable experience.</p>
                            
                            <div class="tour-highlight">
                                <h4 class="mb-3"><i class="fas fa-bolt me-2"></i> Why Choose This Tour?</h4>
                                <p>Experience the Taj Mahal in the magical morning light with fewer crowds, expert guidance, and luxurious comfort throughout your journey.</p>
                            </div>
                        </div>

                        <!-- Tour Gallery -->
                        <div class="mb-5 pb-3 border-bottom">
                            <h2 class="sec-title mb-3">Tour Gallery</h2>
                            <div class="tour-gallery">
                                <img src="assets/img/taj_mahal_tour/taj_mahal-2.png" alt="Taj Mahal at sunrise">
                                <img src="assets/img/taj_mahal_tour/agra-fort.jpg" alt="Agra Fort">
                                <img src="assets/img/taj_mahal_tour/car.png" alt="Luxury Car">
                                <img src="assets/img/taj_mahal_tour/food.png" alt="Breakfast at five-star hotel">
                            </div>
                        </div>

                        <!-- Highlights -->
                        <div class="mb-5 pb-3 border-bottom">
                            <h2 class="sec-title mb-3">Tour Highlights</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feature-item style2 d-flex align-items-start mb-4">
                                        <div class="feature-item_icon me-3" style="font-size: 1.5rem; color:#044e6b;">
                                            <i class="fas fa-sun"></i>
                                        </div>
                                        <div class="feature-item_content">
                                            <h4 class="box-title mb-1">Sunrise at Taj Mahal</h4>
                                            <p class="mb-0">Discover the breathtaking beauty of the Taj Mahal, India's most iconic landmark.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item style2 d-flex align-items-start mb-4">
                                        <div class="feature-item_icon me-3" style="font-size: 1.5rem; color:#044e6b;">
                                            <i class="fas fa-utensils"></i>
                                        </div>
                                        <div class="feature-item_content">
                                            <h4 class="box-title mb-1">Gourmet Breakfast</h4>
                                            <p class="mb-0">Visit the grand Mughal palace, Agra Fort.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item style2 d-flex align-items-start mb-4">
                                        <div class="feature-item_icon me-3" style="font-size: 1.5rem; color:#044e6b;">
                                            <i class="fas fa-landmark"></i>
                                        </div>
                                        <div class="feature-item_content">
                                            <h4 class="box-title mb-1">Agra Fort Exploration</h4>
                                            <p class="mb-0">Explore the historic Agra Fort, a UNESCO World Heritage Site with rich history.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item style2 d-flex align-items-start mb-4">
                                        <div class="feature-item_icon me-3" style="font-size: 1.5rem; color:#044e6b;">
                                            <i class="fas fa-user-shield"></i>
                                        </div>
                                        <div class="feature-item_content">
                                            <h4 class="box-title mb-1">Exclusive Access</h4>
                                            <p class="mb-0">Enjoy exclusive access to the Taj Mahal before the crowds arrive for a more intimate experience.</p>
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
                                        <p class="mb-0">1 Day (Approx. 12 hours)</p>
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
                                <h4>7:00 AM: Pick-up from your hotel in Delhi/NCR</h4>
                                <p>Your day begins with a 7:00 AM pick-up from your hotel in Delhi/NCR. Sit back and relax as you embark on a 3-hour drive to Agra in a luxurious, air-conditioned car.</p>
                            </div>
                            
                            <div class="itinerary-step">
                                <div class="itinerary-step-number">2</div>
                                <h4>09:00 AM Arrive in Agra and Visit the Taj Mahal</h4>
                                <p>Upon arrival in Agra, meet your guide and proceed to explore the Taj Mahal. Spend up to three hours marveling at this magnificent structure and its surroundings.</p>
                            </div>
                            
                            <div class="itinerary-step">
                                <div class="itinerary-step-number">3</div>
                                <h4>10:00 AM: Breakfast</h4>
                                <p>After exploring the Taj Mahal, head to a five-star hotel for a delicious breakfast. Savor a variety of Indian and continental dishes in a luxurious setting.</p>
                            </div>
                            
                            <div class="itinerary-step">
                                <div class="itinerary-step-number">4</div>
                                <h4>12:00 AM: Lunch at a 5-Star Hotel</h4>
                                <p>After your visit to the Taj Mahal, enjoy a delicious lunch at a 5-star hotel. Savor a variety of Indian and continental dishes that will delight your taste buds.</p>
                            </div>
                            
                            <div class="itinerary-step">
                                <div class="itinerary-step-number">5</div>
                                <h4>01:00 PM: Return Journey to Delhi</h4>
                                <p>After a fulfilling tour of Agra's iconic sites and a delectable breakfast, board your luxury vehicle for the return journey to Delhi NCR.</p>
                            </div>
                            
                            <div class="itinerary-step">
                                <div class="itinerary-step-number">6</div>
                                <h4>08:00 PM: Drop Off in Delhi NCR</h4>
                                <p>Arrive back in Delhi around 2:00 PM, where our driver will drop you off at your preferred location, whether it's your hotel or the airport, concluding your memorable sunrise tour.</p>
                            </div>
                        </div>

                        <!-- Inclusions/Exclusions -->
                        <div class="mb-5 pb-3">
                            <h2 class="sec-title mb-3">What's Included</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Inclusions</h4>
                                    <ul class="inclusion-list">
                                        <li>Hotel/Airport pick-up and drop-off</li>
                                        <li>Private air-conditioned car with a driver</li>
                                        <li>Live tour guide</li>
                                        <li>All Monument Entrance Tickets</li>
                                        <li>Lunch at restaurant</li>
                                        <li>Complimentary water bottles during the journey</li>
                                        <li>Driver allowances, parking fees, taxes, and tolls</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-3"><i class="fas fa-times-circle text-danger me-2"></i> Exclusions</h4>
                                    <ul class="exclusion-list">
                                        <li>Tips / Gratuities to guide and driver</li>
                                        <li>Any kind of meals and drinks</li>
                                        <li>Any kind of personal expenses</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Booking Widget (moved from sidebar) -->
                        <div class="mb-5 pb-3">
                            <h2 class="sec-title mb-3">Book This Tour</h2>
                            
                            <div class="booking-form mt-3">
                                <h4 class="mb-4">Enquiry Form</h4>
                                <form>
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
                                                    <option value="Taj Mahal Sunrise Tour by Car from Delhi">Taj Mahal Sunrise Tour by Car from Delhi</option>
                                                    <option value="Taj Mahal Day Tour by Car from Delhi">Taj Mahal Day Tour by Car from Delhi</option>
                                                    <option value="Taj Mahal Tour by Gatimaan Express Train">Taj Mahal Tour by Gatimaan Express Train</option>
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
                            <span class="sub-title" style="color:#005772;font-weight:600;letter-spacing:1px;">Explore More</span>
                            <h2 class="sec-title" style="font-size:2.1rem;font-weight:700;">Related Tours</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="related-tour-card">
                            <div class="tour-img">
                                <img src="assets/img/taj_mahal_tour/taj_mahal-1.png" alt="Taj Mahal Day Tour">
                                <span class="tour-badge">01 Day Tour</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Taj Mahal Day Tour by Car from Delhi</h3>
                                <p class="tour-destination">Delhi - Agra - Delhi</p>
                                <div class="tour-meta">
                                    <div class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <span>4.7 (577+)</span>
                                    </div>
                                </div>
                                <a href="taj-day-tour.html" class="th-btn style3">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="related-tour-card">
                            <div class="tour-img">
                                <img src="assets/img/taj_mahal_tour/taj_mahal-2.png" alt="Gatimaan Express Tour">
                                <span class="tour-badge">01 Day Tour</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Taj Mahal Tour by Gatimaan Express Train</h3>
                                <p class="tour-destination">Delhi - Agra - Delhi</p>
                                <div class="tour-meta">
                                    <div class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <span>4.8 (750+)</span>
                                    </div>
                                </div>
                                <a href="gatimaan-tour.html" class="th-btn style3">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="related-tour-card">
                            <div class="tour-img">
                                <img src="assets/img/taj_mahal_tour/taj_mahal-4.png" alt="Luxury Taj Tour">
                                <span class="tour-badge">01 Day Tour</span>
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title">Taj Mahal Luxury Tour by Premium Car</h3>
                                <p class="tour-destination">Delhi - Agra - Delhi</p>
                                <div class="tour-meta">
                                    <div class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <span>4.9 (420+)</span>
                                    </div>
                                </div>
                                <a href="luxury-taj-tour.html" class="th-btn style3">View Details</a>
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

</body>

</html>