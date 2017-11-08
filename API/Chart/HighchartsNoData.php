<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart;

use JsonSerializable;

/**
 * Highcharts no data.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsNoData implements JsonSerializable {

	/**
	 * Attr.
	 *
	 * @var array
	 * @since 3.0.8
	 */
	private $attr;

	/**
	 * Position.
	 *
	 * @var array
	 * @since 3.0.8
	 */
	private $position = ["x" => 0, "y" => 0, "align" => "center", "verticalAlign" => "middle"];

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
	 *
	 * @return void
	 */
	public function clear() {

		// Clear the attr.
		$this->attr = null;

		// Clear the position.
		$this->position = null;

		// Clear the style.
		$this->style = null;

		// Clear the use HTML.
		$this->useHTML = null;
	}

	/**
	 * Get the attr.
	 *
	 * @return array Returns the attr.
	 */
	public function getAttr() {
		return $this->attr;
	}

	/**
	 * Get the position.
	 *
	 * @return array Returns the position.
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
	 * Set the attr.
	 *
	 * @param array $attr The attr.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData Returns the highcharts no data.
	 */
	public function setAttr(array $attr = null) {
		$this->attr = $attr;
		return $this;
	}

	/**
	 * Set the position.
	 *
	 * @param array $position The position.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData Returns the highcharts no data.
	 */
	public function setPosition(array $position = null) {
		$this->position = $position;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData Returns the highcharts no data.
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
		return $this;
	}

	/**
	 * Set the use HTML.
	 *
	 * @param boolean $useHTML The use HTML.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData Returns the highcharts no data.
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
			$output["position"] = $this->position;
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
