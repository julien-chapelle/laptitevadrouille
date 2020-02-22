<?php

require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');
$arrayError = [];
$user = new Lpv_user();

//DETAIL USER
if (isset($_SESSION) && !empty($_SESSION) && isset($_GET['id'])) {
    $currentId = intval($_GET['id']);
    //Hydratation
    $user->setId($currentId);
    $detailUser = $user->detailUser();
};
/////////////////////////////////////////////////////////////////////////////////////////////////////
// ERROR PSEUDO
$regexPseudo = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,20}$/';

if (isset($_POST['pseudo'])) {
    if (preg_match($regexPseudo, $_POST['pseudo']) == 0) {
        $arrayError['pseudo'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['pseudo'])) {
        $arrayError['pseudo'] = 'Veuillez remplir le champ';
    };
};
// ERROR MAIL
$regexMail = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/';

if (isset($_POST['mail'])) {
    if (preg_match($regexMail, $_POST['mail']) == 0) {
        $arrayError['mail'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['mail'])) {
        $arrayError['mail'] = 'Veuillez remplir le champ';
    };
};
// ERROR PASSWORD
$regexPassword = '/^[a-z0-9A-Z]{1,15}$/';

if (isset($_POST['password'])) {
    if (preg_match($regexPassword, $_POST['password']) == 0) {
        $arrayError['password'] = 'Veuillez respecter le format - MAX 15 CARACTERES';
    };
    if (empty($_POST['password'])) {
        $arrayError['password'] = 'Veuillez remplir le champ';
    };
};
// USER INFO UPDATE
if (isset($_POST['editUserInfo']) && empty($arrayError)) {
    if ($_SESSION['status'] == 'admin' || password_verify($_POST['password'], $detailUser[0]['password']) == 'true') {
        $pseudo = htmlspecialchars(ucfirst(mb_strtolower($_POST['pseudo'], 'UTF-8')));
        $mail = htmlspecialchars($_POST['mail']);
        $status = htmlspecialchars(mb_strtolower($_POST['status']));
        //Hydratation
        $user->setId($currentId);
        $user->setPseudo($pseudo);
        $user->setMail($mail);
        $user->setStatus($status);
        $user->editUserInfo();
        $user->changeStatus();
        header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
    } else {
        $arrayError['password'] = 'Le mot de passe est faux';
    };
};
//////////////////////////////////////////////////////////////////////////////////////////////
// ERROR CURRENT PASSWORD
$regexCurrentPassword = '/^[a-z0-9A-Z]{1,15}$/';

if (isset($_POST['currentPassword'])) {
    if (preg_match($regexCurrentPassword, $_POST['currentPassword']) == 0) {
        $arrayError['currentPassword'] = 'Veuillez respecter le format - MAX 15 CARACTERES';
    };
    if (empty($_POST['currentPassword'])) {
        $arrayError['currentPassword'] = 'Veuillez remplir le champ';
    };
};
// ERROR NEW PASSWORD
$regexNewPassword = '/^[a-z0-9A-Z]{1,15}$/';

if (isset($_POST['newPassword'])) {
    if (preg_match($regexNewPassword, $_POST['newPassword']) == 0) {
        $arrayError['newPassword'] = 'Veuillez respecter le format - MAX 15 CARACTERES';
    };
    if (empty($_POST['newPassword'])) {
        $arrayError['newPassword'] = 'Veuillez remplir le champ';
    };
};
// USER PASSWORD UPDATE
if (isset($_POST['editUserPassword']) && empty($arrayError)) {
    if (password_verify($_POST['currentPassword'], $detailUser[0]['password']) == 'true') {
        $password = htmlspecialchars(password_hash($_POST['newPassword'], PASSWORD_DEFAULT));
        //Hydratation
        $user->setId($currentId);
        $user->setPassword($password);
        $user->editUserPassword();
        header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
    } else {
        $arrayError['currentPassword'] = 'Le mot de passe actuel saisi est faux';
    };
};
