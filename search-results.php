<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Search Results | Indiana Taj Tour</title>
    <meta name="author" content="Indiana Taj Tour" />
    <meta name="description" content="Find your perfect tour package with Indiana Taj Tour. Search results for tours in Delhi, Agra, Jaipur and more." />
    <meta name="keywords" content="tour search, India tours, Delhi tours, Agra tours, Jaipur tours" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />

    <!-- include the links file  -->
    <?php include "links.php" ?>

    <style>
        .search-filters {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .tour-card {
            border: 1px solid #e9ecef;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            transition: box-shadow 0.3s;
        }
        .tour-card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .tour-image {
            height: 200px;
            background-size: cover;
            background-position: center;
        }
        .tour-content {
            padding: 20px;
        }
        .no-results {
            text-align: center;
            padding: 50px 20px;
            color: #6c757d;
        }
        .search-summary {
            background: #e3f2fd;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
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
        <!-- Breadcrumb -->
        <div class="breadcumb-wrapper">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Search Results</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="index.php">Home</a></li>
                        <li>Search Results</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Search Results Section -->
        <section class="space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        // Get search parameters
                        $destination = isset($_GET['destination']) ? $_GET['destination'] : '';
                        $tourType = isset($_GET['tourType']) ? $_GET['tourType'] : '';
                        $duration = isset($_GET['duration']) ? $_GET['duration'] : '';
                        $category = isset($_GET['category']) ? $_GET['category'] : '';

                        // Display search summary
                        echo '<div class="search-summary">';
                        echo '<h4>Search Results for:</h4>';
                        echo '<p>';
                        if ($destination) echo 'Destination: ' . ucfirst($destination) . ' | ';
                        if ($tourType) echo 'Type: ' . ucfirst($tourType) . ' | ';
                        if ($duration) echo 'Duration: ' . $duration . ' | ';
                        if ($category) echo 'Category: ' . ucfirst($category);
                        echo '</p>';
                        echo '</div>';

                        // Define all available tours
                        $tours = [
                            [
                                'id' => 'taj-mahal-day-tour',
                                'title' => 'Taj Mahal Day Tour by Car from Delhi',
                                'destination' => 'agra',
                                'type' => 'day-tour',
                                'duration' => '1',
                                'category' => 'standard',
                                'image' => 'assets/img/taj_mahal_tour/taj_mahal-1.png',
                                'description' => 'Experience the magnificence of the Taj Mahal on a comfortable day trip from Delhi.',
                                'url' => 'taj-mahal-and-agra-fort-tour-by-car-from-delhi.php',
                                'rating' => '4.7',
                                'reviews' => '77'
                            ],
                            [
                                'id' => 'taj-mahal-sunrise',
                                'title' => 'Taj Mahal Sunrise Tour from Delhi',
                                'destination' => 'agra',
                                'type' => 'sunrise',
                                'duration' => '1',
                                'category' => 'luxury',
                                'image' => 'assets/img/taj_mahal_tour/taj_mahal-2.png',
                                'description' => 'Witness the magical beauty of Taj Mahal at sunrise with our exclusive tour.',
                                'url' => 'taj-mahal-sunrise-tour-from-delhi.php',
                                'rating' => '4.8',
                                'reviews' => '50'
                            ],
                            [
                                'id' => 'gatimaan-express',
                                'title' => 'Taj Mahal Tour by Gatimaan Express Train',
                                'destination' => 'agra',
                                'type' => 'day-tour',
                                'duration' => '1',
                                'category' => 'premium',
                                'image' => 'assets/img/taj_mahal_tour/taj_mahal-3.png',
                                'description' => 'Experience India\'s fastest train journey combined with Taj Mahal exploration.',
                                'url' => 'taj-mahal-tour-by-gatimaan-express-train.php',
                                'rating' => '4.8',
                                'reviews' => '750'
                            ],
                            [
                                'id' => 'luxury-taj-tour',
                                'title' => 'Taj Mahal Luxury Tour by Premium Car',
                                'destination' => 'agra',
                                'type' => 'luxury',
                                'duration' => '1',
                                'category' => 'luxury',
                                'image' => 'assets/img/taj_mahal_tour/taj_mahal-4.png',
                                'description' => 'Experience the Taj Mahal in ultimate luxury with premium vehicles and services.',
                                'url' => 'taj-mahal-luxury-tour-by-premium-car-from-delhi.php',
                                'rating' => '4.9',
                                'reviews' => '340'
                            ],
                            [
                                'id' => 'delhi-city-tour',
                                'title' => 'Full Day Old and New Delhi City Tour',
                                'destination' => 'delhi',
                                'type' => 'same-day',
                                'duration' => '1',
                                'category' => 'standard',
                                'image' => 'assets/img/same_day_tour/delhi-gate.png',
                                'description' => 'Explore both Old and New Delhi in this comprehensive city tour.',
                                'url' => 'full-day-old-and-new-delhi-city-tour.php',
                                'rating' => '4.9',
                                'reviews' => '580'
                            ],
                            [
                                'id' => 'half-day-delhi',
                                'title' => 'Half Day Delhi City Tour',
                                'destination' => 'delhi',
                                'type' => 'same-day',
                                'duration' => '1',
                                'category' => 'standard',
                                'image' => 'assets/img/same_day_tour/kutub-minar.png',
                                'description' => 'Essential highlights of Delhi in a compact half-day tour.',
                                'url' => 'half-day-delhi-city-tour.php',
                                'rating' => '4.9',
                                'reviews' => '460'
                            ],
                            [
                                'id' => 'jaipur-city-tour',
                                'title' => 'Full Day Jaipur City Tour by Car',
                                'destination' => 'jaipur',
                                'type' => 'same-day',
                                'duration' => '1',
                                'category' => 'standard',
                                'image' => 'assets/img/same_day_tour/hawa-mahal.png',
                                'description' => 'Discover the Pink City of Jaipur with our comprehensive day tour.',
                                'url' => 'full-day-jaipur-city-tour-by-car.php',
                                'rating' => '4.9',
                                'reviews' => '610'
                            ],
                            [
                                'id' => 'jaipur-from-delhi',
                                'title' => 'Jaipur Tour from Delhi by Car',
                                'destination' => 'jaipur',
                                'type' => 'day-tour',
                                'duration' => '1',
                                'category' => 'standard',
                                'image' => 'assets/img/same_day_tour/amber-fort.png',
                                'description' => 'Round trip tour from Delhi to explore Jaipur\'s royal heritage.',
                                'url' => 'jaipur-tour-from-delhi-by-car.php',
                                'rating' => '4.9',
                                'reviews' => '370'
                            ],
                            [
                                'id' => 'golden-triangle-3days',
                                'title' => 'Golden Triangle Tour 3 Days',
                                'destination' => 'golden-triangle',
                                'type' => 'golden-triangle',
                                'duration' => '3',
                                'category' => 'standard',
                                'image' => 'assets/img/golden_triangle_tour/golden-tour-1.png',
                                'description' => 'Classic 3-day tour covering Delhi, Agra, and Jaipur.',
                                'url' => 'golden-triangle-tour-3-days.php',
                                'rating' => '4.7',
                                'reviews' => '340'
                            ],
                            [
                                'id' => 'golden-triangle-4days',
                                'title' => 'Golden Triangle Tour 4 Days',
                                'destination' => 'golden-triangle',
                                'type' => 'golden-triangle',
                                'duration' => '4',
                                'category' => 'standard',
                                'image' => 'assets/img/golden_triangle_tour/golden-tour-2.png',
                                'description' => 'Extended 4-day Golden Triangle experience with more time to explore.',
                                'url' => 'golden-triangle-tour-4-days.php',
                                'rating' => '4.8',
                                'reviews' => '460'
                            ],
                            [
                                'id' => 'golden-triangle-5days',
                                'title' => 'Golden Triangle Tour 5 Days',
                                'destination' => 'golden-triangle',
                                'type' => 'golden-triangle',
                                'duration' => '5',
                                'category' => 'premium',
                                'image' => 'assets/img/golden_triangle_tour/golden-tour-3.png',
                                'description' => 'Comprehensive 5-day tour with additional cultural experiences.',
                                'url' => 'golden-triangle-tour-5-days.php',
                                'rating' => '4.9',
                                'reviews' => '430'
                            ],
                            [
                                'id' => 'golden-amritsar',
                                'title' => 'Golden Triangle Tour with Amritsar',
                                'destination' => 'amritsar',
                                'type' => 'multi-day',
                                'duration' => '6',
                                'category' => 'premium',
                                'image' => 'assets/img/golden_triangle_tour/golden-amritsar.png',
                                'description' => 'Golden Triangle plus the spiritual city of Amritsar and Golden Temple.',
                                'url' => 'golden-triangle-tour-with-amritsar.php',
                                'rating' => '4.8',
                                'reviews' => '290'
                            ],
                            [
                                'id' => 'golden-pushkar',
                                'title' => 'Golden Triangle Tour with Pushkar',
                                'destination' => 'pushkar',
                                'type' => 'multi-day',
                                'duration' => '6',
                                'category' => 'standard',
                                'image' => 'assets/img/golden_triangle_tour/golden-pushkar.png',
                                'description' => 'Golden Triangle with the sacred town of Pushkar and its holy lake.',
                                'url' => 'golden-triangle-tour-with-pushkar.php',
                                'rating' => '4.8',
                                'reviews' => '390'
                            ],
                            [
                                'id' => 'golden-ranthambore',
                                'title' => 'Golden Triangle Tour with Ranthambore',
                                'destination' => 'ranthambore',
                                'type' => 'multi-day',
                                'duration' => '7',
                                'category' => 'luxury',
                                'image' => 'assets/img/golden_triangle_tour/golden-ranthambore.png',
                                'description' => 'Golden Triangle plus tiger safari in Ranthambore National Park.',
                                'url' => 'golden-triangle-tour-with-ranthambore.php',
                                'rating' => '4.9',
                                'reviews' => '410'
                            ],
                            [
                                'id' => 'golden-udaipur',
                                'title' => 'Golden Triangle Tour with Udaipur',
                                'destination' => 'udaipur',
                                'type' => 'multi-day',
                                'duration' => '7',
                                'category' => 'luxury',
                                'image' => 'assets/img/golden_triangle_tour/golden-udaipur.png',
                                'description' => 'Golden Triangle plus the romantic city of Udaipur.',
                                'url' => 'golden-triangle-tour-with-udaipur.php',
                                'rating' => '4.7',
                                'reviews' => '520'
                            ],
                            [
                                'id' => 'golden-varanasi',
                                'title' => 'Golden Triangle Tour with Varanasi',
                                'destination' => 'varanasi',
                                'type' => 'multi-day',
                                'duration' => '7',
                                'category' => 'premium',
                                'image' => 'assets/img/golden_triangle_tour/golden-varanasi.png',
                                'description' => 'Golden Triangle plus the spiritual city of Varanasi on the Ganges.',
                                'url' => 'golden-triangle-tour-with-varanasi.php',
                                'rating' => '4.7',
                                'reviews' => '330'
                            ]
                        ];

                        // Filter tours based on search criteria
                        $filteredTours = [];
                        foreach ($tours as $tour) {
                            $matches = true;

                            if ($destination && $destination !== 'all') {
                                if ($destination === 'golden-triangle') {
                                    // Golden triangle includes Delhi, Agra, Jaipur
                                    if (!in_array($tour['destination'], ['delhi', 'agra', 'jaipur', 'golden-triangle'])) {
                                        $matches = false;
                                    }
                                } elseif ($tour['destination'] !== $destination) {
                                    $matches = false;
                                }
                            }

                            if ($tourType && $tourType !== 'all' && $tour['type'] !== $tourType) {
                                $matches = false;
                            }

                            if ($duration && $duration !== 'all' && $tour['duration'] !== $duration) {
                                $matches = false;
                            }

                            if ($category && $category !== 'all' && $tour['category'] !== $category) {
                                $matches = false;
                            }

                            if ($matches) {
                                $filteredTours[] = $tour;
                            }
                        }

                        // Display results
                        if (empty($filteredTours)) {
                            echo '<div class="no-results">';
                            echo '<h3>No tours found matching your criteria</h3>';
                            echo '<p>Please try adjusting your search filters or <a href="index.php">return to homepage</a></p>';
                            echo '</div>';
                        } else {
                            echo '<div class="row">';
                            foreach ($filteredTours as $tour) {
                                echo '<div class="col-lg-6 col-xl-4">';
                                echo '<div class="tour-card">';
                                echo '<div class="tour-image" style="background-image: url(\'' . $tour['image'] . '\');"></div>';
                                echo '<div class="tour-content">';
                                echo '<h3 class="box-title"><a href="' . $tour['url'] . '">' . $tour['title'] . '</a></h3>';
                                echo '<div class="tour-rating mb-2">';
                                echo '<div class="star-rating" role="img" aria-label="Rated ' . $tour['rating'] . ' out of 5">';
                                echo '<span style="width: ' . ($tour['rating'] * 20) . '%">Rated <strong class="rating">' . $tour['rating'] . '</strong> out of 5</span>';
                                echo '</div>';
                                echo '<a href="#" class="woocommerce-review-link">(' . $tour['reviews'] . ' Reviews)</a>';
                                echo '</div>';
                                echo '<p class="tour-description mb-3">' . $tour['description'] . '</p>';
                                echo '<div class="tour-meta mb-3">';
                                echo '<span class="badge bg-primary me-2">' . ucfirst($tour['destination']) . '</span>';
                                echo '<span class="badge bg-secondary me-2">' . $tour['duration'] . ' Day' . ($tour['duration'] > 1 ? 's' : '') . '</span>';
                                echo '<span class="badge bg-info">' . ucfirst($tour['category']) . '</span>';
                                echo '</div>';
                                echo '<a href="' . $tour['url'] . '" class="th-btn style4 th-icon">Read More</a>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                            echo '</div>';
                        }
                        ?>
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