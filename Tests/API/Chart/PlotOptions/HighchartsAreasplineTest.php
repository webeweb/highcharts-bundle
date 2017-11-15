<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts areaspline test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsAreasplineTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline(true);

		$this->assertEquals(null, $obj1->getAllowPointSelect());
		$this->assertEquals(null, $obj1->getAnimation());
		$this->assertEquals(null, $obj1->getAnimationLimit());
		$this->assertEquals(null, $obj1->getClassName());
		$this->assertEquals(null, $obj1->getColor());
		$this->assertEquals(null, $obj1->getColorIndex());
		$this->assertEquals(null, $obj1->getConnectEnds());
		$this->assertEquals(null, $obj1->getConnectNulls());
		$this->assertEquals(null, $obj1->getCropThreshold());
		$this->assertEquals(null, $obj1->getCursor());
		$this->assertEquals(null, $obj1->getDashStyle());
		$this->assertEquals(null, $obj1->getDataLabels());
		$this->assertEquals(null, $obj1->getDescription());
		$this->assertEquals(null, $obj1->getEnableMouseTracking());
		$this->assertEquals(null, $obj1->getEvents());
		$this->assertEquals(null, $obj1->getExposeElementToA11y());
		$this->assertEquals(null, $obj1->getFillColor());
		$this->assertEquals(null, $obj1->getFillOpacity());
		$this->assertEquals(null, $obj1->getFindNearestPointBy());
		$this->assertEquals(null, $obj1->getGetExtremesFromAll());
		$this->assertEquals(null, $obj1->getKeys());
		$this->assertEquals(null, $obj1->getLineColor());
		$this->assertEquals(null, $obj1->getLineWidth());
		$this->assertEquals(null, $obj1->getLinecap());
		$this->assertEquals(null, $obj1->getLinkedTo());
		$this->assertEquals(null, $obj1->getMarker());
		$this->assertEquals(null, $obj1->getNegativeColor());
		$this->assertEquals(null, $obj1->getNegativeFillColor());
		$this->assertEquals(null, $obj1->getPoint());
		$this->assertEquals(null, $obj1->getPointDescriptionFormatter());
		$this->assertEquals(null, $obj1->getPointInterval());
		$this->assertEquals(null, $obj1->getPointIntervalUnit());
		$this->assertEquals(null, $obj1->getPointPlacement());
		$this->assertEquals(null, $obj1->getPointStart());
		$this->assertEquals(null, $obj1->getSelected());
		$this->assertEquals(null, $obj1->getShadow());
		$this->assertEquals(null, $obj1->getShowCheckbox());
		$this->assertEquals(null, $obj1->getShowInLegend());
		$this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
		$this->assertEquals(null, $obj1->getSoftThreshold());
		$this->assertEquals(null, $obj1->getStacking());
		$this->assertEquals(null, $obj1->getStates());
		$this->assertEquals(null, $obj1->getStickyTracking());
		$this->assertEquals(null, $obj1->getThreshold());
		$this->assertEquals(null, $obj1->getTooltip());
		$this->assertEquals(null, $obj1->getTrackByArea());
		$this->assertEquals(null, $obj1->getTurboThreshold());
		$this->assertEquals(null, $obj1->getVisible());
		$this->assertEquals(null, $obj1->getZoneAxis());
		$this->assertEquals(null, $obj1->getZones());

		$obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline(false);

		$this->assertEquals(false, $obj0->getAllowPointSelect());
		$this->assertEquals(true, $obj0->getAnimation());
		$this->assertEquals(null, $obj0->getAnimationLimit());
		$this->assertEquals(null, $obj0->getClassName());
		$this->assertEquals(null, $obj0->getColor());
		$this->assertEquals(null, $obj0->getColorIndex());
		$this->assertEquals(true, $obj0->getConnectEnds());
		$this->assertEquals(false, $obj0->getConnectNulls());
		$this->assertEquals(300, $obj0->getCropThreshold());
		$this->assertEquals(null, $obj0->getCursor());
		$this->assertEquals("Solid", $obj0->getDashStyle());
		$this->assertEquals(null, $obj0->getDataLabels());
		$this->assertEquals(null, $obj0->getDescription());
		$this->assertEquals(true, $obj0->getEnableMouseTracking());
		$this->assertEquals(null, $obj0->getEvents());
		$this->assertEquals(null, $obj0->getExposeElementToA11y());
		$this->assertEquals(null, $obj0->getFillColor());
		$this->assertEquals(0.75, $obj0->getFillOpacity());
		$this->assertEquals(null, $obj0->getFindNearestPointBy());
		$this->assertEquals(false, $obj0->getGetExtremesFromAll());
		$this->assertEquals(null, $obj0->getKeys());
		$this->assertEquals(null, $obj0->getLineColor());
		$this->assertEquals(2, $obj0->getLineWidth());
		$this->assertEquals("round", $obj0->getLinecap());
		$this->assertEquals(null, $obj0->getLinkedTo());
		$this->assertEquals(null, $obj0->getMarker());
		$this->assertEquals(null, $obj0->getNegativeColor());
		$this->assertEquals(null, $obj0->getNegativeFillColor());
		$this->assertEquals(null, $obj0->getPoint());
		$this->assertEquals(null, $obj0->getPointDescriptionFormatter());
		$this->assertEquals(1, $obj0->getPointInterval());
		$this->assertEquals(null, $obj0->getPointIntervalUnit());
		$this->assertEquals(null, $obj0->getPointPlacement());
		$this->assertEquals(0, $obj0->getPointStart());
		$this->assertEquals(false, $obj0->getSelected());
		$this->assertEquals(false, $obj0->getShadow());
		$this->assertEquals(false, $obj0->getShowCheckbox());
		$this->assertEquals(true, $obj0->getShowInLegend());
		$this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
		$this->assertEquals(false, $obj0->getSoftThreshold());
		$this->assertEquals(null, $obj0->getStacking());
		$this->assertEquals(null, $obj0->getStates());
		$this->assertEquals(true, $obj0->getStickyTracking());
		$this->assertEquals(0, $obj0->getThreshold());
		$this->assertEquals(null, $obj0->getTooltip());
		$this->assertEquals(false, $obj0->getTrackByArea());
		$this->assertEquals(1000, $obj0->getTurboThreshold());
		$this->assertEquals(true, $obj0->getVisible());
		$this->assertEquals("y", $obj0->getZoneAxis());
		$this->assertEquals(null, $obj0->getZones());
    }

	/**
	 * Tests the clear() method.
	 *
	 * @return void
	 */
	public function testClear() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline(false);

		$obj->newDataLabels();
		$obj->newEvents();
		$obj->newMarker();
		$obj->newPoint();
		$obj->newStates();

		$obj->clear();

		$res = ["dataLabels" => [], "events" => [], "marker" => [], "point" => [], "states" => []];
		$this->assertEquals($res, $obj->toArray());
	}

	/**
	 * Tests the jsonSerialize() method.
	 *
	 * @return void
	 */
	public function testJsonSerialize() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline(true);

		$this->assertEquals([], $obj->jsonSerialize());
	}

	/**
	 * Tests the newDataLabels() method.
	 *
	 * @return void.
	 */
	public function testNewDataLabels() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline(false);

		$res = $obj->newDataLabels();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsDataLabels::class, $res);
	}

	/**
	 * Tests the newEvents() method.
	 *
	 * @return void.
	 */
	public function testNewEvents() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline(false);

		$res = $obj->newEvents();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsEvents::class, $res);
	}

	/**
	 * Tests the newMarker() method.
	 *
	 * @return void.
	 */
	public function testNewMarker() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline(false);

		$res = $obj->newMarker();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsMarker::class, $res);
	}

	/**
	 * Tests the newPoint() method.
	 *
	 * @return void.
	 */
	public function testNewPoint() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline(false);

		$res = $obj->newPoint();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsPoint::class, $res);
	}

	/**
	 * Tests the newStates() method.
	 *
	 * @return void.
	 */
	public function testNewStates() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline(false);

		$res = $obj->newStates();
		$this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsStates::class, $res);
	}

	/**
	 * Tests the toArray() method.
	 *
	 * @return void
	 */
	public function testToArray() {

		$obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsAreaspline(true);

		$obj->setAllowPointSelect(1);

		$res1 = ["allowPointSelect" => 1];
		$this->assertEquals($res1, $obj->toArray());

		$obj->setAnimation(1);

		$res2 = ["allowPointSelect" => 1, "animation" => 1];
		$this->assertEquals($res2, $obj->toArray());

		$obj->setAnimationLimit(95);

		$res3 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95];
		$this->assertEquals($res3, $obj->toArray());

		$obj->setClassName("6f66e878c62db60568a3487869695820");

		$res4 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820"];
		$this->assertEquals($res4, $obj->toArray());

		$obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

		$res5 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
		$this->assertEquals($res5, $obj->toArray());

		$obj->setColorIndex(22);

		$res6 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22];
		$this->assertEquals($res6, $obj->toArray());

		$obj->setConnectEnds(1);

		$res7 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1];
		$this->assertEquals($res7, $obj->toArray());

		$obj->setConnectNulls(0);

		$res8 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0];
		$this->assertEquals($res8, $obj->toArray());

		$obj->setCropThreshold(13);

		$res9 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13];
		$this->assertEquals($res9, $obj->toArray());

		$obj->setCursor("crosshair");

		$res10 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair"];
		$this->assertEquals($res10, $obj->toArray());

		$obj->setDashStyle("LongDashDotDot");

		$res11 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
		$this->assertEquals($res11, $obj->toArray());

		$obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsDataLabels());

		$res12 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => []];
		$this->assertEquals($res12, $obj->toArray());

		$obj->setDescription("67daf92c833c41c95db874e18fcb2786");

		$res13 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
		$this->assertEquals($res13, $obj->toArray());

		$obj->setEnableMouseTracking(1);

		$res14 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
		$this->assertEquals($res14, $obj->toArray());

		$obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsEvents());

		$res15 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => []];
		$this->assertEquals($res15, $obj->toArray());

		$obj->setExposeElementToA11y(0);

		$res16 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
		$this->assertEquals($res16, $obj->toArray());

		$obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

		$res17 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
		$this->assertEquals($res17, $obj->toArray());

		$obj->setFillOpacity(56);

		$res18 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56];
		$this->assertEquals($res18, $obj->toArray());

		$obj->setFindNearestPointBy("xy");

		$res19 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy"];
		$this->assertEquals($res19, $obj->toArray());

		$obj->setGetExtremesFromAll(1);

		$res20 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
		$this->assertEquals($res20, $obj->toArray());

		$obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

		$res21 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
		$this->assertEquals($res21, $obj->toArray());

		$obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

		$res22 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
		$this->assertEquals($res22, $obj->toArray());

		$obj->setLineWidth(57);

		$res23 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57];
		$this->assertEquals($res23, $obj->toArray());

		$obj->setLinecap("square");

		$res24 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square"];
		$this->assertEquals($res24, $obj->toArray());

		$obj->setLinkedTo("914fab47afc86331ec62837807a29419");

		$res25 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419"];
		$this->assertEquals($res25, $obj->toArray());

		$obj->setMarker(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsMarker());

		$res26 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => []];
		$this->assertEquals($res26, $obj->toArray());

		$obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

		$res27 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
		$this->assertEquals($res27, $obj->toArray());

		$obj->setNegativeFillColor("a966442d64e00bf8663e7c5d9708074a");

		$res28 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a"];
		$this->assertEquals($res28, $obj->toArray());

		$obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsPoint());

		$res29 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => []];
		$this->assertEquals($res29, $obj->toArray());

		$obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

		$res30 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
		$this->assertEquals($res30, $obj->toArray());

		$obj->setPointInterval(57);

		$res31 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57];
		$this->assertEquals($res31, $obj->toArray());

		$obj->setPointIntervalUnit("year");

		$res32 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year"];
		$this->assertEquals($res32, $obj->toArray());

		$obj->setPointPlacement("between");

		$res33 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between"];
		$this->assertEquals($res33, $obj->toArray());

		$obj->setPointStart(43);

		$res34 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43];
		$this->assertEquals($res34, $obj->toArray());

		$obj->setSelected(1);

		$res35 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1];
		$this->assertEquals($res35, $obj->toArray());

		$obj->setShadow(0);

		$res36 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0];
		$this->assertEquals($res36, $obj->toArray());

		$obj->setShowCheckbox(1);

		$res37 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1];
		$this->assertEquals($res37, $obj->toArray());

		$obj->setShowInLegend(1);

		$res38 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1];
		$this->assertEquals($res38, $obj->toArray());

		$obj->setSkipKeyboardNavigation(0);

		$res39 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0];
		$this->assertEquals($res39, $obj->toArray());

		$obj->setSoftThreshold(1);

		$res40 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1];
		$this->assertEquals($res40, $obj->toArray());

		$obj->setStacking("percent");

		$res41 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stacking" => "percent"];
		$this->assertEquals($res41, $obj->toArray());

		$obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Areaspline\HighchartsStates());

		$res42 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stacking" => "percent", "states" => []];
		$this->assertEquals($res42, $obj->toArray());

		$obj->setStickyTracking(1);

		$res43 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stacking" => "percent", "states" => [], "stickyTracking" => 1];
		$this->assertEquals($res43, $obj->toArray());

		$obj->setThreshold(8);

		$res44 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 8];
		$this->assertEquals($res44, $obj->toArray());

		$obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

		$res45 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 8, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
		$this->assertEquals($res45, $obj->toArray());

		$obj->setTrackByArea(1);

		$res46 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 8, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1];
		$this->assertEquals($res46, $obj->toArray());

		$obj->setTurboThreshold(43);

		$res47 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 8, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 43];
		$this->assertEquals($res47, $obj->toArray());

		$obj->setVisible(1);

		$res48 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 8, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 43, "visible" => 1];
		$this->assertEquals($res48, $obj->toArray());

		$obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

		$res49 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 8, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 43, "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
		$this->assertEquals($res49, $obj->toArray());

		$obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

		$res50 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 95, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 22, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 13, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 56, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 57, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 43, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stacking" => "percent", "states" => [], "stickyTracking" => 1, "threshold" => 8, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 43, "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
		$this->assertEquals($res50, $obj->toArray());
	}

}
