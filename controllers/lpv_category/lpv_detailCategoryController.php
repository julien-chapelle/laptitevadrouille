<?php
//REQUIRE MODELS
require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');

//INSTANTIATING AN NEW OBJECT
//for calling method "detail walk"
$walk = new Lpv_category();

//CONDITION OF VERIFICATION IF URL $_GET['moreInfo'] EXIST
if (isset($_GET['moreInfo'])) {

    //Retrieving the current id from the url with GET method and stocked in variable
    $currentId = intval($_GET['moreInfo']);
    //Hydratation
    $walk->setId($currentId);
    //Variable for storing results
    $detailWalk = $walk->detailWalk();
}

//INSTANTIATING AN NEW OBJECT
//for calling method "detail payment"
$walkPayment = new Lpv_category();

//CONDITION OF VERIFICATION IF URL $_GET['moreInfo'] EXIST
if (isset($_GET['moreInfo'])) {

    //Retrieving the current id from the url with GET method and stocked in variable
    $currentId = intval($_GET['moreInfo']);
    //Hydratation
    $walkPayment->setId($currentId);
    //Variable for storing results
    $detailWalkPayment = $walkPayment->detailPaymentWalk();
};
?>
