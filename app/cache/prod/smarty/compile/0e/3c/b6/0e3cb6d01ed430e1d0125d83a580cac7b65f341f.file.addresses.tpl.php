<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:14:00
         compiled from "C:\wamp64\www\prestashop\themes\classic\templates\checkout\_partials\steps\addresses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67205a9f4ae838eb83-55461631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e3cb6d01ed430e1d0125d83a580cac7b65f341f' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\steps\\addresses.tpl',
      1 => 1520305326,
      2 => 'file',
    ),
    '0d534ecb25b4e330d9fda86801f759cf96460b79' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\steps\\checkout-step.tpl',
      1 => 1520305326,
      2 => 'file',
    ),
    'aa6e53b47deac61485af32c0c53f7716c417cf8b' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\address-selector-block.tpl',
      1 => 1520305325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67205a9f4ae838eb83-55461631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'step_is_current' => 0,
    'step_is_reachable' => 0,
    'step_is_complete' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a9f4ae86c4880_51964260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9f4ae86c4880_51964260')) {function content_5a9f4ae86c4880_51964260($_smarty_tpl) {?>

  <section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
            class = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value)), ENT_QUOTES, 'UTF-8');?>
"
  >
    <h1 class="step-title h3">
      <i class="material-icons rtl-no-flip done">&#xE876;</i>
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

      <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> <?php echo smartyTranslate(array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
    </h1>

    <div class="content">
      
  <div class="js-address-form">
    <form
      method="POST"
      action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'order','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl);?>
"
    >

      <?php if (!$_smarty_tpl->tpl_vars['use_same_address']->value) {?>
        <h2 class="h4"><?php echo smartyTranslate(array('s'=>'Shipping Address','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</h2>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value&&!$_smarty_tpl->tpl_vars['cart']->value['is_virtual']) {?>
        <p>
          <?php echo smartyTranslate(array('s'=>'The selected address will be used both as your personal address (for invoice) and as your delivery address.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

        </p>
      <?php } elseif ($_smarty_tpl->tpl_vars['use_same_address']->value&&$_smarty_tpl->tpl_vars['cart']->value['is_virtual']) {?>
        <p>
          <?php echo smartyTranslate(array('s'=>'The selected address will be used as your personal address (for invoice).','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

        </p>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['show_delivery_address_form']->value) {?>
        <div id="delivery-address">
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('file'=>'checkout/_partials/address-form.tpl','ui'=>$_smarty_tpl->tpl_vars['address_form']->value,'use_same_address'=>$_smarty_tpl->tpl_vars['use_same_address']->value,'type'=>"delivery",'form_has_continue_button'=>$_smarty_tpl->tpl_vars['form_has_continue_button']->value),$_smarty_tpl);?>

        </div>
      <?php } elseif (count($_smarty_tpl->tpl_vars['customer']->value['addresses'])>0) {?>
        <div id="delivery-addresses" class="address-selector js-address-selector">
          <?php /*  Call merged included template "checkout/_partials/address-selector-block.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/address-selector-block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addresses'=>$_smarty_tpl->tpl_vars['customer']->value['addresses'],'name'=>"id_address_delivery",'selected'=>$_smarty_tpl->tpl_vars['id_address_delivery']->value,'type'=>"delivery",'interactive'=>!$_smarty_tpl->tpl_vars['show_delivery_address_form']->value&&!$_smarty_tpl->tpl_vars['show_invoice_address_form']->value), 0, '67205a9f4ae838eb83-55461631');
content_5a9f4ae84fb736_71099681($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/address-selector-block.tpl" */?>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['delivery_address_error']->value)) {?>
          <p class="alert alert-danger js-address-error" name="alert-delivery" id="id-failure-address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_address_error']->value['id_address'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_address_error']->value['exception'], ENT_QUOTES, 'UTF-8');?>
</p>
        <?php } else { ?>
          <p class="alert alert-danger js-address-error" name="alert-delivery" style="display: none"><?php echo smartyTranslate(array('s'=>"Your address is incomplete, please update it.",'d'=>"Shop.Notifications.Error"),$_smarty_tpl);?>
</p>
        <?php }?>

        <p class="add-address">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_address_delivery_url']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE145;</i><?php echo smartyTranslate(array('s'=>'add new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
        </p>

        <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value&&!$_smarty_tpl->tpl_vars['cart']->value['is_virtual']) {?>
          <p>
            <a data-link-action="different-invoice-address" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['use_different_address_url']->value, ENT_QUOTES, 'UTF-8');?>
">
              <?php echo smartyTranslate(array('s'=>'Billing address differs from shipping address','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

            </a>
          </p>
        <?php }?>

      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['use_same_address']->value) {?>

        <h2 class="h4"><?php echo smartyTranslate(array('s'=>'Your Invoice Address','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</h2>

        <?php if ($_smarty_tpl->tpl_vars['show_invoice_address_form']->value) {?>
          <div id="invoice-address">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('file'=>'checkout/_partials/address-form.tpl','ui'=>$_smarty_tpl->tpl_vars['address_form']->value,'use_same_address'=>$_smarty_tpl->tpl_vars['use_same_address']->value,'type'=>"invoice",'form_has_continue_button'=>$_smarty_tpl->tpl_vars['form_has_continue_button']->value),$_smarty_tpl);?>

          </div>
        <?php } else { ?>
          <div id="invoice-addresses" class="address-selector js-address-selector">
            <?php /*  Call merged included template "checkout/_partials/address-selector-block.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/address-selector-block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('addresses'=>$_smarty_tpl->tpl_vars['customer']->value['addresses'],'name'=>"id_address_invoice",'selected'=>$_smarty_tpl->tpl_vars['id_address_invoice']->value,'type'=>"invoice",'interactive'=>!$_smarty_tpl->tpl_vars['show_delivery_address_form']->value&&!$_smarty_tpl->tpl_vars['show_invoice_address_form']->value), 0, '67205a9f4ae838eb83-55461631');
content_5a9f4ae84fb736_71099681($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/address-selector-block.tpl" */?>
          </div>

          <?php if (isset($_smarty_tpl->tpl_vars['invoice_address_error']->value)) {?>
            <p class="alert alert-danger js-address-error" name="alert-invoice" id="id-failure-address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice_address_error']->value['id_address'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice_address_error']->value['exception'], ENT_QUOTES, 'UTF-8');?>
</p>
          <?php } else { ?>
            <p class="alert alert-danger js-address-error" name="alert-invoice" style="display: none"><?php echo smartyTranslate(array('s'=>"Your address is incomplete, please update it.",'d'=>"Shop.Notifications.Error"),$_smarty_tpl);?>
</p>
          <?php }?>

          <p class="add-address">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_address_invoice_url']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons">&#xE145;</i><?php echo smartyTranslate(array('s'=>'add new address','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
          </p>
        <?php }?>

      <?php }?>

      <?php if (!$_smarty_tpl->tpl_vars['form_has_continue_button']->value) {?>
        <div class="clearfix">
          <button type="submit" class="btn btn-primary continue float-xs-right" name="confirm-addresses" value="1">
              <?php echo smartyTranslate(array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </button>
          <input type="hidden" id="not-valid-addresses" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['not_valid_addresses']->value, ENT_QUOTES, 'UTF-8');?>
">
        </div>
      <?php }?>

    </form>
  </div>

    </div>
  </section>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-03-06 23:14:00
         compiled from "C:\wamp64\www\prestashop\themes\classic\templates\checkout\_partials\address-selector-block.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a9f4ae84fb736_71099681')) {function content_5a9f4ae84fb736_71099681($_smarty_tpl) {?>

  <?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
?>
    <article
      class="address-item<?php if ($_smarty_tpl->tpl_vars['address']->value['id']==$_smarty_tpl->tpl_vars['selected']->value) {?> selected<?php }?>"
      id="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classname'][0][0]->smartyClassname($_smarty_tpl->tpl_vars['name']->value), ENT_QUOTES, 'UTF-8');?>
-address-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
    >
      <header class="h4">
        <label class="radio-block">
          <span class="custom-radio">
            <input
              type="radio"
              name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
              value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
              <?php if ($_smarty_tpl->tpl_vars['address']->value['id']==$_smarty_tpl->tpl_vars['selected']->value) {?>checked<?php }?>
            >
            <span></span>
          </span>
          <span class="address-alias h4"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8');?>
</span>
          <div class="address"><?php echo $_smarty_tpl->tpl_vars['address']->value['formatted'];?>
</div>
        </label>
      </header>
      <hr>
      <footer class="address-footer">
        <?php if ($_smarty_tpl->tpl_vars['interactive']->value) {?>
          <a
            class="edit-address text-muted"
            data-link-action="edit-address"
            href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['address']->value['id'],'editAddress'=>$_smarty_tpl->tpl_vars['type']->value,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl);?>
"
          >
            <i class="material-icons edit">&#xE254;</i><?php echo smartyTranslate(array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </a>
          <a
            class="delete-address text-muted"
            data-link-action="delete-address"
            href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['address']->value['id'],'deleteAddress'=>true,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl);?>
"
          >
            <i class="material-icons delete">&#xE872;</i><?php echo smartyTranslate(array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </a>
        <?php }?>
      </footer>
    </article>
  <?php } ?>
  <?php if ($_smarty_tpl->tpl_vars['interactive']->value) {?>
    <p>
      <button class="ps-hidden-by-js form-control-submit center-block" type="submit"><?php echo smartyTranslate(array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
    </p>
  <?php }?>

<?php }} ?>
