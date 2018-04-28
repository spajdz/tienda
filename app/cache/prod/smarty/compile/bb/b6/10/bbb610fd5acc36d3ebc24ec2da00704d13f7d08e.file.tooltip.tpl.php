<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:20:16
         compiled from "C:\wamp64\www\prestashop\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306755a9f4c60cd0cd8-98269672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb610fd5acc36d3ebc24ec2da00704d13f7d08e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1520305324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306755a9f4c60cd0cd8-98269672',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f4c60cdda81_77310572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f4c60cdda81_77310572')) {function content_5a9f4c60cdda81_77310572($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
