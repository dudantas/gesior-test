<?php
if(!defined('INITIALIZED'))
	exit;

class ItemsList extends DatabaseList
{
	private $player_id = 0;

    public function __construct($player_id = 0)
    {
		parent::__construct('ItemBinary');
		if($player_id != 0)
		{
			$this->setFilter(new SQL_Filter(new SQL_Field('player_id', 'player_bin_data'), SQL_Filter::EQUAL, $player_id));
			$this->setPlayerId($player_id);
		}
    }

	public function load()
	{
		$this->setClass('ItemBinary');
		parent::load();
		if(count($this->data) > 0)
		{
			$items = new ItemBinary($this->data[0]);
			$this->data = $items;
		}
	}

	public function save($deleteCurrentItems = true)
	{
		if(!isset($this->data))
			$this->data = array();
		if($this->player_id != 0)
		{
			if($deleteCurrentItems)
				$this->getDatabaseHandler()->query('DELETE FROM ' . $this->getDatabaseHandler()->tableName('player_bin_data') . ' WHERE ' . $this->getDatabaseHandler()->fieldName('player_id') . ' = ' . $this->getDatabaseHandler()->quote($this->getPlayerId()));

			if(count($this->data) > 0)
			{
				$keys = array();
				foreach($this->fields as $key)
					$keys[] = $this->getDatabaseHandler()->fieldName($key);

				$query = 'INSERT INTO ' . $this->getDatabaseHandler()->tableName('player_bin_data') . ' (' . implode(', ', $keys) . ') VALUES ';
				$items = array();
				foreach($this->data as $item)
				{
					$fieldValues = array();
					foreach($this->fields as $key)
						if($key != 'player_id' || $this->player_id == 0)
							$fieldValues[] = $this->getDatabaseHandler()->quote($item->data[$key]);
						else
							$fieldValues[] = $this->getDatabaseHandler()->quote($this->player_id);
					$items[] = '(' . implode(', ', $fieldValues) . ')';
				}
				$this->getDatabaseHandler()->query($query . implode(', ', $items));
			}
		}
		else
            throw new LogicException('Cannot save ItemsList. Player ID not set.');
	}

	public function setPlayerId($value)
	{
		$this->player_id = $value;
	}

	public function getPlayerId()
	{
		return $this->player_id;
	}

	public function getItemInventory($pid, $sid = NULL)
	{
		if(!isset($this->data))
			$this->load();
		$inventory = $this->data->getInventory();
		if($sid != null)
		{
			foreach ($inventory as $item)
				if($item->getPID() == $pid && $item->getSID() == $sid)
					return $item;
			return false;
		}
		else
		{
			$items = array();
			foreach ($inventory as $item)
				if($item->getPID() == $pid)
					$items[$item->getSID()] = $item;
			return $items;
		}
	}

	public function getInventoryItems()
	{
		if (!isset($this->data)) 
			$this->load();
		return $this->data->getInventory();
	}

	public function getDepotItems()
	{
		if (!isset($this->data)) 
			$this->load();
		return $this->data->getDepot();
	}

	public function getStashItems()
	{
		if (!isset($this->data)) 
			$this->load();
		return $this->data->getStash();
	}

	public function getInboxItems()
	{
		if (!isset($this->data)) 
			$this->load();
		return $this->data->getInbox();
	}
}
