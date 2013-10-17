<?php

	/* classe fille pour les mages */
	class Mage extends Character implements MageInterface {

		CONST type = "Mage";

		/* constructeur */
		public function __construct(){

			$this->health -= 150;
			$this->intelligence += 60;
		}

		/* get type */
		public function getType(){
			return self::type;
		}

		/* destructeur */
		public function __destruct(){}

		/* capacité 1 */
		public function fireBall(){

		}

		/* capacité 2 */
		public function firstAid(){

		}

	}

?>