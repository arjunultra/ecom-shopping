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
    <link rel="stylesheet" href="css/odometer-theme.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body itemscope itemtype="http://schema.org/WebPage">
    <?php include_once "header.php"; ?>
    <section class="cart-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="cart-header">
                        <h1 class="cart-title">Your Shopping Cart</h1>
                        <p class="cart-subtitle">Review your items before checkout</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Cart Items Section -->
                <div class="col-12 col-lg-8 cart-items-section">
                    <div class="cart-items-container">
                        <!-- Cart Item 1 -->
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-4 col-md-3 col-lg-2">
                                    <div class="cart-item-image">
                                        <img src="images/bangles.webp" alt="Gold Temple Bangles" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9 col-lg-10">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="cart-item-details">
                                                <h3 class="cart-item-title">Gold Temple Bangles</h3>
                                                <p class="cart-item-description">Traditional temple design with
                                                    intricate carvings</p>
                                                <div class="cart-item-meta">
                                                    <span class="cart-item-price"><i class="bi bi-currency-rupee"></i>
                                                        2,50,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="cart-item-actions">
                                                <div class="quantity-selector">
                                                    <button class="quantity-btn minus">-</button>
                                                    <input type="text" class="quantity-input" value="1" readonly>
                                                    <button class="quantity-btn plus">+</button>
                                                </div>
                                                <div class="cart-item-subtotal"><i class="bi bi-currency-rupee"></i>
                                                    2,50,000</div>
                                                <button class="remove-item-btn">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 2 -->
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-4 col-md-3 col-lg-2">
                                    <div class="cart-item-image">
                                        <img src="images/jhumka-earrings.webp" alt="Diamond Jhumka Earrings"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9 col-lg-10">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="cart-item-details">
                                                <h3 class="cart-item-title">Diamond Jhumka Earrings</h3>
                                                <p class="cart-item-description">Elegant jhumka design with real
                                                    diamonds</p>
                                                <div class="cart-item-meta">
                                                    <span class="cart-item-price"><i class="bi bi-currency-rupee"></i>
                                                        2,00,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="cart-item-actions">
                                                <div class="quantity-selector">
                                                    <button class="quantity-btn minus">-</button>
                                                    <input type="text" class="quantity-input" value="1" readonly>
                                                    <button class="quantity-btn plus">+</button>
                                                </div>
                                                <div class="cart-item-subtotal"><i class="bi bi-currency-rupee"></i>
                                                    2,00,000</div>
                                                <button class="remove-item-btn">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cart Item 3 -->
                        <div class="cart-item">
                            <div class="row align-items-center">
                                <div class="col-4 col-md-3 col-lg-2">
                                    <div class="cart-item-image">
                                        <img src="images/kundan-necklace-set.webp" alt="Kundan Necklace Set"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-8 col-md-9 col-lg-10">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="cart-item-details">
                                                <h3 class="cart-item-title">Kundan Necklace Set</h3>
                                                <p class="cart-item-description">Exquisite kundan work with colorful
                                                    stones</p>
                                                <div class="cart-item-meta">
                                                    <span class="cart-item-price"><i class="bi bi-currency-rupee"></i>
                                                        5,00,000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="cart-item-actions">
                                                <div class="quantity-selector">
                                                    <button class="quantity-btn minus">-</button>
                                                    <input type="text" class="quantity-input" value="2" readonly>
                                                    <button class="quantity-btn plus">+</button>
                                                </div>
                                                <div class="cart-item-subtotal"><i class="bi bi-currency-rupee"></i>
                                                    5,00,000</div>
                                                <button class="remove-item-btn">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cart-actions">
                        <a href="products.html" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-arrow-left"></i> Continue Shopping
                        </a>
                        <button class="btn btn-update-cart btn-lg">
                            <i class="bi bi-arrow-clockwise"></i> Update Cart
                        </button>
                    </div>
                </div>

                <!-- Cart Summary Section -->
                <div class="col-12 col-lg-4 cart-summary-section">
                    <div class="cart-summary">
                        <h3 class="summary-title">Order Summary</h3>

                        <div class="summary-row">
                            <span class="summary-label">Subtotal</span>
                            <span class="summary-value"><i class="bi bi-currency-rupee"></i>
                                14,50,000</span>
                        </div>

                        <div class="summary-row">
                            <span class="summary-label">Shipping</span>
                            <span class="summary-value"><i class="bi bi-currency-rupee"></i>
                                50,000</span>
                        </div>

                        <div class="summary-row">
                            <span class="summary-label">Tax</span>
                            <span class="summary-value"><i class="bi bi-currency-rupee"></i>
                                2,70,000</span>
                        </div>

                        <div class="summary-row summary-total">
                            <span class="summary-label">Total</span>
                            <span class="summary-value"><i class="bi bi-currency-rupee"></i>
                                17,70,000</span>
                        </div>

                        <div class="summary-divider"></div>

                        <div class="promo-code">
                            <h4 class="promo-title">Promo Code</h4>
                            <div class="promo-form">
                                <input type="text" class="promo-input" placeholder="Enter promo code">
                                <button class="btn btn-apply-promo">Apply</button>
                            </div>
                        </div>

                        <div class="summary-divider"></div>

                        <button class="btn btn-checkout btn-lg" onclick="window.location.href='checkout.php'">
                            Proceed to Checkout <i class="bi bi-arrow-right"></i>
                        </button>

                        <div class="secure-checkout">
                            <i class="bi bi-shield-check"></i>
                            <span>Secure Checkout</span>
                        </div>

                        <div class="payment-methods">
                            <div class="payment-method-title">We Accept</div>
                            <div class="payment-icons">
                                <i class="bi bi-credit-card-2-front-fill"></i>
                                <i class="bi bi-credit-card-2-back-fill"></i>
                                <i class="bi bi-paypal"></i>
                                <i class="bi bi-apple"></i>
                                <i class="bi bi-google"></i>
                            </div>
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
</body>

</html>