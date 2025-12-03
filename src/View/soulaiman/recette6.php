<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cookies Maison — Recette du Chocolat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Recette délicieuse de cookies maison au chocolat. Facile, rapide et gourmand !" />
    <meta name="author" content="Cokolada" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,600i,700"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Marck+Script&display=swap"
        rel="stylesheet">
    <link rel="icon" href="<?= BASE_URL ?>/images/logos/noisette.png" type="image/png">
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/animate.css">
    <!-- Icomoon Icon Fonts -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/icomoon.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/flexslider.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
    <!-- Recipe style -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/recette.css">

    <!-- Icônes Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Modernizr JS -->
    <script src="<?= BASE_URL ?>/js/modernizr-2.6.2.min.js"></script>
    <!-- Recette7 CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/recette7.css">
</head>

<body>
    <div id="page">
        <!-- NAV : réutilisée de index.html -->
<?php require_once PATH."/src/View/inc/navigation.php"; ?>
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
                                <img src="../../images/recipes/cookies_3.jpg" alt="loader chocolat" />
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

                    <section class="panel-modern reviews-section">
                        <div class="reviews-header">
                            <h2 class="section-title"><i class="icon-bubbles4"></i> Avis des utilisateurs</h2>
                            <button id="toggleReviews" class="btn-toggle-reviews">Afficher les avis</button>
                        </div>

                        <div id="reviewsContainer" class="reviews-container" style="display: none;">
                            <div class="review">
                                <div class="review-header">
                                    <strong>Marie L.</strong>
                                    <span class="review-date">Il y a 5 jours</span>
                                </div>
                                <div class="review-stars">
                                    <span style="color:#f5c518;">★★★★★</span>
                                </div>
                                <p class="review-text">Recette fantastique ! J'ai fait ces cookies hier et toute ma
                                    famille en a adoré. Moelleux et gourmands, exactement comme je l'imaginais. Je les
                                    refais ce week-end !</p>
                            </div>

                            <div class="review">
                                <div class="review-header">
                                    <strong>Jean P.</strong>
                                    <span class="review-date">Il y a 2 semaines</span>
                                </div>
                                <div class="review-stars">
                                    <span style="color:#f5c518;">★★★★☆</span>
                                </div>
                                <p class="review-text">Bons cookies, j'ai juste ajouté un peu plus de chocolat à mon
                                    goût. Le temps de cuisson était parfait tel qu'indiqué. Merci pour cette recette !
                                </p>
                            </div>

                            <div class="review">
                                <div class="review-header">
                                    <strong>Sophie D.</strong>
                                    <span class="review-date">Il y a 1 mois</span>
                                </div>
                                <div class="review-stars">
                                    <span style="color:#f5c518;">★★★★★</span>
                                </div>
                                <p class="review-text">C'est devenue ma recette de cookies préférée ! Facile, rapide, et
                                    délicieuse. Je recommande vivement. Parfait pour les goûters en famille.</p>
                            </div>
                        </div>

                        <div class="comment-form-wrapper">
                            <h3>Laissez votre avis</h3>
                            <form id="reviewForm" class="comment-form review-form">
                                <div class="form-group">
                                    <label for="reviewName">Votre nom *</label>
                                    <input type="text" id="reviewName" class="form-control" placeholder="Votre nom"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="reviewRating">Note *</label>
                                    <select id="reviewRating" class="form-control" required>
                                        <option value="">Sélectionnez une note</option>
                                        <option value="5">★★★★★ Excellent</option>
                                        <option value="4">★★★★☆ Bon</option>
                                        <option value="3">★★★☆☆ Correct</option>
                                        <option value="2">★★☆☆☆ À améliorer</option>
                                        <option value="1">★☆☆☆☆ Mauvais</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="reviewText">Votre avis *</label>
                                    <textarea id="reviewText" class="form-control" rows="4"
                                        placeholder="Partagez votre expérience..." required></textarea>
                                </div>
                                <button type="submit" class="btn-submit">Publier mon avis</button>
                            </form>
                        </div>
                    </section>

                    <section class="panel-modern recipe-actions">
                        <button id="printBtn" class="btn-print">
                            <i class="icon-print"></i> Imprimer la recette
                        </button>
                    </section>
                </div>
            </section>
        </main>

<?php require_once PATH."/src/View/inc/footer.php"; ?>

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
    </div>

    <!-- jQuery -->
    <script src="../../js/vendors/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../../js/vendors/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../../js/vendors/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../../js/vendors/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="../../js/vendors/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="../../js/vendors/jquery.flexslider-min.js"></script>
    <!-- Main -->
    <script src="../../js/core/main.js"></script>
    <script src="../../js/core/navigation.js"></script>
    <!-- Recipe script -->
    <script src="../../js/recipe-marmiton.js"></script>
    <!-- Recette7 JS -->
    <script src="../../js/recette7.js"></script>

</body>

</html>