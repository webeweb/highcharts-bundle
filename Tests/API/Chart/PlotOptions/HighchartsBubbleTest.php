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
 * Highcharts bubble test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsBubbleTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(true);

        $this->assertNull($obj1->getAllowPointSelect());
        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getCropThreshold());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getDashStyle());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getDisplayNegative());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMarker());
        $this->assertNull($obj1->getMaxSize());
        $this->assertNull($obj1->getMinSize());
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
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getZMax());
        $this->assertNull($obj1->getZMin());
        $this->assertNull($obj1->getZThreshold());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertNull($obj0->getColorIndex());
        $this->assertEquals(300, $obj0->getCropThreshold());
        $this->assertNull($obj0->getCursor());
        $this->assertEquals("Solid", $obj0->getDashStyle());
        $this->assertNull($obj0->getDataLabels());
        $this->assertNull($obj0->getDescription());
        $this->assertEquals(true, $obj0->getDisplayNegative());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertNull($obj0->getKeys());
        $this->assertEquals(0, $obj0->getLineWidth());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertNull($obj0->getMarker());
        $this->assertEquals("20%", $obj0->getMaxSize());
        $this->assertEquals("8", $obj0->getMinSize());
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
        $this->assertEquals(true, $obj0->getVisible());
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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBubble(true);

        $obj->setAllowPointSelect(0);

        $res1 = ["allowPointSelect" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(1);

        $res2 = ["allowPointSelect" => 0, "animation" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(78);

        $res3 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res4 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res5 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setColorIndex(11);

        $res6 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setCropThreshold(2);

        $res7 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setCursor("crosshair");

        $res8 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setDashStyle("LongDashDotDot");

        $res9 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsDataLabels());

        $res10 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => []];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res11 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setDisplayNegative(1);

        $res12 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res13 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsEvents());

        $res14 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res15 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res16 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setGetExtremesFromAll(1);

        $res17 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res18 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setLineWidth(95);

        $res19 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res20 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setMarker(["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"]);

        $res21 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"]];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setMaxSize("b78e1120b12abd7215d67324fe9476ff");

        $res22 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff"];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setMinSize("3de5f14eaef5c47fb68166862243861e");

        $res23 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e"];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res24 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsPoint());

        $res25 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res26 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setPointInterval(18);

        $res27 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res28 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setPointStart(1);

        $res29 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setSelected(1);

        $res30 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setShadow(1);

        $res31 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setShowCheckbox(1);

        $res32 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setShowInLegend(0);

        $res33 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setSizeBy("width");

        $res34 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width"];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setSizeByAbsoluteValue(0);

        $res35 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setSkipKeyboardNavigation(1);

        $res36 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setSoftThreshold(0);

        $res37 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Bubble\HighchartsStates());

        $res38 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "states" => []];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setStickyTracking(0);

        $res39 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "states" => [], "stickyTracking" => 0];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setThreshold(69);

        $res40 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "states" => [], "stickyTracking" => 0, "threshold" => 69];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res41 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "states" => [], "stickyTracking" => 0, "threshold" => 69, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setVisible(0);

        $res42 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "states" => [], "stickyTracking" => 0, "threshold" => 69, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setZMax(83);

        $res43 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "states" => [], "stickyTracking" => 0, "threshold" => 69, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zMax" => 83];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setZMin(90);

        $res44 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "states" => [], "stickyTracking" => 0, "threshold" => 69, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zMax" => 83, "zMin" => 90];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setZThreshold(39);

        $res45 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "states" => [], "stickyTracking" => 0, "threshold" => 69, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zMax" => 83, "zMin" => 90, "zThreshold" => 39];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res46 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "states" => [], "stickyTracking" => 0, "threshold" => 69, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zMax" => 83, "zMin" => 90, "zThreshold" => 39, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res47 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 78, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorIndex" => 11, "cropThreshold" => 2, "cursor" => "crosshair", "dashStyle" => "LongDashDotDot", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "displayNegative" => 1, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 95, "linkedTo" => "914fab47afc86331ec62837807a29419", "marker" => ["marker" => "b272bda9bf0c1cdcba614b5ed99c4d62"], "maxSize" => "b78e1120b12abd7215d67324fe9476ff", "minSize" => "3de5f14eaef5c47fb68166862243861e", "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 18, "pointIntervalUnit" => "year", "pointStart" => 1, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "sizeBy" => "width", "sizeByAbsoluteValue" => 0, "skipKeyboardNavigation" => 1, "softThreshold" => 0, "states" => [], "stickyTracking" => 0, "threshold" => 69, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "visible" => 0, "zMax" => 83, "zMin" => 90, "zThreshold" => 39, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res47, $obj->toArray());
    }

}
