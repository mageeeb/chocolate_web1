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
    <link rel="icon" href="../../images/logos/noisette.png" type="image/png">

  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Marck+Script&display=swap"
    rel="stylesheet" />

  <!-- Animate.css -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/animate.css" />
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/icomoon.css" />
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.css" />
  <!-- Flexslider  -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/flexslider.css" />

  <!-- Theme style  -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css" />

  <!-- Modernizr JS -->

  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
      <script src="../../js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <div class="fh5co-loader">
    <img src="../../images/ui/loader-chargement.gif" alt="loader chocolat" />
  </div>

  <div id="page">
<?php require_once PATH."/src/View/inc/navigation.php"; ?>

    <div class="mainRecette3">

      <header>
        <div class="mainRecette3__image-wrapper">
          <img src="../../images/recipes/brownie-chocolat-sucre-glace.jpg" alt="Onigiri japonais"
            class="mainRecette3__main-image" />
        </div>
        <div class="mainRecette3__div">
          <h1>Fondant au chocolat – Dessert fondant et gourman</h1>
          <p class="mainRecette3__description">
            Le fondant au chocolat est un dessert irrésistible, à la fois
            croustillant à l’extérieur et fondant à l’intérieur. Parfait pour
            les amateurs de chocolat, il accompagne idéalement une fin de
            repas ou une pause gourmande.
          </p>
        </div>
      </header>


      <section class="mainRecette3__ingredients">
        <div class="mainRecette3__ingredients__desc">
          <h2>Ingrédients</h2>
          <ul>
            <li>200g de chocolat noir pâtissier</li>
            <li>100g de beurre</li>
            <li>3 œufs</li>
            <li>80g de sucre</li>
            <li>50g de farine</li>
            <li>Une pincée de sel</li>
          </ul>
        </div>
        <div class="mainRecette3__ingredients__image">
          <img src="../../images/workshop/atelier-chocolat-preparation.jpg" alt="Ingrédients onigiri" />
        </div>
      </section>


      <section class="mainRecette3__preparation">
        <div class="mainRecette3__preparation__image">
          <img src="../../images/recipes/brownie-chocolat-noix-coco.jpg" alt="Préparation du fondant au chocolat">
        </div>
        <div class="mainRecette3__preparation__tasks">

          <label class="checkboxTask">
            <input type="checkbox">
            <span>Préchauffez le four à 180°C (th. 6) et beurrez vos ramequins ou moules individuels.</span>
          </label>

          <label class="checkboxTask">
            <input type="checkbox">
            <span>Faites fondre le chocolat avec le beurre au bain-marie ou au micro-ondes.</span>
          </label>

          <label class="checkboxTask">
            <input type="checkbox">
            <span>Dans un saladier, fouettez les œufs avec le sucre jusqu’à ce que le mélange blanchisse.</span>
          </label>

          <label class="checkboxTask">
            <input type="checkbox">
            <span>Ajoutez la farine, puis incorporez le chocolat fondu. Mélangez bien.</span>
          </label>

          <label class="checkboxTask">
            <input type="checkbox">
            <span>Versez la préparation dans les moules et enfournez pendant 10 à 12 minutes.</span>
          </label>

          <label class="checkboxTask">
            <input type="checkbox">
            <span>Servez chaud, accompagné éventuellement d’une boule de glace vanille ou d’un coulis de fruits
              rouges.</span>
          </label>

        </div>



      </section>


      <section class="mainRecette3__comments">
        <h2>Laissez un commentaire</h2>
        <form class="mainRecette3__form">
          <label for="name">Nom :</label>
          <input type="text" id="name" name="name" required />

          <label for="subject">Sujet :</label>
          <input type="text" id="subject" name="subject" required />

          <label for="comment">Commentaire :</label>
          <input type="text" id="comment" name="comment" required />

          <button type="submit">Envoyer</button>
        </form>
      </section>
    </div>


<?php require_once PATH."/src/View/inc/footer.php"; ?>

  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
  </div>

  </div>


  <!-- jQuery -->
  <!-- Vendors -->
  <script src="../../js/vendors/jquery.min.js"></script>
  <script src="../../js/vendors/jquery.easing.1.3.js"></script>
  <script src="../../js/vendors/bootstrap.min.js"></script>
  <script src="../../js/vendors/jquery.waypoints.min.js"></script>

  <script src="../../js/vendors/jquery.flexslider-min.js"></script>
  <!-- Core -->
  <script src="../../js/core/main.js"></script>
  <script src="../../js/core/navigation.js"></script>
  <!-- Animations -->
  <script src="../../js/animations/header-animations.js"></script>
  <script src="../../js/animations/page-animations.js"></script>
  <!-- Recipes -->
  <script src="../../js/recipes/recipe-checkbox.js"></script>

</body>

</html>