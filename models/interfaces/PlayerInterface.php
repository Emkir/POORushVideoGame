<?php

	interface Player {

		//Cause des dégats a l'adversaire equivalents à la force (+ bonus)
	    public function attack(Player $enemy);

	    //se soigne d'un montant egal a l'intellligence
	    public function heal();

	    //reduit de 75% les prochains dégats subis
	    public function defend();

	}

?>