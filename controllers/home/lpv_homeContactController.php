<?php
// ERROR PSEUDO
$regexPseudo = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,20}$/';

if (isset($_POST['pseudo'])) {
    if (!preg_match($regexPseudo, $_POST['pseudo'])) {
        $arrayError['pseudo'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['pseudo'])) {
        $arrayError['pseudo'] = 'Veuillez remplir le champ';
    };
};
// ERROR MAIL
$regexMail = '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/';

if (isset($_POST['mail'])) {
    if (!preg_match($regexMail, $_POST['mail'])) {
        $arrayError['mail'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['mail'])) {
        $arrayError['mail'] = 'Veuillez remplir le champ';
    };
};
// ERROR USER MESSAGE
$regexUserMessage = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ\,\(\)\.\'\!\:\œ\’\‘\«\»]{1,200}$/';

if (isset($_POST['userMessage'])) {
    if (!preg_match($regexUserMessage, $_POST['userMessage'])) {
        $arrayError['userMessage'] = 'Maximum 200 caractères';
    };
    if (empty($_POST['userMessage'])) {
        $arrayError['userMessage'] = 'Veuillez laisser votre message';
    };
};
// ENVOI MESSAGE A ADMIN
if (count($arrayError) == 0 && isset($_POST['send'])) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = $_POST['mail'];
    $to = 'chapellejulien@laposte.net';
    $subject = 'Message pour admin de ' . $_POST['pseudo'] . ' le ' . date('d-m-Y') . ' - ' . date('G') . 'h' . date('i');
    $message = $_POST['userMessage'];
    $headers = 'From:' . $from;
    mail($to, utf8_decode($subject), $message, $headers);
    header('refresh:2;url=http://laptitevadrouille/');
};
?>

