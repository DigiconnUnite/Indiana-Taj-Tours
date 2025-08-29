<?php
header('Content-Type: application/json');


// Load PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Email configurations
define('CONTACT_FORM_ADMIN_EMAIL', 'support@digiconnunite.com');
define('CAREER_FORM_ADMIN_EMAIL', 'hr@digiconnunite.com');
define('NOREPLY_EMAIL', 'no-reply@digiconnunite.com');
define('COMPANY_NAME', 'Digiconn Unite');

// SMTP Configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_USERNAME', 'digiconnglobal@gmail.com');
define('SMTP_PASSWORD', 'ssnlnfvtemwvribo'); 
define('SMTP_PORT', 587);
define('SMTP_SECURE', PHPMailer::ENCRYPTION_STARTTLS);

// Initialize response
$response = ['status' => 'error', 'message' => 'Invalid request'];

try {
    // Determine which form is being submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['resume'])) {
            $response = handleCareerForm();
        } else {
            $response = handleContactForm();
        }
    }
} catch (Exception $e) {
    $response = ['status' => 'error', 'message' => $e->getMessage()];
    error_log("Exception: " . $e->getMessage());
}

// Ensure proper JSON output
echo json_encode($response);
exit;

function handleContactForm() {
    // Initialize errors array
    $errors = [];

    // Sanitize and validate inputs
    $name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $subject = isset($_POST['subject']) ? trim(strip_tags($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

    // Validation
    if (empty($name)) {
        $errors['name'] = 'Name is required';
    } elseif (strlen($name) < 2) {
        $errors['name'] = 'Name must be at least 2 characters';
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address';
    }

    if (empty($phone)) {
        $errors['phone'] = 'Phone number is required';
    } elseif (!preg_match('/^[0-9\s\+\-\(\)]{10,20}$/', $phone)) {
        $errors['phone'] = 'Please enter a valid phone number';
    }

    if (empty($subject)) {
        $errors['subject'] = 'Subject is required';
    } elseif (strlen($subject) < 5) {
        $errors['subject'] = 'Subject must be at least 5 characters';
    }

    if (empty($message)) {
        $errors['message'] = 'Message is required';
    } elseif (strlen($message) < 10) {
        $errors['message'] = 'Message must be at least 10 characters';
    }

    if (!empty($errors)) {
        return ['status' => 'error', 'message' => 'Please fix the errors below', 'errors' => $errors];
    }

    // Send email to admin using the support_mail.php template
    $adminSubject = "New Contact Form Submission: $subject";
    $date = date('Y-m-d');
    ob_start();
    $name = $name;
    $email = $email;
    $phone = $phone;
    $subject = $subject;
    $message = $message;
    include __DIR__ . '/template/support_mail.php';
    $adminMessage = ob_get_clean();
    if (!sendEmail(CONTACT_FORM_ADMIN_EMAIL, $adminSubject, $adminMessage, $email)) {
        throw new Exception('Failed to send admin email');
    }

    // Send confirmation to user
    $userSubject = "Thank you for contacting " . COMPANY_NAME;

    // Get a brief excerpt of the message (first 100 chars)
    $messageExcerpt = mb_substr($message, 0, 100);
    if (mb_strlen($message) > 100) {
        $messageExcerpt .= '...';
    }

    // Prepare variables for the template
    $name = $name;
    $email = $email;
    $subject = $subject;
    $messageExcerpt = mb_strimwidth($message, 0, 100, '...');
    $date = date('Y-m-d');
    ob_start();
    include __DIR__ . '/template/user_confimation_mail.php';
    $userMessage = ob_get_clean();

    if (!sendEmail($email, $userSubject, $userMessage)) {
        throw new Exception('Failed to send user confirmation email');
    }

    return ['status' => 'success', 'message' => 'Your message has been sent successfully! We will contact you soon.'];
}

function handleCareerForm() {
    $errors = [];
    
    // Sanitize inputs
    $name = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $position = isset($_POST['position']) ? trim(strip_tags($_POST['position'])) : '';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

    // Handle file upload
    $resumePath = '';
    if (isset($_FILES['resume'])) {
        $resume = $_FILES['resume'];
        $allowedTypes = [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ];
        $maxSize = 5 * 1024 * 1024; // 5MB

        if ($resume['error'] !== UPLOAD_ERR_OK) {
            $errors['resume'] = 'File upload error: ' . $resume['error'];
        } elseif (!in_array($resume['type'], $allowedTypes)) {
            $errors['resume'] = 'Only PDF and DOC/DOCX files are allowed';
        } elseif ($resume['size'] > $maxSize) {
            $errors['resume'] = 'File size must be less than 5MB';
        } else {
            $uploadDir = 'uploads/resumes/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $filename = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9\.]/', '_', $resume['name']);
            $resumePath = $uploadDir . $filename;

            if (!move_uploaded_file($resume['tmp_name'], $resumePath)) {
                $errors['resume'] = 'Failed to save file';
            }
        }
    }

    // Validation
    if (empty($name)) {
        $errors['name'] = 'Name is required';
    } elseif (strlen($name) < 2) {
        $errors['name'] = 'Name must be at least 2 characters';
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address';
    }

    if (empty($phone)) {
        $errors['phone'] = 'Phone number is required';
    }

    if (empty($position)) {
        $errors['position'] = 'Position is required';
    }

    if (empty($resumePath)) {
        $errors['resume'] = 'Resume is required';
    }

    if (!empty($errors)) {
        return ['status' => 'error', 'message' => 'Please fix the errors below', 'errors' => $errors];
    }

    // Send email to HR with attachment and HTML template
    $adminSubject = "New Job Application: $position";
    // Prepare variables for the HR template
    $resumeUrl = '';
    if (!empty($resumePath)) {
        // If you want to provide a public URL, adjust this as needed
        $resumeUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') .
            '://' . $_SERVER['HTTP_HOST'] . '/' . ltrim($resumePath, '/');
    }
    $date = date('Y-m-d');
    ob_start();
    $name = $name;
    $email = $email;
    $phone = $phone;
    $position = $position;
    $message = $message;
    $resumePath = $resumeUrl;
    include __DIR__ . '/template/hr_career_mail.php';
    $adminMessage = ob_get_clean();
    if (!sendEmail(CAREER_FORM_ADMIN_EMAIL, $adminSubject, $adminMessage, $email)) {
        // Clean up uploaded file if email fails
        if (file_exists($resumePath)) {
            unlink($resumePath);
        }
        throw new Exception('Failed to send HR email with attachment');
    }

    // Send confirmation to user from NO-REPLY email
    $userSubject = "Thank you for your application";
    // Prepare variables for the template
    $name = $name;
    $email = $email;
    $subject = $position;
    $messageExcerpt = mb_strimwidth($message, 0, 100, '...');
    $date = date('Y-m-d');
    ob_start();
    include __DIR__ . '/template/user_confimation_mail.php';
    $userMessage = ob_get_clean();
    // Send from NOREPLY_EMAIL, do not set reply-to to user
    if (!sendEmail($email, $userSubject, $userMessage, NOREPLY_EMAIL)) {
        throw new Exception('Failed to send user confirmation email');
    }

    return ['status' => 'success', 'message' => 'Your application has been submitted successfully!'];
}

function sendEmail($to, $subject, $message, $replyTo = null) {
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port       = SMTP_PORT;
        $mail->CharSet    = 'UTF-8';
        
        // Recipients
        $mail->setFrom(NOREPLY_EMAIL, COMPANY_NAME);
        $mail->addAddress($to);
        if ($replyTo) {
            $mail->addReplyTo($replyTo);
        } else {
            $mail->addReplyTo(NOREPLY_EMAIL, COMPANY_NAME);
        }
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = strip_tags($message);
        
        return $mail->send();
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo);
        return false;
    }
}

function sendEmailWithAttachment($to, $subject, $message, $filePath) {
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port       = SMTP_PORT;
        $mail->CharSet    = 'UTF-8';
        
        // Recipients
        $mail->setFrom(NOREPLY_EMAIL, COMPANY_NAME);
        $mail->addAddress($to);
        $mail->addReplyTo(NOREPLY_EMAIL, COMPANY_NAME);
        
        // Attachments
        if ($filePath && file_exists($filePath)) {
            $mail->addAttachment($filePath);
        }
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = strip_tags($message);
        
        return $mail->send();
    } catch (Exception $e) {
        error_log("Mailer Error: " . $mail->ErrorInfo);
        return false;
    }
}