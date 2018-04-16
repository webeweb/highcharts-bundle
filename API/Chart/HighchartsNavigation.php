<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts navigation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsNavigation implements JsonSerializable {

    /**
     * Button options.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions
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
        if (true === $ignoreDefaultValues) {
            $this->clear();
        }
    }

    /**
     * Clear.
     *
     * @return void
     */
    public function clear() {

        // Clear the button options.
        if (null !== $this->buttonOptions) {
            $this->buttonOptions->clear();
        }

        // Clear the menu item hover style.
        $this->menuItemHoverStyle = null;

        // Clear the menu item style.
        $this->menuItemStyle = null;

        // Clear the menu style.
        $this->menuStyle = null;
    }

    /**
     * Get the button options.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions Returns the button options.
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions Returns the button options.
     */
    public function newButtonOptions() {
        $this->buttonOptions = new \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions();
        return $this->buttonOptions;
    }

    /**
     * Set the button options.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions $buttonOptions The button options.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation Returns the highcharts navigation.
     */
    public function setButtonOptions(\WBW\Bundle\HighchartsBundle\API\Chart\Navigation\HighchartsButtonOptions $buttonOptions = null) {
        $this->buttonOptions = $buttonOptions;
        return $this;
    }

    /**
     * Set the menu item hover style.
     *
     * @param array $menuItemHoverStyle The menu item hover style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation Returns the highcharts navigation.
     */
    public function setMenuItemHoverStyle(array $menuItemHoverStyle = null) {
        $this->menuItemHoverStyle = $menuItemHoverStyle;
        return $this;
    }

    /**
     * Set the menu item style.
     *
     * @param array $menuItemStyle The menu item style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation Returns the highcharts navigation.
     */
    public function setMenuItemStyle(array $menuItemStyle = null) {
        $this->menuItemStyle = $menuItemStyle;
        return $this;
    }

    /**
     * Set the menu style.
     *
     * @param array $menuStyle The menu style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation Returns the highcharts navigation.
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

        // Set the button options.
        if (null !== $this->buttonOptions) {
            ArrayUtility::set($output, "buttonOptions", $this->buttonOptions->toArray(), []);
        }

        // Set the menu item hover style.
        ArrayUtility::set($output, "menuItemHoverStyle", $this->menuItemHoverStyle, [null]);

        // Set the menu item style.
        ArrayUtility::set($output, "menuItemStyle", $this->menuItemStyle, [null]);

        // Set the menu style.
        ArrayUtility::set($output, "menuStyle", $this->menuStyle, [null]);

        // Return the output.
        return $output;
    }

}
