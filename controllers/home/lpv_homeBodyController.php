<?php
//REQUIRE MODAL VIEWS
include('views/home/loginAccountModal.php');
include('views/home/aboutModal.php');

//CONDITION OF VIEWS DISPLAY
//Display home
if (isset($_GET['url']) && $_GET['url'] == '' || isset($_GET['view']) && $_GET['view'] == 'accueil' || empty($_GET)) {
    include('views/home/index.php');
    return;
//Display list of walk
} elseif (isset($_GET['list']) && $_GET['list'] == 'walk' && isset($_GET['page'])) {
    include('views/lpv_category/index.php');
    return;
//Display search walk result
} elseif (isset($_GET['search']) && isset($_GET['page'])) {
    include('views/lpv_category/searchResult.php');
    return;
//Display user list
} elseif (isset($_GET['list']) && $_GET['list'] == 'user') {
    include('views/lpv_user/index.php');
    return;
//Display detail walk
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'detail' && isset($_GET['moreInfo']) && $_GET['moreInfo'] != '') {
    include('views/lpv_category/detail.php');
    return;
//Display detail unvalidate walk
} elseif (isset($_GET['walk']) && $_GET['walk'] == 'detail' && isset($_GET['unvalidateWalk']) && isset($detailUser) && $detailUser[0]['status'] == 'admin' && $_GET['unvalidateWalk'] != '') {
    include('views/lpv_category/unvalidateWalk.php');
    return;
//Display edit walk
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_SESSION['status']) && $_SESSION['status'] == 'admin' && isset($_GET['walk']) && $_GET['walk'] == 'edit' && isset($_GET['id']) && $_GET['id'] != '') {
    include('views/lpv_category/edit.php');
    return;
//Display create walk
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_GET['walk']) && $_GET['walk'] == 'create') {
    include('views/lpv_category/create.php');
    return;
//Display delete walk
} elseif (isset($_SESSION) && isset($_SESSION['status']) && $_SESSION['status'] == 'admin' && isset($_GET['walk']) && $_GET['walk'] == 'delete' && isset($_GET['id']) && $_GET['id'] != '') {
    include('views/lpv_category/delete.php');
    return;
//Display user create
} elseif (isset($_SESSION) && isset($_GET['user']) && $_GET['user'] == 'add') {
    include('views/lpv_user/create.php');
    return;
//Display user details
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_GET['user']) && $_GET['user'] == 'detail') {
    include('views/lpv_user/detail.php');
    return;
//Display contact admin
} elseif (isset($_GET['view']) && $_GET['view'] == 'contact') {
    include('views/home/contactAdmin.php');
    return;
//Display edit user info
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_GET['user']) && $_GET['user'] == 'editInfo' && isset($_GET['id']) && $_GET['id'] != '') {
    include('views/lpv_user/editInfo.php');
    return;
//Display edit user password
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_GET['user']) && $_GET['user'] == 'editPassword' && isset($_GET['id']) && $_GET['id'] != '') {
    include('views/lpv_user/editPassword.php');
    return;
//Display delete user
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_GET['user']) && $_GET['user'] == 'delete' && isset($_GET['id']) && isset($_GET['id']) && $_GET['id'] != '') {
    include('views/lpv_user/delete.php');
    return;
//Display avatar choice list
} elseif (isset($_SESSION) && !empty($_SESSION) && isset($_GET['avatarChoice']) && !empty($_GET['avatarChoice'])) {
    include('views/lpv_user/avatarChoice.php');
    return;
//Display legal notice
} elseif (isset($_GET['legalNotice'])) {
    include('views/home/legalNotice.php');
    return;
//Display site map
} elseif (isset($_GET['siteMap'])) {
    include('views/home/siteMap.php');
    return;
//Display help page
} elseif (isset($_GET['helpPage'])) {
    include('views/home/helpPage.php');
    return;
//Display 404 error
} else {
    include('views/home/view404.php');
};
