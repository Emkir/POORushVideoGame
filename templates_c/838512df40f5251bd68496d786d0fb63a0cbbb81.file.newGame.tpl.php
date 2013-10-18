<?php /* Smarty version Smarty-3.1.13, created on 2013-10-18 16:08:01
         compiled from "templates\newGame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3112652615ce16b1927-79729433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838512df40f5251bd68496d786d0fb63a0cbbb81' => 
    array (
      0 => 'templates\\newGame.tpl',
      1 => 1382097359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3112652615ce16b1927-79729433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'characters' => 0,
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52615ce17e0be1_65852366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52615ce17e0be1_65852366')) {function content_52615ce17e0be1_65852366($_smarty_tpl) {?><form action="index.php?action=startGame" method="post">
    <div>
        Joueur 1 :<br>
        Votre pseudo : <input type="text" name="nickname1"><br>
        Votre personnage : 
         <select name="character1">
            <?php  $_smarty_tpl->tpl_vars['object'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['object']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['characters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['object']->key => $_smarty_tpl->tpl_vars['object']->value){
$_smarty_tpl->tpl_vars['object']->_loop = true;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['object']->value->id_character;?>
><?php echo $_smarty_tpl->tpl_vars['object']->value->name;?>
</option>
            <?php } ?>
        </select><br>
    </div>
    <div>
        Joueur 2 :<br>
        Votre pseudo : <input type="text" name="nickname2"><br>
        Votre personnage : 
         <select name="character2">
            <?php  $_smarty_tpl->tpl_vars['object'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['object']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['characters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['object']->key => $_smarty_tpl->tpl_vars['object']->value){
$_smarty_tpl->tpl_vars['object']->_loop = true;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['object']->value->id_character;?>
><?php echo $_smarty_tpl->tpl_vars['object']->value->name;?>
</option>
            <?php } ?>
        </select><br>
        <input type="submit" name="submit" value="Start!" >
    </div>
</form><?php }} ?>