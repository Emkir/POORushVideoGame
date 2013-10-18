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

		public function fireBall(Player $enemy){

            /* on calcule l'attaque */
            $atkPower = 325;

            /* on récupère la vie de l'ennemi */
            $health = $enemy->player_health;

            /* on vérifie si il se protège */
            if($enemy->player_protection == true){
                $atkPower = $atkPower * 0.25;
                $enemy->player_protection = false;
            }

            /* on calcule la nouvelle vie de l'ennemi */
            $remainLife = $health - $atkPower;

            /* on le set */
            $enemy->player_health = $remainLife;
		}

		/* Récupère 250 de santé */
		public function firstAid(){
            $this->player_health += 250;
		}

	}

?>