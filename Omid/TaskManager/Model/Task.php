<?php
/**
 * Copyright © 2018 [COMPANY]. All rights reserved.
 * 
 * Omid_TaskManager task model
 * 
 * @category    Omid_TaskManager
 * @author      Omid
 */

namespace Omid\TaskManager\Model;

class Task extends \Magento\Framework\Model\AbstractModel 
        implements \Magento\Framework\DataObject\IdentityInterface
{

	/**
     * @const string cache tag
     */
	const CACHE_TAG = 'omid_taskmanager_task';

	/**
     * @var string cache tag
     */
	protected $_cacheTag = 'omid_taskmanager_task';

	/**
     * @var string event prefix
     */
	protected $_eventPrefix = 'omid_taskmanager_task';

	/**
	 * Define task resource model class
	 * 
     * @return void
     */
	protected function _construct()
	{
		$this->_init('Omid\TaskManager\Model\ResourceModel\Task');
	}

	/**
	 * Return unique cache ID
     * @var array
     */
	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	/**
     * @var array
     */
	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}
