<?php
interface WarriorInterface {

    public function addObject(Object $object);


	//Attaque plus puissante (200)
	public function powerfulHit(Player $enemy);

	//!inflige 20% de force et -5 pts d'int
	public function dizziness(Player $enemy);
}
?>