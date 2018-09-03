<?php
/**
 * Copyright © 2018 [COMPANY]. All rights reserved.
 * 
 * Omid_TaskManager task form save button
 * 
 * @category    Omid_TaskManager
 * @author      Omid
 */

namespace Omid\TaskManager\Block\Adminhtml\Task\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save Task'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 90,
        ];
    }
}
