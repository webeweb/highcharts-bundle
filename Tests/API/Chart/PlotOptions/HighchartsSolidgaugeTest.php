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
use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\PlotOptions\Solidgauge\HighchartsPoint;

/**
 * Highcharts solidgauge test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsSolidgaugeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsSolidgauge(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), 'The method toArray() does not return the expected array');
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsSolidgauge(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, 'The method newEvents() does not return the expected class');
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new HighchartsSolidgauge(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(HighchartsPoint::class, $res, 'The method newPoint() does not return the expected class');
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsSolidgauge(false);

		$res = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(67);

		$res1 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColorIndex(4);

		$res3 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setCursor("crosshair");

		$res4 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

		$res5 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with data labels');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res6 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->newEvents();

		$res7 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => []];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with events');

		$obj->setExposeElementToA11y(0);

		$res8 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("xy");

		$res9 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res10 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->newPoint();

		$res11 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "point" => []];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with point');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res12 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setShowInLegend(0);

		$res13 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with show in legend');

		$obj->setSkipKeyboardNavigation(0);

		$res14 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setThreshold(100);

		$res15 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 0, "threshold" => 100];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with threshold');

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res16 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 67, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 4, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 0, "threshold" => 100, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with tooltip');
	}

}
