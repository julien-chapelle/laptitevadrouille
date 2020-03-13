<?php

require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');
$user = new Lpv_user();
//DETAIL USER
if (isset($_SESSION) && !empty($_SESSION) && isset($_GET['user']) && isset($_GET['id'])) {
    $currentId = intval($_GET['id']);
    //Hydratation
    $user->setId($currentId);
    $detailEditUser = $user->detailUser();
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
    if (!empty($_POST['password']) && password_verify($_POST['password'], $_SESSION['password']) != 'true') {
        $arrayError['password'] = 'Le mot de passe est faux !';
    };
};
// USER INFO UPDATE
if (isset($_POST['editUserInfo']) && empty($arrayError)) {
    if ($_SESSION['status'] == 'admin' && password_verify($_POST['password'], $_SESSION['password']) == 'true') {
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
    } elseif ($_SESSION['status'] == 'admin' && $detailEditUser[0]['id'] == $_SESSION['id'] && password_verify($_POST['password'],  $_SESSION['password']) == 'true') {
        $pseudo = htmlspecialchars(ucfirst(mb_strtolower($_POST['pseudo'], 'UTF-8')));
        $mail = htmlspecialchars($_POST['mail']);
        //Hydratation
        $user->setId($currentId);
        $user->setPseudo($pseudo);
        $user->setMail($mail);
        $user->editUserInfo();
        header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
    } elseif ($_SESSION['status'] == 'user' && password_verify($_POST['password'], $_SESSION['password']) == 'true') {
        $pseudo = htmlspecialchars(ucfirst(mb_strtolower($_POST['pseudo'], 'UTF-8')));
        $mail = htmlspecialchars($_POST['mail']);
        //Hydratation
        $user->setId($currentId);
        $user->setPseudo($pseudo);
        $user->setMail($mail);
        $user->editUserInfo();
        header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
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
    if (!empty($_POST['currentPassword']) && password_verify($_POST['currentPassword'], $_SESSION['password']) != 'true') {
        $arrayError['currentPassword'] = 'Le mot de passe est faux !';
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
// ERROR CONFIRM NEW PASSWORD
$regexConfirmeNewPassword = '/^[a-z0-9A-Z]{1,15}$/';

if (isset($_POST['confirmNewPassword'])) {
    if (preg_match($regexConfirmeNewPassword, $_POST['confirmNewPassword']) == 0) {
        $arrayError['confirmNewPassword'] = 'Veuillez respecter le format - MAX 15 CARACTERES';
    };
    if (empty($_POST['confirmNewPassword'])) {
        $arrayError['confirmNewPassword'] = 'Veuillez remplir le champ';
    };
    if ($_POST['newPassword'] != $_POST['confirmNewPassword']) {
        $arrayError['confirmNewPassword'] = 'Les mots de passes ne sont pas identiques !';
    }
};
// USER PASSWORD UPDATE
if (isset($_POST['editUserPassword']) && empty($arrayError)) {
    if (password_verify($_POST['currentPassword'], $detailEditUser[0]['password']) == 'true') {
        $password = htmlspecialchars(password_hash($_POST['newPassword'], PASSWORD_DEFAULT));
        //Hydratation
        $user->setId($currentId);
        $user->setPassword($password);
        $user->editUserPassword();
        session_reset();
        session_destroy();
        header('refresh:2;url=http://laptitevadrouille/index.php?view=accueil');
    } else {
        $arrayError['currentPassword'] = 'Le mot de passe actuel saisi est faux';
    };
};
?>
