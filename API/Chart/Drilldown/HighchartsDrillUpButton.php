<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Drilldown;

use JsonSerializable;

/**
 * Highcharts drill up button.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Drilldown
 * @version 5.0.14
 * @final
 */
final class HighchartsDrillUpButton implements JsonSerializable {

	/**
	 * Position.
	 *
	 * @var Object
	 * @since 3.0.8
	 */
	private $position;

	/**
	 * Relative to.
	 *
	 * @var string
	 * @since 3.0.8
	 */
	private $relativeTo = "plotBox";

	/**
	 * Theme.
	 *
	 * @var Object
	 * @since 3.0.8
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
			$this->position = null;
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
	 * @return Object Returns the position.
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
	 * Set the position.
	 *
	 * @param Object $position The position.
	 * @return HighchartsDrillUpButton Returns the highcharts drill up button.
	 */
	public function setPosition($position) {
		$this->position = $position;
		return $this;
	}

	/**
	 * Set the relative to.
	 *
	 * @param string $relativeTo The relative to.
	 * @return HighchartsDrillUpButton Returns the highcharts drill up button.
	 */
	public function setRelativeTo($relativeTo) {
		$this->relativeTo = $relativeTo;
		return $this;
	}

	/**
	 * Set the theme.
	 *
	 * @param Object $theme The theme.
	 * @return HighchartsDrillUpButton Returns the highcharts drill up button.
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
			$output["position"] = $this->position;
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

