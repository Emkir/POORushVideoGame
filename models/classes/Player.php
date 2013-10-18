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

        public function save($character){

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

    }
?>