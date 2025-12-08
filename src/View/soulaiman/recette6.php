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
        <!-- NAV : réutilisée de index.html -->
        <?php require_once PATH . "/src/View/inc/navigation.php"; ?>
        <main role="main" class="modern-recipe">
            <section class="hero-wrapper">
                <div class="container hero-grid">
                    <div>
                        <span class="badge-modern"><i class="fa-solid fa-cookie-bite"></i> Signature chocolat</span>
                        <h1>Cookies Maison au Chocolat</h1>
                        <p>Une pâte généreuse, un cœur fondant et des éclats de chocolat noir pour un cookie
                            parfaitement doré. Cette version maison mise sur l'équilibre entre croustillant extérieur et
                            moelleux intérieur.</p>

                        <div class="hero-visual">
                            <div class="floating-card">
                                <img src="<?php CHEMIN ?>images/recipes/cookies_3.jpg" alt="loader chocolat" />
                                <div class="image-overlay">
                                </div>
                            </div>
                        </div>

                        <div class="metrics-grid">
                            <div class="metric-card">
                                <span>Préparation</span>
                                <strong>20 min</strong>
                            </div>
                            <div class="metric-card">
                                <span>Cuisson</span>
                                <strong>12 min</strong>
                            </div>
                            <div class="metric-card">
                                <span>Repos</span>
                                <strong>15 min</strong>
                            </div>
                            <div class="metric-card">
                                <span>Portions</span>
                                <strong>24 pcs</strong>
                            </div>
                        </div>

                        <div class="recipe-info">
                            <div class="rating">

                            </div>
                        </div>


                    </div>
            </section>

            <section class="sections-shell">
                <div class="container">
                    <article class="panel-modern">
                        <h2>Ingrédients essentiels</h2>
                        <div class="ingredients-grid">
                            <div class="ingredient-column">
                                <h3>Base pâte</h3>
                                <ul>
                                    <li><span>200 g</span><span>Beurre mou</span></li>
                                    <li><span>150 g</span><span>Sucre blanc</span></li>
                                    <li><span>100 g</span><span>Sucre roux</span></li>
                                    <li><span>2</span><span>Œufs</span></li>
                                    <li><span>2 c.à.c</span><span>Extrait de vanille</span></li>
                                </ul>
                            </div>
                            <div class="ingredient-column">
                                <h3>Poudres</h3>
                                <ul>
                                    <li><span>280 g</span><span>Farine</span></li>
                                    <li><span>1 c.à.c</span><span>Bicarbonate</span></li>
                                    <li><span>1 pincée</span><span>Sel</span></li>
                                    <li><span>300 g</span><span>Pépites chocolat noir</span></li>
                                </ul>
                            </div>
                            <div class="ingredient-column">
                                <h3>Finitions</h3>
                                <ul>
                                    <li><span>50 g</span><span>Noisettes torréfiées</span></li>
                                    <li><span>1 c.à.s</span><span>Cacao non sucré</span></li>
                                    <li><span>1</span><span>Sachet sucre vanillé</span></li>
                                    <li><span>QS</span><span>Fleur de sel</span></li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="panel-modern">
                        <h2>Étapes clés</h2>
                        <div class="steps-flow">
                            <div class="step-item">
                                <div class="step-number">1</div>
                                <div>
                                    <h3>Aérer le mélange</h3>
                                    <p>Crémez le beurre avec les sucres jusqu'à obtenir une texture claire et mousseuse.
                                        Ajoutez les œufs un à un puis la vanille.</p>
                                </div>
                            </div>
                            <div class="step-item">
                                <div class="step-number">2</div>
                                <div>
                                    <h3>Incorporer les poudres</h3>
                                    <p>Tamisez farine, bicarbonate, cacao et sel. Incorporez délicatement au mélange
                                        pour conserver la légèreté.</p>
                                </div>
                            </div>
                            <div class="step-item">
                                <div class="step-number">3</div>
                                <div>
                                    <h3>Ajouter les inclusions</h3>
                                    <p>Ajoutez pépites et noisettes torréfiées. Filmez la pâte et laissez reposer 15
                                        minutes au frais pour fixer les arômes.</p>
                                </div>
                            </div>
                            <div class="step-item">
                                <div class="step-number">4</div>
                                <div>
                                    <h3>Cuisson précise</h3>
                                    <p>Formez des boules de 45 g, aplatissez légèrement et enfournez 12 minutes à
                                        180 °C. Laissez figer sur grille.</p>
                                </div>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-card">
                                <strong>+ Fleur de sel</strong>
                                <p>Une pincée après cuisson relève les notes chocolatées.</p>
                            </div>
                            <div class="timeline-card">
                                <strong>Repos pâte</strong>
                                <p>Facultatif mais idéal pour un cookie encore plus gourmand.</p>
                            </div>
                            <div class="timeline-card">
                                <strong>Astuce four</strong>
                                <p>Cuire sur deux plaques superposées évite que le dessous ne brûle.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Section Avis / Commentaires -->
                    <section class="recipe-section reviews-section" style="margin-top: 3rem;">
                        <div class="reviews-header">
                            <h2 class="section-title">

                                <?php if (!empty($readRatting)): ?>

                                    <span style="color: gold; font-size: 1.2em; margin-left: 10px;">
                                        <?php for ($i = 0; $i < round($readRatting); $i++): ?>★<?php endfor; ?>
                                    </span>
                                    <span style="font-size: 0.9em; color: #666;">(<?= number_format($readRatting, 1) ?>)</span>
                                <?php endif; ?>
                            </h2>
                            <button id="toggleReviews" class="btn-toggle-reviews"><?= isset($readComment) ? count($readComment) : 0 ?> commentaires</button>
                        </div>

                        <div id="reviewsContainer" class="reviews-container" style="display: none;">
                            <div class="row">
                                <?php if (isset($readComment) && !empty($readComment)): ?>
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
                                <?php endif; ?>
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

                </div>
            </section>
        </main>

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