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

<<<<<<< HEAD
    //
    public function attack(Character $enemy);
=======
    //Cause des dégats a l'adversaire equivalents à la force (+ bonus)
    public function attack(Character $enemy);

    //se soigne d'un montant egal a l'intellligence
>>>>>>> fef91641e637984507095681e4dfd0cca4806bcc
    public function heal();

    //reduit de 75% les prochains dégats subis
    public function defend();
}

?>