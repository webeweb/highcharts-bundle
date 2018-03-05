<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Exception;

use Exception;

/**
 * Abstract Highcharts exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Exception
 * @abstract
 */
abstract class AbstractHighchartsException extends Exception {

	/**
	 * Constructor.
	 *
	 * @param string $message The message.
	 * @param integer $code The code.
	 * @param Exception $previous The previous exception.
	 */
	public function __construct($message, $code = 0, Exception $previous = null) {
		parent::__construct($message, $code, $previous);
	}

}
