<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Db
 */

namespace Zend\Db\Adapter\Driver\Feature;

use Zend\Db\Adapter\Driver\DriverInterface;

/**
 * @category   Zend
 * @package    Zend_Db
 * @subpackage Adapter
 */
abstract class AbstractFeature
{

    /**
     * @var DriverInterface
     */
    protected $driver = null;

    /**
     * Set driver
     *
     * @param DriverInterface $driver
     * @return void
     */
    public function setDriver(DriverInterface $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Get name
     *
     * @return string
     */
    abstract public function getName();

}
