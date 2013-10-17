<?php

interface CharacterInterface
{
    /*
    *	SETTER
    */
    public function setName($name);
    public function setStrength($strength);
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
    public function attack(Character $enemy);
    public function heal();
    public function defend();
}

?>