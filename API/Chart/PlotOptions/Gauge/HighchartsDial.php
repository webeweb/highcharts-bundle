<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge;

use JsonSerializable;

/**
 * Highcharts dial.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge
 * @version 5.0.14
 * @final
 */
final class HighchartsDial implements JsonSerializable {

	/**
	 * Background color.
	 *
	 * @var string
	 * @since 2.3.0
	 */
	private $backgroundColor = "#000000";

	/**
	 * Base length.
	 *
	 * @var string
	 * @since 2.3.0
	 */
	private $baseLength = "70%";

	/**
	 * Base width.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $baseWidth = 3;

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
	 * @var string
	 * @since 2.3.0
	 */
	private $radius = "80%";

	/**
	 * Rear length.
	 *
	 * @var string
	 * @since 2.3.0
	 */
	private $rearLength = "10%";

	/**
	 * Top width.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $topWidth = 1;

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

		// Clear the base length.
		$this->baseLength = null;

		// Clear the base width.
		$this->baseWidth = null;

		// Clear the border color.
		$this->borderColor = null;

		// Clear the border width.
		$this->borderWidth = null;

		// Clear the radius.
		$this->radius = null;

		// Clear the rear length.
		$this->rearLength = null;

		// Clear the top width.
		$this->topWidth = null;
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
	 * Get the base length.
	 *
	 * @return string Returns the base length.
	 */
	public function getBaseLength() {
		return $this->baseLength;
	}

	/**
	 * Get the base width.
	 *
	 * @return integer Returns the base width.
	 */
	public function getBaseWidth() {
		return $this->baseWidth;
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
	 * @return string Returns the radius.
	 */
	public function getRadius() {
		return $this->radius;
	}

	/**
	 * Get the rear length.
	 *
	 * @return string Returns the rear length.
	 */
	public function getRearLength() {
		return $this->rearLength;
	}

	/**
	 * Get the top width.
	 *
	 * @return integer Returns the top width.
	 */
	public function getTopWidth() {
		return $this->topWidth;
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial Returns the highcharts dial.
	 */
	public function setBackgroundColor($backgroundColor) {
		$this->backgroundColor = $backgroundColor;
		return $this;
	}

	/**
	 * Set the base length.
	 *
	 * @param string $baseLength The base length.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial Returns the highcharts dial.
	 */
	public function setBaseLength($baseLength) {
		$this->baseLength = $baseLength;
		return $this;
	}

	/**
	 * Set the base width.
	 *
	 * @param integer $baseWidth The base width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial Returns the highcharts dial.
	 */
	public function setBaseWidth($baseWidth) {
		$this->baseWidth = $baseWidth;
		return $this;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial Returns the highcharts dial.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial Returns the highcharts dial.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the radius.
	 *
	 * @param string $radius The radius.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial Returns the highcharts dial.
	 */
	public function setRadius($radius) {
		$this->radius = $radius;
		return $this;
	}

	/**
	 * Set the rear length.
	 *
	 * @param string $rearLength The rear length.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial Returns the highcharts dial.
	 */
	public function setRearLength($rearLength) {
		$this->rearLength = $rearLength;
		return $this;
	}

	/**
	 * Set the top width.
	 *
	 * @param integer $topWidth The top width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDial Returns the highcharts dial.
	 */
	public function setTopWidth($topWidth) {
		$this->topWidth = $topWidth;
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

		// Check the base length.
		if (!is_null($this->baseLength)) {
			$output["baseLength"] = $this->baseLength;
		}

		// Check the base width.
		if (!is_null($this->baseWidth)) {
			$output["baseWidth"] = $this->baseWidth;
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

		// Check the rear length.
		if (!is_null($this->rearLength)) {
			$output["rearLength"] = $this->rearLength;
		}

		// Check the top width.
		if (!is_null($this->topWidth)) {
			$output["topWidth"] = $this->topWidth;
		}

		// Return the output.
		return $output;
	}

}
