# Indiana Taj Tour - Professional Tour Booking Website

A comprehensive tour booking website for Indiana Taj Tour, specializing in Taj Mahal tours, Golden Triangle packages, and day trips across India.

## 🚀 Features

- **SEO Optimized**: All pages include proper meta tags for search engine optimization
- **Responsive Design**: Mobile-friendly design that works on all devices
- **Contact & Booking Forms**: AJAX-powered forms with SMTP email functionality
- **Tour Packages**: Detailed pages for various tour packages
- **Professional Layout**: Clean, modern design with engaging content

## 📋 Prerequisites

- PHP 7.4 or higher
- Web server (Apache/Nginx)
- Composer (for dependency management)
- SMTP email account (Gmail recommended)

## 🛠️ Installation & Setup

### 1. Clone or Download Files
```bash
# If using git
git clone [repository-url]
cd indianataj-tour
```

### 2. Install Dependencies
```bash
# Install PHPMailer and other dependencies
composer install
```

### 3. Configure SMTP Settings

Edit `main.php` and update the SMTP configuration:

#### For Gmail SMTP:
1. Enable 2-Factor Authentication on your Google account
2. Generate an App Password: https://support.google.com/accounts/answer/185833
3. Use your Gmail address as SMTP_USERNAME
4. Use the generated App Password as SMTP_PASSWORD

### 4. Configure Admin Email

Update the admin email in `main.php`:
```php
define('ADMIN_EMAIL', 'your-admin-email@domain.com');
```

### 5. Upload to Web Server

Upload all files to your web server or hosting provider.

## 📧 Email Configuration

The website includes two types of email functionality:

### Contact Form Emails
- **To Admin**: Notification of new contact inquiries
- **To Visitor**: Confirmation email with contact details

### Booking Form Emails
- **To Admin**: Detailed booking inquiry with customer information
- **To Visitor**: Confirmation with booking details and next steps

## 📄 Pages Included

### Main Pages
- `index.php` - Homepage with featured tours
- `about.php` - About Indiana Taj Tour
- `contact.php` - Contact form and information
- `terms.php` - Terms and conditions

### Tour Pages
- `golden-triangle-tour-3-days.php` - 3-day Golden Triangle tour
- `golden-triangle-tour-4-days.php` - 4-day Golden Triangle tour
- `golden-triangle-tour-5-days.php` - 5-day Golden Triangle tour
- `golden-triangle-tour-with-amritsar.php` - Golden Triangle + Amritsar
- `golden-triangle-tour-with-pushkar.php` - Golden Triangle + Pushkar
- `golden-triangle-tour-with-ranthambore.php` - Golden Triangle + Ranthambore
- `golden-triangle-tour-with-udaipur.php` - Golden Triangle + Udaipur
- `golden-triangle-tour-with-varanasi.php` - Golden Triangle + Varanasi
- `taj-mahal-and-agra-fort-tour-by-car-from-delhi.php` - Taj Mahal day tour
- `taj-mahal-sunrise-tour-from-delhi.php` - Taj Mahal sunrise tour
- `taj-mahal-tour-by-gatimaan-express-train.php` - Taj Mahal by train
- `taj-mahal-luxury-tour-by-premium-car-from-delhi.php` - Luxury Taj Mahal tour
- `full-day-old-and-new-delhi-city-tour.php` - Delhi city tour
- `full-day-jaipur-city-tour-by-car.php` - Jaipur city tour
- `half-day-delhi-city-tour.php` - Half-day Delhi tour
- `jaipur-tour-from-delhi-by-car.php` - Jaipur from Delhi
- `same-day-tour.php` - Same day tours overview

## 🎨 Customization

### Company Information
Update the following constants in `main.php`:
```php
define('COMPANY_NAME', 'Your Company Name');
define('COMPANY_EMAIL', 'info@yourcompany.com');
define('COMPANY_PHONE', '+91-XXXXXXXXXX');
define('COMPANY_WEBSITE', 'https://yourwebsite.com');
```

### Styling
- Main styles are in `assets/css/style.css`
- Page-specific styles are included inline
- Colors and branding can be customized in the CSS files

### Content Updates
- Update tour descriptions, pricing, and details in respective PHP files
- Modify contact information in `contact.php`
- Update meta tags for SEO optimization

## 🔧 Troubleshooting

### Email Not Sending
1. Check SMTP credentials in `main.php`
2. Verify firewall settings allow SMTP connections
3. Check server error logs for PHP mailer errors
4. Ensure PHPMailer is properly installed via Composer

### Form Submissions
1. Verify `main.php` is accessible and executable
2. Check browser console for JavaScript errors
3. Ensure all required fields are properly configured

### Page Loading Issues
1. Verify all PHP files are uploaded
2. Check file permissions (755 for directories, 644 for files)
3. Ensure PHP version meets requirements

## 📞 Support

For technical support or customization requests:
- Email: admin@indianatajtour.com
- Phone: +91-9557679951

## 📝 License

This project is proprietary software for Indiana Taj Tour.

## 🔄 Updates & Maintenance

- Regularly update meta tags for SEO
- Monitor form submissions and email delivery
- Update tour packages and pricing as needed
- Backup database and files regularly

---

**Indiana Taj Tour** - Making your India travel dreams come true! 🇮🇳