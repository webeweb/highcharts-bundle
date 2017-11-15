<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts gauge test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsGaugeTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsGauge(true);

		$this->assertEquals(null, $obj1->getAnimation());
		$this->assertEquals(null, $obj1->getAnimationLimit());
		$this->assertEquals(null, $obj1->getClassName());
		$this->assertEquals(null, $obj1->getColor());
		$this->assertEquals(null, $obj1->getColorIndex());
		$this->assertEquals(null, $obj1->getCursor());
		$this->assertEquals(null, $obj1->getData());
		$this->assertEquals(null, $obj1->getDataLabels());
		$this->assertEquals(null, $obj1->getDescription());
		$this->assertEquals(null, $obj1->getDial());
		$this->assertEquals(null, $obj1->getEnableMouseTracking());
		$this->assertEquals(null, $obj1->getEvents());
		$this->assertEquals(null, $obj1->getExposeElementToA11y());
		$this->assertEquals(null, $obj1->getFindNearestPointBy());
		$this->assertEquals(null, $obj1->getGetExtremesFromAll());
		$this->assertEquals(null, $obj1->getId());
		$this->assertEquals(null, $obj1->getIndex());
		$this->assertEquals(null, $obj1->getKeys());
		$this->assertEquals(null, $obj1->getLegendIndex());
		$this->assertEquals(null, $obj1->getLinkedTo());
		$this->assertEquals(null, $obj1->getName());
		$this->assertEquals(null, $obj1->getNegativeColor());
		$this->assertEquals(null, $obj1->getOvershoot());
		$this->assertEquals(null, $obj1->getPivot());
		$this->assertEquals(null, $obj1->getPoint());
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter());
		$this->assertEquals(null, $obj1->getSelected());
		$this->assertEquals(null, $obj1->getShowCheckbox());
		$this->assertEquals(null, $obj1->getShowInLegend());
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
		$this->assertEquals(null, $obj1->getStickyTracking());
		$this->assertEquals(null, $obj1->getThreshold());
		$this->assertEquals(null, $obj1->getTooltip());
		$this->assertEquals(null, $obj1->getType());
		$this->assertEquals(null, $obj1->getVisible());
		$this->assertEquals(null, $obj1->getWrap());
		$this->assertEquals(null, $obj1->getXAxis());
		$this->assertEquals(null, $obj1->getYAxis());
		$this->assertEquals(null, $obj1->getZIndex());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsGauge(false);

		$this->assertEquals(true, $obj0->getAnimation());
		$this->assertEquals(null, $obj0->getAnimationLimit());
		$this->assertEquals(null, $obj0->getClassName());
		$this->assertEquals(null, $obj0->getColor());
		$this->assertEquals(null, $obj0->getColorIndex());
		$this->assertEquals(null, $obj0->getCursor());
		$this->assertEquals(null, $obj0->getData());
		$this->assertEquals(null, $obj0->getDataLabels());
		$this->assertEquals(null, $obj0->getDescription());
		$this->assertEquals(null, $obj0->getDial());
		$this->assertEquals(true, $obj0->getEnableMouseTracking());
		$this->assertEquals(null, $obj0->getEvents());
		$this->assertEquals(null, $obj0->getExposeElementToA11y());
		$this->assertEquals(null, $obj0->getFindNearestPointBy());
		$this->assertEquals(false, $obj0->getGetExtremesFromAll());
		$this->assertEquals(null, $obj0->getId());
		$this->assertEquals(null, $obj0->getIndex());
		$this->assertEquals(null, $obj0->getKeys());
		$this->assertEquals(null, $obj0->getLegendIndex());
		$this->assertEquals(null, $obj0->getLinkedTo());
		$this->assertEquals(null, $obj0->getName());
		$this->assertEquals(null, $obj0->getNegativeColor());
		$this->assertEquals(0, $obj0->getOvershoot());
		$this->assertEquals(null, $obj0->getPivot());
		$this->assertEquals(null, $obj0->getPoint());
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter());
		$this->assertEquals(false, $obj0->getSelected());
		$this->assertEquals(false, $obj0->getShowCheckbox());
		$this->assertEquals(null, $obj0->getShowInLegend());
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
		$this->assertEquals(true, $obj0->getStickyTracking());
		$this->assertEquals(0, $obj0->getThreshold());
		$this->assertEquals(null, $obj0->getTooltip());
		$this->assertEquals(null, $obj0->getType());
		$this->assertEquals(true, $obj0->getVisible());
		$this->assertEquals(true, $obj0->getWrap());
		$this->assertEquals("0", $obj0->getXAxis());
		$this->assertEquals("0", $obj0->getYAxis());
		$this->assertEquals(null, $obj0->getZIndex());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsGauge(false);

		$obj->newEvents();
		$obj->newPoint();

		$obj->clear();

		$res = ["events" => [], "point" => []];
		$this->assertEquals($res, $obj->toArray());
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsGauge(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsGauge(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsEvents::class, $res);
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsGauge(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPoint::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsGauge(true);

		$obj->setAnimation(0);

		$res1 = ["animation" => 0];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setAnimationLimit(59);

		$res2 = ["animation" => 0, "animationLimit" => 59];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res3 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res4 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setColorIndex(68);

		$res5 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setCursor("crosshair");

		$res6 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair"];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res7 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

		$res8 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res9 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setDial(["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"]);

		$res10 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"]];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setEnableMouseTracking(1);

		$res11 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsEvents());

		$res12 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => []];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setExposeElementToA11y(0);

		$res13 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setFindNearestPointBy("xy");

		$res14 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res14, $obj->toArray());

		$obj->setGetExtremesFromAll(0);

		$res15 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
		$this->assertEquals($res15, $obj->toArray());

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res16 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res16, $obj->toArray());

		$obj->setIndex(72);

		$res17 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72];
		$this->assertEquals($res17, $obj->toArray());

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res18 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res18, $obj->toArray());

		$obj->setLegendIndex(47);

		$res19 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47];
		$this->assertEquals($res19, $obj->toArray());

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res20 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res20, $obj->toArray());

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res21 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res21, $obj->toArray());

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res22 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res22, $obj->toArray());

		$obj->setOvershoot(72);

		$res23 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72];
		$this->assertEquals($res23, $obj->toArray());

		$obj->setPivot(["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"]);

		$res24 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"]];
		$this->assertEquals($res24, $obj->toArray());

		$obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Gauge\HighchartsPoint());

		$res25 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => []];
		$this->assertEquals($res25, $obj->toArray());

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res26 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res26, $obj->toArray());

		$obj->setSelected(1);

		$res27 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1];
		$this->assertEquals($res27, $obj->toArray());

		$obj->setShowCheckbox(0);

		$res28 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0];
		$this->assertEquals($res28, $obj->toArray());

		$obj->setShowInLegend(1);

		$res29 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1];
		$this->assertEquals($res29, $obj->toArray());

		$obj->setSkipKeyboardNavigation(0);

		$res30 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res30, $obj->toArray());

		$obj->setStickyTracking(1);

		$res31 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "stickyTracking" => 1];
		$this->assertEquals($res31, $obj->toArray());

		$obj->setThreshold(43);

		$res32 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "stickyTracking" => 1, "threshold" => 43];
		$this->assertEquals($res32, $obj->toArray());

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res33 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "stickyTracking" => 1, "threshold" => 43, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res33, $obj->toArray());

		$obj->setType("waterfall");

		$res34 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "stickyTracking" => 1, "threshold" => 43, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall"];
		$this->assertEquals($res34, $obj->toArray());

		$obj->setVisible(0);

		$res35 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "stickyTracking" => 1, "threshold" => 43, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0];
		$this->assertEquals($res35, $obj->toArray());

		$obj->setWrap(1);

		$res36 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "stickyTracking" => 1, "threshold" => 43, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "wrap" => 1];
		$this->assertEquals($res36, $obj->toArray());

		$obj->setXAxis(28);

		$res37 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "stickyTracking" => 1, "threshold" => 43, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "wrap" => 1, "xAxis" => 28];
		$this->assertEquals($res37, $obj->toArray());

		$obj->setYAxis(6);

		$res38 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "stickyTracking" => 1, "threshold" => 43, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "wrap" => 1, "xAxis" => 28, "yAxis" => 6];
		$this->assertEquals($res38, $obj->toArray());

		$obj->setZIndex(88);

		$res39 = ["animation" => 0, "animationLimit" => 59, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 68, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "description" => "67daf92c833c41c95db874e18fcb2786", "dial" => ["dial" => "6de514dbc026d5badb01f8ea18ffcc9b"], "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 72, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 47, "linkedTo" => "914fab47afc86331ec62837807a29419", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "overshoot" => 72, "pivot" => ["pivot" => "dca758fd47f2bcd3bbf3f20bbfe2e975"], "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "stickyTracking" => 1, "threshold" => 43, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "wrap" => 1, "xAxis" => 28, "yAxis" => 6, "zIndex" => 88];
		$this->assertEquals($res39, $obj->toArray());
	}

}
