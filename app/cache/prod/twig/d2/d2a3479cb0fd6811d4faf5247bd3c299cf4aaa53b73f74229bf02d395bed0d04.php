<?php

/* __string_template__2e87d880ae0b9b768b47d3a4e56ef32a611d251537d92fdfc3020b70ceb12e41 */
class __TwigTemplate_3359059997b801ab8196943bc04a8e05f5e7d898c7b6aaa61b6e63ced3b20691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Selección de módulo • pres</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModules';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'CL';
    var _PS_VERSION_ = '1.7.3.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = 'c2e45eb10f7d68fa7407548de43d5623';
    var token_admin_orders = '8f2856fa76943af3f1abbf2b07ff11a8';
    var token_admin_customers = 'e5f3276124b723c71f41a6f5914bb6e9';
    var token_admin_customer_threads = '8984052eb14a03b2fc12b9609e67918d';
    var currentIndex = 'index.php?controller=AdminModules';
    var employee_token = '19ef1fc755636285541916663a1e9a57';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/prestashop/adminqq/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/adminqq/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/adminqq/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/adminqq\\/\";
var baseDir = \"\\/prestashop\\/\";
var currency = {\"iso_code\":\"CLP\",\"sign\":\"\$\",\"name\":\"peso chileno\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/adminqq/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=1.7.3.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=1.7.3.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/adminqq/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/adminqq/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://localhost/prestashop/adminqq/index.php?controller=AdminGamification&token=d796bd73617f39f154bdd61702165e4a';
\t\t\t\tvar current_id_tab = 45;
\t\t\t</script>

";
        // line 85
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-es adminmodules\">



<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons float-left px-1 js-mobile-menu d-md-none\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminDashboard&amp;token=94049b7b7be29807898c7f9d4a232e3d\"></a>

    <div class=\"component d-none d-md-flex\" id=\"quick-access-container\"><div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=6fa20f6d2ce2ca1dd8f524223254560e\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/adminqq/index.php/module/manage?token=363806a949c94d7ea71013c32a9346be\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCategories&amp;addcategory&amp;token=84a297209ac4370fefcbd31e320a90b0\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/adminqq/index.php/product/new?token=363806a949c94d7ea71013c32a9346be\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=2c3be6a1d6dfa962b779579b98ddb1fc\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminOrders&amp;token=8f2856fa76943af3f1abbf2b07ff11a8\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"57\"
        data-icon=\"icon-AdminParentModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/module/catalog\"
        data-post-link=\"http://localhost/prestashop/adminqq/index.php?controller=AdminQuickAccesses&token=47494f7a6d1acb1220c92e9ab5e2c1d3\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\" - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminQuickAccesses&token=47494f7a6d1acb1220c92e9ab5e2c1d3\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
</div>
    <div class=\"component d-none d-md-inline-block col-md-4\" id=\"header-search-container\">
<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/adminqq/index.php?controller=AdminSearch&amp;token=98b452a7257405315dd20fa510ca9ca8\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\">
    <div class=\"input-group-btn\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
</div>

            <div class=\"component d-none d-md-inline-block\">  <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">pres</a>
  </div>
</div>
          <div class=\"component\"><div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <div class=\"notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCarts&token=db053258cd0db4591f88d0cb4bd1dd64&action=filterOnlyAbandonedCarts\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Te has planteado vender en marketplaces?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              ¡Eso significa más tiempo para otras cosas!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component -norightmargin d-none d-md-inline-block\"><div class=\"employee-dropdown dropdown\">
      <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/admin%40admin.com.jpg\" /><br>
      <span>Test Tesst</span>
    </div>
    <div>
      <a class=\"employee-link profile-link\" href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminEmployees&amp;token=19ef1fc755636285541916663a1e9a57&amp;id_employee=1&amp;updateemployee\">
        <i class=\"material-icons\">settings_applications</i> Tu perfil
      </a>
    </div>
    <div>
      <a class=\"employee-link\" id=\"header_logout\" href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminLogin&amp;token=2c15f19404ece88f1c5a9b169baee23a&amp;logout\">
        <i class=\"material-icons\">power_settings_new</i> Cerrar sesión
      </a>
    </div>
  </div>
</div>
</div>

    
  </nav>
  </header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminDashboard&amp;token=94049b7b7be29807898c7f9d4a232e3d\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminOrders&amp;token=8f2856fa76943af3f1abbf2b07ff11a8\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Pedidos
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminOrders&amp;token=8f2856fa76943af3f1abbf2b07ff11a8\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminInvoices&amp;token=8b374c8aaede89298cc1a9509ebb9de6\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminSlip&amp;token=1ee218fd8d5465906f3342ea8e7a68c6\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminDeliverySlip&amp;token=9ebe76c1f7937991ca5bc1fbf971ccc3\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCarts&amp;token=db053258cd0db4591f88d0cb4bd1dd64\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/prestashop/adminqq/index.php/product/catalog?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catálogo
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/prestashop/adminqq/index.php/product/catalog?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCategories&amp;token=84a297209ac4370fefcbd31e320a90b0\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminTracking&amp;token=f52c1fbbdd36ca1695c07398f754f439\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminAttributesGroups&amp;token=9f33b2da66e66861ddce69ac7d693b61\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminManufacturers&amp;token=45ca79d77b9efd9a428b755d574621b0\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminAttachments&amp;token=8d423c35468aff24ad23ed8df9d93476\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCartRules&amp;token=2c3be6a1d6dfa962b779579b98ddb1fc\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/prestashop/adminqq/index.php/stock/?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCustomers&amp;token=e5f3276124b723c71f41a6f5914bb6e9\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clientes
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCustomers&amp;token=e5f3276124b723c71f41a6f5914bb6e9\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminAddresses&amp;token=3915524896945f9924059cab10436516\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCustomerThreads&amp;token=8984052eb14a03b2fc12b9609e67918d\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Servicio al Cliente
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCustomerThreads&amp;token=8984052eb14a03b2fc12b9609e67918d\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminOrderMessage&amp;token=ae098a0dea2b9be02ea1d18c1114c3b0\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminReturn&amp;token=082e160a4303bedef5c82dd7e8c1b4d2\" class=\"link\"> Devoluciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminStats&amp;token=6fa20f6d2ce2ca1dd8f524223254560e\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Estadísticas
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/prestashop/adminqq/index.php/module/catalog?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Módulos
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/prestashop/adminqq/index.php/module/catalog?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\" class=\"link\"> Módulos y Servicios
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/prestashop/adminqq/index.php/module/addons-store?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminThemes&amp;token=3c05119398eb4f4453b0d034c7db3452\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Diseño
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminThemes\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminThemes&amp;token=3c05119398eb4f4453b0d034c7db3452\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminThemesCatalog&amp;token=25c92a3e0812b51bfa75f52e1855297b\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCmsContent&amp;token=586994a2aefd3e2291aeb60b791357d7\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminModulesPositions&amp;token=f9fc41c2d4af43b468f614b3a60b324e\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminImages&amp;token=0d3e14ca54a11371e13b26de85c744e3\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminLinkWidget&amp;token=c10f1f59b4edc66ed71b5eea5304fc35\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCarriers&amp;token=36f969b0582cf6d34d884f5e3827c15f\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Transporte
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCarriers&amp;token=36f969b0582cf6d34d884f5e3827c15f\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminShipping&amp;token=f92f62055262c765d69066f15662092e\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminPayment&amp;token=4f5ca6c52b44fb7ffbae98c750b6d105\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Pago
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminPayment&amp;token=4f5ca6c52b44fb7ffbae98c750b6d105\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminPaymentPreferences&amp;token=87d36e5b36a0792c5f18dc4fb46b6bfa\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminLocalization&amp;token=b24d054c4f1603531c6e919bf8b23cd5\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Internacional
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminLocalization&amp;token=b24d054c4f1603531c6e919bf8b23cd5\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminZones&amp;token=a76039148ccda3079a246e048ac278f8\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminTaxes&amp;token=65e31c54bc87b7db197cebeb45e91dc6\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminTranslations&amp;token=d57f05a4d45ad27ca2bd3d3ffb9bd61f\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title d-none d-sm-block \" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminPreferences&amp;token=1a08205027bb3d4b9c7d218577667250\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parámetros de la tienda
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminPreferences&amp;token=1a08205027bb3d4b9c7d218577667250\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminOrderPreferences&amp;token=c5c30d4395eaec9ffcfb66e388d918ba\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminPPreferences&amp;token=f8a5b5b39c380229b03385b99f7e56f8\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminCustomerPreferences&amp;token=3a7c22ccf6f61f1e14060d414e4ae1b4\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminContacts&amp;token=04aaf658b980c25983efb6fb7f98bc4c\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminMeta&amp;token=a06ff8e78fd0a18186824a0e4420cc6e\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminSearchConf&amp;token=d6bf27035c0f39e5481b614038ef1801\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminGamification&amp;token=d796bd73617f39f154bdd61702165e4a\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/prestashop/adminqq/index.php/configure/advanced/system_information?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                                          <i class=\"material-icons float-right d-md-none\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/prestashop/adminqq/index.php/configure/advanced/system_information?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/prestashop/adminqq/index.php/configure/advanced/performance?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminAdminPreferences&amp;token=8e568497ef4fcd139c5a41269e511949\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminEmails&amp;token=711a9a313dd42a259a23c7303a821e5e\" class=\"link\"> Dirección de email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminImport&amp;token=06f0ccb337bbf2527b201e27b8031ac4\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminEmployees&amp;token=19ef1fc755636285541916663a1e9a57\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminRequestSql&amp;token=4540fc3b787916abd7d43676f64e13b7\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminLogs&amp;token=668f92b4b45d9abbf6762be88b59d89f\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminWebservice&amp;token=a7825ad23d55a4f0e815a7e9d3b38550\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse d-none d-md-block\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      ¡Lanza tu tienda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resumen</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Detener módulo Primeros pasos</a>
  </div>
</div>

</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <nav class=\"breadcrumb\">

                        <a class=\"breadcrumb-item\" href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminParentModulesSf&amp;token=94a363280703dd3108f0cdd6bc2ebb4b\">Módulos</a>
              
      
    </nav>
  

  
    <h2 class=\"title\">
      Selección de módulo    </h2>
  

  
    <div class=\"toolbar-icons\">
      
                        
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add_module\"
            href=\"#\"            title=\"Subir un módulo\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">cloud_upload</i>
            <span class=\"title\">Subir un módulo</span>
          </a>
                                
          <a
            class=\"mx-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-addons_connect\"
            href=\"#\"            title=\"Conectarse a Addons Marketplace\"            data-toggle=\"pstooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">vpn_key</i>
            <span class=\"title\">Conectarse a Addons Marketplace</span>
          </a>
                          
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Ayuda\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/prestashop/adminqq/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Fes%252Fdoc%252FAdminModules%253Fversion%253D1.7.3.0%2526country%253Des/Ayuda?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Ayuda</span>
          </a>
                  </div>
  
        <div class=\"page-head-tabs\" id=\"head_tabs\">
                <a class=\"tab current\"
   href=\"/prestashop/adminqq/index.php/module/catalog?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\">Selección</a>

                <a class=\"tab\"
   href=\"/prestashop/adminqq/index.php/module/manage?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\">Módulos instalados</a>

                <a class=\"tab\"
   href=\"/prestashop/adminqq/index.php/module/notifications?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\">Notificaciones  <div class=\"notification-container\">
    <span class=\"notification-counter\">3</span>
  </div>
  </a>

            </div>
      
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=admin%40admin.com&amp;firstname=Test&amp;lastname=Tesst&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/adminqq/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=admin%40admin.com&amp;firstname=Test&amp;lastname=Tesst&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuar</button>
  <a class=\"onboarding-button-shut-down\">Saltar este tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">\\u00a1Bienvenido a su tienda!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>\\u00a1Hola! Me llamo Presto y estoy aqu\\u00ed para ense\\u00f1arle todo esto.<\\/p>\\n    <p>Descubrir\\u00e1 algunos pasos esenciales antes de poder lanzar su tienda:\\n    Cree su primer producto, personalice su tienda, configure env\\u00edos y pagos...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>\\u00a1Empecemos!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">M\\u00e1s tarde<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Empezar<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard&token=94049b7b7be29807898c7f9d4a232e3d\"}]},{\"title\":\"Vamos a crear su primer producto\",\"subtitle\":{\"1\":\"\\u00bfQu\\u00e9 quiere contar sobre el producto? Piense en lo que sus clientes quieren saber.\",\"2\":\"A\\u00f1ada informaci\\u00f3n clara y atractiva. No se preocupe, podr\\u00e1 editarlo m\\u00e1s tarde :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dele a su producto un nombre atractivo.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\",\"index.php\\/product\\/form\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Complete los detalles esenciales en esta pesta\\u00f1a. Las otras pesta\\u00f1as son para informaci\\u00f3n m\\u00e1s avanzada.\",\"page\":\"index.php\\/product\\/form\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00a1A\\u00f1ada una o m\\u00e1s im\\u00e1genes para que su producto atraiga la atenci\\u00f3n!\",\"page\":\"index.php\\/product\\/form\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00bfA qu\\u00e9 precio quiere venderlo?\",\"page\":\"index.php\\/product\\/form\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"\\u00a1Genial! Acaba de crear su primer producto. Tiene buena pinta, \\u00bfverdad?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Dele a su tienda su propia identidad\",\"subtitle\":{\"1\":\"\\u00bfQu\\u00e9 aspecto quiere para su tienda? \\u00bfQu\\u00e9 la hace especial?\",\"2\":\"Personalice su tema o escoja el mejor dise\\u00f1o de nuestro cat\\u00e1logo de temas.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u00a1Una buena manera de empezar es a\\u00f1adir su propio logotipo aqu\\u00ed!\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes&token=3c05119398eb4f4453b0d034c7db3452\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si quiere algo realmente especial, \\u00a1eche un vistazo al cat\\u00e1logo de temas!\",\"page\":\"index.php?controller=AdminThemesCatalog&token=25c92a3e0812b51bfa75f52e1855297b\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Prepara tu tienda para recibir pagos\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere que le paguen sus clientes?\",\"2\":\"Adapte su oferta al mercado: \\u00a1a\\u00f1ada los m\\u00e9todos de pago m\\u00e1s populares para sus clientes!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Estos m\\u00e9todos de pago ya est\\u00e1n disponibles para tus clientes.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment&token=4f5ca6c52b44fb7ffbae98c750b6d105\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u00a1Y puede escoger y a\\u00f1adir otros m\\u00e9todos de pago desde aqu\\u00ed!\",\"page\":\"index.php?controller=AdminPayment&token=4f5ca6c52b44fb7ffbae98c750b6d105\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Elija sus soluciones de env\\u00edo\",\"subtitle\":{\"1\":\"\\u00bfC\\u00f3mo quiere enviar sus productos?\",\"2\":\"\\u00a1Seleccione las soluciones de env\\u00edo que mejor se adapten a sus clientes! Cree su propio transporte o a\\u00f1ada un m\\u00f3dulo listo para usar.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Aqu\\u00ed est\\u00e1n los m\\u00e9todos de env\\u00edo disponibles en su tienda ahora mismo.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers&token=36f969b0582cf6d34d884f5e3827c15f\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Puede ofrecer m\\u00e1s opciones de env\\u00edo configurando transportistas adicionales\",\"page\":\"index.php?controller=AdminCarriers&token=36f969b0582cf6d34d884f5e3827c15f\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Mejore su tienda con m\\u00f3dulos\",\"subtitle\":{\"1\":\"A\\u00f1ada nuevas caracter\\u00edsticas y gestione las que ya existen gracias a los m\\u00f3dulos.\",\"2\":\"Algunos m\\u00f3dulos ya est\\u00e1n preinstalados, otros son m\\u00f3dulos gratuitos o de pago - \\u00a1navega por nuestra selecci\\u00f3n y descubre los que est\\u00e1n disponibles!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Descubra nuestra selecci\\u00f3n de m\\u00f3dulos en la primera pesta\\u00f1a. Administre sus m\\u00f3dulos en la segunda y siga las notificaciones en la tercera pesta\\u00f1a.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog?_token=PEmryxw5Odykg4_SY6YYp96iRFqeYXzido4tTurCS9Y\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00a1Es su turno!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Ha visto lo esencial, pero hay mucho m\\u00e1s por explorar.<br \\/>\\n          Algunos recursos pueden ayudarle a profundizar aun m\\u00e1s:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Gu\\u00eda de principiante<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Foro<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Formaci\\u00f3n<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial en v\\u00eddeo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Estoy listo<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/module\\/catalog\"}]}]}, 1, \"http://localhost/prestashop/adminqq/index.php?controller=AdminWelcome&token=e45c536f4f1304a87cb7f1181830bc75\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>¡Eh! ¿Se ha perdido?</p>    <p>Para continuar, haga clic aquí:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuar</button>    </div>    <p>Si quiere detener el tutorial, haga clic aquí:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Salir del tutorial de bienvenida</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Paso <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Siguiente</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1208
        $this->displayBlock('content_header', $context, $blocks);
        // line 1209
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1210
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1211
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1212
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/prestashop/adminqq/index.php?controller=AdminDashboard&amp;token=94049b7b7be29807898c7f9d4a232e3d\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap\">
    
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=admin%40admin.com&amp;firstname=Test&amp;lastname=Tesst&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/adminqq/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=admin%40admin.com&amp;firstname=Test&amp;lastname=Tesst&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1320
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 85
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1208
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1209
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1210
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1211
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1320
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__2e87d880ae0b9b768b47d3a4e56ef32a611d251537d92fdfc3020b70ceb12e41";
    }

    public function getDebugInfo()
    {
        return array (  1399 => 1320,  1394 => 1211,  1389 => 1210,  1384 => 1209,  1379 => 1208,  1370 => 85,  1362 => 1320,  1252 => 1212,  1249 => 1211,  1246 => 1210,  1243 => 1209,  1241 => 1208,  114 => 85,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__2e87d880ae0b9b768b47d3a4e56ef32a611d251537d92fdfc3020b70ceb12e41", "");
    }
}
