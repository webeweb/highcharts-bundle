<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Legend;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts navigation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Legend
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

        // Clear the active color.
        $this->activeColor = null;

        // Clear the animation.
        $this->animation = null;

        // Clear the arrow size.
        $this->arrowSize = null;

        // Clear the enabled.
        $this->enabled = null;

        // Clear the inactive color.
        $this->inactiveColor = null;

        // Clear the style.
        $this->style = null;
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation Returns the highcharts navigation.
     */
    public function setActiveColor($activeColor) {
        $this->activeColor = $activeColor;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param boolean|array $animation The animation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation Returns the highcharts navigation.
     */
    public function setAnimation($animation) {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the arrow size.
     *
     * @param integer $arrowSize The arrow size.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation Returns the highcharts navigation.
     */
    public function setArrowSize($arrowSize) {
        $this->arrowSize = $arrowSize;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation Returns the highcharts navigation.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the inactive color.
     *
     * @param string $inactiveColor The inactive color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation Returns the highcharts navigation.
     */
    public function setInactiveColor($inactiveColor) {
        $this->inactiveColor = $inactiveColor;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation Returns the highcharts navigation.
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

        // Set the active color.
        ArrayUtility::set($output, "activeColor", $this->activeColor, [null]);

        // Set the animation.
        ArrayUtility::set($output, "animation", $this->animation, [null]);

        // Set the arrow size.
        ArrayUtility::set($output, "arrowSize", $this->arrowSize, [null]);

        // Set the enabled.
        ArrayUtility::set($output, "enabled", $this->enabled, [null]);

        // Set the inactive color.
        ArrayUtility::set($output, "inactiveColor", $this->inactiveColor, [null]);

        // Set the style.
        ArrayUtility::set($output, "style", $this->style, [null]);

        // Return the output.
        return $output;
    }

}
