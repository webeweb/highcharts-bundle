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
 * Highcharts boxplot test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsBoxplotTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(true);

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
        $this->assertNull($obj1->getFillColor());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getGroupPadding());
        $this->assertNull($obj1->getGroupZPadding());
        $this->assertNull($obj1->getGrouping());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMaxPointWidth());
        $this->assertNull($obj1->getMedianColor());
        $this->assertNull($obj1->getMedianWidth());
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
        $this->assertNull($obj1->getShowCheckbox());
        $this->assertNull($obj1->getShowInLegend());
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

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
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
        $this->assertEquals("#ffffff", $obj0->getFillColor());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(0.2, $obj0->getGroupPadding());
        $this->assertEquals(1, $obj0->getGroupZPadding());
        $this->assertEquals(true, $obj0->getGrouping());
        $this->assertNull($obj0->getKeys());
        $this->assertEquals(1, $obj0->getLineWidth());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertNull($obj0->getMaxPointWidth());
        $this->assertNull($obj0->getMedianColor());
        $this->assertEquals(2, $obj0->getMedianWidth());
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
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(true, $obj0->getShowInLegend());
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
        $this->assertEquals(2, $obj0->getWhiskerWidth());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertNull($obj0->getZones());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsBoxplot(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimationLimit(89);

        $res2 = ["allowPointSelect" => 1, "animationLimit" => 89];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res3 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res4 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setColorByPoint(1);

        $res5 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setColorIndex(93);

        $res6 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res7 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setCrisp(0);

        $res8 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setCursor("crosshair");

        $res9 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setDepth(6);

        $res10 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res11 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

        $res12 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setEdgeWidth(17);

        $res13 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res14 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsEvents());

        $res15 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res16 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setFillColor("1fde055d3ff900e04ca08bc82066d7fd");

        $res17 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res18 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setGetExtremesFromAll(1);

        $res19 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setGroupPadding(13);

        $res20 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setGroupZPadding(16);

        $res21 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setGrouping(1);

        $res22 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res23 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setLineWidth(76);

        $res24 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res25 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setMaxPointWidth(90);

        $res26 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setMedianColor("c7dbc658d3d58056469f6d2d5a8a3626");

        $res27 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626"];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setMedianWidth(51);

        $res28 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setNegativeColor("52fe4d3a854b01e25193b4f35fc2040e");

        $res29 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsPoint());

        $res30 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => []];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res31 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setPointInterval(30);

        $res32 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res33 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year"];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setPointPadding(79);

        $res34 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setPointPlacement("between");

        $res35 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between"];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setPointRange(3);

        $res36 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setPointStart(85);

        $res37 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setPointWidth(99);

        $res38 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setSelected(1);

        $res39 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setShowCheckbox(1);

        $res40 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setShowInLegend(0);

        $res41 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res42 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Boxplot\HighchartsStates());

        $res43 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => []];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setStemColor("98696f23b6ed2a881042dfa365a28d23");

        $res44 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23"];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setStemDashStyle("LongDashDotDot");

        $res45 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot"];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setStemWidth(47);

        $res46 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 47];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setStickyTracking(0);

        $res47 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 47, "stickyTracking" => 0];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res48 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 47, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setTurboThreshold(98);

        $res49 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 47, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 98];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setVisible(1);

        $res50 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 47, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 98, "visible" => 1];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setWhiskerColor("3176f361ab524a038497eb1a6c93df38");

        $res51 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 47, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 98, "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38"];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setWhiskerLength(73);

        $res52 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 47, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 98, "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 73];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setWhiskerWidth(23);

        $res53 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 47, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 98, "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 73, "whiskerWidth" => 23];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res54 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 47, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 98, "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 73, "whiskerWidth" => 23, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res55 = ["allowPointSelect" => 1, "animationLimit" => 89, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 93, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "depth" => 6, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 17, "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 0, "fillColor" => "1fde055d3ff900e04ca08bc82066d7fd", "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "groupPadding" => 13, "groupZPadding" => 16, "grouping" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "lineWidth" => 76, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 90, "medianColor" => "c7dbc658d3d58056469f6d2d5a8a3626", "medianWidth" => 51, "negativeColor" => "52fe4d3a854b01e25193b4f35fc2040e", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 30, "pointIntervalUnit" => "year", "pointPadding" => 79, "pointPlacement" => "between", "pointRange" => 3, "pointStart" => 85, "pointWidth" => 99, "selected" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 0, "states" => [], "stemColor" => "98696f23b6ed2a881042dfa365a28d23", "stemDashStyle" => "LongDashDotDot", "stemWidth" => 47, "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 98, "visible" => 1, "whiskerColor" => "3176f361ab524a038497eb1a6c93df38", "whiskerLength" => 73, "whiskerWidth" => 23, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res55, $obj->toArray());
    }

}
