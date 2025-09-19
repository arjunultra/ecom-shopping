<?php
$page = "contact";
?>
<!DOCTYPE html>
<html lang="en">

<head itemscope itemtype="http://www.schema.org/website">
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="https://.com">
    <meta property="og:image" content="https://.com/images/android-icon-192x192.png">
    <meta name="keywords" content="">
    <meta property="og:description" name="description" content="">
    <meta name="robots" content="all">
    <meta name="revisit-after" content="10 Days">
    <meta name="copyright" content="">
    <meta name="language" content="English">
    <meta name="distribution" content="Global">
    <meta name="web_author" content="srisoftwarez.com">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="icon" sizes="192x192" href="images/android-icon-192x192.png">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body itemscope itemtype="http://schema.org/WebPage">
    <?php include_once "header.php"; ?>
    <section class="contact-banner">
        <img class="img-fluid w-100" src="images/contact-banner.webp" alt="demo traders about banner"
            title="Demo Traders">
    </section>
    <main class="contact-page">

        <!-- Hero Section -->
        <section class="contact-hero-section">
            <div class="container text-center">
                <h1 class="contact-hero-title">Get in Touch</h1>
                <p class="contact-hero-subtitle">We’d love to hear from you! Whether you have questions, feedback, or
                    just want to say hello, our team is here to help.</p>
            </div>
        </section>

        <!-- Contact Details Section -->
        <section class="contact-details-section">
            <div class="container">
                <div class="row">
                    <!-- Address -->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="contact-detail-item">
                            <i class="bi bi-geo-alt"></i>
                            <h5>Our Address</h5>
                            <p>123 Elegant Ave, Fashion City, India 560001</p>
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="contact-detail-item">
                            <i class="bi bi-telephone"></i>
                            <h5>Phone</h5>
                            <p><a href="tel:+919999999999">+91 99999 99999</a></p>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="contact-detail-item">
                            <i class="bi bi-envelope"></i>
                            <h5>Email</h5>
                            <p><a href="mailto:support@smileshop.com">support@smileshop.com</a></p>
                        </div>
                    </div>
                    <!-- WhatsApp -->
                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="contact-detail-item">
                            <i class="bi bi-whatsapp"></i>
                            <h5>WhatsApp</h5>
                            <p><a href="https://wa.me/918888888888" target="_blank">+91 88888 88888</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form and Map Section -->
        <section class="contact-form-map-section">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                        <div class="contact-form-wrapper">
                            <h2 class="form-map-title">Send Us a Message</h2>
                            <form id="contactForm" class="contact-form">
                                <div class="form-group">
                                    <label for="nameInput">Your Name</label>
                                    <input type="text" id="nameInput" name="name" class="form-control"
                                        placeholder="Enter your name" required />
                                </div>
                                <div class="form-group">
                                    <label for="emailInput">Your Email</label>
                                    <input type="email" id="emailInput" name="email" class="form-control"
                                        placeholder="Enter your email" required />
                                </div>
                                <div class="form-group">
                                    <label for="messageInput">Message</label>
                                    <textarea id="messageInput" name="message" class="form-control" rows="5"
                                        placeholder="Write your message here..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-violet btn-block">Send Message</button>
                            </form>
                        </div>
                    </div>
                    <!-- Map -->
                    <div class="col-12 col-lg-6">
                        <div class="map-wrapper">
                            <h2 class="form-map-title">Find Us Here</h2>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62970.01116422078!2d77.79262294999998!3d9.454182000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cee43d812d0d%3A0x8ce12e9dcdaa2a2c!2sSivakasi%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1757944517649!5m2!1sen!2sin"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>



    <div class="footer-bottom py-2 bg-violet text-white">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-12 col-lg-12 mb-3 mb-md-0">
                    <p class="copyright h6 text-center m-0">&copy; 2025 Smile Shop. All rights reserved. Designed and
                        Developed by <a class="text-dark bg-warning p-1 rounded-pill px-4"
                            href="https://www.srisoftwarez.com/" target="_blank">Sri
                            Softwarez</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed point w0">
        <a href="https://api.whatsapp.com/send?phone=919999999999">
            <img src="images/whatsappicon.png" class="priceicn float-left" alt="" title="">
        </a>
    </div>
    <div class="fixed point1 w0 d-none d-lg-block">
        <span class="time-of-year">
            <img src="images/callicon.png" class="priceicn float-left" alt="" title="">
            <div class="tooltip text-white carter text-center"> For More Details Call <br>
                <i class="fa fa-phone text-white"></i> +91 99999 99999
            </div>
        </span>
    </div>
    <div class="fixed point1 w0 d-lg-none">
        <a href="tel:+919999999999">
            <img src="images/callicon.png" class="priceicn float-left" alt="" title="">
        </a>
    </div>
    <div class="fixed point2">
        <a href="products.php">
            <img src="images/quickpurchase.webp" class="priceicn2 float-right blink" alt="" title="">
        </a>
    </div>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/script.js"></script>
</body>

</html>