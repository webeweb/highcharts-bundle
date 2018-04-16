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
 * Highcharts responsive.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsResponsive implements JsonSerializable {

    /**
     * Rules.
     *
     * @var array
     * @since 5.0.0
     */
    private $rules;

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

        // Clear the rules.
        $this->rules = null;
    }

    /**
     * Get the rules.
     *
     * @return array Returns the rules.
     */
    public function getRules() {
        return $this->rules;
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
     * Set the rules.
     *
     * @param array $rules The rules.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive Returns the highcharts responsive.
     */
    public function setRules(array $rules = null) {
        $this->rules = $rules;
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

        // Set the rules.
        ArrayUtility::set($output, "rules", $this->rules, [null]);

        // Return the output.
        return $output;
    }

}
