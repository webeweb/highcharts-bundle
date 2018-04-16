<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts data labels.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge
 * @version 5.0.14
 * @final
 */
final class HighchartsDataLabels implements JsonSerializable {

    /**
     * Align.
     *
     * @var string
     */
    private $align = "center";

    /**
     * Allow overlap.
     *
     * @var boolean
     * @since 4.1.0
     */
    private $allowOverlap = false;

    /**
     * Background color.
     *
     * @var string
     * @since 2.2.1
     */
    private $backgroundColor;

    /**
     * Border color.
     *
     * @var string
     * @since 2.3.0
     */
    private $borderColor = "#cccccc";

    /**
     * Border radius.
     *
     * @var integer
     * @since 2.3.0
     */
    private $borderRadius = 3;

    /**
     * Border width.
     *
     * @var integer
     * @since 2.3.0
     */
    private $borderWidth = 1;

    /**
     * Class name.
     *
     * @var string
     * @since 5.0.0
     */
    private $className;

    /**
     * Color.
     *
     * @var string
     */
    private $color;

    /**
     * Crop.
     *
     * @var boolean
     * @since 2.3.3
     */
    private $crop = true;

    /**
     * Defer.
     *
     * @var boolean
     * @since 4.0
     */
    private $defer = true;

    /**
     * Enabled.
     *
     * @var boolean
     * @since 2.3.0
     */
    private $enabled = false;

    /**
     * Format.
     *
     * @var string
     * @since 3.0
     */
    private $format = "{y}";

    /**
     * Formatter.
     *
     * @var string
     */
    private $formatter;

    /**
     * Inside.
     *
     * @var boolean
     * @since 3.0
     */
    private $inside;

    /**
     * Overflow.
     *
     * @var string
     * @since 3.0.6
     */
    private $overflow = "justify";

    /**
     * Padding.
     *
     * @var integer
     * @since 2.2.1
     */
    private $padding = 5;

    /**
     * Rotation.
     *
     * @var integer
     */
    private $rotation = 0;

    /**
     * Shadow.
     *
     * @var boolean|array
     * @since 2.2.1
     */
    private $shadow = false;

    /**
     * Shape.
     *
     * @var string
     * @since 4.1.2
     */
    private $shape = "square";

    /**
     * Style.
     *
     * @var array
     * @since 4.1.0
     */
    private $style = ["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"];

    /**
     * Use HTML.
     *
     * @var boolean
     */
    private $useHTML = false;

    /**
     * Vertical align.
     *
     * @var string
     */
    private $verticalAlign = "top";

    /**
     * X.
     *
     * @var integer
     */
    private $x = 0;

    /**
     * Y.
     *
     * @var integer
     * @since 2.3.0
     */
    private $y = 15;

    /**
     * Z index.
     *
     * @var integer
     * @since 2.1.5
     */
    private $zIndex = 2;

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

        // Clear the align.
        $this->align = null;

        // Clear the allow overlap.
        $this->allowOverlap = null;

        // Clear the background color.
        $this->backgroundColor = null;

        // Clear the border color.
        $this->borderColor = null;

        // Clear the border radius.
        $this->borderRadius = null;

        // Clear the border width.
        $this->borderWidth = null;

        // Clear the class name.
        $this->className = null;

        // Clear the color.
        $this->color = null;

        // Clear the crop.
        $this->crop = null;

        // Clear the defer.
        $this->defer = null;

        // Clear the enabled.
        $this->enabled = null;

        // Clear the format.
        $this->format = null;

        // Clear the formatter.
        $this->formatter = null;

        // Clear the inside.
        $this->inside = null;

        // Clear the overflow.
        $this->overflow = null;

        // Clear the padding.
        $this->padding = null;

        // Clear the rotation.
        $this->rotation = null;

        // Clear the shadow.
        $this->shadow = null;

        // Clear the shape.
        $this->shape = null;

        // Clear the style.
        $this->style = null;

        // Clear the use HTML.
        $this->useHTML = null;

        // Clear the vertical align.
        $this->verticalAlign = null;

        // Clear the x.
        $this->x = null;

        // Clear the y.
        $this->y = null;

        // Clear the z index.
        $this->zIndex = null;
    }

    /**
     * Get the align.
     *
     * @return string Returns the align.
     */
    public function getAlign() {
        return $this->align;
    }

    /**
     * Get the allow overlap.
     *
     * @return boolean Returns the allow overlap.
     */
    public function getAllowOverlap() {
        return $this->allowOverlap;
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
     * Get the class name.
     *
     * @return string Returns the class name.
     */
    public function getClassName() {
        return $this->className;
    }

    /**
     * Get the color.
     *
     * @return string Returns the color.
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Get the crop.
     *
     * @return boolean Returns the crop.
     */
    public function getCrop() {
        return $this->crop;
    }

    /**
     * Get the defer.
     *
     * @return boolean Returns the defer.
     */
    public function getDefer() {
        return $this->defer;
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
     * Get the format.
     *
     * @return string Returns the format.
     */
    public function getFormat() {
        return $this->format;
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
     * Get the inside.
     *
     * @return boolean Returns the inside.
     */
    public function getInside() {
        return $this->inside;
    }

    /**
     * Get the overflow.
     *
     * @return string Returns the overflow.
     */
    public function getOverflow() {
        return $this->overflow;
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
     * Get the rotation.
     *
     * @return integer Returns the rotation.
     */
    public function getRotation() {
        return $this->rotation;
    }

    /**
     * Get the shadow.
     *
     * @return boolean|array Returns the shadow.
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
     * Get the vertical align.
     *
     * @return string Returns the vertical align.
     */
    public function getVerticalAlign() {
        return $this->verticalAlign;
    }

    /**
     * Get the x.
     *
     * @return integer Returns the x.
     */
    public function getX() {
        return $this->x;
    }

    /**
     * Get the y.
     *
     * @return integer Returns the y.
     */
    public function getY() {
        return $this->y;
    }

    /**
     * Get the z index.
     *
     * @return integer Returns the z index.
     */
    public function getZIndex() {
        return $this->zIndex;
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
     * Set the align.
     *
     * @param string $align The align.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setAlign($align) {
        switch ($align) {
            case "center":
            case "left":
            case "right":
            $this->align = $align;
            break;
        }
        return $this;
    }

    /**
     * Set the allow overlap.
     *
     * @param boolean $allowOverlap The allow overlap.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setAllowOverlap($allowOverlap) {
        $this->allowOverlap = $allowOverlap;
        return $this;
    }

    /**
     * Set the background color.
     *
     * @param string $backgroundColor The background color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string $borderColor The border color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border radius.
     *
     * @param integer $borderRadius The border radius.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setBorderRadius($borderRadius) {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param integer $borderWidth The border width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the crop.
     *
     * @param boolean $crop The crop.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setCrop($crop) {
        $this->crop = $crop;
        return $this;
    }

    /**
     * Set the defer.
     *
     * @param boolean $defer The defer.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setDefer($defer) {
        $this->defer = $defer;
        return $this;
    }

    /**
     * Set the enabled.
     *
     * @param boolean $enabled The enabled.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setEnabled($enabled) {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Set the format.
     *
     * @param string $format The format.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setFormat($format) {
        $this->format = $format;
        return $this;
    }

    /**
     * Set the formatter.
     *
     * @param string $formatter The formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setFormatter($formatter) {
        $this->formatter = $formatter;
        return $this;
    }

    /**
     * Set the inside.
     *
     * @param boolean $inside The inside.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setInside($inside) {
        $this->inside = $inside;
        return $this;
    }

    /**
     * Set the overflow.
     *
     * @param string $overflow The overflow.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setOverflow($overflow) {
        switch ($overflow) {
            case "justify":
            case "none":
            $this->overflow = $overflow;
            break;
        }
        return $this;
    }

    /**
     * Set the padding.
     *
     * @param integer $padding The padding.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setPadding($padding) {
        $this->padding = $padding;
        return $this;
    }

    /**
     * Set the rotation.
     *
     * @param integer $rotation The rotation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setRotation($rotation) {
        $this->rotation = $rotation;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param boolean|array $shadow The shadow.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setShadow($shadow) {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the shape.
     *
     * @param string $shape The shape.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setShape($shape) {
        $this->shape = $shape;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setStyle(array $style = null) {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the use HTML.
     *
     * @param boolean $useHTML The use HTML.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setUseHTML($useHTML) {
        $this->useHTML = $useHTML;
        return $this;
    }

    /**
     * Set the vertical align.
     *
     * @param string $verticalAlign The vertical align.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setVerticalAlign($verticalAlign) {
        $this->verticalAlign = $verticalAlign;
        return $this;
    }

    /**
     * Set the x.
     *
     * @param integer $x The x.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setX($x) {
        $this->x = $x;
        return $this;
    }

    /**
     * Set the y.
     *
     * @param integer $y The y.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setY($y) {
        $this->y = $y;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param integer $zIndex The z index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsDataLabels Returns the highcharts data labels.
     */
    public function setZIndex($zIndex) {
        $this->zIndex = $zIndex;
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

        // Set the align.
        ArrayUtility::set($output, "align", $this->align, [null]);

        // Set the allow overlap.
        ArrayUtility::set($output, "allowOverlap", $this->allowOverlap, [null]);

        // Set the background color.
        ArrayUtility::set($output, "backgroundColor", $this->backgroundColor, [null]);

        // Set the border color.
        ArrayUtility::set($output, "borderColor", $this->borderColor, [null]);

        // Set the border radius.
        ArrayUtility::set($output, "borderRadius", $this->borderRadius, [null]);

        // Set the border width.
        ArrayUtility::set($output, "borderWidth", $this->borderWidth, [null]);

        // Set the class name.
        ArrayUtility::set($output, "className", $this->className, [null]);

        // Set the color.
        ArrayUtility::set($output, "color", $this->color, [null]);

        // Set the crop.
        ArrayUtility::set($output, "crop", $this->crop, [null]);

        // Set the defer.
        ArrayUtility::set($output, "defer", $this->defer, [null]);

        // Set the enabled.
        ArrayUtility::set($output, "enabled", $this->enabled, [null]);

        // Set the format.
        ArrayUtility::set($output, "format", $this->format, [null]);

        // Set the formatter.
        ArrayUtility::set($output, "formatter", $this->formatter, [null]);

        // Set the inside.
        ArrayUtility::set($output, "inside", $this->inside, [null]);

        // Set the overflow.
        ArrayUtility::set($output, "overflow", $this->overflow, [null]);

        // Set the padding.
        ArrayUtility::set($output, "padding", $this->padding, [null]);

        // Set the rotation.
        ArrayUtility::set($output, "rotation", $this->rotation, [null]);

        // Set the shadow.
        ArrayUtility::set($output, "shadow", $this->shadow, [null]);

        // Set the shape.
        ArrayUtility::set($output, "shape", $this->shape, [null]);

        // Set the style.
        ArrayUtility::set($output, "style", $this->style, [null]);

        // Set the use HTML.
        ArrayUtility::set($output, "useHTML", $this->useHTML, [null]);

        // Set the vertical align.
        ArrayUtility::set($output, "verticalAlign", $this->verticalAlign, [null]);

        // Set the x.
        ArrayUtility::set($output, "x", $this->x, [null]);

        // Set the y.
        ArrayUtility::set($output, "y", $this->y, [null]);

        // Set the z index.
        ArrayUtility::set($output, "zIndex", $this->zIndex, [null]);

        // Return the output.
        return $output;
    }

}
