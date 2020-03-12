<?php
//REQUIRE MODELS
require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');

//INSTANTIATING AN NEW OBJECT
//for calling method "count walk" for paging
$countWalk = new Lpv_category();
//Variable for storing results
$countWalkValResult = $countWalk->countWalkValidate();

//INSTANTIATING AN NEW OBJECT
//for calling method "list walk"
$category = new Lpv_category();

//CONDITION OF VERIFICATION IF $_GET['page'] EXIST
if (isset($_GET['page'])) {
    //Variable for storing id number of current page
    $page = $_GET['page'];
    //Variable for storing for a diplay limited per pages
    $limite = 2;
    //Variable for storing the result of division of number of a walk per the display limited
    $pageCount = ceil(intval($countWalkValResult[0]['countId']) / $limite);
    //Variable for storing the result of operation for knowing first pages
    $debut = ($page - 1) * $limite;
    //Variable for storing results
    $listWalk = $category->listWalk($limite, $debut);
};

//CONDITION OF VERIFICATION IF $_GET['page'] IS NOT INFERIOR A ZERO AND SUPERIOR A LAST PAGE
if (isset($_GET['page']) && $_GET['page'] <= 0 || isset($_GET['page']) && $_GET['page'] > $pageCount) {
    //If condition is true, returning to the walks list page / Else nothing
    header('Location: http://laptitevadrouille/index.php?list=walk&page=1');
} else {
    '';
};
?>
