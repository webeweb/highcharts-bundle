<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Series\Funnel;

use JsonSerializable;

/**
 * Highcharts tooltip.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Series\Funnel
 * @version 5.0.14
 * @final
 */
final class HighchartsTooltip implements JsonSerializable {

	/**
	 * Date time label formats.
	 *
	 * @var Object
	 */
	private $dateTimeLabelFormats;

	/**
	 * Follow pointer.
	 *
	 * @var boolean
	 * @since 3.0
	 */
	private $followPointer = false;

	/**
	 * Follow touch move.
	 *
	 * @var boolean
	 * @since 3.0.1
	 */
	private $followTouchMove = true;

	/**
	 * Footer format.
	 *
	 * @var string
	 * @since 2.2
	 */
	private $footerFormat = "false";

	/**
	 * Header format.
	 *
	 * @var string
	 */
	private $headerFormat;

	/**
	 * Hide delay.
	 *
	 * @var integer
	 * @since 3.0
	 */
	private $hideDelay = 500;

	/**
	 * Padding.
	 *
	 * @var integer
	 * @since 5.0.0
	 */
	private $padding = 8;

	/**
	 * Point format.
	 *
	 * @var string
	 * @since 2.2
	 */
	private $pointFormat = "<span style=\"color:{point.color}\">\\u25CF</span> {series.name}: <b>{point.y}</b><br/>";

	/**
	 * Point formatter.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $pointFormatter;

	/**
	 * Split.
	 *
	 * @var boolean
	 * @since 5.0.0
	 */
	private $split = false;

	/**
	 * Value decimals.
	 *
	 * @var integer
	 * @since 2.2
	 */
	private $valueDecimals;

	/**
	 * Value prefix.
	 *
	 * @var string
	 * @since 2.2
	 */
	private $valuePrefix;

	/**
	 * Value suffix.
	 *
	 * @var string
	 * @since 2.2
	 */
	private $valueSuffix;

	/**
	 * X date format.
	 *
	 * @var string
	 */
	private $xDateFormat;

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

		// Check the date time label formats.
		if (!is_null($this->dateTimeLabelFormats)) {
			$this->dateTimeLabelFormats = null;
		}

		// Check the follow pointer.
		if (!is_null($this->followPointer)) {
			$this->followPointer = null;
		}

		// Check the follow touch move.
		if (!is_null($this->followTouchMove)) {
			$this->followTouchMove = null;
		}

		// Check the footer format.
		if (!is_null($this->footerFormat)) {
			$this->footerFormat = null;
		}

		// Check the header format.
		if (!is_null($this->headerFormat)) {
			$this->headerFormat = null;
		}

		// Check the hide delay.
		if (!is_null($this->hideDelay)) {
			$this->hideDelay = null;
		}

		// Check the padding.
		if (!is_null($this->padding)) {
			$this->padding = null;
		}

		// Check the point format.
		if (!is_null($this->pointFormat)) {
			$this->pointFormat = null;
		}

		// Check the point formatter.
		if (!is_null($this->pointFormatter)) {
			$this->pointFormatter = null;
		}

		// Check the split.
		if (!is_null($this->split)) {
			$this->split = null;
		}

		// Check the value decimals.
		if (!is_null($this->valueDecimals)) {
			$this->valueDecimals = null;
		}

		// Check the value prefix.
		if (!is_null($this->valuePrefix)) {
			$this->valuePrefix = null;
		}

		// Check the value suffix.
		if (!is_null($this->valueSuffix)) {
			$this->valueSuffix = null;
		}

		// Check the x date format.
		if (!is_null($this->xDateFormat)) {
			$this->xDateFormat = null;
		}
	}

	/**
	 * Get the date time label formats.
	 *
	 * @return Object Returns the date time label formats.
	 */
	public function getDateTimeLabelFormats() {
		return $this->dateTimeLabelFormats;
	}

	/**
	 * Get the follow pointer.
	 *
	 * @return boolean Returns the follow pointer.
	 */
	public function getFollowPointer() {
		return $this->followPointer;
	}

	/**
	 * Get the follow touch move.
	 *
	 * @return boolean Returns the follow touch move.
	 */
	public function getFollowTouchMove() {
		return $this->followTouchMove;
	}

	/**
	 * Get the footer format.
	 *
	 * @return string Returns the footer format.
	 */
	public function getFooterFormat() {
		return $this->footerFormat;
	}

	/**
	 * Get the header format.
	 *
	 * @return string Returns the header format.
	 */
	public function getHeaderFormat() {
		return $this->headerFormat;
	}

	/**
	 * Get the hide delay.
	 *
	 * @return integer Returns the hide delay.
	 */
	public function getHideDelay() {
		return $this->hideDelay;
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
	 * Get the point format.
	 *
	 * @return string Returns the point format.
	 */
	public function getPointFormat() {
		return $this->pointFormat;
	}

	/**
	 * Get the point formatter.
	 *
	 * @return string Returns the point formatter.
	 */
	public function getPointFormatter() {
		return $this->pointFormatter;
	}

	/**
	 * Get the split.
	 *
	 * @return boolean Returns the split.
	 */
	public function getSplit() {
		return $this->split;
	}

	/**
	 * Get the value decimals.
	 *
	 * @return integer Returns the value decimals.
	 */
	public function getValueDecimals() {
		return $this->valueDecimals;
	}

	/**
	 * Get the value prefix.
	 *
	 * @return string Returns the value prefix.
	 */
	public function getValuePrefix() {
		return $this->valuePrefix;
	}

	/**
	 * Get the value suffix.
	 *
	 * @return string Returns the value suffix.
	 */
	public function getValueSuffix() {
		return $this->valueSuffix;
	}

	/**
	 * Get the x date format.
	 *
	 * @return string Returns the x date format.
	 */
	public function getXDateFormat() {
		return $this->xDateFormat;
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
	 * Set the date time label formats.
	 *
	 * @param Object $dateTimeLabelFormats The date time label formats.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setDateTimeLabelFormats($dateTimeLabelFormats) {
		$this->dateTimeLabelFormats = $dateTimeLabelFormats;
		return $this;
	}

	/**
	 * Set the follow pointer.
	 *
	 * @param boolean $followPointer The follow pointer.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setFollowPointer($followPointer) {
		$this->followPointer = $followPointer;
		return $this;
	}

	/**
	 * Set the follow touch move.
	 *
	 * @param boolean $followTouchMove The follow touch move.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setFollowTouchMove($followTouchMove) {
		$this->followTouchMove = $followTouchMove;
		return $this;
	}

	/**
	 * Set the footer format.
	 *
	 * @param string $footerFormat The footer format.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setFooterFormat($footerFormat) {
		$this->footerFormat = $footerFormat;
		return $this;
	}

	/**
	 * Set the header format.
	 *
	 * @param string $headerFormat The header format.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setHeaderFormat($headerFormat) {
		$this->headerFormat = $headerFormat;
		return $this;
	}

	/**
	 * Set the hide delay.
	 *
	 * @param integer $hideDelay The hide delay.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setHideDelay($hideDelay) {
		$this->hideDelay = $hideDelay;
		return $this;
	}

	/**
	 * Set the padding.
	 *
	 * @param integer $padding The padding.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setPadding($padding) {
		$this->padding = $padding;
		return $this;
	}

	/**
	 * Set the point format.
	 *
	 * @param string $pointFormat The point format.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setPointFormat($pointFormat) {
		$this->pointFormat = $pointFormat;
		return $this;
	}

	/**
	 * Set the point formatter.
	 *
	 * @param string $pointFormatter The point formatter.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setPointFormatter($pointFormatter) {
		$this->pointFormatter = $pointFormatter;
		return $this;
	}

	/**
	 * Set the split.
	 *
	 * @param boolean $split The split.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setSplit($split) {
		$this->split = $split;
		return $this;
	}

	/**
	 * Set the value decimals.
	 *
	 * @param integer $valueDecimals The value decimals.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setValueDecimals($valueDecimals) {
		$this->valueDecimals = $valueDecimals;
		return $this;
	}

	/**
	 * Set the value prefix.
	 *
	 * @param string $valuePrefix The value prefix.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setValuePrefix($valuePrefix) {
		$this->valuePrefix = $valuePrefix;
		return $this;
	}

	/**
	 * Set the value suffix.
	 *
	 * @param string $valueSuffix The value suffix.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setValueSuffix($valueSuffix) {
		$this->valueSuffix = $valueSuffix;
		return $this;
	}

	/**
	 * Set the x date format.
	 *
	 * @param string $xDateFormat The x date format.
	 * @return HighchartsTooltip Returns the highcharts tooltip.
	 */
	public function setXDateFormat($xDateFormat) {
		$this->xDateFormat = $xDateFormat;
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

		// Check the date time label formats.
		if (!is_null($this->dateTimeLabelFormats)) {
			$output["dateTimeLabelFormats"] = $this->dateTimeLabelFormats;
		}

		// Check the follow pointer.
		if (!is_null($this->followPointer)) {
			$output["followPointer"] = $this->followPointer;
		}

		// Check the follow touch move.
		if (!is_null($this->followTouchMove)) {
			$output["followTouchMove"] = $this->followTouchMove;
		}

		// Check the footer format.
		if (!is_null($this->footerFormat)) {
			$output["footerFormat"] = $this->footerFormat;
		}

		// Check the header format.
		if (!is_null($this->headerFormat)) {
			$output["headerFormat"] = $this->headerFormat;
		}

		// Check the hide delay.
		if (!is_null($this->hideDelay)) {
			$output["hideDelay"] = $this->hideDelay;
		}

		// Check the padding.
		if (!is_null($this->padding)) {
			$output["padding"] = $this->padding;
		}

		// Check the point format.
		if (!is_null($this->pointFormat)) {
			$output["pointFormat"] = $this->pointFormat;
		}

		// Check the point formatter.
		if (!is_null($this->pointFormatter)) {
			$output["pointFormatter"] = $this->pointFormatter;
		}

		// Check the split.
		if (!is_null($this->split)) {
			$output["split"] = $this->split;
		}

		// Check the value decimals.
		if (!is_null($this->valueDecimals)) {
			$output["valueDecimals"] = $this->valueDecimals;
		}

		// Check the value prefix.
		if (!is_null($this->valuePrefix)) {
			$output["valuePrefix"] = $this->valuePrefix;
		}

		// Check the value suffix.
		if (!is_null($this->valueSuffix)) {
			$output["valueSuffix"] = $this->valueSuffix;
		}

		// Check the x date format.
		if (!is_null($this->xDateFormat)) {
			$output["xDateFormat"] = $this->xDateFormat;
		}

		// Return the output.
		return $output;
	}
}

