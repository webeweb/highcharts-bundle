<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts boxplot test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsBoxplotTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsPoint::class, $res, "The method newPoint() does not return the expected class");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsStates::class, $res, "The method newStates() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

		$res = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimationLimit(25);

		$res1 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(47);

		$res4 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res5 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with colors");

		$obj->setCursor("crosshair");

		$res6 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res7 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

		$res8 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with edge color");

		$obj->newEvents();

		$res9 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => []];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(1);

		$res10 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res11 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res12 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res13 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setMaxPointWidth(33);

		$res14 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with max point width");

		$obj->setMedianColor("c7dbc658d3d58056469f6d2d5a8a3626");

		$res15 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626"];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with median color");

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res16 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with negative color");

		$obj->newPoint();

		$res17 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res18 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setPointIntervalUnit("year");

		$res19 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year"];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with point interval unit");

		$obj->setPointPlacement("between");

		$res20 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between"];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with point placement");

		$obj->setPointRange(72);

		$res21 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 72];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with point range");

		$obj->setPointWidth(74);

		$res22 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 72, "pointWidth" => 74];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with point width");

		$obj->setSkipKeyboardNavigation(0);

		$res23 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 72, "pointWidth" => 74, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->newStates();

		$res24 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 72, "pointWidth" => 74, "skipKeyboardNavigation" => 0, "states" => []];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");

		$res25 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 72, "pointWidth" => 74, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23"];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with stem color");

		$obj->setStemWidth(10);

		$res26 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 72, "pointWidth" => 74, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 10];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with stem width");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res27 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 72, "pointWidth" => 74, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 10, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");

		$res28 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 72, "pointWidth" => 74, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 10, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "whiskerColor" => "3176f361ab524a038497eb1a6c93df38"];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with whisker color");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res29 = ["allowPointSelect" => false, "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "fillColor" => "#ffffff", "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "lineWidth" => 1, "medianWidth" => 2, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "showCheckbox" => false, "showInLegend" => true, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "whiskerWidth" => 2, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 47, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 33, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 72, "pointWidth" => 74, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 10, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
