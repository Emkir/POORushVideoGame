<?php
class Barbarian extends Character implements BarbarianInterface{
    CONST type = 'Barbarian';

    public function __construct(){
        $this->strength += 100;
        $this->intelligence -= 70;
        $objectBarbarian = new Object('Masse lourde',15,'strength');
        $this->addObject($objectBarbarian);
        parent::__construct();
    }

    public function getType(){
        return self::type;
    }

    public function addObject(Object $object){
        $bonus=($this->{$object->getFeature()}/100)*$object->getBonus();
        $this->{$object->getFeature()} += $bonus;
    }

    //Tape deux fois avec 75% de sa force
    public function rage(Player $enemy){
        /* on calcule l'attaque */
        $atkPower = $this->player_strength * 1.5;

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

    //Effraie l'enemi lui faisant perdre 250 de santé
    public function roar(Player $enemy){
        $atkPower = 250;

        /* on récupère la vie de l'ennemi */
        $health = $enemy->player_health;

        /* on vérifie si il se protège */
        if($enemy->player_protection == 1){
            $atkPower = 250 * 0.25;
            $enemy->player_protection = 0;
        }

        /* on calcule la nouvelle vie de l'ennemi */
        $remainLife = $health - $atkPower;

        /* on le set */
        $enemy->player_health = $remainLife;
    }
}

?>