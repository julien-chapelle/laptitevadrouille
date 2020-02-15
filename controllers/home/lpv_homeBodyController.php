<?php
include('views/lpv_user/delete.php');
include('views/lpv_category/delete.php');
include('views/home/loginAccountModal.php');
include('views/home/aboutModal.php');

if (isset($_GET['url']) && $_GET['url'] == '' || isset($_GET['view']) && $_GET['view'] == 'accueil' || empty($_GET)) {
    include('views/home/index.php');
    return;
} elseif (isset($_GET['list']) && $_GET['list'] == 'walk') {
    include('views/lpv_category/index.php');
    return;
} elseif (isset($_GET['search'])) {
    include('views/lpv_category/searchResult.php');
    return;
} elseif (isset($_GET['list']) && $_GET['list'] == 'user') {
    include('views/lpv_user/index.php');
    return;
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'add') {
    include('views/lpv_category/create.php');
    return;
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'detail') {
    include('views/lpv_category/detail.php');
    return;
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'edit') {
    include('views/lpv_category/edit.php');
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'add') {
    include('views/lpv_user/create.php');
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'detail') {
    include('views/lpv_user/detail.php');
    return;
} elseif (isset($_GET['view']) && $_GET['view'] == 'contact') {
    include('views/home/contactAdmin.php');
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'editInfo') {
    include('views/lpv_user/editInfo.php');
    return;
} elseif (isset($_GET['user']) && $_GET['user'] == 'editPassword') {
    include('views/lpv_user/editPassword.php');
    return;
} elseif (isset($_GET['legalNotice'])) {
    include('views/home/legalNotice.php');
    return;
} elseif (isset($_GET['siteMap'])) {
    include('views/home/siteMap.php');
    return;
} elseif (isset($_GET['helpPage'])) {
    include('views/home/helpPage.php');
    return;
} else {
    include('404.php');
};
?>
