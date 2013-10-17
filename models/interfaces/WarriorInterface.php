<?php
interface WarriorInterface {

//Attaque plus puissante (200)
	public function powerfulHit(Character $enemy);

	//Evite l'attaque
	public function dodge();
}
?>