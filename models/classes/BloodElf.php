<?php
class BloodElf extends Character implements BloodElfInterface {
    CONST type = 'Blood Elf';

    public function __construct(){
        $this->health += 400;
        $this->intelligence -= 60;
        parent::__construct();
    }

    public function getType(){
        return self::type;
    }

    //Perd 250 de santé et paralyse l'ennemi pour un tour
    public function bloodDrown(Character $enemy){

    }
    //Annule les dégâts de la prochaine attaque et se soigne pour 25% des dégâts bloqués
    public function frenzy(Character $enemy){

    }
}