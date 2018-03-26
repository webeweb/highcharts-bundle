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
 * Highcharts pie test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsPieTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(true);

        $this->assertNull($obj1->getAllowPointSelect());
        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getCenter());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getColors());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDepth());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEndAngle());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getIgnoreHiddenPoint());
        $this->assertNull($obj1->getInnerSize());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMinSize());
        $this->assertNull($obj1->getPoint());
        $this->assertNull($obj1->getPointDescriptionFormatter());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getShadow());
        $this->assertNull($obj1->getShowInLegend());
        $this->assertNull($obj1->getSize());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getSlicedOffset());
        $this->assertNull($obj1->getStartAngle());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertEquals("#ffffff", $obj0->getBorderColor());
        $this->assertEquals(1, $obj0->getBorderWidth());
        $this->assertEquals([null, null], $obj0->getCenter());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getColors());
        $this->assertNull($obj0->getCursor());
        $this->assertNull($obj0->getDataLabels());
        $this->assertEquals(0, $obj0->getDepth());
        $this->assertNull($obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEndAngle());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(true, $obj0->getIgnoreHiddenPoint());
        $this->assertEquals("0", $obj0->getInnerSize());
        $this->assertNull($obj0->getKeys());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertEquals(80, $obj0->getMinSize());
        $this->assertNull($obj0->getPoint());
        $this->assertNull($obj0->getPointDescriptionFormatter());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowInLegend());
        $this->assertNull($obj0->getSize());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertEquals(10, $obj0->getSlicedOffset());
        $this->assertEquals(0, $obj0->getStartAngle());
        $this->assertNull($obj0->getStates());
        $this->assertEquals(false, $obj0->getStickyTracking());
        $this->assertNull($obj0->getTooltip());
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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsPie(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(0);

        $res2 = ["allowPointSelect" => 1, "animation" => 0];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(90);

        $res3 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderWidth(67);

        $res5 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setCenter(["center" => "adb115059e28d960fa8badfac5516667"]);

        $res6 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"]];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColorIndex(92);

        $res8 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res9 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setCursor("crosshair");

        $res10 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair"];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsDataLabels());

        $res11 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => []];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setDepth(58);

        $res12 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res13 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setEnableMouseTracking(1);

        $res14 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setEndAngle(55);

        $res15 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsEvents());

        $res16 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => []];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res17 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res18 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res19 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setIgnoreHiddenPoint(0);

        $res20 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setInnerSize("a6d1a6164e85630d2ca35170621de672");

        $res21 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672"];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res22 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res23 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setMinSize(57);

        $res24 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsPoint());

        $res25 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => []];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res26 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setSelected(1);

        $res27 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setShadow(0);

        $res28 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setShowInLegend(1);

        $res29 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setSize("f7bd60b75b29d79b660a2859395c1a24");

        $res30 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24"];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res31 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setSlicedOffset(95);

        $res32 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 95];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setStartAngle(59);

        $res33 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 95, "startAngle" => 59];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Pie\HighchartsStates());

        $res34 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 95, "startAngle" => 59, "states" => []];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setStickyTracking(1);

        $res35 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 95, "startAngle" => 59, "states" => [], "stickyTracking" => 1];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res36 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 95, "startAngle" => 59, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setVisible(0);

        $res37 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 95, "startAngle" => 59, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res38 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 95, "startAngle" => 59, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res39 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 90, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 67, "center" => ["center" => "adb115059e28d960fa8badfac5516667"], "className" => "6f66e878c62db60568a3487869695820", "colorIndex" => 92, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "cursor" => "crosshair", "dataLabels" => [], "depth" => 58, "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "endAngle" => 55, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "ignoreHiddenPoint" => 0, "innerSize" => "a6d1a6164e85630d2ca35170621de672", "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "minSize" => 57, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 0, "showInLegend" => 1, "size" => "f7bd60b75b29d79b660a2859395c1a24", "skipKeyboardNavigation" => 0, "slicedOffset" => 95, "startAngle" => 59, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res39, $obj->toArray());
    }

}
