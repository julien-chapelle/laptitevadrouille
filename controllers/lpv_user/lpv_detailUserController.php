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

if (isset($_SESSION) && !empty($_SESSION) && $detailUser[0]['status'] == 'admin') {
    //Hydratation
    $listUser = $user->listUser();
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
$category = new Lpv_category();

if (isset($_GET['user']) && $_GET['user'] == 'detail') {
    $listWalk = $category->classicListWalk();
};

?>