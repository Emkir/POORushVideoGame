<?php
//routeur function
function routeur($action){
    global $config;
    //check if the action exists on the config file
    if (!array_key_exists($action, $config['routes']))
        die('action ill&eacute;gale');

    //inclusion actiongroup
    $controller_path= 'actiongroups/'.$config['routes'][$action].'Controller.php';
    if (is_readable($controller_path))
        include ($controller_path);
    else
        die('le fichier '.$controller_path." est inexistant ou innaccessible");
}
?>