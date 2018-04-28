<?php /* Smarty version Smarty-3.1.19, created on 2018-03-08 02:37:39
         compiled from "modules\smartbloghomelatestnews\views\templates\front\smartblog_latest_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261305aa0cc231697d6-06431777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc5384b8bd55cb44176a70be5bb1c5e1cfb3809c' => 
    array (
      0 => 'modules\\smartbloghomelatestnews\\views\\templates\\front\\smartblog_latest_news.tpl',
      1 => 1520487124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261305aa0cc231697d6-06431777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_data' => 0,
    'post' => 0,
    'smartbloglink' => 0,
    'img_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa0cc2342e4d7_20631684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0cc2342e4d7_20631684')) {function content_5aa0cc2342e4d7_20631684($_smarty_tpl) {?><div class="block">
    <h2 class='title_block'><?php echo smartyTranslate(array('s'=>'Latest News','mod'=>'smartblog'),$_smarty_tpl);?>
</h2>
    <div class="sdsblog-box-content">
        <?php if (isset($_smarty_tpl->tpl_vars['view_data']->value)&&!empty($_smarty_tpl->tpl_vars['view_data']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['img_url'] = new Smarty_variable($_smarty_tpl->tpl_vars['smartbloglink']->value->getImageLink($_smarty_tpl->tpl_vars['post']->value['link_rewrite'],$_smarty_tpl->tpl_vars['post']->value['id'],'home-default'), null, 0);?>
                <div id="sds_blog_post" class="col-xs-12 col-sm-4 col-md-4">
                    <span class="news_module_image_holder news_home_image_holder">
                        <?php if ($_smarty_tpl->tpl_vars['img_url']->value!='false') {?>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
">
                        <img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_url']->value, ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"   itemprop="image" />
                        </a>
                        <?php }?>
                    </span>
                    <h4 class="sds_post_title sds_post_title_home"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['post']->value['id'],$_smarty_tpl->tpl_vars['post']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(SmartBlogPost::subStr($_smarty_tpl->tpl_vars['post']->value['title'],60), ENT_QUOTES, 'UTF-8');?>
</a></h4>
                    <i class="icon icon-calendar"></i>
                    <span class="sds_post_date"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['date_added'], ENT_QUOTES, 'UTF-8');?>
</span>
			 
					 
                </div>
            <?php } ?>
        <?php }?>
     </div>
</div><?php }} ?>
