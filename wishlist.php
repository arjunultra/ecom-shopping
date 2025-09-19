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
    <!-- Wishlist Main Section -->
    <section class="wishlist-section">
        <div class="container">
            <!-- Wishlist Header -->
            <div class="wishlist-header">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="header-content">
                            <h1 class="wishlist-title">
                                <i class="bi bi-heart-fill"></i>
                                My Wishlist
                            </h1>
                            <p class="wishlist-subtitle" id="wishlistCount">3 items saved for later</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="wishlist-actions">
                            <div class="view-toggle">
                                <button class="btn btn-outline-secondary view-btn active" data-view="grid"
                                    title="Grid View">
                                    <i class="bi bi-grid-3x3-gap"></i>
                                </button>
                                <button class="btn btn-outline-secondary view-btn" data-view="list" title="List View">
                                    <i class="bi bi-list"></i>
                                </button>
                            </div>
                            <div class="sorting-controls">
                                <select class="form-control sort-select" id="sortSelect">
                                    <option value="recent">Recently Added</option>
                                    <option value="name-asc">Name: A-Z</option>
                                    <option value="name-desc">Name: Z-A</option>
                                    <option value="price-low">Price: Low to High</option>
                                    <option value="price-high">Price: High to Low</option>
                                </select>
                            </div>
                            <button class="btn btn-outline-danger clear-all-btn" id="clearAllBtn">
                                <i class="bi bi-trash"></i> Clear All
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wishlist Content -->
            <div class="wishlist-content" id="wishlistContent">
                <!-- Wishlist Items Container -->
                <div class="wishlist-items" id="wishlistItems">
                    <!-- Items will be populated via JavaScript -->
                </div>

                <!-- Empty Wishlist State -->
                <div class="empty-wishlist" id="emptyWishlist" style="display: none;">
                    <div class="empty-state">
                        <div class="empty-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <h3 class="empty-title">Your wishlist is empty</h3>
                        <p class="empty-message">Save your favorite items to buy them later</p>
                        <a href="products.php" class="btn btn-primary start-shopping">
                            <i class="bi bi-bag"></i> Start Shopping
                        </a>
                    </div>
                </div>
            </div>

            <!-- Wishlist Summary -->
            <div class="wishlist-summary" id="wishlistSummary">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="bulk-actions">
                            <div class="select-all-wrapper">
                                <label class="select-all-label">
                                    <input type="checkbox" id="selectAllCheckbox" class="select-all-checkbox">
                                    <span class="checkmark"></span>
                                    <span class="select-text">Select All (<span id="totalItemsCount">3</span>)</span>
                                </label>
                            </div>
                            <div class="bulk-action-buttons">
                                <button class="btn btn-outline-primary bulk-cart-btn" id="bulkAddToCart" disabled>
                                    <i class="bi bi-bag-plus"></i> Add Selected to Cart
                                </button>
                                <button class="btn btn-outline-danger bulk-remove-btn" id="bulkRemove" disabled>
                                    <i class="bi bi-trash"></i> Remove Selected
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="wishlist-stats">
                            <div class="stat-item">
                                <span class="stat-label">Total Items:</span>
                                <span class="stat-value" id="totalItems">3</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-label">Total Value:</span>
                                <span class="stat-value" id="totalValue">₹15,350</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-label">Average Price:</span>
                                <span class="stat-value" id="averagePrice">₹5,117</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sharing Section -->
            <div class="wishlist-sharing" id="wishlistSharing">
                <div class="sharing-card">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-8">
                            <div class="sharing-content">
                                <h4 class="sharing-title">
                                    <i class="bi bi-share"></i>
                                    Share Your Wishlist
                                </h4>
                                <p class="sharing-description">Let your friends and family know what you love</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="sharing-buttons">
                                <button class="btn btn-outline-primary share-btn" data-platform="whatsapp">
                                    <i class="bi bi-whatsapp"></i> WhatsApp
                                </button>
                                <button class="btn btn-outline-primary share-btn" data-platform="copy">
                                    <i class="bi bi-link-45deg"></i> Copy Link
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recommended Products -->
            <div class="recommendations-section">
                <h3 class="recommendations-title">You might also like</h3>
                <div class="recommendations-grid" id="recommendationsGrid">
                    <!-- Recommendations will be populated via JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <!-- Move to Cart Modal -->
    <div class="modal fade" id="moveToCartModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="bi bi-bag-plus"></i> Add to Cart
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="product-modal-info">
                        <img src="" alt="" id="modalProductImage" class="modal-product-img">
                        <div class="modal-product-details">
                            <h6 id="modalProductTitle">Product Title</h6>
                            <p class="modal-product-price" id="modalProductPrice">₹0</p>
                        </div>
                    </div>

                    <div class="variant-selection" id="modalVariantSelection">
                        <!-- Variants will be populated if needed -->
                    </div>

                    <div class="quantity-selection">
                        <label>Quantity:</label>
                        <div class="quantity-controls">
                            <button type="button" class="quantity-btn minus">
                                <i class="bi bi-dash"></i>
                            </button>
                            <input type="number" value="1" min="1" max="10" class="quantity-input">
                            <button type="button" class="quantity-btn plus">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmAddToCart">
                        <i class="bi bi-bag-plus"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationTitle">Confirm Action</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="confirmationMessage">Are you sure you want to proceed?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmAction">Confirm</button>
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