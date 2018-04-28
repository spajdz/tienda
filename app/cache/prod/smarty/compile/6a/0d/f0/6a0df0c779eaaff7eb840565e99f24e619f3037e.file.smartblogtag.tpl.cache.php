<?php /* Smarty version Smarty-3.1.19, created on 2018-04-28 12:08:31
         compiled from "modules\smartblogtag\views\templates\front\smartblogtag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60955ae48e6fa67ed2-70566734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a0df0c779eaaff7eb840565e99f24e619f3037e' => 
    array (
      0 => 'modules\\smartblogtag\\views\\templates\\front\\smartblogtag.tpl',
      1 => 1520487163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60955ae48e6fa67ed2-70566734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae48e6fbb1539_47403296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae48e6fbb1539_47403296')) {function content_5ae48e6fbb1539_47403296($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tags']->value)&&!empty($_smarty_tpl->tpl_vars['tags']->value)) {?>
<div  id="tags_blog_block_left"  class="block block-blog tags_block">
    <h4 class="text-uppercase h6 hidden-sm-down"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Tags Post','mod'=>'smartblogtag'),$_smarty_tpl);?>
</a></h4>
    <div class="block_content">
            <?php  $_smarty_tpl->tpl_vars["tag"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["tag"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["tag"]->key => $_smarty_tpl->tpl_vars["tag"]->value) {
$_smarty_tpl->tpl_vars["tag"]->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['tag'] = urlencode($_smarty_tpl->tpl_vars['tag']->value['name']);?>
                <?php if ($_smarty_tpl->tpl_vars['tag']->value!='') {?>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape(smartblog::GetSmartBlogLink('smartblog_tag',$_smarty_tpl->tpl_vars['options']->value),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>  
                <?php }?>
            <?php } ?>
   </div>
</div>
<?php }?><?php }} ?>
