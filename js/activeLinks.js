// Récupère l'URL actuelle
const currentUrl = window.location.href;

// Sélectionne tous les liens de la navbar
const links = document.querySelectorAll(".titre-chocolat li a");

links.forEach(link => {
    if (link.href === currentUrl) {
        // Supprime l'ancienne classe active
        document.querySelectorAll(".titre-chocolat li").forEach(li => li.classList.remove("active"));

        // Ajoute la classe active au parent <li> du lien
        link.parentElement.classList.add("active");
    }
});