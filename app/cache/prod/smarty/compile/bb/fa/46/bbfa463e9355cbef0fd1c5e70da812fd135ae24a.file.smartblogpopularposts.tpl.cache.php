<?php /* Smarty version Smarty-3.1.19, created on 2018-04-28 12:08:29
         compiled from "modules\smartblogpopularposts\views\templates\front\smartblogpopularposts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56805ae48e6de12e74-61004362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbfa463e9355cbef0fd1c5e70da812fd135ae24a' => 
    array (
      0 => 'modules\\smartblogpopularposts\\views\\templates\\front\\smartblogpopularposts.tpl',
      1 => 1520487139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56805ae48e6de12e74-61004362',
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
  'unifunc' => 'content_5ae48e6e0a96f7_36830337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae48e6e0a96f7_36830337')) {function content_5ae48e6e0a96f7_36830337($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp64\\www\\prestashop\\vendor\\prestashop\\smarty\\plugins\\modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&!empty($_smarty_tpl->tpl_vars['posts']->value)) {?>
<div class="block block-blog blogModule boxPlain">
   <h4 class="text-uppercase h6 hidden-sm-down"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Popular Articles','mod'=>'smartblogpopularposts'),$_smarty_tpl);?>
</a></h4>
   <div class="block_content sdsbox-content">
      <ul class="popularArticles">
            <?php  $_smarty_tpl->tpl_vars["post"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["post"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["post"]->key => $_smarty_tpl->tpl_vars["post"]->value) {
$_smarty_tpl->tpl_vars["post"]->_loop = true;
?>

            <li>
		<a class="image"
		    title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
">
			<img alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
"
		src="<?php if ($_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],'home-small')!='false') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],'home-small'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="overflow: hidden;">
				</a>

         <a class="title paddleftreleted"  title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id_smart_blog_post'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['meta_title'], ENT_QUOTES, 'UTF-8');?>
</a>
	      <span class="info"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['created'],"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>
</span>
	    </li> 
	<?php } ?>
      </ul>
   </div>
   <div class="box-footer"><span></span></div>
</div>
<?php }?><?php }} ?>
