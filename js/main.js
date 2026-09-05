/**
 * NEXORA MALL - PRODUCTION JAVASCRIPT ENGINE
 * Handles:
 * - Theme Switcher (Dark / Light Mode)
 * - Persistent Shopping Cart (localStorage)
 * - Persistent Wishlist (localStorage)
 * - Hero Slider with Auto-Advance & Controls
 * - Flash Sale Live Countdown Timer
 * - Quick View Modal System
 * - Scroll-Triggered Reveal Animations
 * - Back to Top Button
 * - FAQ Accordion
 * - Live Category & Keyword Filter
 * - Order Tracking Simulation
 * - Form Validation & Toast Alerts
 */

// 1. Core Product Database
const NEXORA_PRODUCTS = [
  {
    id: "nx-101",
    name: "Aura Royal Chronograph Gold Watch",
    category: "accessories",
    categoryLabel: "Luxury Watches",
    price: 349.00,
    originalPrice: 420.00,
    rating: 4.9,
    reviews: 128,
    isNew: true,
    isSale: true,
    img: "https://images.unsplash.com/photo-1524805444758-089113d48a6d?auto=format&fit=crop&w=600&q=80",
    desc: "Crafted with 18k gold plating, sapphire crystal glass, and Japanese quartz movement. Water-resistant up to 50 meters."
  },
  {
    id: "nx-102",
    name: "Velvet Elegance Tailored Blazer",
    category: "fashion",
    categoryLabel: "Men's Fashion",
    price: 189.00,
    originalPrice: 240.00,
    rating: 4.8,
    reviews: 95,
    isNew: true,
    isSale: false,
    img: "https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=600&q=80",
    desc: "Handcrafted Italian wool-blend blazer with slim structured silhouette, satin peak lapels, and custom gold-engraved buttons."
  },
  {
    id: "nx-103",
    name: "SonicPro Wireless ANC Studio Headphones",
    category: "electronics",
    categoryLabel: "Audio & Tech",
    price: 279.00,
    originalPrice: 320.00,
    rating: 5.0,
    reviews: 310,
    isNew: false,
    isSale: true,
    img: "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=600&q=80",
    desc: "40mm custom titanium drivers, active noise cancellation up to 38dB, 45-hour battery life with ultra-plush memory foam earcups."
  },
  {
    id: "nx-104",
    name: "Lumière Silk Evening Gown",
    category: "fashion",
    categoryLabel: "Women's Fashion",
    price: 295.00,
    originalPrice: 360.00,
    rating: 4.9,
    reviews: 84,
    isNew: true,
    isSale: false,
    img: "https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?auto=format&fit=crop&w=600&q=80",
    desc: "100% pure Mulberry silk draped gown with subtle cowl neckline and graceful floor-length silhouette for gala evenings."
  },
  {
    id: "nx-105",
    name: "Nordic Minimalist Marble Coffee Table",
    category: "home",
    categoryLabel: "Home & Living",
    price: 450.00,
    originalPrice: 550.00,
    rating: 4.7,
    reviews: 62,
    isNew: false,
    isSale: true,
    img: "https://images.unsplash.com/photo-1533090161767-e6ffed986b88?auto=format&fit=crop&w=600&q=80",
    desc: "Carrara white marble top with brushed brass gold steel frame. A masterwork of Scandinavian interior architecture."
  },
  {
    id: "nx-106",
    name: "Radiance Gold Botanical Facial Elixir",
    category: "beauty",
    categoryLabel: "Beauty & Care",
    price: 95.00,
    originalPrice: 120.00,
    rating: 4.9,
    reviews: 175,
    isNew: true,
    isSale: false,
    img: "https://images.unsplash.com/photo-1608248597359-0a67cf5e4c6c?auto=format&fit=crop&w=600&q=80",
    desc: "Infused with 24k gold flakes, cold-pressed rosehip seed oil, and squalane to deeply rejuvenate and boost radiant skin glow."
  },
  {
    id: "nx-107",
    name: "Artisan Organic Saffron & Raw Forest Honey",
    category: "grocery",
    categoryLabel: "Gourmet Grocery",
    price: 65.00,
    originalPrice: 80.00,
    rating: 5.0,
    reviews: 204,
    isNew: false,
    isSale: true,
    img: "https://images.unsplash.com/photo-1587049352846-4a222e784d38?auto=format&fit=crop&w=600&q=80",
    desc: "Grade 1 Super Negin Kashmiri Saffron paired with wild honeycomb nectar. 100% raw, unpasteurized, and pure."
  },
  {
    id: "nx-108",
    name: "Milano Leather Briefcase & Laptop Bag",
    category: "accessories",
    categoryLabel: "Leather Goods",
    price: 220.00,
    originalPrice: 280.00,
    rating: 4.8,
    reviews: 140,
    isNew: false,
    isSale: false,
    img: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?auto=format&fit=crop&w=600&q=80",
    desc: "Full-grain vegetable-tanned leather with padded 16-inch laptop compartment, brass hardware, and detachable shoulder strap."
  }
];

// 2. Global State Management
class StoreState {
  constructor() {
    this.cart = JSON.parse(localStorage.getItem('nexora_cart') || '[]');
    this.wishlist = JSON.parse(localStorage.getItem('nexora_wishlist') || '[]');
    this.theme = localStorage.getItem('nexora_theme') || 'light';
    this.discountPercent = parseFloat(localStorage.getItem('nexora_discount') || '0');
  }

  saveCart() {
    localStorage.setItem('nexora_cart', JSON.stringify(this.cart));
    this.updateBadges();
  }

  saveWishlist() {
    localStorage.setItem('nexora_wishlist', JSON.stringify(this.wishlist));
    this.updateBadges();
  }

  saveTheme() {
    localStorage.setItem('nexora_theme', this.theme);
  }

  updateBadges() {
    const cartCount = this.cart.reduce((sum, i) => sum + i.qty, 0);
    const wishCount = this.wishlist.length;

    document.querySelectorAll('.cart-badge-count').forEach(el => el.textContent = cartCount);
    document.querySelectorAll('.wishlist-badge-count').forEach(el => el.textContent = wishCount);
    
    // Cart subtotal badge in header if exists
    const cartSubtotal = this.cart.reduce((sum, i) => sum + (i.price * i.qty), 0);
    document.querySelectorAll('.cart-header-subtotal').forEach(el => {
      el.textContent = `$${cartSubtotal.toFixed(2)}`;
    });
  }
}

const state = new StoreState();

// 3. Document Ready Setup
document.addEventListener('DOMContentLoaded', () => {
  initTheme();
  state.updateBadges();
  initHeroSlider();
  initFlashCountdown();
  initScrollAnimations();
  initBackToTop();
  initFaqAccordion();
  initQuickViewModal();
  initMobileNav();
});

// 4. Theme Toggle (Dark / Light Mode)
function initTheme() {
  if (state.theme === 'dark') {
    document.body.classList.add('dark-theme');
    updateThemeIcon(true);
  } else {
    document.body.classList.remove('dark-theme');
    updateThemeIcon(false);
  }

  document.querySelectorAll('.theme-toggle-btn').forEach(btn => {
    btn.addEventListener('click', toggleTheme);
  });
}

function toggleTheme() {
  const isDark = document.body.classList.toggle('dark-theme');
  state.theme = isDark ? 'dark' : 'light';
  state.saveTheme();
  updateThemeIcon(isDark);
  showToast(`Switched to ${state.theme.toUpperCase()} luxury theme`);
}

function updateThemeIcon(isDark) {
  document.querySelectorAll('.theme-toggle-btn i').forEach(icon => {
    if (isDark) {
      icon.className = 'fas fa-sun';
    } else {
      icon.className = 'fas fa-moon';
    }
  });
}

// 5. Hero Slider Carousel
function initHeroSlider() {
  const slides = document.querySelectorAll('.hero-slide');
  if (!slides.length) return;

  const dotsContainer = document.querySelector('.slider-dots-container');
  let currentSlide = 0;
  let slideInterval;

  // Build dots
  if (dotsContainer) {
    dotsContainer.innerHTML = '';
    slides.forEach((_, idx) => {
      const dot = document.createElement('button');
      dot.className = `slider-dot ${idx === 0 ? 'active' : ''}`;
      dot.setAttribute('aria-label', `Slide ${idx + 1}`);
      dot.addEventListener('click', () => goToSlide(idx));
      dotsContainer.appendChild(dot);
    });
  }

  function goToSlide(n) {
    slides[currentSlide].classList.remove('active');
    const dots = document.querySelectorAll('.slider-dot');
    if (dots[currentSlide]) dots[currentSlide].classList.remove('active');

    currentSlide = (n + slides.length) % slides.length;

    slides[currentSlide].classList.add('active');
    if (dots[currentSlide]) dots[currentSlide].classList.add('active');
  }

  function nextSlide() {
    goToSlide(currentSlide + 1);
  }

  function prevSlide() {
    goToSlide(currentSlide - 1);
  }

  // Hook controls
  const nextBtn = document.querySelector('.slider-next');
  const prevBtn = document.querySelector('.slider-prev');
  if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); resetTimer(); });
  if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); resetTimer(); });

  function startTimer() {
    slideInterval = setInterval(nextSlide, 5500);
  }

  function resetTimer() {
    clearInterval(slideInterval);
    startTimer();
  }

  const sliderWrap = document.querySelector('.hero-slider-wrap');
  if (sliderWrap) {
    sliderWrap.addEventListener('mouseenter', () => clearInterval(slideInterval));
    sliderWrap.addEventListener('mouseleave', startTimer);
  }

  startTimer();
}

// 6. Flash Sale Countdown Timer
function initFlashCountdown() {
  const hoursEl = document.getElementById('cd-hours');
  const minsEl = document.getElementById('cd-mins');
  const secsEl = document.getElementById('cd-secs');

  if (!hoursEl || !minsEl || !secsEl) return;

  // Set target 48 hours from current timestamp
  let totalSeconds = 48 * 3600 + 15 * 60 + 30;

  function update() {
    if (totalSeconds <= 0) {
      totalSeconds = 48 * 3600; // loop
    }
    const h = Math.floor(totalSeconds / 3600);
    const m = Math.floor((totalSeconds % 3600) / 60);
    const s = totalSeconds % 60;

    hoursEl.textContent = String(h).padStart(2, '0');
    minsEl.textContent = String(m).padStart(2, '0');
    secsEl.textContent = String(s).padStart(2, '0');

    totalSeconds--;
  }

  update();
  setInterval(update, 1000);
}

// 7. Cart & Wishlist Actions
function addToCart(productId, qty = 1) {
  const prod = NEXORA_PRODUCTS.find(p => p.id === productId);
  if (!prod) return;

  const existing = state.cart.find(item => item.id === productId);
  if (existing) {
    existing.qty += qty;
  } else {
    state.cart.push({
      id: prod.id,
      name: prod.name,
      price: prod.price,
      img: prod.img,
      categoryLabel: prod.categoryLabel,
      qty: qty
    });
  }

  state.saveCart();
  showToast(`Added "${prod.name}" to your Cart!`);
}

function toggleWishlist(productId) {
  const prod = NEXORA_PRODUCTS.find(p => p.id === productId);
  if (!prod) return;

  const idx = state.wishlist.findIndex(item => item.id === productId);
  if (idx > -1) {
    state.wishlist.splice(idx, 1);
    showToast(`Removed "${prod.name}" from Wishlist.`);
  } else {
    state.wishlist.push({
      id: prod.id,
      name: prod.name,
      price: prod.price,
      img: prod.img,
      categoryLabel: prod.categoryLabel
    });
    showToast(`Saved "${prod.name}" to Wishlist!`);
  }

  state.saveWishlist();
  updateWishlistUI();
}

// 8. Quick View Modal
function initQuickViewModal() {
  const modal = document.getElementById('quick-view-modal');
  if (!modal) return;

  const closeBtn = document.getElementById('close-modal-btn');
  if (closeBtn) closeBtn.addEventListener('click', closeQuickView);

  modal.addEventListener('click', (e) => {
    if (e.target === modal) closeQuickView();
  });
}

function openQuickView(productId) {
  const p = NEXORA_PRODUCTS.find(item => item.id === productId);
  if (!p) return;

  const modal = document.getElementById('quick-view-modal');
  if (!modal) return;

  document.getElementById('qv-img').src = p.img;
  document.getElementById('qv-category').textContent = p.categoryLabel;
  document.getElementById('qv-title').textContent = p.name;
  document.getElementById('qv-price').textContent = `$${p.price.toFixed(2)}`;
  document.getElementById('qv-orig-price').textContent = `$${p.originalPrice.toFixed(2)}`;
  document.getElementById('qv-desc').textContent = p.desc;
  
  const addBtn = document.getElementById('qv-add-btn');
  if (addBtn) {
    addBtn.onclick = () => {
      const qtyInput = document.getElementById('qv-qty-input');
      const q = qtyInput ? parseInt(qtyInput.value) || 1 : 1;
      addToCart(p.id, q);
      closeQuickView();
    };
  }

  modal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeQuickView() {
  const modal = document.getElementById('quick-view-modal');
  if (modal) {
    modal.classList.remove('active');
    document.body.style.overflow = '';
  }
}

// 9. Toast Notifications
function showToast(message) {
  let container = document.querySelector('.toast-container');
  if (!container) {
    container = document.createElement('div');
    container.className = 'toast-container';
    document.body.appendChild(container);
  }

  const toast = document.createElement('div');
  toast.className = 'toast';
  toast.innerHTML = `<i class="fas fa-check-circle" style="color:var(--color-gold)"></i> <span>${message}</span>`;
  container.appendChild(toast);

  // Animate in
  setTimeout(() => toast.classList.add('show'), 20);

  // Remove after 3 seconds
  setTimeout(() => {
    toast.classList.remove('show');
    setTimeout(() => toast.remove(), 400);
  }, 3200);
}

// 10. Scroll-Triggered Reveal Animations
function initScrollAnimations() {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.reveal-on-scroll').forEach(el => observer.observe(el));
}

// 11. Back to Top Button
function initBackToTop() {
  const btn = document.querySelector('.back-to-top-btn');
  if (!btn) return;

  window.addEventListener('scroll', () => {
    if (window.scrollY > 400) {
      btn.classList.add('visible');
    } else {
      btn.classList.remove('visible');
    }
  });

  btn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

// 12. FAQ Accordion
function initFaqAccordion() {
  document.querySelectorAll('.faq-header').forEach(header => {
    header.addEventListener('click', () => {
      const item = header.parentElement;
      const isActive = item.classList.contains('active');

      // Close all others
      document.querySelectorAll('.faq-accordion-item').forEach(el => el.classList.remove('active'));

      if (!isActive) {
        item.classList.add('active');
      }
    });
  });
}

// 13. Mobile Navigation Off-Canvas Drawer
function initMobileNav() {
  const toggle = document.querySelector('.mobile-menu-toggle');
  const drawer = document.querySelector('.mobile-nav-drawer');
  const overlay = document.querySelector('.mobile-nav-overlay');
  const closeBtn = document.querySelector('.mobile-drawer-close');

  if (!drawer) return;

  function open() {
    drawer.classList.add('active');
    if (overlay) overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function close() {
    drawer.classList.remove('active');
    if (overlay) overlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  if (toggle) toggle.addEventListener('click', open);
  if (closeBtn) closeBtn.addEventListener('click', close);
  if (overlay) overlay.addEventListener('click', close);
}

// 14. Live Search & Category Filter Helper
function searchStore(query) {
  if (!query) return;
  window.location.href = `shop.html?search=${encodeURIComponent(query)}`;
}


// Global toggle for mobile navigation drawer
window.toggleMobileNavDrawer = function() {
  var drawer = document.querySelector('.mobile-nav-drawer');
  var overlay = document.querySelector('.mobile-nav-overlay');
  if (!drawer) return;
  var isActive = drawer.classList.contains('active');
  if (isActive) {
    drawer.classList.remove('active');
    if (overlay) overlay.classList.remove('active');
    document.body.style.overflow = '';
  } else {
    drawer.classList.add('active');
    if (overlay) overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }
};
