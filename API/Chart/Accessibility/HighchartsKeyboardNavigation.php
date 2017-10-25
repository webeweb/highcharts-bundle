<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Accessibility;

use JsonSerializable;

/**
 * Highcharts keyboard navigation.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Accessibility
 * @version 5.0.14
 * @final
 */
final class HighchartsKeyboardNavigation implements JsonSerializable {

    /**
     * Enabled.
     *
     * @var boolean
     * @since 5.0.0
     */
    private $enabled = true;

    /**
     * Skip null points.
     *
     * @var boolean
     * @since 5.0.0
     */
    private $skipNullPoints = false;

    /**
     * Tab through chart elements.
     *
     * @var boolean
     * @since 5.0.13
     */
    private $tabThroughChartElements = true;

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

        // Clear the skip null points.
        $this->skipNullPoints = null;

        // Clear the tab through chart elements.
        $this->tabThroughChartElements = null;
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
     * Get the skip null points.
     *
     * @return boolean Returns the skip null points.
     */
    public function getSkipNullPoints() {
        return $this->skipNullPoints;
    }

    /**
     * Get the tab through chart elements.
     *
     * @return boolean Returns the tab through chart elements.
     */
    public function getTabThroughChartElements() {
        return $this->tabThroughChartElements;
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
     * @return \WBW\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation Returns the highcharts keyboard navigation.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the skip null points.
     *
     * @param boolean $skipNullPoints The skip null points.
     * @return \WBW\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation Returns the highcharts keyboard navigation.
     */
    public function setSkipNullPoints($skipNullPoints) {
        $this->skipNullPoints = $skipNullPoints;
        return $this;
    }

    /**
     * Set the tab through chart elements.
     *
     * @param boolean $tabThroughChartElements The tab through chart elements.
     * @return \WBW\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation Returns the highcharts keyboard navigation.
     */
    public function setTabThroughChartElements($tabThroughChartElements) {
        $this->tabThroughChartElements = $tabThroughChartElements;
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

        // Check the skip null points.
        if (!is_null($this->skipNullPoints)) {
            $output["skipNullPoints"] = $this->skipNullPoints;
        }

        // Check the tab through chart elements.
        if (!is_null($this->tabThroughChartElements)) {
            $output["tabThroughChartElements"] = $this->tabThroughChartElements;
        }

        // Return the output.
        return $output;
    }

}
