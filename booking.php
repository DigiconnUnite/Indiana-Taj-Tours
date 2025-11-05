<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        Book Your Tour - Indiana Taj Tour | Reserve Taj Mahal & Golden Triangle Packages
    </title>
    <meta name="author" content="Indiana Taj Tour" />
    <meta name="description" content="Book your dream India tour with Indiana Taj Tour. Reserve Taj Mahal, Delhi, Jaipur packages online. Secure booking, expert guides, and unforgettable experiences." />
    <meta name="keywords" content="book tour, Indiana Taj Tour booking, Taj Mahal tour booking, Golden Triangle booking, India travel booking" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="canonical" href="https://indianatajtours.com/booking.php" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.webp" />
    <meta name="theme-color" content="#ffffff" />

    <!-- include the links file  -->
    <?php include "links.php" ?>

    <style>
        /* Enhanced Booking Page Styles */
        .booking-hero {
            position: relative;
            padding: 140px 0 100px;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('assets/img/bg/banner-img.webp') center/cover no-repeat;
            color: white;
            text-align: center;
            overflow: hidden;
        }
        .booking-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(17, 61, 72, 0.1), rgba(0, 0, 0, 0.3));
            z-index: 1;
        }
        .booking-hero .container {
            position: relative;
            z-index: 2;
        }
        .booking-hero h1 {
            font-size: 3rem;
            font-weight: 800;
            color: white;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .booking-hero p {
            font-size: 1.3rem;
            color: white;
            opacity: 0.7;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Enhanced Form Container */
        .booking-form-container {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(17,61,72,0.15);
            border: 1px solid rgba(0,0,0,0.05);
            overflow: hidden;
            position: relative;
        }
        .booking-form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #113d48, #0a2a35);
        }

        .booking-form-header {
            background: linear-gradient(135deg, #113d48 0%, #0a2a35 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .booking-form-header h2 {
            color: white;
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .booking-form-header p {
            opacity: 0.9;
              color: white;
            font-size: 1.1rem;
        }

        /* Enhanced Form Fields */
        .form-floating {
            margin-bottom: 20px;
        }
        .form-floating > label {
            padding: 1rem 0.75rem;
            color: #6c757d;
            font-weight: 500;
        }
        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 1rem 0.75rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255,255,255,0.8);
            backdrop-filter: blur(10px);
        }
        .form-control:focus, .form-select:focus {
            border-color: #113d48;
            box-shadow: 0 0 0 0.2rem rgba(17, 61, 72, 0.25);
            background: white;
            transform: translateY(-2px);
        }
        .form-control:hover, .form-select:hover {
            border-color: #113d48;
            background: white;
        }

        /* Enhanced Tour Info Display */
        .tour-info-display {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border: 1px solid rgba(17,61,72,0.1);
            border-radius: 15px;
            padding: 25px;
            margin: 20px 0;
            display: none;
            position: relative;
            overflow: hidden;
        }
        .tour-info-display::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #113d48, #0a2a35);
        }
        .tour-info-display.show {
            display: block;
            animation: slideIn 0.5s ease-out;
        }
        .tour-info-display h6 {
            color: #113d48;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }
        .tour-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }
        .info-item {
            background: rgba(17,61,72,0.05);
            border-radius: 10px;
            padding: 15px;
            border: 1px solid rgba(17,61,72,0.08);
        }
        .info-label {
            font-weight: 600;
            color: #113d48;
            font-size: 0.9rem;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .info-value {
            color: #495057;
            font-size: 1rem;
            font-weight: 500;
        }

        /* Enhanced Submit Button */
        .booking-submit-btn {
            background: linear-gradient(135deg, #113d48 0%, #0a2a35 100%);
            border: none;
            border-radius: 50px;
            padding: 18px 40px;
            font-size: 1.2rem;
            font-weight: 700;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(17,61,72,0.3);
            position: relative;
            overflow: hidden;
        }
        .booking-submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        .booking-submit-btn:hover::before {
            left: 100%;
        }
        .booking-submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(17,61,72,0.4);
        }
        .booking-submit-btn:active {
            transform: translateY(-1px);
        }

        /* Enhanced Alert Messages */
        .alert {
            border-radius: 12px;
            border: none;
            padding: 20px;
            font-weight: 500;
            position: relative;
            overflow: hidden;
        }
        .alert::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
        }
        .alert-success::before {
            background: #28a745;
        }
        .alert-danger::before, .alert-warning::before {
            background: #dc3545;
        }

        /* Loading Animation */
        .btn-loading {
            position: relative;
            color: transparent !important;
        }
        .btn-loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%;
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        /* Form Steps Indicator */
        .form-steps {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            margin: 0 10px;
            position: relative;
        }
        .step.active {
            background: linear-gradient(135deg, #113d48, #0a2a35);
            color: white;
        }
        .step.completed {
            background: #28a745;
            color: white;
        }
        .step::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 100%;
            width: 30px;
            height: 2px;
            background: #e9ecef;
            margin-left: 10px;
        }
        .step:last-child::after {
            display: none;
        }

        /* Enhanced Responsive Design */
        @media (max-width: 768px) {
            .booking-hero {
                padding: 100px 0 70px;
            }
            .booking-hero h1 {
                font-size: 2.2rem;
            }
            .booking-hero p {
                font-size: 1.1rem;
            }
            .booking-form-header {
                padding: 20px;
            }
            .booking-form-header h2 {
                font-size: 1.8rem;
            }
            .tour-info-grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }
            .booking-submit-btn {
                width: 100%;
                padding: 15px 30px;
            }
        }

        /* Animations */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #113d48;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #0a2a35;
        }

        /* Override Bootstrap Validation Icons - Remove excessive red/green icons */
        .form-control.is-valid,
        .form-select.is-valid,
        .form-control.is-invalid,
        .form-select.is-invalid {
            background-image: none !important;
            background-repeat: no-repeat !important;
            background-position: right calc(0.375em + 0.1875rem) center !important;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem) !important;
        }

        /* Subtle validation feedback with only border colors */
        .form-control.is-valid {
            border-color: #198754 !important;
            box-shadow: 0 0 0 0.1rem rgba(25, 135, 84, 0.1) !important;
        }

        .form-control.is-invalid {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.1rem rgba(220, 53, 69, 0.1) !important;
        }

        .form-select.is-valid {
            border-color: #198754 !important;
        }

        .form-select.is-invalid {
            border-color: #dc3545 !important;
        }

        /* Remove validation icons completely for cleaner look */
        .form-control.is-valid::after,
        .form-control.is-invalid::after,
        .form-select.is-valid::after,
        .form-select.is-invalid::after {
            display: none !important;
        }

        /* Subtle validation feedback on focus */
        .form-control.is-valid:focus {
            border-color: #198754 !important;
            box-shadow: 0 0 0 0.15rem rgba(25, 135, 84, 0.15) !important;
        }

        .form-control.is-invalid:focus {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 0.15rem rgba(220, 53, 69, 0.15) !important;
        }

        /* Disable real-time validation to prevent excessive feedback */
        .form-control.is-valid:not(:focus),
        .form-select.is-valid:not(:focus) {
            border-color: #dee2e6 !important;
            box-shadow: none !important;
        }

        .form-control.is-invalid:not(:focus),
        .form-select.is-invalid:not(:focus) {
            border-color: #dee2e6 !important;
            box-shadow: none !important;
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

<main>
    <!-- Booking Hero Section -->
    <section class="booking-hero">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="fade-in-up">Book Your Dream Tour</h1>
                    <p class="fade-in-up">Reserve your unforgettable journey with Indiana Taj Tour. Our expert team will ensure you have the best experience possible.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Booking Section -->
    <section class="space-top space-extra-bottom" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="booking-form-container fade-in-up">
                        <div class="booking-form-header">
                            <h2>Reserve Your Experience</h2>
                            <p>Fill out the form below and our team will contact you within 24 hours to confirm your booking details.</p>
                        </div>

                        <form action="main.php" method="post" class="p-4 p-md-5" id="bookingForm">
                            <!-- Form Steps Indicator -->
                            <div class="form-steps mb-4">
                                <div class="step active" data-step="1">1</div>
                                <div class="step" data-step="2">2</div>
                                <div class="step" data-step="3">3</div>
                            </div>

                            <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" required>
                                    <label for="name">Full Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="you@email.com" required>
                                    <label for="email">Email Address <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91-XXXXXXXXXX" required>
                                    <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="tour" name="tour" required>
                                        <option value="" disabled selected>Choose your tour package</option>
                                        <optgroup label="Taj Mahal Tours">
                                            <option value="Taj Mahal Day Tour by Car from Delhi">Taj Mahal Day Tour by Car from Delhi</option>
                                            <option value="Taj Mahal Sunrise Tour from Delhi">Taj Mahal Sunrise Tour from Delhi</option>
                                            <option value="Taj Mahal Tour by Gatimaan Express Train">Taj Mahal Tour by Gatimaan Express Train</option>
                                            <option value="Taj Mahal Luxury Tour by Premium Car from Delhi">Taj Mahal Luxury Tour by Premium Car from Delhi</option>
                                        </optgroup>
                                        <optgroup label="Delhi City Tours">
                                            <option value="Full Day Old and New Delhi City Tour">Full Day Old and New Delhi City Tour</option>
                                            <option value="Half Day Delhi City Tour">Half Day Delhi City Tour</option>
                                        </optgroup>
                                        <optgroup label="Jaipur Tours">
                                            <option value="Full Day Jaipur City Tour by Car">Full Day Jaipur City Tour by Car</option>
                                            <option value="Jaipur Tour from Delhi by Car">Jaipur Tour from Delhi by Car</option>
                                        </optgroup>
                                        <optgroup label="✨ Golden Triangle Tours">
                                            <option value="Golden Triangle Tour 3 Days">Golden Triangle Tour 3 Days</option>
                                            <option value="Golden Triangle Tour 4 Days">Golden Triangle Tour 4 Days</option>
                                            <option value="Golden Triangle Tour 5 Days">Golden Triangle Tour 5 Days</option>
                                            <option value="Golden Triangle Tour with Amritsar">Golden Triangle Tour with Amritsar</option>
                                            <option value="Golden Triangle Tour with Pushkar">Golden Triangle Tour with Pushkar</option>
                                            <option value="Golden Triangle Tour with Ranthambore">Golden Triangle Tour with Ranthambore</option>
                                            <option value="Golden Triangle Tour with Udaipur">Golden Triangle Tour with Udaipur</option>
                                            <option value="Golden Triangle Tour with Varanasi">Golden Triangle Tour with Varanasi</option>
                                        </optgroup>
                                        <optgroup label=" Other Options">
                                            <option value="Custom Tour Package">Custom Tour Package</option>
                                        </optgroup>
                                    </select>
                                <label for="tour">Select Tour Package <span class="text-danger">*</span></label>
                            </div>
                        </div>

                        <!-- Enhanced Tour Information Display -->
                        <div class="col-12">
                            <div class="tour-info-display" id="tourInfoDisplay">
                                <h6><i class="fas fa-info-circle me-2"></i>Tour Information</h6>
                                <div class="tour-info-grid">
                                    <div class="info-item">
                                        <div class="info-label">Duration</div>
                                        <div class="info-value" id="infoDuration">-</div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-label">Destination</div>
                                        <div class="info-value" id="infoDestination">-</div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-label">Category</div>
                                        <div class="info-value" id="infoCategory">-</div>
                                    </div>
                                    <div class="info-item">
                                        <div class="info-label">Suggested Group</div>
                                        <div class="info-value" id="infoGuests">-</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
                                <label for="date">Preferred Date <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="guests" name="guests" min="1" max="50" required value="1">
                                <label for="guests">Number of Guests <span class="text-danger">*</span></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" style="height: 100px;" placeholder="Any special requests or questions?"></textarea>
                                <label for="message">Additional Message</label>
                            </div>
                        </div>

                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="booking-submit-btn">
                                <i class="fas fa-calendar-check me-2"></i>Book Your Tour Now
                            </button>
                        </div>
                        </form>

                        <div id="bookingSuccess" class="alert alert-success mt-4 d-none fade-in-up" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            <strong>Thank you for your booking!</strong> We will contact you within 24 hours to confirm your reservation details.
                        </div>

                        <!-- Debug Panel (remove in production) -->
                        <!-- <div id="debugPanel" class="mt-4 p-3 bg-light border rounded d-none">
                            <h6 class="text-muted mb-2"><i class="fas fa-bug me-2"></i>Debug Information</h6>
                            <div class="small text-muted mb-2">
                                <strong>Current URL:</strong> <span id="debugURL">-</span>
                            </div>
                            <div class="small text-muted mb-2">
                                <strong>Tour Parameter:</strong> <span id="debugTourParam">-</span>
                            </div>
                            <div class="small text-muted mb-2">
                                <strong>Selected Tour:</strong> <span id="debugSelectedTour">-</span>
                            </div>
                            <div class="btn-group btn-group-sm mb-2">
                                <button type="button" class="btn btn-outline-secondary" onclick="checkURLParams()">Check URL</button>
                                <button type="button" class="btn btn-outline-secondary" onclick="listTourOptions()">List Options</button>
                                <button type="button" class="btn btn-outline-secondary" onclick="manualAutoSelect()">Manual Select</button>
                            </div>
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-outline-primary" onclick="testAutoSelect('Full Day Jaipur City Tour by Car')">Test Jaipur Tour</button>
                                <button type="button" class="btn btn-outline-primary" onclick="testAutoSelect('Taj Mahal Sunrise Tour from Delhi')">Test Taj Sunrise</button>
                                <button type="button" class="btn btn-outline-primary" onclick="testAutoSelect('Golden Triangle Tour 3 Days')">Test Golden Triangle</button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>

<!-- Optionally include a simple JS for form UX (no backend processing here) -->
<script>
    // Hide preloader when page is fully loaded
    window.addEventListener('load', function() {
        var preloader = document.getElementById('preloader');
        if (preloader) {
            preloader.style.display = 'none';
        }
        // Remove 'overflow: hidden' or similar if set on body
        document.body.style.overflow = '';
    });

    // Tour package data for auto-population
    const tourData = {
        'Taj Mahal Day Tour by Car from Delhi': {
            duration: '1 Day',
            destination: 'Delhi - Agra - Delhi',
            category: 'Standard',
            suggestedGuests: '2-6'
        },
        'Taj Mahal Sunrise Tour from Delhi': {
            duration: '1 Day',
            destination: 'Delhi - Agra - Delhi',
            category: 'Luxury',
            suggestedGuests: '2-4'
        },
        'Taj Mahal Tour by Gatimaan Express Train': {
            duration: '1 Day',
            destination: 'Delhi - Agra - Delhi',
            category: 'Premium',
            suggestedGuests: '2-6'
        },
        'Taj Mahal Luxury Tour by Premium Car from Delhi': {
            duration: '1 Day',
            destination: 'Delhi - Agra - Delhi',
            category: 'Luxury',
            suggestedGuests: '2-4'
        },
        'Full Day Old and New Delhi City Tour': {
            duration: '1 Day',
            destination: 'Delhi',
            category: 'Standard',
            suggestedGuests: '2-8'
        },
        'Half Day Delhi City Tour': {
            duration: 'Half Day',
            destination: 'Delhi',
            category: 'Standard',
            suggestedGuests: '2-6'
        },
        'Full Day Jaipur City Tour by Car': {
            duration: '1 Day',
            destination: 'Jaipur',
            category: 'Standard',
            suggestedGuests: '2-6'
        },
        'Jaipur Tour from Delhi by Car': {
            duration: '1 Day',
            destination: 'Delhi - Jaipur - Delhi',
            category: 'Standard',
            suggestedGuests: '2-6'
        },
        'Golden Triangle Tour 3 Days': {
            duration: '3 Days',
            destination: 'Delhi - Agra - Jaipur',
            category: 'Standard',
            suggestedGuests: '2-8'
        },
        'Golden Triangle Tour 4 Days': {
            duration: '4 Days',
            destination: 'Delhi - Agra - Jaipur',
            category: 'Standard',
            suggestedGuests: '2-8'
        },
        'Golden Triangle Tour 5 Days': {
            duration: '5 Days',
            destination: 'Delhi - Agra - Jaipur',
            category: 'Premium',
            suggestedGuests: '2-8'
        },
        'Golden Triangle Tour with Amritsar': {
            duration: '6 Days',
            destination: 'Delhi - Agra - Jaipur - Amritsar',
            category: 'Premium',
            suggestedGuests: '2-8'
        },
        'Golden Triangle Tour with Pushkar': {
            duration: '6 Days',
            destination: 'Delhi - Agra - Jaipur - Pushkar',
            category: 'Standard',
            suggestedGuests: '2-8'
        },
        'Golden Triangle Tour with Ranthambore': {
            duration: '7 Days',
            destination: 'Delhi - Agra - Jaipur - Ranthambore',
            category: 'Luxury',
            suggestedGuests: '2-8'
        },
        'Golden Triangle Tour with Udaipur': {
            duration: '7 Days',
            destination: 'Delhi - Agra - Jaipur - Udaipur',
            category: 'Luxury',
            suggestedGuests: '2-8'
        },
        'Golden Triangle Tour with Varanasi': {
            duration: '7 Days',
            destination: 'Delhi - Agra - Jaipur - Varanasi',
            category: 'Premium',
            suggestedGuests: '2-8'
        }
    };

    // Auto-populate form based on selected tour
    document.getElementById('tour')?.addEventListener('change', function() {
        const selectedTour = this.value;
        const tourInfo = tourData[selectedTour];
        const tourInfoDisplay = document.getElementById('tourInfoDisplay');

        if (tourInfo) {
            // Show tour information
            document.getElementById('infoDuration').textContent = tourInfo.duration;
            document.getElementById('infoDestination').textContent = tourInfo.destination;
            document.getElementById('infoCategory').textContent = tourInfo.category;
            document.getElementById('infoGuests').textContent = tourInfo.suggestedGuests;
            tourInfoDisplay.classList.add('show');

            // Update message field with tour details
            const messageField = document.getElementById('message');
            const currentMessage = messageField.value;
            const tourDetails = `\n\nTour Details:\nDuration: ${tourInfo.duration}\nDestination: ${tourInfo.destination}\nCategory: ${tourInfo.category}\nSuggested Group Size: ${tourInfo.suggestedGuests}`;

            if (!currentMessage.includes('Tour Details:')) {
                messageField.value = currentMessage + tourDetails;
            }

            // Set default number of guests based on tour
            const guestField = document.getElementById('guests');
            if (!guestField.value || guestField.value === '1') {
                const suggestedMin = tourInfo.suggestedGuests.split('-')[0];
                guestField.value = suggestedMin;
            }
        } else {
            // Hide tour information if no tour selected
            tourInfoDisplay.classList.remove('show');
        }
    });

    // Handle booking form submission with AJAX
    document.getElementById('bookingForm')?.addEventListener('submit', function(e) {
        e.preventDefault();

        const form = this;
        const submitBtn = form.querySelector('button[type="submit"]');
        const successAlert = document.getElementById('bookingSuccess');

        // Validate required fields
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.classList.add('is-invalid');
                isValid = false;
            } else {
                field.classList.remove('is-invalid');
            }
        });

        if (!isValid) {
            successAlert.className = 'alert alert-warning mt-3';
            successAlert.textContent = 'Please fill in all required fields.';
            successAlert.classList.remove('d-none');
            return;
        }

        // Disable submit button and show loading
        submitBtn.disabled = true;
        const originalText = submitBtn.innerHTML;
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
            submitBtn.innerHTML = originalText;
        });
    });

    // Auto-select tour from URL parameter
    function autoSelectTourFromURL() {
        console.log('🔍 autoSelectTourFromURL called');

        try {
            const urlParams = new URLSearchParams(window.location.search);
            const tourParam = urlParams.get('tour');
            console.log('📋 Tour parameter from URL:', tourParam);

            if (!tourParam) {
                console.log('❌ No tour parameter found in URL');
                return;
            }

            // Wait for the select element to be available
            const waitForSelect = (retries = 10) => {
                return new Promise((resolve, reject) => {
                    const checkSelect = () => {
                        const tourSelect = document.getElementById('tour');
                        if (tourSelect && tourSelect.options && tourSelect.options.length > 1) {
                            console.log('✅ Tour select element found with', tourSelect.options.length, 'options');
                            resolve(tourSelect);
                        } else if (retries > 0) {
                            retries--;
                            console.log(`⏳ Waiting for select element... (${retries} retries left)`);
                            setTimeout(checkSelect, 100);
                        } else {
                            reject(new Error('Tour select element not found or has no options'));
                        }
                    };
                    checkSelect();
                });
            };

            waitForSelect().then((tourSelect) => {
                // Decode the URL parameter
                const decodedTourParam = decodeURIComponent(tourParam).trim();
                console.log('🔤 Decoded tour parameter:', `"${decodedTourParam}"`);

                // Get all options (including those in optgroups)
                const allOptions = Array.from(tourSelect.querySelectorAll('option'));
                console.log('📊 Total options found:', allOptions.length);

                // Log all available options for debugging
                allOptions.forEach((option, index) => {
                    console.log(`   ${index}: "${option.value}"`);
                });

                let foundMatch = false;
                let selectedIndex = -1;

                // First try exact match
                console.log('🎯 Trying exact match...');
                for (let i = 0; i < allOptions.length; i++) {
                    const optionValue = allOptions[i].value.trim();
                    if (optionValue === decodedTourParam) {
                        console.log('✅ Exact match found at index:', i, 'value:', `"${optionValue}"`);
                        selectedIndex = i;
                        foundMatch = true;
                        break;
                    }
                }

                // If no exact match, try case-insensitive exact match
                if (!foundMatch) {
                    console.log('🔄 Trying case-insensitive exact match...');
                    for (let i = 0; i < allOptions.length; i++) {
                        const optionValue = allOptions[i].value.trim();
                        if (optionValue.toLowerCase() === decodedTourParam.toLowerCase()) {
                            console.log('✅ Case-insensitive match found at index:', i, 'value:', `"${optionValue}"`);
                            selectedIndex = i;
                            foundMatch = true;
                            break;
                        }
                    }
                }

                // If still no match, try partial match
                if (!foundMatch) {
                    console.log('🔍 Trying partial match...');
                    for (let i = 0; i < allOptions.length; i++) {
                        const optionValue = allOptions[i].value.toLowerCase().trim();
                        const searchValue = decodedTourParam.toLowerCase().trim();
                        if (optionValue.includes(searchValue) || searchValue.includes(optionValue)) {
                            console.log('✅ Partial match found at index:', i, 'option:', `"${allOptions[i].value}"`, 'search:', `"${decodedTourParam}"`);
                            selectedIndex = i;
                            foundMatch = true;
                            break;
                        }
                    }
                }

                // If still no match, try keyword matching
                if (!foundMatch) {
                    console.log('🏷️ Trying keyword match...');
                    const keywords = decodedTourParam.toLowerCase().split(/\s+/).filter(word => word.length > 2);
                    console.log('Keywords extracted:', keywords);

                    for (let i = 0; i < allOptions.length; i++) {
                        const optionValue = allOptions[i].value.toLowerCase();
                        const matches = keywords.filter(keyword => optionValue.includes(keyword));
                        if (matches.length >= Math.min(2, keywords.length)) {
                            console.log('✅ Keyword match found at index:', i, 'matches:', matches, 'option:', `"${allOptions[i].value}"`);
                            selectedIndex = i;
                            foundMatch = true;
                            break;
                        }
                    }
                }

                // Apply the selection
                if (foundMatch && selectedIndex >= 0) {
                    console.log('🎉 Applying selection at index:', selectedIndex);
                    tourSelect.selectedIndex = selectedIndex;
                    console.log('📝 Selected value:', tourSelect.value);

                    // Force the change event to trigger
                    console.log('🚀 Triggering change event...');
                    const changeEvent = new Event('change', { bubbles: true });
                    tourSelect.dispatchEvent(changeEvent);

                    // Add success feedback
                    showNotification('✅ Tour Auto-Selected!', 'success');

                    // Scroll to the form section
                    setTimeout(() => {
                        const formSection = document.querySelector('.booking-form-container');
                        if (formSection) {
                            formSection.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }

                        // Highlight the select field
                        tourSelect.style.transition = 'box-shadow 0.3s ease';
                        tourSelect.style.boxShadow = '0 0 0 3px rgba(17, 61, 72, 0.3)';
                        setTimeout(() => {
                            tourSelect.style.boxShadow = '';
                        }, 2000);
                    }, 500);

                } else {
                    console.log('❌ No match found for tour parameter:', decodedTourParam);
                    showNotification('❌ Tour Not Found - Please Select Manually', 'error');
                }

            }).catch((error) => {
                console.error('❌ Error in auto-selection:', error);
                showNotification('❌ Auto-selection failed', 'error');
            });

        } catch (error) {
            console.error('❌ Error in autoSelectTourFromURL:', error);
            showNotification('❌ Auto-selection error', 'error');
        }
    }

    // Helper function to show notifications
    function showNotification(message, type = 'info') {
        const colors = {
            success: '#28a745',
            error: '#dc3545',
            info: '#17a2b8'
        };

        const notification = document.createElement('div');
        notification.innerHTML = `<div style="
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${colors[type]};
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            z-index: 10000;
            font-weight: bold;
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            max-width: 300px;
        ">${message}</div>`;

        document.body.appendChild(notification);

        setTimeout(() => {
            if (notification.parentNode) {
                notification.parentNode.removeChild(notification);
            }
        }, type === 'error' ? 5000 : 3000);
    }

    // Enhanced auto-selection with multiple triggers
    function initializeAutoSelection() {
        console.log('🚀 Initializing auto-selection system...');

        // Check if we have a tour parameter
        const urlParams = new URLSearchParams(window.location.search);
        const tourParam = urlParams.get('tour');

        if (!tourParam) {
            console.log('ℹ️ No tour parameter found, skipping auto-selection');
            return;
        }

        console.log('📝 Tour parameter detected:', tourParam);

        // Try immediately
        autoSelectTourFromURL();

        // Also try after a short delay to ensure DOM is ready
        setTimeout(() => {
            const tourSelect = document.getElementById('tour');
            if (tourSelect && tourSelect.selectedIndex === 0) {
                console.log('🔄 Retrying auto-selection after delay...');
                autoSelectTourFromURL();
            }
        }, 500);

        // And try on window load as final fallback
        window.addEventListener('load', () => {
            const tourSelect = document.getElementById('tour');
            if (tourSelect && tourSelect.selectedIndex === 0) {
                console.log('🔄 Final retry on window load...');
                autoSelectTourFromURL();
            }
        });
    }

    // Update debug panel
    function updateDebugPanel() {
        const debugPanel = document.getElementById('debugPanel');
        const debugURL = document.getElementById('debugURL');
        const debugTourParam = document.getElementById('debugTourParam');
        const debugSelectedTour = document.getElementById('debugSelectedTour');

        if (debugPanel && debugURL && debugTourParam && debugSelectedTour) {
            const urlParams = new URLSearchParams(window.location.search);
            const tourParam = urlParams.get('tour');
            const tourSelect = document.getElementById('tour');

            debugURL.textContent = window.location.href;
            debugTourParam.textContent = tourParam ? `"${tourParam}"` : 'None';
            debugSelectedTour.textContent = tourSelect ? `"${tourSelect.value}"` : 'Not found';

            // Show debug panel if there are URL parameters
            if (tourParam) {
                debugPanel.classList.remove('d-none');
            }
        }
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            initializeAutoSelection();
            updateDebugPanel();
        });
    } else {
        // DOM already loaded
        initializeAutoSelection();
        updateDebugPanel();
    }

    // Update debug panel when tour selection changes
    document.addEventListener('change', function(e) {
        if (e.target.id === 'tour') {
            updateDebugPanel();
        }
    });

    // Enable debug panel with keyboard shortcut or URL parameter
    document.addEventListener('keydown', function(e) {
        // Press Ctrl+Shift+D to toggle debug panel
        if (e.ctrlKey && e.shiftKey && e.key === 'D') {
            e.preventDefault();
            const debugPanel = document.getElementById('debugPanel');
            if (debugPanel) {
                debugPanel.classList.toggle('d-none');
                updateDebugPanel();
            }
        }
    });

    // Check for debug parameter in URL
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('debug') || urlParams.has('tour')) {
        const debugPanel = document.getElementById('debugPanel');
        if (debugPanel) {
            debugPanel.classList.remove('d-none');
        }
    }

    // Add a global function for manual testing
    window.testAutoSelect = function(tourName) {
        console.log('Manual test: Setting URL parameter to:', tourName);
        // Update the URL without reloading
        const newUrl = new URL(window.location);
        newUrl.searchParams.set('tour', tourName);
        window.history.pushState({}, '', newUrl);

        // Run auto-selection
        autoSelectTourFromURL();
    };

    // Add a function to list all available tour options
    window.listTourOptions = function() {
        const tourSelect = document.getElementById('tour');
        if (tourSelect) {
            console.log('Available tour options:');
            const options = tourSelect.querySelectorAll('option');
            options.forEach((option, index) => {
                console.log(`${index}: "${option.value}" - "${option.textContent.trim()}"`);
            });
        } else {
            console.log('Tour select element not found');
        }
    };

    // Add a function to manually trigger auto-selection with current URL
    window.manualAutoSelect = function() {
        console.log('Manually triggering auto-selection...');
        autoSelectTourFromURL();
    };

    // Add a function to check current URL parameters
    window.checkURLParams = function() {
        const urlParams = new URLSearchParams(window.location.search);
        console.log('Current URL parameters:');
        for (const [key, value] of urlParams) {
            console.log(`${key}: "${value}"`);
        }
        const tourParam = urlParams.get('tour');
        if (tourParam) {
            console.log('Tour parameter found:', `"${tourParam}"`);
            console.log('Decoded:', `"${decodeURIComponent(tourParam)}"`);
        } else {
            console.log('No tour parameter found');
        }
    };

    // Subtle validation - only show on form submission, not real-time
    document.querySelectorAll('input[required], select[required], textarea[required]').forEach(field => {
        // Remove any existing validation classes on focus
        field.addEventListener('focus', function() {
            this.classList.remove('is-valid', 'is-invalid');
        });

        // Only validate on blur if field is empty (subtle feedback)
        field.addEventListener('blur', function() {
            if (!this.value.trim()) {
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            } else {
                this.classList.remove('is-invalid');
                // Don't add is-valid class to avoid green icons
            }
        });
    });
</script>

</body>

</html>
</html>
</html>