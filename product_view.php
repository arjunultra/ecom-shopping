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
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" id="breadcrumbNav">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="products.html">Products</a></li>
                    <li class="breadcrumb-item" id="categoryBreadcrumb"><a href="#">Bangles</a></li>
                    <li class="breadcrumb-item active" aria-current="page" id="productBreadcrumb">Elegant Gold Bangle
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Product Detail Section -->
    <section class="product-detail-section">
        <div class="container">
            <div class="row">
                <!-- Image Gallery -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="product-images-container">
                        <div class="product-gallery">
                            <div class="thumbnails-container">
                                <div class="thumbnail-wrapper active" data-image="0">
                                    <img src="" alt="Product view 1" class="thumbnail-image">
                                </div>
                                <div class="thumbnail-wrapper" data-image="1">
                                    <img src="" alt="Product view 2" class="thumbnail-image">
                                </div>
                                <div class="thumbnail-wrapper" data-image="2">
                                    <img src="" alt="Product view 3" class="thumbnail-image">
                                </div>
                            </div>
                            <div class="main-image-container">
                                <div class="main-image-wrapper">
                                    <img src="" alt="Elegant Gold Bangle" class="main-image" id="mainProductImage">
                                    <div class="zoom-indicator"><i class="bi bi-zoom-in"></i> Click to zoom</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Information -->
                <div class="col-12 col-lg-6">
                    <div class="product-info-container">
                        <!-- Header -->
                        <div class="product-header">
                            <h1 class="product-title" id="productTitle">Elegant Gold Bangle</h1>
                            <div class="product-rating-reviews">
                                <div class="rating-stars" id="ratingStars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star"></i>
                                </div>
                                <span class="rating-count" id="ratingCount">(24 reviews)</span>
                            </div>
                            <div class="product-sku-availability">
                                <span class="product-sku">SKU: <span id="productSku">BNG001</span></span>
                                <span class="availability in-stock" id="availabilityStatus"><i
                                        class="bi bi-check-circle"></i> In Stock</span>
                            </div>
                        </div>

                        <!-- Pricing -->
                        <div class="product-pricing">
                            <span class="current-price" id="currentPrice">₹2,850</span>
                            <span class="original-price" id="originalPrice" style="display:inline;">₹3,200</span>
                        </div>

                        <!-- Description -->
                        <div class="product-description">
                            <p id="productDescription">This elegant gold bangle showcases exceptional craftsmanship with
                                traditional designs. Perfect for special occasions and daily wear.</p>
                        </div>

                        <!-- Actions: Add to Cart, Buy Now, Wishlist -->
                        <div class="container">
                            <div class="product-actions">
                                <!-- Quantity Selector Row -->
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div
                                            class="product-view-quantity-selector d-flex align-items-center justify-content-start">
                                            <label for="quantityInput"
                                                class="product-view-quantity-label me-3">Quantity:</label>
                                            <div class="product-view-quantity-controls d-flex">
                                                <button type="button" class="product-view-quantity-btn minus">
                                                    <i class="bi bi-dash"></i>
                                                </button>
                                                <input type="number" id="quantityInput" value="1" min="1" max="10"
                                                    class="product-view-quantity-input text-center">
                                                <button type="button" class="product-view-quantity-btn plus">
                                                    <i class="bi bi-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Buttons Row -->
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6 mb-2 mb-md-0">
                                        <button class="btn product-view-add-to-cart-btn w-100">
                                            <i class="bi bi-bag-plus me-2"></i>Add to Cart
                                        </button>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <a href="checkout.php">
                                            <button class="btn product-view-buy-now-btn w-100">
                                                <i class="bi bi-lightning me-2"></i>Buy Now
                                            </button>
                                        </a>
                                    </div>
                                </div>

                                <!-- Secondary Actions Row -->
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button class="product-view-action-link product-view-wishlist-link">
                                            <i class="bi bi-heart me-2"></i>Add to Wishlist
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Shipping Info -->
                        <div class="shipping-info">
                            <div class="info-item"><i class="bi bi-truck"></i> Free Shipping on orders over ₹999</div>
                            <div class="info-item"><i class="bi bi-arrow-clockwise"></i> 30-Day Easy Returns</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Tabs -->
    <section class="product-details-section">
        <div class="container">
            <div class="product-tabs">
                <ul class="nav nav-tabs" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                            role="tab">Description</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="specifications-tab" data-toggle="tab" href="#specifications"
                            role="tab">Specifications</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab">Reviews</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="care-tab" data-toggle="tab" href="#care" role="tab">Care
                            Instructions</a>
                    </li>
                </ul>
                <div class="tab-content" id="productTabsContent">
                    <!-- Description Tab -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="tab-content-wrapper">
                            <h5>Product Description</h5>
                            <div id="fullDescription">
                                <p>This exquisite gold bangle is a perfect blend of traditional craftsmanship and
                                    contemporary elegance. Meticulously handcrafted by skilled artisans, each piece
                                    features
                                    intricate patterns that have been passed down through generations.</p>

                                <p>The bangle is made from high-quality materials with 18K gold plating that ensures
                                    long-lasting beauty and resistance to tarnishing. The comfortable fit makes it
                                    suitable
                                    for daily wear, while its stunning design makes it perfect for special occasions and
                                    celebrations.</p>

                                <h6>Design Features:</h6>
                                <ul>
                                    <li><i class="bi bi-check2-all text-pink"></i>Traditional motifs with modern appeal
                                    </li>
                                    <li><i class="bi bi-check2-all text-pink"></i>Smooth edges for comfortable wearing
                                    </li>
                                    <li><i class="bi bi-check2-all text-pink"></i>Lustrous finish that catches light
                                        beautifully
                                    </li>
                                    <li><i class="bi bi-check2-all text-pink"></i>Versatile design suitable for all
                                        occasions</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Specifications Tab -->
                    <div class="tab-pane fade" id="specifications" role="tabpanel">
                        <div class="tab-content-wrapper">
                            <h5>Specifications</h5>
                            <table class="specifications-table">
                                <tbody id="specificationsBody">
                                    <tr>
                                        <td>Material</td>
                                        <td>18K Gold Plated Brass</td>
                                    </tr>
                                    <tr>
                                        <td>Weight</td>
                                        <td>25 grams</td>
                                    </tr>
                                    <tr>
                                        <td>Diameter</td>
                                        <td>6.5 cm</td>
                                    </tr>
                                    <tr>
                                        <td>Width</td>
                                        <td>8 mm</td>
                                    </tr>
                                    <tr>
                                        <td>Finish</td>
                                        <td>High Polish</td>
                                    </tr>
                                    <tr>
                                        <td>Closure</td>
                                        <td>Hinged</td>
                                    </tr>
                                    <tr>
                                        <td>Care</td>
                                        <td>Dry cloth cleaning recommended</td>
                                    </tr>
                                    <tr>
                                        <td>Warranty</td>
                                        <td>1 year manufacturer warranty</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="tab-content-wrapper">
                            <div class="reviews-summary">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="rating-overview">
                                            <div class="overall-rating">
                                                <span class="rating-number">4.2</span>
                                                <div class="rating-stars">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star"></i>
                                                </div>
                                                <span class="rating-text">Based on 24 reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="rating-breakdown">
                                            <div class="rating-row">
                                                <span>5 stars</span>
                                                <div class="rating-bar">
                                                    <div class="rating-fill" style="width: 58%"></div>
                                                </div>
                                                <span>14</span>
                                            </div>
                                            <div class="rating-row">
                                                <span>4 stars</span>
                                                <div class="rating-bar">
                                                    <div class="rating-fill" style="width: 25%"></div>
                                                </div>
                                                <span>6</span>
                                            </div>
                                            <div class="rating-row">
                                                <span>3 stars</span>
                                                <div class="rating-bar">
                                                    <div class="rating-fill" style="width: 12%"></div>
                                                </div>
                                                <span>3</span>
                                            </div>
                                            <div class="rating-row">
                                                <span>2 stars</span>
                                                <div class="rating-bar">
                                                    <div class="rating-fill" style="width: 4%"></div>
                                                </div>
                                                <span>1</span>
                                            </div>
                                            <div class="rating-row">
                                                <span>1 star</span>
                                                <div class="rating-bar">
                                                    <div class="rating-fill" style="width: 0%"></div>
                                                </div>
                                                <span>0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="reviews-list">
                                <div class="review-item">
                                    <div class="reviewer-info">
                                        <div class="reviewer-avatar">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div class="reviewer-details">
                                            <strong class="reviewer-name">Priya Sharma</strong>
                                            <div class="review-rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <span class="review-date">2 days ago</span>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>Absolutely beautiful bangle! The craftsmanship is excellent and it looks
                                            exactly
                                            as shown in the pictures. Very happy with my purchase.</p>
                                    </div>
                                </div>

                                <div class="review-item">
                                    <div class="reviewer-info">
                                        <div class="reviewer-avatar">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <div class="reviewer-details">
                                            <strong class="reviewer-name">Anjali Patel</strong>
                                            <div class="review-rating">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <span class="review-date">1 week ago</span>
                                        </div>
                                    </div>
                                    <div class="review-content">
                                        <p>Great quality and fast delivery. The bangle fits perfectly and the gold
                                            finish is
                                            really nice. Would definitely recommend!</p>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-outline-primary write-review-btn">
                                <i class="bi bi-pencil"></i> Write a Review
                            </button>
                        </div>
                    </div>
                    <!-- write a review modal -->
                    <!-- Review Modal -->
                    <div class="modal fade review-modal" id="reviewModal" tabindex="-1" role="dialog"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Write a Review</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="reviewForm">
                                        <div class="form-group">
                                            <label for="reviewTitle">Review Title</label>
                                            <input type="text" class="form-control" id="reviewTitle"
                                                placeholder="Enter a title for your review" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Your Rating</label>
                                            <div class="rating-selector">
                                                <div class="rating-stars">
                                                    <span class="star" data-value="1">
                                                        <i class="bi bi-star"></i>
                                                    </span>
                                                    <span class="star" data-value="2">
                                                        <i class="bi bi-star"></i>
                                                    </span>
                                                    <span class="star" data-value="3">
                                                        <i class="bi bi-star"></i>
                                                    </span>
                                                    <span class="star" data-value="4">
                                                        <i class="bi bi-star"></i>
                                                    </span>
                                                    <span class="star" data-value="5">
                                                        <i class="bi bi-star"></i>
                                                    </span>
                                                </div>
                                                <input type="hidden" id="selectedRating" name="rating" value="0"
                                                    required>
                                                <div class="rating-text" id="ratingText">Select your rating</div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="reviewComments">Your Review</label>
                                            <textarea class="form-control" id="reviewComments" rows="5"
                                                placeholder="Share your experience with this product..."
                                                required></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" form="reviewForm" class="btn btn-primary">Submit
                                        Review</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Care Instructions Tab -->
                    <div class="tab-pane fade" id="care" role="tabpanel">
                        <div class="tab-content-wrapper">
                            <h5>Care Instructions</h5>
                            <div class="care-instructions">
                                <div class="care-item">
                                    <div class="care-icon">
                                        <i class="bi bi-droplet"></i>
                                    </div>
                                    <div class="care-content">
                                        <h6>Avoid Water Exposure</h6>
                                        <p>Remove before bathing, swimming, or exercising to prevent tarnishing.</p>
                                    </div>
                                </div>
                                <div class="care-item">
                                    <div class="care-icon">
                                        <i class="bi bi-brush"></i>
                                    </div>
                                    <div class="care-content">
                                        <h6>Gentle Cleaning</h6>
                                        <p>Use a soft, dry cloth to clean. Avoid harsh chemicals or abrasive materials.
                                        </p>
                                    </div>
                                </div>
                                <div class="care-item">
                                    <div class="care-icon">
                                        <i class="bi bi-box"></i>
                                    </div>
                                    <div class="care-content">
                                        <h6>Proper Storage</h6>
                                        <p>Store in a cool, dry place. Use the provided pouch to prevent scratching.</p>
                                    </div>
                                </div>
                                <div class="care-item">
                                    <div class="care-icon">
                                        <i class="bi bi-exclamation-triangle"></i>
                                    </div>
                                    <div class="care-content">
                                        <h6>Chemical Precaution</h6>
                                        <p>Avoid contact with perfumes, lotions, and household cleaners.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="related-products-section">
        <div class="container">
            <h3 class="section-title">You May Also Like</h3>
            <div class="row" id="relatedProductsContainer">
                <!-- Related products will be populated via JavaScript -->
            </div>
        </div>
    </section>

    <!-- Image Zoom Modal -->
    <div class="modal fade" id="imageZoomModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" alt="Product Image" id="zoomedImage" class="img-fluid">
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