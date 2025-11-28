// JavaScript pour recette5.html

document.addEventListener('DOMContentLoaded', function() {
    // Gestion de l'affichage/masquage des avis
    const toggleBtn = document.getElementById('toggleReviews');
    const reviewsContainer = document.getElementById('reviewsContainer');
    
    if (toggleBtn && reviewsContainer) {
        toggleBtn.addEventListener('click', function() {
            const isHidden = reviewsContainer.style.display === 'none' || reviewsContainer.style.display === '';
            reviewsContainer.style.display = isHidden ? 'grid' : 'none';
            toggleBtn.textContent = isHidden ? 'Masquer les avis' : 'Afficher les avis';
        });
    }

    // Gestion du bouton d'impression
    const printBtn = document.getElementById('printBtn');
    if (printBtn) {
        printBtn.addEventListener('click', function() {
            window.print();
        });
    }

    // Gestion du formulaire d'avis
    const reviewForm = document.getElementById('reviewForm');
    if (reviewForm) {
        reviewForm.addEventListener('submit', function(event) {
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
                    <strong>${name}</strong>
                    <span class="review-date">À l'instant</span>
                </div>
                <div class="review-stars">
                    <span style="color:#f5c518;">${'★'.repeat(rating)}${'☆'.repeat(5 - rating)}</span>
                </div>
                <p class="review-text">${text}</p>
            `;

            // Ajouter le nouvel avis en haut de la liste
            reviewsContainer.prepend(newReview);
            
            // Réinitialiser le formulaire
            reviewForm.reset();
            
            // Afficher les avis si ils étaient masqués
            reviewsContainer.style.display = 'grid';
            toggleBtn.textContent = 'Masquer les avis';
            
            // Message de confirmation
            alert('Votre avis a été ajouté avec succès !');
        });
    }
});

// Configuration Zoomerang pour les images
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