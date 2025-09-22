<?php $page = "products"; ?>
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
    <!-- Main Products Section -->
    <section class="products-section">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <!-- Sidebar Filters -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="filters-sidebar">
                        <div class="filters-header">
                            <h4><i class="bi bi-funnel"></i> Filters</h4>
                            <button class="btn btn-link clear-all" id="clearFilters">
                                <i class="bi bi-arrow-clockwise"></i> Clear All
                            </button>
                        </div>

                        <!-- Category Filter -->
                        <div class="filter-group">
                            <h5 class="filter-title" data-toggle="collapse" data-target="#categoryFilter"
                                aria-expanded="true">
                                <i class="bi bi-tags"></i> Category
                                <i class="bi bi-chevron-down toggle-icon"></i>
                            </h5>
                            <div class="collapse show" id="categoryFilter">
                                <div class="filter-options">
                                    <label class="filter-option">
                                        <input type="checkbox" value="bangles" class="filter-checkbox">
                                        <span class="checkmark"></span>
                                        <span class="option-text">Bangles</span>
                                        <span class="count">(24)</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="pendants" class="filter-checkbox">
                                        <span class="checkmark"></span>
                                        <span class="option-text">Pendants</span>
                                        <span class="count">(18)</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="necklaces" class="filter-checkbox">
                                        <span class="checkmark"></span>
                                        <span class="option-text">Necklaces</span>
                                        <span class="count">(32)</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="earrings" class="filter-checkbox">
                                        <span class="checkmark"></span>
                                        <span class="option-text">Earrings</span>
                                        <span class="count">(45)</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="anklets" class="filter-checkbox">
                                        <span class="checkmark"></span>
                                        <span class="option-text">Traditional Anklets</span>
                                        <span class="count">(15)</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="rings" class="filter-checkbox">
                                        <span class="checkmark"></span>
                                        <span class="option-text">Gold Rings</span>
                                        <span class="count">(22)</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Price Range Filter with Slider -->
                        <div class="filter-group">
                            <h5 class="filter-title" data-toggle="collapse" data-target="#priceFilter"
                                aria-expanded="true">
                                <i class="bi bi-currency-rupee"></i> Price Range
                                <i class="bi bi-chevron-down toggle-icon"></i>
                            </h5>
                            <div class="collapse show" id="priceFilter">
                                <div class="price-range">
                                    <div class="price-inputs">
                                        <div class="input-wrapper">
                                            <input type="number" placeholder="Min" class="form-control price-input"
                                                id="minPriceInput" value="0">
                                            <span class="currency">₹</span>
                                        </div>
                                        <span class="separator">to</span>
                                        <div class="input-wrapper">
                                            <input type="number" placeholder="Max" class="form-control price-input"
                                                id="maxPriceInput" value="50000">
                                            <span class="currency">₹</span>
                                        </div>
                                    </div>

                                    <!-- Dual Range Slider -->
                                    <div class="price-slider-container">
                                        <div class="price-slider">
                                            <div class="price-progress" id="priceProgress"></div>
                                        </div>
                                        <div class="range-inputs">
                                            <input type="range" class="range-min" min="0" max="50000" value="0"
                                                step="100" id="rangeMin">
                                            <input type="range" class="range-max" min="0" max="50000" value="50000"
                                                step="100" id="rangeMax">
                                        </div>
                                    </div>

                                    <div class="price-options mt-3">
                                        <label class="filter-option">
                                            <input type="checkbox" value="0-1000" class="filter-checkbox">
                                            <span class="checkmark"></span>
                                            <span class="option-text">₹0 - ₹1,000</span>
                                            <span class="count">(28)</span>
                                        </label>
                                        <label class="filter-option">
                                            <input type="checkbox" value="1000-5000" class="filter-checkbox">
                                            <span class="checkmark"></span>
                                            <span class="option-text">₹1,000 - ₹5,000</span>
                                            <span class="count">(64)</span>
                                        </label>
                                        <label class="filter-option">
                                            <input type="checkbox" value="5000-10000" class="filter-checkbox">
                                            <span class="checkmark"></span>
                                            <span class="option-text">₹5,000 - ₹10,000</span>
                                            <span class="count">(42)</span>
                                        </label>
                                        <label class="filter-option">
                                            <input type="checkbox" value="10000+" class="filter-checkbox">
                                            <span class="checkmark"></span>
                                            <span class="option-text">₹10,000+</span>
                                            <span class="count">(22)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Material Filter -->
                        <div class="filter-group">
                            <h5 class="filter-title" data-toggle="collapse" data-target="#materialFilter"
                                aria-expanded="true">
                                <i class="bi bi-gem"></i> Material
                                <i class="bi bi-chevron-down toggle-icon"></i>
                            </h5>
                            <div class="collapse show" id="materialFilter">
                                <div class="filter-options">
                                    <label class="filter-option">
                                        <input type="checkbox" value="gold" class="filter-checkbox">
                                        <span class="checkmark gold"></span>
                                        <span class="option-text">Gold</span>
                                        <span class="count">(85)</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="silver" class="filter-checkbox">
                                        <span class="checkmark silver"></span>
                                        <span class="option-text">Silver</span>
                                        <span class="count">(52)</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="platinum" class="filter-checkbox">
                                        <span class="checkmark platinum"></span>
                                        <span class="option-text">Platinum</span>
                                        <span class="count">(18)</span>
                                    </label>
                                    <label class="filter-option">
                                        <input type="checkbox" value="rose-gold" class="filter-checkbox">
                                        <span class="checkmark rose-gold"></span>
                                        <span class="option-text">Rose Gold</span>
                                        <span class="count">(31)</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="filter-group">
                            <h5 class="filter-title" data-toggle="collapse" data-target="#ratingFilter"
                                aria-expanded="true">
                                <i class="bi bi-star"></i> Customer Rating
                                <i class="bi bi-chevron-down toggle-icon"></i>
                            </h5>
                            <div class="collapse show" id="ratingFilter">
                                <div class="filter-options">
                                    <label class="filter-option rating-option">
                                        <input type="checkbox" value="5" class="filter-checkbox">
                                        <span class="checkmark"></span>
                                        <div class="rating-display">
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <span class="rating-text">& Up</span>
                                        </div>
                                        <span class="count">(124)</span>
                                    </label>
                                    <label class="filter-option rating-option">
                                        <input type="checkbox" value="4" class="filter-checkbox">
                                        <span class="checkmark"></span>
                                        <div class="rating-display">
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <span class="rating-text">& Up</span>
                                        </div>
                                        <span class="count">(98)</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="products-header">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-7">
                                <div class="results-info">
                                    <p class="results-count">Showing <span id="resultStart">1</span>-<span
                                            id="resultEnd">9</span> of <span id="totalResults">156</span> results</p>
                                    <div class="active-filters" id="activeFilters">
                                        <!-- Active filter tags will be inserted here -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-5">
                                <div class="sorting-controls">
                                    <div class="sort-wrapper">
                                        <i class="bi bi-sort-down"></i>
                                        <select class="form-control sort-select" id="sortSelect">
                                            <option value="featured">Sort by: Featured</option>
                                            <option value="price-low">Price: Low to High</option>
                                            <option value="price-high">Price: High to Low</option>
                                            <option value="newest">Newest First</option>
                                            <option value="rating">Customer Rating</option>
                                            <option value="popularity">Most Popular</option>
                                        </select>
                                    </div>
                                    <div class="view-toggle">
                                        <button class="btn btn-outline-secondary view-btn active" data-view="grid"
                                            title="Grid View">
                                            <i class="bi bi-grid-3x3-gap"></i>
                                        </button>
                                        <button class="btn btn-outline-secondary view-btn" data-view="list"
                                            title="List View">
                                            <i class="bi bi-list"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="products-grid products-equal-grid" id="productsGrid">
                        <div class="row">
                            <!-- Product Card 1 -->
                            <div class="col-12 col-md-6 col-lg-4 product-col">
                                <div class="product-item d-flex" data-category="bangles" data-price="2850"
                                    data-rating="4">
                                    <div class="product-card h-100">
                                        <div class="product-image-wrapper">
                                            <img src="images/bangles.webp" alt="Elegant Gold Bangle"
                                                class="product-image">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <button class="btn btn-primary quick-view" data-toggle="modal"
                                                        data-target="#quickViewModal" data-product="1">
                                                        <i class="bi bi-eye"></i> Quick View
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-badges">
                                                <span class="badge sale-badge">
                                                    <i class="bi bi-percent"></i> Sale
                                                </span>
                                            </div>
                                            <div class="product-actions">
                                                <button class="action-btn wishlist-btn" title="Add to Wishlist"
                                                    data-product="1">
                                                    <i class="bi bi-heart"></i>
                                                </button>
                                                <button class="action-btn compare-btn" title="Add to cart"
                                                    data-product="1">
                                                    <i class="bi bi-cart-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-info d-flex flex-column">
                                            <a href="product_view.php" class="product-link">
                                                <h5 class="product-title">Elegant Gold Bangle</h5>
                                            </a>
                                            <div class="product-meta">
                                                <div class="product-rating">
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star"></i>
                                                    </div>
                                                    <span class="rating-text">(24)</span>
                                                </div>
                                                <div class="product-sku">SKU: BNG001</div>
                                            </div>
                                            <div class="product-price">
                                                <span class="current-price">₹2,850</span>
                                                <span class="original-price">₹3,200</span>
                                                <span class="discount-badge">11% off</span>
                                            </div>
                                            <div class="product-features">
                                                <span class="feature-tag">18K Gold</span>
                                                <span class="feature-tag">Handcrafted</span>
                                            </div>
                                            <div class="mt-auto">
                                                <button class="btn btn-primary add-to-cart w-100" data-product="1">
                                                    <i class="bi bi-bag-plus"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Card 2 -->
                            <div class="col-12 col-md-6 col-lg-4 product-col">
                                <div class="product-item d-flex" data-category="pendants" data-price="8750"
                                    data-rating="5">
                                    <div class="product-card h-100">
                                        <div class="product-image-wrapper">
                                            <img src="images/pendants.webp" alt="Diamond Heart Pendant"
                                                class="product-image">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <button class="btn btn-primary quick-view" data-toggle="modal"
                                                        data-target="#quickViewModal" data-product="2">
                                                        <i class="bi bi-eye"></i> Quick View
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-actions">
                                                <button class="action-btn wishlist-btn" title="Add to Wishlist"
                                                    data-product="2">
                                                    <i class="bi bi-heart"></i>
                                                </button>
                                                <button class="action-btn compare-btn" title="Add to Cart"
                                                    data-product="2">
                                                    <i class="bi bi-cart-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-info d-flex flex-column">
                                            <a href="product_view.php" class="product-link">
                                                <h5 class="product-title">Diamond Heart Pendant with Chain</h5>
                                            </a>
                                            <div class="product-meta">
                                                <div class="product-rating">
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                    <span class="rating-text">(18)</span>
                                                </div>
                                                <div class="product-sku">SKU: PEN002</div>
                                            </div>
                                            <div class="product-price">
                                                <span class="current-price">₹8,750</span>
                                            </div>
                                            <div class="product-features">
                                                <span class="feature-tag">Diamond</span>
                                                <span class="feature-tag">White Gold</span>
                                            </div>
                                            <div class="mt-auto">
                                                <button class="btn btn-primary add-to-cart w-100" data-product="2">
                                                    <i class="bi bi-bag-plus"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Card 3 -->
                            <div class="col-12 col-md-6 col-lg-4 product-col">
                                <div class="product-item d-flex" data-category="earrings" data-price="4200"
                                    data-rating="4">
                                    <div class="product-card h-100">
                                        <div class="product-image-wrapper">
                                            <img src="images/pearl-earings.webp" alt="Pearl Drop Earrings"
                                                class="product-image">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <button class="btn btn-primary quick-view" data-toggle="modal"
                                                        data-target="#quickViewModal" data-product="3">
                                                        <i class="bi bi-eye"></i> Quick View
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-badges">
                                                <span class="badge new-badge">
                                                    <i class="bi bi-star"></i> New
                                                </span>
                                            </div>
                                            <div class="product-actions">
                                                <button class="action-btn wishlist-btn" title="Add to Wishlist"
                                                    data-product="3">
                                                    <i class="bi bi-heart"></i>
                                                </button>
                                                <button class="action-btn compare-btn" title="Add to Cart"
                                                    data-product="3">
                                                    <i class="bi bi-cart-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-info d-flex flex-column">
                                            <a href="product_view.php" class="product-link">
                                                <h5 class="product-title">Pearl Drop Earrings</h5>
                                            </a>
                                            <div class="product-meta">
                                                <div class="product-rating">
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star"></i>
                                                    </div>
                                                    <span class="rating-text">(12)</span>
                                                </div>
                                                <div class="product-sku">SKU: EAR003</div>
                                            </div>
                                            <div class="product-price">
                                                <span class="current-price">₹4,200</span>
                                            </div>
                                            <div class="product-features">
                                                <span class="feature-tag">Pearl</span>
                                                <span class="feature-tag">Sterling Silver</span>
                                            </div>
                                            <div class="mt-auto">
                                                <button class="btn btn-primary add-to-cart w-100" data-product="3">
                                                    <i class="bi bi-bag-plus"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Card 4 -->
                            <div class="col-12 col-md-6 col-lg-4 product-col">
                                <div class="product-item d-flex" data-category="necklaces" data-price="1850"
                                    data-rating="5">
                                    <div class="product-card h-100">
                                        <div class="product-image-wrapper">
                                            <img src="images/necklaces.webp" alt="Silver Chain Necklace"
                                                class="product-image">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <button class="btn btn-primary quick-view" data-toggle="modal"
                                                        data-target="#quickViewModal" data-product="4">
                                                        <i class="bi bi-eye"></i> Quick View
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-actions">
                                                <button class="action-btn wishlist-btn" title="Add to Wishlist"
                                                    data-product="4">
                                                    <i class="bi bi-heart"></i>
                                                </button>
                                                <button class="action-btn compare-btn" title="Add to Cart"
                                                    data-product="4">
                                                    <i class="bi bi-cart-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-info d-flex flex-column">
                                            <a href="product_view.php" class="product-link">
                                                <h5 class="product-title">Silver Chain Necklace</h5>
                                            </a>
                                            <div class="product-meta">
                                                <div class="product-rating">
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                    <span class="rating-text">(35)</span>
                                                </div>
                                                <div class="product-sku">SKU: NEC004</div>
                                            </div>
                                            <div class="product-price">
                                                <span class="current-price">₹1,850</span>
                                            </div>
                                            <div class="product-features">
                                                <span class="feature-tag">Sterling Silver</span>
                                                <span class="feature-tag">Adjustable</span>
                                            </div>
                                            <div class="mt-auto">
                                                <button class="btn btn-primary add-to-cart w-100" data-product="4">
                                                    <i class="bi bi-bag-plus"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Card 5 -->
                            <div class="col-12 col-md-6 col-lg-4 product-col">
                                <div class="product-item d-flex" data-category="anklets" data-price="5650"
                                    data-rating="4">
                                    <div class="product-card h-100">
                                        <div class="product-image-wrapper">
                                            <img src="images/gold-anklets.webp" alt="Traditional Gold Anklet"
                                                class="product-image">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <button class="btn btn-primary quick-view" data-toggle="modal"
                                                        data-target="#quickViewModal" data-product="5">
                                                        <i class="bi bi-eye"></i> Quick View
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-actions">
                                                <button class="action-btn wishlist-btn" title="Add to Wishlist"
                                                    data-product="5">
                                                    <i class="bi bi-heart"></i>
                                                </button>
                                                <button class="action-btn compare-btn" title="Add to Cart"
                                                    data-product="5">
                                                    <i class="bi bi-cart-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-info d-flex flex-column">
                                            <a href="product_view.php" class="product-link">
                                                <h5 class="product-title">Traditional Gold Anklet with Bells</h5>
                                            </a>
                                            <div class="product-meta">
                                                <div class="product-rating">
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star"></i>
                                                    </div>
                                                    <span class="rating-text">(8)</span>
                                                </div>
                                                <div class="product-sku">SKU: ANK005</div>
                                            </div>
                                            <div class="product-price">
                                                <span class="current-price">₹5,650</span>
                                            </div>
                                            <div class="product-features">
                                                <span class="feature-tag">22K Gold</span>
                                                <span class="feature-tag">Traditional</span>
                                            </div>
                                            <div class="mt-auto">
                                                <button class="btn btn-primary add-to-cart w-100" data-product="5">
                                                    <i class="bi bi-bag-plus"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Card 6 -->
                            <div class="col-12 col-md-6 col-lg-4 product-col">
                                <div class="product-item d-flex" data-category="rings" data-price="12500"
                                    data-rating="5">
                                    <div class="product-card h-100">
                                        <div class="product-image-wrapper">
                                            <img src="images/gold-ring.webp" alt="Gold Wedding Ring"
                                                class="product-image">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <button class="btn btn-primary quick-view" data-toggle="modal"
                                                        data-target="#quickViewModal" data-product="6">
                                                        <i class="bi bi-eye"></i> Quick View
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-badges">
                                                <span class="badge bestseller-badge">
                                                    <i class="bi bi-award"></i> Bestseller
                                                </span>
                                            </div>
                                            <div class="product-actions">
                                                <button class="action-btn wishlist-btn" title="Add to Wishlist"
                                                    data-product="6">
                                                    <i class="bi bi-heart"></i>
                                                </button>
                                                <button class="action-btn compare-btn" title="Add to Cart"
                                                    data-product="6">
                                                    <i class="bi bi-cart-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-info d-flex flex-column">
                                            <a href="product_view.php" class="product-link">
                                                <h5 class="product-title">Gold Wedding Ring</h5>
                                            </a>
                                            <div class="product-meta">
                                                <div class="product-rating">
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                    <span class="rating-text">(52)</span>
                                                </div>
                                                <div class="product-sku">SKU: RNG006</div>
                                            </div>
                                            <div class="product-price">
                                                <span class="current-price">₹12,500</span>
                                            </div>
                                            <div class="product-features">
                                                <span class="feature-tag">18K Gold</span>
                                                <span class="feature-tag">Certified</span>
                                            </div>
                                            <div class="mt-auto">
                                                <button class="btn btn-primary add-to-cart w-100" data-product="6">
                                                    <i class="bi bi-bag-plus"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Card 7 -->
                            <div class="col-12 col-md-6 col-lg-4 product-col">
                                <div class="product-item d-flex" data-category="bangles" data-price="3500"
                                    data-rating="4">
                                    <div class="product-card h-100">
                                        <div class="product-image-wrapper">
                                            <img src="images/rosegold-bangle.webp" alt="Rose Gold Bangle"
                                                class="product-image">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <button class="btn btn-primary quick-view" data-toggle="modal"
                                                        data-target="#quickViewModal" data-product="7">
                                                        <i class="bi bi-eye"></i> Quick View
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-actions">
                                                <button class="action-btn wishlist-btn" title="Add to Wishlist"
                                                    data-product="7">
                                                    <i class="bi bi-heart"></i>
                                                </button>
                                                <button class="action-btn compare-btn" title="Add to Cart"
                                                    data-product="7">
                                                    <i class="bi bi-cart-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-info d-flex flex-column">
                                            <a href="product_view.php" class="product-link">
                                                <h5 class="product-title">Rose Gold Bangle Set</h5>
                                            </a>
                                            <div class="product-meta">
                                                <div class="product-rating">
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star"></i>
                                                    </div>
                                                    <span class="rating-text">(16)</span>
                                                </div>
                                                <div class="product-sku">SKU: BNG007</div>
                                            </div>
                                            <div class="product-price">
                                                <span class="current-price">₹3,500</span>
                                            </div>
                                            <div class="product-features">
                                                <span class="feature-tag">Rose Gold</span>
                                                <span class="feature-tag">Set of 2</span>
                                            </div>
                                            <div class="mt-auto">
                                                <button class="btn btn-primary add-to-cart w-100" data-product="7">
                                                    <i class="bi bi-bag-plus"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Card 8 -->
                            <div class="col-12 col-md-6 col-lg-4 product-col">
                                <div class="product-item d-flex" data-category="earrings" data-price="6750"
                                    data-rating="5">
                                    <div class="product-card h-100">
                                        <div class="product-image-wrapper">
                                            <img src="images/diamond-earings.webp" alt="Diamond Stud Earrings"
                                                class="product-image">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <button class="btn btn-primary quick-view" data-toggle="modal"
                                                        data-target="#quickViewModal" data-product="8">
                                                        <i class="bi bi-eye"></i> Quick View
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-actions">
                                                <button class="action-btn wishlist-btn" title="Add to Wishlist"
                                                    data-product="8">
                                                    <i class="bi bi-heart"></i>
                                                </button>
                                                <button class="action-btn compare-btn" title="Add to Cart"
                                                    data-product="8">
                                                    <i class="bi bi-cart-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-info d-flex flex-column">
                                            <a href="product_view.php" class="product-link">
                                                <h5 class="product-title">Diamond Stud Earrings</h5>
                                            </a>
                                            <div class="product-meta">
                                                <div class="product-rating">
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                    </div>
                                                    <span class="rating-text">(29)</span>
                                                </div>
                                                <div class="product-sku">SKU: EAR008</div>
                                            </div>
                                            <div class="product-price">
                                                <span class="current-price">₹6,750</span>
                                            </div>
                                            <div class="product-features">
                                                <span class="feature-tag">Diamond</span>
                                                <span class="feature-tag">14K Gold</span>
                                            </div>
                                            <div class="mt-auto">
                                                <button class="btn btn-primary add-to-cart w-100" data-product="8">
                                                    <i class="bi bi-bag-plus"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Product Card 9 -->
                            <div class="col-12 col-md-12 col-lg-4 product-col">
                                <div class="product-item d-flex" data-category="pendants" data-price="4950"
                                    data-rating="4">
                                    <div class="product-card h-100">
                                        <div class="product-image-wrapper">
                                            <img src="images/ruby-pendant.webp" alt="Ruby Stone Pendant"
                                                class="product-image">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <button class="btn btn-primary quick-view" data-toggle="modal"
                                                        data-target="#quickViewModal" data-product="9">
                                                        <i class="bi bi-eye"></i> Quick View
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-actions">
                                                <button class="action-btn wishlist-btn" title="Add to Wishlist"
                                                    data-product="9">
                                                    <i class="bi bi-heart"></i>
                                                </button>
                                                <button class="action-btn compare-btn" title="Add to Cart"
                                                    data-product="9">
                                                    <i class="bi bi-cart-fill"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-info d-flex flex-column">
                                            <a href="product_view.php" class="product-link">
                                                <h5 class="product-title">Ruby Stone Pendant</h5>
                                            </a>
                                            <div class="product-meta">
                                                <div class="product-rating">
                                                    <div class="stars">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star"></i>
                                                    </div>
                                                    <span class="rating-text">(14)</span>
                                                </div>
                                                <div class="product-sku">SKU: PEN009</div>
                                            </div>
                                            <div class="product-price">
                                                <span class="current-price">₹4,950</span>
                                            </div>
                                            <div class="product-features">
                                                <span class="feature-tag">Ruby</span>
                                                <span class="feature-tag">Gold Plated</span>
                                            </div>
                                            <div class="mt-auto">
                                                <button class="btn btn-primary add-to-cart w-100" data-product="9">
                                                    <i class="bi bi-bag-plus"></i> Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-wrapper">
                        <nav aria-label="Products pagination">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link">
                                        <i class="bi bi-chevron-left"></i>
                                    </span>
                                </li>
                                <li class="page-item active">
                                    <span class="page-link">1</span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <span class="page-link dots">...</span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">18</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick View Modal -->
        <div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog" aria-labelledby="quickViewModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="quickViewModalLabel">
                            <i class="bi bi-eye"></i> Quick View
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="modal-product-image">
                                    <img src="" alt="" id="modalProductImage" class="img-fluid">
                                    <div class="image-zoom-indicator">
                                        <i class="bi bi-zoom-in"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="modal-product-details">
                                    <h4 id="modalProductTitle">Product Title</h4>

                                    <div class="modal-product-rating">
                                        <div class="stars" id="modalProductStars">
                                            <!-- Stars will be populated by JS -->
                                        </div>
                                        <span class="rating-count" id="modalRatingCount">(0 reviews)</span>
                                    </div>

                                    <div class="modal-product-price">
                                        <span class="current-price" id="modalCurrentPrice">₹0</span>
                                        <span class="original-price" id="modalOriginalPrice"
                                            style="display: none;">₹0</span>
                                        <span class="discount-badge" id="modalDiscount" style="display: none;">0%
                                            off</span>
                                    </div>

                                    <div class="modal-product-sku">
                                        <strong>SKU:</strong> <span id="modalProductSku">--</span>
                                    </div>

                                    <div class="modal-product-description">
                                        <p id="modalProductDescription">
                                            This exquisite piece showcases exceptional craftsmanship with premium
                                            materials and stunning design. Perfect for special occasions or everyday
                                            elegance.
                                        </p>
                                    </div>

                                    <div class="modal-product-features">
                                        <h6>Features:</h6>
                                        <ul id="modalProductFeatures">
                                            <li>Premium quality materials</li>
                                            <li>Expert craftsmanship</li>
                                            <li>Comes with authenticity certificate</li>
                                            <li>Free gift wrapping available</li>
                                        </ul>
                                    </div>

                                    <div class="modal-product-actions">
                                        <div class="quantity-selector">
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

                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-lg add-to-cart-modal">
                                                <i class="bi bi-bag-plus"></i> Add to Cart
                                            </button>
                                            <button class="btn btn-outline-secondary btn-lg wishlist-modal">
                                                <i class="bi bi-heart"></i>
                                            </button>
                                            <button class="btn btn-outline-secondary btn-lg compare-modal">
                                                <i class="bi bi-cart-fill"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="modal-product-link">
                                        <a href="product_view.php" id="modalProductLink" class="btn btn-link">
                                            <i class="bi bi-arrow-right"></i> View Full Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php include_once "footer.php"; ?>
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
            <img src="images/quickpurchase.png" class="priceicn2 float-right blink" alt="" title="">
        </a>
    </div>


    <script src="js/odometer.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/script.js"></script>
</body>

</html>