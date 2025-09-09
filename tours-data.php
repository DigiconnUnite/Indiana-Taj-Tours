// Tour data mapping with slugs
<?php
$tours = [
    // Taj Mahal Tours
    'taj-mahal-day-tour-by-car-from-delhi' => [
        'id' => 1,
        'title' => 'Taj Mahal Day Tour by Car from Delhi',
        'slug' => 'taj-mahal-day-tour-by-car-from-delhi',
        'type' => 'taj-mahal',
        'location' => 'Delhi - Agra - Delhi',
        'duration' => '1 Day Tour',
        'price' => 150,
        'rating' => 4.7,
        'reviews' => 77,
        'badge' => 'Most Popular',
        'pickup_drop' => 'Delhi',
        'service' => 'Private Tour',
        'languages' => 'English, Hindi, Spanish (on request)',
        'transport' => 'Private Luxury Car',
        'hero_image' => 'assets/img/bg/banner-img.png',
        'gallery' => [
            'assets/img/taj_mahal_tour/taj_mahal-2.png',
            'assets/img/taj_mahal_tour/agra-fort.jpg',
            'assets/img/taj_mahal_tour/car.png',
            'assets/img/taj_mahal_tour/food.png'
        ],
        'overview' => 'The Taj Mahal Tour by Car from Delhi is designed with your comfort in mind, ensuring a seamless and luxurious experience from start to finish.',
        'why_choose' => 'Experience the best of Agra\'s Mughal architecture in a single, comfortable day trip.',
        'highlights' => [
            ['icon' => 'fas fa-sun', 'title' => 'Sunrise at Taj Mahal', 'desc' => 'Marvel at the stunning Taj Mahal at sunrise'],
            ['icon' => 'fas fa-utensils', 'title' => 'Gourmet Breakfast', 'desc' => 'Relish a delicious breakfast at a five-star hotel'],
            ['icon' => 'fas fa-landmark', 'title' => 'Agra Fort Exploration', 'desc' => 'Explore the historic Agra Fort'],
            ['icon' => 'fas fa-user-shield', 'title' => 'Exclusive Access', 'desc' => 'Enjoy exclusive access to the Taj Mahal']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => '6:30 AM', 'title' => 'Pickup from Delhi', 'desc' => 'Pickup from your Delhi hotel'],
            ['step' => 2, 'time' => '9:30 AM', 'title' => 'Taj Mahal Visit', 'desc' => 'Explore the Taj Mahal with your guide'],
            ['step' => 3, 'time' => '11:30 AM', 'title' => 'Agra Fort', 'desc' => 'Visit the historic Agra Fort'],
            ['step' => 4, 'time' => '12:30 PM', 'title' => 'Lunch', 'desc' => 'Enjoy lunch at a local restaurant'],
            ['step' => 5, 'time' => '1:30 PM', 'title' => 'Baby Taj', 'desc' => 'Visit Itimad-ud-Daulah'],
            ['step' => 6, 'time' => '2:30 PM', 'title' => 'Return to Delhi', 'desc' => 'Return journey to Delhi']
        ],
        'inclusions' => [
            'Hotel pickup and drop-off',
            'Private air-conditioned car',
            'Expert guide',
            'All monument tickets',
            'Lunch',
            'All taxes'
        ],
        'exclusions' => [
            'Tips and gratuities',
            'Personal expenses'
        ],
        'related_tours' => [
            ['title' => 'Taj Mahal Sunrise Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-2.png', 'url' => 'taj-mahal-sunrise-tour-from-delhi.php', 'duration' => '1 Day', 'rating' => '4.8 (50+)'],
            ['title' => 'Taj Mahal by Train', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-3.png', 'url' => 'taj-mahal-tour-by-gatimaan-express-train.php', 'duration' => '1 Day', 'rating' => '4.8 (750+)'],
            ['title' => 'Taj Mahal Luxury Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-4.png', 'url' => 'taj-mahal-luxury-tour-by-premium-car-from-delhi.php', 'duration' => '1 Day', 'rating' => '4.9 (340+)']
        ]
    ],

    'taj-mahal-sunrise-tour-from-delhi' => [
        'id' => 2,
        'title' => 'Taj Mahal Sunrise Tour from Delhi',
        'slug' => 'taj-mahal-sunrise-tour-from-delhi',
        'type' => 'taj-mahal',
        'location' => 'Delhi - Agra - Delhi',
        'duration' => '1 Day Tour',
        'price' => 200,
        'rating' => 4.8,
        'reviews' => 50,
        'badge' => 'Premium Experience',
        'pickup_drop' => 'Delhi',
        'service' => 'Private Tour',
        'languages' => 'English, Hindi',
        'transport' => 'Private Luxury Car',
        'hero_image' => 'assets/img/taj_mahal_tour/taj_mahal-2.png',
        'gallery' => [
            'assets/img/taj_mahal_tour/taj_mahal-1.png',
            'assets/img/taj_mahal_tour/taj_mahal-2.png',
            'assets/img/taj_mahal_tour/sunrise.png',
            'assets/img/taj_mahal_tour/agra-fort.jpg'
        ],
        'overview' => 'Experience the magical sunrise at the Taj Mahal with our exclusive sunrise tour from Delhi.',
        'why_choose' => 'Be among the first visitors of the day at the Taj Mahal.',
        'highlights' => [
            ['icon' => 'fas fa-sun', 'title' => 'Sunrise Experience', 'desc' => 'Witness the Taj Mahal come alive with sunlight'],
            ['icon' => 'fas fa-clock', 'title' => 'Early Access', 'desc' => 'Enter before the general public'],
            ['icon' => 'fas fa-camera', 'title' => 'Photography', 'desc' => 'Perfect lighting for photos'],
            ['icon' => 'fas fa-users', 'title' => 'Small Groups', 'desc' => 'Intimate experience']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => '4:00 AM', 'title' => 'Early Pickup', 'desc' => 'Pickup from your Delhi hotel'],
            ['step' => 2, 'time' => '6:30 AM', 'title' => 'Sunrise at Taj Mahal', 'desc' => 'Experience the magical sunrise'],
            ['step' => 3, 'time' => '8:30 AM', 'title' => 'Agra Fort', 'desc' => 'Explore the historic fort'],
            ['step' => 4, 'time' => '10:00 AM', 'title' => 'Breakfast', 'desc' => 'Enjoy breakfast at a restaurant'],
            ['step' => 5, 'time' => '11:00 AM', 'title' => 'Return', 'desc' => 'Return to Delhi']
        ],
        'inclusions' => [
            'Early morning pickup',
            'Private vehicle',
            'Expert guide',
            'Sunrise entry tickets',
            'Breakfast',
            'All taxes'
        ],
        'exclusions' => [
            'Personal expenses',
            'Tips'
        ],
        'related_tours' => [
            ['title' => 'Taj Mahal Day Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-1.png', 'url' => 'taj-mahal-and-agra-fort-tour-by-car-from-delhi.php', 'duration' => '1 Day', 'rating' => '4.7 (77+)'],
            ['title' => 'Taj Mahal by Train', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-3.png', 'url' => 'taj-mahal-tour-by-gatimaan-express-train.php', 'duration' => '1 Day', 'rating' => '4.8 (750+)'],
            ['title' => 'Taj Mahal Luxury Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-4.png', 'url' => 'taj-mahal-luxury-tour-by-premium-car-from-delhi.php', 'duration' => '1 Day', 'rating' => '4.9 (340+)']
        ]
    ],

    'taj-mahal-tour-by-gatimaan-express-train' => [
        'id' => 3,
        'title' => 'Taj Mahal Tour by Gatimaan Express Train',
        'slug' => 'taj-mahal-tour-by-gatimaan-express-train',
        'type' => 'taj-mahal',
        'location' => 'Delhi - Agra - Delhi',
        'duration' => '1 Day Tour',
        'price' => 180,
        'rating' => 4.8,
        'reviews' => 750,
        'badge' => 'Fast & Comfortable',
        'pickup_drop' => 'Delhi Railway Station',
        'service' => 'Train + Car',
        'languages' => 'English, Hindi',
        'transport' => 'Gatimaan Express + Private Car',
        'hero_image' => 'assets/img/taj_mahal_tour/taj_mahal-3.png',
        'gallery' => [
            'assets/img/taj_mahal_tour/train.png',
            'assets/img/taj_mahal_tour/taj_mahal-1.png',
            'assets/img/taj_mahal_tour/agra-fort.jpg',
            'assets/img/taj_mahal_tour/car.png'
        ],
        'overview' => 'Experience the fastest way to visit the Taj Mahal with India\'s fastest train.',
        'why_choose' => 'Save time with India\'s fastest train service.',
        'highlights' => [
            ['icon' => 'fas fa-train', 'title' => 'High-Speed Train', 'desc' => 'Travel on India\'s fastest train'],
            ['icon' => 'fas fa-clock', 'title' => 'Time Saving', 'desc' => 'Complete journey in 1.5 hours'],
            ['icon' => 'fas fa-utensils', 'title' => 'Onboard Catering', 'desc' => 'Meals and refreshments on train'],
            ['icon' => 'fas fa-landmark', 'title' => 'Mughal Heritage', 'desc' => 'Explore Taj Mahal and Agra Fort']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => '6:00 AM', 'title' => 'Pickup', 'desc' => 'Pickup from hotel to railway station'],
            ['step' => 2, 'time' => '7:00 AM', 'title' => 'Gatimaan Express', 'desc' => 'Board the high-speed train'],
            ['step' => 3, 'time' => '8:30 AM', 'title' => 'Arrival in Agra', 'desc' => 'Arrive and transfer to Taj Mahal'],
            ['step' => 4, 'time' => '9:00 AM', 'title' => 'Taj Mahal', 'desc' => 'Explore the Taj Mahal'],
            ['step' => 5, 'time' => '11:30 AM', 'title' => 'Agra Fort', 'desc' => 'Visit the historic fort'],
            ['step' => 6, 'time' => '1:00 PM', 'title' => 'Lunch', 'desc' => 'Enjoy lunch at a restaurant'],
            ['step' => 7, 'time' => '2:30 PM', 'title' => 'Return Train', 'desc' => 'Board return train'],
            ['step' => 8, 'time' => '4:00 PM', 'title' => 'Arrival in Delhi', 'desc' => 'Arrive back in Delhi']
        ],
        'inclusions' => [
            'Hotel pickup',
            'Gatimaan Express tickets',
            'Private car in Agra',
            'Expert guide',
            'All monument tickets',
            'Lunch',
            'All taxes'
        ],
        'exclusions' => [
            'Personal expenses',
            'Tips',
            'Camera fees'
        ],
        'related_tours' => [
            ['title' => 'Taj Mahal Day Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-1.png', 'url' => 'taj-mahal-and-agra-fort-tour-by-car-from-delhi.php', 'duration' => '1 Day', 'rating' => '4.7 (77+)'],
            ['title' => 'Taj Mahal Sunrise Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-2.png', 'url' => 'taj-mahal-sunrise-tour-from-delhi.php', 'duration' => '1 Day', 'rating' => '4.8 (50+)'],
            ['title' => 'Taj Mahal Luxury Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-4.png', 'url' => 'taj-mahal-luxury-tour-by-premium-car-from-delhi.php', 'duration' => '1 Day', 'rating' => '4.9 (340+)']
        ]
    ],

    'taj-mahal-luxury-tour-by-premium-car-from-delhi' => [
        'id' => 4,
        'title' => 'Taj Mahal Luxury Tour by Premium Car from Delhi',
        'slug' => 'taj-mahal-luxury-tour-by-premium-car-from-delhi',
        'type' => 'taj-mahal',
        'location' => 'Delhi - Agra - Delhi',
        'duration' => '1 Day Tour',
        'price' => 300,
        'rating' => 4.9,
        'reviews' => 340,
        'badge' => 'Luxury Experience',
        'pickup_drop' => 'Delhi',
        'service' => 'Premium Private Tour',
        'languages' => 'English, Hindi, Multiple',
        'transport' => 'Premium Luxury Vehicle',
        'hero_image' => 'assets/img/taj_mahal_tour/taj_mahal-4.png',
        'gallery' => [
            'assets/img/taj_mahal_tour/luxury-car.png',
            'assets/img/taj_mahal_tour/taj_mahal-1.png',
            'assets/img/taj_mahal_tour/agra-fort.jpg',
            'assets/img/taj_mahal_tour/premium-food.png'
        ],
        'overview' => 'Indulge in the ultimate luxury experience with our premium Taj Mahal tour.',
        'why_choose' => 'Experience Taj Mahal in absolute luxury with VIP access.',
        'highlights' => [
            ['icon' => 'fas fa-crown', 'title' => 'VIP Access', 'desc' => 'Skip the lines with VIP entry'],
            ['icon' => 'fas fa-car', 'title' => 'Luxury Vehicle', 'desc' => 'Travel in premium luxury car'],
            ['icon' => 'fas fa-utensils', 'title' => 'Gourmet Dining', 'desc' => 'Exclusive dining experience'],
            ['icon' => 'fas fa-user-tie', 'title' => 'Personal Guide', 'desc' => 'Dedicated expert guide']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => '7:00 AM', 'title' => 'Luxury Pickup', 'desc' => 'Pickup from premium hotel'],
            ['step' => 2, 'time' => '10:00 AM', 'title' => 'VIP Taj Mahal', 'desc' => 'Skip crowds with VIP entry'],
            ['step' => 3, 'time' => '12:00 PM', 'title' => 'Agra Fort', 'desc' => 'Private tour of Agra Fort'],
            ['step' => 4, 'time' => '1:30 PM', 'title' => 'Gourmet Lunch', 'desc' => 'Fine dining experience'],
            ['step' => 5, 'time' => '3:00 PM', 'title' => 'Baby Taj', 'desc' => 'Private visit to Baby Taj'],
            ['step' => 6, 'time' => '4:30 PM', 'title' => 'Return', 'desc' => 'Comfortable return journey']
        ],
        'inclusions' => [
            'Luxury vehicle',
            'VIP entry tickets',
            'Private guide',
            'Gourmet meals',
            'Premium refreshments',
            'All taxes and gratuities'
        ],
        'exclusions' => [
            'International flights',
            'Personal shopping'
        ],
        'related_tours' => [
            ['title' => 'Taj Mahal Day Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-1.png', 'url' => 'taj-mahal-and-agra-fort-tour-by-car-from-delhi.php', 'duration' => '1 Day', 'rating' => '4.7 (77+)'],
            ['title' => 'Taj Mahal Sunrise Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-2.png', 'url' => 'taj-mahal-sunrise-tour-from-delhi.php', 'duration' => '1 Day', 'rating' => '4.8 (50+)'],
            ['title' => 'Taj Mahal by Train', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-3.png', 'url' => 'taj-mahal-tour-by-gatimaan-express-train.php', 'duration' => '1 Day', 'rating' => '4.8 (750+)']
        ]
    ],

    // Same Day Tours
    'full-day-jaipur-city-tour-by-car' => [
        'id' => 5,
        'title' => 'Full Day Jaipur City Tour by Car',
        'slug' => 'full-day-jaipur-city-tour-by-car',
        'type' => 'same-day',
        'location' => 'Jaipur',
        'duration' => '1 Day Tour',
        'price' => 120,
        'rating' => 4.9,
        'reviews' => 610,
        'badge' => 'Pink City Experience',
        'pickup_drop' => 'Jaipur',
        'service' => 'Private Tour',
        'languages' => 'English, Hindi',
        'transport' => 'Private AC Car',
        'hero_image' => 'assets/img/same_day_tour/hawa-mahal.png',
        'gallery' => [
            'assets/img/same_day_tour/hawa-mahal.png',
            'assets/img/same_day_tour/city-palace.png',
            'assets/img/same_day_tour/amber-fort.png',
            'assets/img/same_day_tour/jantar-mantar.png'
        ],
        'overview' => 'Explore the vibrant Pink City of Jaipur on a comprehensive full-day tour.',
        'why_choose' => 'Discover Jaipur\'s royal heritage with a local expert guide.',
        'highlights' => [
            ['icon' => 'fas fa-crown', 'title' => 'Royal Palaces', 'desc' => 'Explore magnificent palaces'],
            ['icon' => 'fas fa-sun', 'title' => 'Amber Fort', 'desc' => 'Visit the stunning hilltop fort'],
            ['icon' => 'fas fa-building', 'title' => 'City Palace', 'desc' => 'Explore the grand palace complex'],
            ['icon' => 'fas fa-star', 'title' => 'Hawa Mahal', 'desc' => 'See the iconic Palace of Winds']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => '8:00 AM', 'title' => 'Hotel Pickup', 'desc' => 'Pickup from your Jaipur hotel'],
            ['step' => 2, 'time' => '9:00 AM', 'title' => 'Amber Fort', 'desc' => 'Explore the magnificent Amber Fort'],
            ['step' => 3, 'time' => '11:30 AM', 'title' => 'Jantar Mantar', 'desc' => 'Visit the astronomical observatory'],
            ['step' => 4, 'time' => '12:30 PM', 'title' => 'Lunch', 'desc' => 'Traditional Rajasthani lunch'],
            ['step' => 5, 'time' => '1:30 PM', 'title' => 'City Palace', 'desc' => 'Explore the City Palace complex'],
            ['step' => 6, 'time' => '3:30 PM', 'title' => 'Hawa Mahal', 'desc' => 'Visit the famous Palace of Winds'],
            ['step' => 7, 'time' => '5:00 PM', 'title' => 'Return', 'desc' => 'Drop-off at your hotel']
        ],
        'inclusions' => [
            'Hotel pickup and drop-off',
            'Private air-conditioned car',
            'Expert guide',
            'All monument tickets',
            'Traditional lunch',
            'Mineral water',
            'All taxes'
        ],
        'exclusions' => [
            'Personal expenses',
            'Tips',
            'Elephant ride (optional)',
            'Camera fees'
        ],
        'related_tours' => [
            ['title' => 'Jaipur Tour from Delhi', 'image' => 'assets/img/same_day_tour/amber-fort.png', 'url' => 'jaipur-tour-from-delhi-by-car.php', 'duration' => '1 Day', 'rating' => '4.9 (370+)'],
            ['title' => 'Delhi City Tour', 'image' => 'assets/img/same_day_tour/delhi-gate.png', 'url' => 'full-day-old-and-new-delhi-city-tour.php', 'duration' => '1 Day', 'rating' => '4.9 (580+)'],
            ['title' => 'Half Day Delhi Tour', 'image' => 'assets/img/same_day_tour/kutub-minar.png', 'url' => 'half-day-delhi-city-tour.php', 'duration' => 'Half Day', 'rating' => '4.9 (460+)']
        ]
    ],

    'full-day-old-and-new-delhi-city-tour' => [
        'id' => 6,
        'title' => 'Full Day Old and New Delhi City Tour',
        'slug' => 'full-day-old-and-new-delhi-city-tour',
        'type' => 'same-day',
        'location' => 'Delhi',
        'duration' => '1 Day Tour',
        'price' => 100,
        'rating' => 4.9,
        'reviews' => 580,
        'badge' => 'Capital City Tour',
        'pickup_drop' => 'Delhi',
        'service' => 'Private Tour',
        'languages' => 'English, Hindi',
        'transport' => 'Private AC Car',
        'hero_image' => 'assets/img/same_day_tour/delhi-gate.png',
        'gallery' => [
            'assets/img/same_day_tour/delhi-gate.png',
            'assets/img/same_day_tour/red-fort.png',
            'assets/img/same_day_tour/kutub-minar.png',
            'assets/img/same_day_tour/india-gate.png'
        ],
        'overview' => 'Experience the fascinating contrast between Old Delhi and New Delhi.',
        'why_choose' => 'Discover Delhi\'s fascinating blend of ancient and modern.',
        'highlights' => [
            ['icon' => 'fas fa-landmark', 'title' => 'Red Fort', 'desc' => 'Explore India\'s historic Red Fort'],
            ['icon' => 'fas fa-mosque', 'title' => 'Jama Masjid', 'desc' => 'Visit Delhi\'s largest mosque'],
            ['icon' => 'fas fa-monument', 'title' => 'Qutub Minar', 'desc' => 'See the world\'s tallest brick minaret'],
            ['icon' => 'fas fa-flag', 'title' => 'India Gate', 'desc' => 'Visit the iconic India Gate']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => '8:00 AM', 'title' => 'Hotel Pickup', 'desc' => 'Pickup from your Delhi hotel'],
            ['step' => 2, 'time' => '9:00 AM', 'title' => 'Red Fort', 'desc' => 'Explore the historic Red Fort'],
            ['step' => 3, 'time' => '10:30 AM', 'title' => 'Jama Masjid', 'desc' => 'Visit the magnificent Jama Masjid'],
            ['step' => 4, 'time' => '12:00 PM', 'title' => 'Lunch', 'desc' => 'Traditional Delhi cuisine'],
            ['step' => 5, 'time' => '1:00 PM', 'title' => 'Qutub Minar', 'desc' => 'Visit the Qutub Minar complex'],
            ['step' => 6, 'time' => '3:00 PM', 'title' => 'India Gate', 'desc' => 'Explore India Gate and Rajpath'],
            ['step' => 7, 'time' => '5:00 PM', 'title' => 'Return', 'desc' => 'Drop-off at your hotel']
        ],
        'inclusions' => [
            'Hotel pickup and drop-off',
            'Private air-conditioned car',
            'Expert guide',
            'All monument tickets',
            'Traditional lunch',
            'Mineral water',
            'All taxes'
        ],
        'exclusions' => [
            'Personal expenses',
            'Tips',
            'Camera fees'
        ],
        'related_tours' => [
            ['title' => 'Half Day Delhi Tour', 'image' => 'assets/img/same_day_tour/kutub-minar.png', 'url' => 'half-day-delhi-city-tour.php', 'duration' => 'Half Day', 'rating' => '4.9 (460+)'],
            ['title' => 'Jaipur City Tour', 'image' => 'assets/img/same_day_tour/hawa-mahal.png', 'url' => 'full-day-jaipur-city-tour-by-car.php', 'duration' => '1 Day', 'rating' => '4.9 (610+)'],
            ['title' => 'Jaipur from Delhi', 'image' => 'assets/img/same_day_tour/amber-fort.png', 'url' => 'jaipur-tour-from-delhi-by-car.php', 'duration' => '1 Day', 'rating' => '4.9 (370+)']
        ]
    ],

    'half-day-delhi-city-tour' => [
        'id' => 7,
        'title' => 'Half Day Delhi City Tour',
        'slug' => 'half-day-delhi-city-tour',
        'type' => 'same-day',
        'location' => 'Delhi',
        'duration' => 'Half Day Tour',
        'price' => 80,
        'rating' => 4.9,
        'reviews' => 460,
        'badge' => 'Essential Delhi',
        'pickup_drop' => 'Delhi',
        'service' => 'Private Tour',
        'languages' => 'English, Hindi',
        'transport' => 'Private AC Car',
        'hero_image' => 'assets/img/same_day_tour/kutub-minar.png',
        'gallery' => [
            'assets/img/same_day_tour/kutub-minar.png',
            'assets/img/same_day_tour/india-gate.png',
            'assets/img/same_day_tour/red-fort.png',
            'assets/img/same_day_tour/jama-masjid.png'
        ],
        'overview' => 'Experience the essential highlights of Delhi in a convenient half-day tour.',
        'why_choose' => 'See Delhi\'s most important landmarks in just half a day.',
        'highlights' => [
            ['icon' => 'fas fa-monument', 'title' => 'Qutub Minar', 'desc' => 'World\'s tallest brick minaret'],
            ['icon' => 'fas fa-flag', 'title' => 'India Gate', 'desc' => 'Iconic war memorial'],
            ['icon' => 'fas fa-landmark', 'title' => 'Red Fort', 'desc' => 'Historic Mughal fort'],
            ['icon' => 'fas fa-clock', 'title' => 'Flexible Timing', 'desc' => 'Morning or afternoon options']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => '9:00 AM', 'title' => 'Hotel Pickup', 'desc' => 'Pickup from your Delhi hotel'],
            ['step' => 2, 'time' => '10:00 AM', 'title' => 'Qutub Minar', 'desc' => 'Explore the Qutub Minar complex'],
            ['step' => 3, 'time' => '11:30 AM', 'title' => 'India Gate', 'desc' => 'Visit India Gate and Rajpath'],
            ['step' => 4, 'time' => '12:30 PM', 'title' => 'Red Fort', 'desc' => 'Explore the historic Red Fort'],
            ['step' => 5, 'time' => '2:00 PM', 'title' => 'Return', 'desc' => 'Drop-off at your hotel']
        ],
        'inclusions' => [
            'Hotel pickup and drop-off',
            'Private air-conditioned car',
            'Expert guide',
            'All monument tickets',
            'Mineral water',
            'All taxes'
        ],
        'exclusions' => [
            'Lunch (not included)',
            'Personal expenses',
            'Tips',
            'Camera fees'
        ],
        'related_tours' => [
            ['title' => 'Full Day Delhi Tour', 'image' => 'assets/img/same_day_tour/delhi-gate.png', 'url' => 'full-day-old-and-new-delhi-city-tour.php', 'duration' => '1 Day', 'rating' => '4.9 (580+)'],
            ['title' => 'Jaipur City Tour', 'image' => 'assets/img/same_day_tour/hawa-mahal.png', 'url' => 'full-day-jaipur-city-tour-by-car.php', 'duration' => '1 Day', 'rating' => '4.9 (610+)'],
            ['title' => 'Jaipur from Delhi', 'image' => 'assets/img/same_day_tour/amber-fort.png', 'url' => 'jaipur-tour-from-delhi-by-car.php', 'duration' => '1 Day', 'rating' => '4.9 (370+)']
        ]
    ],

    'jaipur-tour-from-delhi-by-car' => [
        'id' => 8,
        'title' => 'Jaipur Tour from Delhi by Car',
        'slug' => 'jaipur-tour-from-delhi-by-car',
        'type' => 'same-day',
        'location' => 'Delhi - Jaipur - Delhi',
        'duration' => '1 Day Tour',
        'price' => 140,
        'rating' => 4.9,
        'reviews' => 370,
        'badge' => 'Round Trip from Delhi',
        'pickup_drop' => 'Delhi',
        'service' => 'Round Trip Tour',
        'languages' => 'English, Hindi',
        'transport' => 'Private AC Car',
        'hero_image' => 'assets/img/same_day_tour/amber-fort.png',
        'gallery' => [
            'assets/img/same_day_tour/amber-fort.png',
            'assets/img/same_day_tour/hawa-mahal.png',
            'assets/img/same_day_tour/city-palace.png',
            'assets/img/same_day_tour/jantar-mantar.png'
        ],
        'overview' => 'Experience Jaipur\'s royal heritage on a day trip from Delhi.',
        'why_choose' => 'Combine Delhi and Jaipur in one day with comfortable transportation.',
        'highlights' => [
            ['icon' => 'fas fa-car', 'title' => 'Round Trip Transport', 'desc' => 'Comfortable AC car from Delhi to Jaipur'],
            ['icon' => 'fas fa-crown', 'title' => 'Amber Fort', 'desc' => 'Explore the majestic hilltop fort'],
            ['icon' => 'fas fa-building', 'title' => 'City Palace', 'desc' => 'Visit the grand City Palace'],
            ['icon' => 'fas fa-sun', 'title' => 'Hawa Mahal', 'desc' => 'See the iconic Palace of Winds']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => '6:00 AM', 'title' => 'Pickup from Delhi', 'desc' => 'Early morning pickup from Delhi'],
            ['step' => 2, 'time' => '9:00 AM', 'title' => 'Arrival in Jaipur', 'desc' => 'Arrive in Jaipur and start tour'],
            ['step' => 3, 'time' => '9:30 AM', 'title' => 'Amber Fort', 'desc' => 'Explore the magnificent Amber Fort'],
            ['step' => 4, 'time' => '12:00 PM', 'title' => 'Jantar Mantar', 'desc' => 'Visit the astronomical observatory'],
            ['step' => 5, 'time' => '1:00 PM', 'title' => 'Lunch', 'desc' => 'Traditional Rajasthani lunch'],
            ['step' => 6, 'time' => '2:00 PM', 'title' => 'City Palace', 'desc' => 'Explore the City Palace complex'],
            ['step' => 7, 'time' => '4:00 PM', 'title' => 'Hawa Mahal', 'desc' => 'Visit the famous Palace of Winds'],
            ['step' => 8, 'time' => '5:00 PM', 'title' => 'Return to Delhi', 'desc' => 'Evening return journey'],
            ['step' => 9, 'time' => '8:00 PM', 'title' => 'Arrival in Delhi', 'desc' => 'Drop-off at your Delhi hotel']
        ],
        'inclusions' => [
            'Round-trip transportation',
            'Private air-conditioned car',
            'Expert guide',
            'All monument tickets',
            'Traditional lunch',
            'Mineral water',
            'All taxes and tolls'
        ],
        'exclusions' => [
            'Personal expenses',
            'Tips',
            'Elephant ride (optional)',
            'Camera fees'
        ],
        'related_tours' => [
            ['title' => 'Full Day Jaipur Tour', 'image' => 'assets/img/same_day_tour/hawa-mahal.png', 'url' => 'full-day-jaipur-city-tour-by-car.php', 'duration' => '1 Day', 'rating' => '4.9 (610+)'],
            ['title' => 'Full Day Delhi Tour', 'image' => 'assets/img/same_day_tour/delhi-gate.png', 'url' => 'full-day-old-and-new-delhi-city-tour.php', 'duration' => '1 Day', 'rating' => '4.9 (580+)'],
            ['title' => 'Half Day Delhi Tour', 'image' => 'assets/img/same_day_tour/kutub-minar.png', 'url' => 'half-day-delhi-city-tour.php', 'duration' => 'Half Day', 'rating' => '4.9 (460+)']
        ]
    ],

    // Golden Triangle Tours
    'golden-triangle-tour-3-days' => [
        'id' => 9,
        'title' => 'Golden Triangle Tour 3 Days',
        'slug' => 'golden-triangle-tour-3-days',
        'type' => 'golden-triangle',
        'location' => 'Delhi - Agra - Jaipur',
        'duration' => '3 Days / 2 Nights',
        'price' => 400,
        'rating' => 4.7,
        'reviews' => 340,
        'badge' => 'Classic Route',
        'pickup_drop' => 'Delhi',
        'service' => 'Complete Package',
        'languages' => 'English, Hindi',
        'transport' => 'Private AC Car',
        'hero_image' => 'assets/img/golden_triangle_tour/golden-tour-1.png',
        'gallery' => [
            'assets/img/golden_triangle_tour/golden-tour-1.png',
            'assets/img/taj_mahal_tour/taj_mahal-1.png',
            'assets/img/same_day_tour/amber-fort.png',
            'assets/img/same_day_tour/city-palace.png'
        ],
        'overview' => 'Embark on India\'s most iconic Golden Triangle tour covering Delhi, Agra, and Jaipur.',
        'why_choose' => 'Cover India\'s most important destinations in just 3 days.',
        'highlights' => [
            ['icon' => 'fas fa-landmark', 'title' => 'Taj Mahal', 'desc' => 'Witness the Taj Mahal at sunrise'],
            ['icon' => 'fas fa-crown', 'title' => 'Amber Fort', 'desc' => 'Explore Jaipur\'s magnificent fort'],
            ['icon' => 'fas fa-building', 'title' => 'Red Fort', 'desc' => 'Visit Delhi\'s historic Red Fort'],
            ['icon' => 'fas fa-utensils', 'title' => 'Local Cuisine', 'desc' => 'Authentic Indian meals']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => 'Day 1', 'title' => 'Delhi Sightseeing', 'desc' => 'Arrive in Delhi, visit Red Fort, Jama Masjid, India Gate'],
            ['step' => 2, 'time' => 'Day 2', 'title' => 'Agra Day Trip', 'desc' => 'Full day trip to Agra - Taj Mahal, Agra Fort, Baby Taj'],
            ['step' => 3, 'time' => 'Day 3', 'title' => 'Jaipur Exploration', 'desc' => 'Drive to Jaipur, visit Amber Fort, City Palace, Hawa Mahal']
        ],
        'inclusions' => [
            '3-star hotel accommodation',
            'Daily breakfast',
            'Private air-conditioned car',
            'Expert guide',
            'All monument tickets',
            'All meals as mentioned',
            'All taxes'
        ],
        'exclusions' => [
            'International flights',
            'Personal expenses',
            'Tips',
            'Camera fees',
            'Travel insurance'
        ],
        'related_tours' => [
            ['title' => 'Golden Triangle 4 Days', 'image' => 'assets/img/golden_triangle_tour/golden-tour-2.png', 'url' => 'tour-details.php?slug=golden-triangle-tour-4-days', 'duration' => '4 Days', 'rating' => '4.8 (460+)'],
            ['title' => 'Golden Triangle 5 Days', 'image' => 'assets/img/golden_triangle_tour/golden-tour-3.png', 'url' => 'tour-details.php?slug=golden-triangle-tour-5-days', 'duration' => '5 Days', 'rating' => '4.9 (430+)'],
            ['title' => 'Golden Triangle with Amritsar', 'image' => 'assets/img/golden_triangle_tour/golden-amritsar.png', 'url' => 'tour-details.php?slug=golden-triangle-tour-with-amritsar', 'duration' => '6 Days', 'rating' => '4.8 (290+)']
        ]
    ],

    // Additional Golden Triangle Tours
    'golden-triangle-tour-4-days' => [
        'id' => 10,
        'title' => 'Golden Triangle Tour 4 Days',
        'slug' => 'golden-triangle-tour-4-days',
        'type' => 'golden-triangle',
        'location' => 'Delhi - Agra - Jaipur',
        'duration' => '4 Days / 3 Nights',
        'price' => 500,
        'rating' => 4.8,
        'reviews' => 460,
        'badge' => 'Relaxed Pace',
        'pickup_drop' => 'Delhi',
        'service' => 'Complete Package',
        'languages' => 'English, Hindi',
        'transport' => 'Private AC Car',
        'hero_image' => 'assets/img/golden_triangle_tour/golden-tour-2.png',
        'gallery' => [
            'assets/img/golden_triangle_tour/golden-tour-2.png',
            'assets/img/taj_mahal_tour/taj_mahal-1.png',
            'assets/img/same_day_tour/amber-fort.png',
            'assets/img/same_day_tour/city-palace.png'
        ],
        'overview' => 'Experience the Golden Triangle at a relaxed pace with an extra day to explore each destination. This 4-day itinerary allows you to immerse yourself in the rich history and culture of Delhi, Agra, and Jaipur without rushing.',
        'why_choose' => 'Take your time to explore each destination thoroughly. Enjoy more leisure time and cultural experiences with this extended itinerary.',
        'highlights' => [
            ['icon' => 'fas fa-landmark', 'title' => 'Taj Mahal', 'desc' => 'Extended time at the Taj Mahal'],
            ['icon' => 'fas fa-crown', 'title' => 'Amber Fort', 'desc' => 'Elephant ride at Amber Fort'],
            ['icon' => 'fas fa-building', 'title' => 'Red Fort', 'desc' => 'Detailed exploration of Red Fort'],
            ['icon' => 'fas fa-utensils', 'title' => 'Local Cuisine', 'desc' => 'Authentic regional meals']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => 'Day 1', 'title' => 'Delhi Arrival & Sightseeing', 'desc' => 'Arrive in Delhi, transfer to hotel, visit Red Fort and Jama Masjid'],
            ['step' => 2, 'time' => 'Day 2', 'title' => 'Delhi to Agra', 'desc' => 'Drive to Agra, visit Taj Mahal, Agra Fort, and Baby Taj'],
            ['step' => 3, 'time' => 'Day 3', 'title' => 'Agra to Jaipur', 'desc' => 'Drive to Jaipur, visit Amber Fort and City Palace'],
            ['step' => 4, 'time' => 'Day 4', 'title' => 'Jaipur Exploration & Departure', 'desc' => 'Visit Jantar Mantar and Hawa Mahal, then departure']
        ],
        'inclusions' => [
            '3-star hotel accommodation (3 nights)',
            'Daily breakfast and dinner',
            'Private air-conditioned car',
            'Expert English-speaking guide',
            'All monument entry tickets',
            'Mineral water during transfers',
            'All taxes and fees'
        ],
        'exclusions' => [
            'International flights',
            'Personal expenses',
            'Tips and gratuities',
            'Camera fees',
            'Travel insurance'
        ],
        'related_tours' => [
            ['title' => 'Golden Triangle Tour 3 Days', 'image' => 'assets/img/golden_triangle_tour/golden-tour-1.png', 'url' => 'tour-details.php?slug=golden-triangle-tour-3-days', 'duration' => '3 Days', 'rating' => '4.7 (340+)'],
            ['title' => 'Golden Triangle Tour 5 Days', 'image' => 'assets/img/golden_triangle_tour/golden-tour-3.png', 'url' => 'tour-details.php?slug=golden-triangle-tour-5-days', 'duration' => '5 Days', 'rating' => '4.9 (430+)'],
            ['title' => 'Golden Triangle with Amritsar', 'image' => 'assets/img/golden_triangle_tour/golden-amritsar.png', 'url' => 'tour-details.php?slug=golden-triangle-tour-with-amritsar', 'duration' => '6 Days', 'rating' => '4.8 (290+)']
        ]
    ],

    'golden-triangle-tour-5-days' => [
        'id' => 11,
        'title' => 'Golden Triangle Tour 5 Days',
        'slug' => 'golden-triangle-tour-5-days',
        'type' => 'golden-triangle',
        'location' => 'Delhi - Agra - Jaipur',
        'duration' => '5 Days / 4 Nights',
        'price' => 600,
        'rating' => 4.9,
        'reviews' => 430,
        'badge' => 'Comprehensive Experience',
        'pickup_drop' => 'Delhi',
        'service' => 'Complete Package',
        'languages' => 'English, Hindi',
        'transport' => 'Private AC Car',
        'hero_image' => 'assets/img/golden_triangle_tour/golden-tour-3.png',
        'gallery' => [
            'assets/img/golden_triangle_tour/golden-tour-3.png',
            'assets/img/taj_mahal_tour/taj_mahal-1.png',
            'assets/img/same_day_tour/amber-fort.png',
            'assets/img/same_day_tour/city-palace.png'
        ],
        'overview' => 'This comprehensive 5-day Golden Triangle tour offers the perfect balance of cultural exploration and relaxation. Visit all major attractions with ample time to experience the local culture, cuisine, and hospitality.',
        'why_choose' => 'Maximum exploration time with comfortable pacing. Experience local markets, cultural performances, and authentic cuisine alongside major attractions.',
        'highlights' => [
            ['icon' => 'fas fa-landmark', 'title' => 'Taj Mahal', 'desc' => 'Sunrise and sunset visits'],
            ['icon' => 'fas fa-crown', 'title' => 'Amber Fort', 'desc' => 'Complete palace exploration'],
            ['icon' => 'fas fa-building', 'title' => 'Red Fort', 'desc' => 'Audio guide tour'],
            ['icon' => 'fas fa-utensils', 'title' => 'Local Cuisine', 'desc' => 'Traditional Rajasthani thali']
        ],
        'itinerary' => [
            ['step' => 1, 'time' => 'Day 1', 'title' => 'Delhi Arrival', 'desc' => 'Arrive in Delhi, transfer to hotel, evening walk in Connaught Place'],
            ['step' => 2, 'time' => 'Day 2', 'title' => 'Delhi Sightseeing', 'desc' => 'Visit Red Fort, Jama Masjid, India Gate, and Qutub Minar'],
            ['step' => 3, 'time' => 'Day 3', 'title' => 'Delhi to Agra', 'desc' => 'Drive to Agra, visit Taj Mahal, Agra Fort, and Sikandra'],
            ['step' => 4, 'time' => 'Day 4', 'title' => 'Agra to Jaipur', 'desc' => 'Drive to Jaipur, visit Amber Fort and City Palace'],
            ['step' => 5, 'time' => 'Day 5', 'title' => 'Jaipur Exploration & Departure', 'desc' => 'Visit Jantar Mantar, Hawa Mahal, and local markets, then departure']
        ],
        'inclusions' => [
            '4-star hotel accommodation (4 nights)',
            'Daily breakfast and dinner',
            'Private air-conditioned car',
            'Expert English-speaking guide',
            'All monument entry tickets',
            'Traditional cultural performance',
            'All taxes and fees'
        ],
        'exclusions' => [
            'International flights',
            'Personal expenses',
            'Tips and gratuities',
            'Camera fees',
            'Travel insurance'
        ],
        'related_tours' => [
            ['title' => 'Golden Triangle Tour 3 Days', 'image' => 'assets/img/golden_triangle_tour/golden-tour-1.png', 'url' => 'tour-details.php?slug=golden-triangle-tour-3-days', 'duration' => '3 Days', 'rating' => '4.7 (340+)'],
            ['title' => 'Golden Triangle Tour 4 Days', 'image' => 'assets/img/golden_triangle_tour/golden-tour-2.png', 'url' => 'tour-details.php?slug=golden-triangle-tour-4-days', 'duration' => '4 Days', 'rating' => '4.8 (460+)'],
            ['title' => 'Golden Triangle with Amritsar', 'image' => 'assets/img/golden_triangle_tour/golden-amritsar.png', 'url' => 'tour-details.php?slug=golden-triangle-tour-with-amritsar', 'duration' => '6 Days', 'rating' => '4.8 (290+)']
        ]
    ]
];