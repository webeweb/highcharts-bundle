<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\PlotOptions;

use JsonSerializable;

/**
 * Highcharts waterfall.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\PlotOptions
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
	 * Data labels.
	 *
	 * @var \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsDataLabels
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
	 * @var \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsEvents
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
	 * Keys.
	 *
	 * @var array
	 * @since 4.1.6
	 */
	private $keys;

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
	 * Point.
	 *
	 * @var \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsPoint
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
	 * States.
	 *
	 * @var \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsStates
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

		// Check the allow point select.
		if (!is_null($this->allowPointSelect)) {
			$this->allowPointSelect = null;
		}

		// Check the animation.
		if (!is_null($this->animation)) {
			$this->animation = null;
		}

		// Check the animation limit.
		if (!is_null($this->animationLimit)) {
			$this->animationLimit = null;
		}

		// Check the border color.
		if (!is_null($this->borderColor)) {
			$this->borderColor = null;
		}

		// Check the border radius.
		if (!is_null($this->borderRadius)) {
			$this->borderRadius = null;
		}

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$this->borderWidth = null;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$this->color = null;
		}

		// Check the color by point.
		if (!is_null($this->colorByPoint)) {
			$this->colorByPoint = null;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$this->colorIndex = null;
		}

		// Check the colors.
		if (!is_null($this->colors)) {
			$this->colors = null;
		}

		// Check the crisp.
		if (!is_null($this->crisp)) {
			$this->crisp = null;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$this->cursor = null;
		}

		// Check the dash style.
		if (!is_null($this->dashStyle)) {
			$this->dashStyle = null;
		}

		// Check the data labels.
		if (!is_null($this->dataLabels)) {
			$this->dataLabels->clear();
		}

		// Check the depth.
		if (!is_null($this->depth)) {
			$this->depth = null;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$this->description = null;
		}

		// Check the edge color.
		if (!is_null($this->edgeColor)) {
			$this->edgeColor = null;
		}

		// Check the edge width.
		if (!is_null($this->edgeWidth)) {
			$this->edgeWidth = null;
		}

		// Check the enable mouse tracking.
		if (!is_null($this->enableMouseTracking)) {
			$this->enableMouseTracking = null;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$this->events->clear();
		}

		// Check the expose element to a11y.
		if (!is_null($this->exposeElementToA11y)) {
			$this->exposeElementToA11y = null;
		}

		// Check the find nearest point by.
		if (!is_null($this->findNearestPointBy)) {
			$this->findNearestPointBy = null;
		}

		// Check the get extremes from all.
		if (!is_null($this->getExtremesFromAll)) {
			$this->getExtremesFromAll = null;
		}

		// Check the group padding.
		if (!is_null($this->groupPadding)) {
			$this->groupPadding = null;
		}

		// Check the group z padding.
		if (!is_null($this->groupZPadding)) {
			$this->groupZPadding = null;
		}

		// Check the grouping.
		if (!is_null($this->grouping)) {
			$this->grouping = null;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$this->keys = null;
		}

		// Check the line color.
		if (!is_null($this->lineColor)) {
			$this->lineColor = null;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$this->lineWidth = null;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$this->linkedTo = null;
		}

		// Check the max point width.
		if (!is_null($this->maxPointWidth)) {
			$this->maxPointWidth = null;
		}

		// Check the min point length.
		if (!is_null($this->minPointLength)) {
			$this->minPointLength = null;
		}

		// Check the point.
		if (!is_null($this->point)) {
			$this->point->clear();
		}

		// Check the point description formatter.
		if (!is_null($this->pointDescriptionFormatter)) {
			$this->pointDescriptionFormatter = null;
		}

		// Check the point interval.
		if (!is_null($this->pointInterval)) {
			$this->pointInterval = null;
		}

		// Check the point interval unit.
		if (!is_null($this->pointIntervalUnit)) {
			$this->pointIntervalUnit = null;
		}

		// Check the point padding.
		if (!is_null($this->pointPadding)) {
			$this->pointPadding = null;
		}

		// Check the point placement.
		if (!is_null($this->pointPlacement)) {
			$this->pointPlacement = null;
		}

		// Check the point range.
		if (!is_null($this->pointRange)) {
			$this->pointRange = null;
		}

		// Check the point start.
		if (!is_null($this->pointStart)) {
			$this->pointStart = null;
		}

		// Check the point width.
		if (!is_null($this->pointWidth)) {
			$this->pointWidth = null;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$this->selected = null;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$this->shadow = null;
		}

		// Check the show checkbox.
		if (!is_null($this->showCheckbox)) {
			$this->showCheckbox = null;
		}

		// Check the show in legend.
		if (!is_null($this->showInLegend)) {
			$this->showInLegend = null;
		}

		// Check the skip keyboard navigation.
		if (!is_null($this->skipKeyboardNavigation)) {
			$this->skipKeyboardNavigation = null;
		}

		// Check the soft threshold.
		if (!is_null($this->softThreshold)) {
			$this->softThreshold = null;
		}

		// Check the states.
		if (!is_null($this->states)) {
			$this->states->clear();
		}

		// Check the sticky tracking.
		if (!is_null($this->stickyTracking)) {
			$this->stickyTracking = null;
		}

		// Check the threshold.
		if (!is_null($this->threshold)) {
			$this->threshold = null;
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$this->tooltip = null;
		}

		// Check the up color.
		if (!is_null($this->upColor)) {
			$this->upColor = null;
		}

		// Check the visible.
		if (!is_null($this->visible)) {
			$this->visible = null;
		}

		// Check the zone axis.
		if (!is_null($this->zoneAxis)) {
			$this->zoneAxis = null;
		}

		// Check the zones.
		if (!is_null($this->zones)) {
			$this->zones = null;
		}
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
	 * Get the data labels.
	 *
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsDataLabels Returns the data labels.
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
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsEvents Returns the events.
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
	 * Get the keys.
	 *
	 * @return array Returns the keys.
	 */
	public function getKeys() {
		return $this->keys;
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
	 * Get the point.
	 *
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsPoint Returns the point.
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
	 * Get the states.
	 *
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsStates Returns the states.
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
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsDataLabels Returns the data labels.
	 */
	public function newDataLabels() {
		$this->dataLabels = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsDataLabels();
		return $this->dataLabels;
	}

	/**
	 * Create a new events.
	 *
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsEvents Returns the events.
	 */
	public function newEvents() {
		$this->events = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsEvents();
		return $this->events;
	}

	/**
	 * Create a new point.
	 *
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsPoint Returns the point.
	 */
	public function newPoint() {
		$this->point = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsPoint();
		return $this->point;
	}

	/**
	 * Create a new states.
	 *
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsStates Returns the states.
	 */
	public function newStates() {
		$this->states = new \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsStates();
		return $this->states;
	}

	/**
	 * Set the allow point select.
	 *
	 * @param boolean $allowPointSelect The allow point select.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setAllowPointSelect($allowPointSelect) {
		$this->allowPointSelect = $allowPointSelect;
		return $this;
	}

	/**
	 * Set the animation.
	 *
	 * @param boolean $animation The animation.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setAnimation($animation) {
		$this->animation = $animation;
		return $this;
	}

	/**
	 * Set the animation limit.
	 *
	 * @param integer $animationLimit The animation limit.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setAnimationLimit($animationLimit) {
		$this->animationLimit = $animationLimit;
		return $this;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border radius.
	 *
	 * @param integer $borderRadius The border radius.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setBorderRadius($borderRadius) {
		$this->borderRadius = $borderRadius;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the color by point.
	 *
	 * @param boolean $colorByPoint The color by point.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setColorByPoint($colorByPoint) {
		$this->colorByPoint = $colorByPoint;
		return $this;
	}

	/**
	 * Set the color index.
	 *
	 * @param integer $colorIndex The color index.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setColorIndex($colorIndex) {
		$this->colorIndex = $colorIndex;
		return $this;
	}

	/**
	 * Set the colors.
	 *
	 * @param array $colors The colors.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setColors(array $colors = null) {
		$this->colors = $colors;
		return $this;
	}

	/**
	 * Set the crisp.
	 *
	 * @param boolean $crisp The crisp.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setCrisp($crisp) {
		$this->crisp = $crisp;
		return $this;
	}

	/**
	 * Set the cursor.
	 *
	 * @param string $cursor The cursor.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
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
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setDashStyle($dashStyle) {
		$this->dashStyle = $dashStyle;
		return $this;
	}

	/**
	 * Set the data labels.
	 *
	 * @param \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsDataLabels $dataLabels The data labels.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setDataLabels(\WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsDataLabels $dataLabels = null) {
		$this->dataLabels = $dataLabels;
		return $this;
	}

	/**
	 * Set the depth.
	 *
	 * @param integer $depth The depth.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setDepth($depth) {
		$this->depth = $depth;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the edge color.
	 *
	 * @param string $edgeColor The edge color.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setEdgeColor($edgeColor) {
		$this->edgeColor = $edgeColor;
		return $this;
	}

	/**
	 * Set the edge width.
	 *
	 * @param integer $edgeWidth The edge width.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setEdgeWidth($edgeWidth) {
		$this->edgeWidth = $edgeWidth;
		return $this;
	}

	/**
	 * Set the enable mouse tracking.
	 *
	 * @param boolean $enableMouseTracking The enable mouse tracking.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setEnableMouseTracking($enableMouseTracking) {
		$this->enableMouseTracking = $enableMouseTracking;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsEvents $events The events.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setEvents(\WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the expose element to a11y.
	 *
	 * @param boolean $exposeElementToA11y The expose element to a11y.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setExposeElementToA11y($exposeElementToA11y) {
		$this->exposeElementToA11y = $exposeElementToA11y;
		return $this;
	}

	/**
	 * Set the find nearest point by.
	 *
	 * @param string $findNearestPointBy The find nearest point by.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
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
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setGetExtremesFromAll($getExtremesFromAll) {
		$this->getExtremesFromAll = $getExtremesFromAll;
		return $this;
	}

	/**
	 * Set the group padding.
	 *
	 * @param integer $groupPadding The group padding.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setGroupPadding($groupPadding) {
		$this->groupPadding = $groupPadding;
		return $this;
	}

	/**
	 * Set the group z padding.
	 *
	 * @param integer $groupZPadding The group z padding.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setGroupZPadding($groupZPadding) {
		$this->groupZPadding = $groupZPadding;
		return $this;
	}

	/**
	 * Set the grouping.
	 *
	 * @param boolean $grouping The grouping.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setGrouping($grouping) {
		$this->grouping = $grouping;
		return $this;
	}

	/**
	 * Set the keys.
	 *
	 * @param array $keys The keys.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setKeys(array $keys = null) {
		$this->keys = $keys;
		return $this;
	}

	/**
	 * Set the line color.
	 *
	 * @param string $lineColor The line color.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setLineColor($lineColor) {
		$this->lineColor = $lineColor;
		return $this;
	}

	/**
	 * Set the line width.
	 *
	 * @param integer $lineWidth The line width.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setLineWidth($lineWidth) {
		$this->lineWidth = $lineWidth;
		return $this;
	}

	/**
	 * Set the linked to.
	 *
	 * @param string $linkedTo The linked to.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setLinkedTo($linkedTo) {
		$this->linkedTo = $linkedTo;
		return $this;
	}

	/**
	 * Set the max point width.
	 *
	 * @param integer $maxPointWidth The max point width.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setMaxPointWidth($maxPointWidth) {
		$this->maxPointWidth = $maxPointWidth;
		return $this;
	}

	/**
	 * Set the min point length.
	 *
	 * @param integer $minPointLength The min point length.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setMinPointLength($minPointLength) {
		$this->minPointLength = $minPointLength;
		return $this;
	}

	/**
	 * Set the point.
	 *
	 * @param \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsPoint $point The point.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setPoint(\WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsPoint $point = null) {
		$this->point = $point;
		return $this;
	}

	/**
	 * Set the point description formatter.
	 *
	 * @param string $pointDescriptionFormatter The point description formatter.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setPointDescriptionFormatter($pointDescriptionFormatter) {
		$this->pointDescriptionFormatter = $pointDescriptionFormatter;
		return $this;
	}

	/**
	 * Set the point interval.
	 *
	 * @param integer $pointInterval The point interval.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setPointInterval($pointInterval) {
		$this->pointInterval = $pointInterval;
		return $this;
	}

	/**
	 * Set the point interval unit.
	 *
	 * @param string $pointIntervalUnit The point interval unit.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
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
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setPointPadding($pointPadding) {
		$this->pointPadding = $pointPadding;
		return $this;
	}

	/**
	 * Set the point placement.
	 *
	 * @param string|integer $pointPlacement The point placement.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
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
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setPointRange($pointRange) {
		$this->pointRange = $pointRange;
		return $this;
	}

	/**
	 * Set the point start.
	 *
	 * @param integer $pointStart The point start.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setPointStart($pointStart) {
		$this->pointStart = $pointStart;
		return $this;
	}

	/**
	 * Set the point width.
	 *
	 * @param integer $pointWidth The point width.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setPointWidth($pointWidth) {
		$this->pointWidth = $pointWidth;
		return $this;
	}

	/**
	 * Set the selected.
	 *
	 * @param boolean $selected The selected.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setSelected($selected) {
		$this->selected = $selected;
		return $this;
	}

	/**
	 * Set the shadow.
	 *
	 * @param boolean|array $shadow The shadow.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setShadow($shadow) {
		$this->shadow = $shadow;
		return $this;
	}

	/**
	 * Set the show checkbox.
	 *
	 * @param boolean $showCheckbox The show checkbox.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setShowCheckbox($showCheckbox) {
		$this->showCheckbox = $showCheckbox;
		return $this;
	}

	/**
	 * Set the show in legend.
	 *
	 * @param boolean $showInLegend The show in legend.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setShowInLegend($showInLegend) {
		$this->showInLegend = $showInLegend;
		return $this;
	}

	/**
	 * Set the skip keyboard navigation.
	 *
	 * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
		$this->skipKeyboardNavigation = $skipKeyboardNavigation;
		return $this;
	}

	/**
	 * Set the soft threshold.
	 *
	 * @param boolean $softThreshold The soft threshold.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setSoftThreshold($softThreshold) {
		$this->softThreshold = $softThreshold;
		return $this;
	}

	/**
	 * Set the states.
	 *
	 * @param \WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsStates $states The states.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setStates(\WBW\HighchartsBundle\API\Chart\PlotOptions\Waterfall\HighchartsStates $states = null) {
		$this->states = $states;
		return $this;
	}

	/**
	 * Set the sticky tracking.
	 *
	 * @param boolean $stickyTracking The sticky tracking.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setStickyTracking($stickyTracking) {
		$this->stickyTracking = $stickyTracking;
		return $this;
	}

	/**
	 * Set the threshold.
	 *
	 * @param integer $threshold The threshold.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setThreshold($threshold) {
		$this->threshold = $threshold;
		return $this;
	}

	/**
	 * Set the tooltip.
	 *
	 * @param array $tooltip The tooltip.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setTooltip(array $tooltip = null) {
		$this->tooltip = $tooltip;
		return $this;
	}

	/**
	 * Set the up color.
	 *
	 * @param string $upColor The up color.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setUpColor($upColor) {
		$this->upColor = $upColor;
		return $this;
	}

	/**
	 * Set the visible.
	 *
	 * @param boolean $visible The visible.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}

	/**
	 * Set the zone axis.
	 *
	 * @param string $zoneAxis The zone axis.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
	 */
	public function setZoneAxis($zoneAxis) {
		$this->zoneAxis = $zoneAxis;
		return $this;
	}

	/**
	 * Set the zones.
	 *
	 * @param array $zones The zones.
	 * @return \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall Returns the highcharts waterfall.
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

		// Check the allow point select.
		if (!is_null($this->allowPointSelect)) {
			$output["allowPointSelect"] = $this->allowPointSelect;
		}

		// Check the animation.
		if (!is_null($this->animation)) {
			$output["animation"] = $this->animation;
		}

		// Check the animation limit.
		if (!is_null($this->animationLimit)) {
			$output["animationLimit"] = $this->animationLimit;
		}

		// Check the border color.
		if (!is_null($this->borderColor)) {
			$output["borderColor"] = $this->borderColor;
		}

		// Check the border radius.
		if (!is_null($this->borderRadius)) {
			$output["borderRadius"] = $this->borderRadius;
		}

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$output["borderWidth"] = $this->borderWidth;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the color by point.
		if (!is_null($this->colorByPoint)) {
			$output["colorByPoint"] = $this->colorByPoint;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$output["colorIndex"] = $this->colorIndex;
		}

		// Check the colors.
		if (!is_null($this->colors)) {
			$output["colors"] = $this->colors;
		}

		// Check the crisp.
		if (!is_null($this->crisp)) {
			$output["crisp"] = $this->crisp;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$output["cursor"] = $this->cursor;
		}

		// Check the dash style.
		if (!is_null($this->dashStyle)) {
			$output["dashStyle"] = $this->dashStyle;
		}

		// Check the data labels.
		if (!is_null($this->dataLabels)) {
			$output["dataLabels"] = $this->dataLabels->toArray();
		}

		// Check the depth.
		if (!is_null($this->depth)) {
			$output["depth"] = $this->depth;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$output["description"] = $this->description;
		}

		// Check the edge color.
		if (!is_null($this->edgeColor)) {
			$output["edgeColor"] = $this->edgeColor;
		}

		// Check the edge width.
		if (!is_null($this->edgeWidth)) {
			$output["edgeWidth"] = $this->edgeWidth;
		}

		// Check the enable mouse tracking.
		if (!is_null($this->enableMouseTracking)) {
			$output["enableMouseTracking"] = $this->enableMouseTracking;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$output["events"] = $this->events->toArray();
		}

		// Check the expose element to a11y.
		if (!is_null($this->exposeElementToA11y)) {
			$output["exposeElementToA11y"] = $this->exposeElementToA11y;
		}

		// Check the find nearest point by.
		if (!is_null($this->findNearestPointBy)) {
			$output["findNearestPointBy"] = $this->findNearestPointBy;
		}

		// Check the get extremes from all.
		if (!is_null($this->getExtremesFromAll)) {
			$output["getExtremesFromAll"] = $this->getExtremesFromAll;
		}

		// Check the group padding.
		if (!is_null($this->groupPadding)) {
			$output["groupPadding"] = $this->groupPadding;
		}

		// Check the group z padding.
		if (!is_null($this->groupZPadding)) {
			$output["groupZPadding"] = $this->groupZPadding;
		}

		// Check the grouping.
		if (!is_null($this->grouping)) {
			$output["grouping"] = $this->grouping;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$output["keys"] = $this->keys;
		}

		// Check the line color.
		if (!is_null($this->lineColor)) {
			$output["lineColor"] = $this->lineColor;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$output["lineWidth"] = $this->lineWidth;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$output["linkedTo"] = $this->linkedTo;
		}

		// Check the max point width.
		if (!is_null($this->maxPointWidth)) {
			$output["maxPointWidth"] = $this->maxPointWidth;
		}

		// Check the min point length.
		if (!is_null($this->minPointLength)) {
			$output["minPointLength"] = $this->minPointLength;
		}

		// Check the point.
		if (!is_null($this->point)) {
			$output["point"] = $this->point->toArray();
		}

		// Check the point description formatter.
		if (!is_null($this->pointDescriptionFormatter)) {
			$output["pointDescriptionFormatter"] = $this->pointDescriptionFormatter;
		}

		// Check the point interval.
		if (!is_null($this->pointInterval)) {
			$output["pointInterval"] = $this->pointInterval;
		}

		// Check the point interval unit.
		if (!is_null($this->pointIntervalUnit)) {
			$output["pointIntervalUnit"] = $this->pointIntervalUnit;
		}

		// Check the point padding.
		if (!is_null($this->pointPadding)) {
			$output["pointPadding"] = $this->pointPadding;
		}

		// Check the point placement.
		if (!is_null($this->pointPlacement)) {
			$output["pointPlacement"] = $this->pointPlacement;
		}

		// Check the point range.
		if (!is_null($this->pointRange)) {
			$output["pointRange"] = $this->pointRange;
		}

		// Check the point start.
		if (!is_null($this->pointStart)) {
			$output["pointStart"] = $this->pointStart;
		}

		// Check the point width.
		if (!is_null($this->pointWidth)) {
			$output["pointWidth"] = $this->pointWidth;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$output["selected"] = $this->selected;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$output["shadow"] = $this->shadow;
		}

		// Check the show checkbox.
		if (!is_null($this->showCheckbox)) {
			$output["showCheckbox"] = $this->showCheckbox;
		}

		// Check the show in legend.
		if (!is_null($this->showInLegend)) {
			$output["showInLegend"] = $this->showInLegend;
		}

		// Check the skip keyboard navigation.
		if (!is_null($this->skipKeyboardNavigation)) {
			$output["skipKeyboardNavigation"] = $this->skipKeyboardNavigation;
		}

		// Check the soft threshold.
		if (!is_null($this->softThreshold)) {
			$output["softThreshold"] = $this->softThreshold;
		}

		// Check the states.
		if (!is_null($this->states)) {
			$output["states"] = $this->states->toArray();
		}

		// Check the sticky tracking.
		if (!is_null($this->stickyTracking)) {
			$output["stickyTracking"] = $this->stickyTracking;
		}

		// Check the threshold.
		if (!is_null($this->threshold)) {
			$output["threshold"] = $this->threshold;
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$output["tooltip"] = $this->tooltip;
		}

		// Check the up color.
		if (!is_null($this->upColor)) {
			$output["upColor"] = $this->upColor;
		}

		// Check the visible.
		if (!is_null($this->visible)) {
			$output["visible"] = $this->visible;
		}

		// Check the zone axis.
		if (!is_null($this->zoneAxis)) {
			$output["zoneAxis"] = $this->zoneAxis;
		}

		// Check the zones.
		if (!is_null($this->zones)) {
			$output["zones"] = $this->zones;
		}

		// Return the output.
		return $output;
	}

}
