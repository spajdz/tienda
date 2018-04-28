<?php /* Smarty version Smarty-3.1.19, created on 2018-04-28 12:08:30
         compiled from "modules\smartblogrecentposts\views\templates\front\smartblogrecentposts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170655ae48e6ec11696-53606599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fafee8c43d1d25333bdf433ce6c28a94dab90614' => 
    array (
      0 => 'modules\\smartblogrecentposts\\views\\templates\\front\\smartblogrecentposts.tpl',
      1 => 1520487147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170655ae48e6ec11696-53606599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'post' => 0,
    'smartbloglink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae48e6eef10e4_09216785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae48e6eef10e4_09216785')) {function content_5ae48e6eef10e4_09216785($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&!empty($_smarty_tpl->tpl_vars['posts']->value)) {?>
<div id="recent_article_smart_blog_block_left"  class="block block-blog blogModule boxPlain">
   <h4 class="text-uppercase h6 hidden-sm-down"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Recent Articles','mod'=>'smartblogrecentposts'),$_smarty_tpl);?>
</a></h4>
   <div class="block_content sdsbox-content">
      <ul class="recentArticles">
        <?php  $_smarty_tpl->tpl_vars["post"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["post"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["post"]->key => $_smarty_tpl->tpl_vars["post"]->value) {
$_smarty_tpl->tpl_vars["post"]->_loop = true;
?>

             <li>
                 <a class="image" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
">
                     <img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" src="<?php if ($_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],'home-small')!='false') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],'home-small'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="overflow: hidden;">
                 </a>
                 <a class="title"  title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
</a>
                  <span class="info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['created'], ENT_QUOTES, 'UTF-8');?>
</span>
             </li>
         <?php } ?>
            </ul>
   </div>
</div>
<?php }?><?php }} ?>
