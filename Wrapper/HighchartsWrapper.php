<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Wrapper;

/**
 * Highcharts wrapper.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Wrapper
 * @final
 */
final class HighchartsWrapper {

	/**
	 * Wrap
	 */
	const WRAP = "{{JS}}";

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO.
	}

	/**
	 * Unwrap.
	 *
	 * @param string $str The string to unwrap.
	 * @return string Returns the unwrapped string.
	 */
	public function unwrap($str) {
		return str_replace(["\"" . self::WRAP, self::WRAP . "\""], ["", ""], $str);
	}

	/**
	 * Wrap.
	 *
	 * @param string $str The string to wrap.
	 * @return string Returns the wrapped string.
	 */
	public function wrap($str) {
		return $str === "" ? "" : self::WRAP . $str . self::WRAP;
	}

}
