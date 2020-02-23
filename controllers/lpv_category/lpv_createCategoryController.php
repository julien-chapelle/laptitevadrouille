<?php

require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');
$walk = new Lpv_category();

// ERROR TITRE
$regexTitleOfWalk = '/^[\w]+$/';

if (isset($_POST['titleOfWalk'])) {
    if (preg_match($regexTitleOfWalk, $_POST['titleOfWalk']) == 0) {
        $arrayError['titleOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['titleOfWalk'])) {
        $arrayError['titleOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR DESCRIPTION COURTE
$regexShortDescriptionOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,}+$/';

if (isset($_POST['shortDescriptionOfWalk'])) {
    if (preg_match($regexShortDescriptionOfWalk, $_POST['shortDescriptionOfWalk']) == 0) {
        $arrayError['shortDescriptionOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['shortDescriptionOfWalk'])) {
        $arrayError['shortDescriptionOfWalk'] = 'Veuillez remplir le champ';
    };
};
// ERROR DESCRIPTION COMPLETE
$regexCompleteDescriptionOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,}+$/';

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
$regexOpenedHoursOfWalk = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]+$/';

if (isset($_POST['openedHoursOfWalk1'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk1']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['openedHoursOfWalk1'])) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez remplir le champ';
    };
};
if (isset($_POST['openedHoursOfWalk2'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk2']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
if (isset($_POST['openedHoursOfWalk3'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk3']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
if (isset($_POST['openedHoursOfWalk4'])) {
    if (preg_match($regexOpenedHoursOfWalk, $_POST['openedHoursOfWalk4']) == 0) {
        $arrayError['openedHoursOfWalk'] = 'Veuillez respecter le format';
    };
};
// ERROR SITE OFFICIEL
if (isset($_POST['officialSiteOfWalk'])) {
    if ((filter_var($_POST['officialSiteOfWalk'], FILTER_VALIDATE_URL)) !== false) {
        $arrayError['officialSiteOfWalk'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['officialSiteOfWalk'])) {
        $arrayError['officialSiteOfWalk'] = 'Veuillez remplir le champ';
    };
};

if (isset($_POST['addUser']) && empty($arrayError)) {
    $walkTitle = $_POST['titleOfWalk'];
    $walkShortDescription = $_POST['shortDescriptionOfWalk'];
    $walkCompleteDescription = $_POST['completeDescriptionOfWalk'];
    $walkRate_0_3OfWalk = $_POST['rate_0_3OfWalk'];
    $walkRate_3_11OfWalk = $_POST['rate_3_11OfWalk'];
    $walkRate_12_plusOfWalk = $_POST['rate_12_plusOfWalk'];
    $walkRate_child_disabledOfWalk = $_POST['rate_child_disabledOfWalk'];
    $walkOpenedHoursOfWalk = $_POST['openedHoursOfWalk1'] . '<br />' . $_POST['openedHoursOfWalk2'] . '<br />' . $_POST['openedHoursOfWalk3'] . '<br />' . $_POST['openedHoursOfWalk4'];
    $walkPublicationDate = strftime("%d-%m-%Y");
    $walkOfficialSiteOfWalk = $_POST['officialSiteOfWalk'];
    $walkLocationPictoOfWalk = $_POST['locationPictoOfWalk'];
    $walkOutputTypePictoOfWalk = $_POST['outputTypePictoOfWalk'];
    $walkAgeAdvisePictoOfWalk = $_POST['ageAdvisePictoOfWalk'];
    $walkPracticabilityPictoOfWalk = $_POST['practicabilityPictoOfWalk'];
    $walkBabyDiaperPictoOfWalk = $_POST['babyDiaperPictoOfWalk'];
    //Hydratation
    $user->setPseudo($walkTitle);
    $user->setMail($walkShortDescription);
    $user->setPassword($walkCompleteDescription);
    $user->setPseudo($walkRate_0_3OfWalk);
    $user->setMail($walkRate_3_11OfWalk);
    $user->setPassword($walkRate_12_plusOfWalk);
    $user->setPseudo($walkRate_child_disabledOfWalk);
    $user->setMail($walkOpenedHoursOfWalk);
    $user->setPassword($walkPublicationDate);
    $user->setPseudo($walkOfficialSiteOfWalk);
    $user->setMail($walkLocationPictoOfWalk);
    $user->setPassword($walkOutputTypePictoOfWalk);
    $user->setPseudo($walkAgeAdvisePictoOfWalk);
    $user->setMail($walkPracticabilityPictoOfWalk);
    $user->setPassword($walkBabyDiaperPictoOfWalk);
    $lastWalkId = $user->addUser();
}