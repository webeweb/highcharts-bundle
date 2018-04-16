<?php

/**
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
 * Highcharts waterfall.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series
 * @version 5.0.14
 * @final
 */
final class HighchartsWaterfall implements JsonSerializable {

    /**
     * Allow point select.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $allowPointSelect = false;

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
     * Border color.
     *
     * @var string
     * @since 3.0
     */
    private $borderColor = "#333333";

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
     * Color by point.
     *
     * @var boolean
     * @since 2.0
     */
    private $colorByPoint = false;

    /**
     * Color index.
     *
     * @var integer
     * @since 5.0.0
     */
    private $colorIndex;

    /**
     * Colors.
     *
     * @var array
     * @since 3.0
     */
    private $colors;

    /**
     * Crisp.
     *
     * @var boolean
     * @since 5.0.10
     */
    private $crisp = true;

    /**
     * Cursor.
     *
     * @var string
     */
    private $cursor;

    /**
     * Dash style.
     *
     * @var string
     * @since 3.0
     */
    private $dashStyle = "Dot";

    /**
     * Data.
     *
     * @var array
     */
    private $data;

    /**
     * Data labels.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsDataLabels
     */
    private $dataLabels;

    /**
     * Depth.
     *
     * @var integer
     * @since 4.0
     */
    private $depth = 25;

    /**
     * Description.
     *
     * @var string
     * @since 5.0.0
     */
    private $description;

    /**
     * Edge color.
     *
     * @var string
     */
    private $edgeColor;

    /**
     * Edge width.
     *
     * @var integer
     */
    private $edgeWidth = 1;

    /**
     * Enable mouse tracking.
     *
     * @var boolean
     */
    private $enableMouseTracking = true;

    /**
     * Events.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsEvents
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
     * Group padding.
     *
     * @var integer
     */
    private $groupPadding = 0.2;

    /**
     * Group z padding.
     *
     * @var integer
     * @since 4.0
     */
    private $groupZPadding = 1;

    /**
     * Grouping.
     *
     * @var boolean
     * @since 2.3.0
     */
    private $grouping = true;

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
     * Line color.
     *
     * @var string
     * @since 3.0
     */
    private $lineColor = "#333333";

    /**
     * Line width.
     *
     * @var integer
     */
    private $lineWidth = 1;

    /**
     * Linked to.
     *
     * @var string
     * @since 3.0
     */
    private $linkedTo;

    /**
     * Max point width.
     *
     * @var integer
     * @since 4.1.8
     */
    private $maxPointWidth;

    /**
     * Min point length.
     *
     * @var integer
     */
    private $minPointLength = 0;

    /**
     * Name.
     *
     * @var string
     */
    private $name;

    /**
     * Point.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsPoint
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
     * Point interval.
     *
     * @var integer
     */
    private $pointInterval = 1;

    /**
     * Point interval unit.
     *
     * @var string
     * @since 4.1.0
     */
    private $pointIntervalUnit;

    /**
     * Point padding.
     *
     * @var integer
     */
    private $pointPadding = 0.1;

    /**
     * Point placement.
     *
     * @var string|integer
     * @since 2.3.0
     */
    private $pointPlacement;

    /**
     * Point range.
     *
     * @var integer
     * @since 2.3
     */
    private $pointRange;

    /**
     * Point start.
     *
     * @var integer
     */
    private $pointStart = 0;

    /**
     * Point width.
     *
     * @var integer
     * @since 1.2.5
     */
    private $pointWidth;

    /**
     * Selected.
     *
     * @var boolean
     * @since 1.2.0
     */
    private $selected = false;

    /**
     * Shadow.
     *
     * @var boolean|array
     */
    private $shadow = false;

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
     */
    private $showInLegend = true;

    /**
     * Skip keyboard navigation.
     *
     * @var boolean
     * @since 5.0.12
     */
    private $skipKeyboardNavigation;

    /**
     * Soft threshold.
     *
     * @var boolean
     * @since 4.1.9
     */
    private $softThreshold = true;

    /**
     * Stack.
     *
     * @var string
     * @since 2.1
     */
    private $stack;

    /**
     * States.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsStates
     */
    private $states;

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
     * @since 2.0
     */
    private $threshold = 0;

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
     * Up color.
     *
     * @var string
     */
    private $upColor;

    /**
     * Visible.
     *
     * @var boolean
     */
    private $visible = true;

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
     * Zone axis.
     *
     * @var string
     * @since 4.1.0
     */
    private $zoneAxis = "y";

    /**
     * Zones.
     *
     * @var array
     * @since 4.1.0
     */
    private $zones;

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

        // Clear the allow point select.
        $this->allowPointSelect = null;

        // Clear the animation.
        $this->animation = null;

        // Clear the animation limit.
        $this->animationLimit = null;

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

        // Clear the color by point.
        $this->colorByPoint = null;

        // Clear the color index.
        $this->colorIndex = null;

        // Clear the colors.
        $this->colors = null;

        // Clear the crisp.
        $this->crisp = null;

        // Clear the cursor.
        $this->cursor = null;

        // Clear the dash style.
        $this->dashStyle = null;

        // Clear the data.
        $this->data = null;

        // Clear the data labels.
        if (null !== $this->dataLabels) {
            $this->dataLabels->clear();
        }

        // Clear the depth.
        $this->depth = null;

        // Clear the description.
        $this->description = null;

        // Clear the edge color.
        $this->edgeColor = null;

        // Clear the edge width.
        $this->edgeWidth = null;

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

        // Clear the group padding.
        $this->groupPadding = null;

        // Clear the group z padding.
        $this->groupZPadding = null;

        // Clear the grouping.
        $this->grouping = null;

        // Clear the id.
        $this->id = null;

        // Clear the index.
        $this->index = null;

        // Clear the keys.
        $this->keys = null;

        // Clear the legend index.
        $this->legendIndex = null;

        // Clear the line color.
        $this->lineColor = null;

        // Clear the line width.
        $this->lineWidth = null;

        // Clear the linked to.
        $this->linkedTo = null;

        // Clear the max point width.
        $this->maxPointWidth = null;

        // Clear the min point length.
        $this->minPointLength = null;

        // Clear the name.
        $this->name = null;

        // Clear the point.
        if (null !== $this->point) {
            $this->point->clear();
        }

        // Clear the point description formatter.
        $this->pointDescriptionFormatter = null;

        // Clear the point interval.
        $this->pointInterval = null;

        // Clear the point interval unit.
        $this->pointIntervalUnit = null;

        // Clear the point padding.
        $this->pointPadding = null;

        // Clear the point placement.
        $this->pointPlacement = null;

        // Clear the point range.
        $this->pointRange = null;

        // Clear the point start.
        $this->pointStart = null;

        // Clear the point width.
        $this->pointWidth = null;

        // Clear the selected.
        $this->selected = null;

        // Clear the shadow.
        $this->shadow = null;

        // Clear the show checkbox.
        $this->showCheckbox = null;

        // Clear the show in legend.
        $this->showInLegend = null;

        // Clear the skip keyboard navigation.
        $this->skipKeyboardNavigation = null;

        // Clear the soft threshold.
        $this->softThreshold = null;

        // Clear the stack.
        $this->stack = null;

        // Clear the states.
        if (null !== $this->states) {
            $this->states->clear();
        }

        // Clear the sticky tracking.
        $this->stickyTracking = null;

        // Clear the threshold.
        $this->threshold = null;

        // Clear the tooltip.
        $this->tooltip = null;

        // Clear the type.
        $this->type = null;

        // Clear the up color.
        $this->upColor = null;

        // Clear the visible.
        $this->visible = null;

        // Clear the x axis.
        $this->xAxis = null;

        // Clear the y axis.
        $this->yAxis = null;

        // Clear the z index.
        $this->zIndex = null;

        // Clear the zone axis.
        $this->zoneAxis = null;

        // Clear the zones.
        $this->zones = null;
    }

    /**
     * Get the allow point select.
     *
     * @return boolean Returns the allow point select.
     */
    public function getAllowPointSelect() {
        return $this->allowPointSelect;
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
     * Get the color by point.
     *
     * @return boolean Returns the color by point.
     */
    public function getColorByPoint() {
        return $this->colorByPoint;
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
     * Get the colors.
     *
     * @return array Returns the colors.
     */
    public function getColors() {
        return $this->colors;
    }

    /**
     * Get the crisp.
     *
     * @return boolean Returns the crisp.
     */
    public function getCrisp() {
        return $this->crisp;
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
     * Get the dash style.
     *
     * @return string Returns the dash style.
     */
    public function getDashStyle() {
        return $this->dashStyle;
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsDataLabels Returns the data labels.
     */
    public function getDataLabels() {
        return $this->dataLabels;
    }

    /**
     * Get the depth.
     *
     * @return integer Returns the depth.
     */
    public function getDepth() {
        return $this->depth;
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
     * Get the edge color.
     *
     * @return string Returns the edge color.
     */
    public function getEdgeColor() {
        return $this->edgeColor;
    }

    /**
     * Get the edge width.
     *
     * @return integer Returns the edge width.
     */
    public function getEdgeWidth() {
        return $this->edgeWidth;
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsEvents Returns the events.
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
     * Get the group padding.
     *
     * @return integer Returns the group padding.
     */
    public function getGroupPadding() {
        return $this->groupPadding;
    }

    /**
     * Get the group z padding.
     *
     * @return integer Returns the group z padding.
     */
    public function getGroupZPadding() {
        return $this->groupZPadding;
    }

    /**
     * Get the grouping.
     *
     * @return boolean Returns the grouping.
     */
    public function getGrouping() {
        return $this->grouping;
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
     * Get the line color.
     *
     * @return string Returns the line color.
     */
    public function getLineColor() {
        return $this->lineColor;
    }

    /**
     * Get the line width.
     *
     * @return integer Returns the line width.
     */
    public function getLineWidth() {
        return $this->lineWidth;
    }

    /**
     * Get the linked to.
     *
     * @return string Returns the linked to.
     */
    public function getLinkedTo() {
        return $this->linkedTo;
    }

    /**
     * Get the max point width.
     *
     * @return integer Returns the max point width.
     */
    public function getMaxPointWidth() {
        return $this->maxPointWidth;
    }

    /**
     * Get the min point length.
     *
     * @return integer Returns the min point length.
     */
    public function getMinPointLength() {
        return $this->minPointLength;
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
     * Get the point.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsPoint Returns the point.
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
     * Get the point interval.
     *
     * @return integer Returns the point interval.
     */
    public function getPointInterval() {
        return $this->pointInterval;
    }

    /**
     * Get the point interval unit.
     *
     * @return string Returns the point interval unit.
     */
    public function getPointIntervalUnit() {
        return $this->pointIntervalUnit;
    }

    /**
     * Get the point padding.
     *
     * @return integer Returns the point padding.
     */
    public function getPointPadding() {
        return $this->pointPadding;
    }

    /**
     * Get the point placement.
     *
     * @return string|integer Returns the point placement.
     */
    public function getPointPlacement() {
        return $this->pointPlacement;
    }

    /**
     * Get the point range.
     *
     * @return integer Returns the point range.
     */
    public function getPointRange() {
        return $this->pointRange;
    }

    /**
     * Get the point start.
     *
     * @return integer Returns the point start.
     */
    public function getPointStart() {
        return $this->pointStart;
    }

    /**
     * Get the point width.
     *
     * @return integer Returns the point width.
     */
    public function getPointWidth() {
        return $this->pointWidth;
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
     * Get the shadow.
     *
     * @return boolean|array Returns the shadow.
     */
    public function getShadow() {
        return $this->shadow;
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
     * Get the soft threshold.
     *
     * @return boolean Returns the soft threshold.
     */
    public function getSoftThreshold() {
        return $this->softThreshold;
    }

    /**
     * Get the stack.
     *
     * @return string Returns the stack.
     */
    public function getStack() {
        return $this->stack;
    }

    /**
     * Get the states.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsStates Returns the states.
     */
    public function getStates() {
        return $this->states;
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
     * Get the up color.
     *
     * @return string Returns the up color.
     */
    public function getUpColor() {
        return $this->upColor;
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
     * Get the zone axis.
     *
     * @return string Returns the zone axis.
     */
    public function getZoneAxis() {
        return $this->zoneAxis;
    }

    /**
     * Get the zones.
     *
     * @return array Returns the zones.
     */
    public function getZones() {
        return $this->zones;
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
     * Create a new data labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsDataLabels Returns the data labels.
     */
    public function newDataLabels() {
        $this->dataLabels = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsDataLabels();
        return $this->dataLabels;
    }

    /**
     * Create a new events.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsEvents Returns the events.
     */
    public function newEvents() {
        $this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsEvents();
        return $this->events;
    }

    /**
     * Create a new point.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsPoint Returns the point.
     */
    public function newPoint() {
        $this->point = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsPoint();
        return $this->point;
    }

    /**
     * Create a new states.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsStates Returns the states.
     */
    public function newStates() {
        $this->states = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsStates();
        return $this->states;
    }

    /**
     * Set the allow point select.
     *
     * @param boolean $allowPointSelect The allow point select.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setAllowPointSelect($allowPointSelect) {
        $this->allowPointSelect = $allowPointSelect;
        return $this;
    }

    /**
     * Set the animation.
     *
     * @param boolean $animation The animation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setAnimation($animation) {
        $this->animation = $animation;
        return $this;
    }

    /**
     * Set the animation limit.
     *
     * @param integer $animationLimit The animation limit.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setAnimationLimit($animationLimit) {
        $this->animationLimit = $animationLimit;
        return $this;
    }

    /**
     * Set the border color.
     *
     * @param string $borderColor The border color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setBorderColor($borderColor) {
        $this->borderColor = $borderColor;
        return $this;
    }

    /**
     * Set the border radius.
     *
     * @param integer $borderRadius The border radius.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setBorderRadius($borderRadius) {
        $this->borderRadius = $borderRadius;
        return $this;
    }

    /**
     * Set the border width.
     *
     * @param integer $borderWidth The border width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setBorderWidth($borderWidth) {
        $this->borderWidth = $borderWidth;
        return $this;
    }

    /**
     * Set the class name.
     *
     * @param string $className The class name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setClassName($className) {
        $this->className = $className;
        return $this;
    }

    /**
     * Set the color.
     *
     * @param string $color The color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    /**
     * Set the color by point.
     *
     * @param boolean $colorByPoint The color by point.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setColorByPoint($colorByPoint) {
        $this->colorByPoint = $colorByPoint;
        return $this;
    }

    /**
     * Set the color index.
     *
     * @param integer $colorIndex The color index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setColorIndex($colorIndex) {
        $this->colorIndex = $colorIndex;
        return $this;
    }

    /**
     * Set the colors.
     *
     * @param array $colors The colors.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setColors(array $colors = null) {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Set the crisp.
     *
     * @param boolean $crisp The crisp.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setCrisp($crisp) {
        $this->crisp = $crisp;
        return $this;
    }

    /**
     * Set the cursor.
     *
     * @param string $cursor The cursor.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
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
     * Set the dash style.
     *
     * @param string $dashStyle The dash style.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setDashStyle($dashStyle) {
        $this->dashStyle = $dashStyle;
        return $this;
    }

    /**
     * Set the data.
     *
     * @param array $data The data.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setData(array $data = null) {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the data labels.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsDataLabels $dataLabels The data labels.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setDataLabels(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsDataLabels $dataLabels = null) {
        $this->dataLabels = $dataLabels;
        return $this;
    }

    /**
     * Set the depth.
     *
     * @param integer $depth The depth.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setDepth($depth) {
        $this->depth = $depth;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the edge color.
     *
     * @param string $edgeColor The edge color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setEdgeColor($edgeColor) {
        $this->edgeColor = $edgeColor;
        return $this;
    }

    /**
     * Set the edge width.
     *
     * @param integer $edgeWidth The edge width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setEdgeWidth($edgeWidth) {
        $this->edgeWidth = $edgeWidth;
        return $this;
    }

    /**
     * Set the enable mouse tracking.
     *
     * @param boolean $enableMouseTracking The enable mouse tracking.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setEnableMouseTracking($enableMouseTracking) {
        $this->enableMouseTracking = $enableMouseTracking;
        return $this;
    }

    /**
     * Set the events.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsEvents $events The events.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsEvents $events = null) {
        $this->events = $events;
        return $this;
    }

    /**
     * Set the expose element to a11y.
     *
     * @param boolean $exposeElementToA11y The expose element to a11y.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setExposeElementToA11y($exposeElementToA11y) {
        $this->exposeElementToA11y = $exposeElementToA11y;
        return $this;
    }

    /**
     * Set the find nearest point by.
     *
     * @param string $findNearestPointBy The find nearest point by.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setGetExtremesFromAll($getExtremesFromAll) {
        $this->getExtremesFromAll = $getExtremesFromAll;
        return $this;
    }

    /**
     * Set the group padding.
     *
     * @param integer $groupPadding The group padding.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setGroupPadding($groupPadding) {
        $this->groupPadding = $groupPadding;
        return $this;
    }

    /**
     * Set the group z padding.
     *
     * @param integer $groupZPadding The group z padding.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setGroupZPadding($groupZPadding) {
        $this->groupZPadding = $groupZPadding;
        return $this;
    }

    /**
     * Set the grouping.
     *
     * @param boolean $grouping The grouping.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setGrouping($grouping) {
        $this->grouping = $grouping;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the index.
     *
     * @param integer $index The index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setIndex($index) {
        $this->index = $index;
        return $this;
    }

    /**
     * Set the keys.
     *
     * @param array $keys The keys.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setKeys(array $keys = null) {
        $this->keys = $keys;
        return $this;
    }

    /**
     * Set the legend index.
     *
     * @param integer $legendIndex The legend index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setLegendIndex($legendIndex) {
        $this->legendIndex = $legendIndex;
        return $this;
    }

    /**
     * Set the line color.
     *
     * @param string $lineColor The line color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setLineColor($lineColor) {
        $this->lineColor = $lineColor;
        return $this;
    }

    /**
     * Set the line width.
     *
     * @param integer $lineWidth The line width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setLineWidth($lineWidth) {
        $this->lineWidth = $lineWidth;
        return $this;
    }

    /**
     * Set the linked to.
     *
     * @param string $linkedTo The linked to.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setLinkedTo($linkedTo) {
        $this->linkedTo = $linkedTo;
        return $this;
    }

    /**
     * Set the max point width.
     *
     * @param integer $maxPointWidth The max point width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setMaxPointWidth($maxPointWidth) {
        $this->maxPointWidth = $maxPointWidth;
        return $this;
    }

    /**
     * Set the min point length.
     *
     * @param integer $minPointLength The min point length.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setMinPointLength($minPointLength) {
        $this->minPointLength = $minPointLength;
        return $this;
    }

    /**
     * Set the name.
     *
     * @param string $name The name.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the point.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsPoint $point The point.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setPoint(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsPoint $point = null) {
        $this->point = $point;
        return $this;
    }

    /**
     * Set the point description formatter.
     *
     * @param string $pointDescriptionFormatter The point description formatter.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setPointDescriptionFormatter($pointDescriptionFormatter) {
        $this->pointDescriptionFormatter = $pointDescriptionFormatter;
        return $this;
    }

    /**
     * Set the point interval.
     *
     * @param integer $pointInterval The point interval.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setPointInterval($pointInterval) {
        $this->pointInterval = $pointInterval;
        return $this;
    }

    /**
     * Set the point interval unit.
     *
     * @param string $pointIntervalUnit The point interval unit.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setPointIntervalUnit($pointIntervalUnit) {
        switch ($pointIntervalUnit) {
            case null:
            case "day":
            case "month":
            case "year":
            $this->pointIntervalUnit = $pointIntervalUnit;
            break;
        }
        return $this;
    }

    /**
     * Set the point padding.
     *
     * @param integer $pointPadding The point padding.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setPointPadding($pointPadding) {
        $this->pointPadding = $pointPadding;
        return $this;
    }

    /**
     * Set the point placement.
     *
     * @param string|integer $pointPlacement The point placement.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setPointPlacement($pointPlacement) {
        switch ($pointPlacement) {
            case null:
            case "between":
            case "on":
            $this->pointPlacement = $pointPlacement;
            break;
        }
        return $this;
    }

    /**
     * Set the point range.
     *
     * @param integer $pointRange The point range.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setPointRange($pointRange) {
        $this->pointRange = $pointRange;
        return $this;
    }

    /**
     * Set the point start.
     *
     * @param integer $pointStart The point start.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setPointStart($pointStart) {
        $this->pointStart = $pointStart;
        return $this;
    }

    /**
     * Set the point width.
     *
     * @param integer $pointWidth The point width.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setPointWidth($pointWidth) {
        $this->pointWidth = $pointWidth;
        return $this;
    }

    /**
     * Set the selected.
     *
     * @param boolean $selected The selected.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setSelected($selected) {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Set the shadow.
     *
     * @param boolean|array $shadow The shadow.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setShadow($shadow) {
        $this->shadow = $shadow;
        return $this;
    }

    /**
     * Set the show checkbox.
     *
     * @param boolean $showCheckbox The show checkbox.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setShowCheckbox($showCheckbox) {
        $this->showCheckbox = $showCheckbox;
        return $this;
    }

    /**
     * Set the show in legend.
     *
     * @param boolean $showInLegend The show in legend.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setShowInLegend($showInLegend) {
        $this->showInLegend = $showInLegend;
        return $this;
    }

    /**
     * Set the skip keyboard navigation.
     *
     * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
        $this->skipKeyboardNavigation = $skipKeyboardNavigation;
        return $this;
    }

    /**
     * Set the soft threshold.
     *
     * @param boolean $softThreshold The soft threshold.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setSoftThreshold($softThreshold) {
        $this->softThreshold = $softThreshold;
        return $this;
    }

    /**
     * Set the stack.
     *
     * @param string $stack The stack.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setStack($stack) {
        $this->stack = $stack;
        return $this;
    }

    /**
     * Set the states.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsStates $states The states.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setStates(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsStates $states = null) {
        $this->states = $states;
        return $this;
    }

    /**
     * Set the sticky tracking.
     *
     * @param boolean $stickyTracking The sticky tracking.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setStickyTracking($stickyTracking) {
        $this->stickyTracking = $stickyTracking;
        return $this;
    }

    /**
     * Set the threshold.
     *
     * @param integer $threshold The threshold.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setThreshold($threshold) {
        $this->threshold = $threshold;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param array $tooltip The tooltip.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setTooltip(array $tooltip = null) {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
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
     * Set the up color.
     *
     * @param string $upColor The up color.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setUpColor($upColor) {
        $this->upColor = $upColor;
        return $this;
    }

    /**
     * Set the visible.
     *
     * @param boolean $visible The visible.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setVisible($visible) {
        $this->visible = $visible;
        return $this;
    }

    /**
     * Set the x axis.
     *
     * @param integer|string $xAxis The x axis.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setXAxis($xAxis) {
        $this->xAxis = $xAxis;
        return $this;
    }

    /**
     * Set the y axis.
     *
     * @param integer|string $yAxis The y axis.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setYAxis($yAxis) {
        $this->yAxis = $yAxis;
        return $this;
    }

    /**
     * Set the z index.
     *
     * @param integer $zIndex The z index.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setZIndex($zIndex) {
        $this->zIndex = $zIndex;
        return $this;
    }

    /**
     * Set the zone axis.
     *
     * @param string $zoneAxis The zone axis.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setZoneAxis($zoneAxis) {
        $this->zoneAxis = $zoneAxis;
        return $this;
    }

    /**
     * Set the zones.
     *
     * @param array $zones The zones.
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall Returns the highcharts waterfall.
     */
    public function setZones(array $zones = null) {
        $this->zones = $zones;
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

        // Set the allow point select.
        ArrayUtility::set($output, "allowPointSelect", $this->allowPointSelect, [null]);

        // Set the animation.
        ArrayUtility::set($output, "animation", $this->animation, [null]);

        // Set the animation limit.
        ArrayUtility::set($output, "animationLimit", $this->animationLimit, [null]);

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

        // Set the color by point.
        ArrayUtility::set($output, "colorByPoint", $this->colorByPoint, [null]);

        // Set the color index.
        ArrayUtility::set($output, "colorIndex", $this->colorIndex, [null]);

        // Set the colors.
        ArrayUtility::set($output, "colors", $this->colors, [null]);

        // Set the crisp.
        ArrayUtility::set($output, "crisp", $this->crisp, [null]);

        // Set the cursor.
        ArrayUtility::set($output, "cursor", $this->cursor, [null]);

        // Set the dash style.
        ArrayUtility::set($output, "dashStyle", $this->dashStyle, [null]);

        // Set the data.
        ArrayUtility::set($output, "data", $this->data, [null]);

        // Set the data labels.
        if (null !== $this->dataLabels) {
            ArrayUtility::set($output, "dataLabels", $this->dataLabels->toArray(), []);
        }

        // Set the depth.
        ArrayUtility::set($output, "depth", $this->depth, [null]);

        // Set the description.
        ArrayUtility::set($output, "description", $this->description, [null]);

        // Set the edge color.
        ArrayUtility::set($output, "edgeColor", $this->edgeColor, [null]);

        // Set the edge width.
        ArrayUtility::set($output, "edgeWidth", $this->edgeWidth, [null]);

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

        // Set the group padding.
        ArrayUtility::set($output, "groupPadding", $this->groupPadding, [null]);

        // Set the group z padding.
        ArrayUtility::set($output, "groupZPadding", $this->groupZPadding, [null]);

        // Set the grouping.
        ArrayUtility::set($output, "grouping", $this->grouping, [null]);

        // Set the id.
        ArrayUtility::set($output, "id", $this->id, [null]);

        // Set the index.
        ArrayUtility::set($output, "index", $this->index, [null]);

        // Set the keys.
        ArrayUtility::set($output, "keys", $this->keys, [null]);

        // Set the legend index.
        ArrayUtility::set($output, "legendIndex", $this->legendIndex, [null]);

        // Set the line color.
        ArrayUtility::set($output, "lineColor", $this->lineColor, [null]);

        // Set the line width.
        ArrayUtility::set($output, "lineWidth", $this->lineWidth, [null]);

        // Set the linked to.
        ArrayUtility::set($output, "linkedTo", $this->linkedTo, [null]);

        // Set the max point width.
        ArrayUtility::set($output, "maxPointWidth", $this->maxPointWidth, [null]);

        // Set the min point length.
        ArrayUtility::set($output, "minPointLength", $this->minPointLength, [null]);

        // Set the name.
        ArrayUtility::set($output, "name", $this->name, [null]);

        // Set the point.
        if (null !== $this->point) {
            ArrayUtility::set($output, "point", $this->point->toArray(), []);
        }

        // Set the point description formatter.
        ArrayUtility::set($output, "pointDescriptionFormatter", $this->pointDescriptionFormatter, [null]);

        // Set the point interval.
        ArrayUtility::set($output, "pointInterval", $this->pointInterval, [null]);

        // Set the point interval unit.
        ArrayUtility::set($output, "pointIntervalUnit", $this->pointIntervalUnit, [null]);

        // Set the point padding.
        ArrayUtility::set($output, "pointPadding", $this->pointPadding, [null]);

        // Set the point placement.
        ArrayUtility::set($output, "pointPlacement", $this->pointPlacement, [null]);

        // Set the point range.
        ArrayUtility::set($output, "pointRange", $this->pointRange, [null]);

        // Set the point start.
        ArrayUtility::set($output, "pointStart", $this->pointStart, [null]);

        // Set the point width.
        ArrayUtility::set($output, "pointWidth", $this->pointWidth, [null]);

        // Set the selected.
        ArrayUtility::set($output, "selected", $this->selected, [null]);

        // Set the shadow.
        ArrayUtility::set($output, "shadow", $this->shadow, [null]);

        // Set the show checkbox.
        ArrayUtility::set($output, "showCheckbox", $this->showCheckbox, [null]);

        // Set the show in legend.
        ArrayUtility::set($output, "showInLegend", $this->showInLegend, [null]);

        // Set the skip keyboard navigation.
        ArrayUtility::set($output, "skipKeyboardNavigation", $this->skipKeyboardNavigation, [null]);

        // Set the soft threshold.
        ArrayUtility::set($output, "softThreshold", $this->softThreshold, [null]);

        // Set the stack.
        ArrayUtility::set($output, "stack", $this->stack, [null]);

        // Set the states.
        if (null !== $this->states) {
            ArrayUtility::set($output, "states", $this->states->toArray(), []);
        }

        // Set the sticky tracking.
        ArrayUtility::set($output, "stickyTracking", $this->stickyTracking, [null]);

        // Set the threshold.
        ArrayUtility::set($output, "threshold", $this->threshold, [null]);

        // Set the tooltip.
        ArrayUtility::set($output, "tooltip", $this->tooltip, [null]);

        // Set the type.
        ArrayUtility::set($output, "type", $this->type, [null]);

        // Set the up color.
        ArrayUtility::set($output, "upColor", $this->upColor, [null]);

        // Set the visible.
        ArrayUtility::set($output, "visible", $this->visible, [null]);

        // Set the x axis.
        ArrayUtility::set($output, "xAxis", $this->xAxis, [null]);

        // Set the y axis.
        ArrayUtility::set($output, "yAxis", $this->yAxis, [null]);

        // Set the z index.
        ArrayUtility::set($output, "zIndex", $this->zIndex, [null]);

        // Set the zone axis.
        ArrayUtility::set($output, "zoneAxis", $this->zoneAxis, [null]);

        // Set the zones.
        ArrayUtility::set($output, "zones", $this->zones, [null]);

        // Return the output.
        return $output;
    }

}
