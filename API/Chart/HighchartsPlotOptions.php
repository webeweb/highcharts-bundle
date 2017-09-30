<?php

/*
 * This file is part of the HighchartsBundle.
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
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumnrange;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPolygon;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPyramid;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap;
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsWaterfall;

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
	 * @var HighchartsBoxplot
	 * @since 3.0
	 */
	private $boxplot;

	/**
	 * Bubble.
	 *
	 * @var HighchartsBubble
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
	 * @var HighchartsColumnrange
	 * @since 2.3.0
	 */
	private $columnrange;

	/**
	 * Errorbar.
	 *
	 * @var HighchartsErrorbar
	 * @since 3.0
	 */
	private $errorbar;

	/**
	 * Funnel.
	 *
	 * @var HighchartsFunnel
	 * @since 3.0
	 */
	private $funnel;

	/**
	 * Gauge.
	 *
	 * @var HighchartsGauge
	 * @since 2.3.0
	 */
	private $gauge;

	/**
	 * Heatmap.
	 *
	 * @var HighchartsHeatmap
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
	 * @var HighchartsPolygon
	 * @since 4.1.0
	 */
	private $polygon;

	/**
	 * Pyramid.
	 *
	 * @var HighchartsPyramid
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
	 * @var HighchartsSolidgauge
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
	 * @var HighchartsTreemap
	 * @since 4.1.0
	 */
	private $treemap;

	/**
	 * Waterfall.
	 *
	 * @var HighchartsWaterfall
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
			$this->boxplot->clear();
		}

		// Check the bubble.
		if (!is_null($this->bubble)) {
			$this->bubble->clear();
		}

		// Check the column.
		if (!is_null($this->column)) {
			$this->column->clear();
		}

		// Check the columnrange.
		if (!is_null($this->columnrange)) {
			$this->columnrange->clear();
		}

		// Check the errorbar.
		if (!is_null($this->errorbar)) {
			$this->errorbar->clear();
		}

		// Check the funnel.
		if (!is_null($this->funnel)) {
			$this->funnel->clear();
		}

		// Check the gauge.
		if (!is_null($this->gauge)) {
			$this->gauge->clear();
		}

		// Check the heatmap.
		if (!is_null($this->heatmap)) {
			$this->heatmap->clear();
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
			$this->polygon->clear();
		}

		// Check the pyramid.
		if (!is_null($this->pyramid)) {
			$this->pyramid->clear();
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
			$this->solidgauge->clear();
		}

		// Check the spline.
		if (!is_null($this->spline)) {
			$this->spline->clear();
		}

		// Check the treemap.
		if (!is_null($this->treemap)) {
			$this->treemap->clear();
		}

		// Check the waterfall.
		if (!is_null($this->waterfall)) {
			$this->waterfall->clear();
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
	 * @return HighchartsBoxplot Returns the boxplot.
	 */
	public function getBoxplot() {
		return $this->boxplot;
	}

	/**
	 * Get the bubble.
	 *
	 * @return HighchartsBubble Returns the bubble.
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
	 * @return HighchartsColumnrange Returns the columnrange.
	 */
	public function getColumnrange() {
		return $this->columnrange;
	}

	/**
	 * Get the errorbar.
	 *
	 * @return HighchartsErrorbar Returns the errorbar.
	 */
	public function getErrorbar() {
		return $this->errorbar;
	}

	/**
	 * Get the funnel.
	 *
	 * @return HighchartsFunnel Returns the funnel.
	 */
	public function getFunnel() {
		return $this->funnel;
	}

	/**
	 * Get the gauge.
	 *
	 * @return HighchartsGauge Returns the gauge.
	 */
	public function getGauge() {
		return $this->gauge;
	}

	/**
	 * Get the heatmap.
	 *
	 * @return HighchartsHeatmap Returns the heatmap.
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
	 * @return HighchartsPolygon Returns the polygon.
	 */
	public function getPolygon() {
		return $this->polygon;
	}

	/**
	 * Get the pyramid.
	 *
	 * @return HighchartsPyramid Returns the pyramid.
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
	 * @return HighchartsSolidgauge Returns the solidgauge.
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
	 * @return HighchartsTreemap Returns the treemap.
	 */
	public function getTreemap() {
		return $this->treemap;
	}

	/**
	 * Get the waterfall.
	 *
	 * @return HighchartsWaterfall Returns the waterfall.
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
	 * Create a new boxplot.
	 *
	 * @return HighchartsBoxplot Returns the boxplot.
	 */
	public function newBoxplot() {
		$this->boxplot = new HighchartsBoxplot();
		return $this->boxplot;
	}

	/**
	 * Create a new bubble.
	 *
	 * @return HighchartsBubble Returns the bubble.
	 */
	public function newBubble() {
		$this->bubble = new HighchartsBubble();
		return $this->bubble;
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
	 * Create a new columnrange.
	 *
	 * @return HighchartsColumnrange Returns the columnrange.
	 */
	public function newColumnrange() {
		$this->columnrange = new HighchartsColumnrange();
		return $this->columnrange;
	}

	/**
	 * Create a new errorbar.
	 *
	 * @return HighchartsErrorbar Returns the errorbar.
	 */
	public function newErrorbar() {
		$this->errorbar = new HighchartsErrorbar();
		return $this->errorbar;
	}

	/**
	 * Create a new funnel.
	 *
	 * @return HighchartsFunnel Returns the funnel.
	 */
	public function newFunnel() {
		$this->funnel = new HighchartsFunnel();
		return $this->funnel;
	}

	/**
	 * Create a new gauge.
	 *
	 * @return HighchartsGauge Returns the gauge.
	 */
	public function newGauge() {
		$this->gauge = new HighchartsGauge();
		return $this->gauge;
	}

	/**
	 * Create a new heatmap.
	 *
	 * @return HighchartsHeatmap Returns the heatmap.
	 */
	public function newHeatmap() {
		$this->heatmap = new HighchartsHeatmap();
		return $this->heatmap;
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
	 * Create a new polygon.
	 *
	 * @return HighchartsPolygon Returns the polygon.
	 */
	public function newPolygon() {
		$this->polygon = new HighchartsPolygon();
		return $this->polygon;
	}

	/**
	 * Create a new pyramid.
	 *
	 * @return HighchartsPyramid Returns the pyramid.
	 */
	public function newPyramid() {
		$this->pyramid = new HighchartsPyramid();
		return $this->pyramid;
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
	 * Create a new solidgauge.
	 *
	 * @return HighchartsSolidgauge Returns the solidgauge.
	 */
	public function newSolidgauge() {
		$this->solidgauge = new HighchartsSolidgauge();
		return $this->solidgauge;
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
	 * Create a new treemap.
	 *
	 * @return HighchartsTreemap Returns the treemap.
	 */
	public function newTreemap() {
		$this->treemap = new HighchartsTreemap();
		return $this->treemap;
	}

	/**
	 * Create a new waterfall.
	 *
	 * @return HighchartsWaterfall Returns the waterfall.
	 */
	public function newWaterfall() {
		$this->waterfall = new HighchartsWaterfall();
		return $this->waterfall;
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
	 * @param HighchartsBoxplot $boxplot The boxplot.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setBoxplot(HighchartsBoxplot $boxplot = null) {
		$this->boxplot = $boxplot;
		return $this;
	}

	/**
	 * Set the bubble.
	 *
	 * @param HighchartsBubble $bubble The bubble.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setBubble(HighchartsBubble $bubble = null) {
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
	 * @param HighchartsColumnrange $columnrange The columnrange.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setColumnrange(HighchartsColumnrange $columnrange = null) {
		$this->columnrange = $columnrange;
		return $this;
	}

	/**
	 * Set the errorbar.
	 *
	 * @param HighchartsErrorbar $errorbar The errorbar.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setErrorbar(HighchartsErrorbar $errorbar = null) {
		$this->errorbar = $errorbar;
		return $this;
	}

	/**
	 * Set the funnel.
	 *
	 * @param HighchartsFunnel $funnel The funnel.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setFunnel(HighchartsFunnel $funnel = null) {
		$this->funnel = $funnel;
		return $this;
	}

	/**
	 * Set the gauge.
	 *
	 * @param HighchartsGauge $gauge The gauge.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setGauge(HighchartsGauge $gauge = null) {
		$this->gauge = $gauge;
		return $this;
	}

	/**
	 * Set the heatmap.
	 *
	 * @param HighchartsHeatmap $heatmap The heatmap.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setHeatmap(HighchartsHeatmap $heatmap = null) {
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
	 * @param HighchartsPolygon $polygon The polygon.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setPolygon(HighchartsPolygon $polygon = null) {
		$this->polygon = $polygon;
		return $this;
	}

	/**
	 * Set the pyramid.
	 *
	 * @param HighchartsPyramid $pyramid The pyramid.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setPyramid(HighchartsPyramid $pyramid = null) {
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
	 * @param HighchartsSolidgauge $solidgauge The solidgauge.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setSolidgauge(HighchartsSolidgauge $solidgauge = null) {
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
	 * @param HighchartsTreemap $treemap The treemap.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setTreemap(HighchartsTreemap $treemap = null) {
		$this->treemap = $treemap;
		return $this;
	}

	/**
	 * Set the waterfall.
	 *
	 * @param HighchartsWaterfall $waterfall The waterfall.
	 * @return HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setWaterfall(HighchartsWaterfall $waterfall = null) {
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
			$output["boxplot"] = $this->boxplot->toArray();
		}

		// Check the bubble.
		if (!is_null($this->bubble)) {
			$output["bubble"] = $this->bubble->toArray();
		}

		// Check the column.
		if (!is_null($this->column)) {
			$output["column"] = $this->column->toArray();
		}

		// Check the columnrange.
		if (!is_null($this->columnrange)) {
			$output["columnrange"] = $this->columnrange->toArray();
		}

		// Check the errorbar.
		if (!is_null($this->errorbar)) {
			$output["errorbar"] = $this->errorbar->toArray();
		}

		// Check the funnel.
		if (!is_null($this->funnel)) {
			$output["funnel"] = $this->funnel->toArray();
		}

		// Check the gauge.
		if (!is_null($this->gauge)) {
			$output["gauge"] = $this->gauge->toArray();
		}

		// Check the heatmap.
		if (!is_null($this->heatmap)) {
			$output["heatmap"] = $this->heatmap->toArray();
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
			$output["polygon"] = $this->polygon->toArray();
		}

		// Check the pyramid.
		if (!is_null($this->pyramid)) {
			$output["pyramid"] = $this->pyramid->toArray();
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
			$output["solidgauge"] = $this->solidgauge->toArray();
		}

		// Check the spline.
		if (!is_null($this->spline)) {
			$output["spline"] = $this->spline->toArray();
		}

		// Check the treemap.
		if (!is_null($this->treemap)) {
			$output["treemap"] = $this->treemap->toArray();
		}

		// Check the waterfall.
		if (!is_null($this->waterfall)) {
			$output["waterfall"] = $this->waterfall->toArray();
		}

		// Return the output.
		return $output;
	}
}

