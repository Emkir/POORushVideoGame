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

	// Inflige 150 de force et rend 75 de santé
	public function lifeSteal(Player $enemy){

    }

	//Inflige 250 de force en échange de 150 de santé
	public function strengthOfLife(Player $enemy){

    }
}

?>