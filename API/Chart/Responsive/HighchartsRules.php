<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Responsive;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\Responsive\Rules\HighchartsCondition;

/**
 * Highcharts rules.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Responsive
 * @version 5.0.14
 * @final
 */
final class HighchartsRules implements JsonSerializable {

	/**
	 * Chart options.
	 *
	 * @var Object
	 * @since 5.0.0
	 */
	private $chartOptions;

	/**
	 * Condition.
	 *
	 * @var HighchartsCondition
	 * @since 5.0.0
	 */
	private $condition;

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

		// Check the chart options.
		if (!is_null($this->chartOptions)) {
			$this->chartOptions = null;
		}

		// Check the condition.
		if (!is_null($this->condition)) {
			$this->condition->clear();
		}
	}

	/**
	 * Get the chart options.
	 *
	 * @return Object Returns the chart options.
	 */
	public function getChartOptions() {
		return $this->chartOptions;
	}

	/**
	 * Get the condition.
	 *
	 * @return HighchartsCondition Returns the condition.
	 */
	public function getCondition() {
		return $this->condition;
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
	 * Create a new condition.
	 *
	 * @return HighchartsCondition Returns the condition.
	 */
	public function newCondition() {
		$this->condition = new HighchartsCondition();
		return $this->condition;
	}

	/**
	 * Set the chart options.
	 *
	 * @param Object $chartOptions The chart options.
	 * @return HighchartsRules Returns the highcharts rules.
	 */
	public function setChartOptions($chartOptions) {
		$this->chartOptions = $chartOptions;
		return $this;
	}

	/**
	 * Set the condition.
	 *
	 * @param HighchartsCondition $condition The condition.
	 * @return HighchartsRules Returns the highcharts rules.
	 */
	public function setCondition(HighchartsCondition $condition = null) {
		$this->condition = $condition;
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

		// Check the chart options.
		if (!is_null($this->chartOptions)) {
			$output["chartOptions"] = $this->chartOptions;
		}

		// Check the condition.
		if (!is_null($this->condition)) {
			$output["condition"] = $this->condition->toArray();
		}

		// Return the output.
		return $output;
	}
}

