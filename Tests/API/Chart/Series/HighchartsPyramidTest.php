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
 * Highcharts pyramid test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsPyramidTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPyramid(true);

        $this->assertNull($obj1->getAllowPointSelect());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getCenter());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getColors());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getData());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDepth());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getHeight());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getIndex());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLegendIndex());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMinSize());
        $this->assertNull($obj1->getName());
        $this->assertNull($obj1->getPoint());
        $this->assertNull($obj1->getPointDescriptionFormatter());
        $this->assertNull($obj1->getReversed());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getShadow());
        $this->assertNull($obj1->getShowInLegend());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getSlicedOffset());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getType());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getWidth());
        $this->assertNull($obj1->getZIndex());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPyramid(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertEquals("#ffffff", $obj0->getBorderColor());
        $this->assertEquals(1, $obj0->getBorderWidth());
        $this->assertEquals(["50%", "50%"], $obj0->getCenter());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getColors());
        $this->assertNull($obj0->getCursor());
        $this->assertNull($obj0->getData());
        $this->assertNull($obj0->getDataLabels());
        $this->assertEquals(0, $obj0->getDepth());
        $this->assertNull($obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertNull($obj0->getHeight());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getIndex());
        $this->assertNull($obj0->getKeys());
        $this->assertNull($obj0->getLegendIndex());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertEquals(80, $obj0->getMinSize());
        $this->assertNull($obj0->getName());
        $this->assertNull($obj0->getPoint());
        $this->assertNull($obj0->getPointDescriptionFormatter());
        $this->assertEquals(true, $obj0->getReversed());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowInLegend());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertEquals(10, $obj0->getSlicedOffset());
        $this->assertNull($obj0->getStates());
        $this->assertEquals(false, $obj0->getStickyTracking());
        $this->assertNull($obj0->getTooltip());
        $this->assertNull($obj0->getType());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals("90%", $obj0->getWidth());
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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPyramid(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPyramid(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPyramid(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPyramid(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPyramid(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPyramid(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsPyramid(true);

        $obj->setAllowPointSelect(0);

        $res1 = ["allowPointSelect" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimationLimit(14);

        $res2 = ["allowPointSelect" => 0, "animationLimit" => 14];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res3 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderWidth(85);

        $res4 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);

        $res5 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"]];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res6 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setColorIndex(100);

        $res7 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res8 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setCursor("crosshair");

        $res9 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res10 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsDataLabels());

        $res11 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setDepth(1);

        $res12 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res13 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setEnableMouseTracking(1);

        $res14 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsEvents());

        $res15 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => []];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res16 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res17 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setGetExtremesFromAll(1);

        $res18 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setHeight(18);

        $res19 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res20 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setIndex(60);

        $res21 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res22 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setLegendIndex(50);

        $res23 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res24 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setMinSize(95);

        $res25 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res26 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsPoint());

        $res27 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => []];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res28 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setReversed(1);

        $res29 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setSelected(1);

        $res30 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setShadow(0);

        $res31 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setShowInLegend(1);

        $res32 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res33 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setSlicedOffset(23);

        $res34 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 23];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Pyramid\HighchartsStates());

        $res35 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "states" => []];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setStickyTracking(0);

        $res36 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "states" => [], "stickyTracking" => 0];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res37 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setType("waterfall");

        $res38 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall"];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setVisible(1);

        $res39 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 1];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setWidth(65);

        $res40 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 1, "width" => 65];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setZIndex(69);

        $res41 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 1, "width" => 65, "zIndex" => 69];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res42 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 1, "width" => 65, "zIndex" => 69, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res43 = ["allowPointSelect" => 0, "animationLimit" => 14, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 85, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 100, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 1, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "height" => 18, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 60, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 50, "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 95, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "reversed" => 1, "selected" => 1, "shadow" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "slicedOffset" => 23, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "visible" => 1, "width" => 65, "zIndex" => 69, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res43, $obj->toArray());
    }

}
