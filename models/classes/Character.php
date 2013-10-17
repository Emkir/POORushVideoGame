<?php

abstract class Character implements CharacterInterface{
    protected $name;
    protected $inventory = array();
    protected $strength = 100;
    protected $health = 500;
    protected $intelligence = 100;


    public function setName($name){
        $this->name = $name;
    }
    public function setStrength($strength){
        $this->strength = $strength;
    }
    public function setIntelligence($intelligence){
        $this->intelligence = $intelligence;
    }
    public function setHealth($hp){
        $this->health = $hp;
    }

    /*
    *	GETTER
    */
    public function getName(){
        return $this->name;
    }
    public function getStrength(){
        return $this->strength;
    }
    public function getIntelligence(){
        return $this->intelligence;
    }
    public function getHealth(){
        return $this->health;
    }

    //
    public function attack(Player $enemy){

    }
    public function heal(){

    }
    public function defend(){

    }
}

?>