<?php
// Fixed Book This Tour Button Component
// Usage: Include this file in any tour detail page and pass the tour name as a parameter

// Get tour name from parameter or use default
$tourName = isset($tourName) ? $tourName : 'Taj Mahal and Agra Fort Tour by Car from Delhi';
$encodedTourName = urlencode($tourName);
?>

<!-- Fixed Book This Tour Button -->
<div class="fixed-book-button" id="fixedBookButton">
    <a href="booking.php?tour=<?php echo $encodedTourName; ?>" class="book-tour-btn" title="Book This Tour">
        <i class="fas fa-calendar-check"></i>
        <span>Book This Tour</span>
    </a>
</div>

<style>
    /* Fixed Book This Tour Button */
    .fixed-book-button {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 9999;
        animation: slideInFromRight 0.5s ease-out;
    }

    .book-tour-btn {
        display: flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #113d48 0%, #0a2a35 100%);
        color: white;
        
        padding: 15px 25px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 16px;
        box-shadow: 0 8px 25px rgba(17, 61, 72, 0.3);
        transition: all 0.3s ease;
        border: 2px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .book-tour-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s;
    }

    .book-tour-btn:hover::before {
        left: 100%;
    }

    .book-tour-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 15px 35px rgba(17, 61, 72, 0.4);
        background: linear-gradient(135deg, #0a2a35 0%, #113d48 100%);
        border-color: #113d48;
        color: white;
        text-decoration: none;
    }

    .book-tour-btn:active {
        transform: translateY(-1px) scale(1.02);
    }

    .book-tour-btn i {
        font-size: 18px;
        animation: bounce 2s infinite;
        z-index: 1;
        position: relative;
    }

    .book-tour-btn span {
        white-space: nowrap;
        z-index: 1;
        position: relative;
    }

    /* Pulse animation for attention */
    .book-tour-btn {
        animation: pulse 3s infinite, slideInFromRight 0.5s ease-out;
    }

    /* Bounce animation for icon */
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-3px);
        }
        60% {
            transform: translateY(-2px);
        }
    }

    /* Pulse animation for button */
    @keyframes pulse {
        0% {
            box-shadow: 0 8px 25px rgba(17, 61, 72, 0.3), 0 0 0 0 rgba(17, 61, 72, 0.7);
        }
        70% {
            box-shadow: 0 8px 25px rgba(17, 61, 72, 0.3), 0 0 0 10px rgba(17, 61, 72, 0);
        }
        100% {
            box-shadow: 0 8px 25px rgba(17, 61, 72, 0.3), 0 0 0 0 rgba(17, 61, 72, 0);
        }
    }

    /* Slide in animation */
    @keyframes slideInFromRight {
        from {
            transform: translateX(100px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
        .fixed-book-button {
            bottom: 20px;
            right: 20px;
        }

        .book-tour-btn {
            padding: 12px 20px;
            font-size: 14px;
        }

        .book-tour-btn span {
            display: none; /* Hide text on mobile, show only icon */
        }

        .book-tour-btn i {
            font-size: 20px;
        }
    }

    @media (max-width: 480px) {
        .fixed-book-button {
            bottom: 15px;
            right: 15px;
        }

        .book-tour-btn {
            padding: 10px 18px;
            border-radius: 40px;
        }
    }

    /* Hide button when scrolling to footer */
    .footer-visible .fixed-book-button {
        display: none;
    }
</style>

<script>
    // Hide button when near footer
    document.addEventListener('DOMContentLoaded', function() {
        const bookButton = document.getElementById('fixedBookButton');
        const footer = document.querySelector('footer') || document.querySelector('.footer');

        if (bookButton && footer) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        bookButton.style.display = 'none';
                    } else {
                        bookButton.style.display = 'block';
                    }
                });
            }, { threshold: 0.1 });

            observer.observe(footer);
        }

        // Add click tracking
        const bookBtn = document.querySelector('.book-tour-btn');
        if (bookBtn) {
            bookBtn.addEventListener('click', function(e) {
                // You can add analytics tracking here
                console.log('Book This Tour button clicked for: <?php echo $tourName; ?>');
                console.log('Button href:', this.href);
                console.log('Tour name (original):', '<?php echo $tourName; ?>');
                console.log('Tour name (encoded):', '<?php echo $encodedTourName; ?>');
            });
        }
    });
</script>