<?php

class Warrior extends Character implements WarriorInterface{
	CONST type = 'Warrior';

	public function __construct(){
		$this->strength += 30;
		parent::__construct();
	}

	public function getType(){
		return self::type;
	}

	//Attaque plus puissante (200)
	public function powerfulHit(Character $enemy){}

	//Evite l'attaque
	public function dodge(){}

}
?>