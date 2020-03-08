<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply"></i></a>
    </div>
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3">MODIFICATION SORTIE</p>
    </div>
</div>
<!-- formulaire début-->
<form class="p-4 card mx-4" method="POST" action="" enctype="multipart/form-data">
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="assets/<?= isset($detailWalk[0]['pics']) && $detailWalk[0]['pics'] != '' && $detailWalk[0]['pics'] != 'null' ? 'img_walk/' . $detailWalk[0]['pics'] : 'img/emptyPicsWalkLogo.png' ?>" class="img-fluid previewAvatar my-3 mx-5" alt="<?= isset($detailWalk[0]['pics']) ? 'Image ' . strtolower($detailWalk[0]['title']) : 'Image par défaut' ?>" alt="<?= isset($detailWalk[0]['pics']) ? 'Image ' . strtolower($detailWalk[0]['title']) : 'Image par défaut' ?>" />
            <label class="font-weight-bold textColor1" for="fileUploadPics">
                CHOISIR PHOTO ILLUSTRATION</label>
            <input type="file" class="form-control-file btn buttonColor2 btn-sm mb-3" name="fileUploadPics" id="fileUploadPics" title="choisissez une photo d'illustration" />
            <p class="error"><?= isset($arrayError['moveFilePics']) ? $arrayError['moveFilePics'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="assets/<?= isset($detailWalk[0]['map']) && $detailWalk[0]['map'] != '' && $detailWalk[0]['map'] != 'null'  ? 'img_map/' . $detailWalk[0]['map'] : 'img/emptyMapWalkLogo.png' ?>" class="img-fluid previewAvatar my-3 mx-5" alt="<?= isset($detailWalk[0]['map']) ? 'Image ' . strtolower($detailWalk[0]['title']) : 'Image par défaut' ?>" alt="<?= isset($detailWalk[0]['map']) ? 'Image ' . strtolower($detailWalk[0]['title']) : 'Image par défaut' ?>" />
            <label class="font-weight-bold textColor1" for="fileUploadMap">
                CHOISIR IMAGE GOOGLE MAP</label>
            <input type="file" class="form-control-file btn buttonColor2 btn-sm mb-3" name="fileUploadMap" id="fileUploadMap" title="choisissez une image Google Map" />
            <p class="error"><?= isset($arrayError['moveFileMap']) ? $arrayError['moveFileMap'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="googleMapOfWalk">
                ADRESSE GOOGLE MAP</label>
            <textarea title="Renseignez l'adresse Google Map'" placeholder="ex: https://www.google.com/maps/place/zoo..." type="text" class="form-control text-center borderInput textColor2" name="googleMapOfWalk" id="googleMapOfWalk"><?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['googleMapOfWalk'] : $detailWalk[0]['googleMapAddress'] ?></textarea>
            <p class="error"><?= isset($arrayError['googleMapOfWalk']) ? $arrayError['googleMapOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="titleOfWalk">
                TITRE</label>
            <input title="Renseignez le nom du lieu de sortie" placeholder="ex: Zoo des animaux" type="text" class="form-control text-center borderInput textColor2" name="titleOfWalk" id="titleOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['titleOfWalk'] : $detailWalk[0]['title'] ?>" />
            <p class="error"><?= isset($arrayError['titleOfWalk']) ? $arrayError['titleOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <label class="font-weight-bold textColor1" for="shortDescriptionOfWalk">
                DESCRIPTION COURTE</label>
            <textarea title="Décrivez rapidement la sortie" placeholder="ex: Plus de 1500 animaux sauvages..." type="text" class="form-control text-center borderInput textColor2" name="shortDescriptionOfWalk" id="shortDescriptionOfWalk"><?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['shortDescriptionOfWalk'] : $detailWalk[0]['description'] ?></textarea>
            <p class="error"><?= isset($arrayError['shortDescriptionOfWalk']) ? $arrayError['shortDescriptionOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <label class="font-weight-bold textColor1" for="completeDescriptionOfWalk">
                DESCRIPTION COMPLETE</label>
            <textarea title="Décrivez rapidement la sortie" placeholder="ex: Plus de 1500 animaux sauvages..." type="text" class="form-control text-center borderInput textColor2" name="completeDescriptionOfWalk" id="completeDescriptionOfWalk"><?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['completeDescriptionOfWalk'] : $detailWalk[0]['moreInfoDescription'] ?></textarea>
            <p class="error"><?= isset($arrayError['completeDescriptionOfWalk']) ? $arrayError['completeDescriptionOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="rate_0_3OfWalk">
                PRIX AGE 0-3 ANS</label>
            <input title="Saisir le prix pour la tranche d'âge 0-3ans" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_0_3OfWalk" id="rate_0_3OfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['rate_0_3OfWalk'] : $detailWalk[0]['rate_0_3'] ?>" />
            <p class="error"><?= isset($arrayError['rate_0_3OfWalk']) ? $arrayError['rate_0_3OfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="rate_3_11OfWalk">
                PRIX AGE 3-11 ANS</label>
            <input title="Saisir le prix pour la tranche d'âge 3-11ans" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_3_11OfWalk" id="rate_3_11OfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['rate_3_11OfWalk'] : $detailWalk[0]['rate_3_11'] ?>" />
            <p class="error"><?= isset($arrayError['rate_3_11OfWalk']) ? $arrayError['rate_3_11OfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="rate_12_plusOfWalk">
                PRIX AGE 12 ANS ET PLUS</label>
            <input title="Saisir le prix à partir de 12ans" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_12_plusOfWalk" id="rate_12_plusOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['rate_12_plusOfWalk'] : $detailWalk[0]['rate_12_plus'] ?>" />
            <p class="error"><?= isset($arrayError['rate_12_plusOfWalk']) ? $arrayError['rate_12_plusOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="rate_child_disabledOfWalk">
                PRIX ENFANT EN SITUATION DE HANDICAPE</label>
            <input title="Saisir le prix pour les enfants en situation de handicape" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_child_disabledOfWalk" id="rate_child_disabledOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['rate_child_disabledOfWalk'] : $detailWalk[0]['rate_child_disabled'] ?>" />
            <p class="error"><?= isset($arrayError['rate_child_disabledOfWalk']) ? $arrayError['rate_child_disabledOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="openedHoursOfWalk">
                HEURES & PERIODES D'OUVERTURES</label>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk1" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['openedHoursOfWalk1'] : $arrayDateHour[0] ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk2" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['openedHoursOfWalk2'] : $arrayDateHour[1] ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk3" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['openedHoursOfWalk3'] : $arrayDateHour[2] ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk4" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['openedHoursOfWalk4'] : $arrayDateHour[3] ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk5" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['openedHoursOfWalk5'] : $arrayDateHour[4] ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk6" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['openedHoursOfWalk6'] : $arrayDateHour[5] ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk7" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['openedHoursOfWalk7'] : $arrayDateHour[6] ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="officialSiteOfWalk">
                SITE OFFICIEL</label>
            <input title="Indiquez l'adresse du site officiel" placeholder="ex: www.zoo.com" type="text" class="form-control text-center borderInput textColor2" name="officialSiteOfWalk" id="officialSiteOfWalk" value="<?= !empty($arrayError) && isset($_POST['editWalk']) ? $_POST['officialSiteOfWalk'] : $detailWalk[0]['officialSite'] ?>" />
            <p class="error"><?= isset($arrayError['officialSiteOfWalk']) ? $arrayError['officialSiteOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/outdoorPicto.png" title="Sortie en extérieure" alt="Pictograme sortie extérieure" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="locationPictoOfWalk" id="outdoorPictoOfWalk" value="1" <?= isset($detailWalk[0]['locationPicto']) && $detailWalk[0]['locationPicto'] == 'outdoorPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="outdoorPictoOfWalk">
                    Sortie en extérieure
                </label>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/indoorPicto.png" title="Sortie en intérieure" alt="Pictograme sortie intérieure" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="locationPictoOfWalk" id="indoorPictoOfWalk" value="2" <?= isset($detailWalk[0]['locationPicto']) && $detailWalk[0]['locationPicto'] == 'indoorPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="indoorPictoOfWalk">
                    Sortie en intérieur
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/zooPicto.png" title="Sortie type zoo" alt="Pictograme zoo" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="zooPictoOfWalk" value="1" <?= isset($detailWalk[0]['outputTypePicto']) && $detailWalk[0]['outputTypePicto'] == 'zooPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="zooPictoOfWalk">
                    Zoo
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/wildlifePicto.png" title="Sortie type parc animalier" alt="Pictograme parc animalier" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="wildlifePictoOfWalk" value="2" <?= isset($detailWalk[0]['outputTypePicto']) && $detailWalk[0]['outputTypePicto'] == 'wildlifePicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="wildlifePictoOfWalk">
                    Parc animalier
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/farmPicto.png" title="Sortie type ferme" alt="Pictograme ferme" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="farmPictoOfWalk" value="3" <?= isset($detailWalk[0]['outputTypePicto']) && $detailWalk[0]['outputTypePicto'] == 'farmPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="farmPictoOfWalk">
                    Ferme
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/amusementParkPicto.png" title="Sortie type parc d'attraction" alt="Pictograme parc d'attraction" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="amusementParkPictoOfWalk" value="4" <?= isset($detailWalk[0]['outputTypePicto']) && $detailWalk[0]['outputTypePicto'] == 'amusementParkPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="amusementParkPictoOfWalk">
                    Parc d'attraction
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/barCafePicto.png" title="Sortie type bar/Café" alt="Pictograme bar/Café" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="barCafePictoOfWalk" value="5" <?= isset($detailWalk[0]['outputTypePicto']) && $detailWalk[0]['outputTypePicto'] == 'barCafePicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="barCafePictoOfWalk">
                    Bar / Cafe
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/forestPicto.png" title="Sortie type forêt" alt="Pictograme forêt" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="forestPictoOfWalk" value="6" <?= isset($detailWalk[0]['outputTypePicto']) && $detailWalk[0]['outputTypePicto'] == 'forestPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="forestPictoOfWalk">
                    Forêt
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/museumPicto.png" title="Sortie type musée" alt="Pictograme musée" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="museumPictoOfWalk" value="7" <?= isset($detailWalk[0]['outputTypePicto']) && $detailWalk[0]['outputTypePicto'] == 'museumPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="museumPictoOfWalk">
                    Musée
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/playAreaPicto.png" title="Sortie type aire de jeux" alt="Pictograme aire de jeux" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="playAreaPictoOfWalk" value="8" <?= isset($detailWalk[0]['outputTypePicto']) && $detailWalk[0]['outputTypePicto'] == 'playAreaPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="playAreaPictoOfWalk">
                    Aire de jeux
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/restaurantPicto.png" title="Sortie type restaurant" alt="Pictograme restaurant" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="restaurantPictoOfWalk" value="9" <?= isset($detailWalk[0]['outputTypePicto']) && $detailWalk[0]['outputTypePicto'] == 'restaurantPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="restaurantPictoOfWalk">
                    Restaurant
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/libraryPicto.png" title="Sortie type bibliothèque" alt="Pictograme bibliothèque" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="libraryPictoOfWalk" value="10" <?= isset($detailWalk[0]['outputTypePicto']) && $detailWalk[0]['outputTypePicto'] == 'libraryPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="libraryPictoOfWalk">
                    Bibliothèque
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/birthPicto.png" title="Sortie possible dès la naissance" alt="Pictograme dès la naissance" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ageAdvisePictoOfWalk" id="birthPictoOfWalk" value="1" <?= isset($detailWalk[0]['ageAdvisePicto']) && $detailWalk[0]['ageAdvisePicto'] == 'birthPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="birthPictoOfWalk">
                    Sortie possible dès la naissance
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/threePicto.png" title="Sortie conseillée dès 3ans" alt="Pictograme dès 3ans" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ageAdvisePictoOfWalk" id="threePictoOfWalk" value="2" <?= isset($detailWalk[0]['ageAdvisePicto']) && $detailWalk[0]['ageAdvisePicto'] == 'threePicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="threePictoOfWalk">
                    Sortie conseillée dès 3ans
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/fivePicto.png" title="Sortie conseillée dès 5ans" alt="Pictograme sortie dès 5ans" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ageAdvisePictoOfWalk" id="fivePictoOfWalk" value="3" <?= isset($detailWalk[0]['ageAdvisePicto']) && $detailWalk[0]['ageAdvisePicto'] == 'fivePicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="fivePictoOfWalk">
                    Sortie conseillée dès 5ans
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/babyStrollerPicto.png" title="Accessible en poussette" alt="Pictograme accessible en poussette" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="practicabilityPictoOfWalk" id="babyStrollerPictoOfWalk" value="1" <?= isset($detailWalk[0]['practicabilityPicto']) && $detailWalk[0]['practicabilityPicto'] == 'babyStrollerPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="babyStrollerPictoOfWalk">
                    Accessible en poussette
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/babyCarrierPicto.png" title="Porte bébé conseillé" alt="Pictograme porte bébé" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="practicabilityPictoOfWalk" id="babyCarrierPictoOfWalk" value="2" <?= isset($detailWalk[0]['practicabilityPicto']) && $detailWalk[0]['practicabilityPicto'] == 'babyCarrierPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="babyCarrierPictoOfWalk">
                    Porte bébé conseillé
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <img src="assets/img_picto/babyDiaperPicto.png" title="Plan à langer disponible" alt="Pictograme plan à langer" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="babyDiaperPictoOfWalk" name="babyDiaperPictoOfWalk" <?= isset($detailWalk[0]['equipmentPicto']) && $detailWalk[0]['equipmentPicto'] == 'babyDiaperPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="babyDiaperPictoOfWalk">
                    Présence de plan à langer
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/freePicto.png" title="Gratuit" alt="Pictograme gratuit" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="5" id="freePictoOfWalk" name="freePictoOfWalk" <?= isset($detailPaymentWalk[0]['paymentPicto']) && $detailPaymentWalk[0]['paymentPicto'] == 'freePicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="freePictoOfWalk">
                    Gratuit
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/cardPicto.png" title="Paiement par carte bleu accepté" alt="Pictograme carte bleu" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="cardPictoOfWalk" name="cardPictoOfWalk" <?= isset($detailPaymentWalk[0]['paymentPicto']) && $detailPaymentWalk[0]['paymentPicto'] == 'cardPicto.png' || isset($detailPaymentWalk[1]['paymentPicto']) && $detailPaymentWalk[1]['paymentPicto'] == 'cardPicto.png' || isset($detailPaymentWalk[2]['paymentPicto']) && $detailPaymentWalk[2]['paymentPicto'] == 'cardPicto.png' || isset($detailPaymentWalk[3]['paymentPicto']) && $detailPaymentWalk[3]['paymentPicto'] == 'cardPicto.png' || isset($detailPaymentWalk[4]['paymentPicto']) && $detailPaymentWalk[4]['paymentPicto'] == 'cardPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="cardPictoOfWalk">
                    Paiement par carte bleu accepté
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/checkPicto.png" title="Paiement par chèque accepté" alt="Pictograme chèque" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="3" id="checkPictoOfWalk" name="checkPictoOfWalk" <?= isset($detailPaymentWalk[0]['paymentPicto']) && $detailPaymentWalk[0]['paymentPicto'] == 'checkPicto.png' || isset($detailPaymentWalk[1]['paymentPicto']) && $detailPaymentWalk[1]['paymentPicto'] == 'checkPicto.png' || isset($detailPaymentWalk[2]['paymentPicto']) && $detailPaymentWalk[2]['paymentPicto'] == 'checkPicto.png' || isset($detailPaymentWalk[3]['paymentPicto']) && $detailPaymentWalk[3]['paymentPicto'] == 'checkPicto.png' || isset($detailPaymentWalk[4]['paymentPicto']) && $detailPaymentWalk[4]['paymentPicto'] == 'checkPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="checkPictoOfWalk">
                    Paiement par chèque accepté
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/cashPicto.png" title="Paiement en espèces accepté" alt="Pictograme espèces" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="2" id="cashPictoOfWalk" name="cashPictoOfWalk" <?= isset($detailPaymentWalk[0]['paymentPicto']) && $detailPaymentWalk[0]['paymentPicto'] == 'cashPicto.png' || isset($detailPaymentWalk[1]['paymentPicto']) && $detailPaymentWalk[1]['paymentPicto'] == 'cashPicto.png' || isset($detailPaymentWalk[2]['paymentPicto']) && $detailPaymentWalk[2]['paymentPicto'] == 'cashPicto.png' || isset($detailPaymentWalk[3]['paymentPicto']) && $detailPaymentWalk[3]['paymentPicto'] == 'cashPicto.png' || isset($detailPaymentWalk[4]['paymentPicto']) && $detailPaymentWalk[4]['paymentPicto'] == 'cashPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="cashPictoOfWalk">
                    Paiement en espèces accepté
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/vacancyChecksPicto.png" title="Paiement par chèques vacances accepté" alt="Pictograme chèques vacances" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="4" id="vacancyChecksPictoOfWalk" name="vacancyChecksPictoOfWalk" <?= isset($detailPaymentWalk[0]['paymentPicto']) && $detailPaymentWalk[0]['paymentPicto'] == 'vacancyChecksPicto.png' || isset($detailPaymentWalk[1]['paymentPicto']) && $detailPaymentWalk[1]['paymentPicto'] == 'vacancyChecksPicto.png' || isset($detailPaymentWalk[2]['paymentPicto']) && $detailPaymentWalk[2]['paymentPicto'] == 'vacancyChecksPicto.png' || isset($detailPaymentWalk[3]['paymentPicto']) && $detailPaymentWalk[3]['paymentPicto'] == 'vacancyChecksPicto.png' || isset($detailPaymentWalk[4]['paymentPicto']) && $detailPaymentWalk[4]['paymentPicto'] == 'vacancyChecksPicto.png' ? 'checked' : '' ?> />
                <label class="form-check-label textColor2" for="vacancyChecksPictoOfWalk">
                    Paiement par chèques vacances accepté
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 my-4">
            <label for="validateStatusChoice" class="font-weight-bold textColor1">CHOIX DE LA VISIBILITE</label>
            <select class="form-control text-center borderInput textColor2" id="validateStatusChoice" name="validateStatusChoice">
                <option value="Validate" <?= $detailWalk[0]['walkValidate'] == 'Validate' ? 'selected' : '' ?>>Status validé (Sortie visible sur le site)</option>
                <option value="" <?= empty($detailWalk[0]['walkValidate']) || $detailWalk[0]['walkValidate'] == 'null' ? 'selected' : '' ?>>Status non validé (Sortie invisible sur le site)</option>
            </select>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <a class="btn buttonColor2 py-2 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply py-1"></i></a>
            <button class="btn buttonColor2 py-2 shadow" role="button" type="submit" name="editWalk">MODIFIER</button>
            <p class="valid h5"><?= isset($_POST['editWalk']) && isset($arrayError) && empty($arrayError) ? 'Sortie créé avec succès !' : '' ?></p>
            <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : "" ?></p>
        </div>
    </div>
</form>