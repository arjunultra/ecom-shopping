<!DOCTYPE html>
<html lang="en">

<head itemscope itemtype="http://www.schema.org/website">
    <title>Ecom Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body itemscope itemtype="http://schema.org/WebPage">
    <?php include_once "header.php"; ?>
    <section class="auth-page register-page">
        <div class="container-fluid">
            <div class="row align-items-center min-vh-100">
                <div class="col-12 col-md-6 auth-image-col">
                    <div class="auth-image-container">
                        <div class="auth-image-content">
                            <h2 class="auth-image-title">Join Our Community</h2>
                            <p class="auth-image-description">Create an account to enjoy exclusive benefits and
                                personalized shopping</p>
                            <div class="auth-benefits">
                                <div class="benefit-item">
                                    <i class="bi bi-gift-fill"></i>
                                    <span>Welcome Discount on First Order</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="bi bi-star-fill"></i>
                                    <span>Loyalty Rewards Program</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="bi bi-bell-fill"></i>
                                    <span>Exclusive Notifications</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="bi bi-truck"></i>
                                    <span>Free Shipping on Orders Over $50</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 auth-form-col">
                    <div class="auth-form-container">
                        <div class="auth-logo">
                            <img src="images/ecom-logo.jpg" alt="Logo" class="img-fluid rounded-circle">
                        </div>

                        <h3 class="auth-form-title">Create Your Account</h3>

                        <form class="auth-form">
                            <div class="form-group">
                                <label for="register-name">Full Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="register-name"
                                        placeholder="Enter your full name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="register-email">Email Address</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" id="register-email"
                                        placeholder="Enter your email address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="register-phone">Mobile Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-phone"></i></span>
                                    </div>
                                    <input type="tel" class="form-control" id="register-phone"
                                        placeholder="Enter your mobile number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="register-password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="register-password"
                                        placeholder="Create a password">
                                    <div class="input-group-append">
                                        <span class="input-group-text toggle-password"><i class="bi bi-eye"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="register-confirm-password">Confirm Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="register-confirm-password"
                                        placeholder="Confirm your password">
                                    <div class="input-group-append">
                                        <span class="input-group-text toggle-password"><i class="bi bi-eye"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="agree-terms">
                                <label class="form-check-label" for="agree-terms">I agree to the <a href="#">Terms of
                                        Service</a> and <a href="#">Privacy Policy</a></label>
                            </div>

                            <button type="submit" class="btn btn-auth-submit">Create Account</button>

                            <div class="auth-divider">
                                <span>or continue with</span>
                            </div>

                            <div class="social-login">
                                <button type="button" class="btn btn-social btn-google">
                                    <i class="bi bi-google"></i> Google
                                </button>
                                <button type="button" class="btn btn-social btn-facebook">
                                    <i class="bi bi-facebook"></i> Facebook
                                </button>
                            </div>

                            <div class="auth-switch">
                                <p>Already have an account? <a href="login.php">Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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