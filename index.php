<?php require_once('controllers/home/lpv_homeController.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Logo title -->
    <link rel="shortcut icon" href="assets/img/logoLaPtiteVadrouille.png" class="titleSizeLogo" />
    <title><?= include('controllers/home/lpv_homeTitleController.php') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Spartan:300&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="content/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        function onSubmit(token) {
            document.getElementById("createUserForm").submit();
        }
    </script>
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light sticky-top <?= isset($_SESSION['status']) && $_SESSION['status'] == 'admin' ? 'navBarAdminColor' : 'navBarUserColor' ?>">
            <a class="navbar-brand" href="http://laptitevadrouille/index.php?view=accueil"><img src="assets/img/logoLaPtiteVadrouille.png" class="navBarSizeLogo" alt="Logo La P'tite Vadrouille" title="Retour vers accueil" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-baby-carriage textColor2"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form method="GET" action="" class="my-auto" enctype="multipart/form-data">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold h5" href="http://laptitevadrouille/index.php?view=accueil">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white font-weight-bold h5" href="http://laptitevadrouille/index.php?list=walk&amp;page=1">LISTE DES SORTIES</a>
                        </li>
                    </ul>
                </form>
                <form method="POST" action="" class="form-inline my-2 my-lg-0 borderInput row m-0" enctype="multipart/form-data">
                    <input class="form-control mr-1 bg-transparent border-0 col-9 textColor2" type="search" aria-label="Search" name="searchTitle">
                    <button class="btn searchButtonColor my-0 p-0 shadow-none col-2" name="searchSubmit" type="submit" title="Recherche"><i class="fas fa-search p-1"></i></button>
                </form>
                <button type="button" class="btn searchButtonColor my-0 shadow-none pl-2" title="Rechercher autour de moi"><i class="fas fa-crosshairs"></i></button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link sizeFontUser avatarNavZone" href="#" data-toggle="modal" data-target="#signIn">
                            <?= !empty($_SESSION) && $AvatarUser[0]['avatarName'] != null ? '<img src="assets/img_avatar_choice/' . $AvatarUser[0]['avatarName'] . '" class="avatarNav" />' : '<i class="far fa-user-circle textColor2"></i>' ?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid p-0 pb-5">
            <?= include('controllers/home/lpv_homeBodyController.php') ?>
        </div>
        <footer class="row text-center footerColor px-3 py-2 m-0 footerTextSize justify-content-around shadowTop">
            <div class="col-3 p-0">
                <p><a href="http://laptitevadrouille/index.php?view=accueil" class="text-white">Accueil</a></p>
                <p><a class="text-white" data-toggle="modal" data-target="#about">A propos</a></p>
                <p><a href="http://laptitevadrouille/index.php?view=contact" class="text-white">Nous contacter</a></p>
            </div>
            <div class="col-3 p-0">
                <p><a href="http://laptitevadrouille/index.php?legalNotice" class="text-white">Mentions légales</a></p>
                <p><a href="http://laptitevadrouille/index.php?siteMap" class="text-white">Plan du site</a></p>
                <p><a href="http://laptitevadrouille/index.php?helpPage" class="text-white">Aide</a></p>
            </div>
            <div class="col-3 p-0">
                <p class="text-white">Retrouvez-nous sur les réseaux sociaux</p>
                <div class="row">
                    <a class="col-6 p-0 pr-1 text-right" href="https://fr-fr.facebook.com/" target="_blank"><img src="assets/img/facebook.png" title="Facebook" alt="Logo Facebook" id="facebookLogoSize" /></a>
                    <a class="col-6 p-0 pl-1 text-left" href="https://twitter.com/?lang=fr" target="_blank"><img src="assets/img/twitter.png" title="Twitter" alt="Logo Twitter" id="twitterLogoSize" /></a>
                </div>
            </div>
        </footer>
        <footer class="row text-center footerColor text-white px-3 py-2 m-0 footerTextSize border-top border-white">
            <p class="col-12 p-0"><?= 'Tout droits réservés© La P\'tite Vadrouille - 2019 - ' . date('Y') . '.' ?></p>
        </footer>
        <div id="scrollUp">
            <a href="#top" class="scrollUpColor"><i class="far fa-caret-square-up"></i></a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js">
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/script.js"></script>
</body>

</html>