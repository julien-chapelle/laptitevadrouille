<?php

require_once('models/lpv_database.php');
require_once('models/lpv_categoryModel.php');
$countWalk = new Lpv_category();
$countWalkValResult = $countWalk->countWalkValidate();

$category = new Lpv_category();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $limite = 2;
    $pageCount = ceil(intval($countWalkValResult[0]['countId']) / $limite);
    $debut = ($page - 1) * $limite;
    $listWalk = $category->listWalk($limite, $debut);
};

if (isset($_GET['page']) && $_GET['page'] <= 0 || isset($_GET['page']) && $_GET['page'] > $pageCount) {
    header('Location: http://laptitevadrouille/index.php?list=walk&page=1');
} else {
    '';
};
?>