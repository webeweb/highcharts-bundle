<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts tooltip.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar
 * @version 5.0.14
 * @final
 */
final class HighchartsTooltip implements JsonSerializable {

    /**
     * Date time label formats.
     *
     * @var array
     */
    private $dateTimeLabelFormats;

    /**
     * Follow pointer.
     *
     * @var boolean
     * @since 3.0
     */
    private $followPointer = false;

    /**
     * Follow touch move.
     *
     * @var boolean
     * @since 3.0.1
     */
    private $followTouchMove = true;

    /**
     * Footer format.
     *
     * @var string
     * @since 2.2
     */
    private $footerFormat = "false";

    /**
     * Header format.
     *
     * @var string
     */
    private $headerFormat;

    /**
     * Hide delay.
     *
     * @var integer
     * @since 3.0
     */
    private $hideDelay = 500;

    /**
     * Padding.
     *
     * @var integer
     * @since 5.0.0
     */
    private $padding = 8;

    /**
     * Point format.
     *
     * @var string
     * @since 2.2
     */
    private $pointFormat = "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>";

    /**
     * Point formatter.
     *
     * @var string
     * @since 4.1.0
     */
    private $pointFormatter;

    /**
     * Split.
     *
     * @var boolean
     * @since 5.0.0
     */
    private $split = false;

    /**
     * Value decimals.
     *
     * @var integer
     * @since 2.2
     */
    private $valueDecimals;

    /**
     * Value prefix.
     *
     * @var string
     * @since 2.2
     */
    private $valuePrefix;

    /**
     * Value suffix.
     *
     * @var string
     * @since 2.2
     */
    private $valueSuffix;

    /**
     * X date format.
     *
     * @var string
     */
    private $xDateFormat;

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

        // Clear the date time label formats.
        $this->dateTimeLabelFormats = null;

        // Clear the follow pointer.
        $this->followPointer = null;

        // Clear the follow touch move.
        $this->followTouchMove = null;

        // Clear the footer format.
        $this->footerFormat = null;

        // Clear the header format.
        $this->headerFormat = null;

        // Clear the hide delay.
        $this->hideDelay = null;

        // Clear the padding.
        $this->padding = null;

        // Clear the point format.
        $this->pointFormat = null;

        // Clear the point formatter.
        $this->pointFormatter = null;

        // Clear the split.
        $this->split = null;

        // Clear the value decimals.
        $this->valueDecimals = null;

        // Clear the value prefix.
        $this->valuePrefix = null;

        // Clear the value suffix.
        $this->valueSuffix = null;

        // Clear the x date format.
        $this->xDateFormat = null;
    }

    /**
     * Get the date time label formats.
     *
     * @return array Returns the date time label formats.
     */
    public function getDateTimeLabelFormats() {
        return $this->dateTimeLabelFormats;
    }

    /**
     * Get the follow pointer.
     *
     * @return boolean Returns the follow pointer.
     */
    public function getFollowPointer() {
        return $this->followPointer;
    }

    /**
     * Get the follow touch move.
     *
     * @return boolean Returns the follow touch move.
     */
    public function getFollowTouchMove() {
        return $this->followTouchMove;
    }

    /**
     * Get the footer format.
     *
     * @return string Returns the footer format.
     */
    public function getFooterFormat() {
        return $this->footerFormat;
    }

    /**
     * Get the header format.
     *
     * @return string Returns the header format.
     */
    public function getHeaderFormat() {
        return $this->headerFormat;
    }

    /**
     * Get the hide delay.
     *
     * @return integer Returns the hide delay.
     */
    public function getHideDelay() {
        return $this->hideDelay;
    }

    /**
     * Get the padding.
     *
     * @return integer Returns the padding.
     */
    public function getPadding() {
        return $this->padding;
    }

    /**
     * Get the point format.
     *
     * @return string Returns the point format.
     */
    public function getPointFormat() {
        return $this->pointFormat;
    }

    /**
     * Get the point formatter.
     *
     * @return string Returns the point formatter.
     */
    public function getPointFormatter() {
        return $this->pointFormatter;
    }

    /**
     * Get the split.
     *
     * @return boolean Returns the split.
     */
    public function getSplit() {
        return $this->split;
    }

    /**
     * Get the value decimals.
     *
     * @return integer Returns the value decimals.
     */
    public function getValueDecimals() {
        return $this->valueDecimals;
    }

    /**
     * Get the value prefix.
     *
     * @return string Returns the value prefix.
     */
    public function getValuePrefix() {
        return $this->valuePrefix;
    }

    /**
     * Get the value suffix.
     *
     * @return string Returns the value suffix.
     */
    public function getValueSuffix() {
        return $this->valueSuffix;
    }

    /**
     * Get the x date format.
     *
     * @return string Returns the x date format.
     */
    public function getXDateFormat() {
        return $this->xDateFormat;
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
     * Set the date time label formats.
     *
     * @param array $dateTimeLabelFormats The date time label formats.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setDateTimeLabelFormats(array $dateTimeLabelFormats = null) {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;
        return $this;
    }

    /**
     * Set the follow pointer.
     *
     * @param boolean $followPointer The follow pointer.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setFollowPointer($followPointer) {
        $this->followPointer = $followPointer;
        return $this;
    }

    /**
     * Set the follow touch move.
     *
     * @param boolean $followTouchMove The follow touch move.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setFollowTouchMove($followTouchMove) {
        $this->followTouchMove = $followTouchMove;
        return $this;
    }

    /**
     * Set the footer format.
     *
     * @param string $footerFormat The footer format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setFooterFormat($footerFormat) {
        $this->footerFormat = $footerFormat;
        return $this;
    }

    /**
     * Set the header format.
     *
     * @param string $headerFormat The header format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setHeaderFormat($headerFormat) {
        $this->headerFormat = $headerFormat;
        return $this;
    }

    /**
     * Set the hide delay.
     *
     * @param integer $hideDelay The hide delay.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setHideDelay($hideDelay) {
        $this->hideDelay = $hideDelay;
        return $this;
    }

    /**
     * Set the padding.
     *
     * @param integer $padding The padding.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setPadding($padding) {
        $this->padding = $padding;
        return $this;
    }

    /**
     * Set the point format.
     *
     * @param string $pointFormat The point format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setPointFormat($pointFormat) {
        $this->pointFormat = $pointFormat;
        return $this;
    }

    /**
     * Set the point formatter.
     *
     * @param string $pointFormatter The point formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setPointFormatter($pointFormatter) {
        $this->pointFormatter = $pointFormatter;
        return $this;
    }

    /**
     * Set the split.
     *
     * @param boolean $split The split.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setSplit($split) {
        $this->split = $split;
        return $this;
    }

    /**
     * Set the value decimals.
     *
     * @param integer $valueDecimals The value decimals.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setValueDecimals($valueDecimals) {
        $this->valueDecimals = $valueDecimals;
        return $this;
    }

    /**
     * Set the value prefix.
     *
     * @param string $valuePrefix The value prefix.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setValuePrefix($valuePrefix) {
        $this->valuePrefix = $valuePrefix;
        return $this;
    }

    /**
     * Set the value suffix.
     *
     * @param string $valueSuffix The value suffix.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setValueSuffix($valueSuffix) {
        $this->valueSuffix = $valueSuffix;
        return $this;
    }

    /**
     * Set the x date format.
     *
     * @param string $xDateFormat The x date format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setXDateFormat($xDateFormat) {
        $this->xDateFormat = $xDateFormat;
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

        // Set the date time label formats.
        ArrayUtility::set($output, "dateTimeLabelFormats", $this->dateTimeLabelFormats, [null]);

        // Set the follow pointer.
        ArrayUtility::set($output, "followPointer", $this->followPointer, [null]);

        // Set the follow touch move.
        ArrayUtility::set($output, "followTouchMove", $this->followTouchMove, [null]);

        // Set the footer format.
        ArrayUtility::set($output, "footerFormat", $this->footerFormat, [null]);

        // Set the header format.
        ArrayUtility::set($output, "headerFormat", $this->headerFormat, [null]);

        // Set the hide delay.
        ArrayUtility::set($output, "hideDelay", $this->hideDelay, [null]);

        // Set the padding.
        ArrayUtility::set($output, "padding", $this->padding, [null]);

        // Set the point format.
        ArrayUtility::set($output, "pointFormat", $this->pointFormat, [null]);

        // Set the point formatter.
        ArrayUtility::set($output, "pointFormatter", $this->pointFormatter, [null]);

        // Set the split.
        ArrayUtility::set($output, "split", $this->split, [null]);

        // Set the value decimals.
        ArrayUtility::set($output, "valueDecimals", $this->valueDecimals, [null]);

        // Set the value prefix.
        ArrayUtility::set($output, "valuePrefix", $this->valuePrefix, [null]);

        // Set the value suffix.
        ArrayUtility::set($output, "valueSuffix", $this->valueSuffix, [null]);

        // Set the x date format.
        ArrayUtility::set($output, "xDateFormat", $this->xDateFormat, [null]);

        // Return the output.
        return $output;
    }

}
