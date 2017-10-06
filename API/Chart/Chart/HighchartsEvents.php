<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart\Chart;

use JsonSerializable;

/**
 * Highcharts events.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsEvents implements JsonSerializable {

	/**
	 * Add series.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $addSeries;

	/**
	 * After print.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $afterPrint;

	/**
	 * Before print.
	 *
	 * @var string
	 * @since 4.1.0
	 */
	private $beforePrint;

	/**
	 * Click.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $click;

	/**
	 * Drilldown.
	 *
	 * @var string
	 * @since 3.0.8
	 */
	private $drilldown;

	/**
	 * Drillup.
	 *
	 * @var string
	 * @since 3.0.8
	 */
	private $drillup;

	/**
	 * Drillupall.
	 *
	 * @var string
	 * @since 4.2.4
	 */
	private $drillupall;

	/**
	 * Load.
	 *
	 * @var string
	 */
	private $load;

	/**
	 * Redraw.
	 *
	 * @var string
	 * @since 1.2.0
	 */
	private $redraw;

	/**
	 * Render.
	 *
	 * @var string
	 * @since 5.0.7
	 */
	private $render;

	/**
	 * Selection.
	 *
	 * @var string
	 */
	private $selection;

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

		// Check the add series.
		if (!is_null($this->addSeries)) {
			$this->addSeries = null;
		}

		// Check the after print.
		if (!is_null($this->afterPrint)) {
			$this->afterPrint = null;
		}

		// Check the before print.
		if (!is_null($this->beforePrint)) {
			$this->beforePrint = null;
		}

		// Check the click.
		if (!is_null($this->click)) {
			$this->click = null;
		}

		// Check the drilldown.
		if (!is_null($this->drilldown)) {
			$this->drilldown = null;
		}

		// Check the drillup.
		if (!is_null($this->drillup)) {
			$this->drillup = null;
		}

		// Check the drillupall.
		if (!is_null($this->drillupall)) {
			$this->drillupall = null;
		}

		// Check the load.
		if (!is_null($this->load)) {
			$this->load = null;
		}

		// Check the redraw.
		if (!is_null($this->redraw)) {
			$this->redraw = null;
		}

		// Check the render.
		if (!is_null($this->render)) {
			$this->render = null;
		}

		// Check the selection.
		if (!is_null($this->selection)) {
			$this->selection = null;
		}
	}

	/**
	 * Get the add series.
	 *
	 * @return string Returns the add series.
	 */
	public function getAddSeries() {
		return $this->addSeries;
	}

	/**
	 * Get the after print.
	 *
	 * @return string Returns the after print.
	 */
	public function getAfterPrint() {
		return $this->afterPrint;
	}

	/**
	 * Get the before print.
	 *
	 * @return string Returns the before print.
	 */
	public function getBeforePrint() {
		return $this->beforePrint;
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
	 * Get the drilldown.
	 *
	 * @return string Returns the drilldown.
	 */
	public function getDrilldown() {
		return $this->drilldown;
	}

	/**
	 * Get the drillup.
	 *
	 * @return string Returns the drillup.
	 */
	public function getDrillup() {
		return $this->drillup;
	}

	/**
	 * Get the drillupall.
	 *
	 * @return string Returns the drillupall.
	 */
	public function getDrillupall() {
		return $this->drillupall;
	}

	/**
	 * Get the load.
	 *
	 * @return string Returns the load.
	 */
	public function getLoad() {
		return $this->load;
	}

	/**
	 * Get the redraw.
	 *
	 * @return string Returns the redraw.
	 */
	public function getRedraw() {
		return $this->redraw;
	}

	/**
	 * Get the render.
	 *
	 * @return string Returns the render.
	 */
	public function getRender() {
		return $this->render;
	}

	/**
	 * Get the selection.
	 *
	 * @return string Returns the selection.
	 */
	public function getSelection() {
		return $this->selection;
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
	 * Set the add series.
	 *
	 * @param string $addSeries The add series.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setAddSeries($addSeries) {
		$this->addSeries = $addSeries;
		return $this;
	}

	/**
	 * Set the after print.
	 *
	 * @param string $afterPrint The after print.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setAfterPrint($afterPrint) {
		$this->afterPrint = $afterPrint;
		return $this;
	}

	/**
	 * Set the before print.
	 *
	 * @param string $beforePrint The before print.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setBeforePrint($beforePrint) {
		$this->beforePrint = $beforePrint;
		return $this;
	}

	/**
	 * Set the click.
	 *
	 * @param string $click The click.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setClick($click) {
		$this->click = $click;
		return $this;
	}

	/**
	 * Set the drilldown.
	 *
	 * @param string $drilldown The drilldown.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setDrilldown($drilldown) {
		$this->drilldown = $drilldown;
		return $this;
	}

	/**
	 * Set the drillup.
	 *
	 * @param string $drillup The drillup.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setDrillup($drillup) {
		$this->drillup = $drillup;
		return $this;
	}

	/**
	 * Set the drillupall.
	 *
	 * @param string $drillupall The drillupall.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setDrillupall($drillupall) {
		$this->drillupall = $drillupall;
		return $this;
	}

	/**
	 * Set the load.
	 *
	 * @param string $load The load.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setLoad($load) {
		$this->load = $load;
		return $this;
	}

	/**
	 * Set the redraw.
	 *
	 * @param string $redraw The redraw.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setRedraw($redraw) {
		$this->redraw = $redraw;
		return $this;
	}

	/**
	 * Set the render.
	 *
	 * @param string $render The render.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setRender($render) {
		$this->render = $render;
		return $this;
	}

	/**
	 * Set the selection.
	 *
	 * @param string $selection The selection.
	 * @return \WBW\HighchartsBundle\API\Chart\Chart\HighchartsEvents Returns the highcharts events.
	 */
	public function setSelection($selection) {
		$this->selection = $selection;
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

		// Check the add series.
		if (!is_null($this->addSeries)) {
			$output["addSeries"] = $this->addSeries;
		}

		// Check the after print.
		if (!is_null($this->afterPrint)) {
			$output["afterPrint"] = $this->afterPrint;
		}

		// Check the before print.
		if (!is_null($this->beforePrint)) {
			$output["beforePrint"] = $this->beforePrint;
		}

		// Check the click.
		if (!is_null($this->click)) {
			$output["click"] = $this->click;
		}

		// Check the drilldown.
		if (!is_null($this->drilldown)) {
			$output["drilldown"] = $this->drilldown;
		}

		// Check the drillup.
		if (!is_null($this->drillup)) {
			$output["drillup"] = $this->drillup;
		}

		// Check the drillupall.
		if (!is_null($this->drillupall)) {
			$output["drillupall"] = $this->drillupall;
		}

		// Check the load.
		if (!is_null($this->load)) {
			$output["load"] = $this->load;
		}

		// Check the redraw.
		if (!is_null($this->redraw)) {
			$output["redraw"] = $this->redraw;
		}

		// Check the render.
		if (!is_null($this->render)) {
			$output["render"] = $this->render;
		}

		// Check the selection.
		if (!is_null($this->selection)) {
			$output["selection"] = $this->selection;
		}

		// Return the output.
		return $output;
	}

}
