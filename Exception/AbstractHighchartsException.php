<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Exception;

use WBW\Library\Core\Exception\AbstractCoreException;

/**
 * Abstract Highcharts exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HighchartsBundle\Exception
 * @abstract
 */
abstract class AbstractHighchartsException extends AbstractCoreException {

    /**
     * Constructor.
     *
     * @param string $message The message.
     */
    public function __construct($message) {
        parent::__construct($message);
    }

}
