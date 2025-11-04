document.addEventListener("DOMContentLoaded", () => {
  const gifWrapper = document.getElementById("gifWrapper");
  const container = document.getElementById("chocoTitle");
  const btn = document.getElementById("downBtn");

  container.style.opacity = "0";
  btn.classList.add("showbtn");
  btn.style.cursor = "none";

  setTimeout(() => {
    gifWrapper.classList.add("fade-in");

    btn.style.opacity = "1";
    btn.style.top = "95%";
    btn.style.cursor = "pointer";

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

  btn.addEventListener("click", () => {
    window.scrollTo({
      top: window.innerHeight,
      left: 0,
      behavior: "smooth",
    });
  });
});