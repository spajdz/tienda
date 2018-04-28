<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:28:41
         compiled from "C:\wamp64\www\prestashop\adminqq\themes\new-theme\template\components\layout\error_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198685a9f4e5923fd15-83557528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd93a359888d949c3ec0af2a56eaaeec86b87403d' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminqq\\themes\\new-theme\\template\\components\\layout\\error_messages.tpl',
      1 => 1520305307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198685a9f4e5923fd15-83557528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'disableDefaultErrorOutPut' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f4e594a58b6_89432179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f4e594a58b6_89432179')) {function content_5a9f4e594a58b6_89432179($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)&&current($_smarty_tpl->tpl_vars['errors']->value)!=''&&(!isset($_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value)||$_smarty_tpl->tpl_vars['disableDefaultErrorOutPut']->value==false)) {?>
  <div class="bootstrap">
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['errors']->value)==1) {?>
        <?php echo reset($_smarty_tpl->tpl_vars['errors']->value);?>

      <?php } else { ?>
        <?php echo smartyTranslate(array('s'=>'%d errors','sprintf'=>array(count($_smarty_tpl->tpl_vars['errors']->value))),$_smarty_tpl);?>

        <br/>
        <ol>
          <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
          <?php } ?>
        </ol>
      <?php }?>
    </div>
  </div>
<?php }?>
<?php }} ?>
