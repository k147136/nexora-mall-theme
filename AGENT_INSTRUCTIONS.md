# NEXORA MALL — SYSTEM & THEME ARCHITECTURE SPECIFICATION

This file serves as the comprehensive architectural memory and handover manual for NEXORA MALL.

---

## 1. PROJECT OVERVIEW
* **Brand Name:** NEXORA MALL
* **Tagline:** "Shop Everything. Live Better"
* **Niche:** Luxury multi-department online marketplace (Fashion, Audio & Tech, Interior Living, High Jewelry, Gourmet Groceries).
* **Palette:** Charcoal (`#333333` / `#1f1f1f`) + Gold accents (`#d4a843` / `#e5be57`) on clean ivory white (`#ffffff` / `#fbfbf9`).
* **Design Tone:** Sophisticated, prestigious, trustworthy.

---

## 2. REPOSITORY & PACKAGE STRUCTURE
```
e:\_theme3/
├── index.html                   (Live HTML5 Home Showcase)
├── shop.html                    (Live Product Catalog with dynamic filters)
├── product-details.html         (Interactive Gallery, Tabs & Options)
├── cart.html                    (Shopping Bag & VIP Discount Engine)
├── checkout.html                (2-Step Checkout with Verification)
├── about.html                   (Brand Story & Sustainability Pillars)
├── contact.html                 (Concierge Form, Map & Support)
├── faq-policy.html              (Accordion FAQ & Terms of Sale)
├── account-tracking.html        (Live Order Tracker & Wishlist Manager)
├── css/
│   └── style.css                (Master CSS Custom Properties & Grid)
├── js/
│   └── main.js                  (State Engine, Cart, Dark Mode, Slider)
├── nexora-theme/                (Production-Ready WordPress Theme)
│   ├── style.css                (Theme Header)
│   ├── functions.php            (Enqueues, Hooks & Theme Setup)
│   ├── header.php               (Nav, Mega Menu & Topbar)
│   ├── footer.php               (Fat Footer & Modals)
│   ├── front-page.php           (Homepage Template)
│   ├── page.php                 (Standard Page Template)
│   ├── index.php                (Blog Gazette)
│   ├── woocommerce.php          (WooCommerce Wrapper)
│   ├── inc/                     (Customizer, TGMPA, Demo Import)
│   ├── assets/                  (Compiled CSS & JS)
│   └── DOCUMENTATION/           (Buyer Setup HTML Guide)
└── nexora-mall-theme.zip        (Downloadable Installable WordPress Zip Package)
```

---

## 3. INTERACTIVE FEATURES IMPLEMENTED
1. **Persistent State (localStorage):**
   - Cart (`nexora_cart`): Real-time items, quantities, subtotal calculations.
   - Wishlist (`nexora_wishlist`): Saved items grid with 1-click move to bag.
   - Theme Mode (`nexora_theme`): Light / Dark mode switcher with CSS custom property overrides.
   - VIP Promo Engine (`nexora_discount`): Coupon `LUXURY15` gives 15% discount.
2. **Hero Slider:**
   - Auto-rotates every 5.5 seconds, pauses on mouse hover, includes navigation arrows and pagination pills.
3. **Flash Sale Countdown:**
   - 48-hour live countdown timer calculated every second.
4. **Order Tracking Simulator:**
   - Tracks custom IDs (e.g. `NX-78924018-US`) with a 4-step visual progress pipeline.
5. **Quick View Modal:**
   - Pop-up modal loading product images, specifications, price, and instant add-to-bag.
6. **Scroll Animations:**
   - `IntersectionObserver` triggering staggered slide-up reveals.
