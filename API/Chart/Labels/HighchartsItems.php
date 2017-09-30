<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Labels;

use JsonSerializable;

/**
 * Highcharts items.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Labels
 * @version 5.0.14
 * @final
 */
final class HighchartsItems implements JsonSerializable {

	/**
	 * Html.
	 *
	 * @var string
	 */
	private $html;

	/**
	 * Style.
	 *
	 * @var array
	 */
	private $style;

	/**
	 * Constructor.
	 *
	 * @param boolean $ignoreDefaultValues Ignore the default values.
	 */
	public function __construct($ignoreDefaultValues = true) {
		if ($ignoreDefaultValues === true) {
			$this->clear();
		}
	}

	/**
	 * Clear.
	 */
	public function clear() {

		// Check the html.
		if (!is_null($this->html)) {
			$this->html = null;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$this->style = null;
		}
	}

	/**
	 * Get the html.
	 *
	 * @return string Returns the html.
	 */
	public function getHtml() {
		return $this->html;
	}

	/**
	 * Get the style.
	 *
	 * @return array Returns the style.
	 */
	public function getStyle() {
		return $this->style;
	}

	/**
	 * Serialize this instance.
	 *
	 * @return array Returns an array representing this instance.
	 */
	public function jsonSerialize() {
		return $this->toArray();
	}

	/**
	 * Set the html.
	 *
	 * @param string $html The html.
	 * @return HighchartsItems Returns the highcharts items.
	 */
	public function setHtml($html) {
		$this->html = $html;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return HighchartsItems Returns the highcharts items.
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
		return $this;
	}

	/**
	 * Convert into an array representing this instance.
	 *
	 * @return array Returns an array representing this instance.
	 */
	public function toArray() {

		// Initialize the output.
		$output = [];

		// Check the html.
		if (!is_null($this->html)) {
			$output["html"] = $this->html;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$output["style"] = $this->style;
		}

		// Return the output.
		return $output;
	}
}

