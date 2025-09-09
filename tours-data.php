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
        'overview' => 'Embark on an unforgettable journey to witness the breathtaking Taj Mahal, one of the Seven Wonders of the World, on this meticulously crafted day tour from Delhi. Our Taj Mahal Day Tour by Car offers you the perfect blend of comfort, convenience, and cultural immersion as you travel in a private luxury vehicle to Agra. Upon arrival, you\'ll be greeted by the iconic white marble monument that stands as an eternal symbol of love. Explore the intricate architecture and fascinating history of the Taj Mahal with your expert guide, who will bring to life the stories of Emperor Shah Jahan and his beloved Mumtaz Mahal. The tour continues to the majestic Agra Fort, a UNESCO World Heritage site that offers stunning views of the Taj Mahal from its ramparts. Enjoy a delicious lunch at a carefully selected local restaurant, savoring authentic Mughlai cuisine. The journey also includes a visit to the exquisite Baby Taj (Itimad-ud-Daulah), often referred to as the "draft of the Taj Mahal," which showcases the fine craftsmanship that predates the Taj itself. This comprehensive tour ensures you experience the best of Agra\'s Mughal heritage in a single, comfortable day, returning to Delhi with memories to last a lifetime.',
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
            ['title' => 'Taj Mahal Sunrise Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-2.png', 'url' => 'tour-details.php?slug=taj-mahal-sunrise-tour-from-delhi', 'duration' => '1 Day', 'rating' => '4.8 (50+)'],
            ['title' => 'Taj Mahal by Train', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-3.png', 'url' => 'tour-details.php?slug=taj-mahal-tour-by-gatimaan-express-train', 'duration' => '1 Day', 'rating' => '4.8 (750+)'],
            ['title' => 'Taj Mahal Luxury Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-4.png', 'url' => 'tour-details.php?slug=taj-mahal-luxury-tour-by-premium-car-from-delhi', 'duration' => '1 Day', 'rating' => '4.9 (340+)']
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
        'overview' => 'Witness one of the world\'s most magical spectacles - the sunrise over the Taj Mahal - on this exclusive early morning tour from Delhi. As dawn breaks, the first rays of sunlight illuminate the pristine white marble of this architectural masterpiece, creating an ethereal glow that photographers and romantics dream of capturing. This premium experience begins with an early pickup from your Delhi hotel, allowing you to reach Agra before the crowds and heat of the day. Your expert guide will lead you through the tranquil grounds of the Taj Mahal as the monument transforms from a silhouette against the dark sky to a radiant beacon in the morning light. Learn about the poignant love story behind this UNESCO World Heritage site and the intricate craftsmanship that has captivated visitors for centuries. After soaking in the sunrise views, enjoy a leisurely breakfast at a charming local restaurant before continuing to the imposing Agra Fort, where Mughal emperors once ruled an empire. The fort\'s red sandstone walls offer a striking contrast to the white marble of the Taj and provide panoramic views of the Yamuna River. This tour is designed for those who seek the most serene and photogenic experience of the Taj Mahal, returning you to Delhi by midday with the rest of your day free to relax or explore more of the capital.',
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
            ['title' => 'Taj Mahal Day Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-1.png', 'url' => 'tour-details.php?slug=taj-mahal-day-tour-by-car-from-delhi', 'duration' => '1 Day', 'rating' => '4.7 (77+)'],
            ['title' => 'Taj Mahal by Train', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-3.png', 'url' => 'tour-details.php?slug=taj-mahal-tour-by-gatimaan-express-train', 'duration' => '1 Day', 'rating' => '4.8 (750+)'],
            ['title' => 'Taj Mahal Luxury Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-4.png', 'url' => 'tour-details.php?slug=taj-mahal-luxury-tour-by-premium-car-from-delhi', 'duration' => '1 Day', 'rating' => '4.9 (340+)']
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
        'overview' => 'Experience the perfect blend of speed, comfort, and cultural immersion on this Taj Mahal Tour by Gatimaan Express Train, India\'s fastest train service. This thoughtfully designed tour eliminates the fatigue of road travel while maximizing your time to explore Agra\'s magnificent Mughal heritage. Your journey begins with a convenient pickup from your Delhi hotel and transfer to the railway station, where you\'ll board the air-conditioned Gatimaan Express. As you travel at speeds up to 160 km/h, enjoy the changing landscapes of rural India from your comfortable seat while savoring complimentary breakfast served onboard. Upon arrival in Agra, your private vehicle and expert guide will be waiting to whisk you away to the iconic Taj Mahal. Marvel at this architectural wonder as your guide shares fascinating insights into its history, construction, and the enduring love story behind its creation. Continue to the imposing Agra Fort, a UNESCO World Heritage site where Mughal emperors once lived and governed. Enjoy a delicious lunch at a carefully selected restaurant featuring local cuisine before exploring the exquisite Itimad-ud-Daulah, often called the "Baby Taj." The return journey on the Gatimaan Express allows you to relax and reflect on your day\'s adventures, arriving back in Delhi by evening with memories of a truly exceptional day trip.',
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
            ['title' => 'Taj Mahal Day Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-1.png', 'url' => 'tour-details.php?slug=taj-mahal-day-tour-by-car-from-delhi', 'duration' => '1 Day', 'rating' => '4.7 (77+)'],
            ['title' => 'Taj Mahal Sunrise Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-2.png', 'url' => 'tour-details.php?slug=taj-mahal-sunrise-tour-from-delhi', 'duration' => '1 Day', 'rating' => '4.8 (50+)'],
            ['title' => 'Taj Mahal Luxury Tour', 'image' => 'assets/img/taj_mahal_tour/taj_mahal-4.png', 'url' => 'tour-details.php?slug=taj-mahal-luxury-tour-by-premium-car-from-delhi', 'duration' => '1 Day', 'rating' => '4.9 (340+)']
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
        'overview' => 'Indulge in the ultimate luxury experience with our premium Taj Mahal tour, designed for discerning travelers who demand nothing but the best. This exclusive journey begins with your pickup from your Delhi hotel in a premium luxury vehicle, complete with a professional chauffeur and complimentary refreshments. Travel in supreme comfort to Agra, where you\'ll bypass the regular queues with VIP access to the Taj Mahal, allowing you more time to appreciate this architectural marvel without the usual crowds. Your personal expert guide will provide in-depth commentary on the history, architecture, and romantic legacy of this UNESCO World Heritage site. After exploring the Taj Mahal at a leisurely pace, enjoy a private tour of the majestic Agra Fort, where Mughal emperors once ruled an empire. Savor a gourmet lunch at one of Agra\'s finest restaurants, featuring a curated menu of Mughlai delicacies paired with fine wines. The tour continues with a visit to the exquisite Itimad-ud-Daulah, often called the "Baby Taj," where you\'ll admire the delicate craftsmanship that inspired the Taj Mahal. Throughout the day, enjoy personalized attention, premium amenities, and the flexibility to customize your experience according to your preferences. Return to Delhi in the evening with a deepened appreciation for India\'s rich cultural heritage and memories of a truly extraordinary day.',
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
        'overview' => 'Immerse yourself in the royal grandeur of Jaipur, the vibrant Pink City, on this comprehensive full-day tour that showcases the best of Rajasthan\'s capital. Your journey begins with a convenient pickup from your Jaipur hotel in a comfortable air-conditioned car, setting the stage for a day of cultural exploration and architectural wonders. First, visit the magnificent Amber Fort, a stunning example of Rajput architecture perched on a hilltop overlooking Maota Lake. Marvel at the intricate mirror work of the Sheesh Mahal and learn about the fort\'s fascinating history as you explore its sprawling courtyards and palaces. Continue to the City Palace, a splendid complex of courtyards, gardens, and buildings that blends Rajasthani and Mughal architecture. Here, you\'ll witness the opulent lifestyle of Jaipur\'s royal family through a remarkable collection of textiles, costumes, and artifacts. Next, visit the UNESCO World Heritage site Jantar Mantar, an astronomical observatory featuring the world\'s largest stone sundial and a collection of nineteen architectural astronomical instruments. After a delicious traditional Rajasthani lunch, head to the iconic Hawa Mahal, or Palace of Winds, with its unique honeycomb facade of 953 small windows. The tour also includes visits to the beautiful Jal Mahal, a palace floating in the middle of Man Sagar Lake, and the Albert Hall Museum, a fine example of Indo-Saracenic architecture. Throughout the day, your expert guide will provide fascinating insights into Jaipur\'s rich history, culture, and traditions, ensuring you leave with a deep appreciation for this enchanting city.',
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
        'overview' => 'Experience the fascinating duality of India\'s capital city on this comprehensive full-day tour that takes you through both Old and New Delhi. Your journey begins in Old Delhi, where you\'ll step back in time to the Mughal era as you visit the imposing Red Fort, a UNESCO World Heritage site that served as the main residence of the Mughal emperors for over 200 years. From there, explore the magnificent Jama Masjid, one of India\'s largest mosques, where you can climb to the top of its minarets for panoramic views of the surrounding area. Immerse yourself in the vibrant chaos of Chandni Chowk, one of Delhi\'s oldest and busiest markets, where you\'ll experience the sights, sounds, and aromas of traditional Indian bazaars. Enjoy a rickshaw ride through its narrow lanes, passing by historic havelis (mansions) and spice markets. After a traditional Delhi lunch, transition to New Delhi, a stark contrast with its wide, tree-lined avenues and colonial-era buildings. Visit the iconic India Gate, a war memorial dedicated to the soldiers of the British Indian Army who died during World War I. Continue to Humayun\'s Tomb, a beautiful garden tomb that is considered a precursor to the Taj Mahal, and explore the Qutub Minar complex, home to the world\'s tallest brick minaret and several other ancient structures. The tour also includes a drive past the President\'s House (Rashtrapati Bhavan) and Parliament House, giving you a glimpse of modern India\'s political heart. Throughout the day, your expert guide will provide fascinating insights into Delhi\'s rich history, diverse culture, and the seamless blend of ancient and modern that defines this captivating city.',
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
        'overview' => 'Perfect for travelers with limited time, this half-day tour of Delhi offers a curated experience of the city\'s most iconic landmarks and cultural treasures. Whether you choose a morning or afternoon departure, this tour is designed to give you a comprehensive introduction to India\'s vibrant capital in just a few hours. Your journey begins with a convenient pickup from your Delhi hotel, followed by a visit to the majestic Qutub Minar, a UNESCO World Heritage site and the world\'s tallest brick minaret. Marvel at this 73-meter tall architectural masterpiece, which dates back to the 13th century, and explore the surrounding complex of ancient ruins and monuments. Continue to the iconic India Gate, a solemn war memorial that stands at the heart of New Delhi. Learn about its significance and the soldiers it commemorates as you stroll along the Rajpath, taking in the impressive government buildings that line this ceremonial boulevard. The tour then takes you to the historic Red Fort, a symbol of India\'s rich Mughal heritage. While we don\'t enter the fort due to time constraints, you\'ll have the opportunity to admire its imposing red sandstone walls and learn about its fascinating history from your guide. Finally, visit the magnificent Jama Masjid, one of India\'s largest mosques, where you can admire its stunning architecture and experience the spiritual atmosphere of this important religious site. Throughout the tour, your expert guide will provide fascinating insights into Delhi\'s history, culture, and modern life, ensuring you leave with a deeper understanding and appreciation of this incredible city.',
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
        'overview' => 'Embark on an unforgettable day trip from Delhi to Jaipur, the vibrant Pink City of Rajasthan, and experience the royal grandeur of this enchanting destination. This tour is perfect for travelers who want to explore Jaipur\'s magnificent attractions without the hassle of overnight stays. Your journey begins with an early morning pickup from your Delhi hotel in a comfortable air-conditioned car, setting off on the scenic drive to Jaipur. As you leave the bustling capital behind, watch the landscape transform into the colorful countryside of Rajasthan. Upon arrival in Jaipur, your first stop is the magnificent Amber Fort, a stunning example of Rajput architecture perched on a hilltop overlooking Maota Lake. Explore its sprawling courtyards, intricate palaces, and the famous Sheesh Mahal (Mirror Palace) with your expert guide, who will bring to life the history and legends of this ancient fortress. Continue to the City Palace, a splendid complex that houses several palatial structures, courtyards, and gardens. Here, you\'ll witness the opulent lifestyle of Jaipur\'s royal family through a remarkable collection of textiles, costumes, and artifacts. Next, visit the UNESCO World Heritage site Jantar Mantar, an astronomical observatory featuring the world\'s largest stone sundial and a collection of nineteen architectural astronomical instruments. After a delicious traditional Rajasthani lunch, head to the iconic Hawa Mahal, or Palace of Winds, with its unique honeycomb facade of 953 small windows designed to allow royal ladies to observe street festivals without being seen. The tour also includes a visit to the beautiful Jal Mahal, a palace floating in the middle of Man Sagar Lake, and a drive past the Albert Hall Museum. As evening approaches, begin your comfortable journey back to Delhi, arriving at your hotel with memories of a day filled with cultural wonders, architectural marvels, and royal splendor.',
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
        'overview' => 'Embark on India\'s most iconic journey with our Golden Triangle Tour, a perfectly crafted 3-day itinerary that introduces you to the country\'s rich cultural heritage, magnificent architecture, and vibrant history. This tour connects three incredible cities—Delhi, Agra, and Jaipur—each offering a unique glimpse into India\'s diverse tapestry of traditions and landmarks. Your adventure begins in Delhi, where ancient monuments stand alongside modern marvels. Explore the historic Red Fort, a symbol of Mughal grandeur, and Jama Masjid, one of India\'s largest mosques. Wander through the bustling lanes of Chandni Chowk, experiencing the sensory delights of this ancient market. In New Delhi, marvel at the Qutub Minar, a UNESCO World Heritage site, and pay homage at India Gate, a solemn war memorial. The next day, journey to Agra to witness the unparalleled beauty of the Taj Mahal, one of the Seven Wonders of the World. As the sun rises over this marble masterpiece, you\'ll understand why it\'s considered the ultimate symbol of eternal love. Explore the majestic Agra Fort, where Mughal emperors once ruled an empire, and visit the exquisite Itimad-ud-Daulah, often called the "Baby Taj." On the final day, travel to Jaipur, the vibrant Pink City of Rajasthan. Visit the magnificent Amber Fort, a stunning example of Rajput architecture, and explore the City Palace, a splendid complex that houses several palatial structures. Discover the astronomical wonders of Jantar Mantar and admire the unique honeycomb facade of Hawa Mahal, the Palace of Winds. Throughout your journey, enjoy comfortable accommodations, expert guidance, and seamless transportation, ensuring an unforgettable introduction to the wonders of India.',
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
        'overview' => 'Experience the magic of India\'s Golden Triangle at a more relaxed pace with our 4-day itinerary, designed to give you ample time to explore each destination thoroughly. This extended tour allows you to immerse yourself in the rich history, vibrant culture, and architectural wonders of Delhi, Agra, and Jaipur without feeling rushed. Your journey begins in Delhi, where you\'ll have a full day to discover both Old and New Delhi. Explore the historic Red Fort and Jama Masjid in Old Delhi, then wander through the bustling lanes of Chandni Chowk on a rickshaw ride. In New Delhi, marvel at the Qutub Minar, a UNESCO World Heritage site, and pay homage at India Gate. The next day, travel to Agra to witness the unparalleled beauty of the Taj Mahal at sunrise, a truly magical experience that will stay with you forever. Explore the majestic Agra Fort, where Mughal emperors once ruled an empire, and visit the exquisite Itimad-ud-Daulah, often called the "Baby Taj." On the third day, journey to Jaipur, the vibrant Pink City of Rajasthan. Visit the magnificent Amber Fort, where you can enjoy an elephant ride (optional) up to the fort, and explore the City Palace, a splendid complex that houses several palatial structures. Discover the astronomical wonders of Jantar Mantar and admire the unique honeycomb facade of Hawa Mahal, the Palace of Winds. The final day is dedicated to further exploration of Jaipur, including visits to the beautiful Jal Mahal and the Albert Hall Museum, as well as some time for shopping in the colorful bazaars of the city. Throughout your journey, enjoy comfortable accommodations, expert guidance, and seamless transportation, ensuring an unforgettable introduction to the wonders of India.',
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
        'overview' => 'Immerse yourself in the ultimate Golden Triangle experience with our comprehensive 5-day tour, designed for travelers who want to explore India\'s rich cultural heritage in depth. This extended itinerary allows you to discover not only the major attractions of Delhi, Agra, and Jaipur but also to experience the local culture, cuisine, and hidden gems that make each city unique. Your journey begins in Delhi, where you\'ll have two full days to explore both the ancient and modern facets of this vibrant capital. In Old Delhi, visit the historic Red Fort and Jama Masjid, then wander through the bustling lanes of Chandni Chowk on a rickshaw ride. In New Delhi, marvel at the Qutub Minar, a UNESCO World Heritage site, and pay homage at India Gate. The third day takes you to Agra, where you\'ll witness the breathtaking beauty of the Taj Mahal at both sunrise and sunset, offering two completely different perspectives of this architectural masterpiece. Explore the majestic Agra Fort and visit the exquisite Itimad-ud-Daulah, often called the "Baby Taj." On the fourth day, journey to Jaipur, the vibrant Pink City of Rajasthan. Visit the magnificent Amber Fort, where you can enjoy an elephant ride (optional) up to the fort, and explore the City Palace, a splendid complex that houses several palatial structures. Discover the astronomical wonders of Jantar Mantar and admire the unique honeycomb facade of Hawa Mahal, the Palace of Winds. The final day is dedicated to further exploration of Jaipur, including visits to the beautiful Jal Mahal, the Albert Hall Museum, and the colorful local markets where you can shop for traditional handicrafts, textiles, and jewelry. Throughout your journey, enjoy comfortable accommodations, delicious meals featuring local cuisine, expert guidance, and seamless transportation, ensuring an unforgettable and comprehensive introduction to the wonders of India.',
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