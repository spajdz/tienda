<?php /* Smarty version Smarty-3.1.19, created on 2018-04-28 12:08:28
         compiled from "modules\smartblogcategories\new-smartblogcategories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186055ae48e6cbcace5-17270881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9e47fa95fb5f9a336b1a9833e48d2995cec4fbd' => 
    array (
      0 => 'modules\\smartblogcategories\\new-smartblogcategories.tpl',
      1 => 1520487110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186055ae48e6cbcace5-17270881',
  'function' => 
  array (
    'blockCategTree' => 
    array (
      'parameter' => 
      array (
        'nodes' => 
        array (
        ),
        'depth' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'isDropdown' => 0,
    'blockCategTree' => 0,
    'nodes' => 0,
    'node' => 0,
    'depth' => 0,
    'isDhtml' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae48e6d1e2c63_96357027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae48e6d1e2c63_96357027')) {function content_5ae48e6d1e2c63_96357027($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['isDropdown']->value) {?>
	<div class="block-categories hidden-sm-down">
		<h4 class="text-uppercase h6 hidden-sm-down"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Category','mod'=>'smartblogpopularposts'),$_smarty_tpl);?>
</a></h4>
		<select onchange="document.location.href=this.options[this.selectedIndex].value;">
			<option value="">Select Category</option>
			<?php echo $_smarty_tpl->getSubTemplate ("./category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['blockCategTree']->value,'last'=>'true','select'=>'false'), 0);?>

		</select>
	</div>
<?php } else { ?>
	<?php if (!function_exists('smarty_template_function_blockCategTree')) {
    function smarty_template_function_blockCategTree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['blockCategTree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="category-sub-menu"><?php  $_smarty_tpl->tpl_vars['node'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['node']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['node']->key => $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['node']->value['name']!='') {?><li data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['depth']->value===0) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?><div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exBlogCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons add">&#xE145;</i><i class="material-icons remove">&#xE15B;</i></div><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>collapse<?php }?>" id="exBlogCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php smarty_template_function_blockCategTree($_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1));?>
</div><?php }?><?php } else { ?><a class="category-sub-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?><span class="arrows" data-toggle="collapse" data-target="#exBlogCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons arrow-right">&#xE315;</i><i class="material-icons arrow-down">&#xE313;</i></span><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>collapse<?php }?>" id="exBlogCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php smarty_template_function_blockCategTree($_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1));?>
</div><?php }?><?php }?></li><?php }?><?php } ?></ul><?php }?>
	<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


	<div class="block-categories hidden-sm-down">
		<h4 class="text-uppercase h6 hidden-sm-down"><a href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog'), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Category','mod'=>'smartblogpopularposts'),$_smarty_tpl);?>
</a></h4>
	  <ul class="category-top-menu">
	    <li><a class="text-uppercase h6" href="<?php echo $_smarty_tpl->tpl_vars['blockCategTree']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockCategTree']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
	    <li><?php smarty_template_function_blockCategTree($_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['blockCategTree']->value['children']));?>
</li>
	  </ul>
	</div>
<?php }?><?php }} ?>
