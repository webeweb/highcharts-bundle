<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\HighchartsChart;
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
use WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions;
use WBW\HighchartsBundle\API\Chart\HighchartsResponsive;
use WBW\HighchartsBundle\API\Chart\HighchartsSubtitle;
use WBW\HighchartsBundle\API\Chart\HighchartsTitle;
use WBW\HighchartsBundle\API\Chart\HighchartsTooltip;
use WBW\HighchartsBundle\API\Chart\HighchartsZAxis;

/**
 * Highcharts chart test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API
 * @version 5.0.14
 */
final class HighchartsChartTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsChart(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newAccessibility() method.
	 *
	 * @return void.
	 */
	public function testNewAccessibility() {

		$obj = new HighchartsChart(false);

		$res = $obj->newAccessibility();
		$this->assertInstanceOf(HighchartsAccessibility::class, $res, "The method newAccessibility() does not return the expected class");
	}

	/**
	 * Tests the newChart() method.
	 *
	 * @return void.
	 */
	public function testNewChart() {

		$obj = new HighchartsChart(false);

		$res = $obj->newChart();
		$this->assertInstanceOf(HighchartsChartChild::class, $res, "The method newChart() does not return the expected class");
	}

	/**
	 * Tests the newCredits() method.
	 *
	 * @return void.
	 */
	public function testNewCredits() {

		$obj = new HighchartsChart(false);

		$res = $obj->newCredits();
		$this->assertInstanceOf(HighchartsCredits::class, $res, "The method newCredits() does not return the expected class");
	}

	/**
	 * Tests the newData() method.
	 *
	 * @return void.
	 */
	public function testNewData() {

		$obj = new HighchartsChart(false);

		$res = $obj->newData();
		$this->assertInstanceOf(HighchartsData::class, $res, "The method newData() does not return the expected class");
	}

	/**
	 * Tests the newDrilldown() method.
	 *
	 * @return void.
	 */
	public function testNewDrilldown() {

		$obj = new HighchartsChart(false);

		$res = $obj->newDrilldown();
		$this->assertInstanceOf(HighchartsDrilldown::class, $res, "The method newDrilldown() does not return the expected class");
	}

	/**
	 * Tests the newExporting() method.
	 *
	 * @return void.
	 */
	public function testNewExporting() {

		$obj = new HighchartsChart(false);

		$res = $obj->newExporting();
		$this->assertInstanceOf(HighchartsExporting::class, $res, "The method newExporting() does not return the expected class");
	}

	/**
	 * Tests the newLabels() method.
	 *
	 * @return void.
	 */
	public function testNewLabels() {

		$obj = new HighchartsChart(false);

		$res = $obj->newLabels();
		$this->assertInstanceOf(HighchartsLabels::class, $res, "The method newLabels() does not return the expected class");
	}

	/**
	 * Tests the newLegend() method.
	 *
	 * @return void.
	 */
	public function testNewLegend() {

		$obj = new HighchartsChart(false);

		$res = $obj->newLegend();
		$this->assertInstanceOf(HighchartsLegend::class, $res, "The method newLegend() does not return the expected class");
	}

	/**
	 * Tests the newLoading() method.
	 *
	 * @return void.
	 */
	public function testNewLoading() {

		$obj = new HighchartsChart(false);

		$res = $obj->newLoading();
		$this->assertInstanceOf(HighchartsLoading::class, $res, "The method newLoading() does not return the expected class");
	}

	/**
	 * Tests the newNavigation() method.
	 *
	 * @return void.
	 */
	public function testNewNavigation() {

		$obj = new HighchartsChart(false);

		$res = $obj->newNavigation();
		$this->assertInstanceOf(HighchartsNavigation::class, $res, "The method newNavigation() does not return the expected class");
	}

	/**
	 * Tests the newNoData() method.
	 *
	 * @return void.
	 */
	public function testNewNoData() {

		$obj = new HighchartsChart(false);

		$res = $obj->newNoData();
		$this->assertInstanceOf(HighchartsNoData::class, $res, "The method newNoData() does not return the expected class");
	}

	/**
	 * Tests the newPlotOptions() method.
	 *
	 * @return void.
	 */
	public function testNewPlotOptions() {

		$obj = new HighchartsChart(false);

		$res = $obj->newPlotOptions();
		$this->assertInstanceOf(HighchartsPlotOptions::class, $res, "The method newPlotOptions() does not return the expected class");
	}

	/**
	 * Tests the newResponsive() method.
	 *
	 * @return void.
	 */
	public function testNewResponsive() {

		$obj = new HighchartsChart(false);

		$res = $obj->newResponsive();
		$this->assertInstanceOf(HighchartsResponsive::class, $res, "The method newResponsive() does not return the expected class");
	}

	/**
	 * Tests the newSubtitle() method.
	 *
	 * @return void.
	 */
	public function testNewSubtitle() {

		$obj = new HighchartsChart(false);

		$res = $obj->newSubtitle();
		$this->assertInstanceOf(HighchartsSubtitle::class, $res, "The method newSubtitle() does not return the expected class");
	}

	/**
	 * Tests the newTitle() method.
	 *
	 * @return void.
	 */
	public function testNewTitle() {

		$obj = new HighchartsChart(false);

		$res = $obj->newTitle();
		$this->assertInstanceOf(HighchartsTitle::class, $res, "The method newTitle() does not return the expected class");
	}

	/**
	 * Tests the newTooltip() method.
	 *
	 * @return void.
	 */
	public function testNewTooltip() {

		$obj = new HighchartsChart(false);

		$res = $obj->newTooltip();
		$this->assertInstanceOf(HighchartsTooltip::class, $res, "The method newTooltip() does not return the expected class");
	}

	/**
	 * Tests the newZAxis() method.
	 *
	 * @return void.
	 */
	public function testNewZAxis() {

		$obj = new HighchartsChart(false);

		$res = $obj->newZAxis();
		$this->assertInstanceOf(HighchartsZAxis::class, $res, "The method newZAxis() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsChart(false);

		$res = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"]];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->newAccessibility();

		$res1 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with accessibility");

		$obj->newChart();

		$res2 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => []];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with chart");

		$obj->newCredits();

		$res3 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => []];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with credits");

		$obj->newData();

		$res4 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => []];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with data");

		$obj->setDefs(["defs" => "cd8fc2597193b4c938e7ff50062936e3"]);

		$res5 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"]];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with defs");

		$obj->newDrilldown();

		$res6 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => []];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with drilldown");

		$obj->newExporting();

		$res7 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => []];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with exporting");

		$obj->newLabels();

		$res8 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => []];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with labels");

		$obj->newLegend();

		$res9 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => []];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with legend");

		$obj->newLoading();

		$res10 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => []];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with loading");

		$obj->newNavigation();

		$res11 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => []];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with navigation");

		$obj->newNoData();

		$res12 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => []];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with no data");

		$obj->setPane(["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"]);

		$res13 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"]];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with pane");

		$obj->newPlotOptions();

		$res14 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => []];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with plot options");

		$obj->newResponsive();

		$res15 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => []];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with responsive");

		$obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);

		$res16 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"]];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with series");

		$obj->newSubtitle();

		$res17 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => []];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with subtitle");

		$obj->newTitle();

		$res18 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => []];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with title");

		$obj->newTooltip();

		$res19 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => []];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setXAxis(["xAxis" => "b919a806dedef37999b45653bdde66c6"]);

		$res20 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => [], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"]];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with x axis");

		$obj->setYAxis(["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"]);

		$res21 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => [], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"], "yAxis" => ["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"]];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with y axis");

		$obj->newZAxis();

		$res22 = ["colors" => ["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], "accessibility" => [], "chart" => [], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => [], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"], "yAxis" => ["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"], "zAxis" => []];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with z axis");
	}

}
