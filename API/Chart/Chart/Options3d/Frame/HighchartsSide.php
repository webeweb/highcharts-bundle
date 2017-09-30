<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame;

use JsonSerializable;

/**
 * Highcharts side.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart\Chart\Options3d\Frame
 * @version 5.0.14
 * @final
 */
final class HighchartsSide implements JsonSerializable {

	/**
	 * Color.
	 *
	 * @var string
	 * @since 4.0
	 */
	private $color = "transparent";

	/**
	 * Size.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $size = 1;

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

		// Check the color.
		if (!is_null($this->color)) {
			$this->color = null;
		}

		// Check the size.
		if (!is_null($this->size)) {
			$this->size = null;
		}
	}

	/**
	 * Get the color.
	 *
	 * @return string Returns the color.
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * Get the size.
	 *
	 * @return integer Returns the size.
	 */
	public function getSize() {
		return $this->size;
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
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return HighchartsSide Returns the highcharts side.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the size.
	 *
	 * @param integer $size The size.
	 * @return HighchartsSide Returns the highcharts side.
	 */
	public function setSize($size) {
		$this->size = $size;
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

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the size.
		if (!is_null($this->size)) {
			$output["size"] = $this->size;
		}

		// Return the output.
		return $output;
	}
}

