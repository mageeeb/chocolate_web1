<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Glace au Chocolat Intense - Tasty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Recette de glace au chocolat intense et crémeuse" />
    <meta name="keywords" content="glace, chocolat, dessert, recette, glacée" />
    <meta name="author" content="Tasty" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="Glace au Chocolat Intense" />
    <meta property="og:image" content="images/glace-chocolat-finie.jpg" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Tasty" />
    <meta property="og:description" content="Découvrez notre recette de glace au chocolat intense et crémeuse" />
    <meta name="twitter:title" content="Glace au Chocolat Intense" />
    <meta name="twitter:image" content="images/glace-chocolat-finie.jpg" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="summary" />

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
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">

    <!-- Modernizr JS -->
    <script src="../../js/vendors/modernizr-2.6.2.min.js"></script>
</head>

<body class="min-vh-100 recipe-page">
    <div id="page">
<?php require_once PATH."/src/View/inc/navigation.php"; ?>
        <!-- Contenu principal de la recette -->
        <header class="recipe-header-section">
            <div class="container">
                <div class="row recipe-header-row mt-5">
                    <div class="col-md-6 col-sm-6 recipe-header-item slide-from-left">
                        <div class="recipe-header-title">
                            <h1 class="recipe-main-title">Glace au chocolat intense</h1>
                            <p class="recipe-subtitle-text">La dolce vita rencontre la passion du cacao</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 recipe-header-item slide-from-right">
                        <div class="recipe-header-image">
                            <img src="../../images/chocolate-ice-cream.jpg" alt="tiramisu" class="img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Section description et images -->
        <div class="container mt-5" style="margin-top: 100px !important;">
            <div class="row mb-5">
                <div class="col-lg-8">
                    <div class="recipe-card">
                        <div class="recipe-card-header">
                            <h3 class="recipe-card-title">Description</h3>
                        </div>
                        <div class="recipe-card-body">
                            <p class="lead">
                                Cette glace au chocolat est un véritable délice pour les papilles. Préparée avec du
                                chocolat noir de qualité supérieure,
                                elle offre une texture incroyablement lisse et un goût intense qui persiste en bouche.
                            </p>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <img src="../../images/ingredients_glace.png"
                                        alt="Ingrédients pour la glace au chocolat" class="recipe-image">
                                    <p class="image-caption">Ingrédients sélectionnés</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="../../images/chocolate-ice-cream.jpg" alt="Glace au chocolat finie"
                                        class="recipe-image">
                                    <p class="image-caption">Œuvre finale</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="recipe-card h-100">
                        <div class="recipe-card-header">
                            <h4 class="recipe-card-title">Informations</h4>
                        </div>
                        <div class="recipe-card-body text-center">
                            <div class="info-badge d-inline-block">⏱️ 30 min préparation</div>
                            <div class="info-badge d-inline-block">❄️ 4 heures repos</div>
                            <div class="info-badge d-inline-block">👨‍👩‍👧‍👦 6 portions</div>
                            <div class="info-badge d-inline-block">⭐ Facile</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recipe-divider"></div>

            <!-- Section ingrédients et préparation -->
            <div class="row mb-5">
                <!-- Ingrédients -->
                <div class="col-lg-4 mb-4">
                    <div class="recipe-card h-100">
                        <div class="recipe-card-header">
                            <h3 class="recipe-card-title">Ingrédients</h3>
                        </div>
                        <div class="recipe-card-body">
                            <ul class="ingredient-list">
                                <li>500 ml de crème liquide entière</li>
                                <li>200 g de chocolat noir 70%</li>
                                <li>4 jaunes d'œufs</li>
                                <li>100 g de sucre en poudre</li>
                                <li>1 gousse de vanille</li>
                                <li>1 pincée de sel</li>
                                <li>50 g de noisettes concassées</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Préparation -->
                <div class="col-lg-8">
                    <div class="recipe-card">
                        <div class="recipe-card-header">
                            <h3 class="recipe-card-title">Préparation</h3>
                        </div>
                        <div class="recipe-card-body">
                            <ol class="preparation-steps">
                                <li>
                                    <strong>Préparation de la base:</strong> Faites chauffer la crème liquide avec les
                                    grains de vanille dans une casserole.
                                    Arrêtez avant ébullition pour préserver les arômes.
                                </li>
                                <li>
                                    <strong>Crème anglaise:</strong> Fouettez les jaunes d'œufs avec le sucre jusqu'à ce
                                    que le mélange blanchisse et devienne mousseux.
                                    Versez la crème chaude tout en fouettant continuellement.
                                </li>
                                <li>
                                    <strong>Cuisson:</strong> Remettez le mélange sur feu doux et remuez avec une
                                    spatule jusqu'à ce qu'il nappe la cuillère.
                                    La température ne doit pas dépasser 85°C.
                                </li>
                                <li>
                                    <strong>Chocolat:</strong> Hors du feu, ajoutez le chocolat finement haché et
                                    mélangez délicatement jusqu'à complète dissolution
                                    et obtention d'une texture veloutée.
                                </li>
                                <li>
                                    <strong>Refroidissement:</strong> Laissez refroidir complètement à température
                                    ambiante, puis filmez au contact
                                    et réservez au réfrigérateur pendant 2 heures minimum.
                                </li>
                                <li>
                                    <strong>Glacage:</strong> Versez la préparation dans la sorbetière et faites prendre
                                    selon les instructions du fabricant
                                    jusqu'à obtenir une texture crémeuse.
                                </li>
                                <li>
                                    <strong>Service:</strong> Transvasez dans un contenant hermétique, parsemer de
                                    noisettes concassées et placez au congélateur
                                    2 heures supplémentaires avant de servir.
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recipe-divider"></div>

            <!-- Section commentaires -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="recipe-card">
                        <div class="recipe-card-header">
                            <h3 class="recipe-card-title">Laissez un commentaire</h3>
                        </div>
                        <div class="recipe-card-body">
                            <form id="commentForm" class="comment-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Votre Nom *</label>
                                        <input type="text" class="form-control" id="name" name="name" required
                                            placeholder="Ex: Marie Dupont">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="subject" class="form-label">Sujet *</label>
                                        <input type="text" class="form-control" id="subject" name="subject" required
                                            placeholder="Ex: Ma meilleure glace !">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="comment" class="form-label">Votre Commentaire *</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="5" required
                                        placeholder="Partagez votre expérience avec cette recette..."></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-gold btn-lg px-5">
                                        ✨ Envoyer le commentaire
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require_once PATH."/src/View/inc/footer.php"; ?>


        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
        </div>
    </div>

    <!-- jQuery -->
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

    <script>
        // Gestion du formulaire de commentaire
        $(document).ready(function () {
            $('#commentForm').on('submit', function (e) {
                e.preventDefault();
                alert('Merci pour votre commentaire ! Il sera publié après modération.');
                this.reset();
            });
        });
    </script>
</body>

</html>