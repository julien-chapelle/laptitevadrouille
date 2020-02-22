<?php

require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');

$avatar = new Lpv_user();
if (isset($_SESSION) && !empty($_SESSION)) {
    $avatarList = $avatar->listAvatar();
}
//CHOICE AND REDIRECTION IF AVATAR SELECT
if (isset($_POST['choiceAvatar'])) {
    $currentId = intval($_SESSION['id']);
    $avatarSelect = htmlspecialchars(intval($_POST['avatar']));
    //Hydratation
    $avatar->setId($currentId);
    $avatar->setAvatar($avatarSelect);
    $avatarSelect = $avatar->editAvatar();
    header('Location: http://laptitevadrouille/index.php?user=detail');
}
?>
