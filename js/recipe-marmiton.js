/**
 * RECIPE-MARMITON.JS - Interactions pour la page recette.html (style Marmiton)
 * Gère : affichage/masquage des avis, impression, soumission du formulaire
 */

(function() {
	'use strict';

	// ========== AFFICHER/MASQUER LES AVIS ==========
	const toggleReviewsBtn = document.getElementById('toggleReviews');
	const reviewsContainer = document.getElementById('reviewsContainer');

	if (toggleReviewsBtn && reviewsContainer) {
		toggleReviewsBtn.addEventListener('click', function(e) {
			e.preventDefault();

			// Toggle la classe 'show' et l'affichage
			const isShown = reviewsContainer.style.display !== 'none';
			
			if (isShown) {
				// Masquer avec animation
				reviewsContainer.classList.remove('show');
				setTimeout(() => {
					reviewsContainer.style.display = 'none';
				}, 300);
				toggleReviewsBtn.textContent = 'Afficher les avis';
				toggleReviewsBtn.classList.remove('active');
			} else {
				// Afficher avec animation
				reviewsContainer.style.display = 'block';
				setTimeout(() => {
					reviewsContainer.classList.add('show');
				}, 10);
				toggleReviewsBtn.textContent = 'Masquer les avis';
				toggleReviewsBtn.classList.add('active');
			}
		});
	}

	// ========== IMPRIMER LA RECETTE ==========
	const printBtn = document.getElementById('printBtn');

	if (printBtn) {
		printBtn.addEventListener('click', function(e) {
			e.preventDefault();
			window.print();
		});
	}

	// ========== SOUMISSION DU FORMULAIRE D'AVIS ==========
	const reviewForm = document.getElementById('reviewForm');

	if (reviewForm) {
		reviewForm.addEventListener('submit', function(e) {
			e.preventDefault();

			// Récupérer les valeurs
			const name = document.getElementById('reviewName').value.trim();
			const rating = document.getElementById('reviewRating').value;
			const text = document.getElementById('reviewText').value.trim();

			// Validation simple
			if (!name || !rating || !text) {
				alert('Veuillez remplir tous les champs.');
				return;
			}

			// Créer un nouvel élément review
			const newReview = createReviewElement(name, rating, text);

			// Insérer au début du conteneur d'avis
			if (reviewsContainer && reviewsContainer.style.display !== 'none') {
				reviewsContainer.insertBefore(newReview, reviewsContainer.firstChild);
			}

			// Réinitialiser le formulaire
			reviewForm.reset();

			// Afficher un message de confirmation
			showSuccessMessage('Votre avis a été ajouté avec succès !');
		});
	}

	/**
	 * Crée un nouvel élément review basé sur les données
	 */
	function createReviewElement(name, rating, text) {
		const review = document.createElement('div');
		review.className = 'review';

		// Générer les étoiles
		const stars = '★'.repeat(parseInt(rating)) + '☆'.repeat(5 - parseInt(rating));

		review.innerHTML = `
			<div class="review-header">
				<strong>${escapeHtml(name)}</strong>
				<span class="review-date">À l'instant</span>
			</div>
			<div class="review-stars">
				<span style="color:#f5c518;">${stars}</span>
			</div>
			<p class="review-text">${escapeHtml(text)}</p>
		`;

		// Ajouter une animation d'apparition
		review.style.opacity = '0';
		review.style.transform = 'translateY(-10px)';
		review.style.transition = 'all 0.4s ease';

		setTimeout(() => {
			review.style.opacity = '1';
			review.style.transform = 'translateY(0)';
		}, 10);

		return review;
	}

	/**
	 * Échappe les caractères HTML pour éviter les injections
	 */
	function escapeHtml(text) {
		const map = {
			'&': '&amp;',
			'<': '&lt;',
			'>': '&gt;',
			'"': '&quot;',
			"'": '&#039;'
		};
		return text.replace(/[&<>"']/g, m => map[m]);
	}

	/**
	 * Affiche un message de succès temporaire
	 */
	function showSuccessMessage(message) {
		const messageDiv = document.createElement('div');
		messageDiv.style.cssText = `
			position: fixed;
			top: 20px;
			right: 20px;
			background: linear-gradient(135deg, #52a675, #4a9a68);
			color: white;
			padding: 1rem 1.5rem;
			border-radius: 6px;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
			z-index: 9999;
			animation: slideIn 0.3s ease;
			font-weight: 600;
		`;
		messageDiv.textContent = message;

		document.body.appendChild(messageDiv);

		// Ajouter l'animation
		const style = document.createElement('style');
		style.textContent = `
			@keyframes slideIn {
				from {
					transform: translateX(100%);
					opacity: 0;
				}
				to {
					transform: translateX(0);
					opacity: 1;
				}
			}
			@keyframes slideOut {
				from {
					transform: translateX(0);
					opacity: 1;
				}
				to {
					transform: translateX(100%);
					opacity: 0;
				}
			}
		`;
		if (!document.querySelector('style[data-slideout]')) {
			style.setAttribute('data-slideout', 'true');
			document.head.appendChild(style);
		}

		// Supprimer le message après 3 secondes
		setTimeout(() => {
			messageDiv.style.animation = 'slideOut 0.3s ease';
			setTimeout(() => {
				messageDiv.remove();
			}, 300);
		}, 3000);
	}

})();
