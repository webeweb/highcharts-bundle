<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker;

use JsonSerializable;

/**
 * Highcharts states.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker
 * @version 5.0.14
 * @final
 */
final class HighchartsStates implements JsonSerializable {

	/**
	 * Hover.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsHover
	 */
	private $hover;

	/**
	 * Select.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsSelect
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
	 *
	 * @return void
	 */
	public function clear() {

		// Clear the hover.
		if (!is_null($this->hover)) {
			$this->hover->clear();
		}

		// Clear the select.
		if (!is_null($this->select)) {
			$this->select->clear();
		}
	}

	/**
	 * Get the hover.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsHover Returns the hover.
	 */
	public function getHover() {
		return $this->hover;
	}

	/**
	 * Get the select.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsSelect Returns the select.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsHover Returns the hover.
	 */
	public function newHover() {
		$this->hover = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsHover();
		return $this->hover;
	}

	/**
	 * Create a new select.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsSelect Returns the select.
	 */
	public function newSelect() {
		$this->select = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsSelect();
		return $this->select;
	}

	/**
	 * Set the hover.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsHover $hover The hover.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\HighchartsStates Returns the highcharts states.
	 */
	public function setHover(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsHover $hover = null) {
		$this->hover = $hover;
		return $this;
	}

	/**
	 * Set the select.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsSelect $select The select.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\HighchartsStates Returns the highcharts states.
	 */
	public function setSelect(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\Data\Marker\States\HighchartsSelect $select = null) {
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
