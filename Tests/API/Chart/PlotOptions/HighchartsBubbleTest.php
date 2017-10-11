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
 * Highcharts bubble test.
 *
 * @author WBW <https://github.com/webeweb/WBWHighchartsBundle>
 * @package WBW\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsBubbleTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(true);

		$this->assertEquals(null, $obj1->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
		$this->assertEquals(null, $obj1->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj1->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals(null, $obj1->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj1->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(null, $obj1->getCropThreshold(), "The method getCropThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals(null, $obj1->getDashStyle(), "The method getDashStyle() does not return the expected value");
		$this->assertEquals(null, $obj1->getDataLabels(), "The method getDataLabels() does not return the expected value");
		$this->assertEquals(null, $obj1->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(null, $obj1->getDisplayNegative(), "The method getDisplayNegative() does not return the expected value");
		$this->assertEquals(null, $obj1->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj1->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
		$this->assertEquals(null, $obj1->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
		$this->assertEquals(null, $obj1->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
		$this->assertEquals(null, $obj1->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals(null, $obj1->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(null, $obj1->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
		$this->assertEquals(null, $obj1->getMarker(), "The method getMarker() does not return the expected value");
		$this->assertEquals(null, $obj1->getMaxSize(), "The method getMaxSize() does not return the expected value");
		$this->assertEquals(null, $obj1->getMinSize(), "The method getMinSize() does not return the expected value");
		$this->assertEquals(null, $obj1->getNegativeColor(), "The method getNegativeColor() does not return the expected value");
		$this->assertEquals(null, $obj1->getPoint(), "The method getPoint() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointInterval(), "The method getPointInterval() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointIntervalUnit(), "The method getPointIntervalUnit() does not return the expected value");
		$this->assertEquals(null, $obj1->getPointStart(), "The method getPointStart() does not return the expected value");
		$this->assertEquals(null, $obj1->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(null, $obj1->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
		$this->assertEquals(null, $obj1->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
		$this->assertEquals(null, $obj1->getSizeBy(), "The method getSizeBy() does not return the expected value");
		$this->assertEquals(null, $obj1->getSizeByAbsoluteValue(), "The method getSizeByAbsoluteValue() does not return the expected value");
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
		$this->assertEquals(null, $obj1->getSoftThreshold(), "The method getSoftThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(null, $obj1->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(null, $obj1->getThreshold(), "The method getThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(null, $obj1->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals(null, $obj1->getZMax(), "The method getZMax() does not return the expected value");
		$this->assertEquals(null, $obj1->getZMin(), "The method getZMin() does not return the expected value");
		$this->assertEquals(null, $obj1->getZThreshold(), "The method getZThreshold() does not return the expected value");
		$this->assertEquals(null, $obj1->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
		$this->assertEquals(null, $obj1->getZones(), "The method getZones() does not return the expected value");

		$obj0 = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

		$this->assertEquals(false, $obj0->getAllowPointSelect(), "The method getAllowPointSelect() does not return the expected value");
		$this->assertEquals(true, $obj0->getAnimation(), "The method getAnimation() does not return the expected value");
		$this->assertEquals(null, $obj0->getAnimationLimit(), "The method getAnimationLimit() does not return the expected value");
		$this->assertEquals(null, $obj0->getClassName(), "The method getClassName() does not return the expected value");
		$this->assertEquals(null, $obj0->getColor(), "The method getColor() does not return the expected value");
		$this->assertEquals(null, $obj0->getColorIndex(), "The method getColorIndex() does not return the expected value");
		$this->assertEquals(300, $obj0->getCropThreshold(), "The method getCropThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getCursor(), "The method getCursor() does not return the expected value");
		$this->assertEquals("Solid", $obj0->getDashStyle(), "The method getDashStyle() does not return the expected value");
		$this->assertEquals(null, $obj0->getDataLabels(), "The method getDataLabels() does not return the expected value");
		$this->assertEquals(null, $obj0->getDescription(), "The method getDescription() does not return the expected value");
		$this->assertEquals(true, $obj0->getDisplayNegative(), "The method getDisplayNegative() does not return the expected value");
		$this->assertEquals(true, $obj0->getEnableMouseTracking(), "The method getEnableMouseTracking() does not return the expected value");
		$this->assertEquals(null, $obj0->getEvents(), "The method getEvents() does not return the expected value");
		$this->assertEquals(null, $obj0->getExposeElementToA11y(), "The method getExposeElementToA11y() does not return the expected value");
		$this->assertEquals(null, $obj0->getFindNearestPointBy(), "The method getFindNearestPointBy() does not return the expected value");
		$this->assertEquals(false, $obj0->getGetExtremesFromAll(), "The method getGetExtremesFromAll() does not return the expected value");
		$this->assertEquals(null, $obj0->getKeys(), "The method getKeys() does not return the expected value");
		$this->assertEquals(0, $obj0->getLineWidth(), "The method getLineWidth() does not return the expected value");
		$this->assertEquals(null, $obj0->getLinkedTo(), "The method getLinkedTo() does not return the expected value");
		$this->assertEquals(null, $obj0->getMarker(), "The method getMarker() does not return the expected value");
		$this->assertEquals("20%", $obj0->getMaxSize(), "The method getMaxSize() does not return the expected value");
		$this->assertEquals("8", $obj0->getMinSize(), "The method getMinSize() does not return the expected value");
		$this->assertEquals(null, $obj0->getNegativeColor(), "The method getNegativeColor() does not return the expected value");
		$this->assertEquals(null, $obj0->getPoint(), "The method getPoint() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter(), "The method getPointDescriptionFormatter() does not return the expected value");
		$this->assertEquals(1, $obj0->getPointInterval(), "The method getPointInterval() does not return the expected value");
		$this->assertEquals(null, $obj0->getPointIntervalUnit(), "The method getPointIntervalUnit() does not return the expected value");
		$this->assertEquals(0, $obj0->getPointStart(), "The method getPointStart() does not return the expected value");
		$this->assertEquals(false, $obj0->getSelected(), "The method getSelected() does not return the expected value");
		$this->assertEquals(false, $obj0->getShadow(), "The method getShadow() does not return the expected value");
		$this->assertEquals(false, $obj0->getShowCheckbox(), "The method getShowCheckbox() does not return the expected value");
		$this->assertEquals(true, $obj0->getShowInLegend(), "The method getShowInLegend() does not return the expected value");
		$this->assertEquals("area", $obj0->getSizeBy(), "The method getSizeBy() does not return the expected value");
		$this->assertEquals(false, $obj0->getSizeByAbsoluteValue(), "The method getSizeByAbsoluteValue() does not return the expected value");
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation(), "The method getSkipKeyboardNavigation() does not return the expected value");
		$this->assertEquals(false, $obj0->getSoftThreshold(), "The method getSoftThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getStates(), "The method getStates() does not return the expected value");
		$this->assertEquals(false, $obj0->getStickyTracking(), "The method getStickyTracking() does not return the expected value");
		$this->assertEquals(0, $obj0->getThreshold(), "The method getThreshold() does not return the expected value");
		$this->assertEquals(null, $obj0->getTooltip(), "The method getTooltip() does not return the expected value");
		$this->assertEquals(true, $obj0->getVisible(), "The method getVisible() does not return the expected value");
		$this->assertEquals(null, $obj0->getZMax(), "The method getZMax() does not return the expected value");
		$this->assertEquals(null, $obj0->getZMin(), "The method getZMin() does not return the expected value");
		$this->assertEquals(0, $obj0->getZThreshold(), "The method getZThreshold() does not return the expected value");
		$this->assertEquals("y", $obj0->getZoneAxis(), "The method getZoneAxis() does not return the expected value");
		$this->assertEquals(null, $obj0->getZones(), "The method getZones() does not return the expected value");
	}

	/**
	 * Test the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(true);

		$this->assertEquals([], $obj->jsonSerialize(), "The method jsonSerialize() does not return the expected value");
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsDataLabels::class, $res, "The method newDataLabels() does not return the expected object");
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsEvents::class, $res, "The method newEvents() does not return the expected object");
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsPoint::class, $res, "The method newPoint() does not return the expected object");
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsStates::class, $res, "The method newStates() does not return the expected object");
	}

	/**
	 * Test the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(true);

		$obj->setAllowPointSelect(1);

		$res1 = ["allowPointSelect" => 1];
		$this->assertEquals($res1, $obj->toArray(), "The method toArray() does not return the expected array with allow point select");

		$obj->setAnimation(1);

		$res2 = ["allowPointSelect" => 1, "animation" => 1];
		$this->assertEquals($res2, $obj->toArray(), "The method toArray() does not return the expected array with animation");

		$obj->setAnimationLimit(43);

		$res3 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43];
		$this->assertEquals($res3, $obj->toArray(), "The method toArray() does not return the expected array with animation limit");

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res4 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res4, $obj->toArray(), "The method toArray() does not return the expected array with class name");

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res5 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res5, $obj->toArray(), "The method toArray() does not return the expected array with color");

		$obj->setColorIndex(28);

		$res6 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28];
		$this->assertEquals($res6, $obj->toArray(), "The method toArray() does not return the expected array with color index");

		$obj->setCropThreshold(53);

		$res7 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53];
		$this->assertEquals($res7, $obj->toArray(), "The method toArray() does not return the expected array with crop threshold");

		$obj->setCursor("crosshair");

		$res8 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair"];
		$this->assertEquals($res8, $obj->toArray(), "The method toArray() does not return the expected array with cursor");

		$obj->setDashStyle("LongDashDotDot");

		$res9 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
		$this->assertEquals($res9, $obj->toArray(), "The method toArray() does not return the expected array with dash style");

		$obj->setDataLabels(new \WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsDataLabels());

		$res10 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => []];
		$this->assertEquals($res10, $obj->toArray(), "The method toArray() does not return the expected array with data labels");

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res11 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res11, $obj->toArray(), "The method toArray() does not return the expected array with description");

		$obj->setDisplayNegative(1);

		$res12 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1];
		$this->assertEquals($res12, $obj->toArray(), "The method toArray() does not return the expected array with display negative");

		$obj->setEnableMouseTracking(1);

		$res13 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1];
		$this->assertEquals($res13, $obj->toArray(), "The method toArray() does not return the expected array with enable mouse tracking");

		$obj->setEvents(new \WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsEvents());

		$res14 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => []];
		$this->assertEquals($res14, $obj->toArray(), "The method toArray() does not return the expected array with events");

		$obj->setExposeElementToA11y(1);

		$res15 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1];
		$this->assertEquals($res15, $obj->toArray(), "The method toArray() does not return the expected array with expose element to a11y");

		$obj->setFindNearestPointBy("xy");

		$res16 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
		$this->assertEquals($res16, $obj->toArray(), "The method toArray() does not return the expected array with find nearest point by");

		$obj->setGetExtremesFromAll(1);

		$res17 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
		$this->assertEquals($res17, $obj->toArray(), "The method toArray() does not return the expected array with get extremes from all");

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res18 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res18, $obj->toArray(), "The method toArray() does not return the expected array with keys");

		$obj->setLineWidth(78);

		$res19 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78];
		$this->assertEquals($res19, $obj->toArray(), "The method toArray() does not return the expected array with line width");

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res20 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res20, $obj->toArray(), "The method toArray() does not return the expected array with linked to");

		$obj->setMarker(["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"]);

		$res21 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"]];
		$this->assertEquals($res21, $obj->toArray(), "The method toArray() does not return the expected array with marker");

		$obj->setMaxSize("b78e1120b12abd7215d67324fe9476ff");

		$res22 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff"];
		$this->assertEquals($res22, $obj->toArray(), "The method toArray() does not return the expected array with max size");

		$obj->setMinSize("3de5f14eaef5c47fb68166862243861e");

		$res23 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e"];
		$this->assertEquals($res23, $obj->toArray(), "The method toArray() does not return the expected array with min size");

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res24 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res24, $obj->toArray(), "The method toArray() does not return the expected array with negative color");

		$obj->setPoint(new \WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsPoint());

		$res25 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
		$this->assertEquals($res25, $obj->toArray(), "The method toArray() does not return the expected array with point");

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res26 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res26, $obj->toArray(), "The method toArray() does not return the expected array with point description formatter");

		$obj->setPointInterval(11);

		$res27 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11];
		$this->assertEquals($res27, $obj->toArray(), "The method toArray() does not return the expected array with point interval");

		$obj->setPointIntervalUnit("year");

		$res28 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year"];
		$this->assertEquals($res28, $obj->toArray(), "The method toArray() does not return the expected array with point interval unit");

		$obj->setPointStart(44);

		$res29 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44];
		$this->assertEquals($res29, $obj->toArray(), "The method toArray() does not return the expected array with point start");

		$obj->setSelected(1);

		$res30 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1];
		$this->assertEquals($res30, $obj->toArray(), "The method toArray() does not return the expected array with selected");

		$obj->setShadow(1);

		$res31 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1];
		$this->assertEquals($res31, $obj->toArray(), "The method toArray() does not return the expected array with shadow");

		$obj->setShowCheckbox(0);

		$res32 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0];
		$this->assertEquals($res32, $obj->toArray(), "The method toArray() does not return the expected array with show checkbox");

		$obj->setShowInLegend(1);

		$res33 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1];
		$this->assertEquals($res33, $obj->toArray(), "The method toArray() does not return the expected array with show in legend");

		$obj->setSizeBy("width");

		$res34 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width"];
		$this->assertEquals($res34, $obj->toArray(), "The method toArray() does not return the expected array with size by");

		$obj->setSizeByAbsoluteValue(1);

		$res35 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1];
		$this->assertEquals($res35, $obj->toArray(), "The method toArray() does not return the expected array with size by absolute value");

		$obj->setSkipKeyboardNavigation(0);

		$res36 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res36, $obj->toArray(), "The method toArray() does not return the expected array with skip keyboard navigation");

		$obj->setSoftThreshold(1);

		$res37 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1];
		$this->assertEquals($res37, $obj->toArray(), "The method toArray() does not return the expected array with soft threshold");

		$obj->setStates(new \WBW\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsStates());

		$res38 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => []];
		$this->assertEquals($res38, $obj->toArray(), "The method toArray() does not return the expected array with states");

		$obj->setStickyTracking(0);

		$res39 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0];
		$this->assertEquals($res39, $obj->toArray(), "The method toArray() does not return the expected array with sticky tracking");

		$obj->setThreshold(54);

		$res40 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 54];
		$this->assertEquals($res40, $obj->toArray(), "The method toArray() does not return the expected array with threshold");

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res41 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 54, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res41, $obj->toArray(), "The method toArray() does not return the expected array with tooltip");

		$obj->setVisible(0);

		$res42 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 54, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0];
		$this->assertEquals($res42, $obj->toArray(), "The method toArray() does not return the expected array with visible");

		$obj->setZMax(80);

		$res43 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 54, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zMax" => 80];
		$this->assertEquals($res43, $obj->toArray(), "The method toArray() does not return the expected array with z max");

		$obj->setZMin(9);

		$res44 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 54, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zMax" => 80, "zMin" => 9];
		$this->assertEquals($res44, $obj->toArray(), "The method toArray() does not return the expected array with z min");

		$obj->setZThreshold(26);

		$res45 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 54, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zMax" => 80, "zMin" => 9, "zThreshold" => 26];
		$this->assertEquals($res45, $obj->toArray(), "The method toArray() does not return the expected array with z threshold");

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res46 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 54, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zMax" => 80, "zMin" => 9, "zThreshold" => 26, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res46, $obj->toArray(), "The method toArray() does not return the expected array with zone axis");

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res47 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 28, "cropThreshold" => 53, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 78, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 11, "pointIntervalUnit" => "year", "pointStart" => 44, "selected" => 1, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 1, "sizeBy" => "width", "sizeByAbsoluteValue" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "states" => [], "stickyTracking" => 0, "threshold" => 54, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zMax" => 80, "zMin" => 9, "zThreshold" => 26, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res47, $obj->toArray(), "The method toArray() does not return the expected array with zones");
	}

}
