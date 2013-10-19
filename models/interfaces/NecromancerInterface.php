<?php

interface NecromancerInterface{

    public function addObject(Object $object);


//Met des dégats en fonction de la force adverse (0.5)
	public function damageStat(Player $enemy);

//Inflige 1/3 de la vie de l'adversaire sans tenir compte de la protection
	public function strengthOfLife(Player $enemy);

}
?>