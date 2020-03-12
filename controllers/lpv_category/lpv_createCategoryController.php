<?php
//REQUIRE MODELS
require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');
require_once('models/lpv_avoirModel.php');

//INSTANTIATING AN NEW OBJECT
//for calling method "create walk"
$walkCreate = new Lpv_category();

//VERIFY IF OFFICIAL SITE OF WALK EXIST
//Variable for storing results
$verifyIfExist = $walkCreate->classicListWalk();

//CONDITION OF VERIFICATION IF $_POST['createOfficialSiteOfWalk'] EXIST AND IS NOT EMPTY
if (isset($_POST['createOfficialSiteOfWalk']) && !empty($_POST['createOfficialSiteOfWalk'])) {
    //Variable for storing results of explode official site address
    $arrayExplodeResultPostOfficialSite = explode('.', $_POST['createOfficialSiteOfWalk']);
    //Loop for comparating results of the explode with the existing values in the database
    foreach ($verifyIfExist as $row) {
        //Variable for storing results of explode official site address existing in the database
        $arrayExplodeResultOfficialSite = explode('.', $row['officialSite']);
        //Condition of verification if domain name existing in the database - If exist, return error message
        if ($arrayExplodeResultPostOfficialSite[1] == $arrayExplodeResultOfficialSite[1]) {
            $arrayError['verifyIfWalkExist'] = 'Cette sortie existe déjà';
        };
    };
};
// ERROR TITLE
//Regex title
$regexTitleOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\'\œ\’\‘]{1,}+$/';

//Condition of verification if $_POST['titleOfWalk'] exist
if (isset($_POST['titleOfWalk'])) {
    //Condition of verification if value of $_POST is valid
    if (preg_match($regexTitleOfWalk, $_POST['titleOfWalk']) == 0) {
        $arrayError['titleOfWalk'] = 'Veuillez respecter le format (les symboles ou caratères de ponctuations ne sont pas autorisés)';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['titleOfWalk'])) {
        $arrayError['titleOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR SHORT DESCRIPTION
//Regex short description
$regexShortDescriptionOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\,\(\)\.\'\!\:\œ\’\‘\«\»\&\…]{1,}+$/';

//Condition of verification if $_POST['shortDescriptionOfWalk'] exist
if (isset($_POST['shortDescriptionOfWalk'])) {
    //Condition of verification if value of $_POST is valid
    if (preg_match($regexShortDescriptionOfWalk, $_POST['shortDescriptionOfWalk']) == 0) {
        $arrayError['shortDescriptionOfWalk'] = 'Veuillez respecter le format';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['shortDescriptionOfWalk'])) {
        $arrayError['shortDescriptionOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR FULL DESCRIPTION
//Regex complet description
$regexCompleteDescriptionOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\,\(\)\.\'\!\:\œ\’\‘\«\»\&\…]{1,}+$/';

//Condition of verification if $_POST['completeDescriptionOfWalk'] exist
if (isset($_POST['completeDescriptionOfWalk'])) {
    //Condition of verification if value of $_POST is valid
    if (preg_match($regexCompleteDescriptionOfWalk, $_POST['completeDescriptionOfWalk']) == 0) {
        $arrayError['completeDescriptionOfWalk'] = 'Veuillez respecter le format';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['completeDescriptionOfWalk'])) {
        $arrayError['completeDescriptionOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR RATE 0-3
//Regex rate 0-3
$regexRate_0_3OfWalk = '/^((GRATUIT|Gratuit|gratuit)?)|([0-9]+)(.|\,)([0-9]+)$/';

//Condition of verification if $_POST['rate_0_3OfWalk'] exist
if (isset($_POST['rate_0_3OfWalk'])) {
    //Condition of verification if value of $_POST is valid
    if (preg_match($regexRate_0_3OfWalk, $_POST['rate_0_3OfWalk']) == 0) {
        $arrayError['rate_0_3OfWalk'] = 'Veuillez respecter le format';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['rate_0_3OfWalk'])) {
        $arrayError['rate_0_3OfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR RATE 3-11
//Regex rate 3-11
$regexRate_3_11OfWalk = '/^((GRATUIT|Gratuit|gratuit)?)|([0-9]+)(.|\,)([0-9]+)$/';

//Condition of verification if $_POST['rate_3_11OfWalk'] exist
if (isset($_POST['rate_3_11OfWalk'])) {
    //Condition of verification if value of $_POST is valid
    if (preg_match($regexRate_3_11OfWalk, $_POST['rate_3_11OfWalk']) == 0) {
        $arrayError['rate_3_11OfWalk'] = 'Veuillez respecter le format';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['rate_3_11OfWalk'])) {
        $arrayError['rate_3_11OfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR RATE 12+
//Regex rate 12+
$regexRate_12_plusOfWalk = '/^((GRATUIT|Gratuit|gratuit)?)|([0-9]+)(.|\,)([0-9]+)$/';

//Condition of verification if $_POST['rate_12_plusOfWalk'] exist
if (isset($_POST['rate_12_plusOfWalk'])) {
    //Condition of verification if value of $_POST is valid
    if (preg_match($regexRate_12_plusOfWalk, $_POST['rate_12_plusOfWalk']) == 0) {
        $arrayError['rate_12_plusOfWalk'] = 'Veuillez respecter le format';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['rate_12_plusOfWalk'])) {
        $arrayError['rate_12_plusOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR CHILD DISABLED
//Regex rate child disabled
$regexRate_child_disabledOfWalk = '/^((GRATUIT|Gratuit|gratuit)?)|([0-9]+)(.|\,)([0-9]+)$/';

//Condition of verification if $_POST['rate_child_disabledOfWalk'] exist
if (isset($_POST['rate_child_disabledOfWalk'])) {
    //Condition of verification if value of $_POST is valid
    if (preg_match($regexRate_child_disabledOfWalk, $_POST['rate_child_disabledOfWalk']) == 0) {
        $arrayError['rate_child_disabledOfWalk'] = 'Veuillez respecter le format';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['rate_child_disabledOfWalk'])) {
        $arrayError['rate_child_disabledOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR OPENED HOURS
//Regex opened hours
$regexOpenedHoursOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\&\:\,\(\)\.\'\!\œ\’\‘\«\»]+$/';

//Condition of verification if $_POST['openedHoursOfWalk1'] exist
if (isset($_POST['openedHoursOfWalk1'])) {
    //Condition of verification if value of $_POST is valid
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk1']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format (les symboles ou caratères de ponctuations ne sont pas autorisés)';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['openedHoursOfWalk1'])) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez remplir le champ';
    };
};
if (isset($_POST['openedHoursOfWalk2']) && !empty($_POST['openedHoursOfWalk2'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk2']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format (les symboles ou caratères de ponctuations ne sont pas autorisés)';
    };
};
if (isset($_POST['openedHoursOfWalk3']) && !empty($_POST['openedHoursOfWalk3'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk3']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format (les symboles ou caratères de ponctuations ne sont pas autorisés)';
    };
};
if (isset($_POST['openedHoursOfWalk4']) && !empty($_POST['openedHoursOfWalk4'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk4']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format (les symboles ou caratères de ponctuations ne sont pas autorisés)';
    };
};
if (isset($_POST['openedHoursOfWalk5']) && !empty($_POST['openedHoursOfWalk5'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk5']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format (les symboles ou caratères de ponctuations ne sont pas autorisés)';
    };
};
if (isset($_POST['openedHoursOfWalk6']) && !empty($_POST['openedHoursOfWalk6'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk6']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format (les symboles ou caratères de ponctuations ne sont pas autorisés)';
    };
};
if (isset($_POST['openedHoursOfWalk7']) && !empty($_POST['openedHoursOfWalk7'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk7']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format (les symboles ou caratères de ponctuations ne sont pas autorisés)';
    };
};
// ERROR OFFICIAL SITE
//Regex detecting domaine name of twitter
$twitterDetectRegex = '/^(https:\/\/twitter\.com\/)[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\.\!\+\=\@\,\/\:\%\'\(\)\?]{1,}+$/';
//Regex detecting domaine name of facebook
$facebookDetectRegex = '/^(https:\/\/www\.facebook\.com\/)[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\.\!\+\=\@\,\/\:\%\'\(\)\?]{1,}+$/';
//Regex detecting domaine name of instagram
$instagramDetectRegex = '/^(https:\/\/www\.instagram\.com\/)[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\.\!\+\=\@\,\/\:\%\'\(\)\?]{1,}+$/';
//Condition of verification if $_POST['createOfficialSiteOfWalk'] exist
if (isset($_POST['createOfficialSiteOfWalk'])) {
    //Condition of verification if format of value of $_POST is valid
    if ((filter_var($_POST['createOfficialSiteOfWalk'], FILTER_VALIDATE_URL)) == false) {
        $arrayError['createOfficialSiteOfWalk'] = 'Veuillez respecter le format (réseaux sociaux non autorisés)';
    };
    //Condition of verification if value of $_POST is valid
    if (preg_match($twitterDetectRegex, $_POST['createOfficialSiteOfWalk']) == 1) {
        $arrayError['createOfficialSiteOfWalk'] = 'Adresse Twitter non autorisée (Contactez l\'administrateur)';
    };
    //Condition of verification if value of $_POST is valid
    if (preg_match($facebookDetectRegex, $_POST['createOfficialSiteOfWalk']) == 1) {
        $arrayError['createOfficialSiteOfWalk'] = 'Adresse Facebook non autorisée (Contactez l\'administrateur)';
    };
    //Condition of verification if value of $_POST is valid
    if (preg_match($instagramDetectRegex, $_POST['createOfficialSiteOfWalk']) == 1) {
        $arrayError['createOfficialSiteOfWalk'] = 'Adresse Instagram non autorisée (Contactez l\'administrateur)';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['createOfficialSiteOfWalk'])) {
        $arrayError['createOfficialSiteOfWalk'] = 'Veuillez remplir le champ';
    };
};
//CONDITION OF TRIGGER OF RECOVERING VALUES OF $_POST
if (isset($_POST['validateWalk']) && empty($arrayError)) {
    //Variables for storing results of $_POST
    $walkTitle = htmlspecialchars(strtoupper($_POST['titleOfWalk']));
    $walkShortDescription = htmlspecialchars($_POST['shortDescriptionOfWalk']);
    $walkCompleteDescription = htmlspecialchars($_POST['completeDescriptionOfWalk']);
    $walkRate_0_3OfWalk = htmlspecialchars($_POST['rate_0_3OfWalk']);
    $walkRate_3_11OfWalk = htmlspecialchars($_POST['rate_3_11OfWalk']);
    $walkRate_12_plusOfWalk = htmlspecialchars($_POST['rate_12_plusOfWalk']);
    $walkRate_child_disabledOfWalk = htmlspecialchars($_POST['rate_child_disabledOfWalk']);
    $walkOpenedHoursOfWalk = htmlspecialchars($_POST['openedHoursOfWalk1']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk2']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk3']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk4']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk5']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk6']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk7']);
    $walkPublicationDate = htmlspecialchars(strftime("%d-%m-%Y"));
    $walkOfficialSiteOfWalk = htmlspecialchars($_POST['createOfficialSiteOfWalk']);
    $walkIdCreator = htmlspecialchars(intval($_SESSION['id']));
    $walkLocationPictoOfWalk = htmlspecialchars(intval($_POST['locationPictoOfWalk']));
    $walkOutputTypePictoOfWalk = htmlspecialchars(intval($_POST['outputTypePictoOfWalk']));
    $walkAgeAdvisePictoOfWalk = htmlspecialchars(intval($_POST['ageAdvisePictoOfWalk']));
    $walkPracticabilityPictoOfWalk = htmlspecialchars(intval($_POST['practicabilityPictoOfWalk']));
    //Condition of recovering values if are existing
    if (isset($_POST['babyDiaperPictoOfWalk']) && !empty($_POST['babyDiaperPictoOfWalk'])) {
        $walkBabyDiaperPictoOfWalk = htmlspecialchars(intval($_POST['babyDiaperPictoOfWalk']));
    };
    if (isset($_POST['freePictoOfWalk']) && !empty($_POST['freePictoOfWalk'])) {
        $walkFreePictoOfWalk = htmlspecialchars(intval($_POST['freePictoOfWalk']));
    };
    if (isset($_POST['cardPictoOfWalk']) && !empty($_POST['cardPictoOfWalk'])) {
        $walkCardPictoOfWalk = htmlspecialchars(intval($_POST['cardPictoOfWalk']));
    };
    if (isset($_POST['checkPictoOfWalk']) && !empty($_POST['checkPictoOfWalk'])) {
        $walkCheckPictoOfWalk = htmlspecialchars(intval($_POST['checkPictoOfWalk']));
    };
    if (isset($_POST['cashPictoOfWalk']) && !empty($_POST['cashPictoOfWalk'])) {
        $walkCashPictoOfWalk = htmlspecialchars(intval($_POST['cashPictoOfWalk']));
    };
    if (isset($_POST['vacancyChecksPictoOfWalk']) && !empty($_POST['vacancyChecksPictoOfWalk'])) {
        $walkVacancyChecksPictoOfWalk = htmlspecialchars(intval($_POST['vacancyChecksPictoOfWalk']));
    };
    //Hydration
    $walkCreate->setTitle($walkTitle);
    $walkCreate->setDescription($walkShortDescription);
    $walkCreate->setMoreInfoDescription($walkCompleteDescription);
    $walkCreate->setRate03($walkRate_0_3OfWalk);
    $walkCreate->setRate311($walkRate_3_11OfWalk);
    $walkCreate->setRate12Plus($walkRate_12_plusOfWalk);
    $walkCreate->setRateChildDisabled($walkRate_child_disabledOfWalk);
    $walkCreate->setOpenedHour($walkOpenedHoursOfWalk);
    $walkCreate->setPublicationDate($walkPublicationDate);
    $walkCreate->setOfficialSite($walkOfficialSiteOfWalk);
    $walkCreate->setIdCreator($walkIdCreator);
    $walkCreate->setIdLpvLocationPicto($walkLocationPictoOfWalk);
    $walkCreate->setIdLpvOutputTypePicto($walkOutputTypePictoOfWalk);
    $walkCreate->setIdLpvAgeAdvisePicto($walkAgeAdvisePictoOfWalk);
    $walkCreate->setIdLpvPracticabilityPicto($walkPracticabilityPictoOfWalk);
    //Condition of hydrating of values if are existing
    if (isset($_POST['babyDiaperPictoOfWalk']) && !empty($_POST['babyDiaperPictoOfWalk'])) {
        $walkCreate->setIdLpvEquipmentPicto($walkBabyDiaperPictoOfWalk);
    };
    //Variable for storing results of "create walk" method
    $lastWalkId = $walkCreate->addWalk();

    //Condition of recovering values if are existing
    if (isset($_POST['freePictoOfWalk']) && !empty($_POST['freePictoOfWalk'])) {
        //for calling method "create payment"
        $paymentFree = new Lpv_avoir();
        //Hydration
        $paymentFree->setId($walkFreePictoOfWalk);
        $paymentFree->setIdWalk($lastWalkId);
        //Variable for storing results of "create payment" method
        $paymentFree->addPayment();
    };

    if (isset($_POST['cardPictoOfWalk']) && !empty($_POST['cardPictoOfWalk'])) {
        $paymentCard = new Lpv_avoir();
        $paymentCard->setId($walkCardPictoOfWalk);
        $paymentCard->setIdWalk($lastWalkId);
        $paymentCard->addPayment();
    };

    if (isset($_POST['checkPictoOfWalk']) && !empty($_POST['checkPictoOfWalk'])) {
        $paymentCheck = new Lpv_avoir();
        $paymentCheck->setId($walkCheckPictoOfWalk);
        $paymentCheck->setIdWalk($lastWalkId);
        $paymentCheck->addPayment();
    };

    if (isset($_POST['cashPictoOfWalk']) && !empty($_POST['cashPictoOfWalk'])) {
        $paymentCash = new Lpv_avoir();
        $paymentCash->setId($walkCashPictoOfWalk);
        $paymentCash->setIdWalk($lastWalkId);
        $paymentCash->addPayment();
    };

    if (isset($_POST['vacancyChecksPictoOfWalk']) && !empty($_POST['vacancyChecksPictoOfWalk'])) {
        $paymentVacancyChecks = new Lpv_avoir();
        $paymentVacancyChecks->setId($walkVacancyChecksPictoOfWalk);
        $paymentVacancyChecks->setIdWalk($lastWalkId);
        $paymentVacancyChecks->addPayment();
    };
    //If all form is validated, returning to user details page
    header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
}
