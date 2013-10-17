<?php
//inclusion config
require_once('./includes/config.php');
require_once('./includes/tools.php');

//inclusion ORM
require_once('./models/Table.php');
require_once ('./models/dbtools.php');

//template system Smarty
require_once('./libs/smarty/Smarty.class.php');
$smarty = new Smarty();


//default action
$action = $config['defaults']['action'];

//if an action is in the url
if (!empty($_GET['action']))
    $action = $_GET['action'];

//routeur
routeur($action);

//display main view
$smarty -> display('./views/main.tpl');
?>