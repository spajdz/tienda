<?php /* Smarty version Smarty-3.1.19, created on 2018-03-08 02:35:48
         compiled from "C:\wamp64\www\prestashop\modules\smartblog\views\templates\admin\breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205995aa0cbb47f7271-11135863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae38b70ab9d40e32a9b8efec5456bbf4e6295a0a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\smartblog\\views\\templates\\admin\\breadcrumb.tpl',
      1 => 1515641844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205995aa0cbb47f7271-11135863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartblog_breadcrumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa0cbb48578e0_28431315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0cbb48578e0_28431315')) {function content_5aa0cbb48578e0_28431315($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['smartblog_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['smartblog_breadcrumb']->value;?>

	</ul>
<?php }?><?php }} ?>
