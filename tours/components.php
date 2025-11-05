<?php
/**
 * Reusable Tour Components - Indiana Taj Tour
 *
 * @author Digiconn Unite Pvt. Ltd.
 * @version 1.0.0
 * @since 2025
 */

/**
 * Render Tour Card Component
 */
function render_tour_card($tour) {
    ?>
    <div class="tour-card">
        <div class="tour-img">
            <img src="<?php echo $tour['hero_image']; ?>" alt="<?php echo $tour['title']; ?>">
            <span class="tour-badge"><?php echo $tour['badge']; ?></span>
        </div>
        <div class="tour-content">
            <h3 class="tour-title"><?php echo $tour['title']; ?></h3>
            <div class="tour-location">
                <i class="fas fa-map-marker-alt"></i>
                <?php echo $tour['location']; ?>
            </div>

            <div class="tour-meta">
                <span class="tour-duration">
                    <i class="fas fa-clock"></i>
                    <?php echo $tour['duration']; ?>
                </span>
                <span class="tour-service"><?php echo $tour['service']; ?></span>
            </div>

            <div class="tour-price">₹<?php echo number_format($tour['price']); ?></div>

            <div class="tour-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <span><?php echo $tour['rating']; ?> (<?php echo $tour['reviews']; ?> reviews)</span>
            </div>

            <p class="tour-excerpt"><?php echo substr($tour['overview'], 0, 100); ?>...</p>

            <div class="tour-highlights">
                <?php foreach(array_slice($tour['highlights'], 0, 3) as $highlight): ?>
                <span class="highlight-tag"><?php echo $highlight['title']; ?></span>
                <?php endforeach; ?>
            </div>

            <a href="<?php echo $tour['slug']; ?>" class="book-btn">
                <i class="fas fa-eye"></i>
                View Details
            </a>
        </div>
    </div>
    <?php
}

/**
 * Render Tour Sidebar Component
 */
function render_tour_sidebar($current_tour_id = null) {
    include 'data.php';
    $categories = get_tour_categories();
    ?>
    <div class="sidebar-widget">
        <h3>Tour Categories</h3>
        <ul class="category-list">
            <?php foreach($categories as $category => $count): ?>
            <li>
                <a href="index.php?category=<?php echo urlencode($category); ?>">
                    <?php echo $category; ?>
                    <span>(<?php echo $count; ?>)</span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="sidebar-widget">
        <h3>Price Range</h3>
        <?php $price_range = get_tour_price_range(); ?>
        <div class="price-range">
            <p>₹<?php echo number_format($price_range['min']); ?> - ₹<?php echo number_format($price_range['max']); ?></p>
        </div>
    </div>

    <div class="sidebar-widget">
        <h3>Popular Tours</h3>
        <?php $featured_tours = get_featured_tours(3); ?>
        <?php foreach($featured_tours as $tour): ?>
        <div class="popular-tour-item">
            <img src="<?php echo $tour['hero_image']; ?>" alt="<?php echo $tour['title']; ?>">
            <div class="tour-info">
                <h4><?php echo $tour['title']; ?></h4>
                <div class="tour-price">₹<?php echo number_format($tour['price']); ?></div>
                <a href="<?php echo $tour['slug']; ?>" class="btn-small">View</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * Render Booking Form Component
 */
function render_booking_form($tour) {
    ?>
    <div class="booking-form-container">
        <div class="booking-card">
            <div class="tour-price">₹<?php echo number_format($tour['price']); ?></div>
            <p>per person</p>

            <form class="booking-form" action="process-booking.php" method="POST">
                <input type="hidden" name="tour_slug" value="<?php echo $tour['slug']; ?>">

                <div class="form-group">
                    <label for="tour_date">Tour Date</label>
                    <input type="date" id="tour_date" name="tour_date" required>
                </div>

                <div class="form-group">
                    <label for="participants">Number of Participants</label>
                    <select id="participants" name="participants" required>
                        <option value="">Select</option>
                        <option value="1">1 Person</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4">4 People</option>
                        <option value="5">5 People</option>
                        <option value="6">6+ People</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <button type="submit" class="book-now-btn">Book Now</button>
            </form>

            <div class="booking-info">
                <p><i class="fas fa-check-circle"></i> Free cancellation up to 24 hours</p>
                <p><i class="fas fa-shield-alt"></i> Secure booking</p>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Render Tour Gallery Component
 */
function render_tour_gallery($tour) {
    ?>
    <div class="tour-gallery">
        <?php foreach($tour['gallery'] as $image): ?>
        <div class="gallery-item">
            <img src="<?php echo $image; ?>" alt="<?php echo $tour['title']; ?>">
        </div>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * Render Tour Itinerary Component
 */
function render_tour_itinerary($tour) {
    ?>
    <div class="itinerary-container">
        <?php foreach($tour['itinerary'] as $item): ?>
        <div class="itinerary-item">
            <div class="itinerary-number"><?php echo $item['step']; ?></div>
            <div class="itinerary-content">
                <h4><?php echo $item['time']; ?>: <?php echo $item['title']; ?></h4>
                <p><?php echo $item['desc']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * Render Tour Highlights Component
 */
function render_tour_highlights($tour) {
    ?>
    <div class="highlights-container">
        <?php foreach($tour['highlights'] as $highlight): ?>
        <div class="highlight-item">
            <div class="highlight-icon">
                <i class="<?php echo $highlight['icon']; ?>"></i>
            </div>
            <div class="highlight-content">
                <h4><?php echo $highlight['title']; ?></h4>
                <p><?php echo $highlight['desc']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * Render Related Tours Component
 */
function render_related_tours($tour_slug, $limit = 3) {
    $related_tours = get_related_tours($tour_slug, $limit);
    ?>
    <div class="related-tours">
        <h2 class="section-title">Related Tours</h2>
        <div class="related-tours-grid">
            <?php foreach($related_tours as $tour): ?>
            <div class="related-tour-card">
                <img src="<?php echo $tour['hero_image']; ?>" alt="<?php echo $tour['title']; ?>">
                <div class="related-tour-content">
                    <h3><?php echo $tour['title']; ?></h3>
                    <p><?php echo $tour['location']; ?></p>
                    <div class="tour-price">₹<?php echo number_format($tour['price']); ?></div>
                    <a href="<?php echo $tour['slug']; ?>" class="btn-small">View Details</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
}

/**
 * Render Tour Meta Information Component
 */
function render_tour_meta($tour) {
    ?>
    <div class="tour-meta-info">
        <div class="meta-grid">
            <div class="meta-item">
                <i class="fas fa-clock"></i>
                <div>
                    <strong>Duration</strong>
                    <p><?php echo $tour['duration']; ?></p>
                </div>
            </div>
            <div class="meta-item">
                <i class="fas fa-users"></i>
                <div>
                    <strong>Service</strong>
                    <p><?php echo $tour['service']; ?></p>
                </div>
            </div>
            <div class="meta-item">
                <i class="fas fa-language"></i>
                <div>
                    <strong>Languages</strong>
                    <p><?php echo $tour['languages']; ?></p>
                </div>
            </div>
            <div class="meta-item">
                <i class="fas fa-car"></i>
                <div>
                    <strong>Transport</strong>
                    <p><?php echo $tour['transport']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Render Tour Search Component
 */
function render_tour_search() {
    ?>
    <div class="tour-search-container">
        <form class="tour-search-form" action="search-results.php" method="GET">
            <div class="search-inputs">
                <input type="text" name="search" placeholder="Search tours..." required>
                <select name="category">
                    <option value="">All Categories</option>
                    <option value="taj-mahal">Taj Mahal Tours</option>
                    <option value="same-day">Same Day Tours</option>
                    <option value="golden-triangle">Golden Triangle</option>
                </select>
                <button type="submit" class="search-btn">
                    <i class="fas fa-search"></i>
                    Search
                </button>
            </div>
        </form>
    </div>
    <?php
}
?>