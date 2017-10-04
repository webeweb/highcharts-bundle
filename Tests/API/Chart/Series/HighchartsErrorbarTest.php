<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Series\HighchartsErrorbar;
use WBW\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\Series\Errorbar\HighchartsStates;

/**
 * Highcharts errorbar test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsErrorbarTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsErrorbar(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsErrorbar(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new HighchartsErrorbar(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(HighchartsPoint::class, $res, "The method newPoint() does not return the expected class");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new HighchartsErrorbar(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(HighchartsStates::class, $res, "The method newStates() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsErrorbar(false);

		$res = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimationLimit(51);

		$res1 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColorIndex(20);

		$res3 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res4 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with colors");

		$obj->setCursor("crosshair");

		$res5 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res6 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with data");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res7 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

		$res8 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with edge color");

		$obj->newEvents();

		$res9 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => []];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(0);

		$res10 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res11 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res12 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setIndex(26);

		$res13 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with index");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res14 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLegendIndex(34);

		$res15 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

		$obj->setMaxPointWidth(81);

		$res16 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with max point width");

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res17 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with name");

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res18 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with negative color");

		$obj->newPoint();

		$res19 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res20 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setPointIntervalUnit("year");

		$res21 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year"];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with point interval unit");

		$obj->setPointPlacement("between");

		$res22 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between"];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with point placement");

		$obj->setPointRange(48);

		$res23 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with point range");

		$obj->setPointWidth(0);

		$res24 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with point width");

		$obj->setSkipKeyboardNavigation(1);

		$res25 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0, "skipKeyboardNavigation" => 1];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->newStates();

		$res26 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0, "skipKeyboardNavigation" => 1, "states" => []];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");

		$res27 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23"];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with stem color");

		$obj->setStemWidth(26);

		$res28 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 26];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with stem width");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res29 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 26, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setType("waterfall");

		$res30 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 26, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall"];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with type");

		$obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");

		$res31 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 26, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "whiskerColor" => "3176f361ab524a038497eb1a6c93df38"];
		$this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with whisker color");

		$obj->setWhiskerWidth(60);

		$res32 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 26, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerWidth" => 60];
		$this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with whisker width");

		$obj->setZIndex(78);

		$res33 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 26, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerWidth" => 60, "zIndex" => 78];
		$this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with z index");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res34 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 20, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 26, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 34, "maxPointWidth" => 81, "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 48, "pointWidth" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 26, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerWidth" => 60, "zIndex" => 78, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
