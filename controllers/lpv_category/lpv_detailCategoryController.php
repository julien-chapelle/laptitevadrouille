<?php

require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');
$walk = new Lpv_category();

if (isset($_GET['moreInfo'])) {

    $currentId = intval($_GET['moreInfo']);
    //Hydratation
    $walk->setId($currentId);
    $detailWalk = $walk->detailWalk();
}

$walkPayment = new Lpv_category();
if (isset($_GET['moreInfo'])) {

    $currentId = intval($_GET['moreInfo']);
    //Hydratation
    $walkPayment->setId($currentId);
    $detailWalkPayment = $walkPayment->detailPaymentWalk();
}
