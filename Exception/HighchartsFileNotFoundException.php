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

/**
 * Highcharts file not found exception.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Exception
 * @version 5.0.14
 * @final
 */
final class HighchartsFileNotFoundException extends AbstractHighchartsException {

	/**
	 * Constructor.
	 *
	 * @param string $filepath The file path.
	 */
	public function __construct($filepath) {
		parent::__construct("The file \"" . $filepath . "\" was not found");
	}

}
