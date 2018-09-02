<?php
namespace Omid\TaskManager\Controller\Adminhtml\ManageTasks;

use Omid\TaskManager\Model\TaskFactory;

class Delete extends \Magento\Framework\App\Action\Action {

    /**
     * @var taskFactory
     */
    protected $_taskFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param TaskFactory $_taskFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        TaskFactory $taskFactory
    ) {
        $this->_taskFactory = $taskFactory;
        parent::__construct($context);
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

    public function execute() 
    {
        $id = $this->getRequest()->getParam('id');
        try {
            $task = $this->_taskFactory->create();
            $task->load($id);
            if (!$task->getId()) {
                throw new \Exception('Task is not available anymore');
            }
            $task->delete();
            $this->messageManager->addSuccess('Task have been successfully deleted');
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }
        $this->_redirect($this->_redirect->getRefererUrl());
    }

}
