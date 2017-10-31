<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover;

use JsonSerializable;

/**
 * Highcharts marker.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover
 * @version 5.0.14
 * @final
 */
final class HighchartsMarker implements JsonSerializable {

	/**
	 * Enabled.
	 *
	 * @var boolean
	 */
	private $enabled;

	/**
	 * Fill color.
	 *
	 * @var string
	 */
	private $fillColor;

	/**
	 * Height.
	 *
	 * @var integer
	 * @since 4.0.4
	 */
	private $height;

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
	 * Radius.
	 *
	 * @var integer
	 */
	private $radius = 4;

	/**
	 * States.
	 *
	 * @var 
	 */
	private $states;

	/**
	 * Symbol.
	 *
	 * @var string
	 */
	private $symbol;

	/**
	 * Width.
	 *
	 * @var integer
	 * @since 4.0.4
	 */
	private $width;

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

		// Clear the enabled.
		$this->enabled = null;

		// Clear the fill color.
		$this->fillColor = null;

		// Clear the height.
		$this->height = null;

		// Clear the line color.
		$this->lineColor = null;

		// Clear the line width.
		$this->lineWidth = null;

		// Clear the radius.
		$this->radius = null;

		// Clear the states.
		$this->states = null;

		// Clear the symbol.
		$this->symbol = null;

		// Clear the width.
		$this->width = null;
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
	 * Get the height.
	 *
	 * @return integer Returns the height.
	 */
	public function getHeight() {
		return $this->height;
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
	 * Get the radius.
	 *
	 * @return integer Returns the radius.
	 */
	public function getRadius() {
		return $this->radius;
	}

	/**
	 * Get the states.
	 *
	 * @return  Returns the states.
	 */
	public function getStates() {
		return $this->states;
	}

	/**
	 * Get the symbol.
	 *
	 * @return string Returns the symbol.
	 */
	public function getSymbol() {
		return $this->symbol;
	}

	/**
	 * Get the width.
	 *
	 * @return integer Returns the width.
	 */
	public function getWidth() {
		return $this->width;
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover\HighchartsMarker Returns the highcharts marker.
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		return $this;
	}

	/**
	 * Set the fill color.
	 *
	 * @param string $fillColor The fill color.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover\HighchartsMarker Returns the highcharts marker.
	 */
	public function setFillColor($fillColor) {
		$this->fillColor = $fillColor;
		return $this;
	}

	/**
	 * Set the height.
	 *
	 * @param integer $height The height.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover\HighchartsMarker Returns the highcharts marker.
	 */
	public function setHeight($height) {
		$this->height = $height;
		return $this;
	}

	/**
	 * Set the line color.
	 *
	 * @param string $lineColor The line color.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover\HighchartsMarker Returns the highcharts marker.
	 */
	public function setLineColor($lineColor) {
		$this->lineColor = $lineColor;
		return $this;
	}

	/**
	 * Set the line width.
	 *
	 * @param integer $lineWidth The line width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover\HighchartsMarker Returns the highcharts marker.
	 */
	public function setLineWidth($lineWidth) {
		$this->lineWidth = $lineWidth;
		return $this;
	}

	/**
	 * Set the radius.
	 *
	 * @param integer $radius The radius.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover\HighchartsMarker Returns the highcharts marker.
	 */
	public function setRadius($radius) {
		$this->radius = $radius;
		return $this;
	}

	/**
	 * Set the states.
	 *
	 * @param  $states The states.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover\HighchartsMarker Returns the highcharts marker.
	 */
	public function setStates($states) {
		$this->states = $states;
		return $this;
	}

	/**
	 * Set the symbol.
	 *
	 * @param string $symbol The symbol.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover\HighchartsMarker Returns the highcharts marker.
	 */
	public function setSymbol($symbol) {
		switch ($symbol) {
			case null:
			case "circle":
			case "diamond":
			case "square":
			case "triangle":
			case "triangle-down":
			$this->symbol = $symbol;
			break;
		}
		return $this;
	}

	/**
	 * Set the width.
	 *
	 * @param integer $width The width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\States\Hover\HighchartsMarker Returns the highcharts marker.
	 */
	public function setWidth($width) {
		$this->width = $width;
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

		// Check the height.
		if (!is_null($this->height)) {
			$output["height"] = $this->height;
		}

		// Check the line color.
		if (!is_null($this->lineColor)) {
			$output["lineColor"] = $this->lineColor;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$output["lineWidth"] = $this->lineWidth;
		}

		// Check the radius.
		if (!is_null($this->radius)) {
			$output["radius"] = $this->radius;
		}

		// Check the states.
		if (!is_null($this->states)) {
			$output["states"] = $this->states;
		}

		// Check the symbol.
		if (!is_null($this->symbol)) {
			$output["symbol"] = $this->symbol;
		}

		// Check the width.
		if (!is_null($this->width)) {
			$output["width"] = $this->width;
		}

		// Return the output.
		return $output;
	}

}
