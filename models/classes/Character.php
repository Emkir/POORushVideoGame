<?php

class Character extends Table implements CharacterInterface{

    protected $inventory = array();
    protected $strength = 100;
    protected $health = 500;
    protected $intelligence = 100;

    public function __construct(){
        $this->tableName = 'characters';
        parent::__construct();
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
    public function getStrength(){
        return $this->strength;
    }
    public function getIntelligence(){
        return $this->intelligence;
    }
    public function getHealth(){
        return $this->health;
    }


    //Cause des dégats a l'adversaire equivalents à la force (+ bonus)
    public function attack(Character $enemy){

    }

    //se soigne d'un montant egal a l'intellligence
    public function heal(){
        $this->health += $this->intelligence;
    }

    //reduit de 75% les prochains dégats subis
    public function defend(){

    }
}

?>