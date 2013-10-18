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

    //Perd 400 de santé et inflige 400 de dégats 
    public function bloodDrown(Player $enemy){
        $this->player_health -= 400;
        /* on calcule l'attaque */
        $atkPower = 400;

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
    //se soigne pour 50% de la force ennemie
    public function frenzy(Player $enemy){
        $enemy_strength = $enemy->player_strength;

        $heal = $enemy_strength * 0.5;

        $this->player_health += $heal;

    }
}