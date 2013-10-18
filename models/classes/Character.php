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


    //Cause des dégats a l'adversaire equivalents à la force (+ bonus)
    public function attack(Character $enemy){
        
        /* on calcule l'attaque */
        $atkPower = $this->strength;

        /* on récupère la vie de l'ennemi */
        $health = $enemy->health;

        /* on vérifie si il se protège */
        if($enemy->protection == 1){
            $atkPower = $atkPower * 0.25;
            $enemy->setProtection(0);
        }

        /* on calcule la nouvelle vie de l'ennemi */
        $remainLife = $health - $atkPower;

        /* on le set */
        $enemy->health = $remainLife;

    }

    //se soigne d'un montant egal a l'intellligence
    public function heal(){
        $this->health += $this->intelligence;
    }

    //reduit de 75% les prochains dégats subis
    public function defend(){
        $this->protection = 1;
    }
}

?>