<?php

interface BarbarianInterface
{
    public function addObject(Object $object);


    //Tape deux fois avec 75% de sa force
    public function rage(Character $enemy);
    //Réduit la force adverse de 15%
    public function roar(Character $enemy);
}
?>