<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart;

use JsonSerializable;

/**
 * Highcharts legend.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsLegend implements JsonSerializable {

	/**
	 * Align.
	 *
	 * @var string
	 * @since 2.0
	 */
	private $align = "center";

	/**
	 * Background color.
	 *
	 * @var string
	 */
	private $backgroundColor;

	/**
	 * Border color.
	 *
	 * @var string
	 */
	private $borderColor = "#999999";

	/**
	 * Border radius.
	 *
	 * @var integer
	 */
	private $borderRadius = 0;

	/**
	 * Border width.
	 *
	 * @var integer
	 */
	private $borderWidth = 0;

	/**
	 * Enabled.
	 *
	 * @var boolean
	 */
	private $enabled = true;

	/**
	 * Floating.
	 *
	 * @var boolean
	 * @since 2.1
	 */
	private $floating = false;

	/**
	 * Item distance.
	 *
	 * @var integer
	 * @since 3.0.3
	 */
	private $itemDistance = 20;

	/**
	 * Item hidden style.
	 *
	 * @var array
	 */
	private $itemHiddenStyle = ["color" => "#cccccc"];

	/**
	 * Item hover style.
	 *
	 * @var array
	 */
	private $itemHoverStyle = ["color" => "#000000"];

	/**
	 * Item margin bottom.
	 *
	 * @var integer
	 * @since 2.2.0
	 */
	private $itemMarginBottom = 0;

	/**
	 * Item margin top.
	 *
	 * @var integer
	 * @since 2.2.0
	 */
	private $itemMarginTop = 0;

	/**
	 * Item style.
	 *
	 * @var array
	 */
	private $itemStyle = ["color" => "#333333", "cursor" => "pointer", "fontSize" => "12px", "fontWeight" => "bold", "textOverflow" => "ellipsis"];

	/**
	 * Item width.
	 *
	 * @var integer
	 * @since 2.0
	 */
	private $itemWidth;

	/**
	 * Label format.
	 *
	 * @var string
	 * @since 1.3
	 */
	private $labelFormat = "{name}";

	/**
	 * Label formatter.
	 *
	 * @var string
	 */
	private $labelFormatter;

	/**
	 * Layout.
	 *
	 * @var string
	 */
	private $layout = "horizontal";

	/**
	 * Line height.
	 *
	 * @var integer
	 * @since 2.0
	 */
	private $lineHeight = 16;

	/**
	 * Margin.
	 *
	 * @var integer
	 * @since 2.1
	 */
	private $margin = 12;

	/**
	 * Max height.
	 *
	 * @var integer
	 * @since 2.3.0
	 */
	private $maxHeight;

	/**
	 * Navigation.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation
	 */
	private $navigation;

	/**
	 * Padding.
	 *
	 * @var integer
	 * @since 2.2.0
	 */
	private $padding = 8;

	/**
	 * Reversed.
	 *
	 * @var boolean
	 * @since 1.2.5
	 */
	private $reversed = false;

	/**
	 * Rtl.
	 *
	 * @var boolean
	 * @since 2.2
	 */
	private $rtl = false;

	/**
	 * Shadow.
	 *
	 * @var boolean|array
	 */
	private $shadow = false;

	/**
	 * Square symbol.
	 *
	 * @var boolean
	 * @since 5.0.0
	 */
	private $squareSymbol = true;

	/**
	 * Style.
	 *
	 * @var array
	 * @deprecated
	 */
	private $style;

	/**
	 * Symbol height.
	 *
	 * @var integer
	 * @since 3.0.8
	 */
	private $symbolHeight;

	/**
	 * Symbol padding.
	 *
	 * @var integer
	 */
	private $symbolPadding = 5;

	/**
	 * Symbol radius.
	 *
	 * @var integer
	 * @since 3.0.8
	 */
	private $symbolRadius;

	/**
	 * Symbol width.
	 *
	 * @var integer
	 */
	private $symbolWidth;

	/**
	 * Title.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle
	 * @since 3.0
	 */
	private $title;

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
	 * @since 2.0
	 */
	private $verticalAlign = "bottom";

	/**
	 * Width.
	 *
	 * @var integer
	 * @since 2.0
	 */
	private $width;

	/**
	 * X.
	 *
	 * @var integer
	 * @since 2.0
	 */
	private $x = 0;

	/**
	 * Y.
	 *
	 * @var integer
	 * @since 2.0
	 */
	private $y = 0;

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

		// Clear the align.
		$this->align = null;

		// Clear the background color.
		$this->backgroundColor = null;

		// Clear the border color.
		$this->borderColor = null;

		// Clear the border radius.
		$this->borderRadius = null;

		// Clear the border width.
		$this->borderWidth = null;

		// Clear the enabled.
		$this->enabled = null;

		// Clear the floating.
		$this->floating = null;

		// Clear the item distance.
		$this->itemDistance = null;

		// Clear the item hidden style.
		$this->itemHiddenStyle = null;

		// Clear the item hover style.
		$this->itemHoverStyle = null;

		// Clear the item margin bottom.
		$this->itemMarginBottom = null;

		// Clear the item margin top.
		$this->itemMarginTop = null;

		// Clear the item style.
		$this->itemStyle = null;

		// Clear the item width.
		$this->itemWidth = null;

		// Clear the label format.
		$this->labelFormat = null;

		// Clear the label formatter.
		$this->labelFormatter = null;

		// Clear the layout.
		$this->layout = null;

		// Clear the line height.
		$this->lineHeight = null;

		// Clear the margin.
		$this->margin = null;

		// Clear the max height.
		$this->maxHeight = null;

		// Clear the navigation.
		if (!is_null($this->navigation)) {
			$this->navigation->clear();
		}

		// Clear the padding.
		$this->padding = null;

		// Clear the reversed.
		$this->reversed = null;

		// Clear the rtl.
		$this->rtl = null;

		// Clear the shadow.
		$this->shadow = null;

		// Clear the square symbol.
		$this->squareSymbol = null;

		// Clear the style.
		$this->style = null;

		// Clear the symbol height.
		$this->symbolHeight = null;

		// Clear the symbol padding.
		$this->symbolPadding = null;

		// Clear the symbol radius.
		$this->symbolRadius = null;

		// Clear the symbol width.
		$this->symbolWidth = null;

		// Clear the title.
		if (!is_null($this->title)) {
			$this->title->clear();
		}

		// Clear the use HTML.
		$this->useHTML = null;

		// Clear the vertical align.
		$this->verticalAlign = null;

		// Clear the width.
		$this->width = null;

		// Clear the x.
		$this->x = null;

		// Clear the y.
		$this->y = null;
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
	 * Get the enabled.
	 *
	 * @return boolean Returns the enabled.
	 */
	public function getEnabled() {
		return $this->enabled;
	}

	/**
	 * Get the floating.
	 *
	 * @return boolean Returns the floating.
	 */
	public function getFloating() {
		return $this->floating;
	}

	/**
	 * Get the item distance.
	 *
	 * @return integer Returns the item distance.
	 */
	public function getItemDistance() {
		return $this->itemDistance;
	}

	/**
	 * Get the item hidden style.
	 *
	 * @return array Returns the item hidden style.
	 */
	public function getItemHiddenStyle() {
		return $this->itemHiddenStyle;
	}

	/**
	 * Get the item hover style.
	 *
	 * @return array Returns the item hover style.
	 */
	public function getItemHoverStyle() {
		return $this->itemHoverStyle;
	}

	/**
	 * Get the item margin bottom.
	 *
	 * @return integer Returns the item margin bottom.
	 */
	public function getItemMarginBottom() {
		return $this->itemMarginBottom;
	}

	/**
	 * Get the item margin top.
	 *
	 * @return integer Returns the item margin top.
	 */
	public function getItemMarginTop() {
		return $this->itemMarginTop;
	}

	/**
	 * Get the item style.
	 *
	 * @return array Returns the item style.
	 */
	public function getItemStyle() {
		return $this->itemStyle;
	}

	/**
	 * Get the item width.
	 *
	 * @return integer Returns the item width.
	 */
	public function getItemWidth() {
		return $this->itemWidth;
	}

	/**
	 * Get the label format.
	 *
	 * @return string Returns the label format.
	 */
	public function getLabelFormat() {
		return $this->labelFormat;
	}

	/**
	 * Get the label formatter.
	 *
	 * @return string Returns the label formatter.
	 */
	public function getLabelFormatter() {
		return $this->labelFormatter;
	}

	/**
	 * Get the layout.
	 *
	 * @return string Returns the layout.
	 */
	public function getLayout() {
		return $this->layout;
	}

	/**
	 * Get the line height.
	 *
	 * @return integer Returns the line height.
	 */
	public function getLineHeight() {
		return $this->lineHeight;
	}

	/**
	 * Get the margin.
	 *
	 * @return integer Returns the margin.
	 */
	public function getMargin() {
		return $this->margin;
	}

	/**
	 * Get the max height.
	 *
	 * @return integer Returns the max height.
	 */
	public function getMaxHeight() {
		return $this->maxHeight;
	}

	/**
	 * Get the navigation.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation Returns the navigation.
	 */
	public function getNavigation() {
		return $this->navigation;
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
	 * Get the reversed.
	 *
	 * @return boolean Returns the reversed.
	 */
	public function getReversed() {
		return $this->reversed;
	}

	/**
	 * Get the rtl.
	 *
	 * @return boolean Returns the rtl.
	 */
	public function getRtl() {
		return $this->rtl;
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
	 * Get the square symbol.
	 *
	 * @return boolean Returns the square symbol.
	 */
	public function getSquareSymbol() {
		return $this->squareSymbol;
	}

	/**
	 * Get the style.
	 *
	 * @return array Returns the style.
	 * @deprecated
	 */
	public function getStyle() {
		return $this->style;
	}

	/**
	 * Get the symbol height.
	 *
	 * @return integer Returns the symbol height.
	 */
	public function getSymbolHeight() {
		return $this->symbolHeight;
	}

	/**
	 * Get the symbol padding.
	 *
	 * @return integer Returns the symbol padding.
	 */
	public function getSymbolPadding() {
		return $this->symbolPadding;
	}

	/**
	 * Get the symbol radius.
	 *
	 * @return integer Returns the symbol radius.
	 */
	public function getSymbolRadius() {
		return $this->symbolRadius;
	}

	/**
	 * Get the symbol width.
	 *
	 * @return integer Returns the symbol width.
	 */
	public function getSymbolWidth() {
		return $this->symbolWidth;
	}

	/**
	 * Get the title.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle Returns the title.
	 */
	public function getTitle() {
		return $this->title;
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
	 * Get the width.
	 *
	 * @return integer Returns the width.
	 */
	public function getWidth() {
		return $this->width;
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
	 * Create a new navigation.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation Returns the navigation.
	 */
	public function newNavigation() {
		$this->navigation = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation();
		return $this->navigation;
	}

	/**
	 * Create a new title.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle Returns the title.
	 */
	public function newTitle() {
		$this->title = new \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle();
		return $this->title;
	}

	/**
	 * Set the align.
	 *
	 * @param string $align The align.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
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
	 * Set the background color.
	 *
	 * @param string $backgroundColor The background color.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setBackgroundColor($backgroundColor) {
		$this->backgroundColor = $backgroundColor;
		return $this;
	}

	/**
	 * Set the border color.
	 *
	 * @param string $borderColor The border color.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setBorderColor($borderColor) {
		$this->borderColor = $borderColor;
		return $this;
	}

	/**
	 * Set the border radius.
	 *
	 * @param integer $borderRadius The border radius.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setBorderRadius($borderRadius) {
		$this->borderRadius = $borderRadius;
		return $this;
	}

	/**
	 * Set the border width.
	 *
	 * @param integer $borderWidth The border width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setBorderWidth($borderWidth) {
		$this->borderWidth = $borderWidth;
		return $this;
	}

	/**
	 * Set the enabled.
	 *
	 * @param boolean $enabled The enabled.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setEnabled($enabled) {
		$this->enabled = $enabled;
		return $this;
	}

	/**
	 * Set the floating.
	 *
	 * @param boolean $floating The floating.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setFloating($floating) {
		$this->floating = $floating;
		return $this;
	}

	/**
	 * Set the item distance.
	 *
	 * @param integer $itemDistance The item distance.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setItemDistance($itemDistance) {
		$this->itemDistance = $itemDistance;
		return $this;
	}

	/**
	 * Set the item hidden style.
	 *
	 * @param array $itemHiddenStyle The item hidden style.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setItemHiddenStyle(array $itemHiddenStyle = null) {
		$this->itemHiddenStyle = $itemHiddenStyle;
		return $this;
	}

	/**
	 * Set the item hover style.
	 *
	 * @param array $itemHoverStyle The item hover style.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setItemHoverStyle(array $itemHoverStyle = null) {
		$this->itemHoverStyle = $itemHoverStyle;
		return $this;
	}

	/**
	 * Set the item margin bottom.
	 *
	 * @param integer $itemMarginBottom The item margin bottom.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setItemMarginBottom($itemMarginBottom) {
		$this->itemMarginBottom = $itemMarginBottom;
		return $this;
	}

	/**
	 * Set the item margin top.
	 *
	 * @param integer $itemMarginTop The item margin top.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setItemMarginTop($itemMarginTop) {
		$this->itemMarginTop = $itemMarginTop;
		return $this;
	}

	/**
	 * Set the item style.
	 *
	 * @param array $itemStyle The item style.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setItemStyle(array $itemStyle = null) {
		$this->itemStyle = $itemStyle;
		return $this;
	}

	/**
	 * Set the item width.
	 *
	 * @param integer $itemWidth The item width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setItemWidth($itemWidth) {
		$this->itemWidth = $itemWidth;
		return $this;
	}

	/**
	 * Set the label format.
	 *
	 * @param string $labelFormat The label format.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setLabelFormat($labelFormat) {
		$this->labelFormat = $labelFormat;
		return $this;
	}

	/**
	 * Set the label formatter.
	 *
	 * @param string $labelFormatter The label formatter.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setLabelFormatter($labelFormatter) {
		$this->labelFormatter = $labelFormatter;
		return $this;
	}

	/**
	 * Set the layout.
	 *
	 * @param string $layout The layout.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setLayout($layout) {
		switch ($layout) {
			case "horizontal":
			case "vertical":
			$this->layout = $layout;
			break;
		}
		return $this;
	}

	/**
	 * Set the line height.
	 *
	 * @param integer $lineHeight The line height.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setLineHeight($lineHeight) {
		$this->lineHeight = $lineHeight;
		return $this;
	}

	/**
	 * Set the margin.
	 *
	 * @param integer $margin The margin.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setMargin($margin) {
		$this->margin = $margin;
		return $this;
	}

	/**
	 * Set the max height.
	 *
	 * @param integer $maxHeight The max height.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setMaxHeight($maxHeight) {
		$this->maxHeight = $maxHeight;
		return $this;
	}

	/**
	 * Set the navigation.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation $navigation The navigation.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setNavigation(\WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsNavigation $navigation = null) {
		$this->navigation = $navigation;
		return $this;
	}

	/**
	 * Set the padding.
	 *
	 * @param integer $padding The padding.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setPadding($padding) {
		$this->padding = $padding;
		return $this;
	}

	/**
	 * Set the reversed.
	 *
	 * @param boolean $reversed The reversed.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setReversed($reversed) {
		$this->reversed = $reversed;
		return $this;
	}

	/**
	 * Set the rtl.
	 *
	 * @param boolean $rtl The rtl.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setRtl($rtl) {
		$this->rtl = $rtl;
		return $this;
	}

	/**
	 * Set the shadow.
	 *
	 * @param boolean|array $shadow The shadow.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setShadow($shadow) {
		$this->shadow = $shadow;
		return $this;
	}

	/**
	 * Set the square symbol.
	 *
	 * @param boolean $squareSymbol The square symbol.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setSquareSymbol($squareSymbol) {
		$this->squareSymbol = $squareSymbol;
		return $this;
	}

	/**
	 * Set the style.
	 *
	 * @param array $style The style.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 * @deprecated
	 */
	public function setStyle(array $style = null) {
		$this->style = $style;
		return $this;
	}

	/**
	 * Set the symbol height.
	 *
	 * @param integer $symbolHeight The symbol height.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setSymbolHeight($symbolHeight) {
		$this->symbolHeight = $symbolHeight;
		return $this;
	}

	/**
	 * Set the symbol padding.
	 *
	 * @param integer $symbolPadding The symbol padding.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setSymbolPadding($symbolPadding) {
		$this->symbolPadding = $symbolPadding;
		return $this;
	}

	/**
	 * Set the symbol radius.
	 *
	 * @param integer $symbolRadius The symbol radius.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setSymbolRadius($symbolRadius) {
		$this->symbolRadius = $symbolRadius;
		return $this;
	}

	/**
	 * Set the symbol width.
	 *
	 * @param integer $symbolWidth The symbol width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setSymbolWidth($symbolWidth) {
		$this->symbolWidth = $symbolWidth;
		return $this;
	}

	/**
	 * Set the title.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle $title The title.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setTitle(\WBW\Bundle\HighchartsBundle\API\Chart\Legend\HighchartsTitle $title = null) {
		$this->title = $title;
		return $this;
	}

	/**
	 * Set the use HTML.
	 *
	 * @param boolean $useHTML The use HTML.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setUseHTML($useHTML) {
		$this->useHTML = $useHTML;
		return $this;
	}

	/**
	 * Set the vertical align.
	 *
	 * @param string $verticalAlign The vertical align.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setVerticalAlign($verticalAlign) {
		switch ($verticalAlign) {
			case "bottom":
			case "middle":
			case "top":
			$this->verticalAlign = $verticalAlign;
			break;
		}
		return $this;
	}

	/**
	 * Set the width.
	 *
	 * @param integer $width The width.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setWidth($width) {
		$this->width = $width;
		return $this;
	}

	/**
	 * Set the x.
	 *
	 * @param integer $x The x.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
	 */
	public function setX($x) {
		$this->x = $x;
		return $this;
	}

	/**
	 * Set the y.
	 *
	 * @param integer $y The y.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the highcharts legend.
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

		// Check the enabled.
		if (!is_null($this->enabled)) {
			$output["enabled"] = $this->enabled;
		}

		// Check the floating.
		if (!is_null($this->floating)) {
			$output["floating"] = $this->floating;
		}

		// Check the item distance.
		if (!is_null($this->itemDistance)) {
			$output["itemDistance"] = $this->itemDistance;
		}

		// Check the item hidden style.
		if (!is_null($this->itemHiddenStyle)) {
			$output["itemHiddenStyle"] = $this->itemHiddenStyle;
		}

		// Check the item hover style.
		if (!is_null($this->itemHoverStyle)) {
			$output["itemHoverStyle"] = $this->itemHoverStyle;
		}

		// Check the item margin bottom.
		if (!is_null($this->itemMarginBottom)) {
			$output["itemMarginBottom"] = $this->itemMarginBottom;
		}

		// Check the item margin top.
		if (!is_null($this->itemMarginTop)) {
			$output["itemMarginTop"] = $this->itemMarginTop;
		}

		// Check the item style.
		if (!is_null($this->itemStyle)) {
			$output["itemStyle"] = $this->itemStyle;
		}

		// Check the item width.
		if (!is_null($this->itemWidth)) {
			$output["itemWidth"] = $this->itemWidth;
		}

		// Check the label format.
		if (!is_null($this->labelFormat)) {
			$output["labelFormat"] = $this->labelFormat;
		}

		// Check the label formatter.
		if (!is_null($this->labelFormatter)) {
			$output["labelFormatter"] = $this->labelFormatter;
		}

		// Check the layout.
		if (!is_null($this->layout)) {
			$output["layout"] = $this->layout;
		}

		// Check the line height.
		if (!is_null($this->lineHeight)) {
			$output["lineHeight"] = $this->lineHeight;
		}

		// Check the margin.
		if (!is_null($this->margin)) {
			$output["margin"] = $this->margin;
		}

		// Check the max height.
		if (!is_null($this->maxHeight)) {
			$output["maxHeight"] = $this->maxHeight;
		}

		// Check the navigation.
		if (!is_null($this->navigation)) {
			$output["navigation"] = $this->navigation->toArray();
		}

		// Check the padding.
		if (!is_null($this->padding)) {
			$output["padding"] = $this->padding;
		}

		// Check the reversed.
		if (!is_null($this->reversed)) {
			$output["reversed"] = $this->reversed;
		}

		// Check the rtl.
		if (!is_null($this->rtl)) {
			$output["rtl"] = $this->rtl;
		}

		// Check the shadow.
		if (!is_null($this->shadow)) {
			$output["shadow"] = $this->shadow;
		}

		// Check the square symbol.
		if (!is_null($this->squareSymbol)) {
			$output["squareSymbol"] = $this->squareSymbol;
		}

		// Check the style.
		if (!is_null($this->style)) {
			$output["style"] = $this->style;
		}

		// Check the symbol height.
		if (!is_null($this->symbolHeight)) {
			$output["symbolHeight"] = $this->symbolHeight;
		}

		// Check the symbol padding.
		if (!is_null($this->symbolPadding)) {
			$output["symbolPadding"] = $this->symbolPadding;
		}

		// Check the symbol radius.
		if (!is_null($this->symbolRadius)) {
			$output["symbolRadius"] = $this->symbolRadius;
		}

		// Check the symbol width.
		if (!is_null($this->symbolWidth)) {
			$output["symbolWidth"] = $this->symbolWidth;
		}

		// Check the title.
		if (!is_null($this->title)) {
			$output["title"] = $this->title->toArray();
		}

		// Check the use HTML.
		if (!is_null($this->useHTML)) {
			$output["useHTML"] = $this->useHTML;
		}

		// Check the vertical align.
		if (!is_null($this->verticalAlign)) {
			$output["verticalAlign"] = $this->verticalAlign;
		}

		// Check the width.
		if (!is_null($this->width)) {
			$output["width"] = $this->width;
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
