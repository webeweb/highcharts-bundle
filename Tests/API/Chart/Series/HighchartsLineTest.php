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

/**
 * Highcharts line test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsLineTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\Series\HighchartsLine(true);

		$this->assertEquals(null, $obj1->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
		$this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj1->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getConnectEnds(), "The method getConnectEnds() does not return the expected value");
		$this->assertEquals(null, $obj1->getConnectNulls(), "The method getConnectNulls() does not return the expected value");
		$this->assertEquals(null, $obj1->getCropThreshold(), "The method getCropThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals(null, $obj1->getDashStyle(), "The method getDashStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getData(), "The method getData() does not return the expected value");
		$this->assertEquals(null, $obj1->getDataLabels(), "The method getDataLabels() does not return the expected value");
		$this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj1->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
		$this->assertEquals(null, $obj1->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
		$this->assertEquals(null, $obj1->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
		$this->assertEquals(null, $obj1->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj1->getIndex(), "The method getIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals(null, $obj1->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getLinecap(), "The method getLinecap() does not return the expected value");
		$this->assertEquals(null, $obj1->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
		$this->assertEquals(null, $obj1->getMarker(), "The method getMarker() does not return the expected value");
		$this->assertEquals(null, $obj1->getName(), "The method getName() does not return the expected value");
		$this->assertEquals(null, $obj1->getNegativeColor(), "The method getNegativeColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getPoint(), "The method getPoint() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointInterval(), "The method getPointInterval() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointIntervalUnit(), "The method getPointIntervalUnit() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointPlacement(), "The method getPointPlacement() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointStart(), "The method getPointStart() does not return the expected value");
		$this->assertEquals(null, $obj1->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
		$this->assertEquals(null, $obj1->getSoftThreshold(), "The method getSoftThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getStack(), "The method getStack() does not return the expected value");
		$this->assertEquals(null, $obj1->getStacking(), "The method getStacking() does not return the expected value");
		$this->assertEquals(null, $obj1->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(null, $obj1->getStep(), "The method getStep() does not return the expected value");
		$this->assertEquals(null, $obj1->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getThreshold(), "The method getThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(null, $obj1->getTurboThreshold(), "The method getTurboThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getType(), "The method getType() does not return the expected value");
		$this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals(null, $obj1->getXAxis(), "The method getXAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getYAxis(), "The method getYAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getZIndex(), "The method getZIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getZones(), "The method getZones() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\Series\HighchartsLine(false);

		$this->assertEquals(false, $obj0->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
		$this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj0->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(true, $obj0->getConnectEnds(), "The method getConnectEnds() does not return the expected value");
		$this->assertEquals(false, $obj0->getConnectNulls(), "The method getConnectNulls() does not return the expected value");
		$this->assertEquals(300, $obj0->getCropThreshold(), "The method getCropThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals("Solid", $obj0->getDashStyle(), "The method getDashStyle() does not return the expected value");
		$this->assertEquals(null, $obj0->getData(), "The method getData() does not return the expected value");
		$this->assertEquals(null, $obj0->getDataLabels(), "The method getDataLabels() does not return the expected value");
		$this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
		$this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj0->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
		$this->assertEquals(null, $obj0->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
		$this->assertEquals(false, $obj0->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
		$this->assertEquals(null, $obj0->getId(), "The method getId() does not return the expected value");
		$this->assertEquals(null, $obj0->getIndex(), "The method getIndex() does not return the expected value");
		$this->assertEquals(null, $obj0->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals(null, $obj0->getLegendIndex(), "The method getLegendIndex() does not return the expected value");
		$this->assertEquals(2, $obj0->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals("round", $obj0->getLinecap(), "The method getLinecap() does not return the expected value");
		$this->assertEquals(null, $obj0->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
		$this->assertEquals(null, $obj0->getMarker(), "The method getMarker() does not return the expected value");
		$this->assertEquals(null, $obj0->getName(), "The method getName() does not return the expected value");
		$this->assertEquals(null, $obj0->getNegativeColor(), "The method getNegativeColor() does not return the expected value");
		$this->assertEquals(null, $obj0->getPoint(), "The method getPoint() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(1, $obj0->getPointInterval(), "The method getPointInterval() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointIntervalUnit(), "The method getPointIntervalUnit() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointPlacement(), "The method getPointPlacement() does not return the expected value");
		$this->assertEquals(0, $obj0->getPointStart(), "The method getPointStart() does not return the expected value");
		$this->assertEquals(false, $obj0->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(false, $obj0->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
		$this->assertEquals(true, $obj0->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
		$this->assertEquals(true, $obj0->getSoftThreshold(), "The method getSoftThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getStack(), "The method getStack() does not return the expected value");
		$this->assertEquals(null, $obj0->getStacking(), "The method getStacking() does not return the expected value");
		$this->assertEquals(null, $obj0->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals("false", $obj0->getStep(), "The method getStep() does not return the expected value");
		$this->assertEquals(true, $obj0->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(0, $obj0->getThreshold(), "The method getThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(1000, $obj0->getTurboThreshold(), "The method getTurboThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getType(), "The method getType() does not return the expected value");
		$this->assertEquals(true, $obj0->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals("0", $obj0->getXAxis(), "The method getXAxis() does not return the expected value");
		$this->assertEquals("0", $obj0->getYAxis(), "The method getYAxis() does not return the expected value");
		$this->assertEquals(null, $obj0->getZIndex(), "The method getZIndex() does not return the expected value");
		$this->assertEquals("y", $obj0->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
		$this->assertEquals(null, $obj0->getZones(), "The method getZones() does not return the expected value");
	}

	/**
	 * Test the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\HighchartsLine(false);

		$obj->newDataLabels();
		$obj->newEvents();
		$obj->newMarker();
		$obj->newPoint();
		$obj->newStates();

		$obj->clear();

		$res = ["dataLabels" => [], "events" => [], "marker" => [], "point" => [], "states" => []];
		$this->assertEquals($res, $obj->toArray(), "The method toArray() does not return the expected array");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\HighchartsLine(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\HighchartsLine(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected object");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\HighchartsLine(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
	}

	/**
	 * Tests the newMarker() method.
	 *
	 * @return void.
	 */
	public function testNewMarker() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\HighchartsLine(false);

		$res = $obj->newMarker();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsMarker::class, $res, "The method newMarker() does not return the expected object");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\HighchartsLine(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsPoint::class, $res, "The method newPoint() does not return the expected object");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\HighchartsLine(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsStates::class, $res, "The method newStates() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\Series\HighchartsLine(true);

		$obj->setAllowPointSelect(1);

		$res1 = ["allowPointSelect" => 1];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with allow point select");

		$obj->setAnimation(0);

		$res2 = ["allowPointSelect" => 1, "animation" => 0];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with animation");

		$obj->setAnimationLimit(28);

		$res3 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res4 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res5 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(71);

		$res6 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setConnectEnds(1);

		$res7 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with connect ends");

		$obj->setConnectNulls(1);

		$res8 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with connect nulls");

		$obj->setCropThreshold(98);

		$res9 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with crop threshold");

		$obj->setCursor("crosshair");

		$res10 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair"];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setDashStyle("LongDashDotDot");

		$res11 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with dash style");

		$obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

		$res12 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with data");

		$obj->setDataLabels(new \WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsDataLabels());

		$res13 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res14 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setEnableMouseTracking(1);

		$res15 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with enable mouse tracking");

		$obj->setEvents(new \WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsEvents());

		$res16 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => []];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(0);

		$res17 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res18 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setGetExtremesFromAll(0);

		$res19 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with get extremes from all");

		$obj->setId("b80bb7740288fda1f201890375a60c8f");

		$res20 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f"];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with id");

		$obj->setIndex(33);

		$res21 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with index");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res22 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLegendIndex(7);

		$res23 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with legend index");

		$obj->setLineWidth(66);

		$res24 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with line width");

		$obj->setLinecap("square");

		$res25 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square"];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with linecap");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res26 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setMarker(new \WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsMarker());

		$res27 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => []];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with marker");

		$obj->setName("b068931cc450442b63f5b3d276ea4297");

		$res28 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297"];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with name");

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res29 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with negative color");

		$obj->setPoint(new \WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsPoint());

		$res30 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res31 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setPointInterval(61);

		$res32 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61];
		$this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with point interval");

		$obj->setPointIntervalUnit("year");

		$res33 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year"];
		$this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with point interval unit");

		$obj->setPointPlacement("between");

		$res34 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between"];
		$this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with point placement");

		$obj->setPointStart(5);

		$res35 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5];
		$this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with point start");

		$obj->setSelected(0);

		$res36 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0];
		$this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with selected");

		$obj->setShadow(1);

		$res37 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1];
		$this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

		$obj->setShowCheckbox(0);

		$res38 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0];
		$this->assertEquals($res38, $obj->toArray(), "The method toArray() does not return the expected array with show checkbox");

		$obj->setShowInLegend(0);

		$res39 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0];
		$this->assertEquals($res39, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

		$obj->setSkipKeyboardNavigation(0);

		$res40 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res40, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setSoftThreshold(0);

		$res41 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0];
		$this->assertEquals($res41, $obj->toArray(), "The method toArray() does not return the expected array with soft threshold");

		$obj->setStack("fac2a47adace059aff113283a03f6760");

		$res42 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760"];
		$this->assertEquals($res42, $obj->toArray(), "The method toArray() does not return the expected array with stack");

		$obj->setStacking("percent");

		$res43 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent"];
		$this->assertEquals($res43, $obj->toArray(), "The method toArray() does not return the expected array with stacking");

		$obj->setStates(new \WBW\HighchartsBundle\API\Chart\Series\Line\HighchartsStates());

		$res44 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => []];
		$this->assertEquals($res44, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setStep("right");

		$res45 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right"];
		$this->assertEquals($res45, $obj->toArray(), "The method toArray() does not return the expected array with step");

		$obj->setStickyTracking(1);

		$res46 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1];
		$this->assertEquals($res46, $obj->toArray(), "The method toArray() does not return the expected array with sticky tracking");

		$obj->setThreshold(34);

		$res47 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 34];
		$this->assertEquals($res47, $obj->toArray(), "The method toArray() does not return the expected array with threshold");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res48 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 34, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res48, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setTurboThreshold(99);

		$res49 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 34, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 99];
		$this->assertEquals($res49, $obj->toArray(), "The method toArray() does not return the expected array with turbo threshold");

		$obj->setType("waterfall");

		$res50 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 34, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 99, "type" => "waterfall"];
		$this->assertEquals($res50, $obj->toArray(), "The method toArray() does not return the expected array with type");

		$obj->setVisible(0);

		$res51 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 34, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 99, "type" => "waterfall", "visible" => 0];
		$this->assertEquals($res51, $obj->toArray(), "The method toArray() does not return the expected array with visible");

		$obj->setXAxis(51);

		$res52 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 34, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 99, "type" => "waterfall", "visible" => 0, "xAxis" => 51];
		$this->assertEquals($res52, $obj->toArray(), "The method toArray() does not return the expected array with x axis");

		$obj->setYAxis(72);

		$res53 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 34, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 99, "type" => "waterfall", "visible" => 0, "xAxis" => 51, "yAxis" => 72];
		$this->assertEquals($res53, $obj->toArray(), "The method toArray() does not return the expected array with y axis");

		$obj->setZIndex(32);

		$res54 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 34, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 99, "type" => "waterfall", "visible" => 0, "xAxis" => 51, "yAxis" => 72, "zIndex" => 32];
		$this->assertEquals($res54, $obj->toArray(), "The method toArray() does not return the expected array with z index");

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res55 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 34, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 99, "type" => "waterfall", "visible" => 0, "xAxis" => 51, "yAxis" => 72, "zIndex" => 32, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res55, $obj->toArray(), "The method toArray() does not return the expected array with zone axis");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res56 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 28, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 71, "connectEnds" => 1, "connectNulls" => 1, "cropThreshold" => 98, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 33, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 7, "lineWidth" => 66, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 61, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 5, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 34, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 99, "type" => "waterfall", "visible" => 0, "xAxis" => 51, "yAxis" => 72, "zIndex" => 32, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res56, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
