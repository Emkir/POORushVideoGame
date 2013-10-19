<div>
 <div>
	Joueur 1 - {$perso1}<br>
	Pseudo : {$nickname1}<br>
	Sant&eacute; : {$health_p1}<br>
	Force : {$strength_p1}<br>
	Intelligence : {$intel_p1}<br> 
	<div {if isset($finish)}hidden{/if} >
		<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;attacker={$player1}&amp;defender={$player2}&amp;gameAction=attack"><button>Attaquer</button></a>
		<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;healed={$player1}&amp;gameAction=heal"><button>Se soigner</button></a>
		<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;protect={$player1}&amp;gameAction=protect"><button>Se prot&eacute;ger</button></a>
		<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;special1={$player1}&amp;defender={$player2}&amp;gameAction=special1"><button>Sp&eacute;cial 1</button></a>
		<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;special2={$player1}&amp;defender={$player2}&amp;gameAction=special2"><button>Sp&eacute;cial 2</button></a>
	</div>
</div>
	<br><br>

 <div>
	Joueur 2 - {$perso2}<br>
	Pseudo : {$nickname2}<br>
	Sant&eacute; : {$health_p2}<br>
	Force : {$strength_p2}<br>
	Intelligence : {$intel_p2}<br>
	<div {if isset($finish)}hidden{/if} > 
		<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;attacker={$player2}&amp;defender={$player1}&amp;gameAction=attack"><button>Attaquer</button></a>
		<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;healed={$player2}&amp;gameAction=heal"><button>Se soigner</button></a>
		<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;protect={$player2}&amp;gameAction=protect"><button>Se prot&eacute;ger</button></a>
		<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;special1={$player2}&amp;defender={$player1}&amp;gameAction=special1"><button>Sp&eacute;cial 1</button></a>
		<a href="index.php?action=gameAction&amp;player1={$player1}&amp;player2={$player2}&amp;special2={$player2}&amp;defender={$player1}&amp;gameAction=special2"><button>Sp&eacute;cial 2</button></a>
	</div>
 </div>
{if isset($finish) }
    <p><strong>{$finish}</strong></p>
{/if}
<a href="index.php?action=newGame"><button>Nouvelle partie</button></a>

 

