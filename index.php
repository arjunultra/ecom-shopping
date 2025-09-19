<?php $page = "home"; ?>
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
	<section class="single-image-carousel">
		<div id="mainCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
			<!-- Slides -->
			<div class="carousel-inner">
				<!-- Slide 1 -->
				<div class="carousel-item active">
					<img src="images/slide-1.webp" alt="Fireworks Promotion" class="d-block w-100 carousel-image">
				</div>

				<!-- Slide 2 -->
				<div class="carousel-item">
					<img src="images/slide-2.webp" alt="Retail Fireworks" class="d-block w-100 carousel-image">
				</div>
			</div>

			<!-- Controls -->
			<a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>
	<!-- categories section -->
	<section class="products-categories-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 section-header">
					<h2 class="section-title">Our Product Categories</h2>
					<p class="section-subtitle">Discover our exquisite collection of women's accessories</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="swiper-container products-categories-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide category-slide">
								<div class="category-card">
									<div class="category-image">
										<img src="images/bangles.webp" alt="Bangles" class="img-fluid">
										<div class="category-overlay"></div>
									</div>
									<div class="category-content">
										<h3 class="category-title">Bangles</h3>
										<p class="category-description">Traditional and contemporary designs for every
											occasion</p>
										<a href="products.php" class="category-btn">Explore Collection</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide category-slide">
								<div class="category-card">
									<div class="category-image">
										<img src="images/earings.webp" alt="Earrings" class="img-fluid">
										<div class="category-overlay"></div>
									</div>
									<div class="category-content">
										<h3 class="category-title">Earrings</h3>
										<p class="category-description">Elegant designs from studs to statement pieces
										</p>
										<a href="products.php" class="category-btn">Explore Collection</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide category-slide">
								<div class="category-card">
									<div class="category-image">
										<img src="images/pendants.webp" alt="Pendants" class="img-fluid">
										<div class="category-overlay"></div>
									</div>
									<div class="category-content">
										<h3 class="category-title">Pendants</h3>
										<p class="category-description">Beautiful pendants that complement your style
										</p>
										<a href="products.php" class="category-btn">Explore Collection</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide category-slide">
								<div class="category-card">
									<div class="category-image">
										<img src="images/necklaces.webp" alt="Necklaces" class="img-fluid">
										<div class="category-overlay"></div>
									</div>
									<div class="category-content">
										<h3 class="category-title">Necklaces</h3>
										<p class="category-description">From delicate chains to elaborate statement
											pieces</p>
										<a href="products.php" class="category-btn">Explore Collection</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide category-slide">
								<div class="category-card">
									<div class="category-image">
										<img src="images/rings.webp" alt="Rings" class="img-fluid">
										<div class="category-overlay"></div>
									</div>
									<div class="category-content">
										<h3 class="category-title">Rings</h3>
										<p class="category-description">Exquisite rings for every finger and occasion
										</p>
										<a href="products.php" class="category-btn">Explore Collection</a>
									</div>
								</div>
							</div>
							<div class="swiper-slide category-slide">
								<div class="category-card">
									<div class="category-image">
										<img src="images/anklets.webp" alt="Anklets" class="img-fluid">
										<div class="category-overlay"></div>
									</div>
									<div class="category-content">
										<h3 class="category-title">Anklets</h3>
										<p class="category-description">Traditional and modern designs for your feet</p>
										<a href="products.php" class="category-btn">Explore Collection</a>
									</div>
								</div>
							</div>
						</div>
						<div class="products-categories-swiper-prev swiper-button-prev">
							<i class="bi bi-chevron-left"></i>
						</div>
						<div class="products-categories-swiper-next swiper-button-next">
							<i class="bi bi-chevron-right"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- trending products -->
	<section class="trending-products-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 section-header">
					<h2 class="section-title">Trending Now</h2>
					<p class="section-subtitle">Our most popular women's accessories</p>
				</div>
			</div>
			<div class="row">
				<!-- Product Card 1 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/gold-plated-bangles.webp" alt="Gold Plated Bangles" class="img-fluid">
							<div class="product-badge">Trending</div>
							<div class="product-actions">
								<a href="wishlist.php" class="action-btn wishlist-btn" title="Add to Wishlist">
									<span class="bi bi-heart"></span>
								</a>
								<a href="cart.php" class="action-btn cart-btn" title="Add to Cart">
									<span class="bi bi-cart3"></span>
								</a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Gold Plated Bangles</h3>
							<div class="product-rating">
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-half"></span>
								<span class="rating-count">(42)</span>
							</div>
							<div class="product-price">
								<span class="current-price">₹1,299</span>
								<span class="original-price">₹1,899</span>
								<span class="discount">32% off</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Product Card 2 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/diamond-stud-earrings.webp" alt="Diamond Stud Earrings" class="img-fluid">
							<div class="product-badge">New</div>
							<div class="product-actions">
								<a href="wishlist.php" class="action-btn wishlist-btn" title="Add to Wishlist">
									<span class="bi bi-heart"></span>
								</a>
								<a href="cart.php" class="action-btn cart-btn" title="Add to Cart">
									<span class="bi bi-cart3"></span>
								</a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Diamond Stud Earrings</h3>
							<div class="product-rating">
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="rating-count">(89)</span>
							</div>
							<div class="product-price">
								<span class="current-price">₹2,499</span>
								<span class="original-price">₹3,499</span>
								<span class="discount">29% off</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Product Card 3 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/pearl-pendant-set.webp" alt="Pearl Pendant Set" class="img-fluid">
							<div class="product-badge bg-danger text-white">Out of Stock</div>
							<div class="product-actions">
								<a href="wishlist.php" class="action-btn wishlist-btn" title="Add to Wishlist">
									<span class="bi bi-heart"></span>
								</a>
								<a href="cart.php" class="action-btn cart-btn" title="Add to Cart">
									<span class="bi bi-cart3"></span>
								</a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Pearl Pendant Set</h3>
							<div class="product-rating">
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star"></span>
								<span class="rating-count">(35)</span>
							</div>
							<div class="product-price">
								<span class="current-price">₹1,899</span>
								<span class="original-price">₹2,599</span>
								<span class="discount">27% off</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Product Card 4 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/kundan-necklace-set.webp" alt="Kundan Necklace Set" class="img-fluid">
							<div class="product-badge">Limited</div>
							<div class="product-actions">
								<a href="wishlist.php" class="action-btn wishlist-btn" title="Add to Wishlist">
									<span class="bi bi-heart"></span>
								</a>
								<a href="cart.php" class="action-btn cart-btn" title="Add to Cart">
									<span class="bi bi-cart3"></span>
								</a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Kundan Necklace Set</h3>
							<div class="product-rating">
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-half"></span>
								<span class="bi bi-star"></span>
								<span class="rating-count">(28)</span>
							</div>
							<div class="product-price">
								<span class="current-price">₹3,999</span>
								<span class="original-price">₹5,499</span>
								<span class="discount">27% off</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Product Card 5 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/silver-ring.webp" alt="Silver Cocktail Ring" class="img-fluid">
							<div class="product-badge">Trending</div>
							<div class="product-actions">
								<a href="wishlist.php" class="action-btn wishlist-btn" title="Add to Wishlist">
									<span class="bi bi-heart"></span>
								</a>
								<a href="cart.php" class="action-btn cart-btn" title="Add to Cart">
									<span class="bi bi-cart3"></span>
								</a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Silver Cocktail Ring</h3>
							<div class="product-rating">
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star"></span>
								<span class="rating-count">(47)</span>
							</div>
							<div class="product-price">
								<span class="current-price">₹899</span>
								<span class="original-price">₹1,299</span>
								<span class="discount">31% off</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Product Card 6 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/traditional-anklets.webp" alt="Traditional Anklets" class="img-fluid">
							<div class="product-badge">New</div>
							<div class="product-actions">
								<a href="wishlist.php" class="action-btn wishlist-btn" title="Add to Wishlist">
									<span class="bi bi-heart"></span>
								</a>
								<a href="cart.php" class="action-btn cart-btn" title="Add to Cart">
									<span class="bi bi-cart3"></span>
								</a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Traditional Anklets</h3>
							<div class="product-rating">
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-half"></span>
								<span class="rating-count">(33)</span>
							</div>
							<div class="product-price">
								<span class="current-price">₹1,199</span>
								<span class="original-price">₹1,699</span>
								<span class="discount">29% off</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Product Card 7 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/oxidized-silver-bangles.webp" alt="Oxidized Silver Bangles"
								class="img-fluid">
							<div class="product-badge">Bestseller</div>
							<div class="product-actions">
								<a href="wishlist.php" class="action-btn wishlist-btn" title="Add to Wishlist">
									<span class="bi bi-heart"></span>
								</a>
								<a href="cart.php" class="action-btn cart-btn" title="Add to Cart">
									<span class="bi bi-cart3"></span>
								</a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Oxidized Silver Bangles</h3>
							<div class="product-rating">
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="rating-count">(56)</span>
							</div>
							<div class="product-price">
								<span class="current-price">₹1,599</span>
								<span class="original-price">₹2,199</span>
								<span class="discount">27% off</span>
							</div>
						</div>
					</div>
				</div>

				<!-- Product Card 8 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/jhumka-earrings.webp" alt="Jhumka Earrings" class="img-fluid">
							<div class="product-badge">Limited</div>
							<div class="product-actions">
								<a href="wishlist.php" class="action-btn wishlist-btn" title="Add to Wishlist">
									<span class="bi bi-heart"></span>
								</a>
								<a href="cart.php" class="action-btn cart-btn" title="Add to Cart">
									<span class="bi bi-cart3"></span>
								</a>
							</div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Jhumka Earrings</h3>
							<div class="product-rating">
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-fill"></span>
								<span class="bi bi-star-half"></span>
								<span class="rating-count">(41)</span>
							</div>
							<div class="product-price">
								<span class="current-price">₹1,799</span>
								<span class="original-price">₹2,499</span>
								<span class="discount">28% off</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- bangles swiper -->
	<section class="bangles-section">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-12 col-md-12 col-lg-5 bangles-content">
					<h2 class="bangles-title">Exquisite Bangles Collection</h2>
					<p class="bangles-subtitle">Timeless elegance for every occasion</p>
					<p class="bangles-description">Discover our stunning collection of handcrafted bangles that blend
						traditional craftsmanship with contemporary designs. Made with premium materials and meticulous
						attention to detail, our bangles are perfect for weddings, festivals, or everyday elegance.</p>
					<ul class="bangles-features">
						<li><span class="feature-icon">✓</span> Gold & Silver Plated Options</li>
						<li><span class="feature-icon">✓</span> Traditional & Modern Designs</li>
						<li><span class="feature-icon">✓</span> Comfort Fit for All-Day Wear</li>
						<li><span class="feature-icon">✓</span> Perfect for Gifting</li>
					</ul>
					<div class="bangles-cta">
						<a href="products.php" class="btn btn-primary btn-lg">Shop Collection</a>
						<a href="contact.php" class="btn btn-outline-light btn-lg">Contact Us</a>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-7 bangles-slider">
					<div class="swiper-container bangles-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="images/bangles.webp" alt="Gold Temple Bangles">
								<div class="slide-caption">Gold Temple Bangles</div>
							</div>
							<div class="swiper-slide">
								<img src="images/bangles-1.webp" alt="Diamond Studded Bangles">
								<div class="slide-caption">Diamond Studded Bangles</div>
							</div>
							<div class="swiper-slide">
								<img src="images/bangles-2.webp" alt="Oxidized Silver Bangles">
								<div class="slide-caption">Oxidized Silver Bangles</div>
							</div>
							<div class="swiper-slide">
								<img src="images/bangles-3.webp" alt="Kundan Work Bangles">
								<div class="slide-caption">Kundan Work Bangles</div>
							</div>
							<div class="swiper-slide">
								<img src="images/bangles-4.webp" alt="Pearl Embedded Bangles">
								<div class="slide-caption">Pearl Embedded Bangles</div>
							</div>
							<div class="swiper-slide">
								<img src="images/stone-bangle.webp" alt="Colored Stone Bangles">
								<div class="slide-caption">Colored Stone Bangles</div>
							</div>
						</div>
						<div class="swiper-pagination"></div>
						<div class="swiper-button-next">
							<i class="bi bi-chevron-right"></i>
						</div>
						<div class="swiper-button-prev">
							<i class="bi bi-chevron-left"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- recently added products -->
	<section class="recently-added-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 section-header">
					<h2 class="section-title">Recently Added Products</h2>
					<p class="section-subtitle">Discover our latest arrivals in women's accessories</p>
				</div>
			</div>
			<div class="row">
				<!-- Product Card 1 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/bangles.webp" alt="Gold Temple Bangles" class="img-fluid">
							<div class="product-overlay"></div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Gold Temple Bangles</h3>
							<p class="product-description">Traditional temple design with intricate carvings. Perfect
								for weddings and special occasions.</p>
							<div class="add-to-cart-container d-flex">
								<button class="add-to-cart-btn" onclick="window.location.href='cart.php'">
									<span class="btn-layer layer-1">Add to Cart</span>
									<span class="btn-layer layer-2">Add Now</span>
									<span class="btn-layer layer-3">✓Added</span>
								</button>
								<button class="wishlist-btn" aria-label="Add to wishlist"
									onclick="window.location.href='wishlist.php'">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Product Card 2 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/jhumka-earrings.webp" alt="Diamond Jhumka Earrings" class="img-fluid">
							<div class="product-overlay"></div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Diamond Jhumka Earrings</h3>
							<p class="product-description">Elegant jhumka design with real diamonds. Lightweight and
								comfortable for all-day wear.</p>
							<div class="add-to-cart-container d-flex">
								<button class="add-to-cart-btn" onclick="window.location.href='cart.php'">
									<span class="btn-layer layer-1">Add to Cart</span>
									<span class="btn-layer layer-2">Add Now</span>
									<span class="btn-layer layer-3">✓</span>
								</button>
								<button class="wishlist-btn" aria-label="Add to wishlist"
									onclick="window.location.href='wishlist.php'">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Product Card 3 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/necklaces.webp" alt="Kundan Necklace Set" class="img-fluid">
							<div class="product-overlay"></div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Kundan Necklace Set</h3>
							<p class="product-description">Exquisite kundan work with colorful stones. Complete set
								includes necklace and matching earrings.</p>
							<div class="add-to-cart-container d-flex">
								<button class="add-to-cart-btn" onclick="window.location.href='cart.php'">
									<span class="btn-layer layer-1">Add to Cart</span>
									<span class="btn-layer layer-2">Add Now</span>
									<span class="btn-layer layer-3">✓</span>
								</button>
								<button class="wishlist-btn" aria-label="Add to wishlist"
									onclick="window.location.href='wishlist.php'">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- Product Card 4 -->
				<div class="col-12 col-md-6 col-lg-3 product-card-wrapper">
					<div class="product-card">
						<div class="product-image">
							<img src="images/silver-ring.webp" alt="Emerald Cocktail Ring" class="img-fluid">
							<div class="product-overlay"></div>
						</div>
						<div class="product-content">
							<h3 class="product-title">Silver Cocktail Ring</h3>
							<p class="product-description">Statement ring with genuine silver stone. Perfect for
								parties and evening events.</p>
							<div class="add-to-cart-container d-flex">
								<button class="add-to-cart-btn" onclick="window.location.href='cart.php'">
									<span class="btn-layer layer-1">Add to Cart</span>
									<span class="btn-layer layer-2">Add Now</span>
									<span class="btn-layer layer-3">✓</span>
								</button>
								<button class="wishlist-btn" aria-label="Add to wishlist"
									onclick="window.location.href='wishlist.php'">
									<i class="bi bi-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-us-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-6 col-lg-6 about-content">
					<h1 class="about-title">Who We Are</h1>
					<img src="images/ecom-logo.jpg" alt="Smile Shop Logo" class="about-logo img-fluid">
					<p class="about-description">Welcome to Smile Shop, your premier destination for exquisite
						women's accessories. We specialize in handcrafted bangles, earrings, pendants, necklaces, rings,
						and anklets that blend traditional craftsmanship with contemporary designs. Our collection
						features premium materials and meticulous attention to detail, ensuring each piece is a work of
						art. We're committed to quality, affordability, and exceptional customer service with free
						shipping on orders above ₹500.</p>
				</div>
				<div class="col-12 col-md-6 col-lg-6 about-stack">
					<div class="swiper-container mySwiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide product-card">
								<img src="images/bangles-1.webp" alt="Gold Plated Bangles" class="img-fluid">
								<div class="product-card-overlay">
									<button class="product-action-btn add-to-cart-btn-sm" aria-label="Add to cart">
										<i class="bi bi-cart-plus"></i>
									</button>
									<button class="product-action-btn wishlist-btn-sm" aria-label="Add to wishlist">
										<i class="bi bi-bag-heart"></i>
									</button>
								</div>
							</div>
							<div class="swiper-slide product-card">
								<img src="images/bangles-2.webp" alt="Diamond Stud Earrings" class="img-fluid">
								<div class="product-card-overlay">
									<button class="product-action-btn add-to-cart-btn-sm" aria-label="Add to cart">
										<i class="bi bi-cart-plus"></i>
									</button>
									<button class="product-action-btn wishlist-btn-sm" aria-label="Add to wishlist">
										<i class="bi bi-bag-heart"></i>
									</button>
								</div>
							</div>
							<div class="swiper-slide product-card">
								<img src="images/bangles-3.webp" alt="Pearl Pendant Set" class="img-fluid">
								<div class="product-card-overlay">
									<button class="product-action-btn add-to-cart-btn-sm" aria-label="Add to cart">
										<i class="bi bi-cart-plus"></i>
									</button>
									<button class="product-action-btn wishlist-btn-sm" aria-label="Add to wishlist">
										<i class="bi bi-bag-heart"></i>
									</button>
								</div>
							</div>
							<div class="swiper-slide product-card">
								<img src="images/bangles-4.webp" alt="Kundan Necklace Set" class="img-fluid">
								<div class="product-card-overlay">
									<button class="product-action-btn add-to-cart-btn-sm" aria-label="Add to cart">
										<i class="bi bi-cart-plus"></i>
									</button>
									<button class="product-action-btn wishlist-btn-sm" aria-label="Add to wishlist">
										<i class="bi bi-bag-heart"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="swiper-pagination"></div>
						<div class="swiper-button-next">
							<i class="bi bi-chevron-right"></i>
						</div>
						<div class="swiper-button-prev">
							<i class="bi bi-chevron-left"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- why choose -->
	<section class="why-choose-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 section-header">
					<h2 class="section-title">Why Choose Us</h2>
					<p class="section-subtitle">Experience the perfect shopping journey with our exceptional services
					</p>
				</div>
			</div>
			<div class="row">
				<!-- Feature 1: Best Prices & Offers -->
				<div class="col-12 col-md-6 col-lg-3 feature-card-wrapper">
					<div class="feature-card">
						<div class="feature-icon">
							<img src="images/best-price.png" alt="Best Prices & Offers" class="img-fluid">
						</div>
						<h3 class="feature-title">Best Prices & Offers</h3>
						<p class="feature-description">Enjoy unbeatable prices and exclusive discounts on all our
							products.</p>
					</div>
				</div>

				<!-- Feature 2: Fast Delivery -->
				<div class="col-12 col-md-6 col-lg-3 feature-card-wrapper">
					<div class="feature-card">
						<div class="feature-icon">
							<img src="images/express-delivery.png" alt="Fast Delivery" class="img-fluid">
						</div>
						<h3 class="feature-title">Fast Delivery</h3>
						<p class="feature-description">Get your orders delivered quickly with our express shipping
							service.</p>
					</div>
				</div>

				<!-- Feature 3: Great Daily Deals -->
				<div class="col-12 col-md-6 col-lg-3 feature-card-wrapper">
					<div class="feature-card">
						<div class="feature-icon">
							<img src="images/best-deal.png" alt="Great Daily Deals" class="img-fluid">
						</div>
						<h3 class="feature-title">Great Daily Deals</h3>
						<p class="feature-description">Discover amazing deals and special offers updated daily just for
							you.</p>
					</div>
				</div>

				<!-- Feature 4: Multiple Payment Options -->
				<div class="col-12 col-md-6 col-lg-3 feature-card-wrapper">
					<div class="feature-card">
						<div class="feature-icon">
							<img src="images/payment-method.png" alt="Multiple Payment Options" class="img-fluid">
						</div>
						<h3 class="feature-title">Multiple Payment Options</h3>
						<p class="feature-description">Pay with your preferred method - credit card, UPI, or cash on
							delivery.</p>
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