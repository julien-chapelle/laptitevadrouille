<?php
require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');
$user = new Lpv_user();

if (isset($_POST['deleteUser'])) {

    $currentId = intval($_SESSION['id']);
    //Hydratation
    $user->setId($currentId);
    $deleteUser = $user->deleteUser();

    header('refresh:2;url=http://laptitevadrouille/index.php?view=accueil');
}
?>