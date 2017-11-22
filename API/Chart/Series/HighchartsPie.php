<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\Series;

use JsonSerializable;

/**
 * Highcharts pie.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\Series
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
	 * Data.
	 *
	 * @var array
	 */
	private $data;

	/**
	 * Data labels.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsDataLabels
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
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsEvents
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
	 * Ignore hidden point.
	 *
	 * @var boolean
	 * @since 2.3.0
	 */
	private $ignoreHiddenPoint = true;

	/**
	 * Index.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $index;

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
	 * Legend index.
	 *
	 * @var integer
	 */
	private $legendIndex;

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
	 * Name.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Point.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsPoint
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
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsStates
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

		// Clear the animation.
		$this->animation = null;

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

		// Clear the data.
		$this->data = null;

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

		// Clear the end angle.
		$this->endAngle = null;

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

		// Clear the id.
		$this->id = null;

		// Clear the ignore hidden point.
		$this->ignoreHiddenPoint = null;

		// Clear the index.
		$this->index = null;

		// Clear the inner size.
		$this->innerSize = null;

		// Clear the keys.
		$this->keys = null;

		// Clear the legend index.
		$this->legendIndex = null;

		// Clear the linked to.
		$this->linkedTo = null;

		// Clear the min size.
		$this->minSize = null;

		// Clear the name.
		$this->name = null;

		// Clear the point.
		if (!is_null($this->point)) {
			$this->point->clear();
		}

		// Clear the point description formatter.
		$this->pointDescriptionFormatter = null;

		// Clear the selected.
		$this->selected = null;

		// Clear the shadow.
		$this->shadow = null;

		// Clear the show in legend.
		$this->showInLegend = null;

		// Clear the size.
		$this->size = null;

		// Clear the skip keyboard navigation.
		$this->skipKeyboardNavigation = null;

		// Clear the sliced offset.
		$this->slicedOffset = null;

		// Clear the start angle.
		$this->startAngle = null;

		// Clear the states.
		if (!is_null($this->states)) {
			$this->states->clear();
		}

		// Clear the sticky tracking.
		$this->stickyTracking = null;

		// Clear the tooltip.
		$this->tooltip = null;

		// Clear the type.
		$this->type = null;

		// Clear the visible.
		$this->visible = null;

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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsDataLabels Returns the data labels.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsEvents Returns the events.
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
	 * Get the ignore hidden point.
	 *
	 * @return boolean Returns the ignore hidden point.
	 */
	public function getIgnoreHiddenPoint() {
		return $this->ignoreHiddenPoint;
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
	 * Get the legend index.
	 *
	 * @return integer Returns the legend index.
	 */
	public function getLegendIndex() {
		return $this->legendIndex;
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsPoint Returns the point.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsStates Returns the states.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsDataLabels Returns the data labels.
	 */
	public function newDataLabels() {
		$this->dataLabels = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsDataLabels();
		return $this->dataLabels;
	}

	/**
	 * Create a new events.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsEvents Returns the events.
	 */
	public function newEvents() {
		$this->events = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsEvents();
		return $this->events;
	}

	/**
	 * Create a new point.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsPoint Returns the point.
	 */
	public function newPoint() {
		$this->point = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsPoint();
		return $this->point;
	}

	/**
	 * Create a new states.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsStates Returns the states.
	 */
	public function newStates() {
		$this->states = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsStates();
		return $this->states;
	}

	/**
	 * Set the allow point select.
	 *
	 * @param boolean $allowPointSelect The allow point select.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setAllowPointSelect($allowPointSelect) {
		$this->allowPointSelect = $allowPointSelect;
		return $this;
	}

	/**
	 * Set the animation.
	 *
	 * @param boolean $animation The animation.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setAnimation($animation) {
		$this->animation = $animation;
		return $this;
	}

	/**
	 * Set the animation limit.
	 *
	 * @param integer $animationLimit The animation limit.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setAnimationLimit($animationLimit) {
		$this->animationLimit = $animationLimit;
		return $this;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the center.
	 *
	 * @param array $center The center.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setCenter(array $center = null) {
		$this->center = $center;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color index.
	 *
	 * @param integer $colorIndex The color index.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setColorIndex($colorIndex) {
		$this->colorIndex = $colorIndex;
		return $this;
	}

	/**
	 * Set the colors.
	 *
	 * @param array $colors The colors.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setColors(array $colors = null) {
		$this->colors = $colors;
		return $this;
	}

	/**
	 * Set the cursor.
	 *
	 * @param string $cursor The cursor.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setData(array $data = null) {
		$this->data = $data;
		return $this;
	}

	/**
	 * Set the data labels.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsDataLabels $dataLabels The data labels.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setDataLabels(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsDataLabels $dataLabels = null) {
		$this->dataLabels = $dataLabels;
		return $this;
	}

	/**
	 * Set the depth.
	 *
	 * @param integer $depth The depth.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setDepth($depth) {
		$this->depth = $depth;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the enable mouse tracking.
	 *
	 * @param boolean $enableMouseTracking The enable mouse tracking.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setEnableMouseTracking($enableMouseTracking) {
		$this->enableMouseTracking = $enableMouseTracking;
		return $this;
	}

	/**
	 * Set the end angle.
	 *
	 * @param integer $endAngle The end angle.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setEndAngle($endAngle) {
		$this->endAngle = $endAngle;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsEvents $events The events.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setEvents(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the expose element to a11y.
	 *
	 * @param boolean $exposeElementToA11y The expose element to a11y.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setExposeElementToA11y($exposeElementToA11y) {
		$this->exposeElementToA11y = $exposeElementToA11y;
		return $this;
	}

	/**
	 * Set the find nearest point by.
	 *
	 * @param string $findNearestPointBy The find nearest point by.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setGetExtremesFromAll($getExtremesFromAll) {
		$this->getExtremesFromAll = $getExtremesFromAll;
		return $this;
	}

	/**
	 * Set the id.
	 *
	 * @param string $id The id.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Set the ignore hidden point.
	 *
	 * @param boolean $ignoreHiddenPoint The ignore hidden point.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setIgnoreHiddenPoint($ignoreHiddenPoint) {
		$this->ignoreHiddenPoint = $ignoreHiddenPoint;
		return $this;
	}

	/**
	 * Set the index.
	 *
	 * @param integer $index The index.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setIndex($index) {
		$this->index = $index;
		return $this;
	}

	/**
	 * Set the inner size.
	 *
	 * @param string|integer $innerSize The inner size.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setInnerSize($innerSize) {
		$this->innerSize = $innerSize;
		return $this;
	}

	/**
	 * Set the keys.
	 *
	 * @param array $keys The keys.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setKeys(array $keys = null) {
		$this->keys = $keys;
		return $this;
	}

	/**
	 * Set the legend index.
	 *
	 * @param integer $legendIndex The legend index.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setLegendIndex($legendIndex) {
		$this->legendIndex = $legendIndex;
		return $this;
	}

	/**
	 * Set the linked to.
	 *
	 * @param string $linkedTo The linked to.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setLinkedTo($linkedTo) {
		$this->linkedTo = $linkedTo;
		return $this;
	}

	/**
	 * Set the min size.
	 *
	 * @param integer $minSize The min size.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setMinSize($minSize) {
		$this->minSize = $minSize;
		return $this;
	}

	/**
	 * Set the name.
	 *
	 * @param string $name The name.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Set the point.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsPoint $point The point.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setPoint(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsPoint $point = null) {
		$this->point = $point;
		return $this;
	}

	/**
	 * Set the point description formatter.
	 *
	 * @param string $pointDescriptionFormatter The point description formatter.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setPointDescriptionFormatter($pointDescriptionFormatter) {
		$this->pointDescriptionFormatter = $pointDescriptionFormatter;
		return $this;
	}

	/**
	 * Set the selected.
	 *
	 * @param boolean $selected The selected.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setSelected($selected) {
		$this->selected = $selected;
		return $this;
	}

	/**
	 * Set the shadow.
	 *
	 * @param boolean|array $shadow The shadow.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setShadow($shadow) {
		$this->shadow = $shadow;
		return $this;
	}

	/**
	 * Set the show in legend.
	 *
	 * @param boolean $showInLegend The show in legend.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setShowInLegend($showInLegend) {
		$this->showInLegend = $showInLegend;
		return $this;
	}

	/**
	 * Set the size.
	 *
	 * @param string|integer $size The size.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setSize($size) {
		$this->size = $size;
		return $this;
	}

	/**
	 * Set the skip keyboard navigation.
	 *
	 * @param boolean $skipKeyboardNavigation The skip keyboard navigation.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setSkipKeyboardNavigation($skipKeyboardNavigation) {
		$this->skipKeyboardNavigation = $skipKeyboardNavigation;
		return $this;
	}

	/**
	 * Set the sliced offset.
	 *
	 * @param integer $slicedOffset The sliced offset.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setSlicedOffset($slicedOffset) {
		$this->slicedOffset = $slicedOffset;
		return $this;
	}

	/**
	 * Set the start angle.
	 *
	 * @param integer $startAngle The start angle.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setStartAngle($startAngle) {
		$this->startAngle = $startAngle;
		return $this;
	}

	/**
	 * Set the states.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsStates $states The states.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setStates(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pie\HighchartsStates $states = null) {
		$this->states = $states;
		return $this;
	}

	/**
	 * Set the sticky tracking.
	 *
	 * @param boolean $stickyTracking The sticky tracking.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setStickyTracking($stickyTracking) {
		$this->stickyTracking = $stickyTracking;
		return $this;
	}

	/**
	 * Set the tooltip.
	 *
	 * @param array $tooltip The tooltip.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setTooltip(array $tooltip = null) {
		$this->tooltip = $tooltip;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setVisible($visible) {
		$this->visible = $visible;
		return $this;
	}

	/**
	 * Set the z index.
	 *
	 * @param integer $zIndex The z index.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setZIndex($zIndex) {
		$this->zIndex = $zIndex;
		return $this;
	}

	/**
	 * Set the zone axis.
	 *
	 * @param string $zoneAxis The zone axis.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
	 */
	public function setZoneAxis($zoneAxis) {
		$this->zoneAxis = $zoneAxis;
		return $this;
	}

	/**
	 * Set the zones.
	 *
	 * @param array $zones The zones.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPie Returns the highcharts pie.
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

		// Check the data.
		if (!is_null($this->data)) {
			$output["data"] = $this->data;
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

		// Check the id.
		if (!is_null($this->id)) {
			$output["id"] = $this->id;
		}

		// Check the ignore hidden point.
		if (!is_null($this->ignoreHiddenPoint)) {
			$output["ignoreHiddenPoint"] = $this->ignoreHiddenPoint;
		}

		// Check the index.
		if (!is_null($this->index)) {
			$output["index"] = $this->index;
		}

		// Check the inner size.
		if (!is_null($this->innerSize)) {
			$output["innerSize"] = $this->innerSize;
		}

		// Check the keys.
		if (!is_null($this->keys)) {
			$output["keys"] = $this->keys;
		}

		// Check the legend index.
		if (!is_null($this->legendIndex)) {
			$output["legendIndex"] = $this->legendIndex;
		}

		// Check the linked to.
		if (!is_null($this->linkedTo)) {
			$output["linkedTo"] = $this->linkedTo;
		}

		// Check the min size.
		if (!is_null($this->minSize)) {
			$output["minSize"] = $this->minSize;
		}

		// Check the name.
		if (!is_null($this->name)) {
			$output["name"] = $this->name;
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
			$output["tooltip"] = $this->tooltip;
		}

		// Check the type.
		if (!is_null($this->type)) {
			$output["type"] = $this->type;
		}

		// Check the visible.
		if (!is_null($this->visible)) {
			$output["visible"] = $this->visible;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$output["zIndex"] = $this->zIndex;
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
