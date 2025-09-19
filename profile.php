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
    <section class="customer-profile-section">
        <div class="container-fluid">
            <div class="row">
                <!-- Profile Sidebar -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="profile-sidebar">
                        <div class="profile-card text-center">
                            <div class="profile-avatar">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <h3 class="profile-name">Mahesh Prabhu</h3>
                            <p class="profile-email">mahesh.prabhu@example.com</p>
                            <p class="profile-phone">+91 98765 43210</p>
                            <div class="profile-stats">
                                <div class="stat-item">
                                    <span class="stat-number">12</span>
                                    <span class="stat-label">Orders</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">3</span>
                                    <span class="stat-label">Wishlist</span>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation Menu as Bootstrap Tab Navigation -->
                        <div class="profile-menu">
                            <a href="#profile-info" class="profile-menu-item active" data-toggle="tab" role="tab">
                                <i class="bi bi-person"></i>
                                <span>Profile Information</span>
                            </a>
                            <a href="#address-book" class="profile-menu-item" data-toggle="tab" role="tab">
                                <i class="bi bi-geo-alt"></i>
                                <span>Address Book</span>
                            </a>
                            <a href="#order-history" class="profile-menu-item" data-toggle="tab" role="tab">
                                <i class="bi bi-bag"></i>
                                <span>Order History</span>
                            </a>
                            <a href="#wishlist" class="profile-menu-item" data-toggle="tab" role="tab">
                                <i class="bi bi-heart"></i>
                                <span>Wishlist</span>
                            </a>
                            <a href="#payment-methods" class="profile-menu-item" data-toggle="tab" role="tab">
                                <i class="bi bi-credit-card"></i>
                                <span>Payment Methods</span>
                            </a>
                            <a href="#coupons" class="profile-menu-item" data-toggle="tab" role="tab">
                                <i class="bi bi-ticket-perforated"></i>
                                <span>Coupons</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Profile Content - Bootstrap Tab Content -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="profile-content">
                        <div class="tab-content" id="profileTabContent">

                            <!-- Profile Information Tab -->
                            <div class="tab-pane fade show active" id="profile-info" role="tabpanel">
                                <div class="content-header">
                                    <h2 class="content-title">Profile Information</h2>
                                    <button class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#editProfileModal">
                                        <i class="bi bi-pencil"></i> Edit Profile
                                    </button>
                                </div>

                                <div class="profile-info-card">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="info-group">
                                                <label class="info-label">Full Name</label>
                                                <p class="info-value">Mahesh Prabhu</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="info-group">
                                                <label class="info-label">Email Address</label>
                                                <p class="info-value">mahesh.prabhu@example.com</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="info-group">
                                                <label class="info-label">Phone Number</label>
                                                <p class="info-value">+91 98765 43210</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="info-group">
                                                <label class="info-label">Date of Birth</label>
                                                <p class="info-value">15 March 1990</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="info-group">
                                                <label class="info-label">Gender</label>
                                                <p class="info-value">Female</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="info-group">
                                                <label class="info-label">Member Since</label>
                                                <p class="info-value">January 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="recent-activity">
                                    <h3 class="activity-title">Recent Activity</h3>
                                    <div class="activity-list">
                                        <div class="activity-item">
                                            <div class="activity-icon">
                                                <i class="bi bi-bag"></i>
                                            </div>
                                            <div class="activity-content">
                                                <p>Order #ORD-12345 delivered successfully</p>
                                                <span class="activity-time">2 hours ago</span>
                                            </div>
                                        </div>
                                        <div class="activity-item">
                                            <div class="activity-icon">
                                                <i class="bi bi-heart"></i>
                                            </div>
                                            <div class="activity-content">
                                                <p>Added Gold Bangles to wishlist</p>
                                                <span class="activity-time">1 day ago</span>
                                            </div>
                                        </div>
                                        <div class="activity-item">
                                            <div class="activity-icon">
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <div class="activity-content">
                                                <p>Rated Diamond Earrings 5 stars</p>
                                                <span class="activity-time">2 days ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Address Book Tab -->
                            <div class="tab-pane fade" id="address-book" role="tabpanel">
                                <div class="content-header">
                                    <h2 class="content-title">Address Book</h2>
                                    <button class="btn btn-primary address-add-btn" data-toggle="modal"
                                        data-target="#addAddressModal">
                                        <i class="bi bi-plus-circle"></i> Add New Address
                                    </button>
                                </div>

                                <div class="address-grid">
                                    <!-- Home Address Card -->
                                    <div class="address-card">
                                        <div class="address-header">
                                            <div class="address-type">
                                                <i class="bi bi-house-door"></i>
                                                <span class="address-label">Home</span>
                                                <span class="address-badge default">Default</span>
                                            </div>
                                            <div class="address-actions">
                                                <button class="address-action-btn edit-btn" title="Edit Address">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="address-action-btn delete-btn" title="Delete Address">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="address-details">
                                            <p class="address-name">Mahesh Prabhu</p>
                                            <p class="address-full">
                                                A-204, Sunrise Apartments,<br>
                                                Sector 15, Dwarka,<br>
                                                New Delhi - 110075<br>
                                                India
                                            </p>
                                            <p class="address-phone">+91 98765 43210</p>
                                        </div>
                                        <div class="address-footer">
                                            <button class="btn btn-outline-primary btn-sm address-set-default">
                                                <i class="bi bi-check-circle"></i> Default
                                            </button>
                                            <button class="btn btn-outline-success btn-sm address-deliver-here">
                                                Deliver Here
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Office Address Card -->
                                    <div class="address-card">
                                        <div class="address-header">
                                            <div class="address-type">
                                                <i class="bi bi-building"></i>
                                                <span class="address-label">Office</span>
                                            </div>
                                            <div class="address-actions">
                                                <button class="address-action-btn edit-btn" title="Edit Address">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="address-action-btn delete-btn" title="Delete Address">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="address-details">
                                            <p class="address-name">Mahesh Prabhu</p>
                                            <p class="address-full">
                                                Tech Solutions Pvt Ltd,<br>
                                                5th Floor, Business Hub,<br>
                                                Connaught Place,<br>
                                                New Delhi - 110001<br>
                                                India
                                            </p>
                                            <p class="address-phone">+91 98765 43210</p>
                                        </div>
                                        <div class="address-footer">
                                            <button class="btn btn-primary btn-sm address-set-default">
                                                Set as Default
                                            </button>
                                            <button class="btn btn-outline-success btn-sm address-deliver-here">
                                                Deliver Here
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Add New Address Card -->
                                    <div class="address-card add-new-card" data-toggle="modal"
                                        data-target="#addAddressModal">
                                        <div class="add-new-content">
                                            <div class="add-new-icon">
                                                <i class="bi bi-plus-circle"></i>
                                            </div>
                                            <h4 class="add-new-title">Add New Address</h4>
                                            <p class="add-new-subtitle">Save a new address for faster checkout</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Order History Tab -->
                            <div class="tab-pane fade" id="order-history" role="tabpanel">
                                <div class="content-header">
                                    <h2 class="content-title">Order History</h2>
                                    <div class="order-filters">
                                        <select class="form-control form-control-sm" style="width: auto;">
                                            <option>Last 6 months</option>
                                            <option>Last year</option>
                                            <option>All orders</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="orders-grid">
                                    <!-- Order Card 1 -->
                                    <div class="order-card">
                                        <div class="order-header">
                                            <div class="order-info">
                                                <h4 class="order-id">#ORD-12345</h4>
                                                <p class="order-date">Ordered on 12 Nov 2023</p>
                                            </div>
                                            <div class="order-status">
                                                <span class="status-badge delivered">Delivered</span>
                                            </div>
                                        </div>
                                        <div class="order-items">
                                            <div class="order-item">
                                                <img src="images/bangles.webp" alt="Product" class="order-item-image">
                                                <div class="order-item-info">
                                                    <h5 class="order-item-name">Elegant Gold Bangles</h5>
                                                    <p class="order-item-details">Qty: 1 | Size: Medium</p>
                                                </div>
                                                <div class="order-item-price">₹2,850</div>
                                            </div>
                                            <div class="order-item">
                                                <img src="images/earings.webp" alt="Product" class="order-item-image">
                                                <div class="order-item-info">
                                                    <h5 class="order-item-name">Pearl Drop Earrings</h5>
                                                    <p class="order-item-details">Qty: 1 | Color: White</p>
                                                </div>
                                                <div class="order-item-price">₹2,649</div>
                                            </div>
                                        </div>
                                        <div class="order-footer">
                                            <div class="order-total">
                                                <strong>Total: ₹5,499</strong>
                                            </div>
                                            <div class="order-actions">
                                                <button class="btn btn-outline-primary btn-sm">View Details</button>
                                                <button class="btn btn-primary btn-sm">Reorder</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Order Card 2 -->
                                    <div class="order-card">
                                        <div class="order-header">
                                            <div class="order-info">
                                                <h4 class="order-id">#ORD-12344</h4>
                                                <p class="order-date">Ordered on 10 Nov 2023</p>
                                            </div>
                                            <div class="order-status">
                                                <span class="status-badge shipped">Shipped</span>
                                            </div>
                                        </div>
                                        <div class="order-items">
                                            <div class="order-item">
                                                <img src="images/necklaces.webp" alt="Product" class="order-item-image">
                                                <div class="order-item-info">
                                                    <h5 class="order-item-name">Kundan Necklace Set</h5>
                                                    <p class="order-item-details">Qty: 1 | Color: Gold</p>
                                                </div>
                                                <div class="order-item-price">₹2,999</div>
                                            </div>
                                        </div>
                                        <div class="order-footer">
                                            <div class="order-total">
                                                <strong>Total: ₹2,999</strong>
                                            </div>
                                            <div class="order-actions">
                                                <button class="btn btn-outline-primary btn-sm">Track Order</button>
                                                <button class="btn btn-outline-secondary btn-sm">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Wishlist Tab -->
                            <div class="tab-pane fade" id="wishlist" role="tabpanel">
                                <div class="content-header">
                                    <h2 class="content-title">My Wishlist</h2>
                                    <div class="wishlist-actions">
                                        <button class="btn btn-outline-danger btn-sm">Clear All</button>
                                    </div>
                                </div>

                                <div class="wishlist-grid">
                                    <!-- Wishlist Item 1 -->
                                    <div class="wishlist-item-card">
                                        <div class="wishlist-item-image">
                                            <img src="images/rings.webp" alt="Silver Ring">
                                            <button class="wishlist-remove-btn">
                                                <i class="bi bi-x"></i>
                                            </button>
                                        </div>
                                        <div class="wishlist-item-info">
                                            <h5 class="wishlist-item-name">Silver Cocktail Ring</h5>
                                            <div class="wishlist-item-price">
                                                <span class="current-price">₹899</span>
                                                <span class="original-price">₹1,299</span>
                                            </div>
                                            <div class="wishlist-item-actions">
                                                <button class="btn btn-primary btn-sm">Add to Cart</button>
                                                <button class="btn btn-outline-primary btn-sm">View Details</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Wishlist Item 2 -->
                                    <div class="wishlist-item-card">
                                        <div class="wishlist-item-image">
                                            <img src="images/pendants.webp" alt="Diamond Pendant">
                                            <button class="wishlist-remove-btn">
                                                <i class="bi bi-x"></i>
                                            </button>
                                        </div>
                                        <div class="wishlist-item-info">
                                            <h5 class="wishlist-item-name">Diamond Heart Pendant</h5>
                                            <div class="wishlist-item-price">
                                                <span class="current-price">₹8,750</span>
                                            </div>
                                            <div class="wishlist-item-actions">
                                                <button class="btn btn-primary btn-sm">Add to Cart</button>
                                                <button class="btn btn-outline-primary btn-sm">View Details</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Wishlist Item 3 -->
                                    <div class="wishlist-item-card">
                                        <div class="wishlist-item-image">
                                            <img src="images/anklets.webp" alt="Traditional Anklets">
                                            <button class="wishlist-remove-btn">
                                                <i class="bi bi-x"></i>
                                            </button>
                                        </div>
                                        <div class="wishlist-item-info">
                                            <h5 class="wishlist-item-name">Traditional Anklets</h5>
                                            <div class="wishlist-item-price">
                                                <span class="current-price">₹1,199</span>
                                                <span class="original-price">₹1,699</span>
                                            </div>
                                            <div class="wishlist-item-actions">
                                                <button class="btn btn-primary btn-sm">Add to Cart</button>
                                                <button class="btn btn-outline-primary btn-sm">View Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Methods Tab -->
                            <div class="tab-pane fade" id="payment-methods" role="tabpanel">
                                <div class="content-header">
                                    <h2 class="content-title">Payment Methods</h2>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#addPaymentModal">
                                        <i class="bi bi-plus-circle"></i> Add Payment Method
                                    </button>
                                </div>

                                <div class="payment-methods-grid">
                                    <!-- Credit Card -->
                                    <div class="payment-card">
                                        <div class="payment-card-header">
                                            <div class="payment-type">
                                                <i class="bi bi-credit-card"></i>
                                                <span class="credit-card">Credit Card</span>
                                                <span class="payment-badge default">Default</span>
                                            </div>
                                            <div class="payment-actions">
                                                <button class="payment-action-btn edit-btn">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="payment-action-btn delete-btn">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="payment-details">
                                            <p class="card-number">**** **** **** 4532</p>
                                            <p class="card-name">Mahesh Prabhu</p>
                                            <p class="card-expiry">Expires 12/26</p>
                                        </div>
                                    </div>

                                    <!-- UPI -->
                                    <div class="payment-card">
                                        <div class="payment-card-header">
                                            <div class="payment-type">
                                                <i class="bi bi-phone"></i>
                                                <span>UPI</span>
                                            </div>
                                            <div class="payment-actions">
                                                <button class="payment-action-btn edit-btn">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="payment-action-btn delete-btn">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="payment-details">
                                            <p class="upi-id">mahesh.prabhu@okaxis</p>
                                            <p class="upi-status">Verified</p>
                                        </div>
                                    </div>

                                    <!-- Add New Payment Method -->
                                    <div class="payment-card add-new-payment" data-toggle="modal"
                                        data-target="#addPaymentModal">
                                        <div class="add-new-content">
                                            <div class="add-new-icon">
                                                <i class="bi bi-plus-circle"></i>
                                            </div>
                                            <h4 class="add-new-title">Add Payment Method</h4>
                                            <p class="add-new-subtitle">Add a new card or payment option</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Coupons Tab -->
                            <div class="tab-pane fade" id="coupons" role="tabpanel">
                                <div class="content-header">
                                    <h2 class="content-title">My Coupons</h2>
                                    <div class="coupon-tabs">
                                        <button class="btn btn-outline-primary btn-sm active"
                                            data-filter="available">Available</button>
                                        <button class="btn btn-outline-secondary btn-sm"
                                            data-filter="used">Used</button>
                                        <button class="btn btn-outline-secondary btn-sm"
                                            data-filter="expired">Expired</button>
                                    </div>
                                </div>

                                <div class="coupons-grid">
                                    <!-- Available Coupon 1 -->
                                    <div class="coupon-card available">
                                        <div class="coupon-left">
                                            <div class="coupon-discount">
                                                <span class="discount-percent">20%</span>
                                                <span class="discount-text">OFF</span>
                                            </div>
                                        </div>
                                        <div class="coupon-right">
                                            <div class="coupon-info">
                                                <h5 class="coupon-title">Festival Special</h5>
                                                <p class="coupon-description">Get 20% off on orders above ₹2,999</p>
                                                <p class="coupon-expiry">Expires: 31 Dec 2023</p>
                                            </div>
                                            <div class="coupon-code">
                                                <span>FESTIVAL20</span>
                                                <button class="copy-code-btn">Copy</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Available Coupon 2 -->
                                    <div class="coupon-card available">
                                        <div class="coupon-left">
                                            <div class="coupon-discount">
                                                <span class="discount-amount">₹500</span>
                                                <span class="discount-text">OFF</span>
                                            </div>
                                        </div>
                                        <div class="coupon-right">
                                            <div class="coupon-info">
                                                <h5 class="coupon-title">New User Bonus</h5>
                                                <p class="coupon-description">Flat ₹500 off on first order above ₹1,999
                                                </p>
                                                <p class="coupon-expiry">Expires: 15 Jan 2024</p>
                                            </div>
                                            <div class="coupon-code">
                                                <span>NEWUSER500</span>
                                                <button class="copy-code-btn">Copy</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Used Coupon -->
                                    <div class="coupon-card used" style="display: none;">
                                        <div class="coupon-left">
                                            <div class="coupon-discount">
                                                <span class="discount-percent">15%</span>
                                                <span class="discount-text">OFF</span>
                                            </div>
                                        </div>
                                        <div class="coupon-right">
                                            <div class="coupon-info">
                                                <h5 class="coupon-title">Birthday Special</h5>
                                                <p class="coupon-description">Birthday month discount</p>
                                                <p class="coupon-usage">Used on: 15 Nov 2023</p>
                                            </div>
                                            <div class="coupon-status">
                                                <span class="status-used">USED</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Profile Information</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="profile-edit-form">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" value="Mahesh Prabhu">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" value="mahesh.prabhu@example.com">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="tel" class="form-control" value="+91 98765 43210">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" value="1990-03-15">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Address Modal -->
    <div class="modal fade" id="addAddressModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Address</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="address-form">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Address Label</label>
                                    <input type="text" class="form-control" placeholder="e.g., Home, Office">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" placeholder="Enter full name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Street Address</label>
                            <textarea class="form-control" rows="3"
                                placeholder="House/Flat/Office No., Building Name, Street Name"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="Enter city">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="form-control">
                                        <option>Select State</option>
                                        <option>Delhi</option>
                                        <option>Maharashtra</option>
                                        <option>Gujarat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label>PIN Code</label>
                                    <input type="text" class="form-control" placeholder="Enter PIN code">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Address</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Payment Method Modal -->
    <div class="modal fade" id="addPaymentModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Payment Method</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="payment-form">
                        <div class="form-group">
                            <label>Payment Type</label>
                            <select class="form-control" id="paymentType">
                                <option>Credit/Debit Card</option>
                                <option>UPI</option>
                                <option>Net Banking</option>
                            </select>
                        </div>
                        <div id="cardFields">
                            <div class="form-group">
                                <label>Card Number</label>
                                <input type="text" class="form-control" placeholder="1234 5678 9012 3456">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Expiry Date</label>
                                        <input type="text" class="form-control" placeholder="MM/YY">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>CVV</label>
                                        <input type="text" class="form-control" placeholder="123">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Cardholder Name</label>
                                <input type="text" class="form-control" placeholder="Name as on card">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Add Payment Method</button>
                </div>
            </div>
        </div>
    </div>

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