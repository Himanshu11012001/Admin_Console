<?php
namespace Admin\Console\Controller\Adminhtml\ModuleList;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class Enable extends \Magento\Framework\App\Action\Action

{

    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)

    {

        $this->pageFactory = $pageFactory;
        return parent::__construct($context);

    }

    public function execute()

    { 
        

        $page_object = $this->pageFactory->create();

        $block = $page_object->getLayout()->getBlock('modulelist.modulelist.index');
      $block->setData('custom_parameter', 'lksdfklsjfs');
        return $page_object;

    }    


}