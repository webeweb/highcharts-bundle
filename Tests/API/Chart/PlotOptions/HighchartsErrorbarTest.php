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

use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts errorbar test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsErrorbarTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsErrorbar(false);

		$res = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(75);

		$res1 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColorIndex(2);

		$res3 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

		$res4 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with colors');

		$obj->setCursor("1791a97a8403730ee0760489a2aeb992");

		$res5 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res6 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

		$res7 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with edge color');

		$obj->setExposeElementToA11y(0);

		$res8 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("e0e11f72697cbad7a3b9410bafee0533");

		$res9 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res10 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setMaxPointWidth(68);

		$res11 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with max point width');

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res12 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with negative color');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res13 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setPointIntervalUnit("57f46eb32559c2becc4bde9e5b155d55");

		$res14 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55"];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with point interval unit');

		$obj->setPointPlacement("64275df64fd351d104b485d2fe3e3698");

		$res15 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698"];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with point placement');

		$obj->setPointRange(61);

		$res16 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "pointRange" => 61];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with point range');

		$obj->setPointWidth(74);

		$res17 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "pointRange" => 61, "pointWidth" => 74];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with point width');

		$obj->setSkipKeyboardNavigation(1);

		$res18 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "pointRange" => 61, "pointWidth" => 74, "skipKeyboardNavigation" => 1];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");

		$res19 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "pointRange" => 61, "pointWidth" => 74, "skipKeyboardNavigation" => 1, "stemColor" => "98696f23b6ed2a881042dfa365a28d23"];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with stem color');

		$obj->setStemWidth(0);

		$res20 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "pointRange" => 61, "pointWidth" => 74, "skipKeyboardNavigation" => 1, "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 0];
		$this->assertEquals($res20, $obj->toArray(), 'The method toArray() does not return the expected array with stem width');

		$obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");

		$res21 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "pointRange" => 61, "pointWidth" => 74, "skipKeyboardNavigation" => 1, "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38"];
		$this->assertEquals($res21, $obj->toArray(), 'The method toArray() does not return the expected array with whisker color');

		$obj->setWhiskerWidth(30);

		$res22 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "pointRange" => 61, "pointWidth" => 74, "skipKeyboardNavigation" => 1, "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerWidth" => 30];
		$this->assertEquals($res22, $obj->toArray(), 'The method toArray() does not return the expected array with whisker width');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res23 = ["allowPointSelect" => false, "color" => "#000000", "colorByPoint" => false, "crisp" => true, "depth" => 25, "edgeWidth" => 1, "enableMouseTracking" => true, "getExtremesFromAll" => false, "groupZPadding" => 1, "lineWidth" => 1, "linkedTo" => ":previous", "pointInterval" => 1, "pointPadding" => 0.1, "pointStart" => 0, "selected" => false, "stemDashStyle" => "Solid", "stickyTracking" => true, "turboThreshold" => 1000, "visible" => true, "whiskerLength" => "50%", "zoneAxis" => "y", "animationLimit" => 75, "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 2, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "maxPointWidth" => 68, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "pointRange" => 61, "pointWidth" => 74, "skipKeyboardNavigation" => 1, "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemWidth" => 0, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerWidth" => 30, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res23, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}
}

