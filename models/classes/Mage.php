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

            /* on calcule l'attaque */
            $atkPower = 325;

            /* on récupère la vie de l'ennemi */
            $health = $enemy->health;

            /* on vérifie si il se protège */
            if($enemy->protection == true){
                $atkPower = $atkPower * 0.25;
                $enemy->protection = false;
            }

            /* on calcule la nouvelle vie de l'ennemi */
            $remainLife = $health - $atkPower;

            /* on le set */
            $enemy->health = $remainLife;
		}

		/* Récupère 250 de santé */
		public function firstAid(){
            $this->health += 250;
		}

	}

?>