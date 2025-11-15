<?php
/**
 * Indiana Taj Tour - Tours Listing Page
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

// Include tours data from data.php file
include 'data.php';

 // Tour data array - extracted from index.php tours
$tours = 

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
    <title>All Tours - Indiana Taj Tour</title>
    <meta name="author" content="Indiana Taj Tour" />
    <meta name="description" content="Browse our complete collection of tours including Taj Mahal tours, Golden Triangle packages, and day trips from Delhi. Find your perfect India adventure." />
    <meta name="keywords" content="Taj Mahal tour, Golden Triangle tour, Delhi tours, Jaipur tours, Agra tours, India travel packages" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="canonical" href="https://indianatajtours.com/tours/" />
    <meta property="og:url" content="https://indianatajtours.com/tours/" />


    <!-- Hardcoded CSS links and fonts for tours subdirectory -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Manrope:wght@200..800&family=Montez&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.jpg" />

    <style>
    /* Hide scrollbar globally */
    html {
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE and Edge */
    }

    html::-webkit-scrollbar {
        display: none; /* Chrome, Safari, and Opera */
    }

    /* Ensure body doesn't show scrollbars */
    body {
        overflow-x: hidden;
    }
    
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
    <?php include '../preloader.php'; ?>

    <!-- include the sidebar file -->
    <?php include '../sidebar.php'; ?>

    <!-- Include the header file -->
    <?php include '../header.php'; ?>

    <!-- Main Content -->
    <main>

        
        <!-- breadcrumb-section  -->
        <div class="breadcumb-wrapper mb-5" >
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">All Tours</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="../index.php">Home</a></li>
                        <li>All Tours</li>
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
                        <form method="POST" action="index.php">
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
                            <a href="index.php" class="btn btn-outline-secondary w-100">
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
                                    <a href="index.php" class="btn" style="background-color: #113d48; color: white; border-color: #113d48;">View All Tours</a>
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
                                          
                                          
                                            <a href="<?php echo $tour['url']; ?>" class="btn w-100 mt-auto" style="background-color: #113d48; color: white; border-color: #113d48; font-weight: 600; border-radius: 8px;">
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
    <?php include '../footer.php'; ?>

    <!-- Hardcoded JavaScript includes for tours subdirectory -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
                transition: stroke-dashoffset 10ms linear 0s;
                stroke-dasharray: 307.919, 307.919;
                stroke-dashoffset: 307.919;
              "></path>
        </svg>
    </div>
    <script src="../assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/isotope.pkgd.min.js"></script>
    <script src="../assets/js/gsap.min.js"></script>
    <script src="../assets/js/circle-progress.js"></script>
    <script src="../assets/js/matter.min.js"></script>
    <script src="../assets/js/matterjs-custom.js"></script>
    <script src="../assets/js/nice-select.min.js"></script>
    <script src="../assets/js/main.js"></script>

    <script>
        // Add any additional JavaScript for dynamic filtering if needed
        document.addEventListener('DOMContentLoaded', function() {
            // You can add JavaScript for additional dynamic filtering here
            console.log('Tours Index page loaded with <?php echo count($filteredTours); ?> tours');
        });
    </script>
</body>

</html>