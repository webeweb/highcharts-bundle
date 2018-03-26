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
 * Highcharts errorbar test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsErrorbarTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar(true);

        $this->assertNull($obj1->getAllowPointSelect());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorByPoint());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getColors());
        $this->assertNull($obj1->getCrisp());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getDepth());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEdgeColor());
        $this->assertNull($obj1->getEdgeWidth());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getGroupZPadding());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMaxPointWidth());
        $this->assertNull($obj1->getNegativeColor());
        $this->assertNull($obj1->getPoint());
        $this->assertNull($obj1->getPointDescriptionFormatter());
        $this->assertNull($obj1->getPointInterval());
        $this->assertNull($obj1->getPointIntervalUnit());
        $this->assertNull($obj1->getPointPadding());
        $this->assertNull($obj1->getPointPlacement());
        $this->assertNull($obj1->getPointRange());
        $this->assertNull($obj1->getPointStart());
        $this->assertNull($obj1->getPointWidth());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStemColor());
        $this->assertNull($obj1->getStemDashStyle());
        $this->assertNull($obj1->getStemWidth());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getTurboThreshold());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getWhiskerColor());
        $this->assertNull($obj1->getWhiskerLength());
        $this->assertNull($obj1->getWhiskerWidth());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertNull($obj0->getClassName());
        $this->assertEquals("#000000", $obj0->getColor());
        $this->assertEquals(false, $obj0->getColorByPoint());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getColors());
        $this->assertEquals(true, $obj0->getCrisp());
        $this->assertNull($obj0->getCursor());
        $this->assertEquals(25, $obj0->getDepth());
        $this->assertNull($obj0->getDescription());
        $this->assertNull($obj0->getEdgeColor());
        $this->assertEquals(1, $obj0->getEdgeWidth());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(1, $obj0->getGroupZPadding());
        $this->assertNull($obj0->getKeys());
        $this->assertEquals(1, $obj0->getLineWidth());
        $this->assertEquals(":previous", $obj0->getLinkedTo());
        $this->assertNull($obj0->getMaxPointWidth());
        $this->assertNull($obj0->getNegativeColor());
        $this->assertNull($obj0->getPoint());
        $this->assertNull($obj0->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj0->getPointInterval());
        $this->assertNull($obj0->getPointIntervalUnit());
        $this->assertEquals(0.1, $obj0->getPointPadding());
        $this->assertNull($obj0->getPointPlacement());
        $this->assertNull($obj0->getPointRange());
        $this->assertEquals(0, $obj0->getPointStart());
        $this->assertNull($obj0->getPointWidth());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertNull($obj0->getStates());
        $this->assertNull($obj0->getStemColor());
        $this->assertEquals("Solid", $obj0->getStemDashStyle());
        $this->assertNull($obj0->getStemWidth());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertNull($obj0->getTooltip());
        $this->assertEquals(1000, $obj0->getTurboThreshold());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertNull($obj0->getWhiskerColor());
        $this->assertEquals("50%", $obj0->getWhiskerLength());
        $this->assertNull($obj0->getWhiskerWidth());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertNull($obj0->getZones());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar(false);

        $obj->newEvents();
        $obj->newPoint();
        $obj->newStates();

        $obj->clear();

        $res = ["events" => [], "point" => [], "states" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsErrorbar(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimationLimit(87);

        $res2 = ["allowPointSelect" => 1, "animationLimit" => 87];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res3 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setColorByPoint(1);

        $res5 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setColorIndex(76);

        $res6 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res7 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setCrisp(1);

        $res8 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setCursor("crosshair");

        $res9 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setDepth(63);

        $res10 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res11 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

        $res12 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setEdgeWidth(30);

        $res13 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res14 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsEvents());

        $res15 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res16 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res17 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res18 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setGroupZPadding(28);

        $res19 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res20 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setLineWidth(99);

        $res21 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res22 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setMaxPointWidth(66);

        $res23 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res24 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsPoint());

        $res25 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res26 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setPointInterval(27);

        $res27 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res28 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year"];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setPointPadding(10);

        $res29 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setPointPlacement("between");

        $res30 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between"];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setPointRange(60);

        $res31 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setPointStart(25);

        $res32 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setPointWidth(77);

        $res33 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setSelected(0);

        $res34 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setSkipKeyboardNavigation(1);

        $res35 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Errorbar\HighchartsStates());

        $res36 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => []];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");

        $res37 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23"];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setStemDashStyle("LongDashDotDot");

        $res38 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot"];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setStemWidth(34);

        $res39 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 34];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setStickyTracking(1);

        $res40 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 34, "stickyTracking" => 1];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res41 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 34, "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setTurboThreshold(100);

        $res42 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 34, "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setVisible(1);

        $res43 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 34, "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "visible" => 1];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");

        $res44 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 34, "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38"];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setWhiskerLength(78);

        $res45 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 34, "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 78];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setWhiskerWidth(36);

        $res46 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 34, "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 78, "whiskerWidth" => 36];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res47 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 34, "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 78, "whiskerWidth" => 36, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res48 = ["allowPointSelect" => 1, "animationLimit" => 87, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 76, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cursor" => "crosshair", "depth" => 63, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 30, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupZPadding" => 28, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 99, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 66, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 27, "pointIntervalUnit" => "year", "pointPadding" => 10, "pointPlacement" => "between", "pointRange" => 60, "pointStart" => 25, "pointWidth" => 77, "selected" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 34, "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 78, "whiskerWidth" => 36, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res48, $obj->toArray());
    }

}
