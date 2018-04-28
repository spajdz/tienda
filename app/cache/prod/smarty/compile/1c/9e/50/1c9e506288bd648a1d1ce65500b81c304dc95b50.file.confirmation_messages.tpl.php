<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:28:41
         compiled from "C:\wamp64\www\prestashop\adminqq\themes\new-theme\template\components\layout\confirmation_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172745a9f4e599c5350-47153105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c9e506288bd648a1d1ce65500b81c304dc95b50' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminqq\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1520305307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172745a9f4e599c5350-47153105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmations' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f4e59ba3352_61022767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f4e59ba3352_61022767')) {function content_5a9f4e59ba3352_61022767($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php } ?>
    </div>
  </div>
<?php }?>
<?php }} ?>
