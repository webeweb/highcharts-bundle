<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts states.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie
 * @version 5.0.14
 * @final
 */
final class HighchartsStates implements JsonSerializable {

    /**
     * Hover.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover
     */
    private $hover;

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

        // Clear the hover.
        if (null !== $this->hover) {
            $this->hover->clear();
        }
    }

    /**
     * Get the hover.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover Returns the hover.
     */
    public function getHover() {
        return $this->hover;
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
     * Create a new hover.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover Returns the hover.
     */
    public function newHover() {
        $this->hover = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover();
        return $this->hover;
    }

    /**
     * Set the hover.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover $hover The hover.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsStates Returns the highcharts states.
     */
    public function setHover(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\States\HighchartsHover $hover = null) {
        $this->hover = $hover;
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

        // Set the hover.
        if (null !== $this->hover) {
            ArrayUtility::set($output, "hover", $this->hover->toArray(), []);
        }

        // Return the output.
        return $output;
    }

}
