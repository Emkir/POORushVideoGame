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
    public function rage(Character $enemy){

    }
    //Effraie l'enemi lui faisant perdre 250 de santé
    public function roar(Character $enemy){

    }
}

?>