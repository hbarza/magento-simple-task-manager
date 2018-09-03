<?php

namespace Omid\TaskManager\Controller\Adminhtml\ManageTasks;

use Omid\TaskManager\Model\Task;
 
class Add extends \Magento\Backend\App\Action
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
     * Task Manger new task page
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Omid_TaskManager::managetasks');
        $resultPage->getConfig()->getTitle()->prepend(__('New Task'));
        $resultPage->addBreadcrumb(__('Task Manager'), __('Task Manager'));
        $resultPage->addBreadcrumb(__('New Task'), __('New Task'));


        try {
            $taskData = $this->getRequest()->getParam('task');
            if(is_array($taskData)) {   
                $task = $this->_objectManager->create(Task::class);
                $task->setData($taskData)->save();
                $this->messageManager->addSuccess('Task details saved successfully.');
                $resultRedirect = $this->resultRedirectFactory->create();
                return $resultRedirect->setPath('*/*/index');
            }
        }
        catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }

        return $resultPage;
    }
}
