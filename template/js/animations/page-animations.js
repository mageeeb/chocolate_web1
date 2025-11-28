/**
 * Animations spécifiques aux pages
 * Regroupe aboutAnims.js et autres animations de pages
 */

document.addEventListener("DOMContentLoaded", () => {
  // Animation des icônes de fonctionnalités (page About)
  const images = document.querySelectorAll(".feature__icon, .mainAbout__features__list__item__icon");

  if (images.length > 0) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("rotate");
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );

    images.forEach((img) => observer.observe(img));
  }
});

