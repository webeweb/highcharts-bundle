<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Series\Area\Marker\States;

use JsonSerializable;

/**
 * Highcharts hover.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Series\Area\Marker\States
 * @version 5.0.14
 * @final
 */
final class HighchartsHover implements JsonSerializable {

	/**
	 * Enabled.
	 *
	 * @var boolean
	 */
	private $enabled = true;

	/**
	 * Fill color.
	 *
	 * @var string
	 */
	private $fillColor;

	/**
	 * Line color.
	 *
	 * @var string
	 */
	private $lineColor = "#ffffff";

	/**
	 * Line width.
	 *
	 * @var integer
	 */
	private $lineWidth = 0;

	/**
	 * Line width plus.
	 *
	 * @var integer
	 * @since 4.0.3
	 */
	private $lineWidthPlus = 1;

	/**
	 * Radius.
	 *
	 * @var integer
	 */
	private $radius;

	/**
	 * Radius plus.
	 *
	 * @var integer
	 * @since 4.0.3
	 */
	private $radiusPlus = 2;

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

		// Check the enabled.
		if (!is_null($this->enabled)) {
			$this->enabled = null;
		}

		// Check the fill color.
		if (!is_null($this->fillColor)) {
			$this->fillColor = null;
		}

		// Check the line color.
		if (!is_null($this->lineColor)) {
			$this->lineColor = null;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$this->lineWidth = null;
		}

		// Check the line width plus.
		if (!is_null($this->lineWidthPlus)) {
			$this->lineWidthPlus = null;
		}

		// Check the radius.
		if (!is_null($this->radius)) {
			$this->radius = null;
		}

		// Check the radius plus.
		if (!is_null($this->radiusPlus)) {
			$this->radiusPlus = null;
		}
	}

	/**
	 * Get the enabled.
	 *
	 * @return boolean Returns the enabled.
	 */
	public function getEnabled() {
		return $this->enabled;
	}

	/**
	 * Get the fill color.
	 *
	 * @return string Returns the fill color.
	 */
	public function getFillColor() {
		return $this->fillColor;
	}

	/**
	 * Get the line color.
	 *
	 * @return string Returns the line color.
	 */
	public function getLineColor() {
		return $this->lineColor;
	}

	/**
	 * Get the line width.
	 *
	 * @return integer Returns the line width.
	 */
	public function getLineWidth() {
		return $this->lineWidth;
	}

	/**
	 * Get the line width plus.
	 *
	 * @return integer Returns the line width plus.
	 */
	public function getLineWidthPlus() {
		return $this->lineWidthPlus;
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
	 * Get the radius plus.
	 *
	 * @return integer Returns the radius plus.
	 */
	public function getRadiusPlus() {
		return $this->radiusPlus;
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
	 * Set the enabled.
	 *
	 * @param boolean $enabled The enabled.
	 * @return HighchartsHover Returns the highcharts hover.
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		return $this;
	}

	/**
	 * Set the fill color.
	 *
	 * @param string $fillColor The fill color.
	 * @return HighchartsHover Returns the highcharts hover.
	 */
	public function setFillColor($fillColor) {
		$this->fillColor = $fillColor;
		return $this;
	}

	/**
	 * Set the line color.
	 *
	 * @param string $lineColor The line color.
	 * @return HighchartsHover Returns the highcharts hover.
	 */
	public function setLineColor($lineColor) {
		$this->lineColor = $lineColor;
		return $this;
	}

	/**
	 * Set the line width.
	 *
	 * @param integer $lineWidth The line width.
	 * @return HighchartsHover Returns the highcharts hover.
	 */
	public function setLineWidth($lineWidth) {
		$this->lineWidth = $lineWidth;
		return $this;
	}

	/**
	 * Set the line width plus.
	 *
	 * @param integer $lineWidthPlus The line width plus.
	 * @return HighchartsHover Returns the highcharts hover.
	 */
	public function setLineWidthPlus($lineWidthPlus) {
		$this->lineWidthPlus = $lineWidthPlus;
		return $this;
	}

	/**
	 * Set the radius.
	 *
	 * @param integer $radius The radius.
	 * @return HighchartsHover Returns the highcharts hover.
	 */
	public function setRadius($radius) {
		$this->radius = $radius;
		return $this;
	}

	/**
	 * Set the radius plus.
	 *
	 * @param integer $radiusPlus The radius plus.
	 * @return HighchartsHover Returns the highcharts hover.
	 */
	public function setRadiusPlus($radiusPlus) {
		$this->radiusPlus = $radiusPlus;
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

		// Check the enabled.
		if (!is_null($this->enabled)) {
			$output["enabled"] = $this->enabled;
		}

		// Check the fill color.
		if (!is_null($this->fillColor)) {
			$output["fillColor"] = $this->fillColor;
		}

		// Check the line color.
		if (!is_null($this->lineColor)) {
			$output["lineColor"] = $this->lineColor;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$output["lineWidth"] = $this->lineWidth;
		}

		// Check the line width plus.
		if (!is_null($this->lineWidthPlus)) {
			$output["lineWidthPlus"] = $this->lineWidthPlus;
		}

		// Check the radius.
		if (!is_null($this->radius)) {
			$output["radius"] = $this->radius;
		}

		// Check the radius plus.
		if (!is_null($this->radiusPlus)) {
			$output["radiusPlus"] = $this->radiusPlus;
		}

		// Return the output.
		return $output;
	}

}
