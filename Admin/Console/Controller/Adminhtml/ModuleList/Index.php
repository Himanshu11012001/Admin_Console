<?php
/**
 * Webkul Grid Controller
 *
 * @category    Webkul
 * @package     Webkul_Grid
 * @author      Webkul Software Private Limited
 *
 */
namespace Admin\Console\Controller\Adminhtml\ModuleList;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;

    /**
     * @param \Magento\Backend\App\Action\Context        $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) 
    
    {

        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;

    }

    /**
     * Grid List page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Admin_Console::grid_list');
        $resultPage->getConfig()->getTitle()->prepend(__('Grid List'));



        $module = $this->getRequest()->getParam('module');
        $value = $this->getRequest()->getParam('value');
        if($value==1){
            $block = $resultPage->getLayout()->getBlock('modulelist.modulelist.index');

            $enable ='php bin/magento module:enable '.$module;
            $block->setData('custom_parameter', $enable );
         // $block->setData('custom_parameter','php bin/magento c:c' );

        }
        else if($value ==2){
            $block = $resultPage->getLayout()->getBlock('modulelist.modulelist.index');

            $disable ='php bin/magento module:disable '.$module;
            $block->setData('custom_parameter', $disable );

          // $block->setData('custom_parameter', 'php bin/magento module:status' );

        }

        

       



        return $resultPage;
    }

    /**
     * Check Grid List Permission.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Admin_Console::grid_list');
    }
}