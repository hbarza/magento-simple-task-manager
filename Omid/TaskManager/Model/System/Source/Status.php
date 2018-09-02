<?php
/**
 * Omid_TaskManager Status Options Model
 * @category    Omid_TaskManager
 * @author      Omid
 */

namespace Omid\TaskManager\Model\System\Source;

use Magento\Framework\Data\OptionSourceInterface;
 
class Status implements OptionSourceInterface
{
    /**
     * Get Grid row status type labels array.
     * 
     * @return array
     */
    public function getOptionArray()
    {
        $options = [
            '1' => __('ToDo'),
            '2' => __('In Progress'),
            '3' => __('Done'),
        ];
        return $options;
    }
 
    /**
     * Get Grid row status labels array with empty value for option element.
     *
     * @return array
     */
    public function getAllOptions()
    {
        $options = $this->getOptions();
        array_unshift($options, ['value' => '', 'label' => '']);
        return $options;
    }
 
    /**
     * Get Grid row type array for option element.
     * 
     * @return array
     */
    public function getOptions()
    {
        $options = [];
        foreach ($this->getOptionArray() as $index => $value) {
            $options[] = ['value' => $index, 'label' => $value];
        }
        return $options;
    }
 
    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        return $this->getOptions();
    }
}
