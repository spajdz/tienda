<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:20:16
         compiled from "C:\wamp64\www\prestashop\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312455a9f4c60c79790-24799277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0028476fb8d3be3bccaef8e2af72d8cdf1da7db1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1520305324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312455a9f4c60c79790-24799277',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f4c60ca1627_68870831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f4c60ca1627_68870831')) {function content_5a9f4c60ca1627_68870831($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
