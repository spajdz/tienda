<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:13:42
         compiled from "C:\wamp64\www\prestashop\themes\classic\templates\checkout\_partials\steps\unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141665a9f4ad61bf958-10327586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cce2cc0a298099802363882a3f8538972253c3b' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1520305326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141665a9f4ad61bf958-10327586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f4ad6218406_56375655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f4ad6218406_56375655')) {function content_5a9f4ad6218406_56375655($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
