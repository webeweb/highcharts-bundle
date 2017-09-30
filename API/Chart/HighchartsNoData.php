<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\NoData\HighchartsPosition;

/**
 * Highcharts no data.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsNoData implements JsonSerializable {

	/**
	 * Attr.
	 *
	 * @var Object
	 * @since 3.0.8
	 */
	private $attr;

	/**
	 * Position.
	 *
	 * @var HighchartsPosition
	 * @since 3.0.8
	 */
	private $position;

	/**
	 * Style.
	 *
	 * @var array
	 * @since 3.0.8
	 */
	private $style = ["fontSize" => "12px", "fontWeight" => "bold", "color" => "#666666"];

	/**
	 * Use HTML.
	 *
	 * @var boolean
	 * @since 4.1.10
	 */
	private $useHTML = false;

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

		// Check the attr.
		if (!is_null($this->attr)) {
			$this->attr = null;
		}

		// Check the position.
		if (!is_null($this->position)) {
			$this->position->clear();
		}

		// Check the style.
		if (!is_null($this->style)) {
			$this->style = null;
		}

		// Check the use HTML.
		if (!is_null($this->useHTML)) {
			$this->useHTML = null;
		}
	}

	/**
	 * Get the attr.
	 *
	 * @return Object Returns the attr.
	 */
	public function getAttr() {
		return $this->attr;
	}

	/**
	 * Get the position.
	 *
	 * @return HighchartsPosition Returns the position.
	 */
	public function getPosition() {
		return $this->position;
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
	 * Get the use HTML.
	 *
	 * @return boolean Returns the use HTML.
	 */
	public function getUseHTML() {
		return $this->useHTML;
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
	 * Create a new position.
	 *
	 * @return HighchartsPosition Returns the position.
	 */
	public function newPosition() {
		$this->position = new HighchartsPosition();
		return $this->position;
	}

	/**
	 * Set the attr.
	 *
	 * @param Object $attr The attr.
	 * @return HighchartsNoData Returns the highcharts no data.
	 */
	public function setAttr($attr) {
		$this->attr = $attr;
		return $this;
	}

	/**
	 * Set the position.
	 *
	 * @param HighchartsPosition $position The position.
	 * @return HighchartsNoData Returns the highcharts no data.
	 */
	public function setPosition(HighchartsPosition $position = null) {
		$this->position = $position;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return HighchartsNoData Returns the highcharts no data.
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
		return $this;
	}

	/**
	 * Set the use HTML.
	 *
	 * @param boolean $useHTML The use HTML.
	 * @return HighchartsNoData Returns the highcharts no data.
	 */
	public function setUseHTML($useHTML) {
		$this->useHTML = $useHTML;
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

		// Check the attr.
		if (!is_null($this->attr)) {
			$output["attr"] = $this->attr;
		}

		// Check the position.
		if (!is_null($this->position)) {
			$output["position"] = $this->position->toArray();
		}

		// Check the style.
		if (!is_null($this->style)) {
			$output["style"] = $this->style;
		}

		// Check the use HTML.
		if (!is_null($this->useHTML)) {
			$output["useHTML"] = $this->useHTML;
		}

		// Return the output.
		return $output;
	}
}

