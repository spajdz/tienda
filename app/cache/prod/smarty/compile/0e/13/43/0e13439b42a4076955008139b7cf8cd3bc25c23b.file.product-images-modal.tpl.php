<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 21:47:45
         compiled from "C:\wamp64\www\prestashop\themes\classic\templates\catalog\_partials\product-images-modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242795a9f36b1402d08-73337586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e13439b42a4076955008139b7cf8cd3bc25c23b' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\catalog\\_partials\\product-images-modal.tpl',
      1 => 1520305325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242795a9f36b1402d08-73337586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'imagesCount' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f36b14753c2_62401159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f36b14753c2_62401159')) {function content_5a9f36b14753c2_62401159($_smarty_tpl) {?>
<div class="modal fade js-product-images-modal" id="product-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php $_smarty_tpl->tpl_vars['imagesCount'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['product']->value['images']), null, 0);?>
        <figure>
          <img class="js-modal-product-cover product-cover-modal" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
          <figcaption class="image-caption">
          
            <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          
        </figcaption>
        </figure>
        <aside id="thumbnails" class="thumbnails js-thumbnails text-sm-center">
          
            <div class="js-modal-mask mask <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value<=5) {?> nomargin <?php }?>">
              <ul class="product-images js-modal-product-images">
                <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                  <li class="thumb-container">
                    <img data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumb js-modal-thumb" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['medium']['width'], ENT_QUOTES, 'UTF-8');?>
" itemprop="image">
                  </li>
                <?php } ?>
              </ul>
            </div>
          
          <?php if ($_smarty_tpl->tpl_vars['imagesCount']->value>5) {?>
            <div class="arrows js-modal-arrows">
              <i class="material-icons arrow-up js-modal-arrow-up">&#xE5C7;</i>
              <i class="material-icons arrow-down js-modal-arrow-down">&#xE5C5;</i>
            </div>
          <?php }?>
        </aside>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php }} ?>
