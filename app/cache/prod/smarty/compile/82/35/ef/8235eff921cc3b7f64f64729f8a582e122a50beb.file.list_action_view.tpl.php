<?php /* Smarty version Smarty-3.1.19, created on 2018-03-08 02:35:48
         compiled from "C:\wamp64\www\prestashop\adminqq\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135405aa0cbb49f75a2-78219020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8235eff921cc3b7f64f64729f8a582e122a50beb' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminqq\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1520305313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135405aa0cbb49f75a2-78219020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa0cbb4aae897_59823911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0cbb4aae897_59823911')) {function content_5aa0cbb4aae897_59823911($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
