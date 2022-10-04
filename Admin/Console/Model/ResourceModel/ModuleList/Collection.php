<?php

/**
 * Grid Grid Collection.
 * @category    Webkul
 * @author      Webkul Software Private Limited
 */

namespace Admin\Console\Model\ResourceModel\ModuleList;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection

{
    /**
     * @var string
     */
    protected $_idFieldName = 'module';
    /**
     * Define resource model.
     */
  //  protected function _construct()

   // {

     //   $this->_init('Admin\Console\Model\ModuleList', 'Admin\Console\Model\ResourceModel\ModuleList');
        
   // }


   protected function _construct()
    
    {
        $this->_init(
            \Admin\Console\Model\ModuleList::class,
            \Admin\Console\Model\ResourceModel\ModuleList::class
        );
		$this->_map['fields']['module'] = 'main_table.module';
    }

}