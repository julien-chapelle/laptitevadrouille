<?php

require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');
$target_dir_avatar = 'assets/img_avatar_choice';

// ERROR SIZE AVATAR
if (isset($_FILES['fileUpload']['size']) && $_FILES['fileUpload']['name'] != '') {
    $target_avatar_extansion = strtolower(pathinfo($target_dir_avatar . '/' . ($_FILES['fileUpload']['name']), PATHINFO_EXTENSION));
    $checkAvatar = explode('/', $_FILES['fileUpload']['type']);
    if ($checkAvatar[0] !== 'image') {
        $arrayError['moveFileAvatar'] = 'Le fichier n\'est pas une image';
    }
    if ($_FILES['fileUpload']['size'] > 50000 || $_FILES['fileUpload']['size'] == 0) {
        $arrayError['moveFileAvatar'] = 'Fichier trop volumineux (Max 50Ko)';
    }
    if ($target_avatar_extansion != 'png') {
        $arrayError['moveFileAvatar'] = 'Désolé, seule l\'extansion de types PNG est acceptée.';
    }
} elseif (isset($_FILES['fileUpload']['name']) && $_FILES['fileUpload']['name'] == '') {
    $arrayError['moveFileAvatar'] = 'Selectionnez une image';
};

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
//DELETE AVATAR CHOICE AND REDIRECTION
if (isset($_POST['removeAvatarPics'])) {
    $currentId = intval($_SESSION['id']);
    //Hydratation
    $avatar->setId($currentId);
    $avatarDelete = $avatar->deleteAvatar();
    header('Location: http://laptitevadrouille/index.php?user=detail');
}
//ADD AVATAR ON BDD
if (isset($_POST['addAvatarBdd']) && empty($arrayError)) {
    $addAvatar = htmlspecialchars($_FILES["fileUpload"]["name"]);
    //Hydratation
    $avatar->setAvatar($addAvatar);
    $addAvatarOnBdd = $avatar->addAvatarOnBdd();
    $tmp_name = $_FILES["fileUpload"]["tmp_name"];
    $name = basename($_FILES["fileUpload"]["name"]);
    move_uploaded_file($tmp_name, "$target_dir_avatar/$name");
    header('Location: http://laptitevadrouille/index.php?user=detail');
}
//DELETE AVATAR ON BDD
if (isset($_POST['deleteAvatarOnBdd'])) {
    $currentAvatarName = $_POST['avatar'];
    //Hydratation
    $avatar->setAvatar($currentAvatarName);
    $avatarDelete = $avatar->deleteAvatarOnBdd();
    unlink('assets/img_avatar_choice/' . $currentAvatarName);
    header('Refresh: 0');
}
