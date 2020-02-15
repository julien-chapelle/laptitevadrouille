<?php
require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');
$arrayError = [];
$user = new Lpv_user;

// ERROR USER MAIL CONNEXION
$regexUserMailConnexion = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/';

if (isset($_POST['userMailConnexion'])) {
    if (!preg_match($regexUserMailConnexion, $_POST['userMailConnexion'])) {
        $arrayError['userMailConnexion'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['userMailConnexion'])) {
        $arrayError['userMailConnexion'] = 'Veuillez remplir le champ';
    };
};
// ERROR PASSWORD CONNEXION
$regexPasswordConnexion = '/^[a-z0-9A-Z]{1,15}$/';

if (isset($_POST['passwordConnexion'])) {
    if (!preg_match($regexPasswordConnexion, $_POST['passwordConnexion'])) {
        $arrayError['passwordConnexion'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['passwordConnexion'])) {
        $arrayError['passwordConnexion'] = 'Veuillez remplir le champ';
    };
};

// REDIRECTION SI USER ACCOUNT ISSET
if (empty($arrayError) && isset($_POST['userConnection']) && !isset($e)) {
    $userList = $user->listUser();
    foreach ($userList as $row) {
        if ($_POST['userMailConnexion'] == $row['mail'] && password_verify($_POST['passwordConnexion'], $row['password']) == 'true') {
            $_SESSION['id'] = $row['id'];
            $_SESSION['pseudo'] = $row['pseudo'];
            header('Location: http://laptitevadrouille/index.php?user=detail');
        } else {
            $userNoExistError = 'Ce compte n\'existe pas, veuillez vérifier vos données de connections ou créez un compte';
        };
    };
};

//LOGOUT SESSION DEBUT
if (isset($_POST['logoutModal']) && !empty($_SESSION)) {
    session_reset();
    session_destroy();
    header('Location: http://laptitevadrouille/index.php?view=accueil');
};
