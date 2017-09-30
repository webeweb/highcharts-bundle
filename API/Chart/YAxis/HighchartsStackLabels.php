<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\YAxis;

use JsonSerializable;

/**
 * Highcharts stack labels.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart\YAxis
 * @version 5.0.14
 * @final
 */
final class HighchartsStackLabels implements JsonSerializable {

	/**
	 * Align.
	 *
	 * @var string
	 * @since 2.1.5
	 */
	private $align;

	/**
	 * Enabled.
	 *
	 * @var boolean
	 * @since 2.1.5
	 */
	private $enabled = false;

	/**
	 * Format.
	 *
	 * @var string
	 * @since 3.0.2
	 */
	private $format = "{total}";

	/**
	 * Formatter.
	 *
	 * @var string
	 * @since 2.1.5
	 */
	private $formatter;

	/**
	 * Rotation.
	 *
	 * @var integer
	 * @since 2.1.5
	 */
	private $rotation = 0;

	/**
	 * Style.
	 *
	 * @var array
	 * @since 2.1.5
	 */
	private $style = ["color" => "#000000", "fontSize" => "11px", "fontWeight" => "bold", "textShadow" => "1px 1px contrast, -1px -1px contrast, -1px 1px contrast, 1px -1px contrast"];

	/**
	 * Text align.
	 *
	 * @var string
	 * @since 2.1.5
	 */
	private $textAlign;

	/**
	 * Use HTML.
	 *
	 * @var boolean
	 * @since 3.0
	 */
	private $useHTML = false;

	/**
	 * Vertical align.
	 *
	 * @var string
	 * @since 2.1.5
	 */
	private $verticalAlign;

	/**
	 * X.
	 *
	 * @var integer
	 * @since 2.1.5
	 */
	private $x;

	/**
	 * Y.
	 *
	 * @var integer
	 * @since 2.1.5
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
	 */
	public function clear() {

		// Check the align.
		if (!is_null($this->align)) {
			$this->align = null;
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

		// Check the rotation.
		if (!is_null($this->rotation)) {
			$this->rotation = null;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$this->style = null;
		}

		// Check the text align.
		if (!is_null($this->textAlign)) {
			$this->textAlign = null;
		}

		// Check the use HTML.
		if (!is_null($this->useHTML)) {
			$this->useHTML = null;
		}

		// Check the vertical align.
		if (!is_null($this->verticalAlign)) {
			$this->verticalAlign = null;
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
	 * Get the align.
	 *
	 * @return string Returns the align.
	 */
	public function getAlign() {
		return $this->align;
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
	 * Get the rotation.
	 *
	 * @return integer Returns the rotation.
	 */
	public function getRotation() {
		return $this->rotation;
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
	 * Get the text align.
	 *
	 * @return string Returns the text align.
	 */
	public function getTextAlign() {
		return $this->textAlign;
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
	 * Get the vertical align.
	 *
	 * @return string Returns the vertical align.
	 */
	public function getVerticalAlign() {
		return $this->verticalAlign;
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
	 * Set the align.
	 *
	 * @param string $align The align.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
	 */
	public function setAlign($align) {
		$this->align = $align;
		return $this;
	}

	/**
	 * Set the enabled.
	 *
	 * @param boolean $enabled The enabled.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		return $this;
	}

	/**
	 * Set the format.
	 *
	 * @param string $format The format.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
	 */
	public function setFormat($format) {
		$this->format = $format;
		return $this;
	}

	/**
	 * Set the formatter.
	 *
	 * @param string $formatter The formatter.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
	 */
	public function setFormatter($formatter) {
		$this->formatter = $formatter;
		return $this;
	}

	/**
	 * Set the rotation.
	 *
	 * @param integer $rotation The rotation.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
	 */
	public function setRotation($rotation) {
		$this->rotation = $rotation;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
		return $this;
	}

	/**
	 * Set the text align.
	 *
	 * @param string $textAlign The text align.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
	 */
	public function setTextAlign($textAlign) {
		$this->textAlign = $textAlign;
		return $this;
	}

	/**
	 * Set the use HTML.
	 *
	 * @param boolean $useHTML The use HTML.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
	 */
	public function setUseHTML($useHTML) {
		$this->useHTML = $useHTML;
		return $this;
	}

	/**
	 * Set the vertical align.
	 *
	 * @param string $verticalAlign The vertical align.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
	 */
	public function setVerticalAlign($verticalAlign) {
		$this->verticalAlign = $verticalAlign;
		return $this;
	}

	/**
	 * Set the x.
	 *
	 * @param integer $x The x.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
	 */
	public function setX($x) {
		$this->x = $x;
		return $this;
	}

	/**
	 * Set the y.
	 *
	 * @param integer $y The y.
	 * @return HighchartsStackLabels Returns the highcharts stack labels.
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

		// Check the align.
		if (!is_null($this->align)) {
			$output["align"] = $this->align;
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

		// Check the rotation.
		if (!is_null($this->rotation)) {
			$output["rotation"] = $this->rotation;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$output["style"] = $this->style;
		}

		// Check the text align.
		if (!is_null($this->textAlign)) {
			$output["textAlign"] = $this->textAlign;
		}

		// Check the use HTML.
		if (!is_null($this->useHTML)) {
			$output["useHTML"] = $this->useHTML;
		}

		// Check the vertical align.
		if (!is_null($this->verticalAlign)) {
			$output["verticalAlign"] = $this->verticalAlign;
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

