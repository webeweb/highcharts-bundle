<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap\States\HighchartsHover;

/**
 * Highcharts states.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap
 * @version 5.0.14
 * @final
 */
final class HighchartsStates implements JsonSerializable {

	/**
	 * Hover.
	 *
	 * @var HighchartsHover
	 */
	private $hover;

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

		// Check the hover.
		if (!is_null($this->hover)) {
			$this->hover->clear();
		}
	}

	/**
	 * Get the hover.
	 *
	 * @return HighchartsHover Returns the hover.
	 */
	public function getHover() {
		return $this->hover;
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
	 * Create a new hover.
	 *
	 * @return HighchartsHover Returns the hover.
	 */
	public function newHover() {
		$this->hover = new HighchartsHover();
		return $this->hover;
	}

	/**
	 * Set the hover.
	 *
	 * @param HighchartsHover $hover The hover.
	 * @return HighchartsStates Returns the highcharts states.
	 */
	public function setHover(HighchartsHover $hover = null) {
		$this->hover = $hover;
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

		// Check the hover.
		if (!is_null($this->hover)) {
			$output["hover"] = $this->hover->toArray();
		}

		// Return the output.
		return $output;
	}

}
