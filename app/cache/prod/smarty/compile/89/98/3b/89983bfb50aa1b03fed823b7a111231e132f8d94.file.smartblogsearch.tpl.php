<?php /* Smarty version Smarty-3.1.19, created on 2018-04-28 12:08:31
         compiled from "modules\smartblogsearch\views\templates\front\smartblogsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41425ae48e6f5d8d08-73821235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89983bfb50aa1b03fed823b7a111231e132f8d94' => 
    array (
      0 => 'modules\\smartblogsearch\\views\\templates\\front\\smartblogsearch.tpl',
      1 => 1520487155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41425ae48e6f5d8d08-73821235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartsearch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae48e6f6b4802_50141633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae48e6f6b4802_50141633')) {function content_5ae48e6f6b4802_50141633($_smarty_tpl) {?><div class="block block-blog blogModule boxPlain clearfix" id="smartblogsearch">
      <h4 class="text-uppercase h6 hidden-sm-down"><a href='<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_list'), ENT_QUOTES, 'UTF-8');?>
'><?php echo smartyTranslate(array('s'=>"Blog Search",'mod'=>"smartblogsearch"),$_smarty_tpl);?>
</a></h4>
	<div id="sdssearch_block_top" class="block_content">
		<form action="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_search'), ENT_QUOTES, 'UTF-8');?>
" method="post" id="searchbox">
		    <input type="hidden" value="0" name="smartblogaction">
			<input type="text" placeholder="Search" name="smartsearch" id="search_query_top" class="search_query form-control ac_input" autocomplete="off" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartsearch']->value, ENT_QUOTES, 'UTF-8');?>
">
			<button class="btn btn-default btn-blog-search" name="smartblogsubmit" type="submit">
				<i class="material-icons search"></i>
			<span><?php echo smartyTranslate(array('s'=>'','mod'=>'smartblogsearch'),$_smarty_tpl);?>
</span>
			</button>
		</form>
	</div>
</div>




<?php }} ?>
