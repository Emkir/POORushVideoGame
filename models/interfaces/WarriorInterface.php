<?php
interface WarriorInterface {

    public function addObject(Object $object);


//Attaque plus puissante (200)
	public function powerfulHit(Player $enemy);

	//Evite l'attaque
	public function dizziness(Player $enemy);
}
?>