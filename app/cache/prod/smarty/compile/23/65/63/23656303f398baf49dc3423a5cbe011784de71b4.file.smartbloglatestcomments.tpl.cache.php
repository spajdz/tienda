<?php /* Smarty version Smarty-3.1.19, created on 2018-04-28 12:08:29
         compiled from "modules\smartbloglatestcomments\views\templates\front\smartbloglatestcomments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:305795ae48e6d803804-71206516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23656303f398baf49dc3423a5cbe011784de71b4' => 
    array (
      0 => 'modules\\smartbloglatestcomments\\views\\templates\\front\\smartbloglatestcomments.tpl',
      1 => 1520487132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305795ae48e6d803804-71206516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'latesComments' => 0,
    'comment' => 0,
    'smartbloglink' => 0,
    'modules_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae48e6d93f815_52715422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae48e6d93f815_52715422')) {function content_5ae48e6d93f815_52715422($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['latesComments']->value)&&!empty($_smarty_tpl->tpl_vars['latesComments']->value)) {?>
<div class="block block-blog blogModule boxPlain">
   <h4 class="text-uppercase h6 hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Latest Comments','mod'=>'smartbloglatestcomments'),$_smarty_tpl);?>
</h4>
   <div class="block_content sdsbox-content">
      <ul class="recentComments">
	  <?php  $_smarty_tpl->tpl_vars["comment"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["comment"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latesComments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["comment"]->key => $_smarty_tpl->tpl_vars["comment"]->value) {
$_smarty_tpl->tpl_vars["comment"]->_loop = true;
?>
 
         <li>
            <a title="" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['comment']->value['id_post'],$_smarty_tpl->tpl_vars['comment']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
">
	       <img class="image" alt="Avatar" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modules_dir']->value, ENT_QUOTES, 'UTF-8');?>
/smartblog/images/avatar/avatar-author-default.jpg"></a>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <i><?php echo smartyTranslate(array('s'=>'on'),$_smarty_tpl);?>
</i>
		   <a class="title"   href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartbloglink']->value->getSmartBlogPostLink($_smarty_tpl->tpl_vars['comment']->value['id_post'],$_smarty_tpl->tpl_vars['comment']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
"><?php echo SmartBlogPost::subStr($_smarty_tpl->tpl_vars['comment']->value['content'],50);?>
</a>
         </li>
          <?php } ?>
      </ul>
   </div>
   <div class="box-footer"><span></span></div>
</div>
<?php }?><?php }} ?>
