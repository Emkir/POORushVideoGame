<?php
// config['routes'] liste les actions legales
// et le sous-controllers correspondant
$config['routes'] = array(
    "newGame" => "game",
    "startGame" => "game",
    "actionGame" => "game",
);

//action par defaut
$config['defaults']['action'] = "newGame";

?>