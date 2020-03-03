<?php

require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');
require_once('models/lpv_categoryModel.php');
$user = new Lpv_user();
if (isset($_SESSION) && !empty($_SESSION)) {
    $currentId = intval($_SESSION['id']);
    //Hydratation
    $user->setId($currentId);
    $detailUser = $user->detailUser();
}
//USER LIST WITH PAGINATION
if (isset($_SESSION) && !empty($_SESSION) && $detailUser[0]['status'] == 'admin') {
    $countUserResult = $user->countUser();
    $pageListUser = 1;
    $limiteListUser = 4;
    $pageCountListUser = ceil(intval($countUserResult[0]['countId']) / $limiteListUser);
    $debutListUser = ($pageListUser - 1) * $limiteListUser;
    //Hydratation
    $listUser = $user->listUserPaging($limiteListUser, $debutListUser);

    if (isset($_GET['listUserPage'])) {

        $pageListUser = $_GET['listUserPage'];
        $limiteListUser = 4;
        $pageCountListUser = ceil(intval($countUserResult[0]['countId']) / $limiteListUser);
        $debutListUser = ($pageListUser - 1) * $limiteListUser;
        //Hydratation
        $listUser = $user->listUserPaging($limiteListUser, $debutListUser);
    };

    if (isset($_GET['listUserPage']) && $_GET['listUserPage'] <= 0 || isset($_GET['listUserPage']) && $_GET['listUserPage'] > $pageCountListUser) {
        header('Location: http://laptitevadrouille/index.php?user=detail');
    } else {
        '';
    };
}

//LOGOUT SESSION DEBUT
if (isset($_POST['logout']) && !empty($_SESSION)) {
    session_reset();
    session_destroy();
    header('Location: http://laptitevadrouille/index.php?view=accueil');
};

//REDIRECTION IF GET = USER BUT EMPTY SESSION
if (isset($_GET['user']) && $_GET['user'] == 'detail' && empty($_SESSION)) {
    header('Location: http://laptitevadrouille/index.php?view=accueil');
}

//AVATAR USER SELECTOR
$user = new Lpv_user();
if (isset($_SESSION) && !empty($_SESSION)) {
    $currentId = intval($_SESSION['id']);
    //Hydratation
    $user->setId($currentId);
    $AvatarUser = $user->AvatarUser();
}
///////////////////////////////////////////////////////////////////////////////
//DISPLAY CATEGORY IF STATUS IS ADMIN
$countWalk = new Lpv_category();
$countWalkValResult = $countWalk->countWalkValidate();
$countWalkUnvalResult = $countWalk->countWalkUnvalidate();

$category = new Lpv_category();

if (isset($_GET['user']) && $_GET['user'] == 'detail') {

    $pageVal = 1;
    $limiteVal = 2;
    $pageCountVal = ceil(intval($countWalkValResult[0]['countId']) / $limiteVal);
    $debutVal = ($pageVal - 1) * $limiteVal;
    $listWalk = $category->listWalk($limiteVal, $debutVal);

    $pageUnval = 1;
    $limiteUnval = 2;
    $pageCountUnval = ceil(intval($countWalkUnvalResult[0]['countId']) / $limiteUnval);
    $debutUnval = ($pageUnval - 1) * $limiteUnval;
    $listUnvalidateWalk = $category->listUnvalWalk($limiteUnval, $debutUnval);

    if (isset($_GET['walkValidatePage'])) {

        $pageVal = $_GET['walkValidatePage'];
        $limiteVal = 2;
        $pageCountVal = ceil(intval($countWalkValResult[0]['countId']) / $limiteVal);
        $debutVal = ($pageVal - 1) * $limiteVal;
        $listWalk = $category->listWalk($limiteVal, $debutVal);
    };

    if (isset($_GET['walkUnvalidatePage'])) {

        $pageUnval = $_GET['walkUnvalidatePage'];
        $limiteUnval = 2;
        $pageCountUnval = ceil(intval($countWalkUnvalResult[0]['countId']) / $limiteUnval);
        $debutUnval = ($pageUnval - 1) * $limiteUnval;
        $listUnvalidateWalk = $category->listUnvalWalk($limiteUnval, $debutUnval);
    };

    if (isset($_GET['walkValidatePage']) && $_GET['walkValidatePage'] <= 0 || isset($_GET['walkValidatePage']) && $_GET['walkValidatePage'] > $pageCountVal) {
        header('Location: http://laptitevadrouille/index.php?user=detail');
    } else {
        '';
    };

    if (isset($_GET['walkUnvalidatePage']) && $_GET['walkUnvalidatePage'] <= 0 || isset($_GET['walkUnvalidatePage']) && $_GET['walkUnvalidatePage'] > $pageCountUnval) {
        header('Location: http://laptitevadrouille/index.php?user=detail');
    } else {
        '';
    };
};
