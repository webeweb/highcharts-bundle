<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\States;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts hover.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\States
 * @version 5.0.14
 * @final
 */
final class HighchartsHover implements JsonSerializable {

    /**
     * Animation.
     *
     * @var boolean|array
     * @since 5.0.8
     */
    private $animation = ["duration" => 50];

    /**
     * Border color.
     *
     * @var string
     */
    private $borderColor;

    /**
     * Brightness.
     *
     * @var integer
     */
    private $brightness = 0.1;

    /**
     * Color.
     *
     * @var string
     */
    private $color;

    /**
     * Enabled.
     *
     * @var boolean
     * @since 1.2
     */
    private $enabled = true;

    /**
     * Opacity.
     *
     * @var integer
     * @since 4.2.4
     */
    private $opacity = 0.75;

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

        // Clear the animation.
        $this->animation = null;

        // Clear the border color.
        $this->borderColor = null;

        // Clear the brightness.
        $this->brightness = null;

        // Clear the color.
        $this->color = null;

        // Clear the enabled.
        $this->enabled = null;

        // Clear the opacity.
        $this->opacity = null;
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
     * Get the border color.
     *
     * @return string Returns the border color.
     */
    public function getBorderColor() {
        return $this->borderColor;
    }

    /**
     * Get the brightness.
     *
     * @return integer Returns the brightness.
     */
    public function getBrightness() {
        return $this->brightness;
    }

    /**
     * Get the color.
     *
     * @return string Returns the color.
     */
    public function getColor() {
        return $this->color;
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
     * Get the opacity.
     *
     * @return integer Returns the opacity.
     */
    public function getOpacity() {
        return $this->opacity;
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
     * Set the animation.
     *
     * @param boolean|array $animation The animation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\States\HighchartsHover Returns the highcharts hover.
     */
    public function setAnimation($animation) {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string $borderColor The border color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\States\HighchartsHover Returns the highcharts hover.
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the brightness.
     *
     * @param integer $brightness The brightness.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\States\HighchartsHover Returns the highcharts hover.
     */
    public function setBrightness($brightness) {
        $this->brightness = $brightness;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\States\HighchartsHover Returns the highcharts hover.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\States\HighchartsHover Returns the highcharts hover.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the opacity.
     *
     * @param integer $opacity The opacity.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Treemap\States\HighchartsHover Returns the highcharts hover.
     */
    public function setOpacity($opacity) {
        $this->opacity = $opacity;
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

        // Set the animation.
        ArrayUtility::set($output, "animation", $this->animation, [null]);

        // Set the border color.
        ArrayUtility::set($output, "borderColor", $this->borderColor, [null]);

        // Set the brightness.
        ArrayUtility::set($output, "brightness", $this->brightness, [null]);

        // Set the color.
        ArrayUtility::set($output, "color", $this->color, [null]);

        // Set the enabled.
        ArrayUtility::set($output, "enabled", $this->enabled, [null]);

        // Set the opacity.
        ArrayUtility::set($output, "opacity", $this->opacity, [null]);

        // Return the output.
        return $output;
    }

}
