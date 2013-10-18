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

	//Inflige 150 force et donne 75 santé
	public function lifeSteal(Player $enemy){

        /* on calcule l'attaque */
        $atkPower = 150;

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

        /* On met à jour la vie du joueur */
        $this->player_health += 75;
    }

	//Inflige 250 force et enlève 150 santé
	public function strengthOfLife(Player $enemy){
        /* on calcule l'attaque */
        $atkPower = 250;

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

        /* On met à jour la vie du joueur */
        $this->player_health -= 150;
    }
}

?>