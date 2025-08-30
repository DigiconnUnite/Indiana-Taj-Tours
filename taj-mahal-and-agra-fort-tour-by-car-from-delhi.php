<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Taj Mahal and Agra Fort Day Tour from Delhi by Car | Taj Tour</title>
    <?php include 'links.php'; ?>
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Manrope', 'Inter', Arial, sans-serif;
        }
        .tour-header {
            background: linear-gradient(90deg, #e0eafc 0%, #cfdef3 100%);
            padding: 40px 0 30px 0;
            text-align: center;
        }
        .tour-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 10px;
        }
        .tour-header .route {
            font-size: 1.1rem;
            color: #4a5568;
            margin-bottom: 0;
        }
        .tour-details-section {
            max-width: 1200px;
            margin: 30px auto;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.07);
            padding: 32px 24px;
            display: flex;
            flex-wrap: wrap;
            gap: 32px;
        }
        .tour-main-content {
            flex: 2 1 500px;
            min-width: 320px;
        }
        .tour-sidebar {
            flex: 1 1 320px;
            min-width: 280px;
            background: #f4f7fb;
            border-radius: 12px;
            padding: 24px 20px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.04);
        }
        .tour-meta {
            display: flex;
            gap: 24px;
            margin-bottom: 24px;
            flex-wrap: wrap;
        }
        .tour-meta-item {
            background: #e9f5ff;
            border-radius: 8px;
            padding: 10px 18px;
            font-size: 1rem;
            color: #2563eb;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .section-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #1a202c;
            margin-top: 32px;
            margin-bottom: 16px;
        }
        .tour-overview {
            color: #444;
            font-size: 1.08rem;
            line-height: 1.7;
            margin-bottom: 18px;
        }
        .show-more {
            color: #2563eb;
            cursor: pointer;
            font-weight: 600;
            display: inline-block;
            margin-top: 8px;
        }
        .tour-highlights {
            list-style: none;
            padding: 0;
            margin: 0 0 24px 0;
        }
        .tour-highlights li {
            margin-bottom: 10px;
            padding-left: 24px;
            position: relative;
            color: #2563eb;
            font-weight: 500;
        }
        .tour-highlights li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: bold;
        }
        .itinerary-step {
            margin-bottom: 24px;
            padding-left: 0;
        }
        .itinerary-step .step-number {
            background: #2563eb;
            color: #fff;
            border-radius: 50%;
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-right: 14px;
            font-size: 1.1rem;
        }
        .itinerary-step .step-title {
            font-weight: 600;
            color: #1a202c;
            font-size: 1.08rem;
        }
        .itinerary-step .step-desc {
            color: #444;
            margin-left: 46px;
            margin-top: 2px;
            font-size: 0.98rem;
        }
        .inclusions-list, .exclusions-list {
            list-style: none;
            padding: 0;
            margin: 0 0 12px 0;
        }
        .inclusions-list li, .exclusions-list li {
            margin-bottom: 8px;
            padding-left: 22px;
            position: relative;
            font-size: 1rem;
        }
        .inclusions-list li:before {
            content: "✔";
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: bold;
        }
        .exclusions-list li:before {
            content: "✖";
            position: absolute;
            left: 0;
            color: #ef4444;
            font-weight: bold;
        }
        .enquiry-form label {
            font-weight: 600;
            color: #1a202c;
            margin-bottom: 4px;
        }
        .enquiry-form input, .enquiry-form textarea {
            width: 100%;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 8px 12px;
            margin-bottom: 14px;
            font-size: 1rem;
            background: #fff;
        }
        .enquiry-form textarea {
            min-height: 70px;
            resize: vertical;
        }
        .enquiry-form button {
            background: #2563eb;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 10px 28px;
            font-size: 1.08rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .enquiry-form button:hover {
            background: #1d4ed8;
        }
        .related-tours {
            margin-top: 40px;
        }
        .related-tours-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 18px;
        }
        .related-tours-list {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }
        @media (min-width: 900px) {
            .related-tours-list {
                flex-direction: row;
            }
        }
        .related-tour-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.06);
            padding: 18px 16px;
            flex: 1 1 260px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            min-width: 220px;
            transition: box-shadow 0.2s;
        }
        .related-tour-card:hover {
            box-shadow: 0 6px 24px rgba(37,99,235,0.10);
        }
        .related-tour-img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 12px;
            background: #e5e7eb;
        }
        .related-tour-title {
            font-size: 1.08rem;
            font-weight: 600;
            color: #2563eb;
            margin-bottom: 4px;
        }
        .related-tour-route {
            font-size: 0.98rem;
            color: #4b5563;
            margin-bottom: 6px;
        }
        .related-tour-rating {
            font-size: 0.95rem;
            color: #f59e42;
            font-weight: 600;
            margin-top: auto;
        }
        .related-tour-rating span {
            color: #2563eb;
            font-weight: 500;
            margin-left: 4px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="tour-header">
        <h1>Taj Mahal and Agra Fort Day Tour from Delhi by Car</h1>
        <p class="route">Delhi &rarr; Agra &rarr; Delhi</p>
    </div>

    <div class="tour-details-section">
        <div class="tour-main-content">
            <div class="tour-meta">
                <div class="tour-meta-item"><i class="fa fa-clock"></i> 1 Day Tour</div>
                <div class="tour-meta-item"><i class="fa fa-map-marker-alt"></i> Pickup: Delhi</div>
                <div class="tour-meta-item"><i class="fa fa-map-marker-alt"></i> Drop: Delhi</div>
            </div>

            <div>
                <div class="section-title">Tour Overview</div>
                <div class="tour-overview" id="tour-overview">
                    The Taj Mahal Tour by Car from Delhi is designed with your comfort in mind, ensuring a seamless and luxurious experience from start to finish. One of our most sought-after packages, this tour guarantees a memorable journey in an air-conditioned vehicle from Delhi to Agra and back. During this tour, you will witness the splendor of the Taj Mahal, explore the historic Agra Fort, and visit the exquisite Itimad-ud-Daulah, often referred to as the Baby Taj. Choose this package to make your trip to India truly unforgettable.
                    <span id="more-overview" style="display:none;">
                        <br><br>
                        <b>Show more...</b>
                    </span>
                </div>
            </div>

            <div>
                <div class="section-title">Tour Highlights</div>
                <ul class="tour-highlights">
                    <li>Marvel at the iconic Taj Mahal.</li>
                    <li>Discover the historical significance of the 16th-century Agra Fort.</li>
                    <li>Visit the elegant marble tomb of Itimad-ud-Daulah, also known as the Baby Taj.</li>
                    <li>Gain insights from a personal guide who will share the rich history of these sites.</li>
                    <li>Travel in comfort with a private, air-conditioned vehicle for your round-trip journey from Delhi.</li>
                </ul>
            </div>

            <div>
                <div class="section-title">Tour Itinerary</div>
                <div class="itinerary-step">
                    <span class="step-number">1</span>
                    <span class="step-title">6:30 AM: Pickup from Anywhere in Delhi/NCR</span>
                    <div class="step-desc">
                        Our driver will arrive at your hotel at the designated time to pick you up for your journey. Relax in a comfortable, air-conditioned car as you embark on the 3-hour drive from Delhi NCR to Agra.
                    </div>
                </div>
                <div class="itinerary-step">
                    <span class="step-number">2</span>
                    <span class="step-title">9:30 AM: Experience the Majestic Taj Mahal</span>
                    <div class="step-desc">
                        Upon your arrival in Agra around 9:30 AM, your first stop will be the breathtaking Taj Mahal. Spend approximately three hours exploring this magnificent monument. A knowledgeable tour guide will accompany you, helping you discover key highlights, capture unforgettable photos, and create lasting memories.
                    </div>
                </div>
                <div class="itinerary-step">
                    <span class="step-number">3</span>
                    <span class="step-title">11:30 AM: Discover the Alluring Agra Fort</span>
                    <div class="step-desc">
                        After visiting the Taj Mahal, head to the impressive Agra Fort, often referred to as the Walled City due to its red sandstone construction. Take about an hour to explore this fascinating historical site.
                    </div>
                </div>
                <div class="itinerary-step">
                    <span class="step-number">4</span>
                    <span class="step-title">12:30 PM: Lunch at a 5-Star Hotel</span>
                    <div class="step-desc">
                        Following your exploration of Agra Fort, enjoy a lunch break at a specialty multi-cuisine restaurant, where you can savor local flavors in a luxurious setting.
                    </div>
                </div>
                <div class="itinerary-step">
                    <span class="step-number">5</span>
                    <span class="step-title">1:30 PM: Visit the Baby Taj (Itimad-ud-Daulah)</span>
                    <div class="step-desc">
                        After lunch, proceed to visit Itimad-ud-Daulah, affectionately known as the Baby Taj. This exquisite tomb is often considered a smaller version of the Taj Mahal, and it’s a must-see for visitors.
                    </div>
                </div>
                <div class="itinerary-step">
                    <span class="step-number">6</span>
                    <span class="step-title">2:30 PM: Return Journey to Delhi</span>
                    <div class="step-desc">
                        After a fulfilling day of exploring Agra’s most iconic sites and enjoying a delicious lunch, you’ll board your vehicle for the return journey to Delhi NCR.
                    </div>
                </div>
                <div class="itinerary-step">
                    <span class="step-number">7</span>
                    <span class="step-title">5:30 PM: Drop Off in Delhi NCR</span>
                    <div class="step-desc">
                        Upon your arrival in Delhi, our driver will drop you off at your chosen location, whether it’s your hotel or the airport, concluding your memorable tour.
                    </div>
                </div>
            </div>

            <div class="tour-meta" style="margin-top:32px;">
                <div class="tour-meta-item"><i class="fa fa-check-circle"></i> Inclusions</div>
                <div class="tour-meta-item"><i class="fa fa-times-circle"></i> Exclusions</div>
            </div>
            <div style="display:flex;gap:32px;flex-wrap:wrap;">
                <ul class="inclusions-list" style="flex:1 1 220px;">
                    <li>Hotel/Airport pick-up and drop-off</li>
                    <li>Private air-conditioned car with a driver</li>
                    <li>Live tour guide</li>
                    <li>All Monument Entrance Tickets</li>
                    <li>Lunch at restaurant</li>
                    <li>Complimentary water bottles during the journey</li>
                    <li>Driver allowances, parking fees, taxes, and tolls</li>
                </ul>
                <ul class="exclusions-list" style="flex:1 1 220px;">
                    <li>Tips / Gratuities to guide and driver</li>
                    <li>Any kind of meals and drinks</li>
                    <li>Any kind of personal expenses</li>
                </ul>
            </div>
        </div>
        <div class="tour-sidebar">
            <div class="section-title" style="margin-top:0;">Enquiry Form</div>
            <form class="enquiry-form" method="post" action="enquiry-handler.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="eg. : John Doe" required>
                <label for="email">Email Id</label>
                <input type="email" id="email" name="email" placeholder="eg. : johndoe@gmail.com" required>
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="eg. : +910000000000" required>
                <label for="tour_date">Tour Date</label>
                <input type="date" id="tour_date" name="tour_date" required>
                <label for="pax">No. of Pax</label>
                <input type="number" id="pax" name="pax" min="1" placeholder="eg. : 2" required>
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Message"></textarea>
                <button type="submit">Send Enquiry</button>
            </form>
        </div>
    </div>

    <div class="related-tours">
        <div class="related-tours-title" style="text-align:center;">Related Tours</div>
        <div class="related-tours-list">
            <div class="related-tour-card">
                <img src="assets/images/taj-mahal-sunrise-tour.jpg" alt="Taj Mahal Sunrise Tour from Delhi" class="related-tour-img">
                <div class="related-tour-title">Taj Mahal Sunrise Tour from Delhi</div>
                <div class="related-tour-route">Delhi &rarr; Agra &rarr; Delhi</div>
                <div class="related-tour-rating">
                    <i class="fa fa-star"></i> 4.8 <span>(580+)</span>
                </div>
            </div>
            <div class="related-tour-card">
                <img src="assets/images/taj-mahal-gatimaan-express.jpg" alt="Taj Mahal Tour by Gatimaan Express Train" class="related-tour-img">
                <div class="related-tour-title">Taj Mahal Tour by Gatimaan Express Train</div>
                <div class="related-tour-route">Delhi &rarr; Agra &rarr; Delhi</div>
                <div class="related-tour-rating">
                    <i class="fa fa-star"></i> 4.8 <span>(750+)</span>
                </div>
            </div>
            <div class="related-tour-card">
                <img src="assets/images/taj-mahal-luxury-tour.jpg" alt="Taj Mahal Luxury Tour by Premium Car from Delhi" class="related-tour-img">
                <div class="related-tour-title">Taj Mahal Luxury Tour by Premium Car from Delhi</div>
                <div class="related-tour-route">Delhi &rarr; Agra &rarr; Delhi</div>
                <div class="related-tour-rating">
                    <i class="fa fa-star"></i> 4.9 <span>(340+)</span>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
