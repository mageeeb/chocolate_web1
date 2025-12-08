<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cokolada - Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords"
		content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />



	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link rel="icon" href="<?php CHEMIN ?>images/logos/noisette.png" type="image/png">

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Marck+Script&display=swap"
		rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/flexslider.css">

	<!-- Nouvelle architecture modulaire CSS -->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/base.css">
	<link rel="stylesheet" href="<?php CHEMIN ?>css/components.css">
	<link rel="stylesheet" href="<?php CHEMIN ?>css/pages/home.css">

	<!-- Modernizr JS -->

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php CHEMIN ?>js/respond.min.js"></script>
	<![endif]-->



</head>

<body>

	<div class="homeLoadPage">
		<div class="homeLoadPage__left">

		</div>
		<div class="homeLoadPage__right">

		</div>
		<div class="homeLoadPage__rond">
			<img src="<?php CHEMIN ?>images/ui/loader-chargement.gif" alt="image de loader" class="homeLoadPage__rond__gifload">
		</div>
	</div>

	<div id="page">
		<?php require_once PATH . "/src/View/inc/navigation.php"; ?>

		<header id="fh5co-header" class="fh5co-cover js-fullheight mainHome__header" role="banner"
			data-stellar-background-ratio="0.5">


			<video autoplay muted playsinline id="chocoVideo" class="mainHome__header__video">
				<source src="<?php CHEMIN ?>images/backgrounds/video-chocolat-noisette.mp4" preload="none" loading="lazy" autoplay
					muted type="video/mp4" />
			</video>

			<div id="gifWrapper" class="mainHome__header__gif-wrapper">
				<img src="<?php CHEMIN ?>images/backgrounds/fond-table-chocolats.jpg" id="chocoGif" class="mainHome__header__gif" />
			</div>
			<!-- <img src="images/logotastyBlanco.png" alt="Image du logo"> -->
			<h1 id="chocoTitle" class="mainHome__header__title">Découvrez l'univers du chocolat</h1>

			<span id="downBtn" class="mainHome__header__down-btn">🔻</span>
		</header>

		<div id="fh5co-blog" class="fh5co-section mainHome__blog">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2 class="mainHome__blog__title">Les recettes les mieux notées</h2>
						<p class="mainHome__blog__description">
							Découvrez nos recettes chocolatées les plus populaires !
							Ce sont celles que nos visiteurs adorent le plus.
							Du fondant au chocolat à la mousse légère,
							ces délices ont conquis le cœur des gourmands. Laissez-vous tenter et essayez-les chez vous !
						</p>
					</div>
				</div>

				<div class="row">
					<?php if (!empty($top3)): ?>
						<?php foreach (array_slice($top3, 0, 3) as $recette): ?>
							<div class="col-md-4">
								<div class="animate-box mainHome__blog__item" style="border:  solid gold; padding: 1rem; border-radius: 10px;">
									<a href="?pg=recette&slug=<?= htmlspecialchars($recette['slug'] ?? '') ?>"
										class="mainHome__blog__item__image"
										style="background-image: url('<?php CHEMIN ?>images/recipes/<?= $recette['image_url']  ?>');"></a>



									<div class="mainHome__blog__item__content">
										<span class="mainHome__blog__item__date">

										</span>

										<h3 class="mainHome__blog__item__title">
											<a>
												<?= htmlspecialchars($recette['title']) ?>
											</a>
											<p style="margin: 1rem;">⏱️ <?= htmlspecialchars($recette['prep_time']) ?></p>
										</h3>

										<p class="mainHome__blog__item__text">
											<?= htmlspecialchars($recette['description']) ?>
										</p>

										<ul class="mainHome__blog__item__rating" style="display: flex; justify-content: space-between; padding: 0;">
											<li style="list-style-type: none;">
												<?php
												$createdAt = $recette['created_at'] ?? null;
												if ($createdAt && strtotime($createdAt) !== false) {
													echo htmlspecialchars(date('d/m/Y', strtotime($createdAt)));
												} else {
													echo 'Date non disponible';
												}
												?>

											</li>
											<li class="mainHome__blog__item__rating__stars" style="list-style-type: none;">

												<?php
												$avgRating = isset($recette['avg_rating']) ? (float)$recette['avg_rating'] : 0;
												$stars = (int)round($avgRating);
												for ($i = 0; $i < $stars; $i++) echo '<span style="color:gold;">★</span>';
												for ($i = $stars; $i < 5; $i++) echo '<span style="color: gold;">☆</span>';
												?>
											</li>
										</ul>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					<?php else: ?>
						<div class="col-md-12">
							<p class="text-center">Aucune recette disponible pour le moment.</p>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>



		<div id="fh5co-featured-testimony" class="fh5co-section mainHome__testimony">
			<div class="container">
				<div class="row">


					<div class="col-md-6 animate-box img-to-responsive animate-box mainHome__testimony__image-wrapper"
						data-animate-effect="fadeInLeft">
						<img src="<?php CHEMIN ?>images/recipes/mousse_au_chocolat.jpg" alt="" class="mainHome__testimony__image">
					</div>
					<div class="col-md-6 animate-box mainHome__testimony__content" data-animate-effect="fadeInRight">
						<blockquote class="mainHome__testimony__quote">
							<p class="mainHome__testimony__quote__text">"Découvrez la douceur irrésistible de notre
								gâteau au chocolat fondant,
								une recette simple et gourmande qui ravira petits et grands. "</p>


						</blockquote>
					</div>
				</div>
			</div>
		</div>

		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
				<h2 class="mainHome__blog__title">Les recettes les plus rapide</h2>
				<p class="mainHome__blog__description">
					Craquez pour nos recettes chocolatées ultra‑rapides ! Elles font fondre de plaisir tous nos visiteurs. En quelques minutes seulement, préparez des douceurs irrésistibles, parfaites pour les gourmands pressés. Pas besoin d’attendre, laissez-vous séduire et régalez-vous dès aujourd’hui !
				</p>
			</div>
		</div>

		<div id="fh5co-featured-menu" class="fh5co-section mainHome__menu">
			<div class="container">
				<div class="row">


					<?php foreach ($bestPrepTime as $recette): ?>
						<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box mainHome__menu__item">
							<div class="fh5co-item" data-tilt data-tilt-max="25" data-tilt-speed="400">
								<div class="choco-card animate-fade-in mainHome__menu__item__card" style="border: solid gold; padding: 1rem; border-radius: 10px;">
									<div class="choco-img mainHome__menu__item__card__image-wrapper">
										<img style="border: none; " src="<?php CHEMIN ?>images/recipes/<?= htmlspecialchars($recette->getImageUrl()) ?>"
											class="img-responsive mainHome__menu__item__card__image">
									</div>
									<div class="choco-content mainHome__menu__item__card__content">
										<h3 class="mainHome__menu__item__card__title"><?= htmlspecialchars($recette->getTitle()) ?></h3>
										<span class="fh5co-price mainHome__menu__item__card__price"><?= htmlspecialchars($recette->getPrepTime()) ?></span>
										<p class="mainHome__menu__item__card__description"><?= htmlspecialchars($recette->getDescription()) ?></p>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

				</div>

			</div>
		</div>


		<div id="fh5co-blog2" class="fh5co-section mainHome__comments">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2 class="mainHome__comments__title">Commentaires</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- Carousel Desktop -->
						<div id="commentsCarousel" class="carousel slide hidden-xs" data-ride="carousel" data-interval="4000">
							<!-- Indicateurs -->
							<ol class="carousel-indicators">
								<?php foreach ($chunks as $index => $chunk): ?>
									<li data-target="#commentsCarousel" data-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>"></li>
								<?php endforeach; ?>
							</ol>

							<!-- Slides -->
							<div class="carousel-inner" role="listbox">
								<?php foreach ($chunks as $index => $chunk): ?>
									<div class="item <?= $index === 0 ? 'active' : '' ?>">
										<div class="row">
											<?php foreach ($chunk as $commentData):
												$comment = $commentData['comment'];
												$user    = $commentData['user'];
												$recipe  = $commentData['recipe'];
											?>
												<div class="col-md-4 col-sm-6 col-xs-12">
													<div class="comment-card">
														<div class="comment-content">
															<div class="comment-header">
																<div class="comment-text-section">
																	<span class="comment-date">
																		<?= date("d M Y", strtotime($comment->getCreatedAt())) ?>
																	</span>
																	<h4><?= htmlspecialchars($recipe->getTitle()) ?></h4>
																</div>
																<div class="comment-photo"><!-- photo ronde --></div>
															</div>
															<p>"<?= htmlspecialchars($comment->getContent()) ?>"</p>
															<div class="comment-author">
																<div>
																	<?php
																	$stars = (int)($comment->getRating() ?? 0);
																	for ($i = 0; $i < $stars; $i++) echo '<span style="color:gold;">★</span>';
																	for ($i = $stars; $i < 5; $i++) echo '<span style="color: gold;">☆</span>';
																	?>
																</div>

															</div>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								<?php endforeach; ?>
							</div>

							<!-- Contrôles -->
							<a class="left carousel-control" href="#commentsCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Précédent</span>
							</a>
							<a class="right carousel-control" href="#commentsCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Suivant</span>
							</a>
						</div>


						<!-- Carousel Mobile -->
						<div id="commentsCarouselMobile" class="carousel slide visible-xs" data-ride="carousel" data-interval="3500">
							<!-- Indicateurs -->
							<ol class="carousel-indicators">
								<?php foreach ($commentsData as $index => $commentData): ?>
									<li data-target="#commentsCarouselMobile" data-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>"></li>
								<?php endforeach; ?>
							</ol>

							<!-- Slides -->
							<div class="carousel-inner" role="listbox">
								<?php foreach ($commentsData as $index => $commentData):
									$comment = $commentData['comment'];
									$user    = $commentData['user'];
									$recipe  = $commentData['recipe'];
								?>
									<div class="item <?= $index === 0 ? 'active' : '' ?>">
										<div class="row">
											<div class="col-xs-12">
												<div class="comment-card-mobile">
													<div class="comment-content">
														<div class="comment-header">
															<div class="comment-text-section">
																<span class="comment-date">
																	<?= date("d M Y", strtotime($comment->getCreatedAt())) ?>
																</span>
																<h4><?= htmlspecialchars($recipe->getTitle()) ?></h4>
															</div>
															<div class="comment-photo"></div>
														</div>
														<p>"<?= htmlspecialchars($comment->getContent()) ?>"</p>
														<div class="comment-author">
															<div>
																<?php
																$stars = (int)($comment->getRating());
																for ($i = 0; $i < $stars; $i++) echo '<span style="color:gold;">★</span>';
																for ($i = $stars; $i < 5; $i++) echo '<span style="color: gold;">☆</span>';
																?>
															</div>
															<div>
																- <?= htmlspecialchars($user->getName()) ?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								<?php endforeach; ?>
							</div>

							<!-- Contrôles -->
							<a class="left carousel-control" href="#commentsCarouselMobile" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Précédent</span>
							</a>
							<a class="right carousel-control" href="#commentsCarouselMobile" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Suivant</span>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>

		<?php require_once PATH . "/src/View/inc/footer.php"; ?>


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
		<script src="<?php CHEMIN ?>js/animations/homePageAnim.js"></script>
		<script src="<?php CHEMIN ?>js/animations/page-animations.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
		<script>
			VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
				max: 25,
				speed: 400,
				glare: true,
				"max-glare": 0.3
			});

			// Initialisation du carousel de recettes avec défilement automatique
			$(document).ready(function() {
				$('#recipesCarousel').carousel({
					interval: 4000,
					wrap: true,
					pause: false
				});
				$('#recipesCarousel').carousel('cycle');
			});
		</script>


</body>

</html>