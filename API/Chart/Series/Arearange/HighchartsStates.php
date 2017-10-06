<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Series\Arearange;

use JsonSerializable;

/**
 * Highcharts states.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Series\Arearange
 * @version 5.0.14
 * @final
 */
final class HighchartsStates implements JsonSerializable {

	/**
	 * Hover.
	 *
	 * @var \WBW\HighchartsBundle\API\Chart\Series\Arearange\States\HighchartsHover
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
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Arearange\States\HighchartsHover Returns the hover.
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
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Arearange\States\HighchartsHover Returns the hover.
	 */
	public function newHover() {
		$this->hover = new \WBW\HighchartsBundle\API\Chart\Series\Arearange\States\HighchartsHover();
		return $this->hover;
	}

	/**
	 * Set the hover.
	 *
	 * @param \WBW\HighchartsBundle\API\Chart\Series\Arearange\States\HighchartsHover $hover The hover.
	 * @return \WBW\HighchartsBundle\API\Chart\Series\Arearange\HighchartsStates Returns the highcharts states.
	 */
	public function setHover(\WBW\HighchartsBundle\API\Chart\Series\Arearange\States\HighchartsHover $hover = null) {
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
