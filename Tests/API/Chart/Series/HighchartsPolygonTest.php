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
 * Highcharts polygon test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsPolygonTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPolygon(true);

        $this->assertNull($obj1->getAllowPointSelect());
        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getCropThreshold());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getDashStyle());
        $this->assertNull($obj1->getData());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getIndex());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLegendIndex());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMarker());
        $this->assertNull($obj1->getName());
        $this->assertNull($obj1->getNegativeColor());
        $this->assertNull($obj1->getPoint());
        $this->assertNull($obj1->getPointDescriptionFormatter());
        $this->assertNull($obj1->getPointInterval());
        $this->assertNull($obj1->getPointIntervalUnit());
        $this->assertNull($obj1->getPointStart());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getShadow());
        $this->assertNull($obj1->getShowCheckbox());
        $this->assertNull($obj1->getShowInLegend());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getTurboThreshold());
        $this->assertNull($obj1->getType());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getXAxis());
        $this->assertNull($obj1->getYAxis());
        $this->assertNull($obj1->getZIndex());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPolygon(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertNull($obj0->getColorIndex());
        $this->assertEquals(300, $obj0->getCropThreshold());
        $this->assertNull($obj0->getCursor());
        $this->assertEquals("Solid", $obj0->getDashStyle());
        $this->assertNull($obj0->getData());
        $this->assertNull($obj0->getDataLabels());
        $this->assertNull($obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getIndex());
        $this->assertNull($obj0->getKeys());
        $this->assertNull($obj0->getLegendIndex());
        $this->assertEquals(0, $obj0->getLineWidth());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertNull($obj0->getMarker());
        $this->assertNull($obj0->getName());
        $this->assertNull($obj0->getNegativeColor());
        $this->assertNull($obj0->getPoint());
        $this->assertNull($obj0->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj0->getPointInterval());
        $this->assertNull($obj0->getPointIntervalUnit());
        $this->assertEquals(0, $obj0->getPointStart());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(true, $obj0->getShowInLegend());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertNull($obj0->getStates());
        $this->assertEquals(false, $obj0->getStickyTracking());
        $this->assertNull($obj0->getTooltip());
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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPolygon(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPolygon(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPolygon(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPolygon(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newMarker() method.
     *
     * @return void.
     */
    public function testNewMarker() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPolygon(false);

        $res = $obj->newMarker();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\HighchartsMarker::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPolygon(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPolygon(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPolygon(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(0);

        $res2 = ["allowPointSelect" => 1, "animation" => 0];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(51);

        $res3 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res4 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res5 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setColorIndex(94);

        $res6 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setCropThreshold(76);

        $res7 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setCursor("crosshair");

        $res8 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setDashStyle("LongDashDotDot");

        $res9 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res10 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\HighchartsDataLabels());

        $res11 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res12 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res13 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\HighchartsEvents());

        $res14 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res15 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res16 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setGetExtremesFromAll(1);

        $res17 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res18 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setIndex(89);

        $res19 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res20 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setLegendIndex(64);

        $res21 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setLineWidth(76);

        $res22 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res23 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setMarker(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\HighchartsMarker());

        $res24 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => []];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res25 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res26 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\HighchartsPoint());

        $res27 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res28 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setPointInterval(57);

        $res29 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res30 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year"];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setPointStart(47);

        $res31 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setSelected(0);

        $res32 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setShadow(0);

        $res33 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setShowCheckbox(1);

        $res34 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setShowInLegend(1);

        $res35 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setSkipKeyboardNavigation(1);

        $res36 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Polygon\HighchartsStates());

        $res37 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => []];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setStickyTracking(1);

        $res38 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res39 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setTurboThreshold(85);

        $res40 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 85];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setType("waterfall");

        $res41 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 85, "type" => "waterfall"];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setVisible(0);

        $res42 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 85, "type" => "waterfall", "visible" => 0];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setXAxis(35);

        $res43 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 85, "type" => "waterfall", "visible" => 0, "xAxis" => 35];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setYAxis(76);

        $res44 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 85, "type" => "waterfall", "visible" => 0, "xAxis" => 35, "yAxis" => 76];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setZIndex(16);

        $res45 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 85, "type" => "waterfall", "visible" => 0, "xAxis" => 35, "yAxis" => 76, "zIndex" => 16];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res46 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 85, "type" => "waterfall", "visible" => 0, "xAxis" => 35, "yAxis" => 76, "zIndex" => 16, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res47 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 51, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 94, "cropThreshold" => 76, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 89, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 64, "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => [], "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointStart" => 47, "selected" => 0, "shadow" => 0, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 85, "type" => "waterfall", "visible" => 0, "xAxis" => 35, "yAxis" => 76, "zIndex" => 16, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res47, $obj->toArray());
    }

}
