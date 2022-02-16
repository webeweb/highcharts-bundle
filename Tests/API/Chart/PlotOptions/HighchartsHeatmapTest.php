<?php

/*
 * This file is part of the highcharts-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions;

use WBW\Bundle\HighchartsBundle\Tests\AbstractTestCase;

/**
 * Highcharts heatmap test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\HighchartsBundle\Tests\API\Chart\PlotOptions
 * @version 5.0.14
 */
final class HighchartsHeatmapTest extends AbstractTestCase {

    /**
     * Tests clear()
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
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(true);

        $this->assertEquals([], $obj->jsonSerialize());
    }

    /**
     * Tests newDataLabels()
     *
     * @return void.
     */
    public function testNewDataLabels() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

        $res = $obj->newDataLabels();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsDataLabels::class, $res);
    }

    /**
     * Tests newEvents()
     *
     * @return void.
     */
    public function testNewEvents() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

        $res = $obj->newEvents();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsEvents::class, $res);
    }

    /**
     * Tests newPoint()
     *
     * @return void.
     */
    public function testNewPoint() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

        $res = $obj->newPoint();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsPoint::class, $res);
    }

    /**
     * Tests newStates()
     *
     * @return void.
     */
    public function testNewStates() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

        $res = $obj->newStates();
        $this->assertInstanceOf(\WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsStates::class, $res);
    }

    /**
     * Tests toArray()
     *
     * @return void
     */
    public function testToArray() {

        $obj = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(true);

        $obj->setAllowPointSelect(1);

        $res1 = ["allowPointSelect" => 1];
        $this->assertEquals($res1, $obj->toArray());

        $obj->setAnimation(0);

        $res2 = ["allowPointSelect" => 1, "animation" => 0];
        $this->assertEquals($res2, $obj->toArray());

        $obj->setAnimationLimit(26);

        $res3 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26];
        $this->assertEquals($res3, $obj->toArray());

        $obj->setBorderColor("97da935a74593c55d78be9d1295aa994");

        $res4 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994"];
        $this->assertEquals($res4, $obj->toArray());

        $obj->setBorderRadius(92);

        $res5 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92];
        $this->assertEquals($res5, $obj->toArray());

        $obj->setBorderWidth(96);

        $res6 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96];
        $this->assertEquals($res6, $obj->toArray());

        $obj->setClassName("6f66e878c62db60568a3487869695820");

        $res7 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820"];
        $this->assertEquals($res7, $obj->toArray());

        $obj->setColor("70dda5dfb8053dc6d1c492574bce9bfd");

        $res8 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd"];
        $this->assertEquals($res8, $obj->toArray());

        $obj->setColorByPoint(0);

        $res9 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0];
        $this->assertEquals($res9, $obj->toArray());

        $obj->setColorIndex(48);

        $res10 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48];
        $this->assertEquals($res10, $obj->toArray());

        $obj->setColors(["colors" => "62848e3ce5804aa985513a7922ff87b2"]);

        $res11 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"]];
        $this->assertEquals($res11, $obj->toArray());

        $obj->setColsize(4);

        $res12 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4];
        $this->assertEquals($res12, $obj->toArray());

        $obj->setCrisp(1);

        $res13 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1];
        $this->assertEquals($res13, $obj->toArray());

        $obj->setCropThreshold(25);

        $res14 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25];
        $this->assertEquals($res14, $obj->toArray());

        $obj->setCursor("crosshair");

        $res15 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair"];
        $this->assertEquals($res15, $obj->toArray());

        $obj->setDataLabels(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsDataLabels());

        $res16 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => []];
        $this->assertEquals($res16, $obj->toArray());

        $obj->setDescription("67daf92c833c41c95db874e18fcb2786");

        $res17 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786"];
        $this->assertEquals($res17, $obj->toArray());

        $obj->setEnableMouseTracking(0);

        $res18 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0];
        $this->assertEquals($res18, $obj->toArray());

        $obj->setEvents(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsEvents());

        $res19 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => []];
        $this->assertEquals($res19, $obj->toArray());

        $obj->setExposeElementToA11y(1);

        $res20 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1];
        $this->assertEquals($res20, $obj->toArray());

        $obj->setFindNearestPointBy("xy");

        $res21 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy"];
        $this->assertEquals($res21, $obj->toArray());

        $obj->setGetExtremesFromAll(1);

        $res22 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1];
        $this->assertEquals($res22, $obj->toArray());

        $obj->setKeys(["keys" => "14f802e1fba977727845e8872c1743a7"]);

        $res23 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"]];
        $this->assertEquals($res23, $obj->toArray());

        $obj->setLinkedTo("914fab47afc86331ec62837807a29419");

        $res24 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419"];
        $this->assertEquals($res24, $obj->toArray());

        $obj->setMaxPointWidth(7);

        $res25 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7];
        $this->assertEquals($res25, $obj->toArray());

        $obj->setPoint(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsPoint());

        $res26 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => []];
        $this->assertEquals($res26, $obj->toArray());

        $obj->setPointDescriptionFormatter("b5fd0c15b3ca81f726e2c7b93907ba36");

        $res27 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36"];
        $this->assertEquals($res27, $obj->toArray());

        $obj->setRowsize(83);

        $res28 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83];
        $this->assertEquals($res28, $obj->toArray());

        $obj->setSelected(1);

        $res29 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1];
        $this->assertEquals($res29, $obj->toArray());

        $obj->setShadow(1);

        $res30 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1];
        $this->assertEquals($res30, $obj->toArray());

        $obj->setShowCheckbox(1);

        $res31 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1, "showCheckbox" => 1];
        $this->assertEquals($res31, $obj->toArray());

        $obj->setShowInLegend(0);

        $res32 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0];
        $this->assertEquals($res32, $obj->toArray());

        $obj->setSkipKeyboardNavigation(1);

        $res33 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 1];
        $this->assertEquals($res33, $obj->toArray());

        $obj->setStates(new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\Heatmap\HighchartsStates());

        $res34 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => []];
        $this->assertEquals($res34, $obj->toArray());

        $obj->setStickyTracking(1);

        $res35 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1];
        $this->assertEquals($res35, $obj->toArray());

        $obj->setTooltip(["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]);

        $res36 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"]];
        $this->assertEquals($res36, $obj->toArray());

        $obj->setTurboThreshold(100);

        $res37 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100];
        $this->assertEquals($res37, $obj->toArray());

        $obj->setVisible(1);

        $res38 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "visible" => 1];
        $this->assertEquals($res38, $obj->toArray());

        $obj->setZoneAxis("88421adabea658556aa3ab6c6181afad");

        $res39 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad"];
        $this->assertEquals($res39, $obj->toArray());

        $obj->setZones(["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]);

        $res40 = ["allowPointSelect" => 1, "animation" => 0, "animationLimit" => 26, "borderColor" => "97da935a74593c55d78be9d1295aa994", "borderRadius" => 92, "borderWidth" => 96, "className" => "6f66e878c62db60568a3487869695820", "color" => "70dda5dfb8053dc6d1c492574bce9bfd", "colorByPoint" => 0, "colorIndex" => 48, "colors" => ["colors" => "62848e3ce5804aa985513a7922ff87b2"], "colsize" => 4, "crisp" => 1, "cropThreshold" => 25, "cursor" => "crosshair", "dataLabels" => [], "description" => "67daf92c833c41c95db874e18fcb2786", "enableMouseTracking" => 0, "events" => [], "exposeElementToA11y" => 1, "findNearestPointBy" => "xy", "getExtremesFromAll" => 1, "keys" => ["keys" => "14f802e1fba977727845e8872c1743a7"], "linkedTo" => "914fab47afc86331ec62837807a29419", "maxPointWidth" => 7, "point" => [], "pointDescriptionFormatter" => "b5fd0c15b3ca81f726e2c7b93907ba36", "rowsize" => 83, "selected" => 1, "shadow" => 1, "showCheckbox" => 1, "showInLegend" => 0, "skipKeyboardNavigation" => 1, "states" => [], "stickyTracking" => 1, "tooltip" => ["tooltip" => "ddbfc1b6aa0ad4d79c5dac7aa3b44888"], "turboThreshold" => 100, "visible" => 1, "zoneAxis" => "88421adabea658556aa3ab6c6181afad", "zones" => ["zones" => "26f94136f5db8afd4e9df1e512f7fdc5"]];
        $this->assertEquals($res40, $obj->toArray());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj1 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(true);

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
        $this->assertNull($obj1->getColsize());
        $this->assertNull($obj1->getCrisp());
        $this->assertNull($obj1->getCropThreshold());
        $this->assertNull($obj1->getCursor());
        $this->assertNull($obj1->getDataLabels());
        $this->assertNull($obj1->getDescription());
        $this->assertNull($obj1->getEnableMouseTracking());
        $this->assertNull($obj1->getEvents());
        $this->assertNull($obj1->getExposeElementToA11y());
        $this->assertNull($obj1->getFindNearestPointBy());
        $this->assertNull($obj1->getGetExtremesFromAll());
        $this->assertNull($obj1->getKeys());
        $this->assertNull($obj1->getLinkedTo());
        $this->assertNull($obj1->getMaxPointWidth());
        $this->assertNull($obj1->getPoint());
        $this->assertNull($obj1->getPointDescriptionFormatter());
        $this->assertNull($obj1->getRowsize());
        $this->assertNull($obj1->getSelected());
        $this->assertNull($obj1->getShadow());
        $this->assertNull($obj1->getShowCheckbox());
        $this->assertNull($obj1->getShowInLegend());
        $this->assertNull($obj1->getSkipKeyboardNavigation());
        $this->assertNull($obj1->getStates());
        $this->assertNull($obj1->getStickyTracking());
        $this->assertNull($obj1->getTooltip());
        $this->assertNull($obj1->getTurboThreshold());
        $this->assertNull($obj1->getVisible());
        $this->assertNull($obj1->getZoneAxis());
        $this->assertNull($obj1->getZones());

        $obj0 = new \WBW\Bundle\HighchartsBundle\API\Chart\PlotOptions\HighchartsHeatmap(false);

        $this->assertEquals(false, $obj0->getAllowPointSelect());
        $this->assertEquals(true, $obj0->getAnimation());
        $this->assertNull($obj0->getAnimationLimit());
        $this->assertEquals("#ffffff", $obj0->getBorderColor());
        $this->assertEquals(0, $obj0->getBorderRadius());
        $this->assertEquals(1, $obj0->getBorderWidth());
        $this->assertNull($obj0->getClassName());
        $this->assertNull($obj0->getColor());
        $this->assertEquals(false, $obj0->getColorByPoint());
        $this->assertNull($obj0->getColorIndex());
        $this->assertNull($obj0->getColors());
        $this->assertEquals(1, $obj0->getColsize());
        $this->assertEquals(true, $obj0->getCrisp());
        $this->assertEquals(50, $obj0->getCropThreshold());
        $this->assertNull($obj0->getCursor());
        $this->assertNull($obj0->getDataLabels());
        $this->assertNull($obj0->getDescription());
        $this->assertEquals(true, $obj0->getEnableMouseTracking());
        $this->assertNull($obj0->getEvents());
        $this->assertNull($obj0->getExposeElementToA11y());
        $this->assertNull($obj0->getFindNearestPointBy());
        $this->assertEquals(false, $obj0->getGetExtremesFromAll());
        $this->assertNull($obj0->getKeys());
        $this->assertNull($obj0->getLinkedTo());
        $this->assertNull($obj0->getMaxPointWidth());
        $this->assertNull($obj0->getPoint());
        $this->assertNull($obj0->getPointDescriptionFormatter());
        $this->assertEquals(1, $obj0->getRowsize());
        $this->assertEquals(false, $obj0->getSelected());
        $this->assertEquals(false, $obj0->getShadow());
        $this->assertEquals(false, $obj0->getShowCheckbox());
        $this->assertEquals(true, $obj0->getShowInLegend());
        $this->assertNull($obj0->getSkipKeyboardNavigation());
        $this->assertNull($obj0->getStates());
        $this->assertEquals(true, $obj0->getStickyTracking());
        $this->assertNull($obj0->getTooltip());
        $this->assertEquals(1000, $obj0->getTurboThreshold());
        $this->assertEquals(true, $obj0->getVisible());
        $this->assertEquals("y", $obj0->getZoneAxis());
        $this->assertNull($obj0->getZones());
    }

}
