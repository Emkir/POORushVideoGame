<?php
interface BloodElfInterface
{
    public function addObject(Object $object);


    //Inflige 50 dégats et réduit les stats de 5 points 
    public function bloodDrown(Player $enemy);

    //Inflige 30 degats et reduit les stats de 15
    public function frenzy(Player $enemy);

}
?>
