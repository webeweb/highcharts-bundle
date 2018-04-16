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
 * Highcharts chart.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsChart implements JsonSerializable {

    /**
     * Align ticks.
     *
     * @var boolean
     */
    private $alignTicks = true;

    /**
     * Animation.
     *
     * @var boolean|array
     */
    private $animation = true;

    /**
     * Background color.
     *
     * @var string
     */
    private $backgroundColor = "#FFFFFF";

    /**
     * Border color.
     *
     * @var string
     */
    private $borderColor = "#335cad";

    /**
     * Border radius.
     *
     * @var integer
     */
    private $borderRadius = 0;

    /**
     * Border width.
     *
     * @var integer
     */
    private $borderWidth = 0;

    /**
     * Class name.
     *
     * @var string
     */
    private $className;

    /**
     * Color count.
     *
     * @var integer
     * @since 5.0.0
     */
    private $colorCount = 10;

    /**
     * Default series type.
     *
     * @var string
     * @deprecated
     */
    private $defaultSeriesType = "line";

    /**
     * Description.
     *
     * @var string
     * @since 5.0.0
     */
    private $description;

    /**
     * Events.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents
     */
    private $events;

    /**
     * Height.
     *
     * @var integer|string
     */
    private $height;

    /**
     * Ignore hidden series.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $ignoreHiddenSeries = true;

    /**
     * Inverted.
     *
     * @var boolean
     */
    private $inverted = false;

    /**
     * Margin.
     *
     * @var array
     */
    private $margin;

    /**
     * Margin bottom.
     *
     * @var integer
     * @since 2.0
     */
    private $marginBottom;

    /**
     * Margin left.
     *
     * @var integer
     * @since 2.0
     */
    private $marginLeft;

    /**
     * Margin right.
     *
     * @var integer
     * @since 2.0
     */
    private $marginRight;

    /**
     * Margin top.
     *
     * @var integer
     * @since 2.0
     */
    private $marginTop;

    /**
     * Options3d.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d
     * @since 4.0
     */
    private $options3d;

    /**
     * Pan key.
     *
     * @var string
     * @since 4.0.3
     */
    private $panKey;

    /**
     * Panning.
     *
     * @var boolean
     * @since 4.0.3
     */
    private $panning = false;

    /**
     * Pinch type.
     *
     * @var string
     * @since 3.0
     */
    private $pinchType;

    /**
     * Plot background color.
     *
     * @var string
     */
    private $plotBackgroundColor;

    /**
     * Plot background image.
     *
     * @var string
     */
    private $plotBackgroundImage;

    /**
     * Plot border color.
     *
     * @var string
     */
    private $plotBorderColor = "#cccccc";

    /**
     * Plot border width.
     *
     * @var integer
     */
    private $plotBorderWidth = 0;

    /**
     * Plot shadow.
     *
     * @var boolean|array
     */
    private $plotShadow = false;

    /**
     * Polar.
     *
     * @var boolean
     * @since 2.3.0
     */
    private $polar = false;

    /**
     * Reflow.
     *
     * @var boolean
     * @since 2.1
     */
    private $reflow = true;

    /**
     * Render to.
     *
     * @var string
     */
    private $renderTo;

    /**
     * Reset zoom button.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton
     */
    private $resetZoomButton;

    /**
     * Selection marker fill.
     *
     * @var string
     * @since 2.1.7
     */
    private $selectionMarkerFill = "rgba(51,92,173,0.25)";

    /**
     * Shadow.
     *
     * @var boolean|array
     */
    private $shadow = false;

    /**
     * Show axes.
     *
     * @var boolean
     * @since 1.2.5
     */
    private $showAxes = false;

    /**
     * Spacing.
     *
     * @var array
     * @since 3.0.6
     */
    private $spacing = [10, 10, 15, 10];

    /**
     * Spacing bottom.
     *
     * @var integer
     * @since 2.1
     */
    private $spacingBottom = 15;

    /**
     * Spacing left.
     *
     * @var integer
     * @since 2.1
     */
    private $spacingLeft = 10;

    /**
     * Spacing right.
     *
     * @var integer
     * @since 2.1
     */
    private $spacingRight = 10;

    /**
     * Spacing top.
     *
     * @var integer
     * @since 2.1
     */
    private $spacingTop = 10;

    /**
     * Style.
     *
     * @var array
     */
    private $style = ["fontFamily" => "\"Lucida Grande\", \"Lucida Sans Unicode\", Verdana, Arial, Helvetica, sans-serif", "fontSize" => "12px"];

    /**
     * Type.
     *
     * @var string
     * @since 2.1.0
     */
    private $type = "line";

    /**
     * Type description.
     *
     * @var string
     * @since 5.0.0
     */
    private $typeDescription;

    /**
     * Width.
     *
     * @var integer
     */
    private $width;

    /**
     * Zoom type.
     *
     * @var string
     */
    private $zoomType;

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

        // Clear the align ticks.
        $this->alignTicks = null;

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

        // Clear the class name.
        $this->className = null;

        // Clear the color count.
        $this->colorCount = null;

        // Clear the default series type.
        $this->defaultSeriesType = null;

        // Clear the description.
        $this->description = null;

        // Clear the events.
        if (null !== $this->events) {
            $this->events->clear();
        }

        // Clear the height.
        $this->height = null;

        // Clear the ignore hidden series.
        $this->ignoreHiddenSeries = null;

        // Clear the inverted.
        $this->inverted = null;

        // Clear the margin.
        $this->margin = null;

        // Clear the margin bottom.
        $this->marginBottom = null;

        // Clear the margin left.
        $this->marginLeft = null;

        // Clear the margin right.
        $this->marginRight = null;

        // Clear the margin top.
        $this->marginTop = null;

        // Clear the options3d.
        if (null !== $this->options3d) {
            $this->options3d->clear();
        }

        // Clear the pan key.
        $this->panKey = null;

        // Clear the panning.
        $this->panning = null;

        // Clear the pinch type.
        $this->pinchType = null;

        // Clear the plot background color.
        $this->plotBackgroundColor = null;

        // Clear the plot background image.
        $this->plotBackgroundImage = null;

        // Clear the plot border color.
        $this->plotBorderColor = null;

        // Clear the plot border width.
        $this->plotBorderWidth = null;

        // Clear the plot shadow.
        $this->plotShadow = null;

        // Clear the polar.
        $this->polar = null;

        // Clear the reflow.
        $this->reflow = null;

        // Clear the render to.
        $this->renderTo = null;

        // Clear the reset zoom button.
        if (null !== $this->resetZoomButton) {
            $this->resetZoomButton->clear();
        }

        // Clear the selection marker fill.
        $this->selectionMarkerFill = null;

        // Clear the shadow.
        $this->shadow = null;

        // Clear the show axes.
        $this->showAxes = null;

        // Clear the spacing.
        $this->spacing = null;

        // Clear the spacing bottom.
        $this->spacingBottom = null;

        // Clear the spacing left.
        $this->spacingLeft = null;

        // Clear the spacing right.
        $this->spacingRight = null;

        // Clear the spacing top.
        $this->spacingTop = null;

        // Clear the style.
        $this->style = null;

        // Clear the type.
        $this->type = null;

        // Clear the type description.
        $this->typeDescription = null;

        // Clear the width.
        $this->width = null;

        // Clear the zoom type.
        $this->zoomType = null;
    }

    /**
     * Get the align ticks.
     *
     * @return boolean Returns the align ticks.
     */
    public function getAlignTicks() {
        return $this->alignTicks;
    }

    /**
     * Get the animation.
     *
     * @return boolean|array Returns the animation.
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
     * Get the class name.
     *
     * @return string Returns the class name.
     */
    public function getClassName() {
        return $this->className;
    }

    /**
     * Get the color count.
     *
     * @return integer Returns the color count.
     */
    public function getColorCount() {
        return $this->colorCount;
    }

    /**
     * Get the default series type.
     *
     * @return string Returns the default series type.
     * @deprecated
     */
    public function getDefaultSeriesType() {
        return $this->defaultSeriesType;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the events.
     */
    public function getEvents() {
        return $this->events;
    }

    /**
     * Get the height.
     *
     * @return integer|string Returns the height.
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Get the ignore hidden series.
     *
     * @return boolean Returns the ignore hidden series.
     */
    public function getIgnoreHiddenSeries() {
        return $this->ignoreHiddenSeries;
    }

    /**
     * Get the inverted.
     *
     * @return boolean Returns the inverted.
     */
    public function getInverted() {
        return $this->inverted;
    }

    /**
     * Get the margin.
     *
     * @return array Returns the margin.
     */
    public function getMargin() {
        return $this->margin;
    }

    /**
     * Get the margin bottom.
     *
     * @return integer Returns the margin bottom.
     */
    public function getMarginBottom() {
        return $this->marginBottom;
    }

    /**
     * Get the margin left.
     *
     * @return integer Returns the margin left.
     */
    public function getMarginLeft() {
        return $this->marginLeft;
    }

    /**
     * Get the margin right.
     *
     * @return integer Returns the margin right.
     */
    public function getMarginRight() {
        return $this->marginRight;
    }

    /**
     * Get the margin top.
     *
     * @return integer Returns the margin top.
     */
    public function getMarginTop() {
        return $this->marginTop;
    }

    /**
     * Get the options3d.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d Returns the options3d.
     */
    public function getOptions3d() {
        return $this->options3d;
    }

    /**
     * Get the pan key.
     *
     * @return string Returns the pan key.
     */
    public function getPanKey() {
        return $this->panKey;
    }

    /**
     * Get the panning.
     *
     * @return boolean Returns the panning.
     */
    public function getPanning() {
        return $this->panning;
    }

    /**
     * Get the pinch type.
     *
     * @return string Returns the pinch type.
     */
    public function getPinchType() {
        return $this->pinchType;
    }

    /**
     * Get the plot background color.
     *
     * @return string Returns the plot background color.
     */
    public function getPlotBackgroundColor() {
        return $this->plotBackgroundColor;
    }

    /**
     * Get the plot background image.
     *
     * @return string Returns the plot background image.
     */
    public function getPlotBackgroundImage() {
        return $this->plotBackgroundImage;
    }

    /**
     * Get the plot border color.
     *
     * @return string Returns the plot border color.
     */
    public function getPlotBorderColor() {
        return $this->plotBorderColor;
    }

    /**
     * Get the plot border width.
     *
     * @return integer Returns the plot border width.
     */
    public function getPlotBorderWidth() {
        return $this->plotBorderWidth;
    }

    /**
     * Get the plot shadow.
     *
     * @return boolean|array Returns the plot shadow.
     */
    public function getPlotShadow() {
        return $this->plotShadow;
    }

    /**
     * Get the polar.
     *
     * @return boolean Returns the polar.
     */
    public function getPolar() {
        return $this->polar;
    }

    /**
     * Get the reflow.
     *
     * @return boolean Returns the reflow.
     */
    public function getReflow() {
        return $this->reflow;
    }

    /**
     * Get the render to.
     *
     * @return string Returns the render to.
     */
    public function getRenderTo() {
        return $this->renderTo;
    }

    /**
     * Get the reset zoom button.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton Returns the reset zoom button.
     */
    public function getResetZoomButton() {
        return $this->resetZoomButton;
    }

    /**
     * Get the selection marker fill.
     *
     * @return string Returns the selection marker fill.
     */
    public function getSelectionMarkerFill() {
        return $this->selectionMarkerFill;
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
     * Get the show axes.
     *
     * @return boolean Returns the show axes.
     */
    public function getShowAxes() {
        return $this->showAxes;
    }

    /**
     * Get the spacing.
     *
     * @return array Returns the spacing.
     */
    public function getSpacing() {
        return $this->spacing;
    }

    /**
     * Get the spacing bottom.
     *
     * @return integer Returns the spacing bottom.
     */
    public function getSpacingBottom() {
        return $this->spacingBottom;
    }

    /**
     * Get the spacing left.
     *
     * @return integer Returns the spacing left.
     */
    public function getSpacingLeft() {
        return $this->spacingLeft;
    }

    /**
     * Get the spacing right.
     *
     * @return integer Returns the spacing right.
     */
    public function getSpacingRight() {
        return $this->spacingRight;
    }

    /**
     * Get the spacing top.
     *
     * @return integer Returns the spacing top.
     */
    public function getSpacingTop() {
        return $this->spacingTop;
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
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the type description.
     *
     * @return string Returns the type description.
     */
    public function getTypeDescription() {
        return $this->typeDescription;
    }

    /**
     * Get the width.
     *
     * @return integer Returns the width.
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * Get the zoom type.
     *
     * @return string Returns the zoom type.
     */
    public function getZoomType() {
        return $this->zoomType;
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
     * Create a new events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the events.
     */
    public function newEvents() {
        $this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new options3d.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d Returns the options3d.
     */
    public function newOptions3d() {
        $this->options3d = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d();
        return $this->options3d;
    }

    /**
     * Create a new reset zoom button.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton Returns the reset zoom button.
     */
    public function newResetZoomButton() {
        $this->resetZoomButton = new \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton();
        return $this->resetZoomButton;
    }

    /**
     * Set the align ticks.
     *
     * @param boolean $alignTicks The align ticks.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setAlignTicks($alignTicks) {
        $this->alignTicks = $alignTicks;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param boolean|array $animation The animation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setAnimation($animation) {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the background color.
     *
     * @param string $backgroundColor The background color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setBackgroundColor($backgroundColor) {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string $borderColor The border color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border radius.
     *
     * @param integer $borderRadius The border radius.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setBorderRadius($borderRadius) {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param integer $borderWidth The border width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color count.
     *
     * @param integer $colorCount The color count.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setColorCount($colorCount) {
        $this->colorCount = $colorCount;
        return $this;
    }

    /**
     * Set the default series type.
     *
     * @param string $defaultSeriesType The default series type.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     * @deprecated
     */
    public function setDefaultSeriesType($defaultSeriesType) {
        switch ($defaultSeriesType) {
            case "area":
            case "areaspline":
            case "column":
            case "line":
            case "pie":
            case "spline":
            $this->defaultSeriesType = $defaultSeriesType;
            break;
        }
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents $events The events.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsEvents $events = null) {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the height.
     *
     * @param integer|string $height The height.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    /**
     * Set the ignore hidden series.
     *
     * @param boolean $ignoreHiddenSeries The ignore hidden series.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setIgnoreHiddenSeries($ignoreHiddenSeries) {
        $this->ignoreHiddenSeries = $ignoreHiddenSeries;
        return $this;
    }

    /**
     * Set the inverted.
     *
     * @param boolean $inverted The inverted.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setInverted($inverted) {
        $this->inverted = $inverted;
        return $this;
    }

    /**
     * Set the margin.
     *
     * @param array $margin The margin.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setMargin(array $margin = null) {
        $this->margin = $margin;
        return $this;
    }

    /**
     * Set the margin bottom.
     *
     * @param integer $marginBottom The margin bottom.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setMarginBottom($marginBottom) {
        $this->marginBottom = $marginBottom;
        return $this;
    }

    /**
     * Set the margin left.
     *
     * @param integer $marginLeft The margin left.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setMarginLeft($marginLeft) {
        $this->marginLeft = $marginLeft;
        return $this;
    }

    /**
     * Set the margin right.
     *
     * @param integer $marginRight The margin right.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setMarginRight($marginRight) {
        $this->marginRight = $marginRight;
        return $this;
    }

    /**
     * Set the margin top.
     *
     * @param integer $marginTop The margin top.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setMarginTop($marginTop) {
        $this->marginTop = $marginTop;
        return $this;
    }

    /**
     * Set the options3d.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d $options3d The options3d.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setOptions3d(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsOptions3d $options3d = null) {
        $this->options3d = $options3d;
        return $this;
    }

    /**
     * Set the pan key.
     *
     * @param string $panKey The pan key.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setPanKey($panKey) {
        switch ($panKey) {
            case null:
            case "alt":
            case "ctrl":
            case "meta":
            case "shift":
            $this->panKey = $panKey;
            break;
        }
        return $this;
    }

    /**
     * Set the panning.
     *
     * @param boolean $panning The panning.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setPanning($panning) {
        $this->panning = $panning;
        return $this;
    }

    /**
     * Set the pinch type.
     *
     * @param string $pinchType The pinch type.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setPinchType($pinchType) {
        switch ($pinchType) {
            case "x":
            case "xy":
            case "y":
            $this->pinchType = $pinchType;
            break;
        }
        return $this;
    }

    /**
     * Set the plot background color.
     *
     * @param string $plotBackgroundColor The plot background color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setPlotBackgroundColor($plotBackgroundColor) {
        $this->plotBackgroundColor = $plotBackgroundColor;
        return $this;
    }

    /**
     * Set the plot background image.
     *
     * @param string $plotBackgroundImage The plot background image.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setPlotBackgroundImage($plotBackgroundImage) {
        $this->plotBackgroundImage = $plotBackgroundImage;
        return $this;
    }

    /**
     * Set the plot border color.
     *
     * @param string $plotBorderColor The plot border color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setPlotBorderColor($plotBorderColor) {
        $this->plotBorderColor = $plotBorderColor;
        return $this;
    }

    /**
     * Set the plot border width.
     *
     * @param integer $plotBorderWidth The plot border width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setPlotBorderWidth($plotBorderWidth) {
        $this->plotBorderWidth = $plotBorderWidth;
        return $this;
    }

    /**
     * Set the plot shadow.
     *
     * @param boolean|array $plotShadow The plot shadow.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setPlotShadow($plotShadow) {
        $this->plotShadow = $plotShadow;
        return $this;
    }

    /**
     * Set the polar.
     *
     * @param boolean $polar The polar.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setPolar($polar) {
        $this->polar = $polar;
        return $this;
    }

    /**
     * Set the reflow.
     *
     * @param boolean $reflow The reflow.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setReflow($reflow) {
        $this->reflow = $reflow;
        return $this;
    }

    /**
     * Set the render to.
     *
     * @param string $renderTo The render to.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setRenderTo($renderTo) {
        $this->renderTo = $renderTo;
        return $this;
    }

    /**
     * Set the reset zoom button.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton $resetZoomButton The reset zoom button.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setResetZoomButton(\WBW\Bundle\HighchartsBundle\API\Chart\Chart\HighchartsResetZoomButton $resetZoomButton = null) {
        $this->resetZoomButton = $resetZoomButton;
        return $this;
    }

    /**
     * Set the selection marker fill.
     *
     * @param string $selectionMarkerFill The selection marker fill.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setSelectionMarkerFill($selectionMarkerFill) {
        $this->selectionMarkerFill = $selectionMarkerFill;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param boolean|array $shadow The shadow.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setShadow($shadow) {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the show axes.
     *
     * @param boolean $showAxes The show axes.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setShowAxes($showAxes) {
        $this->showAxes = $showAxes;
        return $this;
    }

    /**
     * Set the spacing.
     *
     * @param array $spacing The spacing.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setSpacing(array $spacing = null) {
        $this->spacing = $spacing;
        return $this;
    }

    /**
     * Set the spacing bottom.
     *
     * @param integer $spacingBottom The spacing bottom.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setSpacingBottom($spacingBottom) {
        $this->spacingBottom = $spacingBottom;
        return $this;
    }

    /**
     * Set the spacing left.
     *
     * @param integer $spacingLeft The spacing left.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setSpacingLeft($spacingLeft) {
        $this->spacingLeft = $spacingLeft;
        return $this;
    }

    /**
     * Set the spacing right.
     *
     * @param integer $spacingRight The spacing right.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setSpacingRight($spacingRight) {
        $this->spacingRight = $spacingRight;
        return $this;
    }

    /**
     * Set the spacing top.
     *
     * @param integer $spacingTop The spacing top.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setSpacingTop($spacingTop) {
        $this->spacingTop = $spacingTop;
        return $this;
    }

    /**
     * Set the style.
     *
     * @param array $style The style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setStyle(array $style = null) {
        $this->style = $style;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setType($type) {
        switch ($type) {
            case "area":
            case "arearange":
            case "areaspline":
            case "areasplinerange":
            case "bar":
            case "boxplot":
            case "bubble":
            case "column":
            case "columnrange":
            case "errorbar":
            case "funnel":
            case "gauge":
            case "heatmap":
            case "line":
            case "pie":
            case "polygon":
            case "pyramid":
            case "scatter":
            case "solidgauge":
            case "spline":
            case "treemap":
            case "waterfall":
            $this->type = $type;
            break;
        }
        return $this;
    }

    /**
     * Set the type description.
     *
     * @param string $typeDescription The type description.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setTypeDescription($typeDescription) {
        $this->typeDescription = $typeDescription;
        return $this;
    }

    /**
     * Set the width.
     *
     * @param integer $width The width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }

    /**
     * Set the zoom type.
     *
     * @param string $zoomType The zoom type.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the highcharts chart.
     */
    public function setZoomType($zoomType) {
        switch ($zoomType) {
            case null:
            case "x":
            case "xy":
            case "y":
            $this->zoomType = $zoomType;
            break;
        }
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

        // Set the align ticks.
        ArrayUtility::set($output, "alignTicks", $this->alignTicks, [null]);

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

        // Set the class name.
        ArrayUtility::set($output, "className", $this->className, [null]);

        // Set the color count.
        ArrayUtility::set($output, "colorCount", $this->colorCount, [null]);

        // Set the default series type.
        ArrayUtility::set($output, "defaultSeriesType", $this->defaultSeriesType, [null]);

        // Set the description.
        ArrayUtility::set($output, "description", $this->description, [null]);

        // Set the events.
        if (null !== $this->events) {
            ArrayUtility::set($output, "events", $this->events->toArray(), []);
        }

        // Set the height.
        ArrayUtility::set($output, "height", $this->height, [null]);

        // Set the ignore hidden series.
        ArrayUtility::set($output, "ignoreHiddenSeries", $this->ignoreHiddenSeries, [null]);

        // Set the inverted.
        ArrayUtility::set($output, "inverted", $this->inverted, [null]);

        // Set the margin.
        ArrayUtility::set($output, "margin", $this->margin, [null]);

        // Set the margin bottom.
        ArrayUtility::set($output, "marginBottom", $this->marginBottom, [null]);

        // Set the margin left.
        ArrayUtility::set($output, "marginLeft", $this->marginLeft, [null]);

        // Set the margin right.
        ArrayUtility::set($output, "marginRight", $this->marginRight, [null]);

        // Set the margin top.
        ArrayUtility::set($output, "marginTop", $this->marginTop, [null]);

        // Set the options3d.
        if (null !== $this->options3d) {
            ArrayUtility::set($output, "options3d", $this->options3d->toArray(), []);
        }

        // Set the pan key.
        ArrayUtility::set($output, "panKey", $this->panKey, [null]);

        // Set the panning.
        ArrayUtility::set($output, "panning", $this->panning, [null]);

        // Set the pinch type.
        ArrayUtility::set($output, "pinchType", $this->pinchType, [null]);

        // Set the plot background color.
        ArrayUtility::set($output, "plotBackgroundColor", $this->plotBackgroundColor, [null]);

        // Set the plot background image.
        ArrayUtility::set($output, "plotBackgroundImage", $this->plotBackgroundImage, [null]);

        // Set the plot border color.
        ArrayUtility::set($output, "plotBorderColor", $this->plotBorderColor, [null]);

        // Set the plot border width.
        ArrayUtility::set($output, "plotBorderWidth", $this->plotBorderWidth, [null]);

        // Set the plot shadow.
        ArrayUtility::set($output, "plotShadow", $this->plotShadow, [null]);

        // Set the polar.
        ArrayUtility::set($output, "polar", $this->polar, [null]);

        // Set the reflow.
        ArrayUtility::set($output, "reflow", $this->reflow, [null]);

        // Set the render to.
        ArrayUtility::set($output, "renderTo", $this->renderTo, [null]);

        // Set the reset zoom button.
        if (null !== $this->resetZoomButton) {
            ArrayUtility::set($output, "resetZoomButton", $this->resetZoomButton->toArray(), []);
        }

        // Set the selection marker fill.
        ArrayUtility::set($output, "selectionMarkerFill", $this->selectionMarkerFill, [null]);

        // Set the shadow.
        ArrayUtility::set($output, "shadow", $this->shadow, [null]);

        // Set the show axes.
        ArrayUtility::set($output, "showAxes", $this->showAxes, [null]);

        // Set the spacing.
        ArrayUtility::set($output, "spacing", $this->spacing, [null]);

        // Set the spacing bottom.
        ArrayUtility::set($output, "spacingBottom", $this->spacingBottom, [null]);

        // Set the spacing left.
        ArrayUtility::set($output, "spacingLeft", $this->spacingLeft, [null]);

        // Set the spacing right.
        ArrayUtility::set($output, "spacingRight", $this->spacingRight, [null]);

        // Set the spacing top.
        ArrayUtility::set($output, "spacingTop", $this->spacingTop, [null]);

        // Set the style.
        ArrayUtility::set($output, "style", $this->style, [null]);

        // Set the type.
        ArrayUtility::set($output, "type", $this->type, [null]);

        // Set the type description.
        ArrayUtility::set($output, "typeDescription", $this->typeDescription, [null]);

        // Set the width.
        ArrayUtility::set($output, "width", $this->width, [null]);

        // Set the zoom type.
        ArrayUtility::set($output, "zoomType", $this->zoomType, [null]);

        // Return the output.
        return $output;
    }

}
