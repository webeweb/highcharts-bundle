<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts line test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsLineTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine(true);

        $this->assertNull($obj1->getAllowPointSelect());
        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getConnectEnds());
        $this->assertNull($obj1->getConnectNulls());
        $this->assertNull($obj1->getCropThreshold());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getDashStyle());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLinecap());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMarker());
        $this->assertNull($obj1->getNegativeColor());
        $this->assertNull($obj1->getPoint());
        $this->assertNull($obj1->getPointDescriptionFormatter());
        $this->assertNull($obj1->getPointInterval());
        $this->assertNull($obj1->getPointIntervalUnit());
        $this->assertNull($obj1->getPointPlacement());
        $this->assertNull($obj1->getPointStart());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getShadow());
        $this->assertNull($obj1->getShowCheckbox());
        $this->assertNull($obj1->getShowInLegend());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getSoftThreshold());
        $this->assertNull($obj1->getStacking());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStep());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getThreshold());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getTurboThreshold());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertNull($obj0->getColorIndex());
        $this->assertEquals(true, $obj0->getConnectEnds());
        $this->assertEquals(false, $obj0->getConnectNulls());
        $this->assertEquals(300, $obj0->getCropThreshold());
        $this->assertNull($obj0->getCursor());
        $this->assertEquals("Solid", $obj0->getDashStyle());
        $this->assertNull($obj0->getDataLabels());
        $this->assertNull($obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertNull($obj0->getKeys());
        $this->assertEquals(2, $obj0->getLineWidth());
        $this->assertEquals("round", $obj0->getLinecap());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertNull($obj0->getMarker());
        $this->assertNull($obj0->getNegativeColor());
        $this->assertNull($obj0->getPoint());
        $this->assertNull($obj0->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj0->getPointInterval());
        $this->assertNull($obj0->getPointIntervalUnit());
        $this->assertNull($obj0->getPointPlacement());
        $this->assertEquals(0, $obj0->getPointStart());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(true, $obj0->getShowInLegend());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj0->getSoftThreshold());
        $this->assertNull($obj0->getStacking());
        $this->assertNull($obj0->getStates());
        $this->assertEquals("false", $obj0->getStep());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertEquals(0, $obj0->getThreshold());
        $this->assertNull($obj0->getTooltip());
        $this->assertEquals(1000, $obj0->getTurboThreshold());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertNull($obj0->getZones());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newMarker() method.
     *
     * @return void.
     */
    public function testNewMarker() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine(false);

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\HighchartsMarker::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsLine(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(1);

        $res2 = ["allowPointSelect" => 1, "animation" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(82);

        $res3 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res4 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res5 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setColorIndex(35);

        $res6 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setConnectEnds(0);

        $res7 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setConnectNulls(1);

        $res8 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setCropThreshold(39);

        $res9 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setCursor("crosshair");

        $res10 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair"];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDashStyle("LongDashDotDot");

        $res11 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\HighchartsDataLabels());

        $res12 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => []];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res13 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res14 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\HighchartsEvents());

        $res15 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setExposeElementToA11y(1);

        $res16 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res17 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setGetExtremesFromAll(1);

        $res18 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res19 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setLineWidth(64);

        $res20 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setLinecap("square");

        $res21 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square"];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res22 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setMarker(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\HighchartsMarker());

        $res23 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => []];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res24 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\HighchartsPoint());

        $res25 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res26 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setPointInterval(53);

        $res27 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res28 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setPointPlacement("between");

        $res29 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setPointStart(58);

        $res30 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setSelected(1);

        $res31 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setShadow(0);

        $res32 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setShowCheckbox(1);

        $res33 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setShowInLegend(1);

        $res34 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res35 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setSoftThreshold(0);

        $res36 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setStacking("percent");

        $res37 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stacking" => "percent"];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Line\HighchartsStates());

        $res38 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stacking" => "percent", "states" => []];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setStep("right");

        $res39 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stacking" => "percent", "states" => [], "step" => "right"];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setStickyTracking(0);

        $res40 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 0];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setThreshold(95);

        $res41 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 0, "threshold" => 95];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res42 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 0, "threshold" => 95, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setTurboThreshold(13);

        $res43 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 0, "threshold" => 95, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 13];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setVisible(0);

        $res44 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 0, "threshold" => 95, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 13, "visible" => 0];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res45 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 0, "threshold" => 95, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 13, "visible" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res46 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 82, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 35, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 39, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 64, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 53, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 58, "selected" => 1, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 0, "threshold" => 95, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 13, "visible" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res46, $obj->toArray());
    }

}
