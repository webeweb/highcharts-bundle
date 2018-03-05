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
 * Highcharts heatmap test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsHeatmapTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(true);

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
        $this->assertEquals(null, $obj1->getColsize());
        $this->assertEquals(null, $obj1->getCrisp());
        $this->assertEquals(null, $obj1->getCropThreshold());
        $this->assertEquals(null, $obj1->getCursor());
        $this->assertEquals(null, $obj1->getDataLabels());
        $this->assertEquals(null, $obj1->getDescription());
        $this->assertEquals(null, $obj1->getEnableMouseTracking());
        $this->assertEquals(null, $obj1->getEvents());
        $this->assertEquals(null, $obj1->getExposeElementToA11y());
        $this->assertEquals(null, $obj1->getFindNearestPointBy());
        $this->assertEquals(null, $obj1->getGetExtremesFromAll());
        $this->assertEquals(null, $obj1->getKeys());
        $this->assertEquals(null, $obj1->getLinkedTo());
        $this->assertEquals(null, $obj1->getMaxPointWidth());
        $this->assertEquals(null, $obj1->getPoint());
        $this->assertEquals(null, $obj1->getPointDescriptionFormatter());
        $this->assertEquals(null, $obj1->getRowsize());
        $this->assertEquals(null, $obj1->getSelected());
        $this->assertEquals(null, $obj1->getShadow());
        $this->assertEquals(null, $obj1->getShowCheckbox());
        $this->assertEquals(null, $obj1->getShowInLegend());
        $this->assertEquals(null, $obj1->getSkipKeyboardNavigation());
        $this->assertEquals(null, $obj1->getStates());
        $this->assertEquals(null, $obj1->getStickyTracking());
        $this->assertEquals(null, $obj1->getTooltip());
        $this->assertEquals(null, $obj1->getTurboThreshold());
        $this->assertEquals(null, $obj1->getVisible());
        $this->assertEquals(null, $obj1->getZoneAxis());
        $this->assertEquals(null, $obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

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
        $this->assertEquals(1, $obj0->getColsize());
        $this->assertEquals(true, $obj0->getCrisp());
        $this->assertEquals(50, $obj0->getCropThreshold());
        $this->assertEquals(null, $obj0->getCursor());
        $this->assertEquals(null, $obj0->getDataLabels());
        $this->assertEquals(null, $obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertEquals(null, $obj0->getEvents());
        $this->assertEquals(null, $obj0->getExposeElementToA11y());
        $this->assertEquals(null, $obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertEquals(null, $obj0->getKeys());
        $this->assertEquals(null, $obj0->getLinkedTo());
        $this->assertEquals(null, $obj0->getMaxPointWidth());
        $this->assertEquals(null, $obj0->getPoint());
        $this->assertEquals(null, $obj0->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj0->getRowsize());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(true, $obj0->getShowInLegend());
        $this->assertEquals(null, $obj0->getSkipKeyboardNavigation());
        $this->assertEquals(null, $obj0->getStates());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertEquals(null, $obj0->getTooltip());
        $this->assertEquals(1000, $obj0->getTurboThreshold());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertEquals(null, $obj0->getZones());
    }

    /**
     * Tests the clear() method.
     *
     * @return void
     */
    public function testClear() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

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

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests the newDataLabels() method.
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests the newEvents() method.
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsEvents::class, $res);
    }

    /**
     * Tests the newPoint() method.
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsPoint::class, $res);
    }

    /**
     * Tests the newStates() method.
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsStates::class, $res);
    }

    /**
     * Tests the toArray() method.
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(1);

        $res2 = ["allowPointSelect" => 1, "animation" => 1];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(24);

        $res3 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderRadius(49);

        $res5 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBorderWidth(15);

        $res6 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res8 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setColorByPoint(1);

        $res9 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setColorIndex(12);

        $res10 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res11 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setColsize(99);

        $res12 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setCrisp(1);

        $res13 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setCropThreshold(58);

        $res14 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setCursor("crosshair");

        $res15 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsDataLabels());

        $res16 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => []];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res17 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setEnableMouseTracking(1);

        $res18 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsEvents());

        $res19 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => []];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setExposeElementToA11y(0);

        $res20 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res21 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy"];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setGetExtremesFromAll(0);

        $res22 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res23 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res24 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setMaxPointWidth(46);

        $res25 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsPoint());

        $res26 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => []];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res27 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setRowsize(8);

        $res28 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setSelected(0);

        $res29 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setShadow(1);

        $res30 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setShowCheckbox(0);

        $res31 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1, "showCheckbox" => 0];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setShowInLegend(0);

        $res32 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setSkipKeyboardNavigation(1);

        $res33 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsStates());

        $res34 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => []];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setStickyTracking(1);

        $res35 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res36 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setTurboThreshold(86);

        $res37 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 86];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setVisible(1);

        $res38 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 86, "visible" => 1];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res39 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 86, "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res40 = ["allowPointSelect" => 1, "animation" => 1, "animationLimit" => 24, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 49, "borderWidth" => 15, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 1, "colorIndex" => 12, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 99, "crisp" => 1, "cropThreshold" => 58, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 1, "events" => [], "exposeElementToA11y" => 0, "findNearestPointBy" => "xy", "getExtremesFromAll" => 0, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 46, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 8, "selected" => 0, "shadow" => 1, "showCheckbox" => 0, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 86, "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res40, $obj->toArray());
    }

}
