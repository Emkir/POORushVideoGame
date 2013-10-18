<?php

interface NecromancerInterface{

    public function addObject(Object $object);


// Inflige 150 de force et rend 75 de santé
	public function lifeSteal(Player $enemy);

//Inflige 250 de force en échange de 150 de santé
	public function strengthOfLife(Player $enemy);

}
?>