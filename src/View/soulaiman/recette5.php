<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cokolada - Cookies Maison au Chocolat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Recette délicieuse de cookies maison au chocolat. Facile, rapide et gourmand !" />
    <meta name="author" content="Cokolada" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="Cookies Maison au Chocolat - Cokolada" />
    <meta property="og:image" content="<?php CHEMIN ?>images/recipes/cookies_4.jpg" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Cokolada" />
    <meta property="og:description" content="Découvrez notre recette de cookies maison au chocolat" />
    <meta name="twitter:title" content="Cookies Maison au Chocolat - Cokolada" />
    <meta name="twitter:image" content="<?php CHEMIN ?>images/recipes/cookies_4.jpg" />
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

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
      <script src="<?php CHEMIN ?>js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="recipe-page">
    <div id="page">
        <?php require_once PATH . "/src/View/inc/navigation.php"; ?>
        
        <main role="main">
            <!-- Hero Section avec galerie -->
            <header class="recipe-hero-section recipe-hero-gallery">
                <div class="recipe-hero-image-wrapper">
                    <img src="<?php CHEMIN ?>images/recipes/<?= htmlspecialchars(isset($recette) && $recette ? ($recette->getImageUrl() ?? 'cookies_4.jpg') : 'cookies_4.jpg') ?>" alt="Cookies maison au chocolat" class="recipe-hero-image">
                    <div class="recipe-hero-overlay"></div>
                </div>
                <div class="recipe-hero-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center">
                                <h1 class="recipe-hero-title animate-box" data-animate-effect="fadeInUp">Cookies Maison au Chocolat</h1>
                                <p class="recipe-hero-subtitle animate-box" data-animate-effect="fadeInUp" data-animate-delay="200">Une pâte généreuse, un cœur fondant et des éclats de chocolat noir</p>
                                <div class="recipe-hero-meta animate-box" data-animate-effect="fadeInUp" data-animate-delay="400">
                                    <span class="recipe-meta-item"><i class="icon-clock"></i> 20 min préparation</span>
                                    <span class="recipe-meta-item"><i class="icon-clock"></i> 12 min cuisson</span>
                                    <span class="recipe-meta-item"><i class="icon-users"></i> 24 cookies</span>
                                    <span class="recipe-meta-item"><i class="icon-bar-chart"></i> Facile</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Galerie d'images de recette -->
            <div class="fh5co-section recipe-gallery-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                            <div class="recipe-gallery-item">
                                <div class="recipe-gallery-img" style="background-image: url(<?php CHEMIN ?>images/recipes/cookies_2.jpg);"></div>
                            </div>
                            <div class="recipe-gallery-item mt-3">
                                <div class="recipe-gallery-img" style="background-image: url(<?php CHEMIN ?>images/recipes/cookies_3.jpg);"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 animate-box" data-animate-effect="fadeInUp">
                            <div class="recipe-gallery-item recipe-gallery-main">
                                <div class="recipe-gallery-img" style="background-image: url(<?php CHEMIN ?>images/recipes/cookies_4.jpg);"></div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInRight">
                            <div class="recipe-gallery-item">
                                <div class="recipe-gallery-img" style="background-image: url(<?php CHEMIN ?>images/recipes/cookies_5.jpg);"></div>
                            </div>
                            <div class="recipe-gallery-item mt-3">
                                <div class="recipe-gallery-img" style="background-image: url(<?php CHEMIN ?>images/recipes/cookies_6.jpg);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conteneur principal -->
            <div class="fh5co-section recipe-main-section">
                <div class="container recipe-container">
                    <article class="recipe-article">

                        <!-- Métadonnées -->
                        <section class="recipe-metadata-modern animate-box" data-animate-effect="fadeInUp">
                            <div class="metadata-grid">
                                <div class="metadata-item">
                                    <i class="icon-clock"></i>
                                    <h3>Préparation</h3>
                                    <p>20 min</p>
                                </div>

                                <div class="metadata-item">
                                    <i class="icon-bar-chart"></i>
                                    <h3>Difficulté</h3>
                                    <p>Facile</p>
                                </div>

                                <div class="metadata-item">
                                    <i class="icon-users"></i>
                                    <h3>Portions</h3>
                                    <p>24 cookies</p>
                                </div>
                            </div>
                        </section>

                        <div class="row">
                            <!-- Colonne gauche : Ingrédients -->
                            <div class="col-md-5">
                                <div class="recipe-sidebar animate-box" data-animate-effect="fadeInLeft">
                                    <div class="recipe-sidebar-card">
                                        <h2 class="recipe-sidebar-title">
                                            <i class="icon-list"></i> Ingrédients
                                        </h2>
                                        <p class="recipe-subtitle-desc-modern text-center">Pour environ 24 cookies</p>

                                        <div class="ingredient-category-block-modern">
                                            <h4 class="category-name-modern">🥖 Base de la pâte</h4>
                                            <ul class="recipe-ingredients-list-modern">
                                                <li class="recipe-ingredient-modern">
                                                    <span class="ingredient-icon">🧈</span>
                                                    <span class="ingredient-text"><span class="qty">200g</span> Beurre mou</span>
                                                </li>
                                                <li class="recipe-ingredient-modern">
                                                    <span class="ingredient-icon">🍬</span>
                                                    <span class="ingredient-text"><span class="qty">150g</span> Sucre blanc</span>
                                                </li>
                                                <li class="recipe-ingredient-modern">
                                                    <span class="ingredient-icon">🍬</span>
                                                    <span class="ingredient-text"><span class="qty">100g</span> Sucre roux</span>
                                                </li>
                                                <li class="recipe-ingredient-modern">
                                                    <span class="ingredient-icon">🥚</span>
                                                    <span class="ingredient-text"><span class="qty">2</span> Œufs</span>
                                                </li>
                                                <li class="recipe-ingredient-modern">
                                                    <span class="ingredient-icon">🌿</span>
                                                    <span class="ingredient-text"><span class="qty">2 c.à.c</span> Extrait de vanille</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="ingredient-category-block-modern">
                                            <h4 class="category-name-modern">🌾 Poudres et saveurs</h4>
                                            <ul class="recipe-ingredients-list-modern">
                                                <li class="recipe-ingredient-modern">
                                                    <span class="ingredient-icon">🌾</span>
                                                    <span class="ingredient-text"><span class="qty">280g</span> Farine blanche</span>
                                                </li>
                                                <li class="recipe-ingredient-modern">
                                                    <span class="ingredient-icon">⚗️</span>
                                                    <span class="ingredient-text"><span class="qty">1 c.à.c</span> Bicarbonate de sodium</span>
                                                </li>
                                                <li class="recipe-ingredient-modern">
                                                    <span class="ingredient-icon">🧂</span>
                                                    <span class="ingredient-text"><span class="qty">1 pincée</span> Sel</span>
                                                </li>
                                                <li class="recipe-ingredient-modern">
                                                    <span class="ingredient-icon">🍫</span>
                                                    <span class="ingredient-text"><span class="qty">300g</span> Pépites de chocolat noir</span>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="chef-note-modern">
                                            <strong>💡 Astuce :</strong> Utilisez du beurre et des œufs à température ambiante
                                            pour une pâte bien homogène !
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Colonne droite : Préparation -->
                            <div class="col-md-7">
                                <div class="recipe-content animate-box" data-animate-effect="fadeInRight">
                                    <div class="recipe-content-card">
                                        <h2 class="recipe-content-title">
                                            <i class="icon-settings"></i> Préparation
                                        </h2>

                                        <div class="recipe-steps-modern">
                                            <div class="recipe-step-modern">
                                                <div class="step-number-modern">1</div>
                                                <div class="step-content-modern">
                                                    <h5 class="step-title-modern">Préparer le mélange sucre-beurre</h5>
                                                    <p>Versez le beurre mou et les deux sucres dans un grand récipient. Battez à
                                                        l'aide d'un batteur électrique pendant 3-4 minutes jusqu'à obtenir un
                                                        mélange clair et mousseux.</p>
                                                </div>
                                            </div>

                                            <div class="recipe-step-modern">
                                                <div class="step-number-modern">2</div>
                                                <div class="step-content-modern">
                                                    <h5 class="step-title-modern">Incorporer les œufs et la vanille</h5>
                                                    <p>Ajoutez les œufs un par un en continuant de battre. Versez l'extrait de
                                                        vanille et mélangez bien pour intégrer tous les ingrédients.</p>
                                                </div>
                                            </div>

                                            <div class="recipe-step-modern">
                                                <div class="step-number-modern">3</div>
                                                <div class="step-content-modern">
                                                    <h5 class="step-title-modern">Mélanger les poudres</h5>
                                                    <p>Dans un bol séparé, mélangez la farine, le bicarbonate et le sel. Versez
                                                        progressivement ce mélange dans la pâte en remuant délicatement jusqu'à
                                                        disparition des traces.</p>
                                                </div>
                                            </div>

                                            <div class="recipe-step-modern">
                                                <div class="step-number-modern">4</div>
                                                <div class="step-content-modern">
                                                    <h5 class="step-title-modern">Ajouter les pépites de chocolat</h5>
                                                    <p>Incorporez les pépites de chocolat noir à la pâte. Mélangez délicatement
                                                        avec une cuillère en bois pour les distribuer régulièrement.</p>
                                                </div>
                                            </div>

                                            <div class="recipe-step-modern">
                                                <div class="step-number-modern">5</div>
                                                <div class="step-content-modern">
                                                    <h5 class="step-title-modern">Former les boules</h5>
                                                    <p>Prélevez des portions de pâte avec une cuillère à soupe et formez des
                                                        boules. Déposez-les sur une plaque de cuisson recouverte de papier
                                                        sulfurisé, espacées d'environ 3 cm.</p>
                                                </div>
                                            </div>

                                            <div class="recipe-step-modern">
                                                <div class="step-number-modern">6</div>
                                                <div class="step-content-modern">
                                                    <h5 class="step-title-modern">Cuire les cookies</h5>
                                                    <p>Enfournez à 180°C pendant 11-12 minutes. Les cookies doivent être
                                                        légèrement dorés sur les bords mais encore moelleux au centre. Laissez
                                                        refroidir quelques minutes avant de servir.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chef-note-modern">
                                            <strong>🍪 Conseil :</strong> Ne pas trop cuire ! Les cookies continueront de durcir
                                            légèrement en refroidissant.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section Avis / Commentaires -->
                        <section class="recipe-comments-section-modern mt-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="reviews-header-modern animate-box" data-animate-effect="fadeInUp">
                                            <h2 class="recipe-section-title-modern">
                                                <?php if (!empty($readRatting)): ?>
                                                    <span style="color: var(--gold); font-size: 1.2em; margin-left: 10px;">
                                                        <?php for ($i = 0; $i < round($readRatting); $i++): ?>★<?php endfor; ?>
                                                    </span>
                                                    <span style="font-size: 1.2em; color: rgba(255, 255, 255, 0.6);">(<?= number_format($readRatting, 1) ?>)</span>
                                                <?php endif; ?>
                                            </h2>
                                            <button id="toggleReviews" class="btn-toggle-reviews-modern">
                                                <?= isset($readComment) ? count($readComment) : 0 ?> commentaires
                                            </button>
                                        </div>

                                        <div id="reviewsContainer" class="reviews-container-modern" style="display: grid;">
                                            <div class="row">
                                                <?php if (isset($readComment) && !empty($readComment)): ?>
                                                    <?php foreach ($readComment as $comment): ?>
                                                        <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                                                            <div class="review-modern">
                                                                <div class="review-header-modern">
                                                                    <div class="comment-avatar-modern">
                                                                        <?= strtoupper(substr($comment['user']->getName(), 0, 1)) ?>
                                                                    </div>
                                                                    <div>
                                                                        <strong class="review-author-modern"><?= htmlspecialchars($comment['user']->getName()); ?></strong>
                                                                        <span class="review-date-modern"><?= $comment['comment']->getCreatedAt() ?></span>
                                                                    </div>
                                                                </div>
                                                                <div class="review-stars-modern">
                                                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                                                        <span style="color: <?= $i <= ($comment['comment']->getRating() ?? 0) ? 'var(--gold)' : 'rgba(255, 255, 255, 0.3)' ?>;">★</span>
                                                                    <?php endfor; ?>
                                                                </div>
                                                                <p class="review-text-modern"><?= nl2br(htmlspecialchars($comment['comment']->getContent())); ?></p>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="comment-form-wrapper-modern mt-4">
                                            <div class="recipe-comments-card-modern animate-box" data-animate-effect="fadeInUp">
                                                <h3 class="recipe-comments-title-modern text-center">
                                                    <i class="icon-bubble"></i> Laissez votre avis
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
                                                
                                                <?php if (!isset($_SESSION['is_verified']) || $_SESSION['is_verified'] !== 1): ?>
                                                    <div class="message-info" style="color: #ffa726; background-color: rgba(255, 167, 38, 0.1); padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; border: 1px solid #ffa726; text-align: center;">
                                                        <p><i class="icon-info"></i> Vous devez être connecté pour poster un commentaire. <a href="?pg=inscription" style="color: #ffa726; text-decoration: underline;">Inscrivez-vous</a> ou <a href="?pg=connexion" style="color: #ffa726; text-decoration: underline;">connectez-vous</a>.</p>
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
                                                        <textarea name="content" class="form-control-modern" rows="6" required placeholder="Partagez votre expérience avec cette recette..."></textarea>
                                                        <label class="form-label-modern">Votre avis</label>
                                                    </div>

                                                    <div class="form-group-modern text-center">
                                                        <button type="submit" name="validation" class="btn btn-primary recipe-submit-btn-modern">
                                                            Publier mon avis
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </article>
                </div>
            </div>
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
    
    <script>
        // Toggle des commentaires
        document.getElementById('toggleReviews')?.addEventListener('click', function() {
            const container = document.getElementById('reviewsContainer');
            if (container) {
                container.style.display = container.style.display === 'none' ? 'block' : 'none';
            }
        });
    </script>

</body>

</html>
