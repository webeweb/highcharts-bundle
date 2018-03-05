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
 * Highcharts columnrange test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsColumnrangeTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumnrange(true);

        $this->assertEquals(null, $obj1->getAllowPointSelect());
        $this->assertEquals(null, $obj1->getAnimation());
        $this->assertEquals(null, $obj1->getAnimationLimit());
        $this->assertEquals(null, $obj1->getBorderColor());
        $this->assertEquals(null, $obj1->getBorderRadius());
        $this->assertEquals(null, $obj1->getBorderWidth());
        $this->assertEquals(null, $obj1->getClassName());
        $this->assertEquals(null, $obj1->getColor());
        $this->assertEquals(null, $obj1->getColorByPoint());
        $this->assertEquals(null, $obj1->getColorIndex());
        $this->assertEquals(null, $obj1->getColors());
        $this->assertEquals(null, $obj1->getCrisp());
        $this->assertEquals(null, $obj1->getCropThreshold());
        $this->assertEquals(null, $obj1->getCursor());
        $this->assertEquals(null, $obj1->getData());
        $this->assertEquals(null, $obj1->getDataLabels());
        $this->assertEquals(null, $obj1->getDepth());
        $this->assertEquals(null, $obj1->getDescription());
        $this->assertEquals(null, $obj1->getEdgeColor());
        $this->assertEquals(null, $obj1->getEdgeWidth());
        $this->assertEquals(null, $obj1->getEnableMouseTracking());
        $this->assertEquals(null, $obj1->getEvents());
        $this->assertEquals(null, $obj1->getExposeElementToA11y());
        $this->assertEquals(null, $obj1->getFindNearestPointBy());
        $this->assertEquals(null, $obj1->getGetExtremesFromAll());
        $this->assertEquals(null, $obj1->getGroupPadding());
        $this->assertEquals(null, $obj1->getGroupZPadding());
        $this->assertEquals(null, $obj1->getGrouping());
        $this->assertEquals(null, $obj1->getId());
        $this->assertEquals(null, $obj1->getIndex());
        $this->assertEquals(null, $obj1->getKeys());
        $this->assertEquals(null, $obj1->getLegendIndex());
        $this->assertEquals(null, $obj1->getLinkedTo());
        $this->assertEquals(null, $obj1->getMaxPointWidth());
        $this->assertEquals(null, $obj1->getMinPointLength());
        $this->assertEquals(null, $obj1->getName());
        $this->assertEquals(null, $obj1->getPoint());
        $this->assertEquals(null, $obj1->getPointDescriptionFormatter());
        $this->assertEquals(null, $obj1->getPointInterval());
        $this->assertEquals(null, $obj1->getPointIntervalUnit());
        $this->assertEquals(null, $obj1->getPointPadding());
        $this->assertEquals(null, $obj1->getPointPlacement());
        $this->assertEquals(null, $obj1->getPointRange());
        $this->assertEquals(null, $obj1->getPointStart());
        $this->assertEquals(null, $obj1->getPointWidth());
        $this->assertEquals(null, $obj1->getSelected());
        $this->assertEquals(null, $obj1->getShadow());
        $this->assertEquals(null, $obj1->getShowCheckbox());
        $this->assertEquals(null, $obj1->getShowInLegend());
        $this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
        $this->assertEquals(null, $obj1->getStates());
        $this->assertEquals(null, $obj1->getStickyTracking());
        $this->assertEquals(null, $obj1->getTooltip());
        $this->assertEquals(null, $obj1->getTurboThreshold());
        $this->assertEquals(null, $obj1->getType());
        $this->assertEquals(null, $obj1->getVisible());
        $this->assertEquals(null, $obj1->getXAxis());
        $this->assertEquals(null, $obj1->getYAxis());
        $this->assertEquals(null, $obj1->getZIndex());
        $this->assertEquals(null, $obj1->getZoneAxis());
        $this->assertEquals(null, $obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumnrange(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertEquals(null, $obj0->getAnimationLimit());
        $this->assertEquals("#ffffff", $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderRadius());
        $this->assertEquals(1, $obj0->getBorderWidth());
        $this->assertEquals(null, $obj0->getClassName());
        $this->assertEquals(null, $obj0->getColor());
        $this->assertEquals(false, $obj0->getColorByPoint());
        $this->assertEquals(null, $obj0->getColorIndex());
        $this->assertEquals(null, $obj0->getColors());
        $this->assertEquals(true, $obj0->getCrisp());
        $this->assertEquals(50, $obj0->getCropThreshold());
        $this->assertEquals(null, $obj0->getCursor());
        $this->assertEquals(null, $obj0->getData());
        $this->assertEquals(null, $obj0->getDataLabels());
        $this->assertEquals(25, $obj0->getDepth());
        $this->assertEquals(null, $obj0->getDescription());
        $this->assertEquals(null, $obj0->getEdgeColor());
        $this->assertEquals(1, $obj0->getEdgeWidth());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertEquals(null, $obj0->getEvents());
        $this->assertEquals(null, $obj0->getExposeElementToA11y());
        $this->assertEquals(null, $obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(0.2, $obj0->getGroupPadding());
        $this->assertEquals(1, $obj0->getGroupZPadding());
        $this->assertEquals(true, $obj0->getGrouping());
        $this->assertEquals(null, $obj0->getId());
        $this->assertEquals(null, $obj0->getIndex());
        $this->assertEquals(null, $obj0->getKeys());
        $this->assertEquals(null, $obj0->getLegendIndex());
        $this->assertEquals(null, $obj0->getLinkedTo());
        $this->assertEquals(null, $obj0->getMaxPointWidth());
        $this->assertEquals(0, $obj0->getMinPointLength());
        $this->assertEquals(null, $obj0->getName());
        $this->assertEquals(null, $obj0->getPoint());
        $this->assertEquals(null, $obj0->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj0->getPointInterval());
        $this->assertEquals(null, $obj0->getPointIntervalUnit());
        $this->assertEquals(0.1, $obj0->getPointPadding());
        $this->assertEquals(null, $obj0->getPointPlacement());
        $this->assertEquals(null, $obj0->getPointRange());
        $this->assertEquals(0, $obj0->getPointStart());
        $this->assertEquals(null, $obj0->getPointWidth());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(true, $obj0->getShowInLegend());
        $this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
        $this->assertEquals(null, $obj0->getStates());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertEquals(null, $obj0->getTooltip());
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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumnrange(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumnrange(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumnrange(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumnrange(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumnrange(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsColumnrange(true);

        $obj->setAllowPointSelect(0);

        $res1 = ["allowPointSelect" => 0];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(1);

        $res2 = ["allowPointSelect" => 0, "animation" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(94);

        $res3 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderRadius(79);

        $res5 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBorderWidth(15);

        $res6 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res8 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setColorByPoint(0);

        $res9 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setColorIndex(19);

        $res10 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res11 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setCrisp(1);

        $res12 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setCropThreshold(16);

        $res13 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setCursor("crosshair");

        $res14 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair"];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res15 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setDataLabels(["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]);

        $res16 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"]];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setDepth(40);

        $res17 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res18 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setEdgeColor("acbab0d2e7e54e5a7a32fc80409601fc");

        $res19 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc"];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setEdgeWidth(68);

        $res20 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setEnableMouseTracking(1);

        $res21 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\HighchartsEvents());

        $res22 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => []];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res23 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res24 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res25 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setGroupPadding(78);

        $res26 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setGroupZPadding(11);

        $res27 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setGrouping(0);

        $res28 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res29 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setIndex(50);

        $res30 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res31 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setLegendIndex(1);

        $res32 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res33 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setMaxPointWidth(24);

        $res34 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setMinPointLength(82);

        $res35 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res36 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\HighchartsPoint());

        $res37 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => []];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res38 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setPointInterval(98);

        $res39 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setPointIntervalUnit("year");

        $res40 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year"];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setPointPadding(81);

        $res41 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setPointPlacement("between");

        $res42 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between"];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setPointRange(34);

        $res43 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setPointStart(7);

        $res44 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setPointWidth(17);

        $res45 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setSelected(1);

        $res46 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setShadow(0);

        $res47 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setShowCheckbox(0);

        $res48 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setShowInLegend(0);

        $res49 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setSkipKeyboardNavigation(1);

        $res50 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Columnrange\HighchartsStates());

        $res51 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => []];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setStickyTracking(0);

        $res52 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 0];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res53 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setTurboThreshold(100);

        $res54 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setType("waterfall");

        $res55 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "type" => "waterfall"];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setVisible(1);

        $res56 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "type" => "waterfall", "visible" => 1];
        $this->assertEquals($res56, $obj->toArray());

        $obj->setXAxis(9);

        $res57 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "type" => "waterfall", "visible" => 1, "xAxis" => 9];
        $this->assertEquals($res57, $obj->toArray());

        $obj->setYAxis(15);

        $res58 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "type" => "waterfall", "visible" => 1, "xAxis" => 9, "yAxis" => 15];
        $this->assertEquals($res58, $obj->toArray());

        $obj->setZIndex(93);

        $res59 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "type" => "waterfall", "visible" => 1, "xAxis" => 9, "yAxis" => 15, "zIndex" => 93];
        $this->assertEquals($res59, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res60 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "type" => "waterfall", "visible" => 1, "xAxis" => 9, "yAxis" => 15, "zIndex" => 93, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res60, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res61 = ["allowPointSelect" => 0, "animation" => 1, "animationLimit" => 94, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 79, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 19, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 16, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => ["dataLabels" => "d4d108fe6659fac79420fa083ef3adf2"], "depth" => 40, "description" => "67daf92c833c41c95db874e18fcb2786", "edgeColor" => "acbab0d2e7e54e5a7a32fc80409601fc", "edgeWidth" => 68, "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "groupPadding" => 78, "groupZPadding" => 11, "grouping" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "index" => 50, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "legendIndex" => 1, "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 24, "minPointLength" => 82, "name" => "b068931cc450442b63f5b3d276ea4297", "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "pointInterval" => 98, "pointIntervalUnit" => "year", "pointPadding" => 81, "pointPlacement" => "between", "pointRange" => 34, "pointStart" => 7, "pointWidth" => 17, "selected" => 1, "shadow" => 0, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 0, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "type" => "waterfall", "visible" => 1, "xAxis" => 9, "yAxis" => 15, "zIndex" => 93, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res61, $obj->toArray());
    }

}
