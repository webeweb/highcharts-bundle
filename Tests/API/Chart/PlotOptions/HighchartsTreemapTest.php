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
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsDataLabels;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsPoint;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsStates;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Treemap\HighchartsTooltip;

/**
 * Highcharts treemap test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
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
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new HighchartsTreemap(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(HighchartsDataLabels::class, $res, 'The method newDataLabels() does not return the expected class');
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsTreemap(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, 'The method newEvents() does not return the expected class');
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new HighchartsTreemap(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(HighchartsPoint::class, $res, 'The method newPoint() does not return the expected class');
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new HighchartsTreemap(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(HighchartsStates::class, $res, 'The method newStates() does not return the expected class');
	}

	/**
	 * Tests the newTooltip() method.
	 *
	 * @return void.
	 */
	public function testNewTooltip() {

		$obj = new HighchartsTreemap(false);

		$res = $obj->newTooltip();
		$this->assertInstanceOf(HighchartsTooltip::class, $res, 'The method newTooltip() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsTreemap(false);

		$res = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(67);

		$res1 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setColorIndex(100);

		$res4 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res5 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with colors');

		$obj->setCursor("crosshair");

		$res6 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->newDataLabels();

		$res7 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => []];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with data labels');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res8 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->newEvents();

		$res9 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with events');

		$obj->setExposeElementToA11y(1);

		$res10 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("xy");

		$res11 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setInteractByLeaf(true);

		$res12 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with interact by leaf');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res13 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);

		$res14 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"]];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with levels');

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res15 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with linked to');

		$obj->setMaxPointWidth(49);

		$res16 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 49];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with max point width');

		$obj->newPoint();

		$res17 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 49, "point" => []];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with point');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res18 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 49, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setSkipKeyboardNavigation(1);

		$res19 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 49, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setSortIndex(0);

		$res20 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 49, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 0];
		$this->assertEquals($res20, $obj->toArray(), 'The method toArray() does not return the expected array with sort index');

		$obj->newStates();

		$res21 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 49, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 0, "states" => []];
		$this->assertEquals($res21, $obj->toArray(), 'The method toArray() does not return the expected array with states');

		$obj->newTooltip();

		$res22 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 49, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 0, "states" => [], "tooltip" => []];
		$this->assertEquals($res22, $obj->toArray(), 'The method toArray() does not return the expected array with tooltip');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res23 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 49, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 1, "sortIndex" => 0, "states" => [], "tooltip" => [], "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res23, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}

}
