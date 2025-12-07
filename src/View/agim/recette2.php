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
  <div class="fh5co-loader">
    <img src="<?php CHEMIN ?>images/ui/loader-chargement.gif" alt="loader chocolat" />
  </div>

  <div id="page">
<?php require_once PATH."/src/View/inc/navigation.php"; ?>

    <div class="mainRecette3">

      <header>
        <div class="mainRecette3__image-wrapper">
          <img src="<?php CHEMIN ?>images/recipes/brownie-chocolat-sucre-glace.jpg" alt="Onigiri japonais"
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
          <img src="<?php CHEMIN ?>images/workshop/atelier-chocolat-preparation.jpg" alt="Ingrédients onigiri" />
        </div>
      </section>


      <section class="mainRecette3__preparation">
        <div class="mainRecette3__preparation__image">
          <img src="<?php CHEMIN ?>images/recipes/brownie-chocolat-noix-coco.jpg" alt="Préparation du fondant au chocolat">
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


        <div class="d-flex justify-content-center mainRecette2__comments mainRecette2__comments--spacing">
          <div class="card shadow mainRecette2__comments__card mainRecette2__comments__card--styled">
            <div class="card-body mainRecette2__comments__card__body">
              <h3
                class="text-center mb-4 mainRecette2__comments__card__title mainRecette2__comments__card__title--gold">
                Laissez un commentaire</h3>
              <form class="mainRecette2__comments__card__form" method="post">

                <style>
                  .star-rating {
                    direction: rtl;
                    /* permet de remplir de droite à gauche */
                    display: inline-flex;
                  }

                  .star-rating input {
                    display: none;
                  }

                  .star-rating label {
                    font-size: 2rem;
                    color: #ccc;
                    cursor: pointer;
                  }

                  .star-rating input:checked~label {
                    color: gold;
                  }

                  .star-rating label:hover,
                  .star-rating label:hover~label {
                    color: gold;
                  }
                </style>

                <div class="mb-3">
                  <label for="rating" class="form-label">Votre note :</label>
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

                <div class="mb-3 mainRecette2__comments__card__form__group">
                  <label for="content" class="form-label mainRecette2__comments__card__form__label">Commentaire</label>
                  <textarea class="form-control mainRecette2__comments__card__form__textarea" name="content" rows="4"
                    placeholder="Votre message"></textarea>
                </div>

                <div
                  class="text-center mainRecette2__comments__card__form__submit-wrapper mainRecette2__comments__card__form__submit-wrapper--spacing">
                  <input type="submit"
                    class="btn btn-primary btn-lg mainRecette2__comments__card__form__submit" name="validation"></input>
                </div>

              </form>

            </div>
          </div>
    </div>

<?= var_dump($readRatting); ?>
<?= var_dump($readTop3Ratting); ?>


<?php require_once PATH."/src/View/inc/footer.php"; ?>

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