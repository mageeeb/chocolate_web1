<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cokolada - contact</title>
	<title>Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords"
		content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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

	<link rel="icon" href="images/logos/noisette.png" type="image/png">

	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cinzel:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="fh5co-loader">
		<img src="images/ui/loader-chargement.gif" alt="loader chocolat" />
	</div>

	<div id="page">

<?php require_once PATH."/src/View/inc/navigation.php"; ?>
		<header id="fh5co-header" class="fh5co-cover mainContact__header mainContact__header--background" role="banner"
			data-stellar-background-ratio="0.5">
			<div class="overlay mainContact__header__overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center contactText">
								<h1 id="chocoTitle" class="mainContact__header__title">Contact</h1>
					</div>
				</div>
			</div>
		</header>


		<div id="fh5co-contact" class="fh5co-section animate-box mainContact__section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading mainContact__section__header">
						<h2 class="mainContact__section__title">Contactez-nous pour vos créations chocolatées</h2>
						<p class="mainContact__section__description">Vous avez une question sur nos recettes ? Vous
							souhaitez des conseils personnalisés pour vos
							créations chocolatées ? Notre équipe passionnée de chocolat est là pour vous accompagner
							dans tous vos projets gourmands.</p>
						<p><a href="mailto:info@yourdomainname.com"
								class="btn btn-primary btn-outline mainContact__section__link">Contactez-nous</a></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<form class="modern-contact-form mainContact__section__form" id="new-contact-form">
							<div class="modern-form-container mainContact__section__form__container">
								<div class="modern-form-row mainContact__section__form__row">
									<div class="modern-form-group mainContact__section__form__group">
										<input type="text" id="prenom" name="prenom"
											class="modern-input mainContact__section__form__input" required>
										<label for="prenom"
											class="modern-label mainContact__section__form__label">Prénom</label>
										<span class="modern-focus-border mainContact__section__form__border"></span>
									</div>
									<div class="modern-form-group mainContact__section__form__group">
										<input type="text" id="nom" name="nom"
											class="modern-input mainContact__section__form__input" required>
										<label for="nom"
											class="modern-label mainContact__section__form__label">Nom</label>
										<span class="modern-focus-border mainContact__section__form__border"></span>
									</div>
								</div>
								<div class="modern-form-group mainContact__section__form__group">
									<input type="email" id="email-modern" name="email"
										class="modern-input mainContact__section__form__input" required>
									<label for="email-modern"
										class="modern-label mainContact__section__form__label">Adresse email</label>
									<span class="modern-focus-border mainContact__section__form__border"></span>
								</div>
								<div class="modern-form-group mainContact__section__form__group">
									<textarea id="message-modern" name="message"
										class="modern-textarea mainContact__section__form__textarea" rows="6"
										required></textarea>
									<label for="message-modern"
										class="modern-label mainContact__section__form__label">Votre message</label>
									<span class="modern-focus-border mainContact__section__form__border"></span>
								</div>
								<div class="modern-form-group mainContact__section__form__group">
									<button type="submit" class="modern-submit-btn mainContact__section__form__submit">
										<span class="btn-text mainContact__section__form__submit__text">Envoyer le
											message</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>


<?php require_once PATH."/src/View/inc/footer.php"; ?>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>

	<!-- jQuery -->
	<!-- Vendors -->
	<script src="js/vendors/jquery.min.js"></script>
	<script src="js/vendors/jquery.easing.1.3.js"></script>
	<script src="js/vendors/bootstrap.min.js"></script>
	<script src="js/vendors/jquery.waypoints.min.js"></script>

	<script src="js/vendors/jquery.flexslider-min.js"></script>
	<!-- Core -->
	<script src="js/core/main.js"></script>
	<script src="js/core/navigation.js"></script>
	<!-- Modern Contact Form -->
	<script src="js/modern-contact.js"></script>

</body>

</html>
