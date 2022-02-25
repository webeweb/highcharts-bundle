<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts point.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline
 * @version 5.0.14
 * @final
 */
final class HighchartsPoint implements JsonSerializable {

    /**
     * Events.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\Point\HighchartsEvents
     */
    private $events;

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

        // Clear the events.
        if (null !== $this->events) {
            $this->events->clear();
        }
    }

    /**
     * Get the events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\Point\HighchartsEvents Returns the events.
     */
    public function getEvents() {
        return $this->events;
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\Point\HighchartsEvents Returns the events.
     */
    public function newEvents() {
        $this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\Point\HighchartsEvents();
        return $this->events;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\Point\HighchartsEvents $events The events.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\HighchartsPoint Returns the highcharts point.
     */
    public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Spline\Point\HighchartsEvents $events = null) {
        $this->events = $events;
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

        // Set the events.
        if (null !== $this->events) {
            ArrayUtility::set($output, "events", $this->events->toArray(), []);
        }

        // Return the output.
        return $output;
    }

}
