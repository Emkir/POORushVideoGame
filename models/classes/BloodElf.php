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
    public function bloodDrown(Character $enemy){
        $this->health -= 400;

    }
    //Annule les dégâts de la prochaine attaque et se soigne pour 25% des dégâts bloqués
    public function frenzy(Character $enemy){

    }
}