document.addEventListener("DOMContentLoaded", () => {
const images = document.querySelectorAll('.feature__icon');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('rotate');
      
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });

images.forEach(img => observer.observe(img));

});
