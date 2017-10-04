<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\ZAxis;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\ZAxis\PlotLines\HighchartsLabel;

/**
 * Highcharts plot lines.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\ZAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsPlotLines implements JsonSerializable {

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
	 * Dash style.
	 *
	 * @var string
	 * @since 1.2
	 */
	private $dashStyle = "Solid";

	/**
	 * Events.
	 *
	 * @var array
	 * @since 1.2
	 */
	private $events;

	/**
	 * Id.
	 *
	 * @var string
	 */
	private $id;

	/**
	 * Label.
	 *
	 * @var HighchartsLabel
	 */
	private $label;

	/**
	 * Value.
	 *
	 * @var integer
	 */
	private $value;

	/**
	 * Width.
	 *
	 * @var integer
	 */
	private $width;

	/**
	 * Z index.
	 *
	 * @var integer
	 * @since 1.2
	 */
	private $zIndex;

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

		// Check the dash style.
		if (!is_null($this->dashStyle)) {
			$this->dashStyle = null;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$this->events = null;
		}

		// Check the id.
		if (!is_null($this->id)) {
			$this->id = null;
		}

		// Check the label.
		if (!is_null($this->label)) {
			$this->label->clear();
		}

		// Check the value.
		if (!is_null($this->value)) {
			$this->value = null;
		}

		// Check the width.
		if (!is_null($this->width)) {
			$this->width = null;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$this->zIndex = null;
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
	 * Get the dash style.
	 *
	 * @return string Returns the dash style.
	 */
	public function getDashStyle() {
		return $this->dashStyle;
	}

	/**
	 * Get the events.
	 *
	 * @return array Returns the events.
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
	 * Get the label.
	 *
	 * @return HighchartsLabel Returns the label.
	 */
	public function getLabel() {
		return $this->label;
	}

	/**
	 * Get the value.
	 *
	 * @return integer Returns the value.
	 */
	public function getValue() {
		return $this->value;
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
	 * Create a new label.
	 *
	 * @return HighchartsLabel Returns the label.
	 */
	public function newLabel() {
		$this->label = new HighchartsLabel();
		return $this->label;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsPlotLines Returns the highcharts plot lines.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return HighchartsPlotLines Returns the highcharts plot lines.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the dash style.
	 *
	 * @param string $dashStyle The dash style.
	 * @return HighchartsPlotLines Returns the highcharts plot lines.
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
	 * Set the events.
	 *
	 * @param array $events The events.
	 * @return HighchartsPlotLines Returns the highcharts plot lines.
	 */
	public function setEvents(array $events = null) {
		$this->events = $events;
		return $this;
	}

	/**
	 * Set the id.
	 *
	 * @param string $id The id.
	 * @return HighchartsPlotLines Returns the highcharts plot lines.
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Set the label.
	 *
	 * @param HighchartsLabel $label The label.
	 * @return HighchartsPlotLines Returns the highcharts plot lines.
	 */
	public function setLabel(HighchartsLabel $label = null) {
		$this->label = $label;
		return $this;
	}

	/**
	 * Set the value.
	 *
	 * @param integer $value The value.
	 * @return HighchartsPlotLines Returns the highcharts plot lines.
	 */
	public function setValue($value) {
		$this->value = $value;
		return $this;
	}

	/**
	 * Set the width.
	 *
	 * @param integer $width The width.
	 * @return HighchartsPlotLines Returns the highcharts plot lines.
	 */
	public function setWidth($width) {
		$this->width = $width;
		return $this;
	}

	/**
	 * Set the z index.
	 *
	 * @param integer $zIndex The z index.
	 * @return HighchartsPlotLines Returns the highcharts plot lines.
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

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the dash style.
		if (!is_null($this->dashStyle)) {
			$output["dashStyle"] = $this->dashStyle;
		}

		// Check the events.
		if (!is_null($this->events)) {
			$output["events"] = $this->events;
		}

		// Check the id.
		if (!is_null($this->id)) {
			$output["id"] = $this->id;
		}

		// Check the label.
		if (!is_null($this->label)) {
			$output["label"] = $this->label->toArray();
		}

		// Check the value.
		if (!is_null($this->value)) {
			$output["value"] = $this->value;
		}

		// Check the width.
		if (!is_null($this->width)) {
			$output["width"] = $this->width;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$output["zIndex"] = $this->zIndex;
		}

		// Return the output.
		return $output;
	}

}
