/**
 * Product Image Gallery Interaction (Enhanced + Clean Code)
 * Handles fade transition and return to original image
 */

document.addEventListener("DOMContentLoaded", () => {
  const mainImage = document.getElementById("product-main-image");
  const thumbnails = document.querySelectorAll("[data-thumb]");
  if (!mainImage || thumbnails.length === 0) return;

  const mainThumb = document.querySelector("[data-main='true']");
  const originalSrc = mainThumb ? mainThumb.querySelector("img").src : mainImage.src;

  thumbnails.forEach((thumb) => {
    thumb.addEventListener("click", () => {
      const newSrc = thumb.querySelector("img").src;

      // 🔹 بازگشت به تصویر اصلی
      if (thumb.classList.contains("ring-blue-500") && newSrc !== originalSrc) {
        mainImage.classList.add("opacity-0", "transition", "duration-300");
        setTimeout(() => {
          mainImage.src = originalSrc;
          mainImage.classList.remove("opacity-0");
        }, 200);
        thumbnails.forEach((t) => t.classList.remove("ring-blue-500"));
        mainThumb.classList.add("ring-blue-500");
        return;
      }

      // 🔹 تغییر تصویر
      mainImage.classList.add("opacity-0", "transition", "duration-300");
      setTimeout(() => {
        mainImage.src = newSrc;
        mainImage.classList.remove("opacity-0");
      }, 200);

      // 🔹 تامبنیل فعال
      thumbnails.forEach((t) => t.classList.remove("ring-blue-500"));
      thumb.classList.add("ring-blue-500");
    });
  });
});
// **************************************************************************




/**
 * Copy SKU Code Handler
 * Clean, reusable and fully isolated component
 * --------------------------------------------
 * Behavior:
 *  - Copies SKU to clipboard on click
 *  - Provides smooth visual feedback
 */

document.addEventListener("DOMContentLoaded", () => {
  const skuElement = document.getElementById("product-sku");
  if (!skuElement) return;

  skuElement.addEventListener("click", async () => {
    const skuCode = skuElement.dataset.copy;
    if (!skuCode) return;

    try {
      await navigator.clipboard.writeText(skuCode);

      // 🔹 بازخورد ظاهری کوتاه
      const originalText = skuElement.innerHTML;
      skuElement.classList.add("bg-green-100", "text-green-700");
      skuElement.innerHTML = `کپی شد ✅`;

      setTimeout(() => {
        skuElement.classList.remove("bg-green-100", "text-green-700");
        skuElement.innerHTML = originalText;
      }, 1200);
    } catch (error) {
      console.error("Copy failed:", error);
    }
  });
});
// **************************************************************************





/**
 * Copy Page Link Handler
 * Clean, accessible and self-contained
 * ------------------------------------
 * Behavior:
 *  - Copies current page URL to clipboard
 *  - Provides a smooth visual feedback
 */

document.addEventListener("DOMContentLoaded", () => {
  const copyLinkBtn = document.getElementById("share-copy-link");
  if (!copyLinkBtn) return;

  copyLinkBtn.addEventListener("click", async (e) => {
    e.preventDefault();

    const currentURL = window.location.href;

    try {
      await navigator.clipboard.writeText(currentURL);

      // 🔹 بازخورد ظاهری کوتاه و ساده
      const originalText = copyLinkBtn.textContent;
      copyLinkBtn.textContent = "کپی شد ✅";
      copyLinkBtn.classList.add("bg-green-100", "text-green-700");

      setTimeout(() => {
        copyLinkBtn.textContent = originalText;
        copyLinkBtn.classList.remove("bg-green-100", "text-green-700");
      }, 1200);
    } catch (error) {
      console.error("Link copy failed:", error);
    }
  });
});
// **************************************************************************





/**
 * Quantity Selector Handler
 * Clean, readable, and reusable logic
 * ------------------------------------
 * - Increases or decreases product quantity
 * - Respects min/max boundaries
 * - Visual feedback on limit
 */

document.addEventListener("DOMContentLoaded", () => {
  const qtyWrappers = document.querySelectorAll("[data-qty-wrapper]");
  if (qtyWrappers.length === 0) return;

  qtyWrappers.forEach((wrapper) => {
    const input = wrapper.querySelector("input[type='number']");
    const buttons = wrapper.querySelectorAll(".qty-btn");

    if (!input || buttons.length === 0) return;

    buttons.forEach((btn) => {
      btn.addEventListener("click", () => handleQuantityChange(btn, input));
    });
  });

  /**
   * Handles quantity increment/decrement
   * @param {HTMLElement} btn - The clicked button
   * @param {HTMLInputElement} input - The input field
   */
  function handleQuantityChange(btn, input) {
    const action = btn.dataset.action;
    const min = parseInt(input.min) || 1;
    const max = parseInt(input.max) || 99;
    let value = parseInt(input.value);

    if (action === "increase" && value < max) {
      value++;
      updateInputValue(input, value);
    } else if (action === "decrease" && value > min) {
      value--;
      updateInputValue(input, value);
    }

    // 🔹 بازخورد ظاهری در مرزها
    visualFeedback(btn, input, min, max);
  }

  /**
   * Updates input value safely
   * @param {HTMLInputElement} input
   * @param {number} value
   */
  function updateInputValue(input, value) {
    input.value = value;
  }

  /**
   * Simple UI feedback for boundary states
   */
  function visualFeedback(btn, input, min, max) {
    const value = parseInt(input.value);

    btn.closest("[data-qty-wrapper]").querySelectorAll(".qty-btn").forEach((b) => {
      b.classList.remove("opacity-40", "cursor-not-allowed");
    });

    if (value <= min) {
      const decBtn = btn.closest("[data-qty-wrapper]").querySelector("[data-action='decrease']");
      decBtn.classList.add("opacity-40", "cursor-not-allowed");
    }

    if (value >= max) {
      const incBtn = btn.closest("[data-qty-wrapper]").querySelector("[data-action='increase']");
      incBtn.classList.add("opacity-40", "cursor-not-allowed");
    }
  }
});
// **************************************************************************





document.addEventListener("DOMContentLoaded", () => {
  // ==================== 🟥 TAB SYSTEM ====================
  const tabButtons = document.querySelectorAll(".tab-btn");
  const tabPanels = document.querySelectorAll(".tab-panel");

  tabButtons.forEach((btn, index) => {
    btn.addEventListener("click", () => {
      // 1. Remove active state from all buttons
      tabButtons.forEach(b => {
        b.classList.remove("border-original-red", "text-original-red");
        b.classList.add("border-transparent", "text-gray-700");
      });

      // 2. Hide all panels with effect
      tabPanels.forEach(panel => {
        panel.classList.add("opacity-0", "pointer-events-none", "hidden");
        panel.classList.remove("opacity-100");
      });

      // 3. Apply active state to the selected tab
      btn.classList.add("border-original-red", "text-original-red");
      btn.classList.remove("border-transparent", "text-gray-700");

      // 4. Show the selected panel with a beautiful fade effect
      const activePanel = tabPanels[index];
      activePanel.classList.remove("hidden");
      setTimeout(() => {
        activePanel.classList.remove("opacity-0", "pointer-events-none");
        activePanel.classList.add("opacity-100");
      }, 20);
    });
  });

  // For a smooth fade effect between tabs
  tabPanels.forEach(panel => {
    panel.classList.add(
      "transition-all",
      "duration-300",
      "ease-in-out",
      "opacity-0",
      "hidden"
    );
  });
  // Show the first tab by default
  tabPanels[0].classList.remove("hidden", "opacity-0");
  tabPanels[0].classList.add("opacity-100");

  // ==================== ⭐ LIVE RATING ====================
  const stars = document.querySelectorAll(".rating-group input");
  stars.forEach(star => {
    star.addEventListener("change", e => {
      const value = e.target.value;
      // Reset all stars
      stars.forEach(s => {
        const label = document.querySelector(`label[for="${s.id}"] svg`);
        label.classList.remove("text-yellow-500");
        label.classList.add("text-gray-300");
      });
      // Light up the selected stars
      for (let i = 5; i >= value; i--) {
        const label = document.querySelector(`label[for="star${i}"] svg`);
        label.classList.remove("text-gray-300");
        label.classList.add("text-yellow-500");
      }
    });
  });

  // ==================== 💬 REPLY BOX SYSTEM ====================
  const replyButtons = document.querySelectorAll("button.text-original-red");
  replyButtons.forEach(button => {
    button.addEventListener("click", () => {
      const parent = button.closest("article");
      let replyBox = parent.querySelector(".reply-box");
      if (replyBox) {
        // If it exists, hide/show it
        replyBox.classList.toggle("hidden");
      } else {
        // If it doesn't exist, create it
        const box = document.createElement("div");
        box.className = "reply-box mt-4 ms-8 border-s ps-4 border-gray-300";
        box.innerHTML = `
          <textarea rows="3" class="w-full rounded-lg bg-gray-100 p-3 font-DanaMediume text-sm outline-none" placeholder="پاسخ خود را بنویسید..."></textarea>
          <button class="mt-2 bg-original-red text-white text-xs px-4 py-2 rounded-md font-DanaMediume">ارسال پاسخ</button>
        `;
        parent.appendChild(box);
      }
    });
  });
});
// **************************************************************************
