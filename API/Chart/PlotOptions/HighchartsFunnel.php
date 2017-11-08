<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions;

use JsonSerializable;

/**
 * Highcharts funnel.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions
 * @version 5.0.14
 * @final
 */
final class HighchartsFunnel implements JsonSerializable {

	/**
	 * Allow point select.
	 *
	 * @var boolean
	 * @since 1.2.0
	 */
	private $allowPointSelect = false;

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
	 * @since 3.0
	 */
	private $center = ["50%", "50%"];

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
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsDataLabels
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
	 * Events.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsEvents
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
	 * Height.
	 *
	 * @var integer|string
	 * @since 3.0
	 */
	private $height;

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
	 * Neck height.
	 *
	 * @var integer|string
	 */
	private $neckHeight = "25%";

	/**
	 * Neck width.
	 *
	 * @var integer|string
	 * @since 3.0
	 */
	private $neckWidth = "30%";

	/**
	 * Point.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsPoint
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
	 * Reversed.
	 *
	 * @var boolean
	 * @since 3.0.10
	 */
	private $reversed = false;

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
	 * States.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsStates
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
	 * Width.
	 *
	 * @var integer|string
	 * @since 3.0
	 */
	private $width = "90%";

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

		// Clear the allow point select.
		$this->allowPointSelect = null;

		// Clear the animation limit.
		$this->animationLimit = null;

		// Clear the border color.
		$this->borderColor = null;

		// Clear the border width.
		$this->borderWidth = null;

		// Clear the center.
		$this->center = null;

		// Clear the class name.
		$this->className = null;

		// Clear the color index.
		$this->colorIndex = null;

		// Clear the colors.
		$this->colors = null;

		// Clear the cursor.
		$this->cursor = null;

		// Clear the data labels.
		if (!is_null($this->dataLabels)) {
			$this->dataLabels->clear();
		}

		// Clear the depth.
		$this->depth = null;

		// Clear the description.
		$this->description = null;

		// Clear the enable mouse tracking.
		$this->enableMouseTracking = null;

		// Clear the events.
		if (!is_null($this->events)) {
			$this->events->clear();
		}

		// Clear the expose element to a11y.
		$this->exposeElementToA11y = null;

		// Clear the find nearest point by.
		$this->findNearestPointBy = null;

		// Clear the get extremes from all.
		$this->getExtremesFromAll = null;

		// Clear the height.
		$this->height = null;

		// Clear the keys.
		$this->keys = null;

		// Clear the linked to.
		$this->linkedTo = null;

		// Clear the min size.
		$this->minSize = null;

		// Clear the neck height.
		$this->neckHeight = null;

		// Clear the neck width.
		$this->neckWidth = null;

		// Clear the point.
		if (!is_null($this->point)) {
			$this->point->clear();
		}

		// Clear the point description formatter.
		$this->pointDescriptionFormatter = null;

		// Clear the reversed.
		$this->reversed = null;

		// Clear the selected.
		$this->selected = null;

		// Clear the shadow.
		$this->shadow = null;

		// Clear the show in legend.
		$this->showInLegend = null;

		// Clear the skip keyboard navigation.
		$this->skipKeyboardNavigation = null;

		// Clear the sliced offset.
		$this->slicedOffset = null;

		// Clear the states.
		if (!is_null($this->states)) {
			$this->states->clear();
		}

		// Clear the sticky tracking.
		$this->stickyTracking = null;

		// Clear the tooltip.
		$this->tooltip = null;

		// Clear the visible.
		$this->visible = null;

		// Clear the width.
		$this->width = null;

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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns the data labels.
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
	 * Get the events.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsEvents Returns the events.
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
	 * Get the height.
	 *
	 * @return integer|string Returns the height.
	 */
	public function getHeight() {
		return $this->height;
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
	 * Get the neck height.
	 *
	 * @return integer|string Returns the neck height.
	 */
	public function getNeckHeight() {
		return $this->neckHeight;
	}

	/**
	 * Get the neck width.
	 *
	 * @return integer|string Returns the neck width.
	 */
	public function getNeckWidth() {
		return $this->neckWidth;
	}

	/**
	 * Get the point.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsPoint Returns the point.
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
	 * Get the reversed.
	 *
	 * @return boolean Returns the reversed.
	 */
	public function getReversed() {
		return $this->reversed;
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
	 * Get the states.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsStates Returns the states.
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
	 * Get the width.
	 *
	 * @return integer|string Returns the width.
	 */
	public function getWidth() {
		return $this->width;
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsDataLabels Returns the data labels.
	 */
	public function newDataLabels() {
		$this->dataLabels = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsDataLabels();
		return $this->dataLabels;
	}

	/**
	 * Create a new events.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsEvents Returns the events.
	 */
	public function newEvents() {
		$this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsEvents();
		return $this->events;
	}

	/**
	 * Create a new point.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsPoint Returns the point.
	 */
	public function newPoint() {
		$this->point = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsPoint();
		return $this->point;
	}

	/**
	 * Create a new states.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsStates Returns the states.
	 */
	public function newStates() {
		$this->states = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsStates();
		return $this->states;
	}

	/**
	 * Set the allow point select.
	 *
	 * @param boolean $allowPointSelect The allow point select.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setAllowPointSelect($allowPointSelect) {
		$this->allowPointSelect = $allowPointSelect;
		return $this;
	}

	/**
	 * Set the animation limit.
	 *
	 * @param integer $animationLimit The animation limit.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setAnimationLimit($animationLimit) {
		$this->animationLimit = $animationLimit;
		return $this;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the center.
	 *
	 * @param array $center The center.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setCenter(array $center = null) {
		$this->center = $center;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color index.
	 *
	 * @param integer $colorIndex The color index.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setColorIndex($colorIndex) {
		$this->colorIndex = $colorIndex;
		return $this;
	}

	/**
	 * Set the colors.
	 *
	 * @param array $colors The colors.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setColors(array $colors = null) {
		$this->colors = $colors;
		return $this;
	}

	/**
	 * Set the cursor.
	 *
	 * @param string $cursor The cursor.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
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
	 * Set the data labels.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsDataLabels $dataLabels The data labels.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setDataLabels(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsDataLabels $dataLabels = null) {
		$this->dataLabels = $dataLabels;
		return $this;
	}

	/**
	 * Set the depth.
	 *
	 * @param integer $depth The depth.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setDepth($depth) {
		$this->depth = $depth;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the enable mouse tracking.
	 *
	 * @param boolean $enableMouseTracking The enable mouse tracking.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setEnableMouseTracking($enableMouseTracking) {
		$this->enableMouseTracking = $enableMouseTracking;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsEvents $events The events.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the expose element to a11y.
	 *
	 * @param boolean $exposeElementToA11y The expose element to a11y.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setExposeElementToA11y($exposeElementToA11y) {
		$this->exposeElementToA11y = $exposeElementToA11y;
		return $this;
	}

	/**
	 * Set the find nearest point by.
	 *
	 * @param string $findNearestPointBy The find nearest point by.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setGetExtremesFromAll($getExtremesFromAll) {
		$this->getExtremesFromAll = $getExtremesFromAll;
		return $this;
	}

	/**
	 * Set the height.
	 *
	 * @param integer|string $height The height.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setHeight($height) {
		$this->height = $height;
		return $this;
	}

	/**
	 * Set the keys.
	 *
	 * @param array $keys The keys.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setKeys(array $keys = null) {
		$this->keys = $keys;
		return $this;
	}

	/**
	 * Set the linked to.
	 *
	 * @param string $linkedTo The linked to.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setLinkedTo($linkedTo) {
		$this->linkedTo = $linkedTo;
		return $this;
	}

	/**
	 * Set the min size.
	 *
	 * @param integer $minSize The min size.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setMinSize($minSize) {
		$this->minSize = $minSize;
		return $this;
	}

	/**
	 * Set the neck height.
	 *
	 * @param integer|string $neckHeight The neck height.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setNeckHeight($neckHeight) {
		$this->neckHeight = $neckHeight;
		return $this;
	}

	/**
	 * Set the neck width.
	 *
	 * @param integer|string $neckWidth The neck width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setNeckWidth($neckWidth) {
		$this->neckWidth = $neckWidth;
		return $this;
	}

	/**
	 * Set the point.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsPoint $point The point.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setPoint(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsPoint $point = null) {
		$this->point = $point;
		return $this;
	}

	/**
	 * Set the point description formatter.
	 *
	 * @param string $pointDescriptionFormatter The point description formatter.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setPointDescriptionFormatter($pointDescriptionFormatter) {
		$this->pointDescriptionFormatter = $pointDescriptionFormatter;
		return $this;
	}

	/**
	 * Set the reversed.
	 *
	 * @param boolean $reversed The reversed.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setReversed($reversed) {
		$this->reversed = $reversed;
		return $this;
	}

	/**
	 * Set the selected.
	 *
	 * @param boolean $selected The selected.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setSelected($selected) {
		$this->selected = $selected;
		return $this;
	}

	/**
	 * Set the shadow.
	 *
	 * @param boolean|array $shadow The shadow.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setShadow($shadow) {
		$this->shadow = $shadow;
		return $this;
	}

	/**
	 * Set the show in legend.
	 *
	 * @param boolean $showInLegend The show in legend.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setShowInLegend($showInLegend) {
		$this->showInLegend = $showInLegend;
		return $this;
	}

	/**
	 * Set the skip keyboard navigation.
	 *
	 * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
		$this->skipKeyboardNavigation = $skipKeyboardNavigation;
		return $this;
	}

	/**
	 * Set the sliced offset.
	 *
	 * @param integer $slicedOffset The sliced offset.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setSlicedOffset($slicedOffset) {
		$this->slicedOffset = $slicedOffset;
		return $this;
	}

	/**
	 * Set the states.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsStates $states The states.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setStates(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Funnel\HighchartsStates $states = null) {
		$this->states = $states;
		return $this;
	}

	/**
	 * Set the sticky tracking.
	 *
	 * @param boolean $stickyTracking The sticky tracking.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setStickyTracking($stickyTracking) {
		$this->stickyTracking = $stickyTracking;
		return $this;
	}

	/**
	 * Set the tooltip.
	 *
	 * @param array $tooltip The tooltip.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setTooltip(array $tooltip = null) {
		$this->tooltip = $tooltip;
		return $this;
	}

	/**
	 * Set the visible.
	 *
	 * @param boolean $visible The visible.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}

	/**
	 * Set the width.
	 *
	 * @param integer|string $width The width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setWidth($width) {
		$this->width = $width;
		return $this;
	}

	/**
	 * Set the zone axis.
	 *
	 * @param string $zoneAxis The zone axis.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
	 */
	public function setZoneAxis($zoneAxis) {
		$this->zoneAxis = $zoneAxis;
		return $this;
	}

	/**
	 * Set the zones.
	 *
	 * @param array $zones The zones.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel Returns the highcharts funnel.
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

		// Check the height.
		if (!is_null($this->height)) {
			$output["height"] = $this->height;
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

		// Check the neck height.
		if (!is_null($this->neckHeight)) {
			$output["neckHeight"] = $this->neckHeight;
		}

		// Check the neck width.
		if (!is_null($this->neckWidth)) {
			$output["neckWidth"] = $this->neckWidth;
		}

		// Check the point.
		if (!is_null($this->point)) {
			$output["point"] = $this->point->toArray();
		}

		// Check the point description formatter.
		if (!is_null($this->pointDescriptionFormatter)) {
			$output["pointDescriptionFormatter"] = $this->pointDescriptionFormatter;
		}

		// Check the reversed.
		if (!is_null($this->reversed)) {
			$output["reversed"] = $this->reversed;
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

		// Check the skip keyboard navigation.
		if (!is_null($this->skipKeyboardNavigation)) {
			$output["skipKeyboardNavigation"] = $this->skipKeyboardNavigation;
		}

		// Check the sliced offset.
		if (!is_null($this->slicedOffset)) {
			$output["slicedOffset"] = $this->slicedOffset;
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
			$output["tooltip"] = $this->tooltip;
		}

		// Check the visible.
		if (!is_null($this->visible)) {
			$output["visible"] = $this->visible;
		}

		// Check the width.
		if (!is_null($this->width)) {
			$output["width"] = $this->width;
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
