<?php /* Smarty version Smarty-3.1.19, created on 2018-03-08 02:40:10
         compiled from "C:\wamp64\www\prestashop\modules\smartblog\views\templates\admin\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141655aa0ccba5ea9f1-98429440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f80b36339fdfb7f9a7647c7b3bf9e66a7a82c62' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\smartblog\\views\\templates\\admin\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1515641844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141655aa0ccba5ea9f1-98429440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa0ccba79fd50_20763698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0ccba79fd50_20763698')) {function content_5aa0ccba79fd50_20763698($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
