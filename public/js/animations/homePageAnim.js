document.addEventListener("DOMContentLoaded", () => {
  const rond = document.querySelector(".homeLoadPage__rond");
  const img = document.querySelector(".homeLoadPage__rond__gifload");

  setTimeout(() => {
    // Déclenche l'animation comme si on avait cliqué
    img.classList.remove("homeLoadPage__rond--click");
    void img.offsetWidth;
    img.classList.add("homeLoadPage__rond--click");

    setTimeout(() => {
      rond.classList.remove("homeLoadPage__rond--click");
      rond.classList.add("homeLoadPage__rond--loader");

      setTimeout(() => {
        rond.classList.add("homeLoadPage__rond--rotate");

        setTimeout(() => {
          let div1 = document.querySelector(".homeLoadPage__left");
          let div2 = document.querySelector(".homeLoadPage__right");
          rond.style.display = "none";
          div1.classList.add("homeLoadPage__rond--move-left");
          div2.classList.add("homeLoadPage__rond--move-right");
        }, 500);
      }, 200);
    }, 600);
  }, 0); // délai initial de 300 ms
});