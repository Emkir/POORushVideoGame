<?php
    class Player extends Table{
        public $character;
        protected $id_player;
        protected $player_health;
        protected $player_intelligence;
        protected $player_strength;
        protected $player_protection = false;
        protected $player_ability_1 = false;
        protected $player_ability_2 = false;

        public function __construct(){
            $this->tableName = 'players';
            parent::__construct();
        }

        public function hydrate()
        {
            parent::hydrate();

            if ($this->id_character != null)
            {
                $this->character = new Character;
                $this->character->id_character = $this->id_character;
                $this->character->hydrate();
            }
        }

        public function savePlayer(Character $character){

            if(is_null($this->player_health)){
                $this->player_health = $character->getHealth();
            }
            if(is_null($this->player_strength)){
                $this->player_strength = $character->getStrength();
            }
            if(is_null($this->player_intelligence)){
                $this->player_intelligence = $character->getIntelligence();
            }

            parent::save();

        }

         //Cause des dégats a l'adversaire equivalents à la force (+ bonus)
        public function attack(Player $enemy){
            
            /* on calcule l'attaque */
            $atkPower = $this->strength;

            /* on récupère la vie de l'ennemi */
            $health = $enemy->health;

            /* on vérifie si il se protège */
            if($enemy->protection == 1){
                $atkPower = $atkPower * 0.25;
                $enemy->setProtection(0);
            }

            /* on calcule la nouvelle vie de l'ennemi */
            $remainLife = $health - $atkPower;

            /* on le set */
            $enemy->health = $remainLife;

        }

        //se soigne d'un montant egal a l'intellligence
        public function heal(){
            $this->health += $this->intelligence;
        }

        //reduit de 75% les prochains dégats subis
        public function defend(){
            $this->protection = 1;
        }

    }
?>