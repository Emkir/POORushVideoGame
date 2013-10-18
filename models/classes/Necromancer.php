<?php 

class Necromancer extends Character implements NecromancerInterface{
	CONST type = 'Necromancer';

	public function __construct(){
		$this->health += 150;
        $objectNecromancer = new Object('Sceau de vie',10,'health');
        $this->addObject($objectNecromancer);
        parent::__construct();
	}
	
	public function getType(){
		return self::type;
	}

    public function addObject(Object $object){
        $bonus=($this->{$object->getFeature()}/100)*$object->getBonus();
        $this->{$object->getFeature()} += $bonus;
    }

	//
	public function lifeSteal(Character $enemy){

    }

	//
	public function strengthOfLife(Character $enemy){

    }
}

?>