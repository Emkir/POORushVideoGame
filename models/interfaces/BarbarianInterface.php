<?php

interface BarbarianInterface
{
    public function addObject(Object $object);


    //Tape deux fois avec 75% de sa force
    public function rage(Player $enemy);
    //Effraie l'enemi lui faisant perdre 250 de santé
    public function roar(Player $enemy);
}
?>