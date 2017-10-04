<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Series\Scatter;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\Series\Scatter\Data\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\Series\Scatter\Data\HighchartsMarker;

/**
 * Highcharts data.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Series\Scatter
 * @version 5.0.14
 * @final
 */
final class HighchartsData implements JsonSerializable {

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
	 * Data labels.
	 *
	 * @var array
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
	 * Drilldown.
	 *
	 * @var string
	 * @since 3.0.8
	 */
	private $drilldown;

	/**
	 * Events.
	 *
	 * @var HighchartsEvents
	 */
	private $events;

	/**
	 * Id.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $id;

	/**
	 * Labelrank.
	 *
	 * @var integer
	 */
	private $labelrank;

	/**
	 * Marker.
	 *
	 * @var HighchartsMarker
	 */
	private $marker;

	/**
	 * Name.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Selected.
	 *
	 * @var boolean
	 */
	private $selected = false;

	/**
	 * X.
	 *
	 * @var integer
	 */
	private $x;

	/**
	 * Y.
	 *
	 * @var integer
	 */
	private $y;

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

		// Check the data labels.
		if (!is_null($this->dataLabels)) {
			$this->dataLabels = null;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$this->description = null;
		}

		// Check the drilldown.
		if (!is_null($this->drilldown)) {
			$this->drilldown = null;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$this->events->clear();
		}

		// Check the id.
		if (!is_null($this->id)) {
			$this->id = null;
		}

		// Check the labelrank.
		if (!is_null($this->labelrank)) {
			$this->labelrank = null;
		}

		// Check the marker.
		if (!is_null($this->marker)) {
			$this->marker->clear();
		}

		// Check the name.
		if (!is_null($this->name)) {
			$this->name = null;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$this->selected = null;
		}

		// Check the x.
		if (!is_null($this->x)) {
			$this->x = null;
		}

		// Check the y.
		if (!is_null($this->y)) {
			$this->y = null;
		}
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
	 * Get the drilldown.
	 *
	 * @return string Returns the drilldown.
	 */
	public function getDrilldown() {
		return $this->drilldown;
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
	 * Get the id.
	 *
	 * @return string Returns the id.
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get the labelrank.
	 *
	 * @return integer Returns the labelrank.
	 */
	public function getLabelrank() {
		return $this->labelrank;
	}

	/**
	 * Get the marker.
	 *
	 * @return HighchartsMarker Returns the marker.
	 */
	public function getMarker() {
		return $this->marker;
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
	 * Get the selected.
	 *
	 * @return boolean Returns the selected.
	 */
	public function getSelected() {
		return $this->selected;
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
	 * @return HighchartsEvents Returns the events.
	 */
	public function newEvents() {
		$this->events = new HighchartsEvents();
		return $this->events;
	}

	/**
	 * Create a new marker.
	 *
	 * @return HighchartsMarker Returns the marker.
	 */
	public function newMarker() {
		$this->marker = new HighchartsMarker();
		return $this->marker;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the color index.
	 *
	 * @param integer $colorIndex The color index.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setColorIndex($colorIndex) {
		$this->colorIndex = $colorIndex;
		return $this;
	}

	/**
	 * Set the data labels.
	 *
	 * @param array $dataLabels The data labels.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setDataLabels(array $dataLabels = null) {
		$this->dataLabels = $dataLabels;
		return $this;
	}

	/**
	 * Set the description.
	 *
	 * @param string $description The description.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}

	/**
	 * Set the drilldown.
	 *
	 * @param string $drilldown The drilldown.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setDrilldown($drilldown) {
		$this->drilldown = $drilldown;
		return $this;
	}

	/**
	 * Set the events.
	 *
	 * @param HighchartsEvents $events The events.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setEvents(HighchartsEvents $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the id.
	 *
	 * @param string $id The id.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Set the labelrank.
	 *
	 * @param integer $labelrank The labelrank.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setLabelrank($labelrank) {
		$this->labelrank = $labelrank;
		return $this;
	}

	/**
	 * Set the marker.
	 *
	 * @param HighchartsMarker $marker The marker.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setMarker(HighchartsMarker $marker = null) {
		$this->marker = $marker;
		return $this;
	}

	/**
	 * Set the name.
	 *
	 * @param string $name The name.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setName($name) {
		$this->name = $name;
		return $this;
	}

	/**
	 * Set the selected.
	 *
	 * @param boolean $selected The selected.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setSelected($selected) {
		$this->selected = $selected;
		return $this;
	}

	/**
	 * Set the x.
	 *
	 * @param integer $x The x.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setX($x) {
		$this->x = $x;
		return $this;
	}

	/**
	 * Set the y.
	 *
	 * @param integer $y The y.
	 * @return HighchartsData Returns the highcharts data.
	 */
	public function setY($y) {
		$this->y = $y;
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

		// Check the data labels.
		if (!is_null($this->dataLabels)) {
			$output["dataLabels"] = $this->dataLabels;
		}

		// Check the description.
		if (!is_null($this->description)) {
			$output["description"] = $this->description;
		}

		// Check the drilldown.
		if (!is_null($this->drilldown)) {
			$output["drilldown"] = $this->drilldown;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$output["events"] = $this->events->toArray();
		}

		// Check the id.
		if (!is_null($this->id)) {
			$output["id"] = $this->id;
		}

		// Check the labelrank.
		if (!is_null($this->labelrank)) {
			$output["labelrank"] = $this->labelrank;
		}

		// Check the marker.
		if (!is_null($this->marker)) {
			$output["marker"] = $this->marker->toArray();
		}

		// Check the name.
		if (!is_null($this->name)) {
			$output["name"] = $this->name;
		}

		// Check the selected.
		if (!is_null($this->selected)) {
			$output["selected"] = $this->selected;
		}

		// Check the x.
		if (!is_null($this->x)) {
			$output["x"] = $this->x;
		}

		// Check the y.
		if (!is_null($this->y)) {
			$output["y"] = $this->y;
		}

		// Return the output.
		return $output;
	}

}
