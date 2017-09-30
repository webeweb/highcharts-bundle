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

use WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsArea;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts area test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsAreaTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsArea(false);

		$res = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(96);

		$res1 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setColorIndex(90);

		$res4 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setCursor("1791a97a8403730ee0760489a2aeb992");

		$res5 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res6 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setExposeElementToA11y(0);

		$res7 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res8 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with fill color');

		$obj->setFindNearestPointBy("e0e11f72697cbad7a3b9410bafee0533");

		$res9 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res10 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

		$res11 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with line color');

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res12 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with linked to');

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res13 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with negative color');

		$obj->setNegativeFillColor("a966442d64e00bf8663e7c5d9708074a");

		$res14 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a"];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with negative fill color');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res15 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setPointIntervalUnit("57f46eb32559c2becc4bde9e5b155d55");

		$res16 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55"];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with point interval unit');

		$obj->setPointPlacement("64275df64fd351d104b485d2fe3e3698");

		$res17 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698"];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with point placement');

		$obj->setSkipKeyboardNavigation(0);

		$res18 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "skipKeyboardNavigation" => 0];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setStacking("28e151a4f741899a2b6eca262c8320ae");

		$res19 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "skipKeyboardNavigation" => 0, "stacking" => "28e151a4f741899a2b6eca262c8320ae"];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with stacking');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res20 = ["allowPointSelect" => false, "animation" => true, "connectEnds" => true, "connectNulls" => false, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "fillOpacity" => 0.75, "getExtremesFromAll" => false, "lineWidth" => 2, "linecap" => "round", "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "softThreshold" => false, "step" => "false", "stickyTracking" => true, "threshold" => 0, "trackByArea" => false, "turboThreshold" => 1000, "visible" => true, "zoneAxis" => "y", "animationLimit" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 90, "cursor" => "1791a97a8403730ee0760489a2aeb992", "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "pointPlacement" => "64275df64fd351d104b485d2fe3e3698", "skipKeyboardNavigation" => 0, "stacking" => "28e151a4f741899a2b6eca262c8320ae", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res20, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}
}

