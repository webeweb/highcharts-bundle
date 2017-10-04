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
use WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsDataLabels;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsStates;

/**
 * Highcharts bubble.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\PlotOptions
 * @version 5.0.14
 * @final
 */
final class HighchartsBubble implements JsonSerializable {

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
	 * Color index.
	 *
	 * @var integer
	 * @since 5.0.0
	 */
	private $colorIndex;

	/**
	 * Crop threshold.
	 *
	 * @var integer
	 * @since 2.2
	 */
	private $cropThreshold = 300;

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
	 * @since 2.1
	 */
	private $dashStyle = "Solid";

	/**
	 * Data labels.
	 *
	 * @var HighchartsDataLabels
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
	 * Display negative.
	 *
	 * @var boolean
	 * @since 3.0
	 */
	private $displayNegative = true;

	/**
	 * Enable mouse tracking.
	 *
	 * @var boolean
	 */
	private $enableMouseTracking = true;

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
	 * Keys.
	 *
	 * @var array
	 * @since 4.1.6
	 */
	private $keys;

	/**
	 * Line width.
	 *
	 * @var integer
	 */
	private $lineWidth = 0;

	/**
	 * Linked to.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $linkedTo;

	/**
	 * Marker.
	 *
	 * @var array
	 */
	private $marker;

	/**
	 * Max size.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $maxSize = "20%";

	/**
	 * Min size.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $minSize = "8";

	/**
	 * Negative color.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $negativeColor;

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
	 * Point start.
	 *
	 * @var integer
	 */
	private $pointStart = 0;

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
	 * Size by.
	 *
	 * @var string
	 * @since 3.0.7
	 */
	private $sizeBy = "area";

	/**
	 * Size by absolute value.
	 *
	 * @var boolean
	 * @since 4.1.9
	 */
	private $sizeByAbsoluteValue = false;

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
	private $softThreshold = false;

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
	 * Threshold.
	 *
	 * @var integer
	 * @since 3.0
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
	 * Visible.
	 *
	 * @var boolean
	 */
	private $visible = true;

	/**
	 * Z max.
	 *
	 * @var integer
	 * @since 4.0.3
	 */
	private $zMax;

	/**
	 * Z min.
	 *
	 * @var integer
	 * @since 4.0.3
	 */
	private $zMin;

	/**
	 * Z threshold.
	 *
	 * @var integer
	 * @since 3.0
	 */
	private $zThreshold = 0;

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

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$this->color = null;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$this->colorIndex = null;
		}

		// Check the crop threshold.
		if (!is_null($this->cropThreshold)) {
			$this->cropThreshold = null;
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

		// Check the description.
		if (!is_null($this->description)) {
			$this->description = null;
		}

		// Check the display negative.
		if (!is_null($this->displayNegative)) {
			$this->displayNegative = null;
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

		// Check the keys.
		if (!is_null($this->keys)) {
			$this->keys = null;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$this->lineWidth = null;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$this->linkedTo = null;
		}

		// Check the marker.
		if (!is_null($this->marker)) {
			$this->marker = null;
		}

		// Check the max size.
		if (!is_null($this->maxSize)) {
			$this->maxSize = null;
		}

		// Check the min size.
		if (!is_null($this->minSize)) {
			$this->minSize = null;
		}

		// Check the negative color.
		if (!is_null($this->negativeColor)) {
			$this->negativeColor = null;
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

		// Check the point start.
		if (!is_null($this->pointStart)) {
			$this->pointStart = null;
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

		// Check the size by.
		if (!is_null($this->sizeBy)) {
			$this->sizeBy = null;
		}

		// Check the size by absolute value.
		if (!is_null($this->sizeByAbsoluteValue)) {
			$this->sizeByAbsoluteValue = null;
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

		// Check the visible.
		if (!is_null($this->visible)) {
			$this->visible = null;
		}

		// Check the z max.
		if (!is_null($this->zMax)) {
			$this->zMax = null;
		}

		// Check the z min.
		if (!is_null($this->zMin)) {
			$this->zMin = null;
		}

		// Check the z threshold.
		if (!is_null($this->zThreshold)) {
			$this->zThreshold = null;
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
	 * Get the color index.
	 *
	 * @return integer Returns the color index.
	 */
	public function getColorIndex() {
		return $this->colorIndex;
	}

	/**
	 * Get the crop threshold.
	 *
	 * @return integer Returns the crop threshold.
	 */
	public function getCropThreshold() {
		return $this->cropThreshold;
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
	 * @return HighchartsDataLabels Returns the data labels.
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
	 * Get the display negative.
	 *
	 * @return boolean Returns the display negative.
	 */
	public function getDisplayNegative() {
		return $this->displayNegative;
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
	 * Get the keys.
	 *
	 * @return array Returns the keys.
	 */
	public function getKeys() {
		return $this->keys;
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
	 * Get the marker.
	 *
	 * @return array Returns the marker.
	 */
	public function getMarker() {
		return $this->marker;
	}

	/**
	 * Get the max size.
	 *
	 * @return string Returns the max size.
	 */
	public function getMaxSize() {
		return $this->maxSize;
	}

	/**
	 * Get the min size.
	 *
	 * @return string Returns the min size.
	 */
	public function getMinSize() {
		return $this->minSize;
	}

	/**
	 * Get the negative color.
	 *
	 * @return string Returns the negative color.
	 */
	public function getNegativeColor() {
		return $this->negativeColor;
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
	 * Get the point start.
	 *
	 * @return integer Returns the point start.
	 */
	public function getPointStart() {
		return $this->pointStart;
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
	 * Get the size by.
	 *
	 * @return string Returns the size by.
	 */
	public function getSizeBy() {
		return $this->sizeBy;
	}

	/**
	 * Get the size by absolute value.
	 *
	 * @return boolean Returns the size by absolute value.
	 */
	public function getSizeByAbsoluteValue() {
		return $this->sizeByAbsoluteValue;
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
	 * Get the visible.
	 *
	 * @return boolean Returns the visible.
	 */
	public function getVisible() {
		return $this->visible;
	}

	/**
	 * Get the z max.
	 *
	 * @return integer Returns the z max.
	 */
	public function getZMax() {
		return $this->zMax;
	}

	/**
	 * Get the z min.
	 *
	 * @return integer Returns the z min.
	 */
	public function getZMin() {
		return $this->zMin;
	}

	/**
	 * Get the z threshold.
	 *
	 * @return integer Returns the z threshold.
	 */
	public function getZThreshold() {
		return $this->zThreshold;
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
	 * Set the allow point select.
	 *
	 * @param boolean $allowPointSelect The allow point select.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setAllowPointSelect($allowPointSelect) {
		$this->allowPointSelect = $allowPointSelect;
		return $this;
	}

	/**
	 * Set the animation.
	 *
	 * @param boolean $animation The animation.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setAnimation($animation) {
		$this->animation = $animation;
		return $this;
	}

	/**
	 * Set the animation limit.
	 *
	 * @param integer $animationLimit The animation limit.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setAnimationLimit($animationLimit) {
		$this->animationLimit = $animationLimit;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the color index.
	 *
	 * @param integer $colorIndex The color index.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setColorIndex($colorIndex) {
		$this->colorIndex = $colorIndex;
		return $this;
	}

	/**
	 * Set the crop threshold.
	 *
	 * @param integer $cropThreshold The crop threshold.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setCropThreshold($cropThreshold) {
		$this->cropThreshold = $cropThreshold;
		return $this;
	}

	/**
	 * Set the cursor.
	 *
	 * @param string $cursor The cursor.
	 * @return HighchartsBubble Returns the highcharts bubble.
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
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setDashStyle($dashStyle) {
		switch ($dashStyle) {
			case "Dash":
			case "DashDot":
			case "Dot":
			case "LongDash":
			case "LongDashDot":
			case "LongDashDotDot":
			case "ShortDash":
			case "ShortDashDot":
			case "ShortDashDotDot":
			case "ShortDot":
			case "Solid":
				$this->dashStyle = $dashStyle;
				break;
		}
		return $this;
	}

	/**
	 * Set the data labels.
	 *
	 * @param HighchartsDataLabels $dataLabels The data labels.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setDataLabels(HighchartsDataLabels $dataLabels = null) {
		$this->dataLabels = $dataLabels;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the display negative.
	 *
	 * @param boolean $displayNegative The display negative.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setDisplayNegative($displayNegative) {
		$this->displayNegative = $displayNegative;
		return $this;
	}

	/**
	 * Set the enable mouse tracking.
	 *
	 * @param boolean $enableMouseTracking The enable mouse tracking.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setEnableMouseTracking($enableMouseTracking) {
		$this->enableMouseTracking = $enableMouseTracking;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param HighchartsEvents $events The events.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setEvents(HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the expose element to a11y.
	 *
	 * @param boolean $exposeElementToA11y The expose element to a11y.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setExposeElementToA11y($exposeElementToA11y) {
		$this->exposeElementToA11y = $exposeElementToA11y;
		return $this;
	}

	/**
	 * Set the find nearest point by.
	 *
	 * @param string $findNearestPointBy The find nearest point by.
	 * @return HighchartsBubble Returns the highcharts bubble.
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
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setGetExtremesFromAll($getExtremesFromAll) {
		$this->getExtremesFromAll = $getExtremesFromAll;
		return $this;
	}

	/**
	 * Set the keys.
	 *
	 * @param array $keys The keys.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setKeys(array $keys = null) {
		$this->keys = $keys;
		return $this;
	}

	/**
	 * Set the line width.
	 *
	 * @param integer $lineWidth The line width.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setLineWidth($lineWidth) {
		$this->lineWidth = $lineWidth;
		return $this;
	}

	/**
	 * Set the linked to.
	 *
	 * @param string $linkedTo The linked to.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setLinkedTo($linkedTo) {
		$this->linkedTo = $linkedTo;
		return $this;
	}

	/**
	 * Set the marker.
	 *
	 * @param array $marker The marker.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setMarker(array $marker = null) {
		$this->marker = $marker;
		return $this;
	}

	/**
	 * Set the max size.
	 *
	 * @param string $maxSize The max size.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setMaxSize($maxSize) {
		$this->maxSize = $maxSize;
		return $this;
	}

	/**
	 * Set the min size.
	 *
	 * @param string $minSize The min size.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setMinSize($minSize) {
		$this->minSize = $minSize;
		return $this;
	}

	/**
	 * Set the negative color.
	 *
	 * @param string $negativeColor The negative color.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setNegativeColor($negativeColor) {
		$this->negativeColor = $negativeColor;
		return $this;
	}

	/**
	 * Set the point.
	 *
	 * @param HighchartsPoint $point The point.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setPoint(HighchartsPoint $point = null) {
		$this->point = $point;
		return $this;
	}

	/**
	 * Set the point description formatter.
	 *
	 * @param string $pointDescriptionFormatter The point description formatter.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setPointDescriptionFormatter($pointDescriptionFormatter) {
		$this->pointDescriptionFormatter = $pointDescriptionFormatter;
		return $this;
	}

	/**
	 * Set the point interval.
	 *
	 * @param integer $pointInterval The point interval.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setPointInterval($pointInterval) {
		$this->pointInterval = $pointInterval;
		return $this;
	}

	/**
	 * Set the point interval unit.
	 *
	 * @param string $pointIntervalUnit The point interval unit.
	 * @return HighchartsBubble Returns the highcharts bubble.
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
	 * Set the point start.
	 *
	 * @param integer $pointStart The point start.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setPointStart($pointStart) {
		$this->pointStart = $pointStart;
		return $this;
	}

	/**
	 * Set the selected.
	 *
	 * @param boolean $selected The selected.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setSelected($selected) {
		$this->selected = $selected;
		return $this;
	}

	/**
	 * Set the shadow.
	 *
	 * @param boolean|array $shadow The shadow.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setShadow($shadow) {
		$this->shadow = $shadow;
		return $this;
	}

	/**
	 * Set the show checkbox.
	 *
	 * @param boolean $showCheckbox The show checkbox.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setShowCheckbox($showCheckbox) {
		$this->showCheckbox = $showCheckbox;
		return $this;
	}

	/**
	 * Set the show in legend.
	 *
	 * @param boolean $showInLegend The show in legend.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setShowInLegend($showInLegend) {
		$this->showInLegend = $showInLegend;
		return $this;
	}

	/**
	 * Set the size by.
	 *
	 * @param string $sizeBy The size by.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setSizeBy($sizeBy) {
		switch ($sizeBy) {
			case "area":
			case "width":
				$this->sizeBy = $sizeBy;
				break;
		}
		return $this;
	}

	/**
	 * Set the size by absolute value.
	 *
	 * @param boolean $sizeByAbsoluteValue The size by absolute value.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setSizeByAbsoluteValue($sizeByAbsoluteValue) {
		$this->sizeByAbsoluteValue = $sizeByAbsoluteValue;
		return $this;
	}

	/**
	 * Set the skip keyboard navigation.
	 *
	 * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
		$this->skipKeyboardNavigation = $skipKeyboardNavigation;
		return $this;
	}

	/**
	 * Set the soft threshold.
	 *
	 * @param boolean $softThreshold The soft threshold.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setSoftThreshold($softThreshold) {
		$this->softThreshold = $softThreshold;
		return $this;
	}

	/**
	 * Set the states.
	 *
	 * @param HighchartsStates $states The states.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setStates(HighchartsStates $states = null) {
		$this->states = $states;
		return $this;
	}

	/**
	 * Set the sticky tracking.
	 *
	 * @param boolean $stickyTracking The sticky tracking.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setStickyTracking($stickyTracking) {
		$this->stickyTracking = $stickyTracking;
		return $this;
	}

	/**
	 * Set the threshold.
	 *
	 * @param integer $threshold The threshold.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setThreshold($threshold) {
		$this->threshold = $threshold;
		return $this;
	}

	/**
	 * Set the tooltip.
	 *
	 * @param array $tooltip The tooltip.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setTooltip(array $tooltip = null) {
		$this->tooltip = $tooltip;
		return $this;
	}

	/**
	 * Set the visible.
	 *
	 * @param boolean $visible The visible.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}

	/**
	 * Set the z max.
	 *
	 * @param integer $zMax The z max.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setZMax($zMax) {
		$this->zMax = $zMax;
		return $this;
	}

	/**
	 * Set the z min.
	 *
	 * @param integer $zMin The z min.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setZMin($zMin) {
		$this->zMin = $zMin;
		return $this;
	}

	/**
	 * Set the z threshold.
	 *
	 * @param integer $zThreshold The z threshold.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setZThreshold($zThreshold) {
		$this->zThreshold = $zThreshold;
		return $this;
	}

	/**
	 * Set the zone axis.
	 *
	 * @param string $zoneAxis The zone axis.
	 * @return HighchartsBubble Returns the highcharts bubble.
	 */
	public function setZoneAxis($zoneAxis) {
		$this->zoneAxis = $zoneAxis;
		return $this;
	}

	/**
	 * Set the zones.
	 *
	 * @param array $zones The zones.
	 * @return HighchartsBubble Returns the highcharts bubble.
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

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$output["colorIndex"] = $this->colorIndex;
		}

		// Check the crop threshold.
		if (!is_null($this->cropThreshold)) {
			$output["cropThreshold"] = $this->cropThreshold;
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

		// Check the description.
		if (!is_null($this->description)) {
			$output["description"] = $this->description;
		}

		// Check the display negative.
		if (!is_null($this->displayNegative)) {
			$output["displayNegative"] = $this->displayNegative;
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

		// Check the keys.
		if (!is_null($this->keys)) {
			$output["keys"] = $this->keys;
		}

		// Check the line width.
		if (!is_null($this->lineWidth)) {
			$output["lineWidth"] = $this->lineWidth;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$output["linkedTo"] = $this->linkedTo;
		}

		// Check the marker.
		if (!is_null($this->marker)) {
			$output["marker"] = $this->marker;
		}

		// Check the max size.
		if (!is_null($this->maxSize)) {
			$output["maxSize"] = $this->maxSize;
		}

		// Check the min size.
		if (!is_null($this->minSize)) {
			$output["minSize"] = $this->minSize;
		}

		// Check the negative color.
		if (!is_null($this->negativeColor)) {
			$output["negativeColor"] = $this->negativeColor;
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

		// Check the point start.
		if (!is_null($this->pointStart)) {
			$output["pointStart"] = $this->pointStart;
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

		// Check the size by.
		if (!is_null($this->sizeBy)) {
			$output["sizeBy"] = $this->sizeBy;
		}

		// Check the size by absolute value.
		if (!is_null($this->sizeByAbsoluteValue)) {
			$output["sizeByAbsoluteValue"] = $this->sizeByAbsoluteValue;
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

		// Check the visible.
		if (!is_null($this->visible)) {
			$output["visible"] = $this->visible;
		}

		// Check the z max.
		if (!is_null($this->zMax)) {
			$output["zMax"] = $this->zMax;
		}

		// Check the z min.
		if (!is_null($this->zMin)) {
			$output["zMin"] = $this->zMin;
		}

		// Check the z threshold.
		if (!is_null($this->zThreshold)) {
			$output["zThreshold"] = $this->zThreshold;
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
