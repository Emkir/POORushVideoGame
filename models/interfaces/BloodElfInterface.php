<?php
interface BloodElfInterface
{
    public function addObject(Object $object);


    //Perd 250 de santé et paralyse l'ennemi pour un tour
    public function bloodDrown(Player $enemy);

    //se soigne pour 50% de la force ennemie
    public function frenzy(Player $enemy);

}
?>
