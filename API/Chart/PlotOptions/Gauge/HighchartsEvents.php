<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge;

use JsonSerializable;

/**
 * Highcharts events.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge
 * @version 5.0.14
 * @final
 */
final class HighchartsEvents implements JsonSerializable {

	/**
	 * After animate.
	 *
	 * @var string
	 * @since 4.0
	 */
	private $afterAnimate;

	/**
	 * Checkbox click.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $checkboxClick;

	/**
	 * Click.
	 *
	 * @var string
	 */
	private $click;

	/**
	 * Hide.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $hide;

	/**
	 * Legend item click.
	 *
	 * @var string
	 */
	private $legendItemClick;

	/**
	 * Mouse out.
	 *
	 * @var string
	 */
	private $mouseOut;

	/**
	 * Mouse over.
	 *
	 * @var string
	 */
	private $mouseOver;

	/**
	 * Show.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $show;

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

		// Clear the after animate.
		$this->afterAnimate = null;

		// Clear the checkbox click.
		$this->checkboxClick = null;

		// Clear the click.
		$this->click = null;

		// Clear the hide.
		$this->hide = null;

		// Clear the legend item click.
		$this->legendItemClick = null;

		// Clear the mouse out.
		$this->mouseOut = null;

		// Clear the mouse over.
		$this->mouseOver = null;

		// Clear the show.
		$this->show = null;
	}

	/**
	 * Get the after animate.
	 *
	 * @return string Returns the after animate.
	 */
	public function getAfterAnimate() {
		return $this->afterAnimate;
	}

	/**
	 * Get the checkbox click.
	 *
	 * @return string Returns the checkbox click.
	 */
	public function getCheckboxClick() {
		return $this->checkboxClick;
	}

	/**
	 * Get the click.
	 *
	 * @return string Returns the click.
	 */
	public function getClick() {
		return $this->click;
	}

	/**
	 * Get the hide.
	 *
	 * @return string Returns the hide.
	 */
	public function getHide() {
		return $this->hide;
	}

	/**
	 * Get the legend item click.
	 *
	 * @return string Returns the legend item click.
	 */
	public function getLegendItemClick() {
		return $this->legendItemClick;
	}

	/**
	 * Get the mouse out.
	 *
	 * @return string Returns the mouse out.
	 */
	public function getMouseOut() {
		return $this->mouseOut;
	}

	/**
	 * Get the mouse over.
	 *
	 * @return string Returns the mouse over.
	 */
	public function getMouseOver() {
		return $this->mouseOver;
	}

	/**
	 * Get the show.
	 *
	 * @return string Returns the show.
	 */
	public function getShow() {
		return $this->show;
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
	 * Set the after animate.
	 *
	 * @param string $afterAnimate The after animate.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents Returns the highcharts events.
	 */
	public function setAfterAnimate($afterAnimate) {
		$this->afterAnimate = $afterAnimate;
		return $this;
	}

	/**
	 * Set the checkbox click.
	 *
	 * @param string $checkboxClick The checkbox click.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents Returns the highcharts events.
	 */
	public function setCheckboxClick($checkboxClick) {
		$this->checkboxClick = $checkboxClick;
		return $this;
	}

	/**
	 * Set the click.
	 *
	 * @param string $click The click.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents Returns the highcharts events.
	 */
	public function setClick($click) {
		$this->click = $click;
		return $this;
	}

	/**
	 * Set the hide.
	 *
	 * @param string $hide The hide.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents Returns the highcharts events.
	 */
	public function setHide($hide) {
		$this->hide = $hide;
		return $this;
	}

	/**
	 * Set the legend item click.
	 *
	 * @param string $legendItemClick The legend item click.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents Returns the highcharts events.
	 */
	public function setLegendItemClick($legendItemClick) {
		$this->legendItemClick = $legendItemClick;
		return $this;
	}

	/**
	 * Set the mouse out.
	 *
	 * @param string $mouseOut The mouse out.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents Returns the highcharts events.
	 */
	public function setMouseOut($mouseOut) {
		$this->mouseOut = $mouseOut;
		return $this;
	}

	/**
	 * Set the mouse over.
	 *
	 * @param string $mouseOver The mouse over.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents Returns the highcharts events.
	 */
	public function setMouseOver($mouseOver) {
		$this->mouseOver = $mouseOver;
		return $this;
	}

	/**
	 * Set the show.
	 *
	 * @param string $show The show.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents Returns the highcharts events.
	 */
	public function setShow($show) {
		$this->show = $show;
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

		// Check the after animate.
		if (!is_null($this->afterAnimate)) {
			$output["afterAnimate"] = $this->afterAnimate;
		}

		// Check the checkbox click.
		if (!is_null($this->checkboxClick)) {
			$output["checkboxClick"] = $this->checkboxClick;
		}

		// Check the click.
		if (!is_null($this->click)) {
			$output["click"] = $this->click;
		}

		// Check the hide.
		if (!is_null($this->hide)) {
			$output["hide"] = $this->hide;
		}

		// Check the legend item click.
		if (!is_null($this->legendItemClick)) {
			$output["legendItemClick"] = $this->legendItemClick;
		}

		// Check the mouse out.
		if (!is_null($this->mouseOut)) {
			$output["mouseOut"] = $this->mouseOut;
		}

		// Check the mouse over.
		if (!is_null($this->mouseOver)) {
			$output["mouseOver"] = $this->mouseOver;
		}

		// Check the show.
		if (!is_null($this->show)) {
			$output["show"] = $this->show;
		}

		// Return the output.
		return $output;
	}

}
