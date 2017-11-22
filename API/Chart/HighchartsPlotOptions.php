<?php
/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\API\Chart;

use JsonSerializable;

/**
 * Highcharts plot options.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\API\Chart
 * @version 5.0.14
 * @final
 */
final class HighchartsPlotOptions implements JsonSerializable {

	/**
	 * Area.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea
	 */
	private $area;

	/**
	 * Arearange.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange
	 * @since 2.3.0
	 */
	private $arearange;

	/**
	 * Areaspline.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline
	 */
	private $areaspline;

	/**
	 * Areasplinerange.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange
	 * @since 2.3.0
	 */
	private $areasplinerange;

	/**
	 * Bar.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar
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
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn
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
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine
	 */
	private $line;

	/**
	 * Pie.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie
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
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter
	 */
	private $scatter;

	/**
	 * Series.
	 *
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries
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
	 * @var \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline
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

		// Clear the area.
		if (!is_null($this->area)) {
			$this->area->clear();
		}

		// Clear the arearange.
		if (!is_null($this->arearange)) {
			$this->arearange->clear();
		}

		// Clear the areaspline.
		if (!is_null($this->areaspline)) {
			$this->areaspline->clear();
		}

		// Clear the areasplinerange.
		if (!is_null($this->areasplinerange)) {
			$this->areasplinerange->clear();
		}

		// Clear the bar.
		if (!is_null($this->bar)) {
			$this->bar->clear();
		}

		// Clear the boxplot.
		$this->boxplot = null;

		// Clear the bubble.
		$this->bubble = null;

		// Clear the column.
		if (!is_null($this->column)) {
			$this->column->clear();
		}

		// Clear the columnrange.
		$this->columnrange = null;

		// Clear the errorbar.
		$this->errorbar = null;

		// Clear the funnel.
		$this->funnel = null;

		// Clear the gauge.
		$this->gauge = null;

		// Clear the heatmap.
		$this->heatmap = null;

		// Clear the line.
		if (!is_null($this->line)) {
			$this->line->clear();
		}

		// Clear the pie.
		if (!is_null($this->pie)) {
			$this->pie->clear();
		}

		// Clear the polygon.
		$this->polygon = null;

		// Clear the pyramid.
		$this->pyramid = null;

		// Clear the scatter.
		if (!is_null($this->scatter)) {
			$this->scatter->clear();
		}

		// Clear the series.
		if (!is_null($this->series)) {
			$this->series->clear();
		}

		// Clear the solidgauge.
		$this->solidgauge = null;

		// Clear the spline.
		if (!is_null($this->spline)) {
			$this->spline->clear();
		}

		// Clear the treemap.
		$this->treemap = null;

		// Clear the waterfall.
		$this->waterfall = null;
	}

	/**
	 * Get the area.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea Returns the area.
	 */
	public function getArea() {
		return $this->area;
	}

	/**
	 * Get the arearange.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange Returns the arearange.
	 */
	public function getArearange() {
		return $this->arearange;
	}

	/**
	 * Get the areaspline.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline Returns the areaspline.
	 */
	public function getAreaspline() {
		return $this->areaspline;
	}

	/**
	 * Get the areasplinerange.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange Returns the areasplinerange.
	 */
	public function getAreasplinerange() {
		return $this->areasplinerange;
	}

	/**
	 * Get the bar.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar Returns the bar.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn Returns the column.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine Returns the line.
	 */
	public function getLine() {
		return $this->line;
	}

	/**
	 * Get the pie.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie Returns the pie.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter Returns the scatter.
	 */
	public function getScatter() {
		return $this->scatter;
	}

	/**
	 * Get the series.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries Returns the series.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline Returns the spline.
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
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea Returns the area.
	 */
	public function newArea() {
		$this->area = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea();
		return $this->area;
	}

	/**
	 * Create a new arearange.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange Returns the arearange.
	 */
	public function newArearange() {
		$this->arearange = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange();
		return $this->arearange;
	}

	/**
	 * Create a new areaspline.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline Returns the areaspline.
	 */
	public function newAreaspline() {
		$this->areaspline = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline();
		return $this->areaspline;
	}

	/**
	 * Create a new areasplinerange.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange Returns the areasplinerange.
	 */
	public function newAreasplinerange() {
		$this->areasplinerange = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange();
		return $this->areasplinerange;
	}

	/**
	 * Create a new bar.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar Returns the bar.
	 */
	public function newBar() {
		$this->bar = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar();
		return $this->bar;
	}

	/**
	 * Create a new column.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn Returns the column.
	 */
	public function newColumn() {
		$this->column = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn();
		return $this->column;
	}

	/**
	 * Create a new line.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine Returns the line.
	 */
	public function newLine() {
		$this->line = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine();
		return $this->line;
	}

	/**
	 * Create a new pie.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie Returns the pie.
	 */
	public function newPie() {
		$this->pie = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie();
		return $this->pie;
	}

	/**
	 * Create a new scatter.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter Returns the scatter.
	 */
	public function newScatter() {
		$this->scatter = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter();
		return $this->scatter;
	}

	/**
	 * Create a new series.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries Returns the series.
	 */
	public function newSeries() {
		$this->series = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries();
		return $this->series;
	}

	/**
	 * Create a new spline.
	 *
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline Returns the spline.
	 */
	public function newSpline() {
		$this->spline = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline();
		return $this->spline;
	}

	/**
	 * Set the area.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea $area The area.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setArea(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea $area = null) {
		$this->area = $area;
		return $this;
	}

	/**
	 * Set the arearange.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange $arearange The arearange.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setArearange(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsArearange $arearange = null) {
		$this->arearange = $arearange;
		return $this;
	}

	/**
	 * Set the areaspline.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline $areaspline The areaspline.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setAreaspline(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline $areaspline = null) {
		$this->areaspline = $areaspline;
		return $this;
	}

	/**
	 * Set the areasplinerange.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange $areasplinerange The areasplinerange.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setAreasplinerange(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreasplinerange $areasplinerange = null) {
		$this->areasplinerange = $areasplinerange;
		return $this;
	}

	/**
	 * Set the bar.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar $bar The bar.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setBar(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBar $bar = null) {
		$this->bar = $bar;
		return $this;
	}

	/**
	 * Set the boxplot.
	 *
	 * @param array $boxplot The boxplot.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setBoxplot(array $boxplot = null) {
		$this->boxplot = $boxplot;
		return $this;
	}

	/**
	 * Set the bubble.
	 *
	 * @param array $bubble The bubble.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setBubble(array $bubble = null) {
		$this->bubble = $bubble;
		return $this;
	}

	/**
	 * Set the column.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn $column The column.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setColumn(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumn $column = null) {
		$this->column = $column;
		return $this;
	}

	/**
	 * Set the columnrange.
	 *
	 * @param array $columnrange The columnrange.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setColumnrange(array $columnrange = null) {
		$this->columnrange = $columnrange;
		return $this;
	}

	/**
	 * Set the errorbar.
	 *
	 * @param array $errorbar The errorbar.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setErrorbar(array $errorbar = null) {
		$this->errorbar = $errorbar;
		return $this;
	}

	/**
	 * Set the funnel.
	 *
	 * @param array $funnel The funnel.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setFunnel(array $funnel = null) {
		$this->funnel = $funnel;
		return $this;
	}

	/**
	 * Set the gauge.
	 *
	 * @param array $gauge The gauge.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setGauge(array $gauge = null) {
		$this->gauge = $gauge;
		return $this;
	}

	/**
	 * Set the heatmap.
	 *
	 * @param array $heatmap The heatmap.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setHeatmap(array $heatmap = null) {
		$this->heatmap = $heatmap;
		return $this;
	}

	/**
	 * Set the line.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine $line The line.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setLine(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine $line = null) {
		$this->line = $line;
		return $this;
	}

	/**
	 * Set the pie.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie $pie The pie.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setPie(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie $pie = null) {
		$this->pie = $pie;
		return $this;
	}

	/**
	 * Set the polygon.
	 *
	 * @param array $polygon The polygon.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setPolygon(array $polygon = null) {
		$this->polygon = $polygon;
		return $this;
	}

	/**
	 * Set the pyramid.
	 *
	 * @param array $pyramid The pyramid.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setPyramid(array $pyramid = null) {
		$this->pyramid = $pyramid;
		return $this;
	}

	/**
	 * Set the scatter.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter $scatter The scatter.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setScatter(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsScatter $scatter = null) {
		$this->scatter = $scatter;
		return $this;
	}

	/**
	 * Set the series.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries $series The series.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setSeries(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSeries $series = null) {
		$this->series = $series;
		return $this;
	}

	/**
	 * Set the solidgauge.
	 *
	 * @param array $solidgauge The solidgauge.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setSolidgauge(array $solidgauge = null) {
		$this->solidgauge = $solidgauge;
		return $this;
	}

	/**
	 * Set the spline.
	 *
	 * @param \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline $spline The spline.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setSpline(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSpline $spline = null) {
		$this->spline = $spline;
		return $this;
	}

	/**
	 * Set the treemap.
	 *
	 * @param array $treemap The treemap.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
	 */
	public function setTreemap(array $treemap = null) {
		$this->treemap = $treemap;
		return $this;
	}

	/**
	 * Set the waterfall.
	 *
	 * @param array $waterfall The waterfall.
	 * @return \WBW\Bundle\HighchartsBundle\API\Chart\HighchartsPlotOptions Returns the highcharts plot options.
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
