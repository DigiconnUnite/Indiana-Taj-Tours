<?php
// Get current file name for active link logic
$current_page = basename($_SERVER['PHP_SELF']);
function is_active($pages) {
    global $current_page;
    if (is_array($pages)) {
        return in_array($current_page, $pages) ? 'active-link' : '';
    }
    return $current_page === $pages ? 'active-link' : '';
}
?>
<style>
    /* Active link underline style */
    .main-menu a.active-link, .main-menu .active-link > a, .main-menu .active-link > a:visited {
        border-bottom: 2px solid #005463;
        color:#005463 !important;
        font-weight: 600;
    }
    .main-menu .menu-item-has-children.active-link > a {
        border-bottom: 2px solid #005463;
    }
</style>
<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container th-container">
            <div class="row justify-content-center justify-content-xl-between align-items-center">
                <div class="col-auto d-none d-md-block">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-xl-inline-block">
                                <i class="fa-sharp fa-regular fa-location-dot"></i>
                                <span>Tajganj, Agra - 282006</span>
                            </li>
                            <li class="d-none d-xl-inline-block">
                                <i class="fa-regular fa-clock"></i>
                                <span>Sun to Sat: 8.00 am - 7.00 pm</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-right">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-md-inline-block">
                                    <a href="tel:+"><i class="fa-regular fa-phone-volume"></i>
                                        <span>+91-955769951
                                        </span></a>
                                </li>
                                <li class="d-none d-md-inline-block">
                                    <a href="mailto:indianatajtourswork@gmail.com"><i class="fa-regular fa-envelope"></i>
                                        <span> indianatajtourswork@gmail.com</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container th-container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="index.php"><img src="assets/img/logo-dark.png" alt="Tourm" /></a>
                        </div>
                    </div>
                    <div class="col-auto me-xl-auto">
                        <nav class="main-menu d-none d-xl-inline-block">
                            <ul>
                                <li class="<?php echo is_active('index.php') || is_active('index.php') ? 'active-link' : ''; ?>">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="<?php echo is_active('about.php'); ?>">
                                    <a href="about.php">About Us</a>
                                </li>
                                <li class="<?php echo is_active('taj-mahal-tour.php'); ?>">
                                    <a href="taj-mahal-tour.php">Taj Mahal Tour</a>
                                </li>
                                <?php
                                // Check if any of the tour package pages are active
                                $tour_pages = ['same-day-tour.php', 'golder-triangle.php'];
                                $is_tour_active = is_active($tour_pages);
                                ?>
                                <li class="menu-item-has-children <?php echo $is_tour_active; ?>">
                                    <a href="#">Tour Packages</a>
                                    <ul class="sub-menu">
                                        <li class="<?php echo is_active('same-day-tour.php'); ?>">
                                            <a href="same-day-tour.php">Same Day Tour</a>
                                        </li>
                                        <li class="<?php echo is_active('golder-triangle.php'); ?>">
                                            <a href="golder-triangle.php">Golden Triangle</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="<?php echo is_active('contact.php'); ?>">
                                    <a href="contact.php">Contact us</a>
                                </li>
                            </ul>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-xl-none">
                            <i class="far fa-bars"></i>
                        </button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="booking.php" class="th-btn style3 th-icon <?php echo is_active('booking.php'); ?>">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>