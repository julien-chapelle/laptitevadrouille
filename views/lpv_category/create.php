<div class="row m-0 mt-1 p-2">
    <div class="col p-0 text-left">
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply"></i></a>
    </div>
</div>
<!-- formulaire début-->
<form class="p-4 card mx-4" method="POST" action="" enctype="multipart/form-data">
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="titleOfWalk">
                TITRE</label>
            <input title="Renseignez le nom du lieu de sortie" placeholder="ex: Zoo des animaux" type="text" class="form-control text-center borderInput textColor2" name="titleOfWalk" id="titleOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['titleOfWalk'] : '' ?>" />
            <p class="error"><?= isset($arrayError['titleOfWalk']) ? $arrayError['titleOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <label class="font-weight-bold textColor1" for="shortDescriptionOfWalk">
                DESCRIPTION COURTE</label>
            <textarea title="Décrivez rapidement la sortie" placeholder="ex: Plus de 1500 animaux sauvages..." type="text" class="form-control text-center borderInput textColor2" name="shortDescriptionOfWalk" id="shortDescriptionOfWalk"><?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['shortDescriptionOfWalk'] : '' ?></textarea>
            <p class="error"><?= isset($arrayError['shortDescriptionOfWalk']) ? $arrayError['shortDescriptionOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <label class="font-weight-bold textColor1" for="completeDescriptionOfWalk">
                DESCRIPTION COMPLETE</label>
            <textarea title="Décrivez rapidement la sortie" placeholder="ex: Plus de 1500 animaux sauvages..." type="text" class="form-control text-center borderInput textColor2" name="completeDescriptionOfWalk" id="completeDescriptionOfWalk"><?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['completeDescriptionOfWalk'] : '' ?></textarea>
            <p class="error"><?= isset($arrayError['completeDescriptionOfWalk']) ? $arrayError['completeDescriptionOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="rate_0_3OfWalk">
                PRIX AGE 0-3 ANS</label>
            <input title="Saisir le prix pour la tranche d'âge 0-3ans" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_0_3OfWalk" id="rate_0_3OfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['rate_0_3OfWalk'] : '' ?>" />
            <p class="error"><?= isset($arrayError['rate_0_3OfWalk']) ? $arrayError['rate_0_3OfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="rate_3_11OfWalk">
                PRIX AGE 3-11 ANS</label>
            <input title="Saisir le prix pour la tranche d'âge 3-11ans" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_3_11OfWalk" id="rate_3_11OfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['rate_3_11OfWalk'] : '' ?>" />
            <p class="error"><?= isset($arrayError['rate_3_11OfWalk']) ? $arrayError['rate_3_11OfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="rate_12_plusOfWalk">
                PRIX AGE 12 ANS ET PLUS</label>
            <input title="Saisir le prix à partir de 12ans" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_12_plusOfWalk" id="rate_12_plusOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['rate_12_plusOfWalk'] : '' ?>" />
            <p class="error"><?= isset($arrayError['rate_12_plusOfWalk']) ? $arrayError['rate_12_plusOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="rate_child_disabledOfWalk">
                PRIX ENFANT EN SITUATION DE HANDICAPE</label>
            <input title="Saisir le prix pour les enfants en situation de handicape" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_child_disabledOfWalk" id="rate_child_disabledOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['rate_child_disabledOfWalk'] : '' ?>" />
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
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk1" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk1'] : '' ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk2" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk2'] : '' ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk3" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk3'] : '' ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk4" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk4'] : '' ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk5" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk5'] : '' ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk6" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk6'] : '' ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk7" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk7'] : '' ?>" />
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <label class="font-weight-bold textColor1" for="officialSiteOfWalk">
                SITE OFFICIEL</label>
            <input title="Indiquez l'adresse du site officiel" placeholder="ex: www.zoo.com" type="text" class="form-control text-center borderInput textColor2" name="officialSiteOfWalk" id="officialSiteOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['officialSiteOfWalk'] : '' ?>" />
            <p class="error"><?= isset($arrayError['officialSiteOfWalk']) ? $arrayError['officialSiteOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/outdoorPicto.png" title="Sortie en extérieure" alt="Pictograme sortie extérieure" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="locationPictoOfWalk" id="outdoorPictoOfWalk" value="1" <?= !empty($arrayError) && isset($_POST['locationPictoOfWalk']) && $_POST['locationPictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="outdoorPictoOfWalk">
                    Sortie en extérieure
                </label>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/indoorPicto.png" title="Sortie en intérieure" alt="Pictograme sortie intérieure" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="locationPictoOfWalk" id="indoorPictoOfWalk" value="2" <?= !empty($arrayError) && isset($_POST['locationPictoOfWalk']) && $_POST['locationPictoOfWalk'] == '2' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="indoorPictoOfWalk">
                    Sortie en intérieur
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/zooPicto.png" title="Sortie type zoo" alt="Pictograme zoo" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="zooPictoOfWalk" value="1" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="zooPictoOfWalk">
                    Zoo
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/wildlifePicto.png" title="Sortie type parc animalier" alt="Pictograme parc animalier" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="wildlifePictoOfWalk" value="2" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '2' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="wildlifePictoOfWalk">
                    Parc animalier
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/farmPicto.png" title="Sortie type ferme" alt="Pictograme ferme" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="farmPictoOfWalk" value="3" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '3' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="farmPictoOfWalk">
                    Ferme
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/amusementParkPicto.png" title="Sortie type parc d'attraction" alt="Pictograme parc d'attraction" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="amusementParkPictoOfWalk" value="4" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '4' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="amusementParkPictoOfWalk">
                    Parc d'attraction
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/barCafePicto.png" title="Sortie type bar/Café" alt="Pictograme bar/Café" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="barCafePictoOfWalk" value="5" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '5' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="barCafePictoOfWalk">
                    Bar / Cafe
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/forestPicto.png" title="Sortie type forêt" alt="Pictograme forêt" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="forestPictoOfWalk" value="6" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '6' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="forestPictoOfWalk">
                    Forêt
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/museumPicto.png" title="Sortie type musée" alt="Pictograme musée" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="museumPictoOfWalk" value="7" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '7' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="museumPictoOfWalk">
                    Musée
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/playAreaPicto.png" title="Sortie type aire de jeux" alt="Pictograme aire de jeux" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="playAreaPictoOfWalk" value="8" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '8' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="playAreaPictoOfWalk">
                    Aire de jeux
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/restaurantPicto.png" title="Sortie type restaurant" alt="Pictograme restaurant" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="restaurantPictoOfWalk" value="9" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '9' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="restaurantPictoOfWalk">
                    Restaurant
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/libraryPicto.png" title="Sortie type bibliothèque" alt="Pictograme bibliothèque" class="sizePictoCategory" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="libraryPictoOfWalk" value="10" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '10' ? 'checked' : '' ?>>
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
                <input class="form-check-input" type="radio" name="ageAdvisePictoOfWalk" id="birthPictoOfWalk" value="1" <?= !empty($arrayError) && isset($_POST['ageAdvisePictoOfWalk']) && $_POST['ageAdvisePictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="birthPictoOfWalk">
                    Sortie possible dès la naissance
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/threePicto.png" title="Sortie conseillée dès 3ans" alt="Pictograme dès 3ans" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ageAdvisePictoOfWalk" id="threePictoOfWalk" value="2" <?= !empty($arrayError) && isset($_POST['ageAdvisePictoOfWalk']) && $_POST['ageAdvisePictoOfWalk'] == '2' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="threePictoOfWalk">
                    Sortie conseillée dès 3ans
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/fivePicto.png" title="Sortie conseillée dès 5ans" alt="Pictograme dès 5ans" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ageAdvisePictoOfWalk" id="fivePictoOfWalk" value="3" <?= !empty($arrayError) && isset($_POST['ageAdvisePictoOfWalk']) && $_POST['ageAdvisePictoOfWalk'] == '3' ? 'checked' : '' ?>>
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
                <input class="form-check-input" type="radio" name="practicabilityPictoOfWalk" id="babyStrollerPictoOfWalk" value="1" <?= !empty($arrayError) && isset($_POST['practicabilityPictoOfWalk']) && $_POST['practicabilityPictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="babyStrollerPictoOfWalk">
                    Accessible en poussette
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/babyCarrierPicto.png" title="Porte bébé conseillé" alt="Pictograme porte bébé" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="radio" name="practicabilityPictoOfWalk" id="babyCarrierPictoOfWalk" value="2" <?= !empty($arrayError) && isset($_POST['practicabilityPictoOfWalk']) && $_POST['practicabilityPictoOfWalk'] == '2' ? 'checked' : '' ?>>
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
                <input class="form-check-input" type="checkbox" value="1" id="babyDiaperPictoOfWalk" name="babyDiaperPictoOfWalk" <?= !empty($arrayError) && isset($_POST['babyDiaperPictoOfWalk']) && $_POST['babyDiaperPictoOfWalk'] == '1' ? 'checked' : '' ?>>
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
                <input class="form-check-input" type="checkbox" value="5" id="freePictoOfWalk" name="freePictoOfWalk" <?= !empty($arrayError) && isset($_POST['freePictoOfWalk']) && $_POST['freePictoOfWalk'] == '5' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="freePictoOfWalk">
                    Gratuit
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/cardPicto.png" title="Paiement par carte bleu accepté" alt="Pictograme carte bleu" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="cardPictoOfWalk" name="cardPictoOfWalk" <?= !empty($arrayError) && isset($_POST['cardPictoOfWalk']) && $_POST['cardPictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="cardPictoOfWalk">
                    Paiement par carte bleu accepté
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/checkPicto.png" title="Paiement par chèque accepté" alt="Pictograme chèque" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="3" id="checkPictoOfWalk" name="checkPictoOfWalk" <?= !empty($arrayError) && isset($_POST['checkPictoOfWalk']) && $_POST['checkPictoOfWalk'] == '3' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="checkPictoOfWalk">
                    Paiement par chèque accepté
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/cashPicto.png" title="Paiement en espèces accepté" alt="Pictograme espèces" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="2" id="cashPictoOfWalk" name="cashPictoOfWalk" <?= !empty($arrayError) && isset($_POST['cashPictoOfWalk']) && $_POST['cashPictoOfWalk'] == '2' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="cashPictoOfWalk">
                    Paiement en espèces accepté
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <img src="assets/img_picto/vacancyChecksPicto.png" title="Paiement par chèques vacances accepté" alt="Pictograme chèques vacances" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="4" id="vacancyChecksPictoOfWalk" name="vacancyChecksPictoOfWalk" <?= !empty($arrayError) && isset($_POST['vacancyChecksPictoOfWalk']) && $_POST['vacancyChecksPictoOfWalk'] == '4' ? 'checked' : '' ?>>
                <label class="form-check-label textColor2" for="vacancyChecksPictoOfWalk">
                    Paiement par chèques vacances accepté
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <a class="btn buttonColor2 py-2 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply py-1"></i></a>
            <button class="btn buttonColor2 py-2 shadow" role="button" type="submit" name="validateWalk">CREER</button>
            <p class="valid h5"><?= isset($_POST["validateWalk"]) && isset($arrayError) && empty($arrayError) ? 'Sortie créé avec succès !' : '' ?></p>
            <p class="error h5"><?= isset($arrayError['verifyIfWalkExist']) ? $arrayError['verifyIfWalkExist'] : '' ?></p>
            <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : "" ?></p>
        </div>
    </div>
</form>