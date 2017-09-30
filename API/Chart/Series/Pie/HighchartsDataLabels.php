<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Series\Pie;

use JsonSerializable;

/**
 * Highcharts data labels.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Series\Pie
 * @version 5.0.14
 * @final
 */
final class HighchartsDataLabels implements JsonSerializable {

	/**
	 * Background color.
	 *
	 * @var string
	 * @since 2.2.1
	 */
	private $backgroundColor;

	/**
	 * Border color.
	 *
	 * @var string
	 * @since 2.2.1
	 */
	private $borderColor;

	/**
	 * Border radius.
	 *
	 * @var integer
	 * @since 2.2.1
	 */
	private $borderRadius = 0;

	/**
	 * Border width.
	 *
	 * @var integer
	 * @since 2.2.1
	 */
	private $borderWidth = 0;

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
	 * Connector color.
	 *
	 * @var string
	 * @since 2.1
	 */
	private $connectorColor = "{point.color}";

	/**
	 * Connector padding.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $connectorPadding = 5;

	/**
	 * Connector width.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $connectorWidth = 1;

	/**
	 * Crop.
	 *
	 * @var boolean
	 * @since 2.3.3
	 */
	private $crop = true;

	/**
	 * Defer.
	 *
	 * @var boolean
	 * @since 4.0
	 */
	private $defer = true;

	/**
	 * Distance.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $distance = 30;

	/**
	 * Enabled.
	 *
	 * @var boolean
	 * @since 2.1
	 */
	private $enabled = true;

	/**
	 * Format.
	 *
	 * @var string
	 * @since 3.0
	 */
	private $format = "{y}";

	/**
	 * Formatter.
	 *
	 * @var string
	 */
	private $formatter;

	/**
	 * Inside.
	 *
	 * @var boolean
	 * @since 3.0
	 */
	private $inside;

	/**
	 * Overflow.
	 *
	 * @var string
	 * @since 3.0.6
	 */
	private $overflow = "justify";

	/**
	 * Padding.
	 *
	 * @var integer
	 * @since 2.2.1
	 */
	private $padding = 5;

	/**
	 * Rotation.
	 *
	 * @var integer
	 */
	private $rotation = 0;

	/**
	 * Shadow.
	 *
	 * @var boolean|array
	 * @since 2.2.1
	 */
	private $shadow = false;

	/**
	 * Shape.
	 *
	 * @var string
	 * @since 4.1.2
	 */
	private $shape = "square";

	/**
	 * Soft connector.
	 *
	 * @var boolean
	 * @since 2.1.7
	 */
	private $softConnector = true;

	/**
	 * Style.
	 *
	 * @var array
	 * @since 4.1.0
	 */
	private $style = ["color" => "contrast", "fontSize" => "11px", "fontWeight" => "bold", "textOutline" => "1px contrast"];

	/**
	 * Use HTML.
	 *
	 * @var boolean
	 */
	private $useHTML = false;

	/**
	 * Vertical align.
	 *
	 * @var string
	 * @since 2.3.3
	 */
	private $verticalAlign;

	/**
	 * X.
	 *
	 * @var integer
	 */
	private $x = 0;

	/**
	 * Y.
	 *
	 * @var integer
	 */
	private $y = -6;

	/**
	 * Z index.
	 *
	 * @var integer
	 * @since 2.3.5
	 */
	private $zIndex = 6;

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

		// Check the background color.
		if (!is_null($this->backgroundColor)) {
			$this->backgroundColor = null;
		}

		// Check the border color.
		if (!is_null($this->borderColor)) {
			$this->borderColor = null;
		}

		// Check the border radius.
		if (!is_null($this->borderRadius)) {
			$this->borderRadius = null;
		}

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$this->borderWidth = null;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$this->className = null;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$this->color = null;
		}

		// Check the connector color.
		if (!is_null($this->connectorColor)) {
			$this->connectorColor = null;
		}

		// Check the connector padding.
		if (!is_null($this->connectorPadding)) {
			$this->connectorPadding = null;
		}

		// Check the connector width.
		if (!is_null($this->connectorWidth)) {
			$this->connectorWidth = null;
		}

		// Check the crop.
		if (!is_null($this->crop)) {
			$this->crop = null;
		}

		// Check the defer.
		if (!is_null($this->defer)) {
			$this->defer = null;
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

		// Check the inside.
		if (!is_null($this->inside)) {
			$this->inside = null;
		}

		// Check the overflow.
		if (!is_null($this->overflow)) {
			$this->overflow = null;
		}

		// Check the padding.
		if (!is_null($this->padding)) {
			$this->padding = null;
		}

		// Check the rotation.
		if (!is_null($this->rotation)) {
			$this->rotation = null;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$this->shadow = null;
		}

		// Check the shape.
		if (!is_null($this->shape)) {
			$this->shape = null;
		}

		// Check the soft connector.
		if (!is_null($this->softConnector)) {
			$this->softConnector = null;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$this->style = null;
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

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$this->zIndex = null;
		}
	}

	/**
	 * Get the background color.
	 *
	 * @return string Returns the background color.
	 */
	public function getBackgroundColor() {
		return $this->backgroundColor;
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
	 * Get the border radius.
	 *
	 * @return integer Returns the border radius.
	 */
	public function getBorderRadius() {
		return $this->borderRadius;
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
	 * Get the connector color.
	 *
	 * @return string Returns the connector color.
	 */
	public function getConnectorColor() {
		return $this->connectorColor;
	}

	/**
	 * Get the connector padding.
	 *
	 * @return integer Returns the connector padding.
	 */
	public function getConnectorPadding() {
		return $this->connectorPadding;
	}

	/**
	 * Get the connector width.
	 *
	 * @return integer Returns the connector width.
	 */
	public function getConnectorWidth() {
		return $this->connectorWidth;
	}

	/**
	 * Get the crop.
	 *
	 * @return boolean Returns the crop.
	 */
	public function getCrop() {
		return $this->crop;
	}

	/**
	 * Get the defer.
	 *
	 * @return boolean Returns the defer.
	 */
	public function getDefer() {
		return $this->defer;
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
	 * Get the inside.
	 *
	 * @return boolean Returns the inside.
	 */
	public function getInside() {
		return $this->inside;
	}

	/**
	 * Get the overflow.
	 *
	 * @return string Returns the overflow.
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
	 * Get the rotation.
	 *
	 * @return integer Returns the rotation.
	 */
	public function getRotation() {
		return $this->rotation;
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
	 * Get the shape.
	 *
	 * @return string Returns the shape.
	 */
	public function getShape() {
		return $this->shape;
	}

	/**
	 * Get the soft connector.
	 *
	 * @return boolean Returns the soft connector.
	 */
	public function getSoftConnector() {
		return $this->softConnector;
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
	 * Set the background color.
	 *
	 * @param string $backgroundColor The background color.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setBackgroundColor($backgroundColor) {
		$this->backgroundColor = $backgroundColor;
		return $this;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border radius.
	 *
	 * @param integer $borderRadius The border radius.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setBorderRadius($borderRadius) {
		$this->borderRadius = $borderRadius;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the class name.
	 *
	 * @param string $className The class name.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setClassName($className) {
		$this->className = $className;
		return $this;
	}

	/**
	 * Set the color.
	 *
	 * @param string $color The color.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setColor($color) {
		$this->color = $color;
		return $this;
	}

	/**
	 * Set the connector color.
	 *
	 * @param string $connectorColor The connector color.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setConnectorColor($connectorColor) {
		$this->connectorColor = $connectorColor;
		return $this;
	}

	/**
	 * Set the connector padding.
	 *
	 * @param integer $connectorPadding The connector padding.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setConnectorPadding($connectorPadding) {
		$this->connectorPadding = $connectorPadding;
		return $this;
	}

	/**
	 * Set the connector width.
	 *
	 * @param integer $connectorWidth The connector width.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setConnectorWidth($connectorWidth) {
		$this->connectorWidth = $connectorWidth;
		return $this;
	}

	/**
	 * Set the crop.
	 *
	 * @param boolean $crop The crop.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setCrop($crop) {
		$this->crop = $crop;
		return $this;
	}

	/**
	 * Set the defer.
	 *
	 * @param boolean $defer The defer.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setDefer($defer) {
		$this->defer = $defer;
		return $this;
	}

	/**
	 * Set the distance.
	 *
	 * @param integer $distance The distance.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setDistance($distance) {
		$this->distance = $distance;
		return $this;
	}

	/**
	 * Set the enabled.
	 *
	 * @param boolean $enabled The enabled.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		return $this;
	}

	/**
	 * Set the format.
	 *
	 * @param string $format The format.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setFormat($format) {
		$this->format = $format;
		return $this;
	}

	/**
	 * Set the formatter.
	 *
	 * @param string $formatter The formatter.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setFormatter($formatter) {
		$this->formatter = $formatter;
		return $this;
	}

	/**
	 * Set the inside.
	 *
	 * @param boolean $inside The inside.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setInside($inside) {
		$this->inside = $inside;
		return $this;
	}

	/**
	 * Set the overflow.
	 *
	 * @param string $overflow The overflow.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setOverflow($overflow) {
		$this->overflow = $overflow;
		return $this;
	}

	/**
	 * Set the padding.
	 *
	 * @param integer $padding The padding.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setPadding($padding) {
		$this->padding = $padding;
		return $this;
	}

	/**
	 * Set the rotation.
	 *
	 * @param integer $rotation The rotation.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setRotation($rotation) {
		$this->rotation = $rotation;
		return $this;
	}

	/**
	 * Set the shadow.
	 *
	 * @param boolean|array $shadow The shadow.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setShadow($shadow) {
		$this->shadow = $shadow;
		return $this;
	}

	/**
	 * Set the shape.
	 *
	 * @param string $shape The shape.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setShape($shape) {
		$this->shape = $shape;
		return $this;
	}

	/**
	 * Set the soft connector.
	 *
	 * @param boolean $softConnector The soft connector.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setSoftConnector($softConnector) {
		$this->softConnector = $softConnector;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
		return $this;
	}

	/**
	 * Set the use HTML.
	 *
	 * @param boolean $useHTML The use HTML.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setUseHTML($useHTML) {
		$this->useHTML = $useHTML;
		return $this;
	}

	/**
	 * Set the vertical align.
	 *
	 * @param string $verticalAlign The vertical align.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setVerticalAlign($verticalAlign) {
		$this->verticalAlign = $verticalAlign;
		return $this;
	}

	/**
	 * Set the x.
	 *
	 * @param integer $x The x.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setX($x) {
		$this->x = $x;
		return $this;
	}

	/**
	 * Set the y.
	 *
	 * @param integer $y The y.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
	 */
	public function setY($y) {
		$this->y = $y;
		return $this;
	}

	/**
	 * Set the z index.
	 *
	 * @param integer $zIndex The z index.
	 * @return HighchartsDataLabels Returns the highcharts data labels.
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

		// Check the background color.
		if (!is_null($this->backgroundColor)) {
			$output["backgroundColor"] = $this->backgroundColor;
		}

		// Check the border color.
		if (!is_null($this->borderColor)) {
			$output["borderColor"] = $this->borderColor;
		}

		// Check the border radius.
		if (!is_null($this->borderRadius)) {
			$output["borderRadius"] = $this->borderRadius;
		}

		// Check the border width.
		if (!is_null($this->borderWidth)) {
			$output["borderWidth"] = $this->borderWidth;
		}

		// Check the class name.
		if (!is_null($this->className)) {
			$output["className"] = $this->className;
		}

		// Check the color.
		if (!is_null($this->color)) {
			$output["color"] = $this->color;
		}

		// Check the connector color.
		if (!is_null($this->connectorColor)) {
			$output["connectorColor"] = $this->connectorColor;
		}

		// Check the connector padding.
		if (!is_null($this->connectorPadding)) {
			$output["connectorPadding"] = $this->connectorPadding;
		}

		// Check the connector width.
		if (!is_null($this->connectorWidth)) {
			$output["connectorWidth"] = $this->connectorWidth;
		}

		// Check the crop.
		if (!is_null($this->crop)) {
			$output["crop"] = $this->crop;
		}

		// Check the defer.
		if (!is_null($this->defer)) {
			$output["defer"] = $this->defer;
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

		// Check the inside.
		if (!is_null($this->inside)) {
			$output["inside"] = $this->inside;
		}

		// Check the overflow.
		if (!is_null($this->overflow)) {
			$output["overflow"] = $this->overflow;
		}

		// Check the padding.
		if (!is_null($this->padding)) {
			$output["padding"] = $this->padding;
		}

		// Check the rotation.
		if (!is_null($this->rotation)) {
			$output["rotation"] = $this->rotation;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$output["shadow"] = $this->shadow;
		}

		// Check the shape.
		if (!is_null($this->shape)) {
			$output["shape"] = $this->shape;
		}

		// Check the soft connector.
		if (!is_null($this->softConnector)) {
			$output["softConnector"] = $this->softConnector;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$output["style"] = $this->style;
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

		// Check the z index.
		if (!is_null($this->zIndex)) {
			$output["zIndex"] = $this->zIndex;
		}

		// Return the output.
		return $output;
	}
}

