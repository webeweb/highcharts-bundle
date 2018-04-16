<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts data.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge
 * @version 5.0.14
 * @final
 */
final class HighchartsData implements JsonSerializable {

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
     * Color index.
     *
     * @var integer
     * @since 5.0.0
     */
    private $colorIndex;

    /**
     * Data labels.
     *
     * @var array
     */
    private $dataLabels;

    /**
     * Description.
     *
     * @var string
     * @since 5.0.0
     */
    private $description;

    /**
     * Events.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Data\HighchartsEvents
     */
    private $events;

    /**
     * Id.
     *
     * @var string
     * @since 1.2.0
     */
    private $id;

    /**
     * Labelrank.
     *
     * @var integer
     */
    private $labelrank;

    /**
     * Name.
     *
     * @var string
     */
    private $name;

    /**
     * Selected.
     *
     * @var boolean
     */
    private $selected = false;

    /**
     * Y.
     *
     * @var integer
     */
    private $y;

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

        // Clear the color index.
        $this->colorIndex = null;

        // Clear the data labels.
        $this->dataLabels = null;

        // Clear the description.
        $this->description = null;

        // Clear the events.
        if (null !== $this->events) {
            $this->events->clear();
        }

        // Clear the id.
        $this->id = null;

        // Clear the labelrank.
        $this->labelrank = null;

        // Clear the name.
        $this->name = null;

        // Clear the selected.
        $this->selected = null;

        // Clear the y.
        $this->y = null;
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
     * Get the color index.
     *
     * @return integer Returns the color index.
     */
    public function getColorIndex() {
        return $this->colorIndex;
    }

    /**
     * Get the data labels.
     *
     * @return array Returns the data labels.
     */
    public function getDataLabels() {
        return $this->dataLabels;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Data\HighchartsEvents Returns the events.
     */
    public function getEvents() {
        return $this->events;
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
     * Get the labelrank.
     *
     * @return integer Returns the labelrank.
     */
    public function getLabelrank() {
        return $this->labelrank;
    }

    /**
     * Get the name.
     *
     * @return string Returns the name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the selected.
     *
     * @return boolean Returns the selected.
     */
    public function getSelected() {
        return $this->selected;
    }

    /**
     * Get the y.
     *
     * @return integer Returns the y.
     */
    public function getY() {
        return $this->y;
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
     * Create a new events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Data\HighchartsEvents Returns the events.
     */
    public function newEvents() {
        $this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Data\HighchartsEvents();
        return $this->events;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param integer $colorIndex The color index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setColorIndex($colorIndex) {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param array $dataLabels The data labels.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setDataLabels(array $dataLabels = null) {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Data\HighchartsEvents $events The events.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\Data\HighchartsEvents $events = null) {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the labelrank.
     *
     * @param integer $labelrank The labelrank.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setLabelrank($labelrank) {
        $this->labelrank = $labelrank;
        return $this;
    }

    /**
     * Set the name.
     *
     * @param string $name The name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param boolean $selected The selected.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setSelected($selected) {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param integer $y The y.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsData Returns the highcharts data.
     */
    public function setY($y) {
        $this->y = $y;
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

        // Set the color index.
        ArrayUtility::set($output, "colorIndex", $this->colorIndex, [null]);

        // Set the data labels.
        ArrayUtility::set($output, "dataLabels", $this->dataLabels, [null]);

        // Set the description.
        ArrayUtility::set($output, "description", $this->description, [null]);

        // Set the events.
        if (null !== $this->events) {
            ArrayUtility::set($output, "events", $this->events->toArray(), []);
        }

        // Set the id.
        ArrayUtility::set($output, "id", $this->id, [null]);

        // Set the labelrank.
        ArrayUtility::set($output, "labelrank", $this->labelrank, [null]);

        // Set the name.
        ArrayUtility::set($output, "name", $this->name, [null]);

        // Set the selected.
        ArrayUtility::set($output, "selected", $this->selected, [null]);

        // Set the y.
        ArrayUtility::set($output, "y", $this->y, [null]);

        // Return the output.
        return $output;
    }

}
