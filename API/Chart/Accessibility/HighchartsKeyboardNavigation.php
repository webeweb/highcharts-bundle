<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Accessibility;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts keyboard navigation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Accessibility
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation Returns the highcharts keyboard navigation.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the skip null points.
     *
     * @param boolean $skipNullPoints The skip null points.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation Returns the highcharts keyboard navigation.
     */
    public function setSkipNullPoints($skipNullPoints) {
        $this->skipNullPoints = $skipNullPoints;
        return $this;
    }

    /**
     * Set the tab through chart elements.
     *
     * @param boolean $tabThroughChartElements The tab through chart elements.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Accessibility\HighchartsKeyboardNavigation Returns the highcharts keyboard navigation.
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

        // Set the enabled.
        ArrayUtility::set($output, "enabled", $this->enabled, [null]);

        // Set the skip null points.
        ArrayUtility::set($output, "skipNullPoints", $this->skipNullPoints, [null]);

        // Set the tab through chart elements.
        ArrayUtility::set($output, "tabThroughChartElements", $this->tabThroughChartElements, [null]);

        // Return the output.
        return $output;
    }

}
