<?php
//Sets the default time difference for all date / time functions
date_default_timezone_set('Europe/Paris');
//Edit location information (used for strftime() function)
setlocale(LC_ALL, 'fra', 'fr_FR.utf8');
//Starts a new session
session_start();
//Initialising a array of error for form
$arrayError = [];

//REQUIRE CONTROLLERS
require_once('controllers/home/lpv_homeUserLoginController.php');
require_once('controllers/home/lpv_homeContactController.php');
require_once('controllers/lpv_category/lpv_detailCategoryController.php');
require_once('controllers/lpv_category/lpv_detailUnvalidateCategoryController.php');
require_once('controllers/lpv_category/lpv_listCategoryController.php');
require_once('controllers/lpv_category/lpv_searchCategoryController.php');
require_once('controllers/lpv_user/lpv_avatarChoiceController.php');
require_once('controllers/lpv_user/lpv_listUserController.php');
require_once('controllers/lpv_user/lpv_searchUserController.php');
require_once('controllers/lpv_user/lpv_createUserController.php');
require_once('controllers/lpv_user/lpv_detailUserController.php');
require_once('controllers/lpv_user/lpv_editUserController.php');
require_once('controllers/lpv_user/lpv_deleteUserController.php');
require_once('controllers/lpv_category/lpv_createCategoryController.php');
require_once('controllers/lpv_category/lpv_editCategoryController.php');
require_once('controllers/lpv_category/lpv_deleteCategoryController.php');
?>