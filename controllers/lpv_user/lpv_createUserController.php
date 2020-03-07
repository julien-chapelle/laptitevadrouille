<?php

require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');
$arrayValid = [];
//LOCATION IF ISSET SESSION
if (isset($_SESSION) && !empty($_SESSION) && isset($_GET['user']) && $_GET['user'] == 'add') {
    header('Location:http://laptitevadrouille/index.php?user=detail');
};
//OBJECT INITIALIZATION
$user = new Lpv_user();
//VERIFY IF MAIL USER EXIST
$verifyIfUserExist = $user->listUser();
if (isset($_POST['mail'])) {
    foreach ($verifyIfUserExist as $row) {
        if ($_POST['mail'] == $row['mail']) {
            $arrayError['verifyIfUserMailExist'] = 'Ce mail est déjà utilisé';
        };
    };
};
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
// ERROR PASSWORD CONFIRM
$regexPasswordConfirm = '/^[a-z0-9A-Z]{1,15}$/';

if (isset($_POST['passwordConfirm'])) {
    if (preg_match($regexPasswordConfirm, $_POST['passwordConfirm']) == 0) {
        $arrayError['passwordConfirm'] = 'Veuillez respecter le format - MAX 15 CARACTERES';
    };
    if (empty($_POST['passwordConfirm'])) {
        $arrayError['passwordConfirm'] = 'Veuillez remplir le champ';
    };
    if ($_POST['password'] != $_POST['passwordConfirm']) {
        $arrayError['passwordConfirm'] = 'Les mots de passes ne sont pas identiques !';
    };
};
// ERROR EMPTY CLIENT APPROUVE
if (isset($_POST["g-recaptcha-response"]) && !isset($_POST['clientApprouve'])) {
    $arrayError['clientApprouve'] = 'Veuillez approuver pour continuer';
}
//RECAPTCHA
if (isset($_POST["g-recaptcha-response"]) && empty($arrayError)) {
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => '6LcJ9t4UAAAAANtPuz8Ar41nbB8RXsvoAekyAJAV',
        'response' => $_POST["g-recaptcha-response"]
    );
    $options = array(
        'http' => array(
            'header' => 'Content-Type: application/x-www-form-urlencoded\r\n',
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);

    if ($captcha_success->success == false) {
        $arrayError['reCaptcha'] = 'Vous êtes un robot ! Stop !';
    } else if ($captcha_success->success == true) {
        $arrayValid['reCaptcha'] = 'Vous n\'êtes pas un robot !';
    }
}
// IF ALL OK AFTER SUBMIT
if (isset($_POST["g-recaptcha-response"]) && empty($arrayError) && isset($_POST['clientApprouve']) && $_POST['clientApprouve'] == 'clientApprouve' && $captcha_success->success) {
    $pseudo = htmlspecialchars(ucfirst(mb_strtolower($_POST['pseudo'], 'UTF-8')));
    $mail = htmlspecialchars($_POST['mail']);
    $password = htmlspecialchars(password_hash($_POST['password'], PASSWORD_DEFAULT));
    //Hydratation
    $user->setPseudo($pseudo);
    $user->setMail($mail);
    $user->setPassword($password);
    $lastId = $user->addUser();
    $userList = $user->listUser();
    //AUTO CONNECT AFTER CREATE SUCCESS
    foreach ($userList as $row) {
        $_SESSION['pseudo'] = $row['pseudo'];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['status'] = $row['status'];
    }
    $_SESSION['id'] = $lastId;
    header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
}
