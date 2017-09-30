<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\HighchartsAccessibility;
use WBW\HighchartsBundle\API\Chart\HighchartsChart as HighchartsChartChild;
use WBW\HighchartsBundle\API\Chart\HighchartsCredits;
use WBW\HighchartsBundle\API\Chart\HighchartsData;
use WBW\HighchartsBundle\API\Chart\HighchartsDrilldown;
use WBW\HighchartsBundle\API\Chart\HighchartsExporting;
use WBW\HighchartsBundle\API\Chart\HighchartsLabels;
use WBW\HighchartsBundle\API\Chart\HighchartsLegend;
use WBW\HighchartsBundle\API\Chart\HighchartsLoading;
use WBW\HighchartsBundle\API\Chart\HighchartsNavigation;
use WBW\HighchartsBundle\API\Chart\HighchartsNoData;
use WBW\HighchartsBundle\API\Chart\HighchartsPane;
use WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions;
use WBW\HighchartsBundle\API\Chart\HighchartsResponsive;
use WBW\HighchartsBundle\API\Chart\HighchartsSubtitle;
use WBW\HighchartsBundle\API\Chart\HighchartsTitle;
use WBW\HighchartsBundle\API\Chart\HighchartsTooltip;
use WBW\HighchartsBundle\API\Chart\HighchartsZAxis;

/**
 * Highcharts chart.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\API
 * @version 5.0.14
 * @final
 */
final class HighchartsChart implements JsonSerializable {

	/**
	 * Accessibility.
	 *
	 * @var HighchartsAccessibility
	 * @since 5.0.0
	 */
	private $accessibility;

	/**
	 * Chart.
	 *
	 * @var HighchartsChartChild
	 */
	private $chart;

	/**
	 * Colors.
	 *
	 * @var array
	 */
	private $colors = [ "#7cb5ec" , "#434348" , "#90ed7d" , "#f7a35c" , "#8085e9" , "#f15c80" , "#e4d354" , "#2b908f" , "#f45b5b" , "#91e8e1"];

	/**
	 * Credits.
	 *
	 * @var HighchartsCredits
	 */
	private $credits;

	/**
	 * Data.
	 *
	 * @var HighchartsData
	 * @since 4.0
	 */
	private $data;

	/**
	 * Defs.
	 *
	 * @var Object
	 * @since 5.0.0
	 */
	private $defs;

	/**
	 * Drilldown.
	 *
	 * @var HighchartsDrilldown
	 * @since 3.0.8
	 */
	private $drilldown;

	/**
	 * Exporting.
	 *
	 * @var HighchartsExporting
	 */
	private $exporting;

	/**
	 * Labels.
	 *
	 * @var HighchartsLabels
	 */
	private $labels;

	/**
	 * Legend.
	 *
	 * @var HighchartsLegend
	 */
	private $legend;

	/**
	 * Loading.
	 *
	 * @var HighchartsLoading
	 */
	private $loading;

	/**
	 * Navigation.
	 *
	 * @var HighchartsNavigation
	 */
	private $navigation;

	/**
	 * No data.
	 *
	 * @var HighchartsNoData
	 * @since 3.0.8
	 */
	private $noData;

	/**
	 * Pane.
	 *
	 * @var HighchartsPane
	 * @since 2.3.0
	 */
	private $pane;

	/**
	 * Plot options.
	 *
	 * @var HighchartsPlotOptions
	 */
	private $plotOptions;

	/**
	 * Responsive.
	 *
	 * @var HighchartsResponsive
	 * @since 5.0.0
	 */
	private $responsive;

	/**
	 * Series.
	 *
	 * @var array
	 */
	private $series;

	/**
	 * Subtitle.
	 *
	 * @var HighchartsSubtitle
	 */
	private $subtitle;

	/**
	 * Title.
	 *
	 * @var HighchartsTitle
	 */
	private $title;

	/**
	 * Tooltip.
	 *
	 * @var HighchartsTooltip
	 */
	private $tooltip;

	/**
	 * X axis.
	 *
	 * @var array
	 */
	private $xAxis;

	/**
	 * Y axis.
	 *
	 * @var array
	 */
	private $yAxis;

	/**
	 * Z axis.
	 *
	 * @var HighchartsZAxis
	 * @since 5.0.0
	 */
	private $zAxis;

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

		// Check the accessibility.
		if (!is_null($this->accessibility)) {
			$this->accessibility->clear();
		}

		// Check the chart.
		if (!is_null($this->chart)) {
			$this->chart->clear();
		}

		// Check the colors.
		if (!is_null($this->colors)) {
			$this->colors = null;
		}

		// Check the credits.
		if (!is_null($this->credits)) {
			$this->credits->clear();
		}

		// Check the data.
		if (!is_null($this->data)) {
			$this->data->clear();
		}

		// Check the defs.
		if (!is_null($this->defs)) {
			$this->defs = null;
		}

		// Check the drilldown.
		if (!is_null($this->drilldown)) {
			$this->drilldown->clear();
		}

		// Check the exporting.
		if (!is_null($this->exporting)) {
			$this->exporting->clear();
		}

		// Check the labels.
		if (!is_null($this->labels)) {
			$this->labels->clear();
		}

		// Check the legend.
		if (!is_null($this->legend)) {
			$this->legend->clear();
		}

		// Check the loading.
		if (!is_null($this->loading)) {
			$this->loading->clear();
		}

		// Check the navigation.
		if (!is_null($this->navigation)) {
			$this->navigation->clear();
		}

		// Check the no data.
		if (!is_null($this->noData)) {
			$this->noData->clear();
		}

		// Check the pane.
		if (!is_null($this->pane)) {
			$this->pane->clear();
		}

		// Check the plot options.
		if (!is_null($this->plotOptions)) {
			$this->plotOptions->clear();
		}

		// Check the responsive.
		if (!is_null($this->responsive)) {
			$this->responsive->clear();
		}

		// Check the series.
		if (!is_null($this->series)) {
			$this->series = null;
		}

		// Check the subtitle.
		if (!is_null($this->subtitle)) {
			$this->subtitle->clear();
		}

		// Check the title.
		if (!is_null($this->title)) {
			$this->title->clear();
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$this->tooltip->clear();
		}

		// Check the x axis.
		if (!is_null($this->xAxis)) {
			$this->xAxis = null;
		}

		// Check the y axis.
		if (!is_null($this->yAxis)) {
			$this->yAxis = null;
		}

		// Check the z axis.
		if (!is_null($this->zAxis)) {
			$this->zAxis->clear();
		}
	}

	/**
	 * Get the accessibility.
	 *
	 * @return HighchartsAccessibility Returns the accessibility.
	 */
	public function getAccessibility() {
		return $this->accessibility;
	}

	/**
	 * Get the chart.
	 *
	 * @return HighchartsChartChild Returns the chart.
	 */
	public function getChart() {
		return $this->chart;
	}

	/**
	 * Get the colors.
	 *
	 * @return array Returns the colors.
	 */
	public function getColors() {
		return $this->colors;
	}

	/**
	 * Get the credits.
	 *
	 * @return HighchartsCredits Returns the credits.
	 */
	public function getCredits() {
		return $this->credits;
	}

	/**
	 * Get the data.
	 *
	 * @return HighchartsData Returns the data.
	 */
	public function getData() {
		return $this->data;
	}

	/**
	 * Get the defs.
	 *
	 * @return Object Returns the defs.
	 */
	public function getDefs() {
		return $this->defs;
	}

	/**
	 * Get the drilldown.
	 *
	 * @return HighchartsDrilldown Returns the drilldown.
	 */
	public function getDrilldown() {
		return $this->drilldown;
	}

	/**
	 * Get the exporting.
	 *
	 * @return HighchartsExporting Returns the exporting.
	 */
	public function getExporting() {
		return $this->exporting;
	}

	/**
	 * Get the labels.
	 *
	 * @return HighchartsLabels Returns the labels.
	 */
	public function getLabels() {
		return $this->labels;
	}

	/**
	 * Get the legend.
	 *
	 * @return HighchartsLegend Returns the legend.
	 */
	public function getLegend() {
		return $this->legend;
	}

	/**
	 * Get the loading.
	 *
	 * @return HighchartsLoading Returns the loading.
	 */
	public function getLoading() {
		return $this->loading;
	}

	/**
	 * Get the navigation.
	 *
	 * @return HighchartsNavigation Returns the navigation.
	 */
	public function getNavigation() {
		return $this->navigation;
	}

	/**
	 * Get the no data.
	 *
	 * @return HighchartsNoData Returns the no data.
	 */
	public function getNoData() {
		return $this->noData;
	}

	/**
	 * Get the pane.
	 *
	 * @return HighchartsPane Returns the pane.
	 */
	public function getPane() {
		return $this->pane;
	}

	/**
	 * Get the plot options.
	 *
	 * @return HighchartsPlotOptions Returns the plot options.
	 */
	public function getPlotOptions() {
		return $this->plotOptions;
	}

	/**
	 * Get the responsive.
	 *
	 * @return HighchartsResponsive Returns the responsive.
	 */
	public function getResponsive() {
		return $this->responsive;
	}

	/**
	 * Get the series.
	 *
	 * @return array Returns the series.
	 */
	public function getSeries() {
		return $this->series;
	}

	/**
	 * Get the subtitle.
	 *
	 * @return HighchartsSubtitle Returns the subtitle.
	 */
	public function getSubtitle() {
		return $this->subtitle;
	}

	/**
	 * Get the title.
	 *
	 * @return HighchartsTitle Returns the title.
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Get the tooltip.
	 *
	 * @return HighchartsTooltip Returns the tooltip.
	 */
	public function getTooltip() {
		return $this->tooltip;
	}

	/**
	 * Get the x axis.
	 *
	 * @return array Returns the x axis.
	 */
	public function getXAxis() {
		return $this->xAxis;
	}

	/**
	 * Get the y axis.
	 *
	 * @return array Returns the y axis.
	 */
	public function getYAxis() {
		return $this->yAxis;
	}

	/**
	 * Get the z axis.
	 *
	 * @return HighchartsZAxis Returns the z axis.
	 */
	public function getZAxis() {
		return $this->zAxis;
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
	 * Create a new accessibility.
	 *
	 * @return HighchartsAccessibility Returns the accessibility.
	 */
	public function newAccessibility() {
		$this->accessibility = new HighchartsAccessibility();
		return $this->accessibility;
	}

	/**
	 * Create a new chart.
	 *
	 * @return HighchartsChartChild Returns the chart.
	 */
	public function newChart() {
		$this->chart = new HighchartsChartChild();
		return $this->chart;
	}

	/**
	 * Create a new credits.
	 *
	 * @return HighchartsCredits Returns the credits.
	 */
	public function newCredits() {
		$this->credits = new HighchartsCredits();
		return $this->credits;
	}

	/**
	 * Create a new data.
	 *
	 * @return HighchartsData Returns the data.
	 */
	public function newData() {
		$this->data = new HighchartsData();
		return $this->data;
	}

	/**
	 * Create a new drilldown.
	 *
	 * @return HighchartsDrilldown Returns the drilldown.
	 */
	public function newDrilldown() {
		$this->drilldown = new HighchartsDrilldown();
		return $this->drilldown;
	}

	/**
	 * Create a new exporting.
	 *
	 * @return HighchartsExporting Returns the exporting.
	 */
	public function newExporting() {
		$this->exporting = new HighchartsExporting();
		return $this->exporting;
	}

	/**
	 * Create a new labels.
	 *
	 * @return HighchartsLabels Returns the labels.
	 */
	public function newLabels() {
		$this->labels = new HighchartsLabels();
		return $this->labels;
	}

	/**
	 * Create a new legend.
	 *
	 * @return HighchartsLegend Returns the legend.
	 */
	public function newLegend() {
		$this->legend = new HighchartsLegend();
		return $this->legend;
	}

	/**
	 * Create a new loading.
	 *
	 * @return HighchartsLoading Returns the loading.
	 */
	public function newLoading() {
		$this->loading = new HighchartsLoading();
		return $this->loading;
	}

	/**
	 * Create a new navigation.
	 *
	 * @return HighchartsNavigation Returns the navigation.
	 */
	public function newNavigation() {
		$this->navigation = new HighchartsNavigation();
		return $this->navigation;
	}

	/**
	 * Create a new no data.
	 *
	 * @return HighchartsNoData Returns the no data.
	 */
	public function newNoData() {
		$this->noData = new HighchartsNoData();
		return $this->noData;
	}

	/**
	 * Create a new pane.
	 *
	 * @return HighchartsPane Returns the pane.
	 */
	public function newPane() {
		$this->pane = new HighchartsPane();
		return $this->pane;
	}

	/**
	 * Create a new plot options.
	 *
	 * @return HighchartsPlotOptions Returns the plot options.
	 */
	public function newPlotOptions() {
		$this->plotOptions = new HighchartsPlotOptions();
		return $this->plotOptions;
	}

	/**
	 * Create a new responsive.
	 *
	 * @return HighchartsResponsive Returns the responsive.
	 */
	public function newResponsive() {
		$this->responsive = new HighchartsResponsive();
		return $this->responsive;
	}

	/**
	 * Create a new subtitle.
	 *
	 * @return HighchartsSubtitle Returns the subtitle.
	 */
	public function newSubtitle() {
		$this->subtitle = new HighchartsSubtitle();
		return $this->subtitle;
	}

	/**
	 * Create a new title.
	 *
	 * @return HighchartsTitle Returns the title.
	 */
	public function newTitle() {
		$this->title = new HighchartsTitle();
		return $this->title;
	}

	/**
	 * Create a new tooltip.
	 *
	 * @return HighchartsTooltip Returns the tooltip.
	 */
	public function newTooltip() {
		$this->tooltip = new HighchartsTooltip();
		return $this->tooltip;
	}

	/**
	 * Create a new z axis.
	 *
	 * @return HighchartsZAxis Returns the z axis.
	 */
	public function newZAxis() {
		$this->zAxis = new HighchartsZAxis();
		return $this->zAxis;
	}

	/**
	 * Set the accessibility.
	 *
	 * @param HighchartsAccessibility $accessibility The accessibility.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setAccessibility(HighchartsAccessibility $accessibility = null) {
		$this->accessibility = $accessibility;
		return $this;
	}

	/**
	 * Set the chart.
	 *
	 * @param HighchartsChartChild $chart The chart.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setChart(HighchartsChartChild $chart = null) {
		$this->chart = $chart;
		return $this;
	}

	/**
	 * Set the colors.
	 *
	 * @param array $colors The colors.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setColors(array $colors = null) {
		$this->colors = $colors;
		return $this;
	}

	/**
	 * Set the credits.
	 *
	 * @param HighchartsCredits $credits The credits.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setCredits(HighchartsCredits $credits = null) {
		$this->credits = $credits;
		return $this;
	}

	/**
	 * Set the data.
	 *
	 * @param HighchartsData $data The data.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setData(HighchartsData $data = null) {
		$this->data = $data;
		return $this;
	}

	/**
	 * Set the defs.
	 *
	 * @param Object $defs The defs.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setDefs($defs) {
		$this->defs = $defs;
		return $this;
	}

	/**
	 * Set the drilldown.
	 *
	 * @param HighchartsDrilldown $drilldown The drilldown.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setDrilldown(HighchartsDrilldown $drilldown = null) {
		$this->drilldown = $drilldown;
		return $this;
	}

	/**
	 * Set the exporting.
	 *
	 * @param HighchartsExporting $exporting The exporting.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setExporting(HighchartsExporting $exporting = null) {
		$this->exporting = $exporting;
		return $this;
	}

	/**
	 * Set the labels.
	 *
	 * @param HighchartsLabels $labels The labels.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setLabels(HighchartsLabels $labels = null) {
		$this->labels = $labels;
		return $this;
	}

	/**
	 * Set the legend.
	 *
	 * @param HighchartsLegend $legend The legend.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setLegend(HighchartsLegend $legend = null) {
		$this->legend = $legend;
		return $this;
	}

	/**
	 * Set the loading.
	 *
	 * @param HighchartsLoading $loading The loading.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setLoading(HighchartsLoading $loading = null) {
		$this->loading = $loading;
		return $this;
	}

	/**
	 * Set the navigation.
	 *
	 * @param HighchartsNavigation $navigation The navigation.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setNavigation(HighchartsNavigation $navigation = null) {
		$this->navigation = $navigation;
		return $this;
	}

	/**
	 * Set the no data.
	 *
	 * @param HighchartsNoData $noData The no data.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setNoData(HighchartsNoData $noData = null) {
		$this->noData = $noData;
		return $this;
	}

	/**
	 * Set the pane.
	 *
	 * @param HighchartsPane $pane The pane.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPane(HighchartsPane $pane = null) {
		$this->pane = $pane;
		return $this;
	}

	/**
	 * Set the plot options.
	 *
	 * @param HighchartsPlotOptions $plotOptions The plot options.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setPlotOptions(HighchartsPlotOptions $plotOptions = null) {
		$this->plotOptions = $plotOptions;
		return $this;
	}

	/**
	 * Set the responsive.
	 *
	 * @param HighchartsResponsive $responsive The responsive.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setResponsive(HighchartsResponsive $responsive = null) {
		$this->responsive = $responsive;
		return $this;
	}

	/**
	 * Set the series.
	 *
	 * @param array $series The series.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setSeries(array $series = null) {
		$this->series = $series;
		return $this;
	}

	/**
	 * Set the subtitle.
	 *
	 * @param HighchartsSubtitle $subtitle The subtitle.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setSubtitle(HighchartsSubtitle $subtitle = null) {
		$this->subtitle = $subtitle;
		return $this;
	}

	/**
	 * Set the title.
	 *
	 * @param HighchartsTitle $title The title.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setTitle(HighchartsTitle $title = null) {
		$this->title = $title;
		return $this;
	}

	/**
	 * Set the tooltip.
	 *
	 * @param HighchartsTooltip $tooltip The tooltip.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setTooltip(HighchartsTooltip $tooltip = null) {
		$this->tooltip = $tooltip;
		return $this;
	}

	/**
	 * Set the x axis.
	 *
	 * @param array $xAxis The x axis.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setXAxis(array $xAxis = null) {
		$this->xAxis = $xAxis;
		return $this;
	}

	/**
	 * Set the y axis.
	 *
	 * @param array $yAxis The y axis.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setYAxis(array $yAxis = null) {
		$this->yAxis = $yAxis;
		return $this;
	}

	/**
	 * Set the z axis.
	 *
	 * @param HighchartsZAxis $zAxis The z axis.
	 * @return HighchartsChart Returns the highcharts chart.
	 */
	public function setZAxis(HighchartsZAxis $zAxis = null) {
		$this->zAxis = $zAxis;
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

		// Check the accessibility.
		if (!is_null($this->accessibility)) {
			$output["accessibility"] = $this->accessibility->toArray();
		}

		// Check the chart.
		if (!is_null($this->chart)) {
			$output["chart"] = $this->chart->toArray();
		}

		// Check the colors.
		if (!is_null($this->colors)) {
			$output["colors"] = $this->colors;
		}

		// Check the credits.
		if (!is_null($this->credits)) {
			$output["credits"] = $this->credits->toArray();
		}

		// Check the data.
		if (!is_null($this->data)) {
			$output["data"] = $this->data->toArray();
		}

		// Check the defs.
		if (!is_null($this->defs)) {
			$output["defs"] = $this->defs;
		}

		// Check the drilldown.
		if (!is_null($this->drilldown)) {
			$output["drilldown"] = $this->drilldown->toArray();
		}

		// Check the exporting.
		if (!is_null($this->exporting)) {
			$output["exporting"] = $this->exporting->toArray();
		}

		// Check the labels.
		if (!is_null($this->labels)) {
			$output["labels"] = $this->labels->toArray();
		}

		// Check the legend.
		if (!is_null($this->legend)) {
			$output["legend"] = $this->legend->toArray();
		}

		// Check the loading.
		if (!is_null($this->loading)) {
			$output["loading"] = $this->loading->toArray();
		}

		// Check the navigation.
		if (!is_null($this->navigation)) {
			$output["navigation"] = $this->navigation->toArray();
		}

		// Check the no data.
		if (!is_null($this->noData)) {
			$output["noData"] = $this->noData->toArray();
		}

		// Check the pane.
		if (!is_null($this->pane)) {
			$output["pane"] = $this->pane->toArray();
		}

		// Check the plot options.
		if (!is_null($this->plotOptions)) {
			$output["plotOptions"] = $this->plotOptions->toArray();
		}

		// Check the responsive.
		if (!is_null($this->responsive)) {
			$output["responsive"] = $this->responsive->toArray();
		}

		// Check the series.
		if (!is_null($this->series)) {
			$output["series"] = $this->series;
		}

		// Check the subtitle.
		if (!is_null($this->subtitle)) {
			$output["subtitle"] = $this->subtitle->toArray();
		}

		// Check the title.
		if (!is_null($this->title)) {
			$output["title"] = $this->title->toArray();
		}

		// Check the tooltip.
		if (!is_null($this->tooltip)) {
			$output["tooltip"] = $this->tooltip->toArray();
		}

		// Check the x axis.
		if (!is_null($this->xAxis)) {
			$output["xAxis"] = $this->xAxis;
		}

		// Check the y axis.
		if (!is_null($this->yAxis)) {
			$output["yAxis"] = $this->yAxis;
		}

		// Check the z axis.
		if (!is_null($this->zAxis)) {
			$output["zAxis"] = $this->zAxis->toArray();
		}

		// Return the output.
		return $output;
	}
}

