<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

include_once(_PS_MODULE_DIR_.'sp_preguntasfrecuentes/Sp_PreguntaFrecuente.php');

class Sp_PreguntasFrecuentes extends Module implements WidgetInterface
{
    protected $_html = '';
    protected $default_title = 'TAPPLOCK BLUETOOTH PADLOCK';
    protected $default_image = 'tapp-01-carousel.png';
    protected $default_max_attributes = 6;
    protected $default_width = 779;
    protected $default_speed = 5000;
    protected $default_pause_on_hover = 1;
    protected $default_wrap = 1;
    protected $templateFile;

    public function __construct()
    {
        $this->name = 'sp_preguntasfrecuentes';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Stephanie Piñero';
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = 'Preguntas Frecuentes';
        $this->description = 'Permite agregar preguntas frecuentes';
        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:sp_preguntasfrecuentes/views/templates/hook/preguntasfrecuentes.tpl';
    }

    /**
     * @see Module::install()
     */
    public function install()
    {
        /* Adds Module */
        if (parent::install() 
        ) {
            $shops = Shop::getContextListShopID();
            $shop_groups_list = array();

            /* Setup each shop */
            foreach ($shops as $shop_id) {
                $shop_group_id = (int)Shop::getGroupFromShop($shop_id, true);

                if (!in_array($shop_group_id, $shop_groups_list)) {
                    $shop_groups_list[] = $shop_group_id;
                }
            }

            // $res = Configuration::updateValue('HOME_PRINCIPAL_SECTION_TITLE', $this->default_title);
            // $res &= Configuration::updateValue('HOME_PRINCIPAL_SECTION_IMG', $this->default_image);
            // $res &= Configuration::updateValue('HOME_PRINCIPAL_SECTION_ATTRIBUTES_MAX', $this->default_max_attributes);

            /* Creates tables */
            $res &= $this->createTables();

            return (bool)$res;
        }

        return false;
    }


    /**
     * @see Module::uninstall()
     */
    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            /* Deletes tables */
            $res = $this->deleteTables();

            return (bool)$res;
        }

        return false;
    }

    /**
     * Creates tables
     */
      protected function createTables()
    {

        /* Sections configuration */
        $res = Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'categorias_preguntas_frecuentes` (
              `id_categoria_pregunta_frecuente` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `nombre` varchar(255) NOT NULL,
              `icono` varchar(255) NOT NULL,
              `position` int(10) unsigned NOT NULL DEFAULT \'0\',
              `active` tinyint(1) unsigned NOT NULL DEFAULT \'0\',
              PRIMARY KEY (`id_categoria_pregunta_frecuente`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');


        /* Sections lang configuration */
        $res &= Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'preguntas_frecuentes` (
              `id_pregunta_frecuente` int(10) unsigned NOT NULL,
              `id_categoria_pregunta_frecuente` int(10) unsigned NOT NULL,
              `pregunta` varchar(255) NOT NULL,
              `respuesta` text NOT NULL,
               `position` int(10) unsigned NOT NULL DEFAULT \'0\',
              PRIMARY KEY (`id_pregunta_frecuente`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');
        return $res;
    }

    /**
     * deletes tables
     */
    protected function deleteTables()
    {
        $sections = $this->getSections();
        foreach ($sections as $section) {
            $to_del = new Sp_PreguntaFrecuente($section['id_section']);
            $to_del->delete();
        }

        return Db::getInstance()->execute('
            DROP TABLE IF EXISTS `'._DB_PREFIX_.'categorias_preguntas_frecuentes`, `'._DB_PREFIX_.'preguntas_frecuentes`;
        ');
    }

    public function getContent()
    {
        // $this->_html .= $this->headerHTML();
        /* Validate & process */
        // $this->registerHook('displayHome');
        if (
            Tools::isSubmit('submitPregunta') || 
            Tools::isSubmit('submitSection') || 
            Tools::isSubmit('delete_id_section') ||
            Tools::isSubmit('submitSection') ||
            Tools::isSubmit('changeStatus') ||
            Tools::isSubmit('submitPrincipalSection') ||
            Tools::isSubmit('submitBanner') 
        ) {
            if ($this->_postValidation()) {
                $this->_postProcess();
                $this->_html .= $this->renderForm();
                $this->_html .= $this->renderList();
            } else {
                $this->_html .= $this->renderAddForm();
            }

            $this->clearCache();
        } elseif (Tools::isSubmit('addSection') || (Tools::isSubmit('id_section') && $this->sectionExists((int)Tools::getValue('id_section')))) {

            if (Tools::isSubmit('addSection')) {
                $mode = 'add';
            } else {
                $mode = 'edit';
            }

            if ($mode == 'add') {
                if (Shop::getContext() != Shop::CONTEXT_GROUP && Shop::getContext() != Shop::CONTEXT_ALL) {
                    $this->_html .= $this->renderAddForm();
                } else {
                    $this->_html .= $this->getShopContextError(null, $mode);
                }
            } else {
                $associated_shop_ids = Sp_PreguntaFrecuente::getAssociatedIdsShop((int)Tools::getValue('id_section'));
                $context_shop_id = (int)Shop::getContextShopID();

                if ($associated_shop_ids === false) {
                    $this->_html .= $this->getShopAssociationError((int)Tools::getValue('id_section'));
                } elseif (Shop::getContext() != Shop::CONTEXT_GROUP && Shop::getContext() != Shop::CONTEXT_ALL && in_array($context_shop_id, $associated_shop_ids)) {
                    if (count($associated_shop_ids) > 1) {
                        $this->_html = $this->getSharedSectionWarning();
                    }
                    $this->_html .= $this->renderAddForm();
                } else {
                    $shops_name_list = array();
                    foreach ($associated_shop_ids as $shop_id) {
                        $associated_shop = new Shop((int)$shop_id);
                        $shops_name_list[] = $associated_shop->name;
                    }
                    $this->_html .= $this->getShopContextError($shops_name_list, $mode);
                }
            }
        } else {

            $this->_html .= $this->getWarningMultishopHtml().$this->getCurrentShopInfoMsg().$this->renderForm();

            if (Shop::getContext() != Shop::CONTEXT_GROUP && Shop::getContext() != Shop::CONTEXT_ALL) {
                $this->_html .= $this->renderList();
            }
        }

        return $this->_html;
    }


    protected function _postValidation()
    {
        $errors = array();
          $languages = Language::getLanguages(false);
        /* Validation for Section configuration */
        if (Tools::isSubmit('submitPregunta')) {
            if (empty(Tools::getValue('pregunta_1') ||  Tools::getValue('respuesta_1')) 
            ) {
                $errors[] = 'Campos Incompletos';
            }
        } elseif (Tools::isSubmit('changeStatus')) {
            if (!Validate::isInt(Tools::getValue('id_section'))) {
                $errors[] = $this->getTranslator()->trans('Invalid section', array(), 'Modules.Imagesection.Admin');
            }
        } elseif (Tools::isSubmit('submitSection')) {
            /* Checks state (active) */
            if (!Validate::isInt(Tools::getValue('active_section')) || (Tools::getValue('active_section') != 0 && Tools::getValue('active_section') != 1)) {
                $errors[] = $this->getTranslator()->trans('Invalid section state.', array(), 'Modules.Imagesection.Admin');
            }
            /* Checks position */
            if (!Validate::isInt(Tools::getValue('position')) || (Tools::getValue('position') < 0)) {
                $errors[] = $this->getTranslator()->trans('Invalid section position.', array(), 'Modules.Imagesection.Admin');
            }
            /* If edit : checks id_section */
            if (Tools::isSubmit('id_section')) {
                if (!Validate::isInt(Tools::getValue('id_section')) && !$this->sectionExists(Tools::getValue('id_section'))) {
                    $errors[] = $this->getTranslator()->trans('Invalid section ID', array(), 'Modules.Imagesection.Admin');
                }
            }
            /* Checks title/url/legend/description/image */
            $languages = Language::getLanguages(false);
            foreach ($languages as $language) {
                // if (Tools::strlen(Tools::getValue('title_' . $language['id_lang'])) > 255) {
                //     $errors[] = $this->getTranslator()->trans('The title is too long.', array(), 'Modules.Imagesection.Admin');
                // }
               
                // if (Tools::strlen(Tools::getValue('url_' . $language['id_lang'])) > 255) {
                //     $errors[] = $this->getTranslator()->trans('The URL is too long.', array(), 'Modules.Imagesection.Admin');
                // }
                // if (Tools::strlen(Tools::getValue('description_' . $language['id_lang'])) > 4000) {
                //     $errors[] = $this->getTranslator()->trans('The description is too long.', array(), 'Modules.Imagesection.Admin');
                // }
                // if (Tools::strlen(Tools::getValue('url_' . $language['id_lang'])) > 0 && !Validate::isUrl(Tools::getValue('url_' . $language['id_lang']))) {
                //     $errors[] = $this->getTranslator()->trans('The URL format is not correct.', array(), 'Modules.Imagesection.Admin');
                // }
                // if (Tools::getValue('image_' . $language['id_lang']) != null && !Validate::isFileName(Tools::getValue('image_' . $language['id_lang']))) {
                //     $errors[] = $this->getTranslator()->trans('Invalid filename.', array(), 'Modules.Imagesection.Admin');
                // }
                // if (Tools::getValue('image_old_' . $language['id_lang']) != null && !Validate::isFileName(Tools::getValue('image_old_' . $language['id_lang']))) {
                //     $errors[] = $this->getTranslator()->trans('Invalid filename.', array(), 'Modules.Imagesection.Admin');
                // }

                // if (Tools::getValue('image_title_' . $language['id_lang']) != null && !Validate::isFileName(Tools::getValue('image_title_' . $language['id_lang']))) {
                //     $errors[] = $this->getTranslator()->trans('Invalid filename.', array(), 'Modules.Imagesection.Admin');
                // }
                // if (Tools::getValue('image_title_old_' . $language['id_lang']) != null && !Validate::isFileName(Tools::getValue('image_title_old_' . $language['id_lang']))) {
                //     $errors[] = $this->getTranslator()->trans('Invalid filename.', array(), 'Modules.Imagesection.Admin');
                // }
            }

            /* Checks title/url/legend/description for default lang */
            $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
            // if (Tools::strlen(Tools::getValue('url_' . $id_lang_default)) == 0) {
            //     $errors[] = $this->getTranslator()->trans('The URL is not set.', array(), 'Modules.Imagesection.Admin');
            // }
            // if (!Tools::isSubmit('has_picture') && (!isset($_FILES['image_' . $id_lang_default]) || empty($_FILES['image_' . $id_lang_default]['tmp_name']))) {
            //     $errors[] = $this->getTranslator()->trans('The image is not set.', array(), 'Modules.Imagesection.Admin');
            // }
            // if (Tools::getValue('image_old_'.$id_lang_default) && !Validate::isFileName(Tools::getValue('image_old_'.$id_lang_default))) {
            //     $errors[] = $this->getTranslator()->trans('The image is not set.', array(), 'Modules.Imagesection.Admin');
            // }
            // if (!Tools::isSubmit('has_picture') && (!isset($_FILES['image_title_' . $id_lang_default]) || empty($_FILES['image_title_' . $id_lang_default]['tmp_name']))) {
            //     $errors[] = $this->getTranslator()->trans('The image is not set.', array(), 'Modules.Imagesection.Admin');
            // }
            // if (Tools::getValue('image_title_old_'.$id_lang_default) && !Validate::isFileName(Tools::getValue('image_title_old_'.$id_lang_default))) {
            //     $errors[] = $this->getTranslator()->trans('The image is not set.', array(), 'Modules.Imagesection.Admin');
            // }
        } elseif (Tools::isSubmit('delete_id_section') && (!Validate::isInt(Tools::getValue('delete_id_section')) || !$this->sectionExists((int)Tools::getValue('delete_id_section')))) {
            $errors[] = $this->getTranslator()->trans('Invalid section ID', array(), 'Modules.Imagesection.Admin');
        }

        /* Display errors if needed */
        if (count($errors)) {
            $this->_html .= $this->displayError(implode('<br />', $errors));

            return false;
        }

        /* Returns if validation is ok */

        return true;
    }

    protected function _postProcess()
    {
        $errors = array();
        $shop_context = Shop::getContext();

        if(Tools::isSubmit('submitBanner')){
             $res = Configuration::updateValue('PREGUNTAS_FRECUENTES_BANNER', Tools::getValue('PREGUNTAS_FRECUENTES_BANNER'));
            
                
             $this->clearCache();
            if (!$res) {
                $errors[] = $this->displayError($this->getTranslator()->trans('The configuration could not be updated.', array(), 'Modules.Imageslider.Admin'));
            } else {
                // print_r($_FILES);exit;
                 $type = Tools::strtolower(Tools::substr(strrchr($_FILES['PREGUNTAS_FRECUENTES_BANNER']['name'], '.'), 1));
                $imagesize = @getimagesize($_FILES['PREGUNTAS_FRECUENTES_BANNER']['tmp_name']);
                // print_r('<pre>'); print_r($_FILES['PREGUNTAS_FRECUENTES_BANNER']['tmp_name']);print_r('</pre>');exit;
                if (isset($_FILES['PREGUNTAS_FRECUENTES_BANNER']) &&
                    isset($_FILES['PREGUNTAS_FRECUENTES_BANNER']['tmp_name']) &&
                    !empty($_FILES['PREGUNTAS_FRECUENTES_BANNER']['tmp_name']) &&
                    !empty($imagesize) &&
                    in_array(
                        Tools::strtolower(Tools::substr(strrchr($imagesize['mime'], '/'), 1)), array(
                            'jpg',
                            'gif',
                            'jpeg',
                            'png'
                        )
                    ) &&
                    in_array($type, array('jpg', 'gif', 'jpeg', 'png'))
                ) {
                    $temp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');
                    // print_r($type);exit;
                    $salt = sha1(microtime());
                    if ($error = ImageManager::validateUpload($_FILES['PREGUNTAS_FRECUENTES_BANNER'])) {
                        $errors[] = $error;
                    } elseif (!$temp_name || !move_uploaded_file($_FILES['PREGUNTAS_FRECUENTES_BANNER']['tmp_name'], $temp_name)) {
                        return false;
                    } elseif (!ImageManager::resize($temp_name, dirname(__FILE__).'/images/'.$salt.'_'.$_FILES['PREGUNTAS_FRECUENTES_BANNER']['name'], null, null, $type)) {
                        $errors[] = $this->displayError($this->getTranslator()->trans('An error occurred during the image upload process.', array(), 'Admin.Notifications.Error'));
                    }
                    if (isset($temp_name)) {
                        @unlink($temp_name);
                    }

                    $res = Configuration::updateValue('PREGUNTAS_FRECUENTES_BANNER',$salt.'_'.$_FILES['PREGUNTAS_FRECUENTES_BANNER']['name']);
                    // $slide->image[$language['id_lang']] = $salt.'_'.$_FILES['image_'.$language['id_lang']]['name'];
                } elseif (Tools::getValue('image_old_'.$language['id_lang']) != '') {
                    // print_r('test1');exit;
                    // $slide->image[$language['id_lang']] = Tools::getValue('image_old_' . $language['id_lang']);
                }else{
                    // print_r('test2');exit;
                }










                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true) . '&conf=6&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name);
            }
        }elseif(Tools::isSubmit('submitPregunta')){
             if (Tools::getValue('id_pregunta_frecuente')) {
                $pregunta = new Sp_PreguntaFrecuente((int)Tools::getValue('id_pregunta_frecuente'));
                if (!Validate::isLoadedObject($pregunta)) {
                    $this->_html .= $this->displayError($this->getTranslator()->trans('Invalid section ID', array(), 'Modules.Imagesection.Admin'));
                    return false;
                }
            } else {
                $pregunta = new Sp_PreguntaFrecuente();
            }
            // print_r(Tools::getValue('categoria'));exit;
            $pregunta->add((int)Tools::getValue('categoria'),Tools::getValue('pregunta_1'), Tools::getValue('respuesta_1'));

        }elseif (Tools::isSubmit('changeStatus') && Tools::isSubmit('id_section')) {
            $section = new Sp_PreguntaFrecuente((int)Tools::getValue('id_section'));
            if ($section->active == 0) {
                $section->active = 1;
            } else {
                $section->active = 0;
            }
            $res = $section->update();
            $this->clearCache();
            $this->_html .=  $this->displayConfirmation($this->getTranslator()->trans('Configuration updated', array(), 'Admin.Notifications.Success'));

        } elseif (Tools::isSubmit('submitSection')) {
            /* Sets ID if needed */
            if (Tools::getValue('id_section')) {
                $section = new Sp_PreguntaFrecuente((int)Tools::getValue('id_section'));
                if (!Validate::isLoadedObject($section)) {
                    $this->_html .= $this->displayError($this->getTranslator()->trans('Invalid section ID', array(), 'Modules.Imagesection.Admin'));
                    return false;
                }
            } else {
                $section = new Sp_PreguntaFrecuente();
            }
            /* Sets position */
            $section->position = (int)Tools::getValue('position');
            /* Sets active */
            $section->active = (int)Tools::getValue('active_section');

            /* Sets each langue fields */
            $languages = Language::getLanguages(false);

            foreach ($languages as $language) {
                $section->title[$language['id_lang']] = Tools::getValue('title_'.$language['id_lang']);
                $section->url[$language['id_lang']] = Tools::getValue('url_'.$language['id_lang']);
                $section->description[$language['id_lang']] = Tools::getValue('description_'.$language['id_lang']);

                /* Uploads image and sets section */
                $type = Tools::strtolower(Tools::substr(strrchr($_FILES['image_'.$language['id_lang']]['name'], '.'), 1));
                $imagesize = @getimagesize($_FILES['image_'.$language['id_lang']]['tmp_name']);
                // print_r('<pre>');print_r( $_FILES );print_r('</pre>');exit;
                if (isset($_FILES['image_'.$language['id_lang']]) &&
                    isset($_FILES['image_'.$language['id_lang']]['tmp_name']) &&
                    !empty($_FILES['image_'.$language['id_lang']]['tmp_name']) &&
                    !empty($imagesize) &&
                    in_array(
                        Tools::strtolower(Tools::substr(strrchr($imagesize['mime'], '/'), 1)), array(
                            'jpg',
                            'gif',
                            'jpeg',
                            'png',
                            'svg'
                        )
                    ) &&
                    in_array($type, array('jpg', 'gif', 'jpeg', 'png', 'svg'))
                ) {
                    $temp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');
                    $salt = sha1(microtime());
                    if ($error = ImageManager::validateUpload($_FILES['image_'.$language['id_lang']])) {
                        // print_r('error 1');
                        // print_r($error);
                        $errors[] = $error;
                    } elseif (!$temp_name || !move_uploaded_file($_FILES['image_'.$language['id_lang']]['tmp_name'], $temp_name)) {
                        //  print_r('error 2');
                        // print_r($_FILES);exit;
                        return false;
                    } elseif (!ImageManager::resize($temp_name, dirname(__FILE__).'/images/'.$salt.'_'.$_FILES['image_'.$language['id_lang']]['name'], null, null, $type)) {
                        //  print_r('error 3');
                        // print_r($_FILES);
                        $errors[] = $this->displayError($this->getTranslator()->trans('An error occurred during the image upload process.', array(), 'Admin.Notifications.Error'));
                    }
                    // print_r('<pre>');print_r( $temp_name );print_r('</pre>');exit;
                    if (isset($temp_name)) {
                        @unlink($temp_name);
                    }
                    $section->image[$language['id_lang']] = $salt.'_'.$_FILES['image_'.$language['id_lang']]['name'];
                } elseif (Tools::getValue('image_old_'.$language['id_lang']) != '') {
                    $section->image[$language['id_lang']] = Tools::getValue('image_old_' . $language['id_lang']);
                }

                $type = Tools::strtolower(Tools::substr(strrchr($_FILES['image_title_'.$language['id_lang']]['name'], '.'), 1));
                $imagetitlesize = @getimagesize($_FILES['image_title_'.$language['id_lang']]['tmp_name']);
                if (isset($_FILES['image_title_'.$language['id_lang']]) &&
                    isset($_FILES['image_title_'.$language['id_lang']]['tmp_name']) &&
                    !empty($_FILES['image_title_'.$language['id_lang']]['tmp_name']) &&
                    !empty($imagetitlesize) &&
                    in_array(
                        Tools::strtolower(Tools::substr(strrchr($imagetitlesize['mime'], '/'), 1)), array(
                            'jpg',
                            'gif',
                            'jpeg',
                            'png',
                            'svg',
                            'svg+xml'
                        )
                    ) &&
                    in_array($type, array('jpg', 'gif', 'jpeg', 'png', 'svg','svg+xml'))
                ) {
                    $temp_name = tempnam(_PS_TMP_IMG_DIR_, 'PS');
                    $salt = sha1(microtime());

                    if ($error = ImageManager::validateUpload($_FILES['image_title_'.$language['id_lang']])) {
                        $errors[] = $error;
                    } elseif (!$temp_name || !move_uploaded_file($_FILES['image_title_'.$language['id_lang']]['tmp_name'], $temp_name)) {
                        return false;
                    } elseif (!ImageManager::resize($temp_name, dirname(__FILE__).'/images/'.$salt.'_'.$_FILES['image_title_'.$language['id_lang']]['name'], null, null, $type)) {
                        $errors[] = $this->displayError($this->getTranslator()->trans('An error occurred during the image upload process.', array(), 'Admin.Notifications.Error'));
                    }
                    if (isset($temp_name)) {
                        @unlink($temp_name);
                    }
                    $section->image_title[$language['id_lang']] = $salt.'_'.$_FILES['image_title_'.$language['id_lang']]['name'];
                } elseif (Tools::getValue('image_title_old_'.$language['id_lang']) != '') {
                    $section->image_title[$language['id_lang']] = Tools::getValue('image_title_old_' . $language['id_lang']);
                }
            }

            /* Processes if no errors  */
            if (empty($errors)) {
               
                /* Adds */
                if (!Tools::getValue('id_section')) {
                    if (!$section->add()) {
                        $errors[] = $this->displayError($this->getTranslator()->trans('The section could not be added.', array(), 'Modules.Imagesection.Admin'));
                    }
                } elseif (!$section->update()) {
                    $errors[] = $this->displayError($this->getTranslator()->trans('The section could not be updated.', array(), 'Modules.Imagesection.Admin'));
                }
                $this->clearCache();
            }
        } elseif (Tools::isSubmit('delete_id_section')) {
            $section = new Sp_PreguntaFrecuente((int)Tools::getValue('delete_id_section'));
            $res = $section->delete();
            $this->clearCache();
            if (!$res) {
                $this->_html .= $this->displayError('Could not delete.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true) . '&conf=1&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name);
            }
        }

        /* Display errors if needed */
        if (count($errors)) {
            $this->_html .= $this->displayError(implode('<br />', $errors));
        } elseif (Tools::isSubmit('submitSection') && Tools::getValue('id_section')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true) . '&conf=4&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name);
        } elseif (Tools::isSubmit('submitSection')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminModules', true) . '&conf=3&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name);
        }
    }

    public function hookdisplayHeader($params)
    {
        $this->context->controller->registerStylesheet('modules-homesection', 'modules/'.$this->name.'/css/homesection.css', ['media' => 'all', 'priority' => 150]);
        $this->context->controller->registerJavascript('modules-responsivesections', 'modules/'.$this->name.'/js/responsivesections.min.js', ['position' => 'bottom', 'priority' => 150]);
        $this->context->controller->registerJavascript('modules-homesection', 'modules/'.$this->name.'/js/homesection.js', ['position' => 'bottom', 'priority' => 150]);
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {

        if (!$this->isCached($this->templateFile, $this->getCacheId())) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        }

        return $this->fetch($this->templateFile, $this->getCacheId());
    }

    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        $sections = $this->getSections(true);
        $idx = 1;
        if (is_array($sections)) {
            foreach ($sections as &$section) {
                $section['sizes'] = @getimagesize((dirname(__FILE__) . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $section['image']));
                if (isset($section['sizes'][3]) && $section['sizes'][3]) {
                    $section['size'] = $section['sizes'][3];
                }

                $section['sizes_title'] = @getimagesize((dirname(__FILE__) . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $section['image_title']));
                if (isset($section['section'][3]) && $section['section'][3]) {
                    $section['section'] = $section['section'][3];
                }

                if($idx == 1){
                    
                    $section['class'] = 'one';
                    $section['content_class'] = 'col-sm-6 col-sm-offset-6 wow fadeInRight';
                }else if($idx == 2){
                    $section['class'] = 'two';
                    $section['content_class'] = 'col-sm-6 wow fadeInLeft';

                }else if($idx == 3){
                    $section['class'] = 'three ';
                    $section['content_class'] = 'col-sm-6 col-sm-offset-6 wow fadeInRight';
                }

                $idx++;
            }
        }
        // print_r('<pre>');print_r($sections);print_r('</pre>');exit;

        return [
            'home_section' => [
                'sections' => $sections,
            ],
        ];
    }

    private function updateUrl($link)
    {
        if (substr($link, 0, 7) !== "http://" && substr($link, 0, 8) !== "https://") {
            $link = "http://" . $link;
        }

        return $link;
    }

    public function clearCache()
    {
        $this->_clearCache($this->templateFile);
    }

    public function hookActionShopDataDuplication($params)
    {
        Db::getInstance()->execute('
            INSERT IGNORE INTO '._DB_PREFIX_.'homesection (id_home_section, id_shop)
            SELECT id_home_section, '.(int)$params['new_id_shop'].'
            FROM '._DB_PREFIX_.'home_section
            WHERE id_shop = '.(int)$params['old_id_shop']
        );
        $this->clearCache();
    }

    public function headerHTML()
    {
        if (Tools::getValue('controller') != 'AdminModules' && Tools::getValue('configure') != $this->name) {
            return;
        }

        $this->context->controller->addJqueryUI('ui.sortable');
        /* Style & js for fieldset 'sections configuration' */
        $html = '<script type="text/javascript">
            $(function() {
                var $mySections = $("#sections");
                $mySections.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateSectionsPosition";
                        $.post("'.$this->context->shop->physical_uri.$this->context->shop->virtual_uri.'modules/'.$this->name.'/ajax_'.$this->name.'.php?secure_key='.$this->secure_key.'", order);
                        }
                    });
                $mySections.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
        </script>';

        return $html;
    }

    public function getNextPosition()
    {
        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
            SELECT MAX(hss.`position`) AS `next_position`
            FROM `'._DB_PREFIX_.'home_section` hss, `'._DB_PREFIX_.'home_section` hs
            WHERE hss.`id_home_section` = hs.`id_home_section` AND hs.`id_shop` = '.(int)$this->context->shop->id
        );

        return (++$row['next_position']);
    }

    public function getPreguntas($active = null)
    {
        $this->context = Context::getContext();

        $preguntas = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT *
            FROM '._DB_PREFIX_.'preguntas_frecuentes pf '
            // .
            // ($active ? ' WHERE pf.`active` = 1' : ' ').
            // 'ORDER BY pf.position'
        );

      
        // foreach ($sections as &$section) {
        //     $section['image_url'] = $this->context->link->getMediaLink(_MODULE_DIR_.'Sp_PreguntaFrecuentes/images/'.$section['image']);
        //     $section['url'] = $this->updateUrl($section['url']);

        //     $section['image_title_url'] = $this->context->link->getMediaLink(_MODULE_DIR_.'Sp_PreguntaFrecuentes/images/'.$section['image_title']);
        // }

        return $preguntas;
    }

    public function getCategorias($active = null)
    {
        $this->context = Context::getContext();

        $categorias = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT *
            FROM '._DB_PREFIX_.'categorias_preguntas_frecuentes pf '.
            ($active ? ' WHERE pf.`active` = 1' : ' ').'
            ORDER BY pf.position'
        );

        // print_r('
        //     SELECT *
        //     FROM '._DB_PREFIX_.'categorias_preguntas_frecuentes pf '.
        //     ($active ? ' WHERE pf.`active` = 1' : ' ').'
        //     ORDER BY pf.position');exit;
      
        // foreach ($sections as &$section) {
        //     $section['image_url'] = $this->context->link->getMediaLink(_MODULE_DIR_.'Sp_PreguntaFrecuentes/images/'.$section['image']);
        //     $section['url'] = $this->updateUrl($section['url']);

        //     $section['image_title_url'] = $this->context->link->getMediaLink(_MODULE_DIR_.'Sp_PreguntaFrecuentes/images/'.$section['image_title']);
        // }

        return $categorias;
    }

    public function getAllImagesBySectionId($id_section, $active = null, $id_shop = null)
    {
        $this->context = Context::getContext();
        $images = array();

        if (!isset($id_shop))
            $id_shop = $this->context->shop->id;

        $results = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT hssl.`image`, hssl.`id_lang`
            FROM '._DB_PREFIX_.'home_section hs
            LEFT JOIN '._DB_PREFIX_.'home_section hss ON (hs.id_home_section_sections = hss.id_home_section)
            LEFT JOIN '._DB_PREFIX_.'home_section_lang hssl ON (hss.id_home_section = hssl.id_home_section)
            WHERE hs.`id_home_section` = '.(int)$id_section.' AND hs.`id_shop` = '.(int)$id_shop.
            ($active ? ' AND hss.`active` = 1' : ' ')
        );

        foreach ($results as $result)
            $images[$result['id_lang']] = $result['image'];

        return $images;
    }

   public function getAllImagesTitleBySectionId($id_section, $active = null, $id_shop = null)
    {
        $this->context = Context::getContext();
        $images = array();

        if (!isset($id_shop))
            $id_shop = $this->context->shop->id;

        $results = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT hssl.`image_title`, hssl.`id_lang`
            FROM '._DB_PREFIX_.'home_section hs
            LEFT JOIN '._DB_PREFIX_.'home_section hss ON (hs.id_home_section_sections = hss.id_home_section)
            LEFT JOIN '._DB_PREFIX_.'home_section_lang hssl ON (hss.id_home_section = hssl.id_home_section)
            WHERE hs.`id_home_section` = '.(int)$id_section.' AND hs.`id_shop` = '.(int)$id_shop.
            ($active ? ' AND hss.`active` = 1' : ' ')
        );

        foreach ($results as $result)
            $images[$result['id_lang']] = $result['image_title'];

        return $images;
    }

    public function displayStatus($id_section, $active)
    {
        $title = ((int)$active == 0 ? $this->getTranslator()->trans('Disabled', array(), 'Admin.Global') : $this->getTranslator()->trans('Enabled', array(), 'Admin.Global'));
        $icon = ((int)$active == 0 ? 'icon-remove' : 'icon-check');
        $class = ((int)$active == 0 ? 'btn-danger' : 'btn-success');
        $html = '<a class="btn '.$class.'" href="'.AdminController::$currentIndex.
            '&configure='.$this->name.
                '&token='.Tools::getAdminTokenLite('AdminModules').
                '&changeStatus&id_section='.(int)$id_section.'" title="'.$title.'"><i class="'.$icon.'"></i> '.$title.'</a>';

        return $html;
    }

    public function sectionExists($id_section)
    {
        $req = 'SELECT hs.`id_home_section` as id_section
                FROM `'._DB_PREFIX_.'home_section` hs
                WHERE hs.`id_home_section` = '.(int)$id_section;
        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);

        return ($row);
    }

    public function renderList()
    {
        $preguntas_frecuentes = $this->getPreguntas();
        foreach ($preguntas_frecuentes as $key => $pregunta) {
            $preguntas_frecuentes[$key]['status'] = $this->displayStatus($pregunta['id_pregunta_frecuente'], $pregunta['active']);
        }

        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'preguntas' => $preguntas_frecuentes,
                'image_baseurl' => $this->_path.'images/'
            )
        );

        return $this->display(__FILE__, 'list.tpl');
    }

    public function renderAddForm()
    {
        $categorias = $this->getCategorias(true);
        $opciones = array();

        foreach ($categorias as $key => $c) {
             $opciones[] = array(
                "id" => $c['id_categoria_pregunta_frecuente'],
                "name" => $c['nombre']
              );
        }

        // print_r($opciones);exit;
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => 'Pregunta Frecuente',
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => 'Categoria',
                        'name' => 'categoria',
                        'required' => true,
                        'lang' => true,
                        'options' => array(
                            'query' => $opciones,                           
                            'id' => 'id',                           
                            'name' => 'name'                            
                          )
                    ),
                    array(
                        'type' => 'text',
                        'label' => 'Pregunta',
                        'name' => 'pregunta',
                        'required' => true,
                        'lang' => true,
                        // 'desc' => $this->getTranslator()->trans('Maximum image size: %s.', array(ini_get('upload_max_filesize')), 'Admin.Global')
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => 'Respuesta',
                        'name' => 'respuesta',
                        'lang' => true,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->getTranslator()->trans('Enabled', array(), 'Admin.Global'),
                        'name' => 'active_section',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->getTranslator()->trans('Yes', array(), 'Admin.Global')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->getTranslator()->trans('No', array(), 'Admin.Global')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->getTranslator()->trans('Save', array(), 'Admin.Actions'),
                )
            ),
        );

        // if (Tools::isSubmit('id_section') && $this->sectionExists((int)Tools::getValue('id_section'))) {
        //     $section = new Sp_PreguntaFrecuente((int)Tools::getValue('id_section'));
        //     $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'id_section');
        //     $fields_form['form']['images'] = $section->image;
        //     $fields_form['form']['images_title'] = $section->image_title;

        //     $has_picture = true;

        //     foreach (Language::getLanguages(false) as $lang) {
        //         if (!isset($section->image[$lang['id_lang']])) {
        //             $has_picture &= false;
        //         }

        //         if (!isset($section->image_title[$lang['id_lang']])) {
        //             $has_picture &= false;
        //         }
        //     }

        //     if ($has_picture) {
        //         $fields_form['form']['input'][] = array('type' => 'hidden', 'name' => 'has_picture');
        //     }
        // }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->module = $this;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitPregunta';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $language = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->tpl_vars = array(
            'base_url' => $this->context->shop->getBaseURL(),
            'language' => array(
                'id_lang' => $language->id,
                'iso_code' => $language->iso_code
            ),
            'fields_value' => $this->getAddFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            'image_baseurl' => $this->_path.'images/'
        );

        $helper->override_folder = '/';

        $languages = Language::getLanguages(false);

        if (count($languages) > 1) {
            return $this->getMultiLanguageInfoMsg() . $helper->generateForm(array($fields_form));
        } else {
            return $helper->generateForm(array($fields_form));
        }
    }

    public function renderForm()
    {
        
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->getTranslator()->trans('Settings', array(), 'Admin.Global'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'file',
                        'label' => 'Banner',
                        'name' => 'PREGUNTAS_FRECUENTES_BANNER',
                        'desc' =>'Imagen banner',
                        
                    ),
                ),
                'submit' => array(
                    'title' => $this->getTranslator()->trans('Save', array(), 'Admin.Actions'),
                )
            ),
        );


        // $principal_image['sizes'] = @getimagesize(
        //     (
        //         dirname(__FILE__) . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR .  Tools::getValue('HOME_PRINCIPAL_SECTION_TITLE', Configuration::get('HOME_PRINCIPAL_SECTION_IMG'))
        //     )
        // );
        // $principal_image['url'] = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR .  Tools::getValue('HOME_PRINCIPAL_SECTION_TITLE', Configuration::get('HOME_PRINCIPAL_SECTION_IMG'));
        // print_r('<pre>');print_r($principal_image);print_r('</pre>');exit;

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitBanner';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            'principal_image' =>  $principal_image,
            'fields_value' => array(
                'PREGUNTAS_FRECUENTES_BANNER' => Tools::getValue('PREGUNTAS_FRECUENTES_BANNER', Configuration::get('PREGUNTAS_FRECUENTES_BANNER')),
            ),
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getAddFieldsValues()
    {
        $fields = array();

        if (Tools::isSubmit('id_section') && $this->sectionExists((int)Tools::getValue('id_section'))) {
            $section = new Sp_PreguntaFrecuente((int)Tools::getValue('id_section'));
            $fields['id_section'] = (int)Tools::getValue('id_section', $section->id);
        } else {
            $section = new Sp_PreguntaFrecuente();
        }

        $fields['active_section'] = Tools::getValue('active_section', $section->active);
        $fields['has_picture'] = true;

        $languages = Language::getLanguages(false);

        foreach ($languages as $lang) {
            $fields['image'][$lang['id_lang']] = Tools::getValue('image_'.(int)$lang['id_lang']);
            $fields['image_title'][$lang['id_lang']] = Tools::getValue('image_title'.(int)$lang['id_lang']);
            $fields['title'][$lang['id_lang']] = Tools::getValue('title_'.(int)$lang['id_lang'], $section->title[$lang['id_lang']]);
            $fields['url'][$lang['id_lang']] = Tools::getValue('url_'.(int)$lang['id_lang'], $section->url[$lang['id_lang']]);
            $fields['description'][$lang['id_lang']] = Tools::getValue('description_'.(int)$lang['id_lang'], $section->description[$lang['id_lang']]);
        }

        return $fields;
    }

    protected function getMultiLanguageInfoMsg()
    {
        return '<p class="alert alert-warning">'.
                    $this->getTranslator()->trans('Since multiple languages are activated on your shop, please mind to upload your image for each one of them', array(), 'Modules.Imagesection.Admin').
                '</p>';
    }

    protected function getWarningMultishopHtml()
    {
        if (Shop::getContext() == Shop::CONTEXT_GROUP || Shop::getContext() == Shop::CONTEXT_ALL) {
            return '<p class="alert alert-warning">' .
            $this->getTranslator()->trans('You cannot manage sections items from a "All Shops" or a "Group Shop" context, select directly the shop you want to edit', array(), 'Modules.Imagesection.Admin') .
            '</p>';
        } else {
            return '';
        }
    }

    protected function getShopContextError($shop_contextualized_name, $mode)
    {
        if (is_array($shop_contextualized_name)) {
            $shop_contextualized_name = implode('<br/>', $shop_contextualized_name);
        }

        if ($mode == 'edit') {
            return '<p class="alert alert-danger">' .
            $this->trans('You can only edit this section from the shop(s) context: %s', array($shop_contextualized_name), 'Modules.Imagesection.Admin') .
            '</p>';
        } else {
            return '<p class="alert alert-danger">' .
            $this->trans('You cannot add sections from a "All Shops" or a "Group Shop" context', array(), 'Modules.Imagesection.Admin') .
            '</p>';
        }
    }

    protected function getShopAssociationError($id_section)
    {
        return '<p class="alert alert-danger">'.
                        $this->trans('Unable to get section shop association information (id_section: %d)', array((int)$id_section), 'Modules.Imagesection.Admin') .
                '</p>';
    }


    protected function getCurrentShopInfoMsg()
    {
        $shop_info = null;

        if (Shop::isFeatureActive()) {
            if (Shop::getContext() == Shop::CONTEXT_SHOP) {
                $shop_info = $this->trans('The modifications will be applied to shop: %s', array($this->context->shop->name),'Modules.Imagesection.Admin');
            } else if (Shop::getContext() == Shop::CONTEXT_GROUP) {
                $shop_info = $this->trans('The modifications will be applied to this group: %s', array(Shop::getContextShopGroup()->name), 'Modules.Imagesection.Admin');
            } else {
                $shop_info = $this->trans('The modifications will be applied to all shops and shop groups', array(), 'Modules.Imagesection.Admin');
            }

            return '<div class="alert alert-info">'.
                        $shop_info.
                    '</div>';
        } else {
            return '';
        }
    }

    protected function getSharedSectionWarning()
    {
        return '<p class="alert alert-warning">'.
                    $this->trans('This section is shared with other shops! All shops associated to this section will apply modifications made here', array(), 'Modules.Imagesection.Admin').
                '</p>';
    }
}
