<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\YAxis;

use JsonSerializable;

/**
 * Highcharts labels.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\YAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsLabels implements JsonSerializable {

	/**
	 * Align.
	 *
	 * @var string
	 */
	private $align = "right";

	/**
	 * Auto rotation.
	 *
	 * @var array
	 * @since 4.1.0
	 */
	private $autoRotation = [-45];

	/**
	 * Auto rotation limit.
	 *
	 * @var integer
	 * @since 4.1.5
	 */
	private $autoRotationLimit = 80;

	/**
	 * Distance.
	 *
	 * @var integer
	 */
	private $distance = -25;

	/**
	 * Enabled.
	 *
	 * @var boolean
	 */
	private $enabled = true;

	/**
	 * Format.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $format = "{value}";

	/**
	 * Formatter.
	 *
	 * @var string
	 */
	private $formatter;

	/**
	 * Overflow.
	 *
	 * @var string
	 * @since 2.2.5
	 * @deprecated
	 */
	private $overflow;

	/**
	 * Padding.
	 *
	 * @var integer
	 */
	private $padding = 5;

	/**
	 * Reserve space.
	 *
	 * @var boolean
	 * @since 4.1.10
	 */
	private $reserveSpace = true;

	/**
	 * Rotation.
	 *
	 * @var integer
	 */
	private $rotation = 0;

	/**
	 * Stagger lines.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $staggerLines;

	/**
	 * Step.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $step;

	/**
	 * Style.
	 *
	 * @var array
	 */
	private $style = ["color" => "#666666", "cursor" => "default", "fontSize" => "11px"];

	/**
	 * Use HTML.
	 *
	 * @var boolean
	 */
	private $useHTML = false;

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
	private $y = 3;

	/**
	 * Z index.
	 *
	 * @var integer
	 */
	private $zIndex = 7;

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

		// Check the align.
		if (!is_null($this->align)) {
			$this->align = null;
		}

		// Check the auto rotation.
		if (!is_null($this->autoRotation)) {
			$this->autoRotation = null;
		}

		// Check the auto rotation limit.
		if (!is_null($this->autoRotationLimit)) {
			$this->autoRotationLimit = null;
		}

		// Check the distance.
		if (!is_null($this->distance)) {
			$this->distance = null;
		}

		// Check the enabled.
		if (!is_null($this->enabled)) {
			$this->enabled = null;
		}

		// Check the format.
		if (!is_null($this->format)) {
			$this->format = null;
		}

		// Check the formatter.
		if (!is_null($this->formatter)) {
			$this->formatter = null;
		}

		// Check the overflow.
		if (!is_null($this->overflow)) {
			$this->overflow = null;
		}

		// Check the padding.
		if (!is_null($this->padding)) {
			$this->padding = null;
		}

		// Check the reserve space.
		if (!is_null($this->reserveSpace)) {
			$this->reserveSpace = null;
		}

		// Check the rotation.
		if (!is_null($this->rotation)) {
			$this->rotation = null;
		}

		// Check the stagger lines.
		if (!is_null($this->staggerLines)) {
			$this->staggerLines = null;
		}

		// Check the step.
		if (!is_null($this->step)) {
			$this->step = null;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$this->style = null;
		}

		// Check the use HTML.
		if (!is_null($this->useHTML)) {
			$this->useHTML = null;
		}

		// Check the x.
		if (!is_null($this->x)) {
			$this->x = null;
		}

		// Check the y.
		if (!is_null($this->y)) {
			$this->y = null;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$this->zIndex = null;
		}
	}

	/**
	 * Get the align.
	 *
	 * @return string Returns the align.
	 */
	public function getAlign() {
		return $this->align;
	}

	/**
	 * Get the auto rotation.
	 *
	 * @return array Returns the auto rotation.
	 */
	public function getAutoRotation() {
		return $this->autoRotation;
	}

	/**
	 * Get the auto rotation limit.
	 *
	 * @return integer Returns the auto rotation limit.
	 */
	public function getAutoRotationLimit() {
		return $this->autoRotationLimit;
	}

	/**
	 * Get the distance.
	 *
	 * @return integer Returns the distance.
	 */
	public function getDistance() {
		return $this->distance;
	}

	/**
	 * Get the enabled.
	 *
	 * @return boolean Returns the enabled.
	 */
	public function getEnabled() {
		return $this->enabled;
	}

	/**
	 * Get the format.
	 *
	 * @return string Returns the format.
	 */
	public function getFormat() {
		return $this->format;
	}

	/**
	 * Get the formatter.
	 *
	 * @return string Returns the formatter.
	 */
	public function getFormatter() {
		return $this->formatter;
	}

	/**
	 * Get the overflow.
	 *
	 * @return string Returns the overflow.
	 * @deprecated
	 */
	public function getOverflow() {
		return $this->overflow;
	}

	/**
	 * Get the padding.
	 *
	 * @return integer Returns the padding.
	 */
	public function getPadding() {
		return $this->padding;
	}

	/**
	 * Get the reserve space.
	 *
	 * @return boolean Returns the reserve space.
	 */
	public function getReserveSpace() {
		return $this->reserveSpace;
	}

	/**
	 * Get the rotation.
	 *
	 * @return integer Returns the rotation.
	 */
	public function getRotation() {
		return $this->rotation;
	}

	/**
	 * Get the stagger lines.
	 *
	 * @return integer Returns the stagger lines.
	 */
	public function getStaggerLines() {
		return $this->staggerLines;
	}

	/**
	 * Get the step.
	 *
	 * @return integer Returns the step.
	 */
	public function getStep() {
		return $this->step;
	}

	/**
	 * Get the style.
	 *
	 * @return array Returns the style.
	 */
	public function getStyle() {
		return $this->style;
	}

	/**
	 * Get the use HTML.
	 *
	 * @return boolean Returns the use HTML.
	 */
	public function getUseHTML() {
		return $this->useHTML;
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
	 * Set the align.
	 *
	 * @param string $align The align.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setAlign($align) {
		switch ($align) {
			case "center":
			case "left":
			case "right":
				$this->align = $align;
				break;
		}
		return $this;
	}

	/**
	 * Set the auto rotation.
	 *
	 * @param array $autoRotation The auto rotation.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setAutoRotation(array $autoRotation = null) {
		$this->autoRotation = $autoRotation;
		return $this;
	}

	/**
	 * Set the auto rotation limit.
	 *
	 * @param integer $autoRotationLimit The auto rotation limit.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setAutoRotationLimit($autoRotationLimit) {
		$this->autoRotationLimit = $autoRotationLimit;
		return $this;
	}

	/**
	 * Set the distance.
	 *
	 * @param integer $distance The distance.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setDistance($distance) {
		$this->distance = $distance;
		return $this;
	}

	/**
	 * Set the enabled.
	 *
	 * @param boolean $enabled The enabled.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		return $this;
	}

	/**
	 * Set the format.
	 *
	 * @param string $format The format.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setFormat($format) {
		$this->format = $format;
		return $this;
	}

	/**
	 * Set the formatter.
	 *
	 * @param string $formatter The formatter.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setFormatter($formatter) {
		$this->formatter = $formatter;
		return $this;
	}

	/**
	 * Set the overflow.
	 *
	 * @param string $overflow The overflow.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 * @deprecated
	 */
	public function setOverflow($overflow) {
		switch ($overflow) {
			case null:
			case "justify":
				$this->overflow = $overflow;
				break;
		}
		return $this;
	}

	/**
	 * Set the padding.
	 *
	 * @param integer $padding The padding.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setPadding($padding) {
		$this->padding = $padding;
		return $this;
	}

	/**
	 * Set the reserve space.
	 *
	 * @param boolean $reserveSpace The reserve space.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setReserveSpace($reserveSpace) {
		$this->reserveSpace = $reserveSpace;
		return $this;
	}

	/**
	 * Set the rotation.
	 *
	 * @param integer $rotation The rotation.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setRotation($rotation) {
		$this->rotation = $rotation;
		return $this;
	}

	/**
	 * Set the stagger lines.
	 *
	 * @param integer $staggerLines The stagger lines.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setStaggerLines($staggerLines) {
		$this->staggerLines = $staggerLines;
		return $this;
	}

	/**
	 * Set the step.
	 *
	 * @param integer $step The step.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setStep($step) {
		$this->step = $step;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
		return $this;
	}

	/**
	 * Set the use HTML.
	 *
	 * @param boolean $useHTML The use HTML.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setUseHTML($useHTML) {
		$this->useHTML = $useHTML;
		return $this;
	}

	/**
	 * Set the x.
	 *
	 * @param integer $x The x.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setX($x) {
		$this->x = $x;
		return $this;
	}

	/**
	 * Set the y.
	 *
	 * @param integer $y The y.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
	 */
	public function setY($y) {
		$this->y = $y;
		return $this;
	}

	/**
	 * Set the z index.
	 *
	 * @param integer $zIndex The z index.
	 * @return \WBW\HighchartsBundle\API\Chart\YAxis\HighchartsLabels Returns the highcharts labels.
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

		// Check the align.
		if (!is_null($this->align)) {
			$output["align"] = $this->align;
		}

		// Check the auto rotation.
		if (!is_null($this->autoRotation)) {
			$output["autoRotation"] = $this->autoRotation;
		}

		// Check the auto rotation limit.
		if (!is_null($this->autoRotationLimit)) {
			$output["autoRotationLimit"] = $this->autoRotationLimit;
		}

		// Check the distance.
		if (!is_null($this->distance)) {
			$output["distance"] = $this->distance;
		}

		// Check the enabled.
		if (!is_null($this->enabled)) {
			$output["enabled"] = $this->enabled;
		}

		// Check the format.
		if (!is_null($this->format)) {
			$output["format"] = $this->format;
		}

		// Check the formatter.
		if (!is_null($this->formatter)) {
			$output["formatter"] = $this->formatter;
		}

		// Check the padding.
		if (!is_null($this->padding)) {
			$output["padding"] = $this->padding;
		}

		// Check the reserve space.
		if (!is_null($this->reserveSpace)) {
			$output["reserveSpace"] = $this->reserveSpace;
		}

		// Check the rotation.
		if (!is_null($this->rotation)) {
			$output["rotation"] = $this->rotation;
		}

		// Check the stagger lines.
		if (!is_null($this->staggerLines)) {
			$output["staggerLines"] = $this->staggerLines;
		}

		// Check the step.
		if (!is_null($this->step)) {
			$output["step"] = $this->step;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$output["style"] = $this->style;
		}

		// Check the use HTML.
		if (!is_null($this->useHTML)) {
			$output["useHTML"] = $this->useHTML;
		}

		// Check the x.
		if (!is_null($this->x)) {
			$output["x"] = $this->x;
		}

		// Check the y.
		if (!is_null($this->y)) {
			$output["y"] = $this->y;
		}

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$output["zIndex"] = $this->zIndex;
		}

		// Return the output.
		return $output;
	}

}
