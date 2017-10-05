<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Wrapper;

/**
 * Highcharts wrapper.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Wrapper
 * @version 5.0.14
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
