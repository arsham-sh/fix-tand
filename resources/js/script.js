// ================= CART DRAWER =================
document.addEventListener("DOMContentLoaded", () => {
  const overlay = document.getElementById("cartOverlay");
  const cartBtn = document.getElementById("cartBtn");
  const closeDesktop = document.getElementById("closeCart");
  const cartDrawer = document.getElementById("cartDrawer");

  const openCart = () => {
    overlay.classList.replace("opacity-0", "opacity-100");
    overlay.classList.replace("pointer-events-none", "pointer-events-auto");

    cartDrawer.classList.remove("opacity-0", "scale-95", "pointer-events-none");
    requestAnimationFrame(() => {
      cartDrawer.classList.add("opacity-100", "scale-100");
    });
  };

  const closeCart = () => {
    overlay.classList.replace("opacity-100", "opacity-0");
    overlay.classList.replace("pointer-events-auto", "pointer-events-none");

    cartDrawer.classList.add("opacity-0", "scale-95", "pointer-events-none");
    cartDrawer.classList.remove("opacity-100", "scale-100");
  };

  cartBtn?.addEventListener("click", openCart);
  closeDesktop?.addEventListener("click", closeCart);
  overlay?.addEventListener("click", closeCart);
  document.addEventListener("keydown", (e) => e.key === "Escape" && closeCart());
});
// ================= END CART DRAWER =================



// ================= MOBILE MENU =================
const mobileMenuBtn = document.getElementById("mobileMenuBtn");
const mobileMenu = document.getElementById("mobileMenu");
const closeMobileMenu = document.getElementById("closeMobileMenu");
const slidingMenu = mobileMenu?.querySelector(".absolute");

const showMobileMenu = () => {
  mobileMenu.classList.remove("hidden");
  requestAnimationFrame(() => {
    mobileMenu.classList.add("opacity-100");
    slidingMenu.classList.replace("-translate-x-full", "translate-x-0");
  });
};

const hideMobileMenu = () => {
  slidingMenu.classList.replace("translate-x-0", "-translate-x-full");
  mobileMenu.classList.remove("opacity-100");
  setTimeout(() => mobileMenu.classList.add("hidden"), 300);
};

mobileMenuBtn?.addEventListener("click", showMobileMenu);
closeMobileMenu?.addEventListener("click", hideMobileMenu);
mobileMenu?.addEventListener("click", (e) => e.target === mobileMenu && hideMobileMenu());
// ================= END MOBILE MENU =================



// Filter
document.addEventListener('DOMContentLoaded', () => {
    const chips = document.querySelectorAll('.sort-chip');
    const params = new URLSearchParams(window.location.search);
    const currentSort = params.get('sort') || 'default';

    // Enable active chip
    chips.forEach(chip => {
      const sortValue = chip.dataset.sort;
      if (sortValue === currentSort) {
        chip.classList.add('active');
      }

      chip.addEventListener('click', () => {
        // Enable chip
        chips.forEach(c => c.classList.remove('active'));
        // Added to cart
        chip.classList.add('active');

        // Update URL and refresh (or AJAX)
        const url = new URL(window.location);
        if (sortValue === 'default') {
          url.searchParams.delete('sort');
        } else {
          url.searchParams.set('sort', sortValue);
        }
        window.location = url;
      });
    });
  });
// End Filter



// Specification tabs
document.querySelectorAll('.spec-tab').forEach(tab => {
  tab.addEventListener('click', () => {
    const target = tab.dataset.tab;

    // Enable tab
    document.querySelectorAll('.spec-tab').forEach(t => {
      t.classList.remove('border-original-red', 'text-original-red');
      t.classList.add('border-transparent', 'text-gray-700');
    });
    tab.classList.add('border-original-red', 'text-original-red');
    tab.classList.remove('border-transparent', 'text-gray-700');

    // Show content
    document.querySelectorAll('.spec-panel').forEach(panel => {
      panel.classList.add('hidden');
    });
    document.getElementById(target).classList.remove('hidden');
  });
});
// End Specification tabs




// Filter reviews
document.querySelectorAll('.filter-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const rating = btn.dataset.rating;

    // Enable button
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active', 'bg-original-red', 'text-white'));
    btn.classList.add('active', 'bg-original-red', 'text-white');

    // Filter reviews
    document.querySelectorAll('.review').forEach(review => {
      const reviewRating = review.dataset.rating;
      if (rating === 'all' || reviewRating === rating) {
        review.style.display = 'block';
      } else {
        review.style.display = 'none';
      }
    });
  });
});
// End Filter reviews