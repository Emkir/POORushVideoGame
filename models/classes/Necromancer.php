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

	//Met des dégats en fonction de la force adverse (0.5)
	public function damageStat(Player $enemy){

        /* on calcule l'attaque */
        $atkPower = $enemy->player_strength/2;

        /* on récupère la vie de l'ennemi */
        $health = $enemy->player_health;

        /* on vérifie si il se protège */
        if($enemy->player_protection == 1){
            $atkPower = $atkPower * 0.25;
            $enemy->player_protection = 0;
        }

        /* on calcule la nouvelle vie de l'ennemi */
        $remainLife = $health - $atkPower;

        /* on le set */
        $enemy->player_health = $remainLife;

    }

	//Inflige 1/8 de la vie de l'adversaire sans tenir compte de la protection
	public function strengthOfLife(Player $enemy){
        
        /* on récupère la vie de l'ennemi */
        $health = $enemy->player_health;

        /* on calcule l'attaque */
        $atkPower = $health/8;

        /* on vérifie si il se protège */
        if($enemy->player_protection == 1){
            $enemy->player_protection = 0;
        }

        /* on calcule la nouvelle vie de l'ennemi */
        $remainLife = $health - $atkPower;

        /* on le set */
        $enemy->player_health = $remainLife;
    }
}

?>