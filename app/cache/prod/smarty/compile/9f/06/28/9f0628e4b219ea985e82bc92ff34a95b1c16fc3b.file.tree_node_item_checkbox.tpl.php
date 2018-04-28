<?php /* Smarty version Smarty-3.1.19, created on 2018-03-08 02:40:10
         compiled from "C:\wamp64\www\prestashop\modules\smartblog\views\templates\admin\helpers\tree\tree_node_item_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130485aa0ccbaa9ce54-43485651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f0628e4b219ea985e82bc92ff34a95b1c16fc3b' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\smartblog\\views\\templates\\admin\\helpers\\tree\\tree_node_item_checkbox.tpl',
      1 => 1515641844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130485aa0ccbaa9ce54-43485651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa0ccbab35c69_12649058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0ccbab35c69_12649058')) {function content_5aa0ccbab35c69_12649058($_smarty_tpl) {?>

<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">       
	<span class="tree-item-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-name-disable<?php }?>">
		<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
