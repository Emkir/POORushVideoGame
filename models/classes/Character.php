<?php

class Character extends Table implements CharacterInterface{

    protected $inventory = array();
    protected $strength = 100;
    protected $health = 500;
    protected $intelligence = 100;
    protected $name;
    protected $protection;


    public function __construct(){
        $this->tableName = 'characters';
        parent::__construct();
    }

    public function setInventory($object){
        array_push($this->inventory,$object);
       // echo 'là';
       //var_dump($this->inventory);
       //  die("MARCHE SOLAPE");
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
    public function setProtection($protection){
        $this->protection = $protection;
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
    public function getProtection(){
        return $this->protection;
    }


   
}

?>