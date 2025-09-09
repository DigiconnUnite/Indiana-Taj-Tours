<?php
/**
 * Dynamic Tour Details Page - Indiana Taj Tour
 *
 * @author Digiconn Unite Pvt. Ltd.
 * @version 1.0.0
 * @since 2025
 */

// Get the slug from URL
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';

// Debug: Check if slug is provided
if (empty($slug)) {
    header("HTTP/1.0 400 Bad Request");
    echo "<h1>Error</h1><p>No tour slug provided in the URL.</p>";
    exit;
}

// Include tours data with error handling
$toursDataPath = __DIR__ . '/tours-data.php';
if (!file_exists($toursDataPath)) {
    header("HTTP/1.0 500 Internal Server Error");
    echo "<h1>Server Error</h1><p>Tour data file not found.</p>";
    exit;
}

include $toursDataPath;

// Check if tours array exists
if (!isset($tours) || !is_array($tours)) {
    header("HTTP/1.0 500 Internal Server Error");
    echo "<h1>Server Error</h1><p>Tour data not loaded properly.</p>";
    exit;
}

// Check if tour exists
if (!isset($tours[$slug])) {
    // Tour not found - redirect to 404 or show error
    header("HTTP/1.0 404 Not Found");
    echo "<h1>Tour Not Found</h1><p>The requested tour could not be found.</p>";
    echo "<p>Requested slug: <strong>$slug</strong></p>";
    echo "<p>Available tours:</p><ul>";
    foreach (array_keys($tours) as $availableSlug) {
        echo "<li>$availableSlug</li>";
    }
    echo "</ul>";
    exit;
}

// Get tour data
$tour = $tours[$slug];

// Set page metadata
$pageTitle = $tour['title'] . ' | Indiana Taj Tour';
$pageDescription = substr($tour['overview'], 0, 160) . '...';
$pageKeywords = 'Taj Mahal tour, ' . strtolower($tour['title']) . ', ' . $tour['location'] . ', India travel packages';
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php echo $pageTitle; ?></title>
    <meta name="author" content="Indiana Taj Tour" />
    <meta name="description" content="<?php echo $pageDescription; ?>" />
    <meta name="keywords" content="<?php echo $pageKeywords; ?>" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- include the links file  -->
    <?php include "links.php" ?>

    <style>
        /* Enhanced Tour Hero Section */
        .tour-hero {
            position: relative;
            padding: 140px 0 100px;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('<?php echo $tour['hero_image']; ?>') center/cover no-repeat;
            color: white;
            text-align: center;
            overflow: hidden;
        }
        .tour-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(17, 61, 72, 0.1), rgba(0, 0, 0, 0.3));
            z-index: 1;
        }
        .tour-hero .container {
            position: relative;
            z-index: 2;
        }
        .tour-badge {
            display: inline-block;
            background: linear-gradient(135deg, #113d48, #0a2a35);
            color: #fff;
            padding: 0.4rem 1rem ;
            border-radius: 50px;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 0.8rem;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            border: 2px solid rgba(255,255,255,0.1);
        }
        .breadcumb-title {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            line-height: 1.2;
        }
        .hero-meta {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 30px;
        }
        .hero-meta-item {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 25px;
            padding: 12px 20px;
            color: white;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        .hero-meta-item:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        /* Enhanced Content Sections */
        .sec-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #113d48;
            margin-bottom: 20px;
            position: relative;
        }
        .sec-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #113d48, #0a2a35);
            border-radius: 2px;
        }

        .tour-highlight {
            background: linear-gradient(135deg, #fffbe7 0%, #fef7e0 100%);
            padding: 25px 30px;
            border-left: 5px solid #113d48;
            margin: 30px 0;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            position: relative;
        }
        .tour-highlight::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(17,61,72,0.02), rgba(17,61,72,0.05));
            border-radius: 12px;
            z-index: -1;
        }
        .tour-highlight h4 {
            color: #113d48;
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        /* Enhanced Itinerary */
        .itinerary-step {
            position: relative;
            padding: 25px 25px 25px 100px;
            margin-bottom: 25px;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .itinerary-step:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }
        .itinerary-step-number {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #113d48 0%, #0a2a35 100%);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 800;
            box-shadow: 0 4px 15px rgba(17,61,72,0.3);
            border: 3px solid #fff;
        }
        .itinerary-step h4 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #113d48;
        }
        .itinerary-step p {
            color: #666;
            line-height: 1.6;
            margin: 0;
        }

        /* Enhanced Inclusions/Exclusions */
        .inclusion-list, .exclusion-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .inclusion-list li, .exclusion-list li {
            padding: 12px 0 12px 45px;
            position: relative;
            font-size: 1rem;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .inclusion-list li:hover, .exclusion-list li:hover {
            background: rgba(0,0,0,0.02);
            padding-left: 50px;
        }
        .inclusion-list li:before {
            content: "✓";
            color: #28a745;
            position: absolute;
            left: 0;
            font-weight: bold;
            font-size: 1.2em;
            background: rgba(40, 167, 69, 0.1);
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .exclusion-list li:before {
            content: "✗";
            color: #dc3545;
            position: absolute;
            left: 0;
            font-weight: bold;
            font-size: 1.2em;
            background: rgba(220, 53, 69, 0.1);
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Enhanced Gallery */
        .tour-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        .tour-gallery img {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 12px;
            transition: all 0.4s ease;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            cursor: pointer;
        }
        .tour-gallery img:hover {
            transform: scale(1.05) rotate(1deg);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }

        /* Enhanced Info Cards */
        .tour-info-list {
            margin: 40px 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .info-item {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        .info-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }
        .info-icon {
            font-size: 2rem;
            color: #113d48;
            margin-right: 20px;
            background: rgba(17, 61, 72, 0.1);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .info-content h6 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 5px;
            color: #113d48;
        }
        .info-content p {
            font-size: 1rem;
            margin-bottom: 0;
            color: #666;
        }

        /* Enhanced Related Tours */
        .related-tour-card {
            transition: all 0.4s ease;
            height: 100%;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.05);
        }
        .related-tour-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 40px rgba(17,61,72,0.15);
        }
        .tour-img {
            position: relative;
            overflow: hidden;
            border-radius: 15px 15px 0 0;
        }
        .tour-img img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        .related-tour-card:hover .tour-img img {
            transform: scale(1.1);
        }
        .tour-content {
            padding: 25px 20px 20px 20px;
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .tour-title {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 8px;
            color: #113d48;
            line-height: 1.3;
        }
        .tour-destination {
            font-size: 1rem;
            color: #888;
            margin-bottom: 12px;
        }
        .tour-meta {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .tour-rating i {
            margin-right: 5px;
            color: #ffc107;
        }
        .tour-rating span {
            color: #666;
            font-size: 0.9rem;
        }

        /* Enhanced CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #113d48 0%, #0a2a35 100%);
            padding: 60px 0;
            color: white;
            text-align: center;
        }
        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .cta-btn {
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        .cta-btn-primary {
            background: #fff;
            color: #113d48;
            border: 2px solid #fff;
        }
        .cta-btn-primary:hover {
            background: transparent;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255,255,255,0.2);
        }
        .cta-btn-secondary {
            background: transparent;
            color: #fff;
            border: 2px solid rgba(255,255,255,0.3);
        }
        .cta-btn-secondary:hover {
            background: rgba(255,255,255,0.1);
            border-color: #fff;
            transform: translateY(-2px);
        }

        /* Responsive Enhancements */
        @media (max-width: 1200px) {
            .breadcumb-title {
                font-size: 2.4rem;
            }
            .sec-title {
                font-size: 2rem;
            }
        }
        @media (max-width: 991px) {
            .tour-hero {
                padding: 100px 0 70px;
            }
            .breadcumb-title {
                font-size: 2rem;
            }
            .hero-meta {
                gap: 15px;
            }
            .hero-meta-item {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
            .tour-gallery {
                grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
                gap: 15px;
            }
            .tour-gallery img {
                height: 280px;
            }
            .tour-info-list {
                grid-template-columns: 1fr;
                gap: 15px;
            }
        }
        @media (max-width: 767px) {
            .tour-hero {
                padding: 80px 0 50px;
            }
            .breadcumb-title {
                font-size: 1.8rem;
            }
            .hero-meta {
                flex-direction: column;
                align-items: center;
            }
            .itinerary-step {
                padding-left: 80px;
            }
            .itinerary-step-number {
                width: 50px;
                height: 50px;
                font-size: 20px;
                left: 15px;
            }
            .tour-gallery {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            .tour-gallery img {
                height: 250px;
            }
            .cta-section h2 {
                font-size: 2rem;
            }
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
            .cta-btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }
        @media (max-width: 575px) {
            .sec-title {
                font-size: 1.8rem;
            }
            .tour-highlight {
                padding: 20px;
            }
            .itinerary-step {
                padding: 20px 20px 20px 70px;
            }
            .info-item {
                padding: 15px;
            }
            .info-icon {
                font-size: 1.5rem;
                width: 40px;
                height: 40px;
            }
        }

        /* Loading Animation */
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
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
        <section class="tour-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <span class="tour-badge"><?php echo $tour['badge']; ?></span>
                        <h1 class="breadcumb-title"><?php echo $tour['title']; ?></h1>
                        <br>
                        <p class="text-white"><?php echo $tour['location']; ?> | <?php echo substr($tour['overview'], 0, 100); ?>...</p>

                        <div class="hero-meta">
                            <div class="hero-meta-item">
                                <i class="fas fa-clock"></i>
                                <span><?php echo $tour['duration']; ?></span>
                            </div>
                            <div class="hero-meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Pickup & Drop: <?php echo $tour['pickup_drop']; ?></span>
                            </div>
                            <div class="hero-meta-item">
                                <i class="fas fa-users"></i>
                                <span><?php echo $tour['service']; ?></span>
                            </div>
                            <div class="hero-meta-item">
                                <i class="fas fa-star"></i>
                                <span><?php echo $tour['rating']; ?> (<?php echo $tour['reviews']; ?> reviews)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tour Details Section -->
        <section class="space-top space-extra-bottom fade-in">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- Overview -->
                        <div class="mb-5 pb-3 border-bottom">
                            <h2 class="sec-title mb-5">Tour Overview</h2>
                            <p><?php echo $tour['overview']; ?></p>

                            <div class="tour-highlight">
                                <h4 class="mb-3"><i class="fas fa-bolt me-2"></i> Why Choose This Tour?</h4>
                                <p><?php echo $tour['why_choose']; ?></p>
                            </div>
                        </div>

                        <!-- Tour Gallery -->
                        <div class="mb-5 pb-3 border-bottom">
                            <h2 class="sec-title mb-5">Tour Gallery</h2>
                            <div class="tour-gallery">
                                <?php foreach ($tour['gallery'] as $image): ?>
                                    <img src="<?php echo $image; ?>" alt="<?php echo $tour['title']; ?>">
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Highlights -->
                        <div class="mb-5 pb-3 border-bottom">
                            <h2 class="sec-title mb-5">Tour Highlights</h2>
                            <div class="row">
                                <?php foreach ($tour['highlights'] as $highlight): ?>
                                <div class="col-md-6">
                                    <div class="feature-item style2 d-flex align-items-start mb-4">
                                        <div class="feature-item_icon me-3" style="font-size: 1.5rem; color:#113d48;">
                                            <i class="<?php echo $highlight['icon']; ?>"></i>
                                        </div>
                                        <div class="feature-item_content">
                                            <h4 class="box-title mb-1"><?php echo $highlight['title']; ?></h4>
                                            <p class="mb-0"><?php echo $highlight['desc']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Quick Info Widget -->
                        <div class="mb-5 pb-3">
                            <h2 class="sec-title mb-5">Tour Details</h2>
                            <div class="tour-info-list">
                                <div class="info-item d-flex align-items-center mb-2">
                                    <div class="info-icon me-3">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="mb-1">Duration</h6>
                                        <p class="mb-0"><?php echo $tour['duration']; ?></p>
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-center mb-2">
                                    <div class="info-icon me-3">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="mb-1">Service</h6>
                                        <p class="mb-0"><?php echo $tour['pickup_drop']; ?></p>
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-center mb-2">
                                    <div class="info-icon me-3">
                                        <i class="fas fa-language"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="mb-1">Language</h6>
                                        <p class="mb-0"><?php echo $tour['languages']; ?></p>
                                    </div>
                                </div>
                                <div class="info-item d-flex align-items-center mb-2">
                                    <div class="info-icon me-3">
                                        <i class="fas fa-car"></i>
                                    </div>
                                    <div class="info-content">
                                        <h6 class="mb-1">Transport</h6>
                                        <p class="mb-0"><?php echo $tour['transport']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Itinerary -->
                        <div class="mb-5 pb-3 border-bottom">
                            <h2 class="sec-title mb-5">Tour Itinerary</h2>

                            <?php foreach ($tour['itinerary'] as $step): ?>
                            <div class="itinerary-step">
                                <div class="itinerary-step-number"><?php echo $step['step']; ?></div>
                                <h4><?php echo $step['time']; ?>: <?php echo $step['title']; ?></h4>
                                <p><?php echo $step['desc']; ?></p>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Inclusions/Exclusions -->
                        <div class="mb-5 pb-3">
                            <h2 class="sec-title mb-5">What's Included</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Inclusions</h4>
                                    <ul class="inclusion-list">
                                        <?php foreach ($tour['inclusions'] as $inclusion): ?>
                                        <li><?php echo $inclusion; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-3"><i class="fas fa-times-circle text-danger me-2"></i> Exclusions</h4>
                                    <ul class="exclusion-list">
                                        <?php foreach ($tour['exclusions'] as $exclusion): ?>
                                        <li><?php echo $exclusion; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Call to Action Section -->
                        <!-- <section class="cta-section">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h2>Ready to Experience This Amazing Tour?</h2>
                                        <p>Book your unforgettable journey today and create memories that will last a lifetime. Our expert guides and premium service ensure you have the best experience possible.</p>
                                        <div class="cta-buttons">
                                            <a href="booking.php" class="cta-btn cta-btn-primary">
                                                <i class="fas fa-calendar-check"></i>
                                                Book This Tour
                                            </a>
                                            <a href="contact.php" class="cta-btn cta-btn-secondary">
                                                <i class="fas fa-phone"></i>
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->

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
                            <span class="sub-title" style="color:#113d48;font-weight:600;letter-spacing:1px;">Explore More</span>
                            <h2 class="sec-title" style="font-size:2.1rem;font-weight:700;">Related Tours</h2>
                        </div>
                    </div>
                </div>
                <div class="row gy-4">
                    <?php foreach ($tour['related_tours'] as $related): ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="related-tour-card">
                            <div class="tour-img">
                                <img src="<?php echo $related['image']; ?>" alt="<?php echo $related['title']; ?>">
                            </div>
                            <div class="tour-content">
                                <h3 class="tour-title"><?php echo $related['title']; ?></h3>
                                <p class="tour-destination"><?php echo $tour['location']; ?></p>
                                <div class="tour-meta">
                                    <div class="tour-rating">
                                        <i class="fas fa-star"></i>
                                        <span><?php echo $related['rating']; ?></span>
                                    </div>
                                </div>
                                <a href="<?php echo $related['url']; ?>" class="th-btn style3">View Details</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </main>

    <!-- include the footer here  -->
    <?php include 'footer.php'; ?>

    <!-- include the bottom script -->
    <?php include 'bottom-script.php'; ?>

   <?php
    // Set the tour name for the fixed button
    $tourName = $tour['title'];
    include 'fixed-book-button.php';
    ?>
   

    <script>
        // Add any additional JavaScript for dynamic functionality
        document.addEventListener('DOMContentLoaded', function() {
            // You can add JavaScript for additional dynamic features here
            console.log('Tour Details page loaded for: <?php echo $tour['title']; ?>');
        });
    </script>

</body>

</html>