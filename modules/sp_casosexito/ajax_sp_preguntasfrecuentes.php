<?php
include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once('sp_homesections.php');

$home_section = new Sp_ImageSection();
$sections = array();

if (!Tools::isSubmit('secure_key') || Tools::getValue('secure_key') != $home_slider->secure_key || !Tools::getValue('action'))
	die(1);

if (Tools::getValue('action') == 'updateSectionPosition' && Tools::getValue('sections'))
{
	$sections = Tools::getValue('sections');

	foreach ($sections as $position => $id_section)
		$res = Db::getInstance()->execute('
			UPDATE `'._DB_PREFIX_.'home_section` SET `position` = '.(int)$position.'
			WHERE `id_home_section` = '.(int)$id_section
		);

	$home_slider->clearCache();
}
