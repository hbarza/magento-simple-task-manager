<?php
/**
 * Copyright © 2018 [COMPANY]. All rights reserved.
 * 
 * Omid_TaskManager Task data provider for add/edit form
 * 
 * @category    Omid_TaskManager
 * @author      Omid
 */

namespace Omid\TaskManager\Model\Task;

use Omid\TaskManager\Model\ResourceModel\Task\CollectionFactory;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $taskCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $taskCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $taskCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    /**
     * Server data to edit form
     * 
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $tasks = $this->collection->getItems();
        $this->loadedData = [];
        foreach ($tasks as $task) {
            $this->loadedData[$task->getId()]['task'] = $task->getData();
        }
        return $this->loadedData;
    }
}
