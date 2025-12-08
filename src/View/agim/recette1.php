<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Cokolada - Mousse au chocolat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Recette de mousse au chocolat - Cokolada" />
  <meta name="keywords" content="mousse au chocolat, recette, dessert, chocolat" />
  <meta name="author" content="Cokolada" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="Mousse au chocolat - Cokolada" />
  <meta property="og:image" content="<?php CHEMIN ?>images/recipes/fondant_au_chocolat.jpg" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="Cokolada" />
  <meta property="og:description" content="Découvrez notre recette de mousse au chocolat" />
  <meta name="twitter:title" content="Mousse au chocolat - Cokolada" />
  <meta name="twitter:image" content="<?php CHEMIN ?>images/recipes/fondant_au_chocolat.jpg" />
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
  <link rel="stylesheet" href="<?php CHEMIN ?>css/animate.css" />
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="<?php CHEMIN ?>css/icomoon.css" />
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?php CHEMIN ?>css/bootstrap.css" />
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
  <div class="fh5co-loader">
    <img src="<?php CHEMIN ?>images/ui/loader-chargement.gif" alt="loader chocolat" />
  </div>

  <div id="page">
    <?php require_once PATH . "/src/View/inc/navigation.php"; ?>

    <!-- Hero Section - Image principale avec overlay -->
    <header class="recipe-hero-section">
      <div class="recipe-hero-image-wrapper">
        <img src="<?php CHEMIN ?>images/recipes/<?= htmlspecialchars(isset($recette) && $recette ? ($recette->getImageUrl() ?? 'fondant_au_chocolat.jpg') : 'fondant_au_chocolat.jpg') ?>" alt="Mousse au chocolat" class="recipe-hero-image">
        <div class="recipe-hero-overlay"></div>
      </div>
      <div class="recipe-hero-content">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <h1 class="recipe-hero-title animate-box" data-animate-effect="fadeInUp">Mousse au chocolat</h1>
              <p class="recipe-hero-subtitle animate-box" data-animate-effect="fadeInUp" data-animate-delay="200">Un dessert classique et raffiné, léger et onctueux</p>
              <div class="recipe-hero-meta animate-box" data-animate-effect="fadeInUp" data-animate-delay="400">
                <span class="recipe-meta-item"><i class="icon-clock"></i> 15 min préparation</span>
                <span class="recipe-meta-item"><i class="icon-clock"></i> 3h repos</span>
                <span class="recipe-meta-item"><i class="icon-users"></i> 4 personnes</span>
                <span class="recipe-meta-item"><i class="icon-bar-chart"></i> Facile</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Section principale de la recette -->
    <div class="fh5co-section recipe-main-section">
      <div class="container">
        <div class="row">
          <!-- Colonne gauche : Ingrédients -->
          <div class="col-md-5 col-sm-12">
            <div class="recipe-sidebar animate-box" data-animate-effect="fadeInLeft">
              <div class="recipe-sidebar-card">
                <h2 class="recipe-sidebar-title">
                  <i class="icon-list"></i> Ingrédients
                </h2>
                <ul class="recipe-ingredients-list-modern">
                  <li class="recipe-ingredient-modern">
                    <span class="ingredient-icon">🍫</span>
                    <span class="ingredient-text">200 g de chocolat noir</span>
                  </li>
                  <li class="recipe-ingredient-modern">
                    <span class="ingredient-icon">🥚</span>
                    <span class="ingredient-text">4 œufs</span>
                  </li>
                  <li class="recipe-ingredient-modern">
                    <span class="ingredient-icon">🍬</span>
                    <span class="ingredient-text">30 g de sucre</span>
                  </li>
                  <li class="recipe-ingredient-modern">
                    <span class="ingredient-icon">🧂</span>
                    <span class="ingredient-text">1 pincée de sel</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Colonne droite : Préparation -->
          <div class="col-md-7 col-sm-12">
            <div class="recipe-content animate-box" data-animate-effect="fadeInRight">
              <div class="recipe-content-card">
                <h2 class="recipe-content-title">
                  <i class="icon-settings"></i> Préparation
                </h2>
                
                <div class="recipe-steps-modern">
                  <div class="recipe-step-modern">
                    <div class="step-number-modern">1</div>
                    <div class="step-content-modern">
                      <p>Fais fondre le chocolat au bain-marie jusqu'à obtenir une texture lisse et onctueuse.</p>
                    </div>
                  </div>

                  <div class="recipe-step-modern">
                    <div class="step-number-modern">2</div>
                    <div class="step-content-modern">
                      <p>Sépare les blancs des jaunes d'œufs délicatement dans deux récipients différents.</p>
                    </div>
                  </div>

                  <div class="recipe-step-modern">
                    <div class="step-number-modern">3</div>
                    <div class="step-content-modern">
                      <p>Ajoute les jaunes au chocolat tiède et mélange jusqu'à obtenir une préparation homogène.</p>
                    </div>
                  </div>

                  <div class="recipe-step-modern">
                    <div class="step-number-modern">4</div>
                    <div class="step-content-modern">
                      <p>Monte les blancs en neige ferme avec une pincée de sel jusqu'à ce qu'ils forment des pics.</p>
                    </div>
                  </div>

                  <div class="recipe-step-modern">
                    <div class="step-number-modern">5</div>
                    <div class="step-content-modern">
                      <p>Incorpore doucement les blancs au chocolat en soulevant la masse avec une spatule pour préserver la légèreté.</p>
                    </div>
                  </div>

                  <div class="recipe-step-modern">
                    <div class="step-number-modern">6</div>
                    <div class="step-content-modern">
                      <p>Laisse reposer 3 heures au réfrigérateur dans des verrines ou ramequins avant de déguster.</p>
                    </div>
                  </div>
                </div>

                <!-- Image d'étape -->
                <div class="recipe-step-image-wrapper">
                  <img src="<?php CHEMIN ?>images/recipes/recette_steps.jpg" alt="Étapes de préparation" class="recipe-step-image-modern">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section Recette similaire -->
    <div class="fh5co-section recipe-similar-section-modern">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="recipe-section-title-modern animate-box" data-animate-effect="fadeInUp">Recette similaire</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
            <div class="recipe-similar-image-wrapper">
              <img src="<?php CHEMIN ?>images/recipes/mousse-chocolat-fraises.jpg" alt="Mousse au chocolat Grand'ma" class="recipe-similar-image-modern">
            </div>
          </div>
          <div class="col-md-6 col-sm-12 animate-box" data-animate-effect="fadeInRight">
            <div class="recipe-similar-content-modern">
              <h3 class="recipe-similar-title-modern">Mousse au chocolat Grand'ma</h3>
              <h4 class="recipe-similar-subtitle-modern">Découvrez la recette de mamie devenue culte et virale</h4>
              <p class="recipe-similar-description-modern">Mousse au chocolat à base d'orange et d'agrumes, accompagnée de petits beurres pour le côté gourmand, et de fraises pour une touche healthy. Une recette traditionnelle revisitée avec amour.</p>
              <a href="#" class="btn btn-primary recipe-similar-btn-modern">Découvrez la recette</a>
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
                  <label for="content" class="form-label-modern">Votre commentaire</label>
                  <textarea class="form-control-modern" name="content" id="content" rows="5" placeholder="Partagez votre expérience avec cette recette..."></textarea>
                </div>

                <div class="form-group-modern text-center">
                  <input type="submit" class="btn btn-primary recipe-submit-btn-modern" name="validation" value="Publier mon commentaire">
                </div>
              </form>
            </div>

            <!-- Liste des commentaires -->
            <div class="recipe-comments-list-modern" style="margin-top: 3rem;">
              <h3 class="recipe-comments-title-modern text-center" style="margin-bottom: 2rem;">
                <i class="icon-bubble"></i> Commentaires des lecteurs
              </h3>
              <?php if (isset($readComment) && !empty($readComment)): ?>
                <?php foreach ($readComment as $comment): ?>
                  <div class="recipe-comment-item-modern animate-box" data-animate-effect="fadeInUp">
                    <div class="comment-avatar-modern">
                      <?= strtoupper(substr($comment['user']->getName(), 0, 1)) ?>
                    </div>
                    <div class="comment-content-wrapper-modern">
                      <div class="comment-header-modern">
                        <h5 class="comment-author-modern"><?= htmlspecialchars($comment['user']->getName()); ?></h5>
                        <div class="comment-rating-modern">
                          <?php
                          $rating = (int)($comment['comment']->getRating() ?? 0);
                          for ($i = 0; $i < $rating; $i++):
                          ?>
                            <span style="color: var(--gold); font-size: 1.2rem;">★</span>
                          <?php
                          endfor;
                          ?>
                        </div>
                      </div>
                      <p class="comment-text-modern"><?= nl2br(htmlspecialchars($comment['comment']->getContent())); ?></p>
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
