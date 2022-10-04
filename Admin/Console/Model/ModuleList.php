<?php

/**
 * Grid Grid Model.
 * @category  Webkul
 * @package   Webkul_Grid
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
namespace Admin\Console\Model;

use Admin\Console\Api\Data\ModuleListInterface;

class ModuleList extends \Magento\Framework\Model\AbstractModel implements ModuleListInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'setup_module';

    /**
     * @var string
     */
    protected $_cacheTag = 'setup_module';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'setup_module';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Admin\Console\Model\ResourceModel\ModuleList');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getModuleName()
    {
        return $this->getData(self::MODULE_NAME);
    }

    /**
     * Set EntityId.
     */
    public function setModuleName($module)
    {
        return $this->setData(self::MODULE_NAME, $module);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getSchemaVersion()
    {
        return $this->getData(self::SCHEMA_VERSION);
    }

    /**
     * Set Title.
     */
    public function setSchemaVersion($schema_version)
    {
        return $this->setData(self::SCHEMA_VERSION, $schema_version);
    }

    /**
     * Get getContent.
     *
     * @return varchar
     */


    public function getDataVersion()
    {
        return $this->getData(self::DATA_VERSION);
    }

    /**
     * Set Content.
     */


    public function setDataVersion($data_version)
    {
        return $this->setData(self::DATA_VERSION, $data_version);
    }

   
}