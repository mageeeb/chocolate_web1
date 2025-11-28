document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.getElementById('toggleReviews');
    const reviewsContainer = document.getElementById('reviewsContainer');
    const printBtn = document.getElementById('printBtn');
    const reviewForm = document.getElementById('reviewForm');

    if (toggleBtn && reviewsContainer) {
        toggleBtn.addEventListener('click', () => {
            const isHidden = reviewsContainer.style.display === 'none' || reviewsContainer.style.display === '';
            reviewsContainer.style.display = isHidden ? 'grid' : 'none';
            toggleBtn.textContent = isHidden ? 'Masquer les avis' : 'Afficher les avis';
        });
    }

    if (printBtn) {
        printBtn.addEventListener('click', () => window.print());
    }

    if (reviewForm) {
        reviewForm.addEventListener('submit', (event) => {
            event.preventDefault();
            const name = document.getElementById('reviewName').value.trim();
            const rating = document.getElementById('reviewRating').value;
            const text = document.getElementById('reviewText').value.trim();

            if (!name || !rating || !text) return;

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

            reviewsContainer.prepend(newReview);
            reviewForm.reset();
            reviewsContainer.style.display = 'grid';
            toggleBtn.textContent = 'Masquer les avis';
        });
    }
});

// Configuration Zoomerang
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