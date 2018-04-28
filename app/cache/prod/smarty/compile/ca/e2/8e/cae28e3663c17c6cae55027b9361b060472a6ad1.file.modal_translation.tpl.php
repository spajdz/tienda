<?php /* Smarty version Smarty-3.1.19, created on 2018-03-07 21:49:15
         compiled from "C:\wamp64\www\prestashop\adminqq\themes\default\template\controllers\modules\modal_translation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136605aa0888b61a014-20568683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cae28e3663c17c6cae55027b9361b060472a6ad1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminqq\\themes\\default\\template\\controllers\\modules\\modal_translation.tpl',
      1 => 1520305311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136605aa0888b61a014-20568683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_languages' => 0,
    'language' => 0,
    'translateLinks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa0888b697936_86186850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0888b697936_86186850')) {function content_5aa0888b697936_86186850($_smarty_tpl) {?>
<div class="modal-body">
	<div class="input-group">
		<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
			<i class="icon-flag"></i>
			<?php echo smartyTranslate(array('s'=>'Manage translations'),$_smarty_tpl);?>

			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
				<li>
					<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['translateLinks']->value[$_smarty_tpl->tpl_vars['language']->value['iso_code']],'html','UTF-8');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['language']->value['name'],'html','UTF-8');?>
</a>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>
<?php }} ?>
