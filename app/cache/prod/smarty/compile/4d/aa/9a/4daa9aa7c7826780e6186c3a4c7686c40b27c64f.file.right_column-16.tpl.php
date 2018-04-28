<?php /* Smarty version Smarty-3.1.19, created on 2018-04-28 12:08:27
         compiled from "modules\prestanews\views\templates\front\right_column-16.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258155ae48e6bd76811-62900937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4daa9aa7c7826780e6186c3a4c7686c40b27c64f' => 
    array (
      0 => 'modules\\prestanews\\views\\templates\\front\\right_column-16.tpl',
      1 => 1491203969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258155ae48e6bd76811-62900937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'news' => 0,
    'module_dir' => 0,
    'new' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae48e6be84a99_05835860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae48e6be84a99_05835860')) {function content_5ae48e6be84a99_05835860($_smarty_tpl) {?>

<div class="block news_block informations_block_left">
	<h4 class="title_block"><a href="#"><?php echo smartyTranslate(array('s'=>'News','mod'=>'prestanews'),$_smarty_tpl);?>
</a></h4>
	
		<!-- <a class="button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('prcustomeropinion'), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Give my opinion','mod'=>'prcustomeropinion'),$_smarty_tpl);?>
</a> -->
		
		<ul id="news-list" class="block_content list-block">
			<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
				<li class="bullet">
				
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
details-news.php?id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new']->value['id_news'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
				
				</li>
			<?php } ?>
			<center>
			<a class="button lnk_view btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('prestanews'), ENT_QUOTES, 'UTF-8');?>
">
				<span><?php echo smartyTranslate(array('s'=>'All news','mod'=>'prestanews'),$_smarty_tpl);?>
</span>
			</a>
		</center>
		</ul>	
		<br />
		
	
</div>
<?php }} ?>
