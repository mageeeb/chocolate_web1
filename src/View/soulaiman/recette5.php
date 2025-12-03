<!DOCTYPE HTML>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cookies Maison — Recette du Chocolat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Recette délicieuse de cookies maison au chocolat. Facile, rapide et gourmand !" />
	<meta name="author" content="Cokolada" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Marck+Script&display=swap"
		rel="stylesheet">
    <link rel="icon" href="<?= BASE_URL ?>/images/logos/noisette.png" type="image/png">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= BASE_URL ?>/css/animate.css">
	<!-- Icomoon Icon Fonts -->
	<link rel="stylesheet" href="<?= BASE_URL ?>/css/icomoon.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?= BASE_URL ?>/css/flexslider.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
	<!-- Recipe style -->
	<link rel="stylesheet" href="<?= BASE_URL ?>/css/recette.css">

	<!-- Icônes Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

	<!-- Modernizr JS -->
	<script src="<?= BASE_URL ?>/js/vendors/modernizr-2.6.2.min.js"></script>
	<!-- Recette5 CSS -->
	<link rel="stylesheet" href="<?= BASE_URL ?>/css/recette5.css">
</head>




<body>
	<div id="page">
<?php require_once PATH."/src/View/inc/navigation.php"; ?>
		<main role="main">
			<!-- En-tête de la recette sans images -->
			<header class="recipe-header">
				<div class="fh5co-loader">
					<img src="../../images/ui/loader-chargement.gif" alt="loader chocolat" />
				</div>
			</header>

			<!-- Titre de la galerie -->
			<div class="recipe-gallery-title">
				<div class="recipe-gallery-title">
					<div class="container text-center">
						<h1 class="recipe-title">Cookies Maison au Chocolat</h1>
					</div>

					<div class="recipe-info">
						<div class="rating">
							<ul class="stars">
								<li><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></li>
							</ul>
						</div>

						<div class="comments">
							<a href="#"><i class="fa fa-comment"></i> 51 commentaires</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Galerie d'images de recette -->
			<div class="recipe-gallery">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 fh5co-gallery_item">
							<div class="fh5co-bg-img" style="background-image: url(../../images/recipes/cookies_2.jpg);"
								data-trigger="zoomerang"></div>
							<div class="fh5co-bg-img" style="background-image: url(../../images/recipes/cookies_3.jpg);"
								data-trigger="zoomerang"></div>
						</div>
						<div class="col-md-6 col-sm-6 fh5co-gallery_item">
							<div class="fh5co-bg-img fh5co-gallery_big"
								style="background-image: url(../../images/recipes/cookies_4.jpg);" data-trigger="zoomerang"></div>
						</div>
						<div class="col-md-3 col-sm-3 fh5co-gallery_item">
							<div class="fh5co-bg-img" style="background-image: url(../../images/recipes/cookies_5.jpg);"
								data-trigger="zoomerang"></div>
							<div class="fh5co-bg-img" style="background-image: url(../../images/recipes/cookies_6.jpg);"
								data-trigger="zoomerang"></div>
						</div>
					</div>
				</div>
			</div>

			<!-- Conteneur principal -->
			<div class="container recipe-container">
				<article class="recipe-article">

					<!-- Métadonnées -->
					<section class="recipe-metadata">
						<div class="metadata-grid">
							<div class="metadata-item">
								<i class="fa-regular fa-clock"></i>
								<h3>Préparation</h3>
								<p>20 min</p>
							</div>

							<div class="metadata-item">
								<i class="fa-solid fa-chart-simple"></i>
								<h3>Difficulté</h3>
								<p>Facile</p>
							</div>

							<div class="metadata-item">
								<i class="fa-solid fa-wallet"></i>
								<h3>Coût</h3>
								<p>Bon marché</p>
							</div>
						</div>
					</section>

					<div class="row">
						<!-- Colonne gauche : Ingrédients -->
						<div class="col-md-5">
							<section class="recipe-section ingredients-section">
								<h2 class="section-title"><i class="icon-list"></i> Ingrédients</h2>
								<p class="section-subtitle">Pour environ 24 cookies</p>

								<div class="ingredient-group">
									<h3 class="group-title">Base de la pâte</h3>
									<ul class="ingredients-list">
										<li>
											<span class="ingredient-qty">200g</span>
											<span class="ingredient-name">Beurre mou</span>
										</li>
										<li>
											<span class="ingredient-qty">150g</span>
											<span class="ingredient-name">Sucre blanc</span>
										</li>
										<li>
											<span class="ingredient-qty">100g</span>
											<span class="ingredient-name">Sucre roux</span>
										</li>
										<li>
											<span class="ingredient-qty">2</span>
											<span class="ingredient-name">Œufs</span>
										</li>
										<li>
											<span class="ingredient-qty">2 c.à.c</span>
											<span class="ingredient-name">Extrait de vanille</span>
										</li>
									</ul>
								</div>

								<div class="ingredient-group">
									<h3 class="group-title">Poudres et saveurs</h3>
									<ul class="ingredients-list">
										<li>
											<span class="ingredient-qty">280g</span>
											<span class="ingredient-name">Farine blanche</span>
										</li>
										<li>
											<span class="ingredient-qty">1 c.à.c</span>
											<span class="ingredient-name">Bicarbonate de sodium</span>
										</li>
										<li>
											<span class="ingredient-qty">1 pincée</span>
											<span class="ingredient-name">Sel</span>
										</li>
										<li>
											<span class="ingredient-qty">300g</span>
											<span class="ingredient-name">Pépites de chocolat noir</span>
										</li>
									</ul>
								</div>

								<div class="tip-box">
									<strong>💡 Astuce :</strong> Utilisez du beurre et des œufs à température ambiante
									pour une pâte bien homogène !
								</div>
							</section>
						</div>

						<!-- Colonne droite : Préparation -->
						<div class="col-md-7">
							<section class="recipe-section preparation-section">
								<h2 class="section-title"><i class="icon-settings"></i> Préparation</h2>

								<div class="steps-list">
									<div class="step">
										<div class="step-number">1</div>
										<div class="step-content">
											<h3>Préparer le mélange sucre-beurre</h3>
											<p>Versez le beurre mou et les deux sucres dans un grand récipient. Battez à
												l'aide d'un batteur électrique pendant 3-4 minutes jusqu'à obtenir un
												mélange clair et mousseux.</p>
										</div>
									</div>

									<div class="step">
										<div class="step-number">2</div>
										<div class="step-content">
											<h3>Incorporer les œufs et la vanille</h3>
											<p>Ajoutez les œufs un par un en continuant de battre. Versez l'extrait de
												vanille et mélangez bien pour intégrer tous les ingrédients.</p>
										</div>
									</div>

									<div class="step">
										<div class="step-number">3</div>
										<div class="step-content">
											<h3>Mélanger les poudres</h3>
											<p>Dans un bol séparé, mélangez la farine, le bicarbonate et le sel. Versez
												progressivement ce mélange dans la pâte en remuant délicatement jusqu'à
												disparition des traces.</p>
										</div>
									</div>

									<div class="step">
										<div class="step-number">4</div>
										<div class="step-content">
											<h3>Ajouter les pépites de chocolat</h3>
											<p>Incorporez les pépites de chocolat noir à la pâte. Mélangez délicatement
												avec une cuillère en bois pour les distribuer régulièrement.</p>
										</div>
									</div>

									<div class="step">
										<div class="step-number">5</div>
										<div class="step-content">
											<h3>Former les boules</h3>
											<p>Prélevez des portions de pâte avec une cuillère à soupe et formez des
												boules. Déposez-les sur une plaque de cuisson recouverte de papier
												sulfurisé, espacées d'environ 3 cm.</p>
										</div>
									</div>

									<div class="step">
										<div class="step-number">6</div>
										<div class="step-content">
											<h3>Cuire les cookies</h3>
											<p>Enfournez à 180°C pendant 11-12 minutes. Les cookies doivent être
												légèrement dorés sur les bords mais encore moelleux au centre. Laissez
												refroidir quelques minutes avant de servir.</p>
										</div>
									</div>
								</div>

								<div class="tip-box">
									<strong>🍪 Conseil :</strong> Ne pas trop cuire ! Les cookies continueront de durcir
									légèrement en refroidissant.
								</div>
							</section>
						</div>
					</div>

					<!-- Section Avis / Commentaires -->
					<section class="recipe-section reviews-section" style="margin-top: 3rem;">
						<div class="reviews-header">
							<h2 class="section-title"><i class="icon-bubbles4"></i> Avis des utilisateurs</h2>
							<button id="toggleReviews" class="btn-toggle-reviews">Afficher les avis</button>
						</div>

						<div id="reviewsContainer" class="reviews-container" style="display: none;">
							<div class="review">
								<div class="review-header">
									<strong>Marie L.</strong>
									<span class="review-date">Il y a 5 jours</span>
								</div>
								<div class="review-stars">
									<span style="color:#f5c518;">★★★★★</span>
								</div>
								<p class="review-text">Recette fantastique ! J'ai fait ces cookies hier et toute ma
									famille en a adoré. Moelleux et gourmands, exactement comme je l'imaginais. Je les
									refais ce week-end !</p>
							</div>

							<div class="review">
								<div class="review-header">
									<strong>Jean P.</strong>
									<span class="review-date">Il y a 2 semaines</span>
								</div>
								<div class="review-stars">
									<span style="color:#f5c518;">★★★★☆</span>
								</div>
								<p class="review-text">Bons cookies, j'ai juste ajouté un peu plus de chocolat à mon
									goût. Le temps de cuisson était parfait tel qu'indiqué. Merci pour cette recette !
								</p>
							</div>

							<div class="review">
								<div class="review-header">
									<strong>Sophie D.</strong>
									<span class="review-date">Il y a 1 mois</span>
								</div>
								<div class="review-stars">
									<span style="color:#f5c518;">★★★★★</span>
								</div>
								<p class="review-text">C'est devenue ma recette de cookies préférée ! Facile, rapide, et
									délicieuse. Je recommande vivement. Parfait pour les goûters en famille.</p>
							</div>
						</div>

						<div class="comment-form-wrapper" style="margin-top: 2rem;">
							<h3>Laissez votre avis</h3>
							<form id="reviewForm" class="review-form">
								<div class="form-group">
									<label for="reviewName">Votre nom *</label>
									<input type="text" id="reviewName" class="form-control" placeholder="Votre nom"
										required>
								</div>
								<div class="form-group">
									<label for="reviewRating">Note *</label>
									<select id="reviewRating" class="form-control" required>
										<option value="">Sélectionnez une note</option>
										<option value="5">★★★★★ Excellent</option>
										<option value="4">★★★★☆ Bon</option>
										<option value="3">★★★☆☆ Correct</option>
										<option value="2">★★☆☆☆ À améliorer</option>
										<option value="1">★☆☆☆☆ Mauvais</option>
									</select>
								</div>
								<div class="form-group">
									<label for="reviewText">Votre avis *</label>
									<textarea id="reviewText" class="form-control" rows="4"
										placeholder="Partagez votre expérience..." required></textarea>
								</div>
								<button type="submit" class="btn-submit">Publier mon avis</button>
							</form>
						</div>
					</section>

					<!-- Bouton d'impression -->
					<section class="recipe-actions">
						<button id="printBtn" class="btn-print">
							<i class="icon-print"></i> Imprimer la recette
						</button>
					</section>

				</article>
			</div>
		</main>

<?php require_once PATH."/src/View/inc/footer.php"; ?>

	</div>


	</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	</div>


	<!-- jQuery -->
	<script src="../../js/vendors/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../../js/vendors/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../../js/vendors/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../../js/vendors/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../../js/vendors/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="../../js/vendors/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="../../js/core/main.js"></script>
	<script src="../../js/core/navigation.js"></script>
	<!-- Recipe script -->
	<script src="../../js/recipe-marmiton.js"></script>
	<!-- Recette5 JS -->
	<script src="../../js/recette5.js"></script>

</body>

</html>