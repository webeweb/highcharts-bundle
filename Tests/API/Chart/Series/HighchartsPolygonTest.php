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

use WBW\HighchartsBundle\API\Chart\Series\HighchartsPolygon;
use PHPUnit_Framework_TestCase;

/**
 * Highcharts polygon test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsPolygonTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the toArray() method.
	 */
	public function testToArray() {

		$obj = new HighchartsPolygon(false);

		$res = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y"];
		$this->assertEquals($res, $obj->toArray(), 'The method toArray() does not return the expected array');

		$obj->setAnimationLimit(73);

		$res1 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73];
		$this->assertEquals($res1, $obj->toArray(), 'The method toArray() does not return the expected array with animation limit');

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), 'The method toArray() does not return the expected array with class name');

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), 'The method toArray() does not return the expected array with color');

		$obj->setColorIndex(49);

		$res4 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49];
		$this->assertEquals($res4, $obj->toArray(), 'The method toArray() does not return the expected array with color index');

		$obj->setCursor("1791a97a8403730ee0760489a2aeb992");

		$res5 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992"];
		$this->assertEquals($res5, $obj->toArray(), 'The method toArray() does not return the expected array with cursor');

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res6 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res6, $obj->toArray(), 'The method toArray() does not return the expected array with data');

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res7 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res7, $obj->toArray(), 'The method toArray() does not return the expected array with description');

		$obj->setExposeElementToA11y(0);

		$res8 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0];
		$this->assertEquals($res8, $obj->toArray(), 'The method toArray() does not return the expected array with expose element to a11y');

		$obj->setFindNearestPointBy("e0e11f72697cbad7a3b9410bafee0533");

		$res9 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533"];
		$this->assertEquals($res9, $obj->toArray(), 'The method toArray() does not return the expected array with find nearest point by');

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res10 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res10, $obj->toArray(), 'The method toArray() does not return the expected array with id');

		$obj->setIndex(43);

		$res11 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43];
		$this->assertEquals($res11, $obj->toArray(), 'The method toArray() does not return the expected array with index');

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res12 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res12, $obj->toArray(), 'The method toArray() does not return the expected array with keys');

		$obj->setLegendIndex(21);

		$res13 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21];
		$this->assertEquals($res13, $obj->toArray(), 'The method toArray() does not return the expected array with legend index');

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res14 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res14, $obj->toArray(), 'The method toArray() does not return the expected array with linked to');

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res15 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res15, $obj->toArray(), 'The method toArray() does not return the expected array with name');

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res16 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res16, $obj->toArray(), 'The method toArray() does not return the expected array with negative color');

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res17 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res17, $obj->toArray(), 'The method toArray() does not return the expected array with point description formatter');

		$obj->setPointIntervalUnit("57f46eb32559c2becc4bde9e5b155d55");

		$res18 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55"];
		$this->assertEquals($res18, $obj->toArray(), 'The method toArray() does not return the expected array with point interval unit');

		$obj->setSkipKeyboardNavigation(0);

		$res19 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "skipKeyboardNavigation" => 0];
		$this->assertEquals($res19, $obj->toArray(), 'The method toArray() does not return the expected array with skip keyboard navigation');

		$obj->setType("599dcce2998a6b40b1e38e8c6006cb0a");

		$res20 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "skipKeyboardNavigation" => 0, "type" => "599dcce2998a6b40b1e38e8c6006cb0a"];
		$this->assertEquals($res20, $obj->toArray(), 'The method toArray() does not return the expected array with type');

		$obj->setZIndex(99);

		$res21 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "skipKeyboardNavigation" => 0, "type" => "599dcce2998a6b40b1e38e8c6006cb0a", "zIndex" => 99];
		$this->assertEquals($res21, $obj->toArray(), 'The method toArray() does not return the expected array with z index');

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res22 = ["allowPointSelect" => false, "animation" => true, "cropThreshold" => 300, "dashStyle" => "Solid", "enableMouseTracking" => true, "getExtremesFromAll" => false, "lineWidth" => 0, "pointInterval" => 1, "pointStart" => 0, "selected" => false, "shadow" => false, "showCheckbox" => false, "showInLegend" => true, "stickyTracking" => false, "turboThreshold" => 1000, "visible" => true, "xAxis" => "0", "yAxis" => "0", "zoneAxis" => "y", "animationLimit" => 73, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 49, "cursor" => "1791a97a8403730ee0760489a2aeb992", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "description" => "67daf92c833c41c95db874e18fcb2786", "exposeElementToA11y" => 0, "findNearestPointBy" => "e0e11f72697cbad7a3b9410bafee0533", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 43, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 21, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointIntervalUnit" => "57f46eb32559c2becc4bde9e5b155d55", "skipKeyboardNavigation" => 0, "type" => "599dcce2998a6b40b1e38e8c6006cb0a", "zIndex" => 99, "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res22, $obj->toArray(), 'The method toArray() does not return the expected array with zones');
	}
}

