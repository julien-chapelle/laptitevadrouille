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
//DELETE AVATAR AND REDIRECTION
if (isset($_POST['removeAvatarPics'])) {
    $currentId = intval($_SESSION['id']);
    //Hydratation
    $avatar->setId($currentId);
    $avatarDelete = $avatar->deleteAvatar();
    header('Location: http://laptitevadrouille/index.php?user=detail');
}
//ADD AVATAR ON BDD
$target_dir = 'assets/img_avatar_choice';
if (isset($_POST['addAvatarBdd'])) {
    $addAvatar = htmlspecialchars($_FILES["fileUpload"]["name"]);
    //Hydratation
    $avatar->setAvatar($addAvatar);
    $addAvatarOnBdd = $avatar->addAvatarOnBdd();
    $tmp_name = $_FILES["fileUpload"]["tmp_name"];
    $name = basename($_FILES["fileUpload"]["name"]);
    move_uploaded_file($tmp_name, "$target_dir/$name");
    header('Location: http://laptitevadrouille/index.php?user=detail');
}
