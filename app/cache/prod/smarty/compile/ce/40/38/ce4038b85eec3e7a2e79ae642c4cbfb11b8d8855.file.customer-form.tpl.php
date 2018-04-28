<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:13:41
         compiled from "C:\wamp64\www\prestashop\themes\classic\templates\checkout\_partials\customer-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287295a9f4ad5a8ca00-97102190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce4038b85eec3e7a2e79ae642c4cbfb11b8d8855' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\customer-form.tpl',
      1 => 1520305325,
      2 => 'file',
    ),
    '665b820372b7d824cf3feaa2ebb05bf135c71111' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\customer\\_partials\\customer-form.tpl',
      1 => 1520305326,
      2 => 'file',
    ),
    '462c7cd8475b03df16da6b5d4cf171c0f8e35729' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1520305326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287295a9f4ad5a8ca00-97102190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
    'hook_create_account_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f4ad5bc9803_77238200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f4ad5bc9803_77238200')) {function content_5a9f4ad5bc9803_77238200($_smarty_tpl) {?>

  
    <?php /*  Call merged included template "_partials/form-errors.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, '287295a9f4ad5a8ca00-97102190');
content_5a9f4ad5ae0151_58332233($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/form-errors.tpl" */?>
  

<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="customer-form" class="js-customer-form" method="post">
  <section>
    
      <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
        
  <?php if ($_smarty_tpl->tpl_vars['field']->value['name']==='password'&&$_smarty_tpl->tpl_vars['guest_allowed']->value) {?>
      <p>
        <span class="font-weight-bold"><?php echo smartyTranslate(array('s'=>'Create an account','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span> <span class="font-italic"><?php echo smartyTranslate(array('s'=>'(optional)','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
        <br>
        <span class="text-muted"><?php echo smartyTranslate(array('s'=>'And save time on your next order!','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
      </p>
      
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
  <?php } else { ?>
    
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
  <?php }?>

      <?php } ?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    
  </section>

  
    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      
    <button
      class="continue btn btn-primary float-xs-right"
      name="continue"
      data-link-action="register-new-customer"
      type="submit"
      value="1"
    >
        <?php echo smartyTranslate(array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

    </button>

    </footer>
  

</form>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:13:41
         compiled from "C:\wamp64\www\prestashop\themes\classic\templates\_partials\form-errors.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a9f4ad5ae0151_58332233')) {function content_5a9f4ad5ae0151_58332233($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    
      <ul>
        <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
          <li class="alert alert-danger"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
        <?php } ?>
      </ul>
    
  </div>
<?php }?>
<?php }} ?>
