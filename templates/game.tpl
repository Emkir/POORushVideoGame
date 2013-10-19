<div>
 <div>
	Joueur 1 - {$perso1}<br>
	Pseudo : {$nickname1}<br>
	<!--Objet &eacute;quip&eacute; :<br>-->
	Sant&eacute; : <span id='health1'>{$health_p1}</span><br>
	Force : <span id='strength1'>{$strength_p1}</span><br>
	Intelligence : <span id='intel1'>{$intel_p1}</span><br> 
	<!--<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;attacker={$player1}&amp;defender={$player2}&amp;gameAction=attack">-->
		<button onclick="dispatch('attack',{$player1},{$player2})">Attaquer</button><!--</a>-->
	<!--<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;healed={$player1}&amp;gameAction=heal">-->
		<button onclick="dispatch('heal',{$player1},{player2})">Se soigner</button><!--</a>-->
	<!--<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;protect={$player1}&amp;gameAction=protect">-->
		<button onclick="dispatch('protect',{$player1},{$player2})">Se prot&eacute;ger</button><!--</a>-->
	<!--<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;special1={$player1}&amp;defender={$player2}&amp;gameAction=special1">-->
		<button onclick="dispatch('special1',{$player1},{$player2})">Sp&eacute;cial 1</button><!--</a>-->
	<!--<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;special2={$player1}&amp;defender={$player2}&amp;gameAction=special2">-->
		<button onclick="dispatch('special2',{$player1},{$player2})">Sp&eacute;cial 2</button><!--</a>-->
</div>
	<br><br>

 <div>
	Joueur 2 - {$perso2}<br>
	Pseudo : {$nickname2}<br>
	<!--Objet &eacute;quip&eacute; :<br>-->
	Sant&eacute; : <span id='health2'>{$health_p2}</span><br>
	Force : <span id='strength2'>{$strength_p2}</span><br>
	Intelligence : <span id='intel2'>{$intel_p2}</span><br> 
	<!--<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;attacker={$player2}&amp;defender={$player1}&amp;gameAction=attack">-->
		<button onclick="dispatch('attack',{$player2},{$player1}">Attaquer</button><!--</a>-->
	<!--<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;healed={$player2}&amp;gameAction=heal">-->
		<button onclick="dispatch('heal',{$player2},{$player1}">Se soigner</button><!--</a>-->
	<!--<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;protect={$player2}&amp;gameAction=protect">-->
		<button onclick="dispatch('protect',{$player2},{$player1}">Se prot&eacute;ger</button></a>
	<!--<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;special1={$player2}&amp;defender={$player1}&amp;gameAction=special1">-->
		<button onclick="dispatch('special1',{$player2},{$player1}">Sp&eacute;cial 1</button><!--</a>-->
	<!--<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;special2={$player2}&amp;defender={$player1}&amp;gameAction=special2">-->
		<button onclick="dispatch('special2',{$player2},{$player1}">Sp&eacute;cial 2</button><!--</a>-->
 </div>

    <a href="index.php?action=newGame"><button>Nouvelle partie</button></a>

 {if isset($finish) }
    {$finish}
 {/if}

