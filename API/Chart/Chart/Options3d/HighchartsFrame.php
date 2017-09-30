<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Chart\Options3d;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBack;
use WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsBottom;
use WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsSide;
use WBW\HighchartsBundle\API\Chart\Chart\Options3d\Frame\HighchartsTop;

/**
 * Highcharts frame.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API\Chart\Chart\Options3d
 * @version 5.0.14
 * @final
 */
final class HighchartsFrame implements JsonSerializable {

	/**
	 * Back.
	 *
	 * @var HighchartsBack
	 * @since 4.0
	 */
	private $back;

	/**
	 * Bottom.
	 *
	 * @var HighchartsBottom
	 * @since 4.0
	 */
	private $bottom;

	/**
	 * Side.
	 *
	 * @var HighchartsSide
	 * @since 4.0
	 */
	private $side;

	/**
	 * Top.
	 *
	 * @var HighchartsTop
	 * @since 5.0.12
	 */
	private $top;

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

		// Check the back.
		if (!is_null($this->back)) {
			$this->back->clear();
		}

		// Check the bottom.
		if (!is_null($this->bottom)) {
			$this->bottom->clear();
		}

		// Check the side.
		if (!is_null($this->side)) {
			$this->side->clear();
		}

		// Check the top.
		if (!is_null($this->top)) {
			$this->top->clear();
		}
	}

	/**
	 * Get the back.
	 *
	 * @return HighchartsBack Returns the back.
	 */
	public function getBack() {
		return $this->back;
	}

	/**
	 * Get the bottom.
	 *
	 * @return HighchartsBottom Returns the bottom.
	 */
	public function getBottom() {
		return $this->bottom;
	}

	/**
	 * Get the side.
	 *
	 * @return HighchartsSide Returns the side.
	 */
	public function getSide() {
		return $this->side;
	}

	/**
	 * Get the top.
	 *
	 * @return HighchartsTop Returns the top.
	 */
	public function getTop() {
		return $this->top;
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
	 * Create a new back.
	 *
	 * @return HighchartsBack Returns the back.
	 */
	public function newBack() {
		$this->back = new HighchartsBack();
		return $this->back;
	}

	/**
	 * Create a new bottom.
	 *
	 * @return HighchartsBottom Returns the bottom.
	 */
	public function newBottom() {
		$this->bottom = new HighchartsBottom();
		return $this->bottom;
	}

	/**
	 * Create a new side.
	 *
	 * @return HighchartsSide Returns the side.
	 */
	public function newSide() {
		$this->side = new HighchartsSide();
		return $this->side;
	}

	/**
	 * Create a new top.
	 *
	 * @return HighchartsTop Returns the top.
	 */
	public function newTop() {
		$this->top = new HighchartsTop();
		return $this->top;
	}

	/**
	 * Set the back.
	 *
	 * @param HighchartsBack $back The back.
	 * @return HighchartsFrame Returns the highcharts frame.
	 */
	public function setBack(HighchartsBack $back = null) {
		$this->back = $back;
		return $this;
	}

	/**
	 * Set the bottom.
	 *
	 * @param HighchartsBottom $bottom The bottom.
	 * @return HighchartsFrame Returns the highcharts frame.
	 */
	public function setBottom(HighchartsBottom $bottom = null) {
		$this->bottom = $bottom;
		return $this;
	}

	/**
	 * Set the side.
	 *
	 * @param HighchartsSide $side The side.
	 * @return HighchartsFrame Returns the highcharts frame.
	 */
	public function setSide(HighchartsSide $side = null) {
		$this->side = $side;
		return $this;
	}

	/**
	 * Set the top.
	 *
	 * @param HighchartsTop $top The top.
	 * @return HighchartsFrame Returns the highcharts frame.
	 */
	public function setTop(HighchartsTop $top = null) {
		$this->top = $top;
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

		// Check the back.
		if (!is_null($this->back)) {
			$output["back"] = $this->back->toArray();
		}

		// Check the bottom.
		if (!is_null($this->bottom)) {
			$output["bottom"] = $this->bottom->toArray();
		}

		// Check the side.
		if (!is_null($this->side)) {
			$output["side"] = $this->side->toArray();
		}

		// Check the top.
		if (!is_null($this->top)) {
			$output["top"] = $this->top->toArray();
		}

		// Return the output.
		return $output;
	}
}

