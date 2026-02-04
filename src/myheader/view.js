/**
 * Harbor Light Header - Mobile Menu Toggle
 */

document.addEventListener("DOMContentLoaded", function () {
  const mobileToggle = document.querySelector(".mobile-toggle");
  const mobileMenu = document.querySelector(".mobile-menu");
  const body = document.body;

  if (mobileToggle && mobileMenu) {
    mobileToggle.addEventListener("click", function () {
      const isActive = mobileToggle.classList.contains("is-active");

      mobileToggle.classList.toggle("is-active");
      mobileMenu.classList.toggle("is-active");
      mobileToggle.setAttribute("aria-expanded", !isActive);
      mobileMenu.setAttribute("aria-hidden", isActive);

      // Prevent body scroll when menu is open
      if (!isActive) {
        body.style.overflow = "hidden";
      } else {
        body.style.overflow = "";
      }
    });

    // Close menu when clicking a link
    const mobileLinks = mobileMenu.querySelectorAll("a");
    mobileLinks.forEach(function (link) {
      link.addEventListener("click", function () {
        mobileToggle.classList.remove("is-active");
        mobileMenu.classList.remove("is-active");
        mobileToggle.setAttribute("aria-expanded", "false");
        mobileMenu.setAttribute("aria-hidden", "true");
        body.style.overflow = "";
      });
    });

    // Close menu on escape key
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && mobileMenu.classList.contains("is-active")) {
        mobileToggle.classList.remove("is-active");
        mobileMenu.classList.remove("is-active");
        mobileToggle.setAttribute("aria-expanded", "false");
        mobileMenu.setAttribute("aria-hidden", "true");
        body.style.overflow = "";
      }
    });
  }
});
