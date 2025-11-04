document.addEventListener("DOMContentLoaded", () => {
  const video = document.getElementById("chocoVideo");
  const gifWrapper = document.getElementById("gifWrapper");
  const container = document.getElementById("chocoTitle");
  const btn = document.getElementById('downBtn');


  container.style.opacity = "0";
  btn.classList.add('showbtn');
  btn.style.cursor = "none"

  setTimeout(() => {
    video.classList.add("fade-out");
    gifWrapper.classList.add("fade-in");

    btn.style.opacity = "1";
    btn.style.top = "95%";
    btn.style.cursor = "pointer"
    setTimeout(() => {
      video.style.display = "none";
      setTimeout(() => {
        const text = container.textContent;
        container.textContent = "";
        container.style.opacity = "1";

        [...text].forEach((char, i) => {
          const span = document.createElement("span");

          if (char === " ") {
            span.innerHTML = "&nbsp;";
          } else {
            span.textContent = char;
          }

          span.classList.add("choco-letter");
          container.appendChild(span);

          setTimeout(() => {
            span.style.opacity = "1";
            span.style.transform = "scale(1) translateY(0) rotateX(0deg)";
          }, 100 * i);
        });
      }, 0);

    }, 1000);
  }, 5000);


btn.addEventListener('click', () => {
  window.scrollTo({
    top: window.innerHeight, 
    left: 0,
    behavior: 'smooth'
  });
});

  // Configuration du carousel Bootstrap pour les commentaires
  if (typeof $ !== 'undefined' && $('#commentsCarousel').length) {
    $('#commentsCarousel').carousel({
      interval: 4000, // Défilement automatique toutes les 4 secondes
      wrap: true,     // Boucle infinie
      pause: 'hover'  // Pause au survol
    });
    
    // Démarrer le carousel automatiquement
    $('#commentsCarousel').carousel('cycle');
  }

});