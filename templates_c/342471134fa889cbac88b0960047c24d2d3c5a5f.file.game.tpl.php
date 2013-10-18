<?php /* Smarty version Smarty-3.1.13, created on 2013-10-18 10:34:05
         compiled from "templates\game.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3082352610abaa0c756-45194854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342471134fa889cbac88b0960047c24d2d3c5a5f' => 
    array (
      0 => 'templates\\game.tpl',
      1 => 1382092290,
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
    'perso2' => 0,
    'nickname2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52610abaa2bf93_67061947')) {function content_52610abaa2bf93_67061947($_smarty_tpl) {?><div>
 <table>
	Joueur 1 - <?php echo $_smarty_tpl->tpl_vars['perso1']->value;?>
<br>
	Pseudo : <?php echo $_smarty_tpl->tpl_vars['nickname1']->value;?>
<br>
	Sant&eacute; :<br>
	Force :<br>
	Intelligence :<br> 
	<input type="button" value="Attaquer" name="attack1">
	<input type="button" value="Se soigner" name="heal1">
	<input type="button" value="Se prot&eacute;ger" name="protect1">
	<input type="button" value="Sp&eacute;cial 1" name="special1_1">
	<input type="button" value="Sp&eacute;cial 2" name="special1_2"><br/>
	
 </table>

	<br><br>

 <table>
	Joueur 2 - <?php echo $_smarty_tpl->tpl_vars['perso2']->value;?>
<br>
	Pseudo : <?php echo $_smarty_tpl->tpl_vars['nickname2']->value;?>
<br>
	Sant&eacute; :<br>
	Force :<br>
	Intelligence :<br> 
	<input type="button" value="Attaquer" name="attack2">
	<input type="button" value="Se soigner" name="heal2">
	<input type="button" value="Se prot&eacute;ger" name="protect2">
	<input type="button" value="Sp&eacute;cial 1" name="special2_1">
	<input type="button" value="Sp&eacute;cial 2" name="special2_2">
 </table><?php }} ?>