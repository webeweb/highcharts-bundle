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
use WBW\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions;

/**
 * Highcharts navigation.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsNavigation implements JsonSerializable {

	/**
	 * Button options.
	 *
	 * @var HighchartsButtonOptions
	 */
	private $buttonOptions;

	/**
	 * Menu item hover style.
	 *
	 * @var array
	 * @since 2.0
	 */
	private $menuItemHoverStyle = ["background" => "#335cad", "color" => "#ffffff"];

	/**
	 * Menu item style.
	 *
	 * @var array
	 * @since 2.0
	 */
	private $menuItemStyle = ["padding" => "0.5em 1em", "color" => "#333333", "background" => "none"];

	/**
	 * Menu style.
	 *
	 * @var array
	 * @since 2.0
	 */
	private $menuStyle = ["border" => "1px solid #999999", "background" => "#ffffff", "padding" => "5px 0"];

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

		// Check the button options.
		if (!is_null($this->buttonOptions)) {
			$this->buttonOptions->clear();
		}

		// Check the menu item hover style.
		if (!is_null($this->menuItemHoverStyle)) {
			$this->menuItemHoverStyle = null;
		}

		// Check the menu item style.
		if (!is_null($this->menuItemStyle)) {
			$this->menuItemStyle = null;
		}

		// Check the menu style.
		if (!is_null($this->menuStyle)) {
			$this->menuStyle = null;
		}
	}

	/**
	 * Get the button options.
	 *
	 * @return HighchartsButtonOptions Returns the button options.
	 */
	public function getButtonOptions() {
		return $this->buttonOptions;
	}

	/**
	 * Get the menu item hover style.
	 *
	 * @return array Returns the menu item hover style.
	 */
	public function getMenuItemHoverStyle() {
		return $this->menuItemHoverStyle;
	}

	/**
	 * Get the menu item style.
	 *
	 * @return array Returns the menu item style.
	 */
	public function getMenuItemStyle() {
		return $this->menuItemStyle;
	}

	/**
	 * Get the menu style.
	 *
	 * @return array Returns the menu style.
	 */
	public function getMenuStyle() {
		return $this->menuStyle;
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
	 * Create a new button options.
	 *
	 * @return HighchartsButtonOptions Returns the button options.
	 */
	public function newButtonOptions() {
		$this->buttonOptions = new HighchartsButtonOptions();
		return $this->buttonOptions;
	}

	/**
	 * Set the button options.
	 *
	 * @param HighchartsButtonOptions $buttonOptions The button options.
	 * @return HighchartsNavigation Returns the highcharts navigation.
	 */
	public function setButtonOptions(HighchartsButtonOptions $buttonOptions = null) {
		$this->buttonOptions = $buttonOptions;
		return $this;
	}

	/**
	 * Set the menu item hover style.
	 *
	 * @param array $menuItemHoverStyle The menu item hover style.
	 * @return HighchartsNavigation Returns the highcharts navigation.
	 */
	public function setMenuItemHoverStyle(array $menuItemHoverStyle = null) {
		$this->menuItemHoverStyle = $menuItemHoverStyle;
		return $this;
	}

	/**
	 * Set the menu item style.
	 *
	 * @param array $menuItemStyle The menu item style.
	 * @return HighchartsNavigation Returns the highcharts navigation.
	 */
	public function setMenuItemStyle(array $menuItemStyle = null) {
		$this->menuItemStyle = $menuItemStyle;
		return $this;
	}

	/**
	 * Set the menu style.
	 *
	 * @param array $menuStyle The menu style.
	 * @return HighchartsNavigation Returns the highcharts navigation.
	 */
	public function setMenuStyle(array $menuStyle = null) {
		$this->menuStyle = $menuStyle;
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

		// Check the button options.
		if (!is_null($this->buttonOptions)) {
			$output["buttonOptions"] = $this->buttonOptions->toArray();
		}

		// Check the menu item hover style.
		if (!is_null($this->menuItemHoverStyle)) {
			$output["menuItemHoverStyle"] = $this->menuItemHoverStyle;
		}

		// Check the menu item style.
		if (!is_null($this->menuItemStyle)) {
			$output["menuItemStyle"] = $this->menuItemStyle;
		}

		// Check the menu style.
		if (!is_null($this->menuStyle)) {
			$output["menuStyle"] = $this->menuStyle;
		}

		// Return the output.
		return $output;
	}
}

