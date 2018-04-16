<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API;

use JsonSerializable;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Highcharts chart.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API
 * @version 5.0.14
 * @final
 */
final class HighchartsChart implements JsonSerializable {

    /**
     * Accessibility.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility
     * @since 5.0.0
     */
    private $accessibility;

    /**
     * Chart.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart
     */
    private $chart;

    /**
     * Colors.
     *
     * @var array
     */
    private $colors = ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"];

    /**
     * Credits.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits
     */
    private $credits;

    /**
     * Data.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData
     * @since 4.0
     */
    private $data;

    /**
     * Defs.
     *
     * @var array
     * @since 5.0.0
     */
    private $defs;

    /**
     * Drilldown.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown
     * @since 3.0.8
     */
    private $drilldown;

    /**
     * Exporting.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting
     */
    private $exporting;

    /**
     * Labels.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels
     */
    private $labels;

    /**
     * Legend.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend
     */
    private $legend;

    /**
     * Loading.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading
     */
    private $loading;

    /**
     * Navigation.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation
     */
    private $navigation;

    /**
     * No data.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData
     * @since 3.0.8
     */
    private $noData;

    /**
     * Pane.
     *
     * @var array
     * @since 2.3.0
     */
    private $pane;

    /**
     * Plot options.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions
     */
    private $plotOptions;

    /**
     * Responsive.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive
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
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle
     */
    private $subtitle;

    /**
     * Title.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle
     */
    private $title;

    /**
     * Tooltip.
     *
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip
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
     * @var \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis
     * @since 5.0.0
     */
    private $zAxis;

    /**
     * Constructor.
     *
     * @param boolean $ignoreDefaultValues Ignore the default values.
     */
    public function __construct($ignoreDefaultValues = true) {
        if (true === $ignoreDefaultValues) {
            $this->clear();
        }
    }

    /**
     * Clear.
     *
     * @return void
     */
    public function clear() {

        // Clear the accessibility.
        if (null !== $this->accessibility) {
            $this->accessibility->clear();
        }

        // Clear the chart.
        if (null !== $this->chart) {
            $this->chart->clear();
        }

        // Clear the colors.
        $this->colors = null;

        // Clear the credits.
        if (null !== $this->credits) {
            $this->credits->clear();
        }

        // Clear the data.
        if (null !== $this->data) {
            $this->data->clear();
        }

        // Clear the defs.
        $this->defs = null;

        // Clear the drilldown.
        if (null !== $this->drilldown) {
            $this->drilldown->clear();
        }

        // Clear the exporting.
        if (null !== $this->exporting) {
            $this->exporting->clear();
        }

        // Clear the labels.
        if (null !== $this->labels) {
            $this->labels->clear();
        }

        // Clear the legend.
        if (null !== $this->legend) {
            $this->legend->clear();
        }

        // Clear the loading.
        if (null !== $this->loading) {
            $this->loading->clear();
        }

        // Clear the navigation.
        if (null !== $this->navigation) {
            $this->navigation->clear();
        }

        // Clear the no data.
        if (null !== $this->noData) {
            $this->noData->clear();
        }

        // Clear the pane.
        $this->pane = null;

        // Clear the plot options.
        if (null !== $this->plotOptions) {
            $this->plotOptions->clear();
        }

        // Clear the responsive.
        if (null !== $this->responsive) {
            $this->responsive->clear();
        }

        // Clear the series.
        $this->series = null;

        // Clear the subtitle.
        if (null !== $this->subtitle) {
            $this->subtitle->clear();
        }

        // Clear the title.
        if (null !== $this->title) {
            $this->title->clear();
        }

        // Clear the tooltip.
        if (null !== $this->tooltip) {
            $this->tooltip->clear();
        }

        // Clear the x axis.
        $this->xAxis = null;

        // Clear the y axis.
        $this->yAxis = null;

        // Clear the z axis.
        if (null !== $this->zAxis) {
            $this->zAxis->clear();
        }
    }

    /**
     * Get the accessibility.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the accessibility.
     */
    public function getAccessibility() {
        return $this->accessibility;
    }

    /**
     * Get the chart.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the chart.
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits Returns the credits.
     */
    public function getCredits() {
        return $this->credits;
    }

    /**
     * Get the data.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the data.
     */
    public function getData() {
        return $this->data;
    }

    /**
     * Get the defs.
     *
     * @return array Returns the defs.
     */
    public function getDefs() {
        return $this->defs;
    }

    /**
     * Get the drilldown.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown Returns the drilldown.
     */
    public function getDrilldown() {
        return $this->drilldown;
    }

    /**
     * Get the exporting.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting Returns the exporting.
     */
    public function getExporting() {
        return $this->exporting;
    }

    /**
     * Get the labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels Returns the labels.
     */
    public function getLabels() {
        return $this->labels;
    }

    /**
     * Get the legend.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the legend.
     */
    public function getLegend() {
        return $this->legend;
    }

    /**
     * Get the loading.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading Returns the loading.
     */
    public function getLoading() {
        return $this->loading;
    }

    /**
     * Get the navigation.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation Returns the navigation.
     */
    public function getNavigation() {
        return $this->navigation;
    }

    /**
     * Get the no data.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData Returns the no data.
     */
    public function getNoData() {
        return $this->noData;
    }

    /**
     * Get the pane.
     *
     * @return array Returns the pane.
     */
    public function getPane() {
        return $this->pane;
    }

    /**
     * Get the plot options.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the plot options.
     */
    public function getPlotOptions() {
        return $this->plotOptions;
    }

    /**
     * Get the responsive.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive Returns the responsive.
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the subtitle.
     */
    public function getSubtitle() {
        return $this->subtitle;
    }

    /**
     * Get the title.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle Returns the title.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Get the tooltip.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the tooltip.
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the z axis.
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
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility Returns the accessibility.
     */
    public function newAccessibility() {
        $this->accessibility = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility();
        return $this->accessibility;
    }

    /**
     * Create a new chart.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart Returns the chart.
     */
    public function newChart() {
        $this->chart = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart();
        return $this->chart;
    }

    /**
     * Create a new credits.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits Returns the credits.
     */
    public function newCredits() {
        $this->credits = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits();
        return $this->credits;
    }

    /**
     * Create a new data.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData Returns the data.
     */
    public function newData() {
        $this->data = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData();
        return $this->data;
    }

    /**
     * Create a new drilldown.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown Returns the drilldown.
     */
    public function newDrilldown() {
        $this->drilldown = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown();
        return $this->drilldown;
    }

    /**
     * Create a new exporting.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting Returns the exporting.
     */
    public function newExporting() {
        $this->exporting = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting();
        return $this->exporting;
    }

    /**
     * Create a new labels.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels Returns the labels.
     */
    public function newLabels() {
        $this->labels = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels();
        return $this->labels;
    }

    /**
     * Create a new legend.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend Returns the legend.
     */
    public function newLegend() {
        $this->legend = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend();
        return $this->legend;
    }

    /**
     * Create a new loading.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading Returns the loading.
     */
    public function newLoading() {
        $this->loading = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading();
        return $this->loading;
    }

    /**
     * Create a new navigation.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation Returns the navigation.
     */
    public function newNavigation() {
        $this->navigation = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation();
        return $this->navigation;
    }

    /**
     * Create a new no data.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData Returns the no data.
     */
    public function newNoData() {
        $this->noData = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData();
        return $this->noData;
    }

    /**
     * Create a new plot options.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the plot options.
     */
    public function newPlotOptions() {
        $this->plotOptions = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions();
        return $this->plotOptions;
    }

    /**
     * Create a new responsive.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive Returns the responsive.
     */
    public function newResponsive() {
        $this->responsive = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive();
        return $this->responsive;
    }

    /**
     * Create a new subtitle.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle Returns the subtitle.
     */
    public function newSubtitle() {
        $this->subtitle = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle();
        return $this->subtitle;
    }

    /**
     * Create a new title.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle Returns the title.
     */
    public function newTitle() {
        $this->title = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle();
        return $this->title;
    }

    /**
     * Create a new tooltip.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip Returns the tooltip.
     */
    public function newTooltip() {
        $this->tooltip = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip();
        return $this->tooltip;
    }

    /**
     * Create a new z axis.
     *
     * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis Returns the z axis.
     */
    public function newZAxis() {
        $this->zAxis = new \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis();
        return $this->zAxis;
    }

    /**
     * Set the accessibility.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility $accessibility The accessibility.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setAccessibility(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsAccessibility $accessibility = null) {
        $this->accessibility = $accessibility;
        return $this;
    }

    /**
     * Set the chart.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart $chart The chart.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setChart(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsChart $chart = null) {
        $this->chart = $chart;
        return $this;
    }

    /**
     * Set the colors.
     *
     * @param array $colors The colors.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setColors(array $colors = null) {
        $this->colors = $colors;
        return $this;
    }

    /**
     * Set the credits.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits $credits The credits.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setCredits(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsCredits $credits = null) {
        $this->credits = $credits;
        return $this;
    }

    /**
     * Set the data.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData $data The data.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setData(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsData $data = null) {
        $this->data = $data;
        return $this;
    }

    /**
     * Set the defs.
     *
     * @param array $defs The defs.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setDefs(array $defs = null) {
        $this->defs = $defs;
        return $this;
    }

    /**
     * Set the drilldown.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown $drilldown The drilldown.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setDrilldown(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsDrilldown $drilldown = null) {
        $this->drilldown = $drilldown;
        return $this;
    }

    /**
     * Set the exporting.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting $exporting The exporting.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setExporting(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsExporting $exporting = null) {
        $this->exporting = $exporting;
        return $this;
    }

    /**
     * Set the labels.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels $labels The labels.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setLabels(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLabels $labels = null) {
        $this->labels = $labels;
        return $this;
    }

    /**
     * Set the legend.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend $legend The legend.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setLegend(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLegend $legend = null) {
        $this->legend = $legend;
        return $this;
    }

    /**
     * Set the loading.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading $loading The loading.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setLoading(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsLoading $loading = null) {
        $this->loading = $loading;
        return $this;
    }

    /**
     * Set the navigation.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation $navigation The navigation.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setNavigation(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNavigation $navigation = null) {
        $this->navigation = $navigation;
        return $this;
    }

    /**
     * Set the no data.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData $noData The no data.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setNoData(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsNoData $noData = null) {
        $this->noData = $noData;
        return $this;
    }

    /**
     * Set the pane.
     *
     * @param array $pane The pane.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setPane(array $pane = null) {
        $this->pane = $pane;
        return $this;
    }

    /**
     * Set the plot options.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions $plotOptions The plot options.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setPlotOptions(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions $plotOptions = null) {
        $this->plotOptions = $plotOptions;
        return $this;
    }

    /**
     * Set the responsive.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive $responsive The responsive.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setResponsive(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsResponsive $responsive = null) {
        $this->responsive = $responsive;
        return $this;
    }

    /**
     * Set the series.
     *
     * @param array $series The series.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setSeries(array $series = null) {
        $this->series = $series;
        return $this;
    }

    /**
     * Set the subtitle.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle $subtitle The subtitle.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setSubtitle(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsSubtitle $subtitle = null) {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * Set the title.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle $title The title.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setTitle(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTitle $title = null) {
        $this->title = $title;
        return $this;
    }

    /**
     * Set the tooltip.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip $tooltip The tooltip.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setTooltip(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsTooltip $tooltip = null) {
        $this->tooltip = $tooltip;
        return $this;
    }

    /**
     * Set the x axis.
     *
     * @param array $xAxis The x axis.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setXAxis(array $xAxis = null) {
        $this->xAxis = $xAxis;
        return $this;
    }

    /**
     * Set the y axis.
     *
     * @param array $yAxis The y axis.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setYAxis(array $yAxis = null) {
        $this->yAxis = $yAxis;
        return $this;
    }

    /**
     * Set the z axis.
     *
     * @param \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis $zAxis The z axis.
     * @return \WBW\Bundle\HighchartsBundle\API\HighchartsChart Returns the highcharts chart.
     */
    public function setZAxis(\WBW\Bundle\HighchartsBundle\API\Chart\HighchartsZAxis $zAxis = null) {
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

        // Set the accessibility.
        if (null !== $this->accessibility) {
            ArrayUtility::set($output, "accessibility", $this->accessibility->toArray(), []);
        }

        // Set the chart.
        if (null !== $this->chart) {
            ArrayUtility::set($output, "chart", $this->chart->toArray(), []);
        }

        // Set the colors.
        ArrayUtility::set($output, "colors", $this->colors, [null]);

        // Set the credits.
        if (null !== $this->credits) {
            ArrayUtility::set($output, "credits", $this->credits->toArray(), []);
        }

        // Set the data.
        if (null !== $this->data) {
            ArrayUtility::set($output, "data", $this->data->toArray(), []);
        }

        // Set the defs.
        ArrayUtility::set($output, "defs", $this->defs, [null]);

        // Set the drilldown.
        if (null !== $this->drilldown) {
            ArrayUtility::set($output, "drilldown", $this->drilldown->toArray(), []);
        }

        // Set the exporting.
        if (null !== $this->exporting) {
            ArrayUtility::set($output, "exporting", $this->exporting->toArray(), []);
        }

        // Set the labels.
        if (null !== $this->labels) {
            ArrayUtility::set($output, "labels", $this->labels->toArray(), []);
        }

        // Set the legend.
        if (null !== $this->legend) {
            ArrayUtility::set($output, "legend", $this->legend->toArray(), []);
        }

        // Set the loading.
        if (null !== $this->loading) {
            ArrayUtility::set($output, "loading", $this->loading->toArray(), []);
        }

        // Set the navigation.
        if (null !== $this->navigation) {
            ArrayUtility::set($output, "navigation", $this->navigation->toArray(), []);
        }

        // Set the no data.
        if (null !== $this->noData) {
            ArrayUtility::set($output, "noData", $this->noData->toArray(), []);
        }

        // Set the pane.
        ArrayUtility::set($output, "pane", $this->pane, [null]);

        // Set the plot options.
        if (null !== $this->plotOptions) {
            ArrayUtility::set($output, "plotOptions", $this->plotOptions->toArray(), []);
        }

        // Set the responsive.
        if (null !== $this->responsive) {
            ArrayUtility::set($output, "responsive", $this->responsive->toArray(), []);
        }

        // Set the series.
        ArrayUtility::set($output, "series", $this->series, [null]);

        // Set the subtitle.
        if (null !== $this->subtitle) {
            ArrayUtility::set($output, "subtitle", $this->subtitle->toArray(), []);
        }

        // Set the title.
        if (null !== $this->title) {
            ArrayUtility::set($output, "title", $this->title->toArray(), []);
        }

        // Set the tooltip.
        if (null !== $this->tooltip) {
            ArrayUtility::set($output, "tooltip", $this->tooltip->toArray(), []);
        }

        // Set the x axis.
        ArrayUtility::set($output, "xAxis", $this->xAxis, [null]);

        // Set the y axis.
        ArrayUtility::set($output, "yAxis", $this->yAxis, [null]);

        // Set the z axis.
        if (null !== $this->zAxis) {
            ArrayUtility::set($output, "zAxis", $this->zAxis->toArray(), []);
        }

        // Return the output.
        return $output;
    }

}
