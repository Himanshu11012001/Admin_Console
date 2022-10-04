<?php

/**
 * Webkul_Grid Grid Interface.
 *
 * @category    Webkul
 *
 * @author      Webkul Software Private Limited
 */

namespace Admin\Console\Api\Data;

interface ModuleListInterface

{

    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */

    const MODULE_NAME = 'module';
    const SCHEMA_VERSION = 'schema_version';
    const DATA_VERSION = 'data_version';
   

    /**
     * Get EntityId.
     *
     * @return int
     */

    public function getModuleName();

    /**
     * Set EntityId.
     */
    public function setModuleName($module);

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getSchemaVersion();

    /**
     * Set Title.
     */
    public function setSchemaVersion($schema_version);

    /**
     * Get Content.
     *
     * @return varchar
     */
    public function getDataVersion();

    /**
     * Set Content.
     */
    public function setDataVersion($data_version);

}