<?php

class Warrior extends Character implements WarriorInterface{
	CONST type = 'Warrior';
	protected $objectName = 'Bouclier de vie';

	public function __construct(){
		$this->strength += 30;
        $objectWarior = new Object('Bouclier de vie',15,'health');
        $this->addObject($objectWarior);
		parent::setInventory($objectWarior);
		parent::__construct();
	}
	
	public function getObjectName(){
		return $this->objectName;
	}

	public function getType(){
		return self::type;
	}

    public function addObject(Object $object){
        $bonus=($this->{$object->getFeature()}/100)*$object->getBonus();
        $this->{$object->getFeature()} += $bonus;
    }

	//Attaque plus puissante (200)
	public function powerfulHit(Character $enemy){

    }

	//Evite l'attaque
	public function dodge(){

    }

}
?>