<?php

require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');
$walk = new Lpv_category();
//MORE INFO UNVALIDATE WALK IF STATUS IS ADMIN
if (isset($_GET['unvalidateWalk'])) {

    $currentId = intval($_GET['unvalidateWalk']);
    //Hydratation
    $walk->setId($currentId);
    $detailWalk = $walk->detailWalk();
}

$walkPayment = new Lpv_category();
if (isset($_GET['unvalidateWalk'])) {

    $currentId = intval($_GET['unvalidateWalk']);
    //Hydratation
    $walkPayment->setId($currentId);
    $detailWalkPayment = $walkPayment->detailPaymentWalk();

}