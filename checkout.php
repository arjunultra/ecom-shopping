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
    <!-- checkout page -->
    <!-- Breadcrumb Section -->
    <section class="checkout-breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="cart.html">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Checkout Progress Steps -->
    <section class="checkout-progress-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout-progress-steps">
                        <div class="checkout-step completed">
                            <div class="checkout-step-circle">
                                <i class="bi bi-check"></i>
                            </div>
                            <span class="checkout-step-label">Cart</span>
                        </div>
                        <div class="checkout-step-line completed"></div>
                        <div class="checkout-step active">
                            <div class="checkout-step-circle">
                                <span>2</span>
                            </div>
                            <span class="checkout-step-label">Checkout</span>
                        </div>
                        <div class="checkout-step-line"></div>
                        <div class="checkout-step">
                            <div class="checkout-step-circle">
                                <span>3</span>
                            </div>
                            <span class="checkout-step-label">Payment</span>
                        </div>
                        <div class="checkout-step-line"></div>
                        <div class="checkout-step">
                            <div class="checkout-step-circle">
                                <span>4</span>
                            </div>
                            <span class="checkout-step-label">Confirmation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Checkout Section -->
    <section class="checkout-main-section">
        <div class="container">
            <div class="row">
                <!-- Left Column - Forms -->
                <div class="col-12 col-lg-8">
                    <!-- Customer Information -->
                    <div class="checkout-section-card">
                        <div class="checkout-section-header">
                            <h4 class="checkout-section-title">
                                <i class="bi bi-person-circle"></i>
                                Customer Information
                            </h4>
                            <p class="checkout-section-subtitle">Please provide your contact details</p>
                        </div>
                        <form class="checkout-customer-form">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="checkout-form-group">
                                        <label for="firstName" class="checkout-form-label required">First Name</label>
                                        <input type="text" class="checkout-form-control" id="firstName" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="checkout-form-group">
                                        <label for="lastName" class="checkout-form-label required">Last Name</label>
                                        <input type="text" class="checkout-form-control" id="lastName" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="checkout-form-group">
                                        <label for="email" class="checkout-form-label required">Email Address</label>
                                        <input type="email" class="checkout-form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="checkout-form-group">
                                        <label for="phone" class="checkout-form-label required">Phone Number</label>
                                        <input type="tel" class="checkout-form-control" id="phone" required>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Shipping Address -->
                    <div class="checkout-section-card">
                        <div class="checkout-section-header">
                            <h4 class="checkout-section-title">
                                <i class="bi bi-geo-alt"></i>
                                Shipping Address
                            </h4>
                            <p class="checkout-section-subtitle">Where should we deliver your order?</p>
                        </div>
                        <form class="checkout-shipping-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="checkout-form-group">
                                        <label for="address" class="checkout-form-label required">Street Address</label>
                                        <input type="text" class="checkout-form-control" id="address"
                                            placeholder="House number and street name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="checkout-form-group">
                                        <label for="city" class="checkout-form-label required">City</label>
                                        <input type="text" class="checkout-form-control" id="city" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="checkout-form-group">
                                        <label for="state" class="checkout-form-label required">State</label>
                                        <select class="checkout-form-control" id="state" required>
                                            <option value="">Select State</option>
                                            <option value="maharashtra">Maharashtra</option>
                                            <option value="gujarat">Gujarat</option>
                                            <option value="karnataka">Karnataka</option>
                                            <option value="tamil-nadu">Tamil Nadu</option>
                                            <option value="rajasthan">Rajasthan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="checkout-form-group">
                                        <label for="pincode" class="checkout-form-label required">PIN Code</label>
                                        <input type="text" class="checkout-form-control" id="pincode" maxlength="6"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="checkout-form-check">
                                        <input type="checkbox" class="checkout-checkbox" id="billingAddress">
                                        <label for="billingAddress" class="checkout-checkbox-label">
                                            Use this address for billing
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Shipping Method -->
                    <div class="checkout-section-card">
                        <div class="checkout-section-header">
                            <h4 class="checkout-section-title">
                                <i class="bi bi-truck"></i>
                                Shipping Method
                            </h4>
                            <p class="checkout-section-subtitle">Choose your preferred delivery option</p>
                        </div>
                        <div class="checkout-shipping-options">
                            <div class="checkout-shipping-option">
                                <input type="radio" class="checkout-radio" name="shipping" id="standardShipping"
                                    value="standard" checked>
                                <label for="standardShipping" class="checkout-shipping-label">
                                    <div class="checkout-shipping-info">
                                        <div class="checkout-shipping-method">
                                            <strong>Standard Shipping</strong>
                                            <span class="checkout-shipping-price">Free</span>
                                        </div>
                                        <div class="checkout-shipping-details">5-7 business days</div>
                                    </div>
                                </label>
                            </div>
                            <div class="checkout-shipping-option">
                                <input type="radio" class="checkout-radio" name="shipping" id="expressShipping"
                                    value="express">
                                <label for="expressShipping" class="checkout-shipping-label">
                                    <div class="checkout-shipping-info">
                                        <div class="checkout-shipping-method">
                                            <strong>Express Shipping</strong>
                                            <span class="checkout-shipping-price">₹99</span>
                                        </div>
                                        <div class="checkout-shipping-details">2-3 business days</div>
                                    </div>
                                </label>
                            </div>
                            <div class="checkout-shipping-option">
                                <input type="radio" class="checkout-radio" name="shipping" id="overnightShipping"
                                    value="overnight">
                                <label for="overnightShipping" class="checkout-shipping-label">
                                    <div class="checkout-shipping-info">
                                        <div class="checkout-shipping-method">
                                            <strong>Overnight Shipping</strong>
                                            <span class="checkout-shipping-price">₹199</span>
                                        </div>
                                        <div class="checkout-shipping-details">Next business day</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="checkout-section-card">
                        <div class="checkout-section-header">
                            <h4 class="checkout-section-title">
                                <i class="bi bi-credit-card"></i>
                                Payment Method
                            </h4>
                            <p class="checkout-section-subtitle">Select your payment option</p>
                        </div>
                        <div class="checkout-payment-options">
                            <div class="checkout-payment-option">
                                <input type="radio" class="checkout-radio" name="payment" id="creditCard" value="credit"
                                    checked>
                                <label for="creditCard" class="checkout-payment-label">
                                    <i class="bi bi-credit-card-2-front"></i>
                                    <span>Credit/Debit Card</span>
                                </label>
                            </div>
                            <div class="checkout-payment-option">
                                <input type="radio" class="checkout-radio" name="payment" id="upi" value="upi">
                                <label for="upi" class="checkout-payment-label">
                                    <i class="bi bi-phone"></i>
                                    <span>UPI Payment</span>
                                </label>
                            </div>
                            <div class="checkout-payment-option">
                                <input type="radio" class="checkout-radio" name="payment" id="netbanking"
                                    value="netbanking">
                                <label for="netbanking" class="checkout-payment-label">
                                    <i class="bi bi-bank"></i>
                                    <span>Net Banking</span>
                                </label>
                            </div>
                            <div class="checkout-payment-option">
                                <input type="radio" class="checkout-radio" name="payment" id="cod" value="cod">
                                <label for="cod" class="checkout-payment-label">
                                    <i class="bi bi-cash"></i>
                                    <span>Cash on Delivery</span>
                                </label>
                            </div>
                        </div>

                        <!-- Card Details Form (shown when credit card is selected) -->
                        <div class="checkout-card-form" id="cardForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="checkout-form-group">
                                        <label for="cardNumber" class="checkout-form-label required">Card Number</label>
                                        <input type="text" class="checkout-form-control" id="cardNumber"
                                            placeholder="1234 5678 9012 3456" maxlength="19">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="checkout-form-group">
                                        <label for="cardExpiry" class="checkout-form-label required">Expiry Date</label>
                                        <input type="text" class="checkout-form-control" id="cardExpiry"
                                            placeholder="MM/YY" maxlength="5">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="checkout-form-group">
                                        <label for="cardCvv" class="checkout-form-label required">CVV</label>
                                        <input type="text" class="checkout-form-control" id="cardCvv" placeholder="123"
                                            maxlength="4">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="checkout-form-group">
                                        <label for="cardName" class="checkout-form-label required">Cardholder
                                            Name</label>
                                        <input type="text" class="checkout-form-control" id="cardName"
                                            placeholder="Name as on card">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Order Summary -->
                <div class="col-12 col-lg-4">
                    <div class="checkout-order-summary">
                        <div class="checkout-summary-header">
                            <h4 class="checkout-summary-title">
                                <i class="bi bi-receipt"></i>
                                Order Summary
                            </h4>
                        </div>

                        <!-- Order Items -->
                        <div class="checkout-order-items" id="checkoutOrderItems">
                            <div class="checkout-order-item">
                                <div class="checkout-item-image">
                                    <img src="images/bangles.webp" alt="Elegant Gold Bangle">
                                </div>
                                <div class="checkout-item-details">
                                    <h6 class="checkout-item-name">Elegant Gold Bangle</h6>
                                    <div class="checkout-item-meta">
                                        <span class="checkout-item-quantity">Qty: 1</span>
                                        <span class="checkout-item-price">₹2,850</span>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-order-item">
                                <div class="checkout-item-image">
                                    <img src="images/earings.webp" alt="Pearl Drop Earrings">
                                </div>
                                <div class="checkout-item-details">
                                    <h6 class="checkout-item-name">Pearl Drop Earrings</h6>
                                    <div class="checkout-item-meta">
                                        <span class="checkout-item-quantity">Qty: 1</span>
                                        <span class="checkout-item-price">₹4,200</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Promo Code -->
                        <div class="checkout-promo-section">
                            <div class="checkout-promo-input">
                                <input type="text" class="checkout-form-control" id="promoCode"
                                    placeholder="Enter promo code">
                                <button type="button" class="checkout-promo-btn">Apply</button>
                            </div>
                        </div>

                        <!-- Order Totals -->
                        <div class="checkout-order-totals">
                            <div class="checkout-total-row">
                                <span class="checkout-total-label">Subtotal</span>
                                <span class="checkout-total-value" id="subtotal">₹7,050</span>
                            </div>
                            <div class="checkout-total-row">
                                <span class="checkout-total-label">Shipping</span>
                                <span class="checkout-total-value" id="shippingCost">Free</span>
                            </div>
                            <div class="checkout-total-row">
                                <span class="checkout-total-label">Tax (18% GST)</span>
                                <span class="checkout-total-value" id="taxAmount">₹1,269</span>
                            </div>
                            <div class="checkout-total-row discount-row" id="discountRow" style="display: none;">
                                <span class="checkout-total-label">Discount</span>
                                <span class="checkout-total-value discount" id="discountAmount">-₹0</span>
                            </div>
                            <hr class="checkout-total-divider">
                            <div class="checkout-total-row final-total">
                                <span class="checkout-total-label">Total</span>
                                <span class="checkout-total-value" id="finalTotal">₹8,319</span>
                            </div>
                        </div>

                        <!-- Place Order Button -->
                        <div class="checkout-place-order">
                            <button type="button" class="checkout-place-order-btn" id="placeOrderBtn">
                                <i class="bi bi-lock"></i>
                                Place Secure Order
                            </button>
                            <div class="checkout-security-badges">
                                <i class="bi bi-shield-check"></i>
                                <span>Secure 256-bit SSL encryption</span>
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