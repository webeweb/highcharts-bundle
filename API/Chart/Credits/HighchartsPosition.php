<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Credits;

use JsonSerializable;

/**
 * Highcharts position.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Credits
 * @version 5.0.14
 * @final
 */
final class HighchartsPosition implements JsonSerializable {

	/**
	 * Align.
	 *
	 * @var string
	 */
	private $align = "right";

	/**
	 * Vertical align.
	 *
	 * @var string
	 */
	private $verticalAlign = "bottom";

	/**
	 * X.
	 *
	 * @var integer
	 */
	private $x = -10;

	/**
	 * Y.
	 *
	 * @var integer
	 */
	private $y = -5;

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

		// Clear the align.
		$this->align = null;

		// Clear the vertical align.
		$this->verticalAlign = null;

		// Clear the x.
		$this->x = null;

		// Clear the y.
		$this->y = null;
	}

	/**
	 * Get the align.
	 *
	 * @return string Returns the align.
	 */
	public function getAlign() {
		return $this->align;
	}

	/**
	 * Get the vertical align.
	 *
	 * @return string Returns the vertical align.
	 */
	public function getVerticalAlign() {
		return $this->verticalAlign;
	}

	/**
	 * Get the x.
	 *
	 * @return integer Returns the x.
	 */
	public function getX() {
		return $this->x;
	}

	/**
	 * Get the y.
	 *
	 * @return integer Returns the y.
	 */
	public function getY() {
		return $this->y;
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
	 * Set the align.
	 *
	 * @param string $align The align.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Credits\HighchartsPosition Returns the highcharts position.
	 */
	public function setAlign($align) {
		switch ($align) {
			case "center":
			case "left":
			case "right":
			$this->align = $align;
			break;
		}
		return $this;
	}

	/**
	 * Set the vertical align.
	 *
	 * @param string $verticalAlign The vertical align.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Credits\HighchartsPosition Returns the highcharts position.
	 */
	public function setVerticalAlign($verticalAlign) {
		switch ($verticalAlign) {
			case "bottom":
			case "middle":
			case "top":
			$this->verticalAlign = $verticalAlign;
			break;
		}
		return $this;
	}

	/**
	 * Set the x.
	 *
	 * @param integer $x The x.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Credits\HighchartsPosition Returns the highcharts position.
	 */
	public function setX($x) {
		$this->x = $x;
		return $this;
	}

	/**
	 * Set the y.
	 *
	 * @param integer $y The y.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Credits\HighchartsPosition Returns the highcharts position.
	 */
	public function setY($y) {
		$this->y = $y;
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

		// Check the align.
		if (!is_null($this->align)) {
			$output["align"] = $this->align;
		}

		// Check the vertical align.
		if (!is_null($this->verticalAlign)) {
			$output["verticalAlign"] = $this->verticalAlign;
		}

		// Check the x.
		if (!is_null($this->x)) {
			$output["x"] = $this->x;
		}

		// Check the y.
		if (!is_null($this->y)) {
			$output["y"] = $this->y;
		}

		// Return the output.
		return $output;
	}

}
