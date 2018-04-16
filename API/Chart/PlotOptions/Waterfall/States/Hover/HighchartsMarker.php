<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts marker.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover
 * @version 5.0.14
 * @final
 */
final class HighchartsMarker implements JsonSerializable {

    /**
     * Enabled.
     *
     * @var boolean
     */
    private $enabled;

    /**
     * Fill color.
     *
     * @var string
     */
    private $fillColor;

    /**
     * Height.
     *
     * @var integer
     * @since 4.0.4
     */
    private $height;

    /**
     * Line color.
     *
     * @var string
     */
    private $lineColor = "#ffffff";

    /**
     * Line width.
     *
     * @var integer
     */
    private $lineWidth = 0;

    /**
     * Radius.
     *
     * @var integer
     */
    private $radius = 4;

    /**
     * States.
     *
     * @var 
     */
    private $states;

    /**
     * Symbol.
     *
     * @var string
     */
    private $symbol;

    /**
     * Width.
     *
     * @var integer
     * @since 4.0.4
     */
    private $width;

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

        // Clear the enabled.
        $this->enabled = null;

        // Clear the fill color.
        $this->fillColor = null;

        // Clear the height.
        $this->height = null;

        // Clear the line color.
        $this->lineColor = null;

        // Clear the line width.
        $this->lineWidth = null;

        // Clear the radius.
        $this->radius = null;

        // Clear the states.
        $this->states = null;

        // Clear the symbol.
        $this->symbol = null;

        // Clear the width.
        $this->width = null;
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
     * Get the fill color.
     *
     * @return string Returns the fill color.
     */
    public function getFillColor() {
        return $this->fillColor;
    }

    /**
     * Get the height.
     *
     * @return integer Returns the height.
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Get the line color.
     *
     * @return string Returns the line color.
     */
    public function getLineColor() {
        return $this->lineColor;
    }

    /**
     * Get the line width.
     *
     * @return integer Returns the line width.
     */
    public function getLineWidth() {
        return $this->lineWidth;
    }

    /**
     * Get the radius.
     *
     * @return integer Returns the radius.
     */
    public function getRadius() {
        return $this->radius;
    }

    /**
     * Get the states.
     *
     * @return  Returns the states.
     */
    public function getStates() {
        return $this->states;
    }

    /**
     * Get the symbol.
     *
     * @return string Returns the symbol.
     */
    public function getSymbol() {
        return $this->symbol;
    }

    /**
     * Get the width.
     *
     * @return integer Returns the width.
     */
    public function getWidth() {
        return $this->width;
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
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsMarker Returns the highcharts marker.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the fill color.
     *
     * @param string $fillColor The fill color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsMarker Returns the highcharts marker.
     */
    public function setFillColor($fillColor) {
        $this->fillColor = $fillColor;
        return $this;
    }

    /**
     * Set the height.
     *
     * @param integer $height The height.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsMarker Returns the highcharts marker.
     */
    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    /**
     * Set the line color.
     *
     * @param string $lineColor The line color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsMarker Returns the highcharts marker.
     */
    public function setLineColor($lineColor) {
        $this->lineColor = $lineColor;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param integer $lineWidth The line width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsMarker Returns the highcharts marker.
     */
    public function setLineWidth($lineWidth) {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the radius.
     *
     * @param integer $radius The radius.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsMarker Returns the highcharts marker.
     */
    public function setRadius($radius) {
        $this->radius = $radius;
        return $this;
    }

    /**
     * Set the states.
     *
     * @param  $states The states.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsMarker Returns the highcharts marker.
     */
    public function setStates($states) {
        $this->states = $states;
        return $this;
    }

    /**
     * Set the symbol.
     *
     * @param string $symbol The symbol.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsMarker Returns the highcharts marker.
     */
    public function setSymbol($symbol) {
        switch ($symbol) {
            case null:
            case "circle":
            case "diamond":
            case "square":
            case "triangle":
            case "triangle-down":
            $this->symbol = $symbol;
            break;
        }
        return $this;
    }

    /**
     * Set the width.
     *
     * @param integer $width The width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Waterfall\States\Hover\HighchartsMarker Returns the highcharts marker.
     */
    public function setWidth($width) {
        $this->width = $width;
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

        // Set the enabled.
        ArrayUtility::set($output, "enabled", $this->enabled, [null]);

        // Set the fill color.
        ArrayUtility::set($output, "fillColor", $this->fillColor, [null]);

        // Set the height.
        ArrayUtility::set($output, "height", $this->height, [null]);

        // Set the line color.
        ArrayUtility::set($output, "lineColor", $this->lineColor, [null]);

        // Set the line width.
        ArrayUtility::set($output, "lineWidth", $this->lineWidth, [null]);

        // Set the radius.
        ArrayUtility::set($output, "radius", $this->radius, [null]);

        // Set the states.
        ArrayUtility::set($output, "states", $this->states, [null]);

        // Set the symbol.
        ArrayUtility::set($output, "symbol", $this->symbol, [null]);

        // Set the width.
        ArrayUtility::set($output, "width", $this->width, [null]);

        // Return the output.
        return $output;
    }

}
