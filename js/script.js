document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector(".main-header");
  const body = document.body;
  const scrollingTexts = document.querySelectorAll(".scrolling-text");
  let lastScrollTop = 0;

  if (!header) return;

  const headerHeight = header.offsetHeight;

  // Function to reset text scroller animations
  function resetTextScrollerAnimations() {
    scrollingTexts.forEach((text, index) => {
      // Remove animation temporarily
      text.style.animation = "none";

      // Force reflow
      text.offsetHeight;

      // Restore animation with proper delays
      const delay = index * 5; // 5s delay between each text
      text.style.animation = `scrollText 15s infinite`;
      text.style.animationDelay = `${delay}s`;
    });
  }

  function handleScroll() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const scrollThreshold = 100;

    const isScrollingUp = scrollTop < lastScrollTop;
    lastScrollTop = scrollTop;

    if (scrollTop > scrollThreshold) {
      if (!header.classList.contains("sticky")) {
        header.classList.add("sticky");
        body.classList.add("sticky-header-active");
        const stickyHeaderHeight = header.offsetHeight - 40;
        body.style.paddingTop = stickyHeaderHeight + "px";
      }
    } else {
      if (header.classList.contains("sticky")) {
        header.classList.remove("sticky");
        body.classList.remove("sticky-header-active");
        body.style.paddingTop = "0";

        // Reset text scroller animations when returning to top
        setTimeout(() => {
          resetTextScrollerAnimations();
        }, 100); // Small delay to ensure DOM is ready
      }
    }
  }

  let ticking = false;
  function requestTick() {
    if (!ticking) {
      requestAnimationFrame(function () {
        handleScroll();
        ticking = false;
      });
      ticking = true;
    }
  }

  window.addEventListener("scroll", requestTick);

  window.addEventListener("resize", function () {
    if (header.classList.contains("sticky")) {
      const stickyHeaderHeight = header.offsetHeight;
      body.style.paddingTop = stickyHeaderHeight + "px";
    }
  });

  // Initialize text scroller on page load
  resetTextScrollerAnimations();
});

// categories swiper
document.addEventListener("DOMContentLoaded", function () {
  // Initialize Swiper with custom animation
  if (typeof Swiper !== "undefined") {
    const categoriesSwiper = new Swiper(".products-categories-swiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        576: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
        1200: {
          slidesPerView: 5,
          spaceBetween: 40,
        },
      },
      on: {
        init: function () {
          // Add initial animation
          animateSlides(this);
        },
        slideChange: function () {
          // Animate slides on change
          animateSlides(this);
        },
        touchStart: function () {
          // Pause autoplay on touch
          this.autoplay.stop();
        },
        touchEnd: function () {
          // Resume autoplay after touch
          setTimeout(() => {
            this.autoplay.start();
          }, 2000);
        },
      },
    });

    // Function to animate slides
    function animateSlides(swiper) {
      // Reset all animations
      swiper.slides.forEach((slide) => {
        slide.style.opacity = "0.7";
        slide.style.transform = "scale(0.95) translateY(20px)";
      });

      // Animate active slide
      const activeSlide = swiper.slides[swiper.activeIndex];
      if (activeSlide) {
        setTimeout(() => {
          activeSlide.style.opacity = "1";
          activeSlide.style.transform = "scale(1) translateY(0)";
        }, 100);
      }

      // Animate next slide
      const nextSlide = swiper.slides[swiper.activeIndex + 1];
      if (nextSlide) {
        setTimeout(() => {
          nextSlide.style.opacity = "0.8";
          nextSlide.style.transform = "scale(0.98) translateY(10px)";
        }, 200);
      }

      // Animate previous slide
      const prevSlide = swiper.slides[swiper.activeIndex - 1];
      if (prevSlide) {
        setTimeout(() => {
          prevSlide.style.opacity = "0.8";
          prevSlide.style.transform = "scale(0.98) translateY(10px)";
        }, 200);
      }
    }

    // Add hover effect for category cards
    const categoryCards = document.querySelectorAll(".category-card");
    categoryCards.forEach((card) => {
      card.addEventListener("mouseenter", function () {
        this.style.transform = "translateY(-15px) scale(1.02)";
      });

      card.addEventListener("mouseleave", function () {
        this.style.transform = "translateY(0) scale(1)";
      });
    });
  }
});

// about index section
// document.addEventListener("DOMContentLoaded", function () {
//   // Initialize Swiper with cards effect and slower animation
//   var swiper = new Swiper(".about-us-section .mySwiper", {
//     effect: "cards",
//     grabCursor: true,
//     loop: true,
//     autoplay: {
//       delay: 3000, // Increased from 3000 to 5000ms (5 seconds)
//       disableOnInteraction: false,
//       waitForTransition: true, // Wait for transition to complete
//     },
//     speed: 2000, // Increased from default 300ms to 1200ms for slower transition
//     pagination: {
//       el: ".about-us-section .swiper-pagination",
//       clickable: true,
//     },
//     navigation: {
//       nextEl: ".about-us-section .swiper-button-next",
//       prevEl: ".about-us-section .swiper-button-prev",
//     },
//   });
// });
document.addEventListener("DOMContentLoaded", function () {
  // Check if the about us section exists before initializing Swiper
  const aboutSection = document.querySelector(".about-us-section");

  if (!aboutSection) {
    return; // Exit if section doesn't exist
  }

  // Initialize Swiper with cards effect and smooth transitions
  var aboutSwiper = new Swiper(".about-us-section .mySwiper", {
    effect: "cards",
    grabCursor: true,
    loop: true,
    speed: 800,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
      waitForTransition: true,
    },
    pagination: {
      el: ".about-us-section .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".about-us-section .swiper-button-next",
      prevEl: ".about-us-section .swiper-button-prev",
    },
  });

  // Add smooth transition for navigation buttons
  const nextButton = aboutSection.querySelector(".swiper-button-next");
  const prevButton = aboutSection.querySelector(".swiper-button-prev");

  if (nextButton) {
    nextButton.addEventListener("click", function (e) {
      e.preventDefault();
      aboutSwiper.slideNext();
    });
  }

  if (prevButton) {
    prevButton.addEventListener("click", function (e) {
      e.preventDefault();
      aboutSwiper.slidePrev();
    });
  }

  // Add smooth transition for pagination bullets
  const paginationBullets = aboutSection.querySelectorAll(
    ".swiper-pagination-bullet"
  );
  paginationBullets.forEach((bullet, index) => {
    bullet.addEventListener("click", function (e) {
      e.preventDefault();
      aboutSwiper.slideToLoop(index);
    });
  });
});
// bangles swiper
document.addEventListener("DOMContentLoaded", function () {
  // Check if the bangles section exists before initializing Swiper
  const banglesSection = document.querySelector(".bangles-section");

  if (!banglesSection) {
    return; // Exit if section doesn't exist
  }

  // Initialize Swiper for the bangles section only
  var banglesSwiper = new Swiper(".bangles-section .bangles-swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: ".bangles-section .swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".bangles-section .swiper-button-next",
      prevEl: ".bangles-section .swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });
});
// products page modal
// Enhanced Product Functionality with Price Slider and Fixed Filters
document.addEventListener("DOMContentLoaded", function () {
  // Price slider elements
  const rangeMin = document.getElementById("rangeMin");
  const rangeMax = document.getElementById("rangeMax");
  const minPriceInput = document.getElementById("minPriceInput");
  const maxPriceInput = document.getElementById("maxPriceInput");
  const priceProgress = document.getElementById("priceProgress");
  const productsGrid = document.getElementById("productsGrid");
  // Only run if products page elements exist
  if (!rangeMin || !rangeMax || !productsGrid) {
    return;
  }
  // Price slider functionality
  let priceGap = 1000;

  function updatePriceSlider() {
    let minVal = parseInt(rangeMin.value);
    let maxVal = parseInt(rangeMax.value);

    if (maxVal - minVal < priceGap) {
      if (event.target.className === "range-min") {
        rangeMin.value = maxVal - priceGap;
        minVal = maxVal - priceGap;
      } else {
        rangeMax.value = minVal + priceGap;
        maxVal = minVal + priceGap;
      }
    }

    minPriceInput.value = minVal;
    maxPriceInput.value = maxVal;

    const minPercent = (minVal / rangeMin.max) * 100;
    const maxPercent = (maxVal / rangeMax.max) * 100;

    priceProgress.style.left = minPercent + "%";
    priceProgress.style.right = 100 - maxPercent + "%";
  }

  function updatePriceInputs() {
    let minVal = parseInt(minPriceInput.value);
    let maxVal = parseInt(maxPriceInput.value);

    if (minVal < 0) minVal = 0;
    if (maxVal > 50000) maxVal = 50000;
    if (maxVal - minVal < priceGap) {
      if (event.target === minPriceInput) {
        maxVal = minVal + priceGap;
      } else {
        minVal = maxVal - priceGap;
      }
    }

    minPriceInput.value = minVal;
    maxPriceInput.value = maxVal;
    rangeMin.value = minVal;
    rangeMax.value = maxVal;

    const minPercent = (minVal / rangeMin.max) * 100;
    const maxPercent = (maxVal / rangeMax.max) * 100;

    priceProgress.style.left = minPercent + "%";
    priceProgress.style.right = 100 - maxPercent + "%";

    updateFilters();
  }

  // Event listeners for price slider
  rangeMin.addEventListener("input", updatePriceSlider);
  rangeMax.addEventListener("input", updatePriceSlider);
  minPriceInput.addEventListener("blur", updatePriceInputs);
  maxPriceInput.addEventListener("blur", updatePriceInputs);

  // Initialize price slider
  updatePriceSlider();

  // Product data
  const productData = {
    1: {
      title: "Elegant Gold Bangle",
      image:
        "https://via.placeholder.com/300x250/f8f9fa/6c757d?text=Elegant+Gold+Bangle",
      price: "₹2,850",
      originalPrice: "₹3,200",
      discount: "11% off",
      rating: 4,
      reviewCount: 24,
      sku: "BNG001",
      description:
        "This elegant gold bangle showcases exceptional craftsmanship with traditional designs. Perfect for special occasions and daily wear.",
      features: [
        "18K Gold Plated",
        "Handcrafted Design",
        "Traditional Patterns",
        "Comfortable Fit",
        "Tarnish Resistant",
      ],
    },
    2: {
      title: "Diamond Heart Pendant with Chain",
      image:
        "https://via.placeholder.com/300x250/f8f9fa/6c757d?text=Diamond+Heart+Pendant",
      price: "₹8,750",
      rating: 5,
      reviewCount: 18,
      sku: "PEN002",
      description:
        "A stunning diamond heart pendant that symbolizes love and elegance. Crafted with premium white gold and genuine diamonds.",
      features: [
        "Genuine Diamond",
        "White Gold Chain",
        "Heart Design",
        "Certificate of Authenticity",
        "Gift Box Included",
      ],
    },
    3: {
      title: "Pearl Drop Earrings",
      image:
        "https://via.placeholder.com/300x250/f8f9fa/6c757d?text=Pearl+Drop+Earrings",
      price: "₹4,200",
      rating: 4,
      reviewCount: 12,
      sku: "EAR003",
      description:
        "Elegant pearl drop earrings that add sophistication to any outfit. Made with cultured pearls and sterling silver.",
      features: [
        "Cultured Pearls",
        "Sterling Silver",
        "Drop Design",
        "Hypoallergenic",
        "Secure Backing",
      ],
    },
    4: {
      title: "Silver Chain Necklace",
      image:
        "https://via.placeholder.com/300x250/f8f9fa/6c757d?text=Silver+Chain+Necklace",
      price: "₹1,850",
      rating: 5,
      reviewCount: 35,
      sku: "NEC004",
      description:
        "A versatile silver chain necklace perfect for layering or wearing alone. Adjustable length for perfect fit.",
      features: [
        "Sterling Silver",
        "Adjustable Length",
        "Classic Design",
        "Durable Construction",
        "Everyday Wear",
      ],
    },
    5: {
      title: "Traditional Gold Anklet with Bells",
      image:
        "https://via.placeholder.com/300x250/f8f9fa/6c757d?text=Traditional+Gold+Anklet",
      price: "₹5,650",
      rating: 4,
      reviewCount: 8,
      sku: "ANK005",
      description:
        "Traditional gold anklet with delicate bells that create a gentle chime. Perfect for cultural celebrations.",
      features: [
        "22K Gold Plated",
        "Traditional Bells",
        "Adjustable Size",
        "Cultural Design",
        "Premium Finish",
      ],
    },
    6: {
      title: "Gold Wedding Ring",
      image:
        "https://via.placeholder.com/300x250/f8f9fa/6c757d?text=Gold+Wedding+Ring",
      price: "₹12,500",
      rating: 5,
      reviewCount: 52,
      sku: "RNG006",
      description:
        "Classic gold wedding ring with timeless design. Symbolizes eternal love and commitment.",
      features: [
        "18K Solid Gold",
        "Classic Band",
        "Comfort Fit",
        "Lifetime Warranty",
        "Certificate Included",
      ],
    },
    7: {
      title: "Rose Gold Bangle Set",
      image:
        "https://via.placeholder.com/300x250/f8f9fa/6c757d?text=Rose+Gold+Bangle",
      price: "₹3,500",
      rating: 4,
      reviewCount: 16,
      sku: "BNG007",
      description:
        "Elegant rose gold bangle set of two. Modern design that complements any outfit.",
      features: [
        "Rose Gold Finish",
        "Set of 2 Bangles",
        "Modern Design",
        "Stackable",
        "Gift Ready",
      ],
    },
    8: {
      title: "Diamond Stud Earrings",
      image:
        "https://via.placeholder.com/300x250/f8f9fa/6c757d?text=Diamond+Stud+Earrings",
      price: "₹6,750",
      rating: 5,
      reviewCount: 29,
      sku: "EAR008",
      description:
        "Brilliant diamond stud earrings that sparkle with every movement. Perfect for any occasion.",
      features: [
        "Genuine Diamonds",
        "14K Gold Setting",
        "Brilliant Cut",
        "Secure Push Backs",
        "Certified Diamonds",
      ],
    },
    9: {
      title: "Ruby Stone Pendant",
      image:
        "https://via.placeholder.com/300x250/f8f9fa/6c757d?text=Ruby+Pendant",
      price: "₹4,950",
      rating: 4,
      reviewCount: 14,
      sku: "PEN009",
      description:
        "Stunning ruby pendant with rich red color. A statement piece that adds elegance to any ensemble.",
      features: [
        "Natural Ruby Stone",
        "Gold Plated Chain",
        "Vibrant Color",
        "Unique Cut",
        "Elegant Setting",
      ],
    },
  };

  // Filter functionality
  const filterCheckboxes = document.querySelectorAll(".filter-checkbox");
  const clearFiltersBtn = document.getElementById("clearFilters");
  const sortSelect = document.getElementById("sortSelect");
  const viewBtns = document.querySelectorAll(".view-btn");

  const activeFiltersContainer = document.getElementById("activeFilters");

  let activeFilters = {
    categories: [],
    priceRanges: [],
    materials: [],
    ratings: [],
    priceMin: 0,
    priceMax: 50000,
  };

  // Filter functionality
  filterCheckboxes.forEach((checkbox) => {
    checkbox.addEventListener("change", updateFilters);
  });

  function updateFilters() {
    const checkedFilters = document.querySelectorAll(
      ".filter-checkbox:checked"
    );
    activeFilters = {
      categories: [],
      priceRanges: [],
      materials: [],
      ratings: [],
      priceMin: parseInt(minPriceInput.value) || 0,
      priceMax: parseInt(maxPriceInput.value) || 50000,
    };

    checkedFilters.forEach((filter) => {
      const value = filter.value;
      const group = filter.closest(".filter-group");

      if (group.querySelector('[data-target="#categoryFilter"]')) {
        activeFilters.categories.push(value);
      } else if (group.querySelector('[data-target="#priceFilter"]')) {
        activeFilters.priceRanges.push(value);
      } else if (group.querySelector('[data-target="#materialFilter"]')) {
        activeFilters.materials.push(value);
      } else if (group.querySelector('[data-target="#ratingFilter"]')) {
        activeFilters.ratings.push(value);
      }
    });

    updateActiveFilterTags();
    filterProducts();
  }

  function updateActiveFilterTags() {
    activeFiltersContainer.innerHTML = "";

    if (activeFilters.priceMin > 0 || activeFilters.priceMax < 50000) {
      const tag = createFilterTag(
        `₹${activeFilters.priceMin} - ₹${activeFilters.priceMax}`,
        "price-range"
      );
      activeFiltersContainer.appendChild(tag);
    }

    Object.values(activeFilters)
      .flat()
      .forEach((filter) => {
        if (filter && typeof filter === "string") {
          const tag = createFilterTag(filter);
          activeFiltersContainer.appendChild(tag);
        }
      });
  }

  function createFilterTag(filterValue, type = "normal") {
    const tag = document.createElement("span");
    tag.className = "filter-tag";
    tag.innerHTML = `
            <span>${formatFilterText(filterValue)}</span>
            <i class="bi bi-x" onclick="${
              type === "price-range"
                ? "clearPriceRange()"
                : `removeFilter('${filterValue}')`
            }"></i>
        `;
    tag.style.cssText = `
            background: rgba(99, 102, 241, 0.1);
            color: #4f46e5;
            padding: 4px 8px;
            border-radius: 16px;
            font-size: 12px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            cursor: pointer;
            transition: all 0.2s ease;
        `;
    return tag;
  }

  function formatFilterText(value) {
    return value.charAt(0).toUpperCase() + value.slice(1).replace("-", " ");
  }

  window.removeFilter = function (filterValue) {
    const checkbox = document.querySelector(`[value="${filterValue}"]`);
    if (checkbox) {
      checkbox.checked = false;
      updateFilters();
    }
  };

  window.clearPriceRange = function () {
    rangeMin.value = 0;
    rangeMax.value = 50000;
    minPriceInput.value = 0;
    maxPriceInput.value = 50000;
    updatePriceSlider();
    updateFilters();
  };

  clearFiltersBtn.addEventListener("click", function () {
    filterCheckboxes.forEach((checkbox) => {
      checkbox.checked = false;
    });
    clearPriceRange();
    activeFilters = {
      categories: [],
      priceRanges: [],
      materials: [],
      ratings: [],
      priceMin: 0,
      priceMax: 50000,
    };
    updateActiveFilterTags();
    filterProducts();
  });

  function filterProducts() {
    const productItems = document.querySelectorAll(".product-item");
    let visibleCount = 0;

    productItems.forEach((item, index) => {
      const category = item.dataset.category;
      const price = parseInt(item.dataset.price);
      const rating = parseInt(item.dataset.rating);

      let shouldShow = true;

      if (
        activeFilters.categories.length > 0 &&
        !activeFilters.categories.includes(category)
      ) {
        shouldShow = false;
      }

      if (activeFilters.priceRanges.length > 0) {
        let priceMatch = false;
        activeFilters.priceRanges.forEach((range) => {
          if (range === "0-1000" && price <= 1000) priceMatch = true;
          if (range === "1000-5000" && price > 1000 && price <= 5000)
            priceMatch = true;
          if (range === "5000-10000" && price > 5000 && price <= 10000)
            priceMatch = true;
          if (range === "10000+" && price > 10000) priceMatch = true;
        });
        if (!priceMatch) shouldShow = false;
      }

      if (price < activeFilters.priceMin || price > activeFilters.priceMax) {
        shouldShow = false;
      }

      if (activeFilters.ratings.length > 0) {
        let ratingMatch = false;
        activeFilters.ratings.forEach((filterRating) => {
          if (rating >= parseInt(filterRating)) ratingMatch = true;
        });
        if (!ratingMatch) shouldShow = false;
      }

      if (shouldShow) {
        item.parentElement.style.display = "flex";
        setTimeout(() => {
          item.style.opacity = "1";
          item.style.transform = "translateY(0)";
        }, index * 50);
        visibleCount++;
      } else {
        item.style.opacity = "0";
        item.style.transform = "translateY(20px)";
        setTimeout(() => {
          item.parentElement.style.display = "none";
        }, 300);
      }
    });

    document.getElementById("resultEnd").textContent = visibleCount;
  }

  // Quick View Modal Functionality
  document.addEventListener("click", function (e) {
    if (e.target.closest(".quick-view")) {
      const productId = e.target.closest(".quick-view").dataset.product;
      const product = productData[productId];

      if (product) {
        populateModal(product, productId);
      }
    }
  });

  function populateModal(product, productId) {
    document.getElementById("modalProductImage").src = product.image;
    document.getElementById("modalProductImage").alt = product.title;
    document.getElementById("modalProductTitle").textContent = product.title;
    document.getElementById("modalCurrentPrice").textContent = product.price;
    document.getElementById("modalProductSku").textContent = product.sku;
    document.getElementById("modalProductDescription").textContent =
      product.description;
    document.getElementById(
      "modalRatingCount"
    ).textContent = `(${product.reviewCount} reviews)`;
    document.getElementById(
      "modalProductLink"
    ).href = `product_view.php?id=${productId}`;

    const originalPriceEl = document.getElementById("modalOriginalPrice");
    const discountEl = document.getElementById("modalDiscount");

    if (product.originalPrice) {
      originalPriceEl.textContent = product.originalPrice;
      originalPriceEl.style.display = "inline";
      discountEl.textContent = product.discount;
      discountEl.style.display = "inline";
    } else {
      originalPriceEl.style.display = "none";
      discountEl.style.display = "none";
    }

    const starsContainer = document.getElementById("modalProductStars");
    starsContainer.innerHTML = "";
    for (let i = 1; i <= 5; i++) {
      const star = document.createElement("i");
      star.className = i <= product.rating ? "bi bi-star-fill" : "bi bi-star";
      starsContainer.appendChild(star);
    }

    const featuresContainer = document.getElementById("modalProductFeatures");
    featuresContainer.innerHTML = "";
    product.features.forEach((feature) => {
      const li = document.createElement("li");
      li.textContent = feature;
      featuresContainer.appendChild(li);
    });
  }

  // Quantity controls in modal
  document
    .querySelector(".quantity-btn.plus")
    .addEventListener("click", function () {
      const input = document.querySelector(".quantity-input");
      const currentValue = parseInt(input.value);
      const maxValue = parseInt(input.getAttribute("max"));
      if (currentValue < maxValue) {
        input.value = currentValue + 1;
      }
    });

  document
    .querySelector(".quantity-btn.minus")
    .addEventListener("click", function () {
      const input = document.querySelector(".quantity-input");
      const currentValue = parseInt(input.value);
      const minValue = parseInt(input.getAttribute("min"));
      if (currentValue > minValue) {
        input.value = currentValue - 1;
      }
    });

  // Wishlist functionality
  document.addEventListener("click", function (e) {
    if (
      e.target.closest(".wishlist-btn") ||
      e.target.closest(".wishlist-modal")
    ) {
      const btn =
        e.target.closest(".wishlist-btn") ||
        e.target.closest(".wishlist-modal");
      const icon = btn.querySelector("i");

      if (icon.classList.contains("bi-heart")) {
        icon.classList.remove("bi-heart");
        icon.classList.add("bi-heart-fill");
        btn.style.color = "#ef4444";
      } else {
        icon.classList.remove("bi-heart-fill");
        icon.classList.add("bi-heart");
        btn.style.color = "";
      }

      btn.style.transform = "scale(1.2)";
      setTimeout(() => {
        btn.style.transform = "scale(1)";
      }, 200);
    }
  });

  // Add to cart animation
  document.addEventListener("click", function (e) {
    if (
      e.target.closest(".add-to-cart") ||
      e.target.closest(".add-to-cart-modal")
    ) {
      const btn =
        e.target.closest(".add-to-cart") ||
        e.target.closest(".add-to-cart-modal");
      const originalText = btn.innerHTML;

      btn.innerHTML = '<i class="bi bi-check-circle"></i> Added!';
      btn.style.background = "#10b981";
      btn.disabled = true;

      setTimeout(() => {
        btn.innerHTML = originalText;
        btn.style.background = "";
        btn.disabled = false;
      }, 2000);
    }
  });

  // View toggle functionality
  viewBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      viewBtns.forEach((b) => b.classList.remove("active"));
      this.classList.add("active");

      const view = this.dataset.view;
      if (view === "list") {
        productsGrid.classList.add("list-view");
      } else {
        productsGrid.classList.remove("list-view");
      }
    });
  });

  // Initialize page
  updateFilters();
});
// product view page
// Product Detail Page JavaScript - Modern ES6+ with Scoped Classes
class ProductDetailPage {
  constructor() {
    this.productDatabase = this.initializeProductDatabase();
    this.currentProduct = null;
    this.currentImageIndex = 0;
    this.isWishlistActive = false;
    this.currentQuantity = 1;
    this.selectedVariants = {};

    // Vertical carousel properties
    this.thumbnailCarousel = {
      currentIndex: 0,
      itemsVisible: 5, // Show max 5 thumbnails vertically
      totalItems: 0,
      container: null,
      isVideoShowing: false,
      itemHeight: 92, // 80px height + 12px gap
    };

    this.init();
  }

  initializeProductDatabase() {
    return {
      1: {
        id: 1,
        title: "Elegant Gold Bangle",
        category: "bangles",
        sku: "BNG001",
        price: 2850,
        originalPrice: 3200,
        discount: "11% off",
        rating: 4.2,
        reviewCount: 24,
        availability: "in-stock",
        badges: ["sale"],
        description:
          "This elegant gold bangle showcases exceptional craftsmanship with traditional designs. Perfect for special occasions and daily wear, featuring intricate patterns that reflect timeless beauty.",
        fullDescription: `
                    <p>This exquisite gold bangle is a perfect blend of traditional craftsmanship and contemporary elegance. Meticulously handcrafted by skilled artisans, each piece features intricate patterns that have been passed down through generations.</p>
                    
                    <p>The bangle is made from high-quality materials with 18K gold plating that ensures long-lasting beauty and resistance to tarnishing. The comfortable fit makes it suitable for daily wear, while its stunning design makes it perfect for special occasions and celebrations.</p>
                    
                    <h6>Design Features:</h6>
                    <ul>
                        <li><i class="bi bi-check2-all text-pink"></i>Traditional motifs with modern appeal</li>
                        <li><i class="bi bi-check2-all text-pink"></i>Smooth edges for comfortable wearing</li>
                        <li><i class="bi bi-check2-all text-pink"></i>Lustrous finish that catches light beautifully</li>
                        <li><i class="bi bi-check2-all text-pink"></i>Versatile design suitable for all occasions</li>
                    </ul>
                `,
        features: [
          "18K Gold Plated",
          "Handcrafted Design",
          "Traditional Patterns",
          "Comfortable Fit",
          "Tarnish Resistant",
        ],
        specifications: {
          Material: "18K Gold Plated Brass",
          Weight: "25 grams",
          Diameter: "6.5 cm",
          Width: "8 mm",
          Finish: "High Polish",
          Closure: "Hinged",
          Care: "Dry cloth cleaning recommended",
          Warranty: "1 year manufacturer warranty",
        },
        // Extended images array (8 images to test vertical carousel)
        images: [
          "images/bangles.webp",
          "images/bangles-1.webp",
          "images/bangles-2.webp",
          "images/bangles-3.webp",
          "images/bangles-4.webp",
          "images/bangles-5.webp",
          "images/bangles-6.webp",
          "images/bangles-7.webp",
        ],
        // Videos array (null means no video for that image)
        videos: [
          "https://sample-videos.com/zip/10/mp4/SampleVideo_1280x720_1mb.mp4", // Sample video for testing
          null,
          "https://sample-videos.com/zip/10/mp4/SampleVideo_1280x720_2mb.mp4", // Sample video
          null,
          "https://sample-videos.com/zip/10/mp4/SampleVideo_1280x720_5mb.mp4", // Sample video
          null,
          null,
          null,
        ],
        thumbnails: [
          "images/bangles.webp",
          "images/bangles-1.webp",
          "images/bangles-2.webp",
          "images/bangles-3.webp",
          "images/bangles-4.webp",
          "images/bangles-5.webp",
          "images/bangles-6.webp",
          "images/bangles-7.webp",
        ],
        variants: {
          size: {
            label: "Size",
            options: ["Medium", "Large"],
            default: "Medium",
          },
        },
        reviews: [
          {
            id: 1,
            name: "Priya Sharma",
            rating: 5,
            date: "2 days ago",
            comment:
              "Absolutely beautiful bangle! The craftsmanship is excellent and it looks exactly as shown in the pictures. Very happy with my purchase.",
          },
          {
            id: 2,
            name: "Anjali Patel",
            rating: 4,
            date: "1 week ago",
            comment:
              "Great quality and fast delivery. The bangle fits perfectly and the gold finish is really nice. Would definitely recommend!",
          },
        ],
      },
    };
  }

  init() {
    this.bindEvents();
    this.loadProduct();
    this.initializeImageGallery();
    this.initializeQuantityControls();
    this.initializeVariantSelection();
    this.loadRelatedProducts();
  }

  // Enhanced image gallery initialization
  initializeImageGallery() {
    if (!this.currentProduct) return;

    const { images, thumbnails, videos } = this.currentProduct;
    this.updateMainImage(images[0]);
    this.setupVerticalThumbnailCarousel(thumbnails, videos);
    this.bindImageEvents();
    this.injectVerticalCarouselStyles();
    this.addVideoSupport();
  }

  // Inject vertical carousel styles
  injectVerticalCarouselStyles() {
    const styleId = "vertical-carousel-styles";
    if (document.getElementById(styleId)) return;

    const style = document.createElement("style");
    style.id = styleId;
    style.textContent = `
            /* Override horizontal styles for vertical carousel */
            .product-detail-section .thumbnails-container {
                display: flex !important;
                flex-direction: column !important;
                gap: 12px !important;
                width: 100px !important;
                height: 500px !important;
                overflow: hidden !important;
                padding-right: 8px !important;
                position: relative !important;
            }
            
            .vertical-thumbnail-track {
                display: flex !important;
                flex-direction: column !important;
                gap: 12px !important;
                transition: transform 0.3s ease !important;
                width: 100% !important;
            }
            
            .product-detail-section .thumbnail-wrapper {
                width: 80px !important;
                height: 80px !important;
                flex: 0 0 auto !important;
                position: relative !important;
            }
            
            .product-detail-section .thumbnail-wrapper.video-thumbnail::before {
                content: '▶';
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: rgba(0,0,0,0.8);
                color: white;
                width: 20px;
                height: 20px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 8px;
                z-index: 2;
                pointer-events: none;
                font-family: Arial, sans-serif;
            }
            
            .vertical-carousel-nav {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                background: rgba(255,255,255,0.95);
                border: 1px solid #e5e7eb;
                border-radius: 50%;
                width: 28px;
                height: 28px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                z-index: 10;
                font-size: 12px;
                font-weight: bold;
                transition: all 0.2s ease;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            }
            
            .vertical-carousel-nav:hover {
                background: var(--violet, #6f42c1);
                color: white;
                transform: translateX(-50%) scale(1.1);
            }
            
            .vertical-carousel-nav.up {
                top: -5px;
            }
            
            .vertical-carousel-nav.down {
                bottom: -5px;
            }
            
            .vertical-carousel-nav:disabled {
                opacity: 0.3;
                cursor: not-allowed;
                transform: translateX(-50%) scale(1);
            }
            
            .product-detail-section .main-image-wrapper {
                position: relative;
            }
            
            .product-detail-section .main-video {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: none;
                border-radius: 12px;
            }
            
            .video-controls {
                position: absolute;
                bottom: 16px;
                right: 16px;
                display: flex;
                flex-direction: column;
                gap: 8px;
                z-index: 5;
            }
            
            .video-control-btn {
                background: rgba(0,0,0,0.8);
                color: white;
                border: none;
                padding: 8px 12px;
                border-radius: 6px;
                cursor: pointer;
                font-size: 11px;
                display: none;
                align-items: center;
                gap: 4px;
                transition: all 0.2s ease;
                backdrop-filter: blur(5px);
                white-space: nowrap;
            }
            
            .video-control-btn:hover {
                background: var(--violet, #6f42c1);
                transform: translateY(-1px);
            }
            
            .video-control-btn.show {
                display: flex;
            }
            
            /* Mobile adjustments */
            @media (max-width: 767.98px) {
                .product-detail-section .thumbnails-container {
                    width: 70px !important;
                    height: 350px !important;
                }
                
                .product-detail-section .thumbnail-wrapper {
                    width: 60px !important;
                    height: 60px !important;
                }
                
                .vertical-carousel-nav {
                    width: 24px;
                    height: 24px;
                    font-size: 10px;
                }
                
                .video-controls {
                    bottom: 10px;
                    right: 10px;
                }
                
                .video-control-btn {
                    font-size: 9px;
                    padding: 6px 8px;
                }
            }
        `;

    document.head.appendChild(style);
  }

  // Setup vertical thumbnail carousel
  setupVerticalThumbnailCarousel(thumbnails, videos = []) {
    const thumbnailContainer = document.querySelector(".thumbnails-container");
    if (!thumbnailContainer || !thumbnails) return;

    this.thumbnailCarousel.totalItems = thumbnails.length;
    this.thumbnailCarousel.container = thumbnailContainer;

    // Clear existing content
    thumbnailContainer.innerHTML = "";

    // Create vertical carousel track
    const carouselTrack = document.createElement("div");
    carouselTrack.className = "vertical-thumbnail-track";

    // Create all thumbnails
    thumbnails.forEach((thumb, index) => {
      const wrapper = document.createElement("div");
      wrapper.className = `thumbnail-wrapper ${index === 0 ? "active" : ""}${
        videos[index] ? " video-thumbnail" : ""
      }`;
      wrapper.dataset.image = index;
      wrapper.dataset.hasVideo = !!videos[index];

      const img = document.createElement("img");
      img.src = thumb;
      img.alt = `Product view ${index + 1}`;
      img.className = "thumbnail-image";

      wrapper.appendChild(img);
      carouselTrack.appendChild(wrapper);
    });

    thumbnailContainer.appendChild(carouselTrack);

    // Add navigation if more than 5 items
    if (
      this.thumbnailCarousel.totalItems > this.thumbnailCarousel.itemsVisible
    ) {
      this.addVerticalCarouselNavigation();
    }

    this.updateVerticalCarouselPosition();
  }

  // Add video support to existing main image area
  addVideoSupport() {
    const mainImageWrapper = document.querySelector(".main-image-wrapper");
    if (!mainImageWrapper) return;

    // Add video element
    const video = document.createElement("video");
    video.id = "mainProductVideo";
    video.className = "main-video";
    video.controls = true;
    video.preload = "metadata";
    mainImageWrapper.appendChild(video);

    // Add video controls
    const controlsDiv = document.createElement("div");
    controlsDiv.className = "video-controls";

    const playBtn = document.createElement("button");
    playBtn.className = "video-control-btn";
    playBtn.id = "playVideoBtn";
    playBtn.innerHTML = '<i class="bi bi-play-circle"></i> Play Video';
    playBtn.onclick = () => this.toggleToVideo();

    const imageBtn = document.createElement("button");
    imageBtn.className = "video-control-btn";
    imageBtn.id = "showImageBtn";
    imageBtn.innerHTML = '<i class="bi bi-image"></i> Show Image';
    imageBtn.onclick = () => this.toggleToImage();

    controlsDiv.appendChild(playBtn);
    controlsDiv.appendChild(imageBtn);
    mainImageWrapper.appendChild(controlsDiv);

    this.updateVideoControls();
  }

  // Add vertical carousel navigation buttons
  addVerticalCarouselNavigation() {
    const container = this.thumbnailCarousel.container;

    const upBtn = document.createElement("button");
    upBtn.className = "vertical-carousel-nav up";
    upBtn.innerHTML = "↑";
    upBtn.onclick = () => this.moveVerticalCarousel("up");

    const downBtn = document.createElement("button");
    downBtn.className = "vertical-carousel-nav down";
    downBtn.innerHTML = "↓";
    downBtn.onclick = () => this.moveVerticalCarousel("down");

    container.appendChild(upBtn);
    container.appendChild(downBtn);

    this.updateVerticalNavigationButtons();
  }

  // Move vertical carousel up or down
  moveVerticalCarousel(direction) {
    const maxIndex = Math.max(
      0,
      this.thumbnailCarousel.totalItems - this.thumbnailCarousel.itemsVisible
    );

    if (direction === "up" && this.thumbnailCarousel.currentIndex > 0) {
      this.thumbnailCarousel.currentIndex--;
    } else if (
      direction === "down" &&
      this.thumbnailCarousel.currentIndex < maxIndex
    ) {
      this.thumbnailCarousel.currentIndex++;
    }

    this.updateVerticalCarouselPosition();
    this.updateVerticalNavigationButtons();
  }

  // Update vertical carousel position
  updateVerticalCarouselPosition() {
    const track = this.thumbnailCarousel.container.querySelector(
      ".vertical-thumbnail-track"
    );
    if (!track) return;

    const translateY =
      -this.thumbnailCarousel.currentIndex * this.thumbnailCarousel.itemHeight;
    track.style.transform = `translateY(${translateY}px)`;
  }

  // Update vertical navigation buttons
  updateVerticalNavigationButtons() {
    const upBtn = this.thumbnailCarousel.container.querySelector(
      ".vertical-carousel-nav.up"
    );
    const downBtn = this.thumbnailCarousel.container.querySelector(
      ".vertical-carousel-nav.down"
    );

    if (upBtn && downBtn) {
      const maxIndex = Math.max(
        0,
        this.thumbnailCarousel.totalItems - this.thumbnailCarousel.itemsVisible
      );

      upBtn.disabled = this.thumbnailCarousel.currentIndex === 0;
      downBtn.disabled = this.thumbnailCarousel.currentIndex >= maxIndex;
    }
  }

  // Toggle to video
  toggleToVideo() {
    const mainImage = document.getElementById("mainProductImage");
    const mainVideo = document.getElementById("mainProductVideo");
    const videoSrc = this.currentProduct.videos[this.currentImageIndex];

    if (!videoSrc) return;

    mainImage.style.display = "none";
    mainVideo.style.display = "block";
    mainVideo.src = videoSrc;

    this.thumbnailCarousel.isVideoShowing = true;
    this.updateVideoControls();

    // Auto play
    mainVideo.play().catch((e) => console.log("Autoplay prevented:", e));
  }

  // Toggle to image
  toggleToImage() {
    const mainImage = document.getElementById("mainProductImage");
    const mainVideo = document.getElementById("mainProductVideo");

    mainImage.style.display = "block";
    mainVideo.style.display = "none";
    if (mainVideo.src) {
      mainVideo.pause();
    }

    this.thumbnailCarousel.isVideoShowing = false;
    this.updateVideoControls();
  }

  // Update video controls visibility
  updateVideoControls() {
    const playBtn = document.getElementById("playVideoBtn");
    const imageBtn = document.getElementById("showImageBtn");
    const hasVideo =
      this.currentProduct.videos &&
      this.currentProduct.videos[this.currentImageIndex];

    if (playBtn && imageBtn) {
      if (this.thumbnailCarousel.isVideoShowing) {
        playBtn.classList.remove("show");
        imageBtn.classList.add("show");
      } else {
        playBtn.classList.toggle("show", !!hasVideo);
        imageBtn.classList.remove("show");
      }
    }
  }

  // Ensure thumbnail is visible in vertical carousel
  ensureThumbnailVisible(targetIndex) {
    if (
      this.thumbnailCarousel.totalItems <= this.thumbnailCarousel.itemsVisible
    )
      return;

    const currentStart = this.thumbnailCarousel.currentIndex;
    const currentEnd = currentStart + this.thumbnailCarousel.itemsVisible - 1;

    if (targetIndex < currentStart) {
      this.thumbnailCarousel.currentIndex = targetIndex;
    } else if (targetIndex > currentEnd) {
      this.thumbnailCarousel.currentIndex = Math.min(
        targetIndex - this.thumbnailCarousel.itemsVisible + 1,
        this.thumbnailCarousel.totalItems - this.thumbnailCarousel.itemsVisible
      );
    }

    this.updateVerticalCarouselPosition();
    this.updateVerticalNavigationButtons();
  }

  // Enhanced thumbnail click handler
  handleThumbnailClick(thumbnailWrapper) {
    const imageIndex = parseInt(thumbnailWrapper.dataset.image);
    this.currentImageIndex = imageIndex;

    // Update active thumbnail
    document
      .querySelectorAll(".thumbnail-wrapper")
      .forEach((thumb) => thumb.classList.remove("active"));
    thumbnailWrapper.classList.add("active");

    // Update main image
    this.updateMainImage(this.currentProduct.images[imageIndex]);

    // Always show image first when thumbnail is clicked
    this.toggleToImage();

    // Update video controls
    this.updateVideoControls();

    // Ensure thumbnail is visible
    this.ensureThumbnailVisible(imageIndex);
  }

  // Enhanced image zoom (only for images)
  handleImageZoom() {
    if (this.thumbnailCarousel.isVideoShowing) return;

    const modal = document.getElementById("imageZoomModal");
    const zoomedImage = document.getElementById("zoomedImage");
    if (modal && zoomedImage) {
      zoomedImage.src = this.currentProduct.images[this.currentImageIndex];
      zoomedImage.alt = this.currentProduct.title;
      $(modal).modal("show");
    }
  }

  updateMainImage(imageSrc) {
    const mainImage = document.getElementById("mainProductImage");
    if (mainImage) {
      mainImage.src = imageSrc;
      mainImage.alt = this.currentProduct.title;
    }
  }

  bindImageEvents() {
    document.addEventListener("click", (e) => {
      if (e.target.closest(".thumbnail-wrapper")) {
        this.handleThumbnailClick(e.target.closest(".thumbnail-wrapper"));
      }
    });

    document.addEventListener("click", (e) => {
      if (e.target.closest(".main-image-wrapper .main-image")) {
        this.handleImageZoom();
      }
    });
  }

  // ... ALL OTHER EXISTING METHODS REMAIN EXACTLY THE SAME ...

  getProductIdFromUrl() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get("id") || "1";
  }

  loadProduct() {
    const productId = this.getProductIdFromUrl();
    this.currentProduct = this.productDatabase[productId];
    if (!this.currentProduct) {
      this.handleProductNotFound();
      return;
    }
    this.populateProductData();
  }

  handleProductNotFound() {
    console.error("Product not found");
    document.querySelector(".product-detail-section").innerHTML = `
            <div class="container">
                <div class="text-center py-5">
                    <h2>Product Not Found</h2>
                    <p>The product you're looking for doesn't exist.</p>
                    <a href="products.php" class="btn btn-primary">Back to Products</a>
                </div>
            </div>
        `;
  }

  populateProductData() {
    const product = this.currentProduct;
    document.title = `${product.title} - Women's Accessories`;

    this.updateProductInfo(product);
    this.updateProductPricing(product);
    this.updateRatingDisplay(product.rating, product.reviewCount);
  }

  updateProductInfo(product) {
    const elements = {
      productTitle: product.title,
      productSku: product.sku,
      productDescription: product.description,
    };

    Object.entries(elements).forEach(([id, value]) => {
      const element = document.getElementById(id);
      if (element) element.textContent = value;
    });
  }

  updateProductPricing(product) {
    const currentPriceEl = document.getElementById("currentPrice");
    const originalPriceEl = document.getElementById("originalPrice");

    if (currentPriceEl) {
      currentPriceEl.textContent = `₹${product.price.toLocaleString()}`;
    }
    if (product.originalPrice && originalPriceEl) {
      originalPriceEl.textContent = `₹${product.originalPrice.toLocaleString()}`;
      originalPriceEl.style.display = "inline";
    }
  }

  updateRatingDisplay(rating, reviewCount) {
    const starsContainer = document.getElementById("ratingStars");
    const ratingCountEl = document.getElementById("ratingCount");

    if (starsContainer) {
      starsContainer.innerHTML = this.generateStarsHTML(rating);
    }
    if (ratingCountEl) {
      ratingCountEl.textContent = `(${reviewCount} reviews)`;
    }
  }

  generateStarsHTML(rating) {
    const fullStars = Math.floor(rating);
    const hasHalfStar = rating % 1 !== 0;
    const emptyStars = 5 - fullStars - (hasHalfStar ? 1 : 0);
    let starsHTML = "";

    for (let i = 0; i < fullStars; i++) {
      starsHTML += '<i class="bi bi-star-fill"></i>';
    }

    if (hasHalfStar) {
      starsHTML += '<i class="bi bi-star-half"></i>';
    }

    for (let i = 0; i < emptyStars; i++) {
      starsHTML += '<i class="bi bi-star"></i>';
    }

    return starsHTML;
  }

  initializeQuantityControls() {
    const quantityInput = document.querySelector(
      ".product-view-quantity-input"
    );
    const minusBtn = document.querySelector(".product-view-quantity-btn.minus");
    const plusBtn = document.querySelector(".product-view-quantity-btn.plus");

    if (quantityInput) {
      quantityInput.value = this.currentQuantity;
    }
    if (minusBtn) {
      minusBtn.addEventListener("click", () => this.updateQuantity(-1));
    }
    if (plusBtn) {
      plusBtn.addEventListener("click", () => this.updateQuantity(1));
    }
  }

  updateQuantity(change) {
    const newQuantity = this.currentQuantity + change;
    if (newQuantity >= 1 && newQuantity <= 10) {
      this.currentQuantity = newQuantity;
      const quantityInput = document.querySelector(
        ".product-view-quantity-input"
      );
      if (quantityInput) {
        quantityInput.value = this.currentQuantity;
      }
    }
  }

  initializeVariantSelection() {
    // Add variant selection logic if needed
  }

  loadRelatedProducts() {
    // Add related products logic if needed
  }

  bindEvents() {
    // Add other event bindings if needed
  }
}

// Initialize
document.addEventListener("DOMContentLoaded", () => {
  const productDetailPage = new ProductDetailPage();
  window.ProductDetailPage = productDetailPage;
});

// wishlist sample data
// Wishlist Page JavaScript - Modern ES6+ with Scoped Classes
class WishlistManager {
  constructor() {
    this.wishlistItems = [];
    this.selectedItems = new Set();
    this.currentView = "grid";
    this.currentSort = "recent";
    this.isLoading = false;

    // ============================================
    // PAGE DETECTION - Only initialize on wishlist pages
    // ============================================
    this.isWishlistPage = this.checkIfWishlistPage();

    if (this.isWishlistPage) {
      this.init();
    } else {
      // Only load basic data for other pages (for header count, etc.)
      this.loadWishlistData();
      this.updateHeaderWishlistCount();
    }

    // Initialize cart count on all pages
    this.updateCartCount();
  }

  // Check if current page is wishlist page
  checkIfWishlistPage() {
    // Method 1: Check for wishlist-specific elements
    const wishlistElements = [
      "wishlistItems",
      "wishlistContent",
      "emptyWishlist",
      "sortSelect",
    ];

    const hasWishlistElements = wishlistElements.some((id) =>
      document.getElementById(id)
    );

    // Method 2: Check URL
    const isWishlistURL =
      window.location.pathname.includes("wishlist") ||
      window.location.search.includes("wishlist") ||
      document.body.classList.contains("wishlist-page");

    return hasWishlistElements || isWishlistURL;
  }

  // Initialize the wishlist page (only runs on wishlist pages)
  init() {
    if (!this.isWishlistPage) return;

    this.loadWishlistData();
    this.bindEvents();
    this.updateDisplay();
  }

  // Load wishlist data from localStorage
  loadWishlistData() {
    const savedWishlist = localStorage.getItem("wishlist");
    if (savedWishlist) {
      this.wishlistItems = JSON.parse(savedWishlist);
    } else {
      // Sample data for demo (only on wishlist page)
      if (this.isWishlistPage) {
        this.wishlistItems = this.getSampleWishlistData();
        this.saveWishlistData();
      } else {
        this.wishlistItems = [];
      }
    }
    if (this.isWishlistPage) {
      this.sortItems();
    }
  }

  // Get sample wishlist data for demo
  getSampleWishlistData() {
    return [
      {
        id: 1,
        title: "Elegant Gold Bangle",
        image: "images/bangles.webp",
        price: 2850,
        originalPrice: 3200,
        discount: "11% off",
        rating: 4.2,
        reviewCount: 24,
        availability: "in-stock",
        category: "bangles",
        dateAdded: new Date("2025-09-10"),
        sku: "BNG001",
      },
      {
        id: 2,
        title: "Diamond Heart Pendant with Chain",
        image: "images/pendants.webp",
        price: 8750,
        rating: 5,
        reviewCount: 18,
        availability: "in-stock",
        category: "pendants",
        dateAdded: new Date("2025-09-08"),
        sku: "PEN002",
      },
      {
        id: 3,
        title: "Pearl Drop Earrings",
        image: "images/earings.webp",
        price: 4200,
        rating: 4.5,
        reviewCount: 12,
        availability: "limited-stock",
        category: "earrings",
        dateAdded: new Date("2025-09-05"),
        sku: "EAR003",
      },
    ];
  }

  // Save wishlist data to localStorage
  saveWishlistData() {
    localStorage.setItem("wishlist", JSON.stringify(this.wishlistItems));
  }

  // Bind all event listeners (only on wishlist pages)
  bindEvents() {
    if (!this.isWishlistPage) return;

    this.bindViewToggle();
    this.bindSorting();
    this.bindSelectAll();
    this.bindBulkActions();
    this.bindClearAll();
    this.bindSharing();
    this.bindModalEvents();
  }

  // Bind view toggle events
  bindViewToggle() {
    if (!this.isWishlistPage) return;

    document.addEventListener("click", (e) => {
      if (e.target.closest(".view-btn")) {
        const viewBtn = e.target.closest(".view-btn");
        const view = viewBtn.dataset.view;
        this.switchView(view);
      }
    });
  }

  // Switch between grid and list view
  switchView(view) {
    if (!this.isWishlistPage) return;

    this.currentView = view;
    // Update button states
    document
      .querySelectorAll(".view-btn")
      .forEach((btn) => btn.classList.remove("active"));
    const activeBtn = document.querySelector(`[data-view="${view}"]`);
    if (activeBtn) activeBtn.classList.add("active");

    // Update items container
    const itemsContainer = document.getElementById("wishlistItems");
    if (itemsContainer) {
      if (view === "list") {
        itemsContainer.classList.add("list-view");
      } else {
        itemsContainer.classList.remove("list-view");
      }
    }
  }

  // Bind sorting events
  bindSorting() {
    if (!this.isWishlistPage) return;

    const sortSelect = document.getElementById("sortSelect");
    if (sortSelect) {
      sortSelect.addEventListener("change", (e) => {
        this.currentSort = e.target.value;
        this.sortItems();
        this.renderWishlistItems();
      });
    }
  }

  // Sort wishlist items
  sortItems() {
    if (!this.isWishlistPage) return;

    switch (this.currentSort) {
      case "name-asc":
        this.wishlistItems.sort((a, b) => a.title.localeCompare(b.title));
        break;
      case "name-desc":
        this.wishlistItems.sort((a, b) => b.title.localeCompare(a.title));
        break;
      case "price-low":
        this.wishlistItems.sort((a, b) => a.price - b.price);
        break;
      case "price-high":
        this.wishlistItems.sort((a, b) => b.price - a.price);
        break;
      case "recent":
      default:
        this.wishlistItems.sort(
          (a, b) => new Date(b.dateAdded) - new Date(a.dateAdded)
        );
        break;
    }
  }

  // Bind select all functionality
  bindSelectAll() {
    if (!this.isWishlistPage) return;

    const selectAllCheckbox = document.getElementById("selectAllCheckbox");
    if (selectAllCheckbox) {
      selectAllCheckbox.addEventListener("change", (e) => {
        this.toggleSelectAll(e.target.checked);
      });
    }
  }

  // Toggle select all items
  toggleSelectAll(selectAll) {
    if (!this.isWishlistPage) return;

    const itemCheckboxes = document.querySelectorAll(
      ".wishlist-item .item-checkbox input"
    );
    if (selectAll) {
      this.wishlistItems.forEach((item) => this.selectedItems.add(item.id));
      itemCheckboxes.forEach((checkbox) => (checkbox.checked = true));
    } else {
      this.selectedItems.clear();
      itemCheckboxes.forEach((checkbox) => (checkbox.checked = false));
    }
    this.updateBulkActionButtons();
  }

  // Bind bulk action events
  bindBulkActions() {
    if (!this.isWishlistPage) return;

    const bulkAddToCart = document.getElementById("bulkAddToCart");
    const bulkRemove = document.getElementById("bulkRemove");
    if (bulkAddToCart) {
      bulkAddToCart.addEventListener("click", () => {
        this.bulkAddToCart();
      });
    }
    if (bulkRemove) {
      bulkRemove.addEventListener("click", () => {
        this.showConfirmationModal(
          "Remove Selected Items",
          "Are you sure you want to remove the selected items from your wishlist?",
          () => this.bulkRemoveItems()
        );
      });
    }
  }

  // Bind clear all event
  bindClearAll() {
    if (!this.isWishlistPage) return;

    const clearAllBtn = document.getElementById("clearAllBtn");
    if (clearAllBtn) {
      clearAllBtn.addEventListener("click", () => {
        this.showConfirmationModal(
          "Clear All Items",
          "Are you sure you want to remove all items from your wishlist? This action cannot be undone.",
          () => this.clearAllItems()
        );
      });
    }
  }

  // Bind sharing events
  bindSharing() {
    if (!this.isWishlistPage) return;

    document.addEventListener("click", (e) => {
      if (e.target.closest(".share-btn")) {
        const shareBtn = e.target.closest(".share-btn");
        const platform = shareBtn.dataset.platform;
        this.shareWishlist(platform);
      }
    });
  }

  // Share wishlist
  shareWishlist(platform) {
    const wishlistUrl = `${window.location.origin}/wishlist.php`;
    const wishlistText = `Check out my wishlist with ${this.wishlistItems.length} amazing items!`;
    switch (platform) {
      case "whatsapp":
        window.open(
          `https://wa.me/?text=${encodeURIComponent(
            wishlistText + " " + wishlistUrl
          )}`,
          "_blank"
        );
        break;
      case "copy":
        this.copyToClipboard(wishlistUrl);
        this.showNotification("Wishlist link copied to clipboard!", "success");
        break;
    }
  }

  // Copy to clipboard
  async copyToClipboard(text) {
    try {
      await navigator.clipboard.writeText(text);
    } catch (err) {
      // Fallback method
      const textArea = document.createElement("textarea");
      textArea.value = text;
      document.body.appendChild(textArea);
      textArea.select();
      document.execCommand("copy");
      document.body.removeChild(textArea);
    }
  }

  // Bind modal events
  bindModalEvents() {
    if (!this.isWishlistPage) return;

    // Item-specific events
    document.addEventListener("click", (e) => {
      // Add to cart button
      if (e.target.closest(".btn-add-to-cart, .add-to-cart-btn")) {
        const itemElement = e.target.closest(".wishlist-item");
        if (itemElement) {
          const itemId = parseInt(itemElement.dataset.itemId);
          this.showAddToCartModal(itemId);
        }
      }
      // Remove button
      if (e.target.closest(".btn-remove, .remove-btn")) {
        const itemElement = e.target.closest(".wishlist-item");
        if (itemElement) {
          const itemId = parseInt(itemElement.dataset.itemId);
          this.removeItem(itemId);
        }
      }
      // Item checkbox
      if (e.target.closest(".item-checkbox input")) {
        const checkbox = e.target.closest(".item-checkbox input");
        const itemElement = checkbox.closest(".wishlist-item");
        if (itemElement) {
          const itemId = parseInt(itemElement.dataset.itemId);
          if (checkbox.checked) {
            this.selectedItems.add(itemId);
          } else {
            this.selectedItems.delete(itemId);
          }
          this.updateSelectAllState();
          this.updateBulkActionButtons();
        }
      }
    });

    // Modal quantity controls
    document.addEventListener("click", (e) => {
      if (e.target.closest("#moveToCartModal .quantity-btn.plus")) {
        this.updateModalQuantity(1);
      }
      if (e.target.closest("#moveToCartModal .quantity-btn.minus")) {
        this.updateModalQuantity(-1);
      }
    });

    // Confirm add to cart
    const confirmAddToCart = document.getElementById("confirmAddToCart");
    if (confirmAddToCart) {
      confirmAddToCart.addEventListener("click", () => {
        this.confirmAddToCart();
      });
    }
  }

  // Update display (only on wishlist pages)
  updateDisplay() {
    if (!this.isWishlistPage) return;

    this.renderWishlistItems();
    this.updateStats();
    this.updateVisibility();
  }

  // Render wishlist items (only on wishlist pages)
  renderWishlistItems() {
    if (!this.isWishlistPage) return;

    const container = document.getElementById("wishlistItems");
    if (!container) return;

    if (this.wishlistItems.length === 0) {
      container.innerHTML = "";
      return;
    }

    const itemsHTML = this.wishlistItems
      .map((item) => this.createItemHTML(item))
      .join("");
    container.innerHTML = itemsHTML;
  }

  // Create individual item HTML
  createItemHTML(item) {
    if (!this.isWishlistPage) return "";

    const isSelected = this.selectedItems.has(item.id);
    const availabilityClass = item.availability.replace("-", "");
    const availabilityText = this.getAvailabilityText(item.availability);
    const formattedDate = this.formatDate(item.dateAdded);

    return `
      <div class="wishlist-item" data-item-id="${item.id}">
        <div class="item-checkbox">
          <input type="checkbox" ${isSelected ? "checked" : ""}>
          <span class="checkmark"></span>
        </div>
        
        <div class="item-image-wrapper">
          <img src="${item.image}" alt="${item.title}" class="item-image">
          <div class="item-actions">
            <button class="action-btn view-btn" title="Quick View">
              <i class="bi bi-eye"></i>
            </button>
            <button class="action-btn remove-btn" title="Remove from Wishlist">
              <i class="bi bi-trash"></i>
            </button>
          </div>
          <div class="item-overlay">
            <div class="quick-actions">
              <button class="quick-action-btn add-to-cart-btn">
                <i class="bi bi-bag-plus"></i> Add to Cart
              </button>
              <button class="quick-action-btn quick-view-btn">
                <i class="bi bi-eye"></i> Quick View
              </button>
            </div>
          </div>
        </div>
        
        <div class="item-info">
          <h6 class="item-title">
            <a href="product-detail.html?id=${item.id}">${item.title}</a>
          </h6>
          <div class="item-rating">
            <div class="stars">
              ${this.generateStarsHTML(item.rating)}
            </div>
            <span class="rating-text">(${item.reviewCount})</span>
          </div>
          <div class="item-price">
            <span class="current-price">₹${item.price.toLocaleString()}</span>
            ${
              item.originalPrice
                ? `
                <span class="original-price">₹${item.originalPrice.toLocaleString()}</span>
                <span class="discount-badge">${item.discount}</span>
              `
                : ""
            }
          </div>
          <div class="item-status ${availabilityClass}">
            ${availabilityText}
          </div>
          <div class="item-date">Added ${formattedDate}</div>
          <div class="item-main-actions">
            <button class="btn btn-add-to-cart">
              <i class="bi bi-bag-plus"></i> Add to Cart
            </button>
            <button class="btn btn-remove" title="Remove">
              <i class="bi bi-trash"></i>
            </button>
          </div>
        </div>
      </div>
    `;
  }

  // Generate stars HTML
  generateStarsHTML(rating) {
    const fullStars = Math.floor(rating);
    const hasHalfStar = rating % 1 !== 0;
    const emptyStars = 5 - fullStars - (hasHalfStar ? 1 : 0);
    let starsHTML = "";

    for (let i = 0; i < fullStars; i++) {
      starsHTML += '<i class="bi bi-star-fill"></i>';
    }
    if (hasHalfStar) {
      starsHTML += '<i class="bi bi-star-half"></i>';
    }
    for (let i = 0; i < emptyStars; i++) {
      starsHTML += '<i class="bi bi-star"></i>';
    }
    return starsHTML;
  }

  // Get availability text
  getAvailabilityText(availability) {
    const availabilityMap = {
      "in-stock": "In Stock",
      "out-of-stock": "Out of Stock",
      "limited-stock": "Limited Stock",
    };
    return availabilityMap[availability] || "Unknown";
  }

  // Format date
  formatDate(date) {
    const now = new Date();
    const itemDate = new Date(date);
    const diffInDays = Math.floor((now - itemDate) / (1000 * 60 * 60 * 24));

    if (diffInDays === 0) return "today";
    if (diffInDays === 1) return "yesterday";
    if (diffInDays < 7) return `${diffInDays} days ago`;
    if (diffInDays < 30) return `${Math.floor(diffInDays / 7)} weeks ago`;
    return itemDate.toLocaleDateString();
  }

  // Update stats (only on wishlist pages)
  updateStats() {
    if (!this.isWishlistPage) return;

    const totalItems = this.wishlistItems.length;
    const totalValue = this.wishlistItems.reduce(
      (sum, item) => sum + item.price,
      0
    );
    const averagePrice =
      totalItems > 0 ? Math.round(totalValue / totalItems) : 0;

    // Update count display
    const countText =
      totalItems === 1
        ? "1 item saved for later"
        : `${totalItems} items saved for later`;
    const wishlistCountEl = document.getElementById("wishlistCount");
    if (wishlistCountEl) {
      wishlistCountEl.textContent = countText;
    }

    // Update stats
    this.updateElement("totalItems", totalItems);
    this.updateElement("totalItemsCount", totalItems);
    this.updateElement("totalValue", `₹${totalValue.toLocaleString()}`);
    this.updateElement("averagePrice", `₹${averagePrice.toLocaleString()}`);
  }

  // Update visibility of sections (only on wishlist pages)
  updateVisibility() {
    if (!this.isWishlistPage) return;

    const hasItems = this.wishlistItems.length > 0;

    // Toggle empty state
    const emptyWishlist = document.getElementById("emptyWishlist");
    const wishlistContent = document.getElementById("wishlistContent");
    const wishlistSummary = document.getElementById("wishlistSummary");
    const wishlistSharing = document.getElementById("wishlistSharing");

    if (emptyWishlist) {
      emptyWishlist.style.display = hasItems ? "none" : "block";
    }
    if (wishlistSummary) {
      wishlistSummary.style.display = hasItems ? "block" : "none";
    }
    if (wishlistSharing) {
      wishlistSharing.style.display = hasItems ? "block" : "none";
    }
  }

  // Remove item from wishlist
  removeItem(itemId) {
    this.wishlistItems = this.wishlistItems.filter(
      (item) => item.id !== itemId
    );
    this.selectedItems.delete(itemId);
    this.saveWishlistData();

    if (this.isWishlistPage) {
      this.updateDisplay();
      this.showNotification("Item removed from wishlist", "success");
    }

    this.updateHeaderWishlistCount();
  }

  // Bulk add selected items to cart
  bulkAddToCart() {
    if (!this.isWishlistPage) return;

    const selectedItemsArray = this.wishlistItems.filter((item) =>
      this.selectedItems.has(item.id)
    );
    if (selectedItemsArray.length === 0) return;

    // Add items to cart
    selectedItemsArray.forEach((item) => {
      this.addToCart(item, 1);
    });
    this.showNotification(
      `${selectedItemsArray.length} items added to cart`,
      "success"
    );
  }

  // Bulk remove selected items
  bulkRemoveItems() {
    if (!this.isWishlistPage) return;

    this.wishlistItems = this.wishlistItems.filter(
      (item) => !this.selectedItems.has(item.id)
    );
    const removedCount = this.selectedItems.size;
    this.selectedItems.clear();
    this.saveWishlistData();
    this.updateDisplay();
    this.updateSelectAllState();
    this.updateBulkActionButtons();
    this.updateHeaderWishlistCount();
    this.showNotification(
      `${removedCount} items removed from wishlist`,
      "success"
    );
  }

  // Clear all items
  clearAllItems() {
    this.wishlistItems = [];
    this.selectedItems.clear();
    this.saveWishlistData();

    if (this.isWishlistPage) {
      this.updateDisplay();
      this.updateSelectAllState();
      this.updateBulkActionButtons();
      this.showNotification("Wishlist cleared", "success");
    }

    this.updateHeaderWishlistCount();
  }

  // Show add to cart modal
  showAddToCartModal(itemId) {
    if (!this.isWishlistPage) return;

    const item = this.wishlistItems.find((i) => i.id === itemId);
    if (!item) return;

    // Populate modal
    const modalProductImage = document.getElementById("modalProductImage");
    const modalProductTitle = document.getElementById("modalProductTitle");
    const modalProductPrice = document.getElementById("modalProductPrice");

    if (modalProductImage) modalProductImage.src = item.image;
    if (modalProductTitle) modalProductTitle.textContent = item.title;
    if (modalProductPrice)
      modalProductPrice.textContent = `₹${item.price.toLocaleString()}`;

    // Reset quantity
    const quantityInput = document.querySelector(
      "#moveToCartModal .quantity-input"
    );
    if (quantityInput) quantityInput.value = 1;

    // Store current item
    this.currentModalItem = item;

    // Show modal
    const moveToCartModal = document.getElementById("moveToCartModal");
    if (moveToCartModal && typeof $ !== "undefined") {
      $("#moveToCartModal").modal("show");
    }
  }

  // Update modal quantity
  updateModalQuantity(change) {
    if (!this.isWishlistPage) return;

    const quantityInput = document.querySelector(
      "#moveToCartModal .quantity-input"
    );
    if (!quantityInput) return;

    const currentValue = parseInt(quantityInput.value);
    const newValue = Math.max(1, Math.min(10, currentValue + change));
    quantityInput.value = newValue;
  }

  // Confirm add to cart from modal
  confirmAddToCart() {
    if (!this.isWishlistPage || !this.currentModalItem) return;

    const quantityInput = document.querySelector(
      "#moveToCartModal .quantity-input"
    );
    const quantity = quantityInput ? parseInt(quantityInput.value) : 1;

    this.addToCart(this.currentModalItem, quantity);

    if (typeof $ !== "undefined") {
      $("#moveToCartModal").modal("hide");
    }
    this.showNotification("Item added to cart", "success");
  }

  // Add item to cart
  addToCart(item, quantity) {
    let cart = JSON.parse(localStorage.getItem("cart") || "[]");

    // Check if item already exists in cart
    const existingItemIndex = cart.findIndex(
      (cartItem) => cartItem.product.id === item.id
    );

    if (existingItemIndex > -1) {
      cart[existingItemIndex].quantity += quantity;
    } else {
      cart.push({
        product: item,
        quantity: quantity,
        variants: {},
      });
    }

    localStorage.setItem("cart", JSON.stringify(cart));
    this.updateCartCount();
  }

  // Update cart count in header (works on all pages)
  updateCartCount() {
    try {
      const cart = JSON.parse(localStorage.getItem("cart") || "[]");
      const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
      const cartCountElements = document.querySelectorAll(".cart-count");
      cartCountElements.forEach((el) => {
        if (el) {
          el.textContent = totalItems;
          el.style.display = totalItems > 0 ? "flex" : "none";
        }
      });
    } catch (error) {
      console.log("Cart count update failed:", error);
    }
  }

  // Update select all state
  updateSelectAllState() {
    if (!this.isWishlistPage) return;

    const selectAllCheckbox = document.getElementById("selectAllCheckbox");
    if (!selectAllCheckbox) return;

    const totalItems = this.wishlistItems.length;
    const selectedCount = this.selectedItems.size;

    selectAllCheckbox.checked = totalItems > 0 && selectedCount === totalItems;
    selectAllCheckbox.indeterminate =
      selectedCount > 0 && selectedCount < totalItems;
  }

  // Update bulk action buttons
  updateBulkActionButtons() {
    if (!this.isWishlistPage) return;

    const bulkAddToCart = document.getElementById("bulkAddToCart");
    const bulkRemove = document.getElementById("bulkRemove");
    const hasSelected = this.selectedItems.size > 0;

    if (bulkAddToCart) {
      bulkAddToCart.disabled = !hasSelected;
    }
    if (bulkRemove) {
      bulkRemove.disabled = !hasSelected;
    }
  }

  // Show confirmation modal
  showConfirmationModal(title, message, confirmCallback) {
    if (!this.isWishlistPage) return;

    const confirmationTitle = document.getElementById("confirmationTitle");
    const confirmationMessage = document.getElementById("confirmationMessage");
    const confirmButton = document.getElementById("confirmAction");

    if (confirmationTitle) confirmationTitle.textContent = title;
    if (confirmationMessage) confirmationMessage.textContent = message;

    if (confirmButton) {
      // Remove existing event listeners
      const newConfirmButton = confirmButton.cloneNode(true);
      confirmButton.parentNode.replaceChild(newConfirmButton, confirmButton);

      // Add new event listener
      newConfirmButton.addEventListener("click", () => {
        confirmCallback();
        if (typeof $ !== "undefined") {
          $("#confirmationModal").modal("hide");
        }
      });
    }

    if (typeof $ !== "undefined") {
      $("#confirmationModal").modal("show");
    }
  }

  // Show notification
  showNotification(message, type = "info") {
    // Create notification element
    const notification = document.createElement("div");
    notification.className = `alert alert-${this.getBootstrapType(
      type
    )} alert-dismissible fade show position-fixed`;
    notification.style.cssText =
      "top: 20px; right: 20px; z-index: 9999; min-width: 300px;";
    notification.innerHTML = `
      ${message}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    document.body.appendChild(notification);

    // Auto remove after 3 seconds
    setTimeout(() => {
      if (notification.parentNode) {
        notification.remove();
      }
    }, 3000);
  }

  // Convert notification type to Bootstrap type
  getBootstrapType(type) {
    const typeMap = {
      success: "success",
      error: "danger",
      warning: "warning",
      info: "info",
    };
    return typeMap[type] || "info";
  }

  // Update element text content (only on wishlist pages)
  updateElement(id, content) {
    if (!this.isWishlistPage) return;

    const element = document.getElementById(id);
    if (element) {
      element.textContent = content;
    }
  }

  // Add this method for header wishlist count (works on all pages)
  updateHeaderWishlistCount() {
    const totalItems = this.wishlistItems.length;
    const wishlistCountElements = document.querySelectorAll(".wishlist-count");
    wishlistCountElements.forEach((el) => {
      if (el) {
        el.textContent = totalItems;
        el.style.display = totalItems > 0 ? "flex" : "none";
      }
    });
  }

  // Load recommendations (sample data)
  loadRecommendations() {
    if (!this.isWishlistPage) return;

    const recommendationsGrid = document.getElementById("recommendationsGrid");
    if (!recommendationsGrid) return;

    const sampleRecommendations = [
      {
        id: 10,
        title: "Silver Chain Bracelet",
        image:
          "https://via.placeholder.com/250x200/f8f9fa/6c757d?text=Silver+Bracelet",
        price: 1850,
        rating: 4.3,
        reviewCount: 35,
      },
      {
        id: 11,
        title: "Rose Gold Ring",
        image:
          "https://via.placeholder.com/250x200/f8f9fa/6c757d?text=Rose+Gold+Ring",
        price: 3200,
        originalPrice: 3800,
        rating: 4.7,
        reviewCount: 28,
      },
      {
        id: 12,
        title: "Crystal Necklace Set",
        image:
          "https://via.placeholder.com/250x200/f8f9fa/6c757d?text=Crystal+Necklace",
        price: 5500,
        rating: 4.5,
        reviewCount: 19,
      },
    ];

    const recommendationsHTML = sampleRecommendations
      .map(
        (item) => `
          <div class="recommendation-item">
            <div class="card h-100 border-0 shadow-sm">
              <div class="position-relative">
                <img src="${item.image}" class="card-img-top" alt="${
          item.title
        }" style="height: 200px; object-fit: cover;">
                <div class="position-absolute top-0 end-0 p-2">
                  <button class="btn btn-sm btn-light rounded-circle" title="Add to wishlist">
                    <i class="bi bi-heart"></i>
                  </button>
                </div>
              </div>
              <div class="card-body d-flex flex-column">
                <h6 class="card-title">${item.title}</h6>
                <div class="mb-2">
                  ${this.generateStarsHTML(item.rating)}
                  <small class="text-muted ms-1">(${item.reviewCount})</small>
                </div>
                <div class="mb-3">
                  <span class="h6 text-primary">₹${item.price.toLocaleString()}</span>
                  ${
                    item.originalPrice
                      ? `<small class="text-muted text-decoration-line-through ms-2">₹${item.originalPrice.toLocaleString()}</small>`
                      : ""
                  }
                </div>
                <div class="mt-auto">
                  <button class="btn btn-outline-primary btn-sm w-100">Add to Wishlist</button>
                </div>
              </div>
            </div>
          </div>
        `
      )
      .join("");
    recommendationsGrid.innerHTML = recommendationsHTML;
  }

  // Public method to add item from other pages
  addItem(item) {
    // Check if item already exists
    if (
      !this.wishlistItems.find((existingItem) => existingItem.id === item.id)
    ) {
      item.dateAdded = new Date();
      this.wishlistItems.unshift(item);
      this.saveWishlistData();

      // Only update display if on wishlist page
      if (this.isWishlistPage) {
        this.updateDisplay();
      }

      // Update header count on all pages
      this.updateHeaderWishlistCount();
      return true;
    }
    return false;
  }

  // Public method to remove item from other pages
  removeItemById(itemId) {
    const itemExists = this.wishlistItems.find((item) => item.id === itemId);
    if (itemExists) {
      this.wishlistItems = this.wishlistItems.filter(
        (item) => item.id !== itemId
      );
      this.saveWishlistData();

      // Only update display if on wishlist page
      if (this.isWishlistPage) {
        this.updateDisplay();
      }

      // Update header count on all pages
      this.updateHeaderWishlistCount();
      return true;
    }
    return false;
  }
}

// Clean initialization code
document.addEventListener("DOMContentLoaded", () => {
  const wishlistManager = new WishlistManager();

  // Only load recommendations if on wishlist page
  if (wishlistManager.isWishlistPage) {
    wishlistManager.loadRecommendations();
  }

  // Make instance globally accessible
  window.WishlistManager = wishlistManager;
});

// Initialize WishlistManager when DOM is ready
document.addEventListener("DOMContentLoaded", function () {
  window.wishlistManager = new WishlistManager();
});

// Initialize the wishlist page when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
  const wishlistManager = new WishlistManager();

  // Load recommendations
  wishlistManager.loadRecommendations();

  // Make instance globally accessible
  window.WishlistManager = wishlistManager;

  // Initialize cart count
  wishlistManager.updateCartCount();
});

// Export for module systems (if needed)
if (typeof module !== "undefined" && module.exports) {
  module.exports = WishlistManager;
}
//Header popup and dropdown JavaScript to Populate Previews Basic data population script
document.addEventListener("DOMContentLoaded", function () {
  // Demo: Replace with actual wishlist/cart AJAX/localStorage logic
  let wishlist = [
    { title: "Gold Bangle", url: "product_view.php?id=1" },
    { title: "Pearl Earrings", url: "product_view.php?id=2" },
  ];
  let cart = [
    { title: "Diamond Pendant", url: "product_view.php?id=3", qty: 1 },
    { title: "Anklet", url: "product_view.php?id=4", qty: 2 },
  ];

  function renderList(list, ulId, isCart = false) {
    const ul = document.getElementById(ulId);
    if (!ul) return;
    if (!list.length) {
      ul.innerHTML = `<li>${
        isCart ? "Your cart is empty." : "No items found."
      }</li>`;
      return;
    }
    ul.innerHTML = list
      .map(
        (item) =>
          `<li>
                <a href="${
                  item.url
                }" style="color:var(--violet);font-weight:600;">${
            item.title
          }</a>
                ${isCart ? `<span class="text-muted"> x${item.qty}</span>` : ""}
            </li>`
      )
      .join("");
  }
  renderList(wishlist, "miniWishlistList");
  renderList(cart, "miniCartList", true);

  // Optionally, support Account menu toggle on mobile (click instead of hover)
  document.querySelectorAll(".account-toggle").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      let panel = btn.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "";
      } else {
        document
          .querySelectorAll(".mini-account-panel")
          .forEach((p) => (p.style.display = "none"));
        panel.style.display = "block";
      }
    });
  });
  document.addEventListener("click", (e) => {
    if (!e.target.closest(".account-action")) {
      document
        .querySelectorAll(".mini-account-panel")
        .forEach((p) => (p.style.display = "none"));
    }
  });
});
// sticky header code
// Sticky Header JavaScript

// index about us section button hover styles and effects
// Add functionality to the buttons
document.querySelectorAll(".add-to-cart-btn-sm").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.stopPropagation();
    this.classList.add("adding");

    // Change icon to checkmark temporarily
    const icon = this.querySelector("i");
    const originalClass = icon.className;
    icon.className = "bi bi-check-lg";

    setTimeout(() => {
      icon.className = originalClass;
      this.classList.remove("adding");
    }, 1000);

    console.log("Product added to cart");
  });
});

document.querySelectorAll(".wishlist-btn-sm").forEach((button) => {
  button.addEventListener("click", function (e) {
    e.stopPropagation();
    this.classList.toggle("added");

    // Toggle between outline and filled heart
    const icon = this.querySelector("i");
    if (this.classList.contains("added")) {
      icon.className = "bi bi-bag-heart-fill";
    } else {
      icon.className = "bi bi-bag-heart";
    }

    console.log("Product toggled in wishlist");
  });
});
// product view page write a review modal functionality
document.addEventListener("DOMContentLoaded", function () {
  // Get the write review button
  const writeReviewBtn = document.querySelector(".write-review-btn");

  if (writeReviewBtn) {
    // Add click event to open modal
    writeReviewBtn.addEventListener("click", function () {
      $("#reviewModal").modal("show");
    });
  }

  // Star rating functionality
  function initializeStarRating() {
    const stars = document.querySelectorAll(".rating-stars .star");
    const selectedRatingInput = document.getElementById("selectedRating");
    const ratingText = document.getElementById("ratingText");

    if (!stars.length) return;

    // Rating messages
    const ratingMessages = {
      0: "Select your rating",
      1: "Poor - I hate it",
      2: "Fair - I don't like it",
      3: "Good - It's okay",
      4: "Very Good - I like it",
      5: "Excellent - I love it",
    };

    // Set initial state
    ratingText.textContent = ratingMessages[0];
    selectedRatingInput.value = "0";

    // Add events to each star
    stars.forEach((star) => {
      // Click event
      star.addEventListener("click", function () {
        const ratingValue = parseInt(this.getAttribute("data-value"));
        selectedRatingInput.value = ratingValue;
        updateStarsDisplay(ratingValue);
        ratingText.textContent = ratingMessages[ratingValue];
      });

      // Mouseover event
      star.addEventListener("mouseover", function () {
        const hoverValue = parseInt(this.getAttribute("data-value"));
        updateStarsDisplay(hoverValue, true);
        ratingText.textContent = ratingMessages[hoverValue];
      });

      // Mouseout event
      star.addEventListener("mouseout", function () {
        const currentRating = parseInt(selectedRatingInput.value);
        updateStarsDisplay(currentRating);
        ratingText.textContent = ratingMessages[currentRating];
      });
    });

    // Function to update stars display
    function updateStarsDisplay(rating, isHover = false) {
      stars.forEach((star) => {
        const starValue = parseInt(star.getAttribute("data-value"));
        const icon = star.querySelector("i");

        if (starValue <= rating) {
          icon.classList.remove("bi-star");
          icon.classList.add("bi-star-fill");
          star.classList.add("active");
          if (isHover) {
            star.classList.add("hover");
          } else {
            star.classList.remove("hover");
          }
        } else {
          icon.classList.remove("bi-star-fill");
          icon.classList.add("bi-star");
          star.classList.remove("active", "hover");
        }
      });
    }
  }

  // Initialize star rating when modal is shown
  $("#reviewModal").on("shown.bs.modal", function () {
    initializeStarRating();
  });

  // Reset form when modal is hidden
  $("#reviewModal").on("hidden.bs.modal", function () {
    document.getElementById("reviewForm").reset();
    document.getElementById("selectedRating").value = "0";
    document.getElementById("ratingText").textContent = "Select your rating";

    // Reset stars
    const stars = document.querySelectorAll(".rating-stars .star");
    stars.forEach((star) => {
      const icon = star.querySelector("i");
      icon.classList.remove("bi-star-fill");
      icon.classList.add("bi-star");
      star.classList.remove("active", "hover");
    });
  });

  // Form submission handling
  const reviewForm = document.getElementById("reviewForm");
  if (reviewForm) {
    reviewForm.addEventListener("submit", function (e) {
      e.preventDefault();

      // Validate rating was selected
      const rating = document.getElementById("selectedRating").value;
      if (rating === "0") {
        alert("Please select a rating");
        return;
      }

      // Here you would typically send the data to your server
      const formData = {
        title: document.getElementById("reviewTitle").value,
        rating: rating,
        comments: document.getElementById("reviewComments").value,
      };

      console.log("Review submitted:", formData);

      // Show success message (you can replace this with actual API call)
      alert("Thank you for your review!");

      // Close the modal
      $("#reviewModal").modal("hide");
    });
  }
});
// profiles tab switch JS
// Profile Tabs JavaScript
document.addEventListener("DOMContentLoaded", function () {
  // Tab switching functionality
  document
    .querySelectorAll('.profile-menu-item[data-toggle="tab"]')
    .forEach(function (tab) {
      tab.addEventListener("click", function (e) {
        e.preventDefault();

        // Remove active class from all menu items
        document
          .querySelectorAll(".profile-menu-item")
          .forEach(function (item) {
            item.classList.remove("active");
          });

        // Add active class to clicked item
        this.classList.add("active");

        // Switch tabs
        const targetTab = this.getAttribute("href");
        document.querySelectorAll(".tab-pane").forEach(function (pane) {
          pane.classList.remove("show", "active");
        });

        const targetPane = document.querySelector(targetTab);
        if (targetPane) {
          targetPane.classList.add("show", "active");
        }
      });
    });

  // Coupon filter functionality
  document.querySelectorAll("[data-filter]").forEach(function (btn) {
    btn.addEventListener("click", function () {
      const filter = this.dataset.filter;

      // Update button states
      document
        .querySelectorAll("[data-filter]")
        .forEach((b) => b.classList.remove("active"));
      this.classList.add("active");

      // Filter coupons
      document.querySelectorAll(".coupon-card").forEach(function (card) {
        if (filter === "available") {
          card.style.display = card.classList.contains("available")
            ? "flex"
            : "none";
        } else if (filter === "used") {
          card.style.display = card.classList.contains("used")
            ? "flex"
            : "none";
        } else if (filter === "expired") {
          card.style.display = card.classList.contains("expired")
            ? "flex"
            : "none";
        }
      });
    });
  });

  // Copy coupon code functionality
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("copy-code-btn")) {
      const couponCode =
        e.target.parentElement.querySelector("span").textContent;

      // Copy to clipboard
      navigator.clipboard.writeText(couponCode).then(function () {
        e.target.textContent = "Copied!";
        setTimeout(function () {
          e.target.textContent = "Copy";
        }, 2000);
      });
    }
  });

  // Wishlist remove functionality
  document.addEventListener("click", function (e) {
    if (e.target.closest(".wishlist-remove-btn")) {
      const card = e.target.closest(".wishlist-item-card");
      card.style.animation = "fadeOut 0.3s ease";
      setTimeout(function () {
        card.remove();
      }, 300);
    }
  });

  // Address management (same as before)
  // Payment methods management (same as before)
  // Order actions (same as before)
});

// CSS Animation for fade out
const style = document.createElement("style");
style.textContent = `
    @keyframes fadeOut {
        from { opacity: 1; transform: scale(1); }
        to { opacity: 0; transform: scale(0.9); }
    }
`;
document.head.appendChild(style);
// Header to profile page tab change
// Function to handle tab navigation via URL hash
function handleTabNavigation() {
  // Get the hash from the URL
  const hash = window.location.hash;

  // If there's a hash in the URL
  if (hash) {
    // Remove the '#' character to get the tab ID
    const tabId = hash.substring(1);

    // Find the tab button that corresponds to this tab ID
    const tabButton = document.querySelector(
      `.profile-menu-item[href="#${tabId}"]`
    );
    const tabPane = document.getElementById(tabId);

    // If both the tab button and tab pane exist
    if (tabButton && tabPane) {
      // Remove active class from all tab buttons
      document.querySelectorAll(".profile-menu-item").forEach((item) => {
        item.classList.remove("active");
      });

      // Remove active class from all tab panes
      document.querySelectorAll(".tab-pane").forEach((pane) => {
        pane.classList.remove("show", "active");
      });

      // Add active class to the target tab button
      tabButton.classList.add("active");

      // Add active class to the target tab pane
      tabPane.classList.add("show", "active");

      // Scroll to the tab content if needed
      setTimeout(() => {
        tabPane.scrollIntoView({ behavior: "smooth", block: "start" });
      }, 100);
    }
  }
}

// Run the function when the page loads
document.addEventListener("DOMContentLoaded", function () {
  handleTabNavigation();
});

// Also run the function when the hash changes (if user clicks browser back/forward buttons)
window.addEventListener("hashchange", function () {
  handleTabNavigation();
});

// Optional: Add click event listeners to tab buttons for smooth navigation
document.querySelectorAll(".profile-menu-item").forEach((item) => {
  item.addEventListener("click", function (e) {
    e.preventDefault();

    // Get the target tab ID from the href attribute
    const targetTab = this.getAttribute("href");

    // Update the URL hash
    window.location.hash = targetTab;

    // Handle the tab navigation
    handleTabNavigation();
  });
});
// Mobile Offcanvas Menu JavaScript
document.addEventListener("DOMContentLoaded", function () {
  // Mobile offcanvas menu toggle functionality
  document.addEventListener("click", function (e) {
    if (e.target.closest(".mobile-offcanvas-nav-toggle")) {
      e.preventDefault();

      const toggleBtn = e.target.closest(".mobile-offcanvas-nav-toggle");
      const targetId = toggleBtn.dataset.target;
      const submenu = document.getElementById(targetId);
      const parentItem = toggleBtn.closest(".mobile-offcanvas-nav-expandable");

      if (submenu) {
        if (submenu.classList.contains("show")) {
          submenu.classList.remove("show");
          parentItem.classList.remove("expanded");
        } else {
          // Close other open submenus
          document
            .querySelectorAll(".mobile-offcanvas-nav-submenu.show")
            .forEach((menu) => {
              menu.classList.remove("show");
            });
          document
            .querySelectorAll(".mobile-offcanvas-nav-expandable.expanded")
            .forEach((item) => {
              item.classList.remove("expanded");
            });

          // Open clicked submenu
          submenu.classList.add("show");
          parentItem.classList.add("expanded");
        }
      }
    }
  });

  // Close mobile offcanvas when clicking on links
  document.addEventListener("click", function (e) {
    if (
      e.target.closest(".mobile-offcanvas-nav-link") &&
      !e.target.closest(".mobile-offcanvas-nav-toggle")
    ) {
      $("#mobileOffcanvasMenu").modal("hide");
    }

    if (
      e.target.closest(".mobile-offcanvas-submenu-link") ||
      e.target.closest(".mobile-offcanvas-quick-action")
    ) {
      setTimeout(() => {
        $("#mobileOffcanvasMenu").modal("hide");
      }, 250);
    }
  });

  // Custom modal slide animation for offcanvas
  $("#mobileOffcanvasMenu").on("show.bs.modal", function () {
    const modal = this;
    setTimeout(() => {
      modal.classList.add("show");
    }, 10);
    document.body.style.overflow = "hidden";
  });

  $("#mobileOffcanvasMenu").on("hide.bs.modal", function () {
    this.classList.remove("show");
  });

  // Reset menu state when modal is closed
  $("#mobileOffcanvasMenu").on("hidden.bs.modal", function () {
    // Close all open submenus
    document
      .querySelectorAll(".mobile-offcanvas-nav-submenu.show")
      .forEach((menu) => {
        menu.classList.remove("show");
      });
    document
      .querySelectorAll(".mobile-offcanvas-nav-expandable.expanded")
      .forEach((item) => {
        item.classList.remove("expanded");
      });
    document.body.style.overflow = "";
  });

  // Mobile header sticky behavior
  let lastScrollTop = 0;
  const mobileHeader = document.querySelector(".mobile-header");

  if (mobileHeader && window.innerWidth < 992) {
    window.addEventListener("scroll", function () {
      const scrollTop =
        window.pageYOffset || document.documentElement.scrollTop;

      if (scrollTop > 100) {
        mobileHeader.classList.add("sticky");
      } else {
        mobileHeader.classList.remove("sticky");
      }

      lastScrollTop = scrollTop;
    });
  }
});
// search modal
// Search Modal Functionality
document.addEventListener("DOMContentLoaded", function () {
  // Sample product data - replace with your actual product data or API
  const sampleProducts = [
    {
      id: 1,
      name: "Elegant Gold Bangles Set",
      category: "Bangles",
      price: "₹2,850",
      image: "images/bangles1.webp",
    },
    {
      id: 2,
      name: "Diamond Stud Earrings",
      category: "Earrings",
      price: "₹4,999",
      image: "images/earrings1.webp",
    },
    {
      id: 3,
      name: "Pearl Drop Earrings",
      category: "Earrings",
      price: "₹2,649",
      image: "images/earrings2.webp",
    },
    {
      id: 4,
      name: "Kundan Necklace Set",
      category: "Necklaces",
      price: "₹3,999",
      image: "images/necklace1.webp",
    },
    {
      id: 5,
      name: "Silver Cocktail Ring",
      category: "Rings",
      price: "₹899",
      image: "images/ring1.webp",
    },
    {
      id: 6,
      name: "Traditional Anklets",
      category: "Anklets",
      price: "₹1,199",
      image: "images/anklets1.webp",
    },
    {
      id: 7,
      name: "Oxidized Silver Bangles",
      category: "Bangles",
      price: "₹1,599",
      image: "images/bangles2.webp",
    },
    {
      id: 8,
      name: "Jhumka Earrings",
      category: "Earrings",
      price: "₹1,799",
      image: "images/jhumka1.webp",
    },
    {
      id: 9,
      name: "Gold Plated Chain",
      category: "Necklaces",
      price: "₹2,299",
      image: "images/chain1.webp",
    },
    {
      id: 10,
      name: "Bridal Jewelry Set",
      category: "Sets",
      price: "₹8,999",
      image: "images/bridal1.webp",
    },
    {
      id: 11,
      name: "Diamond Pendant",
      category: "Pendants",
      price: "₹5,499",
      image: "images/pendant1.webp",
    },
    {
      id: 12,
      name: "Temple Jewelry Set",
      category: "Sets",
      price: "₹6,799",
      image: "images/temple1.webp",
    },
  ];

  let recentSearches = JSON.parse(
    localStorage.getItem("recentSearches") || "[]"
  );
  let searchTimeout;

  // Elements
  const searchModalInput = document.getElementById("searchModalInput");
  const searchClearBtn = document.getElementById("searchClearBtn");
  const popularSearchSection = document.getElementById("popularSearchSection");
  const recentSearchSection = document.getElementById("recentSearchSection");
  const searchResultsSection = document.getElementById("searchResultsSection");
  const searchResultsList = document.getElementById("searchResultsList");
  const searchResultsTitle = document.getElementById("searchResultsTitle");
  const searchResultsCount = document.getElementById("searchResultsCount");
  const searchLoading = document.getElementById("searchLoading");
  const searchNoResults = document.getElementById("searchNoResults");
  const recentSearchList = document.getElementById("recentSearchList");

  // Open search modal when clicking on search inputs
  document.addEventListener("click", function (e) {
    if (
      e.target.closest(".search-form .form-control") ||
      e.target.closest(".mobile-search-form .form-control") ||
      e.target.closest(".mobile-offcanvas-search-form .form-control")
    ) {
      e.preventDefault();
      $("#searchModal").modal("show");
      setTimeout(() => {
        searchModalInput.focus();
      }, 300);
    }
  });

  // Initialize search modal
  $("#searchModal").on("shown.bs.modal", function () {
    searchModalInput.focus();
    showInitialState();
    loadRecentSearches();
  });

  // Clear search input
  searchClearBtn.addEventListener("click", function () {
    searchModalInput.value = "";
    searchClearBtn.style.display = "none";
    showInitialState();
    searchModalInput.focus();
  });

  // Search input handler
  searchModalInput.addEventListener("input", function () {
    const query = this.value.trim();

    if (query.length > 0) {
      searchClearBtn.style.display = "block";

      // Clear previous timeout
      clearTimeout(searchTimeout);

      // Add loading state
      showLoadingState();

      // Debounce search
      searchTimeout = setTimeout(() => {
        performSearch(query);
      }, 300);
    } else {
      searchClearBtn.style.display = "none";
      showInitialState();
    }
  });

  // Handle Enter key
  searchModalInput.addEventListener("keypress", function (e) {
    if (e.key === "Enter") {
      e.preventDefault();
      const query = this.value.trim();
      if (query) {
        addToRecentSearches(query);
        performSearch(query);
      }
    }
  });

  // Popular search tags
  document.addEventListener("click", function (e) {
    if (
      e.target.closest(".search-popular-tag") ||
      e.target.closest(".search-suggestion-tag")
    ) {
      const tag = e.target.closest(
        ".search-popular-tag, .search-suggestion-tag"
      );
      const query = tag.dataset.search;
      searchModalInput.value = query;
      searchClearBtn.style.display = "block";
      addToRecentSearches(query);
      performSearch(query);
    }
  });

  // Recent search handlers
  document.addEventListener("click", function (e) {
    if (e.target.closest(".search-recent-item")) {
      const item = e.target.closest(".search-recent-item");
      if (!e.target.closest(".search-recent-remove")) {
        const query = item.dataset.search;
        searchModalInput.value = query;
        searchClearBtn.style.display = "block";
        performSearch(query);
      }
    }

    if (e.target.closest(".search-recent-remove")) {
      e.stopPropagation();
      const item = e.target.closest(".search-recent-item");
      const query = item.dataset.search;
      removeRecentSearch(query);
    }
  });

  // Clear all recent searches
  document
    .getElementById("clearRecentBtn")
    .addEventListener("click", function () {
      recentSearches = [];
      localStorage.setItem("recentSearches", JSON.stringify(recentSearches));
      loadRecentSearches();
    });

  function showInitialState() {
    hideAllSections();
    popularSearchSection.style.display = "block";

    if (recentSearches.length > 0) {
      recentSearchSection.style.display = "block";
    }
  }

  function showLoadingState() {
    hideAllSections();
    searchResultsSection.style.display = "block";
    searchLoading.style.display = "block";
    searchResultsList.style.display = "none";
    searchNoResults.style.display = "none";
  }

  function hideAllSections() {
    popularSearchSection.style.display = "none";
    recentSearchSection.style.display = "none";
    searchResultsSection.style.display = "none";
    searchLoading.style.display = "none";
    searchResultsList.style.display = "none";
    searchNoResults.style.display = "none";
  }

  function performSearch(query) {
    // Simulate API call delay
    setTimeout(() => {
      const results = sampleProducts.filter(
        (product) =>
          product.name.toLowerCase().includes(query.toLowerCase()) ||
          product.category.toLowerCase().includes(query.toLowerCase())
      );

      displaySearchResults(results, query);
    }, 500);
  }

  function displaySearchResults(results, query) {
    hideAllSections();
    searchResultsSection.style.display = "block";
    searchLoading.style.display = "none";

    searchResultsTitle.textContent = `Search Results for "${query}"`;

    if (results.length > 0) {
      searchResultsCount.textContent = `${results.length} product${
        results.length > 1 ? "s" : ""
      } found`;
      searchResultsList.style.display = "block";
      searchNoResults.style.display = "none";

      searchResultsList.innerHTML = results
        .map(
          (product) => `
                <a href="product-detail.php?id=${product.id}" class="search-result-item">
                    <img src="${product.image}" alt="${product.name}" class="search-result-image" onerror="this.src='images/placeholder.webp'">
                    <div class="search-result-info">
                        <div class="search-result-title">${product.name}</div>
                        <div class="search-result-category">${product.category}</div>
                        <div class="search-result-price">${product.price}</div>
                    </div>
                </a>
            `
        )
        .join("");
    } else {
      searchResultsCount.textContent = "No results found";
      searchResultsList.style.display = "none";
      searchNoResults.style.display = "block";
    }
  }

  function addToRecentSearches(query) {
    // Remove if already exists
    recentSearches = recentSearches.filter((search) => search !== query);
    // Add to beginning
    recentSearches.unshift(query);
    // Keep only last 5 searches
    recentSearches = recentSearches.slice(0, 5);
    // Save to localStorage
    localStorage.setItem("recentSearches", JSON.stringify(recentSearches));
    loadRecentSearches();
  }

  function removeRecentSearch(query) {
    recentSearches = recentSearches.filter((search) => search !== query);
    localStorage.setItem("recentSearches", JSON.stringify(recentSearches));
    loadRecentSearches();
  }

  function loadRecentSearches() {
    if (recentSearches.length > 0) {
      recentSearchSection.style.display = "block";
      recentSearchList.innerHTML = recentSearches
        .map(
          (search) => `
                <div class="search-recent-item" data-search="${search}">
                    <span class="search-recent-icon bi bi-clock-history"></span>
                    <p class="search-recent-text">${search}</p>
                    <button class="search-recent-remove" title="Remove">
                        <span class="bi bi-x"></span>
                    </button>
                </div>
            `
        )
        .join("");
    } else {
      recentSearchSection.style.display = "none";
    }
  }

  // Close modal when clicking on search results
  document.addEventListener("click", function (e) {
    if (e.target.closest(".search-result-item")) {
      setTimeout(() => {
        $("#searchModal").modal("hide");
      }, 100);
    }
  });
});
