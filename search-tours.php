<?php
/**
 * Indiana Taj Tour - Search Tours Results Page
 *
 * @author Digiconn Unite Pvt. Ltd.
 * @version 1.0.0
 * @since 2025
 */

// Handle search parameters (support both index.php and search-tours.php field names)
$searchTerm = isset($_POST['search']) ? trim($_POST['search']) : '';
$location = isset($_POST['location']) ? $_POST['location'] : (isset($_POST['destination']) ? $_POST['destination'] : '');
$tourType = isset($_POST['tourType']) ? $_POST['tourType'] : '';
$duration = isset($_POST['duration']) ? $_POST['duration'] : '';
$priceRange = isset($_POST['priceRange']) ? $_POST['priceRange'] : (isset($_POST['category']) ? $_POST['category'] : '');

// Tour data array - extracted from index.php tours
$tours = [
    // Taj Mahal Tours
    [
        'id' => 1,
        'name' => 'Taj Mahal Day Tour by Car from Delhi',
        'type' => 'taj-mahal',
        'location' => 'delhi agra',
        'duration' => 1,
        'price' => 150,
        'rating' => 4.7,
        'reviews' => 77,
        'description' => 'Experience the majestic Taj Mahal with a comfortable day trip from Delhi. Includes Agra Fort and transportation.',
        'image' => 'assets/img/taj_mahal_tour/taj_mahal-1.png',
        'slug' => 'taj-mahal-day-tour-by-car-from-delhi',
        'url' => 'tour-details.php?slug=taj-mahal-day-tour-by-car-from-delhi',
        'inclusions' => ['Transportation', 'Guide', 'Entry Tickets', 'Lunch']
    ],
    [
        'id' => 2,
        'name' => 'Taj Mahal Sunrise Tour from Delhi',
        'type' => 'taj-mahal',
        'location' => 'delhi agra',
        'duration' => 1,
        'price' => 200,
        'rating' => 4.8,
        'reviews' => 50,
        'description' => 'Witness the Taj Mahal at sunrise for a magical experience. Early morning departure from Delhi.',
        'image' => 'assets/img/taj_mahal_tour/taj_mahal-2.png',
        'slug' => 'taj-mahal-sunrise-tour-from-delhi',
        'url' => 'tour-details.php?slug=taj-mahal-sunrise-tour-from-delhi',
        'inclusions' => ['Transportation', 'Guide', 'Sunrise Entry', 'Breakfast']
    ],
    [
        'id' => 3,
        'name' => 'Taj Mahal Tour by Gatimaan Express Train',
        'type' => 'taj-mahal',
        'location' => 'delhi agra',
        'duration' => 1,
        'price' => 180,
        'rating' => 4.8,
        'reviews' => 750,
        'description' => 'High-speed train journey to Agra for a quick and comfortable Taj Mahal visit.',
        'image' => 'assets/img/taj_mahal_tour/taj_mahal-3.png',
        'slug' => 'taj-mahal-tour-by-gatimaan-express-train',
        'url' => 'tour-details.php?slug=taj-mahal-tour-by-gatimaan-express-train',
        'inclusions' => ['Train Tickets', 'Guide', 'Entry Tickets', 'Lunch']
    ],
    [
        'id' => 4,
        'name' => 'Taj Mahal Luxury Tour by Premium Car',
        'type' => 'taj-mahal',
        'location' => 'delhi agra',
        'duration' => 1,
        'price' => 300,
        'rating' => 4.9,
        'reviews' => 340,
        'description' => 'Luxury experience with premium car, private guide, and VIP entry to Taj Mahal.',
        'image' => 'assets/img/taj_mahal_tour/taj_mahal-4.png',
        'slug' => 'taj-mahal-luxury-tour-by-premium-car-from-delhi',
        'url' => 'tour-details.php?slug=taj-mahal-luxury-tour-by-premium-car-from-delhi',
        'inclusions' => ['Premium Car', 'Private Guide', 'VIP Entry', 'Luxury Lunch']
    ],

    // Same Day Tours
    [
        'id' => 5,
        'name' => 'Full Day Delhi City Tour',
        'type' => 'same-day',
        'location' => 'delhi',
        'duration' => 1,
        'price' => 100,
        'rating' => 4.9,
        'reviews' => 580,
        'description' => 'Explore Old and New Delhi in one day. Visit Red Fort, Jama Masjid, and modern Delhi.',
        'image' => 'assets/img/same_day_tour/delhi-gate.png',
        'slug' => 'full-day-old-and-new-delhi-city-tour',
        'url' => 'tour-details.php?slug=full-day-old-and-new-delhi-city-tour',
        'inclusions' => ['Transportation', 'Guide', 'Entry Tickets', 'Lunch']
    ],
    [
        'id' => 6,
        'name' => 'Half Day Delhi City Tour',
        'type' => 'same-day',
        'location' => 'delhi',
        'duration' => 1,
        'price' => 80,
        'rating' => 4.9,
        'reviews' => 460,
        'description' => 'Essential Delhi highlights in half a day. Perfect for short visits.',
        'image' => 'assets/img/same_day_tour/kutub-minar.png',
        'slug' => 'half-day-delhi-city-tour',
        'url' => 'tour-details.php?slug=half-day-delhi-city-tour',
        'inclusions' => ['Transportation', 'Guide', 'Entry Tickets']
    ],
    [
        'id' => 7,
        'name' => 'Full Day Jaipur City Tour',
        'type' => 'same-day',
        'location' => 'jaipur',
        'duration' => 1,
        'price' => 120,
        'rating' => 4.9,
        'reviews' => 610,
        'description' => 'Discover the Pink City of Jaipur. Visit Amber Fort, City Palace, and Hawa Mahal.',
        'image' => 'assets/img/same_day_tour/hawa-mahal.png',
        'slug' => 'full-day-jaipur-city-tour-by-car',
        'url' => 'tour-details.php?slug=full-day-jaipur-city-tour-by-car',
        'inclusions' => ['Transportation', 'Guide', 'Entry Tickets', 'Lunch']
    ],
    [
        'id' => 8,
        'name' => 'Jaipur Tour from Delhi',
        'type' => 'same-day',
        'location' => 'delhi jaipur',
        'duration' => 1,
        'price' => 140,
        'rating' => 4.9,
        'reviews' => 370,
        'description' => 'Round trip from Delhi to Jaipur. Experience the royal heritage of Rajasthan.',
        'image' => 'assets/img/same_day_tour/amber-fort.png',
        'slug' => 'jaipur-tour-from-delhi-by-car',
        'url' => 'tour-details.php?slug=jaipur-tour-from-delhi-by-car',
        'inclusions' => ['Transportation', 'Guide', 'Entry Tickets', 'Lunch']
    ],

    // Golden Triangle Tours
    [
        'id' => 9,
        'name' => 'Golden Triangle Tour 3 Days',
        'type' => 'golden-triangle',
        'location' => 'delhi agra jaipur',
        'duration' => 3,
        'price' => 400,
        'rating' => 4.7,
        'reviews' => 340,
        'description' => 'Classic Golden Triangle itinerary covering Delhi, Agra, and Jaipur in 3 days.',
        'image' => 'assets/img/golden_triangle_tour/golden-tour-1.png',
        'slug' => 'golden-triangle-tour-3-days',
        'url' => 'tour-details.php?slug=golden-triangle-tour-3-days',
        'inclusions' => ['Transportation', 'Hotels', 'Guide', 'Entry Tickets', 'Meals']
    ],
    [
        'id' => 10,
        'name' => 'Golden Triangle Tour 4 Days',
        'type' => 'golden-triangle',
        'location' => 'delhi agra jaipur',
        'duration' => 4,
        'price' => 500,
        'rating' => 4.8,
        'reviews' => 460,
        'description' => 'Relaxed Golden Triangle tour with more time to explore each destination.',
        'image' => 'assets/img/golden_triangle_tour/golden-tour-2.png',
        'slug' => 'golden-triangle-tour-4-days',
        'url' => 'tour-details.php?slug=golden-triangle-tour-4-days',
        'inclusions' => ['Transportation', 'Hotels', 'Guide', 'Entry Tickets', 'Meals']
    ],
    [
        'id' => 11,
        'name' => 'Golden Triangle Tour 5 Days',
        'type' => 'golden-triangle',
        'location' => 'delhi agra jaipur',
        'duration' => 5,
        'price' => 600,
        'rating' => 4.9,
        'reviews' => 430,
        'description' => 'Comprehensive Golden Triangle experience with additional sightseeing.',
        'image' => 'assets/img/golden_triangle_tour/golden-tour-3.png',
        'slug' => 'golden-triangle-tour-5-days',
        'url' => 'tour-details.php?slug=golden-triangle-tour-5-days',
        'inclusions' => ['Transportation', 'Hotels', 'Guide', 'Entry Tickets', 'Meals']
    ],
    [
        'id' => 12,
        'name' => 'Golden Triangle with Amritsar',
        'type' => 'golden-triangle',
        'location' => 'amritsar',
        'duration' => 6,
        'price' => 700,
        'rating' => 4.8,
        'reviews' => 290,
        'description' => 'Extended Golden Triangle tour including the Golden Temple in Amritsar.',
        'image' => 'assets/img/golden_triangle_tour/golden-amritsar.png',
        'slug' => 'golden-triangle-tour-with-amritsar',
        'url' => 'tour-details.php?slug=golden-triangle-tour-with-amritsar',
        'inclusions' => ['Transportation', 'Hotels', 'Guide', 'Entry Tickets', 'Meals']
    ],
    [
        'id' => 13,
        'name' => 'Golden Triangle with Pushkar',
        'type' => 'golden-triangle',
        'location' => 'pushkar',
        'duration' => 6,
        'price' => 650,
        'rating' => 4.8,
        'reviews' => 390,
        'description' => 'Golden Triangle tour with a visit to the sacred town of Pushkar.',
        'image' => 'assets/img/golden_triangle_tour/golden-pushkar.png',
        'slug' => 'golden-triangle-tour-with-pushkar',
        'url' => 'tour-details.php?slug=golden-triangle-tour-with-pushkar',
        'inclusions' => ['Transportation', 'Hotels', 'Guide', 'Entry Tickets', 'Meals']
    ],
    [
        'id' => 14,
        'name' => 'Golden Triangle with Ranthambore',
        'type' => 'golden-triangle',
        'location' => 'ranthambore',
        'duration' => 7,
        'price' => 750,
        'rating' => 4.9,
        'reviews' => 410,
        'description' => 'Golden Triangle tour including tiger safari at Ranthambore National Park.',
        'image' => 'assets/img/golden_triangle_tour/golden-ranthambore.png',
        'slug' => 'golden-triangle-tour-with-ranthambore',
        'url' => 'tour-details.php?slug=golden-triangle-tour-with-ranthambore',
        'inclusions' => ['Transportation', 'Hotels', 'Guide', 'Entry Tickets', 'Safari', 'Meals']
    ],
    [
        'id' => 15,
        'name' => 'Golden Triangle with Udaipur',
        'type' => 'golden-triangle',
        'location' => 'udaipur',
        'duration' => 7,
        'price' => 700,
        'rating' => 4.7,
        'reviews' => 520,
        'description' => 'Extended Golden Triangle tour including the City of Lakes, Udaipur.',
        'image' => 'assets/img/golden_triangle_tour/golden-udaipur.png',
        'slug' => 'golden-triangle-tour-with-udaipur',
        'url' => 'tour-details.php?slug=golden-triangle-tour-with-udaipur',
        'inclusions' => ['Transportation', 'Hotels', 'Guide', 'Entry Tickets', 'Meals']
    ],
    [
        'id' => 16,
        'name' => 'Golden Triangle with Varanasi',
        'type' => 'golden-triangle',
        'location' => 'varanasi',
        'duration' => 7,
        'price' => 800,
        'rating' => 4.7,
        'reviews' => 330,
        'description' => 'Spiritual Golden Triangle tour including Varanasi and the Ganges River.',
        'image' => 'assets/img/golden_triangle_tour/golden-varanasi.png',
        'slug' => 'golden-triangle-tour-with-varanasi',
        'url' => 'tour-details.php?slug=golden-triangle-tour-with-varanasi',
        'inclusions' => ['Transportation', 'Hotels', 'Guide', 'Entry Tickets', 'Boat Ride', 'Meals']
    ]
];

// Filter tours based on search parameters
$filteredTours = [];
foreach ($tours as $tour) {
    $matches = true;

    // Search term filter
    if (!empty($searchTerm) && stripos($tour['name'], $searchTerm) === false) {
        $matches = false;
    }

    // Location filter
    if (!empty($location)) {
        $tourLocations = explode(' ', $tour['location']);
        $searchLocations = [];

        // Handle special cases
        if ($location === 'golden-triangle') {
            $searchLocations = ['delhi', 'agra', 'jaipur'];
        } elseif ($location === 'all') {
            // Show all tours for "all" destinations
            $matches = true;
        } else {
            $searchLocations = [$location];
        }

        if ($location !== 'all') {
            $locationMatch = false;
            foreach ($searchLocations as $searchLoc) {
                if (in_array($searchLoc, $tourLocations)) {
                    $locationMatch = true;
                    break;
                }
            }
            if (!$locationMatch) {
                $matches = false;
            }
        }
    }

    // Tour type filter
    if (!empty($tourType) && $tourType !== 'all') {
        $typeMatch = false;

        switch ($tourType) {
            case 'day-tour':
                if ($tour['type'] === 'taj-mahal' || $tour['type'] === 'same-day') {
                    $typeMatch = true;
                }
                break;
            case 'same-day':
                if ($tour['type'] === 'same-day') {
                    $typeMatch = true;
                }
                break;
            case 'multi-day':
            case 'golden-triangle':
                if ($tour['type'] === 'golden-triangle') {
                    $typeMatch = true;
                }
                break;
            case 'luxury':
                if ($tour['price'] >= 200) {
                    $typeMatch = true;
                }
                break;
            case 'sunrise':
                if (stripos($tour['name'], 'sunrise') !== false) {
                    $typeMatch = true;
                }
                break;
            default:
                if ($tour['type'] === $tourType) {
                    $typeMatch = true;
                }
                break;
        }

        if (!$typeMatch) {
            $matches = false;
        }
    }

    // Duration filter
    if (!empty($duration) && $duration !== 'all' && $tour['duration'] != $duration) {
        $matches = false;
    }

    // Price range filter (handle both priceRange and category from index.php)
    if (!empty($priceRange)) {
        if (strpos($priceRange, '-') !== false || strpos($priceRange, '+') !== false) {
            // Handle price range format like "0-150", "151-300", "801+"
            list($minPrice, $maxPrice) = explode('-', $priceRange);
            $maxPrice = $maxPrice === '+' ? PHP_INT_MAX : (int)$maxPrice;
            $tourPrice = (int)$tour['price'];

            if ($tourPrice < (int)$minPrice || $tourPrice > $maxPrice) {
                $matches = false;
            }
        } else {
            // Handle category format from index.php like "luxury", "premium", etc.
            $tourPrice = (int)$tour['price'];
            switch ($priceRange) {
                case 'luxury':
                    if ($tourPrice < 200) $matches = false;
                    break;
                case 'premium':
                    if ($tourPrice < 150 || $tourPrice > 400) $matches = false;
                    break;
                case 'standard':
                    if ($tourPrice >= 200) $matches = false;
                    break;
            }
        }
    }

    if ($matches) {
        $filteredTours[] = $tour;
    }
}

// If no filters applied, show all tours
if (empty($searchTerm) &&
    (empty($location) || $location === 'all') &&
    (empty($tourType) || $tourType === 'all') &&
    (empty($duration) || $duration === 'all') &&
    empty($priceRange)) {
    $filteredTours = $tours;
}

// Debug information (remove in production)
$debug = [
    'searchTerm' => $searchTerm,
    'location' => $location,
    'tourType' => $tourType,
    'duration' => $duration,
    'priceRange' => $priceRange,
    'totalTours' => count($tours),
    'filteredTours' => count($filteredTours)
];
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Search Tours - Indiana Taj Tour</title>
    <meta name="author" content="Indiana Taj Tour" />
    <meta name="description" content="Find your perfect tour package with Indiana Taj Tour. Search and filter tours by location, type, duration, and more." />
    <meta name="keywords" content="Taj Mahal tour, Golden Triangle tour, Delhi tours, Jaipur tours, Agra tours, India travel packages" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />

    <!-- include the links file  -->
    <?php include "links.php" ?>

    <style>
        /* .search-results-header {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 3rem 0;
            margin-bottom: 2rem;
            
        } */

        .filter-sidebar {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            top: 6.8rem;
            border: 0.2px solid rgba(0,0,0,0.08);
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .filter-sidebar h4 {
            color: #495057;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .filter-sidebar .form-check {
            margin-bottom: 0.5rem;
        }

        .tour-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            margin-bottom: 2rem;
            overflow: hidden;
        }

        .tour-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .tour-card .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .tour-rating {
            color: #ffc107;
            font-size: 0.9rem;
        }

        .tour-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: #113d48;
        }

        .results-count {
            background: #fff;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 2rem;
           
            
        }

        @media (max-width: 768px) {
            .filter-sidebar {
                margin-bottom: 1rem;
            }

            .tour-card .card-body {
                padding: 1rem;
            }
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

    <!-- Main Content -->
    <main>

        
        <!-- breadcrumb-section  -->
        <div class="breadcumb-wrapper mb-5" >
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Search Tours</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="home-travel.html">Home</a></li>
                        <li>Search Tours</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container ">
            <div class="row">
                <!-- Filter Sidebar -->
                <div class="col-lg-3">
                    <div  class="filter-sidebar sticky-top  ">
                        <h4>Filter Results</h4>
                        <form method="POST" action="search-tours.php">
                            <div class="mb-3">
                                <label class="form-label">Search by Name</label>
                                <input type="text" name="search" class="form-control" value="<?php echo htmlspecialchars($searchTerm); ?>" placeholder="Tour name...">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <select name="location" class="form-select">
                                    <option value="">All Locations</option>
                                    <option value="delhi" <?php echo ($location == 'delhi' || $location == 'golden-triangle') ? 'selected' : ''; ?>>Delhi</option>
                                    <option value="agra" <?php echo $location == 'agra' ? 'selected' : ''; ?>>Agra</option>
                                    <option value="jaipur" <?php echo $location == 'jaipur' ? 'selected' : ''; ?>>Jaipur</option>
                                    <option value="udaipur" <?php echo $location == 'udaipur' ? 'selected' : ''; ?>>Udaipur</option>
                                    <option value="varanasi" <?php echo $location == 'varanasi' ? 'selected' : ''; ?>>Varanasi</option>
                                    <option value="amritsar" <?php echo $location == 'amritsar' ? 'selected' : ''; ?>>Amritsar</option>
                                    <option value="pushkar" <?php echo $location == 'pushkar' ? 'selected' : ''; ?>>Pushkar</option>
                                    <option value="ranthambore" <?php echo $location == 'ranthambore' ? 'selected' : ''; ?>>Ranthambore</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tour Type</label>
                                <select name="tourType" class="form-select">
                                    <option value="">All Types</option>
                                    <option value="taj-mahal" <?php echo ($tourType == 'taj-mahal' || $tourType == 'day-tour') ? 'selected' : ''; ?>>Taj Mahal Tour</option>
                                    <option value="same-day" <?php echo $tourType == 'same-day' ? 'selected' : ''; ?>>Same Day Tour</option>
                                    <option value="golden-triangle" <?php echo ($tourType == 'golden-triangle' || $tourType == 'multi-day') ? 'selected' : ''; ?>>Golden Triangle</option>
                                    <option value="luxury" <?php echo $tourType == 'luxury' ? 'selected' : ''; ?>>Luxury Tours</option>
                                    <option value="sunrise" <?php echo $tourType == 'sunrise' ? 'selected' : ''; ?>>Sunrise Tours</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Duration</label>
                                <select name="duration" class="form-select">
                                    <option value="" <?php echo (empty($duration) || $duration == 'all') ? 'selected' : ''; ?>>Any Duration</option>
                                    <option value="1" <?php echo $duration == '1' ? 'selected' : ''; ?>>1 Day</option>
                                    <option value="2" <?php echo $duration == '2' ? 'selected' : ''; ?>>2 Days</option>
                                    <option value="3" <?php echo $duration == '3' ? 'selected' : ''; ?>>3 Days</option>
                                    <option value="4" <?php echo $duration == '4' ? 'selected' : ''; ?>>4 Days</option>
                                    <option value="5" <?php echo $duration == '5' ? 'selected' : ''; ?>>5 Days</option>
                                    <option value="6" <?php echo $duration == '6' ? 'selected' : ''; ?>>6 Days</option>
                                    <option value="7" <?php echo $duration == '7' ? 'selected' : ''; ?>>7 Days</option>
                                    <option value="8" <?php echo $duration == '8' ? 'selected' : ''; ?>>8 Days</option>
                                </select>
                            </div>


                            <button type="submit" class="btn w-100 mb-2" style="background-color: #113d48; color: white; border-color: #113d48;">
                                <i class="fas fa-search me-2"></i>Apply Filters
                            </button>
                            <a href="search-tours.php" class="btn btn-outline-secondary w-100">
                                <i class="fas fa-times me-2"></i>Clear All
                            </a>
                        </form>
                    </div>
                </div>

                <!-- Results Section -->
                <div class="col-lg-9">
                    <!-- Results Count -->
                    <div class="results-count">
                        <h5 class="mb-0">
                            Found <?php echo count($filteredTours); ?> tour<?php echo count($filteredTours) !== 1 ? 's' : ''; ?>
                            <?php if (!empty($searchTerm) || !empty($location) || !empty($tourType) || !empty($duration) || !empty($priceRange)): ?>
                                matching your criteria
                            <?php else: ?>
                                in our collection
                            <?php endif; ?>
                        </h5>
                    </div>

                    <!-- Tour Results -->
                    <div class="row">
                        <?php if (empty($filteredTours)): ?>
                            <div class="col-12">
                                <div class="text-center py-5">
                                    <i class="fas fa-search fa-3x text-muted mb-3"></i>
                                    <h4>No tours found</h4>
                                    <p class="text-muted">Try adjusting your search criteria or browse all tours.</p>
                                    <a href="search-tours.php" class="btn" style="background-color: #113d48; color: white; border-color: #113d48;">View All Tours</a>
                                </div>
                            </div>
                        <?php else: ?>
                            <?php foreach ($filteredTours as $tour): ?>
                                <div class="col-md-6 mb-4 col-lg-4">
                                    <div class="card tour-card h-100 shadow" style="border: 2px solid #e9ecef; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                                        <div style="position: relative;">
                                            <img src="<?php echo $tour['image']; ?>" class="card-img-top" alt="<?php echo $tour['name']; ?>" style="border-top-left-radius: 15px; border-top-right-radius: 15px; height: 220px; object-fit: cover;">
                                            <span class="badge" style="
                                                position: absolute;
                                                top: 1rem;
                                                left: 1rem;
                                                background: #113d48;
                                                color: #fff;
                                                padding: 0.45rem 1.1rem;
                                                font-size: 0.85rem;
                                                font-weight: 600;
                                                border-radius: 30px;
                                                letter-spacing: 0.03em;
                                                box-shadow: 0 2px 8px rgba(17,61,72,0.08);
                                                z-index: 2;
                                            ">
                                                <?php echo $tour['duration']; ?> Day<?php echo $tour['duration'] > 1 ? 's' : ''; ?>
                                            </span>
                                            <span class="badge" style="
                                                position: absolute;
                                                top: 1rem;
                                                right: 1rem;
                                                background: #ffc107;
                                                color: #113d48;
                                                padding: 0.45rem 1.1rem;
                                                font-size: 0.85rem;
                                                font-weight: 600;
                                                border-radius: 30px;
                                                letter-spacing: 0.03em;
                                                box-shadow: 0 2px 8px rgba(17,61,72,0.08);
                                                z-index: 2;
                                            ">
                                                 <i class="fas fa-map-marker-alt me-1"></i>
                                                    <?php echo ucwords(str_replace(' ', ', ', $tour['location'])); ?>
                                            </span>
                                        </div>
                                        <div class="card-body d-flex flex-column" style="background: #fff; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                                            <h5 class="card-title mb-2" style="color: #113d48; font-weight: 700;"><?php echo $tour['name']; ?></h5>
                                            <div class="tour-rating mb-2" style="color: #ffc107;">
                                                <?php
                                                    $fullStars = floor($tour['rating']);
                                                    $halfStar = ($tour['rating'] - $fullStars) >= 0.5;
                                                    for ($i = 1; $i <= 5; $i++):
                                                        if ($i <= $fullStars): ?>
                                                            <i class="fas fa-star"></i>
                                                        <?php elseif ($halfStar && $i == $fullStars + 1): ?>
                                                            <i class="fas fa-star-half-alt"></i>
                                                        <?php else: ?>
                                                            <i class="far fa-star"></i>
                                                        <?php endif;
                                                    endfor;
                                                ?>
                                                <span class="ms-1" style="color: #495057;"><?php echo $tour['rating']; ?> (<?php echo $tour['reviews']; ?> reviews)</span>
                                            </div>
                                          
                                          
                                            <a href="tour-details.php?slug=<?php echo $tour['slug']; ?>" class="btn w-100 mt-auto" style="background-color: #113d48; color: white; border-color: #113d48; font-weight: 600; border-radius: 8px;">
                                                View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- include the footer here  -->
    <?php include 'footer.php'; ?>

    <!-- include the bottom script -->
    <?php include 'bottom-script.php'; ?>

    <script>
        // Add any additional JavaScript for dynamic filtering if needed
        document.addEventListener('DOMContentLoaded', function() {
            // You can add JavaScript for additional dynamic filtering here
            console.log('Search Tours page loaded with <?php echo count($filteredTours); ?> results');
        });
    </script>
</body>

</html>