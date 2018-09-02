<?php
namespace Omid\TaskManager\Model;

class Task extends \Magento\Framework\Model\AbstractModel 
        implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'omid_taskmanager_task';

	protected $_cacheTag = 'omid_taskmanager_task';

	protected $_eventPrefix = 'omid_taskmanager_task';

	protected function _construct()
	{
		$this->_init('Omid\TaskManager\Model\ResourceModel\Task');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
