<?php
require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');
$user = new Lpv_user();

//DETAIL USER
if (isset($_SESSION) && !empty($_SESSION) && isset($_GET['id'])) {
    $currentId = intval($_GET['id']);
    //Hydratation
    $user->setId($currentId);
    $detailDeleteUser = $user->detailUser();
};
// ERROR PSEUDO
$regexCheckPseudo = '/^[A-Za-z0-9\ \-\à\á\â\ã\ä\å\ç\è\é\ê\ë\ì\í\î\ï\ð\ò\ó\ô\õ\ö\ù\ú\û\ü\ý\ÿ]{1,20}$/';

if (isset($_POST['checkPseudo'])) {
    if (preg_match($regexCheckPseudo, $_POST['checkPseudo']) == 0) {
        $arrayError['checkPseudo'] = 'Veuillez respecter le format';
    };
    if (empty($_POST['checkPseudo'])) {
        $arrayError['checkPseudo'] = 'Veuillez remplir le champ';
    };
};
// ERROR CURRENT PASSWORD
$regexChecktPassword = '/^[a-z0-9A-Z]{1,15}$/';
if (isset($_POST['checkPassword'])) {
    if (preg_match($regexChecktPassword, $_POST['checkPassword']) == 0) {
        $arrayError['checkPassword'] = 'Veuillez respecter le format - MAX 15 CARACTERES';
    };
    if (empty($_POST['checkPassword'])) {
        $arrayError['checkPassword'] = 'Veuillez remplir le champ';
    };
};
// USER DELETE
if (isset($_POST['deleteUser']) && empty($arrayError) && isset($_SESSION) && $_SESSION['status'] != 'admin') {
    if ($_POST['checkPseudo'] == $detailUser[0]['pseudo'] && password_verify($_POST['checkPassword'], $detailUser[0]['password']) == 'true') {
        //Hydratation
        $user->setId($currentId);
        $user->deleteUser();
            session_reset();
            session_destroy();
            header('refresh:2;url=http://laptitevadrouille/index.php?view=accueil');
    } else {
        $arrayError['checkPassword'] = 'Le mot de passe ou le pseudo actuel saisi est faux';
    };
} elseif (isset($_POST['deleteUser']) && empty($arrayError) && isset($_SESSION) && $_SESSION['status'] == 'admin') {
    if ($_POST['checkPseudo'] == $detailUser[0]['pseudo']) {
        //Hydratation
        $user->setId($currentId);
        $user->deleteUser();
        header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
    } else {
        $arrayError['checkPseudo'] = 'Le pseudo actuel saisi est faux';
    };
}
