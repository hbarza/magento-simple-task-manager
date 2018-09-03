<?php
/**
 * Copyright © 2018 [COMPANY]. All rights reserved.
 * 
 * Omid_TaskManager Show tasks grid action
 * 
 * @category    Omid_TaskManager
 * @author      Omid
 */

namespace Omid\TaskManager\Controller\Adminhtml\ManageTasks;
 
class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Check permission via ACL resource
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Omid_TaskManager::managetasks');
    }

    /**
     * Task Manger grid page
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Omid_TaskManager::managetasks');
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Tasks'));
        $resultPage->addBreadcrumb(__('Task Manager'), __('Task Manager'));
        $resultPage->addBreadcrumb(__('Manage Tasks'), __('Manager Tasks'));
        return $resultPage;
    }
}
