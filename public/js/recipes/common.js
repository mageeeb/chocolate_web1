/**
 * RECIPES COMMON - Fonctionnalités communes à toutes les pages de recettes
 * Gère : affichage/masquage des avis, impression, soumission du formulaire d'avis
 */

(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    // =======================================================
    // GESTION DE L'AFFICHAGE/MASQUAGE DES AVIS
    // =======================================================
    const toggleBtn = document.getElementById('toggleReviews');
    const reviewsContainer = document.getElementById('reviewsContainer');

    if (toggleBtn && reviewsContainer) {
      toggleBtn.addEventListener('click', function () {
        const isHidden = reviewsContainer.style.display === 'none' || reviewsContainer.style.display === '';
        reviewsContainer.style.display = isHidden ? 'grid' : 'none';
        toggleBtn.textContent = isHidden ? 'Masquer les avis' : 'Afficher les avis';
      });
    }

    // =======================================================
    // GESTION DU BOUTON D'IMPRESSION
    // =======================================================
    const printBtn = document.getElementById('printBtn');
    if (printBtn) {
      printBtn.addEventListener('click', function () {
        window.print();
      });
    }

    // =======================================================
    // GESTION DU FORMULAIRE D'AVIS
    // =======================================================
    const reviewForm = document.getElementById('reviewForm');
    if (reviewForm) {
      reviewForm.addEventListener('submit', function (event) {
        event.preventDefault();

        const name = document.getElementById('reviewName').value.trim();
        const rating = document.getElementById('reviewRating').value;
        const text = document.getElementById('reviewText').value.trim();

        if (!name || !rating || !text) {
          alert('Veuillez remplir tous les champs obligatoires.');
          return;
        }

        // Créer un nouvel avis
        const newReview = document.createElement('div');
        newReview.className = 'review';
        newReview.innerHTML = `
          <div class="review-header">
            <strong>${escapeHtml(name)}</strong>
            <span class="review-date">À l'instant</span>
          </div>
          <div class="review-stars">
            <span style="color:#f5c518;">${'★'.repeat(parseInt(rating))}${'☆'.repeat(5 - parseInt(rating))}</span>
          </div>
          <p class="review-text">${escapeHtml(text)}</p>
        `;

        // Ajouter le nouvel avis en haut de la liste
        if (reviewsContainer) {
          reviewsContainer.prepend(newReview);

          // Réinitialiser le formulaire
          reviewForm.reset();

          // Afficher les avis si ils étaient masqués
          reviewsContainer.style.display = 'grid';
          if (toggleBtn) {
            toggleBtn.textContent = 'Masquer les avis';
          }

          // Message de confirmation
          alert('Votre avis a été ajouté avec succès !');
        }
      });
    }

    // =======================================================
    // CONFIGURATION ZOOMERANG POUR LES IMAGES
    // =======================================================
    if (typeof Zoomerang !== 'undefined') {
      Zoomerang
        .config({
          maxHeight: 600,
          maxWidth: 900,
          bgColor: '#000',
          bgOpacity: .85
        })
        .listen('[data-trigger="zoomerang"]');
    }
  });

  /**
   * Fonction utilitaire pour échapper les caractères HTML
   */
  function escapeHtml(text) {
    const map = {
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#039;'
    };
    return text.replace(/[&<>"']/g, function (m) { return map[m]; });
  }

})();

