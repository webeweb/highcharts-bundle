<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\YAxis;

use JsonSerializable;

/**
 * Highcharts breaks.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\YAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsBreaks implements JsonSerializable {

	/**
	 * Break size.
	 *
	 * @var integer
	 * @since 4.1.0
	 */
	private $breakSize = 0;

	/**
	 * From.
	 *
	 * @var integer
	 * @since 4.1.0
	 */
	private $from;

	/**
	 * Repeat.
	 *
	 * @var integer
	 * @since 4.1.0
	 */
	private $repeat = 0;

	/**
	 * To.
	 *
	 * @var integer
	 * @since 4.1.0
	 */
	private $to;

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

		// Check the break size.
		if (!is_null($this->breakSize)) {
			$this->breakSize = null;
		}

		// Check the from.
		if (!is_null($this->from)) {
			$this->from = null;
		}

		// Check the repeat.
		if (!is_null($this->repeat)) {
			$this->repeat = null;
		}

		// Check the to.
		if (!is_null($this->to)) {
			$this->to = null;
		}
	}

	/**
	 * Get the break size.
	 *
	 * @return integer Returns the break size.
	 */
	public function getBreakSize() {
		return $this->breakSize;
	}

	/**
	 * Get the from.
	 *
	 * @return integer Returns the from.
	 */
	public function getFrom() {
		return $this->from;
	}

	/**
	 * Get the repeat.
	 *
	 * @return integer Returns the repeat.
	 */
	public function getRepeat() {
		return $this->repeat;
	}

	/**
	 * Get the to.
	 *
	 * @return integer Returns the to.
	 */
	public function getTo() {
		return $this->to;
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
	 * Set the break size.
	 *
	 * @param integer $breakSize The break size.
	 * @return HighchartsBreaks Returns the highcharts breaks.
	 */
	public function setBreakSize($breakSize) {
		$this->breakSize = $breakSize;
		return $this;
	}

	/**
	 * Set the from.
	 *
	 * @param integer $from The from.
	 * @return HighchartsBreaks Returns the highcharts breaks.
	 */
	public function setFrom($from) {
		$this->from = $from;
		return $this;
	}

	/**
	 * Set the repeat.
	 *
	 * @param integer $repeat The repeat.
	 * @return HighchartsBreaks Returns the highcharts breaks.
	 */
	public function setRepeat($repeat) {
		$this->repeat = $repeat;
		return $this;
	}

	/**
	 * Set the to.
	 *
	 * @param integer $to The to.
	 * @return HighchartsBreaks Returns the highcharts breaks.
	 */
	public function setTo($to) {
		$this->to = $to;
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

		// Check the break size.
		if (!is_null($this->breakSize)) {
			$output["breakSize"] = $this->breakSize;
		}

		// Check the from.
		if (!is_null($this->from)) {
			$output["from"] = $this->from;
		}

		// Check the repeat.
		if (!is_null($this->repeat)) {
			$output["repeat"] = $this->repeat;
		}

		// Check the to.
		if (!is_null($this->to)) {
			$output["to"] = $this->to;
		}

		// Return the output.
		return $output;
	}
}

