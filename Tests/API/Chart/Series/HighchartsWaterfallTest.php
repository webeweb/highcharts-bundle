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
 * Highcharts waterfall test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsWaterfallTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall(true);

        $this->assertNull($obj1->getAllowPointSelect());
        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderRadius());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorByPoint());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getColors());
        $this->assertNull($obj1->getCrisp());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getDashStyle());
        $this->assertNull($obj1->getData());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDepth());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEdgeColor());
        $this->assertNull($obj1->getEdgeWidth());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getGroupPadding());
        $this->assertNull($obj1->getGroupZPadding());
        $this->assertNull($obj1->getGrouping());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getIndex());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLegendIndex());
        $this->assertNull($obj1->getLineColor());
        $this->assertNull($obj1->getLineWidth());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMaxPointWidth());
        $this->assertNull($obj1->getMinPointLength());
        $this->assertNull($obj1->getName());
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
        $this->assertNull($obj1->getShadow());
        $this->assertNull($obj1->getShowCheckbox());
        $this->assertNull($obj1->getShowInLegend());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getSoftThreshold());
        $this->assertNull($obj1->getStack());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getThreshold());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getType());
        $this->assertNull($obj1->getUpColor());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getXAxis());
        $this->assertNull($obj1->getYAxis());
        $this->assertNull($obj1->getZIndex());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertEquals("#333333", $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderRadius());
        $this->assertEquals(1, $obj0->getBorderWidth());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertEquals(false, $obj0->getColorByPoint());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getColors());
        $this->assertEquals(true, $obj0->getCrisp());
        $this->assertNull($obj0->getCursor());
        $this->assertEquals("Dot", $obj0->getDashStyle());
        $this->assertNull($obj0->getData());
        $this->assertNull($obj0->getDataLabels());
        $this->assertEquals(25, $obj0->getDepth());
        $this->assertNull($obj0->getDescription());
        $this->assertNull($obj0->getEdgeColor());
        $this->assertEquals(1, $obj0->getEdgeWidth());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(0.2, $obj0->getGroupPadding());
        $this->assertEquals(1, $obj0->getGroupZPadding());
        $this->assertEquals(true, $obj0->getGrouping());
        $this->assertNull($obj0->getId());
        $this->assertNull($obj0->getIndex());
        $this->assertNull($obj0->getKeys());
        $this->assertNull($obj0->getLegendIndex());
        $this->assertEquals("#333333", $obj0->getLineColor());
        $this->assertEquals(1, $obj0->getLineWidth());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertNull($obj0->getMaxPointWidth());
        $this->assertEquals(0, $obj0->getMinPointLength());
        $this->assertNull($obj0->getName());
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
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(true, $obj0->getShowInLegend());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertEquals(true, $obj0->getSoftThreshold());
        $this->assertNull($obj0->getStack());
        $this->assertNull($obj0->getStates());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertEquals(0, $obj0->getThreshold());
        $this->assertNull($obj0->getTooltip());
        $this->assertNull($obj0->getType());
        $this->assertNull($obj0->getUpColor());
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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsWaterfall(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(0);

        $res2 = ["allowPointSelect" => 1, "animation" => 0];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(93);

        $res3 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderRadius(94);

        $res5 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBorderWidth(48);

        $res6 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res8 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setColorByPoint(1);

        $res9 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setColorIndex(63);

        $res10 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res11 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setCrisp(0);

        $res12 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setCursor("crosshair");

        $res13 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair"];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setDashStyle("5ad5e24042182b1974cdf57345defe8e");

        $res14 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res15 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsDataLabels());

        $res16 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setDepth(85);

        $res17 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res18 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

        $res19 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setEdgeWidth(34);

        $res20 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setEnableMouseTracking(1);

        $res21 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsEvents());

        $res22 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => []];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setExposeElementToA11y(1);

        $res23 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res24 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res25 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setGroupPadding(72);

        $res26 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setGroupZPadding(1);

        $res27 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setGrouping(1);

        $res28 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res29 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setIndex(92);

        $res30 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res31 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setLegendIndex(11);

        $res32 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setLineColor("c2580eebfdbdb9fc629f50cc147c3f63");

        $res33 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63"];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setLineWidth(3);

        $res34 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res35 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setMaxPointWidth(51);

        $res36 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setMinPointLength(82);

        $res37 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res38 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsPoint());

        $res39 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => []];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res40 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setPointInterval(57);

        $res41 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res42 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year"];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setPointPadding(27);

        $res43 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setPointPlacement("between");

        $res44 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between"];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setPointRange(54);

        $res45 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setPointStart(75);

        $res46 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setPointWidth(39);

        $res47 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setSelected(1);

        $res48 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setShadow(0);

        $res49 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setShowCheckbox(0);

        $res50 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setShowInLegend(1);

        $res51 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setSkipKeyboardNavigation(0);

        $res52 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setSoftThreshold(0);

        $res53 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setStack("fac2a47adace059aff113283a03f6760");

        $res54 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760"];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Waterfall\HighchartsStates());

        $res55 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => []];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setStickyTracking(1);

        $res56 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1];
        $this->assertEquals($res56, $obj->toArray());

        $obj->setThreshold(24);

        $res57 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1, "threshold" => 24];
        $this->assertEquals($res57, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res58 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1, "threshold" => 24, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res58, $obj->toArray());

        $obj->setType("waterfall");

        $res59 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1, "threshold" => 24, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall"];
        $this->assertEquals($res59, $obj->toArray());

        $obj->setUpColor("a0ad37cccbf214955f19b240232be957");

        $res60 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1, "threshold" => 24, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "upColor" => "a0ad37cccbf214955f19b240232be957"];
        $this->assertEquals($res60, $obj->toArray());

        $obj->setVisible(1);

        $res61 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1, "threshold" => 24, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "upColor" => "a0ad37cccbf214955f19b240232be957", "visible" => 1];
        $this->assertEquals($res61, $obj->toArray());

        $obj->setXAxis(13);

        $res62 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1, "threshold" => 24, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "upColor" => "a0ad37cccbf214955f19b240232be957", "visible" => 1, "xAxis" => 13];
        $this->assertEquals($res62, $obj->toArray());

        $obj->setYAxis(93);

        $res63 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1, "threshold" => 24, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "upColor" => "a0ad37cccbf214955f19b240232be957", "visible" => 1, "xAxis" => 13, "yAxis" => 93];
        $this->assertEquals($res63, $obj->toArray());

        $obj->setZIndex(63);

        $res64 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1, "threshold" => 24, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "upColor" => "a0ad37cccbf214955f19b240232be957", "visible" => 1, "xAxis" => 13, "yAxis" => 93, "zIndex" => 63];
        $this->assertEquals($res64, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res65 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1, "threshold" => 24, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "upColor" => "a0ad37cccbf214955f19b240232be957", "visible" => 1, "xAxis" => 13, "yAxis" => 93, "zIndex" => 63, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res65, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res66 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 93, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 94, "borderWidth" => 48, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 63, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 0, "cursor" => "crosshair", "dashStyle" => "5ad5e24042182b1974cdf57345defe8e", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "depth" => 85, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 34, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 72, "groupZPadding" => 1, "grouping" => 1, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 92, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 11, "lineColor" => "c2580eebfdbdb9fc629f50cc147c3f63", "lineWidth" => 3, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 51, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 57, "pointIntervalUnit" => "year", "pointPadding" => 27, "pointPlacement" => "between", "pointRange" => 54, "pointStart" => 75, "pointWidth" => 39, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 1, "skipKeyboardNavigation" => 0, "softThreshold" => 0, "stack" => "fac2a47adace059aff113283a03f6760", "states" => [], "stickyTracking" => 1, "threshold" => 24, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "type" => "waterfall", "upColor" => "a0ad37cccbf214955f19b240232be957", "visible" => 1, "xAxis" => 13, "yAxis" => 93, "zIndex" => 63, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res66, $obj->toArray());
    }

}
