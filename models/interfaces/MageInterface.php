<?php

	interface MageInterface {

        public function addObject(Object $object);


		/* la  boule de feu => 1 tour de chargement puis tape 300 dégats */
		public function fireBall(Character $enemy);

		/* premiers soins => rend 250 PV */
		public function firstAid();

	}

?>