<?php

require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');
//COUNT SEARCH ID RESULT
$countWalk = new Lpv_category();

if (isset($_POST['searchSubmit']) && $_POST['searchTitle'] != '') {
    $searchTitle = $_POST['searchTitle'];
    //Hydratation
    $countWalk->setTitle($searchTitle);
    $countWalkResult = $countWalk->countSearchWalk();
}

//LIMIT RESULT PER PAGE
$category = new Lpv_category();

if (isset($_GET['search']) && $_GET['search'] == 'title' && isset($_GET['page'])) {
    $page = $_GET['page'];
    $limite = 2;
    $pageCount = ceil(intval($countWalkResult[0]['countSearchId']) / $limite);
    $debut = ($page - 1) * $limite;
    $listWalk = $category->listWalk($limite, $debut);
};

if (isset($_GET['page']) && $_GET['page'] <= 0 || isset($_GET['page']) && $_GET['page'] > $pageCount) {
    header('Location: http://laptitevadrouille/index.php?list=walk&page=1');
} else {
    '';
};

//SEARCH RESULT
$walk = new Lpv_category();

if (isset($_POST['searchSubmit']) && $_POST['searchTitle'] != '') {
    $searchTitle = $_POST['searchTitle'];
    //Hydratation
    $walk->setTitle($searchTitle);
    $searchWalk = $walk->searchWalk();
}
