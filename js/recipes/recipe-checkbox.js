/**
 * Gestion des checkboxes de préparation dans les recettes
 * Anciennement preparationCheckbox.js
 */

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".checkboxTask").forEach((task) => {
    const checkbox = task.querySelector("input");
    const text = task.querySelector("span");

    if (!checkbox || !text) return;

    checkbox.addEventListener("change", () => {
      if (checkbox.checked) {
        text.style.textDecoration = "line-through";
        text.style.textDecorationColor = "#d4af37";
        text.style.textDecorationThickness = "2px";
        text.style.color = "gray";
        checkbox.style.accentColor = "#d4af37";
      } else {
        text.style.textDecoration = "none";
        text.style.color = "#f3f3f3";
        checkbox.style.accentColor = "";
      }
    });
  });
});

