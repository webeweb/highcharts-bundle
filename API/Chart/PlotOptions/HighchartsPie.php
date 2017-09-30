<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\PlotOptions;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsDataLabels;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsStates;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsTooltip;

/**
 * Highcharts pie.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart\PlotOptions
 * @version 5.0.14
 * @final
 */
final class HighchartsPie implements JsonSerializable {

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
	 */
	private $borderColor = "#ffffff";

	/**
	 * Border width.
	 *
	 * @var integer
	 */
	private $borderWidth = 1;

	/**
	 * Center.
	 *
	 * @var array
	 */
	private $center = [null, null];

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
	 * Colors.
	 *
	 * @var array
	 * @since 3.0
	 */
	private $colors;

	/**
	 * Cursor.
	 *
	 * @var string
	 */
	private $cursor;

	/**
	 * Data labels.
	 *
	 * @var HighchartsDataLabels
	 */
	private $dataLabels;

	/**
	 * Depth.
	 *
	 * @var integer
	 * @since 4.0
	 */
	private $depth = 0;

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
	 * End angle.
	 *
	 * @var integer
	 * @since 1.3.6
	 */
	private $endAngle;

	/**
	 * Events.
	 *
	 * @var HighchartsEvents
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
	 * Ignore hidden point.
	 *
	 * @var boolean
	 * @since 2.3.0
	 */
	private $ignoreHiddenPoint = true;

	/**
	 * Inner size.
	 *
	 * @var string|integer
	 * @since 2.0
	 */
	private $innerSize = "0";

	/**
	 * Keys.
	 *
	 * @var array
	 * @since 4.1.6
	 */
	private $keys;

	/**
	 * Linked to.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $linkedTo;

	/**
	 * Min size.
	 *
	 * @var integer
	 * @since 3.0
	 */
	private $minSize = 80;

	/**
	 * Point.
	 *
	 * @var HighchartsPoint
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
	 * Show in legend.
	 *
	 * @var boolean
	 */
	private $showInLegend = false;

	/**
	 * Size.
	 *
	 * @var string|integer
	 */
	private $size;

	/**
	 * Skip keyboard navigation.
	 *
	 * @var boolean
	 * @since 5.0.12
	 */
	private $skipKeyboardNavigation;

	/**
	 * Sliced offset.
	 *
	 * @var integer
	 */
	private $slicedOffset = 10;

	/**
	 * Start angle.
	 *
	 * @var integer
	 * @since 2.3.4
	 */
	private $startAngle = 0;

	/**
	 * States.
	 *
	 * @var HighchartsStates
	 */
	private $states;

	/**
	 * Sticky tracking.
	 *
	 * @var boolean
	 */
	private $stickyTracking = false;

	/**
	 * Tooltip.
	 *
	 * @var HighchartsTooltip
	 * @since 2.3
	 */
	private $tooltip;

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

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$this->borderWidth = null;
		}

		// Check the center.
		if (!is_null($this->center)) {
			$this->center = null;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$this->colorIndex = null;
		}

		// Check the colors.
		if (!is_null($this->colors)) {
			$this->colors = null;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$this->cursor = null;
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

		// Check the enable mouse tracking.
		if (!is_null($this->enableMouseTracking)) {
			$this->enableMouseTracking = null;
		}

		// Check the end angle.
		if (!is_null($this->endAngle)) {
			$this->endAngle = null;
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

		// Check the ignore hidden point.
		if (!is_null($this->ignoreHiddenPoint)) {
			$this->ignoreHiddenPoint = null;
		}

		// Check the inner size.
		if (!is_null($this->innerSize)) {
			$this->innerSize = null;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$this->keys = null;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$this->linkedTo = null;
		}

		// Check the min size.
		if (!is_null($this->minSize)) {
			$this->minSize = null;
		}

		// Check the point.
		if (!is_null($this->point)) {
			$this->point->clear();
		}

		// Check the point description formatter.
		if (!is_null($this->pointDescriptionFormatter)) {
			$this->pointDescriptionFormatter = null;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$this->selected = null;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$this->shadow = null;
		}

		// Check the show in legend.
		if (!is_null($this->showInLegend)) {
			$this->showInLegend = null;
		}

		// Check the size.
		if (!is_null($this->size)) {
			$this->size = null;
		}

		// Check the skip keyboard navigation.
		if (!is_null($this->skipKeyboardNavigation)) {
			$this->skipKeyboardNavigation = null;
		}

		// Check the sliced offset.
		if (!is_null($this->slicedOffset)) {
			$this->slicedOffset = null;
		}

		// Check the start angle.
		if (!is_null($this->startAngle)) {
			$this->startAngle = null;
		}

		// Check the states.
		if (!is_null($this->states)) {
			$this->states->clear();
		}

		// Check the sticky tracking.
		if (!is_null($this->stickyTracking)) {
			$this->stickyTracking = null;
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$this->tooltip->clear();
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
	 * Get the border width.
	 *
	 * @return integer Returns the border width.
	 */
	public function getBorderWidth() {
		return $this->borderWidth;
	}

	/**
	 * Get the center.
	 *
	 * @return array Returns the center.
	 */
	public function getCenter() {
		return $this->center;
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
	 * Get the colors.
	 *
	 * @return array Returns the colors.
	 */
	public function getColors() {
		return $this->colors;
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
	 * Get the data labels.
	 *
	 * @return HighchartsDataLabels Returns the data labels.
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
	 * Get the enable mouse tracking.
	 *
	 * @return boolean Returns the enable mouse tracking.
	 */
	public function getEnableMouseTracking() {
		return $this->enableMouseTracking;
	}

	/**
	 * Get the end angle.
	 *
	 * @return integer Returns the end angle.
	 */
	public function getEndAngle() {
		return $this->endAngle;
	}

	/**
	 * Get the events.
	 *
	 * @return HighchartsEvents Returns the events.
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
	 * Get the ignore hidden point.
	 *
	 * @return boolean Returns the ignore hidden point.
	 */
	public function getIgnoreHiddenPoint() {
		return $this->ignoreHiddenPoint;
	}

	/**
	 * Get the inner size.
	 *
	 * @return string|integer Returns the inner size.
	 */
	public function getInnerSize() {
		return $this->innerSize;
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
	 * Get the linked to.
	 *
	 * @return string Returns the linked to.
	 */
	public function getLinkedTo() {
		return $this->linkedTo;
	}

	/**
	 * Get the min size.
	 *
	 * @return integer Returns the min size.
	 */
	public function getMinSize() {
		return $this->minSize;
	}

	/**
	 * Get the point.
	 *
	 * @return HighchartsPoint Returns the point.
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
	 * Get the show in legend.
	 *
	 * @return boolean Returns the show in legend.
	 */
	public function getShowInLegend() {
		return $this->showInLegend;
	}

	/**
	 * Get the size.
	 *
	 * @return string|integer Returns the size.
	 */
	public function getSize() {
		return $this->size;
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
	 * Get the sliced offset.
	 *
	 * @return integer Returns the sliced offset.
	 */
	public function getSlicedOffset() {
		return $this->slicedOffset;
	}

	/**
	 * Get the start angle.
	 *
	 * @return integer Returns the start angle.
	 */
	public function getStartAngle() {
		return $this->startAngle;
	}

	/**
	 * Get the states.
	 *
	 * @return HighchartsStates Returns the states.
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
	 * Get the tooltip.
	 *
	 * @return HighchartsTooltip Returns the tooltip.
	 */
	public function getTooltip() {
		return $this->tooltip;
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
	 * @return HighchartsDataLabels Returns the data labels.
	 */
	public function newDataLabels() {
		$this->dataLabels = new HighchartsDataLabels();
		return $this->dataLabels;
	}

	/**
	 * Create a new events.
	 *
	 * @return HighchartsEvents Returns the events.
	 */
	public function newEvents() {
		$this->events = new HighchartsEvents();
		return $this->events;
	}

	/**
	 * Create a new point.
	 *
	 * @return HighchartsPoint Returns the point.
	 */
	public function newPoint() {
		$this->point = new HighchartsPoint();
		return $this->point;
	}

	/**
	 * Create a new states.
	 *
	 * @return HighchartsStates Returns the states.
	 */
	public function newStates() {
		$this->states = new HighchartsStates();
		return $this->states;
	}

	/**
	 * Create a new tooltip.
	 *
	 * @return HighchartsTooltip Returns the tooltip.
	 */
	public function newTooltip() {
		$this->tooltip = new HighchartsTooltip();
		return $this->tooltip;
	}

	/**
	 * Set the allow point select.
	 *
	 * @param boolean $allowPointSelect The allow point select.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setAllowPointSelect($allowPointSelect) {
		$this->allowPointSelect = $allowPointSelect;
		return $this;
	}

	/**
	 * Set the animation.
	 *
	 * @param boolean $animation The animation.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setAnimation($animation) {
		$this->animation = $animation;
		return $this;
	}

	/**
	 * Set the animation limit.
	 *
	 * @param integer $animationLimit The animation limit.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setAnimationLimit($animationLimit) {
		$this->animationLimit = $animationLimit;
		return $this;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the center.
	 *
	 * @param array $center The center.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setCenter(array $center = null) {
		$this->center = $center;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color index.
	 *
	 * @param integer $colorIndex The color index.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setColorIndex($colorIndex) {
		$this->colorIndex = $colorIndex;
		return $this;
	}

	/**
	 * Set the colors.
	 *
	 * @param array $colors The colors.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setColors(array $colors = null) {
		$this->colors = $colors;
		return $this;
	}

	/**
	 * Set the cursor.
	 *
	 * @param string $cursor The cursor.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setCursor($cursor) {
		$this->cursor = $cursor;
		return $this;
	}

	/**
	 * Set the data labels.
	 *
	 * @param HighchartsDataLabels $dataLabels The data labels.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setDataLabels(HighchartsDataLabels $dataLabels = null) {
		$this->dataLabels = $dataLabels;
		return $this;
	}

	/**
	 * Set the depth.
	 *
	 * @param integer $depth The depth.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setDepth($depth) {
		$this->depth = $depth;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the enable mouse tracking.
	 *
	 * @param boolean $enableMouseTracking The enable mouse tracking.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setEnableMouseTracking($enableMouseTracking) {
		$this->enableMouseTracking = $enableMouseTracking;
		return $this;
	}

	/**
	 * Set the end angle.
	 *
	 * @param integer $endAngle The end angle.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setEndAngle($endAngle) {
		$this->endAngle = $endAngle;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param HighchartsEvents $events The events.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setEvents(HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the expose element to a11y.
	 *
	 * @param boolean $exposeElementToA11y The expose element to a11y.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setExposeElementToA11y($exposeElementToA11y) {
		$this->exposeElementToA11y = $exposeElementToA11y;
		return $this;
	}

	/**
	 * Set the find nearest point by.
	 *
	 * @param string $findNearestPointBy The find nearest point by.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setFindNearestPointBy($findNearestPointBy) {
		$this->findNearestPointBy = $findNearestPointBy;
		return $this;
	}

	/**
	 * Set the get extremes from all.
	 *
	 * @param boolean $getExtremesFromAll The get extremes from all.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setGetExtremesFromAll($getExtremesFromAll) {
		$this->getExtremesFromAll = $getExtremesFromAll;
		return $this;
	}

	/**
	 * Set the ignore hidden point.
	 *
	 * @param boolean $ignoreHiddenPoint The ignore hidden point.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setIgnoreHiddenPoint($ignoreHiddenPoint) {
		$this->ignoreHiddenPoint = $ignoreHiddenPoint;
		return $this;
	}

	/**
	 * Set the inner size.
	 *
	 * @param string|integer $innerSize The inner size.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setInnerSize($innerSize) {
		$this->innerSize = $innerSize;
		return $this;
	}

	/**
	 * Set the keys.
	 *
	 * @param array $keys The keys.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setKeys(array $keys = null) {
		$this->keys = $keys;
		return $this;
	}

	/**
	 * Set the linked to.
	 *
	 * @param string $linkedTo The linked to.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setLinkedTo($linkedTo) {
		$this->linkedTo = $linkedTo;
		return $this;
	}

	/**
	 * Set the min size.
	 *
	 * @param integer $minSize The min size.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setMinSize($minSize) {
		$this->minSize = $minSize;
		return $this;
	}

	/**
	 * Set the point.
	 *
	 * @param HighchartsPoint $point The point.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setPoint(HighchartsPoint $point = null) {
		$this->point = $point;
		return $this;
	}

	/**
	 * Set the point description formatter.
	 *
	 * @param string $pointDescriptionFormatter The point description formatter.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setPointDescriptionFormatter($pointDescriptionFormatter) {
		$this->pointDescriptionFormatter = $pointDescriptionFormatter;
		return $this;
	}

	/**
	 * Set the selected.
	 *
	 * @param boolean $selected The selected.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setSelected($selected) {
		$this->selected = $selected;
		return $this;
	}

	/**
	 * Set the shadow.
	 *
	 * @param boolean|array $shadow The shadow.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setShadow($shadow) {
		$this->shadow = $shadow;
		return $this;
	}

	/**
	 * Set the show in legend.
	 *
	 * @param boolean $showInLegend The show in legend.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setShowInLegend($showInLegend) {
		$this->showInLegend = $showInLegend;
		return $this;
	}

	/**
	 * Set the size.
	 *
	 * @param string|integer $size The size.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setSize($size) {
		$this->size = $size;
		return $this;
	}

	/**
	 * Set the skip keyboard navigation.
	 *
	 * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
		$this->skipKeyboardNavigation = $skipKeyboardNavigation;
		return $this;
	}

	/**
	 * Set the sliced offset.
	 *
	 * @param integer $slicedOffset The sliced offset.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setSlicedOffset($slicedOffset) {
		$this->slicedOffset = $slicedOffset;
		return $this;
	}

	/**
	 * Set the start angle.
	 *
	 * @param integer $startAngle The start angle.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setStartAngle($startAngle) {
		$this->startAngle = $startAngle;
		return $this;
	}

	/**
	 * Set the states.
	 *
	 * @param HighchartsStates $states The states.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setStates(HighchartsStates $states = null) {
		$this->states = $states;
		return $this;
	}

	/**
	 * Set the sticky tracking.
	 *
	 * @param boolean $stickyTracking The sticky tracking.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setStickyTracking($stickyTracking) {
		$this->stickyTracking = $stickyTracking;
		return $this;
	}

	/**
	 * Set the tooltip.
	 *
	 * @param HighchartsTooltip $tooltip The tooltip.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setTooltip(HighchartsTooltip $tooltip = null) {
		$this->tooltip = $tooltip;
		return $this;
	}

	/**
	 * Set the visible.
	 *
	 * @param boolean $visible The visible.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}

	/**
	 * Set the zone axis.
	 *
	 * @param string $zoneAxis The zone axis.
	 * @return HighchartsPie Returns the highcharts pie.
	 */
	public function setZoneAxis($zoneAxis) {
		$this->zoneAxis = $zoneAxis;
		return $this;
	}

	/**
	 * Set the zones.
	 *
	 * @param array $zones The zones.
	 * @return HighchartsPie Returns the highcharts pie.
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

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$output["borderWidth"] = $this->borderWidth;
		}

		// Check the center.
		if (!is_null($this->center)) {
			$output["center"] = $this->center;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$output["colorIndex"] = $this->colorIndex;
		}

		// Check the colors.
		if (!is_null($this->colors)) {
			$output["colors"] = $this->colors;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$output["cursor"] = $this->cursor;
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

		// Check the enable mouse tracking.
		if (!is_null($this->enableMouseTracking)) {
			$output["enableMouseTracking"] = $this->enableMouseTracking;
		}

		// Check the end angle.
		if (!is_null($this->endAngle)) {
			$output["endAngle"] = $this->endAngle;
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

		// Check the ignore hidden point.
		if (!is_null($this->ignoreHiddenPoint)) {
			$output["ignoreHiddenPoint"] = $this->ignoreHiddenPoint;
		}

		// Check the inner size.
		if (!is_null($this->innerSize)) {
			$output["innerSize"] = $this->innerSize;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$output["keys"] = $this->keys;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$output["linkedTo"] = $this->linkedTo;
		}

		// Check the min size.
		if (!is_null($this->minSize)) {
			$output["minSize"] = $this->minSize;
		}

		// Check the point.
		if (!is_null($this->point)) {
			$output["point"] = $this->point->toArray();
		}

		// Check the point description formatter.
		if (!is_null($this->pointDescriptionFormatter)) {
			$output["pointDescriptionFormatter"] = $this->pointDescriptionFormatter;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$output["selected"] = $this->selected;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$output["shadow"] = $this->shadow;
		}

		// Check the show in legend.
		if (!is_null($this->showInLegend)) {
			$output["showInLegend"] = $this->showInLegend;
		}

		// Check the size.
		if (!is_null($this->size)) {
			$output["size"] = $this->size;
		}

		// Check the skip keyboard navigation.
		if (!is_null($this->skipKeyboardNavigation)) {
			$output["skipKeyboardNavigation"] = $this->skipKeyboardNavigation;
		}

		// Check the sliced offset.
		if (!is_null($this->slicedOffset)) {
			$output["slicedOffset"] = $this->slicedOffset;
		}

		// Check the start angle.
		if (!is_null($this->startAngle)) {
			$output["startAngle"] = $this->startAngle;
		}

		// Check the states.
		if (!is_null($this->states)) {
			$output["states"] = $this->states->toArray();
		}

		// Check the sticky tracking.
		if (!is_null($this->stickyTracking)) {
			$output["stickyTracking"] = $this->stickyTracking;
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$output["tooltip"] = $this->tooltip->toArray();
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

