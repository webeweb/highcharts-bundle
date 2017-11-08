<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts solidgauge test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsSolidgaugeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(true);

		$this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj1->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj1->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals(null, $obj1->getDataLabels(), "The method getDataLabels() does not return the expected value");
		$this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj1->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
		$this->assertEquals(null, $obj1->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
		$this->assertEquals(null, $obj1->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
		$this->assertEquals(null, $obj1->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals(null, $obj1->getLinecap(), "The method getLinecap() does not return the expected value");
		$this->assertEquals(null, $obj1->getOvershoot(), "The method getOvershoot() does not return the expected value");
		$this->assertEquals(null, $obj1->getPoint(), "The method getPoint() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getRounded(), "The method getRounded() does not return the expected value");
		$this->assertEquals(null, $obj1->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
		$this->assertEquals(null, $obj1->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getThreshold(), "The method getThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals(null, $obj1->getWrap(), "The method getWrap() does not return the expected value");

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(false);

		$this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj0->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals(null, $obj0->getDataLabels(), "The method getDataLabels() does not return the expected value");
		$this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
		$this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj0->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
		$this->assertEquals(null, $obj0->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
		$this->assertEquals(false, $obj0->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
		$this->assertEquals(null, $obj0->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals("round", $obj0->getLinecap(), "The method getLinecap() does not return the expected value");
		$this->assertEquals(0, $obj0->getOvershoot(), "The method getOvershoot() does not return the expected value");
		$this->assertEquals(null, $obj0->getPoint(), "The method getPoint() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(false, $obj0->getRounded(), "The method getRounded() does not return the expected value");
		$this->assertEquals(false, $obj0->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(false, $obj0->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
		$this->assertEquals(null, $obj0->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
		$this->assertEquals(true, $obj0->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(null, $obj0->getThreshold(), "The method getThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(true, $obj0->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals(true, $obj0->getWrap(), "The method getWrap() does not return the expected value");
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(false);

		$obj->newEvents();
		$obj->newPoint();

		$obj->clear();

		$res = ["events" => [], "point" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint::class, $res, "The method newPoint() does not return the expected object");
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge(true);

		$obj->setAnimation(1);

		$res1 = ["animation" => 1];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation");

		$obj->setAnimationLimit(86);

		$res2 = ["animation" => 1, "animationLimit" => 86];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res3 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColorIndex(57);

		$res4 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setCursor("crosshair");

		$res5 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

		$res6 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res7 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEnableMouseTracking(1);

		$res8 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with enable mouse tracking");

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents());

		$res9 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => []];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(0);

		$res10 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res11 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setGetExtremesFromAll(1);

		$res12 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with get extremes from all");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res13 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLinecap("round");

		$res14 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round"];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with linecap");

		$obj->setOvershoot(73);

		$res15 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with overshoot");

		$obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint());

		$res16 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => []];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res17 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setRounded(0);

		$res18 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 0];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with rounded");

		$obj->setSelected(1);

		$res19 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 0, "selected" => 1];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with selected");

		$obj->setShowCheckbox(0);

		$res20 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 0, "selected" => 1, "showCheckbox" => 0];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with show checkbox");

		$obj->setShowInLegend(0);

		$res21 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 0, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

		$obj->setSkipKeyboardNavigation(0);

		$res22 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 0, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setStickyTracking(0);

		$res23 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 0, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with sticky tracking");

		$obj->setThreshold(62);

		$res24 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 0, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 62];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with threshold");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res25 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 0, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 62, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setVisible(1);

		$res26 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 0, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 62, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 1];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with visible");

		$obj->setWrap(1);

		$res27 = ["animation" => 1, "animationLimit" => 86, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 57, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linecap" => "round", "overshoot" => 73, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rounded" => 0, "selected" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "stickyTracking" => 0, "threshold" => 62, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 1, "wrap" => 1];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with wrap");
	}

}
