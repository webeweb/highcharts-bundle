<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart;

use JsonSerializable;

/**
 * Highcharts accessibility.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsAccessibility implements JsonSerializable {

    /**
     * Describe single series.
     *
     * @var boolean
     * @since 5.0.0
     */
    private $describeSingleSeries = false;

    /**
     * Enabled.
     *
     * @var boolean
     * @since 5.0.0
     */
    private $enabled = true;

    /**
     * Keyboard navigation.
     *
     * @var array
     * @since 5.0.0
     */
    private $keyboardNavigation;

    /**
     * On table anchor click.
     *
     * @var string
     * @since 5.0.0
     */
    private $onTableAnchorClick;

    /**
     * Point date format.
     *
     * @var string
     * @since 5.0.0
     */
    private $pointDateFormat;

    /**
     * Point date formatter.
     *
     * @var string
     * @since 5.0.0
     */
    private $pointDateFormatter;

    /**
     * Point description formatter.
     *
     * @var string
     * @since 5.0.0
     */
    private $pointDescriptionFormatter;

    /**
     * Point description threshold.
     *
     * @var integer|boolean
     * @since 5.0.0
     */
    private $pointDescriptionThreshold = 30;

    /**
     * Screen reader section formatter.
     *
     * @var string
     * @since 5.0.0
     */
    private $screenReaderSectionFormatter;

    /**
     * Series description formatter.
     *
     * @var string
     * @since 5.0.0
     */
    private $seriesDescriptionFormatter;

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

        // Clear the describe single series.
        $this->describeSingleSeries = null;

        // Clear the enabled.
        $this->enabled = null;

        // Clear the keyboard navigation.
        $this->keyboardNavigation = null;

        // Clear the on table anchor click.
        $this->onTableAnchorClick = null;

        // Clear the point date format.
        $this->pointDateFormat = null;

        // Clear the point date formatter.
        $this->pointDateFormatter = null;

        // Clear the point description formatter.
        $this->pointDescriptionFormatter = null;

        // Clear the point description threshold.
        $this->pointDescriptionThreshold = null;

        // Clear the screen reader section formatter.
        $this->screenReaderSectionFormatter = null;

        // Clear the series description formatter.
        $this->seriesDescriptionFormatter = null;
    }

    /**
     * Get the describe single series.
     *
     * @return boolean Returns the describe single series.
     */
    public function getDescribeSingleSeries() {
        return $this->describeSingleSeries;
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
     * Get the keyboard navigation.
     *
     * @return array Returns the keyboard navigation.
     */
    public function getKeyboardNavigation() {
        return $this->keyboardNavigation;
    }

    /**
     * Get the on table anchor click.
     *
     * @return string Returns the on table anchor click.
     */
    public function getOnTableAnchorClick() {
        return $this->onTableAnchorClick;
    }

    /**
     * Get the point date format.
     *
     * @return string Returns the point date format.
     */
    public function getPointDateFormat() {
        return $this->pointDateFormat;
    }

    /**
     * Get the point date formatter.
     *
     * @return string Returns the point date formatter.
     */
    public function getPointDateFormatter() {
        return $this->pointDateFormatter;
    }

    /**
     * Get the point description formatter.
     *
     * @return string Returns the point description formatter.
     */
    public function getPointDescriptionFormatter() {
        return $this->pointDescriptionFormatter;
    }

    /**
     * Get the point description threshold.
     *
     * @return integer|boolean Returns the point description threshold.
     */
    public function getPointDescriptionThreshold() {
        return $this->pointDescriptionThreshold;
    }

    /**
     * Get the screen reader section formatter.
     *
     * @return string Returns the screen reader section formatter.
     */
    public function getScreenReaderSectionFormatter() {
        return $this->screenReaderSectionFormatter;
    }

    /**
     * Get the series description formatter.
     *
     * @return string Returns the series description formatter.
     */
    public function getSeriesDescriptionFormatter() {
        return $this->seriesDescriptionFormatter;
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
     * Set the describe single series.
     *
     * @param boolean $describeSingleSeries The describe single series.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the highcharts accessibility.
     */
    public function setDescribeSingleSeries($describeSingleSeries) {
        $this->describeSingleSeries = $describeSingleSeries;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the highcharts accessibility.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the keyboard navigation.
     *
     * @param array $keyboardNavigation The keyboard navigation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the highcharts accessibility.
     */
    public function setKeyboardNavigation(array $keyboardNavigation = null) {
        $this->keyboardNavigation = $keyboardNavigation;
        return $this;
    }

    /**
     * Set the on table anchor click.
     *
     * @param string $onTableAnchorClick The on table anchor click.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the highcharts accessibility.
     */
    public function setOnTableAnchorClick($onTableAnchorClick) {
        $this->onTableAnchorClick = $onTableAnchorClick;
        return $this;
    }

    /**
     * Set the point date format.
     *
     * @param string $pointDateFormat The point date format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the highcharts accessibility.
     */
    public function setPointDateFormat($pointDateFormat) {
        $this->pointDateFormat = $pointDateFormat;
        return $this;
    }

    /**
     * Set the point date formatter.
     *
     * @param string $pointDateFormatter The point date formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the highcharts accessibility.
     */
    public function setPointDateFormatter($pointDateFormatter) {
        $this->pointDateFormatter = $pointDateFormatter;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the highcharts accessibility.
     */
    public function setPointDescriptionFormatter($pointDescriptionFormatter) {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the point description threshold.
     *
     * @param integer|boolean $pointDescriptionThreshold The point description threshold.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the highcharts accessibility.
     */
    public function setPointDescriptionThreshold($pointDescriptionThreshold) {
        $this->pointDescriptionThreshold = $pointDescriptionThreshold;
        return $this;
    }

    /**
     * Set the screen reader section formatter.
     *
     * @param string $screenReaderSectionFormatter The screen reader section formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the highcharts accessibility.
     */
    public function setScreenReaderSectionFormatter($screenReaderSectionFormatter) {
        $this->screenReaderSectionFormatter = $screenReaderSectionFormatter;
        return $this;
    }

    /**
     * Set the series description formatter.
     *
     * @param string $seriesDescriptionFormatter The series description formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the highcharts accessibility.
     */
    public function setSeriesDescriptionFormatter($seriesDescriptionFormatter) {
        $this->seriesDescriptionFormatter = $seriesDescriptionFormatter;
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

        // Check the describe single series.
        if (!is_null($this->describeSingleSeries)) {
            $output["describeSingleSeries"] = $this->describeSingleSeries;
        }

        // Check the enabled.
        if (!is_null($this->enabled)) {
            $output["enabled"] = $this->enabled;
        }

        // Check the keyboard navigation.
        if (!is_null($this->keyboardNavigation)) {
            $output["keyboardNavigation"] = $this->keyboardNavigation;
        }

        // Check the on table anchor click.
        if (!is_null($this->onTableAnchorClick)) {
            $output["onTableAnchorClick"] = $this->onTableAnchorClick;
        }

        // Check the point date format.
        if (!is_null($this->pointDateFormat)) {
            $output["pointDateFormat"] = $this->pointDateFormat;
        }

        // Check the point date formatter.
        if (!is_null($this->pointDateFormatter)) {
            $output["pointDateFormatter"] = $this->pointDateFormatter;
        }

        // Check the point description formatter.
        if (!is_null($this->pointDescriptionFormatter)) {
            $output["pointDescriptionFormatter"] = $this->pointDescriptionFormatter;
        }

        // Check the point description threshold.
        if (!is_null($this->pointDescriptionThreshold)) {
            $output["pointDescriptionThreshold"] = $this->pointDescriptionThreshold;
        }

        // Check the screen reader section formatter.
        if (!is_null($this->screenReaderSectionFormatter)) {
            $output["screenReaderSectionFormatter"] = $this->screenReaderSectionFormatter;
        }

        // Check the series description formatter.
        if (!is_null($this->seriesDescriptionFormatter)) {
            $output["seriesDescriptionFormatter"] = $this->seriesDescriptionFormatter;
        }

        // Return the output.
        return $output;
    }

}
