<?php

interface CharacterInterface
{
    /*
    *	SETTER
    */
    public function setName($name);
    public function setStrength($strengh);
    public function setIntelligence($intelligence);
    public function setHealth($hp);

    /*
    *	GETTER
    */
    public function getName();
    public function getStrength();
    public function getIntelligence();
    public function getHealth();

    //
    public function attack(Player $enemy);
    public function heal();
    public function defend();
}

?>