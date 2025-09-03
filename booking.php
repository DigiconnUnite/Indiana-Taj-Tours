<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        Indiana Taj Tour | Home Page
    </title>
    <meta name="author" content="Tourm" />
    <meta name="description" content="Tourm - Travel & Tour Booking Agency HTML Template " />
    <meta name="keywords" content="Tourm - Travel & Tour Booking Agency HTML Template " />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- include the links file  -->
    <?php include "links.php" ?>

</head>

<body>
    <!-- include the preloader file -->
    <?php include 'preloader.php'; ?>

<<<<<<< HEAD
    <!-- include the sidebar file -->
=======
    <!-- include the sidemenu file -->
>>>>>>> 01855dcb4151cd76f4ba6be53acaee75aacbe957
    <?php include 'sidebar.php'; ?>

    <!-- Include the header file -->
    <?php include 'header.php'; ?>

<main>
    <!-- Booking Section -->
    <section class="booking-area space" style="background: #f7fafd;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center mb-5">
                        <span class="sub-title">Book Your Tour</span>
                        <h2 class="sec-title">Reserve Your Indiana Taj Experience</h2>
                        <p class="mt-2">Fill out the form below to book your unforgettable journey with Indiana Taj Tour. Our team will contact you soon to confirm your booking and provide further details.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="booking-form-box th-ani gsap-cursor p-4 p-md-5 bg-white rounded shadow">
                        <form action="booking-submit.php" method="post" class="row g-3" id="bookingForm">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" required placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="you@email.com">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" name="phone" required placeholder="+91-XXXXXXXXXX">
                            </div>
                            <div class="col-md-6">
                                <label for="tour" class="form-label">Select Tour Package <span class="text-danger">*</span></label>
                                <select class="form-select" id="tour" name="tour" required>
                                    <option value="" disabled selected>Select a package</option>
                                    <option value="Taj Mahal Day Tour by Car">Taj Mahal Day Tour by Car</option>
                                    <option value="Taj Mahal Sunrise Tour">Taj Mahal Sunrise Tour</option>
                                    <option value="Taj Mahal Tour by Train">Taj Mahal Tour by Gatimaan Express Train</option>
                                    <option value="Taj Mahal Luxury Tour">Taj Mahal Luxury Tour by Premium Car</option>
                                    <option value="Same Day Tour">Same Day Tour</option>
                                    <option value="Golden Triangle">Golden Triangle</option>
                                    <option value="Custom">Custom Tour</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="date" class="form-label">Preferred Date <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="guests" class="form-label">Number of Guests <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="guests" name="guests" min="1" max="50" required value="1">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Additional Message</label>
                                <textarea class="form-control" id="message" name="message" rows="3" placeholder="Any special requests or questions?"></textarea>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <button type="submit" class="th-btn style3 th-icon px-5 py-2">Book Now</button>
                            </div>
                        </form>
                        <div id="bookingSuccess" class="alert alert-success mt-3 d-none" role="alert">
                            Thank you for your booking! We will contact you soon.
                        </div>
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

    // Simple client-side feedback (for demo only)
    document.getElementById('bookingForm')?.addEventListener('submit', function(e) {
        // e.preventDefault(); // Uncomment to prevent actual submission for demo
        document.getElementById('bookingSuccess').classList.remove('d-none');
        setTimeout(() => {
            document.getElementById('bookingSuccess').classList.add('d-none');
        }, 5000);
    });
</script>

</body>

</html>