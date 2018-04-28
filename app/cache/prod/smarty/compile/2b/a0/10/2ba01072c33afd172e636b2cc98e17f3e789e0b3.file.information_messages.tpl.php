<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:28:41
         compiled from "C:\wamp64\www\prestashop\adminqq\themes\new-theme\template\components\layout\information_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173175a9f4e596870a9-13919643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ba01072c33afd172e636b2cc98e17f3e789e0b3' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\adminqq\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1520305307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173175a9f4e596870a9-13919643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'informations' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f4e598278b2_88118625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f4e598278b2_88118625')) {function content_5a9f4e598278b2_88118625($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['informations']->value)&&count($_smarty_tpl->tpl_vars['informations']->value)&&$_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['informations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php } ?>
      </ul>
    </div>
  </div>
<?php }?>
<?php }} ?>
