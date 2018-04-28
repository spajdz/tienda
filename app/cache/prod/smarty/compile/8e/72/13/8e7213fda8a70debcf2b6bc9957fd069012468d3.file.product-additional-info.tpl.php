<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 21:47:45
         compiled from "C:\wamp64\www\prestashop\themes\classic\templates\catalog\_partials\product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282465a9f36b13d02e5-65941426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e7213fda8a70debcf2b6bc9957fd069012468d3' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1520305325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282465a9f36b13d02e5-65941426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f36b13d9915_95394932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f36b13d9915_95394932')) {function content_5a9f36b13d9915_95394932($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
