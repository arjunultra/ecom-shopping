<!DOCTYPE html>
<html lang="en">

<head itemscope itemtype="http://www.schema.org/website">
    <title>Ecom Website</title>
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
    <link rel="stylesheet" href="css/odometer-theme.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body itemscope itemtype="http://schema.org/WebPage">
    <?php include_once "header.php"; ?>
    <section class="forgot-password-section">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="forgot-password-card">
                        <div class="forgot-password-header">
                            <a href="index.php" class="forgot-password-back-link">
                                <i class="bi bi-arrow-left"></i> Back to Home
                            </a>
                            <h1 class="forgot-password-title">Reset Your Password</h1>
                            <p class="forgot-password-subtitle">Enter your email address and we'll send you instructions
                                to reset your password.</p>
                        </div>

                        <div class="forgot-password-form">
                            <form id="forgotPasswordForm">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="bi bi-envelope"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter your email address" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block forgot-password-submit-btn">
                                    <span class="submit-text">Send Reset Instructions</span>
                                    <span class="loading-spinner" style="display: none;">
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        Sending...
                                    </span>
                                </button>
                            </form>

                            <div class="forgot-password-success" style="display: none;">
                                <div class="success-icon">
                                    <i class="bi bi-check-circle"></i>
                                </div>
                                <h3>Instructions Sent!</h3>
                                <p>We've sent password reset instructions to your email address. Please check your
                                    inbox.</p>
                                <a href="login.php" class="btn btn-outline-primary">Back to Login</a>
                            </div>
                        </div>

                        <div class="forgot-password-footer">
                            <p>Remember your password? <a href="login.php">Login here</a></p>
                            <p>Don't have an account? <a href="register.php">Create account</a></p>
                        </div>
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
    <script>
        $(document).ready(function () {
            $('#forgotPasswordForm').on('submit', function (e) {
                e.preventDefault();

                var $submitBtn = $('.forgot-password-submit-btn');
                var $submitText = $('.submit-text');
                var $loadingSpinner = $('.loading-spinner');

                // Show loading state
                $submitText.hide();
                $loadingSpinner.show();
                $submitBtn.prop('disabled', true);

                // Simulate API call
                setTimeout(function () {
                    // Hide form, show success message
                    $('#forgotPasswordForm').hide();
                    $('.forgot-password-success').show();

                    // Reset button state (though it's hidden now)
                    $submitText.show();
                    $loadingSpinner.hide();
                    $submitBtn.prop('disabled', false);
                }, 1500);
            });
        });
    </script>
</body>

</html>