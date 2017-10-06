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
 * Highcharts gauge test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsGaugeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Gauge\HighchartsPoint::class, $res, "The method newPoint() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsGauge(false);

		$res = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimationLimit(72);

		$res1 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(97);

		$res4 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setCursor("crosshair");

		$res5 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

		$res6 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res7 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setDial(["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"]);

		$res8 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"]];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with dial");

		$obj->newEvents();

		$res9 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => []];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(1);

		$res10 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res11 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res12 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res13 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res14 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with negative color");

		$obj->setPivot(["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"]);

		$res15 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"]];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with pivot");

		$obj->newPoint();

		$res16 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => []];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res17 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setShowInLegend(0);

		$res18 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

		$obj->setSkipKeyboardNavigation(1);

		$res19 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 1];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res20 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "animationLimit" => 72, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 97, "cursor" => "crosshair", "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");
	}

}
