<?php
//REQUIRE MODELS
require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');
require_once('models/lpv_avoirModel.php');

//INSTANTIATING AN NEW OBJECT
//for calling method "edit walk"
$walkEdit = new Lpv_category();

//FILE PATH OF PICS AND IMAGE OF MAP
//Variable for storing results
$target_dir_pics = 'assets/img_walk';
$target_dir_map = 'assets/img_map';

//RECOVERY OF DETAILS OF A WALK FOR THE DISPLAY
//CONDITION OF VERIFICATION IF $_SESSION EXIST AND IS NOT EMPTY AND IF URL IS GOOD
if (isset($_SESSION) && !empty($_SESSION) && isset($_GET['walk']) && isset($_GET['id']) && $_GET['id'] != '') {
    //Variable for storing current id of url
    $currentId = intval($_GET['id']);
    //Hydration
    $walkEdit->setId($currentId);
    //Variable for storing results of detailWalk() method
    $detailWalk = $walkEdit->detailWalk();
    //Variable for storing results of detailPayment() method
    $detailPaymentWalk = $walkEdit->detailPaymentWalk();
    //Condition of verification if $detailWalk is not empty
    if (!empty($detailWalk)) {
        //Variable for storing explode results of opend hours values
        $arrayDateHour = explode('<br />', $detailWalk[0]['openedHours']);
    };
};
// ERROR PICS
//CONDITION OF VERIFICATION IF $_FILES['fileUploadPics']['size'] EXIST AND $_FILES['fileUploadPics']['name'] IS NOT EMPTY
if (isset($_FILES['fileUploadPics']['size']) && $_FILES['fileUploadPics']['name'] != '') {
    //Variable for storing explode results of 
    $target_pics_extansion = strtolower(pathinfo($target_dir_pics . '/' . ($_FILES['fileUploadPics']['name']), PATHINFO_EXTENSION));
    //Variable for storing explode results of files type for verifying if files is image format
    $checkPics = explode('/', $_FILES['fileUploadPics']['type']);
    //Condition of verification if files type is image format - If this file is not image, retunr a error message
    if ($checkPics[0] !== 'image') {
        $arrayError['moveFilePics'] = 'Le fichier n\'est pas une image';
    }
    //Condition of verification if files size is superior 1Mo - If this file is superior, return a error message
    if ($_FILES['fileUploadPics']['size'] > 1000000 || $_FILES['fileUploadPics']['size'] == 0) {
        $arrayError['moveFilePics'] = 'Fichier trop volumineux (Max 1Mo)';
    }
    //Condition of verification if file extansion is different of jpg or png - If this file extansion is different, return a error message
    if ($target_pics_extansion != 'jpg' && $target_pics_extansion != 'png' && $target_pics_extansion != 'jpeg') {
        $arrayError['moveFilePics'] = 'Désolé, seule les extansions de types JPG, JPEG, PNG sont acceptées.';
    }
}
// ERROR MAP
//CONDITION OF VERIFICATION IF $_FILES['fileUploadMap']['size'] EXIST AND $_FILES['fileUploadMap']['name'] IS NOT EMPTY
if (isset($_FILES['fileUploadMap']['size']) && $_FILES['fileUploadMap']['name'] != '') {
    //Variable for storing explode results of 
    $target_map_extansion = strtolower(pathinfo($target_dir_map . '/' . ($_FILES['fileUploadMap']['name']), PATHINFO_EXTENSION));
    //Variable for storing explode results of files type for verifying if files is image format
    $checkMap = explode('/', $_FILES['fileUploadMap']['type']);
    //Condition of verification if files type is image format - If this file is not image, retunr a error message
    if ($checkMap[0] !== 'image') {
        $arrayError['moveFileMap'] = 'Le fichier n\'est pas une image';
    }
    //Condition of verification if files size is superior 1Mo - If this file is superior, return a error message
    if ($_FILES['fileUploadMap']['size'] > 1000000 || $_FILES['fileUploadMap']['size'] == 0) {
        $arrayError['moveFileMap'] = 'Fichier trop volumineux (Max 1Mo)';
    }
    //Condition of verification if file extansion is different of jpg or png - If this file extansion is different, return a error message
    if ($target_map_extansion != 'jpg' && $target_map_extansion != 'png' && $target_map_extansion != 'jpeg') {
        $arrayError['moveFileMap'] = 'Désolé, seule les extansions de types JPG, JPEG, PNG sont acceptées.';
    }
}
// ERROR GOOGLE MAP ADDRESS
//Regex Google Map address
$regexGoogleMapOfWalk = '/^(https:\/\/www\.google\.com\/maps\/place\/)[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\.\!\?\+\=\@\,\/\:\%\'\(\)]{1,}+$/';

//Condition of verification if $_POST['googleMapOfWalk'] exist
if (isset($_POST['googleMapOfWalk'])) {
    //Condition of verification if value of $_POST is valid
    if (preg_match($regexGoogleMapOfWalk, $_POST['googleMapOfWalk']) == 0) {
        $arrayError['googleMapOfWalk'] = 'Veuillez respecter le format (URL Google Map)';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['googleMapOfWalk'])) {
        $arrayError['googleMapOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR TITLE
//Regex title
$regexTitleOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\'\œ\’\‘]{1,}+$/';

//Condition of verification if $_POST['titleOfWalk'] exist
if (isset($_POST['titleOfWalk'])) {
    //Condition of verification if value of $_POST is valid
    if (preg_match($regexTitleOfWalk, $_POST['titleOfWalk']) == 0) {
        $arrayError['titleOfWalk'] = 'Veuillez respecter le format';
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
//Regex full description
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
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
    //Condition of verification if value of $_POST is not empty
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
// ERROR OFFICIAL SITE
//Condition of verification if $_POST['officialSiteOfWalk'] exist
if (isset($_POST['officialSiteOfWalk'])) {
    //Condition of verification if format of value of $_POST is valid
    if ((filter_var($_POST['officialSiteOfWalk'], FILTER_VALIDATE_URL)) == false) {
        $arrayError['officialSiteOfWalk'] = 'Veuillez respecter le format';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['officialSiteOfWalk'])) {
        $arrayError['officialSiteOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR PASSWORD
//Regex password
$regexPasswordEditWalk = '/^[a-z0-9A-Z]{1,15}$/';

//Condition of verification if $_POST['passwordEditWalk'] exist
if (isset($_POST['passwordEditWalk'])) {
    //Condition of verification if format of value of $_POST is valid
    if (preg_match($regexPasswordEditWalk, $_POST['passwordEditWalk']) == 0) {
        $arrayError['passwordEditWalk'] = 'Veuillez respecter le format - MAX 15 CARACTERES';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['passwordEditWalk'])) {
        $arrayError['passwordEditWalk'] = 'Veuillez remplir le champ';
    };
    //Condition of verification if value of $_POST is equal of password of the current session
    if (!empty($_POST['passwordEditWalk']) && password_verify($_POST['passwordEditWalk'], $_SESSION['password']) != 'true') {
        $arrayError['passwordEditWalk'] = 'Le mot de passe est faux !';
    };
};

//CONDITION OF TRIGGER OF RECOVERING VALUES OF $_POST
if (isset($_POST['editWalk']) && empty($arrayError) && password_verify($_POST['passwordEditWalk'], $_SESSION['password']) == 'true') {
    //Variables for storing results of $_POST
    $currentId = htmlspecialchars(intval($_GET['id']));
    $walkTitle = htmlspecialchars(strtoupper($_POST['titleOfWalk']));
    $walkShortDescription = htmlspecialchars($_POST['shortDescriptionOfWalk']);
    $walkCompleteDescription = htmlspecialchars($_POST['completeDescriptionOfWalk']);
    $walkRate_0_3OfWalk = htmlspecialchars($_POST['rate_0_3OfWalk']);
    $walkRate_3_11OfWalk = htmlspecialchars($_POST['rate_3_11OfWalk']);
    $walkRate_12_plusOfWalk = htmlspecialchars($_POST['rate_12_plusOfWalk']);
    $walkRate_child_disabledOfWalk = htmlspecialchars($_POST['rate_child_disabledOfWalk']);
    $walkOpenedHoursOfWalk = htmlspecialchars($_POST['openedHoursOfWalk1']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk2']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk3']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk4']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk5']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk6']) . '<br />' . htmlspecialchars($_POST['openedHoursOfWalk7']);
    //Variables for storing results of str_replace function for rename pics and images
    $renamePics = strtolower(str_replace(' ', '_', $_POST['titleOfWalk'])) . '_category';
    $renameMap = strtolower(str_replace(' ', '_', $_POST['titleOfWalk'])) . '_map';
    
    //MOVE WALK PICS ON SERVER FIELD
    //Condition for triggering the deletion of photos if it exists in the folder
    if ($detailWalk[0]['pics'] != '' && isset($_FILES) && $_FILES['fileUploadPics']['name'] != '' && file_exists($target_dir_pics . '/' . $detailWalk[0]['pics']) == 'true') {
        //Function delete a pics
        unlink($target_dir_pics . '/' . $detailWalk[0]['pics']);
    };
    //Condition for triggering the rename and move pics file
    if (isset($_FILES['fileUploadPics']['type']) && $_FILES['fileUploadPics']['type'] != '') {
        //Variabe for storing explode result for extansion research
        $extansionPics = explode('/', $_FILES['fileUploadPics']['type']);
        //Hydration
        $walkFileUploadPicsOfWalk = htmlspecialchars($renamePics . '.' . strtolower($extansionPics[1]));
        //Variabe for storing tmp_name values
        $tmp_name_pics = $_FILES['fileUploadPics']['tmp_name'];
        //Move file function
        move_uploaded_file($tmp_name_pics, $target_dir_pics . '/' . $renamePics . '.' . $extansionPics[1]);
    };
    
    //MOVE MAP IMAGE ON SERVER FIELD
    //Condition for triggering the deletion of photos if it exists in the folder
    if ($detailWalk[0]['map'] != '' && isset($_FILES) && $_FILES['fileUploadMap']['name'] != '' && file_exists($target_dir_map . '/' . $detailWalk[0]['map']) == 'true') {
        //Function delete a image
        unlink($target_dir_map . '/' . $detailWalk[0]['map']);
    };
    //Condition for triggering the rename and move image file
    if (isset($_FILES['fileUploadMap']['type']) && $_FILES['fileUploadMap']['type'] != '') {
        //Variabe for storing explode result for extansion research
        $extansionMap = explode('/', $_FILES['fileUploadMap']['type']);
        //Hydration
        $walkFileUploadMapOfWalk = htmlspecialchars($renameMap . '.' . strtolower($extansionMap[1]));
        //Variabe for storing tmp_name values
        $tmp_name_map = $_FILES['fileUploadMap']['tmp_name'];
        //Move file function
        move_uploaded_file($tmp_name_map, $target_dir_map . '/' . $renameMap . '.' . $extansionMap[1]);
    };
    //Hydration
    $walkGoogleMapOfWalk = htmlspecialchars($_POST['googleMapOfWalk']);
    $walkOfficialSiteOfWalk = htmlspecialchars($_POST['officialSiteOfWalk']);
    $walkValidateStatusChoiceOfWalk = htmlspecialchars($_POST['validateStatusChoice']);
    $walkLocationPictoOfWalk = htmlspecialchars(intval($_POST['locationPictoOfWalk']));
    $walkOutputTypePictoOfWalk = htmlspecialchars(intval($_POST['outputTypePictoOfWalk']));
    $walkAgeAdvisePictoOfWalk = htmlspecialchars(intval($_POST['ageAdvisePictoOfWalk']));
    $walkPracticabilityPictoOfWalk = htmlspecialchars(intval($_POST['practicabilityPictoOfWalk']));
    //Condition of recovering values if are existing
    if (isset($_POST['babyDiaperPictoOfWalk']) && !empty($_POST['babyDiaperPictoOfWalk'])) {
        //Hydration
        $walkBabyDiaperPictoOfWalk = htmlspecialchars(intval($_POST['babyDiaperPictoOfWalk']));
    };
    //Hydration
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
    if (isset($_FILES) && $_FILES['fileUploadMap']['name'] != '') {
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

    header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
}
