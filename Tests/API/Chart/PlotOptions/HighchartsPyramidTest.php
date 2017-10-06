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
 * Highcharts pyramid test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsPyramidTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPyramid(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPyramid(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Pyramid\HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected class");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPyramid(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Pyramid\HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPyramid(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Pyramid\HighchartsPoint::class, $res, "The method newPoint() does not return the expected class");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPyramid(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Pyramid\HighchartsStates::class, $res, "The method newStates() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsPyramid(false);

		$res = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimationLimit(72);

		$res1 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColorIndex(2);

		$res3 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res4 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with colors");

		$obj->setCursor("crosshair");

		$res5 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->newDataLabels();

		$res6 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => []];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res7 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->newEvents();

		$res8 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(1);

		$res9 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res10 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setHeight(49);

		$res11 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "height" => 49];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with height");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res12 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "height" => 49, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res13 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "height" => 49, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->newPoint();

		$res14 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "height" => 49, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => []];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res15 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "height" => 49, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setSkipKeyboardNavigation(0);

		$res16 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "height" => 49, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 0];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->newStates();

		$res17 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "height" => 49, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 0, "states" => []];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res18 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "height" => 49, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 0, "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res19 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "reversed" => true, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "height" => 49, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 0, "states" => [], "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
