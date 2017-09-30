<?php

/*
 * This file is part of the HighchartsBundle.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series;

use WBW\HighchartsBundle\API\Chart\Series\HighchartsPie;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts pie test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsPieTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsPie(false);

		$res = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(22);

		$res1 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColorIndex(100);

		$res3 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res4 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with colors');

		$obj->setCursor("1791a97a8403730ee0760489a2aeb992");

		$res5 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res6 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with data');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res7 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setEndAngle(23);

		$res8 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with end angle');

		$obj->setExposeElementToA11y(0);

		$res9 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("e0e11f72697cbad7a3b9410bafee0533");

		$res10 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533"];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res11 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setIndex(75);

		$res12 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with index');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res13 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setLegendIndex(16);

		$res14 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 16];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with legend index');

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res15 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with linked to');

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res16 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with name');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res17 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setSize("f7bd60b75b29d79b660a2859395c1a24");

		$res18 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "size" => "f7bd60b75b29d79b660a2859395c1a24"];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with size');

		$obj->setSkipKeyboardNavigation(0);

		$res19 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setType("599dcce2998a6b40b1e38e8c6006cb0a");

		$res20 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "type" => "599dcce2998a6b40b1e38e8c6006cb0a"];
		$this->assertEquals($res20, $obj->toArray(), 'The method toArray() does not return the expected array with type');

		$obj->setZIndex(54);

		$res21 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "type" => "599dcce2998a6b40b1e38e8c6006cb0a", "zIndex" => 54];
		$this->assertEquals($res21, $obj->toArray(), 'The method toArray() does not return the expected array with z index');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res22 = ["allowPointSelect" => false, "animation" => true, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => [null, null], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "ignoreHiddenPoint" => true, "innerSize" => "0", "minSize" => 80, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "startAngle" => 0, "stickyTracking" => false, "visible" => true, "zoneAxis" => "y", "animationLimit" => 22, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "endAngle" => 23, "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 16, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "type" => "599dcce2998a6b40b1e38e8c6006cb0a", "zIndex" => 54, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res22, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}
}

