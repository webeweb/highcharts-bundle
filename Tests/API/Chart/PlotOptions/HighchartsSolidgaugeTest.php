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

use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsSolidgauge;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts solidgauge test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsSolidgaugeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsSolidgauge(false);

		$res = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(100);

		$res1 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColorIndex(89);

		$res3 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 89];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setCursor("1791a97a8403730ee0760489a2aeb992");

		$res4 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 89, "cursor" => "1791a97a8403730ee0760489a2aeb992"];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res5 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 89, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setExposeElementToA11y(0);

		$res6 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 89, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("e0e11f72697cbad7a3b9410bafee0533");

		$res7 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 89, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res8 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 89, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res9 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 89, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setShowInLegend(0);

		$res10 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 89, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with show in legend');

		$obj->setSkipKeyboardNavigation(0);

		$res11 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 89, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setThreshold(73);

		$res12 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "linecap" => "round", "overshoot" => 0, "rounded" => false, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "visible" => true, "wrap" => true, "animationLimit" => 100, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 89, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 0, "threshold" => 73];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with threshold');
	}
}

