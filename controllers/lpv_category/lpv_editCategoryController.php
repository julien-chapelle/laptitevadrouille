<?php

require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');
require_once('models/lpv_avoirModel.php');
$walkEdit = new Lpv_category();
$target_dir_pics = 'assets/img_walk';
$target_dir_map = 'assets/img_map';
//DETAIL USER
if (isset($_SESSION) && !empty($_SESSION) && isset($_GET['walk']) && isset($_GET['id'])) {
    $currentId = intval($_GET['id']);
    //Hydratation
    $walkEdit->setId($currentId);
    $detailWalk = $walkEdit->detailWalk();
    $detailPaymentWalk = $walkEdit->detailPaymentWalk();
    $arrayDateHour = explode('<br />', $detailWalk[0]['openedHours']);
};
// ERROR SIZE PICS
if (isset($_FILES['fileUploadPics']['size']) && $_FILES['fileUploadPics']['name'] != '') {
    $target_pics_extansion = strtolower(pathinfo($target_dir_pics . '/' . ($_FILES['fileUploadPics']['name']), PATHINFO_EXTENSION));
    $checkPics = explode('/', $_FILES['fileUploadPics']['type']);
    if ($checkPics[0] !== 'image') {
        $arrayError['moveFilePics'] = 'Le fichier n\'est pas une image';
    }
    if ($_FILES['fileUploadPics']['size'] > 1000000 || $_FILES['fileUploadPics']['size'] == 0) {
        $arrayError['moveFilePics'] = 'Fichier trop volumineux (Max 1Mo)';
    }
    if ($target_pics_extansion != 'jpg' && $target_pics_extansion != 'png' && $target_pics_extansion != 'jpeg') {
        $arrayError['moveFilePics'] = 'Désolé, seule les extansions de types JPG, JPEG, PNG sont acceptées.';
    }
}
// ERROR SIZE MAP
if (isset($_FILES['fileUploadMap']['size']) && $_FILES['fileUploadMap']['name'] != '') {
    $target_map_extansion = strtolower(pathinfo($target_dir_map . '/' . ($_FILES['fileUploadMap']['name']), PATHINFO_EXTENSION));
    $checkMap = explode('/', $_FILES['fileUploadMap']['type']);
    if ($checkMap[0] !== 'image') {
        $arrayError['moveFileMap'] = 'Le fichier n\'est pas une image';
    }
    if ($_FILES['fileUploadMap']['size'] > 1000000 || $_FILES['fileUploadMap']['size'] == 0) {
        $arrayError['moveFileMap'] = 'Fichier trop volumineux (Max 1Mo)';
    }
    if ($target_map_extansion != 'jpg' && $target_map_extansion != 'png' && $target_map_extansion != 'jpeg') {
        $arrayError['moveFileMap'] = 'Désolé, seule les extansions de types JPG, JPEG, PNG sont acceptées.';
    }
}
// ERROR GOOGLE MAP ADDRESS
$regexGoogleMapOfWalk = '/^(https:\/\/www\.google\.com\/maps\/place\/)[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\.\!\+\=\@\,\/\:\%\'\(\)]{1,}+$/';

if (isset($_POST['googleMapOfWalk'])) {
    if (preg_match($regexGoogleMapOfWalk, $_POST['googleMapOfWalk']) == 0) {
        $arrayError['googleMapOfWalk'] = 'Veuillez respecter le format (URL Google Map)';
    };
    if (empty($_POST['googleMapOfWalk'])) {
        $arrayError['googleMapOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR TITRE
$regexTitleOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\'\œ\’\‘]{1,}+$/';

if (isset($_POST['titleOfWalk'])) {
    if (preg_match($regexTitleOfWalk, $_POST['titleOfWalk']) == 0) {
        $arrayError['titleOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['titleOfWalk'])) {
        $arrayError['titleOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR DESCRIPTION COURTE
$regexShortDescriptionOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\,\(\)\.\'\!\:\œ\’\‘\«\»]{1,}+$/';

if (isset($_POST['shortDescriptionOfWalk'])) {
    if (preg_match($regexShortDescriptionOfWalk, $_POST['shortDescriptionOfWalk']) == 0) {
        $arrayError['shortDescriptionOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['shortDescriptionOfWalk'])) {
        $arrayError['shortDescriptionOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR DESCRIPTION COMPLETE
$regexCompleteDescriptionOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\,\(\)\.\'\!\:\œ\’\‘\«\»]{1,}+$/';

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
$regexOpenedHoursOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\&\:\,\(\)\'\/\.\&\œ]+$/';

if (isset($_POST['openedHoursOfWalk1'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk1']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['openedHoursOfWalk1'])) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez remplir le champ';
    };
};
if (isset($_POST['openedHoursOfWalk2']) && !empty($_POST['openedHoursOfWalk2']) && $_POST['openedHoursOfWalk2'] !== '') {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk2']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
if (isset($_POST['openedHoursOfWalk3']) && !empty($_POST['openedHoursOfWalk3']) && $_POST['openedHoursOfWalk3'] !== '') {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk3']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
if (isset($_POST['openedHoursOfWalk4']) && !empty($_POST['openedHoursOfWalk4']) && $_POST['openedHoursOfWalk4'] !== '') {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk4']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
if (isset($_POST['openedHoursOfWalk5']) && !empty($_POST['openedHoursOfWalk5']) && $_POST['openedHoursOfWalk5'] !== '') {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk5']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
if (isset($_POST['openedHoursOfWalk6']) && !empty($_POST['openedHoursOfWalk6']) && $_POST['openedHoursOfWalk6'] !== '') {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk6']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
if (isset($_POST['openedHoursOfWalk7']) && !empty($_POST['openedHoursOfWalk7']) && $_POST['openedHoursOfWalk7'] !== '') {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk7']) == 0) {
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
// ERROR PASSWORD
$regexPasswordEditWalk = '/^[a-z0-9A-Z]{1,15}$/';

if (isset($_POST['passwordEditWalk'])) {
    if (preg_match($regexPasswordEditWalk, $_POST['passwordEditWalk']) == 0) {
        $arrayError['passwordEditWalk'] = 'Veuillez respecter le format - MAX 15 CARACTERES';
    };
    if (empty($_POST['passwordEditWalk'])) {
        $arrayError['passwordEditWalk'] = 'Veuillez remplir le champ';
    };
    if(!empty($_POST['passwordEditWalk']) && password_verify($_POST['passwordEditWalk'], $_SESSION['password']) != 'true'){
        $arrayError['passwordEditWalk'] = 'Le mot de passe est faux !';
    };
};
if (isset($_POST['editWalk']) && empty($arrayError) && password_verify($_POST['passwordEditWalk'], $_SESSION['password']) == 'true') {
    $currentId = htmlspecialchars(intval($_GET['id']));
    $walkTitle = htmlspecialchars(strtoupper($_POST['titleOfWalk']));
    $walkShortDescription = htmlspecialchars($_POST['shortDescriptionOfWalk']);
    $walkCompleteDescription = htmlspecialchars($_POST['completeDescriptionOfWalk']);
    $walkRate_0_3OfWalk = htmlspecialchars($_POST['rate_0_3OfWalk']);
    $walkRate_3_11OfWalk = htmlspecialchars($_POST['rate_3_11OfWalk']);
    $walkRate_12_plusOfWalk = htmlspecialchars($_POST['rate_12_plusOfWalk']);
    $walkRate_child_disabledOfWalk = htmlspecialchars($_POST['rate_child_disabledOfWalk']);
    $walkOpenedHoursOfWalk = htmlspecialchars($_POST['openedHoursOfWalk1']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk2']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk3']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk4']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk5']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk6']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk7']);
    $walkFileUploadPicsOfWalk = htmlspecialchars($_FILES['fileUploadPics']['name']);
    $walkFileUploadMapOfWalk = htmlspecialchars($_FILES['fileUploadMap']['name']);
    $walkGoogleMapOfWalk = htmlspecialchars($_POST['googleMapOfWalk']);
    $walkOfficialSiteOfWalk = htmlspecialchars($_POST['officialSiteOfWalk']);
    $walkValidateStatusChoiceOfWalk = htmlspecialchars($_POST['validateStatusChoice']);
    $walkLocationPictoOfWalk = htmlspecialchars(intval($_POST['locationPictoOfWalk']));
    $walkOutputTypePictoOfWalk = htmlspecialchars(intval($_POST['outputTypePictoOfWalk']));
    $walkAgeAdvisePictoOfWalk = htmlspecialchars(intval($_POST['ageAdvisePictoOfWalk']));
    $walkPracticabilityPictoOfWalk = htmlspecialchars(intval($_POST['practicabilityPictoOfWalk']));
    if (isset($_POST['babyDiaperPictoOfWalk']) && !empty($_POST['babyDiaperPictoOfWalk'])) {
        $walkBabyDiaperPictoOfWalk = htmlspecialchars(intval($_POST['babyDiaperPictoOfWalk']));
    };
    //Hydratation
    $walkEdit->setId($currentId);
    $walkEdit->setTitle($walkTitle);
    $walkEdit->setDescription($walkShortDescription);
    $walkEdit->setMoreInfoDescription($walkCompleteDescription);
    $walkEdit->setRate03($walkRate_0_3OfWalk);
    $walkEdit->setRate311($walkRate_3_11OfWalk);
    $walkEdit->setRate12Plus($walkRate_12_plusOfWalk);
    $walkEdit->setRateChildDisabled($walkRate_child_disabledOfWalk);
    $walkEdit->setOpenedHour($walkOpenedHoursOfWalk);
    if (isset($_FILES) && $_FILES['fileUploadPics']['name'] != '') {
        $walkEdit->setPics($walkFileUploadPicsOfWalk);
    } else {
        $walkEdit->setPics($detailWalk[0]['pics']);
    };
    if (isset($_FILES) &&$_FILES['fileUploadMap']['name'] != '') {
        $walkEdit->setMap($walkFileUploadMapOfWalk);
    } else {
        $walkEdit->setMap($detailWalk[0]['map']);
    };
    $walkEdit->setGoogleMapAddress($walkGoogleMapOfWalk);
    $walkEdit->setOfficialSite($walkOfficialSiteOfWalk);
    $walkEdit->setWalkValidate($walkValidateStatusChoiceOfWalk);
    $walkEdit->setIdLpvLocationPicto($walkLocationPictoOfWalk);
    $walkEdit->setIdLpvOutputTypePicto($walkOutputTypePictoOfWalk);
    $walkEdit->setIdLpvAgeAdvisePicto($walkAgeAdvisePictoOfWalk);
    $walkEdit->setIdLpvPracticabilityPicto($walkPracticabilityPictoOfWalk);
    if (isset($_POST['babyDiaperPictoOfWalk']) && !empty($_POST['babyDiaperPictoOfWalk'])) {
        $walkEdit->setIdLpvEquipmentPicto($walkBabyDiaperPictoOfWalk);
    };
    $walkEdit->editWalk();

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

    $paymentDelete = new Lpv_avoir();
    $paymentDelete->setIdWalk($currentId);
    $paymentDelete->deletePayment();

    if (isset($_POST['freePictoOfWalk']) && !empty($_POST['freePictoOfWalk'])) {
        $paymentFree = new Lpv_avoir();
        $paymentFree->setId($walkFreePictoOfWalk);
        $paymentFree->setIdWalk($currentId);
        $paymentFree->addPayment();
    };

    if (isset($_POST['cardPictoOfWalk']) && !empty($_POST['cardPictoOfWalk'])) {
        $paymentCard = new Lpv_avoir();
        $paymentCard->setId($walkCardPictoOfWalk);
        $paymentCard->setIdWalk($currentId);
        $paymentCard->addPayment();
    };

    if (isset($_POST['checkPictoOfWalk']) && !empty($_POST['checkPictoOfWalk'])) {
        $paymentCheck = new Lpv_avoir();
        $paymentCheck->setId($walkCheckPictoOfWalk);
        $paymentCheck->setIdWalk($currentId);
        $paymentCheck->addPayment();
    };

    if (isset($_POST['cashPictoOfWalk']) && !empty($_POST['cashPictoOfWalk'])) {
        $paymentCash = new Lpv_avoir();
        $paymentCash->setId($walkCashPictoOfWalk);
        $paymentCash->setIdWalk($currentId);
        $paymentCash->addPayment();
    };

    if (isset($_POST['vacancyChecksPictoOfWalk']) && !empty($_POST['vacancyChecksPictoOfWalk'])) {
        $paymentVacancyChecks = new Lpv_avoir();
        $paymentVacancyChecks->setId($walkVacancyChecksPictoOfWalk);
        $paymentVacancyChecks->setIdWalk($currentId);
        $paymentVacancyChecks->addPayment();
    };
    //MOVE WALK PICS ON SERVER FIELD
    if ($detailWalk[0]['pics'] != '' && isset($_FILES) && $_FILES['fileUploadPics']['name'] != '' && file_exists($target_dir_pics . '/' . $detailWalk[0]['pics']) == 'true') {
        unlink($target_dir_pics . '/' . $detailWalk[0]['pics']);
    };
    $tmp_name_pics = $_FILES['fileUploadPics']['tmp_name'];
    $namePics = basename($_FILES['fileUploadPics']['name']);
    move_uploaded_file($tmp_name_pics, "$target_dir_pics/$namePics");
    //MOVE MAP MAP ON SERVER FIELD
    if ($detailWalk[0]['map'] != '' && isset($_FILES) && $_FILES['fileUploadMap']['name'] != '' && file_exists($target_dir_map . '/' . $detailWalk[0]['map']) == 'true') {
        unlink($target_dir_map . '/' . $detailWalk[0]['map']);
    };
    $tmp_name_map = $_FILES['fileUploadMap']['tmp_name'];
    $nameMap = basename($_FILES['fileUploadMap']['name']);
    move_uploaded_file($tmp_name_map, "$target_dir_map/$nameMap");

    header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
}
