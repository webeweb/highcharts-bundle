<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Chart;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\Chart\ResetZoomButton\HighchartsPosition;

/**
 * Highcharts reset zoom button.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsResetZoomButton implements JsonSerializable {

	/**
	 * Position.
	 *
	 * @var HighchartsPosition
	 * @since 2.2
	 */
	private $position;

	/**
	 * Relative to.
	 *
	 * @var string
	 * @since 2.2
	 */
	private $relativeTo = "plot";

	/**
	 * Theme.
	 *
	 * @var Object
	 * @since 2.2
	 */
	private $theme;

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

		// Check the position.
		if (!is_null($this->position)) {
			$this->position->clear();
		}

		// Check the relative to.
		if (!is_null($this->relativeTo)) {
			$this->relativeTo = null;
		}

		// Check the theme.
		if (!is_null($this->theme)) {
			$this->theme = null;
		}
	}

	/**
	 * Get the position.
	 *
	 * @return HighchartsPosition Returns the position.
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Get the relative to.
	 *
	 * @return string Returns the relative to.
	 */
	public function getRelativeTo() {
		return $this->relativeTo;
	}

	/**
	 * Get the theme.
	 *
	 * @return Object Returns the theme.
	 */
	public function getTheme() {
		return $this->theme;
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
	 * Create a new position.
	 *
	 * @return HighchartsPosition Returns the position.
	 */
	public function newPosition() {
		$this->position = new HighchartsPosition();
		return $this->position;
	}

	/**
	 * Set the position.
	 *
	 * @param HighchartsPosition $position The position.
	 * @return HighchartsResetZoomButton Returns the highcharts reset zoom button.
	 */
	public function setPosition(HighchartsPosition $position = null) {
		$this->position = $position;
		return $this;
	}

	/**
	 * Set the relative to.
	 *
	 * @param string $relativeTo The relative to.
	 * @return HighchartsResetZoomButton Returns the highcharts reset zoom button.
	 */
	public function setRelativeTo($relativeTo) {
		$this->relativeTo = $relativeTo;
		return $this;
	}

	/**
	 * Set the theme.
	 *
	 * @param Object $theme The theme.
	 * @return HighchartsResetZoomButton Returns the highcharts reset zoom button.
	 */
	public function setTheme($theme) {
		$this->theme = $theme;
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

		// Check the position.
		if (!is_null($this->position)) {
			$output["position"] = $this->position->toArray();
		}

		// Check the relative to.
		if (!is_null($this->relativeTo)) {
			$output["relativeTo"] = $this->relativeTo;
		}

		// Check the theme.
		if (!is_null($this->theme)) {
			$output["theme"] = $this->theme;
		}

		// Return the output.
		return $output;
	}
}

