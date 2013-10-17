<?php 

class Necromancer extends Character implements NecromancerInterface{
	CONST type = 'Necromancer';

	public function __construct(){
		$this->health += 150;
        parent::__construct();
	}
	
	public function getType(){
		return self::type;
	}

	//
	public function lifeSteal(Character $enemy){}

	//
	public function strengthOfLife(Character $enemy){}
}

?>