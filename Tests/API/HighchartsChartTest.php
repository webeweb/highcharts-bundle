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

/**
 * Highcharts chart test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API
 * @version 5.0.14
 */
final class HighchartsChartTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\HighchartsChart(true);

		$this->assertEquals(null, $obj1->getAccessibility(), "The method getAccessibility() does not return the expected value");
		$this->assertEquals(null, $obj1->getChart(), "The method getChart() does not return the expected value");
		$this->assertEquals(null, $obj1->getColors(), "The method getColors() does not return the expected value");
		$this->assertEquals(null, $obj1->getCredits(), "The method getCredits() does not return the expected value");
		$this->assertEquals(null, $obj1->getData(), "The method getData() does not return the expected value");
		$this->assertEquals(null, $obj1->getDefs(), "The method getDefs() does not return the expected value");
		$this->assertEquals(null, $obj1->getDrilldown(), "The method getDrilldown() does not return the expected value");
		$this->assertEquals(null, $obj1->getExporting(), "The method getExporting() does not return the expected value");
		$this->assertEquals(null, $obj1->getLabels(), "The method getLabels() does not return the expected value");
		$this->assertEquals(null, $obj1->getLegend(), "The method getLegend() does not return the expected value");
		$this->assertEquals(null, $obj1->getLoading(), "The method getLoading() does not return the expected value");
		$this->assertEquals(null, $obj1->getNavigation(), "The method getNavigation() does not return the expected value");
		$this->assertEquals(null, $obj1->getNoData(), "The method getNoData() does not return the expected value");
		$this->assertEquals(null, $obj1->getPane(), "The method getPane() does not return the expected value");
		$this->assertEquals(null, $obj1->getPlotOptions(), "The method getPlotOptions() does not return the expected value");
		$this->assertEquals(null, $obj1->getResponsive(), "The method getResponsive() does not return the expected value");
		$this->assertEquals(null, $obj1->getSeries(), "The method getSeries() does not return the expected value");
		$this->assertEquals(null, $obj1->getSubtitle(), "The method getSubtitle() does not return the expected value");
		$this->assertEquals(null, $obj1->getTitle(), "The method getTitle() does not return the expected value");
		$this->assertEquals(null, $obj1->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(null, $obj1->getXAxis(), "The method getXAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getYAxis(), "The method getYAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getZAxis(), "The method getZAxis() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$this->assertEquals(null, $obj0->getAccessibility(), "The method getAccessibility() does not return the expected value");
		$this->assertEquals(null, $obj0->getChart(), "The method getChart() does not return the expected value");
		$this->assertEquals(["#7cb5ec", "#434348", "#90ed7d", "#f7a35c", "#8085e9", "#f15c80", "#e4d354", "#2b908f", "#f45b5b", "#91e8e1"], $obj0->getColors(), "The method getColors() does not return the expected value");
		$this->assertEquals(null, $obj0->getCredits(), "The method getCredits() does not return the expected value");
		$this->assertEquals(null, $obj0->getData(), "The method getData() does not return the expected value");
		$this->assertEquals(null, $obj0->getDefs(), "The method getDefs() does not return the expected value");
		$this->assertEquals(null, $obj0->getDrilldown(), "The method getDrilldown() does not return the expected value");
		$this->assertEquals(null, $obj0->getExporting(), "The method getExporting() does not return the expected value");
		$this->assertEquals(null, $obj0->getLabels(), "The method getLabels() does not return the expected value");
		$this->assertEquals(null, $obj0->getLegend(), "The method getLegend() does not return the expected value");
		$this->assertEquals(null, $obj0->getLoading(), "The method getLoading() does not return the expected value");
		$this->assertEquals(null, $obj0->getNavigation(), "The method getNavigation() does not return the expected value");
		$this->assertEquals(null, $obj0->getNoData(), "The method getNoData() does not return the expected value");
		$this->assertEquals(null, $obj0->getPane(), "The method getPane() does not return the expected value");
		$this->assertEquals(null, $obj0->getPlotOptions(), "The method getPlotOptions() does not return the expected value");
		$this->assertEquals(null, $obj0->getResponsive(), "The method getResponsive() does not return the expected value");
		$this->assertEquals(null, $obj0->getSeries(), "The method getSeries() does not return the expected value");
		$this->assertEquals(null, $obj0->getSubtitle(), "The method getSubtitle() does not return the expected value");
		$this->assertEquals(null, $obj0->getTitle(), "The method getTitle() does not return the expected value");
		$this->assertEquals(null, $obj0->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(null, $obj0->getXAxis(), "The method getXAxis() does not return the expected value");
		$this->assertEquals(null, $obj0->getYAxis(), "The method getYAxis() does not return the expected value");
		$this->assertEquals(null, $obj0->getZAxis(), "The method getZAxis() does not return the expected value");
	}

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$obj->newAccessibility();
		$obj->newChart();
		$obj->newCredits();
		$obj->newData();
		$obj->newDrilldown();
		$obj->newExporting();
		$obj->newLabels();
		$obj->newLegend();
		$obj->newLoading();
		$obj->newNavigation();
		$obj->newNoData();
		$obj->newPlotOptions();
		$obj->newResponsive();
		$obj->newSubtitle();
		$obj->newTitle();
		$obj->newTooltip();
		$obj->newZAxis();

		$obj->clear();

		$res = ["accessibility" => [], "chart" => [], "credits" => [], "data" => [], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "plotOptions" => [], "responsive" => [], "subtitle" => [], "title" => [], "tooltip" => [], "zAxis" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newAccessibility() method.
	 *
	 * @return void.
	 */
	public function testNewAccessibility() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newAccessibility();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsAccessibility::class, $res, "The method newAccessibility() does not return the expected object");
	}

	/**
	 * Tests the newChart() method.
	 *
	 * @return void.
	 */
	public function testNewChart() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newChart();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsChart::class, $res, "The method newChart() does not return the expected object");
	}

	/**
	 * Tests the newCredits() method.
	 *
	 * @return void.
	 */
	public function testNewCredits() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newCredits();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsCredits::class, $res, "The method newCredits() does not return the expected object");
	}

	/**
	 * Tests the newData() method.
	 *
	 * @return void.
	 */
	public function testNewData() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newData();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsData::class, $res, "The method newData() does not return the expected object");
	}

	/**
	 * Tests the newDrilldown() method.
	 *
	 * @return void.
	 */
	public function testNewDrilldown() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newDrilldown();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsDrilldown::class, $res, "The method newDrilldown() does not return the expected object");
	}

	/**
	 * Tests the newExporting() method.
	 *
	 * @return void.
	 */
	public function testNewExporting() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newExporting();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsExporting::class, $res, "The method newExporting() does not return the expected object");
	}

	/**
	 * Tests the newLabels() method.
	 *
	 * @return void.
	 */
	public function testNewLabels() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newLabels();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsLabels::class, $res, "The method newLabels() does not return the expected object");
	}

	/**
	 * Tests the newLegend() method.
	 *
	 * @return void.
	 */
	public function testNewLegend() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newLegend();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsLegend::class, $res, "The method newLegend() does not return the expected object");
	}

	/**
	 * Tests the newLoading() method.
	 *
	 * @return void.
	 */
	public function testNewLoading() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newLoading();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsLoading::class, $res, "The method newLoading() does not return the expected object");
	}

	/**
	 * Tests the newNavigation() method.
	 *
	 * @return void.
	 */
	public function testNewNavigation() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newNavigation();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsNavigation::class, $res, "The method newNavigation() does not return the expected object");
	}

	/**
	 * Tests the newNoData() method.
	 *
	 * @return void.
	 */
	public function testNewNoData() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newNoData();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsNoData::class, $res, "The method newNoData() does not return the expected object");
	}

	/**
	 * Tests the newPlotOptions() method.
	 *
	 * @return void.
	 */
	public function testNewPlotOptions() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newPlotOptions();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions::class, $res, "The method newPlotOptions() does not return the expected object");
	}

	/**
	 * Tests the newResponsive() method.
	 *
	 * @return void.
	 */
	public function testNewResponsive() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newResponsive();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsResponsive::class, $res, "The method newResponsive() does not return the expected object");
	}

	/**
	 * Tests the newSubtitle() method.
	 *
	 * @return void.
	 */
	public function testNewSubtitle() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newSubtitle();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsSubtitle::class, $res, "The method newSubtitle() does not return the expected object");
	}

	/**
	 * Tests the newTitle() method.
	 *
	 * @return void.
	 */
	public function testNewTitle() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newTitle();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsTitle::class, $res, "The method newTitle() does not return the expected object");
	}

	/**
	 * Tests the newTooltip() method.
	 *
	 * @return void.
	 */
	public function testNewTooltip() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newTooltip();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsTooltip::class, $res, "The method newTooltip() does not return the expected object");
	}

	/**
	 * Tests the newZAxis() method.
	 *
	 * @return void.
	 */
	public function testNewZAxis() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(false);

		$res = $obj->newZAxis();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\HighchartsZAxis::class, $res, "The method newZAxis() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\HighchartsChart(true);

		$obj->setAccessibility(new \WBW\HighchartsBundle\API\Chart\HighchartsAccessibility());

		$res1 = ["accessibility" => []];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with accessibility");

		$obj->setChart(new \WBW\HighchartsBundle\API\Chart\HighchartsChart());

		$res2 = ["accessibility" => [], "chart" => []];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with chart");

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res3 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with colors");

		$obj->setCredits(new \WBW\HighchartsBundle\API\Chart\HighchartsCredits());

		$res4 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => []];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with credits");

		$obj->setData(new \WBW\HighchartsBundle\API\Chart\HighchartsData());

		$res5 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => []];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with data");

		$obj->setDefs(["defs" => "cd8fc2597193b4c938e7ff50062936e3"]);

		$res6 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"]];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with defs");

		$obj->setDrilldown(new \WBW\HighchartsBundle\API\Chart\HighchartsDrilldown());

		$res7 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => []];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with drilldown");

		$obj->setExporting(new \WBW\HighchartsBundle\API\Chart\HighchartsExporting());

		$res8 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => []];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with exporting");

		$obj->setLabels(new \WBW\HighchartsBundle\API\Chart\HighchartsLabels());

		$res9 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => []];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with labels");

		$obj->setLegend(new \WBW\HighchartsBundle\API\Chart\HighchartsLegend());

		$res10 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => []];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with legend");

		$obj->setLoading(new \WBW\HighchartsBundle\API\Chart\HighchartsLoading());

		$res11 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => []];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with loading");

		$obj->setNavigation(new \WBW\HighchartsBundle\API\Chart\HighchartsNavigation());

		$res12 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => []];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with navigation");

		$obj->setNoData(new \WBW\HighchartsBundle\API\Chart\HighchartsNoData());

		$res13 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => []];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with no data");

		$obj->setPane(["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"]);

		$res14 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"]];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with pane");

		$obj->setPlotOptions(new \WBW\HighchartsBundle\API\Chart\HighchartsPlotOptions());

		$res15 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => []];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with plot options");

		$obj->setResponsive(new \WBW\HighchartsBundle\API\Chart\HighchartsResponsive());

		$res16 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => []];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with responsive");

		$obj->setSeries(["series" => "bef99584217af744e404ed44a33af589"]);

		$res17 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"]];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with series");

		$obj->setSubtitle(new \WBW\HighchartsBundle\API\Chart\HighchartsSubtitle());

		$res18 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => []];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with subtitle");

		$obj->setTitle(new \WBW\HighchartsBundle\API\Chart\HighchartsTitle());

		$res19 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => []];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with title");

		$obj->setTooltip(new \WBW\HighchartsBundle\API\Chart\HighchartsTooltip());

		$res20 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => []];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setXAxis(["xAxis" => "b919a806dedef37999b45653bdde66c6"]);

		$res21 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => [], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"]];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with x axis");

		$obj->setYAxis(["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"]);

		$res22 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => [], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"], "yAxis" => ["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"]];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with y axis");

		$obj->setZAxis(new \WBW\HighchartsBundle\API\Chart\HighchartsZAxis());

		$res23 = ["accessibility" => [], "chart" => [], "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "credits" => [], "data" => [], "defs" => ["defs" => "cd8fc2597193b4c938e7ff50062936e3"], "drilldown" => [], "exporting" => [], "labels" => [], "legend" => [], "loading" => [], "navigation" => [], "noData" => [], "pane" => ["pane" => "c6c6ce72f4dff102e38d74f7143a2ea8"], "plotOptions" => [], "responsive" => [], "series" => ["series" => "bef99584217af744e404ed44a33af589"], "subtitle" => [], "title" => [], "tooltip" => [], "xAxis" => ["xAxis" => "b919a806dedef37999b45653bdde66c6"], "yAxis" => ["yAxis" => "f3cd431f5ac1725ea18774e5c02f2889"], "zAxis" => []];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with z axis");
	}

}
