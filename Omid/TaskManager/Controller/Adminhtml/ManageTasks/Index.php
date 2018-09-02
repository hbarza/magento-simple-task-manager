<?php
namespace Omid\TaskManager\Controller\Adminhtml\ManageTasks;
 
class Index extends \Magento\Backend\App\Action
{
    /**
     * Check permissons
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Webkul_Hello::employee');
    }

    /**
     * Task Manger grid page
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        echo __('Hello Webkul Team.');
    }
}
