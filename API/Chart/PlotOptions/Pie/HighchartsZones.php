<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts zones.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie
 * @version 5.0.14
 * @final
 */
final class HighchartsZones implements JsonSerializable {

    /**
     * Class name.
     *
     * @var string
     * @since 5.0.0
     */
    private $className;

    /**
     * Color.
     *
     * @var string
     * @since 4.1.0
     */
    private $color;

    /**
     * Dash style.
     *
     * @var string
     * @since 4.1.0
     */
    private $dashStyle;

    /**
     * Fill color.
     *
     * @var string
     * @since 4.1.0
     */
    private $fillColor;

    /**
     * Value.
     *
     * @var integer
     * @since 4.1.0
     */
    private $value;

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

        // Clear the class name.
        $this->className = null;

        // Clear the color.
        $this->color = null;

        // Clear the dash style.
        $this->dashStyle = null;

        // Clear the fill color.
        $this->fillColor = null;

        // Clear the value.
        $this->value = null;
    }

    /**
     * Get the class name.
     *
     * @return string Returns the class name.
     */
    public function getClassName() {
        return $this->className;
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
     * Get the dash style.
     *
     * @return string Returns the dash style.
     */
    public function getDashStyle() {
        return $this->dashStyle;
    }

    /**
     * Get the fill color.
     *
     * @return string Returns the fill color.
     */
    public function getFillColor() {
        return $this->fillColor;
    }

    /**
     * Get the value.
     *
     * @return integer Returns the value.
     */
    public function getValue() {
        return $this->value;
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
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsZones Returns the highcharts zones.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsZones Returns the highcharts zones.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the dash style.
     *
     * @param string $dashStyle The dash style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsZones Returns the highcharts zones.
     */
    public function setDashStyle($dashStyle) {
        $this->dashStyle = $dashStyle;
        return $this;
    }

    /**
     * Set the fill color.
     *
     * @param string $fillColor The fill color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsZones Returns the highcharts zones.
     */
    public function setFillColor($fillColor) {
        $this->fillColor = $fillColor;
        return $this;
    }

    /**
     * Set the value.
     *
     * @param integer $value The value.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsZones Returns the highcharts zones.
     */
    public function setValue($value) {
        $this->value = $value;
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

        // Set the class name.
        ArrayUtility::set($output, "className", $this->className, [null]);

        // Set the color.
        ArrayUtility::set($output, "color", $this->color, [null]);

        // Set the dash style.
        ArrayUtility::set($output, "dashStyle", $this->dashStyle, [null]);

        // Set the fill color.
        ArrayUtility::set($output, "fillColor", $this->fillColor, [null]);

        // Set the value.
        ArrayUtility::set($output, "value", $this->value, [null]);

        // Return the output.
        return $output;
    }

}
