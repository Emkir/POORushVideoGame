<?php /* Smarty version Smarty-3.1.13, created on 2013-10-18 09:57:39
         compiled from "templates\game.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2260552610613721198-39598254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '342471134fa889cbac88b0960047c24d2d3c5a5f' => 
    array (
      0 => 'templates\\game.tpl',
      1 => 1382090012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2260552610613721198-39598254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'character1' => 0,
    'nickname1' => 0,
    'character2' => 0,
    'nickname2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5261061373bca1_82382275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5261061373bca1_82382275')) {function content_5261061373bca1_82382275($_smarty_tpl) {?><div>
 <table>
	Joueur 1 - <?php echo $_smarty_tpl->tpl_vars['character1']->value;?>
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
	Joueur 2 - <?php echo $_smarty_tpl->tpl_vars['character2']->value;?>
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