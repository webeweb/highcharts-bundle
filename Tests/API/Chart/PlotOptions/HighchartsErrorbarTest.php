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
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsStates;

/**
 * Highcharts errorbar test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
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
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsErrorbar(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, 'The method newEvents() does not return the expected class');
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new HighchartsErrorbar(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(HighchartsPoint::class, $res, 'The method newPoint() does not return the expected class');
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new HighchartsErrorbar(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(HighchartsStates::class, $res, 'The method newStates() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsErrorbar(false);

		$res = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(41);

		$res1 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColorIndex(79);

		$res3 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res4 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with colors');

		$obj->setCursor("crosshair");

		$res5 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res6 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

		$res7 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with edge color');

		$obj->newEvents();

		$res8 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => []];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with events');

		$obj->setExposeElementToA11y(0);

		$res9 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("xy");

		$res10 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res11 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setMaxPointWidth(75);

		$res12 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with max point width');

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res13 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with negative color');

		$obj->newPoint();

		$res14 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with point');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res15 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setPointIntervalUnit("year");

		$res16 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year"];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with point interval unit');

		$obj->setPointPlacement("between");

		$res17 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between"];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with point placement');

		$obj->setPointRange(7);

		$res18 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 7];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with point range');

		$obj->setPointWidth(46);

		$res19 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 7, "pointWidth" => 46];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with point width');

		$obj->setSkipKeyboardNavigation(0);

		$res20 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 7, "pointWidth" => 46, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res20, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->newStates();

		$res21 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 7, "pointWidth" => 46, "skipKeyboardNavigation" => 0, "states" => []];
		$this->assertEquals($res21, $obj->toArray(), 'The method toArray() does not return the expected array with states');

		$obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");

		$res22 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 7, "pointWidth" => 46, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23"];
		$this->assertEquals($res22, $obj->toArray(), 'The method toArray() does not return the expected array with stem color');

		$obj->setStemWidth(62);

		$res23 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 7, "pointWidth" => 46, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 62];
		$this->assertEquals($res23, $obj->toArray(), 'The method toArray() does not return the expected array with stem width');

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res24 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 7, "pointWidth" => 46, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 62, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res24, $obj->toArray(), 'The method toArray() does not return the expected array with tooltip');

		$obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");

		$res25 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 7, "pointWidth" => 46, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 62, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "whiskerColor" => "3176f361ab524a038497eb1a6c93df38"];
		$this->assertEquals($res25, $obj->toArray(), 'The method toArray() does not return the expected array with whisker color');

		$obj->setWhiskerWidth(30);

		$res26 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 7, "pointWidth" => 46, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 62, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerWidth" => 30];
		$this->assertEquals($res26, $obj->toArray(), 'The method toArray() does not return the expected array with whisker width');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res27 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 41, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 79, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 75, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 7, "pointWidth" => 46, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 62, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerWidth" => 30, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res27, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}

}
