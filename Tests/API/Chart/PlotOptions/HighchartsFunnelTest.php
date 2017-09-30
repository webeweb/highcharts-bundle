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

use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsFunnel;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts funnel test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsFunnelTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsFunnel(false);

		$res = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(28);

		$res1 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColorIndex(16);

		$res3 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res4 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with colors');

		$obj->setCursor("1791a97a8403730ee0760489a2aeb992");

		$res5 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res6 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setExposeElementToA11y(1);

		$res7 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("e0e11f72697cbad7a3b9410bafee0533");

		$res8 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533"];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setHeight(75);

		$res9 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "height" => 75];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with height');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res10 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "height" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res11 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "height" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with linked to');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res12 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "height" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setSkipKeyboardNavigation(0);

		$res13 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "height" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 0];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res14 = ["allowPointSelect" => false, "borderColor" => "#ffffff", "borderWidth" => 1, "center" => ["50%", "50%"], "depth" => 0, "enableMouseTracking" => true, "getExtremesFromAll" => false, "minSize" => 80, "neckHeight" => "25%", "neckWidth" => "30%", "reversed" => false, "selected" => false, "shadow" => false, "showInLegend" => false, "slicedOffset" => 10, "stickyTracking" => false, "visible" => true, "width" => "90%", "zoneAxis" => "y", "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 1, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "height" => 75, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "skipKeyboardNavigation" => 0, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}
}

