<?php
//inclusion config
require_once('./includes/config.php');
require_once('./includes/tools.php');

//inclusion ORM
require_once('./models/Table.php');
require_once ('./models/dbtools.php');

//inclusion classes and interfaces
require_once ('./models/interfaces/CharacterInterface.php');
require_once ('./models/interfaces/BarbarianInterface.php');
require_once ('./models/interfaces/BloodElfInterface.php');
require_once ('./models/interfaces/MageInterface.php');
require_once ('./models/interfaces/NecromancerInterface.php');
require_once ('./models/interfaces/WarriorInterface.php');

require_once ('./models/classes/Character.php');
require_once ('./models/classes/Player.php');
require_once ('./models/classes/Barbarian.php');
require_once ('./models/classes/BloodElf.php');
require_once ('./models/classes/Mage.php');
require_once ('./models/classes/Necromancer.php');
require_once ('./models/classes/Warrior.php');
require_once ('./models/classes/Object.php');

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