<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions;

use JsonSerializable;

/**
 * Highcharts solidgauge.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions
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
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents
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
	 * Linecap.
	 *
	 * @var string
	 * @since 4.2.2
	 */
	private $linecap = "round";

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
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint
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
	 * @since 5.0.8
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

		// Clear the data labels.
		$this->dataLabels = null;

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

		// Clear the keys.
		$this->keys = null;

		// Clear the linecap.
		$this->linecap = null;

		// Clear the overshoot.
		$this->overshoot = null;

		// Clear the point.
		if (!is_null($this->point)) {
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

		// Clear the visible.
		$this->visible = null;

		// Clear the wrap.
		$this->wrap = null;
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents Returns the events.
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
	 * Get the linecap.
	 *
	 * @return string Returns the linecap.
	 */
	public function getLinecap() {
		return $this->linecap;
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint Returns the point.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents Returns the events.
	 */
	public function newEvents() {
		$this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents();
		return $this->events;
	}

	/**
	 * Create a new point.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint Returns the point.
	 */
	public function newPoint() {
		$this->point = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint();
		return $this->point;
	}

	/**
	 * Set the animation.
	 *
	 * @param boolean $animation The animation.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setAnimation($animation) {
		$this->animation = $animation;
		return $this;
	}

	/**
	 * Set the animation limit.
	 *
	 * @param integer $animationLimit The animation limit.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setAnimationLimit($animationLimit) {
		$this->animationLimit = $animationLimit;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color index.
	 *
	 * @param integer $colorIndex The color index.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setColorIndex($colorIndex) {
		$this->colorIndex = $colorIndex;
		return $this;
	}

	/**
	 * Set the cursor.
	 *
	 * @param string $cursor The cursor.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
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
	 * @param array $dataLabels The data labels.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setDataLabels(array $dataLabels = null) {
		$this->dataLabels = $dataLabels;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the enable mouse tracking.
	 *
	 * @param boolean $enableMouseTracking The enable mouse tracking.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setEnableMouseTracking($enableMouseTracking) {
		$this->enableMouseTracking = $enableMouseTracking;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents $events The events.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the expose element to a11y.
	 *
	 * @param boolean $exposeElementToA11y The expose element to a11y.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setExposeElementToA11y($exposeElementToA11y) {
		$this->exposeElementToA11y = $exposeElementToA11y;
		return $this;
	}

	/**
	 * Set the find nearest point by.
	 *
	 * @param string $findNearestPointBy The find nearest point by.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setGetExtremesFromAll($getExtremesFromAll) {
		$this->getExtremesFromAll = $getExtremesFromAll;
		return $this;
	}

	/**
	 * Set the keys.
	 *
	 * @param array $keys The keys.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setKeys(array $keys = null) {
		$this->keys = $keys;
		return $this;
	}

	/**
	 * Set the linecap.
	 *
	 * @param string $linecap The linecap.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
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
	 * Set the overshoot.
	 *
	 * @param integer $overshoot The overshoot.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setOvershoot($overshoot) {
		$this->overshoot = $overshoot;
		return $this;
	}

	/**
	 * Set the point.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint $point The point.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setPoint(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint $point = null) {
		$this->point = $point;
		return $this;
	}

	/**
	 * Set the point description formatter.
	 *
	 * @param string $pointDescriptionFormatter The point description formatter.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setPointDescriptionFormatter($pointDescriptionFormatter) {
		$this->pointDescriptionFormatter = $pointDescriptionFormatter;
		return $this;
	}

	/**
	 * Set the rounded.
	 *
	 * @param boolean $rounded The rounded.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setRounded($rounded) {
		$this->rounded = $rounded;
		return $this;
	}

	/**
	 * Set the selected.
	 *
	 * @param boolean $selected The selected.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setSelected($selected) {
		$this->selected = $selected;
		return $this;
	}

	/**
	 * Set the show checkbox.
	 *
	 * @param boolean $showCheckbox The show checkbox.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setShowCheckbox($showCheckbox) {
		$this->showCheckbox = $showCheckbox;
		return $this;
	}

	/**
	 * Set the show in legend.
	 *
	 * @param boolean $showInLegend The show in legend.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setShowInLegend($showInLegend) {
		$this->showInLegend = $showInLegend;
		return $this;
	}

	/**
	 * Set the skip keyboard navigation.
	 *
	 * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
		$this->skipKeyboardNavigation = $skipKeyboardNavigation;
		return $this;
	}

	/**
	 * Set the sticky tracking.
	 *
	 * @param boolean $stickyTracking The sticky tracking.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setStickyTracking($stickyTracking) {
		$this->stickyTracking = $stickyTracking;
		return $this;
	}

	/**
	 * Set the threshold.
	 *
	 * @param integer $threshold The threshold.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setThreshold($threshold) {
		$this->threshold = $threshold;
		return $this;
	}

	/**
	 * Set the tooltip.
	 *
	 * @param array $tooltip The tooltip.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setTooltip(array $tooltip = null) {
		$this->tooltip = $tooltip;
		return $this;
	}

	/**
	 * Set the visible.
	 *
	 * @param boolean $visible The visible.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}

	/**
	 * Set the wrap.
	 *
	 * @param boolean $wrap The wrap.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge Returns the highcharts solidgauge.
	 */
	public function setWrap($wrap) {
		$this->wrap = $wrap;
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

		// Check the color index.
		if (!is_null($this->colorIndex)) {
			$output["colorIndex"] = $this->colorIndex;
		}

		// Check the cursor.
		if (!is_null($this->cursor)) {
			$output["cursor"] = $this->cursor;
		}

		// Check the data labels.
		if (!is_null($this->dataLabels)) {
			$output["dataLabels"] = $this->dataLabels;
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

		// Check the keys.
		if (!is_null($this->keys)) {
			$output["keys"] = $this->keys;
		}

		// Check the linecap.
		if (!is_null($this->linecap)) {
			$output["linecap"] = $this->linecap;
		}

		// Check the overshoot.
		if (!is_null($this->overshoot)) {
			$output["overshoot"] = $this->overshoot;
		}

		// Check the point.
		if (!is_null($this->point)) {
			$output["point"] = $this->point->toArray();
		}

		// Check the point description formatter.
		if (!is_null($this->pointDescriptionFormatter)) {
			$output["pointDescriptionFormatter"] = $this->pointDescriptionFormatter;
		}

		// Check the rounded.
		if (!is_null($this->rounded)) {
			$output["rounded"] = $this->rounded;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$output["selected"] = $this->selected;
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

		// Check the wrap.
		if (!is_null($this->wrap)) {
			$output["wrap"] = $this->wrap;
		}

		// Return the output.
		return $output;
	}

}
