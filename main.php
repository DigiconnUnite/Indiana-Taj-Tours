<?php
// Indiana Taj Tour - Main PHP Handler for Forms and Email Functionality
// This file handles contact form submissions and booking inquiries

// Enable error reporting for development (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include PHPMailer classes (you'll need to install PHPMailer via Composer)
// If PHPMailer is not installed, you can install it with: composer require phpmailer/phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoloader
require 'vendor/autoload.php'; // Adjust path if needed

// SMTP Configuration
define('SMTP_HOST', 'smtp.gmail.com'); // Change to your SMTP host
define('SMTP_PORT', 587); // 587 for TLS, 465 for SSL
define('SMTP_USERNAME', 'indianatajtourswork@gmail.com'); // Your email
define('SMTP_PASSWORD', 'mldsdmmcyoetpvpp'); 
define('SMTP_ENCRYPTION', 'tls'); // 'tls' or 'ssl'

// Admin Email Configuration
define('ADMIN_EMAIL', 'indianatajtourswork@gmail.com');
define('ADMIN_NAME', 'Indiana Taj Tour Admin');

// Company Information
define('COMPANY_NAME', 'Indiana Taj Tour');
define('COMPANY_EMAIL', 'indianatajtourswork@gmail.com');
define('COMPANY_PHONE', '+91-9557679951');
define('COMPANY_WEBSITE', 'https://indianatajtour.com');

/**
 * Send email using SMTP
 */
function sendEmail($to, $toName, $subject, $body, $isHTML = true) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_ENCRYPTION;
        $mail->Port = SMTP_PORT;

        // Recipients
        $mail->setFrom(COMPANY_EMAIL, COMPANY_NAME);
        $mail->addAddress($to, $toName);

        // Content
        $mail->isHTML($isHTML);
        $mail->Subject = $subject;
        $mail->Body = $body;

        // Add plain text alternative
        if ($isHTML) {
            $mail->AltBody = strip_tags($body);
        }

        $mail->send();
        return ['success' => true, 'message' => 'Email sent successfully'];
    } catch (Exception $e) {
        return ['success' => false, 'message' => 'Email could not be sent. Error: ' . $mail->ErrorInfo];
    }
}

/**
 * Handle Contact Form Submission
 */
function handleContactForm($postData) {
    // Sanitize input
    $name = htmlspecialchars(trim($postData['name'] ?? ''));
    $email = htmlspecialchars(trim($postData['email'] ?? ''));
    $phone = htmlspecialchars(trim($postData['phone'] ?? ''));
    $subject = htmlspecialchars(trim($postData['subject'] ?? ''));
    $message = htmlspecialchars(trim($postData['message'] ?? ''));

    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        return ['success' => false, 'message' => 'All required fields must be filled'];
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'message' => 'Please enter a valid email address'];
    }

    // Prepare admin email
    $adminSubject = "New Contact Form Inquiry - " . $subject;
    $adminBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #005772; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #005772; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Contact Form Inquiry</h2>
                <p>" . COMPANY_NAME . "</p>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>Name:</span> {$name}
                </div>
                <div class='field'>
                    <span class='label'>Email:</span> {$email}
                </div>
                <div class='field'>
                    <span class='label'>Phone:</span> " . ($phone ?: 'Not provided') . "
                </div>
                <div class='field'>
                    <span class='label'>Subject:</span> {$subject}
                </div>
                <div class='field'>
                    <span class='label'>Message:</span><br>
                    " . nl2br($message) . "
                </div>
                <div class='field'>
                    <span class='label'>Received:</span> " . date('Y-m-d H:i:s') . "
                </div>
            </div>
        </div>
    </body>
    </html>
    ";

    // Send email to admin
    $adminResult = sendEmail(ADMIN_EMAIL, ADMIN_NAME, $adminSubject, $adminBody);

    if (!$adminResult['success']) {
        return $adminResult;
    }

    // Prepare confirmation email to visitor
    $visitorSubject = "Thank you for contacting " . COMPANY_NAME;
    $visitorBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #005772; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .contact-info { background: white; padding: 15px; margin: 20px 0; border-left: 4px solid #005772; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Thank You for Contacting Us!</h2>
                <p>" . COMPANY_NAME . "</p>
            </div>
            <div class='content'>
                <p>Dear {$name},</p>
                <p>Thank you for reaching out to " . COMPANY_NAME . ". We have received your inquiry regarding \"{$subject}\" and our team will get back to you within 24 hours.</p>

                <p><strong>Your Message:</strong></p>
                <p>" . nl2br($message) . "</p>

                <div class='contact-info'>
                    <p><strong>Contact Information:</strong></p>
                    <p>Email: " . COMPANY_EMAIL . "</p>
                    <p>Phone: " . COMPANY_PHONE . "</p>
                    <p>Website: <a href='" . COMPANY_WEBSITE . "'>" . COMPANY_WEBSITE . "</a></p>
                </div>

                <p>We look forward to assisting you with your travel plans!</p>
                <p>Best regards,<br>The " . COMPANY_NAME . " Team</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Send confirmation email to visitor
    $visitorResult = sendEmail($email, $name, $visitorSubject, $visitorBody);

    if ($visitorResult['success']) {
        return ['success' => true, 'message' => 'Thank you for contacting us! We will get back to you soon.'];
    } else {
        // Admin email was sent successfully, but visitor confirmation failed
        return ['success' => true, 'message' => 'Your message has been received. We will contact you soon.'];
    }
}

/**
 * Handle Booking Form Submission
 */
function handleBookingForm($postData) {
    // Sanitize input
    $name = htmlspecialchars(trim($postData['name'] ?? ''));
    $email = htmlspecialchars(trim($postData['email'] ?? ''));
    $phone = htmlspecialchars(trim($postData['phone'] ?? ''));
    $tour = htmlspecialchars(trim($postData['tour'] ?? ''));
    $date = htmlspecialchars(trim($postData['date'] ?? ''));
    $guests = htmlspecialchars(trim($postData['guests'] ?? ''));
    $message = htmlspecialchars(trim($postData['message'] ?? ''));

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($tour) || empty($date) || empty($guests)) {
        return ['success' => false, 'message' => 'All required fields must be filled'];
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['success' => false, 'message' => 'Please enter a valid email address'];
    }

    // Validate date (must be in the future)
    if (strtotime($date) < strtotime('today')) {
        return ['success' => false, 'message' => 'Please select a future date'];
    }

    // Prepare admin email
    $adminSubject = "New Tour Booking Inquiry - " . $tour;
    $adminBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #005772; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #005772; }
            .urgent { background: #fff3cd; border: 1px solid #ffeaa7; padding: 10px; margin: 15px 0; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Tour Booking Inquiry</h2>
                <p>" . COMPANY_NAME . "</p>
            </div>
            <div class='content'>
                <div class='urgent'>
                    <strong>🚨 Action Required:</strong> New booking inquiry received. Please contact the customer within 24 hours.
                </div>
                <div class='field'>
                    <span class='label'>Customer Name:</span> {$name}
                </div>
                <div class='field'>
                    <span class='label'>Email:</span> {$email}
                </div>
                <div class='field'>
                    <span class='label'>Phone:</span> {$phone}
                </div>
                <div class='field'>
                    <span class='label'>Selected Tour:</span> {$tour}
                </div>
                <div class='field'>
                    <span class='label'>Preferred Date:</span> {$date}
                </div>
                <div class='field'>
                    <span class='label'>Number of Guests:</span> {$guests}
                </div>
                <div class='field'>
                    <span class='label'>Additional Message:</span><br>
                    " . (nl2br($message) ?: 'No additional message') . "
                </div>
                <div class='field'>
                    <span class='label'>Inquiry Received:</span> " . date('Y-m-d H:i:s') . "
                </div>
            </div>
        </div>
    </body>
    </html>
    ";

    // Send email to admin
    $adminResult = sendEmail(ADMIN_EMAIL, ADMIN_NAME, $adminSubject, $adminBody);

    if (!$adminResult['success']) {
        return $adminResult;
    }

    // Prepare confirmation email to visitor
    $visitorSubject = "Booking Confirmation - " . COMPANY_NAME;
    $visitorBody = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: #005772; color: white; padding: 20px; text-align: center; }
            .content { padding: 20px; background: #f9f9f9; }
            .booking-details { background: white; padding: 15px; margin: 20px 0; border-left: 4px solid #005772; }
            .contact-info { background: white; padding: 15px; margin: 20px 0; border-left: 4px solid #28a745; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Booking Inquiry Received!</h2>
                <p>" . COMPANY_NAME . "</p>
            </div>
            <div class='content'>
                <p>Dear {$name},</p>
                <p>Thank you for your interest in our tours! We have received your booking inquiry and our travel experts will contact you within 24 hours to confirm availability and provide a customized quote.</p>

                <div class='booking-details'>
                    <h3>Your Booking Details:</h3>
                    <p><strong>Tour Package:</strong> {$tour}</p>
                    <p><strong>Preferred Date:</strong> {$date}</p>
                    <p><strong>Number of Guests:</strong> {$guests}</p>
                    <p><strong>Contact:</strong> {$phone}</p>
                </div>

                <div class='contact-info'>
                    <p><strong>Our team will contact you soon at:</strong></p>
                    <p>Email: " . COMPANY_EMAIL . "</p>
                    <p>Phone: " . COMPANY_PHONE . "</p>
                </div>

                <p>If you have any urgent questions, please don't hesitate to call us directly.</p>
                <p>We look forward to making your India travel experience unforgettable!</p>
                <p>Best regards,<br>The " . COMPANY_NAME . " Team</p>
            </div>
        </div>
    </body>
    </html>
    ";

    // Send confirmation email to visitor
    $visitorResult = sendEmail($email, $name, $visitorSubject, $visitorBody);

    if ($visitorResult['success']) {
        return ['success' => true, 'message' => 'Thank you for your booking inquiry! We will contact you within 24 hours.'];
    } else {
        // Admin email was sent successfully, but visitor confirmation failed
        return ['success' => true, 'message' => 'Your booking inquiry has been received. We will contact you soon.'];
    }
}

/**
 * Main handler for form submissions
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');

    // Determine which form was submitted
    if (isset($_POST['subject'])) {
        // Contact form
        $result = handleContactForm($_POST);
    } elseif (isset($_POST['tour'])) {
        // Booking form
        $result = handleBookingForm($_POST);
    } else {
        $result = ['success' => false, 'message' => 'Invalid form submission'];
    }

    echo json_encode($result);
    exit;
}

// If accessed directly without POST, redirect to home
header('Location: index.php');
exit;
?>