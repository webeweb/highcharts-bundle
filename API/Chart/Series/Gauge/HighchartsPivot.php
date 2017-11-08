<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge;

use JsonSerializable;

/**
 * Highcharts pivot.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge
 * @version 5.0.14
 * @final
 */
final class HighchartsPivot implements JsonSerializable {

	/**
	 * Background color.
	 *
	 * @var string
	 * @since 2.3.0
	 */
	private $backgroundColor = "#000000";

	/**
	 * Border color.
	 *
	 * @var string
	 * @since 2.3.0
	 */
	private $borderColor = "#cccccc";

	/**
	 * Border width.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $borderWidth = 0;

	/**
	 * Radius.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $radius = 5;

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
	 *
	 * @return void
	 */
	public function clear() {

		// Clear the background color.
		$this->backgroundColor = null;

		// Clear the border color.
		$this->borderColor = null;

		// Clear the border width.
		$this->borderWidth = null;

		// Clear the radius.
		$this->radius = null;
	}

	/**
	 * Get the background color.
	 *
	 * @return string Returns the background color.
	 */
	public function getBackgroundColor() {
		return $this->backgroundColor;
	}

	/**
	 * Get the border color.
	 *
	 * @return string Returns the border color.
	 */
	public function getBorderColor() {
		return $this->borderColor;
	}

	/**
	 * Get the border width.
	 *
	 * @return integer Returns the border width.
	 */
	public function getBorderWidth() {
		return $this->borderWidth;
	}

	/**
	 * Get the radius.
	 *
	 * @return integer Returns the radius.
	 */
	public function getRadius() {
		return $this->radius;
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
	 * Set the background color.
	 *
	 * @param string $backgroundColor The background color.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPivot Returns the highcharts pivot.
	 */
	public function setBackgroundColor($backgroundColor) {
		$this->backgroundColor = $backgroundColor;
		return $this;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPivot Returns the highcharts pivot.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPivot Returns the highcharts pivot.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the radius.
	 *
	 * @param integer $radius The radius.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPivot Returns the highcharts pivot.
	 */
	public function setRadius($radius) {
		$this->radius = $radius;
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

		// Check the background color.
		if (!is_null($this->backgroundColor)) {
			$output["backgroundColor"] = $this->backgroundColor;
		}

		// Check the border color.
		if (!is_null($this->borderColor)) {
			$output["borderColor"] = $this->borderColor;
		}

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$output["borderWidth"] = $this->borderWidth;
		}

		// Check the radius.
		if (!is_null($this->radius)) {
			$output["radius"] = $this->radius;
		}

		// Return the output.
		return $output;
	}

}
