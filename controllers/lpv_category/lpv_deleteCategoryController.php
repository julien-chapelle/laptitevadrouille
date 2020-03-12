<?php
//REQUIRE MODELS
require_once('models/lpv_database.php');
require_once('models/lpv_userModel.php');
require_once('models/lpv_categoryModel.php');
require_once('models/lpv_avoirModel.php');

//INSTANTIATING AN NEW OBJECT
//for calling method "detail user"
$user = new Lpv_user();

//CONDITION OF VERIFICATION IF $_SESSION EXIST, IS NOT EMPTY AND STATUS IS ADMIN
if (isset($_SESSION) && !empty($_SESSION) && $_SESSION['status'] == 'admin') {
    //Retrieving the current user id and stocked in variable
    $currentId = intval($_SESSION['id']);
    //Hydration
    $user->setId($currentId);
    //Variable for storing results
    $detailUser = $user->detailUser();
};

//INSTANTIATING AN NEW OBJECT
//for calling method "detail walk"
$walkDetail = new Lpv_category();

//CONDITION OF VERIFICATION IF $_GET EXIST AND IS EQUAL A DELETE
if (isset($_GET['walk']) && $_GET['walk'] == 'delete') {
    //Retrieving the current id from the url with GET method and stocked in variable
    $currentId = intval($_GET['id']);
    //Hydration
    $walkDetail->setId($currentId);
    //Variable for storing results
    $deleteWalkDetail = $walkDetail->detailWalk();
}

// ERROR ADMIN PASSWORD
//Regex password
$regexChecktPassword = '/^[a-z0-9A-Z]{1,15}$/';

//Condition of verification if $_POST['checkPassword'] exist
if (isset($_POST['checkPassword'])) {
    //Condition of verification if format of value of $_POST is valid
    if (preg_match($regexChecktPassword, $_POST['checkPassword']) == 0) {
        $arrayError['checkPassword'] = 'Veuillez respecter le format - MAX 15 CARACTERES';
    };
    //Condition of verification if value of $_POST is not empty
    if (empty($_POST['checkPassword'])) {
        $arrayError['checkPassword'] = 'Veuillez remplir le champ';
    };
};
//WALK DELETE
//CONDITION OF TRIGGER DELETE
if (isset($_SESSION['status']) && $_SESSION['status'] == 'admin' && isset($_POST['deleteWalk']) && empty($arrayError)) {
    //Condition of verification if password is validated
    if (password_verify($_POST['checkPassword'], $detailUser[0]['password']) == 'true') {

        //DELETE PAYMENT OF WALK
        //Retrieving the current id from the url with GET method and stocked in variable
        $currentId = intval($_GET['id']);
        //for calling method "delete payment"
        $paymentDelete = new Lpv_avoir;
        //Hydration
        $paymentDelete->setIdWalk($currentId);
        //Trigger "delete payment" method
        $paymentDelete->deletePayment();

        //DELETE WALK
        //for calling method "delete walk"
        $walkDelete = new Lpv_category();
        //Hydration
        $walkDelete->setId($currentId);
        //Trigger "delete walk" method
        $walkDelete->deleteWalk();

        //DELETE PICS & MAP
        //Condition of verification if pics is exist on database
        if (isset($detailWalk[0]['pics']) && $detailWalk[0]['pics'] != null && $detailWalk[0]['pics'] != '') {
            //Variable for storing results
            $currentPics = $detailWalk[0]['pics'];
            //Deleting a pics in the folder
            unlink('assets/img_walk/' . $currentPics);
        };
        //Condition of verification if a google map image is exist on database
        if (isset($detailWalk[0]['map']) && $detailWalk[0]['map'] != null && $detailWalk[0]['map'] != '') {
            //Variable for storing results
            $currentMap = $detailWalk[0]['map'];
            //Deleting a pics in the folder
            unlink('assets/img_map/' . $currentMap);
        };
        //If all form is validated, returning to user details page after a refresh
        header('refresh:2;url=http://laptitevadrouille/index.php?user=detail');
    } else {
        //Else return error message if password is false
        $arrayError['checkPassword'] = 'Le mot de passe actuel saisi est faux';
    };
};
?>
