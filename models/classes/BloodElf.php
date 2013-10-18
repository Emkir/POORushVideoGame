<?php
class BloodElf extends Character implements BloodElfInterface {
    CONST type = 'Blood Elf';

    public function __construct(){
        $this->health += 400;
        $this->intelligence -= 60;
        $objectBloodElf = new Object('Dague',10,'strength');
        $this->addObject($objectBloodElf);
        parent::__construct();
    }

    public function getType(){
        return self::type;
    }

    public function addObject(Object $object){
        $bonus=($this->{$object->getFeature()}/100)*$object->getBonus();
        $this->{$object->getFeature()} += $bonus;
    }

    //Inflige 50 dégats et réduit les stats de 5 points 
    public function bloodDrown(Player $enemy){

        /* on calcule l'attaque */
        $atkPower = 50;

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

        /* on reduit les stats */
        $enemy->player_strength -= 5;
        $enemy->player_intelligence -= 5;
    }

    //Inflige 30 degats et reduit les stats de 10
    public function frenzy(Player $enemy){
        /* on calcule l'attaque */
        $atkPower = 30;

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

        /* on reduit les stats */
        $enemy->player_strength -= 10;
        $enemy->player_intelligence -= 10;

    }
}