<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Legend;

use JsonSerializable;

/**
 * Highcharts navigation.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Legend
 * @version 5.0.14
 * @final
 */
final class HighchartsNavigation implements JsonSerializable {

	/**
	 * Active color.
	 *
	 * @var string
	 * @since 2.2.4
	 */
	private $activeColor = "#003399";

	/**
	 * Animation.
	 *
	 * @var boolean|array
	 * @since 2.2.4
	 */
	private $animation = true;

	/**
	 * Arrow size.
	 *
	 * @var integer
	 * @since 2.2.4
	 */
	private $arrowSize = 12;

	/**
	 * Enabled.
	 *
	 * @var boolean
	 * @since 4.2.4
	 */
	private $enabled = true;

	/**
	 * Inactive color.
	 *
	 * @var string
	 * @since 2.2.4
	 */
	private $inactiveColor = "#cccccc";

	/**
	 * Style.
	 *
	 * @var array
	 * @since 2.2.4
	 */
	private $style;

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

		// Check the active color.
		if (!is_null($this->activeColor)) {
			$this->activeColor = null;
		}

		// Check the animation.
		if (!is_null($this->animation)) {
			$this->animation = null;
		}

		// Check the arrow size.
		if (!is_null($this->arrowSize)) {
			$this->arrowSize = null;
		}

		// Check the enabled.
		if (!is_null($this->enabled)) {
			$this->enabled = null;
		}

		// Check the inactive color.
		if (!is_null($this->inactiveColor)) {
			$this->inactiveColor = null;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$this->style = null;
		}
	}

	/**
	 * Get the active color.
	 *
	 * @return string Returns the active color.
	 */
	public function getActiveColor() {
		return $this->activeColor;
	}

	/**
	 * Get the animation.
	 *
	 * @return boolean|array Returns the animation.
	 */
	public function getAnimation() {
		return $this->animation;
	}

	/**
	 * Get the arrow size.
	 *
	 * @return integer Returns the arrow size.
	 */
	public function getArrowSize() {
		return $this->arrowSize;
	}

	/**
	 * Get the enabled.
	 *
	 * @return boolean Returns the enabled.
	 */
	public function getEnabled() {
		return $this->enabled;
	}

	/**
	 * Get the inactive color.
	 *
	 * @return string Returns the inactive color.
	 */
	public function getInactiveColor() {
		return $this->inactiveColor;
	}

	/**
	 * Get the style.
	 *
	 * @return array Returns the style.
	 */
	public function getStyle() {
		return $this->style;
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
	 * Set the active color.
	 *
	 * @param string $activeColor The active color.
	 * @return HighchartsNavigation Returns the highcharts navigation.
	 */
	public function setActiveColor($activeColor) {
		$this->activeColor = $activeColor;
		return $this;
	}

	/**
	 * Set the animation.
	 *
	 * @param boolean|array $animation The animation.
	 * @return HighchartsNavigation Returns the highcharts navigation.
	 */
	public function setAnimation($animation) {
		$this->animation = $animation;
		return $this;
	}

	/**
	 * Set the arrow size.
	 *
	 * @param integer $arrowSize The arrow size.
	 * @return HighchartsNavigation Returns the highcharts navigation.
	 */
	public function setArrowSize($arrowSize) {
		$this->arrowSize = $arrowSize;
		return $this;
	}

	/**
	 * Set the enabled.
	 *
	 * @param boolean $enabled The enabled.
	 * @return HighchartsNavigation Returns the highcharts navigation.
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		return $this;
	}

	/**
	 * Set the inactive color.
	 *
	 * @param string $inactiveColor The inactive color.
	 * @return HighchartsNavigation Returns the highcharts navigation.
	 */
	public function setInactiveColor($inactiveColor) {
		$this->inactiveColor = $inactiveColor;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return HighchartsNavigation Returns the highcharts navigation.
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
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

		// Check the active color.
		if (!is_null($this->activeColor)) {
			$output["activeColor"] = $this->activeColor;
		}

		// Check the animation.
		if (!is_null($this->animation)) {
			$output["animation"] = $this->animation;
		}

		// Check the arrow size.
		if (!is_null($this->arrowSize)) {
			$output["arrowSize"] = $this->arrowSize;
		}

		// Check the enabled.
		if (!is_null($this->enabled)) {
			$output["enabled"] = $this->enabled;
		}

		// Check the inactive color.
		if (!is_null($this->inactiveColor)) {
			$output["inactiveColor"] = $this->inactiveColor;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$output["style"] = $this->style;
		}

		// Return the output.
		return $output;
	}
}

