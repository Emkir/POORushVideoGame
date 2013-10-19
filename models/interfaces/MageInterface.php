<?php

	interface MageInterface {

        public function addObject(Object $object);


		// Inflige 325 de dégats
		public function fireBall(Player $enemy);

		/* Réduit les stats de l'ennemi */
		public function reduceStat(Player $enemy);

	}

?>