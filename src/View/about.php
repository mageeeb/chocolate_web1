<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cokolada - About</title>
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

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php CHEMIN ?>css/style.css">

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php CHEMIN ?>js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="fh5co-loader">
		<img src="<?php CHEMIN ?>images/ui/loader-chargement.gif" alt="loader chocolat" />
	</div>

	<div id="page">
<?php require_once PATH."/src/View/inc/navigation.php"; ?>



		<header id="fh5co-header" class="fh5co-cover js-fullheight mainAbout__header" role="banner"
			data-stellar-background-ratio="0.5">

			<div id="gifWrapper" class="mainAbout__header__gif-wrapper">
				<img src="<?php CHEMIN ?>images/workshop/atelier-chocolat-preparation.jpg" id="chocoGif"
					class="mainAbout__header__gif" />
			</div>
			<h1 id="chocoTitle" class="chocotitleAbout mainAbout__header__title">A propos de nous</h1>

			<span id="downBtn" class="mainAbout__header__down-btn">🔻</span>
		</header>

		<section class="section__about mainAbout__intro">
			<h1 class="section__about__title mainAbout__intro__title">
				Bienvenue sur <span class="about__title__span mainAbout__intro__title__span">Chocolada !</span> le petit
				coin sucré des amoureux du
				chocolat et du cacao !
			</h1>
			<p class="section__about__para mainAbout__intro__description">
				Ici, on partage avant tout une passion commune : celle du bon goût, de la simplicité et du plaisir de
				faire fondre les papilles.
			</p>
		</section>

		<section class="section__features mainAbout__features">
			<h2 class="mainAbout__features__title">Ce qu'on fait</h2>
			<p class="mainAbout__features__description">Sur notre site, tu trouveras des recettes 100 % chocolatées,
				faciles à suivre et toujours délicieuses !
			</p>
			<ul id="features__list" class="features__list mainAbout__features__list">
				<li class="feature__card mainAbout__features__list__item">
					<img src="<?php CHEMIN ?>images/workshop/atelier-ingredients.jpg" alt="Ingrédients"
						class="feature__icon mainAbout__features__list__item__icon">
					<p class="mainAbout__features__list__item__text">Une liste claire et complète des ingrédients</p>
				</li>
				<li class="feature__card mainAbout__features__list__item">
					<img src="<?php CHEMIN ?>images/workshop/atelier-temps-cuisson.jpg" alt="Temps de cuisson"
						class="feature__icon mainAbout__features__list__item__icon">
					<p class="mainAbout__features__list__item__text">Des temps de préparation et de cuisson précis</p>
				</li>
				<li class="feature__card mainAbout__features__list__item">
					<img src="<?php CHEMIN ?>images/workshop/atelier-etapes.png" alt="Étapes"
						class="feature__icon mainAbout__features__list__item__icon">
					<p class="mainAbout__features__list__item__text">Des étapes expliquées simplement, pas à pas</p>
				</li>
				<li class="feature__card mainAbout__features__list__item">
					<img src="<?php CHEMIN ?>images/workshop/atelier-resultat-final.jpg" alt="Photos"
						class="feature__icon mainAbout__features__list__item__icon">
					<p class="mainAbout__features__list__item__text">Des photos avant et après pour t'aider à visualiser
						le résultat</p>
				</li>
			</ul>
			<p class="mainAbout__features__goal">Notre but ? Te permettre de réussir tes desserts sans stress, tout en
				te faisant plaisir !</p>
		</section>

		<section class="section__community mainAbout__community">
			<h2 class="mainAbout__community__title">Partage et gourmandise</h2>
			<p class="mainAbout__community__text">Ici, la cuisine est avant tout un moment de partage.</p>
			<p class="mainAbout__community__text">À la fin de chaque recette, tu peux laisser un commentaire pour donner
				ton avis, partager tes astuces ou
				même montrer ta création ! </p>
			<p class="mainAbout__community__text">Chaque message compte, et ensemble, on fait grandir une belle
				communauté de passionnés de chocolat.</p>
			<p class="cta mainAbout__community__cta">Alors, prêt(e) à enfiler ton tablier et à te laisser tenter ?</p>
		</section>


<?php require_once PATH."/src/View/inc/footer.php"; ?>

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


</body>

</html>