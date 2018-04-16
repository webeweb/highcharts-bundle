<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Responsive;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts rules.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Responsive
 * @version 5.0.14
 * @final
 */
final class HighchartsRules implements JsonSerializable {

    /**
     * Chart options.
     *
     * @var array
     * @since 5.0.0
     */
    private $chartOptions;

    /**
     * Condition.
     *
     * @var array
     * @since 5.0.0
     */
    private $condition;

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

        // Clear the chart options.
        $this->chartOptions = null;

        // Clear the condition.
        $this->condition = null;
    }

    /**
     * Get the chart options.
     *
     * @return array Returns the chart options.
     */
    public function getChartOptions() {
        return $this->chartOptions;
    }

    /**
     * Get the condition.
     *
     * @return array Returns the condition.
     */
    public function getCondition() {
        return $this->condition;
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
     * Set the chart options.
     *
     * @param array $chartOptions The chart options.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\HighchartsRules Returns the highcharts rules.
     */
    public function setChartOptions(array $chartOptions = null) {
        $this->chartOptions = $chartOptions;
        return $this;
    }

    /**
     * Set the condition.
     *
     * @param array $condition The condition.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Responsive\HighchartsRules Returns the highcharts rules.
     */
    public function setCondition(array $condition = null) {
        $this->condition = $condition;
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

        // Set the chart options.
        ArrayUtility::set($output, "chartOptions", $this->chartOptions, [null]);

        // Set the condition.
        ArrayUtility::set($output, "condition", $this->condition, [null]);

        // Return the output.
        return $output;
    }

}
