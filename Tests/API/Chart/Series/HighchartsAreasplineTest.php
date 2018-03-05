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
 * Highcharts areaspline test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsAreasplineTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsAreaspline(true);

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
        $this->assertEquals(null, $obj1->getData());
        $this->assertEquals(null, $obj1->getDataLabels());
        $this->assertEquals(null, $obj1->getDescription());
        $this->assertEquals(null, $obj1->getEnableMouseTracking());
        $this->assertEquals(null, $obj1->getEvents());
        $this->assertEquals(null, $obj1->getExposeElementToA11y());
        $this->assertEquals(null, $obj1->getFillColor());
        $this->assertEquals(null, $obj1->getFillOpacity());
        $this->assertEquals(null, $obj1->getFindNearestPointBy());
        $this->assertEquals(null, $obj1->getGetExtremesFromAll());
        $this->assertEquals(null, $obj1->getId());
        $this->assertEquals(null, $obj1->getIndex());
        $this->assertEquals(null, $obj1->getKeys());
        $this->assertEquals(null, $obj1->getLegendIndex());
        $this->assertEquals(null, $obj1->getLineColor());
        $this->assertEquals(null, $obj1->getLineWidth());
        $this->assertEquals(null, $obj1->getLinecap());
        $this->assertEquals(null, $obj1->getLinkedTo());
        $this->assertEquals(null, $obj1->getMarker());
        $this->assertEquals(null, $obj1->getName());
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
        $this->assertEquals(null, $obj1->getStack());
        $this->assertEquals(null, $obj1->getStacking());
        $this->assertEquals(null, $obj1->getStates());
        $this->assertEquals(null, $obj1->getStickyTracking());
        $this->assertEquals(null, $obj1->getThreshold());
        $this->assertEquals(null, $obj1->getTooltip());
        $this->assertEquals(null, $obj1->getTrackByArea());
        $this->assertEquals(null, $obj1->getTurboThreshold());
        $this->assertEquals(null, $obj1->getType());
        $this->assertEquals(null, $obj1->getVisible());
        $this->assertEquals(null, $obj1->getXAxis());
        $this->assertEquals(null, $obj1->getYAxis());
        $this->assertEquals(null, $obj1->getZIndex());
        $this->assertEquals(null, $obj1->getZoneAxis());
        $this->assertEquals(null, $obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsAreaspline(false);

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
        $this->assertEquals(null, $obj0->getData());
        $this->assertEquals(null, $obj0->getDataLabels());
        $this->assertEquals(null, $obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertEquals(null, $obj0->getEvents());
        $this->assertEquals(null, $obj0->getExposeElementToA11y());
        $this->assertEquals(null, $obj0->getFillColor());
        $this->assertEquals(0.75, $obj0->getFillOpacity());
        $this->assertEquals(null, $obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(null, $obj0->getId());
        $this->assertEquals(null, $obj0->getIndex());
        $this->assertEquals(null, $obj0->getKeys());
        $this->assertEquals(null, $obj0->getLegendIndex());
        $this->assertEquals(null, $obj0->getLineColor());
        $this->assertEquals(2, $obj0->getLineWidth());
        $this->assertEquals("round", $obj0->getLinecap());
        $this->assertEquals(null, $obj0->getLinkedTo());
        $this->assertEquals(null, $obj0->getMarker());
        $this->assertEquals(null, $obj0->getName());
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
        $this->assertEquals(null, $obj0->getStack());
        $this->assertEquals(null, $obj0->getStacking());
        $this->assertEquals(null, $obj0->getStates());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertEquals(0, $obj0->getThreshold());
        $this->assertEquals(null, $obj0->getTooltip());
        $this->assertEquals(false, $obj0->getTrackByArea());
        $this->assertEquals(1000, $obj0->getTurboThreshold());
        $this->assertEquals(null, $obj0->getType());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals("0", $obj0->getXAxis());
        $this->assertEquals("0", $obj0->getYAxis());
        $this->assertEquals(null, $obj0->getZIndex());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertEquals(null, $obj0->getZones());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsAreaspline(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsAreaspline(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsAreaspline(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsAreaspline(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newMarker() method.
     *
     * @return void.
     */
    public function testNewMarker() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsAreaspline(false);

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\HighchartsMarker::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsAreaspline(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsAreaspline(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsAreaspline(true);

        $obj->setAllowPointSelect(0);

        $res1 = ["allowPointSelect" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(0);

        $res2 = ["allowPointSelect" => 0, "animation" => 0];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(43);

        $res3 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res4 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res5 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setColorIndex(56);

        $res6 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setConnectEnds(1);

        $res7 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setConnectNulls(0);

        $res8 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setCropThreshold(37);

        $res9 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setCursor("crosshair");

        $res10 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair"];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDashStyle("LongDashDotDot");

        $res11 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res12 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\HighchartsDataLabels());

        $res13 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res14 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res15 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\HighchartsEvents());

        $res16 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setExposeElementToA11y(1);

        $res17 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

        $res18 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setFillOpacity(96);

        $res19 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res20 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy"];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res21 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res22 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setIndex(74);

        $res23 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res24 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setLegendIndex(25);

        $res25 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res26 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setLineWidth(25);

        $res27 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setLinecap("square");

        $res28 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res29 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setMarker(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\HighchartsMarker());

        $res30 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => []];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res31 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res32 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setNegativeFillColor("a966442d64e00bf8663e7c5d9708074a");

        $res33 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a"];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\HighchartsPoint());

        $res34 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => []];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res35 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setPointInterval(62);

        $res36 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res37 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year"];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setPointPlacement("between");

        $res38 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between"];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setPointStart(72);

        $res39 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setSelected(0);

        $res40 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setShadow(1);

        $res41 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setShowCheckbox(0);

        $res42 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setShowInLegend(0);

        $res43 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setSkipKeyboardNavigation(1);

        $res44 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setSoftThreshold(0);

        $res45 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setStack("fac2a47adace059aff113283a03f6760");

        $res46 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760"];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setStacking("percent");

        $res47 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent"];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Areaspline\HighchartsStates());

        $res48 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => []];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setStickyTracking(0);

        $res49 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setThreshold(20);

        $res50 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res51 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setTrackByArea(0);

        $res52 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setTurboThreshold(44);

        $res53 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 44];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setType("waterfall");

        $res54 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 44, "type" => "waterfall"];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setVisible(0);

        $res55 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 44, "type" => "waterfall", "visible" => 0];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setXAxis(34);

        $res56 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 44, "type" => "waterfall", "visible" => 0, "xAxis" => 34];
        $this->assertEquals($res56, $obj->toArray());

        $obj->setYAxis(21);

        $res57 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 44, "type" => "waterfall", "visible" => 0, "xAxis" => 34, "yAxis" => 21];
        $this->assertEquals($res57, $obj->toArray());

        $obj->setZIndex(98);

        $res58 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 44, "type" => "waterfall", "visible" => 0, "xAxis" => 34, "yAxis" => 21, "zIndex" => 98];
        $this->assertEquals($res58, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res59 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 44, "type" => "waterfall", "visible" => 0, "xAxis" => 34, "yAxis" => 21, "zIndex" => 98, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res59, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res60 = ["allowPointSelect" => 0, "animation" => 0, "animationLimit" => 43, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 56, "connectEnds" => 1, "connectNulls" => 0, "cropThreshold" => 37, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "fillOpacity" => 96, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 74, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 25, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 25, "linecap" => "square", "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "negativeFillColor" => "a966442d64e00bf8663e7c5d9708074a", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 62, "pointIntervalUnit" => "year", "pointPlacement" => "between", "pointStart" => 72, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "stacking" => "percent", "states" => [], "stickyTracking" => 0, "threshold" => 20, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "trackByArea" => 0, "turboThreshold" => 44, "type" => "waterfall", "visible" => 0, "xAxis" => 34, "yAxis" => 21, "zIndex" => 98, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res60, $obj->toArray());
    }

}
