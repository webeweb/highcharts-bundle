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
use WBW\HighchartsBundle\API\Chart\Series\HighchartsTreemap;
use WBW\HighchartsBundle\API\Chart\Series\Treemap\HighchartsDataLabels;
use WBW\HighchartsBundle\API\Chart\Series\Treemap\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\Series\Treemap\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\Series\Treemap\HighchartsStates;
use WBW\HighchartsBundle\API\Chart\Series\Treemap\HighchartsTooltip;

/**
 * Highcharts treemap test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsTreemapTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsTreemap(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new HighchartsTreemap(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected class");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsTreemap(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new HighchartsTreemap(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(HighchartsPoint::class, $res, "The method newPoint() does not return the expected class");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new HighchartsTreemap(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(HighchartsStates::class, $res, "The method newStates() does not return the expected class");
	}

	/**
	 * Tests the newTooltip() method.
	 *
	 * @return void.
	 */
	public function testNewTooltip() {

		$obj = new HighchartsTreemap(false);

		$res = $obj->newTooltip();
		$this->assertInstanceOf(HighchartsTooltip::class, $res, "The method newTooltip() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsTreemap(false);

		$res = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimationLimit(40);

		$res1 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(98);

		$res4 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res5 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with colors");

		$obj->setCursor("crosshair");

		$res6 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res7 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with data");

		$obj->newDataLabels();

		$res8 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res9 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->newEvents();

		$res10 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(0);

		$res11 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res12 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res13 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setIndex(12);

		$res14 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with index");

		$obj->setInteractByLeaf(true);

		$res15 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with interact by leaf");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res16 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLegendIndex(90);

		$res17 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

		$obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);

		$res18 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"]];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with levels");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res19 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setMaxPointWidth(12);

		$res20 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with max point width");

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res21 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with name");

		$obj->newPoint();

		$res22 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => []];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res23 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setSkipKeyboardNavigation(1);

		$res24 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setSortIndex(71);

		$res25 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 71];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with sort index");

		$obj->newStates();

		$res26 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 71, "states" => []];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->newTooltip();

		$res27 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 71, "states" => [], "tooltip" => []];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setType("waterfall");

		$res28 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 71, "states" => [], "tooltip" => [], "type" => "waterfall"];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with type");

		$obj->setZIndex(98);

		$res29 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 71, "states" => [], "tooltip" => [], "type" => "waterfall", "zIndex" => 98];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with z index");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res30 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 40, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 98, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 12, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 90, "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 12, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 71, "states" => [], "tooltip" => [], "type" => "waterfall", "zIndex" => 98, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
