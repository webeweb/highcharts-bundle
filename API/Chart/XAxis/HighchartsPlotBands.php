<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\XAxis;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts plot bands.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\XAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsPlotBands implements JsonSerializable {

    /**
     * Border color.
     *
     * @var string
     */
    private $borderColor;

    /**
     * Border width.
     *
     * @var integer
     */
    private $borderWidth = 0;

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
     */
    private $color;

    /**
     * Events.
     *
     * @var array
     * @since 1.2
     */
    private $events;

    /**
     * From.
     *
     * @var integer
     */
    private $from;

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * Label.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\PlotBands\HighchartsLabel
     */
    private $label;

    /**
     * To.
     *
     * @var integer
     */
    private $to;

    /**
     * Z index.
     *
     * @var integer
     * @since 1.2
     */
    private $zIndex;

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

        // Clear the border color.
        $this->borderColor = null;

        // Clear the border width.
        $this->borderWidth = null;

        // Clear the class name.
        $this->className = null;

        // Clear the color.
        $this->color = null;

        // Clear the events.
        $this->events = null;

        // Clear the from.
        $this->from = null;

        // Clear the id.
        $this->id = null;

        // Clear the label.
        if (null !== $this->label) {
            $this->label->clear();
        }

        // Clear the to.
        $this->to = null;

        // Clear the z index.
        $this->zIndex = null;
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
     * Get the border width.
     *
     * @return integer Returns the border width.
     */
    public function getBorderWidth() {
        return $this->borderWidth;
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
     * Get the events.
     *
     * @return array Returns the events.
     */
    public function getEvents() {
        return $this->events;
    }

    /**
     * Get the from.
     *
     * @return integer Returns the from.
     */
    public function getFrom() {
        return $this->from;
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the label.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\PlotBands\HighchartsLabel Returns the label.
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * Get the to.
     *
     * @return integer Returns the to.
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * Get the z index.
     *
     * @return integer Returns the z index.
     */
    public function getZIndex() {
        return $this->zIndex;
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
     * Create a new label.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\PlotBands\HighchartsLabel Returns the label.
     */
    public function newLabel() {
        $this->label = new \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\PlotBands\HighchartsLabel();
        return $this->label;
    }

    /**
     * Set the border color.
     *
     * @param string $borderColor The border color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param integer $borderWidth The border width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param array $events The events.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setEvents(array $events = null) {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the from.
     *
     * @param integer $from The from.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setFrom($from) {
        $this->from = $from;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the label.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\PlotBands\HighchartsLabel $label The label.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setLabel(\WBW\Bundle\HighchartsBundle\API\Chart\XAxis\PlotBands\HighchartsLabel $label = null) {
        $this->label = $label;
        return $this;
    }

    /**
     * Set the to.
     *
     * @param integer $to The to.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setTo($to) {
        $this->to = $to;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param integer $zIndex The z index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\XAxis\HighchartsPlotBands Returns the highcharts plot bands.
     */
    public function setZIndex($zIndex) {
        $this->zIndex = $zIndex;
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

        // Set the border color.
        ArrayUtility::set($output, "borderColor", $this->borderColor, [null]);

        // Set the border width.
        ArrayUtility::set($output, "borderWidth", $this->borderWidth, [null]);

        // Set the class name.
        ArrayUtility::set($output, "className", $this->className, [null]);

        // Set the color.
        ArrayUtility::set($output, "color", $this->color, [null]);

        // Set the events.
        ArrayUtility::set($output, "events", $this->events, [null]);

        // Set the from.
        ArrayUtility::set($output, "from", $this->from, [null]);

        // Set the id.
        ArrayUtility::set($output, "id", $this->id, [null]);

        // Set the label.
        if (null !== $this->label) {
            ArrayUtility::set($output, "label", $this->label->toArray(), []);
        }

        // Set the to.
        ArrayUtility::set($output, "to", $this->to, [null]);

        // Set the z index.
        ArrayUtility::set($output, "zIndex", $this->zIndex, [null]);

        // Return the output.
        return $output;
    }

}
