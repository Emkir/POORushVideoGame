<?php
    if ($action == 'newGame'){
        $playerTable = new Player;
        $playerTable->deleteAll();
        $characters = new Character();
        $characters->getAll();
        $smarty->assign('characters',$characters->getAll());
        $smarty->assign('template','newGame');
    }
    elseif ($action == 'startGame'){ 
        $player1 = new Player();
        $player1->nickname = $_POST['nickname1'];
        $player1->id_character = $_POST['character1'];
        $character1 = new Character();
        $character1->id_characters = $_POST['character1'];
        $character1->hydrate();
        $characType1=$character1->type;
        $type1 = new $characType1;
        $player1->save($type1);
        //var_dump($character1);
        $perso1 = $character1->getAll('id_characters='.$character1->id_characters);
        //var_dump($perso1[0]->name);
       // $playergame1 = $player1->getAll('id_player='.$player1->id_player);

        //var_dump($playergame1);

        //ASSIGN SMARTY PLAYER 1
        $smarty->assign("nickname1",$_POST['nickname1']);
        $smarty->assign('perso1',$perso1[0]->name);


        $player1->savePlayer($type1);

        var_dump($player1);

        $player2 = new Player();
        $player2->nickname = $_POST['nickname2'];
        $player2->id_character = $_POST['character2'];
        $character2 = new Character();
        $character2->id_characters = $_POST['character2'];
        $character2->hydrate();
        $characType2=$character2->type;
        $type2 = new $characType2;

        $player2->save($type2);
        $perso2 = $character1->getAll('id_characters='.$character2->id_characters);

        //ASSIGN SMARTY PLAYER 2
        $smarty->assign("nickname2",$_POST['nickname2']);
        $smarty->assign('perso2',$perso2[0]->name);

        $player2->savePlayer($type2);
      //  var_dump($player2);
      





        $smarty->assign('template','game');
    }

?>