<?php

/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Omid\TaskManager\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
          /**
           * Install messages
           */
          $data = [
            [
                'task_name'         => 'First Task Name',
                'task_description'  => 'First task description goes in this field',
                'start_time'        => (new \DateTime('tomorrow'))->format('Y-m-d H:i:s'),
                'end_time'          => (new \DateTime('+5 days'))->format('Y-m-d H:i:s'),
            ],
            [
                'task_name'         => 'Second Task Name',
                'task_description'  => 'Second task description goes in this field',
                'start_time'        => (new \DateTime())->format('Y-m-d H:i:s'),
                'end_time'          => (new \DateTime('+3 days'))->format('Y-m-d H:i:s'),
                'assigned_person'   => 'Omid Barza',
                'status'            => 2
            ],
            [
                'task_name'         => 'Third Task Name',
                'task_description'  => 'Third task description goes in this field',
                'start_time'        => (new \DateTime('+4 days'))->format('Y-m-d H:i:s'),
                'end_time'          => (new \DateTime('+6 days'))->format('Y-m-d H:i:s'),
            ],
            [
                'task_name'         => 'First Task Name',
                'task_description'  => 'First task description goes in this field',
                'start_time'        => (new \DateTime('tomorrow'))->format('Y-m-d H:i:s'),
                'end_time'          => (new \DateTime('+5 days'))->format('Y-m-d H:i:s'),
            ],
            [
                'task_name'         => 'Second Task Name',
                'task_description'  => 'Second task description goes in this field',
                'start_time'        => (new \DateTime())->format('Y-m-d H:i:s'),
                'end_time'          => (new \DateTime('+3 days'))->format('Y-m-d H:i:s'),
                'assigned_person'   => 'Omid Barza',
                'status'            => 2
            ],
            [
                'task_name'         => 'Third Task Name',
                'task_description'  => 'Third task description goes in this field',
                'start_time'        => (new \DateTime('+4 days'))->format('Y-m-d H:i:s'),
                'end_time'          => (new \DateTime('+6 days'))->format('Y-m-d H:i:s'),
            ],
          ];
          foreach ($data as $bind) {
              $setup->getConnection()
                ->insertForce($setup->getTable('omid_task_manager'), $bind);
          }
    }
}
