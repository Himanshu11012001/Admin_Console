<?php
declare(strict_types=1);

namespace Admin\Console\Controller\Adminhtml\ModuleList;
use Magento\Framework\View\Element\Template;

class Disable extends \Magento\Backend\App\Action

{

    /**   
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()

    {

        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $module = $this->getRequest()->getParam('module');
        if ($module) {
            try {
                // init model and delete
              //  $model = $this->_objectManager->create(\Magelearn\Customform\Model\Customform::class);
              //  $model->load($id);
              //  $model->delete();
                // display success message

               // $block->setData('disable', 'php bin/magento c:c');

                $this->messageManager->addSuccessMessage(__('You disable '.$module));
                // go to grid
                return $resultRedirect->setPath('modulelist/modulelist/index');

            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('modulelist/modulelist/index', ['module' => $module]);

            }

        }

        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t disable '.$module));
        // go to grid
        return $resultRedirect->setPath('modulelist/modulelist/index');
    }
}

