<?php /* Smarty version Smarty-3.1.19, created on 2018-03-08 02:32:50
         compiled from "C:\wamp64\www\prestashop\modules\smartblog\views\templates\admin\addjs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148025aa0cb02795cb5-90237648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f870b9cc033221143138ebe9b1e3f34dddf564ee' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\smartblog\\views\\templates\\admin\\addjs.tpl',
      1 => 1520482087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148025aa0cb02795cb5-90237648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartmodules_dir' => 0,
    'PS_ALLOW_ACCENTED_CHARS_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa0cb028ee520_06857930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0cb028ee520_06857930')) {function content_5aa0cb028ee520_06857930($_smarty_tpl) {?><style>
.icon-AdminSmartBlog:before{
  content: "\f14b";
   }
 
</style>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['smartmodules_dir']->value;?>
modules/smartblog/views/css/bootstrap-grid.css">
<script type="text/javascript">
		<?php if (isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value)&&$_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }?>
</script><?php }} ?>
