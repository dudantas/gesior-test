<?php

use Canary\Protobuf\Itemsserialization\ItemsSerialization;
use GPBMetadata\Itens;

if (!defined('INITIALIZED'))
	exit;

require_once "protobuf/GPBMetadata/Itens.php";
require_once "protobuf/Canary/Protobuf/Itemsserialization/ItemsSerialization.php";
require_once "protobuf/Canary/Protobuf/Itemsserialization/Item.php";
require_once "protobuf/Canary/Protobuf/Itemsserialization/Attribute.php";

class ItemBinary
{
	const SLOT_FIRST = 1;
	const SLOT_HEAD = 1;
	const SLOT_NECKLACE = 2;
	const SLOT_BACKPACK = 3;
	const SLOT_ARMOR = 4;
	const SLOT_RIGHT = 5;
	const SLOT_LEFT = 6;
	const SLOT_LEGS = 7;
	const SLOT_FEET = 8;
	const SLOT_RING = 9;
	const SLOT_AMMO = 10;
	public static $fields = array('player_id', 'id', 'inventory', 'depot', 'stash', 'reward', 'systems');
	public static $table = 'player_bin_data';
	public $dataFields = array('id' => '1', 'inventory' => NULL, 'depot' => NULL, 'stash' => NULL, 'reward' => NULL, 'systems' => NULL);
	/** @var ItemAttributes */
	public $attributes;

	public function __construct($dataFields = NULL)
	{
		if ($dataFields != NULL)
			$this->loadData($dataFields);
	}

	public function loadData(&$dataFields)
	{
		$this->dataFields = $dataFields;
	}

	public static function addField($name)
	{
		if (!in_array($name, self::$fields))
			self::$fields[] = $name;
	}

	public static function removeField($name)
	{
		if (in_array($name, self::$fields))
			unset(self::$fields[$name]);
	}

	private function deserialize($data) {
		$message = new ItemsSerialization();
		$message->mergeFromString($data);
		$items = $message->getItem();
		return $items;
	}

	public static function getFieldsList()
	{
		return self::$fields;
	}

	public function getID()
	{
		return $this->dataFields['id'];
	}

	public function setID($value)
	{
		$this->dataFields['id'] = $value;
	}

	public function getInventory()
	{
		$items = $this->deserialize($this->dataFields["inventory"]);
		return $items;

	}

	public function setInventory($value)
	{
		$this->dataFields['inventory'] = $value;
	}

	public function getDepot()
	{
		$items = $this->deserialize($this->dataFields['depot']);
		return $items;
	}

	public function setDepot($value)
	{
		$this->dataFields['depot'] = $value;
	}

	public function getInbox()
	{
		$items = $this->deserialize($this->dataFields['inbox']);
		return $items;
	}

	public function setInbox($value)
	{
		$this->dataFields['inbox'] = $value;
	}

	public function getStash()
	{
		$items = $this->deserialize($this->dataFields['stash']);
		return $items;
	}

	public function setStash($value)
	{
		$this->dataFields['stash'] = $value;
	}

	public function getReward()
	{
		$items = $this->deserialize($this->dataFields['reward']);
		return $items;
	}

	public function setReward($value)
	{
		$this->dataFields['reward'] = $value;
	}

	public function getSystems()
	{
		return $this->dataFields['systems'];
	}

	public function setSystems($value)
	{
		$this->dataFields['systems'] = $value;
	}

	public function getAttributesList()
	{
		$this->loadAttributes();
		return $this->attributes->getAttributesList();
	}

	public function loadAttributes()
	{
		if (!isset($this->attributes))
			$this->attributes = new ItemAttributes($this->getAttributes());
	}

	public function getAttributes()
	{
		return $this->dataFields['attributes'];
	}

	public function setAttributes($value)
	{
		$this->dataFields['attributes'] = $value;
	}

	public function hasAttribute($attributeName)
	{
		$this->loadAttributes();
		return $this->attributes->hasAttribute($attributeName);
	}

	public function getAttribute($attributeName)
	{
		$this->loadAttributes();
		try {
			return $this->attributes->getAttribute($attributeName);
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}
}
