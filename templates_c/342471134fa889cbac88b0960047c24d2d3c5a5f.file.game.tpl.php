<?php /* Smarty version Smarty-3.1.13, created on 2013-10-18 14:12:10
         compiled from "templates\game.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3082352610abaa0c756-45194854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342471134fa889cbac88b0960047c24d2d3c5a5f' => 
    array (
      0 => 'templates\\game.tpl',
      1 => 1382103266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3082352610abaa0c756-45194854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52610abaa2bf93_67061947',
  'variables' => 
  array (
    'perso1' => 0,
    'nickname1' => 0,
    'health_p1' => 0,
    'strength_p1' => 0,
    'intel_p1' => 0,
    'perso2' => 0,
    'nickname2' => 0,
    'health_p2' => 0,
    'strength_p2' => 0,
    'intel_p2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52610abaa2bf93_67061947')) {function content_52610abaa2bf93_67061947($_smarty_tpl) {?><div>
 <table>
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
	<input type="button" value="Attaquer" name="attack1">
	<input type="button" value="Se soigner" name="heal1">
	<input type="button" value="Se prot&eacute;ger" name="protect1">
	<input type="button" value="Sp&eacute;cial 1" name="special1_1">
	<input type="button" value="Sp&eacute;cial 2" name="special1_2"><br>
 </table>

	<br><br>

 <table>
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
	<input type="button" value="Attaquer" name="attack2">
	<input type="button" value="Se soigner" name="heal2">
	<input type="button" value="Se prot&eacute;ger" name="protect2">
	<input type="button" value="Sp&eacute;cial 1" name="special2_1">
	<input type="button" value="Sp&eacute;cial 2" name="special2_2">
 </table>

 <?php if ($_smarty_tpl->tpl_vars['health_p1']->value==0||$_smarty_tpl->tpl_vars['health_p2']->value==0){?>
 Partie termin&eacute;e !
 <?php }?>
<?php }} ?>