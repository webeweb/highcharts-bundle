<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Exception;

use Exception;

/**
 * Abstract Highcharts exception.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Exception
 * @version 5.0.14
 */
abstract class AbstractHighchartsException extends Exception {

	/**
	 * Constructor.
	 *
	 * @param string $message The message.
	 * @param Exception $previous The previous exception.
	 */
	public function __construct($message, $code = 0, Exception $previous = null) {
		parent::__construct($message, $code, $previous);
	}

}
