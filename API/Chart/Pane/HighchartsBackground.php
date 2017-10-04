<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Pane;

use JsonSerializable;

/**
 * Highcharts background.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Pane
 * @version 5.0.14
 * @final
 */
final class HighchartsBackground implements JsonSerializable {

	/**
	 * Background color.
	 *
	 * @var string
	 * @since 2.3.0
	 */
	private $backgroundColor;

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
	private $borderWidth = 1;

	/**
	 * Class name.
	 *
	 * @var string
	 * @since 5.0.0
	 */
	private $className = "highcharts-pane";

	/**
	 * Inner radius.
	 *
	 * @var integer|string
	 * @since 2.3.0
	 */
	private $innerRadius = "0";

	/**
	 * Outer radius.
	 *
	 * @var integer|string
	 * @since 2.3.0
	 */
	private $outerRadius = "105%";

	/**
	 * Shape.
	 *
	 * @var string
	 * @since 2.3.0
	 */
	private $shape = "solid";

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

		// Check the background color.
		if (!is_null($this->backgroundColor)) {
			$this->backgroundColor = null;
		}

		// Check the border color.
		if (!is_null($this->borderColor)) {
			$this->borderColor = null;
		}

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$this->borderWidth = null;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the inner radius.
		if (!is_null($this->innerRadius)) {
			$this->innerRadius = null;
		}

		// Check the outer radius.
		if (!is_null($this->outerRadius)) {
			$this->outerRadius = null;
		}

		// Check the shape.
		if (!is_null($this->shape)) {
			$this->shape = null;
		}
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
	 * Get the class name.
	 *
	 * @return string Returns the class name.
	 */
	public function getClassName() {
		return $this->className;
	}

	/**
	 * Get the inner radius.
	 *
	 * @return integer|string Returns the inner radius.
	 */
	public function getInnerRadius() {
		return $this->innerRadius;
	}

	/**
	 * Get the outer radius.
	 *
	 * @return integer|string Returns the outer radius.
	 */
	public function getOuterRadius() {
		return $this->outerRadius;
	}

	/**
	 * Get the shape.
	 *
	 * @return string Returns the shape.
	 */
	public function getShape() {
		return $this->shape;
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
	 * @return HighchartsBackground Returns the highcharts background.
	 */
	public function setBackgroundColor($backgroundColor) {
		$this->backgroundColor = $backgroundColor;
		return $this;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return HighchartsBackground Returns the highcharts background.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return HighchartsBackground Returns the highcharts background.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsBackground Returns the highcharts background.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the inner radius.
	 *
	 * @param integer|string $innerRadius The inner radius.
	 * @return HighchartsBackground Returns the highcharts background.
	 */
	public function setInnerRadius($innerRadius) {
		$this->innerRadius = $innerRadius;
		return $this;
	}

	/**
	 * Set the outer radius.
	 *
	 * @param integer|string $outerRadius The outer radius.
	 * @return HighchartsBackground Returns the highcharts background.
	 */
	public function setOuterRadius($outerRadius) {
		$this->outerRadius = $outerRadius;
		return $this;
	}

	/**
	 * Set the shape.
	 *
	 * @param string $shape The shape.
	 * @return HighchartsBackground Returns the highcharts background.
	 */
	public function setShape($shape) {
		switch ($shape) {
			case "arc":
			case "solid":
				$this->shape = $shape;
				break;
		}
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

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the inner radius.
		if (!is_null($this->innerRadius)) {
			$output["innerRadius"] = $this->innerRadius;
		}

		// Check the outer radius.
		if (!is_null($this->outerRadius)) {
			$output["outerRadius"] = $this->outerRadius;
		}

		// Check the shape.
		if (!is_null($this->shape)) {
			$output["shape"] = $this->shape;
		}

		// Return the output.
		return $output;
	}

}
