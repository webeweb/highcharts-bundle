<?php

/*
 * This file is part of the WBWHighchartsBundle package.
 *
 * (c) 2017 WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\HighchartsBundle\Tests\API\Chart\Series;

use PHPUnit_Framework_TestCase;
use WBW\HighchartsBundle\API\Chart\Series\HighchartsGauge;
use WBW\HighchartsBundle\API\Chart\Series\Gauge\HighchartsEvents;
use WBW\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPoint;

/**
 * Highcharts gauge test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsGaugeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new HighchartsGauge(false);

		$obj->clear();
		$this->assertEquals([], $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new HighchartsGauge(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(HighchartsEvents::class, $res, "The method newEvents() does not return the expected class");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new HighchartsGauge(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(HighchartsPoint::class, $res, "The method newPoint() does not return the expected class");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new HighchartsGauge(false);

		$res = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0"];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");

		$obj->setAnimationLimit(36);

		$res1 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res2 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res3 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(9);

		$res4 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setCursor("crosshair");

		$res5 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res6 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with data");

		$obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

		$res7 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res8 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setDial(["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"]);

		$res9 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"]];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with dial");

		$obj->newEvents();

		$res10 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => []];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(0);

		$res11 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res12 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res13 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setIndex(36);

		$res14 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with index");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res15 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLegendIndex(73);

		$res16 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res17 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res18 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with name");

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res19 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with negative color");

		$obj->setPivot(["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"]);

		$res20 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"]];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with pivot");

		$obj->newPoint();

		$res21 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => []];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res22 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setShowInLegend(0);

		$res23 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

		$obj->setSkipKeyboardNavigation(1);

		$res24 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 1];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res25 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setType("waterfall");

		$res26 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall"];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with type");

		$obj->setZIndex(73);

		$res27 = ["animation" => true, "enableMouseTracking" => true, "getExtremesFromAll" => false, "overshoot" => 0, "selected" => false, "showCheckbox" => false, "stickyTracking" => true, "threshold" => 0, "visible" => true, "wrap" => true, "xAxis" => "0", "yAxis" => "0", "animationLimit" => 36, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 9, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 36, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 73, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "showInLegend" => 0, "skipKeyboardNavigation" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "zIndex" => 73];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with z index");
	}

}
