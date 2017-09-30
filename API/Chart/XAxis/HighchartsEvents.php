<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\XAxis;

use JsonSerializable;

/**
 * Highcharts events.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\XAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsEvents implements JsonSerializable {

	/**
	 * After breaks.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $afterBreaks;

	/**
	 * After set extremes.
	 *
	 * @var string
	 * @since 2.3
	 */
	private $afterSetExtremes;

	/**
	 * Point break.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $pointBreak;

	/**
	 * Point in break.
	 *
	 * @var string
	 */
	private $pointInBreak;

	/**
	 * Set extremes.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $setExtremes;

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

		// Check the after breaks.
		if (!is_null($this->afterBreaks)) {
			$this->afterBreaks = null;
		}

		// Check the after set extremes.
		if (!is_null($this->afterSetExtremes)) {
			$this->afterSetExtremes = null;
		}

		// Check the point break.
		if (!is_null($this->pointBreak)) {
			$this->pointBreak = null;
		}

		// Check the point in break.
		if (!is_null($this->pointInBreak)) {
			$this->pointInBreak = null;
		}

		// Check the set extremes.
		if (!is_null($this->setExtremes)) {
			$this->setExtremes = null;
		}
	}

	/**
	 * Get the after breaks.
	 *
	 * @return string Returns the after breaks.
	 */
	public function getAfterBreaks() {
		return $this->afterBreaks;
	}

	/**
	 * Get the after set extremes.
	 *
	 * @return string Returns the after set extremes.
	 */
	public function getAfterSetExtremes() {
		return $this->afterSetExtremes;
	}

	/**
	 * Get the point break.
	 *
	 * @return string Returns the point break.
	 */
	public function getPointBreak() {
		return $this->pointBreak;
	}

	/**
	 * Get the point in break.
	 *
	 * @return string Returns the point in break.
	 */
	public function getPointInBreak() {
		return $this->pointInBreak;
	}

	/**
	 * Get the set extremes.
	 *
	 * @return string Returns the set extremes.
	 */
	public function getSetExtremes() {
		return $this->setExtremes;
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
	 * Set the after breaks.
	 *
	 * @param string $afterBreaks The after breaks.
	 * @return HighchartsEvents Returns the highcharts events.
	 */
	public function setAfterBreaks($afterBreaks) {
		$this->afterBreaks = $afterBreaks;
		return $this;
	}

	/**
	 * Set the after set extremes.
	 *
	 * @param string $afterSetExtremes The after set extremes.
	 * @return HighchartsEvents Returns the highcharts events.
	 */
	public function setAfterSetExtremes($afterSetExtremes) {
		$this->afterSetExtremes = $afterSetExtremes;
		return $this;
	}

	/**
	 * Set the point break.
	 *
	 * @param string $pointBreak The point break.
	 * @return HighchartsEvents Returns the highcharts events.
	 */
	public function setPointBreak($pointBreak) {
		$this->pointBreak = $pointBreak;
		return $this;
	}

	/**
	 * Set the point in break.
	 *
	 * @param string $pointInBreak The point in break.
	 * @return HighchartsEvents Returns the highcharts events.
	 */
	public function setPointInBreak($pointInBreak) {
		$this->pointInBreak = $pointInBreak;
		return $this;
	}

	/**
	 * Set the set extremes.
	 *
	 * @param string $setExtremes The set extremes.
	 * @return HighchartsEvents Returns the highcharts events.
	 */
	public function setSetExtremes($setExtremes) {
		$this->setExtremes = $setExtremes;
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

		// Check the after breaks.
		if (!is_null($this->afterBreaks)) {
			$output["afterBreaks"] = $this->afterBreaks;
		}

		// Check the after set extremes.
		if (!is_null($this->afterSetExtremes)) {
			$output["afterSetExtremes"] = $this->afterSetExtremes;
		}

		// Check the point break.
		if (!is_null($this->pointBreak)) {
			$output["pointBreak"] = $this->pointBreak;
		}

		// Check the point in break.
		if (!is_null($this->pointInBreak)) {
			$output["pointInBreak"] = $this->pointInBreak;
		}

		// Check the set extremes.
		if (!is_null($this->setExtremes)) {
			$output["setExtremes"] = $this->setExtremes;
		}

		// Return the output.
		return $output;
	}
}

