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

use WBW\HighchartsBundle\API\Chart\Series\HighchartsSolidgauge;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts solidgauge test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsSolidgaugeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsSolidgauge(false);

		$res = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(21);

		$res1 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColorIndex(7);

		$res3 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setCursor("1791a97a8403730ee0760489a2aeb992");

		$res4 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res5 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with data');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res6 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setExposeElementToA11y(1);

		$res7 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("e0e11f72697cbad7a3b9410bafee0533");

		$res8 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533"];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res9 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setIndex(44);

		$res10 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 44];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with index');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res11 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 44, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setLegendIndex(51);

		$res12 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 44, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 51];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with legend index');

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res13 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 44, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 51, "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with name');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res14 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 44, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 51, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setShowInLegend(1);

		$res15 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 44, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 51, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 1];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with show in legend');

		$obj->setSkipKeyboardNavigation(1);

		$res16 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 44, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 51, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 1, "skipKeyboardNavigation" => 1];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setThreshold(55);

		$res17 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 44, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 51, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 1, "skipKeyboardNavigation" => 1, "threshold" => 55];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with threshold');

		$obj->setType("599dcce2998a6b40b1e38e8c6006cb0a");

		$res18 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 44, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 51, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 1, "skipKeyboardNavigation" => 1, "threshold" => 55, "type" => "599dcce2998a6b40b1e38e8c6006cb0a"];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with type');

		$obj->setZIndex(17);

		$res19 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 21, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 7, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 44, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 51, "name" => "b068931cc450442b63f5b3d276ea4297", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 1, "skipKeyboardNavigation" => 1, "threshold" => 55, "type" => "599dcce2998a6b40b1e38e8c6006cb0a", "zIndex" => 17];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with z index');
	}
}

