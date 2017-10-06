<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Series\Area;

use JsonSerializable;

/**
 * Highcharts zones.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Series\Area
 * @version 5.0.14
 * @final
 */
final class HighchartsZones implements JsonSerializable {

	/**
	 * Class name.
	 *
	 * @var string
	 * @since 5.0.0
	 */
	private $className;

	/**
	 * Color.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $color;

	/**
	 * Dash style.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $dashStyle;

	/**
	 * Fill color.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $fillColor;

	/**
	 * Value.
	 *
	 * @var integer
	 * @since 4.1.0
	 */
	private $value;

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

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$this->color = null;
		}

		// Check the dash style.
		if (!is_null($this->dashStyle)) {
			$this->dashStyle = null;
		}

		// Check the fill color.
		if (!is_null($this->fillColor)) {
			$this->fillColor = null;
		}

		// Check the value.
		if (!is_null($this->value)) {
			$this->value = null;
		}
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
	 * Get the color.
	 *
	 * @return string Returns the color.
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * Get the dash style.
	 *
	 * @return string Returns the dash style.
	 */
	public function getDashStyle() {
		return $this->dashStyle;
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
	 * Get the value.
	 *
	 * @return integer Returns the value.
	 */
	public function getValue() {
		return $this->value;
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
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Area\HighchartsZones Returns the highcharts zones.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Area\HighchartsZones Returns the highcharts zones.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the dash style.
	 *
	 * @param string $dashStyle The dash style.
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Area\HighchartsZones Returns the highcharts zones.
	 */
	public function setDashStyle($dashStyle) {
		$this->dashStyle = $dashStyle;
		return $this;
	}

	/**
	 * Set the fill color.
	 *
	 * @param string $fillColor The fill color.
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Area\HighchartsZones Returns the highcharts zones.
	 */
	public function setFillColor($fillColor) {
		$this->fillColor = $fillColor;
		return $this;
	}

	/**
	 * Set the value.
	 *
	 * @param integer $value The value.
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Area\HighchartsZones Returns the highcharts zones.
	 */
	public function setValue($value) {
		$this->value = $value;
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

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the dash style.
		if (!is_null($this->dashStyle)) {
			$output["dashStyle"] = $this->dashStyle;
		}

		// Check the fill color.
		if (!is_null($this->fillColor)) {
			$output["fillColor"] = $this->fillColor;
		}

		// Check the value.
		if (!is_null($this->value)) {
			$output["value"] = $this->value;
		}

		// Return the output.
		return $output;
	}

}
