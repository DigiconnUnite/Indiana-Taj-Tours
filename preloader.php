<!-- Simple Preloader for Indiana Taj Tour -->
<div id="preloader" class="simple-preloader">
    <div class="preloader-container">
        <div class="preloader-content">
            <!-- Logo -->
            <div class="preloader-logo">
                <img src="../assets/img/logo-full.webp" width="300" alt="Indiana Taj Tour" class="logo-image">
            </div>

            <!-- Simple Loading Spinner -->
            <div class="loading-spinner">
                <div class="spinner"></div>
            </div>

            <!-- Loading Text -->
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div>
</div>

<style>
/* Simple Preloader Styles */
.simple-preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #ffffff;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}

.preloader-container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100vw;
    height: 100vh;
}

.preloader-content {
    text-align: center;
    padding: 20px;
}

/* Logo */
.preloader-logo {
    margin-bottom: 30px;
}

.logo-image {
    max-width: 180px;
    height: auto;
}

/* Loading Spinner */
.loading-spinner {
    margin: 20px 0;
}

.spinner {
    width: 40px;
    height: 40px;
    border: 4px solid #f3f3f3;
    border-top: 4px solid #005772;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin: 0 auto;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Loading Text */
.loading-text {
    color: #666;
    font-size: 16px;
    font-weight: 500;
    margin-top: 15px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .logo-image {
        max-width: 140px;
    }

    .spinner {
        width: 35px;
        height: 35px;
        border-width: 3px;
    }

    .loading-text {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .logo-image {
        max-width: 120px;
    }

    .spinner {
        width: 30px;
        height: 30px;
        border-width: 3px;
    }

    .loading-text {
        font-size: 13px;
    }
}

/* Hide preloader with fade out */
.simple-preloader.fade-out {
    animation: fadeOutSimple 0.3s ease-out forwards;
}

@keyframes fadeOutSimple {
    0% { opacity: 1; }
    100% { opacity: 0; visibility: hidden; }
}
</style>

<script>
// Simple preloader functionality
document.addEventListener('DOMContentLoaded', function() {
    const preloader = document.getElementById('preloader');

    // Hide preloader when page is fully loaded
    window.addEventListener('load', function() {
        setTimeout(() => {
            preloader.classList.add('fade-out');
            setTimeout(() => {
                preloader.style.display = 'none';
                document.body.style.overflow = '';
            }, 300);
        }, 500); // Brief minimum display time
    });

    // Prevent scrolling while preloader is active
    document.body.style.overflow = 'hidden';
});
</script>