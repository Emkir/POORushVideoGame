<?php
interface WarriorInterface {

    public function addObject(Object $object);


//Attaque plus puissante (200)
	public function powerfulHit(Character $enemy);

	//Evite l'attaque
	public function dodge();
}
?>