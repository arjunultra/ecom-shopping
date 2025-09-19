<header class="main-header">
    <!-- Topbar Row -->
    <div class="topbar">
        <div class="container-fluid px-lg-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 col-lg-3 topbar-left">
                    <a href="#" class="topbar-link text-violet">
                        <span class="bi bi-truck text-pink"></span>
                        Order Tracking
                    </a>
                </div>
                <div class="d-none d-md-block col-md-4 col-lg-6 topbar-center">
                    <div class="text-scroller text-violet">
                        <span class="scrolling-text text-violet">Fast shipping</span>
                        <span class="scrolling-text text-violet">New collection just launched</span>
                        <span class="scrolling-text text-violet">Sign up and get discounts on your first order</span>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 topbar-right">
                    <span class="bi bi-phone text-pink"></span>
                    <span class="topbar-phone text-violet">+91 99999 99999</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Middle Row with Search -->
    <div class="header-middle">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-md-3 col-lg-4 header-logo">
                    <a class="navbar-brand" href="index.php">
                        <img class="img-fluid" src="images/nav-logo.webp" alt="Company Logo">
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 header-search">
                    <form class="search-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for products...">
                            <div class="input-group-append">
                                <button class="btn bg-violet" type="submit">
                                    <span class="bi bi-search text-white"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-5 col-lg-4 header-actions">
                    <div class="action-items d-flex align-items-center justify-content-end">

                        <!-- Account Panel -->
                        <div class="action-item position-relative account-action">
                            <a class="account-toggle" href="#" tabindex="0">
                                <span class="bi bi-person text-dark"></span>
                                <span class="action-text text-dark">Account</span>
                            </a>
                            <div class="mini-panel mini-account-panel">
                                <a class="dropdown-item" href="profile.php"><span class="bi bi-person"></span> My
                                    Profile</a>
                                <a class="dropdown-item" href="profile.php#order-history"><span
                                        class="bi bi-bag"></span> Order
                                    History</a>
                                <a class="dropdown-item" href="profile.php#coupons"><span
                                        class="bi bi-ticket-perforated"></span> Coupons</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="logout.php"><span
                                        class="bi bi-box-arrow-right"></span> Logout</a>
                            </div>
                        </div>

                        <!-- Wishlist Panel -->
                        <a href="wishlist.php" class="action-item position-relative wishlist-action ml-3" tabindex="0">
                            <span class="bi bi-heart"></span>
                            <span class="action-text">Wishlist</span>
                            <span class="wishlist-count">3</span>
                            <div class="mini-panel mini-wishlist-panel">
                                <strong>Recently Added</strong>
                                <ul class="mini-list" id="miniWishlistList">
                                    <li>No items found.</li>
                                </ul>
                                <a href="wishlist.php" class="btn btn-link btn-sm p-0">View Wishlist</a>
                            </div>
                        </a>

                        <!-- Cart Panel -->
                        <a href="cart.php" class="action-item position-relative cart-action ml-3" tabindex="0">
                            <span class="bi bi-cart3"></span>
                            <span class="action-text">Cart</span>
                            <span class="cart-count">3</span>
                            <div class="mini-panel mini-cart-panel">
                                <strong>Cart Preview</strong>
                                <ul class="mini-list" id="miniCartList">
                                    <li>Your cart is empty.</li>
                                </ul>
                                <a href="cart.php" class="btn btn-link btn-sm p-0">View Cart</a>
                            </div>
                        </a>
                        <!-- User Profile Icon with Dropdown -->
                        <div class="action-item position-relative user-profile-action">
                            <a class="user-profile-toggle" href="#" tabindex="0" aria-label="User account">
                                <span class="bi bi-person-circle"></span>
                                <span class="action-text">Profile</span>
                            </a>
                            <div class="mini-panel mini-user-panel">
                                <a class="dropdown-item" href="login.php">
                                    <span class="bi bi-box-arrow-in-right"></span>
                                    Login
                                </a>
                                <a class="dropdown-item" href="register.php">
                                    <span class="bi bi-person-plus"></span>
                                    Register
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="profile.php">
                                    <span class="bi bi-person"></span>
                                    My Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Row with Mega Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-violet header-navigation">
        <div class="container-fluid">
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list">MENU</span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <!-- Bangles Mega Menu -->
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle" href="#" id="banglesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Bangles
                        </a>
                        <div class="dropdown-menu" aria-labelledby="banglesDropdown">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <span class="text-uppercase text-white">By Material</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" href="products.php">Gold
                                                    Bangles</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Silver
                                                    Bangles</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Diamond
                                                    Bangles</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Kundan
                                                    Bangles</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Pearl
                                                    Bangles</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <span class="text-uppercase text-white">By Style</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" href="products.php">Traditional
                                                    Bangles</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Contemporary
                                                    Bangles</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Bridal
                                                    Bangles</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Stackable
                                                    Bangles</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Cuff
                                                    Bangles</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <span class="text-uppercase text-white">By Collections</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" href="products.php">New
                                                    Arrivals</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Bestsellers</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Festival
                                                    Special</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Wedding
                                                    Collection</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Limited
                                                    Edition</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Fashion Mega Menu -->
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle" href="#" id="fashionDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion
                        </a>
                        <div class="dropdown-menu" aria-labelledby="fashionDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <span class="text-uppercase text-white">Men's Fashion</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" href="products.php">Clothing</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Shoes</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Accessories</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Watches</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <span class="text-uppercase text-white">Women's Fashion</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" href="products.php">Clothing</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Shoes</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Jewelry</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Handbags</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <span class="text-uppercase text-white">Kids' Fashion</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" href="products.php">Boys'
                                                    Clothing</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Girls'
                                                    Clothing</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Shoes</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Home & Kitchen Mega Menu -->
                    <li class="nav-item dropdown mega-menu">
                        <a class="nav-link dropdown-toggle" href="#" id="homeDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home & Kitchen
                        </a>
                        <div class="dropdown-menu" aria-labelledby="homeDropdown">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <span class="text-uppercase text-white">Furniture</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" href="products.php">Living Room</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Bedroom</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Kitchen &
                                                    Dining</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Office</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <span class="text-uppercase text-white">Appliances</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" href="products.php">Kitchen
                                                    Appliances</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Laundry</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Home
                                                    Comfort</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Cleaning</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-4">
                                        <span class="text-uppercase text-white">Decor</span>
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a class="nav-link" href="products.php">Wall Art</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Lighting</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Rugs</a></li>
                                            <li class="nav-item"><a class="nav-link" href="products.php">Decorative
                                                    Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- mobile header -->
<!-- Mobile Header - Only visible on tablet/mobile -->
<header class="mobile-header d-lg-none">
    <div class="mobile-header-container">
        <div class="mobile-header-content">
            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" type="button" data-toggle="modal" data-target="#mobileOffcanvasMenu">
                <span class="bi bi-list"></span>
            </button>

            <!-- Mobile Logo -->
            <div class="mobile-logo">
                <a href="index.php">
                    <img src="images/nav-logo.webp" alt="Company Logo" class="img-fluid">
                </a>
            </div>

            <!-- Mobile Actions -->
            <div class="mobile-actions">
                <a href="cart.php" class="mobile-cart-btn">
                    <span class="bi bi-cart3"></span>
                    <span class="cart-count">3</span>
                </a>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Offcanvas Menu Modal -->
<div class="modal fade mobile-offcanvas-modal" id="mobileOffcanvasMenu" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content">
            <!-- Mobile Menu Header -->
            <div class="modal-header mobile-offcanvas-header">
                <div class="mobile-offcanvas-logo">
                    <img src="images/nav-logo.webp" alt="Company Logo" class="img-fluid">
                </div>
                <button type="button" class="close mobile-offcanvas-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="bi bi-x"></span>
                </button>
            </div>

            <!-- Mobile Menu Body -->
            <div class="modal-body mobile-offcanvas-body">
                <!-- Search Section -->
                <div class="mobile-offcanvas-search">
                    <form class="mobile-offcanvas-search-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for products...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <span class="bi bi-search"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- User Section -->
                <div class="mobile-offcanvas-user">
                    <div class="mobile-offcanvas-user-info">
                        <div class="mobile-offcanvas-user-avatar">
                            <span class="bi bi-person-circle"></span>
                        </div>
                        <div class="mobile-offcanvas-user-details">
                            <p class="mobile-offcanvas-user-name">Welcome, Guest!</p>
                            <div class="mobile-offcanvas-user-actions">
                                <a href="login.php" class="mobile-offcanvas-user-link">Login</a>
                                <span class="mobile-offcanvas-user-separator">|</span>
                                <a href="register.php" class="mobile-offcanvas-user-link">Register</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Menu -->
                <div class="mobile-offcanvas-navigation">
                    <ul class="mobile-offcanvas-nav-list">
                        <li class="mobile-offcanvas-nav-item">
                            <a href="index.php" class="mobile-offcanvas-nav-link">
                                <div class="mobile-offcanvas-nav-main">
                                    <span class="mobile-offcanvas-nav-icon bi bi-house"></span>
                                    <span class="mobile-offcanvas-nav-text">Home</span>
                                </div>
                            </a>
                        </li>
                        <li class="mobile-offcanvas-nav-item">
                            <a href="about.php" class="mobile-offcanvas-nav-link">
                                <div class="mobile-offcanvas-nav-main">
                                    <span class="mobile-offcanvas-nav-icon bi bi-info-circle"></span>
                                    <span class="mobile-offcanvas-nav-text">About</span>
                                </div>
                            </a>
                        </li>

                        <!-- Bangles Expandable Menu -->
                        <li class="mobile-offcanvas-nav-item mobile-offcanvas-nav-expandable">
                            <a href="#" class="mobile-offcanvas-nav-link mobile-offcanvas-nav-toggle"
                                data-target="banglesOffcanvasSubmenu">
                                <div class="mobile-offcanvas-nav-main">
                                    <span class="mobile-offcanvas-nav-icon bi bi-circle"></span>
                                    <span class="mobile-offcanvas-nav-text">Bangles</span>
                                </div>
                                <span class="mobile-offcanvas-nav-arrow bi bi-chevron-down"></span>
                            </a>
                            <ul class="mobile-offcanvas-nav-submenu" id="banglesOffcanvasSubmenu">
                                <li class="mobile-offcanvas-submenu-category">
                                    <span class="mobile-offcanvas-submenu-title">By Material</span>
                                    <ul class="mobile-offcanvas-submenu-items">
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Gold
                                                Bangles</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Silver
                                                Bangles</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Diamond
                                                Bangles</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Kundan
                                                Bangles</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Pearl
                                                Bangles</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-offcanvas-submenu-category">
                                    <span class="mobile-offcanvas-submenu-title">By Style</span>
                                    <ul class="mobile-offcanvas-submenu-items">
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Traditional
                                                Bangles</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Contemporary
                                                Bangles</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Bridal
                                                Bangles</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Stackable
                                                Bangles</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Cuff
                                                Bangles</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-offcanvas-submenu-category">
                                    <span class="mobile-offcanvas-submenu-title">By Collections</span>
                                    <ul class="mobile-offcanvas-submenu-items">
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">New
                                                Arrivals</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Bestsellers</a>
                                        </li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Festival
                                                Special</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Wedding
                                                Collection</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Limited
                                                Edition</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Fashion Expandable Menu -->
                        <li class="mobile-offcanvas-nav-item mobile-offcanvas-nav-expandable">
                            <a href="#" class="mobile-offcanvas-nav-link mobile-offcanvas-nav-toggle"
                                data-target="fashionOffcanvasSubmenu">
                                <div class="mobile-offcanvas-nav-main">
                                    <span class="mobile-offcanvas-nav-icon bi bi-bag"></span>
                                    <span class="mobile-offcanvas-nav-text">Fashion</span>
                                </div>
                                <span class="mobile-offcanvas-nav-arrow bi bi-chevron-down"></span>
                            </a>
                            <ul class="mobile-offcanvas-nav-submenu" id="fashionOffcanvasSubmenu">
                                <li class="mobile-offcanvas-submenu-category">
                                    <span class="mobile-offcanvas-submenu-title">Men's Fashion</span>
                                    <ul class="mobile-offcanvas-submenu-items">
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Clothing</a>
                                        </li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Shoes</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Accessories</a>
                                        </li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Watches</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mobile-offcanvas-submenu-category">
                                    <span class="mobile-offcanvas-submenu-title">Women's Fashion</span>
                                    <ul class="mobile-offcanvas-submenu-items">
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Clothing</a>
                                        </li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Shoes</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Jewelry</a>
                                        </li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Handbags</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mobile-offcanvas-submenu-category">
                                    <span class="mobile-offcanvas-submenu-title">Kids' Fashion</span>
                                    <ul class="mobile-offcanvas-submenu-items">
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Boys'
                                                Clothing</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Girls'
                                                Clothing</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Shoes</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Accessories</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Home & Kitchen Expandable Menu -->
                        <li class="mobile-offcanvas-nav-item mobile-offcanvas-nav-expandable">
                            <a href="#" class="mobile-offcanvas-nav-link mobile-offcanvas-nav-toggle"
                                data-target="homeOffcanvasSubmenu">
                                <div class="mobile-offcanvas-nav-main">
                                    <span class="mobile-offcanvas-nav-icon bi bi-house-door"></span>
                                    <span class="mobile-offcanvas-nav-text">Home & Kitchen</span>
                                </div>
                                <span class="mobile-offcanvas-nav-arrow bi bi-chevron-down"></span>
                            </a>
                            <ul class="mobile-offcanvas-nav-submenu" id="homeOffcanvasSubmenu">
                                <li class="mobile-offcanvas-submenu-category">
                                    <span class="mobile-offcanvas-submenu-title">Furniture</span>
                                    <ul class="mobile-offcanvas-submenu-items">
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Living Room</a>
                                        </li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Bedroom</a>
                                        </li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Kitchen &
                                                Dining</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Office</a></li>
                                    </ul>
                                </li>
                                <li class="mobile-offcanvas-submenu-category">
                                    <span class="mobile-offcanvas-submenu-title">Appliances</span>
                                    <ul class="mobile-offcanvas-submenu-items">
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Kitchen
                                                Appliances</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Laundry</a>
                                        </li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Home
                                                Comfort</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Cleaning</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mobile-offcanvas-submenu-category">
                                    <span class="mobile-offcanvas-submenu-title">Decor</span>
                                    <ul class="mobile-offcanvas-submenu-items">
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Wall Art</a>
                                        </li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Lighting</a>
                                        </li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Rugs</a></li>
                                        <li><a href="products.php" class="mobile-offcanvas-submenu-link">Decorative
                                                Accessories</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="mobile-offcanvas-nav-item">
                            <a href="contact.php" class="mobile-offcanvas-nav-link">
                                <div class="mobile-offcanvas-nav-main">
                                    <span class="mobile-offcanvas-nav-icon bi bi-telephone"></span>
                                    <span class="mobile-offcanvas-nav-text">Contact</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Quick Actions -->
                <div class="mobile-offcanvas-quick-actions">
                    <div class="row">
                        <div class="col-3">
                            <a href="profile.php" class="mobile-offcanvas-quick-action">
                                <span class="mobile-offcanvas-quick-icon bi bi-person"></span>
                                <span class="mobile-offcanvas-quick-text">Profile</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="wishlist.php" class="mobile-offcanvas-quick-action">
                                <span class="mobile-offcanvas-quick-icon bi bi-heart"></span>
                                <span class="mobile-offcanvas-quick-text">Wishlist</span>
                                <span class="mobile-offcanvas-quick-badge">3</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="cart.php" class="mobile-offcanvas-quick-action">
                                <span class="mobile-offcanvas-quick-icon bi bi-cart3"></span>
                                <span class="mobile-offcanvas-quick-text">Cart</span>
                                <span class="mobile-offcanvas-quick-badge">3</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#" class="mobile-offcanvas-quick-action">
                                <span class="mobile-offcanvas-quick-icon bi bi-truck"></span>
                                <span class="mobile-offcanvas-quick-text">Track</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Footer -->
            <div class="modal-footer mobile-offcanvas-footer">
                <div class="mobile-offcanvas-footer-info">
                    <div class="mobile-offcanvas-footer-contact">
                        <span class="bi bi-phone"></span>
                        <span>+91 99999 99999</span>
                    </div>
                    <div class="mobile-offcanvas-footer-email">
                        <span class="bi bi-envelope"></span>
                        <span>support@smileshop.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- search dropdown modal -->
<!-- Search Modal -->
<div class="modal fade search-modal" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Search Modal Header -->
            <div class="modal-header search-modal-header">
                <div class="search-modal-input-container">
                    <span class="search-modal-icon bi bi-search"></span>
                    <input type="text" class="form-control search-modal-input" id="searchModalInput"
                        placeholder="Search for bangles, jewelry, fashion..." autocomplete="off">
                    <button type="button" class="search-modal-clear" id="searchClearBtn" style="display: none;">
                        <span class="bi bi-x"></span>
                    </button>
                </div>
                <button type="button" class="close search-modal-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="bi bi-x"></span>
                </button>
            </div>

            <!-- Search Modal Body -->
            <div class="modal-body search-modal-body">
                <!-- Popular Searches (shown initially) -->
                <div class="search-popular-section" id="popularSearchSection">
                    <h6 class="search-section-title">Popular Searches</h6>
                    <div class="search-popular-tags">
                        <span class="search-popular-tag" data-search="gold bangles">Gold Bangles</span>
                        <span class="search-popular-tag" data-search="diamond earrings">Diamond Earrings</span>
                        <span class="search-popular-tag" data-search="silver jewelry">Silver Jewelry</span>
                        <span class="search-popular-tag" data-search="wedding collection">Wedding Collection</span>
                        <span class="search-popular-tag" data-search="kundan necklace">Kundan Necklace</span>
                        <span class="search-popular-tag" data-search="pearl sets">Pearl Sets</span>
                        <span class="search-popular-tag" data-search="traditional bangles">Traditional Bangles</span>
                        <span class="search-popular-tag" data-search="bridal jewelry">Bridal Jewelry</span>
                    </div>
                </div>

                <!-- Recent Searches -->
                <div class="search-recent-section" id="recentSearchSection" style="display: none;">
                    <div class="search-section-header">
                        <h6 class="search-section-title">Recent Searches</h6>
                        <button class="search-clear-recent" id="clearRecentBtn">Clear All</button>
                    </div>
                    <div class="search-recent-list" id="recentSearchList">
                        <!-- Recent searches will be populated by JS -->
                    </div>
                </div>

                <!-- Search Results -->
                <div class="search-results-section" id="searchResultsSection" style="display: none;">
                    <div class="search-results-header">
                        <h6 class="search-section-title" id="searchResultsTitle">Search Results</h6>
                        <span class="search-results-count" id="searchResultsCount"></span>
                    </div>

                    <!-- Loading State -->
                    <div class="search-loading" id="searchLoading" style="display: none;">
                        <div class="search-loading-spinner">
                            <div class="spinner-border spinner-border-sm text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <span class="search-loading-text">Searching products...</span>
                        </div>
                    </div>

                    <!-- Search Results List -->
                    <div class="search-results-list" id="searchResultsList">
                        <!-- Results will be populated by JS -->
                    </div>

                    <!-- No Results -->
                    <div class="search-no-results" id="searchNoResults" style="display: none;">
                        <div class="search-no-results-icon">
                            <span class="bi bi-search"></span>
                        </div>
                        <h6 class="search-no-results-title">No products found</h6>
                        <p class="search-no-results-text">Try searching with different keywords or browse our categories
                        </p>
                        <div class="search-suggestions">
                            <p class="search-suggestions-title">You might be interested in:</p>
                            <div class="search-suggestion-tags">
                                <span class="search-suggestion-tag" data-search="bangles">Bangles</span>
                                <span class="search-suggestion-tag" data-search="earrings">Earrings</span>
                                <span class="search-suggestion-tag" data-search="necklaces">Necklaces</span>
                                <span class="search-suggestion-tag" data-search="rings">Rings</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Modal Footer -->
            <div class="modal-footer search-modal-footer">
                <div class="search-footer-info">
                    <span class="search-footer-tip">
                        <span class="bi bi-lightbulb"></span>
                        Tip: Use specific keywords like "gold bangles" or "diamond earrings" for better results
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>