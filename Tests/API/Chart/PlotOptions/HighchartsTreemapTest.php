<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\PlotOptions;

use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsTreemap;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts treemap test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsTreemapTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsTreemap(false);

		$res = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(25);

		$res1 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setColorIndex(35);

		$res4 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res5 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with colors');

		$obj->setCursor("1791a97a8403730ee0760489a2aeb992");

		$res6 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res7 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setExposeElementToA11y(0);

		$res8 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("e0e11f72697cbad7a3b9410bafee0533");

		$res9 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setInteractByLeaf(0);

		$res10 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "interactByLeaf" => 0];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with interact by leaf');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res11 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "interactByLeaf" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);

		$res12 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "interactByLeaf" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"]];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with levels');

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res13 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "interactByLeaf" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with linked to');

		$obj->setMaxPointWidth(69);

		$res14 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "interactByLeaf" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 69];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with max point width');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res15 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "interactByLeaf" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 69, "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setSkipKeyboardNavigation(0);

		$res16 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "interactByLeaf" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 69, "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 0];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setSortIndex(70);

		$res17 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "interactByLeaf" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 69, "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 0, "sortIndex" => 70];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with sort index');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res18 = ["allowDrillToNode" => false, "allowPointSelect" => false, "alternateStartingDirection" => false, "animation" => true, "borderColor" => "#e6e6e6", "borderWidth" => 1, "colorByPoint" => false, "crisp" => true, "cropThreshold" => 300, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "layoutAlgorithm" => "sliceAndDice", "layoutStartingDirection" => "vertical", "levelIsConstant" => true, "opacity" => 0.15, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => false, "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 25, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "interactByLeaf" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 69, "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 0, "sortIndex" => 70, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}
}

