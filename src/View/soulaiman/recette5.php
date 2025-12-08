<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookies Maison — Recette du Chocolat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Recette délicieuse de cookies maison au chocolat. Facile, rapide et gourmand !" />
    <meta name="author" content="Cokolada" />

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
    <!-- Icomoon Icon Fonts -->
    <link rel="stylesheet" href="<?php CHEMIN ?>css/icomoon.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php CHEMIN ?>css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php CHEMIN ?>css/flexslider.css" />

    <!-- Nouvelle architecture modulaire CSS -->
    <link rel="stylesheet" href="<?php CHEMIN ?>css/base.css">
    <link rel="stylesheet" href="<?php CHEMIN ?>css/components.css">
    <link rel="stylesheet" href="<?php CHEMIN ?>css/pages/recipes.css">

    <!-- Modernizr JS -->

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
      <script src="<?php CHEMIN ?>js/respond.min.js"></script>
    <![endif]-->
</head>




<body>
    <div id="page">
        <?php require_once PATH . "/src/View/inc/navigation.php"; ?>
        <main role="main">
            <!-- En-tête de la recette sans images -->
            <header class="recipe-header">
                <div class="fh5co-loader">
                    <img src="<?php CHEMIN ?>images/ui/loader-chargement.gif" alt="loader chocolat" />
                </div>
            </header>

            <!-- Titre de la galerie -->
            <div class="recipe-gallery-title">
                <div class="recipe-gallery-title">
                    <div class="container text-center">
                        <h1 class="recipe-title" style="font-weight: bold; color: gold;">Cookies Maison au Chocolat</h1>
                    </div>
                </div>
            </div>

            <!-- Galerie d'images de recette -->
            <div class="recipe-gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 fh5co-gallery_item">
                            <div class="fh5co-bg-img" style="background-image: url(<?php CHEMIN ?>images/recipes/cookies_2.jpg);"
                                data-trigger="zoomerang"></div>
                            <div class="fh5co-bg-img" style="background-image: url(<?php CHEMIN ?>images/recipes/cookies_3.jpg);"
                                data-trigger="zoomerang"></div>
                        </div>
                        <div class="col-md-6 col-sm-6 fh5co-gallery_item">
                            <div class="fh5co-bg-img fh5co-gallery_big"
                                style="background-image: url(<?php CHEMIN ?>images/recipes/cookies_4.jpg);" data-trigger="zoomerang"></div>
                        </div>
                        <div class="col-md-3 col-sm-3 fh5co-gallery_item">
                            <div class="fh5co-bg-img" style="background-image: url(<?php CHEMIN ?>images/recipes/cookies_5.jpg);"
                                data-trigger="zoomerang"></div>
                            <div class="fh5co-bg-img" style="background-image: url(<?php CHEMIN ?>images/recipes/cookies_6.jpg);"
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
                                <h2 class="section-title" style="font-size: 1.5em;"><i class="icon-list"></i> Ingrédients</h2>
                                <p class="section-subtitle" style="color: white;">Pour environ 24 cookies</p>

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

                                <div class="tip-box" style="color: white; font-size: 1.1em;">
                                    <strong>💡 Astuce :</strong> Utilisez du beurre et des œufs à température ambiante
                                    pour une pâte bien homogène !
                                </div>
                            </section>
                        </div>

                        <!-- Colonne droite : Préparation -->
                        <div class="col-md-7">
                            <section class="recipe-section preparation-section">
                                <h2 class="section-title" style="font-size: 1.5em;"><i class="icon-settings"></i> Préparation</h2>

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

                                <div class="tip-box" style="color: white; font-size: 1.1em;">
                                    <strong>🍪 Conseil :</strong> Ne pas trop cuire ! Les cookies continueront de durcir
                                    légèrement en refroidissant.
                                </div>
                            </section>
                        </div>
                    </div>


                    <!-- Section Avis / Commentaires -->
                    <section class="recipe-section reviews-section" style="margin-top: 3rem;">
                        <div class="reviews-header">
                            <h2 class="section-title">

                                <?php if (!empty($readRatting)): ?>

                                    <span style="color: gold; font-size: 1.2em; margin-left: 10px;">
                                        <?php for ($i = 0; $i < round($readRatting); $i++): ?>★<?php endfor; ?>
                                    </span>
                                    <span style="font-size: 1.2em; color: #666;">(<?= number_format($readRatting, 1) ?>)</span>
                                <?php endif; ?>
                            </h2>
                            <button id="toggleReviews" class="btn-toggle-reviews" style="font-size: 1.2em; padding: 0.8rem 1.5rem;"><?= count($readComment) ?> commentaires</button>
                        </div>

                        <div id="reviewsContainer" class="reviews-container" style="display: none;">
                            <div class="row">
                                <?php foreach ($readComment as $comment): ?>
                                    <div class="col-md-6">
                                        <div class="review">
                                            <div class="review-header">
                                                <strong><?= htmlspecialchars($comment['user']->getName()); ?></strong>
                                                <span class="review-date" style="font-size: 0.85em; color: #999;"><?= $comment['comment']->getCreatedAt() ?></span>
                                            </div>
                                            <div class="review-stars">
                                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                                    <span style="color: <?= $i <= $comment['comment']->getRating() ? '#f5c518' : '#ccc' ?>;">★</span>
                                                <?php endfor; ?>
                                            </div>
                                            <p class="review-text"><?= nl2br(htmlspecialchars($comment['comment']->getContent())); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="comment-form-wrapper" style="margin-top: 2rem;">
                            <h3>Laissez votre avis</h3>
                            <form class="modern-contact-form mainContact__section__form" method="post">
                                <div class="modern-form-container mainContact__section__form__container">
                                    <style>
                                        .star-rating {
                                            direction: rtl;
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

                                    <div class="modern-form-group mainContact__section__form__group">

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

                                    <div class="modern-form-group mainContact__section__form__group">
                                        <textarea name="content" class="modern-textarea mainContact__section__form__textarea" rows="6" required></textarea>
                                        <label class="modern-label mainContact__section__form__label">Votre avis</label>
                                        <span class="modern-focus-border mainContact__section__form__border"></span>
                                    </div>

                                    <div class="modern-form-group mainContact__section__form__group">
                                        <button type="submit" name="validation" class="modern-submit-btn mainContact__section__form__submit">
                                            <span class="btn-text mainContact__section__form__submit__text">Publier mon avis</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>



                </article>
            </div>
        </main>


        <?php require_once PATH . "/src/View/inc/footer.php"; ?>

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