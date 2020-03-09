<?php

require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');
require_once('models/lpv_categoryModel.php');
require_once('models/lpv_avoirModel.php');

$user = new Lpv_user();
if (isset($_SESSION) && !empty($_SESSION) && $_SESSION['status'] == 'admin') {
    $currentId = intval($_SESSION['id']);
    //Hydratation
    $user->setId($currentId);
    $detailUser = $user->detailUser();
};
$walkDetail = new Lpv_category();
if (isset($_GET['walk']) && $_GET['walk'] == 'delete') {
    $currentId = intval($_GET['id']);
    //Hydratation
    $walkDetail->setId($currentId);
    $deleteWalkDetail = $walkDetail->detailWalk();
}
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
//WALK DELETE
if (isset($_SESSION['status']) && $_SESSION['status'] == 'admin' && isset($_POST['deleteWalk']) && empty($arrayError)) {
    if (password_verify($_POST['checkPassword'], $detailUser[0]['password']) == 'true') {
        //DELETE PAYMENT OF WALK
        $currentId = intval($_GET['id']);
        $paymentDelete = new Lpv_avoir;
        //Hydratation
        $paymentDelete->setIdWalk($currentId);
        $paymentDelete->deletePayment();
        //DELETE WALK
        $walkDelete = new Lpv_category();
        //Hydratation
        $walkDelete->setId($currentId);
        $walkDelete->deleteWalk();
        //DELETE PICS & MAP
        if (isset($detailWalk[0]['pics']) && $detailWalk[0]['pics'] != null && $detailWalk[0]['pics'] != '') {
            $currentPics = $detailWalk[0]['pics'];
            unlink('assets/img_walk/' . $currentPics);
        };
        if (isset($detailWalk[0]['map']) && $detailWalk[0]['map'] != null && $detailWalk[0]['map'] != '') {
            $currentMap = $detailWalk[0]['map'];
            unlink('assets/img_map/' . $currentMap);
        };
        header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
    } else {
        $arrayError['checkPassword'] = 'Le mot de passe actuel saisi est faux';
    };
};

