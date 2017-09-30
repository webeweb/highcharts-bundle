<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Series\Polygon\Marker;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\Series\Polygon\Marker\States\HighchartsHover;
use WBW\HighchartsBundle\API\Chart\Series\Polygon\Marker\States\HighchartsSelect;

/**
 * Highcharts states.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart\Series\Polygon\Marker
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
	 * Select.
	 *
	 * @var HighchartsSelect
	 */
	private $select;

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

		// Check the hover.
		if (!is_null($this->hover)) {
			$this->hover->clear();
		}

		// Check the select.
		if (!is_null($this->select)) {
			$this->select->clear();
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
	 * Get the select.
	 *
	 * @return HighchartsSelect Returns the select.
	 */
	public function getSelect() {
		return $this->select;
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
	 * Create a new select.
	 *
	 * @return HighchartsSelect Returns the select.
	 */
	public function newSelect() {
		$this->select = new HighchartsSelect();
		return $this->select;
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
	 * Set the select.
	 *
	 * @param HighchartsSelect $select The select.
	 * @return HighchartsStates Returns the highcharts states.
	 */
	public function setSelect(HighchartsSelect $select = null) {
		$this->select = $select;
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

		// Check the select.
		if (!is_null($this->select)) {
			$output["select"] = $this->select->toArray();
		}

		// Return the output.
		return $output;
	}
}

