<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\API\Chart;

use JsonSerializable;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline;

/**
 * Highcharts plot options.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsPlotOptions implements JsonSerializable {

	/**
	 * Area.
	 *
	 * @var HighchartsArea
	 */
	private $area;

	/**
	 * Arearange.
	 *
	 * @var HighchartsArearange
	 * @since 2.3.0
	 */
	private $arearange;

	/**
	 * Areaspline.
	 *
	 * @var HighchartsAreaspline
	 */
	private $areaspline;

	/**
	 * Areasplinerange.
	 *
	 * @var HighchartsAreasplinerange
	 * @since 2.3.0
	 */
	private $areasplinerange;

	/**
	 * Bar.
	 *
	 * @var HighchartsBar
	 */
	private $bar;

	/**
	 * Boxplot.
	 *
	 * @var array
	 * @since 3.0
	 */
	private $boxplot;

	/**
	 * Bubble.
	 *
	 * @var array
	 * @since 3.0
	 */
	private $bubble;

	/**
	 * Column.
	 *
	 * @var HighchartsColumn
	 */
	private $column;

	/**
	 * Columnrange.
	 *
	 * @var array
	 * @since 2.3.0
	 */
	private $columnrange;

	/**
	 * Errorbar.
	 *
	 * @var array
	 * @since 3.0
	 */
	private $errorbar;

	/**
	 * Funnel.
	 *
	 * @var array
	 * @since 3.0
	 */
	private $funnel;

	/**
	 * Gauge.
	 *
	 * @var array
	 * @since 2.3.0
	 */
	private $gauge;

	/**
	 * Heatmap.
	 *
	 * @var array
	 * @since 4.0
	 */
	private $heatmap;

	/**
	 * Line.
	 *
	 * @var HighchartsLine
	 */
	private $line;

	/**
	 * Pie.
	 *
	 * @var HighchartsPie
	 */
	private $pie;

	/**
	 * Polygon.
	 *
	 * @var array
	 * @since 4.1.0
	 */
	private $polygon;

	/**
	 * Pyramid.
	 *
	 * @var array
	 * @since 3.0.10
	 */
	private $pyramid;

	/**
	 * Scatter.
	 *
	 * @var HighchartsScatter
	 */
	private $scatter;

	/**
	 * Series.
	 *
	 * @var HighchartsSeries
	 */
	private $series;

	/**
	 * Solidgauge.
	 *
	 * @var array
	 * @since 4.0
	 */
	private $solidgauge;

	/**
	 * Spline.
	 *
	 * @var HighchartsSpline
	 */
	private $spline;

	/**
	 * Treemap.
	 *
	 * @var array
	 * @since 4.1.0
	 */
	private $treemap;

	/**
	 * Waterfall.
	 *
	 * @var array
	 * @since 3.0
	 */
	private $waterfall;

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

		// Check the area.
		if (!is_null($this->area)) {
			$this->area->clear();
		}

		// Check the arearange.
		if (!is_null($this->arearange)) {
			$this->arearange->clear();
		}

		// Check the areaspline.
		if (!is_null($this->areaspline)) {
			$this->areaspline->clear();
		}

		// Check the areasplinerange.
		if (!is_null($this->areasplinerange)) {
			$this->areasplinerange->clear();
		}

		// Check the bar.
		if (!is_null($this->bar)) {
			$this->bar->clear();
		}

		// Check the boxplot.
		if (!is_null($this->boxplot)) {
			$this->boxplot = null;
		}

		// Check the bubble.
		if (!is_null($this->bubble)) {
			$this->bubble = null;
		}

		// Check the column.
		if (!is_null($this->column)) {
			$this->column->clear();
		}

		// Check the columnrange.
		if (!is_null($this->columnrange)) {
			$this->columnrange = null;
		}

		// Check the errorbar.
		if (!is_null($this->errorbar)) {
			$this->errorbar = null;
		}

		// Check the funnel.
		if (!is_null($this->funnel)) {
			$this->funnel = null;
		}

		// Check the gauge.
		if (!is_null($this->gauge)) {
			$this->gauge = null;
		}

		// Check the heatmap.
		if (!is_null($this->heatmap)) {
			$this->heatmap = null;
		}

		// Check the line.
		if (!is_null($this->line)) {
			$this->line->clear();
		}

		// Check the pie.
		if (!is_null($this->pie)) {
			$this->pie->clear();
		}

		// Check the polygon.
		if (!is_null($this->polygon)) {
			$this->polygon = null;
		}

		// Check the pyramid.
		if (!is_null($this->pyramid)) {
			$this->pyramid = null;
		}

		// Check the scatter.
		if (!is_null($this->scatter)) {
			$this->scatter->clear();
		}

		// Check the series.
		if (!is_null($this->series)) {
			$this->series->clear();
		}

		// Check the solidgauge.
		if (!is_null($this->solidgauge)) {
			$this->solidgauge = null;
		}

		// Check the spline.
		if (!is_null($this->spline)) {
			$this->spline->clear();
		}

		// Check the treemap.
		if (!is_null($this->treemap)) {
			$this->treemap = null;
		}

		// Check the waterfall.
		if (!is_null($this->waterfall)) {
			$this->waterfall = null;
		}
	}

	/**
	 * Get the area.
	 *
	 * @return HighchartsArea Returns the area.
	 */
	public function getArea() {
		return $this->area;
	}

	/**
	 * Get the arearange.
	 *
	 * @return HighchartsArearange Returns the arearange.
	 */
	public function getArearange() {
		return $this->arearange;
	}

	/**
	 * Get the areaspline.
	 *
	 * @return HighchartsAreaspline Returns the areaspline.
	 */
	public function getAreaspline() {
		return $this->areaspline;
	}

	/**
	 * Get the areasplinerange.
	 *
	 * @return HighchartsAreasplinerange Returns the areasplinerange.
	 */
	public function getAreasplinerange() {
		return $this->areasplinerange;
	}

	/**
	 * Get the bar.
	 *
	 * @return HighchartsBar Returns the bar.
	 */
	public function getBar() {
		return $this->bar;
	}

	/**
	 * Get the boxplot.
	 *
	 * @return array Returns the boxplot.
	 */
	public function getBoxplot() {
		return $this->boxplot;
	}

	/**
	 * Get the bubble.
	 *
	 * @return array Returns the bubble.
	 */
	public function getBubble() {
		return $this->bubble;
	}

	/**
	 * Get the column.
	 *
	 * @return HighchartsColumn Returns the column.
	 */
	public function getColumn() {
		return $this->column;
	}

	/**
	 * Get the columnrange.
	 *
	 * @return array Returns the columnrange.
	 */
	public function getColumnrange() {
		return $this->columnrange;
	}

	/**
	 * Get the errorbar.
	 *
	 * @return array Returns the errorbar.
	 */
	public function getErrorbar() {
		return $this->errorbar;
	}

	/**
	 * Get the funnel.
	 *
	 * @return array Returns the funnel.
	 */
	public function getFunnel() {
		return $this->funnel;
	}

	/**
	 * Get the gauge.
	 *
	 * @return array Returns the gauge.
	 */
	public function getGauge() {
		return $this->gauge;
	}

	/**
	 * Get the heatmap.
	 *
	 * @return array Returns the heatmap.
	 */
	public function getHeatmap() {
		return $this->heatmap;
	}

	/**
	 * Get the line.
	 *
	 * @return HighchartsLine Returns the line.
	 */
	public function getLine() {
		return $this->line;
	}

	/**
	 * Get the pie.
	 *
	 * @return HighchartsPie Returns the pie.
	 */
	public function getPie() {
		return $this->pie;
	}

	/**
	 * Get the polygon.
	 *
	 * @return array Returns the polygon.
	 */
	public function getPolygon() {
		return $this->polygon;
	}

	/**
	 * Get the pyramid.
	 *
	 * @return array Returns the pyramid.
	 */
	public function getPyramid() {
		return $this->pyramid;
	}

	/**
	 * Get the scatter.
	 *
	 * @return HighchartsScatter Returns the scatter.
	 */
	public function getScatter() {
		return $this->scatter;
	}

	/**
	 * Get the series.
	 *
	 * @return HighchartsSeries Returns the series.
	 */
	public function getSeries() {
		return $this->series;
	}

	/**
	 * Get the solidgauge.
	 *
	 * @return array Returns the solidgauge.
	 */
	public function getSolidgauge() {
		return $this->solidgauge;
	}

	/**
	 * Get the spline.
	 *
	 * @return HighchartsSpline Returns the spline.
	 */
	public function getSpline() {
		return $this->spline;
	}

	/**
	 * Get the treemap.
	 *
	 * @return array Returns the treemap.
	 */
	public function getTreemap() {
		return $this->treemap;
	}

	/**
	 * Get the waterfall.
	 *
	 * @return array Returns the waterfall.
	 */
	public function getWaterfall() {
		return $this->waterfall;
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
	 * Create a new area.
	 *
	 * @return HighchartsArea Returns the area.
	 */
	public function newArea() {
		$this->area = new HighchartsArea();
		return $this->area;
	}

	/**
	 * Create a new arearange.
	 *
	 * @return HighchartsArearange Returns the arearange.
	 */
	public function newArearange() {
		$this->arearange = new HighchartsArearange();
		return $this->arearange;
	}

	/**
	 * Create a new areaspline.
	 *
	 * @return HighchartsAreaspline Returns the areaspline.
	 */
	public function newAreaspline() {
		$this->areaspline = new HighchartsAreaspline();
		return $this->areaspline;
	}

	/**
	 * Create a new areasplinerange.
	 *
	 * @return HighchartsAreasplinerange Returns the areasplinerange.
	 */
	public function newAreasplinerange() {
		$this->areasplinerange = new HighchartsAreasplinerange();
		return $this->areasplinerange;
	}

	/**
	 * Create a new bar.
	 *
	 * @return HighchartsBar Returns the bar.
	 */
	public function newBar() {
		$this->bar = new HighchartsBar();
		return $this->bar;
	}

	/**
	 * Create a new column.
	 *
	 * @return HighchartsColumn Returns the column.
	 */
	public function newColumn() {
		$this->column = new HighchartsColumn();
		return $this->column;
	}

	/**
	 * Create a new line.
	 *
	 * @return HighchartsLine Returns the line.
	 */
	public function newLine() {
		$this->line = new HighchartsLine();
		return $this->line;
	}

	/**
	 * Create a new pie.
	 *
	 * @return HighchartsPie Returns the pie.
	 */
	public function newPie() {
		$this->pie = new HighchartsPie();
		return $this->pie;
	}

	/**
	 * Create a new scatter.
	 *
	 * @return HighchartsScatter Returns the scatter.
	 */
	public function newScatter() {
		$this->scatter = new HighchartsScatter();
		return $this->scatter;
	}

	/**
	 * Create a new series.
	 *
	 * @return HighchartsSeries Returns the series.
	 */
	public function newSeries() {
		$this->series = new HighchartsSeries();
		return $this->series;
	}

	/**
	 * Create a new spline.
	 *
	 * @return HighchartsSpline Returns the spline.
	 */
	public function newSpline() {
		$this->spline = new HighchartsSpline();
		return $this->spline;
	}

	/**
	 * Set the area.
	 *
	 * @param HighchartsArea $area The area.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setArea(HighchartsArea $area = null) {
		$this->area = $area;
		return $this;
	}

	/**
	 * Set the arearange.
	 *
	 * @param HighchartsArearange $arearange The arearange.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setArearange(HighchartsArearange $arearange = null) {
		$this->arearange = $arearange;
		return $this;
	}

	/**
	 * Set the areaspline.
	 *
	 * @param HighchartsAreaspline $areaspline The areaspline.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setAreaspline(HighchartsAreaspline $areaspline = null) {
		$this->areaspline = $areaspline;
		return $this;
	}

	/**
	 * Set the areasplinerange.
	 *
	 * @param HighchartsAreasplinerange $areasplinerange The areasplinerange.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setAreasplinerange(HighchartsAreasplinerange $areasplinerange = null) {
		$this->areasplinerange = $areasplinerange;
		return $this;
	}

	/**
	 * Set the bar.
	 *
	 * @param HighchartsBar $bar The bar.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setBar(HighchartsBar $bar = null) {
		$this->bar = $bar;
		return $this;
	}

	/**
	 * Set the boxplot.
	 *
	 * @param array $boxplot The boxplot.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setBoxplot(array $boxplot = null) {
		$this->boxplot = $boxplot;
		return $this;
	}

	/**
	 * Set the bubble.
	 *
	 * @param array $bubble The bubble.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setBubble(array $bubble = null) {
		$this->bubble = $bubble;
		return $this;
	}

	/**
	 * Set the column.
	 *
	 * @param HighchartsColumn $column The column.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setColumn(HighchartsColumn $column = null) {
		$this->column = $column;
		return $this;
	}

	/**
	 * Set the columnrange.
	 *
	 * @param array $columnrange The columnrange.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setColumnrange(array $columnrange = null) {
		$this->columnrange = $columnrange;
		return $this;
	}

	/**
	 * Set the errorbar.
	 *
	 * @param array $errorbar The errorbar.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setErrorbar(array $errorbar = null) {
		$this->errorbar = $errorbar;
		return $this;
	}

	/**
	 * Set the funnel.
	 *
	 * @param array $funnel The funnel.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setFunnel(array $funnel = null) {
		$this->funnel = $funnel;
		return $this;
	}

	/**
	 * Set the gauge.
	 *
	 * @param array $gauge The gauge.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setGauge(array $gauge = null) {
		$this->gauge = $gauge;
		return $this;
	}

	/**
	 * Set the heatmap.
	 *
	 * @param array $heatmap The heatmap.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setHeatmap(array $heatmap = null) {
		$this->heatmap = $heatmap;
		return $this;
	}

	/**
	 * Set the line.
	 *
	 * @param HighchartsLine $line The line.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setLine(HighchartsLine $line = null) {
		$this->line = $line;
		return $this;
	}

	/**
	 * Set the pie.
	 *
	 * @param HighchartsPie $pie The pie.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setPie(HighchartsPie $pie = null) {
		$this->pie = $pie;
		return $this;
	}

	/**
	 * Set the polygon.
	 *
	 * @param array $polygon The polygon.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setPolygon(array $polygon = null) {
		$this->polygon = $polygon;
		return $this;
	}

	/**
	 * Set the pyramid.
	 *
	 * @param array $pyramid The pyramid.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setPyramid(array $pyramid = null) {
		$this->pyramid = $pyramid;
		return $this;
	}

	/**
	 * Set the scatter.
	 *
	 * @param HighchartsScatter $scatter The scatter.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setScatter(HighchartsScatter $scatter = null) {
		$this->scatter = $scatter;
		return $this;
	}

	/**
	 * Set the series.
	 *
	 * @param HighchartsSeries $series The series.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setSeries(HighchartsSeries $series = null) {
		$this->series = $series;
		return $this;
	}

	/**
	 * Set the solidgauge.
	 *
	 * @param array $solidgauge The solidgauge.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setSolidgauge(array $solidgauge = null) {
		$this->solidgauge = $solidgauge;
		return $this;
	}

	/**
	 * Set the spline.
	 *
	 * @param HighchartsSpline $spline The spline.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setSpline(HighchartsSpline $spline = null) {
		$this->spline = $spline;
		return $this;
	}

	/**
	 * Set the treemap.
	 *
	 * @param array $treemap The treemap.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setTreemap(array $treemap = null) {
		$this->treemap = $treemap;
		return $this;
	}

	/**
	 * Set the waterfall.
	 *
	 * @param array $waterfall The waterfall.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setWaterfall(array $waterfall = null) {
		$this->waterfall = $waterfall;
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

		// Check the area.
		if (!is_null($this->area)) {
			$output["area"] = $this->area->toArray();
		}

		// Check the arearange.
		if (!is_null($this->arearange)) {
			$output["arearange"] = $this->arearange->toArray();
		}

		// Check the areaspline.
		if (!is_null($this->areaspline)) {
			$output["areaspline"] = $this->areaspline->toArray();
		}

		// Check the areasplinerange.
		if (!is_null($this->areasplinerange)) {
			$output["areasplinerange"] = $this->areasplinerange->toArray();
		}

		// Check the bar.
		if (!is_null($this->bar)) {
			$output["bar"] = $this->bar->toArray();
		}

		// Check the boxplot.
		if (!is_null($this->boxplot)) {
			$output["boxplot"] = $this->boxplot;
		}

		// Check the bubble.
		if (!is_null($this->bubble)) {
			$output["bubble"] = $this->bubble;
		}

		// Check the column.
		if (!is_null($this->column)) {
			$output["column"] = $this->column->toArray();
		}

		// Check the columnrange.
		if (!is_null($this->columnrange)) {
			$output["columnrange"] = $this->columnrange;
		}

		// Check the errorbar.
		if (!is_null($this->errorbar)) {
			$output["errorbar"] = $this->errorbar;
		}

		// Check the funnel.
		if (!is_null($this->funnel)) {
			$output["funnel"] = $this->funnel;
		}

		// Check the gauge.
		if (!is_null($this->gauge)) {
			$output["gauge"] = $this->gauge;
		}

		// Check the heatmap.
		if (!is_null($this->heatmap)) {
			$output["heatmap"] = $this->heatmap;
		}

		// Check the line.
		if (!is_null($this->line)) {
			$output["line"] = $this->line->toArray();
		}

		// Check the pie.
		if (!is_null($this->pie)) {
			$output["pie"] = $this->pie->toArray();
		}

		// Check the polygon.
		if (!is_null($this->polygon)) {
			$output["polygon"] = $this->polygon;
		}

		// Check the pyramid.
		if (!is_null($this->pyramid)) {
			$output["pyramid"] = $this->pyramid;
		}

		// Check the scatter.
		if (!is_null($this->scatter)) {
			$output["scatter"] = $this->scatter->toArray();
		}

		// Check the series.
		if (!is_null($this->series)) {
			$output["series"] = $this->series->toArray();
		}

		// Check the solidgauge.
		if (!is_null($this->solidgauge)) {
			$output["solidgauge"] = $this->solidgauge;
		}

		// Check the spline.
		if (!is_null($this->spline)) {
			$output["spline"] = $this->spline->toArray();
		}

		// Check the treemap.
		if (!is_null($this->treemap)) {
			$output["treemap"] = $this->treemap;
		}

		// Check the waterfall.
		if (!is_null($this->waterfall)) {
			$output["waterfall"] = $this->waterfall;
		}

		// Return the output.
		return $output;
	}

}
