<?php /* Smarty version Smarty-3.1.19, created on 2018-03-08 02:37:38
         compiled from "modules\smartblog\views\templates\front\plugins\blogfeedheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290855aa0cc22db4dc3-50711017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6f914495b43f349b11e31b90d209d61f51bae7d' => 
    array (
      0 => 'modules\\smartblog\\views\\templates\\front\\plugins\\blogfeedheader.tpl',
      1 => 1515641844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290855aa0cc22db4dc3-50711017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
    'meta_keyword' => 0,
    'meta_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa0cc22e340a4_18094722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0cc22e340a4_18094722')) {function content_5aa0cc22e340a4_18094722($_smarty_tpl) {?>

<link rel="alternate" type="application/rss+xml" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['meta_title']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feedUrl']->value, ENT_QUOTES, 'UTF-8');?>
" />


  <meta name="title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keyword']->value, ENT_QUOTES, 'UTF-8');?>
">
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }} ?>
