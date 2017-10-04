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
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsColumnrange;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Columnrange\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Columnrange\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Columnrange\HighchartsStates;

/**
 * Highcharts columnrange test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsColumnrangeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsColumnrange(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsColumnrange(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new HighchartsColumnrange(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(HighchartsPoint::class, $res, "The method newPoint() does not return the expected class");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new HighchartsColumnrange(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(HighchartsStates::class, $res, "The method newStates() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsColumnrange(false);

		$res = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimationLimit(61);

		$res1 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(18);

		$res4 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res5 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with colors");

		$obj->setCursor("crosshair");

		$res6 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

		$res7 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res8 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

		$res9 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with edge color");

		$obj->newEvents();

		$res10 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => []];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(1);

		$res11 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res12 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res13 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res14 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setMaxPointWidth(30);

		$res15 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with max point width");

		$obj->newPoint();

		$res16 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30, "point" => []];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res17 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setPointIntervalUnit("year");

		$res18 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year"];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with point interval unit");

		$obj->setPointPlacement("between");

		$res19 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between"];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with point placement");

		$obj->setPointRange(88);

		$res20 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 88];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with point range");

		$obj->setPointWidth(6);

		$res21 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 88, "pointWidth" => 6];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with point width");

		$obj->setSkipKeyboardNavigation(1);

		$res22 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 88, "pointWidth" => 6, "skipKeyboardNavigation" => 1];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->newStates();

		$res23 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 88, "pointWidth" => 6, "skipKeyboardNavigation" => 1, "states" => []];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res24 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 88, "pointWidth" => 6, "skipKeyboardNavigation" => 1, "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res25 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderRadius" => 0, "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 50, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupPadding" => 0.2, "groupZPadding" => 1, "grouping" => true, "minPointLength" => 0, "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 61, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 18, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 30, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointRange" => 88, "pointWidth" => 6, "skipKeyboardNavigation" => 1, "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
