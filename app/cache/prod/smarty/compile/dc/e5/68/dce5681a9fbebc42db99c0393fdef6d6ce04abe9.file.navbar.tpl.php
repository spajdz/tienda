<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:20:16
         compiled from "C:\wamp64\www\prestashop\modules\welcome\views\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155245a9f4c60c1a765-38174196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dce5681a9fbebc42db99c0393fdef6d6ce04abe9' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\welcome\\views\\navbar.tpl',
      1 => 1520305324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155245a9f4c60c1a765-38174196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'percent_rounded' => 0,
    'percent_real' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f4c60c5ee14_22391305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f4c60c5ee14_22391305')) {function content_5a9f4c60c5ee14_22391305($_smarty_tpl) {?>

<div class="onboarding-navbar">
  <div class="row text">
    <div class="col-md-8">
      <?php echo smartyTranslate(array('s'=>'Launch your shop!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

    </div>
    <div class="col-md-4 text-right text-md-right"><?php echo $_smarty_tpl->tpl_vars['percent_rounded']->value;?>
%</div>
  </div>
  <div class="progress">
    <div class="bar" role="progressbar" style="width:<?php echo $_smarty_tpl->tpl_vars['percent_real']->value;?>
%;"></div>
  </div>
  <div>
    <button class="btn btn-main btn-sm onboarding-button-resume"><?php echo smartyTranslate(array('s'=>'Resume','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
  </div>
  <div>
    <a class="btn -small btn-main btn-sm onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Stop the OnBoarding','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</a>
  </div>
</div>
<?php }} ?>
