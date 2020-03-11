<!-- Create walk view start -->
<div class="row m-0 mt-1 p-2">
    <div class="col-lg-1 col-md-1 col-sm-1 col-12 p-0 text-left">
        <!-- Return button on user details -->
        <a class="btn buttonColor2 px-3 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply"></i></a>
    </div>
    <!-- Title of page -->
    <div class="col-lg-11 col-md-11 col-sm-11 col-12 text-left">
        <p class="textColor1 h3 mt-3">CREATION D'UNE SORTIE</p>
    </div>
</div>
<!-- Form start -->
<form class="p-4 card mx-4" method="POST" action="" enctype="multipart/form-data">
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <!-- Label title of walk -->
            <label class="font-weight-bold textColor1" for="titleOfWalk">
                TITRE</label>
            <!-- Input title of walk -->
            <input title="Renseignez le nom du lieu de sortie" placeholder="ex: Zoo des animaux" type="text" class="form-control text-center borderInput textColor2" name="titleOfWalk" id="titleOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['titleOfWalk'] : '' ?>" />
            <!-- Error message title -->
            <p class="error"><?= isset($arrayError['titleOfWalk']) ? $arrayError['titleOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <!-- Label short description of walk -->
            <label class="font-weight-bold textColor1" for="shortDescriptionOfWalk">
                DESCRIPTION COURTE</label>
            <!-- Textarea short description of walk -->
            <textarea title="Décrivez rapidement la sortie" placeholder="ex: Plus de 1500 animaux sauvages..." type="text" class="form-control text-center borderInput textColor2" name="shortDescriptionOfWalk" id="shortDescriptionOfWalk"><?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['shortDescriptionOfWalk'] : '' ?></textarea>
            <!-- Error message short description -->
            <p class="error"><?= isset($arrayError['shortDescriptionOfWalk']) ? $arrayError['shortDescriptionOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
            <!-- Label full description of walk -->
            <label class="font-weight-bold textColor1" for="completeDescriptionOfWalk">
                DESCRIPTION COMPLETE</label>
            <!-- Textarea full description of walk -->
            <textarea title="Décrivez rapidement la sortie" placeholder="ex: Plus de 1500 animaux sauvages..." type="text" class="form-control text-center borderInput textColor2" name="completeDescriptionOfWalk" id="completeDescriptionOfWalk"><?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['completeDescriptionOfWalk'] : '' ?></textarea>
            <!-- Error message full description -->
            <p class="error"><?= isset($arrayError['completeDescriptionOfWalk']) ? $arrayError['completeDescriptionOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <!-- Label rate 0-3 -->
            <label class="font-weight-bold textColor1" for="rate_0_3OfWalk">
                PRIX AGE 0-3 ANS</label>
            <!-- Input rate 0-3 -->
            <input title="Saisir le prix pour la tranche d'âge 0-3ans" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_0_3OfWalk" id="rate_0_3OfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['rate_0_3OfWalk'] : '' ?>" />
            <!-- Error message rate 0-3 -->
            <p class="error"><?= isset($arrayError['rate_0_3OfWalk']) ? $arrayError['rate_0_3OfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <!-- Label rate 3-11 -->
            <label class="font-weight-bold textColor1" for="rate_3_11OfWalk">
                PRIX AGE 3-11 ANS</label>
            <!-- Input rate 3-11 -->
            <input title="Saisir le prix pour la tranche d'âge 3-11ans" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_3_11OfWalk" id="rate_3_11OfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['rate_3_11OfWalk'] : '' ?>" />
            <!-- Error message rate 3-11 -->
            <p class="error"><?= isset($arrayError['rate_3_11OfWalk']) ? $arrayError['rate_3_11OfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <!-- Label rate 12+ -->
            <label class="font-weight-bold textColor1" for="rate_12_plusOfWalk">
                PRIX AGE 12 ANS ET PLUS</label>
            <!-- Input rate 12+ -->
            <input title="Saisir le prix à partir de 12ans" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_12_plusOfWalk" id="rate_12_plusOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['rate_12_plusOfWalk'] : '' ?>" />
            <!-- Error message rate 12+ -->
            <p class="error"><?= isset($arrayError['rate_12_plusOfWalk']) ? $arrayError['rate_12_plusOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <!-- Label rate child disabled -->
            <label class="font-weight-bold textColor1" for="rate_child_disabledOfWalk">
                PRIX ENFANT EN SITUATION DE HANDICAPE</label>
            <!-- Imput rate child disabled -->
            <input title="Saisir le prix pour les enfants en situation de handicape" placeholder="ex: 15 ou GRATUIT" type="text" class="form-control text-center borderInput textColor2" name="rate_child_disabledOfWalk" id="rate_child_disabledOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['rate_child_disabledOfWalk'] : '' ?>" />
            <!-- Error message rate child disabled -->
            <p class="error"><?= isset($arrayError['rate_child_disabledOfWalk']) ? $arrayError['rate_child_disabledOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-2 col-md-6 col-sm-6 col-12">
            <!-- Label opened hour -->
            <label class="font-weight-bold textColor1" for="openedHoursOfWalk">
                HEURES & PERIODES D'OUVERTURES</label>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <!-- Input 1 opened hour -->
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk1" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk1'] : '' ?>" />
            <!-- Error message 1 opened hour -->
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <!-- Input 2 opened hour -->
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk2" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk2'] : '' ?>" />
            <!-- Error message 2 opened hour -->
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <!-- Input 3 opened hour -->
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk3" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk3'] : '' ?>" />
            <!-- Error message 3 opened hour -->
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <!-- Input 4 opened hour -->
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk4" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk4'] : '' ?>" />
            <!-- Error message 4 opened hour -->
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <!-- Input 5 opened hour -->
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk5" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk5'] : '' ?>" />
            <!-- Error message 5 opened hour -->
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <!-- Input 6 opened hour -->
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk6" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk6'] : '' ?>" />
            <!-- Error message 6 opened hour -->
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <!-- Input 7 opened hour -->
            <input title="Saisir les périodes et horaires d'ouvertures" placeholder="ex: Février à Juin : de 10h00 à 17h00" type="text" class="form-control text-center borderInput textColor2" name="openedHoursOfWalk7" id="openedHoursOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['openedHoursOfWalk7'] : '' ?>" />
            <!-- Error message 7 opened hour -->
            <p class="error"><?= isset($arrayError['openedHoursOfWalk']) ? $arrayError['openedHoursOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <!-- Label official site -->
            <label class="font-weight-bold textColor1" for="createOfficialSiteOfWalk">
                SITE OFFICIEL</label>
            <!-- Input official site -->
            <input title="Indiquez l'adresse du site officiel" placeholder="ex: www.zoo.com" type="text" class="form-control text-center borderInput textColor2" name="createOfficialSiteOfWalk" id="createOfficialSiteOfWalk" value="<?= !empty($arrayError) && isset($_POST["validateWalk"]) ? $_POST['createOfficialSiteOfWalk'] : '' ?>" />
            <!-- Error message official site -->
            <p class="error"><?= isset($arrayError['createOfficialSiteOfWalk']) ? $arrayError['createOfficialSiteOfWalk'] : '' ?></p>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center border border-white borderRadius p-3">
        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <!-- Outdoor picto -->
            <img src="assets/img_picto/outdoorPicto.png" title="Sortie en extérieure" alt="Pictograme sortie extérieure" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input outdoor picto -->
                <input class="form-check-input" type="radio" name="locationPictoOfWalk" id="outdoorPictoOfWalk" value="1" <?= !empty($arrayError) && isset($_POST['locationPictoOfWalk']) && $_POST['locationPictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <!-- Label outdoor picto -->
                <label class="form-check-label" for="outdoorPictoOfWalk">
                    <small class="textColor2">Sortie en extérieure</small>
                </label>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
            <!-- Indoor picto -->
            <img src="assets/img_picto/indoorPicto.png" title="Sortie en intérieure" alt="Pictograme sortie intérieure" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input indoor picto -->
                <input class="form-check-input" type="radio" name="locationPictoOfWalk" id="indoorPictoOfWalk" value="2" <?= !empty($arrayError) && isset($_POST['locationPictoOfWalk']) && $_POST['locationPictoOfWalk'] == '2' ? 'checked' : '' ?>>
                <!-- Label indoor picto -->
                <label class="form-check-label" for="indoorPictoOfWalk">
                    <small class="textColor2">Sortie en intérieur</small>
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center border border-white borderRadius p-3">
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <!-- zoo picto -->
            <img src="assets/img_picto/zooPicto.png" title="Sortie type zoo" alt="Pictograme zoo" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input zoo picto -->
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="zooPictoOfWalk" value="1" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <!-- Label zoo picto -->
                <label class="form-check-label" for="zooPictoOfWalk">
                    <small class="textColor2">Zoo</small>
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <!-- wildlife picto -->
            <img src="assets/img_picto/wildlifePicto.png" title="Sortie type parc animalier" alt="Pictograme parc animalier" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input wildlife picto -->
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="wildlifePictoOfWalk" value="2" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '2' ? 'checked' : '' ?>>
                <!-- Label wildlife picto -->
                <label class="form-check-label" for="wildlifePictoOfWalk">
                    <small class="textColor2">Parc animalier</small>
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <!-- farm picto -->
            <img src="assets/img_picto/farmPicto.png" title="Sortie type ferme" alt="Pictograme ferme" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input farm picto -->
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="farmPictoOfWalk" value="3" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '3' ? 'checked' : '' ?>>
                <!-- Label farm picto -->
                <label class="form-check-label" for="farmPictoOfWalk">
                    <small class="textColor2">Ferme</small>
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <!-- Amusement park picto -->
            <img src="assets/img_picto/amusementParkPicto.png" title="Sortie type parc d'attraction" alt="Pictograme parc d'attraction" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input amusement park picto -->
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="amusementParkPictoOfWalk" value="4" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '4' ? 'checked' : '' ?>>
                <!-- Label amusement park picto -->
                <label class="form-check-label" for="amusementParkPictoOfWalk">
                    <small class="textColor2">Parc d'attraction</small>
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <!-- Bar / cafe picto -->
            <img src="assets/img_picto/barCafePicto.png" title="Sortie type bar/Café" alt="Pictograme bar/Café" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input bar / cafe picto -->
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="barCafePictoOfWalk" value="5" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '5' ? 'checked' : '' ?>>
                <!-- Label bar / cafe picto -->
                <label class="form-check-label" for="barCafePictoOfWalk">
                    <small class="textColor2">Bar / Cafe</small>
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <!-- Forest picto -->
            <img src="assets/img_picto/forestPicto.png" title="Sortie type forêt" alt="Pictograme forêt" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input forest picto -->
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="forestPictoOfWalk" value="6" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '6' ? 'checked' : '' ?>>
                <!-- Label forest picto -->
                <label class="form-check-label" for="forestPictoOfWalk">
                    <small class="textColor2">Forêt</small>
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <!-- Museum picto -->
            <img src="assets/img_picto/museumPicto.png" title="Sortie type musée" alt="Pictograme musée" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input museum picto -->
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="museumPictoOfWalk" value="7" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '7' ? 'checked' : '' ?>>
                <!-- Label museum picto -->
                <label class="form-check-label" for="museumPictoOfWalk">
                    <small class="textColor2">Musée</small>
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <!-- Play area picto -->
            <img src="assets/img_picto/playAreaPicto.png" title="Sortie type aire de jeux" alt="Pictograme aire de jeux" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input play area picto -->
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="playAreaPictoOfWalk" value="8" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '8' ? 'checked' : '' ?>>
                <!-- Label play area picto -->
                <label class="form-check-label" for="playAreaPictoOfWalk">
                    <small class="textColor2">Aire de jeux</small>
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <!-- Restaurant picto -->
            <img src="assets/img_picto/restaurantPicto.png" title="Sortie type restaurant" alt="Pictograme restaurant" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input restaurant picto -->
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="restaurantPictoOfWalk" value="9" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '9' ? 'checked' : '' ?>>
                <!-- Label restaurant picto -->
                <label class="form-check-label" for="restaurantPictoOfWalk">
                    <small class="textColor2">Restaurant</small>
                </label>
            </div>
        </div>
        <div class="col-lg-1 col-md-6 col-sm-6 col-6">
            <!-- Library picto -->
            <img src="assets/img_picto/libraryPicto.png" title="Sortie type bibliothèque" alt="Pictograme bibliothèque" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input library picto -->
                <input class="form-check-input" type="radio" name="outputTypePictoOfWalk" id="libraryPictoOfWalk" value="10" <?= !empty($arrayError) && isset($_POST['outputTypePictoOfWalk']) && $_POST['outputTypePictoOfWalk'] == '10' ? 'checked' : '' ?>>
                <!-- Label library picto -->
                <label class="form-check-label" for="libraryPictoOfWalk">
                    <small class="textColor2">Bibliothèque</small>
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center border border-white borderRadius p-3">
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <!-- Birth picto -->
            <img src="assets/img_picto/birthPicto.png" title="Sortie possible dès la naissance" alt="Pictograme dès la naissance" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input birth picto -->
                <input class="form-check-input" type="radio" name="ageAdvisePictoOfWalk" id="birthPictoOfWalk" value="1" <?= !empty($arrayError) && isset($_POST['ageAdvisePictoOfWalk']) && $_POST['ageAdvisePictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <!-- Label birth picto -->
                <label class="form-check-label" for="birthPictoOfWalk">
                    <small class="textColor2">Sortie possible dès la naissance</small>
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <!-- Three picto -->
            <img src="assets/img_picto/threePicto.png" title="Sortie conseillée dès 3ans" alt="Pictograme dès 3ans" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <!-- Input three picto -->
                <input class="form-check-input" type="radio" name="ageAdvisePictoOfWalk" id="threePictoOfWalk" value="2" <?= !empty($arrayError) && isset($_POST['ageAdvisePictoOfWalk']) && $_POST['ageAdvisePictoOfWalk'] == '2' ? 'checked' : '' ?>>
                <!-- Label three picto -->
                <label class="form-check-label" for="threePictoOfWalk">
                    <small class="textColor2">Sortie conseillée dès 3ans</small>
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <!-- Five picto -->
            <img src="assets/img_picto/fivePicto.png" title="Sortie conseillée dès 5ans" alt="Pictograme dès 5ans" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <!-- Input five picto -->
                <input class="form-check-input" type="radio" name="ageAdvisePictoOfWalk" id="fivePictoOfWalk" value="3" <?= !empty($arrayError) && isset($_POST['ageAdvisePictoOfWalk']) && $_POST['ageAdvisePictoOfWalk'] == '3' ? 'checked' : '' ?>>
                <!-- Label five picto -->
                <label class="form-check-label" for="fivePictoOfWalk">
                    <small class="textColor2">Sortie conseillée dès 5ans</small>
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center border border-white borderRadius p-3">
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <!-- Baby stroller picto -->
            <img src="assets/img_picto/babyStrollerPicto.png" title="Accessible en poussette" alt="Pictograme accessible en poussette" class="sizePictoCategory" />
            <div class="form-check">
                <!-- Input baby stroller picto -->
                <input class="form-check-input" type="radio" name="practicabilityPictoOfWalk" id="babyStrollerPictoOfWalk" value="1" <?= !empty($arrayError) && isset($_POST['practicabilityPictoOfWalk']) && $_POST['practicabilityPictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <!-- Label baby stroller picto -->
                <label class="form-check-label" for="babyStrollerPictoOfWalk">
                    <small class="textColor2">Accessible en poussette</small>
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <!-- Baby carrier picto -->
            <img src="assets/img_picto/babyCarrierPicto.png" title="Porte bébé conseillé" alt="Pictograme porte bébé" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <!-- Input baby carrier picto -->
                <input class="form-check-input" type="radio" name="practicabilityPictoOfWalk" id="babyCarrierPictoOfWalk" value="2" <?= !empty($arrayError) && isset($_POST['practicabilityPictoOfWalk']) && $_POST['practicabilityPictoOfWalk'] == '2' ? 'checked' : '' ?>>
                <!-- Label baby carrier picto -->
                <label class="form-check-label" for="babyCarrierPictoOfWalk">
                    <small class="textColor2">Porte bébé conseillé</small>
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center border border-white borderRadius p-3">
        <div class="col-12">
            <!-- Baby diaper picto -->
            <img src="assets/img_picto/babyDiaperPicto.png" title="Plan à langer disponible" alt="Pictograme plan à langer" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <!-- Input baby diaper picto -->
                <input class="form-check-input" type="checkbox" value="1" id="babyDiaperPictoOfWalk" name="babyDiaperPictoOfWalk" <?= !empty($arrayError) && isset($_POST['babyDiaperPictoOfWalk']) && $_POST['babyDiaperPictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <!-- Label baby diaper picto -->
                <label class="form-check-label" for="babyDiaperPictoOfWalk">
                    <small class="textColor2">Présence de plan à langer</small>
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center border border-white borderRadius p-3">
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <!-- Free picto -->
            <img src="assets/img_picto/freePicto.png" title="Gratuit" alt="Pictograme gratuit" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <!-- Input free picto -->
                <input class="form-check-input" type="checkbox" value="5" id="freePictoOfWalk" name="freePictoOfWalk" <?= !empty($arrayError) && isset($_POST['freePictoOfWalk']) && $_POST['freePictoOfWalk'] == '5' ? 'checked' : '' ?>>
                <!-- Label free picto -->
                <label class="form-check-label" for="freePictoOfWalk">
                    <small class="textColor2">Gratuit</small>
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <!-- Card picto -->
            <img src="assets/img_picto/cardPicto.png" title="Paiement par carte bleu accepté" alt="Pictograme carte bleu" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <!-- Input card picto -->
                <input class="form-check-input" type="checkbox" value="1" id="cardPictoOfWalk" name="cardPictoOfWalk" <?= !empty($arrayError) && isset($_POST['cardPictoOfWalk']) && $_POST['cardPictoOfWalk'] == '1' ? 'checked' : '' ?>>
                <!-- Label card picto -->
                <label class="form-check-label" for="cardPictoOfWalk">
                    <small class="textColor2">Paiement par carte bleu accepté</small>
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <!-- Check picto -->
            <img src="assets/img_picto/checkPicto.png" title="Paiement par chèque accepté" alt="Pictograme chèque" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <!-- Input check picto -->
                <input class="form-check-input" type="checkbox" value="3" id="checkPictoOfWalk" name="checkPictoOfWalk" <?= !empty($arrayError) && isset($_POST['checkPictoOfWalk']) && $_POST['checkPictoOfWalk'] == '3' ? 'checked' : '' ?>>
                <!-- Label check picto -->
                <label class="form-check-label" for="checkPictoOfWalk">
                    <small class="textColor2">Paiement par chèque accepté</small>
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <!-- Cash picto -->
            <img src="assets/img_picto/cashPicto.png" title="Paiement en espèces accepté" alt="Pictograme espèces" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <!-- Input cash picto -->
                <input class="form-check-input" type="checkbox" value="2" id="cashPictoOfWalk" name="cashPictoOfWalk" <?= !empty($arrayError) && isset($_POST['cashPictoOfWalk']) && $_POST['cashPictoOfWalk'] == '2' ? 'checked' : '' ?>>
                <!-- Label cash picto -->
                <label class="form-check-label" for="cashPictoOfWalk">
                    <small class="textColor2">Paiement en espèces accepté</small>
                </label>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <!-- Vacancy checks picto -->
            <img src="assets/img_picto/vacancyChecksPicto.png" title="Paiement par chèques vacances accepté" alt="Pictograme chèques vacances" class="sizePictoCategory mr-3" />
            <div class="form-check">
                <!-- Input vacancy checks picto -->
                <input class="form-check-input" type="checkbox" value="4" id="vacancyChecksPictoOfWalk" name="vacancyChecksPictoOfWalk" <?= !empty($arrayError) && isset($_POST['vacancyChecksPictoOfWalk']) && $_POST['vacancyChecksPictoOfWalk'] == '4' ? 'checked' : '' ?>>
                <!-- Label vacancy checks picto -->
                <label class="form-check-label" for="vacancyChecksPictoOfWalk">
                    <small class="textColor2">Paiement par chèques vacances accepté</small>
                </label>
            </div>
        </div>
    </div>
    <div class="row text-center m-0 mt-1 justify-content-center">
        <div class="col-12">
            <!-- Return button on user details -->
            <a class="btn buttonColor2 py-2 shadow" href="http://laptitevadrouille/index.php?user=detail" title="Retour vers info utilisateur"><i class="fas fa-reply py-1"></i></a>
            <!-- Button of validate for create a walk -->
            <button class="btn buttonColor2 py-2 shadow" role="button" type="submit" name="validateWalk">CREER</button>
            <!-- Validated message if create success -->
            <p class="valid h5"><?= isset($_POST["validateWalk"]) && isset($arrayError) && empty($arrayError) ? 'Sortie créé avec succès !' : '' ?></p>
            <!-- Error message if this walk exist -->
            <p class="error h5"><?= isset($arrayError['verifyIfWalkExist']) ? $arrayError['verifyIfWalkExist'] : '' ?></p>
            <!-- Error message if d'ont connected of server -->
            <p class="error"><?= isset($e) ? 'Problème de connection au serveur, veuillez essayer à nouveau ultérieurement.' : "" ?></p>
        </div>
    </div>
</form>
<!-- Form end -->
<!-- Create walk view end -->