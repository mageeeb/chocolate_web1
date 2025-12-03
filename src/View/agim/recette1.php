<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Cokolada - Mousse au chocolat</title>
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

  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Marck+Script&display=swap"
    rel="stylesheet" />
  <link rel="icon" href="<?php CHEMIN ?>images/logos/noisette.png" type="image/png">

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
  <div class="fh5co-loader">
    <img src="<?php CHEMIN ?>images/ui/loader-chargement.gif" alt="loader chocolat" />
  </div>

  <div id="page">
<?php require_once PATH."/src/View/inc/navigation.php"; ?>


    <div class="mainRecette2">




      <!-- recette2 -->
      <div class="container py-5 mainRecette2__container mainRecette2__container--spacing">
        <h1 class="text-center mb-4 mainRecette2__title">Mousse au chocolat</h1>

        <div class="card shadow mx-auto mainRecette2__card">
          <div class="d-block text-center mainRecette2__card__image-wrapper">
            <img src="<?php CHEMIN ?>images/recipes/gateau-chocolat-fondant.jpg"
              class="card-img-top d-block mx-auto mainRecette2__card__main-image" alt="Mousse au chocolat">
          </div>

          <div class="card-body mainRecette2__card__body">
            <h4 class="text-center mainRecette2__card__ingredients-title mainRecette2__card__ingredients-title--styled">
              Ingrédients</h4>
            <ul
              class="list-group mb-4 mainRecette2__card__ingredients-list mainRecette2__card__ingredients-list--spacing">
              <li class="list-group-item mainRecette2__card__ingredients-list__item">200 g de chocolat noir</li>
              <li class="list-group-item mainRecette2__card__ingredients-list__item">4 œufs</li>
              <li class="list-group-item mainRecette2__card__ingredients-list__item">30 g de sucre</li>
              <li class="list-group-item mainRecette2__card__ingredients-list__item">1 pincée de sel</li>
            </ul>


            <h4 class="text-center mainRecette2__card__preparation-title mainRecette2__card__preparation-title--styled">
              Préparation</h4>


            <ol
              class="list-group list-group-numbered mb-4 mainRecette2__card__preparation-list mainRecette2__card__preparation-list--spacing">
              <li class="list-group-item mainRecette2__card__preparation-list__item">Fais fondre le chocolat au
                bain-marie.</li>
              <li class="list-group-item mainRecette2__card__preparation-list__item">Sépare les blancs des jaunes.</li>
              <li class="list-group-item mainRecette2__card__preparation-list__item">Ajoute les jaunes au chocolat
                tiède.</li>
              <li class="list-group-item mainRecette2__card__preparation-list__item">Monte les blancs en neige avec une
                pincée de sel.</li>
              <li class="list-group-item mainRecette2__card__preparation-list__item">Incorpore doucement les blancs au
                chocolat.</li>
              <li class="list-group-item mainRecette2__card__preparation-list__item">Laisse reposer 3 heures au
                réfrigérateur.</li>
              <img src="<?php CHEMIN ?>images/recipes/recette_steps.jpg" alt="image d'étape a suivre">
            </ol>

          </div>
          <h2 class="text-center mainRecette2__card__similary-title">Recette similaire</h2>

          <div class="text-center mainRecette2__card__preparation-image-wrapper">
            <img src="<?php CHEMIN ?>images/recipes/mousse-chocolat-fraises.jpg"
              class="card-img-top d-block mx-auto mainRecette2__card__preparation-image" alt="Mousse au chocolat">
            <div class="mainRecette2__card__similary-recipe">
              <h3>Mousse au chocolat Grand'ma</h3>
              <h4>Découvrez la recette de mamie devenu culte et viral pour tout le monde</h4>
              <p>Mousse au chocolat à base d’orange et d’agrumes, accompagnée de petits beurres pour le côté gourmand,
                et de fraises pour une touche healthy</p>
              <a href="#">Découvrez la recette</a>
            </div>
          </div>
        </div>

        <!-- ESPACE COMMENTAIRE -->
        <div class="d-flex justify-content-center mainRecette2__comments mainRecette2__comments--spacing">
          <div class="card shadow mainRecette2__comments__card mainRecette2__comments__card--styled">
            <div class="card-body mainRecette2__comments__card__body">
              <h3
                class="text-center mb-4 mainRecette2__comments__card__title mainRecette2__comments__card__title--gold">
                Laissez un commentaire</h3>
              <form class="mainRecette2__comments__card__form">

                <div class="mb-3 mainRecette2__comments__card__form__group">
                  <label class="form-label mainRecette2__comments__card__form__label">Nom</label>
                  <input type="text" class="form-control mainRecette2__comments__card__form__input"
                    placeholder="Votre nom">
                </div>

                <div class="mb-3 mainRecette2__comments__card__form__group">
                  <label class="form-label mainRecette2__comments__card__form__label">Sujet</label>
                  <input type="text" class="form-control mainRecette2__comments__card__form__input"
                    placeholder="Sujet du commentaire">
                </div>

                <div class="mb-3 mainRecette2__comments__card__form__group">
                  <label class="form-label mainRecette2__comments__card__form__label">Commentaire</label>
                  <textarea class="form-control mainRecette2__comments__card__form__textarea" rows="4"
                    placeholder="Votre message"></textarea>
                </div>

                <div
                  class="text-center mainRecette2__comments__card__form__submit-wrapper mainRecette2__comments__card__form__submit-wrapper--spacing">
                  <button type="submit"
                    class="btn btn-primary btn-lg mainRecette2__comments__card__form__submit">Envoyer</button>
                </div>

              </form>
            </div>
          </div>
        </div>


      </div>

      <!-- recette2 -->



    </div>

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
  <!-- Recipes -->
  <script src="<?php CHEMIN ?>js/recipes/recipe-steps.js"></script>
  <script src="<?php CHEMIN ?>js/recipes/recipe-checkbox.js"></script>


</body>

</html>