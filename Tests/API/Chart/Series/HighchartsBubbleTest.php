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
 * Highcharts bubble test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsBubbleTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBubble(true);

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
        $this->assertNull($obj1->getDisplayNegative());
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
        $this->assertNull($obj1->getMaxSize());
        $this->assertNull($obj1->getMinSize());
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
        $this->assertNull($obj1->getSizeBy());
        $this->assertNull($obj1->getSizeByAbsoluteValue());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getSoftThreshold());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getThreshold());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getType());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getXAxis());
        $this->assertNull($obj1->getYAxis());
        $this->assertNull($obj1->getZIndex());
        $this->assertNull($obj1->getZMax());
        $this->assertNull($obj1->getZMin());
        $this->assertNull($obj1->getZThreshold());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBubble(false);

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
        $this->assertEquals(true, $obj0->getDisplayNegative());
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
        $this->assertEquals("20%", $obj0->getMaxSize());
        $this->assertEquals("8", $obj0->getMinSize());
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
        $this->assertEquals("area", $obj0->getSizeBy());
        $this->assertEquals(false, $obj0->getSizeByAbsoluteValue());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertEquals(false, $obj0->getSoftThreshold());
        $this->assertNull($obj0->getStates());
        $this->assertEquals(false, $obj0->getStickyTracking());
        $this->assertEquals(0, $obj0->getThreshold());
        $this->assertNull($obj0->getTooltip());
        $this->assertNull($obj0->getType());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals("0", $obj0->getXAxis());
        $this->assertEquals("0", $obj0->getYAxis());
        $this->assertNull($obj0->getZIndex());
        $this->assertNull($obj0->getZMax());
        $this->assertNull($obj0->getZMin());
        $this->assertEquals(0, $obj0->getZThreshold());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertNull($obj0->getZones());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBubble(false);

        $obj->newDataLabels();
        $obj->newEvents();
        $obj->newPoint();
        $obj->newStates();

        $obj->clear();

        $res = ["dataLabels" => [], "events" => [], "point" => [], "states" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBubble(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBubble(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBubble(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBubble(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBubble(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsBubble(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(0);

        $res2 = ["allowPointSelect" => 1, "animation" => 0];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(94);

        $res3 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res4 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res5 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setColorIndex(15);

        $res6 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setCropThreshold(90);

        $res7 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setCursor("crosshair");

        $res8 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setDashStyle("LongDashDotDot");

        $res9 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res10 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\HighchartsDataLabels());

        $res11 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res12 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setDisplayNegative(1);

        $res13 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setEnableMouseTracking(1);

        $res14 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\HighchartsEvents());

        $res15 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => []];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res16 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res17 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res18 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res19 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setIndex(53);

        $res20 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res21 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setLegendIndex(70);

        $res22 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setLineWidth(34);

        $res23 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res24 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setMarker(["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"]);

        $res25 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"]];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setMaxSize("b78e1120b12abd7215d67324fe9476ff");

        $res26 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setMinSize("3de5f14eaef5c47fb68166862243861e");

        $res27 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e"];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res28 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res29 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\HighchartsPoint());

        $res30 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res31 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setPointInterval(33);

        $res32 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res33 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year"];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setPointStart(20);

        $res34 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setSelected(0);

        $res35 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setShadow(0);

        $res36 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setShowCheckbox(0);

        $res37 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setShowInLegend(0);

        $res38 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setSizeBy("width");

        $res39 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width"];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setSizeByAbsoluteValue(0);

        $res40 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res41 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setSoftThreshold(0);

        $res42 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Bubble\HighchartsStates());

        $res43 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => []];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setStickyTracking(1);

        $res44 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setThreshold(42);

        $res45 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res46 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setType("waterfall");

        $res47 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall"];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setVisible(0);

        $res48 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setXAxis(76);

        $res49 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "xAxis" => 76];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setYAxis(59);

        $res50 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "xAxis" => 76, "yAxis" => 59];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setZIndex(73);

        $res51 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "xAxis" => 76, "yAxis" => 59, "zIndex" => 73];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setZMax(54);

        $res52 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "xAxis" => 76, "yAxis" => 59, "zIndex" => 73, "zMax" => 54];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setZMin(5);

        $res53 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "xAxis" => 76, "yAxis" => 59, "zIndex" => 73, "zMax" => 54, "zMin" => 5];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setZThreshold(89);

        $res54 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "xAxis" => 76, "yAxis" => 59, "zIndex" => 73, "zMax" => 54, "zMin" => 5, "zThreshold" => 89];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res55 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "xAxis" => 76, "yAxis" => 59, "zIndex" => 73, "zMax" => 54, "zMin" => 5, "zThreshold" => 89, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res56 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 94, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 15, "cropThreshold" => 90, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 53, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 70, "lineWidth" => 34, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "name" => "b068931cc450442b63f5b3d276ea4297", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 33, "pointIntervalUnit" => "year", "pointStart" => 20, "selected" => 0, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "states" => [], "stickyTracking" => 1, "threshold" => 42, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 0, "xAxis" => 76, "yAxis" => 59, "zIndex" => 73, "zMax" => 54, "zMin" => 5, "zThreshold" => 89, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res56, $obj->toArray());
    }

}
