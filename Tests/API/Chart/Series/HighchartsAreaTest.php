<?php

/**
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series;

use PHPUnit_Framework_TestCase;

/**
 * Highcharts area test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsAreaTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(true);

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
        $this->assertNull($obj1->getData());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFillColor());
        $this->assertNull($obj1->getFillOpacity());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getIndex());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLegendIndex());
        $this->assertNull($obj1->getLineColor());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLinecap());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMarker());
        $this->assertNull($obj1->getName());
        $this->assertNull($obj1->getNegativeColor());
        $this->assertNull($obj1->getNegativeFillColor());
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
        $this->assertNull($obj1->getStack());
        $this->assertNull($obj1->getStacking());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStep());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getThreshold());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getTrackByArea());
        $this->assertNull($obj1->getTurboThreshold());
        $this->assertNull($obj1->getType());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getXAxis());
        $this->assertNull($obj1->getYAxis());
        $this->assertNull($obj1->getZIndex());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

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
        $this->assertNull($obj0->getData());
        $this->assertNull($obj0->getDataLabels());
        $this->assertNull($obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFillColor());
        $this->assertEquals(0.75, $obj0->getFillOpacity());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getIndex());
        $this->assertNull($obj0->getKeys());
        $this->assertNull($obj0->getLegendIndex());
        $this->assertNull($obj0->getLineColor());
        $this->assertEquals(2, $obj0->getLineWidth());
        $this->assertEquals("round", $obj0->getLinecap());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertNull($obj0->getMarker());
        $this->assertNull($obj0->getName());
        $this->assertNull($obj0->getNegativeColor());
        $this->assertNull($obj0->getNegativeFillColor());
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
        $this->assertEquals(false, $obj0->getSoftThreshold());
        $this->assertNull($obj0->getStack());
        $this->assertNull($obj0->getStacking());
        $this->assertNull($obj0->getStates());
        $this->assertEquals("false", $obj0->getStep());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertEquals(0, $obj0->getThreshold());
        $this->assertNull($obj0->getTooltip());
        $this->assertEquals(false, $obj0->getTrackByArea());
        $this->assertEquals(1000, $obj0->getTurboThreshold());
        $this->assertNull($obj0->getType());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals("0", $obj0->getXAxis());
        $this->assertEquals("0", $obj0->getYAxis());
        $this->assertNull($obj0->getZIndex());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertNull($obj0->getZones());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newMarker() method.
     *
     * @return void.
     */
    public function testNewMarker() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsMarker::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsArea(true);

        $obj->setAllowPointSelect(0);

        $res1 = ["allowPointSelect" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(1);

        $res2 = ["allowPointSelect" => 0, "animation" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(66);

        $res3 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res4 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res5 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setColorIndex(13);

        $res6 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setConnectEnds(0);

        $res7 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setConnectNulls(1);

        $res8 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setCropThreshold(65);

        $res9 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setCursor("crosshair");

        $res10 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair"];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDashStyle("LongDashDotDot");

        $res11 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res12 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsDataLabels());

        $res13 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res14 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res15 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsEvents());

        $res16 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setExposeElementToA11y(1);

        $res17 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

        $res18 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setFillOpacity(44);

        $res19 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res20 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy"];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setGetExtremesFromAll(1);

        $res21 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res22 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setIndex(78);

        $res23 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res24 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setLegendIndex(46);

        $res25 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res26 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setLineWidth(40);

        $res27 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setLinecap("square");

        $res28 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res29 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setMarker(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsMarker());

        $res30 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => []];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res31 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res32 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setNegativeFillColor("a966442d64e00bf8663e7c5d9708074a");

        $res33 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a"];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsPoint());

        $res34 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => []];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res35 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setPointInterval(82);

        $res36 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res37 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year"];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setPointPlacement("between");

        $res38 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between"];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setPointStart(78);

        $res39 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setSelected(1);

        $res40 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setShadow(1);

        $res41 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setShowCheckbox(1);

        $res42 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setShowInLegend(1);

        $res43 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res44 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setSoftThreshold(1);

        $res45 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setStack("fac2a47adace059aff113283a03f6760");

        $res46 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760"];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setStacking("percent");

        $res47 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent"];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Area\HighchartsStates());

        $res48 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => []];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setStep("right");

        $res49 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right"];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setStickyTracking(1);

        $res50 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setThreshold(83);

        $res51 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res52 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setTrackByArea(1);

        $res53 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setTurboThreshold(29);

        $res54 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 29];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setType("waterfall");

        $res55 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 29, "type" => "waterfall"];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setVisible(0);

        $res56 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 29, "type" => "waterfall", "visible" => 0];
        $this->assertEquals($res56, $obj->toArray());

        $obj->setXAxis(16);

        $res57 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 29, "type" => "waterfall", "visible" => 0, "xAxis" => 16];
        $this->assertEquals($res57, $obj->toArray());

        $obj->setYAxis(32);

        $res58 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 29, "type" => "waterfall", "visible" => 0, "xAxis" => 16, "yAxis" => 32];
        $this->assertEquals($res58, $obj->toArray());

        $obj->setZIndex(85);

        $res59 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 29, "type" => "waterfall", "visible" => 0, "xAxis" => 16, "yAxis" => 32, "zIndex" => 85];
        $this->assertEquals($res59, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res60 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 29, "type" => "waterfall", "visible" => 0, "xAxis" => 16, "yAxis" => 32, "zIndex" => 85, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res60, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res61 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 66, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 13, "connectEnds" => 0, "connectNulls" => 1, "cropThreshold" => 65, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 44, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 78, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 46, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 40, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 82, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 78, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 1, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "step" => "right", "stickyTracking" => 1, "threshold" => 83, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 1, "turboThreshold" => 29, "type" => "waterfall", "visible" => 0, "xAxis" => 16, "yAxis" => 32, "zIndex" => 85, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res61, $obj->toArray());
    }

}
