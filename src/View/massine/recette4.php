<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cokolada - Glace au Chocolat Intense</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Recette de glace au chocolat intense et crémeuse - Cokolada" />
    <meta name="keywords" content="glace, chocolat, dessert, recette, glacée" />
    <meta name="author" content="Cokolada" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="Glace au Chocolat Intense - Cokolada" />
    <meta property="og:image" content="<?php CHEMIN ?>images/recipes/chocolate-ice-cream.jpg" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Cokolada" />
    <meta property="og:description" content="Découvrez notre recette de glace au chocolat intense et crémeuse" />
    <meta name="twitter:title" content="Glace au Chocolat Intense - Cokolada" />
    <meta name="twitter:image" content="<?php CHEMIN ?>images/recipes/chocolate-ice-cream.jpg" />
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
                <img src="<?php CHEMIN ?>images/recipes/<?= htmlspecialchars(isset($recette) && $recette ? ($recette->getImageUrl() ?? 'chocolate-ice-cream.jpg') : 'chocolate-ice-cream.jpg') ?>" alt="Glace au chocolat intense" class="recipe-hero-image">
                <div class="recipe-hero-overlay"></div>
            </div>
            <div class="recipe-hero-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h1 class="recipe-hero-title animate-box" data-animate-effect="fadeInUp">Glace au chocolat intense</h1>
                            <p class="recipe-hero-subtitle animate-box" data-animate-effect="fadeInUp" data-animate-delay="200">Un délice glacé pour les amateurs de chocolat</p>
                            <div class="recipe-hero-meta animate-box" data-animate-effect="fadeInUp" data-animate-delay="400">
                                <span class="recipe-meta-item"><i class="icon-clock"></i> 30 min préparation</span>
                                <span class="recipe-meta-item"><i class="icon-clock"></i> 4h repos</span>
                                <span class="recipe-meta-item"><i class="icon-users"></i> 6 portions</span>
                                <span class="recipe-meta-item"><i class="icon-bar-chart"></i> Facile</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Section Description et Images -->
        <div class="fh5co-section recipe-main-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8 animate-box" data-animate-effect="fadeInLeft">
                        <div class="recipe-content-card">
                            <h2 class="recipe-content-title">
                                <i class="icon-bubble"></i> Description
                            </h2>
                            <p class="recipe-intro-text-modern">
                                Cette glace au chocolat est un véritable délice pour les papilles. Préparée avec du
                                chocolat noir de qualité supérieure,
                                elle offre une texture incroyablement lisse et un goût intense qui persiste en bouche.
                            </p>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="recipe-image-card">
                                        <img src="<?php CHEMIN ?>images/ingredients_glace.png"
                                            alt="Ingrédients pour la glace au chocolat" class="recipe-image-modern">
                                        <p class="image-caption-modern">Ingrédients sélectionnés</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="recipe-image-card">
                                        <img src="<?php CHEMIN ?>images/recipes/chocolate-ice-cream.jpg" alt="Glace au chocolat finie"
                                            class="recipe-image-modern">
                                        <p class="image-caption-modern">Œuvre finale</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 animate-box" data-animate-effect="fadeInRight">
                        <div class="recipe-sidebar-card">
                            <h2 class="recipe-sidebar-title">
                                <i class="icon-info"></i> Informations
                            </h2>
                            <div class="recipe-info-badges">
                                <div class="info-badge-modern">⏱️ 30 min préparation</div>
                                <div class="info-badge-modern">❄️ 4 heures repos</div>
                                <div class="info-badge-modern">👨‍👩‍👧‍👦 6 portions</div>
                                <div class="info-badge-modern">⭐ Facile</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section Ingrédients et Préparation -->
                <div class="row mb-5">
                    <!-- Ingrédients -->
                    <div class="col-lg-4 mb-4 animate-box" data-animate-effect="fadeInLeft">
                        <div class="recipe-sidebar-card">
                            <h2 class="recipe-sidebar-title">
                                <i class="icon-list"></i> Ingrédients
                            </h2>
                            <ul class="recipe-ingredients-list-modern">
                                <li class="recipe-ingredient-modern">
                                    <span class="ingredient-icon">🥛</span>
                                    <span class="ingredient-text">500 ml de crème liquide entière</span>
                                </li>
                                <li class="recipe-ingredient-modern">
                                    <span class="ingredient-icon">🍫</span>
                                    <span class="ingredient-text">200 g de chocolat noir 70%</span>
                                </li>
                                <li class="recipe-ingredient-modern">
                                    <span class="ingredient-icon">🥚</span>
                                    <span class="ingredient-text">4 jaunes d'œufs</span>
                                </li>
                                <li class="recipe-ingredient-modern">
                                    <span class="ingredient-icon">🍬</span>
                                    <span class="ingredient-text">100 g de sucre en poudre</span>
                                </li>
                                <li class="recipe-ingredient-modern">
                                    <span class="ingredient-icon">🌿</span>
                                    <span class="ingredient-text">1 gousse de vanille</span>
                                </li>
                                <li class="recipe-ingredient-modern">
                                    <span class="ingredient-icon">🧂</span>
                                    <span class="ingredient-text">1 pincée de sel</span>
                                </li>
                                <li class="recipe-ingredient-modern">
                                    <span class="ingredient-icon">🥜</span>
                                    <span class="ingredient-text">50 g de noisettes concassées</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Préparation -->
                    <div class="col-lg-8 animate-box" data-animate-effect="fadeInRight">
                        <div class="recipe-content-card">
                            <h2 class="recipe-content-title">
                                <i class="icon-settings"></i> Préparation
                            </h2>
                            <div class="recipe-steps-modern">
                                <div class="recipe-step-modern">
                                    <div class="step-number-modern">1</div>
                                    <div class="step-content-modern">
                                        <h5 class="step-title-modern">Préparation de la base</h5>
                                        <p>Faites chauffer la crème liquide avec les grains de vanille dans une casserole.
                                            Arrêtez avant ébullition pour préserver les arômes.</p>
                                    </div>
                                </div>

                                <div class="recipe-step-modern">
                                    <div class="step-number-modern">2</div>
                                    <div class="step-content-modern">
                                        <h5 class="step-title-modern">Crème anglaise</h5>
                                        <p>Fouettez les jaunes d'œufs avec le sucre jusqu'à ce que le mélange blanchisse et devienne mousseux.
                                            Versez la crème chaude tout en fouettant continuellement.</p>
                                    </div>
                                </div>

                                <div class="recipe-step-modern">
                                    <div class="step-number-modern">3</div>
                                    <div class="step-content-modern">
                                        <h5 class="step-title-modern">Cuisson</h5>
                                        <p>Remettez le mélange sur feu doux et remuez avec une spatule jusqu'à ce qu'il nappe la cuillère.
                                            La température ne doit pas dépasser 85°C.</p>
                                    </div>
                                </div>

                                <div class="recipe-step-modern">
                                    <div class="step-number-modern">4</div>
                                    <div class="step-content-modern">
                                        <h5 class="step-title-modern">Chocolat</h5>
                                        <p>Hors du feu, ajoutez le chocolat finement haché et mélangez délicatement jusqu'à complète dissolution
                                            et obtention d'une texture veloutée.</p>
                                    </div>
                                </div>

                                <div class="recipe-step-modern">
                                    <div class="step-number-modern">5</div>
                                    <div class="step-content-modern">
                                        <h5 class="step-title-modern">Refroidissement</h5>
                                        <p>Laissez refroidir complètement à température ambiante, puis filmez au contact
                                            et réservez au réfrigérateur pendant 2 heures minimum.</p>
                                    </div>
                                </div>

                                <div class="recipe-step-modern">
                                    <div class="step-number-modern">6</div>
                                    <div class="step-content-modern">
                                        <h5 class="step-title-modern">Glacage</h5>
                                        <p>Versez la préparation dans la sorbetière et faites prendre selon les instructions du fabricant
                                            jusqu'à obtenir une texture crémeuse.</p>
                                    </div>
                                </div>

                                <div class="recipe-step-modern">
                                    <div class="step-number-modern">7</div>
                                    <div class="step-content-modern">
                                        <h5 class="step-title-modern">Service</h5>
                                        <p>Transvasez dans un contenant hermétique, parsemer de noisettes concassées et placez au congélateur
                                            2 heures supplémentaires avant de servir.</p>
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
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="recipe-comments-card-modern animate-box" data-animate-effect="fadeInUp">
                            <h3 class="recipe-comments-title-modern text-center">
                                <i class="icon-bubble"></i> Laissez un commentaire
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
                                    <label for="comment" class="form-label-modern">Votre Commentaire *</label>
                                    <textarea class="form-control-modern" id="comment" name="content" rows="5" required
                                        placeholder="Partagez votre expérience avec cette recette..."></textarea>
                                </div>

                                <div class="form-group-modern text-center">
                                    <input type="submit" class="btn btn-primary recipe-submit-btn-modern" value="✨ Envoyer le commentaire" name="validation">
                                </div>
                            </form>
                        </div>

                        <!-- Liste des commentaires -->
                        <div class="recipe-comments-list-modern">
                            <?php if (isset($readComment) && !empty($readComment)): ?>
                                <h3 class="comments-list-title-modern">💬 Commentaires de nos lecteurs</h3>
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
                                            <div class="comment-rating-modern">
                                                <?php 
                                                $rating = (int)($value['comment']->getRating() ?? 0);
                                                for ($i = 0; $i < $rating; $i++): ?>
                                                    <span style="color: var(--gold); font-size: 1.2rem;">★</span>
                                                <?php endfor; ?>
                                            </div>
                                            <p class="comment-text-modern"><?= nl2br(htmlspecialchars($value['comment']->getContent())) ?></p>
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

        <?php require_once PATH . "/src/View/inc/footer.php"; ?>

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
