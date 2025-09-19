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
    <section class="auth-page login-page">
        <div class="container-fluid">
            <div class="row align-items-center min-vh-100">
                <div class="col-12 col-md-6 auth-image-col">
                    <div class="auth-image-container">
                        <div class="auth-image-content">
                            <h2 class="auth-image-title">Welcome Back</h2>
                            <p class="auth-image-description">Sign in to access your account and enjoy exclusive offers
                            </p>
                            <div class="auth-benefits">
                                <div class="benefit-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Exclusive Member Discounts</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Early Access to New Collections</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Personalized Shopping Experience</span>
                                </div>
                                <div class="benefit-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Easy Order Tracking</span>
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

                        <h3 class="auth-form-title">Sign In to Your Account</h3>

                        <form class="auth-form">
                            <div class="form-group">
                                <label for="login-email">Email or Mobile Number</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="login-email"
                                        placeholder="Enter your email or mobile number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="login-password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="login-password"
                                        placeholder="Enter your password">
                                    <div class="input-group-append">
                                        <span class="input-group-text toggle-password"><i class="bi bi-eye"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-check d-flex align-items-center">
                                <div class="checkbox-container"><input type="checkbox" class="form-check-input"
                                        id="remember-me"></div>
                                <div class="label-container"><label class="form-check-label" for="remember-me">Remember
                                        me</label></div>
                                <a href="forgot_password.php" class="forgot-password">Forgot Password?</a>
                            </div>

                            <button type="submit" class="btn btn-auth-submit">Sign In</button>

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
                                <p>Don't have an account? <a href="register.php">Sign Up</a></p>
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