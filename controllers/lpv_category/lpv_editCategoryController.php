<?php

require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');
require_once('models/lpv_avoirModel.php');
$walk = new Lpv_category();
//DETAIL USER
if (isset($_SESSION) && !empty($_SESSION) && isset($_GET['walk']) && isset($_GET['id'])) {
    $currentId = intval($_GET['id']);
    //Hydratation
    $walk->setId($currentId);
    $detailWalk = $walk->detailWalk();
    $detailPaymentWalk = $walk->detailPaymentWalk();
    $arrayDateHour = explode('<br />',$detailWalk[0]['openedHours']);
    return $arrayDateHour;
};
// ERROR GOOGLE MAP ADDRESS
$regexGoogleMapOfWalk = '/^[https://www.google.com/maps/place/]{1}[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,}+$/';

if (isset($_POST['googleMapOfWalk'])) {
    if (preg_match($regexGoogleMapOfWalk, $_POST['googleMapOfWalk']) == 0) {
        $arrayError['googleMapOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['googleMapOfWalk'])) {
        $arrayError['googleMapOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR TITRE
$regexTitleOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,}+$/';

if (isset($_POST['titleOfWalk'])) {
    if (preg_match($regexTitleOfWalk, $_POST['titleOfWalk']) == 0) {
        $arrayError['titleOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['titleOfWalk'])) {
        $arrayError['titleOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR DESCRIPTION COURTE
$regexShortDescriptionOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\,\(\)\.\'\!\:]{1,}+$/';

if (isset($_POST['shortDescriptionOfWalk'])) {
    if (preg_match($regexShortDescriptionOfWalk, $_POST['shortDescriptionOfWalk']) == 0) {
        $arrayError['shortDescriptionOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['shortDescriptionOfWalk'])) {
        $arrayError['shortDescriptionOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR DESCRIPTION COMPLETE
$regexCompleteDescriptionOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\,\(\)\.\'\!\:]{1,}+$/';

if (isset($_POST['completeDescriptionOfWalk'])) {
    if (preg_match($regexCompleteDescriptionOfWalk, $_POST['completeDescriptionOfWalk']) == 0) {
        $arrayError['completeDescriptionOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['completeDescriptionOfWalk'])) {
        $arrayError['completeDescriptionOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR AGE 0-3 ANS
$regexRate_0_3OfWalk = '/^((GRATUIT|Gratuit|gratuit)?)|([0-9]+)(.|\,)([0-9]+)$/';

if (isset($_POST['rate_0_3OfWalk'])) {
    if (preg_match($regexRate_0_3OfWalk, $_POST['rate_0_3OfWalk']) == 0) {
        $arrayError['rate_0_3OfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['rate_0_3OfWalk'])) {
        $arrayError['rate_0_3OfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR AGE 3-11 ANS
$regexRate_3_11OfWalk = '/^((GRATUIT|Gratuit|gratuit)?)|([0-9]+)(.|\,)([0-9]+)$/';

if (isset($_POST['rate_3_11OfWalk'])) {
    if (preg_match($regexRate_3_11OfWalk, $_POST['rate_3_11OfWalk']) == 0) {
        $arrayError['rate_3_11OfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['rate_3_11OfWalk'])) {
        $arrayError['rate_3_11OfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR AGE 12 ANS ET PLUS
$regexRate_12_plusOfWalk = '/^((GRATUIT|Gratuit|gratuit)?)|([0-9]+)(.|\,)([0-9]+)$/';

if (isset($_POST['rate_12_plusOfWalk'])) {
    if (preg_match($regexRate_12_plusOfWalk, $_POST['rate_12_plusOfWalk']) == 0) {
        $arrayError['rate_12_plusOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['rate_12_plusOfWalk'])) {
        $arrayError['rate_12_plusOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR ENFANT HANDICAPE
$regexRate_child_disabledOfWalk = '/^((GRATUIT|Gratuit|gratuit)?)|([0-9]+)(.|\,)([0-9]+)$/';

if (isset($_POST['rate_child_disabledOfWalk'])) {
    if (preg_match($regexRate_child_disabledOfWalk, $_POST['rate_child_disabledOfWalk']) == 0) {
        $arrayError['rate_child_disabledOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['rate_child_disabledOfWalk'])) {
        $arrayError['rate_child_disabledOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR HEURES & PERIODES D'OUVERTURES
$regexOpenedHoursOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\&\:]+$/';

if (isset($_POST['openedHoursOfWalk1'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk1']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['openedHoursOfWalk1'])) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez remplir le champ';
    };
};
if (isset($_POST['openedHoursOfWalk2']) && !empty($_POST['openedHoursOfWalk2'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk2']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
if (isset($_POST['openedHoursOfWalk3']) && !empty($_POST['openedHoursOfWalk3'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk3']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
if (isset($_POST['openedHoursOfWalk4']) && !empty($_POST['openedHoursOfWalk4'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk4']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
// ERROR SITE OFFICIEL
if (isset($_POST['officialSiteOfWalk'])) {
    if ((filter_var($_POST['officialSiteOfWalk'], FILTER_VALIDATE_URL)) == false) {
        $arrayError['officialSiteOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['officialSiteOfWalk'])) {
        $arrayError['officialSiteOfWalk'] = 'Veuillez remplir le champ';
    };
};

if (isset($_POST['validateWalk']) && empty($arrayError)) {
    $walkTitle = htmlspecialchars(strtoupper($_POST['titleOfWalk']));
    $walkShortDescription = htmlspecialchars($_POST['shortDescriptionOfWalk']);
    $walkCompleteDescription = htmlspecialchars($_POST['completeDescriptionOfWalk']);
    $walkRate_0_3OfWalk = htmlspecialchars($_POST['rate_0_3OfWalk']);
    $walkRate_3_11OfWalk = htmlspecialchars($_POST['rate_3_11OfWalk']);
    $walkRate_12_plusOfWalk = htmlspecialchars($_POST['rate_12_plusOfWalk']);
    $walkRate_child_disabledOfWalk = htmlspecialchars($_POST['rate_child_disabledOfWalk']);
    $walkOpenedHoursOfWalk = htmlspecialchars($_POST['openedHoursOfWalk1']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk2']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk3']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk4']);
    $walkOfficialSiteOfWalk = htmlspecialchars($_POST['officialSiteOfWalk']);
    $walkLocationPictoOfWalk = htmlspecialchars(intval($_POST['locationPictoOfWalk']));
    $walkOutputTypePictoOfWalk = htmlspecialchars(intval($_POST['outputTypePictoOfWalk']));
    $walkAgeAdvisePictoOfWalk = htmlspecialchars(intval($_POST['ageAdvisePictoOfWalk']));
    $walkPracticabilityPictoOfWalk = htmlspecialchars(intval($_POST['practicabilityPictoOfWalk']));
    $walkBabyDiaperPictoOfWalk = htmlspecialchars(intval($_POST['babyDiaperPictoOfWalk']));

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
    //Hydratation
    $walk->setTitle($walkTitle);
    $walk->setDescription($walkShortDescription);
    $walk->setMoreInfoDescription($walkCompleteDescription);
    $walk->setRate03($walkRate_0_3OfWalk);
    $walk->setRate311($walkRate_3_11OfWalk);
    $walk->setRate12Plus($walkRate_12_plusOfWalk);
    $walk->setRateChildDisabled($walkRate_child_disabledOfWalk);
    $walk->setOpenedHour($walkOpenedHoursOfWalk);
    $walk->setOfficialSite($walkOfficialSiteOfWalk);
    $walk->setIdLpvLocationPicto($walkLocationPictoOfWalk);
    $walk->setIdLpvOutputTypePicto($walkOutputTypePictoOfWalk);
    $walk->setIdLpvAgeAdvisePicto($walkAgeAdvisePictoOfWalk);
    $walk->setIdLpvPracticabilityPicto($walkPracticabilityPictoOfWalk);
    $walk->setIdLpvEquipmentPicto($walkBabyDiaperPictoOfWalk);
    $walk->editWalk();

    if (isset($_POST['freePictoOfWalk']) && !empty($_POST['freePictoOfWalk'])) {
        $paymentFree = new Lpv_avoir();
        $paymentFree->setId($walkFreePictoOfWalk);
        $paymentFree->setIdWalk($lastWalkId);
        $paymentFree->editPayment();
    };

    if (isset($_POST['cardPictoOfWalk']) && !empty($_POST['cardPictoOfWalk'])) {
        $paymentCard = new Lpv_avoir();
        $paymentCard->setId($walkCardPictoOfWalk);
        $paymentCard->setIdWalk($lastWalkId);
        $paymentCard->editPayment();
    };

    if (isset($_POST['checkPictoOfWalk']) && !empty($_POST['checkPictoOfWalk'])) {
        $paymentCheck = new Lpv_avoir();
        $paymentCheck->setId($walkCheckPictoOfWalk);
        $paymentCheck->setIdWalk($lastWalkId);
        $paymentCheck->editPayment();
    };

    if (isset($_POST['cashPictoOfWalk']) && !empty($_POST['cashPictoOfWalk'])) {
        $paymentCash = new Lpv_avoir();
        $paymentCash->setId($walkCashPictoOfWalk);
        $paymentCash->setIdWalk($lastWalkId);
        $paymentCash->editPayment();
    };

    if (isset($_POST['vacancyChecksPictoOfWalk']) && !empty($_POST['vacancyChecksPictoOfWalk'])) {
        $paymentVacancyChecks = new Lpv_avoir();
        $paymentVacancyChecks->setId($walkVacancyChecksPictoOfWalk);
        $paymentVacancyChecks->setIdWalk($lastWalkId);
        $paymentVacancyChecks->editPayment();
    };
    header('refresh:3;url=http://laptitevadrouille/index.php?user=detail');
}
