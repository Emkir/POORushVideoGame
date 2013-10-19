<?php /* Smarty version Smarty-3.1.13, created on 2013-10-19 02:29:22
         compiled from "templates\game.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205115261c5fbc52758-38966632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342471134fa889cbac88b0960047c24d2d3c5a5f' => 
    array (
      0 => 'templates\\game.tpl',
      1 => 1382149758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205115261c5fbc52758-38966632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5261c5fbd477e6_38424878',
  'variables' => 
  array (
    'perso1' => 0,
    'nickname1' => 0,
    'health_p1' => 0,
    'strength_p1' => 0,
    'intel_p1' => 0,
    'finish' => 0,
    'player1' => 0,
    'player2' => 0,
    'perso2' => 0,
    'nickname2' => 0,
    'health_p2' => 0,
    'strength_p2' => 0,
    'intel_p2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5261c5fbd477e6_38424878')) {function content_5261c5fbd477e6_38424878($_smarty_tpl) {?><div>
 <div>
	Joueur 1 - <?php echo $_smarty_tpl->tpl_vars['perso1']->value;?>
<br>
	Pseudo : <?php echo $_smarty_tpl->tpl_vars['nickname1']->value;?>
<br>
	Sant&eacute; : <?php echo $_smarty_tpl->tpl_vars['health_p1']->value;?>
<br>
	Force : <?php echo $_smarty_tpl->tpl_vars['strength_p1']->value;?>
<br>
	Intelligence : <?php echo $_smarty_tpl->tpl_vars['intel_p1']->value;?>
<br> 
	<div <?php if (isset($_smarty_tpl->tpl_vars['finish']->value)){?>hidden<?php }?> >
		<a href="index.php?action=gameAction&amp;player1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;player2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;attacker=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;defender=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;gameAction=attack"><button>Attaquer</button></a>
		<a href="index.php?action=gameAction&amp;player1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;player2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;healed=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;gameAction=heal"><button>Se soigner</button></a>
		<a href="index.php?action=gameAction&amp;player1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;player2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;protect=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;gameAction=protect"><button>Se prot&eacute;ger</button></a>
		<a href="index.php?action=gameAction&amp;player1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;player2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;special1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;defender=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;gameAction=special1"><button>Sp&eacute;cial 1</button></a>
		<a href="index.php?action=gameAction&amp;player1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;player2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;special2=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;defender=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;gameAction=special2"><button>Sp&eacute;cial 2</button></a>
	</div>
</div>
	<br><br>

 <div>
	Joueur 2 - <?php echo $_smarty_tpl->tpl_vars['perso2']->value;?>
<br>
	Pseudo : <?php echo $_smarty_tpl->tpl_vars['nickname2']->value;?>
<br>
	Sant&eacute; : <?php echo $_smarty_tpl->tpl_vars['health_p2']->value;?>
<br>
	Force : <?php echo $_smarty_tpl->tpl_vars['strength_p2']->value;?>
<br>
	Intelligence : <?php echo $_smarty_tpl->tpl_vars['intel_p2']->value;?>
<br>
	<div <?php if (isset($_smarty_tpl->tpl_vars['finish']->value)){?>hidden<?php }?> > 
		<a href="index.php?action=gameAction&amp;player1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;player2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;attacker=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;defender=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;gameAction=attack"><button>Attaquer</button></a>
		<a href="index.php?action=gameAction&amp;player1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;player2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;healed=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;gameAction=heal"><button>Se soigner</button></a>
		<a href="index.php?action=gameAction&amp;player1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;player2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;protect=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;gameAction=protect"><button>Se prot&eacute;ger</button></a>
		<a href="index.php?action=gameAction&amp;player1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;player2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;special1=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;defender=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;gameAction=special1"><button>Sp&eacute;cial 1</button></a>
		<a href="index.php?action=gameAction&amp;player1=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;player2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;special2=<?php echo $_smarty_tpl->tpl_vars['player2']->value;?>
&amp;defender=<?php echo $_smarty_tpl->tpl_vars['player1']->value;?>
&amp;gameAction=special2"><button>Sp&eacute;cial 2</button></a>
	</div>
 </div>
<?php if (isset($_smarty_tpl->tpl_vars['finish']->value)){?>
    <p><strong><?php echo $_smarty_tpl->tpl_vars['finish']->value;?>
</strong></p>
<?php }?>
<a href="index.php?action=newGame"><button>Nouvelle partie</button></a>

 

<?php }} ?>