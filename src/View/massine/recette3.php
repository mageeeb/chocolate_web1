<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cokolada - Tiramisu au Chocolat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Recette de tiramisu au chocolat - Cokolada" />
	<meta name="keywords" content="tiramisu, chocolat, recette, dessert, italien" />
	<meta name="author" content="Cokolada" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="Tiramisu au Chocolat - Cokolada" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="Cokolada" />
	<meta property="og:description" content="Découvrez notre recette de tiramisu au chocolat" />
	<meta name="twitter:title" content="Tiramisu au Chocolat - Cokolada" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="summary_large_image" />
	<link rel="icon" href="<?php CHEMIN ?>images/logos/noisette.png" type="image/png">

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
		rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Marck+Script&display=swap"
		rel="stylesheet" />

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/flexslider.css" />

	<!-- Nouvelle architecture modulaire CSS -->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/base.css">
	<link rel="stylesheet" href="<?php CHEMIN ?>css/components.css">
	<link rel="stylesheet" href="<?php CHEMIN ?>css/pages/recipes.css">

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
      <script src="<?php CHEMIN ?>js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="recipe-page">
	<div id="page">
		<?php require_once PATH . "/src/View/inc/navigation.php"; ?>

		<!-- Hero Section -->
		<header class="recipe-hero-section">
			<div class="recipe-hero-image-wrapper">
				<img src="<?php CHEMIN ?>images/recipes/<?= $recette->getImageUrl() ?>" alt="Tiramisu au chocolat" class="recipe-hero-image">
				<div class="recipe-hero-overlay"></div>
			</div>
			<div class="recipe-hero-content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1 class="recipe-hero-title animate-box" data-animate-effect="fadeInUp">Tiramisu au Chocolat</h1>
							<p class="recipe-hero-subtitle animate-box" data-animate-effect="fadeInUp" data-animate-delay="200">La dolce vita rencontre la passion du cacao</p>

						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- Section Description -->
		<div class="fh5co-section">
			<div class="container">
				<div class="row animate-box" data-animate-effect="fadeInUp">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="recipe-section-title-modern">Un dessert qui raconte une histoire</h2>
						<p class="recipe-intro-text-modern">
							Ce tiramisu au chocolat est né de ma passion pour les saveurs italiennes et mon amour du
							chocolat.
							Inspiré des recettes traditionnelles de Milan, j'y ai ajouté une touche personnelle avec un
							cœur
							de chocolat noir intense. Un voyage gustatif entre l'Italie et les plantations de cacao,
							où la douceur du mascarpone rencontre la puissance du chocolat 70%. Parfait pour terminer
							un repas en beauté ou impressionner vos invités !
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Section Images des Ingrédients -->
		<div class="fh5co-section recipe-ingredients-showcase">
			<div class="container">
				<div class="row animate-box" data-animate-effect="fadeInUp">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="recipe-section-title-modern">Les ingrédients stars</h2>
						<p class="recipe-subtitle-desc-modern">Des produits de qualité pour un résultat exceptionnel</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="ingredient-card-modern">
							<div class="ingredient-img-wrap-modern">
								<img style="border:none;" src="<?php CHEMIN ?>images/recipes/ChocolatNoir.jpg" alt="Chocolat noir 70%"
									class="img-responsive">
							</div>
							<h4 class="ingredient-card-title-modern">Chocolat Noir 70%</h4>
							<p class="ingredient-card-desc-modern">Le cœur intense de notre tiramisu</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="ingredient-card-modern">
							<div class="ingredient-img-wrap-modern">
								<img style="border:none;" src="<?php CHEMIN ?>images/recipes/mascarpone.jpg" alt="Mascarpone"
									class="img-responsive">
							</div>
							<h4 class="ingredient-card-title-modern">Mascarpone</h4>
							<p class="ingredient-card-desc-modern">Onctuosité et douceur italienne</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInRight">
						<div class="ingredient-card-modern">
							<div class="ingredient-img-wrap-modern">
								<img style="border:none;" src="<?php CHEMIN ?>images/recipes/espresso.jpeg" alt="Café espresso"
									class="img-responsive">
							</div>
							<h4 class="ingredient-card-title-modern">Café Espresso</h4>
							<p class="ingredient-card-desc-modern">L'âme du tiramisu authentique</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInRight">
						<div class="ingredient-card-modern">
							<div class="ingredient-img-wrap-modern">
								<img style="border:none;" src="<?php CHEMIN ?>images/recipes/BiscuitsSavoiardi.jpg"
									alt="Biscuits savoiardi" class="img-responsive">
							</div>
							<h4 class="ingredient-card-title-modern">Biscuits Savoiardi</h4>
							<p class="ingredient-card-desc-modern">La base croustillante et légère</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Section Ingrédients & Préparation -->
		<div class="fh5co-section recipe-main-section">
			<div class="container">
				<div class="row">
					<!-- Liste des Ingrédients -->
					<div class="col-md-5 animate-box" data-animate-effect="fadeInLeft">
						<div class="recipe-sidebar-card">
							<h3 class="recipe-sidebar-title"> Liste des Ingrédients</h3>

							<div class="ingredient-category-block-modern">
								<h4 class="category-name-modern">Pour la crème au chocolat</h4>
								<ul class="recipe-ingredients-list-modern">
									<li class="recipe-ingredient-modern">
										<span class="ingredient-text"><span class="qty">500g</span> Mascarpone</span>
									</li>
									<li class="recipe-ingredient-modern">
										<span class="ingredient-text"><span class="qty">200g</span> Chocolat noir 70%</span>
									</li>
									<li class="recipe-ingredient-modern">
										<span class="ingredient-text"><span class="qty">4</span> Œufs (séparés)</span>
									</li>
									<li class="recipe-ingredient-modern">
										<span class="ingredient-text"><span class="qty">80g</span> Sucre en poudre</span>
									</li>
									<li class="recipe-ingredient-modern">
										<span class="ingredient-text"><span class="qty">2 c.à.s</span> Cacao non sucré</span>
									</li>
								</ul>
							</div>

							<div class="ingredient-category-block-modern">
								<h4 class="category-name-modern">Pour l'assemblage</h4>
								<ul class="recipe-ingredients-list-modern">
									<li class="recipe-ingredient-modern">
										<span class="ingredient-text"><span class="qty">300ml</span> Café espresso fort (froid)</span>
									</li>
									<li class="recipe-ingredient-modern">
										<span class="ingredient-text"><span class="qty">3 c.à.s</span> Amaretto (optionnel)</span>
									</li>
									<li class="recipe-ingredient-modern">
										<span class="ingredient-text"><span class="qty">400g</span> Biscuits savoiardi</span>
									</li>
									<li class="recipe-ingredient-modern">
										<span class="ingredient-text"><span class="qty">50g</span> Chocolat noir (décoration)</span>
									</li>
								</ul>
							</div>

						</div>
					</div>

					<!-- Méthode de Préparation -->
					<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
						<div class="recipe-content-card">
							<h3 class="recipe-content-title"><i class="icon-settings"></i> Méthode de Préparation</h3>

							<div class="recipe-steps-modern">
								<div class="recipe-step-modern">
									<div class="step-number-modern">1</div>
									<div class="step-content-modern">
										<h5 class="step-title-modern">Préparer le chocolat</h5>
										<p>Faites fondre le chocolat noir au bain-marie. Remuez jusqu'à ce qu'il soit
											complètement lisse, puis laissez-le tiédir légèrement avant de l'incorporer.
										</p>
									</div>
								</div>

								<div class="recipe-step-modern">
									<div class="step-number-modern">2</div>
									<div class="step-content-modern">
										<h5 class="step-title-modern">Blanchir les jaunes d'œufs</h5>
										<p>Battez les jaunes avec 60g de sucre jusqu'à ce que le mélange blanchisse et
											devienne mousseux. Incorporez le mascarpone, puis ajoutez le chocolat fondu
											tiède.</p>
									</div>
								</div>

								<div class="recipe-step-modern">
									<div class="step-number-modern">3</div>
									<div class="step-content-modern">
										<h5 class="step-title-modern">Monter les blancs en neige</h5>
										<p>Dans un récipient propre, montez les blancs d'œufs en neige ferme avec le
											reste du sucre. Incorporez-les délicatement à la préparation chocolat en
											soulevant la masse.</p>
									</div>
								</div>

								<div class="recipe-step-modern">
									<div class="step-number-modern">4</div>
									<div class="step-content-modern">
										<h5 class="step-title-modern">Tremper les biscuits</h5>
										<p>Mélangez le café refroidi avec l'Amaretto. Trempez rapidement chaque biscuit
											savoiardi (1-2 secondes) pour qu'ils ne se désagrègent pas.</p>
									</div>
								</div>

								<div class="recipe-step-modern">
									<div class="step-number-modern">5</div>
									<div class="step-content-modern">
										<h5 class="step-title-modern">Assembler le tiramisu</h5>
										<p>Dans un plat rectangulaire, alternez couches de biscuits imbibés et crème au
											chocolat. Commencez par les biscuits, terminez par la crème. Lissez bien la
											surface.</p>
									</div>
								</div>

								<div class="recipe-step-modern">
									<div class="step-number-modern">6</div>
									<div class="step-content-modern">
										<h5 class="step-title-modern">Repos et décoration</h5>
										<p>Réfrigérez minimum 4 heures (idéalement une nuit). Avant de servir,
											saupoudrez de cacao et râpez du chocolat noir par-dessus. Buon appetito !
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Section Commentaires -->
		<div class="fh5co-section recipe-comments-section-modern">
			<div class="container">
				<div class="row animate-box" data-animate-effect="fadeInUp">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="recipe-section-title-modern">Partagez votre expérience</h2>
						<p class="recipe-subtitle-desc-modern">Vos avis et astuces nous inspirent pour de nouvelles créations</p>
					</div>
				</div>
				<div class="row animate-box fadeInUp animated-fast">
					<div class="col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeInUp">
						<div class="recipe-comments-card-modern">
							<h3 class="recipe-comments-title-modern text-center">
								Laissez un commentaire
							</h3>

							<?php if (isset($erreur) && !empty($erreur)): ?>
								<div class="message-error" style="color: #ff6b6b; background-color: rgba(255, 107, 107, 0.1); padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; border: 1px solid #ff6b6b;">
									<?= $erreur; ?>
								</div>
							<?php endif; ?>

							<?php if (isset($success) && !empty($success)): ?>
								<div class="message-success" style="color: #51cf66; background-color: rgba(81, 207, 102, 0.1); padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; border: 1px solid #51cf66;">
									<?= $success; ?>
								</div>
							<?php endif; ?>

							<?php if (!isset($_SESSION['is_verified']) || $_SESSION['is_verified'] !== 1): ?>
								<div class="message-info" style="color: #ffa726; background-color: rgba(255, 167, 38, 0.1); padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; border: 1px solid #ffa726; text-align: center;">
									<p><i class="icon-info"></i> Vous devez être connecté pour poster un commentaire. <a href="?pg=inscription" style="color: #ffa726; text-decoration: underline;">Inscrivez-vous</a> ou <a href="?pg=connexion" style="color: #ffa726; text-decoration: underline;">connectez-vous</a>.</p>
								</div>
							<?php endif; ?>

							<form class="recipe-comment-form-modern" method="post">
								<style>
									.star-rating {
										direction: rtl;
										display: inline-flex;
										gap: 0.5rem;
									}

									.star-rating input {
										display: none;
									}

									.star-rating label {
										font-size: 2.5rem;
										color: rgba(255, 255, 255, 0.3);
										cursor: pointer;
										transition: all 0.3s ease;
									}

									.star-rating input:checked~label {
										color: var(--gold);
									}

									.star-rating label:hover,
									.star-rating label:hover~label {
										color: var(--gold);
										transform: scale(1.1);
									}
								</style>
								<div class="form-group-modern">
									<label for="rating" class="form-label-modern">Votre note :</label>
									<div class="star-rating">
										<input type="radio" id="star5" name="rating" value="5" />
										<label for="star5" title="5 étoiles">★</label>
										<input type="radio" id="star4" name="rating" value="4" />
										<label for="star4" title="4 étoiles">★</label>
										<input type="radio" id="star3" name="rating" value="3" />
										<label for="star3" title="3 étoiles">★</label>
										<input type="radio" id="star2" name="rating" value="2" />
										<label for="star2" title="2 étoiles">★</label>
										<input type="radio" id="star1" name="rating" value="1" />
										<label for="star1" title="1 étoile">★</label>
									</div>
								</div>
								<div class="form-group-modern">
									<label for="userComment" class="form-label-modern">Votre commentaire</label>
									<textarea class="form-control-modern" id="userComment" name="content" rows="6"
										placeholder="Partagez votre expérience, vos astuces, vos modifications..."
										required></textarea>
								</div>
								<div class="form-group-modern text-center">
									<input type="submit" class="btn btn-primary recipe-submit-btn-modern" value="Envoyer un commentaire" name="validation">
								</div>
							</form>

							<?php if (isset($erreur) && !empty($erreur)): ?>
								<div class="alert alert-danger recipe-alert-modern" role="alert">
									<?= $erreur ?>
								</div>
							<?php endif; ?>

							<!-- Liste des commentaires -->
							<div class="recipe-comments-list-modern">
								<?php if (isset($readComment) && !empty($readComment)): ?>
									<h3 class="comments-list-title-modern">Commentaires de nos lecteurs</h3>
									<?php foreach ($readComment as $value): ?>
										<div class="recipe-comment-item-modern animate-box" data-animate-effect="fadeInUp">
											<div class="comment-avatar-modern">
												<?= strtoupper(substr($value['user']->getName(), 0, 1)) ?>
											</div>
											<div class="comment-content-wrapper-modern">
												<div class="comment-header-modern">
													<h5 class="comment-author-modern"><?= htmlspecialchars($value['user']->getName()) ?></h5>
													<span class="comment-date-modern"><?= $value['comment']->getCreatedAt() ?></span>
												</div>
												<p class="comment-text-modern"><?= nl2br(htmlspecialchars($value['comment']->getContent())) ?></p>
												<div class="comment-rating-modern">
													<?php
													$rating = (int)($value['comment']->getRating() ?? 0);
													for ($i = 0; $i < $rating; $i++):
													?>
														<span style="color: var(--gold); font-size: 2.5rem;">★</span>
													<?php
													endfor;
													?>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								<?php else: ?>
									<div class="recipe-no-comments-modern text-center">
										<p>Aucun commentaire pour le moment. Soyez le premier à partager votre avis !</p>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require_once PATH . "/src/View/inc/footer.php"; ?>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>

	<!-- jQuery -->
	<!-- Vendors -->
	<script src="<?php CHEMIN ?>js/vendors/jquery.min.js"></script>
	<script src="<?php CHEMIN ?>js/vendors/jquery.easing.1.3.js"></script>
	<script src="<?php CHEMIN ?>js/vendors/bootstrap.min.js"></script>
	<script src="<?php CHEMIN ?>js/vendors/jquery.waypoints.min.js"></script>

	<script src="<?php CHEMIN ?>js/vendors/jquery.flexslider-min.js"></script>
	<!-- Core -->
	<script src="<?php CHEMIN ?>js/core/main.js"></script>
	<script src="<?php CHEMIN ?>js/core/navigation.js"></script>
	<!-- Animations -->
	<script src="<?php CHEMIN ?>js/animations/header-animations.js"></script>
	<script src="<?php CHEMIN ?>js/animations/page-animations.js"></script>
	<!-- Recipes -->
	<script src="<?php CHEMIN ?>js/recipes/recipe-checkbox.js"></script>

</body>

</html>