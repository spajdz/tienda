<?php

class Sp_PreguntaFrecuente extends ObjectModel
{
	public $title;
	public $description;
	public $url;
	public $image;
	public $image_title;
	public $active;
	public $position;
	public $id_shop;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'home_section',
		'primary' => 'id_home_section',
		'multilang' => true,
		'fields' => array(
			'active' =>			array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
			'position' =>		array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),

			// Lang fields
			'description' =>	array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 4000),
			'title' =>			array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255),
			'url' =>			array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isUrl', 'required' => true, 'size' => 255),
			'image' =>			array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255),
			'image_title' =>	array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255),
		)
	);

	public	function __construct($id_slide = null, $id_lang = null, $id_shop = null, Context $context = null)
	{
		parent::__construct($id_slide, $id_lang, $id_shop);
	}

	public function add($categoria = null, $pregunta = null, $respuesta = null, $autodate = null, $null_values = null )
	{
		$context = Context::getContext();
		$id_shop = $context->shop->id;
		$id_shop = 1;

		// $res = parent::add($autodate, $null_values);
		$res = Db::getInstance()->execute('
			INSERT INTO `'._DB_PREFIX_.'preguntas_frecuentes` (id_categoria_pregunta_frecuente, `pregunta`, respuesta)
			VALUES('.(int)$categoria.', "'.$pregunta.'", "'.$respuesta.'")'
		);
		return $res;
	}

	public function delete()
	{
		$res = true;

		$res &= $this->reOrderPositions();

		$res &= Db::getInstance()->execute('
			DELETE FROM `'._DB_PREFIX_.'homhome_sectionslider`
			WHERE `id_home_section` = '.(int)$this->id
		);

		$res &= parent::delete();
		return $res;
	}

	public function reOrderPositions()
	{
		$id_slide = $this->id;
		$context = Context::getContext();
		$id_shop = $context->shop->id;

		$max = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT MAX(hss.`position`) as position
			FROM `'._DB_PREFIX_.'home_section` hss
			WHERE hs.`id_shop` = '.(int)$id_shop
		);

		if ((int)$max == (int)$id_section)
			return true;

		$rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT hss.`position` as position, hss.`id_home_section` as id_section
			FROM `'._DB_PREFIX_.'home_section` hss
			WHERE hs.`id_shop` = '.(int)$id_shop.' AND hss.`position` > '.(int)$this->position
		);

		foreach ($rows as $row)
		{
			$current_section = new Sp_HomeSection($row['id_section']);
			--$current_section->position;
			$current_section->update();
			unset($current_section);
		}

		return true;
	}

	public static function getAssociatedIdsShop($id_section)
	{
		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT hs.`id_shop`
			FROM `'._DB_PREFIX_.'home_section` hs
			WHERE hs.`id_home_section` = '.(int)$id_section
		);

		if (!is_array($result))
			return false;

		$return = array();

		foreach ($result as $id_shop)
			$return[] = (int)$id_shop['id_shop'];

		return $return;
	}

}
