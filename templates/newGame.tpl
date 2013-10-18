<form action="index.php?action=startGame" method="post">
    <div>
        Joueur 1 :<br>
        Votre pseudo : <input type="text" name="nickname1"><br>
        Votre personnage : 
         <select name="character1">
            {foreach $characters as $object}
                <option value={$object->id_character}>{$object->name}</option>
            {/foreach}
        </select><br>
    </div>
    <div>
        Joueur 2 :<br>
        Votre pseudo : <input type="text" name="nickname2"><br>
        Votre personnage : 
         <select name="character2">
            {foreach $characters as $object}
                <option value={$object->id_character}>{$object->name}</option>
            {/foreach}
        </select><br>
        <input type="submit" name="submit" value="Start!" >
    </div>
</form>