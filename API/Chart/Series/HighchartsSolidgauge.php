<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts solidgauge.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series
 * @version 5.0.14
 * @final
 */
final class HighchartsSolidgauge implements JsonSerializable {

    /**
     * Animation.
     *
     * @var boolean
     */
    private $animation = true;

    /**
     * Animation limit.
     *
     * @var integer
     */
    private $animationLimit;

    /**
     * Class name.
     *
     * @var string
     * @since 5.0.0
     */
    private $className;

    /**
     * Color index.
     *
     * @var integer
     * @since 5.0.0
     */
    private $colorIndex;

    /**
     * Cursor.
     *
     * @var string
     */
    private $cursor;

    /**
     * Data.
     *
     * @var array
     */
    private $data;

    /**
     * Data labels.
     *
     * @var array
     * @since 2.3.0
     */
    private $dataLabels;

    /**
     * Description.
     *
     * @var string
     * @since 5.0.0
     */
    private $description;

    /**
     * Enable mouse tracking.
     *
     * @var boolean
     */
    private $enableMouseTracking = true;

    /**
     * Events.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsEvents
     */
    private $events;

    /**
     * Expose element to a11y.
     *
     * @var boolean
     * @since 5.0.12
     */
    private $exposeElementToA11y;

    /**
     * Find nearest point by.
     *
     * @var string
     * @since 5.0.10
     */
    private $findNearestPointBy;

    /**
     * Get extremes from all.
     *
     * @var boolean
     * @since 4.1.6
     */
    private $getExtremesFromAll = false;

    /**
     * Id.
     *
     * @var string
     * @since 1.2.0
     */
    private $id;

    /**
     * Index.
     *
     * @var integer
     * @since 2.3.0
     */
    private $index;

    /**
     * Keys.
     *
     * @var array
     * @since 4.1.6
     */
    private $keys;

    /**
     * Legend index.
     *
     * @var integer
     */
    private $legendIndex;

    /**
     * Linecap.
     *
     * @var string
     * @since 4.2.2
     */
    private $linecap = "round";

    /**
     * Name.
     *
     * @var string
     */
    private $name;

    /**
     * Overshoot.
     *
     * @var integer
     * @since 3.0.10
     */
    private $overshoot = 0;

    /**
     * Point.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsPoint
     */
    private $point;

    /**
     * Point description formatter.
     *
     * @var string
     * @since 5.0.12
     */
    private $pointDescriptionFormatter;

    /**
     * Rounded.
     *
     * @var boolean
     * @since 5.0.11
     */
    private $rounded = false;

    /**
     * Selected.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $selected = false;

    /**
     * Show checkbox.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $showCheckbox = false;

    /**
     * Show in legend.
     *
     * @var boolean
     * @since 2.3.0
     */
    private $showInLegend;

    /**
     * Skip keyboard navigation.
     *
     * @var boolean
     * @since 5.0.12
     */
    private $skipKeyboardNavigation;

    /**
     * Sticky tracking.
     *
     * @var boolean
     * @since 2.0
     */
    private $stickyTracking = true;

    /**
     * Threshold.
     *
     * @var integer
     * @since 5.0.3
     */
    private $threshold;

    /**
     * Tooltip.
     *
     * @var array
     * @since 2.3
     */
    private $tooltip;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Visible.
     *
     * @var boolean
     */
    private $visible = true;

    /**
     * Wrap.
     *
     * @var boolean
     * @since 3.0
     */
    private $wrap = true;

    /**
     * X axis.
     *
     * @var integer|string
     */
    private $xAxis = "0";

    /**
     * Y axis.
     *
     * @var integer|string
     */
    private $yAxis = "0";

    /**
     * Z index.
     *
     * @var integer
     */
    private $zIndex;

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

        // Clear the animation limit.
        $this->animationLimit = null;

        // Clear the class name.
        $this->className = null;

        // Clear the color index.
        $this->colorIndex = null;

        // Clear the cursor.
        $this->cursor = null;

        // Clear the data.
        $this->data = null;

        // Clear the data labels.
        $this->dataLabels = null;

        // Clear the description.
        $this->description = null;

        // Clear the enable mouse tracking.
        $this->enableMouseTracking = null;

        // Clear the events.
        if (null !== $this->events) {
            $this->events->clear();
        }

        // Clear the expose element to a11y.
        $this->exposeElementToA11y = null;

        // Clear the find nearest point by.
        $this->findNearestPointBy = null;

        // Clear the get extremes from all.
        $this->getExtremesFromAll = null;

        // Clear the id.
        $this->id = null;

        // Clear the index.
        $this->index = null;

        // Clear the keys.
        $this->keys = null;

        // Clear the legend index.
        $this->legendIndex = null;

        // Clear the linecap.
        $this->linecap = null;

        // Clear the name.
        $this->name = null;

        // Clear the overshoot.
        $this->overshoot = null;

        // Clear the point.
        if (null !== $this->point) {
            $this->point->clear();
        }

        // Clear the point description formatter.
        $this->pointDescriptionFormatter = null;

        // Clear the rounded.
        $this->rounded = null;

        // Clear the selected.
        $this->selected = null;

        // Clear the show checkbox.
        $this->showCheckbox = null;

        // Clear the show in legend.
        $this->showInLegend = null;

        // Clear the skip keyboard navigation.
        $this->skipKeyboardNavigation = null;

        // Clear the sticky tracking.
        $this->stickyTracking = null;

        // Clear the threshold.
        $this->threshold = null;

        // Clear the tooltip.
        $this->tooltip = null;

        // Clear the type.
        $this->type = null;

        // Clear the visible.
        $this->visible = null;

        // Clear the wrap.
        $this->wrap = null;

        // Clear the x axis.
        $this->xAxis = null;

        // Clear the y axis.
        $this->yAxis = null;

        // Clear the z index.
        $this->zIndex = null;
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
     * Get the animation limit.
     *
     * @return integer Returns the animation limit.
     */
    public function getAnimationLimit() {
        return $this->animationLimit;
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
     * Get the color index.
     *
     * @return integer Returns the color index.
     */
    public function getColorIndex() {
        return $this->colorIndex;
    }

    /**
     * Get the cursor.
     *
     * @return string Returns the cursor.
     */
    public function getCursor() {
        return $this->cursor;
    }

    /**
     * Get the data.
     *
     * @return array Returns the data.
     */
    public function getData() {
        return $this->data;
    }

    /**
     * Get the data labels.
     *
     * @return array Returns the data labels.
     */
    public function getDataLabels() {
        return $this->dataLabels;
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
     * Get the enable mouse tracking.
     *
     * @return boolean Returns the enable mouse tracking.
     */
    public function getEnableMouseTracking() {
        return $this->enableMouseTracking;
    }

    /**
     * Get the events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsEvents Returns the events.
     */
    public function getEvents() {
        return $this->events;
    }

    /**
     * Get the expose element to a11y.
     *
     * @return boolean Returns the expose element to a11y.
     */
    public function getExposeElementToA11y() {
        return $this->exposeElementToA11y;
    }

    /**
     * Get the find nearest point by.
     *
     * @return string Returns the find nearest point by.
     */
    public function getFindNearestPointBy() {
        return $this->findNearestPointBy;
    }

    /**
     * Get the get extremes from all.
     *
     * @return boolean Returns the get extremes from all.
     */
    public function getGetExtremesFromAll() {
        return $this->getExtremesFromAll;
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the index.
     *
     * @return integer Returns the index.
     */
    public function getIndex() {
        return $this->index;
    }

    /**
     * Get the keys.
     *
     * @return array Returns the keys.
     */
    public function getKeys() {
        return $this->keys;
    }

    /**
     * Get the legend index.
     *
     * @return integer Returns the legend index.
     */
    public function getLegendIndex() {
        return $this->legendIndex;
    }

    /**
     * Get the linecap.
     *
     * @return string Returns the linecap.
     */
    public function getLinecap() {
        return $this->linecap;
    }

    /**
     * Get the name.
     *
     * @return string Returns the name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get the overshoot.
     *
     * @return integer Returns the overshoot.
     */
    public function getOvershoot() {
        return $this->overshoot;
    }

    /**
     * Get the point.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsPoint Returns the point.
     */
    public function getPoint() {
        return $this->point;
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
     * Get the rounded.
     *
     * @return boolean Returns the rounded.
     */
    public function getRounded() {
        return $this->rounded;
    }

    /**
     * Get the selected.
     *
     * @return boolean Returns the selected.
     */
    public function getSelected() {
        return $this->selected;
    }

    /**
     * Get the show checkbox.
     *
     * @return boolean Returns the show checkbox.
     */
    public function getShowCheckbox() {
        return $this->showCheckbox;
    }

    /**
     * Get the show in legend.
     *
     * @return boolean Returns the show in legend.
     */
    public function getShowInLegend() {
        return $this->showInLegend;
    }

    /**
     * Get the skip keyboard navigation.
     *
     * @return boolean Returns the skip keyboard navigation.
     */
    public function getSkipKeyboardNavigation() {
        return $this->skipKeyboardNavigation;
    }

    /**
     * Get the sticky tracking.
     *
     * @return boolean Returns the sticky tracking.
     */
    public function getStickyTracking() {
        return $this->stickyTracking;
    }

    /**
     * Get the threshold.
     *
     * @return integer Returns the threshold.
     */
    public function getThreshold() {
        return $this->threshold;
    }

    /**
     * Get the tooltip.
     *
     * @return array Returns the tooltip.
     */
    public function getTooltip() {
        return $this->tooltip;
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
     * Get the visible.
     *
     * @return boolean Returns the visible.
     */
    public function getVisible() {
        return $this->visible;
    }

    /**
     * Get the wrap.
     *
     * @return boolean Returns the wrap.
     */
    public function getWrap() {
        return $this->wrap;
    }

    /**
     * Get the x axis.
     *
     * @return integer|string Returns the x axis.
     */
    public function getXAxis() {
        return $this->xAxis;
    }

    /**
     * Get the y axis.
     *
     * @return integer|string Returns the y axis.
     */
    public function getYAxis() {
        return $this->yAxis;
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
     * Create a new events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsEvents Returns the events.
     */
    public function newEvents() {
        $this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new point.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsPoint Returns the point.
     */
    public function newPoint() {
        $this->point = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsPoint();
        return $this->point;
    }

    /**
     * Set the animation.
     *
     * @param boolean $animation The animation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setAnimation($animation) {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the animation limit.
     *
     * @param integer $animationLimit The animation limit.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setAnimationLimit($animationLimit) {
        $this->animationLimit = $animationLimit;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param integer $colorIndex The color index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setColorIndex($colorIndex) {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the cursor.
     *
     * @param string $cursor The cursor.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setCursor($cursor) {
        switch ($cursor) {
            case null:
            case "crosshair":
            case "default":
            case "help":
            case "none":
            case "pointer":
            $this->cursor = $cursor;
            break;
        }
        return $this;
    }

    /**
     * Set the data.
     *
     * @param array $data The data.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setData(array $data = null) {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param array $dataLabels The data labels.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setDataLabels(array $dataLabels = null) {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the enable mouse tracking.
     *
     * @param boolean $enableMouseTracking The enable mouse tracking.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setEnableMouseTracking($enableMouseTracking) {
        $this->enableMouseTracking = $enableMouseTracking;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsEvents $events The events.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsEvents $events = null) {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the expose element to a11y.
     *
     * @param boolean $exposeElementToA11y The expose element to a11y.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setExposeElementToA11y($exposeElementToA11y) {
        $this->exposeElementToA11y = $exposeElementToA11y;
        return $this;
    }

    /**
     * Set the find nearest point by.
     *
     * @param string $findNearestPointBy The find nearest point by.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setFindNearestPointBy($findNearestPointBy) {
        switch ($findNearestPointBy) {
            case "x":
            case "xy":
            $this->findNearestPointBy = $findNearestPointBy;
            break;
        }
        return $this;
    }

    /**
     * Set the get extremes from all.
     *
     * @param boolean $getExtremesFromAll The get extremes from all.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setGetExtremesFromAll($getExtremesFromAll) {
        $this->getExtremesFromAll = $getExtremesFromAll;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param integer $index The index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setIndex($index) {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the keys.
     *
     * @param array $keys The keys.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setKeys(array $keys = null) {
        $this->keys = $keys;
        return $this;
    }

    /**
     * Set the legend index.
     *
     * @param integer $legendIndex The legend index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setLegendIndex($legendIndex) {
        $this->legendIndex = $legendIndex;
        return $this;
    }

    /**
     * Set the linecap.
     *
     * @param string $linecap The linecap.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setLinecap($linecap) {
        switch ($linecap) {
            case "round":
            case "square":
            $this->linecap = $linecap;
            break;
        }
        return $this;
    }

    /**
     * Set the name.
     *
     * @param string $name The name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the overshoot.
     *
     * @param integer $overshoot The overshoot.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setOvershoot($overshoot) {
        $this->overshoot = $overshoot;
        return $this;
    }

    /**
     * Set the point.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsPoint $point The point.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setPoint(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Solidgauge\HighchartsPoint $point = null) {
        $this->point = $point;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setPointDescriptionFormatter($pointDescriptionFormatter) {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the rounded.
     *
     * @param boolean $rounded The rounded.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setRounded($rounded) {
        switch ($rounded) {
            case false:
            case true:
            $this->rounded = $rounded;
            break;
        }
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param boolean $selected The selected.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setSelected($selected) {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the show checkbox.
     *
     * @param boolean $showCheckbox The show checkbox.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setShowCheckbox($showCheckbox) {
        $this->showCheckbox = $showCheckbox;
        return $this;
    }

    /**
     * Set the show in legend.
     *
     * @param boolean $showInLegend The show in legend.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setShowInLegend($showInLegend) {
        $this->showInLegend = $showInLegend;
        return $this;
    }

    /**
     * Set the skip keyboard navigation.
     *
     * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
        $this->skipKeyboardNavigation = $skipKeyboardNavigation;
        return $this;
    }

    /**
     * Set the sticky tracking.
     *
     * @param boolean $stickyTracking The sticky tracking.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setStickyTracking($stickyTracking) {
        $this->stickyTracking = $stickyTracking;
        return $this;
    }

    /**
     * Set the threshold.
     *
     * @param integer $threshold The threshold.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setThreshold($threshold) {
        $this->threshold = $threshold;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param array $tooltip The tooltip.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setTooltip(array $tooltip = null) {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setType($type) {
        switch ($type) {
            case null:
            case "area":
            case "arearange":
            case "areaspline":
            case "areasplinerange":
            case "boxplot":
            case "bubble":
            case "column":
            case "columnrange":
            case "errorbar":
            case "funnel":
            case "gauge":
            case "line":
            case "pie":
            case "scatter":
            case "spline":
            case "waterfall":
            $this->type = $type;
            break;
        }
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param boolean $visible The visible.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setVisible($visible) {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Set the wrap.
     *
     * @param boolean $wrap The wrap.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setWrap($wrap) {
        $this->wrap = $wrap;
        return $this;
    }

    /**
     * Set the x axis.
     *
     * @param integer|string $xAxis The x axis.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setXAxis($xAxis) {
        $this->xAxis = $xAxis;
        return $this;
    }

    /**
     * Set the y axis.
     *
     * @param integer|string $yAxis The y axis.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
     */
    public function setYAxis($yAxis) {
        $this->yAxis = $yAxis;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param integer $zIndex The z index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge Returns the highcharts solidgauge.
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

        // Set the animation.
        ArrayUtility::set($output, "animation", $this->animation, [null]);

        // Set the animation limit.
        ArrayUtility::set($output, "animationLimit", $this->animationLimit, [null]);

        // Set the class name.
        ArrayUtility::set($output, "className", $this->className, [null]);

        // Set the color index.
        ArrayUtility::set($output, "colorIndex", $this->colorIndex, [null]);

        // Set the cursor.
        ArrayUtility::set($output, "cursor", $this->cursor, [null]);

        // Set the data.
        ArrayUtility::set($output, "data", $this->data, [null]);

        // Set the data labels.
        ArrayUtility::set($output, "dataLabels", $this->dataLabels, [null]);

        // Set the description.
        ArrayUtility::set($output, "description", $this->description, [null]);

        // Set the enable mouse tracking.
        ArrayUtility::set($output, "enableMouseTracking", $this->enableMouseTracking, [null]);

        // Set the events.
        if (null !== $this->events) {
            ArrayUtility::set($output, "events", $this->events->toArray(), []);
        }

        // Set the expose element to a11y.
        ArrayUtility::set($output, "exposeElementToA11y", $this->exposeElementToA11y, [null]);

        // Set the find nearest point by.
        ArrayUtility::set($output, "findNearestPointBy", $this->findNearestPointBy, [null]);

        // Set the get extremes from all.
        ArrayUtility::set($output, "getExtremesFromAll", $this->getExtremesFromAll, [null]);

        // Set the id.
        ArrayUtility::set($output, "id", $this->id, [null]);

        // Set the index.
        ArrayUtility::set($output, "index", $this->index, [null]);

        // Set the keys.
        ArrayUtility::set($output, "keys", $this->keys, [null]);

        // Set the legend index.
        ArrayUtility::set($output, "legendIndex", $this->legendIndex, [null]);

        // Set the linecap.
        ArrayUtility::set($output, "linecap", $this->linecap, [null]);

        // Set the name.
        ArrayUtility::set($output, "name", $this->name, [null]);

        // Set the overshoot.
        ArrayUtility::set($output, "overshoot", $this->overshoot, [null]);

        // Set the point.
        if (null !== $this->point) {
            ArrayUtility::set($output, "point", $this->point->toArray(), []);
        }

        // Set the point description formatter.
        ArrayUtility::set($output, "pointDescriptionFormatter", $this->pointDescriptionFormatter, [null]);

        // Set the rounded.
        ArrayUtility::set($output, "rounded", $this->rounded, [null]);

        // Set the selected.
        ArrayUtility::set($output, "selected", $this->selected, [null]);

        // Set the show checkbox.
        ArrayUtility::set($output, "showCheckbox", $this->showCheckbox, [null]);

        // Set the show in legend.
        ArrayUtility::set($output, "showInLegend", $this->showInLegend, [null]);

        // Set the skip keyboard navigation.
        ArrayUtility::set($output, "skipKeyboardNavigation", $this->skipKeyboardNavigation, [null]);

        // Set the sticky tracking.
        ArrayUtility::set($output, "stickyTracking", $this->stickyTracking, [null]);

        // Set the threshold.
        ArrayUtility::set($output, "threshold", $this->threshold, [null]);

        // Set the tooltip.
        ArrayUtility::set($output, "tooltip", $this->tooltip, [null]);

        // Set the type.
        ArrayUtility::set($output, "type", $this->type, [null]);

        // Set the visible.
        ArrayUtility::set($output, "visible", $this->visible, [null]);

        // Set the wrap.
        ArrayUtility::set($output, "wrap", $this->wrap, [null]);

        // Set the x axis.
        ArrayUtility::set($output, "xAxis", $this->xAxis, [null]);

        // Set the y axis.
        ArrayUtility::set($output, "yAxis", $this->yAxis, [null]);

        // Set the z index.
        ArrayUtility::set($output, "zIndex", $this->zIndex, [null]);

        // Return the output.
        return $output;
    }

}
