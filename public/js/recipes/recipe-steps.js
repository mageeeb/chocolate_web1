/**
 * Effets interactifs pour les étapes de recette
 * Anciennement recette2StepsEffect.js
 */

document.addEventListener("DOMContentLoaded", () => {
  const steps = document.querySelectorAll(
    ".list-group-numbered .list-group-item"
  );

  const savedSteps = JSON.parse(localStorage.getItem("doneSteps") || "[]");

  steps.forEach((step, index) => {
    if (savedSteps.includes(index)) {
      markAsDone(step);
    }

    step.addEventListener("click", function () {
      const currentSteps = JSON.parse(
        localStorage.getItem("doneSteps") || "[]"
      );

      if (this.classList.contains("done")) {
        this.classList.remove("done");
        this.style.backgroundColor = "";
        this.style.color = "";
        this.style.textAlign = "";
        const check = this.querySelector("span.checkmark");
        if (check) check.remove();

        const updated = currentSteps.filter((i) => i !== index);
        localStorage.setItem("doneSteps", JSON.stringify(updated));
      } else {
        markAsDone(this);

        if (!currentSteps.includes(index)) {
          currentSteps.push(index);
          localStorage.setItem("doneSteps", JSON.stringify(currentSteps));
        }
      }
    });
  });

  function markAsDone(el) {
    el.classList.add("done");
    el.style.backgroundColor = "green";
    el.style.color = "gold";
    el.style.textAlign = "right";

    const check = document.createElement("span");
    check.textContent = " ✔";
    check.classList.add("checkmark");
    check.style.color = "gold";
    check.style.fontWeight = "bold";
    el.appendChild(check);
  }
});
