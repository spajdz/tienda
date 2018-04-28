<?php /* Smarty version Smarty-3.1.19, created on 2018-04-28 12:08:27
         compiled from "modules\smartblogarchive\views\templates\front\smartblogarchive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86445ae48e6bf20346-67819398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64fedc2b38e9a062ddc1c364b47de0027b3e0d9b' => 
    array (
      0 => 'modules\\smartblogarchive\\views\\templates\\front\\smartblogarchive.tpl',
      1 => 1520487105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86445ae48e6bf20346-67819398',
  'function' => 
  array (
    'archives' => 
    array (
      'parameter' => 
      array (
        'nodes' => 
        array (
        ),
        'depth' => 0,
      ),
      'compiled' => '
      <?php if (count($_smarty_tpl->tpl_vars[\'nodes\']->value)) {?><ul class="category-sub-menu"><?php  $_smarty_tpl->tpl_vars[\'node\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'node\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'nodes\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'node\']->key => $_smarty_tpl->tpl_vars[\'node\']->value) {
$_smarty_tpl->tpl_vars[\'node\']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars[\'node\']->value[\'name\']!=\'\') {?><li data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'depth\']->value, ENT_QUOTES, \'UTF-8\');?>
"><?php if ($_smarty_tpl->tpl_vars[\'depth\']->value===0) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'node\']->value[\'link\'], ENT_QUOTES, \'UTF-8\');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'node\']->value[\'name\'], ENT_QUOTES, \'UTF-8\');?>
</a><?php if ($_smarty_tpl->tpl_vars[\'node\']->value[\'children\']) {?><?php if ($_smarty_tpl->tpl_vars[\'isDhtml\']->value) {?><div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exBlogArchiveCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'node\']->value[\'id\'], ENT_QUOTES, \'UTF-8\');?>
"><i class="material-icons add">&#xE145;</i><i class="material-icons remove">&#xE15B;</i></div><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars[\'isDhtml\']->value) {?>collapse<?php }?>" id="exBlogArchiveCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'node\']->value[\'id\'], ENT_QUOTES, \'UTF-8\');?>
"><?php Smarty_Internal_Function_Call_Handler::call (\'archives\',$_smarty_tpl,array(\'nodes\'=>$_smarty_tpl->tpl_vars[\'node\']->value[\'children\'],\'depth\'=>$_smarty_tpl->tpl_vars[\'depth\']->value+1),\'86445ae48e6bf20346_67819398\',false);?>
</div><?php }?><?php } else { ?><a class="category-sub-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'node\']->value[\'link\'], ENT_QUOTES, \'UTF-8\');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'node\']->value[\'name\'], ENT_QUOTES, \'UTF-8\');?>
</a><?php if ($_smarty_tpl->tpl_vars[\'node\']->value[\'children\']) {?><?php if ($_smarty_tpl->tpl_vars[\'isDhtml\']->value) {?><span class="arrows" data-toggle="collapse" data-target="#exBlogArchiveCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'node\']->value[\'id\'], ENT_QUOTES, \'UTF-8\');?>
"><i class="material-icons arrow-right">&#xE315;</i><i class="material-icons arrow-down">&#xE313;</i></span><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars[\'isDhtml\']->value) {?>collapse<?php }?>" id="exBlogArchiveCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars[\'node\']->value[\'id\'], ENT_QUOTES, \'UTF-8\');?>
"><?php Smarty_Internal_Function_Call_Handler::call (\'archives\',$_smarty_tpl,array(\'nodes\'=>$_smarty_tpl->tpl_vars[\'node\']->value[\'children\'],\'depth\'=>$_smarty_tpl->tpl_vars[\'depth\']->value+1),\'86445ae48e6bf20346_67819398\',false);?>
</div><?php }?><?php }?></li><?php }?><?php } ?></ul><?php }?>
    ',
      'nocache_hash' => '86445ae48e6bf20346-67819398',
      'has_nocache_code' => false,
      'called_functions' => 
      array (
        0 => 'archives',
        1 => 'archives',
      ),
    ),
  ),
  'variables' => 
  array (
    'archive_type' => 0,
    'archives' => 0,
    'archive' => 0,
    'months' => 0,
    'linkurl' => 0,
    'monthname' => 0,
    'nodes' => 0,
    'node' => 0,
    'depth' => 0,
    'isDhtml' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae48e6c48f2a5_09871754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae48e6c48f2a5_09871754')) {function content_5ae48e6c48f2a5_09871754($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['archive_type']->value==1) {?>
  <div class="block-categories hidden-sm-down">
    <h4 class="text-uppercase h6 hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Blog Archive','mod'=>'smartblogarchive'),$_smarty_tpl);?>
</h4>
    <h4 class="text-uppercase h6 hidden-sm-down"></h4>
    <ul class="category-sub-menu">
      <?php  $_smarty_tpl->tpl_vars["archive"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["archive"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archives']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["archive"]->key => $_smarty_tpl->tpl_vars["archive"]->value) {
$_smarty_tpl->tpl_vars["archive"]->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars["months"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["months"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archive']->value['month']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["months"]->key => $_smarty_tpl->tpl_vars["months"]->value) {
$_smarty_tpl->tpl_vars["months"]->_loop = true;
?>
          <?php $_smarty_tpl->tpl_vars["linkurl"] = new Smarty_variable(null, null, 0);?>
          <?php $_smarty_tpl->createLocalArrayVariable('linkurl', null, 0);
$_smarty_tpl->tpl_vars['linkurl']->value['year'] = $_smarty_tpl->tpl_vars['archive']->value['year'];?>
          <?php $_smarty_tpl->createLocalArrayVariable('linkurl', null, 0);
$_smarty_tpl->tpl_vars['linkurl']->value['month'] = $_smarty_tpl->tpl_vars['months']->value['month'];?>
          <?php $_smarty_tpl->tpl_vars["monthname"] = new Smarty_variable(null, null, 0);?>
          <?php if ($_smarty_tpl->tpl_vars['months']->value['month']==1) {?><?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('January', null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==2) {?><?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('February', null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==3) {?>
          <?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('March', null, 0);?> <?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==4) {?> <?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('Aprill', null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==5) {?><?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('May', null, 0);?>
          <?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==6) {?><?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('June', null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==7) {?><?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('July', null, 0);?> <?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==8) {?>
          <?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('August', null, 0);?> <?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==9) {?><?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('September', null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==10) {?> <?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('October', null, 0);?>
          <?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==11) {?><?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('November', null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['months']->value['month']==12) {?> <?php $_smarty_tpl->tpl_vars['monthname'] = new Smarty_variable('December', null, 0);?><?php }?>

          <li data-depth="0">
            <a class="text-uppercase h6" href="<?php echo htmlspecialchars(smartblog::GetSmartBlogLink('smartblog_month',$_smarty_tpl->tpl_vars['linkurl']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['monthname']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['archive']->value['year'], ENT_QUOTES, 'UTF-8');?>
</a>
          </li>
        <?php } ?>
      <?php } ?>
    </ul>
  </div>
<?php } else { ?>
    

    <div class="block-categories hidden-sm-down">
      <h4 class="text-uppercase h6 hidden-sm-down"><?php echo smartyTranslate(array('s'=>'Blog Archive','mod'=>'smartblogarchive'),$_smarty_tpl);?>
</h4>
      <ul class="category-top-menu">
        <li><a class="text-uppercase h6" href="<?php echo $_smarty_tpl->tpl_vars['archives']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['archives']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
        <li><?php Smarty_Internal_Function_Call_Handler::call ('archives',$_smarty_tpl,array('nodes'=>$_smarty_tpl->tpl_vars['archives']->value['children']),'86445ae48e6bf20346_67819398',false);?>
</li>
      </ul>
    </div>
<?php }?><?php }} ?>
