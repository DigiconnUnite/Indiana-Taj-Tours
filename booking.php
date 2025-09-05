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
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <!-- include the links file  -->
    <?php include "links.php" ?>

    <style>
        .form-control.is-valid {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }
        .form-control.is-invalid {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }
        .form-select.is-valid {
            border-color: #28a745;
            box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        }
        .form-select.is-invalid {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        }
        .tour-info-display {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
            display: none;
        }
        .tour-info-display.show {
            display: block;
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
                        <form action="main.php" method="post" class="row g-3" id="bookingForm">
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
                                    <optgroup label="Golden Triangle Tours">
                                        <option value="Golden Triangle Tour 3 Days">Golden Triangle Tour 3 Days</option>
                                        <option value="Golden Triangle Tour 4 Days">Golden Triangle Tour 4 Days</option>
                                        <option value="Golden Triangle Tour 5 Days">Golden Triangle Tour 5 Days</option>
                                        <option value="Golden Triangle Tour with Amritsar">Golden Triangle Tour with Amritsar</option>
                                        <option value="Golden Triangle Tour with Pushkar">Golden Triangle Tour with Pushkar</option>
                                        <option value="Golden Triangle Tour with Ranthambore">Golden Triangle Tour with Ranthambore</option>
                                        <option value="Golden Triangle Tour with Udaipur">Golden Triangle Tour with Udaipur</option>
                                        <option value="Golden Triangle Tour with Varanasi">Golden Triangle Tour with Varanasi</option>
                                    </optgroup>
                                    <optgroup label="Other Options">
                                        <option value="Custom Tour Package">Custom Tour Package</option>
                                    </optgroup>
                                </select>
                            </div>
                            <!-- Tour Information Display -->
                            <div class="col-12">
                                <div class="tour-info-display" id="tourInfoDisplay">
                                    <h6 class="mb-2"><i class="fas fa-info-circle me-2"></i>Tour Information</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="mb-1"><strong>Duration:</strong> <span id="infoDuration">-</span></p>
                                            <p class="mb-1"><strong>Destination:</strong> <span id="infoDestination">-</span></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-1"><strong>Category:</strong> <span id="infoCategory">-</span></p>
                                            <p class="mb-1"><strong>Suggested Group:</strong> <span id="infoGuests">-</span></p>
                                        </div>
                                    </div>
                                </div>
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

    // Real-time validation
    document.querySelectorAll('input[required], select[required], textarea[required]').forEach(field => {
        field.addEventListener('blur', function() {
            if (this.value.trim()) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            } else {
                this.classList.remove('is-valid');
                this.classList.add('is-invalid');
            }
        });
    });
</script>

</body>

</html>