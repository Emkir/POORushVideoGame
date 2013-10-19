<?php
    if ($action == 'newGame'){
        $playerTable = new Player;
        $playerTable->deleteAll();
        $characters = new Character();
        $characters->getAll();
        //echo 'GetAll characters<br/>';
       // var_dump($characters);
        $smarty->assign('characters',$characters->getAll());
        $smarty->assign('template','newGame');
    }
    elseif ($action == 'startGame'){
        $stop = false;
        $player1 = new Player();
        $player1->nickname = $_POST['nickname1'];
        $player1->id_character = $_POST['character1'];
        // echo 'Player1_1<br/>';
        //var_dump($player1);
        $character1 = new Character();
        $character1->id_character = $_POST['character1'];
        $character1->hydrate();
      
        $characType1=$character1->type;
        
        //var_dump($characType1);
        //$characTypeObject1=
        $type1 = new $characType1;
        $player1->save($type1);

        
        

      //  echo 'Player1_2<br/>';
        //var_dump($player1);

        $perso1 = $character1->getAll('id_character='.$character1->id_character);
        //var_dump($objectBarbarian);


 
        //var_dump($playergame1);

        $perso1 = $character1->getAll('id_character='.$character1->id_character);


        //ASSIGN SMARTY PLAYER 1
        $smarty->assign("nickname1",$_POST['nickname1']);
        $smarty->assign('perso1',$perso1[0]->name);
        $smarty->assign('player1',$player1->id_player);


        $player1->savePlayer($type1);
        //var_dump($character1->getName());

        $health_p1 = $player1->player_health;
        $strength_p1 = $player1->player_strength;
        $intel_p1 = $player1->player_intelligence;

        $smarty->assign("health_p1",$health_p1);
        $smarty->assign("strength_p1",$strength_p1);
        $smarty->assign("intel_p1",$intel_p1);
        

        $player2 = new Player();
        $player2->nickname = $_POST['nickname2'];
        $player2->id_character = $_POST['character2'];
        $character2 = new Character();
        $character2->id_character = $_POST['character2'];
        $character2->hydrate();
        $characType2=$character2->type;
        $type2 = new $characType2;

        $player2->save($type2);

        

        $perso2 = $character2->getAll('id_character='.$character2->id_character);

        //ASSIGN SMARTY PLAYER 2
        $smarty->assign("nickname2",$_POST['nickname2']);
        $smarty->assign('perso2',$perso2[0]->name);
        $smarty->assign('player2',$player2->id_player);

        $player2->savePlayer($type2);

        $health_p2 = $player2->player_health;
        $strength_p2 = $player2->player_strength;
        $intel_p2 = $player2->player_intelligence;

        $smarty->assign("health_p2",$health_p2);
        $smarty->assign("strength_p2",$strength_p2);
        $smarty->assign("intel_p2",$intel_p2);
        $smarty->assign('template','game');
    }

    elseif($action == "gameAction"){
        $stop=false;


        if ($stop === false){
            /* une attaque */
            if($_GET["gameAction"] == "attack"){
                /* défenseur prends les dégats */
                $defender = new Player();
                $defender->id_player = $_GET["defender"];
                $defender->hydrate();

                /* joueur attaque */
                $player = new Player();
                $player->id_player = $_GET["attacker"];
                $player->hydrate();


                /* l'attaque se passe */
                $player->attack($defender);

                /* on sauvegarde les informations */
                $defender->save();
            }

            /* soin */
            if($_GET["gameAction"] == "heal"){

                /* joueur qui se soigne */
                $player = new Player();
                $player->id_player = $_GET['healed'];
                $player->hydrate();

                /* le joueur se soigne */
                $player->heal();

                /* on sauvegarde les informations */
                $player->save();

            }

            /* soin */
            if($_GET["gameAction"] == "protect"){


                /* joueur qui se defend */
                $player = new Player();
                $player->id_player = $_GET['protect'];
                $player->hydrate();

                /* le joueur se defend */
                $player->defend();

                /* on sauvegarde les informations */
                $player->save();


            }


            /* capacité spéciale 1 */
            if($_GET["gameAction"] == "special1"){

                /* le joueur qui attaque */
                $player = new Player();
                $player->id_player = $_GET['special1'];
                $player->hydrate();

                /* le joueur qui défend (même si pas forcément nécessaire) */
                $defender = new Player();
                $defender->id_player = $_GET["defender"];
                $defender->hydrate();

                /* on verifie l'id du personnage et on utlise la capacité associée */
                if($player->id_character == 1){

                    $perso = new Warrior;
                    $perso->powerfulHit($defender);
                    $defender->save();
                }

                elseif($player->id_character == 2){

                    $perso = new Barbarian;
                    $perso->rage($defender);
                    $defender->save();
                }

                elseif($player->id_character == 3){

                    $perso = new Mage;
                    $perso->fireBall($defender);
                    $defender->save();
                }

                elseif($player->id_character == 4){

                    $perso = new Necromancer;
                    $perso->damageStat($defender);
                    $defender->save();
                }

                elseif($player->id_character == 5){

                    $perso = new BloodElf;
                    $perso->bloodDrown($defender);
                    $defender->save();
                }

            }

           /* capacité spéciale 2 */
            if($_GET["gameAction"] == "special2"){

                /* le joueur qui attaque */
                $player = new Player();
                $player->id_player = $_GET['special2'];
                $player->hydrate();

                /* le joueur qui défend (même si pas forcément nécessaire) */
                $defender = new Player();
                $defender->id_player = $_GET["defender"];
                $defender->hydrate();

                /* on verifie l'id du personnage et on utlise la capacité associée */
                if($player->id_character == 1){

                    $perso = new Warrior;
                    $perso->dizziness($defender);
                    $defender->save();
                }

                elseif($player->id_character == 2){

                    $perso = new Barbarian;
                    $perso->roar($defender);
                    $defender->save();
                }

                elseif($player->id_character == 3){

                    $perso = new Mage;
                    $perso->reduceStat($defender);
                    $defender->save();
                }

                elseif($player->id_character == 4){

                    $perso = new Necromancer;
                    $perso->strengthOfLife($defender);
                    $defender->save();
                }

                elseif($player->id_character == 5){

                    $perso = new BloodElf;
                    $perso->frenzy($defender);
                    $defender->save();
                }

            }
        }


        /*Check if any player has 0 Health point */
        $player1 = new Player();
        $player1->id_player = $_GET["player1"];
        $player1->hydrate();

        $player2 = new Player();
        $player2->id_player = $_GET["player2"];
        $player2->hydrate();
        if($player1->player_health < 1 ){
            $stop = true;
            $smarty->assign('finish','Partie terminée - '.$player1->nickname.' a gagné');
        }
        elseif($player2->player_health < 1){
            $stop = true;
            $smarty->assign('finish','Partie terminée - '.$player2->nickname.' a gagné');
        }
        

        /* INFORMATIONS JOUEUR 1 */

        $player1->hydrate();
        if($player1->player_health < 0){
            $player1->player_health = 0;
        }
        $character1 = new Character();
        $character1->id_character = $player1->id_character;
        $character1->hydrate();

        //ASSIGN SMARTY PLAYER 1

        $smarty->assign("nickname1",$player1->nickname);
        $smarty->assign('perso1',$character1->name);
        $smarty->assign('player1',$player1->id_player);
        $smarty->assign("health_p1",$player1->player_health);
        $smarty->assign("strength_p1",$player1->player_strength);
        $smarty->assign("intel_p1",$player1->player_intelligence);


        /* INFORMATIONS JOUEUR 2 */

        $player2->hydrate();
        if($player2->player_health < 0){
            $player2->player_health = 0;
        }
        $character2 = new Character();
        $character2->id_character = $player2->id_character;
        $character2->hydrate();
       

        //ASSIGN SMARTY PLAYER 2
        $smarty->assign("nickname2",$player2->nickname);
        $smarty->assign('perso2',$character2->name);
        $smarty->assign('player2',$player2->id_player);
        $smarty->assign("health_p2",$player2->player_health);
        $smarty->assign("strength_p2",$player2->player_strength);
        $smarty->assign("intel_p2",$player2->player_intelligence);


        /* on renvoie le template du jeu */
        $smarty->assign('template','game');
    }

?>