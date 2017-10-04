<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\YAxis\PlotBands;

use JsonSerializable;

/**
 * Highcharts label.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\YAxis\PlotBands
 * @version 5.0.14
 * @final
 */
final class HighchartsLabel implements JsonSerializable {

	/**
	 * Align.
	 *
	 * @var string
	 * @since 2.1
	 */
	private $align = "center";

	/**
	 * Rotation.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $rotation = 0;

	/**
	 * Style.
	 *
	 * @var array
	 * @since 2.1
	 */
	private $style;

	/**
	 * Text.
	 *
	 * @var string
	 * @since 2.1
	 */
	private $text;

	/**
	 * Text align.
	 *
	 * @var string
	 * @since 2.1
	 */
	private $textAlign;

	/**
	 * Use HTML.
	 *
	 * @var boolean
	 * @since 3.0.3
	 */
	private $useHTML = false;

	/**
	 * Vertical align.
	 *
	 * @var string
	 * @since 2.1
	 */
	private $verticalAlign = "top";

	/**
	 * X.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $x;

	/**
	 * Y.
	 *
	 * @var integer
	 * @since 2.1
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

		// Check the align.
		if (!is_null($this->align)) {
			$this->align = null;
		}

		// Check the rotation.
		if (!is_null($this->rotation)) {
			$this->rotation = null;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$this->style = null;
		}

		// Check the text.
		if (!is_null($this->text)) {
			$this->text = null;
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
	 * Get the text.
	 *
	 * @return string Returns the text.
	 */
	public function getText() {
		return $this->text;
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
	 * @return HighchartsLabel Returns the highcharts label.
	 */
	public function setAlign($align) {
		$this->align = $align;
		return $this;
	}

	/**
	 * Set the rotation.
	 *
	 * @param integer $rotation The rotation.
	 * @return HighchartsLabel Returns the highcharts label.
	 */
	public function setRotation($rotation) {
		$this->rotation = $rotation;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return HighchartsLabel Returns the highcharts label.
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
		return $this;
	}

	/**
	 * Set the text.
	 *
	 * @param string $text The text.
	 * @return HighchartsLabel Returns the highcharts label.
	 */
	public function setText($text) {
		$this->text = $text;
		return $this;
	}

	/**
	 * Set the text align.
	 *
	 * @param string $textAlign The text align.
	 * @return HighchartsLabel Returns the highcharts label.
	 */
	public function setTextAlign($textAlign) {
		$this->textAlign = $textAlign;
		return $this;
	}

	/**
	 * Set the use HTML.
	 *
	 * @param boolean $useHTML The use HTML.
	 * @return HighchartsLabel Returns the highcharts label.
	 */
	public function setUseHTML($useHTML) {
		$this->useHTML = $useHTML;
		return $this;
	}

	/**
	 * Set the vertical align.
	 *
	 * @param string $verticalAlign The vertical align.
	 * @return HighchartsLabel Returns the highcharts label.
	 */
	public function setVerticalAlign($verticalAlign) {
		$this->verticalAlign = $verticalAlign;
		return $this;
	}

	/**
	 * Set the x.
	 *
	 * @param integer $x The x.
	 * @return HighchartsLabel Returns the highcharts label.
	 */
	public function setX($x) {
		$this->x = $x;
		return $this;
	}

	/**
	 * Set the y.
	 *
	 * @param integer $y The y.
	 * @return HighchartsLabel Returns the highcharts label.
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

		// Check the rotation.
		if (!is_null($this->rotation)) {
			$output["rotation"] = $this->rotation;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$output["style"] = $this->style;
		}

		// Check the text.
		if (!is_null($this->text)) {
			$output["text"] = $this->text;
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
