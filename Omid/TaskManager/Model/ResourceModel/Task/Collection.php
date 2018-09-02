<?php

namespace Omid\TaskManager\Model\ResourceModel\Task;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'task_id';
	protected $_eventPrefix = 'omid_taskmanager_task_collection';
	protected $_eventObject = 'task_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Omid\TaskManager\Model\Task', 'Omid\TaskManager\Model\ResourceModel\Task');
	}

}
