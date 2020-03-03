<?php require_once('controllers/home/lpv_homeController.php'); ?>

<head>
    <meta charset="UTF-8" />
    <title><?= include('controllers/home/lpv_homeTitleController.php') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="content/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light navBarColor sticky-top">
            <a class="navbar-brand" href="http://laptitevadrouille/index.php?view=accueil">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-baby-carriage"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form method="GET" action="" class="my-auto">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://laptitevadrouille/index.php?view=accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://laptitevadrouille/index.php?list=walk&amp;page=1">Catégories</a>
                        </li>
                    </ul>
                </form>
                <form method="POST" action="http://laptitevadrouille/index.php?search=title&amp;page=1" class="form-inline my-2 my-lg-0">
                    <input class="form-control shadow mr-1" type="search" placeholder="Recherche" aria-label="Search" name="searchTitle">
                    <button class="btn buttonColor1 my-1 shadow p-2" name="searchSubmit" type="submit" title="Recherche"><i class="fas fa-search p-1"></i></button>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link sizeFontUser avatarNavZone" href="#" data-toggle="modal" data-target="#signIn">
                            <?= !empty($_SESSION) && $AvatarUser[0]['avatarName'] != null ? '<img src="assets/img_avatar_choice/' . $AvatarUser[0]['avatarName'] . '" class="avatarNav" />' : '<i class="far fa-user-circle"></i>' ?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid p-0 pb-5">
            <?= include('controllers/home/lpv_homeBodyController.php') ?>
        </div>
        <footer class="row text-center footerColor px-3 py-2 m-0 footerTextSize justify-content-around">
            <div class="col-3 p-0">
                <p><a href="http://laptitevadrouille/index.php?view=accueil" class="text-light">Accueil</a></p>
                <p><a class="text-light" data-toggle="modal" data-target="#about">A propos</a></p>
                <p><a href="http://laptitevadrouille/index.php?view=contact" class="text-light">Nous contacter</a></p>
            </div>
            <div class="col-3 p-0">
                <p><a href="http://laptitevadrouille/index.php?legalNotice" class="text-light">Mentions légales</a></p>
                <p><a href="http://laptitevadrouille/index.php?siteMap" class="text-light">Plan du site</a></p>
                <p><a href="http://laptitevadrouille/index.php?helpPage" class="text-light">Aide</a></p>
            </div>
            <div class="col-3 p-0">
                <p class="text-light">Retrouvez-nous sur les réseaux sociaux</p>
                <div class="row">
                    <a class="col-6 p-0 pr-1 text-right" href="https://fr-fr.facebook.com/" target="_blank"><img src="assets/img/facebook.png" title="Facebook" alt="Logo Facebook" id="facebookLogoSize" /></a>
                    <a class="col-6 p-0 pl-1 text-left" href="https://twitter.com/?lang=fr" target="_blank"><img src="assets/img/twitter.png" title="Twitter" alt="Logo Twitter" id="twitterLogoSize" /></a>
                </div>
            </div>
        </footer>
        <footer class="row text-center footerColor text-light px-3 py-2 m-0 footerTextSize border-top border-light">
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