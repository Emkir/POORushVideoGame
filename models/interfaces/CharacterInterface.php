<?php

interface CharacterInterface
{
    /*
    *	SETTER
    */
    public function setStrength($strength);
    public function setIntelligence($intelligence);
    public function setHealth($hp);

    /*
    *	GETTER
    */
    public function getStrength();
    public function getIntelligence();
    public function getHealth();

}

?>