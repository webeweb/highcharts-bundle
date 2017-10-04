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
use WBW\HighchartsBundle\API\Chart\Series\HighchartsLine;
use WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsDataLabels;
use WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsMarker;
use WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsStates;

/**
 * Highcharts line test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsLineTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsLine(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new HighchartsLine(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected class");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsLine(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newMarker() method.
	 *
	 * @return void.
	 */
	public function testNewMarker() {

		$obj = new HighchartsLine(false);

		$res = $obj->newMarker();
		$this->assertInstanceOf(HighchartsMarker::class, $res, "The method newMarker() does not return the expected class");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new HighchartsLine(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(HighchartsPoint::class, $res, "The method newPoint() does not return the expected class");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new HighchartsLine(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(HighchartsStates::class, $res, "The method newStates() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsLine(false);

		$res = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimationLimit(72);

		$res1 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(36);

		$res4 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setCursor("crosshair");

		$res5 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res6 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with data");

		$obj->newDataLabels();

		$res7 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res8 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->newEvents();

		$res9 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(0);

		$res10 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res11 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res12 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setIndex(27);

		$res13 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with index");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res14 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLegendIndex(63);

		$res15 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res16 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->newMarker();

		$res17 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => []];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with marker");

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res18 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with name");

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res19 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with negative color");

		$obj->newPoint();

		$res20 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res21 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setPointIntervalUnit("year");

		$res22 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year"];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with point interval unit");

		$obj->setPointPlacement("between");

		$res23 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between"];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with point placement");

		$obj->setSkipKeyboardNavigation(1);

		$res24 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setStack("fac2a47adace059aff113283a03f6760");

		$res25 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stack" => "fac2a47adace059aff113283a03f6760"];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with stack");

		$obj->setStacking("percent");

		$res26 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent"];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with stacking");

		$obj->newStates();

		$res27 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => []];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res28 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setType("waterfall");

		$res29 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall"];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with type");

		$obj->setZIndex(4);

		$res30 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "zIndex" => 4];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with z index");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res31 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => true, "step" => "false", "stickyTracking" => true, "threshold" => 0, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 36, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 27, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 63, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "year", "pointPlacement" => "between", "skipKeyboardNavigation" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "zIndex" => 4, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
