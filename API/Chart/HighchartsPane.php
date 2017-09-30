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
 * Highcharts pane.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsPane implements JsonSerializable {

	/**
	 * Background.
	 *
	 * @var array
	 * @since 2.3.0
	 */
	private $background;

	/**
	 * Center.
	 *
	 * @var array
	 * @since 2.3.0
	 */
	private $center = ["50%", "50%"];

	/**
	 * End angle.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $endAngle;

	/**
	 * Size.
	 *
	 * @var integer|string
	 */
	private $size = "85%";

	/**
	 * Start angle.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $startAngle;

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

		// Check the background.
		if (!is_null($this->background)) {
			$this->background = null;
		}

		// Check the center.
		if (!is_null($this->center)) {
			$this->center = null;
		}

		// Check the end angle.
		if (!is_null($this->endAngle)) {
			$this->endAngle = null;
		}

		// Check the size.
		if (!is_null($this->size)) {
			$this->size = null;
		}

		// Check the start angle.
		if (!is_null($this->startAngle)) {
			$this->startAngle = null;
		}
	}

	/**
	 * Get the background.
	 *
	 * @return array Returns the background.
	 */
	public function getBackground() {
		return $this->background;
	}

	/**
	 * Get the center.
	 *
	 * @return array Returns the center.
	 */
	public function getCenter() {
		return $this->center;
	}

	/**
	 * Get the end angle.
	 *
	 * @return integer Returns the end angle.
	 */
	public function getEndAngle() {
		return $this->endAngle;
	}

	/**
	 * Get the size.
	 *
	 * @return integer|string Returns the size.
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * Get the start angle.
	 *
	 * @return integer Returns the start angle.
	 */
	public function getStartAngle() {
		return $this->startAngle;
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
	 * Set the background.
	 *
	 * @param array $background The background.
	 * @return HighchartsPane Returns the highcharts pane.
	 */
	public function setBackground(array $background = null) {
		$this->background = $background;
		return $this;
	}

	/**
	 * Set the center.
	 *
	 * @param array $center The center.
	 * @return HighchartsPane Returns the highcharts pane.
	 */
	public function setCenter(array $center = null) {
		$this->center = $center;
		return $this;
	}

	/**
	 * Set the end angle.
	 *
	 * @param integer $endAngle The end angle.
	 * @return HighchartsPane Returns the highcharts pane.
	 */
	public function setEndAngle($endAngle) {
		$this->endAngle = $endAngle;
		return $this;
	}

	/**
	 * Set the size.
	 *
	 * @param integer|string $size The size.
	 * @return HighchartsPane Returns the highcharts pane.
	 */
	public function setSize($size) {
		$this->size = $size;
		return $this;
	}

	/**
	 * Set the start angle.
	 *
	 * @param integer $startAngle The start angle.
	 * @return HighchartsPane Returns the highcharts pane.
	 */
	public function setStartAngle($startAngle) {
		$this->startAngle = $startAngle;
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

		// Check the background.
		if (!is_null($this->background)) {
			$output["background"] = $this->background;
		}

		// Check the center.
		if (!is_null($this->center)) {
			$output["center"] = $this->center;
		}

		// Check the end angle.
		if (!is_null($this->endAngle)) {
			$output["endAngle"] = $this->endAngle;
		}

		// Check the size.
		if (!is_null($this->size)) {
			$output["size"] = $this->size;
		}

		// Check the start angle.
		if (!is_null($this->startAngle)) {
			$output["startAngle"] = $this->startAngle;
		}

		// Return the output.
		return $output;
	}
}

