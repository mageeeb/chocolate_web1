<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Cokolada - Fondant au chocolat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    <link rel="icon" href="<?php CHEMIN ?>images/logos/noisette.png" type="image/png">

  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Marck+Script&display=swap"
    rel="stylesheet" />

  <!-- Animate.css -->
  <link rel="stylesheet" href="<?php CHEMIN ?>css/animate.css" />
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php CHEMIN ?>css/icomoon.css" />
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?php CHEMIN ?>css/bootstrap.css" />
  <!-- Flexslider  -->
  <link rel="stylesheet" href="<?php CHEMIN ?>css/flexslider.css" />

  <!-- Theme style  -->
  <link rel="stylesheet" href="<?php CHEMIN ?>css/style.css" />

  <!-- Modernizr JS -->

  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
      <script src="<?php CHEMIN ?>js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php require_once PATH."/src/View/inc/navigation.php"; ?>


      <section class="mainRecette3__comments" style="margin-top:22rem;">
        <h2>Connexion</h2>
        <form class="mainRecette3__form">
          <label for="name">Nom :</label>
          <input type="text" id="name" name="name" required />

          <label for="subject">Sujet :</label>
          <input type="text" id="subject" name="subject" required />

          <label for="comment">Commentaire :</label>
          <input type="text" id="comment" name="comment" required />

          <button type="submit">Envoyer</button>
          <a style="text-align:center; padding:2rem;" href="?pg=inscription">Pas encors inscrit ? Clique ici</a>
        </form>

      </section>
    </div>



  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
  </div>

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