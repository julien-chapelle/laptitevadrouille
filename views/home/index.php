<div class="row m-0">
    <div class="col p-0">
        <p class="textColor2 font-weight-bold h1 text-center mt-5">LA P'TITE VADROUILLE</p>

    </div>
</div>
<?php if (isset($_SESSION) && empty($_SESSION)) { ?>
    <div class="row m-0 mt-1 p-2 justify-content-center">
        <div class="col p-0 text-center">
            <p class="textColor2 h3">POUR PARTAGER VOS EXPERIENCES INSCRIVEZ-VOUS !</p>
        </div>
    </div>
    <div class="row m-0 mt-1 p-2 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8 col-10  p-0 text-center">
            <a class="btn buttonColor1 btn-lg btn-block px-3 shadow" href="http://laptitevadrouille/index.php?user=add" title="Aller vers inscription">S'INSCRIRE</a>
        </div>
    </div>
<?php } else { ?>
    <div class="row m-0 mt-1 p-2 justify-content-center">
        <div class="col p-0 text-center">
            <p class="textColor1 h3"><?= 'BIENVENU ' . $_SESSION['pseudo'] . ' !' ?></p>
        </div>
    </div>
    <div class="row m-0 mt-1 p-2 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-8 col-10 p-0 text-center">
            <a class="btn buttonColor1 btn-lg btn-block px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Aller vers info utilisateur">PROFIL</a>
        </div>
    </div>
<?php }; ?>
<div class="row d-flex justify-content-center m-0 heightArea">
    <div class="col-md-7 col-sm-7 col-10 text-center mt-3 logoDisplay">
        <img src="assets/img/mapAccueil.png" alt="Carte Normandie" title="Carte Normandie" class="img-fluid" />
    </div>
    <div class="col-6 text-center mt-5 mediaDisplay">
        <p class="textHomePageSeineMaritime showTextSeineMaritime">Seine-Maritime</p>
        <p class="textHomePageEure showTextEure">Eure</p>
        <p class="textHomePageCalvados showTextCalvados">Calvados</p>
        <p class="textHomePageOrne showTextOrne">Orne</p>
        <p class="textHomePageManche showTextManche">Manche</p>
        <img src="assets/img/seine_maritime2.png" title="Image carte Seime-Maritime" alt="Image carte Seime-Maritime" class="mapHomePageSeineMaritime img-fluid moveEffectMap showDetectSeineMaritime" />
        <img src="assets/img/eure2.png" title="Image carte Eure" alt="Image carte Eure" class="mapHomePageEure img-fluid moveEffectMap  showDetectEure" />
        <img src="assets/img/orne2.png" title="Image carte Orne" alt="Image carte Orne" class="mapHomePageOrne img-fluid moveEffectMap showDetectOrne" />
        <img src="assets/img/manche2.png" title="Image carte Manche" alt="Image carte Manche" class="mapHomePageManche img-fluid moveEffectMap showDetectManche" />
        <img src="assets/img/calvados2.png" title="Image carte Calvados" alt="Image carte Calvados" class="mapHomePageCalvados img-fluid moveEffectMap showDetectCalvados" />
    </div>
</div>
<div class="row d-flex justify-content-center m-0">
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Le Havre</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Rouen</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Caen</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Cherbourg</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Evreux</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Dieppe</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Alençon</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Lisieux</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Saint Lô</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Fécamp</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Elbeuf</div>
    <div class="col-lg-1 col-md-2 col-sm-3 col-4 p-0 text-center text-white font-weight-bold">Argentan</div>
</div>