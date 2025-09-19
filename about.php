<?php $page = "about"; ?>
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
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/odometer-theme.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body itemscope itemtype="http://schema.org/WebPage">
    <?php include_once "header.php"; ?>
    <section class="about-banner wow fadeInRight" wow-delay="5s">
        <img class="img-fluid w-100" src="images/about-banner.webp" alt="smile shop about banner"
            title="smile shop about banner">
    </section>

    <!-- about page -->
    <main class="about-page">

        <!-- About Section -->
        <section class="about-intro">
            <div class="container">
                <div class="row justify-content-around align-items-center">
                    <div class="col-12 col-md-6">
                        <h2>About Smile Shop</h2>
                        <p>
                            Welcome to Smile Shop, your destination for beautifully designed women’s accessories that
                            add a
                            touch of elegance and joy to every occasion. From captivating <strong>bangles, pendants,
                                necklaces,
                                earrings</strong> to graceful <strong>anklets</strong>, each piece in our collection is
                            handpicked to celebrate your unique style.
                        </p>
                        <p>
                            Since our inception, Smile Shop’s mission has been to empower women through affordable
                            luxury,
                            blending traditional craft with contemporary design. Whether you’re shopping for daily wear
                            or a
                            special gift, our wide range of accessories ensures there’s something for everyone.
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="img-container">
                            <img src="images/assorted-jewells.webp" alt="Smile Shop Jewells for sale"
                                title="Smile Shop Assorted Jewells" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Achievements Section -->
        <section class="about-achievements bg-light">
            <div class="container">
                <h2 class="text-center text-violet mb-5">Our Story & Achievements</h2>
                <div class="row text-center">
                    <article class="col-12 col-md-4 achievement-item">
                        <i class="bi bi-award"></i>
                        <h4>10,000+ Happy Customers</h4>
                        <p>Serving smiles across India and beyond, delivering designer accessories to women in over 25
                            countries.</p>
                    </article>
                    <article class="col-12 col-md-4 achievement-item">
                        <i class="bi bi-gem"></i>
                        <h4>Craftsmanship Awards</h4>
                        <p>Recognized for our commitment to quality and artistry at the National Jewelry Fest three
                            years in a row.</p>
                    </article>
                    <article class="col-12 col-md-4 achievement-item">
                        <i class="bi bi-heart"></i>
                        <h4>Trusted by Influencers</h4>
                        <p>Loved by fashion icons, Smile Shop accessories are regularly featured in top beauty and style
                            magazines.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="about-testimonials">
            <div class="container">
                <h2 class="text-center text-violet mb-5">Customer Love</h2>
                <div class="row testimonials-grid">
                    <article class="col-12 col-md-4 testimonial-item">
                        <blockquote>
                            “Absolutely loved the rose gold bangle I ordered — elegant, affordable and beautifully
                            packaged! Smile Shop made my day.”
                            <footer>— Priya S., Mumbai</footer>
                        </blockquote>
                    </article>
                    <article class="col-12 col-md-4 testimonial-item">
                        <blockquote>
                            “The pendant was exactly as shown, and their team helped me pick the perfect gift for my
                            sister. Will be back for more!”
                            <footer>— Aanya V., Delhi</footer>
                        </blockquote>
                    </article>
                    <article class="col-12 col-md-4 testimonial-item">
                        <blockquote>
                            “I always find such unique designs here. The earrings I got received so many compliments.
                            Fast shipping too!”
                            <footer>— Kavya M., Bangalore</footer>
                        </blockquote>
                    </article>
                </div>
            </div>
        </section>

    </main>




    <?php include_once "footer.php"; ?>

    <script src="js/odometer.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/script.js"></script>
</body>

</html>