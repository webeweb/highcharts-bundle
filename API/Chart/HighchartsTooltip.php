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
 * Highcharts tooltip.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsTooltip implements JsonSerializable {

    /**
     * Animation.
     *
     * @var boolean
     * @since 2.3.0
     */
    private $animation = true;

    /**
     * Background color.
     *
     * @var string
     */
    private $backgroundColor = "rgba(247,247,247,0.85)";

    /**
     * Border color.
     *
     * @var string
     */
    private $borderColor;

    /**
     * Border radius.
     *
     * @var integer
     */
    private $borderRadius = 3;

    /**
     * Border width.
     *
     * @var integer
     */
    private $borderWidth = 1;

    /**
     * Crosshairs.
     *
     * @var mixed
     * @deprecated
     */
    private $crosshairs;

    /**
     * Date time label formats.
     *
     * @var array
     */
    private $dateTimeLabelFormats;

    /**
     * Enabled.
     *
     * @var boolean
     */
    private $enabled = true;

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
     * Formatter.
     *
     * @var string
     */
    private $formatter;

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
     * Positioner.
     *
     * @var string
     * @since 2.2.4
     */
    private $positioner;

    /**
     * Shadow.
     *
     * @var boolean
     */
    private $shadow = true;

    /**
     * Shape.
     *
     * @var string
     * @since 4.0
     */
    private $shape = "callout";

    /**
     * Shared.
     *
     * @var boolean
     * @since 2.1
     */
    private $shared = false;

    /**
     * Snap.
     *
     * @var integer
     * @since 1.2.0
     */
    private $snap;

    /**
     * Split.
     *
     * @var boolean
     * @since 5.0.0
     */
    private $split = false;

    /**
     * Style.
     *
     * @var array
     */
    private $style = ["color" => "#333333", "cursor" => "default", "fontSize" => "12px", "pointerEvents" => "none", "whiteSpace" => "nowrap"];

    /**
     * Use HTML.
     *
     * @var boolean
     * @since 2.2
     */
    private $useHTML = false;

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

        // Clear the animation.
        $this->animation = null;

        // Clear the background color.
        $this->backgroundColor = null;

        // Clear the border color.
        $this->borderColor = null;

        // Clear the border radius.
        $this->borderRadius = null;

        // Clear the border width.
        $this->borderWidth = null;

        // Clear the crosshairs.
        $this->crosshairs = null;

        // Clear the date time label formats.
        $this->dateTimeLabelFormats = null;

        // Clear the enabled.
        $this->enabled = null;

        // Clear the follow pointer.
        $this->followPointer = null;

        // Clear the follow touch move.
        $this->followTouchMove = null;

        // Clear the footer format.
        $this->footerFormat = null;

        // Clear the formatter.
        $this->formatter = null;

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

        // Clear the positioner.
        $this->positioner = null;

        // Clear the shadow.
        $this->shadow = null;

        // Clear the shape.
        $this->shape = null;

        // Clear the shared.
        $this->shared = null;

        // Clear the snap.
        $this->snap = null;

        // Clear the split.
        $this->split = null;

        // Clear the style.
        $this->style = null;

        // Clear the use HTML.
        $this->useHTML = null;

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
     * Get the animation.
     *
     * @return boolean Returns the animation.
     */
    public function getAnimation() {
        return $this->animation;
    }

    /**
     * Get the background color.
     *
     * @return string Returns the background color.
     */
    public function getBackgroundColor() {
        return $this->backgroundColor;
    }

    /**
     * Get the border color.
     *
     * @return string Returns the border color.
     */
    public function getBorderColor() {
        return $this->borderColor;
    }

    /**
     * Get the border radius.
     *
     * @return integer Returns the border radius.
     */
    public function getBorderRadius() {
        return $this->borderRadius;
    }

    /**
     * Get the border width.
     *
     * @return integer Returns the border width.
     */
    public function getBorderWidth() {
        return $this->borderWidth;
    }

    /**
     * Get the crosshairs.
     *
     * @return mixed Returns the crosshairs.
     * @deprecated
     */
    public function getCrosshairs() {
        return $this->crosshairs;
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
     * Get the enabled.
     *
     * @return boolean Returns the enabled.
     */
    public function getEnabled() {
        return $this->enabled;
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
     * Get the formatter.
     *
     * @return string Returns the formatter.
     */
    public function getFormatter() {
        return $this->formatter;
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
     * Get the positioner.
     *
     * @return string Returns the positioner.
     */
    public function getPositioner() {
        return $this->positioner;
    }

    /**
     * Get the shadow.
     *
     * @return boolean Returns the shadow.
     */
    public function getShadow() {
        return $this->shadow;
    }

    /**
     * Get the shape.
     *
     * @return string Returns the shape.
     */
    public function getShape() {
        return $this->shape;
    }

    /**
     * Get the shared.
     *
     * @return boolean Returns the shared.
     */
    public function getShared() {
        return $this->shared;
    }

    /**
     * Get the snap.
     *
     * @return integer Returns the snap.
     */
    public function getSnap() {
        return $this->snap;
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
     * Get the style.
     *
     * @return array Returns the style.
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * Get the use HTML.
     *
     * @return boolean Returns the use HTML.
     */
    public function getUseHTML() {
        return $this->useHTML;
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
     * Set the animation.
     *
     * @param boolean $animation The animation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setAnimation($animation) {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the background color.
     *
     * @param string $backgroundColor The background color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string $borderColor The border color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border radius.
     *
     * @param integer $borderRadius The border radius.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setBorderRadius($borderRadius) {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param integer $borderWidth The border width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the crosshairs.
     *
     * @param mixed $crosshairs The crosshairs.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     * @deprecated
     */
    public function setCrosshairs($crosshairs) {
        $this->crosshairs = $crosshairs;
        return $this;
    }

    /**
     * Set the date time label formats.
     *
     * @param array $dateTimeLabelFormats The date time label formats.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setDateTimeLabelFormats(array $dateTimeLabelFormats = null) {
        $this->dateTimeLabelFormats = $dateTimeLabelFormats;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the follow pointer.
     *
     * @param boolean $followPointer The follow pointer.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setFollowPointer($followPointer) {
        $this->followPointer = $followPointer;
        return $this;
    }

    /**
     * Set the follow touch move.
     *
     * @param boolean $followTouchMove The follow touch move.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setFollowTouchMove($followTouchMove) {
        $this->followTouchMove = $followTouchMove;
        return $this;
    }

    /**
     * Set the footer format.
     *
     * @param string $footerFormat The footer format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setFooterFormat($footerFormat) {
        $this->footerFormat = $footerFormat;
        return $this;
    }

    /**
     * Set the formatter.
     *
     * @param string $formatter The formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setFormatter($formatter) {
        $this->formatter = $formatter;
        return $this;
    }

    /**
     * Set the header format.
     *
     * @param string $headerFormat The header format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setHeaderFormat($headerFormat) {
        $this->headerFormat = $headerFormat;
        return $this;
    }

    /**
     * Set the hide delay.
     *
     * @param integer $hideDelay The hide delay.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setHideDelay($hideDelay) {
        $this->hideDelay = $hideDelay;
        return $this;
    }

    /**
     * Set the padding.
     *
     * @param integer $padding The padding.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setPadding($padding) {
        $this->padding = $padding;
        return $this;
    }

    /**
     * Set the point format.
     *
     * @param string $pointFormat The point format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setPointFormat($pointFormat) {
        $this->pointFormat = $pointFormat;
        return $this;
    }

    /**
     * Set the point formatter.
     *
     * @param string $pointFormatter The point formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setPointFormatter($pointFormatter) {
        $this->pointFormatter = $pointFormatter;
        return $this;
    }

    /**
     * Set the positioner.
     *
     * @param string $positioner The positioner.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setPositioner($positioner) {
        $this->positioner = $positioner;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param boolean $shadow The shadow.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setShadow($shadow) {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the shape.
     *
     * @param string $shape The shape.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setShape($shape) {
        $this->shape = $shape;
        return $this;
    }

    /**
     * Set the shared.
     *
     * @param boolean $shared The shared.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setShared($shared) {
        $this->shared = $shared;
        return $this;
    }

    /**
     * Set the snap.
     *
     * @param integer $snap The snap.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setSnap($snap) {
        $this->snap = $snap;
        return $this;
    }

    /**
     * Set the split.
     *
     * @param boolean $split The split.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setSplit($split) {
        $this->split = $split;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setStyle(array $style = null) {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param boolean $useHTML The use HTML.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setUseHTML($useHTML) {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the value decimals.
     *
     * @param integer $valueDecimals The value decimals.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setValueDecimals($valueDecimals) {
        $this->valueDecimals = $valueDecimals;
        return $this;
    }

    /**
     * Set the value prefix.
     *
     * @param string $valuePrefix The value prefix.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setValuePrefix($valuePrefix) {
        $this->valuePrefix = $valuePrefix;
        return $this;
    }

    /**
     * Set the value suffix.
     *
     * @param string $valueSuffix The value suffix.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
     */
    public function setValueSuffix($valueSuffix) {
        $this->valueSuffix = $valueSuffix;
        return $this;
    }

    /**
     * Set the x date format.
     *
     * @param string $xDateFormat The x date format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the highcharts tooltip.
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

        // Set the animation.
        ArrayUtility::set($output, "animation", $this->animation, [null]);

        // Set the background color.
        ArrayUtility::set($output, "backgroundColor", $this->backgroundColor, [null]);

        // Set the border color.
        ArrayUtility::set($output, "borderColor", $this->borderColor, [null]);

        // Set the border radius.
        ArrayUtility::set($output, "borderRadius", $this->borderRadius, [null]);

        // Set the border width.
        ArrayUtility::set($output, "borderWidth", $this->borderWidth, [null]);

        // Set the crosshairs.
        ArrayUtility::set($output, "crosshairs", $this->crosshairs, [null]);

        // Set the date time label formats.
        ArrayUtility::set($output, "dateTimeLabelFormats", $this->dateTimeLabelFormats, [null]);

        // Set the enabled.
        ArrayUtility::set($output, "enabled", $this->enabled, [null]);

        // Set the follow pointer.
        ArrayUtility::set($output, "followPointer", $this->followPointer, [null]);

        // Set the follow touch move.
        ArrayUtility::set($output, "followTouchMove", $this->followTouchMove, [null]);

        // Set the footer format.
        ArrayUtility::set($output, "footerFormat", $this->footerFormat, [null]);

        // Set the formatter.
        ArrayUtility::set($output, "formatter", $this->formatter, [null]);

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

        // Set the positioner.
        ArrayUtility::set($output, "positioner", $this->positioner, [null]);

        // Set the shadow.
        ArrayUtility::set($output, "shadow", $this->shadow, [null]);

        // Set the shape.
        ArrayUtility::set($output, "shape", $this->shape, [null]);

        // Set the shared.
        ArrayUtility::set($output, "shared", $this->shared, [null]);

        // Set the snap.
        ArrayUtility::set($output, "snap", $this->snap, [null]);

        // Set the split.
        ArrayUtility::set($output, "split", $this->split, [null]);

        // Set the style.
        ArrayUtility::set($output, "style", $this->style, [null]);

        // Set the use HTML.
        ArrayUtility::set($output, "useHTML", $this->useHTML, [null]);

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
