<?php
    if ($action == 'newGame'){
        // effacer les données de la partie en cours si existe
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
        $player1->save($character1);
        var_dump($player1);

        $player2 = new Player();
        $player2->nickname = $_POST['nickname2'];
        $player2->id_character = $_POST['character2'];
        $character2 = new Character();
        $character2->id_characters = $_POST['character2'];
        $character2->hydrate();
        $player2->save($character2);
        var_dump($player2);
        $smarty->assign('template','game');
    }

?>