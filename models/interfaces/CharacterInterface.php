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

    //Cause des dégats a l'adversaire equivalents à la force (+ bonus)
    public function attack(Character $enemy);

    //se soigne d'un montant egal a l'intellligence
    public function heal();

    //reduit de 75% les prochains dégats subis
    public function defend();
}

?>