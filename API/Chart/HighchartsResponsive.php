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

/**
 * Highcharts responsive.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsResponsive implements JsonSerializable {

	/**
	 * Rules.
	 *
	 * @var array
	 * @since 5.0.0
	 */
	private $rules;

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

		// Check the rules.
		if (!is_null($this->rules)) {
			$this->rules = null;
		}
	}

	/**
	 * Get the rules.
	 *
	 * @return array Returns the rules.
	 */
	public function getRules() {
		return $this->rules;
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
	 * Set the rules.
	 *
	 * @param array $rules The rules.
	 * @return HighchartsResponsive Returns the highcharts responsive.
	 */
	public function setRules(array $rules = null) {
		$this->rules = $rules;
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

		// Check the rules.
		if (!is_null($this->rules)) {
			$output["rules"] = $this->rules;
		}

		// Return the output.
		return $output;
	}
}

