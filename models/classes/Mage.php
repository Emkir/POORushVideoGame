<?php

	/* classe fille pour les mages */
	class Mage extends Character implements MageInterface {

		CONST type = "Mage";

		/* constructeur */
		public function __construct(){

			$this->health -= 150;
			$this->intelligence += 60;
            $objectMage = new Object('Bâton runique',15,'intelligence');
            $this->addObject($objectMage);
            parent::__construct();
		}

		/* get type */
		public function getType(){
			return self::type;
		}

        public function addObject(Object $object){
            $bonus=($this->{$object->getFeature()}/100)*$object->getBonus();
            $this->{$object->getFeature()} += $bonus;
        }

		/* destructeur */
		public function __destruct(){}

		/* capacité 1 */
		// Inflige 325 de dégats
		public function fireBall(Character $enemy){

		}

		/* capacité 2 */
		public function firstAid(){

		}

	}

?>