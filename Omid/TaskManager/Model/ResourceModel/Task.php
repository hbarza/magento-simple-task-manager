<?php
/**
 * Copyright © 2018 [COMPANY]. All rights reserved.
 * 
 * Omid_TaskManager Task data resouce model
 * 
 * @category    Omid_TaskManager
 * @author      Omid
 */

namespace Omid\TaskManager\Model\ResourceModel;

class Task extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	/**
     * @return void
     */
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	) {
		parent::__construct($context);
	}
	
	/**
	 * Define resource table and primary id field
	 * 
     * @return void
     */
	protected function _construct()
	{
		$this->_init('omid_task_manager', 'task_id');
	}
	
}
