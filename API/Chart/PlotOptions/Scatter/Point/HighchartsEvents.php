<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Scatter\Point;

use JsonSerializable;

/**
 * Highcharts events.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Scatter\Point
 * @version 5.0.14
 * @final
 */
final class HighchartsEvents implements JsonSerializable {

	/**
	 * Click.
	 *
	 * @var string
	 */
	private $click;

	/**
	 * Mouse out.
	 *
	 * @var string
	 */
	private $mouseOut;

	/**
	 * Mouse over.
	 *
	 * @var string
	 */
	private $mouseOver;

	/**
	 * Remove.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $remove;

	/**
	 * Select.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $select;

	/**
	 * Unselect.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $unselect;

	/**
	 * Update.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $update;

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

		// Clear the click.
		$this->click = null;

		// Clear the mouse out.
		$this->mouseOut = null;

		// Clear the mouse over.
		$this->mouseOver = null;

		// Clear the remove.
		$this->remove = null;

		// Clear the select.
		$this->select = null;

		// Clear the unselect.
		$this->unselect = null;

		// Clear the update.
		$this->update = null;
	}

	/**
	 * Get the click.
	 *
	 * @return string Returns the click.
	 */
	public function getClick() {
		return $this->click;
	}

	/**
	 * Get the mouse out.
	 *
	 * @return string Returns the mouse out.
	 */
	public function getMouseOut() {
		return $this->mouseOut;
	}

	/**
	 * Get the mouse over.
	 *
	 * @return string Returns the mouse over.
	 */
	public function getMouseOver() {
		return $this->mouseOver;
	}

	/**
	 * Get the remove.
	 *
	 * @return string Returns the remove.
	 */
	public function getRemove() {
		return $this->remove;
	}

	/**
	 * Get the select.
	 *
	 * @return string Returns the select.
	 */
	public function getSelect() {
		return $this->select;
	}

	/**
	 * Get the unselect.
	 *
	 * @return string Returns the unselect.
	 */
	public function getUnselect() {
		return $this->unselect;
	}

	/**
	 * Get the update.
	 *
	 * @return string Returns the update.
	 */
	public function getUpdate() {
		return $this->update;
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
	 * Set the click.
	 *
	 * @param string $click The click.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Scatter\Point\HighchartsEvents Returns the highcharts events.
	 */
	public function setClick($click) {
		$this->click = $click;
		return $this;
	}

	/**
	 * Set the mouse out.
	 *
	 * @param string $mouseOut The mouse out.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Scatter\Point\HighchartsEvents Returns the highcharts events.
	 */
	public function setMouseOut($mouseOut) {
		$this->mouseOut = $mouseOut;
		return $this;
	}

	/**
	 * Set the mouse over.
	 *
	 * @param string $mouseOver The mouse over.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Scatter\Point\HighchartsEvents Returns the highcharts events.
	 */
	public function setMouseOver($mouseOver) {
		$this->mouseOver = $mouseOver;
		return $this;
	}

	/**
	 * Set the remove.
	 *
	 * @param string $remove The remove.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Scatter\Point\HighchartsEvents Returns the highcharts events.
	 */
	public function setRemove($remove) {
		$this->remove = $remove;
		return $this;
	}

	/**
	 * Set the select.
	 *
	 * @param string $select The select.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Scatter\Point\HighchartsEvents Returns the highcharts events.
	 */
	public function setSelect($select) {
		$this->select = $select;
		return $this;
	}

	/**
	 * Set the unselect.
	 *
	 * @param string $unselect The unselect.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Scatter\Point\HighchartsEvents Returns the highcharts events.
	 */
	public function setUnselect($unselect) {
		$this->unselect = $unselect;
		return $this;
	}

	/**
	 * Set the update.
	 *
	 * @param string $update The update.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Scatter\Point\HighchartsEvents Returns the highcharts events.
	 */
	public function setUpdate($update) {
		$this->update = $update;
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

		// Check the click.
		if (!is_null($this->click)) {
			$output["click"] = $this->click;
		}

		// Check the mouse out.
		if (!is_null($this->mouseOut)) {
			$output["mouseOut"] = $this->mouseOut;
		}

		// Check the mouse over.
		if (!is_null($this->mouseOver)) {
			$output["mouseOver"] = $this->mouseOver;
		}

		// Check the remove.
		if (!is_null($this->remove)) {
			$output["remove"] = $this->remove;
		}

		// Check the select.
		if (!is_null($this->select)) {
			$output["select"] = $this->select;
		}

		// Check the unselect.
		if (!is_null($this->unselect)) {
			$output["unselect"] = $this->unselect;
		}

		// Check the update.
		if (!is_null($this->update)) {
			$output["update"] = $this->update;
		}

		// Return the output.
		return $output;
	}

}
