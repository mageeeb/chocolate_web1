/**
 * Animations pour les headers de toutes les pages
 * Regroupe les fonctionnalités de choco.js, HeaderAnims.js et otherHeadersPageAnims.js
 */

document.addEventListener("DOMContentLoaded", () => {
  const video = document.getElementById("chocoVideo");
  const gifWrapper = document.getElementById("gifWrapper");
  const container = document.getElementById("chocoTitle");
  const btn = document.getElementById("downBtn");

  if (!container || !btn) return;

  // Initialisation
  container.style.opacity = "0";
  btn.classList.add("showbtn");
  btn.style.cursor = "none";

  // Fonction pour animer le texte lettre par lettre
  const animateText = (textElement) => {
    const text = textElement.textContent;
    textElement.textContent = "";
    textElement.style.opacity = "1";

    [...text].forEach((char, i) => {
      const span = document.createElement("span");

      if (char === " ") {
        span.innerHTML = "&nbsp;";
      } else {
        span.textContent = char;
      }

      span.classList.add("choco-letter");
      textElement.appendChild(span);

      setTimeout(() => {
        span.style.opacity = "1";
        span.style.transform = "scale(1) translateY(0) rotateX(0deg)";
      }, 100 * i);
    });
  };

  // Gestion du scroll vers le bas
  btn.addEventListener("click", () => {
    window.scrollTo({
      top: window.innerHeight,
      left: 0,
      behavior: "smooth",
    });
  });

  // Animation pour la page d'accueil (avec vidéo)
  if (video && gifWrapper) {
    setTimeout(() => {
      video.classList.add("fade-out");
      gifWrapper.classList.add("fade-in");

      btn.style.opacity = "1";
      btn.style.top = "95%";
      btn.style.cursor = "pointer";

      setTimeout(() => {
        video.style.display = "none";
        setTimeout(() => {
          animateText(container);
        }, 0);
      }, 1000);
    }, 7000);
  } else if (gifWrapper) {
    // Animation pour les autres pages (sans vidéo)
    setTimeout(() => {
      gifWrapper.classList.add("fade-in");

      btn.style.opacity = "1";
      btn.style.top = "95%";
      btn.style.cursor = "pointer";

      animateText(container);
    }, 0);
  }


});

