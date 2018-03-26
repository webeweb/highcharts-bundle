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
 * Highcharts treemap test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\Series
 * @version 5.0.14
 */
final class HighchartsTreemapTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(true);

        $this->assertNull($obj1->getAllowDrillToNode());
        $this->assertNull($obj1->getAllowPointSelect());
        $this->assertNull($obj1->getAlternateStartingDirection());
        $this->assertNull($obj1->getAnimation());
        $this->assertNull($obj1->getAnimationLimit());
        $this->assertNull($obj1->getBorderColor());
        $this->assertNull($obj1->getBorderWidth());
        $this->assertNull($obj1->getClassName());
        $this->assertNull($obj1->getColor());
        $this->assertNull($obj1->getColorByPoint());
        $this->assertNull($obj1->getColorIndex());
        $this->assertNull($obj1->getColors());
        $this->assertNull($obj1->getCrisp());
        $this->assertNull($obj1->getCropThreshold());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getData());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getId());
        $this->assertNull($obj1->getIgnoreHiddenPoint());
        $this->assertNull($obj1->getIndex());
        $this->assertNull($obj1->getInteractByLeaf());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLayoutAlgorithm());
        $this->assertNull($obj1->getLayoutStartingDirection());
        $this->assertNull($obj1->getLegendIndex());
        $this->assertNull($obj1->getLevelIsConstant());
        $this->assertNull($obj1->getLevels());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMaxPointWidth());
        $this->assertNull($obj1->getName());
        $this->assertNull($obj1->getOpacity());
        $this->assertNull($obj1->getPoint());
        $this->assertNull($obj1->getPointDescriptionFormatter());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getShadow());
        $this->assertNull($obj1->getShowCheckbox());
        $this->assertNull($obj1->getShowInLegend());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getSortIndex());
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

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

        $this->assertEquals(false, $obj0->getAllowDrillToNode());
        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(false, $obj0->getAlternateStartingDirection());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertEquals("#e6e6e6", $obj0->getBorderColor());
        $this->assertEquals(1, $obj0->getBorderWidth());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertEquals(false, $obj0->getColorByPoint());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getColors());
        $this->assertEquals(true, $obj0->getCrisp());
        $this->assertEquals(300, $obj0->getCropThreshold());
        $this->assertNull($obj0->getCursor());
        $this->assertNull($obj0->getData());
        $this->assertNull($obj0->getDataLabels());
        $this->assertNull($obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertNull($obj0->getId());
        $this->assertEquals(true, $obj0->getIgnoreHiddenPoint());
        $this->assertNull($obj0->getIndex());
        $this->assertNull($obj0->getInteractByLeaf());
        $this->assertNull($obj0->getKeys());
        $this->assertEquals("sliceAndDice", $obj0->getLayoutAlgorithm());
        $this->assertEquals("vertical", $obj0->getLayoutStartingDirection());
        $this->assertNull($obj0->getLegendIndex());
        $this->assertEquals(true, $obj0->getLevelIsConstant());
        $this->assertNull($obj0->getLevels());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertNull($obj0->getMaxPointWidth());
        $this->assertNull($obj0->getName());
        $this->assertEquals(0.15, $obj0->getOpacity());
        $this->assertNull($obj0->getPoint());
        $this->assertNull($obj0->getPointDescriptionFormatter());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(false, $obj0->getShowInLegend());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertNull($obj0->getSortIndex());
        $this->assertNull($obj0->getStates());
        $this->assertEquals(true, $obj0->getStickyTracking());
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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

        $obj->newDataLabels();
        $obj->newEvents();
        $obj->newPoint();
        $obj->newStates();
        $obj->newTooltip();

        $obj->clear();

        $res = ["dataLabels" => [], "events" => [], "point" => [], "states" => [], "tooltip" => []];
        $this->assertEquals($res, $obj->toArray());
    }

    /**
     * Tests the jsonSerialize() method.
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsStates::class, $res);
    }

    /**
     * Tests the newTooltip() method.
     *
     * @return void.
     */
    public function testNewTooltip() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(false);

        $res = $obj->newTooltip();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsTooltip::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\Series\HighchartsTreemap(true);

        $obj->setAllowDrillToNode("true");

        $res1 = ["allowDrillToNode" => "true"];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAllowPointSelect(1);

        $res2 = ["allowDrillToNode" => "true", "allowPointSelect" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAlternateStartingDirection(0);

        $res3 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setAnimation(0);

        $res4 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setAnimationLimit(77);

        $res5 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res6 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setBorderWidth(69);

        $res7 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res8 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res9 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setColorByPoint(1);

        $res10 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setColorIndex(16);

        $res11 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res12 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setCrisp(1);

        $res13 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setCropThreshold(61);

        $res14 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setCursor("crosshair");

        $res15 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setData(["data" => "8d777f385d3dfec8815d20f7496026dc"]);

        $res16 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"]];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsDataLabels());

        $res17 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => []];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res18 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setEnableMouseTracking(1);

        $res19 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsEvents());

        $res20 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => []];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setExposeElementToA11y(1);

        $res21 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res22 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res23 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setId("b80bb7740288fda1f201890375a60c8f");

        $res24 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f"];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setIgnoreHiddenPoint(0);

        $res25 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setIndex(71);

        $res26 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setInteractByLeaf(true);

        $res27 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res28 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setLayoutAlgorithm("strip");

        $res29 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip"];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setLayoutStartingDirection("horizontal");

        $res30 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal"];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setLegendIndex(20);

        $res31 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setLevelIsConstant("false");

        $res32 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false"];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setLevels(["levels" => "836eb5e382b5d9f430df48883fca918e"]);

        $res33 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"]];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res34 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setMaxPointWidth(9);

        $res35 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setName("b068931cc450442b63f5b3d276ea4297");

        $res36 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297"];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setOpacity(8);

        $res37 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsPoint());

        $res38 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => []];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res39 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setSelected(1);

        $res40 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1];
        $this->assertEquals($res40, $obj->toArray());

        $obj->setShadow(1);

        $res41 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1];
        $this->assertEquals($res41, $obj->toArray());

        $obj->setShowCheckbox(1);

        $res42 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1];
        $this->assertEquals($res42, $obj->toArray());

        $obj->setShowInLegend(1);

        $res43 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1];
        $this->assertEquals($res43, $obj->toArray());

        $obj->setSkipKeyboardNavigation(1);

        $res44 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res44, $obj->toArray());

        $obj->setSortIndex(17);

        $res45 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17];
        $this->assertEquals($res45, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsStates());

        $res46 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => []];
        $this->assertEquals($res46, $obj->toArray());

        $obj->setStickyTracking(0);

        $res47 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => [], "stickyTracking" => 0];
        $this->assertEquals($res47, $obj->toArray());

        $obj->setTooltip(new \WBW\Bundle\HighchartsBundle\API\Chart\Series\Treemap\HighchartsTooltip());

        $res48 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => [], "stickyTracking" => 0, "tooltip" => []];
        $this->assertEquals($res48, $obj->toArray());

        $obj->setTurboThreshold(9);

        $res49 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => [], "stickyTracking" => 0, "tooltip" => [], "turboThreshold" => 9];
        $this->assertEquals($res49, $obj->toArray());

        $obj->setType("waterfall");

        $res50 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => [], "stickyTracking" => 0, "tooltip" => [], "turboThreshold" => 9, "type" => "waterfall"];
        $this->assertEquals($res50, $obj->toArray());

        $obj->setVisible(0);

        $res51 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => [], "stickyTracking" => 0, "tooltip" => [], "turboThreshold" => 9, "type" => "waterfall", "visible" => 0];
        $this->assertEquals($res51, $obj->toArray());

        $obj->setXAxis(75);

        $res52 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => [], "stickyTracking" => 0, "tooltip" => [], "turboThreshold" => 9, "type" => "waterfall", "visible" => 0, "xAxis" => 75];
        $this->assertEquals($res52, $obj->toArray());

        $obj->setYAxis(92);

        $res53 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => [], "stickyTracking" => 0, "tooltip" => [], "turboThreshold" => 9, "type" => "waterfall", "visible" => 0, "xAxis" => 75, "yAxis" => 92];
        $this->assertEquals($res53, $obj->toArray());

        $obj->setZIndex(12);

        $res54 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => [], "stickyTracking" => 0, "tooltip" => [], "turboThreshold" => 9, "type" => "waterfall", "visible" => 0, "xAxis" => 75, "yAxis" => 92, "zIndex" => 12];
        $this->assertEquals($res54, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res55 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => [], "stickyTracking" => 0, "tooltip" => [], "turboThreshold" => 9, "type" => "waterfall", "visible" => 0, "xAxis" => 75, "yAxis" => 92, "zIndex" => 12, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res55, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res56 = ["allowDrillToNode" => "true", "allowPointSelect" => 1, "alternateStartingDirection" => 0, "animation" => 0, "animationLimit" => 77, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderWidth" => 69, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 16, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "crisp" => 1, "cropThreshold" => 61, "cursor" => "crosshair", "data" => ["data" => "8d777f385d3dfec8815d20f7496026dc"], "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "id" => "b80bb7740288fda1f201890375a60c8f", "ignoreHiddenPoint" => 0, "index" => 71, "interactByLeaf" => true, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "layoutAlgorithm" => "strip", "layoutStartingDirection" => "horizontal", "legendIndex" => 20, "levelIsConstant" => "false", "levels" => ["levels" => "836eb5e382b5d9f430df48883fca918e"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 9, "name" => "b068931cc450442b63f5b3d276ea4297", "opacity" => 8, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 1, "skipKeyboardNavigation" => 1, "sortIndex" => 17, "states" => [], "stickyTracking" => 0, "tooltip" => [], "turboThreshold" => 9, "type" => "waterfall", "visible" => 0, "xAxis" => 75, "yAxis" => 92, "zIndex" => 12, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res56, $obj->toArray());
    }

}
