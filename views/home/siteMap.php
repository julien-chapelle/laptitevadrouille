<!-- Plan du site début -->
<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/index.php?view=accueil" title="Retour vers l'accueil"><i class="fas fa-reply"></i></a>
    </div>
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3">PLAN DU SITE</p>
    </div>
</div>
<div class="row justify-content-around m-0">
    <div class="col-lg-3 col-md-2 col-sm-6 col-12 text-center">
        <h2 class="font-weight-bold text-center h4"><a href="http://laptitevadrouille/" title="Vers accueil" class="textColor1">ACCUEIL</a></h2>
        <ul>
            <li class="textColor2">Map</li>
            <li class="textColor2">Rechercher autour de moi</li>
            <li class="textColor2">Villes importantes de la région</li>
        </ul>
    </div>
    <div class="col-lg-3 col-md-2 col-sm-6 col-12 text-center">
        <h2 class="font-weight-bold text-center h4"><a href="http://laptitevadrouille/index.php?list=walk&page=1" title="Vers liste des sorties" class="textColor1">LISTE DES SORTIES</a></h2>
        <ul>
            <li class="textColor2">Liste des sorties</li>
            <li class="textColor2">Détails d'une sorties</li>
        </ul>
    </div>
    <div class="col-lg-3 col-md-2 col-sm-6 col-12 text-center">
        <h2 class="font-weight-bold text-center h4 textColor1">RECHERCHE</h2>
        <ul>
            <li class="textColor2">Résultats de recherche</li>
        </ul>
    </div>
    <div class="col-lg-3 col-md-2 col-sm-6 col-12 text-center">
        <h2 class="font-weight-bold text-center h4 textColor1"><a <?= isset($_SESSION) && !empty($_SESSION) ? 'href="http://laptitevadrouille/index.php?user=detail"' : 'href="http://laptitevadrouille/index.php?user=add"' ?> title="Vers liste des sorties" class="textColor1"><?= isset($_SESSION) && !empty($_SESSION) ? 'COMPTE UTILISATEUR' : 'CREATION DE COMPTE' ?></a></h2>
        <ul>
            <?= isset($_SESSION) && !empty($_SESSION) ? '<li class="textColor2">Détail du compte</li>' : '<li class="textColor2">Création de compte</li>' ?>
        </ul>
    </div>
</div>
<!-- Plan du site fin -->