<?php

/**
* Copyright © 2016 Magento. All rights reserved.
* See COPYING.txt for license details.
*/

namespace Omid\TaskManager\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
    * {@inheritdoc}
    * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
    */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        /**
         * Create table 'omid_task_manager'
        */
        $table = $setup->getConnection()
            ->newTable($setup->getTable('omid_task_manager'))
            ->addColumn(
                'task_id',
                Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Task ID'
            )
            ->addColumn(
                'task_name',
                Table::TYPE_TEXT,
                255,
                ['nullable' => false, 'default' => ''],
                'Task Name'
            )
            ->addColumn(
                'task_description',
                Table::TYPE_TEXT,
                null,
                ['nullable' => true, 'default' => ''],
                'Task Description'
            )
            ->addColumn(
                'start_time',
                Table::TYPE_DATETIME,
                null,
                ['nullable' => true],
                'Start Time'
            )
            ->addColumn(
                'end_time',
                Table::TYPE_DATETIME,
                null,
                ['nullable' => true],
                'End Time'
            )
            ->addColumn(
                'assigned_person',
                Table::TYPE_TEXT,
                255,
                ['nullable' => true],
                'Assigned Person'
            )
            ->addColumn(
                'status',
                Table::TYPE_SMALLINT,
                null,
                ['nullable' => false, 'default' => 1],
                'Task Status'
            )->setComment("Task Manager Table");
        $setup->getConnection()->createTable($table);
    }
}
