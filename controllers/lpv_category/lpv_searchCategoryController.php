<?php

require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');
//COUNT SEARCH ID RESULT
$walk = new Lpv_category();

if (isset($_POST['searchSubmit']) && isset($_POST['searchTitle']) && $_POST['searchTitle'] != '') {
    header('Location: http://laptitevadrouille/index.php?search=' . $_POST['searchTitle'] . '&page=1');
};

//LIMIT RESULT PER PAGE
if (isset($_GET['search']) && isset($_GET['page'])) {
    $searchTitle = $_GET['search'];
    //Hydratation
    $walk->setTitle($searchTitle);
    $countWalkResult = $walk->countSearchWalk();

    $page = intval($_GET['page']);
    $limite = 2;
    $pageCount = ceil(intval($countWalkResult[0]['countSearchId']) / $limite);
    $debut = ($page - 1) * $limite;
    $searchWalk = $walk->searchDetailWalk($limite, $debut);
};

if (isset($_GET['page']) && $_GET['page'] <= 0 || isset($_GET['page']) && $_GET['page'] > $pageCount) {
    header('Location: http://laptitevadrouille/index.php?search=title&page=1');
} else {
    '';
};
?>