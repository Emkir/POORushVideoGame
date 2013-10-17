<?php
class Barbarian extends Character implements BarbarianInterface{
    CONST type = 'Barbarian';

    public function __construct(){
        $this->strength += 100;
        $this->intelligence -= 70;
        parent::__construct();
    }

    public function getType(){
        return self::type;
    }

    //Tape deux fois avec 75% de sa force
    public function rage(Character $enemy){

    }
    //Réduit la force adverse de 15%
    public function roar(Character $enemy){

    }
}

?>