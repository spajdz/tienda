<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:20:16
         compiled from "C:\wamp64\www\prestashop\adminqq\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226195a9f4c602748e5-71008727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61de222c8de48cff674595aa51850e6c03fd0d16' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminqq\\themes\\default\\template\\content.tpl',
      1 => 1520305310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226195a9f4c602748e5-71008727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f4c6029aa78_88886579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f4c6029aa78_88886579')) {function content_5a9f4c6029aa78_88886579($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
