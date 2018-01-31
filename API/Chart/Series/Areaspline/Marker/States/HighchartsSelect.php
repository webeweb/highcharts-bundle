<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States;

use JsonSerializable;

/**
 * Highcharts select.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States
 * @version 5.0.14
 * @final
 */
final class HighchartsSelect implements JsonSerializable {

    /**
     * Enabled.
     *
     * @var boolean
     */
    private $enabled = true;

    /**
     * Fill color.
     *
     * @var string
     */
    private $fillColor;

    /**
     * Line color.
     *
     * @var string
     */
    private $lineColor = "#000000";

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
    private $radius;

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
     *
     * @return void
     */
    public function clear() {

        // Clear the enabled.
        $this->enabled = null;

        // Clear the fill color.
        $this->fillColor = null;

        // Clear the line color.
        $this->lineColor = null;

        // Clear the line width.
        $this->lineWidth = null;

        // Clear the radius.
        $this->radius = null;
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States\HighchartsSelect Returns the highcharts select.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the fill color.
     *
     * @param string $fillColor The fill color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States\HighchartsSelect Returns the highcharts select.
     */
    public function setFillColor($fillColor) {
        $this->fillColor = $fillColor;
        return $this;
    }

    /**
     * Set the line color.
     *
     * @param string $lineColor The line color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States\HighchartsSelect Returns the highcharts select.
     */
    public function setLineColor($lineColor) {
        $this->lineColor = $lineColor;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param integer $lineWidth The line width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States\HighchartsSelect Returns the highcharts select.
     */
    public function setLineWidth($lineWidth) {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the radius.
     *
     * @param integer $radius The radius.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\Marker\States\HighchartsSelect Returns the highcharts select.
     */
    public function setRadius($radius) {
        $this->radius = $radius;
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

        // Check the enabled.
        if (!is_null($this->enabled)) {
            $output["enabled"] = $this->enabled;
        }

        // Check the fill color.
        if (!is_null($this->fillColor)) {
            $output["fillColor"] = $this->fillColor;
        }

        // Check the line color.
        if (!is_null($this->lineColor)) {
            $output["lineColor"] = $this->lineColor;
        }

        // Check the line width.
        if (!is_null($this->lineWidth)) {
            $output["lineWidth"] = $this->lineWidth;
        }

        // Check the radius.
        if (!is_null($this->radius)) {
            $output["radius"] = $this->radius;
        }

        // Return the output.
        return $output;
    }

}
