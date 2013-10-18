<?php /* Smarty version Smarty-3.1.13, created on 2013-10-18 23:06:13
         compiled from ".\views\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22225261aa087dab33-51041678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27fefb46790a818554fa24fc88f8cc40ebb877e7' => 
    array (
      0 => '.\\views\\main.tpl',
      1 => 1382099823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22225261aa087dab33-51041678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5261aa08891839_31118388',
  'variables' => 
  array (
    'template' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5261aa08891839_31118388')) {function content_5261aa08891839_31118388($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ((('templates/').($_smarty_tpl->tpl_vars['template']->value)).('.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>