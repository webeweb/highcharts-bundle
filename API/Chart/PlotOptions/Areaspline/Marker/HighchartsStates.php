<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts states.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker
 * @version 5.0.14
 * @final
 */
final class HighchartsStates implements JsonSerializable {

    /**
     * Hover.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsHover
     */
    private $hover;

    /**
     * Select.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsSelect
     */
    private $select;

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

        // Clear the select.
        if (null !== $this->select) {
            $this->select->clear();
        }
    }

    /**
     * Get the hover.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsHover Returns the hover.
     */
    public function getHover() {
        return $this->hover;
    }

    /**
     * Get the select.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsSelect Returns the select.
     */
    public function getSelect() {
        return $this->select;
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsHover Returns the hover.
     */
    public function newHover() {
        $this->hover = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsHover();
        return $this->hover;
    }

    /**
     * Create a new select.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsSelect Returns the select.
     */
    public function newSelect() {
        $this->select = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsSelect();
        return $this->select;
    }

    /**
     * Set the hover.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsHover $hover The hover.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\HighchartsStates Returns the highcharts states.
     */
    public function setHover(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsHover $hover = null) {
        $this->hover = $hover;
        return $this;
    }

    /**
     * Set the select.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsSelect $select The select.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\HighchartsStates Returns the highcharts states.
     */
    public function setSelect(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\Marker\States\HighchartsSelect $select = null) {
        $this->select = $select;
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

        // Set the select.
        if (null !== $this->select) {
            ArrayUtility::set($output, "select", $this->select->toArray(), []);
        }

        // Return the output.
        return $output;
    }

}
